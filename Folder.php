<?php
    $f = fopen("myFile.txt", "r");
    $text = "";
	// Read line from the text file and write the contents to the client

    $text = file_get_contents("myFile.txt", false);
	fclose($f);
    echo "<script type=\"text/javascript\">
                var resume = " . json_encode($text) . ";
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
        function turnPageRight(){

            document.getElementsByClassName('infoBoxText0')[0].innerHTML = resume;
            scaleTextByScreenWidth('infoBoxText0', 12);
            document.getElementById('infoBoxText1').innerHTML = "Aaron strongly believes in and uses human-readable code. Variable, function, and class names should all be easily identifiable as to what they are and how they are used.";
           
            document.getElementById('leftArrow').style.visibility = "visible";
            document.getElementById('rightArrow').style.visibility = "hidden";
            document.getElementById('right_Arrow_Highlight').style.visibility = "hidden";
            document.getElementById('h1').innerHTML = "Resume of Aaron Andrews<br>alandrews3@alaska.edu (907) 750-2617";
        }
        function turnPageLeft(){

            document.getElementById('infoBoxText0').innerHTML = "<img src=\"Images/Profile.png\" style=\"width:30%; height:30%;\"> Aaron Andrews is a programmer, classically trained in Computer Science at the University of Alaska Fairbanks. He holds a Bachelors degree, and has taken a number of extra-curricular classes ranging from network systems, graphics, and artificial intelligence. Aaron Andrews also has prior work experience in both IT, working as a student technician for the Office of Information Technology, and in iOS development, as a developer for the app, Frontier Scientsts Media. Both of these positions involved working with self-direction, and with coworkers. Mr. Andrews fully believes in the power of teamwork, and focuses on making sure the team is working together fluidly, towards the completion of the current task.";
            document.getElementById('infoBoxText1').innerHTML = "This programmer would be an excellent hire for internships and entry to mid-level programming positions. He is currently attending the Academy of Interactive Entertainment to focus his programming knowledge towards developement in video games.";
            
            document.getElementById('leftArrow').style.visibility = "hidden";
            document.getElementById('left_Arrow_Highlight').style.visibility = "hidden";
            document.getElementById('rightArrow').style.visibility = "visible";
            document.getElementById('h1').innerHTML = "POI: Aaron Andrews";
            scaleTextByScreenWidth('infoBoxText0', 20);
        }
        
        
    </script>
</head>
<body>
    <div class="Folder" style="background-image:url('Images/top-secret-folder-open.png'); background-size:cover; position:absolute; top:0%; left:0%; width:99.9%; height:99.9%; float:left; background-repeat:no-repeat;">
    </div>
    <div class="infoBox0" style="background-image:url('Images/Paper_Stack_Tall.png'); background-size:contain; background-position:center center; background-repeat:no-repeat; position:absolute; top:10%; left:7%; width:30%; height:100%; float:left; padding:5%;">
        <h1 id="h1" style="color:black; text-align:center; position:relative; top:-15%; height:15%;">
            Person of Interest: Aaron Andrews
        </h1>
        <p id="infoBoxText0" class="infoBoxText0" style="font-size:1.25vw; position:relative; top:-10%; "> 
            <img src="Images/Profile.png" style="width:30%; height:30%;">
            Aaron Andrews is a programmer, classically trained in Computer Science at the University of Alaska Fairbanks. 
            He holds a Bachelors degree, and has taken a number of extra-curricular classes ranging from network systems, graphics, and artificial intelligence.
            Aaron Andrews also has prior work experience in both IT, working as a student technician for the Office of Information Technology,
             and in iOS development, as a developer for the app, Frontier Scientsts Media. Both of these positions involved working with self-direction,
            and with coworkers. Mr. Andrews fully believes in the power of teamwork, and focuses on making sure the team is working together fluidly,
            towards the completion of the current task.
        </p>
    </div>
    <div class="infoBox1" style="background-image:url('Images/Paper_Stack_Tall.png'); background-size:contain; background-position:center center; background-repeat:no-repeat; position:absolute; top:12%; right:7%; width:30%; height:100%; float:right; padding:5%;">
        <h1 style="color:black; text-align:center">
            Programming Philosophy
        </h1>  
        <p id="infoBoxText1" class="infoBoxText1" style="font-size:1.25vw">
            This programmer would be an excellent hire for internships and entry to mid-level programming positions. 
            He is currently attending the Academy of Interactive Entertainment to focus his programming knowledge towards developement in video games.
        </p>
    </div>
    <div id="leftArrow" class="leftArrow_Class" onmouseup="turnPageLeft()" onmouseout="mouseOut('left_Arrow_Highlight')" onmouseover="mouseOver('left_Arrow_Highlight')" style="background-image:url('../Images/Arrow.png'); visibility:hidden; background-size:cover; position:absolute; top:10%; left:0%; width:10%; height:20%; background-repeat:no-repeat;">
        <div id="left_Arrow_Highlight" style="visibility:hidden; pointer-events:none; background-image:url('../Images/Arrow_Highlight.png'); background-size:cover; position:absolute; top:0%; left:0%; width:100%; height:100%; background-repeat:no-repeat;">
        </div>
    </div>
    <div id="rightArrow" class="rightArrow_Class" onmouseup="turnPageRight()" onmouseout="mouseOut('right_Arrow_Highlight')" onmouseover="mouseOver('right_Arrow_Highlight')" style="background-image:url('../Images/Arrow_Forward.png'); background-size:cover; position:absolute; top:10%; right:0%; width:10%; height:20%; background-repeat:no-repeat;">
        <div id="right_Arrow_Highlight" style="visibility:hidden; pointer-events:none; background-image:url('../Images/Arrow_Forward_Highlight.png'); background-size:cover; position:absolute; top:0%; right:0%; width:100%; height:100%; background-repeat:no-repeat;">
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
        determineHeight('infoBox0', 0.75);
        determineHeight('infoBox1', 0.75);
        //determineHeight('Folder', 0.4659);
        determineHeight('Menu_Bar', 0.15);
        determineHeight('leftArrow_Class', 1);
        determineHeight('rightArrow_Class', 1);
        //scaleTextByScreenWidth('infoBoxText0', 20);
        //scaleTextByScreenWidth('infoBoxText1', 20);
    </script>
</html>
