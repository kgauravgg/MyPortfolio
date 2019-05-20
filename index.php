
<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){
		echo 'OK';
	}
	else{
		echo 'All Fields are required.';
	}
}
else{
	echo 'Not OK';
}

?>
<html>
<!doctype html>
<head>
	<title>Resume</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
	<link rel="stylesheet" type="text/css" href="index.css">
		
</head>
<body>
<!-- Carousel Starts form Here-->
	<div class="bd-example">
		  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
			    <ol class="carousel-indicators">
				      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
				      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
				      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
				      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
				      <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
			    </ol>
	<!--First Slide-->
			    <div class="carousel-inner">
				      <div class="carousel-item active">
					       <div>
								<div class="image">
									<div class="heading">
										<div>
											<h1>Hi <br>I'm Kumar Gaurav</h1>
											<h5>Student of Pondicherry University</h5>
											<span>Front End Web Devloper</span><br>
											<button class="button">Download CV</button>
										</div>
									</div>
								</div>
							</div>
				      </div>
	<!--Second Slide-->
				      <div class="carousel-item">
					        <div>
								<div class="about-me">
									<h2><u><strong>About Me</strong></u></h2>
								</div>
								<div class="container-fluid">
									<div class="row">
										<div class="col-sm-4 about-img">
											<img src="img/dp.jpg">
										</div>
										<div class="col-sm-8 about-text">
											<div>
												<h3><strong>Kumar Gaurav</strong></h3>
												<h4><u>Front-End Web Devloper</u></h4>
												<p>Ultricies nisi voluptatem, illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque latu dantium, totam rem aperiam, eaque ipsa quae ab illo tempor dignissim at. </p>
												<p>Date Of Birth: <strong>12 Dec 1995</strong></p>
											</div>
										</div>
									</div>
									<div class="row item">
										<div class="col-sm-4">
											<div class="about-item">
												<i class="fa fa-laptop"></i><br>
												<span>Front-End Web Developer</span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="about-item">
												<i class="fa fa-database"></i><br>
												<span>Back-End Developer</span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="about-item">
												<i class="fa fa-code"></i><br>
												<span>Programmer</span>
											</div>
										</div>
									</div>
								</div>
							</div>
				      </div>
	<!--Third Slide-->
				      <div class="carousel-item">
					        <div>
								<div class="ts-head"><h2><b>Technical Skills:</b></h2></div>
								<div class="ts-head2"><h3>Web Devlopment</h3></div>
								<div>
									
								</div>
								<div class="ts-head2"><h3>Programming</h3></div>
								<div>
									<div class="row">

										<div class="col-sm-2">
											<div class="web-d">
												<i class="devicon-c-plain"></i>
												<h3>C Language</h3>
												<p>Intermediate </p>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="web-d">
												<i class="devicon-cplusplus-plain"></i>
												<h3>C++ Language</h3>
												<p>Intermediate </p>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="web-d">
												<i class="devicon-visualstudio-plain"></i>
												<h3>Visual Studio</h3>
												<p>Intermediate</p>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="web-d">
												<i class="devicon-java-plain"></i>
												<h3>Java</h3>
												<p>Beginner</p>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="web-d">
												<i class="devicon-python-plain"></i>
												<h3>Python</h3>
												<p>Beginner</p>
											</div>
										</div>
									</div>
								</div>
								<div class="ts-head2"><h3>Other Knowledge</h3></div>
								<div>
									<div class="row">

										<div class="col-sm-2">
											<div class="web-d">
												<i class="devicon-github-plain"></i>
												<h3>GitHub</h3>
												<p>Intermediate </p>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="web-d">
												<i class="devicon-phpstorm-plain"></i>
												<h3>php Strom</h3>
												<p>Intermediate </p>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="web-d">
												<i class="devicon-ubuntu-plain"></i>
												<h3>Ubuntu</h3>
												<p>Intermediate</p>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="web-d">
												<i class="fa fa-film"></i>
												<i class="fa fa-music"></i>
												<h3>Audio/Video Editing</h3>
												<p>Intermediate</p>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="web-d">
												<i class="devicon-photoshop-plain"></i>
												<h3>Photoshop</h3>
												<p>Beginner</p>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="web-d">
												 <i class="devicon-amazonwebservices-original"></i>
												<h3>AWS</h3>
												<p>Intermediate</p>
											</div>
										</div>
									</div>
								</div>
							</div>
				      </div>
	<!--Fourth Slide-->
					 <div class="carousel-item">
					        <div>
							<div class="container container2">
								<h3>Education</h3>
								<div>
									<i class="fa fa-university"></i>
									<h4>2017-Present</h4>
									<h5>Master Of Computer Application<br>
									From <a href="http://www.pondiuni.edu.in/">Pondicherry University</a>, Puduchery</h5>
									<p>Given two spirit very unto firmament. Fourth and she'd their fruit together. </p>
								</div>
								<div>
									<i class="fa fa-graduation-cap"></i>
									<h4>2012-15</h4>
									<h5>Bachlor Of Computer Application<br>
									From <a href="https://www.shridharuniversity.ac.in/">Shridhar University</a>, Rajasthan</h5>
									<p>Given two spirit very unto firmament. Fourth and she'd their fruit together. </p>
								</div>
								<div>
									<i class="fas fa-school"></i>
									<h4>2010-12</h4>
									<h5>From +2 High School, Bihiya, Bihar<br>
									<a href="http://biharboardonline.bihar.gov.in/">Bihar School Examinetion Board</a>, Patna</h5>
									<p>Given two spirit very unto firmament. Fourth and she'd their fruit together. </p>
								</div>
								<div>
									<i class="fas fa-school "></i>
									<h4>2010</h4>
									<h5>Matriculation<br>
									From +2 High School, Bihiya, Bihar<br>
									<a href="http://biharboardonline.bihar.gov.in/">Bihar School Examinetion Board</a>, Patna</h5>
									<p>Given two spirit very unto firmament. Fourth and she'd their fruit together. </p>
								</div>
							</div>
						</div>
				      </div>
	<!--Fifth Slide-->
				       <div class="carousel-item">
					        <div>
								<div class="map-wrapper">
										<iframe class="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d975.5535303402833!2d79.84969740189999!3d12.028774907265566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5365c988b17ced%3A0xbb87f00c0f5c3f36!2sKannadasan+Hostel%2C+Pondicherry+University!5e0!3m2!1sen!2sin!4v1552537535495" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
								<div class="container-fluid">
									<div>
										<div class="row qr-scan">
											<div class="col-md-4">
												<i class=""><img src="img/frame.png"></i>
											</div>
											<div class="col-md-4">
												<form class="message">
													<h4><strong>Leave Your Message Here</strong></h4>
													<input type="text" name="name" placeholder="Name"><br>
													<input type="Email" name="email" placeholder="Email Id"><br>
													<textarea placeholder="Message"></textarea><br>
													<button>Submit</button>
												</form>
											</div>
										</div>
									</div>	
								</div>
							</div>
				      </div>
	<!--End Slide-->
		    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
		      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
		      <span class="carousel-control-next-icon" aria-hidden="true"></span>
		      <span class="sr-only">Next</span>
		    </a>
		  </div>
		 </div>
	</div>
<!-- End Carousel-->
	
<!--Footer Section Starts-->
	<div class="container-fluid  footer">
		<div class="footer-top">
			<div class="row">
			   <div class="col-md-4 footer-section">
			      <h3>Address</h3>
			      <p>Ambedkar Chowk, Dehri on sone<br>Rohtas, Bihar 821307</p>
			      
			   </div>
			   <div class="social col-md-4 footer-section">
			      <h3>Connect</h3>
	              <ul>
	              	<a href="https://www.facebook.com/K.Gaurav429025"><li id="facebook"><i class="fa fa-facebook"></i></li></a>
	              	<a href="https://plus.google.com/103062434092953816985"><li id="google-plus"><i class="fa fa-google-plus"></i></li></a>
	              	<a href="https://twitter.com/@gaurav429025"><li id="twitter"><i class="fa fa-twitter"></i></li></a>
	              	<a href="https://www.instagram.com/kgauravg/"><li id="instagram"><i class="fa fa-instagram"></i></li></a>
	              	<a href="https://github.com/kgauravgg"><li id="github"><i class="fa fa-github"></i></li></a>
	              	<a href="https://www.youtube.com/channel/UC82aMPOv-rKVMI9SqefkRlw/"><li id="youtube"><i class="fa fa-youtube"></i></li></a>
	              </ul>
			   </div>
			   <div class="col-md-4 footer-section">
			      <h3>Contact</h3>
			      <p>Mob: 8409220816<br>Email: k.gauravsur@gmail.com</p>
			   </div>
			</div>
		</div>
	</div>
	 
	<div class="container-fluid footer2">
		<div class="">
			<div class="row">
				<div class="col-sm-12">
					<p>Thank you for your visit. Hope to see you again.<br>Developed and maintained by <strong><u>Kumar Gaurav</u></strong></p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>