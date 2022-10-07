<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Barryvdh\DomPDF\Facade\Pdf;

class ContactController extends Controller
{
    public function sendemail(Request $request)
    {
        // dd($request);
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

        $request->validate([
            'name' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required'
        ]
    );


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
        // dd($validator);
    }

    public function pdf()
    {
        $pdf = Pdf::loadView('layout.pdf');
        return $pdf->download('Resume-yoga.pdf');
        // return view('layout.pdf2');
    }
}
