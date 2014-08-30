<?php

defined('PATH') OR exit('No direct access is allowed.');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="extra/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="extra/css/bootstrap-theme.css">
  <link rel="stylesheet" type="text/css" href="extra/highlight/lib/codemirror.css">
	<title>Third question - Developer challenge 2014</title>
</head>

<body>
  <script src="extra/highlight/lib/codemirror.js"></script>
  <script src="extra/highlight/addon/edit/matchbrackets.js"></script>
  <script src="extra/highlight/mode/htmlmixed/htmlmixed.js"></script>
  <script src="extra/highlight/mode/xml/xml.js"></script>
  <script src="extra/highlight/mode/javascript/javascript.js"></script>
  <script src="extra/highlight/mode/css/css.js"></script>
  <script src="extra/highlight/mode/clike/clike.js"></script>
  <script src="extra/highlight/mode/php/php.js"></script>

	<div class="row">
  		<div class="col-md-6 col-md-offset-3">
  			<h1>3. Design patterns and OPP</h1>
  			<div class="col-md-6"><p class="text-left"><a href="/">Back to index</a></p></div>
  			<div class="col-md-6"><p class="text-right"><a href="?quest=php-mistakes">Next question</a></p></div>
  		</div>
	</div>

	<div class="row">
  		<div class="col-md-6 col-md-offset-3">
			
			<div class="panel panel-default">
  				<div class="panel-body">
  					<p>Next two questions.</p>
            <ol>
              <li>Design a simple <b>design pattern</b> that organize your code. Make folders, blank .php files and all that you need.</li>
              <li>Make a simple OOP file with PHP and display with this <code>$string</code> var with this message: <code>Yes! it's works.</code><br>
            </ol>
  				</div>
  			</div>

        <div class="alert alert-warning" role="alert">Check the examples for the questions on the code editor.</div>
        <div class="panel panel-danger">
          <div class="panel-heading">Code editor</div>
            <div class="panel-body">
                <textarea id="code" name="code">
1. Here design pattern:

  |___~/folder_one
  |___~/folder_one/file.php

---------------------------------------------------

2. Example of oop: ~/example.php

  <? php

    class conquestRean { 
      ...
    }

  ? >
                </textarea>
            </div>
        </div>
      </div>
            <script>
              var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
                lineNumbers: true,
                matchBrackets: true,
                mode: "application/x-httpd-php",
                indentUnit: 4,
                indentWithTabs: true
              });
    </script>

  		</div>
  	</div>
</body>
</html>