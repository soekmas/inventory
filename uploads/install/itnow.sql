#
# TABLE STRUCTURE FOR: access
#

DROP TABLE IF EXISTS `access`;

CREATE TABLE `access` (
  `access_id` int(20) NOT NULL AUTO_INCREMENT,
  `apps_id` varchar(200) DEFAULT NULL,
  `access_name` varchar(200) DEFAULT NULL,
  `host_name` varchar(200) DEFAULT NULL,
  `ip_address` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `api_key` varchar(200) DEFAULT NULL,
  `secret_key` varchar(200) DEFAULT NULL,
  `access_token` varchar(200) DEFAULT NULL,
  `key1` varchar(200) DEFAULT NULL,
  `key2` varchar(200) DEFAULT NULL,
  `key3` varchar(200) DEFAULT NULL,
  `key4` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT '1',
  PRIMARY KEY (`access_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: accessories
#

DROP TABLE IF EXISTS `accessories`;

CREATE TABLE `accessories` (
  `accessories_id` int(20) NOT NULL AUTO_INCREMENT,
  `accessories_name` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `brand_id` int(20) DEFAULT NULL,
  `model` varchar(200) DEFAULT NULL,
  `serial_no` varchar(200) DEFAULT NULL,
  `supplier_id` int(20) DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
  `warranty_duration` varchar(200) DEFAULT NULL,
  `warranty_end_date` date DEFAULT NULL,
  `issue_to` varchar(200) DEFAULT NULL,
  `status` int(10) DEFAULT '1',
  PRIMARY KEY (`accessories_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: user
#

DROP TABLE IF EXISTS `user`;


CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `username`, `email`, `password`, `role`, `status`) VALUES
(1, 'Welcome Admin', 'admin', 'sales@spagreen.net', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 1);

#
# TABLE STRUCTURE FOR: apps
#

DROP TABLE IF EXISTS `apps`;

CREATE TABLE `apps` (
  `apps_id` int(20) NOT NULL AUTO_INCREMENT,
  `apps_name` varchar(200) DEFAULT NULL,
  `apps_desc` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`apps_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO `apps` (`apps_id`, `apps_name`, `apps_desc`) VALUES ('1', 'Team Viewer', 'Team viewer remote control');
INSERT INTO `apps` (`apps_id`, `apps_name`, `apps_desc`) VALUES ('2', 'VNC', 'VNC remote control');
INSERT INTO `apps` (`apps_id`, `apps_name`, `apps_desc`) VALUES ('3', 'Net Support Manager', 'Net Support Manager');
INSERT INTO `apps` (`apps_id`, `apps_name`, `apps_desc`) VALUES ('4', 'Cpanel', NULL);
INSERT INTO `apps` (`apps_id`, `apps_name`, `apps_desc`) VALUES ('5', 'Paypal', NULL);
INSERT INTO `apps` (`apps_id`, `apps_name`, `apps_desc`) VALUES ('6', 'Payza', NULL);


#
# TABLE STRUCTURE FOR: brand
#

DROP TABLE IF EXISTS `brand`;

CREATE TABLE `brand` (
  `brand_id` int(20) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO `brand` (`brand_id`, `brand_name`, `description`) VALUES ('1', 'Apple', 'Apple Inc.');
INSERT INTO `brand` (`brand_id`, `brand_name`, `description`) VALUES ('2', 'HP', 'Hewlet Pakert');
INSERT INTO `brand` (`brand_id`, `brand_name`, `description`) VALUES ('8', 'Microsoft', 'Microsoft Corporation');
INSERT INTO `brand` (`brand_id`, `brand_name`, `description`) VALUES ('9', NULL, NULL);


#
# TABLE STRUCTURE FOR: category
#

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `category_id` int(20) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(200) DEFAULT NULL,
  `category_desc` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `category` (`category_id`, `category_name`, `category_desc`) VALUES ('1', 'Printing & Scanning', '123');
INSERT INTO `category` (`category_id`, `category_name`, `category_desc`) VALUES ('2', 'Privacy & Security', NULL);
INSERT INTO `category` (`category_id`, `category_name`, `category_desc`) VALUES ('3', 'Networking', NULL);
INSERT INTO `category` (`category_id`, `category_name`, `category_desc`) VALUES ('4', 'Photos & Multimedia', NULL);


#
# TABLE STRUCTURE FOR: ci_sessions
#

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



#
# TABLE STRUCTURE FOR: computer
#

DROP TABLE IF EXISTS `computer`;

CREATE TABLE `computer` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `computer_name` varchar(200) DEFAULT NULL,
  `type` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `processor` varchar(200) DEFAULT NULL,
  `ram` varchar(200) DEFAULT NULL,
  `brand_id` int(20) DEFAULT NULL,
  `model` varchar(200) DEFAULT NULL,
  `os_id` int(20) DEFAULT NULL,
  `serial_no` varchar(200) DEFAULT NULL,
  `supplier_id` int(20) DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
  `warranty_duration` varchar(200) DEFAULT NULL,
  `warranty_end_date` date DEFAULT NULL,
  `issue_to` varchar(200) DEFAULT NULL,
  `status` int(10) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: config
#

DROP TABLE IF EXISTS `config`;

CREATE TABLE `config` (
  `settings_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `value` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`settings_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO `config` (`settings_id`, `title`, `value`) VALUES ('3', 'system_name', 'IT NOW-IT Warranty and Inventory Management System');
INSERT INTO `config` (`settings_id`, `title`, `value`) VALUES ('2', 'company_name', '');
INSERT INTO `config` (`settings_id`, `title`, `value`) VALUES ('6', 'address', '');
INSERT INTO `config` (`settings_id`, `title`, `value`) VALUES ('4', 'phone', '');
INSERT INTO `config` (`settings_id`, `title`, `value`) VALUES ('1', 'system_email', '');


#
# TABLE STRUCTURE FOR: device
#

DROP TABLE IF EXISTS `device`;

CREATE TABLE `device` (
  `device_id` int(20) NOT NULL AUTO_INCREMENT,
  `device_name` varchar(200) DEFAULT NULL,
  `category_id` int(20) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `brand_id` int(20) DEFAULT NULL,
  `model` varchar(200) DEFAULT NULL,
  `serial_no` varchar(200) DEFAULT NULL,
  `supplier_id` int(20) DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
  `warranty_duration` varchar(200) DEFAULT NULL,
  `warranty_end_date` date DEFAULT NULL,
  `issue_to` varchar(200) DEFAULT NULL,
  `status` int(10) DEFAULT '1',
  PRIMARY KEY (`device_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: ip
#

DROP TABLE IF EXISTS `ip`;

CREATE TABLE `ip` (
  `ip_id` int(20) NOT NULL AUTO_INCREMENT,
  `host_name` varchar(200) DEFAULT NULL,
  `type` varchar(200) DEFAULT NULL,
  `ipv4` varchar(200) DEFAULT NULL,
  `ipv6` varchar(200) DEFAULT NULL,
  `mac` varchar(200) DEFAULT NULL,
  `subnet` varchar(200) DEFAULT NULL,
  `gateway` varchar(200) DEFAULT NULL,
  `dns1` varchar(200) DEFAULT NULL,
  `dns2` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT '1',
  PRIMARY KEY (`ip_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: os
#

DROP TABLE IF EXISTS `os`;

CREATE TABLE `os` (
  `os_id` int(20) NOT NULL AUTO_INCREMENT,
  `os_name` varchar(200) DEFAULT NULL,
  `os_desc` varchar(200) DEFAULT NULL,
  `platform` varchar(200) DEFAULT NULL,
  `developer` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`os_id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;

INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('11', 'Windows 10', NULL, 'IBM', 'Microsoft');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('12', 'AIX and AIXL', NULL, 'Various', 'IBM');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('13', 'AmigaOS', NULL, 'Amiga', 'Commodore');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('14', 'Android', NULL, 'Mobile', 'Google');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('15', 'BSD', NULL, 'Various', 'BSD');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('16', 'Caldera Linux', NULL, 'Various', 'SCO');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('17', 'Corel Linux', NULL, 'Various', 'Corel');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('18', 'CP/M', NULL, 'IBM', 'CP/M');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('19', 'Debian Linux', NULL, 'Various', 'GNU');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('20', 'DUnix', NULL, 'Various', 'Digital');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('21', 'DYNIX/ptx', NULL, 'Various', 'IBM');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('22', 'HP-UX', NULL, 'Various', 'Hewlett Packard');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('23', 'iOS', NULL, 'Mobile', 'Apple');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('24', 'IRIX', NULL, 'Various', 'SGI');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('25', 'Kondara Linux', NULL, 'Various', 'Kondara');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('26', 'Linux', NULL, 'Various', 'Linus Torvalds');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('27', 'MAC OS 8', NULL, 'Apple Macintosh', 'Apple');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('28', 'MAC OS 9', NULL, 'Apple Macintosh', 'Apple');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('29', 'MAC OS 10', NULL, 'Apple Macintosh', 'Apple');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('30', 'MAC OS X', NULL, 'Apple Macintosh', 'Apple');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('31', 'Mandrake Linux', NULL, 'Various', 'Mandrake');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('32', 'MINIX', NULL, 'Various', 'MINIX');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('33', 'MS-DOS?1.x', NULL, 'IBM', 'Microsoft');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('34', 'MS-DOS?2.x', NULL, 'IBM', 'Microsoft');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('35', 'MS-DOS?3.x', NULL, 'IBM', 'Microsoft');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('36', 'MS-DOS?4.x', NULL, 'IBM', 'Microsoft');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('37', 'MS-DOS?5.x', NULL, 'IBM', 'Microsoft');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('38', 'MS-DOS?6.x', NULL, 'IBM', 'Microsoft');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('39', 'NEXTSTEP', NULL, 'Various', 'Apple');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('40', 'OS/2', NULL, 'IBM', 'IBM');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('41', 'OSF/1', NULL, 'Various', 'OSF');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('42', 'QNX', NULL, 'Various', 'QNX');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('43', 'Red Hat Linux', NULL, 'Various', 'Red Hat');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('44', 'SCO', NULL, 'Various', 'SCO');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('45', 'Slackware Linux', NULL, 'Various', 'Slackware');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('46', 'Sun Solaris', NULL, 'Various', 'Sun');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('47', 'SuSE Linux', NULL, 'Various', 'SuSE');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('48', 'Symbian', NULL, 'Mobile', 'Nokia');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('49', 'System 1', NULL, 'Apple Macintosh', 'Apple');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('50', 'System 2', NULL, 'Apple Macintosh', 'Apple');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('51', 'System 3', NULL, 'Apple Macintosh', 'Apple');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('52', 'System 4', NULL, 'Apple Macintosh', 'Apple');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('53', 'System 6', NULL, 'Apple Macintosh', 'Apple');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('54', 'System 7', NULL, 'Apple Macintosh', 'Apple');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('55', 'System V', NULL, 'Various', 'System V');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('56', 'Tru64 Unix', NULL, 'Various', 'Digital');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('57', 'Turbolinux', NULL, 'Various', 'Turbolinux');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('58', 'Ultrix', NULL, 'Various', 'Ultrix');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('59', 'Unisys', NULL, 'Various', 'Unisys');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('60', 'Unix', NULL, 'Various', 'Bell labs');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('61', 'UnixWare', NULL, 'Various', 'UnixWare');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('62', 'VectorLinux', NULL, 'Various', 'VectorLinux');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('63', 'Windows 2000', NULL, 'IBM', 'Microsoft');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('64', 'Windows 2003', NULL, 'IBM', 'Microsoft');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('65', 'Windows 3.X', NULL, 'IBM', 'Microsoft');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('66', 'Windows 7', NULL, 'IBM', 'Microsoft');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('67', 'Windows 8', NULL, 'IBM', 'Microsoft');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('68', 'Windows 95', NULL, 'IBM', 'Microsoft');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('69', 'Windows 98', NULL, 'IBM', 'Microsoft');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('71', 'Windows CE', NULL, 'PDA', 'Microsoft');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('72', 'Windows ME', NULL, 'IBM', 'Microsoft');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('73', 'Windows NT', NULL, 'IBM', 'Microsoft');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('74', 'Windows Vista', NULL, 'IBM', 'Microsoft');
INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES ('75', 'Windows XP', NULL, 'IBM', 'Microsoft');


#
# TABLE STRUCTURE FOR: supplier
#

DROP TABLE IF EXISTS `supplier`;

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier_name` varchar(200) DEFAULT NULL,
  `supplier_address` varchar(200) DEFAULT NULL,
  `supplier_phone` varchar(200) DEFAULT NULL,
  `supplier_email` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`supplier_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

