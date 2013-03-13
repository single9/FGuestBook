-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主機: localhost
-- 建立日期: Dec 02, 2010, 04:18 PM
-- 伺服器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 資料庫: `fguestbook`
-- 

-- --------------------------------------------------------

-- 
-- 資料表格式： `admin`
-- 

CREATE TABLE `admin` (
  `user` varchar(32) character set utf8 collate utf8_unicode_ci NOT NULL,
  `pass` varchar(50) NOT NULL,
  KEY `pass` (`pass`),
  KEY `user` (`user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- 列出以下資料庫的數據： `admin`
-- 

INSERT INTO `admin` VALUES ('admin', PASSWORD('manager'));

-- --------------------------------------------------------

-- 
-- 資料表格式： `myguestbook`
-- 

CREATE TABLE `myguestbook` (
  `name` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL,
  `comment` text character set utf8 collate utf8_unicode_ci NOT NULL,
  `time` text character set utf8 collate utf8_unicode_ci NOT NULL,
  `id` text character set utf8 collate utf8_unicode_ci NOT NULL,
  `url` text character set utf8 collate utf8_unicode_ci NOT NULL,
  `webgif` int(1) NOT NULL default '0',
  `cid` int(32) NOT NULL auto_increment,
  PRIMARY KEY  (`cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

-- 
-- 列出以下資料庫的數據： `myguestbook`
-- 

INSERT INTO `myguestbook` VALUES ('獨夜', 'Hello!\r很高興您願意試用這個開發中的留言板系統。如果你能看見這個留言表示您已經成功地安裝了！\r接下來您可以利用預設的帳號密碼登入右上角的控制台，然後選擇留言管理->管理者資料修改您的管理資料。\r-----\r版本資訊:FguestBook v0.9.1 Beta 101203\r修正細節:\r安全性更新:更新資料庫密碼存取方式。', '2010/12/03,00:10', '20101203001054', 'http://single9.net', 1, 16);
