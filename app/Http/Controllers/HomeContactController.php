<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomeContactController extends Controller
{
    //
    function index()
    {
        $data = [
            'content' => 'home/index/'
        ];
        return view('home.index', $data);   
    }

    function send(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'email' => 'required'
        ]);

        Pesan::create($data);
        Alert::success('Success', 'Message send successfully');
        return redirect('/');
    }
}
