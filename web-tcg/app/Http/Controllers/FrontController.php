<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FrontController extends Controller {
    public function index(){
        return view('frontend.main');
    }

    public function about(){
        return view('frontend.contents.about');
    }

    public function pelatihan(){
        return view('frontend.contents.pelatihan');
    }

    public function kontak(){
        return view('frontend.contents.kontak');
    }

    public function artikel(){
        return view('frontend.contents.services.blog-grid');
    }

    public function servicesSeo(){
        return view('frontend.contents.services.seo');
    }

    // public function servicesSosmed(){
    //     return view('frontend.contents.blog.sosmed');
    // }

    public function servicesWeb(){
        return view('frontend.contents.services.website');
    }

    public function servicesAds(){
        return view('frontend.contents.services.ads');
    }

    public function servicesContentMarketing(){
        return view('frontend.contents.services.content-marketing');
    }

    public function servicesVisualBranding(){
        return view('frontend.contents.services.visual-branding');
    }

    public function subscribeStore(Request $request){
        // 1. Validasi input
        $validator = Validator::make($request->all(),[
            'email' => 'required|email|unique:subscribers,email',
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // 2. Simpan ke Database
        try {
            // Asumsikan Anda memiliki Model Subscriber dan tabel 'subscribers'
            Subscriber::create([
                'email' => $request->email,
                // Tambahkan field lain jika ada, misalnya: 'status' => 'active'
            ]);

            return redirect()->back()->with('success', 'Terima kasih telah berlangganan!');

        } catch (\Exception $e) {
            // Handle error jika penyimpanan gagal (misalnya, masalah koneksi DB)
            return redirect()->back()->with('error', 'Gagal berlangganan. Silakan coba lagi nanti.');
        }
    }
}
