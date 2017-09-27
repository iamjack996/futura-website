/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

global.jQuery = require('jquery');
var $ = jQuery;

global.Popper = require('popper.js');
require('bootstrap');

require('parsleyjs');
require('jquery-parallax.js');
require('noty');


$(document).ready(function() {
    $('#contactSend').click(function(e) {
        e.preventDefault();
        var contactData = $('#contactForm').serialize();
        $.ajax({
            type: 'POST',
            url: '/sendcontact',
            data: contactData,
            dataType: 'json',
            cache: false,
            success: function(response) {
                new Noty({
                    type: 'success',
                    layout: 'topCenter',
                    theme: 'mint',
                    text: response.message,
                    timeout: 2000,
                    closeWith: ['click', 'button'],
                    animation: {
                        open: 'noty_effects_open',
                        close: 'noty_effects_close'
                    },
                }).show();

                $('#contactForm')[0].reset();
            },
            error: function(xhr, status, response) {
                var error = jQuery.parseJSON(xhr.responseText);
                for (var errors in error.message) {

                    new Noty({
                        type: 'error',
                        layout: 'topCenter',
                        theme: 'mint',
                        text: "你的" + errors + "必須填寫",
                        timeout: 2000,
                        closeWith: ['click', 'button'],
                        animation: {
                            open: 'noty_effects_open',
                            close: 'noty_effects_close'
                        },
                    }).show();
                }



            }

        });
    });

    $('#loginSend').click(function(e) {
        e.preventDefault();
        
        $.ajax({
            type: 'POST',
            url: '/login',
                headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
            data: {email: $('#signEmail').val(), password: $('#signPassword').val(), remember: $('#remember-me').val()},
            dataType: 'json',
            cache: false,
            success: function(response) {
                window.location.replace(response.href);
            },
            error: function(xhr, status, response) {
                var error = jQuery.parseJSON(xhr.responseText);

                new Noty({
                    type: 'error',
                    layout: 'topCenter',
                    theme: 'mint',
                    text: error.message,
                    timeout: 1000,
                    animation: {
                        open : 'animated fadeInUp',
                        close: 'animated fadeOutUp'
                    },
                }).show();

            }
        });
    });





    if ($('.header-image-size')) {
        $('.header-image-size').parallax({
            imageSrc: '/images/home/header.jpg'
        });

        $(window).bind('scroll', function() {
            if ($(window).scrollTop() > 200) {
                $('.navbar').removeClass('navbar-noborder');
            } else {
                $('.navbar').addClass('navbar-noborder');
            }
        });
    } else {
        $('.navbar').removeClass('navbar-noborder').css('background', '#09d4f3');
    }


    if (window.location.pathname == '/login' || '/admin') {
        $('body').css('padding', '0');
    }


});

