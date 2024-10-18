<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XSS Challenge - Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Welcome to the XSS Challenge</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="stages/stage1.php">Stage 1</a>
        <a href="stages/stage2.php">Stage 2</a>
        <a href="stages/stage3.php">Stage 3</a>
        <a href="stages/stage4.php">Stage 4</a>
        <a href="stages/stage5.php">Stage 5</a>
    </nav>
</header>
<div class="container">
    <h2>About the Challenge</h2>
    <p>This challenge is designed to teach you about <strong>Cross-Site Scripting (XSS)</strong>. 
       You’ll progress through five different stages, each one showcasing a unique type or variation of XSS vulnerability.</p>
    <h2>Instructions</h2>
    <ul>
        <li>Each stage contains a specific XSS vulnerability.</li>
        <li>Your task is to exploit the vulnerability and trigger an alert box.</li>
        <li>Try different payloads to bypass input filters in later stages.</li>
    </ul>
    <p>Good luck and have fun!</p>
</div>
</body>
</html>
