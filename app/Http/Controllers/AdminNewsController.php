<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminNewsController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Manajemen Berita',
            'news' => News::all(),
            'content' => 'admin/news/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Berita',
            'content' => 'admin/news/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'cover' => 'required|image'
        ]);

        // Upload Cover
        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $fileName = time() . '-' . $file->getClientOriginalName();
            $filePath = 'uploads/news';
            $file->move($filePath, $fileName);
            $data['cover'] = $filePath . '/' . $fileName;
        }

        News::create($data);
        Alert::success('Sukses', 'Berita berhasil ditambahkan');
        return redirect('/admin/news');
    }

    public function show($id)
    {
        $data = [
            'title' => 'Show News',
            'news' => News::findOrFail($id),
            'content' => 'admin/news/show'  
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Berita',
            'news' => News::findOrFail($id),
            'content' => 'admin/news/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);

        $data = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        if ($request->hasFile('cover')) {
            if ($news->cover && file_exists(public_path($news->cover))) {
                unlink(public_path($news->cover));
            }

            $file = $request->file('cover');
            $fileName = time() . '-' . $file->getClientOriginalName();
            $filePath = 'uploads/news';
            $file->move($filePath, $fileName);
            $data['cover'] = $filePath . '/' . $fileName;
        }

        $news->update($data);
        Alert::success('Sukses', 'Berita berhasil diperbarui');
        return redirect('/admin/news');
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);

        if ($news->cover && file_exists(public_path($news->cover))) {
            unlink(public_path($news->cover));
        }

        $news->delete();
        Alert::success('Sukses', 'Berita berhasil dihapus');
        return redirect('/admin/news');
    }
}
