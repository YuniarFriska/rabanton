<?php

namespace App\Http\Controllers;

use App\Models\Highlight;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminHighlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Manage Highlights',
            'highlights' => Highlight::get(),
            'content' => 'admin/highlight/index',
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Add Highlight',
            'content' => 'admin/highlight/add',
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Handle Picture Upload
        if ($request->hasFile('picture')) {
            $picture = $request->file('picture');
            $fileName = time() . '-' . $picture->getClientOriginalName();
            $storagePath = 'uploads/highlights';
            $picture->move($storagePath, $fileName);
            $data['picture'] = $storagePath . '/' . $fileName;
        }

        Highlight::create($data);
        Alert::success('Success', 'Highlight added successfully');
        return redirect('/admin/highlight');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'title' => 'Edit Highlight',
            'highlight' => Highlight::findOrFail($id),
            'content' => 'admin/highlight/add',
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $highlight = Highlight::findOrFail($id);

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        // Handle Picture Upload
        if ($request->hasFile('picture')) {
            if ($highlight->picture != null && file_exists($highlight->picture)) {
                unlink($highlight->picture);
            }

            $picture = $request->file('picture');
            $fileName = time() . '-' . $picture->getClientOriginalName();
            $storagePath = 'uploads/highlights';
            $picture->move($storagePath, $fileName);
            $data['picture'] = $storagePath . '/' . $fileName;
        } else {
            $data['picture'] = $highlight->picture;
        }

        $highlight->update($data);
        Alert::success('Success', 'Highlight updated successfully');
        return redirect('/admin/highlight');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $highlight = Highlight::findOrFail($id);

        if ($highlight->picture != null && file_exists($highlight->picture)) {
            unlink($highlight->picture);
        }

        $highlight->delete();
        Alert::success('Success', 'Highlight deleted successfully');
        return redirect('/admin/highlight');
    }
}
