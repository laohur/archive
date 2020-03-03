-- Adminer 4.1.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `account` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `account`;

DROP TABLE IF EXISTS `entries`;
CREATE TABLE `entries` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `taid` int(5) NOT NULL,
  `label` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `iscredit` int(11) NOT NULL,
  `account` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `taid` (`taid`),
  CONSTRAINT `entries_ibfk_1` FOREIGN KEY (`taid`) REFERENCES `transaction` (`taid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `entries` (`id`, `taid`, `label`, `iscredit`, `account`, `amount`) VALUES
(1,	1,	'出借差旅费时',	0,	'库存现金',	3000);

DROP TABLE IF EXISTS `transaction`;
CREATE TABLE `transaction` (
  `taid` int(5) NOT NULL AUTO_INCREMENT,
  `transaction` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `synopsis` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `a_transactions` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `i_keywords` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `a_keywords` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `i_questions` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `a_questions` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `i_accounts` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `a_accounts` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `introduction` text COLLATE utf8_unicode_ci NOT NULL,
  `example` text COLLATE utf8_unicode_ci NOT NULL,
  `description1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `debit1` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `credit1` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `description2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `debit2` tinytext COLLATE utf8_unicode_ci,
  `credit2` tinytext COLLATE utf8_unicode_ci,
  `description3` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `debit3` tinytext COLLATE utf8_unicode_ci,
  `credit3` tinytext COLLATE utf8_unicode_ci,
  `description4` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `debit4` tinytext COLLATE utf8_unicode_ci,
  `credit4` tinytext COLLATE utf8_unicode_ci,
  `description5` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `debit5` tinytext COLLATE utf8_unicode_ci,
  `credit5` tinytext COLLATE utf8_unicode_ci,
  `description6` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `debit6` tinytext COLLATE utf8_unicode_ci,
  `credit6` tinytext COLLATE utf8_unicode_ci,
  `calculation` text COLLATE utf8_unicode_ci NOT NULL,
  `explanation` text COLLATE utf8_unicode_ci NOT NULL,
  `reference` text COLLATE utf8_unicode_ci NOT NULL,
  `advises` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `comments` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `createtime` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `auditor` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `updatetime` datetime NOT NULL,
  `level` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`taid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `transaction` (`taid`, `transaction`, `synopsis`, `a_transactions`, `i_keywords`, `a_keywords`, `i_questions`, `a_questions`, `i_accounts`, `a_accounts`, `introduction`, `example`, `description1`, `debit1`, `credit1`, `description2`, `debit2`, `credit2`, `description3`, `debit3`, `credit3`, `description4`, `debit4`, `credit4`, `description5`, `debit5`, `credit5`, `description6`, `debit6`, `credit6`, `calculation`, `explanation`, `reference`, `advises`, `comments`, `author`, `createtime`, `auditor`, `updatetime`, `level`) VALUES
(1,	'差旅费',	'员工出差,借差旅费,报销.',	'员工报销',	'差旅费 出借差旅费 员工出差 出差',	'管理费用',	'员工借差旅费怎么分录?',	'管理费用怎么分录?',	'其他应收款 库存现金',	'管理费用',	'员工出差报销.\r\n出差人员回到单位后应及时办理差旅费的报销手续。首先，出差人员到财务部门领取差旅费报销单，如实填写报销单的有关内容，如出差事由，出发到达的时间、地点，乘坐的交通工具的车别、等级、金额等等，并将有关车票、船票、飞机票、住宿发票等有关原始凭证粘贴在报销单的背后，经所在部门和单位有关领导审查签字后，送财务部门，财务部门有关人员应审查单据是否真实、合法，按照本单位差旅费开支管理办法计算应报销的交通费金额、应发给的伙食补助费、住宿费包干结余、不买卧铺补贴等，对差旅费进行结算，编制会计凭证后交出纳员具体办理现金收付。',	'小辉借款3000元出差.花了2000元,还剩1000元.',	'借款给员工时',	'其他应收款-差旅费(小辉) 3000',	'库存现金 3000',	'报销时',	'管理费用 2000\r\n库存现金 1000',	'其他应收款 3000',	NULL,	'',	'',	NULL,	'',	'',	NULL,	'',	'',	NULL,	'',	'',	'管理费用=其他应收款-库存现金',	'管理费用=其他应收款-库存现金.\r\n所报销金额是管理费用.',	'《财政部关于印发《中央国家机关和事业单位差旅费管理办法》的通知》(财行[2006])',	'更丰富一些',	'参见链接',	'沧桑哥',	'2014-06-05 14:27:37',	'沧桑哥',	'2014-06-04 21:21:11',	0),
(2,	'差旅费',	'员工出差,借差旅费,报销.',	'员工报销',	'差旅费 出借差旅费 员工出差 出差',	'管理费用',	'员工借差旅费怎么分录?',	'管理费用怎么分录?',	'其他应收款 库存现金',	'管理费用',	'员工出差报销.\r\n出差人员回到单位后应及时办理差旅费的报销手续。首先，出差人员到财务部门领取差旅费报销单，如实填写报销单的有关内容，如出差事由，出发到达的时间、地点，乘坐的交通工具的车别、等级、金额等等，并将有关车票、船票、飞机票、住宿发票等有关原始凭证粘贴在报销单的背后，经所在部门和单位有关领导审查签字后，送财务部门，财务部门有关人员应审查单据是否真实、合法，按照本单位差旅费开支管理办法计算应报销的交通费金额、应发给的伙食补助费、住宿费包干结余、不买卧铺补贴等，对差旅费进行结算，编制会计凭证后交出纳员具体办理现金收付。',	'小辉借款3000元出差.花了2000元,还剩1000元.',	'借款给员工时',	'其他应收款-差旅费(小辉) 3000',	'库存现金 3000',	'报销时',	'管理费用 2000\r\n库存现金 1000',	'其他应收款 3000',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'管理费用=其他应收款-库存现金',	'管理费用=其他应收款-库存现金.\r\n所报销金额是管理费用.',	'《财政部关于印发《中央国家机关和事业单位差旅费管理办法》的通知》(财行[2006])',	'更丰富一些',	'参见链接',	'沧桑哥',	'0000-00-00 00:00:00',	'沧桑哥',	'2014-06-07 10:35:10',	0);

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(1) NOT NULL DEFAULT '0',
  `login_time` datetime DEFAULT NULL,
  `logon_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `user` (`id`, `username`, `password`, `phone`, `email`, `level`, `login_time`, `logon_time`) VALUES
(4,	'byhe',	'123456',	'15011070324',	'laohur@gmail.com',	0,	NULL,	NULL);

-- 2014-06-09 12:31:59
