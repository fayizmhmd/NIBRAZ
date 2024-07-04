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
    

    // public function viewcontactform()
    // {
    //     $contactForms = ContactForm::latest()->paginate(6);
    //     return view('frontend.contactform', compact('contactForms'));
    // }

    // public function contactmail(Request $request)
    // {
    //     $data = new ContactForm();


    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|max:255',
    //         'phone' => 'required|numeric',
    //         'subject' => 'required|string|max:1000',
    //     ]);

    //     $data->name = $request->name;
    //     $data->mail = $request->email;
    //     $data->email = $request->email;
    //     $data->phone = $request->phone;
    //     $data->subject = $request->subject;
    //     // $data->message = $request->message; // Uncomment if message field is required

    //     $data->save();

    //     Mail::to('fayizklr192@gmail.com')->send(new ContactFormMail($request->all()));

    //     return redirect()->back()->with('success', 'Message sent successfully!');
    // }

    public function viewcontact(){
        $mail_lists=MailList::all();
        return view('admin.mail_list.contactuslist',compact('mail_lists'));
    }
}
