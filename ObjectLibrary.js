function Vec2(x, y) {
    this.x = Number(x);
    this.y = Number(y);
}

function mag(v0) {
    var result = Number(Math.sqrt(v0.x * v0.x + v0.y * v0.y));
    return result;
}

function diff(v0, v1) {
    var result = new Vec2(v1.x - v0.x, v1.y - v0.y);
    return result;
}

function Circle(pos, rot, rad, col) {
    this.pos = new Vec2(pos.x, pos.y);
    this.rot = Number(rot);
    this.rad = Number(rad);
    this.col = col;
    this.draw = function (canvasContext) {
        drawCircle(canvasContext, this.pos.x, this.pos.y, this.rad, this.col);
    }
}

function drawCircle(canvasContext, posX, posY, radius, color) {
    // draw the circle
    canvasContext.beginPath();
    canvasContext.arc(posX, posY, radius, 0, Math.PI * 2, false);
    canvasContext.closePath();

    // color in the circle
    canvasContext.fillStyle = color;
    canvasContext.fill();
}

function drawHalfCircle(canvasContext, posX, posY, radius, color) {
    // draw the circle
    canvasContext.beginPath();
    canvasContext.arc(225, 225, 100, 0, Math.PI, false);
    canvasContext.closePath();

    // color in the circle
    canvasContext.fillStyle = color;
    canvasContext.fill();
}

function drawRightArrow(canvasContext, posX, posY, boxWidth, boxHeight, color) {
    // draw the arrow
    canvasContext.beginPath();
    canvasContext.moveTo(posX, posY); // Rear-top-corner
    canvasContext.lineTo(posX, posY + 25 + boxHeight); // Back line
    canvasContext.lineTo(posX + 0 + boxWidth, posY + 25 + boxHeight); // Box-bottom
    canvasContext.lineTo(posX + 0 + boxWidth, posY + 42 + boxHeight); // Arrow-bottom-left
    canvasContext.lineTo(posX + 25 + boxWidth, posY + 12 + (boxHeight * 0.5)); // Arrow-botom-angle
    canvasContext.lineTo(posX + 0 + boxWidth, posY - 15); // Arrow-top-angle
    canvasContext.lineTo(posX + 0 + boxWidth, posY); // Arrow-top-left
    canvasContext.closePath();
    canvasContext.strokeStyle = color;
    canvasContext.stroke();
}

function drawLeftArrow(canvasContext, posX, posY, boxWidth, boxHeight, color) {
    // draw the arrow
    canvasContext.beginPath();
    canvasContext.moveTo(posX + 25 + boxWidth, posY); // Rear-top-corner
    canvasContext.lineTo(posX + 25 + boxWidth, posY + 25 + boxHeight); // Back line
    canvasContext.lineTo(posX + 25, posY + 25 + boxHeight); // Box-bottom
    canvasContext.lineTo(posX + 25, posY + 42 + boxHeight); // Arrow-back-lower
    canvasContext.lineTo(posX, posY + 12 + (boxHeight * 0.5)); // Arrow-bottom-angle
    canvasContext.lineTo(posX + 25, posY - 15); // Arrow-top-angle
    canvasContext.lineTo(posX + 25, posY); // Arrow-back-upper
    canvasContext.closePath();
    canvasContext.strokeStyle = color;
    canvasContext.stroke();
}

function drawSquare(canvasContext, posX, posY, width, height, color, fillColor) {
    // draw the square
    canvasContext.rect(posX, posY, width, height);
    canvasContext.strokeStyle = color;
    canvasContext.fill = fillColor;
    canvasContext.stroke();
}

function drawEmptySquare(canvasContext, posX, posY, width, height, color) {
    // draw the square
    canvasContext.rect(posX, posY, width, height);
    canvasContext.strokeStyle = color;
    canvasContext.stroke();
}

function mouse()
{
    this.x = Number(0);
    this.y = Number(0);

    this.updateMousePosition = function(e)
    {

        e = e || window.event;

        this.x = e.pageX;
        this.y = e.pageY;

        // IE 8
        if (this.x === undefined) {
            this.x = e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft;
            this.y = e.clientY + document.body.scrollTop + document.documentElement.scrollTop;
        }
    }

    this.getMouseCoords = function()  {
        return new Vec2(this.x, this.y);
    }
}

function frameController()
{
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

    this.animFrame = function(mainContext, canvasWidth, canvasHeight, currTime, mouse) {
        mainContext.clear

        mainContext.fillStyle = "#FFFFFF";
        mainContext.fillRect(0, 0, canvasWidth, canvasHeight);

        this.dist = diff(this.c0.pos, mouse.getMouseCoords());

        if (mag(this.dist) < this.c0.rad * 10) {
            this.c0.col = "rgb(" + ((255 * (mag(this.dist) / (this.c0.rad * 10)))) + ", " + ((255 * (mag(this.dist) / (this.c0.rad * 10)))) + ", 255)";
        }
        else
        {
            this.c0.col = "rgb(255, 255, 255)";
        }

        this.c0.draw(mainContext);
        mainContext.beginPath();
        mainContext.arc(this.c0.pos.x, this.c0.pos.y, 20, 0, Math.PI * 2, false);
        mainContext.closePath();
        mainContext.strokeStyle = "rgb(0, 0, 255)";
        mainContext.stroke();
    }
}