<?php 

require_once 'init.php';

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Send Mailing list</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>

        <div class="conatiner">
        	<form action="send.php" method="post">
        	<div class="field">
        		<label for="">
        			Subject
        			<input type="text" name="subject">
        		</label>
        	</div>
        	<div class="field">
        		<label for="">
        			Body
        			<textarea name="body" rows="8"></textarea>
        		</label>
        	</div>
        	<input type="submit" value="Send" class="btn btn-primary">
        	</form>
        </div>
        
    </body>
</html>