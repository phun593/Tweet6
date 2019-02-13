<div class="col-lg-3 mt-3">
    <div class="card">
        <img class="card-img-top" src="{{url('/')}}/img/556511.jpg" alt="Card image cap">
        <div class="card-body">
            <center>
            <h5 class="card-title">Aang</h5>
            <p class="card-text">Harsh words can't solve problems; action will.</p>
            </center>
        </div>
        
        <div class="card-body">
            <a href="#" class="card-link">Friends<span class="badge badge-light" style="margin-left: 20px;">{{5}}</span></a>
            <a href="#" class="card-link">Enemies<span class="badge badge-light" style="margin-left: 20px;">{{5}}</span></a>
        </div>
        
        
    </div>
    <div class="col-lg-16 mt-5">
        
        <div class="card" >
            <div class="card-body">
                <div class="qa">
                    <center>About
                    <small><a href="#">.Edit</a></small></center>
                    Went to
                    <a href="#">Southern Air Temple</a>
                    Became friends with
                    <a href="#" >Appa</a>
                    <a href="#">Katara</a>
                    <a href="#">Sokka</a><br>
                    Weapon of choice
                    <a href="#">Glider staff</a><br>
                    Ethnicity
                    <a href="#">Air Nomad</a><br>
                    From
                    <a href="#">Southern Air Temple</a><br>
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-16 mt-5">
        
        <div class="card" >
            <div class="card-body">
                <div class="qa">
                    <div class="photo">
                         Photos
                    <small><a href="#">.Edit</a></small>
                    </div>
                   
                    @foreach($tweets as $tweet)
                    <img src="{{ asset('uploads/avatars/'. $tweet->image) }}" class="img-thumbnail" style="width:100px; height:100px;">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>