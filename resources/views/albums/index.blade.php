@extends('layouts.app')

@section('content')

<style>
    .card {
        width: 250px;
        /* Ubah lebar card sesuai kebutuhan */
        margin-bottom: 20px;
        /* Atur margin bawah card */
    }

    .card .card-img-top {
        height: 200px;
        /* Ubah tinggi gambar sesuai kebutuhan */
    }

    .card-wrapper {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        /* Mengatur lebar card */
        gap: 10px;
        /* Mengatur jarak antara card */
    }

    .header-title {
        text-align: center;
        /* Menempatkan teks ke tengah */
        margin-top: 20px;
        /* Menambahkan ruang atas */
    }

</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 header-title">
                    <!-- Menggunakan kelas header-title di sini -->
                    <h1>{{ Auth::user()->name }} Gallery</h1> <!-- Ubah teks sesuai kebutuhan -->
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-end">
                <div class="col-md-6">
                    <div class="d-grid gap-2">
                        <a class="btn btn-success float-right mb-3" href="/myalbums/create">
                            <!-- Tambahkan mb-3 di sini -->
                            <i class="fas fa-plus mr-1"></i> Buat Album Baru
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row card-wrapper">
                @foreach ($albums as $album)
                <a href="{{route('albums.show' , $album->id)}}" class="col-md-4 text-dark">
                    <div class="card card-primary shadow">
                        <div class="card-body p-0">
                            <img src="/storage/album_covers/{{$album->cover_image}}"
                                style="height: 300px; width: 100%; object-fit: cover;" class="card-img-top"
                                alt="Album Image">
                            <div class="card-body">
                                <h5 class="card-title">{{$album->name}}</h5>
                                <p class="card-text">{{$album->description}}</p>
                                <div class="d-flex justify-content-between align-items-center">

                                    <form method="POST" action="{{ route('albums.destroy', $album->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            <div class="d-flex justify-content-between mt-4">
                <p>Showing {{ $albums->firstItem() }} - {{ $albums->lastItem() }} of {{ $albums->total() }} results
                </p>
                {{ $albums->links('pagination::bootstrap-4') }}
            </div>
        </div>

    </section>
    <!-- /.content -->

    <!-- Buat Album Baru -->

    <!-- /.content -->
</div>
</div>
@endsection
