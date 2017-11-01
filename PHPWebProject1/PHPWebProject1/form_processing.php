<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
    <title>Form Processing</title>
</head>
<body>
    <pre>
        <?php
            print_r($_POST);
        ?>
    </pre>
    <br />
    
    <?php
        if(isset($_POST["submit"]))
        {
            $username = isset($_POST["username"]) ? $_POST["username"] : "";
            $password = isset($_POST["password"]) ? $_POST["password"] : "";
            echo "{$username}: {$password}";
        }
        else
        {
            echo "Form was not submitted";
        }
    ?>
</body>
</html>
