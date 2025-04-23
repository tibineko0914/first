<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = htmlspecialchars($_POST['message']);  // メッセージ

    echo "<h2>送信された内容</h2>";
    echo "<p><strong>メッセージ:</strong> $message</p>";
}
?>