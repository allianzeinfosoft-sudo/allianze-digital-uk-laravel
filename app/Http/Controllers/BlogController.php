<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BlogController extends Controller
{
    //
    public function index(Request $request)
    {
        $base = env('WORDPRESS_API_URL', 'https://blog.dubaidataentry.com/wp-json/wp/v2');

        $search = $request->search;
        $category = $request->category;
        $tag = $request->tag;
        $page = $request->get('page', 1);

        // Posts
        $response = Http::get($base . '/posts?', [
            'search' => $search,
            'categories' => $category,
            'tags' => $tag,
            'per_page' => 6,
            'page' => $page,
            '_embed' => 1
        ]);
        
        $posts = $response->successful() ? $response->json() : [];
        $totalPages = $response->header('X-WP-TotalPages') ?? 0;

        if ($request->ajax()) {
            return view('blog.partials.posts', ['posts' => $posts])->render();
        }

        // Categories
        $categories = Http::get($base . '/categories')->json();
        $recent = Http::get($base . '/posts?per_page=3&_embed')->json();
        $tags = Http::get($base . '/tags')->json();

        $data['meta_title'] = 'Blog - Allianze Digital UK';
        $data['meta_description'] = 'Read the latest news, insights, and updates from Allianze Digital UK.';
        $data['posts'] = $posts;
        $data['categories'] = $categories;
        $data['recent'] = $recent;
        $data['tags'] = $tags;
        $data['totalPages'] = $totalPages;
        $data['currentPage'] = $page;
        $data['currentCategory'] = $category;
        $data['currentTag'] = $tag;
        $data['search'] = $search;

        return view('blog.index', $data);
    }

    public function show($slug)
    {
        $base = env('WORDPRESS_API_URL', 'https://blog.dubaidataentry.com/wp-json/wp/v2');

        $post = $post = Http::get($base . '/posts', [
            'slug' => $slug,
            '_embed' => true
        ])->json()[0] ?? null;
        $categories = Http::get($base . '/categories')->json();
        $recent = Http::get($base . '/posts?per_page=3&_embed')->json();
        $tags = Http::get($base . '/tags')->json();

        $data['meta_title'] = $post['title']['rendered'] . ' - Allianze Digital UK';
        $data['meta_description'] = strip_tags($post['excerpt']['rendered']);
        $data['post'] = $post;
        $data['categories'] = $categories;
        $data['recent'] = $recent;
        $data['tags'] = $tags;

        return view('blog.show', $data);
    }
}
