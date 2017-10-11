
function detectLeftButton(evt) {
    evt = evt || window.event;
    if ("buttons" in evt) {
        return evt.buttons == 1;
    }
    var button = evt.which || evt.button;
    return button == 1;
}

function projectPageFrameController() {
    /*
    this.turnTime = 0;
    this.colorTime = 0;
    this.colorTime1 = 0.9;
    this.moveTime = 0;

    this.circle0 = new Circle(new Vec2(500, 200), 0, 100, "rgb(0, 0, 255)")
    this.circle1 = new Circle(new Vec2(0, 0), 0, 20, "rgb(255, 255, 255)");
    this.circle2 = new Circle(new Vec2(0, 0), 0, 20, "rgb(255, 255, 255)");
    this.circle3 = new Circle(new Vec2(0, 0), 0, 20, "rgb(255, 255, 255)");
    this.circle4 = new Circle(new Vec2(0, 0), 0, 20, "rgb(255, 255, 255)");
    this.circle5 = new Circle(new Vec2(0, 0), 0, 20, "rgb(255, 255, 255)");

    this.inputX = Math.sin(((this.moveTime * 25)) * Math.PI / 180) * 50;
    this.outputX = Math.sin(((this.moveTime * 25)) * Math.PI / 180) * 50;

    this.colR = Math.sin((this.colorTime * 100) * Math.PI / 180) * 255;
    this.colG = Math.sin((this.colorTime * 100) * Math.PI / 180) * 255;
    this.colB = Math.sin((this.colorTime * 100) * Math.PI / 180) * 255;

    this.colR1 = Math.sin((this.colorTime1 * 100) * Math.PI / 180) * 255;
    this.colG1 = Math.sin((this.colorTime1 * 100) * Math.PI / 180) * 255;
    this.colB1 = Math.sin((this.colorTime1 * 100) * Math.PI / 180) * 255;
    */

    this.dist = new Vec2(100, 100);

    this.c0 = new Circle(new Vec2(100, 100), 0, 20, "rgb(0, 0, 255)");

    this.animFrame = function (mainContext, canvasWidth, canvasHeight, currTime, mouse) {
        mainContext.clear

        mainContext.fillStyle = "#FFFFFF";
        mainContext.fillRect(0, 0, canvasWidth, canvasHeight);

        this.dist = diff(this.c0.pos, mouse.getMouseCoords());

        if (mag(this.dist) < this.c0.rad * 10) {
            this.c0.col = "rgb(" + ((255 * (mag(this.dist) / (this.c0.rad * 10)))) + ", " + ((255 * (mag(this.dist) / (this.c0.rad * 10)))) + ", 255)";
        }
        else {
            this.c0.col = "rgb(255, 255, 255)";
        }

        this.c0.draw(mainContext);
        mainContext.beginPath();
        mainContext.arc(this.c0.pos.x, this.c0.pos.y, 20, 0, Math.PI * 2, false);
        mainContext.closePath();        mainContext.strokeStyle = "rgb(0, 0, 255)";

        mainContext.stroke();
    }
}

