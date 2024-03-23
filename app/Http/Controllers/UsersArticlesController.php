<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.articles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'title' => ['required', 'string','max:255'],
            'body' => ['required', 'string','max:4320'],
            'image' => 'image','max:2048'
        ],[
            'title' => "Heading can't be empty",
            'body' => "Content field is required",
        ]);
        // check for image
        if ($request->hasFile('image')) {
            $file = $request->file('image')->getClientOriginalName();
            $filename = $file.'.'.time();
            $path = $request->file('image')->storeAs('images',$filename,'public');
        } else {
            $filename = "noimage";
        }
        Article::create([
            'user_id' => Auth::user()->id,
            'created_at' => now(),
            'updated_at' => now(),
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'image' => $filename,
        ]);
        return redirect()->route('users/articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
