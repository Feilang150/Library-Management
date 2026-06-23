<?php
require 'BookModel.php';

class BookController {
    private $model;

    public function __construct() {
        $this->model = new BookModel();
    }

    public function create() {
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case 'add':
                    $this->addBook();
                    break;
                case 'edit':
                    $this->editBook();
                    break;
                case 'delete':
                    $this->deleteBook();
                    break;
                default:
                    $this->listBooks();
                    break;
            }
        } else {
            $this->listBooks();
        }
    }

    private function listBooks() {
        $books = $this->model->getBooks();
        include 'views/Book_list.php';
    }
    private function addBook() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->model->addBook($_POST);
            header('Location: index.php');
            exit;
        }
        include 'views/AddBook.php';
    }

    private function editBook() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->model->updateBook($_POST, $_GET['id']);
            header('Location: index.php');
            exit;
        }
        $book = $this->model->getBookById($_GET['id']);
        include 'views/EditBook.php';
    }

    private function deleteBook() {
        $this->model->deleteBook($_GET['id']);
        header('Location: index.php');
        exit;
    }
}
?>
