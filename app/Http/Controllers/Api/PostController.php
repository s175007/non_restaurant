<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::orderBy('id',$request->order_by)->limit($request->limit)->get();

        if(empty($posts)){
            return response()->json([],404);
        }

            return response()->json($posts,200);
    }

    public function where()
    {
        $posts = Post::where('user_id','3')->get();

        return response()->json($posts,200);
    }

    public function first()
    {
        $posts = Post::where('user_id','3')->first();

        return response()->json($posts,200);
    }

    public function limit($limit)
    {
        $posts = Post::limit($limit)->get();

        return response()->json($posts,200);
    }

    public function greaterThan()
    {
        $posts = Post::where('user_id','>','1')->limit(5)->get();

        return response()->json($posts,200);
    }

    public function getById($id)
    {
        $post = Post::find($id);

        if(empty($post)){
            return response()->json([],404);
        }

        return response()->json($post,200);
    }

    // public function short()
    // {
    //     $posts = Post::orderBy('id','asc')->get();

    //     if(empty($posts)){
    //         return response()->json([],404);
    //     }

    //         return response()->json($posts,200);
    // }

    public function short($short)
    {
        $posts = Post::orderBy('id',$short)->get();

        if(empty($posts)){
            return response()->json([],404);
        }

            return response()->json($posts,200);
    }

    public function sortParam(Request $request)
    {
        $posts = Post::orderBy('id',$request->sort_type)->get();

        if(empty($posts)){
            return response()->json([],404);
        }

            return response()->json($posts,200);
    }
}
