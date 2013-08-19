	<?php include 'includes/header.php'; ?>
	<div id="mainContent" class="container">
		<div class="row">
			<div class="col-12 pageIntro">
				<h5 class="profileName">Edgar R.</h5>
				<h1 class="profileIntroHeading">I am an interaction designer.</h1>
				<div class="loadingLine"></div>
				<p class="profileDescription">
					For the last six years I have been designing and coding user interfaces for the web.
				</p>
			</div>
		</div><!-- /row -->

		<div class="row">
			<div class="col-12 profileHeading"><h4 class="HTMLCSSJSGraphTitle">My Technical Skills</h4></div>
			<div class="col-sm-6 col-lg-5 HTMLCSSJSGraph">
				<canvas id="canvas" height="280" width="280"></canvas>
			</div><!-- /HTML/CSS/JS graph -->

			<div class="col-sm-6 col-lg-5 HTMLCSSJSGraphLabels">
				<div class="HTMLCSSJSGraphLabelsRow">
			  		<span class="labelSquare HTML"></span><div class="labelName">HTML <span class="percent">( 95% )</span></div>
				</div>
				<div class="HTMLCSSJSGraphLabelsRow">
			  		<span class="labelSquare CSS"></span><div class="labelName">CSS <span class="percent">( 95% )</span></div>
				</div>
				<div class="HTMLCSSJSGraphLabelsRow">
					<span class="labelSquare JS"></span><div class="labelName">Javascript <span class="percent">( 45% )</span></div>
				</div>
			</div><!-- HTMLCSSJSGraphLabels -->
		</div><!-- /row -->

		<div class="row aboutMeRow">
			<div class="col-sm-12 col-lg-12"><h4>About Me</h4></div>
			<div class="profileImages col-6 col-sm-3 col-lg-3"><img class="img-responsive" src="assets/img/coffee.jpg" width="300px"><p>Drink coffee</p></div>
			<div class="profileImages col-6 col-sm-3 col-lg-3"><img class="img-responsive" src="assets/img/notebook.jpg" width="300px"><p>Love sketching</p></div>
			<div class="profileImages col-6 col-sm-3 col-lg-3"><img class="img-responsive" src="assets/img/gorra.jpg" width="300px"><p>Born in Mexico</p></div>
			<div class="profileImages col-6 col-sm-3 col-lg-3"><img class="img-responsive" src="assets/img/map.jpg" width="300px"><p>Raised in the Mex/USA border</p></div>
			<div class="profileImages col-6 col-sm-3 col-lg-3"><img class="img-responsive" src="assets/img/ATX.jpg" width="300px"><p>Living in Austin TX</p></div>
			<div class="profileImages col-6 col-sm-3 col-lg-3"><img class="img-responsive" src="assets/img/wife.jpg" width="300px"><p>Happily Married</p></div>
			<div class="profileImages col-6 col-sm-3 col-lg-3"><img class="img-responsive" src="assets/img/herblubalin.jpg" width="300px"><p>Admire Herb Lubalin</p></div>
			<div class="profileImages col-6 col-sm-3 col-lg-3"><img class="img-responsive" src="assets/img/watch.jpg" width="300px"><p>Believe in simple interfaces</p></div>
			<div class="profileImages col-6 col-sm-3 col-lg-3"><img class="img-responsive" src="assets/img/hardboiledWebDesign.jpg" width="300px"><p>Self-taught</p></div>
			<div class="profileImages col-6 col-sm-3 col-lg-3"><img class="img-responsive" src="assets/img/thinkingWithType.jpg" width="300px"><p>Care for typography</p></div>
			<div class="profileImages col-6 col-sm-3 col-lg-3"><img class="img-responsive" src="assets/img/themify.jpg" width="300px"><p>Worked at Themify</p></div>
			<div class="profileImages col-6 col-sm-3 col-lg-3"><img class="img-responsive" src="assets/img/mobi.jpg" width="300px"><p>Mobi</p></div>
			<div class="profileImages col-6 col-sm-3 col-lg-3"><img class="img-responsive" src="assets/img/BazaarvoiceCoaster.jpg" width="300px"><p>Bazaarvoice</p></div>
			<div class="profileImages col-6 col-sm-3 col-lg-3"><img class="img-responsive" src="assets/img/utep.jpg" width="300px"><p>&amp; UTEP</p></div>
		</div><!-- /row -->


		<div class="row experienceSocialLinksRow">
			<div class="col-sm-3 col-lg-3">
				<p><strong>Brands I had the opportunity to work with:</strong></p>
			</div><!-- col3 -->
			<div class="col-6 col-sm-3 col-lg-3">
				<ul class="experienceSocialLinks">
					<li>Dell</li>
					<li>HP</li>
					<li>CoverGirl</li>
					<li>Gillette</li>
					<li>Pampers</li>
				</ul>
			</div><!-- col3 -->
			<div class="col-6 col-sm-3 col-lg-3">
				<ul class="experienceSocialLinks">
					<li>Sensodyne</li>
					<li>Expedia</li>
					<li>The Walking Company</li>
					<li>USBank</li>
					<li>Hertz</li>
				</ul>
			</div><!-- col3 -->
		</div>


		<div class="row experienceSocialLinksRow">
			<div class="col-6 col-sm-3 col-lg-3">
				<p><strong>Full Experience:</strong></p>
				<ul class="experienceSocialLinks">
					<li><a href="assets/pdf/edgarRodriguezResume.pdf">Resume</a></li>
					<li><a href="http://www.linkedin.com/in/edgarrod">LinkedIn</a></li>
				</ul>
			</div><!-- col3 -->
			<div class="col-6 col-sm-3 col-lg-3">
				<p><strong>Social:</strong></p>
				<ul class="experienceSocialLinks social">
					<li><a href="http://www.behance.net/edgarr">Behance</a></li>
					<li><a href="http://twitter.com/edgardose">Twitter</a></li>
				</ul>
			</div>
		</div><!-- /row -->
	</div><!-- /mainContent -->
	<?php include 'includes/footer.php'; ?>
	<!-- Chart -->
	<script>
	var chartData = [
			{
				value : 0,
				color: "#333"
			},
			{
				value : 45,
				color: "#ddd"
			},
			{
				value : 95,
				color: "#999"
			},
			{
				value : 95,
				color: "#333"
			}
		];
	var myPolarArea = new Chart(document.getElementById("canvas").getContext("2d")).PolarArea(chartData);
	</script>