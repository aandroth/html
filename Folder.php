<?php

    // Read line from the text file and write the contents to the client
    $resume = file_get_contents("myResume.txt", false);
    echo "<script type=\"text/javascript\">
                var resume = " . json_encode($resume) . ";
            </script>";
    $bio = file_get_contents("myBio.txt", false);
    echo "<script type=\"text/javascript\">
                var bio = " . json_encode($bio) . ";
            </script>";
    $phil = file_get_contents("myPhilosophy.txt", false);
    echo "<script type=\"text/javascript\">
                var phil = " . json_encode($phil) . ";
            </script>";
    $hire = file_get_contents("myHire.txt", false);
    echo "<script type=\"text/javascript\">
                var hire = " . json_encode($hire) . ";
            </script>";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
    <title>&dagger;Aquin's Great Games&dagger;</title>
    <link rel="stylesheet" type="text/css" href="../../OfficeDesk.scss" />
    <script src="../../Script.js"></script>
    <script>
        function turnPageLeft()
	{
            document.getElementById('infoBoxText0').innerHTML = '<img src="Images/Profile.png" style="width:30%; height:30%;">' + bio;
            //document.getElementById('infoBoxText0').innerHTML = bio;
            document.getElementById('infoBoxText1').innerHTML = phil;
            document.getElementById('infoBoxText2').innerHTML = hire;
            //scaleTextByScreenWidth('infoBoxText0', 20);
        }
    </script>
</head>
<body style="height:100%;">
    <div class="Folder" style="background-image:url('Images/top-secret-folder-open.png'); background-size:100% 100%; position:absolute; top:0%; left:0%; width:99.9%; height:99.9%; float:left; background-repeat:no-repeat;">
    </div>
    <div class="infoBox0" style="background-image:url('Images/Paper_Stack_Tall.png'); background-size:contain; background-position:center center; background-repeat:no-repeat; position:absolute; top:4%; left:7%; width:30%; height:80%; float:left; padding:5%; background-size:100% 100%">
        <h1 id="h1" style="font-size:3.0vw; color:black; text-align:center; position:relative; top:-5%; height:15%;">
            Aaron Andrews
        </h1>
        <p id="infoBoxText0" class="infoBoxText0" style="font-size:1.25vw; position:relative; top:-10%; color:black">
            <!--<img src="Images/Profile.png" style="width:30%; height:30%;">-->
        </p>
    </div>
    <div class="infoBox1" style="background-image:url('Images/Paper_Stack_Tall.png'); background-size:100% 100%; background-position:center; background-repeat:no-repeat; position:absolute; right:7%; top:0%; width:30%; height:80%; float:right; padding:5%;">
        <h1 style="color:black; text-align:center; top:-10%">
            Programmer Philosophy
        </h1>
        <p id="infoBoxText1" class="infoBoxText1" style="font-size:1.25vw; color:black;">
        </p>
        <h1 style="color:black; text-align:center">
            Programming for Hire
        </h1>
        <p id="infoBoxText2" class="infoBoxText1" style="font-size:1.25vw; color:black;">
        </p>
    </div>
    <div id="rightArrow" class="rightArrow_Class" onmouseup="mouseUp('Folder2.php')" onmouseout="mouseOut('right_Arrow_Highlight')" onmouseover="mouseOver('right_Arrow_Highlight')" style="background-image:url('../Images/Arrow_Forward.png'); background-size:contain; position:absolute; top:10%; right:5%; width:10%; height:20%; background-repeat:no-repeat;">
        <div id="right_Arrow_Highlight" style="visibility:hidden; pointer-events:none; background-image:url('../Images/Arrow_Forward_Highlight.png'); background-size:contain; position:absolute; top:0%; right:0%; width:100%; height:100%; background-repeat:no-repeat;">
        </div>
    </div>
    <!-- Menu buttons -->
    <div class="Menu_Bar">
        <div onmouseup="mouseUp('index.php')" onmousedown="mouseDown_MenuItem('Menu_Index_Highlight')" onmouseout="mouseOut_MenuItem('Menu_Index_Highlight')" onmouseover="mouseOver_MenuItem('Menu_Index_Highlight')" style="position:absolute; top:0%; left:2%; width:14%; height:100%; float:left;">
            <div id="Menu_Index_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
        <div onmouseup="mouseUp('Folder.php')" onmousedown="mouseDown_MenuItem('Menu_Folder_Highlight')" onmouseout="mouseOut_MenuItem('Menu_Folder_Highlight')" onmouseover="mouseOver_MenuItem('Menu_Folder_Highlight')" style="position:absolute; top:0%; left:16%; width:13.5%; height:100%; float:left;">
            <div id="Menu_Folder_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
        <div onmouseup="mouseUp('iOS_Pages/iOS_Menu.php')" onmousedown="mouseDown_MenuItem('Menu_FS_Highlight')" onmouseout="mouseOut_MenuItem('Menu_FS_Highlight')" onmouseover="mouseOver_MenuItem('Menu_FS_Highlight')" style="position:absolute; top:0%; left:29.5%; width:15%; height:100%; float:left;">
            <div id="Menu_FS_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
        <div onmouseup="mouseUp('Canvas.php')" onmousedown="mouseDown_MenuItem('Menu_Sketchpad_Highlight')" onmouseout="mouseOut_MenuItem('Menu_Sketchpad_Highlight')" onmouseover="mouseOver_MenuItem('Menu_Sketchpad_Highlight')" style="position:absolute; top:0%; left:44.5%; width:14%; height:100%; float:left;">
            <div id="Menu_Sketchpad_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
        <div onmouseup="mouseUp('Checkerboard.php')" onmousedown="mouseDown_MenuItem('Menu_Checkers_Highlight')" onmouseout="mouseOut_MenuItem('Menu_Checkers_Highlight')" onmouseover="mouseOver_MenuItem('Menu_Checkers_Highlight')" style="position:absolute; top:0%; left:58%; width:15%; height:100%; float:left;">
            <div id="Menu_Checkers_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
        <div onmouseup="mouseUp('PokeGameIntro.php')" onmousedown="mouseDown_MenuItem('Menu_PokeBall_Highlight')" onmouseout="mouseOut_MenuItem('Menu_PokeBall_Highlight')" onmouseover="mouseOver_MenuItem('Menu_PokeBall_Highlight')" style="position:absolute; top:0%; left:73%; width:15%; height:100%; float:left;">
            <div id="Menu_PokeBall_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
        <div onmouseup="mouseUp('Dinaki_Adventures.php')" onmousedown="mouseDown_MenuItem('Menu_Dinaki_Highlight')" onmouseout="mouseOut_MenuItem('Menu_Dinaki_Highlight')" onmouseover="mouseOver_MenuItem('Menu_Dinaki_Highlight')" style="position:absolute; top:0%; left:88%; width:11.9%; height:100%; float:left;">
            <div id="Menu_Dinaki_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
    </div>
</body>
    <script>
	turnPageLeft();
//        determineHeight('infoBox0', 0.75);
//        determineHeight('infoBox1', 0.75);
        //determineHeight('Folder', 0.4659);
        determineHeight('Menu_Bar', 0.15);
//        determineHeight('leftArrow_Class', 1);
        determineHeight('rightArrow_Class', 1);
        scaleTextByScreenWidth('infoBoxText0', 20);
        scaleTextByScreenWidth('infoBoxText1', 20);
    </script>
</html>
