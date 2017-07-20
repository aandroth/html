<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Second Page</title>
	</head>
	<body>
        <?php
           // print_r($_GET);
            $id = $_GET['id'];
        ?>
        <?php
            $id = $_GET['id'];
            echo $id;
        ?>
        <?php
            $id = $_GET['company'];
            echo $id;
        ?>
	</body>
</html>
