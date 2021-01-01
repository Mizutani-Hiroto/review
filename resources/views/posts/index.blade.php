@extends('layouts.layouts')

@section('title','Simple Board')

@section('content')

@if(session('message'))

  {{ session('message') }}
  
@endif

<h1>Posts</h1>
<form action="/upload" method="POST" enctype="multipart/form-data">
    {{ csrf_field }}

    <label for="photo">画像ファイル:</label>
    <input type="file" class="form-control" name="file">
    <br>
    <input type="submit">
</form>

@foreach($posts as $post)

  <div class="card">
    <div class="card-body">
      <h5></h5>
      <h5 class="card-title">{{ $post->title }}</h5>
        <p class="card-text">{{ $post->content }}</p>

        <div class="d-flex" style="height: 36.4px;">
          <a href="/posts/{{ $post->id }}" class="btn btn-outline-primary">Show</a>
          @if(Auth::user()->id == $post->user_id)
          <a href="/posts/{{ $post->id }}/edit" class="btn btn-outline-primary">Edit</a>
            <form action="/posts/{{ $post->id }}" method="POST" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button type="submit" class="btn btn-outline-danger">Delete</button>
            </form>
            @endif
        </div>
    </div>
  </div>
        
    @endforeach

<a href="/posts/create">New Post</a>

@endsection