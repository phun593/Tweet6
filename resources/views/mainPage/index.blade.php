<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<ul id="menu">
	<li data-menuanchor="firstPage" class="active"><a href="#firstPage">First slide</a></li>
	<li data-menuanchor="secondPage"><a href="#secondPage">Second slide</a></li>
	<li data-menuanchor="3rdPage"><a href="#3rdPage">Third slide</a></li>
</ul>

<div id="fullpage">
	<div class="section " id="section0">
		<h1>fullPage.js</h1>
		<p>Continuous Scrolling Enabled</p>
		<img src="imgs/fullPage.png" alt="fullPage"/>
	</div>
	<div class="section" id="section1">
		<div class="intro">
			<h1>Around the world scrolling</h1>
			<p>Go to the first section and scroll up or to the last one and scroll down to see how it works.</p>
		</div>
	</div>
	<div class="section" id="section2">
		<div class="intro">
			<h1>Scroll Down</h1>
			<p>And it will animate down to the first section</p>
		</div>
	</div>
</div>



<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>

</body>
</html>