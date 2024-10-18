<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stage 3: URL-encoded Reflected XSS</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<header>
    <h1>Stage 3: URL-encoded Reflected XSS</h1>
    <nav>
        <a href="../index.php">Home</a>
        <a href="stage1.php">Stage 1</a>
        <a href="stage2.php">Stage 2</a>
        <a href="stage3.php">Stage 3</a>
        <a href="stage4.php">Stage 4</a>
        <a href="stage5.php">Stage 5</a>
    </nav>
</header>

<div class="container">
    <p>Try adding <code>?search=%3Cscript%3Ealert('XSS')%3C/script%3E</code> to the URL!</p>
    <?php
    if (isset($_GET['search'])) {
        echo "<p>Results: " . $_GET['search'] . "</p>";

        if (strpos($_GET['search'], '<script>') !== false) {
            $flag = file_get_contents("../flags/flag3.txt");
            echo "<pre>$flag</pre>";
        }
    }
    ?>
</div>
</body>
</html>
