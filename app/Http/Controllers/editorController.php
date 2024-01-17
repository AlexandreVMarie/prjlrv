<?php

namespace App\Http\Controllers;

use App\Models\articol;
use Illuminate\Http\Request;

class editorController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->query('category', 'all');

        if ($category === 'all') {
            $articles = articol::all();
        } else {
            $articles = articol::where('category', $category)->get();
        }

        return view('editori.index', ['articles' => $articles, 'selectedCategory' => $category]);
    }

    public function feedback()
    {
        return view('editori.feedback');
    }
}