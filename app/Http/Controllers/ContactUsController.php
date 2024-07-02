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
    // public function ContactUs()
    // {
    //     $phone_number = Setting::where('key', 'phone_number')->first()->value;
    //     $mail_id = Setting::where('key', 'mail_id')->first()->value;
    //     $facebook = Setting::where('key', 'facebook')->first()->value;
    //     $instagram = Setting::where('key', 'instagram')->first()->value;
    //     $whatsapp = Setting::where('key', 'whatsapp')->first()->value;
    //     $youtube = Setting::where('key', 'youtube')->first()->value;

    //     return view('frontend.contactus', compact('phone_number', 'mail_id', 'facebook', 'instagram', 'whatsapp', 'youtube'));
    // }

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
