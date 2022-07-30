<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class HalamanUtamaController extends Controller
{
    public function food_and_drink()
    {
        $data = produk::where('jenis', "Food And Drink")->get();
        return view('utama.food', ["data" => $data]);
    }
    public function electronic()
    {
        $data = produk::where('jenis', "Electronic")->get();
        return view('utama.electronic', ["data" => $data]);
    }
    public function fashion()
    {
        $data = produk::where('jenis', "Fashion")->get();
        return view('utama.fashion', ["data" => $data]);
    }
}
