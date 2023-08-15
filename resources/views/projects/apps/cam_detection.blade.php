<!DOCTYPE html>
<html>
<head>
    <title>Hough Transform for Line Detection from Camera</title>
    <style>
        body {
            text-align: center;
        }
        video {
            border: 1px solid black;
        }
        canvas {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Hough Transform for Line Detection from Camera</h1>
    <video id="video" width="640" height="480" autoplay></video>
    <button onclick="takeScreenshot()">Take Screenshot</button>
    <canvas id="canvas" width="640" height="480"></canvas>

    <script>
        // Get video stream from user's camera
        navigator.mediaDevices.getUserMedia({ video: true })
            .then(stream => {
                const video = document.getElementById("video");
                video.srcObject = stream;
            })
            .catch(error => {
                console.error("Error accessing camera: ", error);
            });

        // Function to take a screenshot from the video stream and perform the Hough Transform
        function takeScreenshot() {
            const video = document.getElementById("video");
            const canvas = document.getElementById("canvas");
            const ctx = canvas.getContext("2d");

            // Draw the video frame on the canvas
            ctx.drawImage(video, 0, 0, canvas.width, canvas.height);

            // Get the image data from the canvas
            const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
            const data = imageData.data;
            const width = canvas.width;
            const height = canvas.height;

            // Convert the image to grayscale
            for (let i = 0; i < data.length; i += 4) {
                const avg = (data[i] + data[i + 1] + data[i + 2]) / 3;
                data[i] = avg;
                data[i + 1] = avg;
                data[i + 2] = avg;
            }

            // Apply the Hough Transform
            const accumulator = new Array(180).fill(0).map(() => new Array(Math.sqrt(width * width + height * height)).fill(0));

            for (let y = 0; y < height; y++) {
                for (let x = 0; x < width; x++) {
                    if (data[(y * width + x) * 4] === 0) {
                        for (let theta = 0; theta < 180; theta++) {
                            const r = Math.round(x * Math.cos((theta * Math.PI) / 180) + y * Math.sin((theta * Math.PI) / 180));
                            accumulator[theta][r + Math.sqrt(width * width + height * height) / 2]++;
                        }
                    }
                }
            }

            // Find the lines by thresholding the accumulator
            const threshold = 100;
            const lines = [];

            for (let theta = 0; theta < 180; theta++) {
                for (let r = 0; r < accumulator[theta].length; r++) {
                    if (accumulator[theta][r] > threshold) {
                        lines.push({ theta: theta, r: r - Math.sqrt(width * width + height * height) / 2 });
                    }
                }
            }

            // Draw the lines on the canvas
            ctx.strokeStyle = "red";
            for (const line of lines) {
                const thetaRad = (line.theta * Math.PI) / 180;
                const cosTheta = Math.cos(thetaRad);
                const sinTheta = Math.sin(thetaRad);
                const x0 = line.r * cosTheta;
                const y0 = line.r * sinTheta;
                const x1 = x0 + 1000 * (-sinTheta);
                const y1 = y0 + 1000 * cosTheta;
                ctx.beginPath();
                ctx.moveTo(x0 + width / 2, y0 + height / 2);
                ctx.lineTo(x1 + width / 2, y1 + height / 2);
                ctx.stroke();
            }
        }
    </script>
</body>
</html>

