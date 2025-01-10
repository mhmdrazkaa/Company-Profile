<?php
namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Gallery;
use App\Models\Post;
use App\Models\Category;
use App\Models\Videos;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request)
{
    // Ambil ID kategori dari request
    $categoryId = $request->get('category_id');

    // Jika kategori dipilih, filter post berdasarkan kategori
    $posts = Post::when($categoryId, function ($query, $categoryId) {
        return $query->where('category_id', $categoryId);
    })->latest()->get();

    $categories = Category::all();
    $pegawais = Pegawai::all();
    $videos = Videos::all();
    $galleries = Gallery::all();

    return view('companymain', compact('posts', 'categories', 'pegawais', 'videos','galleries'));
}

public function gallery()
{
    $galleries = Gallery::all(); // Data from the Gallery table
    $posts = Post::all();        // Data from the Post table
    return view('companymain', compact('galleries', 'posts'));
}



    // Menampilkan detail post
    public function show($id)
    {
        $post = Post::findOrFail($id); // Ambil post berdasarkan ID
        return view('index', compact('post')); // Kirim data post ke view
    }

    // Menampilkan post berdasarkan kategori
    public function category($id)
    {
        // Cari kategori berdasarkan ID
        $category = Category::findOrFail($id);

        // Ambil semua posts berdasarkan kategori yang dipilih
        $posts = $category->posts()->latest()->get();

        // Kembalikan tampilan dengan data kategori dan posts
        return view('category.show', compact('category', 'posts'));
    }
    // Mendapatkan post berdasarkan kategori melalui API
    public function getPostsByCategory($id = null)
    {
        if ($id) {
            // Validasi dan ambil data post berdasarkan kategori
            $category = Category::findOrFail($id);

            // Ambil post berdasarkan kategori
            $posts = $category->posts()->latest()->get();
        } else {
            // Jika ID kategori tidak diberikan, ambil semua post
            $posts = Post::latest()->get();
        }

        // Kembalikan response JSON
        return response()->json($posts);
    }

}
