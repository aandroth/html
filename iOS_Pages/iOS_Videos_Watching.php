<?php
    echo "&nbsp;";
    $url = $_SERVER['REQUEST_URI'];
    $parts = parse_url($url);
    parse_str($parts['query'], $query);
    echo "<script type=\"text/javascript\">
                var YTid = \"" . $query['YTid'] . "\";
            </script>";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
    <title>&dagger;Aquin's Great Games&dagger;</title>
    <link rel="stylesheet" type="text/css" href="../../OfficeDesk.scss" />
    <script src="../../../Script.js"></script>
    <script>
        function mouseUp_OpenVideos(idTag) {
           alert(YTid);
        }
    </script>
</head>
<body>  
    <div class="iOS_Active" id="video_page" style="background-image:url('../Images/FS_Screens/iOS_Videos_Watching.png'); position:absolute; top:0%; left:15%; width:70%; height:45%;">
        <iframe id="theIFrame" style="position:absolute; top:12%; left:14%; width:71%; height:75%; float:left;">
        </iframe>
    </div>
    <div class="iOS_Back" style="position:absolute; background-size:contain; background-repeat:no-repeat; background-image:url('../Images/FS_Screens/Back_Button.png'); top:2%; left:1%; width:10%; height:4%;">
        <!--visible back button-->
    <div id="Back" class="iOS_Back" onmouseup="goBack()" onmouseover="mouseOver_5pxBorder('Back')" onmouseout="mouseOut_5pxBorder('Back')" style="position:absolute; top:0%; left:0%; width:95%; height:70%;">
        <!--invisible button to go back-->
    </div> 
    </div>
    <div id="Back" class="iOS_Back" onmouseup="goBack()" onmouseover="mouseOver_5pxBorder('Back')" onmouseout="mouseOut_5pxBorder('Back')" style="position:absolute; top:2%; left:1%; width:20%; height:4.7%;">
        <!--invisible button to go back-->
    </div>  
</body>
    <script>
        determineHeight('iOS_Active', 0.7);
        determineHeight('iOS_Back', 0.5);
        document.getElementById('theIFrame').src = 'https://www.youtube.com/embed/' + YTid;
    </script>
</html>
