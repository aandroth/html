<?php
    include "php_lib.php";
    $errors = array();
    if(isset($_POST["submit"]))
    {

        //Empty Test
        $empty_test = $_POST["empty_test"];
        if(!isset($_POST["empty_test"]) || trim($_POST["empty_test"]) === "")
        {
            $errors["empty_test"] = "Empty Test failed.<br />";
        }
        else
        {
            $empty_test_message = "";
        }

        // MinMax Text
        $minmax_test = $_POST["minmax_test"];

        if(strlen($_POST["minmax_test"]) < 3)
            $errors["minmax_test"] = "Min Test failed.<br />";
        else if(strlen($_POST["minmax_test"]) > 7)
            $errors["minmax_test"] = "Max Test failed.<br />";
        else
            $minmax_test_message = "";

        // InSet Text
        $in_set_test = $_POST["in_set_test"];
        $set = array("room", "boat");
        $errors["in_set_test"] = (!in_array($_POST["in_set_test"], $set)) ? "In Set Test failed.<br />" : "";

        // RegEx Text
        $regex_test = $_POST["regex_test"];
        $errors["regex_test"] = (!preg_match("/@/", $_POST["regex_test"])) ? "Regex Test failed.<br />" : "";

        // String Text
        $string_test = $_POST["string_test"];
        $errors["string_test"] = (strpos($_POST["string_test"], "@") === false) ? "String Test failed.<br />" : "";
    }
    else
    {
        $empty_test = "";
        $empty_test_message = "";
        $minmax_test = "";
        $minmax_test_message = "";
        $in_set_test = "";
        $in_set_test_message = "";
        $regex_test = "";
        $regex_test_message = "";
        $string_test = "";
        $string_test_message = "";

    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
    <title>Form Processing</title>
</head>
<body>
    <?php 
        echo returnErrors($errors);
    ?>
    <br />
    <form action="form_validation.php" method="post">
        Empty Test: <input type="text" name="empty_test" value="<?php echo $empty_test; ?>" />
        <br />
        MinMax Test: <input type="text" name="minmax_test" value="<?php echo $minmax_test; ?>" />
        <br />
        In Set Test:
        <input type="text" name="in_set_test" value="<?php echo $in_set_test; ?>" />
        <br />
        Regex Test:
        <input type="text" name="regex_test" value="<?php echo $regex_test; ?>" />
        <br />
        String Test:
        <input type="text" name="string_test" value="<?php echo $string_test; ?>" />
        <br />
        <br />
        <input type="submit" name="submit" value="Submit" />
    </form>
    <pre>
</body>
</html>
