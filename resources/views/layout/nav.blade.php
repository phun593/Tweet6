<nav class=" navbar sticky-top navbar navbar-expand-lg  navbar-light bg-primary">
  <!-- <div class="container"> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="/home">
      <img src="https://bootstrap-themes.github.io/application/assets/img/brand-white.png" width="70" height="25" alt="">
    </a>
    <a class="navbar-brand" href="/home">Tweeter</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="/homepage">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/profile')}}">Profile</a>
      </li>
      <li class="nav-item" data-toggle="modal" data-target="#exampleModal">
        <a class="nav-link ">Messages</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="/find">Find Friends</a>
      </li>
    </ul>
    
    
    
    <div class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" placeholder="Search" aria-label="Search"  v-model="search">
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit" @click.pervent="searchUser" >Search</button>
      
      <div class="name">{{ Auth::user()->name }}</div>
      <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        <div class="btn-group" role="group" style="margin-right: 100px; margin-left:5px; ">
          <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="{{url('/')}}/img/556511.jpg" alt="..." class="rounded-circle" style="height: 0px;">
          </button>
          <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <a class="dropdown-item" href="/info">Account Info</a>
            <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>
            
            
          </div>
        </div>
      </div>
    </div>
    
    
    <!-- </div> -->
    
  </nav>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Messages</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          "I laugh at gravity all the time!" -- Avatar Aang
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Send Messages</button>
        </div>
      </div>
    </div>
  </div>