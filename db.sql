create database simple_blog;
use simple_blog;

CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(55) NOT NULL COMMENT '用户名',
  `password` varchar(55) NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

inset into user values (1, 'admin', '7fef6171469e80d32c0559f88b377245');
