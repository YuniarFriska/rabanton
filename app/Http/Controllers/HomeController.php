<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Highlight;
use App\Models\News;
use App\Models\Product;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $data = [
            'about' => About::first(),
            'service' => Service::limit(4)->get(),
            'news' => News::limit(4)->get(),
            'products' => Product::all(),
            'highlights' => Highlight::all(), 
            'content' => 'home/index',
            'sliders' => Slider::all(),
        ];
        return view('home.index', $data);
    }

    public function productDetail($id)
{
    $product = Product::findOrFail($id);
    return view('home.home.product_detail', compact('product'));
}

public function newsDetail($id)
{
    $news = News::findOrFail($id);
    return view('home.home.newsdetail', compact('news'));
}
}
