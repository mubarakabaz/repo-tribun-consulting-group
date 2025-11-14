@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="text-3xl font-weight-bold text-dark">Daftar Artikel</h2>
                <a href="{{ route('posts.create') }}" class="btn btn-success btn-lg shadow-sm">
                    <i class="fas fa-plus"></i>
                    Tambah Artikel
                </a>
            </div>

            {{-- Pesan status  --}}
            @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            {{-- Bagian draft Pribadi (Hanya Draft milik user yang login) --}}
            @if($drafts->count() > 0)
            <div class="card shadow mb-4 border-warning">
                <div class="card-header bg-warning text-white">
                    <h4 class="mb-0">Draft Saya {{ $draft->count() }}</h4>
                </div>
                <ul class="list-group list-group-flush">
                    @foreach ($draft as $post)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <span class="font-weight-bold text-dark">{{ $post->title }}</span>
                            <small class="text-warning ml-2">[DRAFT]</small>
                            <small class="text-muted d-block">Terakhir diperbarui: {{ $post->updated_at->format('d M Y H:i') }}</small>
                        </div>
                        <div class="btn-group" role="group">
                            <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-info text-white" title="Edit"><i class="fas fa-edit"></i> Edit</a>

                            @if(Auth::user()->isAdmin())
                            <!-- Hanya Admin yang bisa mempublikasikan dari Index -->
                            <form action="{{ route('posts.publish', $post) }}" method="POST" class="d-inline-block ml-1">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-success" title="Publikasikan"><i class="fas fa-upload"></i> Publish</button>
                            </form>
                            @endif

                            <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline-block ml-1" onsubmit="return confirm('Apakah Anda yakin ingin menghapus draft ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" title="Hapus"><i class="fas fa-trash-alt"></i> Hapus</button>
                            </form>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif

            {{-- Bagian atas artikel --}}

            <div class="card shadow border-primary">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Artikel Terpublikasi ({{ $publishedPosts->count() }})</h4>
                </div>

                @if($publishedPosts->count() > 0)
                <ul class="list-group list-group-flush">
                    @foreach($publishedPosts as $post)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <a href="{{ route('posts.show', $post) }}" class="font-weight-bold text-primary">{{ $post->title }}</a>
                            <small class="text-success ml-2">[PUBLISHED]</small>
                            <small class="text-muted d-block">Oleh: {{ $post->user->name }} | Terbit: {{ $post->updated_at->format('d M Y') }}</small>
                        </div>
                        <div class="btn-group" role="group">
                            @if(Auth::user()->isAdmin() || $post->user_id == Auth::id())
                            <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-secondary" title="Edit"><i class="fas fa-edit"></i> Edit</a>
                            @endif

                            @if(Auth::user()->isAdmin())
                            <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline-block ml-1" onsubmit="return confirm('Apakah Anda yakin ingin menghapus artikel ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" title="Hapus"><i class="fas fa-trash-alt"></i> Hapus</button>
                            </form>
                            @endif
                        </div>
                    </li>
                    @endforeach
                </ul>
                @else
                    <div class="card-body">
                        <p class="text-muted mb-0">Belum ada artikel yang dipublikasikan.</p>
                    </div>
                @endif
            </div>

        </div>
    </div>
</div>

@endsection
