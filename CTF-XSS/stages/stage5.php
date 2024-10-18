<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stage 5: Bypass Input Filtering</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<header>
    <h1>Stage 5: Bypass Input Filtering</h1>
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
        <input type="text" name="input" placeholder="Enter something">
        <button type="submit">Submit</button>
    </form>
    <?php
    if (isset($_GET['input'])) {
        $input = htmlspecialchars($_GET['input']);
        echo "<p>Your input: $input</p>";

        if (strpos($_GET['input'], '<script>') !== false) {
            $flag = file_get_contents("../flags/flag5.txt");
            echo "<pre>$flag</pre>";
        }
    }
    ?>
</div>
</body>
</html>
