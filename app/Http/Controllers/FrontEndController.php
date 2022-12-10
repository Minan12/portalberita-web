<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Galeri;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    // Index page
    public function index()
    {
        // $artikel = Artikel::with('artikel')->paginate(4);

        $artikel = Artikel::paginate(4);
        return view('front.home', [
            'artikel' => $artikel
        ]);
    }

    //Detail Artikel
    public function detail($judul)
    {
        $artikel = Artikel::where('judul', $judul)->first();

        return view('front.artikel.detail-artikel', [
            'artikel' => $artikel
        ]);
    }

    //TentangSaya Page
    public function tentang()
    {
        return view('front.layouts.tentangSaya');
    }

    //Contact Page
    public function contact()
    {
        return view('front.layouts.contact');
    }

    //Berita Page
    public function berita()
    {
        $artikel = Artikel::paginate(12);
        return view('front.beritadanO', [
            'artikel' => $artikel
        ]);
    }

    //Galeri Page
    public function galerii()
    {
        $galeri = Galeri::paginate(12);
        return view('front.galerihome', [
            'galeri' => $galeri
        ]);
    }
}
