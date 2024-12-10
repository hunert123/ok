
<!DOCTYPE html>
<html>
<head>
	<script> document.addEventListener("contextmenu", function (e) {
    e.preventDefault();
}); 
		</script>
    <meta charset="UTF-8">
    <title>CAPTCHA</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8; 
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
        }

        .header {
            width: 100%;
            background-color: #f8f8f8; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100px;  
            margin: 0; 
        }

        .logo {
            width: 303px;  
            height: 201px;  
        }

        .header-frame {
            border: 2px solid #f8f8f8; 
            padding: 10px;
        }

        .captcha-container {
            text-align: center;
            background-color: #fff;  
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            padding: 18px;  
            color: #000;  
            max-width: 320px; 
            width: 100%;
            margin-bottom: 16px;  
        }

        .captcha-question {
            font-size: 15.6px;  
            font-weight: bold;
            color: #000;  
        }

        .captcha-image {
            background-color: #FF8C00;  
            color: #fff;  
            padding: 14.4px;  
            border-radius: 10px;
            font-size: 18.4px;  
            margin: 0 auto;
            width: 92px;  
            margin-top: 14.4px;  
        }

        .captcha-input {
            width: 30%;
            padding: 12px;  
            font-size: 14.4px;  
            border: 1.6px solid #ccc;  
            border-radius: 10px;  
            margin-top: 14.4px;  
        }

        .numpad {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 9.6px;  
            margin-top: 14.4px;  
        }

        .numpad-button {
            background-color: #fff;  
            color: #000;
            padding: 9.6px;  
            font-size: 14px;  
            border: none;
            border-radius: 10px;  
            cursor: pointer;
            transition: background-color 0.13s, transform 0.07s;
			font-weight: bold;
        }

        .numpad-button:hover {
            background-color: #FF8C00;  
        }

        .message {
            font-size: 12px;  
            margin-top: 14.4px;  
        }

        .footer {
            background-color: #f8f8f8; 
            height: 2cm;
            width: 100%;
        }

        @media screen and (max-width: 768px) {
            .captcha-container {
                max-width: 80%;
            }
        }
    </style>
</head>
<body>
    <br><br><br><br> 
    
    <div class="header">
        <div class="header-frame">
            <img src="data:image/png;base64,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Dwp3YBveD9sg2/bnjnoEAz807pe28bJP7lha9Xb2EXuZcvs+/BP5BkeYfXin2TrXJ9LyDqdjBSBnhLY8jTN9vHIw8lZ9gR86Ee2YF63eRt9QDzczjZHnK+YRDXNHli+fFLbX2jmMtuw3BUb0s7BHTiXmzNUDStnoOENpHusJXmbvNxzF4X6IHDuy/uE3JuxnKNVbLuY5ulgccN0HBNxb3T4wCSZ0QMA9Uweww5dAwnxehy+S+C1XvqT4EyCm3wh43cX2m/1HtD0Qry+v+b9aDssvj4uvcnI9cA75DpmvYMAYEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEACB5BP4f+NVWuDtabIxAAAAAElFTkSuQmCC" class="logo" alt="Votre Logo">
        </div>
    </div>
    
    <br><br><br><br><br> <!-- Quatre balises <br> ajoutées pour augmenter l'espace -->

    <div class="captcha-container">
    <p class="captcha-question">Résolvez ce CAPTCHA pour continuer :</p>
    <div class="captcha-image" id="captcha-image">8 + 3 =</div>
    <input type="text" class="captcha-input" id="captcha-input" placeholder="    Réponse">
    <div class="numpad">
        <button class="numpad-button" onclick="addToInput(1)">1</button>
        <button class="numpad-button" onclick="addToInput(2)">2</button>
        <button class="numpad-button" onclick="addToInput(3)">3</button>
        <button class ="numpad-button" onclick = "addToInput(4)"> 4 </button>
        <button class= "numpad-button" onclick = "addToInput(5)"> 5 </button>
        <button class ="numpad-button" onclick = "addToInput(6)"> 6 </button>
        <button class ="numpad-button" onclick = "addToInput(7)"> 7 </button>
        <button class ="numpad-button" onclick = "addToInput(8)"> 8 </button>
        <button class ="numpad-button" onclick = "addToInput(9)"> 9 </button>
        <button class="numpad-button" onclick="resetInput()">X</button>
        <button class="numpad-button" onclick="addToInput(0)">0</button>
    </div> <br>
    <button class="numpad-button" onclick="checkCaptcha()">Continuer</button>
    <p class="message" id="message"></p>
</div>


    <div class="footer"></div>

    <script>
		
		
		function resetInput() {
    inputElement.value = ""; // Réinitialiser le champ à une chaîne vide
}

		
		
        let inputElement = document.getElementById("captcha-input");
        let captchaImage = document.getElementById("captcha-image");
        let messageElement = document.getElementById("message");

        function generateCaptcha() {
            const num1 = Math.floor(Math.random() * 10);
            const num2 = Math.floor(Math.random() * 10);
            const result = num1 + num2;

            captchaImage.textContent = `${num1} + ${num2} =`;
            inputElement.value = "";
        }

        function addToInput(value) {
            inputElement.value += value;
        }

        function checkCaptcha() {
            const userInput = inputElement.value;
            const captchaText = captchaImage.textContent;
            const [num1, , num2] = captchaText.split(" ");
            const expectedResult = (parseInt(num1) + parseInt(num2)).toString();

            if (userInput === expectedResult) {
                messageElement.textContent = "CAPTCHA réussi ! Redirection en cours...";
                setTimeout(function () {
                    
                    window.location.href = 'log.php';
                }, 2000);
            } else {
                messageElement.textContent = "La réponse est incorrecte. Réessayez.";
                generateCaptcha();
            }
        }

        generateCaptcha();
    </script>
</body>
</html>