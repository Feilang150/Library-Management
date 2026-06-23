<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="index.php?action=edit&id=<?php echo $book['id']; ?>">
        <label for="title">书名:</label>
        <input type="text" id="title" name="title" value="<?php echo isset($book['title']) ? htmlspecialchars($book['title']) : ''; ?>" required><br>
        <label for="author">作者:</label>
        <input type="text" id="author" name="author" value="<?php echo isset($book['author']) ? htmlspecialchars($book['author']) : ''; ?>" required><br>
        <label for="isbn">ISBN号:</label>
        <input type="text" id="isbn" name="isbn" value="<?php echo isset($book['isbn']) ? htmlspecialchars($book['isbn']) : ''; ?>" required><br>
        <label for="publishedDate">出版日期 Date:</label>
        <input type="date" id="publishedDate" name="publishedDate" value="<?php echo isset($book['publishedDate']) ? htmlspecialchars($book['publishedDate']) : ''; ?>" required><br>
        <button type="submit">更新</button>
    </form>
</body>
</html>