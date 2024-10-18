<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stage 4: DOM-based XSS</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<header>
    <h1>Stage 4: DOM-based XSS</h1>
    <nav>
        <a href="../index.php">Home</a>
        <a href="stage1.php">Level 1</a>
        <a href="stage2.php">Level 2</a>
        <a href="stage3.php">Level 3</a>
        <a href="stage4.php">Level 4</a>
        <a href="stage5.php">Level 5</a>
    </nav>
</header>
<div class="container">
    <p id="output"></p>
    <script>
        const params = new URLSearchParams(window.location.search);
        const userInput = params.get('input');
        if (userInput) {
            document.getElementById('output').innerHTML = userInput;

            if (userInput.includes('<script>')) {
                fetch('../flags/flag4.txt')
                    .then(response => response.text())
                    .then(flag => {
                        const flagElement = document.createElement('pre');
                        flagElement.textContent = flag;
                        document.body.appendChild(flagElement);
                    });
            }
        }
    </script>
</div>
</body>
</html>
