
<!doctype html>
<html>
<head>
    <title>My PHP App</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
<div>
		<h1>Hello from PHP App!</h1>
		
		<?php
		
			$array=array("Joe", "Josh", "Donna");
			
			if ($_POST["submit"]){
				
				if ($_POST["name"]){
				
					$i = 0;
					$message = "I'm sorry I don't know you!";
	
					//$array = array("apple", "banana", "grape");
	
					while ($array[$i]) {
						//echo "Key: $i Value: $array[$i]<br />";
						
						if ($_POST["name"] == $array[$i]) {
							
							$message = "Hello: ".$_POST['name']." nice to meet you!";
						}
						$i++;
					}
					
					echo $message;	
				
				} else {
					
					echo "please enter your name";
				}
			}
		?>
		
		<form method="post">
			<label for="label">Name</label>
			<input name="name" type="text" />
			<input name="submit" value="submit you name" type="submit" />
		</form>
			
</div>
</body>
</html>
