<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stage 1: Basic Reflected XSS</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<header>
    <h1>Stage 1: Basic Reflected XSS</h1>
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
    <form method="GET">
        <input type="text" name="name" placeholder="Enter your name">
        <button type="submit">Submit</button>
    </form>
    <?php
    if (isset($_GET['name'])) {
        $name = $_GET['name'];
        echo "<p>Hello, $name!</p>";
        if (strpos($name, '<script>') !== false) {
            $flag = file_get_contents("../flags/flag1.txt");
            echo "<pre>$flag</pre>";
        }
    }
    ?>
</div>
</body>
</html>
