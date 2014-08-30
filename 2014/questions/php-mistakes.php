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
	<title>Fourth question - Developer challenge 2014</title>
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
  			<h1>4. Found mistakes</h1>
  			<div class="col-md-6"><p class="text-left"><a href="/">Back to index</a></p></div>
  		</div>
	</div>

	<div class="row">
  		<div class="col-md-6 col-md-offset-3">
			
			<div class="panel panel-default">
  				<div class="panel-body">
  					<p>Last question. Just check the code or remake.</p>
  				</div>
  			</div>

  			<div class="panel panel-danger">
          		<div class="panel-heading">Code editor</div>
            	<div class="panel-body">
                	<textarea id="code" name="code">
<-?php
class ExampleClass
{
	var $password; // Password sent from input of a new user.
	var $p_key; // Private key 
	var $key = "./0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz"; // Encode 64 bits

	public function Algorithm($password, p_key, $key)
	{

		$this->$key;
		$this->pkey = 'ultimateprivatekey81';
		
		if($password == "")
		{

			$fail = "Please, type a valid password"
			return $fail;

		}else{

			function crypt_password($password, $p_key, key){
				$encode = md5(microtime() . $password . p_key);
				return $encode;
			}

		}

	}

}
 
// Now, make a simple example. Works?
$define = ExampleClass();
$password =  '8045ase' // This is the POST result from the password input
echo $define->crypt_password($password);
 
?>
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