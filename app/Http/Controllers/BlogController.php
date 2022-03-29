<?php

namespace App\Http\Controllers;

use App\Models\Blog;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    function blog(Request $req)
    {
        $blog = new Blog;
        $blog->image=$req->input('image');
        $blog->profile=$req->input('profile');
        $blog->name=$req->input('name');
        $blog->date=$req->input('date');
        $blog->time=$req->input('time');
        $blog->description=$req->input('description');
        $blog->save();
        return $blog;
    }
}
