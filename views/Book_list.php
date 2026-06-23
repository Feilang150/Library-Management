<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    

<table border="1">
    <h1>图书管理系统</h1>
    <h2>搜索图书</h2>
                <form method="post" action="index.php?action=index">
                <form method="post" action="index.php?action=create">
                    <input type="hidden" id="action" name="action" value="search">
                    <label for="search">搜索:</label>
                    <input type="text" id="search" name="search" required><br>
                    <button type="submit">搜索</button><br>
                    <input type="hidden" id="action" name="action" value="index">
                    <button type="submit">刷新</button>
                </form>
    <h2>添加图书</h2>
    <tr>
        <th>ID</th>
        <th>书名</th>
        <th>作者</th>
        <th>ISBN号</th>
        <th>出版日期</th>
        <th>操作</th>
    </tr>
                <form method="post" action="index.php?action=add">
                    <label for="title">书名:</label>
                    <input type="text" id="booktitle" name="title" required><br>
                    <label for="author">作者:</label>
                    <input type="text" id="bookauthor" name="author" required><br>
                    <label for="isbn">ISBN号:</label>
                    <input type="text" id="bookisbn" name="isbn" required><br>
                    <label for="publishedDate">出版日期:</label>
                    <input type="date" id="bookpublishedDate" name="publishedDate" required><br>
                    <button type="submit">添加</button><br>
                </form>
    <h2>图书列表</h2>
        <?php foreach ($books as $book): ?>
        <tr>
            <td><?php echo $book['id']; ?></td>
            <td><?php echo $book['title']; ?></td>
            <td><?php echo $book['author']; ?></td>
            <td><?php echo $book['isbn']; ?></td>
            <td><?php echo $book['publishedDate']; ?></td>
            <td>
            <form method="post" action="index.php?action=delete&id=<?php echo $book['id']; ?>">
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="id" value="<?php echo $book['id']; ?>">
                    <button type="submit">删除</button>
                </form>
                <form method="post" action="index.php?action=edit&id=<?php echo $book['id']; ?>">
                    <input type="hidden" name="action" value="edit">
                    <input type="hidden" name="id" value="<?php echo $book['id']; ?>">
                    <input type="text" name="title" value="<?php echo $book['title']; ?>" required>
                    <input type="text" name="author" value="<?php echo $book['author']; ?>" required>
                    <input type="text" name="isbn" value="<?php echo $book['isbn']; ?>" required>
                    <input type="date" name="publishedDate" value="<?php echo $book['publishedDate']; ?>" required>
                    <button type="submit">更新</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
</table>
</body>
</html>
