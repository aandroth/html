function mouseUp(new_page) {
    window.location.href = new_page;
}

function goBack() {
    window.history.back();
}

function mouseOver(idTag) {
    document.getElementById(idTag).style.visibility = "visible";
}

function mouseOut(idTag) {
    document.getElementById(idTag).style.visibility = "hidden";
}

function mouseOut_MenuItem(idTag) {
    document.getElementById(idTag).style.visibility = "hidden";
    document.getElementById(idTag).style.backgroundColor = "rgba(100, 100, 255, 0.5)";
}

function mouseOver_MenuItem(idTag) {
    document.getElementById(idTag).style.visibility = "visible";
}

function mouseDown_MenuItem(idTag) {
    document.getElementById(idTag).style.backgroundColor = "rgba(255, 100, 255, 0.5)";
}

function mouseOver_5pxBorder(idTag) {
    document.getElementById(idTag).style.border = "5px solid white";
}
function mouseOut_5pxBorder(idTag) {
    document.getElementById(idTag).style.border = "0px solid white";
}

function determineHeight(classTag, ratio) {
    var obj = document.getElementsByClassName(classTag)[0].offsetWidth;
    document.getElementsByClassName(classTag)[0].style.height = obj * ratio + 'px';
}

function scaleTextByScreenWidth(classTag, scale) {
    document.getElementsByClassName(classTag)[0].style.fontSize = scale * (window.innerWidth / 1920) + 'px';
}