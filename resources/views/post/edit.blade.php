@extends('layout.master')
@section('content')
<center>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <form method="post" action="{{ url( '/update/'.$tweet->id ) }}">
                 @csrf
                <div class="form-group">
                    
                    
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Tweet</h5>

                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="tweet"  value="">{{ $tweet->tweet }}</textarea>

                        </div>


                    </div>
                    <div class="modal-footer">
                        
                        <button type="submitt" class="btn btn-primary">Save changes</button>
                    </div>
                    


                </div>
            </div>
        </form>
        
        </center>
        @endsection