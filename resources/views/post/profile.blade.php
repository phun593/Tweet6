@extends('layout.master')
@section('content')
<div class="jumbotron">
	<center>
	<h1 class="display-6">Hello, world!</h1>
	<p class="lead">I laugh at gravity all the time!</p>
	<hr class="my-4">
	
	<a  href="#" role="button">Post</a>
	<a  href="#" role="button">Photos</a>
	<a  href="#" role="button">Frindes</a>
	</center>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			
			<ul class="list-group" >
				<li class="list-group-item active">Your Tweets</li>
				
				@foreach($tweets as $tweet)
				<li class="list-group-item">
					<p>{{ $tweet->tweet }}</p>
					<small>{{ $tweet->created_at }}</small><br>
					<a  class="btn btn-link" href="{{ url('/edit/'.$tweet->id)}}">Edit</a>
					<a  href="{{ url('/tweet/'.$tweet->id)}}">Delete</a>
					<a class="btn btn-link" href="{{ url('/like/'.$tweet->id)}}" value="hellow">
						Like<span class="badge badge-light" style="margin-left: 10px;">{{$tweet->like}}</span>
					</a>
					<a class="btn btn-link" href="{{ url('/dislike/'.$tweet->id)}}" value="hellow">
						Dislike<span class="badge badge-light" style="margin-left: 10px;">{{$tweet->dislike}}</span>
					</a>
					
					<p>
						<a class="btn btn-primary btn-sm" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
							Comments
						</a>
					</p>
					<hr>
					<div class="collapse" id="collapseExample">
						<div class="card card-body">
							<h5>Add Comments</h5>
							
							<form method="post" action="{{ url('/comment/'.$tweet->id)}}">
								@csrf
								<input type="text" class="form-control" name="body" >
								<button type="submitt" class="btn btn-primary">Post comment</button>
							</form>
							@foreach($tweet->comments as $comment)
							<h3>{{ $comment->user->name }}</h3>
							<p>{{ $comment->body }}</p>
							<a  href="{{ url('/comment/'.$comment->id)}}">Delete Comment</a>
							<a  href="{{ url('/cedit/'.$comment->id)}}">Edit</a>
							@endforeach
							<hr>
						</div>
					</div>
				</li>
				
				
				<form method="post" action="{{ url('/comment/'.$tweet->id)}}">
					<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Post Comment</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									@csrf
									<div class="form-group">
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="body"  value=""></textarea>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="submitt" class="btn btn-primary">Post</button>
								</div>
							</div>
						</div>
					</div>
				</form>
				
				
				@endforeach
			</ul>
		</div>
	</div>
</div>
@endsection