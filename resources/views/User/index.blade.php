@extends('layouts.app')
    
@section('content')
    <div class='own_posts'>
            @foreach ($own_posts as $own_post)
               <div>
                   <h4><a href="/posts/{{ $post->id }}">{{ $post->title}}</a></h4>
                   <small>{{ $post->user->name }}</small>
                   <p>{{ $post->body }}</p>
               </div>
            @endforeach
            
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </div>
@endsection