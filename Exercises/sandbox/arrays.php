<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
	"http://www.w3.org/TR/html4/loose.dtd">
	
<html lang="en">
	<head>
		<title>Arrays</title>  
	</head>
	<body>
		
        <?php 
	        #define an array
	        $numbers = array(4, 8, 15, 16, 23, 42);
	        echo $numbers[1];
        ?><br />
        <?php 
	        $mixed = array(6, "fox", "dog", array("x", "y", "z"));
        ?><br />
        <?php echo $mixed[2]; ?><br />
        <?php echo $mixed[3]; ?><br />
        
        <?php echo $mixed[2] = "cat"; ?><br />
        <?php echo $mixed[4] = "mouse"; # will create the 4th posiiton?><br />
        <?php echo $mixed[] = "horse"; # will append at the last position?><br /> 
        
        
        <?php
	        # use of print readable function for debugging enclosed in <pre> tags
	        echo "<pre>"; 
	        echo print_r($mixed);
	        echo "</pre>"; 
        ?><br />
        
        <?php 
	        # PHP 5.4 added the short array syntax.
	        $short_array = [1, 2, 3];
        ?> 

	</body>
</html>