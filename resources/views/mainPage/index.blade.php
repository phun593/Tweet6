<!DOCTYPE html>
<html>
	<head>
		<title>Tweeter</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Tweeter">
		<meta property="og:description" content="Tweeter Where You Can Stay up to Datate with in th word of banding">
	</head>
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/css/fullpage.css">
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/css/examples.css">
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/css/app.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<body>
		<div id="fullpage">
			<div class="section" id="section0">
				<div class="container">
					<section class="main">
						<div class="row justify-content-center">
							<div class="col-sm-12">
								<img class="animated slideInDown img-responsive mb-2"  src="{{url('/')}}/img/logo.png" alt="Tweeter logo">
							</div>
						</div>
					<head><h1 class="animated bounceInLeft delay-1s ">Wellcom to Tweeter</h1></head>
					<p class="animated bounceInRight delay-1s">Where You Can Stay up to Date with in the World.</p>
					<div class="container mb-5">
						<div class="row text-cente mb-5 pb-5">
							<div class="col-md-3">
								<i class="fas fa-search"></i><h4>Search for the Best  Bending Master.</h4>
								<form method="post" action="{{'/loginPage'}}">
									@csrf
									<button type="submitt" class=" animated pulse btn btn-danger btn-lg " id="logobutton">Log In</button><br>
									
								</form>
							</div>
							<div class=col-md-6>
								<i class="far fa-comments"></i><h4>Join the Conversation.</h4>
							</div>
							<div class="col-md-3">
								<i class="fas fa-user-friends"></i><h4>Hear what People are Talking About.</h4>
								<form method="post" action="{{'/registerPage'}}">
									@csrf
									<button type="submitt" class=" animated pulse btn btn-danger btn-lg" id="logobutton">SIGN UP</button>
								</form>
								<div class="scrollDown mt-5">
									<i class="fas fa-arrow-down animated  infinite bounce"></i>
								</div>
								
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
		<div class="section" >
			<div class="slide" id="section101">
				<center><h1 class="animated  infinite pulse">I am not Toph, I am Melon Lord! Mwahahah</h1></center>
			</div>
			<div class="slide" id="section102">
				<center><h1 class="animated  infinite pulse">I know now that no one can give you your honor. It’s something you earn for yourself by choosing to do what’s righ</h1>
				</center>
			</div>
			<div class="slide" id="section103">
				<center><h1 class="animated  infinite pulse">Life happens wherever you are, whether you make it or not.</h1></center>
			</div>
			<div class="slide" id="section104">
				<center><h1 class="animated  infinite pulse">Sometimes life is like this tunnel. You can’t always see the light at the end of the tunnel, but if you keep moving, you will come to a better place</h1></center>
			</div>
		</div>
		<footer class="section" id="section4">
			<div class="container">
				<div class="row">
					<div class="col-md-auto" id="footer">
						<a href="tel:1-877-842-1535">Questions? Call 1-877-842-1535</a><br>
						<a href="">FAQ</a><br>
						<a href="">Corporate Information</a><br>
						<a href="">Help</a><br>
						<a href="">Media Center</a><br>
						<a href=""><i class="fab fa-youtube"></i></a>
						<a href=""><i class="fab fa-blogger"></i></a>
						<a href=""><i class="fab fa-bitcoin"></i></a>
						<a href=""><i class="fab fa-android"></i></a>
						<a href=""><i class="fab fa-angellist"></i></a>
					</div>
					<div class="col-sm-6 mb-5" id="footer2">
						<a href="">Terms of Use</a><br>
						<a href="">Contact Us</a><br>
						<a href="">Account</a><br>
						<a href="">Privacy</a><br>
						<a href="">Buy Gift Cards</a><br>
						<center></center>
						<div class="btn-group">
							<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							English
							</button>
							<div class="dropdown-menu mb-5">
								<a class="dropdown-item" href="#">Francais</a>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</footer>
		
		<script src="{{url('/')}}/js/main.js"></script>
		<script src="{{url('/')}}/js/fullpage.js"></script>
		<script src="{{url('/')}}/js/examples.js"></script>
		<script type="text/javascript">
			var myFullpage = new fullpage('#fullpage', {
				sectionsColor: ['#000000', '#000000', '#000000', '#000000', '#000000'],
				anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
				menu: '#menu',
				lazyLoad: true
			});
		</script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>