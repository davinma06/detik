<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Auth;
use Storage;

class ArticleController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('article');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $request->validate([
            'article_title' => 'required',
            'article_content' => 'required',
            'article_thumbnail' => 'image'
        ]);

        $uploadedFile = $request->file('article_thumbnail');
        $path = $uploadedFile->store('public/files');

        $data = new Article();
        $data->article_title = $request->article_title;
        $data->article_content = $request->article_content;
        $data->article_image_preview = $path;
        $data->views = 0;
        $data->created_id = Auth::user()->id;
        $data->save();

        return redirect('/home')->with('success', 'Data saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $data = Article::find($id);
        return view('article', ["data" => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $request->validate([
            'article_title' => 'required',
            'article_content' => 'required',
            'article_thumbnail' => 'image'
        ]);
        $data = Article::find($id);
        
        if ($request->hasFile('article_thumbnail')) {
            unlink(storage_path('app/'.$data->article_image_preview));
            $uploadedFile = $request->file('article_thumbnail');
            $path = $uploadedFile->store('public/files');
        }
        else{
            $path = $data->article_image_preview;
        }

        $data->article_title = $request->article_title;
        $data->article_content = $request->article_content;
        $data->article_image_preview = $path;
        $data->update();
        
        return redirect('/home')->with('success', 'Data updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $data = Article::find($id);
        $data->delete();

        return redirect('/home')->with('success', 'Data deleted!');
    }

}
