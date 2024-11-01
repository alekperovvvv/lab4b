<?php

namespace App\Http\Controllers;
use App\Models\Ad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdController extends Controller
{
    public function index()
    {
        $ads = Ad::all();
        return view('ads.index', compact('ads'));
    }

    public function create()
    {
        return view('ads.create'); 
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'contact_phone' => 'required|string|max:15', 
        ]);

        $ad = new Ad();
        $ad->title = $request->title;
        $ad->description = $request->description;
        $ad->contact_phone = $request->contact_phone;
        $ad->user_id = Auth::id(); 
        $ad->save();

        return redirect()->route('ads.index')->with('success', 'Cоздано успешно!');
    }

    public function myAds()
    {
        $ads = Ad::where('user_id', Auth::id())->get();
        return view('ads.my_ads', compact('ads'));
    }
}