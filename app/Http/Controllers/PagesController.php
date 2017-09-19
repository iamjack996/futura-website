<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{

    public function getHome()
    {

        return view('pages.home');

    }

        public function getContact()
    {
    	return view('pages.contact');
    }

   	public function sendContact(Request $request)
    {
        

        $contactRules = array(
                'name'             => 'required',
                'email'            => 'required|email',
                'content'         => 'required'
            );

    
        $contactMessages = array(
            'required' => '這個 :attribute 必填',
            'email' => 'email 格式錯誤'
        );

        $contactValidator = Validator::make($request->all(), $contactRules, $contactMessages);
        if ($contactValidator->fails()) {
            $errors = $contactValidator->errors();
             return response()->json([
                'success' => false,
                'message' => $errors
            ], 422);
        }
        else {
            $contact = new contact($request->all());
             if($contact->save()){
                return response()->json([
                  'success' => true,
                  'message' => '我們已經受到您的回饋！'
             ], 200);
        }
    	

        }
       
    }
}