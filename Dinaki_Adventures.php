<?php
    echo "&nbsp;";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en" onscroll="moveMenuWithScreen()">
<head>
    <title>&dagger;Aquin's Great Games&dagger;</title>
    <link rel="stylesheet" type="text/css" href="../../OfficeDesk.scss" />
    <script src="../../Script.js"></script>
    <script>
    </script>
</head>
<body>
    <div class="book" style="background-image:url('../Images/Open_Book.png'); background-size:contain; position:relative; top:0%; right:10%; width:80%; height:95%; float:right; background-repeat:no-repeat;">
        <div style="position:absolute; top:7%; right:48%; width:35%; height:90%; float:right; padding:3%;">
            <h1 style="color:black; text-align:center">
                The Game
            </h1>
            <p class="info_Box_Text0" style="color:black;">
                Dinaki Adventures is a point-and-click language-learning game, developed for the Telida Village Council of Alaska.
                The first screen is the profile screen where players create or choose their profile. 
                The next screen is the world map, which shows all of the game's locations, some of which are locked.
                The player then chooses a location to go to, which brings them to a scene, a screen showing the location.
                The player then chooses items in the scene to go to an activity, 
                where they can associate English words or images with the written and spoken Dinaki words.
            </p>
        </div>
        <div style="position:absolute; top:7%; right:10%; width:35%; height:90%; float:right; padding:3%;">
            <h1 style="color:black; text-align:center">
                The Editor
            </h1>
            <p class="info_Box_Text1" style="color:black;">
                The Dinaki Adventures Editor is where the game levels are created.
                The interface was made using Qt, and allows the user to choose all aspects of the game and levels.
                The user can choose the minigame type, what levels are locked and the badges required to unlock them, and the art for the screens.
                The words are also created here, with the user choosing their spelling, male and female pronounciation, and a representing image. 
                Because the user of the editor has so much control, it can really be used by any group for any language.
                The game and editor can be downloaded from my <a href="https://app.box.com/s/oe7o68p46hrhe4ofd8tl1lscjoaehkln">box.com files</a>,
                and the source code can be found on <a href="https://github.com/spbond/language-game ">Github</a>, in a repo created
                by my partner on the project, Shawn Bond.
            </p>
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
        determineHeight('book', 0.6);
       // scaleTextByScreenWidth('info_Box_Text0', 28);
        //scaleTextByScreenWidth('info_Box_Text1', 28);
        determineHeight('Menu_Bar', 0.15);
    </script>
</html>
