<div class="col-lg-6">
    <form method="post"  enctype="multipart/form-data" action="{{url('/tweet')}}">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlTextarea1"><h4>Tweet</h4></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="tweet"></textarea>
            <div >
                <label for="">
                Upload Image:</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <button type="submitt" class="btn btn-info" value="tweet">Tweet  It! →</button>
        </div>
    </form>
    
    
    <ul class="list-group" >
        <li class="list-group-item active">All Tweets</li>
        
        
        @foreach($tweets as $tweet)
        <li class="list-group-item">
            <img src="/uploads/avatars/{{$user->avatar}}" style="width:50px; height:50px; float:left; border-radius:50%; margin-right:25px;">
            <p class="tweet_home">{{$tweet->tweet}}</p>
            @if (count('$tweet->image') > 0 )
            <img src="{{ asset('uploads/avatars/'. $tweet->image) }}" class="img-thumbnail"><br>
            @endif
            <small>{{ $tweet->created_at }}</small><br>
            
            
        <like-button tweetid="{{ ($tweet->id)}}" ></like-button>
        
        
        <dislike-button tweetid="{{ ($tweet->id)}}"></dislike-button>
        
        
        <p>
            <a class="btn btn-primary btn-sm" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Comments
            </a>
        </p>
        <hr>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <h5>Add Comments</h5>
                
                <!-- <form method="post" action="{{ url('/comment/'.$tweet->id)}}"> -->
                @csrf
            <gif-search></gif-search>
            <!-- <input type="text" class="form-control" name="body">
            <button type="submitt" class="btn btn-primary">Post comment</button> -->
            <!-- </form> -->
            
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
<div class="text-center col-lg-6">{{$tweets->links()}}</div>
</ul>
</div>