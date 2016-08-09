/*
Navicat MySQL Data Transfer

Source Server         : my_connection
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : kazi_app

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-08-05 17:56:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `employee_table`
-- ----------------------------
DROP TABLE IF EXISTS `employee_table`;
CREATE TABLE `employee_table` (
  `eid` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of employee_table
-- ----------------------------
INSERT INTO `employee_table` VALUES ('1', 'kevin', 'doe', '0700000000', 'kevin@doe.com', '9d5e3ecdeb4cdb7acfd63075ae046672');
INSERT INTO `employee_table` VALUES ('2', 'john', 'john2', '0712345678', 'john@john2.com', '\r\n527bd5b5d689e2c32ae974c6229f');
INSERT INTO `employee_table` VALUES ('3', 'jane', 'doe', '0711111111', 'jane@janedoe.com', '\r\n5844a15e76563fedd11840fd6f40');

-- ----------------------------
-- Table structure for `projects_table`
-- ----------------------------
DROP TABLE IF EXISTS `projects_table`;
CREATE TABLE `projects_table` (
  `pid` varchar(10) NOT NULL,
  `project_name` varchar(20) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of projects_table
-- ----------------------------
INSERT INTO `projects_table` VALUES ('pr001', 'Project fame', '2016-08-05 11:59:01', '2016-08-06 11:59:10');
INSERT INTO `projects_table` VALUES ('pr002', 'Project one', '2016-08-05 11:59:01', '0000-00-00 00:00:00');
INSERT INTO `projects_table` VALUES ('pr003', 'Project three', '2016-08-05 12:00:32', '2016-08-19 12:00:37');

-- ----------------------------
-- Table structure for `task_table`
-- ----------------------------
DROP TABLE IF EXISTS `task_table`;
CREATE TABLE `task_table` (
  `tid` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `pid` varchar(10) NOT NULL,
  `date_done` datetime NOT NULL,
  `task` varchar(100) NOT NULL,
  `time_taken` varchar(10) NOT NULL,
  `comments` varchar(255) NOT NULL,
  PRIMARY KEY (`tid`),
  KEY `task_employee` (`eid`),
  KEY `task_project` (`pid`),
  CONSTRAINT `task_employee` FOREIGN KEY (`eid`) REFERENCES `employee_table` (`eid`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `task_project` FOREIGN KEY (`pid`) REFERENCES `projects_table` (`pid`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of task_table
-- ----------------------------
