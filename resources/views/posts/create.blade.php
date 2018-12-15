@extends('master')
@section('title', 'Create Post')
@section('content')
	<div class="row">
		<div class="col-md-12">
			<h1>Create Post</h1>
			{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
				<div class="form-group">
					{!! Form::label('title','Title') !!}
					{!! Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title']) !!}
				</div>
				<div class="form-group">
					{{ Form::label('post','Post') }}
					{{ Form::textarea('post', '', ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Post']) }}
				</div>
				{{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
			{!! Form::close() !!}
		</div>
	</div>
@endsection