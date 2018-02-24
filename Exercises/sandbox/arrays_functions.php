<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
	"http://www.w3.org/TR/html4/loose.dtd">
	
<html lang="en">
	<head>
		<title>Arrays Functions</title>  
	</head>
	<body>
		
        <?php  
	        $numbers = array(8, 23, 15, 42, 16, 4)         
	    ?><br />
	    <!-- Common arrays functions -->
	    Count: <?php echo count($numbers); ?><br />
	    Max Value: <?php echo max($numbers); ?><br />
	    Min Value: <?php echo min($numbers); ?><br />
	    <pre>
	    Sort: <?php sort($numbers); print_r($numbers) # sort() works 'in-place' changing the original array ?><br />
	    Reverse Sort: <?php rsort($numbers); print_r($numbers); ?><br />
	    </pre>
	    Implode: 
	    <?php # implode() turns an array into a string using a delimiter, here '*'
		    echo $num_string = implode("*", $numbers); 
	    ?><br />
	    Explode:
	    <?php 
		    print_r(explode("*", $num_string)); # explode is very useful with .csv files
		?><br />
		15 in array?: <?php echo in_array(15, $numbers); //returns True/False ?><br />
		19 in array?: <?php echo in_array(19, $numbers); //returns T/F ?><br />
		<br />
		<a target="_blank" href="https://php.net/manual/en/ref.array.php">More arrays functions</a> 

	</body>
</html>