<?php

defined ('PATH') OR exit ('No direct access is allowed.');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="extra/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="extra/css/bootstrap-theme.css">
  <link rel="stylesheet" type="text/css" href="extra/highlight/lib/codemirror.css">
	<title>First question - Developer challenge 2014</title>
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
  			<h1>1. PHP Fundamentals</h1>
  			<div class="col-md-6"><p class="text-left"><a href="/">Back to index</a></p></div>
  			<div class="col-md-6"><p class="text-right"><a href="?quest=php-security">Next question</a></p></div>
  		</div>
	</div>

	<div class="row">
  		<div class="col-md-6 col-md-offset-3">
			
			<div class="panel panel-default">
  				<div class="panel-body">
  					<p>Start. First of all, need several things.</p>
            <ol>
              <li>Make and comment one new function that if the value using <code>$_GET['v']</code> is 1, display: <code>"1 means TRUE on PHP"</code> and if <code>$_GET['v']</code> is 0, display: <code>"0 is the same as FALSE"</code>.</li>
              <li>Make a loop that create a full list start on the number 1 to number 20. <b>Keep the performance!</b></li>
              <li>Make a form. Use only for the first <code>input</code> <code>id="name"</code> and on the second <code>input</code> use <code>id="Nick"</code>.</li>
            </ol>
  				</div>
  		</div>

      <div class="alert alert-info" role="alert">Work below if you like, remember <b>copy and paste</b> the code after finish!</div>
        <div class="panel panel-danger">
          <div class="panel-heading">Code editor</div>
            <div class="panel-body">
                <textarea id="code" name="code"><h1>Type here your code!</h1></textarea>
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