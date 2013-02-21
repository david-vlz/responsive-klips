<!DOCTYPE html>

<html>

	<head>
		<title>Responsive KLIPS</title>	
		<!-- Bootstrap-css -->
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen" />
		<!-- eigenen css-Datei für weitere Modifikationen -->
		<link rel="stylesheet" href="css/custom.css" media="screen" />
	</head>

	<body>
		<div id="wrapper" class="container-fluid">
			
			<div id="header" class="row-fluid">
				<? $this->header->render() ?>
			</div>
			
			<div id="main" class="row-fluid">
				<div id="sidebar" class="span3">
					<? $this->sidebar->render() ?>
				</div>
				<div id="content" class="span9">
					<? $this->content->render() ?>
				</div>
			</div>
			
			<div id="footer" class="row-fluid">
					<pre><? var_dump(array_merge($_GET, $_POST)) ?></pre>
					<pre><? var_dump($this->content) ?></pre>
			</div>

		</div>
	</body>
	
</html>
