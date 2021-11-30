<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;

class BlogController extends Controller
{
    /**
     *
     * CRUD create,Read,Update,Delete
     * Display a listing of the resource.
     * //eesmärgiks näidata nimekirja
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs', compact('blogs'));

    }
    public function home() {

        $blogs = Blog::all();
        return view('index', compact ('blogs'));

    }
    public function onepost()
    {

        $blog = Blog::onepost();
        return view('blog', compact ('blog'));
}




    /**
     * Show the form for creating a new resource. Eesmärk näidata vormi millega uut blogipostitust luua
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage. Võtab postituse vastu
     *
     * @param  \App\Http\Requests\StoreBlogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogRequest $request)

    {
        $blog = new blog;
        $blog->name = $request-> name;
        $blog->save();

    }

    /**
     * Display the specified resource. Näitan ühte blogiposyitust
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('user.profile',[
            'user'=> Blog::findOrFail($blog) //tahaks panna siia blogi postituse ID'd... ja ühendada useriga?!
        ]);
    }

    /**
     * Show the form for editing the specified resource. Muutmis form
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $blog = blog::find('blog');
        return view('blog', compact ('blog'));
        $blog-> edit($blog);
        $blog ->save();
    }

    /**
     * Update the specified resource in storage. Võtab muudetud formi vastu
     *
     * @param  \App\Http\Requests\UpdateBlogRequest  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog= blog::find();
        $blog->destroy();
    }
}
