/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./js/bootstrap');
require('noty');
require('./js/ie10-viewport-bug-workaround');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));

// const app = new Vue({
//     el: '#app'
// });



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
        var loginData = $('#loginForm').serialize();
        $.ajax({
            type: 'POST',
            url: '/login',
            data: loginData,
            dataType: 'json',
            cache: false,
            success: function(response){
                window.location.replace(response.href);
            },
            error: function(xhr, status, response) {
            var error = jQuery.parseJSON(xhr.responseText);
              
                new Noty({
                        type: 'error',
                        layout: 'topCenter',
                        theme: 'mint',
                        text: error.message,
                        timeout: 2000,
                        closeWith: ['click', 'button'],
                        animation: {
                            open: 'noty_effects_open',
                            close: 'noty_effects_close'
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