<?php
class BookModel {
    private $Fei;

    public function __construct() {
        $this->Fei = new mysqli('localhost', 'root', '', 'library');
        $this->Fei->set_charset('utf8mb4');
        if ($this->Fei->connect_error) {
            die("Connection failed: " . $this->Fei->connect_error);
        }
    }

    public function getBooks($limit = 10, $offset = 0) {
        $stmt = $this->Fei->prepare("SELECT * FROM books LIMIT ? OFFSET ?");
        $stmt->bind_param("ii", $limit, $offset);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getBookById($id) {
        $stmt = $this->Fei->prepare("SELECT * FROM books WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function addBook($data) {
        $stmt = $this->Fei->prepare("INSERT INTO books (title, author, isbn, publishedDate) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $data['title'], $data['author'], $data['isbn'], $data['publishedDate']);
        $stmt->execute();
    }

    public function updateBook($data, $id) {
        $stmt = $this->Fei->prepare("UPDATE books SET title = ?, author = ?, isbn = ?, publishedDate = ? WHERE id = ?");
        $stmt->bind_param("ssssi", $data['title'], $data['author'], $data['isbn'], $data['publishedDate'], $id);
        $stmt->execute();
    }

    public function deleteBook($id) {
        $stmt = $this->Fei->prepare("DELETE FROM books WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
}
?>
