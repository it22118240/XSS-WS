<?php
$comments_file = "../data/comments.txt";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $comment = $_POST['comment'] . "\n";
    file_put_contents($comments_file, $comment, FILE_APPEND);
}

$comments = file($comments_file, FILE_IGNORE_NEW_LINES);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stage 2: Stored XSS</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<header>
<h1>Stage 2: Stored XSS</h1>
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
    <form method="POST">
        <textarea name="comment" placeholder="Leave a comment"></textarea>
        <button type="submit">Submit</button>
    </form>
    <h3>Comments:</h3>
    <?php 
    foreach ($comments as $comment) {
        echo "<p>$comment</p>";
        if (strpos($comment, '<script>') !== false) {
            $flag = file_get_contents("../flags/flag2.txt");
            echo "<pre>$flag</pre>";
        }
    } 
    ?>
</div>
</body>
</html>
