<?php

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
    <title>&dagger;Aquin's Great Games&dagger;</title>
    <link rel="stylesheet" type="text/css" href="../../OfficeDesk.scss" />
    <script src="../../../Script.js"></script>
</head>
<body>
    <div class="iOS_Active" style="background-image:url('../Images/FS_Screens/iOS_Menu.png');">
        <div style="position:absolute; top:19%; left:13.5%; width:72%; height:80%; float:left;">
            <div id="Research" class="iOS_Menu_Button" onmouseup="mouseUp('iOS_Research.php')" onmouseover="mouseOver_5pxBorder('Research')" onmouseout="mouseOut_5pxBorder('Research')">
                <!--invisible button to go to Research-->
            </div>
            <div id="Videos" class="iOS_Menu_Button" onmouseup="mouseUp('iOS_Videos.php')" onmouseover="mouseOver_5pxBorder('Videos')" onmouseout="mouseOut_5pxBorder('Videos')">
                <!--invisible button to go to Videos-->
            </div>
            <div id="Map" class="iOS_Menu_Button" onmouseup="mouseUp('iOS_Map.php')" onmouseover="mouseOver_5pxBorder('Map')" onmouseout="mouseOut_5pxBorder('Map')">
                <!--invisible buttom to go to Map-->
            </div>
            <div id="Articles" class="iOS_Menu_Button" onmouseup="mouseUp('iOS_Articles.php')" onmouseover="mouseOver_5pxBorder('Articles')" onmouseout="mouseOut_5pxBorder('Articles')">
                <!--invisible button to go to Articles-->
            </div>
            <div id="Ask" class="iOS_Menu_Button" onmouseup="mouseUp('iOS_Ask.php')" onmouseover="mouseOver_5pxBorder('Ask')" onmouseout="mouseOut_5pxBorder('Ask')">
                <!--invisible button to go to Ask-->
            </div>
            <div id="About" class="iOS_Menu_Button" onmouseup="mouseUp('iOS_About.php')" onmouseover="mouseOver_5pxBorder('About')" onmouseout="mouseOut_5pxBorder('About')">
                <!--invisible button to go to About-->
            </div>
        </div>
    </div>
    <div class="iOS_Info_Box" style="height:70%; background-size:100% 100%;">
        <h1 style="color:black; text-align:center">
            Main Menu
        </h1>
        <p class="info_Box_Text">
            This app was created for the news group, Frontier Scientists, by student workers at the Artcic Region Supercomputing Center. 
            The purpose of this app is to take the information from Frontier Scientists' website, 
            <a href="http://frontierscientists.com/">frontierscientists.com</a>, and put it into a unique, mobile-friendly format.
            My role on this project was that of software developer, coding the pages of the app, and making sure that they worked
            across iOS and iPad devices, making sure that data was translated correctly from the website files, and that the interface 
            was appealing and user-friendly. As I had no previous experience with mobile development, this was a great learning experience,
            where I learned and implemented Objective C, Swift, and a bit of PHP and MySQL.
            This app was created by a collection of artists and programmers, and is still seeing development and tweaks. 
            The data for the app is supplied a document from the Frontier Scientists' web administrator, 
            and use a script to convert the file into XML for the app to download.
            This script was originally written in PHP and MySQL by myself and fellow programmer, Andrew Clark,
             and has since been updated with Python by one of the later developers, Jay Byam, who helped create the Android version.
             The iPad here replicates the base functionality of the app. Check out the actual app on the 
            <a href="https://itunes.apple.com/us/app/frontier-scientists-media/id947094470?mt=8">App Store</a> and 
            <a href="https://play.google.com/store/apps/details?id=frontsci.android&hl=en">Google Play</a>!
        </p>
    </div>    <!-- Menu buttons -->
    <div class="iOS_Menu_Bar">
        <div onmouseup="mouseUp('../index.php')" onmousedown="mouseDown_MenuItem('Menu_Index_Highlight')" onmouseout="mouseOut_MenuItem('Menu_Index_Highlight')" onmouseover="mouseOver_MenuItem('Menu_Index_Highlight')" style="position:absolute; top:0%; left:2%; width:14%; height:100%; float:left;">
            <div id="Menu_Index_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
        <div onmouseup="mouseUp('../Folder.php')" onmousedown="    mouseDown_MenuItem('Menu_Folder_Highlight')" onmouseout="mouseOut_MenuItem('Menu_Folder_Highlight')" onmouseover="mouseOver_MenuItem('Menu_Folder_Highlight')" style="position:absolute; top:0%; left:16%; width:13.5%; height:100%; float:left;">
            <div id="Menu_Folder_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
        <div onmouseup="mouseUp('iOS_Menu.php')" onmousedown="    mouseDown_MenuItem('Menu_FS_Highlight')" onmouseout="mouseOut_MenuItem('Menu_FS_Highlight')" onmouseover="mouseOver_MenuItem('Menu_FS_Highlight')" style="position:absolute; top:0%; left:29.5%; width:15%; height:100%; float:left;">
            <div id="Menu_FS_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
        <div onmouseup="mouseUp('../Canvas.php')" onmousedown="    mouseDown_MenuItem('Menu_Sketchpad_Highlight')" onmouseout="mouseOut_MenuItem('Menu_Sketchpad_Highlight')" onmouseover="mouseOver_MenuItem('Menu_Sketchpad_Highlight')" style="position:absolute; top:0%; left:44.5%; width:14%; height:100%; float:left;">
            <div id="Menu_Sketchpad_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
        <div onmouseup="mouseUp('../Checkerboard.php')" onmousedown="    mouseDown_MenuItem('Menu_Checkers_Highlight')" onmouseout="mouseOut_MenuItem('Menu_Checkers_Highlight')" onmouseover="mouseOver_MenuItem('Menu_Checkers_Highlight')" style="position:absolute; top:0%; left:58%; width:15%; height:100%; float:left;">
            <div id="Menu_Checkers_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
        <div onmouseup="mouseUp('../PokeGameIntro.php')" onmousedown="    mouseDown_MenuItem('Menu_PokeBall_Highlight')" onmouseout="mouseOut_MenuItem('Menu_PokeBall_Highlight')" onmouseover="mouseOver_MenuItem('Menu_PokeBall_Highlight')" style="position:absolute; top:0%; left:73%; width:15%; height:100%; float:left;">
            <div id="Menu_PokeBall_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
        <div onmouseup="mouseUp('../Dinaki_Adventures.php')" onmousedown="    mouseDown_MenuItem('Menu_Dinaki_Highlight')" onmouseout="mouseOut_MenuItem('Menu_Dinaki_Highlight')" onmouseover="mouseOver_MenuItem('Menu_Dinaki_Highlight')" style="position:absolute; top:0%; left:88%; width:11.9%; height:100%; float:left;">
            <div id="Menu_Dinaki_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
    </div>
    <script>
        determineHeight('iOS_Active', 1.27);
//        determineHeight('iOS_Info_Box', 1.2);
        //scaleTextByScreenWidth('info_Box_Text', 29);
        determineHeight('Menu_Bar', 0.15);
    </script>
</body>
</html>
