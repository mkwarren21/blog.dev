<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/simplesimon.css">
	<title>Simple Fury</title>
</head>

<body>
	<main class = "container-fluid">	
		<div>
			<a id = "ultron"></a>
		</div>

		<section class="row">
			<div class="col-md-6 col-md-offset-3"> 
				<div id="mainbox">
					<div id="buttons">
						<div class="row">
							<a class="color-btn" id="red" data-id="1"></a>
							<a class="color-btn" id="green" data-id="2"></a>
						</div>
						<div class="row">
							<a class="color-btn" id="blue" data-id="3"></a>
							<a class="color-btn" id="yellow" data-id="4"></a>
						</div>
						<div class="startarea">
							<a id="start"><br>Assemble</a>
						</div>
						<div class="scorearea">
							<p id="scorecard">Level: <br>0</p>
							<p id="ult_score"></p>
						</div>

						<div class="hh" id="left">
							<p>Cut off the head</p>
						</div>
						<div class="hh" id="right">
							<p>And two more will take it's place.</p>
						</div>
					</div>	
				</div>
			</div>
		</section>


		<div>
			<a id = "replay">Rebuild Shield?</a>
		</div>
	</main>	

	<script src="/js/bootstrap.min.js"></script>
	<script src = "/js/jquery-1.11.3.min.js"></script>
	<script src = " /js/jquery-ui.js"></script>
	<script src = "/js/simplesimon.js"></script>
</body>
</html>