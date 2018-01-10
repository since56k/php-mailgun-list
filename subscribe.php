<?php 

require_once 'init.php';

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Subscribe</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>

        <div class="conatiner">
        	<form action="send.php" method="post">
        	<div class="field">
        		<label for="">
        			Name
        			<input type="text" name="name">
        		</label>
        	</div>
        	<div class="field">
        		<label for="">
        			Email
        			<input type="text" name="email">
        		</label>
        	</div>
        	<input type="submit" value="Send" class="btn btn-primary">
        	</form>
        </div>
        
    </body>
</html>