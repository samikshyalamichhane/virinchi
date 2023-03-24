<?php

namespace Modules\Faq\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Modules\Faq\Entities\Faq;

class FaqController extends Controller
{
    use ValidatesRequests;
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $faqs = Faq::orderBy('updated_at', 'DESC')->paginate(10000);
        return view('faq::index',compact('faqs'));
    }

    public function create()
    {
        return view('faq::create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'question' => 'required',
            'answers' => "required",
        ]);
        try {
            $blog = new Faq();
            $blog->question = $request->question;
            $blog->answers = $request->answers;
            $blog->publish = $request->publish ? 1 : 0;
            $blog->save();
            return redirect()->route('faq.index')->with('success', 'Faq created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function show($id)
    {
        return view('faq::show');
    }

    public function edit($id)
    {
        $faq = Faq::findOrFail($id);
        return view('faq::edit',compact('faq'));
    }

    public function update(Request $request, $id)
    {
        $blog =  Faq::findOrFail($id);
        $this->validate($request, [
            'question' => 'required',
            'answers' => "required",
        ]);
        try {

            $blog->question = $request->question;
            $blog->answers = $request->answers;
            $blog->publish = $request->publish ? 1 : 0;
            
            $blog->save();
            return redirect()->route('faq.index')->with('success', 'Blog updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $blog = Faq::findOrFail($id);
        $blog->delete();
        return redirect()->route('faq.index')->with('success', 'Faq deleted successfully');
    }
}
