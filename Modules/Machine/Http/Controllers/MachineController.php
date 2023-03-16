<?php

namespace Modules\Machine\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Machine\Entities\Machine;

class MachineController extends Controller
{
    public function index()
    {
        $machines = Machine::orderBy('updated_at', 'DESC')->paginate(10000);
        return view('machine::index',compact('machines'));
    }

    public function create()
    {
        return view('machine::create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:500',
            'description' => "required",
            'image' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:5000'
        ]);
        try {
            $machine = new Machine();
            $machine->title = $request->title;
            $machine->description = $request->description;
            $machine->publish = $request->publish ? 1 : 0;
            $machine->short_description = $request->short_description;
            if ($request->hasFile('image')) {
                $file = $request->image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('public/machine', $filename);
                $machine->image = $path;
            }
            $machine->save();
            return redirect()->route('machines.index')->with('success', 'Machines created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function show($id)
    {
        return view('machine::show');
    }

    public function edit($id)
    {
        $machine = Machine::findOrFail($id);
        return view('machine::edit', compact('machine'));
    }

    public function update(Request $request, $id)
    {
        $machine =  Machine::findOrFail($id);
        $request->validate([
            'title' => 'required|max:500',
            'description' => "required",
            'image' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:5000'
        ]);
        try {

            $machine->title = $request->title;
            $machine->description = $request->description;
            $machine->publish = $request->publish ? 1 : 0;
            $machine->short_description = $request->short_description;
            if ($request->hasFile('image')) {
                $file = $request->image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('public/machine', $filename);
                $machine->image = $path;
            }
            $machine->save();
            return redirect()->route('machines.index')->with('success', 'Machine updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $machines = Machine::findOrFail($id);
        $machines->delete();
        return redirect()->route('machines.index')->with('success', 'Machines deleted successfully');
    }
}
