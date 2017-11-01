<?php
    function redirect_to($new_location)
    {
        header("Location: " . $new_location);
        exit;
    }

    function returnErrors($errors = array())
    {
        $output = "";
        if(!empty($errors) > 0)
        {
            $output .= "<div class=\"error\">";
            $output .= "Please fix the following errors:";
            $output .= "<ul>";
            foreach($errors as $key => $err)
            {
                $output .= "<li>{$err}</li>";
            }
            $output .= "</ul>";
            $output .= "</div>";
        }
        return $output;
    }

    function hasPresence($value)
    {
        return (isset($value) && trim($value) !== "");
    }

    function isAtOrAboveMin($value, $min)
    {
        // MinMax Text
        return (strlen($value) >= $min);
    }

    function isAtOrBelowMax($value, $max)
    {
        return (strlen($value) <= $max);
    }

    function isInSet($value, $set)
    {
        return (in_array($value, $set));
    }
?>