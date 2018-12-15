@extends('master')
@section('title', 'Edit Post')
@section('content')
	<div class="row">
		<div class="col-md-12">
			<h1>Edit Post</h1>
			{!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
				<div class="form-group">
					{!! Form::label('title','Title') !!}
					{!! Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
				</div>
				<div class="form-group">
					{{ Form::label('post','Post') }}
					{{ Form::textarea('post', $post->post, ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Post']) }}
				</div>
				{{ Form::hidden('_method', 'PUT') }}
				{{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
			{!! Form::close() !!}
		</div>
	</div>
@endsection