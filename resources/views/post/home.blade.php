@extends('layout.master')
@section('content')
<div class="container">
    <div class="row">
        @include('post.col_one')
        @include('post.col_two')
    



        @include('post.alert')
    </div>
</div>
@endsection