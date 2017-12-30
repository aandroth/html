
function detectLeftButton(evt) {
    evt = evt || window.event;
    if ("buttons" in evt) {
        console.log("Fired!");
        return evt.buttons == 1;
    }
    var button = evt.which || evt.button;
    return button == 1;
}


function checkerboardFrameController(canvasWidthAndHeight) {

    this.dist = new Vec2(100, 100);

    this.mouseClickPos = new Vec2(100, 100);
    this.centerPt = new Vec2();
    this.c0 = new Circle(new Vec2(50, 50), 0, 5, new Color(0, 0, 255, 255));
    this.c1 = new Circle(new Vec2(50, 50), 0, 5, new Color(255, 200, 0, 255));
    this.circleProgress0 = 0;
    this.circleProgress1 = 0;
    this.oldTime = 0;

    // This gets set in GraphicsLearning.php
    this.windowCenter = new Vec2(0, 0);

    // Get the images for the checkerboard
    this.checkboard_image = new Image();
    this.checkboard_image.src = "Images/CheckerBoard_WithoutCheckers.png";
    this.checkerboard_size = new Vec2(canvasWidthAndHeight.x, canvasWidthAndHeight.y);

    this.red_checker = new Image();
    this.red_checker.src = "Images/CheckerBoard_WithoutCheckers.png";

    this.black_checker = new Image();
    this.black_checker.src = "Images/CheckerBoard_WithoutCheckers.png";

    // Draw the new frame
    this.animFrame = function (mainContext, canvasWidthAndHeight, canvasOffset, currTime, mouse) {
        mainContext.clearRect(0, 0, canvasWidthAndHeight.x, canvasWidthAndHeight.y);

        mainContext.fillStyle = "rgb(255, 255, 255)";
        mainContext.fillRect(0, 0, canvasWidthAndHeight.x, canvasWidthAndHeight.y);

        mainContext.font = "50px Arial";

        mainContext.drawImage(this.checkboard_image, 0, 0, this.checkerboard_size.x, this.checkerboard_size.x);

        var mousePosOnCanvas = sub(mouse.getMouseCoords(), canvasOffset);
        var distMultiplier = 5;
    }
}
