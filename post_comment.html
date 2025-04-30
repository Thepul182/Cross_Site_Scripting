<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $article_id = (int)$_POST['article_id'];
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $comment = trim($_POST['comment']);
    
    // No input sanitization - intentionally vulnerable to XSS
    if (empty($name) || empty($email) || empty($comment)) {
        die('All fields are required.');
    }
    
    $comments_file = "comments/article{$article_id}_comments.txt";
    
    if (!file_exists('comments')) {
        mkdir('comments', 0755, true);
    }
    
    // Special XSS payload that shows password and congratulations
    if (strpos($comment, '<script>alert(1)</script>') !== false) {
        $comment = "<script>alert('password: It23253612\\n\\nCongratulations! You found the XSS vulnerability!')</script>";
    }
    
    $comment_data = implode('|', [
        $name,
        $email,
        $comment,  // Storing raw HTML/JS - vulnerable!
        time()
    ]) . PHP_EOL;
    
    file_put_contents($comments_file, $comment_data, FILE_APPEND);
    
    header("Location: article{$article_id}.php");
    exit;
} else {
    header("Location: index.php");
    exit;
}
?>