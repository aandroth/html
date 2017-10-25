
function detectLeftButton(evt) {
    evt = evt || window.event;
    if ("buttons" in evt) {
        console.log("Fired!");
        return evt.buttons == 1;
    }
    var button = evt.which || evt.button;
    return button == 1;
}

function circleLink(pos) {
    this.circleObj = new Circle(new Circle(new Vec2(pos.x, pos.y + offset * ii), 0, 20, new Color(0, 50, 255, 255)));
}

function projectPageFrameController() {

    this.dist = new Vec2(100, 100);

    this.c0 = new Circle(new Vec2(100, 100), 0, 20, new Color(0, 0, 255, 255));

    this.mouseClickPos = new Vec2(100, 100);
    this.circleListStartPoint = new Vec2(20, 50);
    this.circleListLength = 7;

    // Create the page list of all of the projects that I created at AIE
    this.pageList = [];
    this.pageList.push('Hash_Tables');
    this.pageList.push('Hash_Tables');
    this.pageList.push('Hash_Tables');
    this.pageList.push('Hash_Tables');
    this.pageList.push('Hash_Tables');
    this.pageList.push('Hash_Tables');
    this.pageList.push('Hash_Tables');

    alert(this.pageList.length);

    this.circleList = [];
    this.textList = [];
    var offset = 50;
    for (var ii = 0; ii < this.circleListLength; ++ii) {
        this.circleList.push(new Circle(new Vec2(this.circleListStartPoint.x, this.circleListStartPoint.y + offset * ii), 0, 20, new Color(0, 50, 255, 255)));
    }


    this.updateCircleCoords = function (mousePosOnPage, canvasOffset) {
        var mousePosOnCanvas = sub(mousePosOnPage, canvasOffset);
        var dist = mag(diff(this.c0.pos, mousePosOnCanvas));
        if (dist <= this.c0.rad) {
            this.c0.col = "rgb(255, 7, 7)";
        }
        this.c0.pos = new Vec2(mousePosOnCanvas.x, mousePosOnCanvas.y);
    }

    this.checkCircleListForCollisionsWithPoint = function (point) {
        for (var ii = 0; ii < this.circleListLength; ++ii) {
            if(this.circleList[ii].collisionWithPoint(point))
            {
                window.location.href = this.pageList[ii]+'.php';
            }
        }
    }

    this.animFrame = function (mainContext, canvasWidthAndHeight, canvasOffset, currTime, mouse) 
    {
        mainContext.clearRect(0, 0, canvasWidthAndHeight.x, canvasWidthAndHeight.y);

        //mainContext.fillStyle = "#FFFFFF";
        //mainContext.fillRect(0, 0, canvasWidthAndHeight.x, canvasWidthAndHeight.y);
        //this.c0.pos.x = this.mouseClickPos.x;
        //this.c0.pos.y = this.mouseClickPos.y;
        mainContext.fillStyle = "rgb(255, 255, 255)";
        mainContext.font = "50px Arial";

        var mousePosOnCanvas = sub(mouse.getMouseCoords(), canvasOffset);
        var distMultiplier = 5;
        for (var ii = 0; ii < this.circleListLength; ++ii) {

            mainContext.fillText(this.pageList[ii], 100, (this.circleList[ii].pos.y + 20));

            this.dist = diff(this.circleList[ii].pos, mousePosOnCanvas);
        
            if (mag(this.dist) < this.circleList[ii].rad * distMultiplier) {
                this.circleList[ii].col = new Color(255 * (mag(this.dist) / (this.circleList[ii].rad * distMultiplier)),
                                                    (50 + ((255 * (mag(this.dist) / (this.circleList[ii].rad * distMultiplier))))),
                                                    255, 255);
            }
            else {
                this.circleList[ii].col = new Color(255, 255, 255, 255);
            }

            this.circleList[ii].draw(mainContext);

            mainContext.beginPath();
            mainContext.arc(this.circleList[ii].pos.x, this.circleList[ii].pos.y, 20, 0, Math.PI * 2, false);
            //mainContext.arc(mousePosOnCanvas.x, mousePosOnCanvas.y, 20, 0, Math.PI * 2, false);
            mainContext.closePath();
            mainContext.strokeStyle = "rgb(0, 0, 255)";
            mainContext.stroke();
        }

        this.c0.draw(mainContext);
        mainContext.beginPath();
        mainContext.arc(this.c0.pos.x, this.c0.pos.y, 20, 0, Math.PI * 2, false);
        //mainContext.arc(mousePosOnCanvas.x, mousePosOnCanvas.y, 20, 0, Math.PI * 2, false);
        mainContext.closePath();
        mainContext.strokeStyle = "rgb(0, 0, 255)";
        mainContext.stroke();

    }
}
