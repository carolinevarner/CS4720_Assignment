<?php
include '../mysql.php'; // DB connection

header('Content-Type: application/json');

function get_articles($conn) {
    $sql = "SELECT * FROM articles ORDER BY created_at DESC";
    $result = mysqli_query($conn, $sql);
    $articles = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $articles[] = $row;
    }
    return $articles;
}

function get_article_by_id($conn, $id) {
    $stmt = $conn->prepare("SELECT * FROM articles WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $res = $stmt->get_result();
    return $res->fetch_assoc();
}

function create_article($conn, $data) {
    $stmt = $conn->prepare("INSERT INTO articles (title, author_id, content, category) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("siss", $data['title'], $data['author_id'], $data['content'], $data['category']);
    return $stmt->execute();
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id'])) {
        echo json_encode(get_article_by_id($conn, $_GET['id']));
    } else {
        echo json_encode(get_articles($conn));
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    if (create_article($conn, $data)) {
        echo json_encode(["status" => "success"]);
    } else {
        echo json_encode(["status" => "error"]);
    }
}
?>