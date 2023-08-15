<!DOCTYPE html>
<html>
<head>
    <title>Math Game</title>
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
    <h1>Math Game</h1>
    <canvas id="gameCanvas" width="400" height="200"></canvas>
    <br>
    <label for="userInput">Your Equation: </label>
    <input type="text" id="userInput">
    <button onclick="checkEquation()">Submit</button>

    <script>
        const canvas = document.getElementById("gameCanvas");
        const ctx = canvas.getContext("2d");

        // Function to generate random numbers
        function getRandomNumber(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }

        // Function to generate a random operator
        function getRandomOperator() {
            const operators = ['+', '-', '*', '/'];
            return operators[getRandomNumber(0, operators.length - 1)];
        }

        // Function to generate a random BODMAS operator
        function getRandomBodmasOperator() {
            const operators = ['+', '-', '*', '/', '(', ')'];
            return operators[getRandomNumber(0, operators.length - 1)];
        }

        // Generate the initial equation
        let num1 = getRandomNumber(1, 10);
        let num2 = getRandomNumber(1, 10);
        let num3 = getRandomNumber(1, 10);
        let operator1 = getRandomOperator();
        let operator2 = getRandomBodmasOperator();
        let correctAnswer = calculateAnswer(num1, num2, num3, operator1, operator2);

        // Function to calculate the answer based on BODMAS operator
        function calculateAnswer(num1, num2, num3, operator1, operator2) {
            switch (operator2) {
                case '+':
                    return calculateSubAnswer(num1, num2, operator1) + num3;
                case '-':
                    return calculateSubAnswer(num1, num2, operator1) - num3;
                case '*':
                    return calculateSubAnswer(num1, num2, operator1) * num3;
                case '/':
                    return calculateSubAnswer(num1, num2, operator1) / num3;
                default:
                    return NaN;
            }
        }

        // Function to calculate a sub-answer based on operator1
        function calculateSubAnswer(num1, num2, operator1) {
            switch (operator1) {
                case '+':
                    return num1 + num2;
                case '-':
                    return num1 - num2;
                case '*':
                    return num1 * num2;
                case '/':
                    return num1 / num2;
                default:
                    return NaN;
            }
        }

        // Function to check the user's input
        function checkEquation() {
            const userInput = parseFloat(document.getElementById("userInput").value);
            if (!isNaN(userInput) && userInput === correctAnswer) {
                alert("Correct!");
            } else {
                alert("Incorrect! Try again.");
            }
            // Reset the game with a new equation
            num1 = getRandomNumber(1, 10);
            num2 = getRandomNumber(1, 10);
            num3 = getRandomNumber(1, 10);
            operator1 = getRandomOperator();
            operator2 = getRandomBodmasOperator();
            correctAnswer = calculateAnswer(num1, num2, num3, operator1, operator2);
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            drawEquation();
        }

        // Function to draw the equation on the canvas
        function drawEquation() {
            ctx.font = "24px Arial";
            ctx.fillText(`Equation: (${num1} ${operator1} ${num2}) ${operator2} ${num3} =`, 20, 40);
        }

        drawEquation();
    </script>
</body>
</html>
