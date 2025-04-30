<?php
function display_comments($file) {
    if (file_exists($file)) {
        $comments = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        if (!empty($comments)) {
            echo '<div class="comment-list">';
            foreach ($comments as $comment) {
                $data = explode('|', $comment);
                if (count($data) >= 4) {
                    list($name, $email, $comment_text, $timestamp) = $data;
                    echo '<div class="comment">';
                    echo '<h4>' . $name . ' <small>(' . $email . ')</small></h4>';
                    echo '<p>' . $comment_text . '</p>'; // Vulnerable - no htmlspecialchars()
                    echo '<small>Posted on ' . date('F j, Y, g:i a', $timestamp) . '</small>';
                    echo '<form method="post" action="delete_comment.php" style="display:inline;">';
                    echo '<input type="hidden" name="file" value="' . $file . '">';
                    echo '<input type="hidden" name="comment_line" value="' . htmlspecialchars($comment) . '">';
                    echo '<button type="submit" class="delete-comment">Delete</button>';
                    echo '</form>';
                    echo '</div>';
                }
            }
            echo '</div>';
        } else {
            echo '<p>No comments yet. Be the first to comment!</p>';
        }
    } else {
        echo '<p>No comments yet. Be the first to comment!</p>';
    }
}
?>