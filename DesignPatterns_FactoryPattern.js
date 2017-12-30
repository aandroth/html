
function detectLeftButton(evt) {
    evt = evt || window.event;
    if ("buttons" in evt) {
        console.log("Fired!");
        return evt.buttons == 1;
    }
    var button = evt.which || evt.button;
    return button == 1;
}


function graphicsPageFrameController() {

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

    this.animFrame = function (mainContext, canvasWidthAndHeight, canvasOffset, currTime, mouse) {
        mainContext.clearRect(0, 0, canvasWidthAndHeight.x, canvasWidthAndHeight.y);

        mainContext.fillStyle = "rgb(255, 255, 255)";
        mainContext.fillRect(0, 0, canvasWidthAndHeight.x, canvasWidthAndHeight.y);

        mainContext.font = "50px Arial";

        var mousePosOnCanvas = sub(mouse.getMouseCoords(), canvasOffset);
        var distMultiplier = 5;

        this.c0.pos.x = this.windowCenter.x + Math.cos(this.circleProgress0) * 100;
        this.c0.pos.y = this.windowCenter.y + Math.sin(this.circleProgress0) * 100;

        this.c1.pos.x = this.windowCenter.x + Math.cos(this.circleProgress1) * 100;
        this.c1.pos.y = this.windowCenter.y + Math.sin(this.circleProgress1) * 100;

        // Draw the circle at the end of the vector0
        drawCircle(mainContext, this.c0.pos.x, this.c0.pos.y, this.c0.rad, this.c0.col);

        // Draw the line for the vector0
        mainContext.beginPath();
        mainContext.moveTo(this.windowCenter.x, this.windowCenter.y);
        mainContext.lineTo(this.c0.pos.x, this.c0.pos.y);
        mainContext.stroke();
        mainContext.strokeStyle = this.c0.col.AsTextRGB();
        mainContext.stroke();

        // Draw the circle at the end of the vector1
        drawCircle(mainContext, this.c1.pos.x, this.c1.pos.y, this.c1.rad, this.c1.col);

        // Draw the line for the vector1
        mainContext.beginPath();
        mainContext.moveTo(this.windowCenter.x, this.windowCenter.y);
        mainContext.lineTo(this.c1.pos.x, this.c1.pos.y);
        mainContext.stroke();
        mainContext.strokeStyle = this.c1.col.AsTextRGBA();
        mainContext.stroke();

        // Draw the text for the Dot product
        mainContext.fillStyle = "#000000";
        mainContext.fillText("Dot Product: " + Math.round(dot(sub(this.c0.pos, this.windowCenter), sub(this.c1.pos, this.windowCenter))), 10, 60);
        // Draw the text for the angle between the vectors
        var angle_rad = angleBetweenVectors(sub(this.c0.pos, this.windowCenter), sub(this.c1.pos, this.windowCenter));
        angle_rad = Math.round(angle_rad * 180.0 / Math.PI);
        mainContext.fillText("Angle Between: " + angle_rad, 10, 100);
    }

    this.SetDegrees = function (newDegrees0, newDegrees1) {
        this.circleProgress0 = newDegrees0 * Math.PI / 180.0;
        this.circleProgress1 = newDegrees1 * Math.PI / 180.0;
    }
}
