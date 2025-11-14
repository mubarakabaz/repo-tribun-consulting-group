@extends('layouts.app')

@section('content')

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Tulis Artikel Baru</h3>
                </div>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Tambahkan enctype="multipart/form-data" untuk file upload -->
                    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- Judul Artikel -->
                        <div class="form-group mb-3">
                            <label for="title" class="form-label font-weight-bold">Judul Artikel <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
                            <small class="form-text text-muted">Slug akan dibuat otomatis berdasarkan Judul ini.</small>
                        </div>

                        <!-- Slug dihilangkan karena otomatis dari Judul -->

                        <!-- Cuplikan (Excerpt) -->
                        <div class="form-group mb-3">
                            <label for="excerpt" class="form-label font-weight-bold">Cuplikan (Excerpt)</label>
                            <textarea class="form-control" id="excerpt" name="excerpt" rows="2" maxlength="500">{{ old('excerpt') }}</textarea>
                            <small class="form-text text-muted">Maksimal 500 karakter.</small>
                        </div>

                        <!-- Gambar Unggulan (File Input BARU) -->
                        <div class="form-group mb-3">
                            <label for="featured_image" class="form-label font-weight-bold">Gambar Unggulan</label>
                            <!-- Tipe input diubah ke 'file' -->
                            <input type="file" class="form-control" id="featured_image" name="featured_image" accept="image/*">
                            <small class="form-text text-muted">Maksimal ukuran file: 2048 KB (2MB).</small>
                        </div>

                        <!-- Isi (Body) -->
                        <div class="form-group mb-4">
                            <label for="body" class="form-label font-weight-bold">Isi Artikel <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="body" name="body" rows="15" required>{{ old('body') }}</textarea>
                        </div>

                        <!-- Opsi Publish (Hanya untuk Admin) -->
                        @if (Auth::user()->isAdmin())
                        <div class="form-group form-check mb-4 p-3 border rounded bg-light">
                            <input type="checkbox" class="form-check-input" id="publish" name="publish" value="1" {{ old('publish') ? 'checked' : '' }}>
                            <label class="form-check-label font-weight-bold text-success" for="publish">Langsung Publikasikan (Publish)</label>
                            <small class="form-text text-muted d-block">Jika dicentang, artikel akan langsung tayang.</small>
                        </div>
                        @else
                            <input type="hidden" name="publish" value="0">
                            <div class="alert alert-info text-center">
                                <p class="mb-0">Sebagai Penulis (User), artikel Anda akan **otomatis tersimpan sebagai Draft**.</p>
                            </div>
                        @endif

                        <button type="submit" class="btn btn-primary btn-lg w-100 mt-3">
                            @if (Auth::user()->isAdmin())
                                Simpan & Atur Publikasi
                            @else
                                Simpan Draft Artikel
                            @endif
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
