<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scientific Number Identification</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #D8E6FF, #FDE5EC);
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative;
            color: #333;
        }

        .container {
            text-align: center;
            background: rgba(255, 255, 255, 0.7);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(8px);
            position: relative;
            z-index: 2;
            max-width: 400px;
            width: 90%;
        }

        h1 {
            font-size: 1.8em;
            font-weight: 700;
            color: #444;
        }

        h2 {
            font-size: 1em;
            font-weight: 400;
            color: #666;
            margin-bottom: 15px;
        }

        label {
            font-size: 1em;
            color: #555;
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 10px;
            font-size: 1em;
            border: 2px solid #a3baff;
            border-radius: 8px;
            text-align: center;
            transition: all 0.3s ease;
        }

        input:focus {
            outline: none;
            border-color: #ff94c2;
            box-shadow: 0 0 8px rgba(255, 148, 194, 0.5);
        }

        button {
            background: linear-gradient(45deg, #7CA3FF, #FF94C2);
            color: #fff;
            border: none;
            padding: 12px 20px;
            font-size: 1em;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            font-weight: 500;
            margin-top: 15px;
            box-shadow: 0 3px 10px rgba(124, 163, 255, 0.5);
        }

        button:hover {
            background: linear-gradient(45deg, #FF94C2, #7CA3FF);
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(255, 148, 194, 0.7);
        }

        .output {
            margin-top: 20px;
            padding: 12px;
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.6);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
            font-size: 1em;
        }

        .output p.success {
            color: #28A745;
            font-weight: 600;
        }

        .output p.error {
            color: #D9534F;
            font-weight: 600;
        }

        /* Background Soft Elements */
        .soft-circle {
            position: absolute;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            opacity: 0.3;
            filter: blur(50px);
            z-index: 1;
        }

        .soft-circle:nth-child(1) {
            background: #7CA3FF;
            top: 10%;
            left: 10%;
        }

        .soft-circle:nth-child(2) {
            background: #FF94C2;
            top: 60%;
            left: 70%;
        }
    </style>
</head>
<body>

    <div class="soft-circle"></div>
    <div class="soft-circle"></div>

    <div class="container">
        <h1>Scientific Number Identification</h1>
        <h2>Nana N. Lego // 231011060006</h2>
        <form id="numberForm" method="post">
            <label for="angka">Enter a number:</label>
            <input type="text" name="angka" id="angka" required>
            <button type="submit">Check</button>
        </form>
        <div class="output" id="outputDiv"></div>
    </div>

    <script>
        document.getElementById('numberForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const inputValue = document.getElementById('angka').value.trim();
            const isScientific = isAngkaIlmiah(inputValue);
            const outputDiv = document.getElementById('outputDiv');
            outputDiv.innerHTML = '';

            const message = document.createElement('p');
            message.textContent = isScientific 
                ? `${inputValue} it is a number!` 
                : `No, ${inputValue} is not a number.`;
            message.classList.add(isScientific ? 'success' : 'error');
            outputDiv.appendChild(message);
        });

        function isAngkaIlmiah(angka) {
            const num = Number(angka);
            return !isNaN(num) && /\d+(\.\d+)?e[+-]?\d+/i.test(angka);
        }
    </script>

</body>
</html>
