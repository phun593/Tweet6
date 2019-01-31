@extends('layout.master')
@section('content')
<center>
<div class="container">
	
	<div class="col-lg-6">
		<table class="table table-striped table-dark">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Name</th>
					<th scope="col">Email</th>
					<th scope="col">Follow</th>
				</tr>
			</thead>
			@foreach($users as $user)
			<tbody>
				<tr>
					<th scope="row"><img src="/uploads/avatars/{{$user->avatar}}" style="width:50px; height:50px; float:left; border-radius:50%; margin-right:25px;"></th>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td>
					<form method="post" action="{{url('/follow')}}">
						@csrf
					<input type="hidden" id="custId" name="id" >
					<button type="submit" class="btn btn-sm btn-info">Follow</button>
					</form>
				</td>
				</tr>
			</tbody>
			@endforeach
		</table>
	</div>
</div>
</center>
@endsection