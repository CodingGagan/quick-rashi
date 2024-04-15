<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $all = Blog::where(['status' => 2])->get();

        return view('pages.blog', ['blog' => $all]);
    }

    public function detail($id)
    {
        $detail = Blog::where(['id' => $id])->get();

        return view('pages.blog_detail', ['blog' => $detail]);
    }

    public function save(Request $request)
    {
        if ($request->all()) {


            $filename = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images'), $filename);

            $data = [
                'title' => $request->title,
                'description' => $request->desc,
                'image' => $filename,
                'created_at' => Carbon::now()->toDateString()
            ];

            Blog::create($data);

            return redirect()->route('user_blog_detail');
        }
    }
}
