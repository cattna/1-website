<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scientific Number Checker</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;500;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #0E0E0E;
            font-family: 'Inter', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #EAEAEA;
        }

        .container {
            background: rgba(255, 255, 255, 0.08);
            padding: 30px;
            border-radius: 16px;
            backdrop-filter: blur(12px);
            box-shadow: 0 4px 20px rgba(0, 255, 170, 0.2);
            width: 350px;
            text-align: center;
        }

        h1 {
            font-size: 1.8em;
            font-weight: 700;
            color: #00FFAA;
        }

        h2 {
            font-size: 0.9em;
            font-weight: 400;
            color: #999;
            margin-bottom: 20px;
        }

        label {
            font-size: 1em;
            font-weight: 500;
            color: #EAEAEA;
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 12px;
            font-size: 1em;
            border: none;
            border-radius: 8px;
            text-align: center;
            background: rgba(255, 255, 255, 0.1);
            color: #00FFAA;
            font-weight: 500;
            transition: 0.3s ease;
        }

        input:focus {
            outline: none;
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 0 5px rgba(0, 255, 170, 0.4);
        }

        button {
            background: #00FFAA;
            color: #0E0E0E;
            border: none;
            padding: 12px 18px;
            font-size: 1em;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s ease-in-out;
            font-weight: 600;
            margin-top: 15px;
        }

        button:hover {
            background: #00D990;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 255, 170, 0.4);
        }

        .output {
            margin-top: 20px;
            padding: 12px;
            border-radius: 8px;
            font-size: 1em;
            font-weight: 500;
            color: #00FFAA;
            background: rgba(255, 255, 255, 0.1);
        }

        .output p.success {
            color: #3DDC84;
        }

        .output p.error {
            color: #FF4B4B;
        }

    </style>
<body>

    <div class="container">
        <h1>Number Checker</h1>
        <h2>Ericho R. Sambur // 231011060024</h2>
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
            ? `${inputValue} it is a scientific number!` 
            : `${inputValue} is not a number.`;
        message.classList.add(isScientific ? 'success' : 'error');
        outputDiv.appendChild(message);
    });

    function isAngkaIlmiah(angka) {
        // Pola regex untuk mengenali angka ilmiah, desimal, dan bilangan bulat
        const pattern = /^-?\d+(\.\d+)?([eE][-+]?\d+)?$/;
        
        // Cek apakah sesuai format angka ilmiah
        return pattern.test(angka);
    }
    </script>

</body>
</html>
