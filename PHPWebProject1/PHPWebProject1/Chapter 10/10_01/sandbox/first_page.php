<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>First Page</title>
	</head>
	<body>
		<?php 
		
			$link_name = "Second Page";
			
			for($count = 0; $count <= 10; $count++) {
				echo "<a href=\"second_page.php?id=" . $count . "\">" . $link_name . "</a>";
				echo "<br>";
			}
		?>
		
		<?php 
			$company = "Johnson & Johnson"; 
			$id = 7;	
		?>
		<a href="second_page.php?id=<?php echo $id; ?>&company=<?php echo rawurlencode($company); ?>"><?php echo $link_name ?></a>

		<?php
			$page = "Will Spear";
			$quote = "To spear or not to spear";
			$link1 = "/bio/" . rawurlencode($page) . "?quote=" . urlencode($quote);

			echo $link1 . "<br />";
		?>
	</body>
</html>
