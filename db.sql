create database simple_blog;
use simple_blog;

CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(55) NOT NULL COMMENT '用户名',
  `password` varchar(55) NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

inset into user values (1, 'admin', '7fef6171469e80d32c0559f88b377245');

CREATE TABLE `article` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category` tinyint(1) NOT NULL COMMENT '分类',
  `pic` varchar(55) NOT NULL COMMENT '图片',
  `title` varchar(55) NOT NULL COMMENT '标题',
  `content` text NOT NULL COMMENT '内容',
  `addtime` int(11) unsigned NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `pages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pagekey` varchar(10) NOT NULL COMMENT '页面键值',
  `pagecontent` text NOT NULL COMMENT '页面内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;