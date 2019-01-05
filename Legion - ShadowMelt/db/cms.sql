/*
Navicat MySQL Data Transfer

Source Server         : secret
Source Server Version : 100130
Source Host           : localhost:3306
Source Database       : cms

Target Server Type    : MYSQL
Target Server Version : 100130
File Encoding         : 65001

Date: 2018-02-20 21:20:37
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for howtoconnect
-- ----------------------------
DROP TABLE IF EXISTS `howtoconnect`;
CREATE TABLE `howtoconnect` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL COMMENT 'Title',
  `text` longtext NOT NULL COMMENT 'How to connect',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of howtoconnect
-- ----------------------------
INSERT INTO `howtoconnect` VALUES ('1', 'Cataclysm Connection', '<br>Step 1: If you don\'t have an account, Make an account <a href=\"http://yoursite.com/register\">here</a>. </br>\r\n\r\n<br>Step 2: Go to WoW Folder,data\\EnUS/EnGB\\, find realmlist.wtf, and open it with notepad, then remove all writing inside and write this: </br>\r\n\r\n\r\n<br><b>SET REALMLIST LOGON.MYSERVER.COM >  U CAN CHANGE THIS IN THE CMS DB < </b></br>\r\n\r\n\r\n<br>Step 3: Start WoW.exe and log in with your account name.</br>');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'Not more then 3 supported!',
  `title` text NOT NULL COMMENT 'Title',
  `text` varchar(200) NOT NULL COMMENT 'News text',
  `postedby` varchar(200) NOT NULL COMMENT 'Username who commited post',
  `date` int(11) NOT NULL COMMENT 'Date posted (UNIX timestamp)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('1', 'Title 1', 'This is news 1', 'brian8544', '1484249566');
INSERT INTO `news` VALUES ('2', 'Title 2', 'This is news 2', 'brian8544', '1884249577');
INSERT INTO `news` VALUES ('3', 'Title 3', 'This is news 3', 'brian8544', '2147483647');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `userEmail` (`userEmail`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Administrator', 'admin@admin.com', '5e3d4aff3b986d4e8ef54c5a2418b2c2785c4b05ea9dc8e9c39c2c4acabac953');

-- ----------------------------
-- Table structure for version
-- ----------------------------
DROP TABLE IF EXISTS `version`;
CREATE TABLE `version` (
  `DB_version` char(50) DEFAULT NULL COMMENT 'DB Version Used'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of version
-- ----------------------------
INSERT INTO `version` VALUES ('0.1.3');
SET FOREIGN_KEY_CHECKS=1;
