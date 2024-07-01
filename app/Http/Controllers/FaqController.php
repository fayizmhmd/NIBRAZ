<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\College;
use App\Models\FAQ;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function viewFAQ()
    {
        $faqs = FAQ::all();
        return view('admin.Faqs.viewfaq', compact('faqs'));
    }

    public function addFAQ()
    {
        $faqs = FAQ::all();
        $colleges = College::pluck('name', 'id');
        return view('admin.Faqs.addfaq', compact('faqs', 'colleges'));
    }

    public function saveFAQ(Request $request)
    {
        $input = $request->all();
        $post = FAQ::create([
            'college_id' => $request->college_id,
            'question' => $request->question,
            'answer' => $request->answer,
        ]);
        return redirect()->route('admin.viewFAQ')->with('success', 'FAQ added successfully');
    }

    public function editFAQ($id)
    {
        $faq = FAQ::find($id);
        $colleges = College::pluck('name', 'id');
        return view('admin.Faqs.editfaq', compact('faq', 'id','colleges'));
    }


    public function updateFAQ(Request $request, $id)
    {
        $faq = FAQ::findOrFail($id);
        $faq->college_id = $request->college_id;
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();
        return redirect()->route('admin.viewFAQ')->with('success', 'FAQs updated successfully');
    }

    public function deleteFAQ($id)
    {
        $faq = FAQ::findOrFail($id);
        $faq->delete();
        return redirect()->route('admin.viewFAQ')->with('success', 'FAQs deleted successfully');
    }
}
