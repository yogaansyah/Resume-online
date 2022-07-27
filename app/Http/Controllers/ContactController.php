<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function sendemail(Request $request)
    {
        // $val = $request->validate([
        //     'name' => 'required',
        //     'phone' => 'required|numeric',
        //     'email' => 'required|email',
        //     'subject' => 'required',
        //     'message' => 'required',
        // ]);

        // $data = [
        //     'name' => $request->name,
        //     'phone' => $request->phone,
        //     'email' => $request->email,
        //     'subject' => $request->subject,
        //     'message' => $request->message,
        // ];

        // Mail::to('yogahendriansyah@gmail.com')->send(new ContactMail($data));

        // return back();

        $validator = $request->validate([
                'name' => 'required',
                'phone' => 'required|numeric',
                'email' => 'required|email',
                'subject' => 'required',
                'message' => 'required',
            ]);


            $data = [
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ];

            $query = Mail::to('yogahendriansyah@gmail.com')->send(new ContactMail($data));
            if ($query) {
                return response()->json([
                    'status' => 1,
                    'message' => 'Added Contact Records'
                ]);
            }



    }
}
