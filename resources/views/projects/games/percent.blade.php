<!DOCTYPE html>
<html>
<head>
    <title>Liquid Filling Bottle</title>
    <style>
        body {
            text-align: center;
        }
        canvas {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Liquid Filling Bottle</h1>
    <label for="liquidLevel">Liquid Level:</label>
    <input type="range" id="liquidLevel" min="0" max="100" step="1" value="50" oninput="drawBottle()">

    <canvas id="bottleCanvas" width="400" height="400"></canvas>

    <script>
        const canvas = document.getElementById("bottleCanvas");
        const ctx = canvas.getContext("2d");

        // Function to draw the bottle and fill it with liquid based on the liquid level
        function drawBottle() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            // Draw the bottle
            ctx.beginPath();
            ctx.moveTo(100, 300);
            ctx.lineTo(100, 100);
            ctx.quadraticCurveTo(100, 50, 150, 50);
            ctx.lineTo(250, 50);
            ctx.quadraticCurveTo(300, 50, 300, 100);
            ctx.lineTo(300, 300);
            ctx.closePath();
            ctx.stroke();

            // Draw the liquid inside the bottle
            const liquidLevel = parseFloat(document.getElementById("liquidLevel").value);
            const liquidHeight = 200 * (liquidLevel / 100);
            ctx.beginPath();
            ctx.moveTo(150, 300);
            ctx.lineTo(150, 300 - liquidHeight);
            ctx.quadraticCurveTo(150, 300 - liquidHeight - 20, 170, 300 - liquidHeight - 20);
            ctx.lineTo(230, 300 - liquidHeight - 20);
            ctx.quadraticCurveTo(250, 300 - liquidHeight - 20, 250, 300 - liquidHeight);
            ctx.lineTo(250, 300);
            ctx.closePath();
            ctx.fillStyle = "blue";
            ctx.fill();
        }

        // Initial drawing when the page loads
        drawBottle();
    </script>
</body>
</html>
