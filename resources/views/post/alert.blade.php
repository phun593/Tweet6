<div class="col-lg-3">
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="card" style="width: 15rem height 50rem;">
        <div class="card-body">
            <h5 class="card-title">Cabbage Corp </h5>
            <img class="card-img-top" src="{{url('/')}}/img/1544.png" alt="Card image cap">
            <p class="card-text">Cabbage Corp is a rival automaking company of Future Industries, founded by the cabbage merchant.Its only known automobile model is the Cabbage Car, a cheaper, more compact alternative to Future Industries  Satomobile .</p>
            <a href="#" class="btn btn-dark">Find out more </a>
        </div>
    </div>
    <div class="col-lg-16">
        
        <div class="card" >
            <div class="card-body">
                <div>
                    <center><h5>Following</h5></center>
                    @foreach($follows as $name)
                    <div class="card-text">
                        <img src="/uploads/avatars/{{$user->avatar}}" style="width:50px; height:50px; float:left; border-radius:50%; margin-right:25px;">
                        <h3 class="card-text">{{$name->name}}<h3>
                    </div>
                    @endforeach
                </div>
                
            </div>
        </div>
    </div>
    
    <div class="col-lg-16">
        
        <div class="card" >
            <div class="card-body">
                <div class="qa">
                    © 2018 Tweeter
                    <a href="#">About</a>
                    <a href="#">Help</a>
                    <a href="#">Terms</a>
                    <a href="#">Privacy</a>
                    <a href="#">Cookies</a>
                    <a href="#">Ads </a>
                    <a href="#">Info</a>
                    <a href="#">Brand</a>
                    <a href="#">Blog</a>
                    <a href="#">Status</a>
                    <a href="#">Apps</a>
                    <a href="#">Jobs</a>
                    <a href="#">Advertise</a>
                </div>
            </div>
        </div>
    </div>
</div>