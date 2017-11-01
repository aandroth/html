<?php
    require_once("php_lib.php");

    if(isset($_POST["submit"]))
    {
        if($_POST["username"] == "aa" && $_POST["password"] == "ss")
        {
            redirect_to("index.php");
        }
        else
        {
            $message = "Error with username or password";
            $username = $_POST["username"];
        }

    }
    else
    {
        $username = "";
        $password = "";
        $message = "Please log in";
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
    <title>Form Processing</title>
</head>
<body>
    <?php echo $message;?>
    <br />
    <form action="form_single.php" method="post">
        Username: <input type="text" name="username" value="<?php echo stripslashes($username); ?>" />
        <br />
        Password: <input type="password" name="password" value="" />
        <br />
        <br />
        <input type="submit" name="submit" value="Submit" />
    </form>
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
