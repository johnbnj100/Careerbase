<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function blog(){
        return view('resource.blog', [
            'blog' => Blog::latest()->SimplePaginate(4)
        ]);
    }

    public function createblog(){
        return view('components.createblog');
    }

    public function blogid($id){
        return view('resource.illustration', [
            'blogid' => Blog::find($id)
        ]);
    }

    public function storeblog(Request $request){
        $formfield = $request->validate([
            'topic' => 'required',
            'illustration' => 'required',
            'illustration2' => 'required',
            'category' => 'required',
        ]);

        if ($request->hasFile('image')){
            $formfield['image'] = $request->file('image')->store('image', 'public');
        }

        Blog::create($formfield);

        return redirect('/blog')->with('message', 'Job created successfully');
    }


}
