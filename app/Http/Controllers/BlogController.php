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
        $blogs = Blog::all();                            //fetch all blog posts from DB
        return view('blogs', compact('blogs'));         //returns the fetched

    }
    public function home() {

        $blogs = Blog::all();
        return view('index', compact ('blogs'));

    }

    public function blog() {

        $blogs = Blog::all();
        return view('blogs', compact ('blogs'));
    }


    // public function index2()
    // {
    //     $blogs = Blog::all();
    //     return view('admin', ['blogs' => $blogs,
    //     ]);
    // }

    /**
     * Show the form for creating a new resource. Eesmärk näidata vormi millega uut blogipostitust luua
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('new');
    }

    /**
     * Store a newly created resource in storage. Võtab postituse vastu
     *
     * @param  \App\Http\Requests\StoreBlogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogRequest $request)

    {
       $newBlog = Blog::create([
           'title'=> $request->title,
           'body' => $request->body,

       ]);

       return redirect('blog/'. $newBlog->id);

    }

    /**
     * Display the specified resource. Näitan ühte blogiposyitust
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('show', [
            'blog' => $blog,
        ]);
    }
    public function show2(Blog $blog)
    {
        return view('show2', [
            'blog' => $blog
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
        return view('edit', [
            'blog' => $blog,
        ]);

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
        $blog->update([
            'title' => $request->title,
            'body' => $request-> body
        ]);
        return redirect('admin/'. $blog->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog-> delete();
        return redirect('/admin');
    }
}
