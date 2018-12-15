@extends('master')
@section('title','Showing Post')
@section('content')
	<br/>
	<div class="row">
		<div class="col-md-12">
			<div class="card card-body">
				<h1>{{ $currentPost->title }}</h1>
				<p>{!! $currentPost->post !!}</p>
				<small>{{ $currentPost->created_at->diffForHumans() }}</small>
			</div>
			<br/>
			<ul class="pagination justify-content-between">
				<li><a href="/posts/{{$currentPost->id}}/edit" class="btn btn-primary">Edit</a></li>
				<li>
					{!! Form::open(['action' => ['PostsController@destroy', $currentPost->id], 'method' => 'POST']) !!}
						{{ Form::hidden('_method', 'DELETE') }}
						{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
					{!! Form::close() !!}
				</li>
			</ul>
			
		</div>
	</div>
@endsection