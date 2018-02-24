<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
	"http://www.w3.org/TR/html4/loose.dtd">
	
<html lang="en">
	<head>
		<title>Associative Arrays</title>  
	</head>
	<body>
		
        <?php 
	        $assoc = array("first_name" => "Massamba", "last_name" => "Sow");
        ?>
        <?php echo $assoc["first_name"]; ?><br />
        <?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br />
        
        <?php $assoc["first_name"] = "Mass"; ?><br />
        <?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br />
        
        <?php $numbers = array(4, 8, 15, 16, 23, 42) ?><br />
        <?php $numbers_assoc = array(0 => 4, 1 => 8, 2 => 15, 3 => 16, 4 => 23, 5 => 42) ?><br />
        <?php echo $numbers[0]; ?><br />
        <?php echo $numbers_assoc[0]; ?><br />   

	</body>
</html>