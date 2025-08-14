<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Hiển thị trang blog tổng hợp, hoặc danh sách bài viết theo một danh mục cụ thể.
     * Phương thức này sẽ xử lý cho cả route '/blog' và '/{category:slug}'
     */
    public function index(Category $category = null)
    {
        // Bắt đầu một query mới
        $query = Post::where('is_active', true)->orderBy('published_at', 'desc');

        // Nếu có một danh mục được truyền vào từ route (vd: người dùng vào /huong-dan)
        if ($category) {
            // Lấy các bài viết thuộc danh mục đó
            $query->whereHas('categories', function ($q) use ($category) {
                $q->where('id', $category->id);
            });
            $pageTitle = $category->name;
        } else {
            // Nếu không có danh mục (người dùng vào /blog), lấy tất cả bài viết
            $pageTitle = 'Blog';
        }

        $posts = $query->paginate(12);

        return view('posts.index', compact('posts', 'pageTitle', 'category'));
    }

    /**
     * Hiển thị chi tiết một bài viết.
     * Phương thức này xử lý cho route '/bai-viet/{post:slug}'
     */
    public function show(Post $post)
    {
        if (!$post->is_active) {
            abort(404);
        }
        
        // Eager load các quan hệ để tối ưu query
        $post->load('categories', 'tags');

        return view('posts.show', compact('post'));
    }
    public function indexByTag(Tag $tag)
    {
        $query = $tag->posts()
                     ->where('is_active', true)
                     ->orderBy('published_at', 'desc');

        $posts = $query->paginate(12);
        $pageTitle = 'Bài viết với tag: ' . $tag->name;

        return view('posts.index', compact('posts', 'pageTitle'));
    }
}