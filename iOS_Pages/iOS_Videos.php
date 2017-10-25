<?php
    echo "&nbsp;";
    $videoUrl = "";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
    <title>&dagger;Aquin's Great Games&dagger;</title>
    <link rel="stylesheet" type="text/css" href="../../OfficeDesk.scss" />
    <script src="../../../Script.js"></script>
    <script>
        function mouseOver(idTag) {
            document.getElementById(idTag).style.border = "5px solid white";
        }
        function mouseOver_VideoMenu(idTag, pageId) {
            if(document.getElementById(pageId).style.backgroundImage == "url(\"../Images/FS_Screens/iOS_Videos_Viewing_Open.png\")")
            {
                document.getElementById(idTag).style.border = "5px solid white";
            }
        }
        function mouseOut(idTag) {
            document.getElementById(idTag).style.border = "0px solid white";
        }
        function mouseUp_OpenVideos(idTag) {
            if(document.getElementById(idTag).style.backgroundImage == "url(\"../Images/FS_Screens/iOS_Videos_Viewing.png\")")
            {
                document.getElementById(idTag).style.backgroundImage = "url(\"../Images/FS_Screens/iOS_Videos_Viewing_Open.png\")";
            }
            else
            {
                document.getElementById(idTag).style.backgroundImage = "url(\"../Images/FS_Screens/iOS_Videos_Viewing.png\")"
            }
        }
        function mouseUp_WatchVideo(idTag, videoUrl) {
            if(document.getElementById(idTag).style.backgroundImage == "url(\"../Images/FS_Screens/iOS_Videos_Viewing_Open.png\")")
            {
                window.location.href = 'iOS_Videos_Watching.php' + "?YTid=" + videoUrl;
            }
        }
    </script>
</head>
<body>
    <div id="video_page" class="iOS_Active" style="background-image:url('../Images/FS_Screens/iOS_Videos_Viewing.png');">
        <div style="position:absolute; top:10%; left:15%; width:70%; height:80%; float:left;">
            <div id="Back" class="iOS_Back" onmouseup="goBack()" onmouseover="mouseOver('Back')" onmouseout="mouseOut('Back')" style="left:-1%; height:7%;">
                <!--invisible button to go to back-->
            </div>                
            <div id="Videos" onmouseup="mouseUp_OpenVideos('video_page')" onmouseover="mouseOver('Videos')" onmouseout="mouseOut('Videos')" style="position:relative; top:14%; right:0%; width:18%; height:9.5%; float:left;">
                <!--invisible button to open the videos-->
            </div>
            <div style="position:absolute; top:31%; left:-2.5%; width:102.5%; height:85%; float:left;">
                <div id="Scout" class="iOS_Menu_Button" onmouseup="mouseUp_WatchVideo('video_page', '0mc4Y7QVjQ0')" onmouseover="mouseOver_VideoMenu('Scout', 'video_page')" onmouseout="mouseOut('Scout')">
                    <!--invisible button to watch Fly Scout Fly-->
                </div>
                <div id="Tools" class="iOS_Menu_Button" onmouseup="mouseUp_WatchVideo('video_page', 's5dFBRVhIHA')" onmouseover="mouseOver_VideoMenu('Tools', 'video_page')" onmouseout="mouseOut('Tools')">
                    <!--invisible button to watch Flying Tools-->
                </div>
                <div id="Aleutians" class="iOS_Menu_Button" onmouseup="mouseUp_WatchVideo('video_page', 'IaTqnR2pzR4')" onmouseover="mouseOver_VideoMenu('Aleutians', 'video_page')" onmouseout="mouseOut('Aleutians')">
                    <!--invisible button to watch Learning to Fly in the Aleutians-->
                </div>
            </div>
        </div>
    </div>
    <div class="iOS_Info_Box" style="position:relative;">
        <h1 style="color:black; text-align:center">
            Videos
        </h1>
        <p class="info_Box_Text">            
            The video page shows all of the different videos that Frontier Scientists has made of each project.
            The videos are viewed by activating the drop-down, and selecting a video. We also have video downloading, as the thought was that
            the app may be used by tourists, who would not have access to wifi when off the beaten path, such as when taking a tour.
            This means that the user could download a video, watch in on a tour, and then delete it when they are done.
        </p>
    </div>    
    <!-- Menu buttons -->
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
</body>
    <script>
        determineHeight('iOS_Active', 1.27);
        determineHeight('iOS_Info_Box', 0.7);
        //scaleTextByScreenWidth('info_Box_Text', 30);
        determineHeight('Menu_Bar', 0.15);
    </script>
</html>
