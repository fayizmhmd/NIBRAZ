<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use App\Models\ContactForm;
use App\Models\MailList;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{

    public function viewcontact(){
        $mail_lists=MailList::all();
        return view('admin.mail_list.contactuslist',compact('mail_lists'));
    }

    public function savecontact(Request $request){
// dd($request->all());
        $mail                     = new MailList();
        $mail->name              = $request->name;
        $mail->email              = $request->email;
        $mail->phone              = $request->phone;
        $mail->message              = $request->message;

        $mail->save();

        return redirect()->route('front.ContactUs');

    }
}
