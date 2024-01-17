<?php

namespace App\Http\Controllers;

use App\Models\articol;
use Illuminate\Http\Request;

class articolController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->query('category', 'all');

        if ($category === 'all') {
            $articles = articol::all();
        } else {
            $articles = articol::where('category', $category)->get();
        }

        return view('articole.index', ['articles' => $articles, 'selectedCategory' => $category]);
    }

    public function create()
    {
        return view('articole.create');
    }

    public function edit(Request $request)
    {
        $id = $request->query('id');
        $article = Articol::findOrFail($id);
        return view('articole.edit', compact('article'));
    }

    public function LogOut()
    {
        return view('articole.LogOut');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'category' => 'required',
            'content' => 'required',
        ]);

        // Create a new Article instance and set its attributes
        $article = new articol;
        $article->title = $validatedData['title'];
        $article->category = $validatedData['category'];
        $article->content = $validatedData['content'];

        // Save the article to the database
        $article->save();

        return redirect()->route('articles.index');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'category' => 'required',
        ]);
    
        $article = Articol::findOrFail($id);
    
        // Update content and other fields as needed
        $article->content = $validatedData['content'];
    
        // Save the changes
        $article->save();
    
        return redirect()->route('articles.index')->with('success', 'Article updated successfully!');
    }


}
