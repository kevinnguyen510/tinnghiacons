<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //Get all post
    public function all_post() {
        $posts = DB::table('post')->get();

        return view('admin.all_post')->with([
            'posts' => $posts
        ]);
    }
    //Add new post
    public function add_post() {
        $categories = DB::table('category')->get();
        return view('admin.add_post')->with(['categories'=>$categories]);
    }
    public function post_add_post(Request $request) {
        $title = $request->input('txtTitle');
        $authorId = $request->input('txtAuthorId');
        $category = $request->input('txtCategory');
        $slug = $request->input('txtSlug');
        $image = $request->input('txtImage');
        $content = $request->input(('txtContent'));
        DB::table('post')->insert([
            'post_name' => $title,
            'authorId' => $authorId,
            'post_slug' => $slug,
            'post_image' => $image,
            'post_content' => $content
        ]);
        return redirect('all_post');
    }
    //Delete post
    public function delete_post($id) {
        $b = DB::table('post') ->where('post_id', intval($id))->delete();
        return redirect() -> action('PostController@index');
    }
}
