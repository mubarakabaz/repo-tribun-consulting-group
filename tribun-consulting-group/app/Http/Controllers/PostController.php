<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function __construct(){
        // semua fungsi di PostController membutuhkan autentikasi
        $this->middleware('auth');

        // Middleware khusus admin untuk fungsi yang memerlukan hak akses tinggi
        $this->middleware('admin')->only(['delete', 'publish']);
    }

    public function index(){
        $user = Auth::user();

        // 1. Ambil semua post yang sudah di publish
        $publishedPosts = Posts::where('is_published', 1)
                             ->with('user')
                             ->latest()
                             ->get();
        // 2. Ambil semua draft post (hanya milik user yang sedang login)
        $draftsPosts = Posts::where('user_id', $user->id)
                            ->where('is_published', 0)
                            ->with('user')
                            ->latest()
                            ->get();

        return view('posts.index', compact('publishedPosts', 'draftsPosts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|string|max:255',
            // 'slug' => 'nullable|string|max:255|',
            'excerpt' => 'nullable|string|max:500',
            'body' => 'required|string',
            // validasi untuk gambar unggulan
            'featured_image' => 'nullable|image|max:2048',
        ]);

        $user = Auth::user();

        // handler untuk memastikan excerpt tidak melebihi 500 karakter
        $excerpt = $request->excerpt;
        if ($excerpt && strlen($excerpt) > 500){
            $excerpt = Str::words($request->body, 500, '...');
        }

        // pembuatan slug unik
        $inputSlug = Str::slug($request->title);
        $slug = $inputSlug;
        $count = 1;

        while(Posts::where('slug', $slug)->exists()){
            $slug = $inputSlug . '-' . $count++;
        }

        // proses unggah gambar unggulan jika ada
        $imagePath = null;
        if($request->hasFile('featured_image')){
            // simpan gambar di folder 'public/featured_images'
            $imagePath = $request->file('featured_image')->store('posts', 'public/artikel');
        }

        // penentuan status publish atau draft
        $isPublished = 0; // default draft
        if ($user->isAdmin() && $request->has('publish')){
            $isPublished = 1; // jika admin dan pilih publish
        }

        // simpan data post ke database
        $post = Posts::create([
            'user_id' => $user->id,
            'title' => $request->title,
            'slug' => $slug,
            'excerpt' => $excerpt,
            'body' => $request->body,
            'featured_image' => $imagePath,
            'is_published' => $isPublished,
        ]);

        $message = $post->is_published ? 'Artikel berhasil dipublikasikan!' : 'Draft artikel berhasil disimpan sebagai draft!';

        return redirect()->route('posts.index')->with('success', $message);

    }

    public function show(Posts $post){
        // otorisasi melihat draft
        if($post->is_published == 0){
            if(!Auth::user()->isAdmin() && $post->user_id != Auth::id()){
                abort(403, 'Akses Ditolak. Akrtikel ini adalah Draft.');
            }
        }

        return view('posts.show', compact('post'));
    }

    public function edit(Posts $post){
        // otorisasi mengedit draft : hanya Admin atau pemilik post
        if(!Auth::user()->isAdmin() && $post->user_id != Auth::id()){
            abort(403, 'Akses Ditolak. Anda tidak memiliki izin untuk mengedit artikel ini.');
        }

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Posts $post){
        // otorisasi memperbaharui draft : hanya Admin atau pemilik post
        if(!Auth::user()->isAdmin() && $post->user_id != Auth::id()){
            abort(403, 'Akses Ditolak. Anda tidak memiliki izin untuk memperbaharui artikel. Silahkan hubungi Admin.');
        }

        $request->validate([
            'tiitle' => 'required|string|max:255',
            'body' => 'required|string',
            'featured_image' => 'nullable|image|max:2048',
        ]);

        $user = Auth::user();

        // Handler untuk memastikan excerpt tidak melebihi 500 karakter
        $excerpt = $request->excerpt;
        if($excerpt && strlen($excerpt) > 500){
            $excerpt = Str::words($request->body, 500, '');
        }

        // pembuatan slug unik jika judul diubah
        $inputSlug = Str::slug($request->title);
        $slug = $post->slug;

        // hanya update slug jika judul diubah
        if($request->title !== $post->title){
            $slug = $inputSlug;
            $count = 1;

            while(Posts::where('slug', $slug)->where('id', '!=', $post->id)->exists()){
                $slug = $inputSlug . '-' . $count++;
            }
        }

        // Penanganan File Upload Gambar Unggulan saat update
        $imagePath = $post->featured_image;
        if($request->hasFile('featured_image')){
            // skenario A: Ganti gambar unggulan
            if($post->featured_image){
                Storage::disk('public/artikel')->delete($post->featured_image);
            }
            // simpan gambar baru
            $imagePath = $request->file('featured_image')->store('posts', 'public/artikel');
        } elseif ($request->has('clear_featured_image') && $post->featured_image){
            // skenario B: hapus gambar (tidak ada file baru diunggah)

            // hapus gambar lama dari storage
            Storage::disk('public/artikel')->delete($post->featured_image);
            $imagePath = null; // set path di database ke null
        }

        // Skenario C : Tetap (tidak ada file baru di upload & tidak ada permintaan clear)
        // Dalam hal ini, $imagePath tetap menggunakan $post->featured_image (default)

        // Penentuan Status PUBLISH saat update
        $isPublished = $post->is_published; // default tetap seperti semula
        if($user->isAdmin()){
            $isPublished = $request->has('is_published') ? 1 : 0;
        }

        $post->update([
            'title' => $request->title,
            'slug' => $slug,
            'excerpt' => $excerpt,
            'body' => $request->body,
            'featured_image' => $imagePath,
            'is_published' => $isPublished,
        ]);

        $message = $isPublished ? 'Artikel berhasil diperbarui dan dipublikasikan!' : 'Artikel berhasil diperbaharui dan disimpan sebagai draft!';
        return redirect()->route('posts.index')->with('success', $message);
    }

    public function delete(Posts $post){
        // otorisasi menghapus post : hanya Admin
        if(!Auth::user()->isAdmin() && $post->user_id != Auth::id()){
            abort(403, 'Akses Ditolak. Anda tidak memiliki izin untuk menghapus artikel ini.');
        }

        // hapus file gambar dari storage
        if($post->featured_image){
            Storage::disk('public/artikel')->delete($post->featured_image);
        }

        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Artikel berhasil dihapus.');
    }

    public function publish(Posts $post){
        if($post->is_published == 0){
            $post->is_published = 1;
            $post->save();

            return redirect()->back()->with('success', 'Artikel berhasil dipublikasikan!.');
        }

        return redirect()->back()->with('info', 'Artikel sudah dalam status dipublikasikan.');
    }

}
