<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My Resume</title>
  	<link rel="stylesheet" href="/css/bootstrap.min.css">
  	<link rel="stylesheet" href="/css/resume.css">
</head>

<body class="main_stuff less_main">
	<div class="container-fluid less_main">
		<h1 id="mk" class="hidden-sm hidden-xs">Mary Kaitlin Warren
			<span class="small"> A Summary in Web</span>
		</h1>

		
		<div class="row">
			<div class="col-sm-6 hidden-xs">
				<h2 class="about_me col-md-6">About Me</h2>
					<div id="bt"><img id="bt" src="/img/mkw.jpg"></div>
					<p class="lead">I am a current student at CodeUp in San Antonio. I am studying to be a full-stack web developer, specializing in HTML, CSS, pHp, and JavaScript.</p>
				<div class="lsnavbar hidden-xs col-sm-6 col-med-4">
					<div class="list-group">
					  <a href="https://chrome.google.com/webstore/detail/adeleing/aokkldlmlolojcjaicldakcjbjhjoaen" class="list-group-item">Adele(ing): A Chrome extension</a>

					  <a href="http://greasemonkey.rocks" class="list-group-item active">Grease Monkey</a>
					  <a href="{{{action('HomeController@showWhackamole')}}}" class="list-group-item">Whack-A-Mole</a>
					  <a href="{{{action('HomeController@showSimpleSimon')}}}" class="list-group-item">Simple Simon
					  </a>
					</div>
				</div>
				<div class="contactmebtn">
		<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
					  Contact Me
					</button>

					<!-- Modal -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <h4 class="modal-title" id="myModalLabel">Contact Me</h4>
					      </div>
					      <div class="modal-body">
					        	<input type="text" class="form-control" placeholder="Name">
								<input type="text" class="form-control" placeholder="E-mail">
								<textarea class="form-control" rows="3" placeholder="Message..."></textarea>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        <button type="button" class="btn btn-primary">Submit</button>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
			</div>

			

			<div>
				<div class="col-sm-6" id="resume_points">
					<h2>General Experience</h2>

					<h3>Assistant Manager&nbsp;|<span class="small">&nbsp; Enterprise Rent A Car</span></h3>
						<dt>
							<dd>Directly managed 20 employees: both part and full time</dd>
							<dd>Provided excellent customer service</dd>
							<dd>Collected past due payments from customers and accounts</dd>
							<dd></dd>
						</dt>

					<h3>Intern&nbsp;|<span class="small"> &nbsp; Center for Archaeological Research</span></h3>
						<dt>
							<dd>Managed the record of incoming artifacts</dd>
							<dd>Analyzed artifacts to determine cultural signifigance</dd>
							<dd></dd>
							<dd></dd>
						</dt>
					<h3>Gallery Assistant&nbsp;|<span class="small">&nbsp; Neidorff Gallery</span></h3>
						<dt>
							<dd>Member of team that developed a museum show including exhibits, lighting, interior design and content and materials</dd>
							<dd>Delivered public tours and presentations</dd>

					<h3>Statistics Intern&nbsp;|<span class="small"> &nbsp; San Antonio Children's Museum</span></h3>
						<dt>
							<dd>Developed and delivered statistical patron surveys used to improve public outreach and for marketing campaigns</dd>
							<dd>Prepared presentations and 30 page report based on data from patron surveys for use in board communications and meetings</dd>
						</dt>
					<h3>President&nbsp;|<span class="small">&nbsp; Trinity University Lacrosse</span></h3>
						<dt>
							<dd>Manage club finances and $1,500 annual budget</dd>
							<dd>Negotiate formal terms and conditions for play between the league and the school for 3 seasons</dd>
							<dd>Develop and manage team schedule in concert with other schools and league each 3 seasons</dd>

					<h3>Skills&nbsp;|<span class="small"> &nbsp; </span></h3>
						<dt>
							<dd>Computer Languages: HTML, CSS, JavaScript, PHP</dd>
							<dd>Foreign Language: Fluent in German, Proficient in Spanish
							<dd>Novice homebrewer and amateur fly-fisherman</dd>	
						</dt>
					

					<h3>Trinity Unviersity&nbsp;|<span class="small"> &nbsp; Bachelor of Arts</span></h3>
						<dt>
							<dd>Anthropology and German
						</dt>
				</div>
			</div>
			
		<div class="homebrew hidden-xs">
					<p><a href="http://www.amazon.com/Complete-Joy-Homebrewing-Third/dp/0060531053/ref=sr_1_1?ie=UTF8&qid=1443559178&sr=8-1&keywords=complete+beginners+guide+to+homebrewing">Take a breath, relax, and have a homebrew.</a></p>
		</div>

		</div>
	</div>


	<footer>

<!-- 		<p class="contact"><a href="resume_contactinfo.html" alt="Contact_Me">Contact Me
			<span class="glyphicon glyphicon-send" aria-hidden="true"></span>
			<span class="glyphicon-class"></span></a></p>
 --></footer>
		    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>