# Library-Management

一个基于PHP的图书管理系统，采用MVC架构设计。

## 功能特性

- **图书列表**：查看所有图书信息
- **添加图书**：新增图书记录
- **编辑图书**：修改现有图书信息
- **删除图书**：删除图书记录

## 项目结构

```
├── index.php          # 入口文件
├── BookController.php # 控制器
├── BookModel.php      # 数据模型
├── library.sql        # 数据库脚本
├── views/
│   ├── AddBook.php    # 添加图书视图
│   ├── Book_list.php  # 图书列表视图
│   └── EditBook.php   # 编辑图书视图
└── README.md
```

## 技术栈

- **后端**：PHP
- **数据库**：MySQL
- **架构**：MVC

## 数据库配置

数据库连接配置位于 `BookModel.php`：

```php
$this->Fei = new mysqli('localhost', 'root', '', 'library');
```

默认配置：
- 主机：localhost
- 用户名：root
- 密码：（空）
- 数据库名：library

## 快速开始

1. 创建数据库并导入数据：
```bash
mysql -u root -p < library.sql
```

2. 配置数据库连接（根据需要修改 `BookModel.php`）

3. 启动PHP服务器：
```bash
php -S localhost:8000
```

4. 访问 `http://localhost:8000`

## 图书数据字段

| 字段 | 说明 |
|------|------|
| id | 图书ID |
| title | 书名 |
| author | 作者 |
| isbn | ISBN号 |
| publishedDate | 出版日期 |