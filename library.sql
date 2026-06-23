# 创建数据库
CREATE DATABASE `library`;
USE `library`;
# 创建学生表
CREATE TABLE `books`(
  `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT COMMENT 'id',
  `title` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '书名',
  `author`VARCHAR(255) NOT NULL DEFAULT '' COMMENT '作者',
  `isbn`VARCHAR(20) NOT NULL DEFAULT '' COMMENT 'ISBN号',
  `publishedDate` VARCHAR(20) NOT NULL DEFAULT '' COMMENT '出版日期'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
# 添加测试数据
INSERT INTO `books` VALUES
(1, 'java编程思想', '陈吴鹏', '978-7-115-53008-7', '2024-05-01'),
(2, '社会工程', '陆道宏', '978-7-115-33538-8', '2013-12-01'),
(3, '代码审计', '尹毅', '978-7-111-52006-1', '2015-12-01'),
(4, 'PHP', '黑马程序员', '978-7-115-63654-6', '2024-05-01'),
(5, 'java', '陈吴鹏', '978-7-115-63654-6', '2024-11-26');