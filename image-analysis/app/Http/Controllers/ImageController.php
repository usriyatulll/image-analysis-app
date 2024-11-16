<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ImageController extends Controller
{
    public function index()
    {
        return view('upload');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        $image = $request->file('image');

        // Send the image file to the Flask API
        $response = Http::attach(
            'image', file_get_contents($image), $image->getClientOriginalName()
        )->post('http://127.0.0.1:5000/analyze-image');

        // Pass the response to the result view
        return redirect()->route('result')->with('data', $response->json());
    }

    public function result()
    {
        // Get the analysis results from the session
        $data = session('data');
        
        // Return the result view with the analysis data
        return view('result', compact('data'));
    }
}
