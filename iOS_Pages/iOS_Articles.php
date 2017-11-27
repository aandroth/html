<?php

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
    <title>&dagger;Aquin's Great Games&dagger;</title>
    <link rel="stylesheet" type="text/css" href="../../OfficeDesk.scss" />
    <script src="../../../Script.js"></script>
    <script>
        function mouseOver(idTag)
        {
            document.getElementById(idTag).style.border = "5px solid white";
        }
        function mouseOut(idTag) {
            document.getElementById(idTag).style.border = "0px solid white";
        }
    </script>
</head>
<body>
    <div class="iOS_Active" style="background-image:url('../Images/FS_Screens/iOS_Articles.png');">            
        <div id="Back" class="iOS_Back" onmouseup="goBack()" onmouseover="mouseOver('Back')" onmouseout="mouseOut('Back')" style="top:11%; left:13%; width:5%;height:4%;">
            <!--invisible button to go to go back-->
        </div>
        <div style="position:absolute; top:15%; left:13.5%; width:72%; height:80%; float:left;">
            <div id="article0" class="iOS_Article_Button" onmouseup="mouseUp('https://frontierscientists.com/2014/11/lab-fridge-arctic-ground-squirrels/')" onmouseover="mouseOver('article0')" onmouseout="mouseOut('article0')">
                <!--invisible button to go to Research-->
            </div>
            <div id="article1" class="iOS_Article_Button" onmouseup="mouseUp('https://frontierscientists.com/2014/11/many-angles-fdl-science/')" onmouseover="mouseOver('article1')" onmouseout="mouseOut('article1')">
                <!--invisible button to go to Videos-->
            </div>
            <div id="article2" class="iOS_Article_Button" onmouseup="mouseUp('http://www.scilogs.com/frontier_scientists/effective-stress-fdl-science/')" onmouseover="mouseOver('article2')" onmouseout="mouseOut('article2')">
                <!--invisible buttom to go to Map-->
            </div>
            <div id="article3" class="iOS_Article_Button" onmouseup="mouseUp('https://frontierscientists.com/2014/11/temperamental-machinery-fdl-science/')" onmouseover="mouseOver('article3')" onmouseout="mouseOut('article3')">
                <!--invisible button to go to Articles-->
            </div>
            <div id="article4" class="iOS_Article_Button" onmouseup="mouseUp('http://www.scilogs.com/frontier_scientists/droughts-and-fish-genetic-highways/')" onmouseover="mouseOver('article4')" onmouseout="mouseOut('article4')">
                <!--invisible button to go to Ask-->
            </div>
            <div id="article5" class="iOS_Article_Button" onmouseup="mouseUp('http://frontierscientists.com/2014/10/the-chemical-map-of-otoliths-3/')" onmouseover="mouseOver('article5')" onmouseout="mouseOut('article5')">
                <!--invisible button to go to About-->
            </div>
            <div id="article6" class="iOS_Article_Button" onmouseup="mouseUp('http://frontierscientists.com/2014/10/frontierscientists-tv-series-premiere/')" onmouseover="mouseOver('article6')" onmouseout="mouseOut('article6')">
                <!--invisible buttom to go to Map-->
            </div>
            <div id="article7" class="iOS_Article_Button" onmouseup="mouseUp('http://www.scilogs.com/frontier_scientists/grayling-fish-endless-commute/')" onmouseover="mouseOver('article7')" onmouseout="mouseOut('article7')">
                <!--invisible button to go to Articles-->
            </div>
            <div id="article8" class="iOS_Article_Button" onmouseup="mouseUp('http://www.scilogs.com/frontier_scientists/catch-arctic-ground-squirrel-science/')" onmouseover="mouseOver('article8')" onmouseout="mouseOut('article8')">
                <!--invisible button to go to Ask-->
            </div>
            <div id="article9" class="iOS_Article_Button" onmouseup="mouseUp('http://frontierscientists.com/2014/09/abundantly-peculiar-arctic-ground-squirrel/')" onmouseover="mouseOver('article9')" onmouseout="mouseOut('article9')">
                <!--invisible button to go to About-->
            </div>
        </div>
    </div>
    <div class="iOS_Info_Box" style="position:relative;">
        <h1 style="color:black; text-align:center">
            Articles
        </h1>
        <p class="info_Box_Text">
            The Articles page has the ten most recent articles posted to <a href="http://frontierscientists.com/">frontierscientists.com</a>.
            By selecting an article, the user will have a limited web browser window opened. This window only allows the user to move through links on
            the page they are on, so that they are not able to navigate away to a general browser. Doing this was one way we ensured that our app
            would qualify for an all-ages rating.
            Every article that the user has not read will have the "new" symbol, which goes away when the user selects that article to read.
            In fact, there is an article <a href="http://frontierscientists.com/mobile-app/">here</a> on the Frontier Scientists mobile app!
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
