<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Write a program that prints the numbers from 1 to 100. But for multiples of three print "Fizz" instead of the number and for the multiples of five print "Buzz". For numbers which are multiples of both three and five print "FizzBuzz".</title>
</head>
<body>
	<?php
	
		for ($i=1; $i < 101; $i++) { 
			if ( ($i % 5 == 0)AND ($i%3 == 0) ) {
				echo  "FizzBuzz";
			}else{
				if ($i % 5 == 0) {
					echo  "Buzz";
				}else{
					if ($i % 3 == 0) {
						echo  "Fizz";
					}else{
						echo $i;
					}
				}
			}
		}

	?>

</body>
</html>
