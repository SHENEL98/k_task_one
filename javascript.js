
// Define the X and Y positions for each point in the spider web diagram
const point1 = [80, 25];
const point2 = [180, 75];
const point3 = [140, 5];

const point4 = [255, 30];
const point5 = [230, 50];
const point6 = [280, 70];
const point7 = [240, 85];
const point8 = [265, 91];

const point9 = [220, 130];
const point10 = [85, 95];
const point11 = [60, 90];
const point12 = [20, 65];


// Get the canvas element and context
const canvas = document.getElementById('spider-web');
const ctx = canvas.getContext('2d');

// Draw the spider web diagram
ctx.beginPath();
ctx.moveTo(point1[0], point1[1]);
ctx.lineTo(point2[0], point2[1]);
ctx.lineTo(point3[0], point3[1]);

ctx.lineTo(point4[0], point4[1]);
ctx.lineTo(point5[0], point5[1]);
ctx.lineTo(point6[0], point6[1]);
ctx.lineTo(point7[0], point7[1]);
ctx.lineTo(point8[0], point8[1]);
ctx.lineTo(point9[0], point9[1]);
ctx.lineTo(point10[0], point10[1]);
ctx.lineTo(point11[0], point11[1]);
ctx.lineTo(point12[0], point12[1]);

ctx.closePath();
ctx.stroke();

// Add event listeners to the range sliders
//poin 1
const point1X = document.getElementById('point-1-x');
point1X.addEventListener('input', () => {
    point1[0] = point1X.value;
    redrawSpiderWeb();
});

const point1Y = document.getElementById('point-1-y');
point1Y.addEventListener('input', () => {
    point1[1] = point1Y.value;
    redrawSpiderWeb();
});

//point 2
const point2X = document.getElementById('point-2-x');
point2X.addEventListener('input', () => {
    point2[0] = point2X.value;
    redrawSpiderWeb();
});
const point2Y = document.getElementById('point-2-y');
point2Y.addEventListener('input', () => {
    point2[1] = point2Y.value;
    redrawSpiderWeb();
});

//point 3
const point3X = document.getElementById('point-3-x');
point3X.addEventListener('input', () => {
    point3[0] = point3X.value;
    redrawSpiderWeb();
});
const point3Y = document.getElementById('point-3-y');
point3Y.addEventListener('input', () => {
    point3[1] = point3Y.value;
    redrawSpiderWeb();
});

//poin 4
const point4X = document.getElementById('point-4-x');
point4X.addEventListener('input', () => {
    point4[0] = point4X.value;
    redrawSpiderWeb();
});

const point4Y = document.getElementById('point-4-y');
point4Y.addEventListener('input', () => {
    point4[1] = point4Y.value;
    redrawSpiderWeb();
});

//point 5
const point5X = document.getElementById('point-5-x');
point5X.addEventListener('input', () => {
    point5[0] = point5X.value;
    redrawSpiderWeb();
});
const point5Y = document.getElementById('point-5-y');
point5Y.addEventListener('input', () => {
    point5[1] = point5Y.value;
    redrawSpiderWeb();
});

//point 6
const point6X = document.getElementById('point-6-x');
point6X.addEventListener('input', () => {
    point6[0] = point6X.value;
    redrawSpiderWeb();
});
const point6Y = document.getElementById('point-6-y');
point6Y.addEventListener('input', () => {
    point6[1] = point6Y.value;
    redrawSpiderWeb();
});

//point 7
const point7X = document.getElementById('point-7-x');
point7X.addEventListener('input', () => {
    point7[0] = point7X.value;
    redrawSpiderWeb();
});
const point7Y = document.getElementById('point-7-y');
point7Y.addEventListener('input', () => {
    point7[1] = point7Y.value;
    redrawSpiderWeb();
});

//point 8
const point8X = document.getElementById('point-8-x');
point8X.addEventListener('input', () => {
    point8[0] = point8X.value;
    redrawSpiderWeb();
});
const point8Y = document.getElementById('point-8-y');
point8Y.addEventListener('input', () => {
    point8[1] = point8Y.value;
    redrawSpiderWeb();
});


//point 9
const point9X = document.getElementById('point-9-x');
point9X.addEventListener('input', () => {
    point9[0] = point9X.value;
    redrawSpiderWeb();
});
const point9Y = document.getElementById('point-9-y');
point9Y.addEventListener('input', () => {
    point9[1] = point9Y.value;
    redrawSpiderWeb();
});

//point 10
const point10X = document.getElementById('point-10-x');
point10X.addEventListener('input', () => {
    point10[0] = point10X.value;
    redrawSpiderWeb();
});
const point10Y = document.getElementById('point-10-y');
point10Y.addEventListener('input', () => {
    point10[1] = point10Y.value;
    redrawSpiderWeb();
});

//point 11
const point11X = document.getElementById('point-11-x');
point11X.addEventListener('input', () => {
    point11[0] = point11X.value;
    redrawSpiderWeb();
});
const point11Y = document.getElementById('point-11-y');
point11Y.addEventListener('input', () => {
    point11[1] = point11Y.value;
    redrawSpiderWeb();
});

//point 12
const point12X = document.getElementById('point-12-x');
point12X.addEventListener('input', () => {
    point12[0] = point12X.value;
    redrawSpiderWeb();
});
const point12Y = document.getElementById('point-12-y');
point12Y.addEventListener('input', () => {
    point12[1] = point12Y.value;
    redrawSpiderWeb();
});





// Redraw the spider web diagram with updated X and Y positions
function redrawSpiderWeb() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    ctx.beginPath();
    ctx.moveTo(point1[0], point1[1]);
    ctx.lineTo(point2[0], point2[1]);
    ctx.lineTo(point3[0], point3[1]);
    ctx.lineTo(point4[0], point4[1]);
    ctx.lineTo(point5[0], point5[1]);
    ctx.lineTo(point6[0], point6[1]);
    ctx.lineTo(point7[0], point7[1]);
    ctx.lineTo(point8[0], point8[1]);

    ctx.lineTo(point9[0], point9[1]);
    ctx.lineTo(point10[0], point10[1]);
    ctx.lineTo(point11[0], point11[1]);
    ctx.lineTo(point12[0], point12[1]);

    ctx.closePath();
    ctx.stroke();
}

