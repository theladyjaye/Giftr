/*
 Navicat Premium Data Transfer

 Source Server         : Local
 Source Server Type    : MySQL
 Source Server Version : 50153
 Source Host           : localhost
 Source Database       : giftr

 Target Server Type    : MySQL
 Target Server Version : 50153
 File Encoding         : utf-8

 Date: 05/15/2011 18:40:03 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `active` bit(1) NOT NULL,
  `created_on` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `iduser_UNIQUE` (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

SET FOREIGN_KEY_CHECKS = 1;
