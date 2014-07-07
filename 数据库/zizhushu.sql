-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 07 月 07 日 08:27
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `evabioyetian`
--
CREATE DATABASE IF NOT EXISTS `evabioyetian` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `evabioyetian`;

-- --------------------------------------------------------

--
-- 表的结构 `ad`
--

CREATE TABLE IF NOT EXISTS `ad` (
  `adid` int(10) NOT NULL AUTO_INCREMENT,
  `content` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`adid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=50 ;

--
-- 转存表中的数据 `ad`
--

INSERT INTO `ad` (`adid`, `content`) VALUES
(1, '<a target="_blank" href="http://numibaby.taobao.com">王熙同学的淘宝小店</a>'),
(2, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D23289715">曼德拉传记</a>'),
(3, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D23295962">维基解密创始人 阿桑奇自传</a>'),
(4, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D23230517">韩国女总统 朴槿惠传记</a>'),
(5, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D22783658">nba奥尼尔自传</a>'),
(6, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D22626941">海伦凯勒自传</a>'),
(7, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D22484707">乔布斯传记</a>'),
(8, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D22843120">李娜自传</a>'),
(9, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D20909964">曼德拉自传</a>'),
(10, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D23296796">唐骏自传</a>'),
(11, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D23168337">小皇帝 詹姆斯 自传</a>'),
(12, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D22885584">甘地自传</a>'),
(13, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D22553654">尼采自传</a>'),
(14, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D22551954">毛泽东自传</a>'),
(15, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D20848037">稻盛和夫自传</a>'),
(16, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D22554020">dior自传</a>'),
(17, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D22894795">施瓦辛格自传</a>'),
(18, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D22466236">牛顿自传</a>'),
(19, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D22626940">巴顿将军自传</a>'),
(20, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D20962695">马克吐温自传</a>'),
(21, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D23225725">罗斯福自传</a>'),
(22, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D22547582">鲁迅自传</a>'),
(23, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D1048558608">justin bieber 自传</a>'),
(24, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D22883371">卓别林自传</a>'),
(25, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D1098013008">eminem自传</a>'),
(26, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D21047208">朴智星自传</a>'),
(27, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D23170232">弗洛伊德自传</a>'),
(28, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D23317620">安徒生自传</a>'),
(29, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D20187447">季羡林自传</a>'),
(30, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D22883370">居里夫人自传</a>'),
(31, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D22786335">福特自传</a>'),
(32, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D22470311">忏悔录 自传</a>'),
(33, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D22513460">孟非自传</a>'),
(34, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D20675508">李开复自传</a>'),
(35, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D23254706">杰克韦尔奇自传</a>'),
(36, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D22820760">林丹自传</a>'),
(37, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D23270809">韩寒自传</a>'),
(38, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D20448252">芮成钢自传</a>'),
(39, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D20333732">奥巴马自传</a>'),
(40, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D21056758">星巴克自传</a>'),
(41, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D23297714">科比自传</a>'),
(42, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D88367">玫琳凯自传</a>'),
(43, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D22754621">沃尔玛自传</a>'),
(44, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D22580563">奈良美智自传</a>'),
(45, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D22451601">布什自传</a>'),
(46, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D20864017">迈克尔杰克逊自传</a>'),
(47, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D22888300">韦德自传</a>'),
(48, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D20920653">阿加西自传</a>'),
(49, '<a target="_blank" href="http://union.dangdang.com/transfer.php?sys_id=1&ad_type=10&from=P-318975&backurl=http%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D20873226">冯小刚自传</a>');

-- --------------------------------------------------------

--
-- 表的结构 `code`
--

CREATE TABLE IF NOT EXISTS `code` (
  `codeid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `key` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `addtime` datetime NOT NULL,
  PRIMARY KEY (`codeid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

-- --------------------------------------------------------

--
-- 表的结构 `dingyue`
--

CREATE TABLE IF NOT EXISTS `dingyue` (
  `userid` int(15) NOT NULL,
  `bdy_userid` int(15) NOT NULL,
  `addtime` datetime NOT NULL,
  KEY `userid` (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `pinglun`
--

CREATE TABLE IF NOT EXISTS `pinglun` (
  `plid` int(15) NOT NULL AUTO_INCREMENT,
  `wzid` int(15) NOT NULL,
  `content` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `addtime` datetime NOT NULL,
  `shenfen` tinyint(2) NOT NULL,
  `pl_userid` int(15) NOT NULL,
  `hf_userid` int(15) NOT NULL,
  PRIMARY KEY (`plid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(15) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pw` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fm_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `addtime` datetime NOT NULL,
  `fm_pic` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dy_count` int(10) NOT NULL,
  `shenfen` tinyint(2) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=98 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`userid`, `email`, `pw`, `fm_name`, `addtime`, `fm_pic`, `name`, `dy_count`, `shenfen`) VALUES
(1, 'yilin@163.com', 'a123', '意林杂志', '2013-12-14 11:35:36', '13871635223685.jpg', '意林杂志社', 0, 0),
(2, 'vistaweek@163.com', '123', 'vista 看天下', '2013-12-14 11:40:34', '13871636457229.jpg', '看天下杂志组', 0, 0),
(3, 'duzhe@163.com', '123', '读者', '2013-12-14 11:42:11', '13871636946618.jpg', '读者杂志组', 0, 0),
(97, '355285351@qq.com', 'qf3cgh33g', '自助书创始人-叶添', '2014-07-05 03:12:13', '13871637607178', '叶添', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `wenzhang`
--

CREATE TABLE IF NOT EXISTS `wenzhang` (
  `wzid` int(15) NOT NULL AUTO_INCREMENT,
  `userid` int(15) NOT NULL,
  `content` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `addtime` datetime NOT NULL,
  `shenfen` tinyint(2) NOT NULL,
  `pl_count` int(10) NOT NULL,
  `zl_count` int(10) NOT NULL,
  `zl_wzid` int(15) NOT NULL,
  `gm_count` int(15) NOT NULL,
  PRIMARY KEY (`wzid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1248 ;

--
-- 转存表中的数据 `wenzhang`
--

INSERT INTO `wenzhang` (`wzid`, `userid`, `content`, `addtime`, `shenfen`, `pl_count`, `zl_count`, `zl_wzid`, `gm_count`) VALUES
(96, 2, '﻿			《Vista看天下》219期社评 这场车祸就不应该发生。发生了之后，也不应该像现在这个样子。 8月26日凌晨，陕西延安境内的包茂高速公路上，一辆双层卧铺客车和一辆装有甲醇的罐车追尾起火。客车车头嵌入油罐车罐体将近2米，甲醛大量流入客车，引燃车厢内的被褥和行李，火势迅速蔓延，而全车唯一的前车门严重变形，无法打开，火海中的客车瞬间变成人间地狱。车祸导致36人遇难，仅有3人逃生。 一两天后，这场车祸就从新闻焦点变成了新闻背景。因为一张灾难现场微笑的照片，陕西省安监局局长杨达才成了人们痛批的对象。随后通过人肉搜索，网友们发现杨达才拥有多块名表。8月29日，杨达才开通微博回应质疑，解释为何微笑，并承认买过5块名表。但很快网友发现他拥有的名表不止5块，事件继续发酵（详见本刊时政版第28页）。至此，车祸本身已淡出人们的视线，一个官员的微笑和手表，成为了持续关注的焦点。 事情不应该是这样的。照理说，在如此惨烈的车祸面前，最受关注的，首先是探寻原因：车祸当天到底发生了什么？有哪些环节出了问题？如何防止类似的惨剧再次发生？谁应该为此负责？……与此同时，记取生命的逝去：他们叫什么名字？为什么会登上这辆车？他们曾经有过什么样的生活？他们的离开给家人带来多大的痛苦？……这才是一场灾难发生之后应该有的样子。 就安监局局长来说，首先要责问的，是安检措施是否有疏漏？比如卧铺客车是否存在问题？停车休息制度是否被严格执行？当他面对公众的时候，无论提问还是回应，核心都应该围绕着这些来进行。“微笑”需要解释并道歉，但这并不是最重要的。至于他拥有多少名表，和车祸本身就更远了。不得不说，从一场36人遇难的车祸到一个官员的言行穿戴，已经大大地跑题了。 那么，这种扭曲是怎样发生的？它的合理性又在哪里？ 人们之所以对一个官员的表情和穿戴那么感兴趣，很大程度上是因为只能看到这些。以杨达才为例，他平时工作状态如何？人们不知道。他的财产收入状况如何？人们也不知道。于是只能通过照片去观察这个人：他在灾难现场笑了；他在不同场合戴着不同的名贵手表……然后通过这些蛛丝马迹去推测一个官员是否工作称职，是否有贪污腐败。因为条件限制，这是无可奈何的事情，倘若因此责怪民众轻重不分，反倒是本末倒置。 进而，现实还告诉我们，这样一种监督方式，不仅可行，而且有效。去年7月22日，同样在凌晨，同样在高速公路，同样是双层卧铺客车，同样是发生火灾，41人遇难，当时也是说要加强监管，要停运整顿，要推行凌晨停车休息制度，可是短短一年，又发生了36人遇难的惨案。对普通人来说，要监督政府的日常工作，最后带来的往往是深重的无力感。而相反的例子，则是“天价烟”直接导致南京市房管局局长周久耕因受贿罪锒铛入狱。而这一次，杨达才也因戴名表导致陕西省纪委的介入调查。这些，足以让参与者充满成就感。 从大处出发，无从着手，无能为力；从小处发力，切实可行，效果明显。两相对比，民众抓住鸡毛蒜皮的事情不放松，这不是很自然的事情吗？ 但这毕竟不正常，单从表面看，它让公共议题“花边化”，冲淡了核心问题。而且这种“可行有效”并不值得欣慰，它也许能带给人们一些快感，但无助于解决根本问题。它和“情妇反腐”，“小偷反腐”一样，都寄托于偶然的发现。官员要对付起来也很容易，以后公共场合不抽贵烟，不戴名表就行了。众所周知，最有力的武器是制度建设：一部《公务员财产申报法》，胜过无数人的网络搜索。可是从1994年全国人大列入立法项目，酝酿近二十年，至今难产。如今这种扭曲的现实，正是民众监督意识的高涨与制度建设的滞后的反映。36人遇难的车祸，比不上一个官员的名表受关注，它说明了一件事：不被监督的权力比车祸更加可怕。 ● 欢迎回应：vistastory@163.com									', '2013-12-14 11:56:05', 0, 0, 0, 96, 0),
(97, 2, '﻿			如果是一百万，大家或许还能保持淡定；如果是一千万，恐怕就有点hold不住了；如果是一亿，所有人都要震惊了。6月12日，中国福利彩票开出了史上最大奖金额：5.7亿。而获奖的幸运儿到底是谁？别说姓甚名谁，长什么样，连是男是女都不知道。于是大家起疑心了，从巨奖发放至今，各式各样的质疑从未间断，是否应该公开获奖者信息也成了争议的焦点。这很正常，毕竟不是个小数目。况且，这笔钱不是干活辛苦挣来的，不是从天上掉下来的，而是大伙儿你5块他10块凑起来的——按一个人买10元彩票，奖金返还率50%计算，得一亿人/次还要多。大家盯得紧，不能说是羡慕嫉妒恨，他们有这个权利。不过，假如你自己中奖，是否愿意公开个人信息？当然不愿意。既然你都不愿意，那为什么别人中了奖就应该公开呢？所以，虽然《彩票管理条例》制定时并没有征求过你的意见，但不公开得奖者个人信息，一定程度上仍然可以视为一种契约。当然，事情并没有这么简单，大家固然都是冲着中奖去的，但并不是只考虑中奖这个结果——实际上未中奖的概率远远高于中奖——所以公平也很重要。所谓隐私权与知情权的冲突，说白了，就是中奖者与未中奖者之间的冲突。人是自私的，那怎样才能解决这个冲突呢？也就是说，如何才能定出一个公正的契约？政治学者罗尔斯在《正义论》中提出了一个叫“无知之幕”的假设：如果人们完全不知道自己的实际情况，他们所一致认同的契约才是公正的。用在彩票这件事上，那就要问：假如你不知道自己是中奖者还是未中奖者，你会定出什么样的规则？因此，我们可以很容易得出结论，既不应该绝对保密，也不应该完全公开，而是应该在两者之间的中间地带进行选择。国外很多地方对中奖者的个人信息实行有限保护，就是这个道理。而中国的《彩票管理条例》规定“应当对彩票中奖者个人信息予以保密”，则过于简单了——这对彩票管理者来说是最方便的，但并不是最合理的。那么，这条线应该划在中间地带的哪个位置？这就需要引入一些变量。比如安全性：一旦泄露获奖者隐私，可能带来什么样的后果？目前缺少案例，难以做出准确的判断，但估计不太乐观——安全性低就意味着保密工作应该做得更好一点。再比如信任度：中国彩票行业的信誉有多高？很遗憾，低得很。西安宝马彩票案、深圳彩票篡改案，国家体彩中心原副主任张伟华案、青岛福彩中心原主任王增先案……形形色色的徇私舞弊，大大小小的官员落马，这些年就没断过，人们怎么可能很有信心？——信任度低就意味着透明度得加大一点。因此彩票管理者扮演了关键的第三者角色：如果他们做得好，有公信力，那么中奖者的隐私就能得到更好的保护；相反，人们便会对公布中奖者个人信息提出更多的要求。现在人们要求公开中奖者信息，很大程度上要归咎于彩票管理者做得太差：比如，开奖为什么是录播而不是直播？摇奖设备为什么连个国家标准都没有？《中国彩票法》为什么酝酿了二十多年还在酝酿？……在这些方面进行改善，是完全正面的提升，而公开中奖者更多的个人信息，则是不得已的牺牲，毫无疑问，应该优先选择前者而尽量避免后者。现在北京福彩中心针对质疑的回复是：巨奖兑奖已结束，不会再就任何5.7亿巨奖衍生问题做回复。这是在保护中奖者的隐私，还是在陷中奖者于争议之中？这是在提升中国彩票的公信力，还是在降低中国彩票的公信力？这样的回复，叫人如何不质疑？									', '2013-12-14 11:56:05', 0, 0, 0, 97, 0),
(187, 3, '﻿			【独门秘籍】期待你的来信：你正在为爱情烦恼？人际关系让你头痛不已？经常觉得没有朋友、无人理解？欢迎给我们来信，苏小懒将和你一起寻求答案。来信请发邮件至：dmmj@duzhe.cn 亲爱的苏小懒：暗恋她快5年了。高一上学期我在三班，她在隔壁二班。一次课间，我去二班找哥们儿借书，她刚好回首，望过来，嫣然一笑，明眸皓齿。那次我直接惊呆了，如此清丽脱俗，不可方物。高一下学期分文理，我们被分到了一个班。我开始做一些傻事以引起她的注意，比如，自习时与同桌大声说笑，放肆地笑，肆无忌惮。我在班里的成绩是第一，在我们那所以成绩论英雄的学校里，第一名不管干什么都会有老师护着。现在想来，别人在学习的时候自己在捣乱，这种行为是多么欠扁。高二时，一次课间，见她左手托腮思考问题，阳光刚好洒到她身上，皓臂如玉，我看得痴了。玩了一年，时间都浪费在了看课外书上，成绩自然一塌糊涂。到了高三，我开始觉醒，疯狂做题，准备高考。每天早上早早跑到教室，在教室门口等着开门，那时她带着教室钥匙，偶尔也会闲聊几句，但我太紧张，总红着脸支支吾吾。高中三年，我没跟她表白。追她的男生有一个加强连，而我是如此不起眼，只能将这份感情埋在日记里。之后参加高考。考完回家后，我把日记烧掉，很淡定地等待成绩。成绩出来，报考志愿，很顺利地考入了心仪已久的大学。我选择了南方，离家一千多公里，希望在陌生的地方打拼出自己的未来，然后，不再自卑，告诉她：“我喜欢你。”而她留在了省内—与家相邻的一个城市。在大学里，我几次试图忘掉她，安下心搞自己喜欢的专业，可几次梦见她就再也睡不着了。偶尔发个不温不火的短信问候一下，她的回复也云淡风轻。本想走得衣袂飘然，思念却如此藕断丝连。　也许现在她身边已经有男孩了吧。我们马上上大三了，在她那所理工类大学里，以她的条件，找男友轻而易举。也许等我觉得自己够资格去表白的时候，她已为人妇为人母了。我只想告诉她，我喜欢她。没有非分之想。如此而已。我很清楚自己的状况，一个农村娃，家里没钱没势，相貌一般，志大才疏却又牢骚满腹。我的自卑与懦弱成了最大的阻隔。寒江雪亲爱的小寒：人类会在什么年龄、心境、场合，以及时机，能够遇见当初为之“卑微地低到尘埃里”的人，让多年后的自己可以坦然地、云淡风轻地将当年满腔澎湃的爱说出来—嗨，你知道吗，我曾经暗恋过你呀！对方也许只是简单沉默地微笑，也许会诧异夸张地张大嘴巴：“你又不早说，那时我也暗恋你。”这样的几率也许只有在小说或者肥皂剧里才会出现吧。碰到更成熟、稳重、有风度的人，也许会体贴地伸出手，轻轻摩挲着你的后背：“我都懂的，谢谢你。”当然有更多其他的回应方式，只是我相信，此刻的你再不用担心对方将你煞费苦心写了几天几夜的情书贴在学校宣传栏上请全校人士阅读，或者汇报至班主任处，同你那望子成龙的父母来个亲切的会晤……据说韩国著名演员张东健曾在多年后见到自己学生时代深深暗恋的女老师。时隔多年，当年有着魔鬼身材、沉鱼落雁之貌的女老师，经过岁月的无情洗礼，已成有着水桶腰的邻家大婶。即便如此，张东健还是表达了自己当年的爱慕之情。出乎所有人的意料，老师回他：“我想你现在一定很后悔！”看来，暗恋有风险，告白需谨慎—你心目中的女神也许会在多年后成为你面前的大婶；不告白，你只能眼睁睁看着她成为邻家大婶。“我只想告诉她，我喜欢她。没有非分之想。”那就去告诉她。我只是好奇，过了这么久，你是怎么忍住不说的？非分之想也可以想一想呀，追求美好的事物，从来都是人的本能。少男的暗恋经你娓娓道来，这般惊心动魄又极具画面感，如此有才华的男生陷在一场暗恋里，只觉自卑，相信所有暗恋过别人的人都会理解这份卑微的心情吧。“香港第一才子”陶杰在《杀鹌鹑的少女》一书中说：“当你老了，回顾一生，就会发觉—什么时候出国读书，什么时候决定做第一份职业，何时选定了对象而恋爱，什么时候结婚，其实都是命运的巨变。只是当时站在三岔路口，眼见风云千樯，你作出抉择的那一日，在日记上，相当沉闷和平凡，当时还以为是生命中普通的一天。”是想要自己逐日见证她成为你的“大婶”，还是想要多年后偶遇“邻家大婶”？等你作出抉择的那一天。苏小懒 									', '2013-12-14 11:58:11', 0, 0, 0, 187, 0),
(1040, 1, '﻿			爱的迷藏方冠睛                                    (图片来自网络)夫妻间很少有不吵架的，他俩也一样。他的脾气不够好，有点小肚鸡肠，爱钻牛角尖，心情不好的时候就冲她吼叫，发脾气。她呢，是个很温顺的女子，不会和他吵架，只会隐忍。气极了，或者忍不住了，她就跑出去，去娘家，去朋友家，或者去公园一个人静一静。每次她一离家出走，他的气就消了，接着就是后悔和着急，后悔不该气她，担心她会出什么事情。于是，会给她打电话，去她惯常去的地方找她。她呢，不接他的电话，躲着他，让他着急。这就像捉迷藏，她躲，他寻。找到了，他会将她抱得铁紧，很后悔地骂自己是混蛋，赌咒发誓说，他今后再也不会气她了。硝烟就这样散尽，两口子重新柔情蜜意。吵一次架，捉一次迷藏，爱，反而更浓烈了。但是，他就是那样的臭脾气，所有的赌咒发誓都算不得数。隔了不长的时间，为着一点小事，他还是会冲她发脾气，还是会惹得她离家出走，于是，新一轮的捉迷藏又开始了。这样反反复复，终于有一天，无论他怎么发脾气，她也不离家出走了，就在家里守着他。因为，他出了事。他办了一个小加工厂，类似于小作坊，他自己既是老板，也是工人。工作中的一时疏忽大意，他的裤腿被机器的轮子卷住了，就这样被轧断了双腿。为了疗伤，他耗尽了家中的所有钱财，但下半生仍需在轮椅上度过。失去双腿的他脾气更加暴躁，她只能顺着他，温言软语地劝他，怎么受气也不敢再离开家。因为，他需要她的照顾。但他却变本加厉，动辄发脾气，嫌她做的饭菜不好吃，嫌她为他擦身子的水热了、凉了，反正什么都不如意，总有借口发脾气。起先还只是骂她，到后来，竟动了手。他出院回家不到半个月，她就瘦得不成样子了。她白天要料理他的生活，晚上呢，连个觉都睡不安稳。他总是找些鸡毛蒜皮的事来同她吵架，整宿整宿地吵。她很快就委顿起来，一坐下来就打瞌睡。她实在太需要睡眠了。而他是那样的狠心，仍是不肯放过她。这天晚上，她刚刚躺下来，他就又骂开了，几乎是无缘无故的。她不计较，任他骂。他却得寸进尺，上了手，一巴掌掴在她脸上，半边脸立即就肿了起来。任她如何温顺，也受不了这样的日子。她终于生气了，说，你要是再这样，我就走了，不理你了。他则暴吼起来，滚，滚得越远越好!她真的从房间里冲出来，冲到客厅，打开大门，咣当一声，重重地将门摔上了。他躺在床上，听着客厅里的动静，知道她是真的离家出走了。他先是感到失意，接着就是伤心，哭，无声地哭。他哭了很久，连枕头都被泪水濡湿了，这才从床上爬起来，开始写遗书。他早就有寻死的心，他不想拖累她。只是她一直守在他的身边，他没有机会。他本不想折磨她，折磨她时他会心痛，但是，为了不拖累她，他只能这样。写好遗书，他挣扎着爬下床，爬到厨房，拧开了煤气。他就躺在厨房的地板上，等待着达到自己的目的。煤气嗤嗤地响，他的身体也渐渐绵软，他终于昏迷了过去。但他还是醒了，醒来后躺在医院里。他不知道是谁救了他，问医生。医生说，是你老婆报了警，她说你家里煤气泄漏，你有生命危险，让警察去救的。她不是离家出走了吗，怎么会知道他拧开了煤气？难道她又回家了？他警觉起来，问，我老婆呢？医生说，你在医院的这两天，你老婆一直没来过。他骇住了，发了疯似的喊，快找我老婆，她会不会就在家里？警察去了，在他家里仔细搜索。当他们打开客房的衣柜时，所有的人都惊呆了，她歪在衣柜里，半倚半躺，嘴边的白沫干了薄薄的一层，人早就死了。而她的手上，还握着手机。她最后一次与他捉迷藏，躲在了自己家中的衣柜里。关于她的死，人们只能这样推测：她并没有真的离开家，她担心离开家后他会有什么不测，但是，她又太需要睡眠了，所以，她做了个离家出走的假象，躲进衣柜里。这样，他以为她离家了，不会再吵闹，她也可以从衣柜里关注他的动静，既可以睡觉又可以防止他有什么意外。然而，躲进衣柜后，她架不住瞌睡，睡着了，等她醒来时，屋里已到处弥漫着煤气，她中毒已深，已经不能从衣柜里出来了，她惟一能做的，就是拼了所有的力气用手机拨了110。然而，她至死也只牵挂着丈夫的安危，只叫警察救自己的丈夫，却忘了自己。警察到现场时，也只发现了她的丈夫，谁会想到，还有一个人，藏在衣柜里呢？最后一次捉迷藏，她永远地藏住了自己，却用爱，找回了他的生命。                     意林客户端二维码          意林微信二维码 想和意林近距离沟通吗？快加意林微信吧！搜索账号：yilinzazhi，或扫描上方二维码。我们在这里等你哦！--------------------------------------------------------------------------------------------------									', '2013-12-14 12:06:20', 0, 0, 0, 1040, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
