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
	<title>Second question - Developer challenge 2014</title>
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
  			<h1>2. PHP Security</h1>
  			<div class="col-md-6"><p class="text-left"><a href="/">Back to index</a></p></div>
  			<div class="col-md-6"><p class="text-right"><a href="?quest=php-dp-oop">Next question</a></p></div>
  		</div>
	</div>

	<div class="row">
  		<div class="col-md-6 col-md-offset-3">
			
			<div class="panel panel-default">
          <div class="panel-body">
            <p>Finished first question? Well, it is time to check your knowledge about security. Only one question.</p>
            <ol>
              <li>
              Make a <b>custom function xss_clean</b> called: <code>function xss_clean()</code> that improved <code>strip_tags()</code> (strip_tags it's a default function on the library of PHP. Here official docs: <a href="http://php.net/manual/en/function.strip-tags.php">strip_tags()</a> )<br>
              <b>Remember:</b> Improve mainly the fails with dupe tags <code><< & >></code>
              </li>
            </ol>
          </div>
      </div>

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