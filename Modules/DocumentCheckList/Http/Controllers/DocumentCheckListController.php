<?php

namespace Modules\DocumentCheckList\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\DocumentCheckList\Entities\DocumentCheckList;
use Illuminate\Foundation\Validation\ValidatesRequests;

class DocumentCheckListController extends Controller
{
    use ValidatesRequests;
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $details = DocumentCheckList::orderBy('updated_at', 'DESC')->paginate(10000);
        return view('documentchecklist::index',compact('details'));
    }

    public function create()
    {
        return view('documentchecklist::create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => "required",
        ]);
        try {
            $blog = new DocumentCheckList();
            $blog->title = $request->title;
            $blog->description = $request->description;
            $blog->publish = $request->publish ? 1 : 0;
            $blog->save();
            return redirect()->route('document-check-list.index')->with('success', 'document-check-list created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function show($id)
    {
        return view('documentchecklist::show');
    }

    public function edit($id)
    {
        $detail = DocumentCheckList::findOrFail($id);
        return view('documentchecklist::edit',compact('detail'));
    }

    public function update(Request $request, $id)
    {
        $blog =  DocumentCheckList::findOrFail($id);
        $this->validate($request, [
            'title' => 'required',
            'description' => "required",
        ]);
        try {

            $blog->title = $request->title;
            $blog->description = $request->description;
            $blog->publish = $request->publish ? 1 : 0;
            
            $blog->save();
            return redirect()->route('document-check-list.index')->with('success', 'document-check-list updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $blog = DocumentCheckList::findOrFail($id);
        $blog->delete();
        return redirect()->route('document-check-list.index')->with('success', 'document-check-list deleted successfully');
    }
}
