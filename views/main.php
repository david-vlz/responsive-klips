<!doctype html>
<html lang="de">

	<head>
		<meta charset="utf-8">
		<title>Responsive KLIPS</title>
		<meta name="viewport" content="width=device-width">
		<link rel="shortcut icon" href="/img/favicon.ico"> <!-- Browser-Icon (gibt es noch nicht...) -->	 
		<link rel="apple-touch-icon" href="/img/apple-touch-icon.png"> <!-- iPhone-/iPad-Icon (sollte 114x114 Pixel sein, keine Transparenz; gibt es auch noch nicht...) -->

		<link href="css/stylesheet.css" rel="stylesheet" media="screen" />
		<script type="text/javascript" src="js/jquery-1.9.1.js" ></script>
		<script type="text/javascript" src="js/jquery.chained.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js" ></script>
		
	</head>

	<body>
		<div id="wrapper" class="container-fluid">
			
			<header id="header" class="row-fluid">
				<? $this->header->render() ?>
			</header>
			
			<div id="main" class="row-fluid">
				<nav id="sidebar" class="span3">
					<? $this->sidebar->render() ?>
				</nav>
				<div id="content" class="span9">
					<? $this->content->render() ?>
				</div>
			</div>
			
			<footer id="footer" class="row-fluid">
					<pre><? var_dump(array_merge($_GET, $_POST)) ?></pre>
					<pre><? var_dump($this->content) ?></pre>
			</footer>

		</div>
	</body>
	
</html>
