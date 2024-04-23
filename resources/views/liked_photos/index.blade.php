@extends('layouts.app')

@section('content')

<style>
    .card {
        width: 250px;
        margin-bottom: 20px;
    }

    .card .card-img-top {
        height: 200px;
        object-fit: cover;
    }

    .card-wrapper {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 10px;
    }

    .header-title {
        text-align: center;
        margin-top: 20px;
    }

</style>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 header-title">
                    <h1>Liked Photo</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row card-wrapper">
                @if (count($likedPhotos) > 0)
                @foreach ($likedPhotos as $photo)
                <div class="col-md-4">
                    <div class="card card-primary shadow">
                        <img src="{{ asset('storage/albums/' . $photo->album->id . '/' . $photo->photo) }}"
                            class="card-img-top text-dark">
                        <div class="card-body">
                            <h5 class="card-title">{{ $photo->title }}</h5>
                            <p class="card-text">{{ $photo->description }}</p>
                            <div class="d-flex justify-content-between mt-3">
                                <form id="like-form-{{ $photo->id }}" method="POST"
                                    action="{{ route('likes.toggle', $photo->id) }}" class="align-items-center">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm card-text">❤</button>
                                </form>
                                <a href="{{ route('photos.show', $photo->id) }}"
                                    class="btn btn-primary btn-sm">Lihat</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="col-md-12">
                    <p>No liked photos found.</p>
                </div>
                @endif
            </div>
        </div>
    </section>
</div>
@endsection
