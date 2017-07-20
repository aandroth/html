
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