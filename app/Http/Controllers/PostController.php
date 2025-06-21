<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $toolTag = Tag::where('slug', 'tool')->first(); // Tìm tag "tool" (có thể null)
        $posts = Post::where('is_active', 1);

        if ($toolTag) {
            $posts = $posts->whereDoesntHave('tags', function ($query) use ($toolTag) {
                $query->where('id', $toolTag->id);
            });
        }

        $posts = $posts->paginate(10);

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function tools()
    {
        $toolTag = Tag::where('slug', 'tool')->firstOrFail();
        $posts = $toolTag->posts()->where('is_active', 1)->paginate(10); // Chỉ lấy các bài viết đang hoạt động
    
        // Truyền dữ liệu chi tiết hơn (nếu cần)
        $posts->each(function ($post) {
            // Ví dụ: Load thêm các mối quan hệ liên quan
            $post->load('categories', 'tags');
        });
    
        return view('posts.tools', compact('posts'));
    }
}