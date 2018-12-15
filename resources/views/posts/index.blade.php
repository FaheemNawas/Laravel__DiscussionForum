@extends('master')
@section('title', 'All Posts')
@section('content')
	<br/>
	<div class="row">
		<div class="col-md-12">
			@if(count($allPosts) > 0)
				@foreach($allPosts as $post)
					<div class="card card-body">
						<a href="{{ action('PostsController@show',['id' => $post->id]) }}"><h1>{{ $post->title }}</h1></a>
						<p>{!! $post->post !!}</p>
						<small>Posted: {{ $post->created_at->diffForHumans() }}</small>
					</div>
				@endforeach
			@endif		
		</div>
	</div>
@endsection