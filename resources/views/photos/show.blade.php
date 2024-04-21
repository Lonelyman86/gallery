@extends('layouts.app')

@section('content')

<div class="container">
    <div class="d-flex justify-content-end mt-3">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Options
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="/myalbums/{{$photo->album->id}}">Back</a>
                @if(Auth::user() && Auth::user()->id == $photo->album->user_id)
                    <form action="{{route('photos.destroy' , $photo->id)}}" method="post" class="dropdown-item">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
    <div class="mb-3">
        <img src="/storage/albums/{{$photo->album->id}}/{{$photo->photo}}" alt="Photo" class="img-fluid" style="max-height: 500px;">
    </div>
    <h2>{{$photo->title}}</h2>
    <h5>{{$photo->description}}</h5>
    <div class="card mt-3">
        <div class="card-body">
            <!-- Comment Form -->
            <form method="POST" action="{{ route('comments.store', $photo->id) }}">
                @csrf
                <div class="input-group">
                    <textarea name="content" class="form-control" rows="3" placeholder="Add a comment">{{ old('content') }}</textarea>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-success">Comment</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- Comment List -->
        <ul class="list-group list-group-flush">
            @foreach ($photo->photoComments as $comment)
            <li class="list-group-item">
                <h6 class="mb-0"><strong>{{ $comment->user->name }}</strong> <span class="text-muted">{{ $comment->created_at->diffForHumans() }}</span></h6>
                <p class="mb-0">{{ $comment->content }}</p>
            </li>
            @endforeach
        </ul>
    </div>
</div>

@endsection
