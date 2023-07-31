/*
Navicat MySQL Data Transfer

Source Server         : LOCAL
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : exchange_bet

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-09-10 20:50:53
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for banner
-- ----------------------------
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`banner_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of banner
-- ----------------------------
INSERT INTO `banner` VALUES ('2', 'Header banner', '1559279483images.png', '0000-00-00', 'A');
INSERT INTO `banner` VALUES ('4', 'side banner', '1559024486download.png', '0000-00-00', 'A');

-- ----------------------------
-- Table structure for betters
-- ----------------------------
DROP TABLE IF EXISTS `betters`;
CREATE TABLE `betters` (
  `bet_id` int(11) NOT NULL AUTO_INCREMENT,
  `teams` text NOT NULL,
  `odds` varchar(255) NOT NULL,
  `stake` varchar(255) NOT NULL,
  `profit` varchar(255) NOT NULL,
  `betters_name` varchar(255) NOT NULL,
  `betting_team` text NOT NULL,
  PRIMARY KEY (`bet_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of betters
-- ----------------------------
INSERT INTO `betters` VALUES ('1', 'Anadolu Efes (vs) FC Barcelona Regal', '2.10', '12', '13.20', 'ramesh', '');
INSERT INTO `betters` VALUES ('2', '??????<br>???', '1.89', '', '', 'ramesh', '');
INSERT INTO `betters` VALUES ('3', 'Atlanta<br> Minnesota', '2.06', '12', '12.72', 'priya', '');

-- ----------------------------
-- Table structure for contents
-- ----------------------------
DROP TABLE IF EXISTS `contents`;
CREATE TABLE `contents` (
  `content_id` int(11) NOT NULL AUTO_INCREMENT,
  `content_pagename` varchar(255) NOT NULL,
  `content_pagetitle` varchar(255) NOT NULL,
  `content_pagecontent` text NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of contents
-- ----------------------------
INSERT INTO `contents` VALUES ('1', 'Home Page', 'Home', '<p>\r\n	<strong font-size:=\"\" open=\"\" style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\" text-align:=\"\">Lorem Ipsum</strong><span font-size:=\"\" open=\"\" style=\"color: rgb(0, 0, 0);\" text-align:=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n', '155896008741e3ZAW8bqL.jpg');
INSERT INTO `contents` VALUES ('2', 'About Us', 'About Us', '<p>\r\n	<strong font-size:=\"\" open=\"\" style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\" text-align:=\"\">Lorem Ipsum</strong><span font-size:=\"\" open=\"\" style=\"color: rgb(0, 0, 0);\" text-align:=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n', '155896011181xmg8hcVDL._UL1500_.jpg');
INSERT INTO `contents` VALUES ('3', 'Contact us', 'Contact us', '<p>\r\n	<strong font-size:=\"\" open=\"\" style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\" text-align:=\"\">Lorem Ipsum</strong><span font-size:=\"\" open=\"\" style=\"color: rgb(0, 0, 0);\" text-align:=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n', '1558960163p1.jpg');
INSERT INTO `contents` VALUES ('4', 'Terms and Conditions', 'Terms and Conditions', '<p>\r\n	<strong font-size:=\"\" open=\"\" style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\" text-align:=\"\">Lorem Ipsum</strong><span font-size:=\"\" open=\"\" style=\"color: rgb(0, 0, 0);\" text-align:=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n', '1558960240logo.jpg');
INSERT INTO `contents` VALUES ('5', 'Privacy Policy', 'Privacy Policy', '<p>\r\n	<strong font-size:=\"\" open=\"\" style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\" text-align:=\"\">Lorem Ipsum</strong><span font-size:=\"\" open=\"\" style=\"color: rgb(0, 0, 0);\" text-align:=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n', '1558960024312DEs0RORL.jpg');

-- ----------------------------
-- Table structure for country
-- ----------------------------
DROP TABLE IF EXISTS `country`;
CREATE TABLE `country` (
  `CountryId` int(11) NOT NULL AUTO_INCREMENT,
  `Country` varchar(150) NOT NULL,
  `FIPS104` varchar(100) NOT NULL,
  `ISO2` varchar(100) NOT NULL,
  `ISO3` varchar(100) NOT NULL,
  `ISON` varchar(100) NOT NULL,
  `Capital` varchar(250) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`CountryId`)
) ENGINE=MyISAM AUTO_INCREMENT=278 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of country
-- ----------------------------
INSERT INTO `country` VALUES ('1', 'Afghanistan', 'AF', 'AF', 'AFG', '4', 'Kabul ', 'Afghanistan', '1');
INSERT INTO `country` VALUES ('2', 'Albania', 'AL', 'AL', 'ALB', '8', 'Tirana ', 'Albania', '1');
INSERT INTO `country` VALUES ('3', 'Algeria', 'AG', 'DZ', 'DZA', '12', 'Algiers ', 'Algeria', '1');
INSERT INTO `country` VALUES ('4', 'American Samoa', 'AQ', 'AS', 'ASM', '16', 'Pago Pago ', 'American Samoa', '1');
INSERT INTO `country` VALUES ('5', 'Andorra', 'AN', 'AD', 'AND', '20', 'Andorra la Vella ', 'Andorra', '1');
INSERT INTO `country` VALUES ('6', 'Angola', 'AO', 'AO', 'AGO', '24', 'Luanda ', 'Angola', '1');
INSERT INTO `country` VALUES ('7', 'Anguilla', 'AV', 'AI', 'AIA', '660', 'The Valley ', 'Anguilla', '1');
INSERT INTO `country` VALUES ('8', 'Antarctica', 'AY', 'AQ', 'ATA', '10', '', 'Antarctica', '1');
INSERT INTO `country` VALUES ('9', 'Antigua and Barbuda', 'AC', 'AG', 'ATG', '28', 'Saint John\'s ', 'Antigua and Barbuda', '1');
INSERT INTO `country` VALUES ('10', 'Argentina', 'AR', 'AR', 'ARG', '32', 'Buenos Aires ', 'Argentina', '1');
INSERT INTO `country` VALUES ('11', 'Armenia', 'AM', 'AM', 'ARM', '51', 'Yerevan ', 'Armenia', '1');
INSERT INTO `country` VALUES ('12', 'Aruba', 'AA', 'AW', 'ABW', '533', 'Oranjestad ', 'Aruba', '1');
INSERT INTO `country` VALUES ('13', 'Ashmore and Cartier', 'AT', '--', '-- ', '--', '', 'Ashmore and Cartier', '1');
INSERT INTO `country` VALUES ('14', 'Australia', 'AS', 'AU', 'AUS', '36', 'Canberra ', 'Australia', '1');
INSERT INTO `country` VALUES ('15', 'Austria', 'AU', 'AT', 'AUT', '40', 'Vienna ', 'Austria', '1');
INSERT INTO `country` VALUES ('16', 'Azerbaijan', 'AJ', 'AZ', 'AZE', '31', 'Baku (Baki) ', 'Azerbaijan', '1');
INSERT INTO `country` VALUES ('17', 'The Bahamas', 'BF', 'BS', 'BHS', '44', 'Nassau ', 'The Bahamas', '1');
INSERT INTO `country` VALUES ('18', 'Bahrain', 'BA', 'BH', 'BHR', '48', 'Manama ', 'Bahrain', '1');
INSERT INTO `country` VALUES ('19', 'Baker Island', 'FQ', '--', '-- ', '--', '', 'Baker Island', '1');
INSERT INTO `country` VALUES ('20', 'Bangladesh', 'BG', 'BD', 'BGD', '50', 'Dhaka ', 'Bangladesh', '1');
INSERT INTO `country` VALUES ('21', 'Barbados', 'BB', 'BB', 'BRB', '52', 'Bridgetown ', 'Barbados', '1');
INSERT INTO `country` VALUES ('22', 'Bassas da India', 'BS', '--', '-- ', '--', '', 'Bassas da India', '1');
INSERT INTO `country` VALUES ('23', 'Belarus', 'BO', 'BY', 'BLR', '112', 'Minsk ', 'Belarus', '1');
INSERT INTO `country` VALUES ('24', 'Belgium', 'BE', 'BE', 'BEL', '56', 'Brussels ', 'Belgium', '1');
INSERT INTO `country` VALUES ('25', 'Belize', 'BH', 'BZ', 'BLZ', '84', 'Belmopan ', 'Belize', '1');
INSERT INTO `country` VALUES ('26', 'Benin', 'BN', 'BJ', 'BEN', '204', 'Porto-Novo  ', 'Benin', '1');
INSERT INTO `country` VALUES ('27', 'Bermuda', 'BD', 'BM', 'BMU', '60', 'Hamilton ', 'Bermuda', '1');
INSERT INTO `country` VALUES ('28', 'Bhutan', 'BT', 'BT', 'BTN', '64', 'Thimphu ', 'Bhutan', '1');
INSERT INTO `country` VALUES ('29', 'Bolivia', 'BL', 'BO', 'BOL', '68', 'La Paz /Sucre ', 'Bolivia', '1');
INSERT INTO `country` VALUES ('30', 'Bosnia and Herzegovina', 'BK', 'BA', 'BIH', '70', 'Sarajevo ', 'Bosnia and Herzegovina', '1');
INSERT INTO `country` VALUES ('31', 'Botswana', 'BC', 'BW', 'BWA', '72', 'Gaborone ', 'Botswana', '1');
INSERT INTO `country` VALUES ('32', 'Bouvet Island', 'BV', 'BV', 'BVT', '74', '', 'Bouvet Island', '1');
INSERT INTO `country` VALUES ('33', 'Brazil', 'BR', 'BR', 'BRA', '76', 'Brasilia ', 'Brazil', '1');
INSERT INTO `country` VALUES ('34', 'British Indian Ocean Territory', 'IO', 'IO', 'IOT', '86', '', 'The British Indian Ocean Territory', '1');
INSERT INTO `country` VALUES ('35', 'British Virgin Islands', 'VI', 'VG', 'VGB', '92', 'Road Town ', 'The British Virgin Islands', '1');
INSERT INTO `country` VALUES ('36', 'Brunei Darussalam', 'BX', 'BN', 'BRN', '96', '', 'Brunei', '1');
INSERT INTO `country` VALUES ('37', 'Bulgaria', 'BU', 'BG', 'BGR', '100', 'Sofia ', 'Bulgaria', '1');
INSERT INTO `country` VALUES ('38', 'Burkina Faso', 'UV', 'BF', 'BFA', '854', 'Ouagadougou ', 'Burkina Faso', '1');
INSERT INTO `country` VALUES ('39', 'Burma', 'BM', 'MM', 'MMR', '104', 'Rangoon ', 'Burma', '1');
INSERT INTO `country` VALUES ('40', 'Burundi', 'BY', 'BI', 'BDI', '108', 'Bujumbura ', 'Burundi', '1');
INSERT INTO `country` VALUES ('41', 'Cambodia', 'CB', 'KH', 'KHM', '116', 'Phnom Penh ', 'Cambodia', '1');
INSERT INTO `country` VALUES ('42', 'Cameroon', 'CM', 'CM', 'CMR', '120', 'Yaounde ', 'Cameroon', '1');
INSERT INTO `country` VALUES ('43', 'Canada', 'CA', 'CA', 'CAN', '124', 'Ottawa ', 'Canada', '1');
INSERT INTO `country` VALUES ('44', 'Cape Verde', 'CV', 'CV', 'CPV', '132', 'Praia ', 'Cape Verde', '1');
INSERT INTO `country` VALUES ('45', 'Cayman Islands', 'CJ', 'KY', 'CYM', '136', 'George Town ', 'The Cayman Islands', '1');
INSERT INTO `country` VALUES ('46', 'Central African Republic', 'CT', 'CF', 'CAF', '140', 'Bangui ', 'The Central African Republic', '1');
INSERT INTO `country` VALUES ('47', 'Chad', 'CD', 'TD', 'TCD', '148', 'N\'Djamena ', 'Chad', '1');
INSERT INTO `country` VALUES ('48', 'Chile', 'CI', 'CL', 'CHL', '152', 'Santiago ', 'Chile', '1');
INSERT INTO `country` VALUES ('49', 'China', 'CH', 'CN', 'CHN', '156', 'Beijing ', 'China', '1');
INSERT INTO `country` VALUES ('50', 'Christmas Island', 'KT', 'CX', 'CXR', '162', 'The Settlement ', 'Christmas Island', '1');
INSERT INTO `country` VALUES ('51', 'Clipperton Island', 'IP', '--', '-- ', '--', '', 'Clipperton Island', '1');
INSERT INTO `country` VALUES ('52', 'Cocos (Keeling) Islands', 'CK', 'CC', 'CCK', '166', 'West Island ', 'The Cocos Islands', '1');
INSERT INTO `country` VALUES ('53', 'Colombia', 'CO', 'CO', 'COL', '170', 'Bogota ', 'Colombia', '1');
INSERT INTO `country` VALUES ('54', 'Comoros', 'CN', 'KM', 'COM', '174', 'Moroni ', 'Comoros', '1');
INSERT INTO `country` VALUES ('55', 'Congo, Democratic Republic of the', 'CG', 'CD', 'COD', '180', 'Kinshasa ', 'Democratic Republic of the Congo', '1');
INSERT INTO `country` VALUES ('56', 'Congo, Republic of the', 'CF', 'CG', 'COG', '178', 'Brazzaville ', 'Republic of the Congo', '1');
INSERT INTO `country` VALUES ('57', 'Cook Islands', 'CW', 'CK', 'COK', '184', 'Avarua ', 'The Cook Islands', '1');
INSERT INTO `country` VALUES ('58', 'Coral Sea Islands', 'CR', '--', '-- ', '--', '', 'The Coral Sea Islands', '1');
INSERT INTO `country` VALUES ('59', 'Costa Rica', 'CS', 'CR', 'CRI', '188', 'San Jose ', 'Costa Rica', '1');
INSERT INTO `country` VALUES ('60', 'Cote d\'Ivoire', 'IV', 'CI', 'CIV', '384', 'Yamoussoukro', 'Cote d\'Ivoire', '1');
INSERT INTO `country` VALUES ('61', 'Croatia', 'HR', 'HR', 'HRV', '191', 'Zagreb ', 'Croatia', '1');
INSERT INTO `country` VALUES ('62', 'Cuba', 'CU', 'CU', 'CUB', '192', 'Havana ', 'Cuba', '1');
INSERT INTO `country` VALUES ('63', 'Cyprus', 'CY', 'CY', 'CYP', '196', 'Nicosia ', 'Cyprus', '1');
INSERT INTO `country` VALUES ('64', 'Czech Republic', 'EZ', 'CZ', 'CZE', '203', 'Prague ', 'The Czech Republic', '1');
INSERT INTO `country` VALUES ('65', 'Denmark', 'DA', 'DK', 'DNK', '208', 'Copenhagen ', 'Denmark', '1');
INSERT INTO `country` VALUES ('66', 'Djibouti', 'DJ', 'DJ', 'DJI', '262', 'Djibouti ', 'Djibouti', '1');
INSERT INTO `country` VALUES ('67', 'Dominica', 'DO', 'DM', 'DMA', '212', 'Roseau ', 'Dominica', '1');
INSERT INTO `country` VALUES ('68', 'Dominican Republic', 'DR', 'DO', 'DOM', '214', 'Santo Domingo ', 'The Dominican Republic', '1');
INSERT INTO `country` VALUES ('69', 'East Timor', 'TT', 'TL', 'TLS', '626', '', 'East Timor', '1');
INSERT INTO `country` VALUES ('70', 'Ecuador', 'EC', 'EC', 'ECU', '218', 'Quito ', 'Ecuador', '1');
INSERT INTO `country` VALUES ('71', 'Egypt', 'EG', 'EG', 'EGY', '818', 'Cairo ', 'Egypt', '1');
INSERT INTO `country` VALUES ('72', 'El Salvador', 'ES', 'SV', 'SLV', '222', 'San Salvador ', 'El Salvador', '1');
INSERT INTO `country` VALUES ('73', 'Equatorial Guinea', 'EK', 'GQ', 'GNQ', '226', 'Malabo ', 'Equatorial Guinea', '1');
INSERT INTO `country` VALUES ('74', 'Eritrea', 'ER', 'ER', 'ERI', '232', 'Asmara ', 'Eritrea', '1');
INSERT INTO `country` VALUES ('75', 'Estonia', 'EN', 'EE', 'EST', '233', 'Tallinn ', 'Estonia', '1');
INSERT INTO `country` VALUES ('76', 'Ethiopia', 'ET', 'ET', 'ETH', '231', 'Addis Ababa ', 'Ethiopia', '1');
INSERT INTO `country` VALUES ('77', 'Europa Island', 'EU', '--', '-- ', '--', '', 'Europa Island', '1');
INSERT INTO `country` VALUES ('78', 'Falkland Islands (Islas Malvinas)', 'FK', 'FK', 'FLK', '238', 'Stanley', 'The Falkland Islands ', '1');
INSERT INTO `country` VALUES ('79', 'Faroe Islands', 'FO', 'FO', 'FRO', '234', 'Torshavn ', 'The Faroe Islands', '1');
INSERT INTO `country` VALUES ('80', 'Fiji', 'FJ', 'FJ', 'FJI', '242', 'Suva ', 'Fiji', '1');
INSERT INTO `country` VALUES ('81', 'Finland', 'FI', 'FI', 'FIN', '246', 'Helsinki ', 'Finland', '1');
INSERT INTO `country` VALUES ('82', 'France', 'FR', 'FR', 'FRA', '250', 'Paris ', 'France', '1');
INSERT INTO `country` VALUES ('83', 'France, Metropolitan', '--', '--', '-- ', '--', '', 'Metropolitan France', '1');
INSERT INTO `country` VALUES ('84', 'French Guiana', 'FG', 'GF', 'GUF', '254', 'Cayenne ', 'French Guiana', '1');
INSERT INTO `country` VALUES ('85', 'French Polynesia', 'FP', 'PF', 'PYF', '258', 'Papeete ', 'French Polynesia', '1');
INSERT INTO `country` VALUES ('86', 'French Southern and Antarctic Lands', 'FS', 'TF', 'ATF', '260', '', 'The French Southern and Antarctic Lands', '1');
INSERT INTO `country` VALUES ('87', 'Gabon', 'GB', 'GA', 'GAB', '266', 'Libreville ', 'Gabon', '1');
INSERT INTO `country` VALUES ('88', 'The Gambia', 'GA', 'GM', 'GMB', '270', 'Banjul ', 'The Gambia', '1');
INSERT INTO `country` VALUES ('89', 'Gaza Strip', 'GZ', '--', '-- ', '--', '', 'The Gaza Strip', '1');
INSERT INTO `country` VALUES ('90', 'Georgia', 'GG', 'GE', 'GEO', '268', 'T\'bilisi ', 'Georgia', '1');
INSERT INTO `country` VALUES ('91', 'Germany', 'GM', 'DE', 'DEU', '276', 'Berlin ', 'Deutschland', '1');
INSERT INTO `country` VALUES ('92', 'Ghana', 'GH', 'GH', 'GHA', '288', 'Accra ', 'Ghana', '1');
INSERT INTO `country` VALUES ('93', 'Gibraltar', 'GI', 'GI', 'GIB', '292', 'Gibraltar ', 'Gibraltar', '1');
INSERT INTO `country` VALUES ('94', 'Glorioso Islands', 'GO', '--', '-- ', '--', '', 'The Glorioso Islands', '1');
INSERT INTO `country` VALUES ('95', 'Greece', 'GR', 'GR', 'GRC', '300', 'Athens ', 'Greece', '1');
INSERT INTO `country` VALUES ('96', 'Greenland', 'GL', 'GL', 'GRL', '304', 'Nuuk ', 'Greenland', '1');
INSERT INTO `country` VALUES ('97', 'Grenada', 'GJ', 'GD', 'GRD', '308', 'Saint George\'s ', 'Grenada', '1');
INSERT INTO `country` VALUES ('98', 'Guadeloupe', 'GP', 'GP', 'GLP', '312', 'Basse-Terre ', 'Guadeloupe', '1');
INSERT INTO `country` VALUES ('99', 'Guam', 'GQ', 'GU', 'GUM', '316', 'Hagatna', 'Guam', '1');
INSERT INTO `country` VALUES ('100', 'Guatemala', 'GT', 'GT', 'GTM', '320', 'Guatemala ', 'Guatemala', '1');
INSERT INTO `country` VALUES ('101', 'Guernsey', 'GK', '--', '-- ', '--', 'Saint Peter Port ', 'Guernsey', '1');
INSERT INTO `country` VALUES ('102', 'Guinea', 'GV', 'GN', 'GIN', '324', 'Conakry ', 'Guinea', '1');
INSERT INTO `country` VALUES ('103', 'Guinea-Bissau', 'PU', 'GW', 'GNB', '624', 'Bissau ', 'Guinea-Bissau', '1');
INSERT INTO `country` VALUES ('104', 'Guyana', 'GY', 'GY', 'GUY', '328', 'Georgetown ', 'Guyana', '1');
INSERT INTO `country` VALUES ('105', 'Haiti', 'HA', 'HT', 'HTI', '332', 'Port-au-Prince ', 'Haiti', '1');
INSERT INTO `country` VALUES ('106', 'Heard Island and McDonald Islands', 'HM', 'HM', 'HMD', '334', '', 'The Heard Island and McDonald Islands', '1');
INSERT INTO `country` VALUES ('107', 'Holy See (Vatican City)', 'VT', 'VA', 'VAT', '336', 'Vatican City ', 'The Vatican City', '1');
INSERT INTO `country` VALUES ('108', 'Honduras', 'HO', 'HN', 'HND', '340', 'Tegucigalpa ', 'Honduras', '1');
INSERT INTO `country` VALUES ('109', 'Hong Kong (SAR)', 'HK', 'HK', 'HKG', '344', '', 'Xianggang ', '1');
INSERT INTO `country` VALUES ('110', 'Howland Island', 'HQ', '--', '-- ', '--', '', 'Howland Island', '1');
INSERT INTO `country` VALUES ('111', 'Hungary', 'HU', 'HU', 'HUN', '348', 'Budapest ', 'Hungary', '1');
INSERT INTO `country` VALUES ('112', 'Iceland', 'IC', 'IS', 'ISL', '352', 'Reykjavik ', 'Iceland', '1');
INSERT INTO `country` VALUES ('113', 'India', 'IN', 'IN', 'IND', '356', 'New Delhi ', 'India', '1');
INSERT INTO `country` VALUES ('114', 'Indonesia', 'ID', 'ID', 'IDN', '360', 'Jakarta ', 'Indonesia', '1');
INSERT INTO `country` VALUES ('115', 'Iran', 'IR', 'IR', 'IRN', '364', 'Tehran ', 'Iran', '1');
INSERT INTO `country` VALUES ('116', 'Iraq', 'IZ', 'IQ', 'IRQ', '368', 'Baghdad ', 'Iraq', '1');
INSERT INTO `country` VALUES ('117', 'Ireland', 'EI', 'IE', 'IRL', '372', 'Dublin ', 'Ireland', '1');
INSERT INTO `country` VALUES ('118', 'Israel', 'IS', 'IL', 'ISR', '376', 'Jerusalem', 'Israel', '1');
INSERT INTO `country` VALUES ('119', 'Italy', 'IT', 'IT', 'ITA', '380', 'Rome ', 'Italia ', '1');
INSERT INTO `country` VALUES ('120', 'Jamaica', 'JM', 'JM', 'JAM', '388', 'Kingston ', 'Jamaica', '1');
INSERT INTO `country` VALUES ('121', 'Jan Mayen', 'JN', '--', '-- ', '--', '', 'Jan Mayen', '1');
INSERT INTO `country` VALUES ('122', 'Japan', 'JA', 'JP', 'JPN', '392', 'Tokyo ', 'Japan', '1');
INSERT INTO `country` VALUES ('123', 'Jarvis Island', 'DQ', '--', '-- ', '--', '', 'Jarvis Island', '1');
INSERT INTO `country` VALUES ('124', 'Jersey', 'JE', '--', '-- ', '--', 'Saint Helier ', 'Jersey', '1');
INSERT INTO `country` VALUES ('125', 'Johnston Atoll', 'JQ', '--', '-- ', '--', '', 'Johnston Atoll', '1');
INSERT INTO `country` VALUES ('126', 'Jordan', 'JO', 'JO', 'JOR', '400', 'Amman ', 'Jordan', '1');
INSERT INTO `country` VALUES ('127', 'Juan de Nova Island', 'JU', '--', '-- ', '--', '', 'Juan de Nova Island', '1');
INSERT INTO `country` VALUES ('128', 'Kazakhstan', 'KZ', 'KZ', 'KAZ', '398', 'Astana ', 'Kazakhstan', '1');
INSERT INTO `country` VALUES ('129', 'Kenya', 'KE', 'KE', 'KEN', '404', 'Nairobi ', 'Kenya', '1');
INSERT INTO `country` VALUES ('130', 'Kingman Reef', 'KQ', '--', '-- ', '--', '', 'Kingman Reef', '1');
INSERT INTO `country` VALUES ('131', 'Kiribati', 'KR', 'KI', 'KIR', '296', 'Tarawa ', 'Kiribati', '1');
INSERT INTO `country` VALUES ('132', 'Korea, North', 'KN', 'KP', 'PRK', '408', 'P\'yongyang ', 'North Korea', '1');
INSERT INTO `country` VALUES ('133', 'Korea, South', 'KS', 'KR', 'KOR', '410', 'Seoul ', 'South Korea', '1');
INSERT INTO `country` VALUES ('134', 'Kuwait', 'KU', 'KW', 'KWT', '414', 'Kuwait ', 'Al Kuwayt', '1');
INSERT INTO `country` VALUES ('135', 'Kyrgyzstan', 'KG', 'KG', 'KGZ', '417', 'Bishkek ', 'Kyrgyzstan', '1');
INSERT INTO `country` VALUES ('136', 'Laos', 'LA', 'LA', 'LAO', '418', 'Vientiane ', 'Laos', '1');
INSERT INTO `country` VALUES ('137', 'Latvia', 'LG', 'LV', 'LVA', '428', 'Riga ', 'Latvia', '1');
INSERT INTO `country` VALUES ('138', 'Lebanon', 'LE', 'LB', 'LBN', '422', 'Beirut ', 'Lebanon', '1');
INSERT INTO `country` VALUES ('139', 'Lesotho', 'LT', 'LS', 'LSO', '426', 'Maseru ', 'Lesotho', '1');
INSERT INTO `country` VALUES ('140', 'Liberia', 'LI', 'LR', 'LBR', '430', 'Monrovia ', 'Liberia', '1');
INSERT INTO `country` VALUES ('141', 'Libya', 'LY', 'LY', 'LBY', '434', 'Tripoli ', 'Libya', '1');
INSERT INTO `country` VALUES ('142', 'Liechtenstein', 'LS', 'LI', 'LIE', '438', 'Vaduz ', 'Liechtenstein', '1');
INSERT INTO `country` VALUES ('143', 'Lithuania', 'LH', 'LT', 'LTU', '440', 'Vilnius ', 'Lithuania', '1');
INSERT INTO `country` VALUES ('144', 'Luxembourg', 'LU', 'LU', 'LUX', '442', 'Luxembourg ', 'Luxembourg', '1');
INSERT INTO `country` VALUES ('145', 'Macao', 'MC', 'MO', 'MAC', '446', '', 'Macao', '1');
INSERT INTO `country` VALUES ('146', 'Macedonia, The Former Yugoslav Republic of', 'MK', 'MK', 'MKD', '807', 'Skopje ', 'Makedonija', '1');
INSERT INTO `country` VALUES ('147', 'Madagascar', 'MA', 'MG', 'MDG', '450', 'Antananarivo ', 'Madagascar', '1');
INSERT INTO `country` VALUES ('148', 'Malawi', 'MI', 'MW', 'MWI', '454', 'Lilongwe ', 'Malawi', '1');
INSERT INTO `country` VALUES ('149', 'Malaysia', 'MY', 'MY', 'MYS', '458', 'Kuala Lumpur ', 'Malaysia', '1');
INSERT INTO `country` VALUES ('150', 'Maldives', 'MV', 'MV', 'MDV', '462', 'Male ', 'Maldives', '1');
INSERT INTO `country` VALUES ('151', 'Mali', 'ML', 'ML', 'MLI', '466', 'Bamako ', 'Mali', '1');
INSERT INTO `country` VALUES ('152', 'Malta', 'MT', 'MT', 'MLT', '470', 'Valletta ', 'Malta', '1');
INSERT INTO `country` VALUES ('153', 'Man, Isle of', 'IM', '--', '-- ', '--', 'Douglas ', 'The Isle of Man', '1');
INSERT INTO `country` VALUES ('154', 'Marshall Islands', 'RM', 'MH', 'MHL', '584', 'Majuro ', 'The Marshall Islands', '1');
INSERT INTO `country` VALUES ('155', 'Martinique', 'MB', 'MQ', 'MTQ', '474', 'Fort-de-France ', 'Martinique', '1');
INSERT INTO `country` VALUES ('156', 'Mauritania', 'MR', 'MR', 'MRT', '478', 'Nouakchott ', 'Mauritania', '1');
INSERT INTO `country` VALUES ('157', 'Mauritius', 'MP', 'MU', 'MUS', '480', 'Port Louis ', 'Mauritius', '1');
INSERT INTO `country` VALUES ('158', 'Mayotte', 'MF', 'YT', 'MYT', '175', 'Mamoutzou ', 'Mayotte', '1');
INSERT INTO `country` VALUES ('159', 'Mexico', 'MX', 'MX', 'MEX', '484', 'Mexico ', 'Mexico', '1');
INSERT INTO `country` VALUES ('160', 'Micronesia, Federated States of', 'FM', 'FM', 'FSM', '583', 'Palikir ', 'The Federated States of Micronesia', '1');
INSERT INTO `country` VALUES ('161', 'Midway Islands', 'MQ', '--', '-- ', '--', '', 'The Midway Islands', '1');
INSERT INTO `country` VALUES ('162', 'Miscellaneous (French)', '--', '--', '-- ', '--', '', 'Miscellaneous (French)', '1');
INSERT INTO `country` VALUES ('163', 'Moldova', 'MD', 'MD', 'MDA', '498', 'Chisinau ', 'Moldova', '1');
INSERT INTO `country` VALUES ('164', 'Monaco', 'MN', 'MC', 'MCO', '492', 'Monaco ', 'Monaco', '1');
INSERT INTO `country` VALUES ('165', 'Mongolia', 'MG', 'MN', 'MNG', '496', 'Ulaanbaatar ', 'Mongolia', '1');
INSERT INTO `country` VALUES ('166', 'Montenegro', '--', '--', '-- ', '--', '', 'Montenegro', '1');
INSERT INTO `country` VALUES ('167', 'Montserrat', 'MH', 'MS', 'MSR', '500', 'Plymouth', 'Montserrat', '1');
INSERT INTO `country` VALUES ('168', 'Morocco', 'MO', 'MA', 'MAR', '504', 'Rabat ', 'Morocco', '1');
INSERT INTO `country` VALUES ('169', 'Mozambique', 'MZ', 'MZ', 'MOZ', '508', 'Maputo ', 'Mozambique', '1');
INSERT INTO `country` VALUES ('170', 'Myanmar', '--', '--', '-- ', '--', '', 'Myanmar', '1');
INSERT INTO `country` VALUES ('171', 'Namibia', 'WA', 'NA', 'NAM', '516', 'Windhoek ', 'Namibia', '1');
INSERT INTO `country` VALUES ('172', 'Nauru', 'NR', 'NR', 'NRU', '520', '', 'Nauru', '1');
INSERT INTO `country` VALUES ('173', 'Navassa Island', 'BQ', '--', '-- ', '--', '', 'Navassa Island', '1');
INSERT INTO `country` VALUES ('174', 'Nepal', 'NP', 'NP', 'NPL', '524', 'Kathmandu ', 'Nepal', '1');
INSERT INTO `country` VALUES ('175', 'Netherlands', 'NL', 'NL', 'NLD', '528', 'Amsterdam ', 'The Netherlands', '1');
INSERT INTO `country` VALUES ('176', 'Netherlands Antilles', 'NT', 'AN', 'ANT', '530', 'Willemstad ', 'The Netherlands Antilles', '1');
INSERT INTO `country` VALUES ('177', 'New Caledonia', 'NC', 'NC', 'NCL', '540', 'Noumea ', 'New Caledonia', '1');
INSERT INTO `country` VALUES ('178', 'New Zealand', 'NZ', 'NZ', 'NZL', '554', 'Wellington ', 'New Zealand', '1');
INSERT INTO `country` VALUES ('179', 'Nicaragua', 'NU', 'NI', 'NIC', '558', 'Managua ', 'Nicaragua', '1');
INSERT INTO `country` VALUES ('180', 'Niger', 'NG', 'NE', 'NER', '562', 'Niamey ', 'Niger', '1');
INSERT INTO `country` VALUES ('181', 'Nigeria', 'NI', 'NG', 'NGA', '566', 'Abuja', 'Nigeria', '1');
INSERT INTO `country` VALUES ('182', 'Niue', 'NE', 'NU', 'NIU', '570', 'Alofi ', 'Niue', '1');
INSERT INTO `country` VALUES ('183', 'Norfolk Island', 'NF', 'NF', 'NFK', '574', 'Kingston ', 'Norfolk Island', '1');
INSERT INTO `country` VALUES ('184', 'Northern Mariana Islands', 'CQ', 'MP', 'MNP', '580', 'Saipan ', 'The Northern Mariana Islands', '1');
INSERT INTO `country` VALUES ('185', 'Norway', 'NO', 'NO', 'NOR', '578', 'Oslo ', 'Norway', '1');
INSERT INTO `country` VALUES ('186', 'Oman', 'MU', 'OM', 'OMN', '512', 'Muscat ', 'Oman', '1');
INSERT INTO `country` VALUES ('187', 'Pakistan', 'PK', 'PK', 'PAK', '586', 'Islamabad ', 'Pakistan', '1');
INSERT INTO `country` VALUES ('188', 'Palau', 'PS', 'PW', 'PLW', '585', 'Koror ', 'Palau', '1');
INSERT INTO `country` VALUES ('189', 'Palmyra Atoll', 'LQ', '--', '-- ', '--', '', 'Palmyra Atoll', '1');
INSERT INTO `country` VALUES ('190', 'Panama', 'PM', 'PA', 'PAN', '591', 'Panama ', 'Panama', '1');
INSERT INTO `country` VALUES ('191', 'Papua New Guinea', 'PP', 'PG', 'PNG', '598', 'Port Moresby ', 'Papua New Guinea', '1');
INSERT INTO `country` VALUES ('192', 'Paracel Islands', 'PF', '--', '-- ', '--', '', 'The Paracel Islands', '1');
INSERT INTO `country` VALUES ('193', 'Paraguay', 'PA', 'PY', 'PRY', '600', 'Asuncion ', 'Paraguay', '1');
INSERT INTO `country` VALUES ('194', 'Peru', 'PE', 'PE', 'PER', '604', 'Lima ', 'Peru', '1');
INSERT INTO `country` VALUES ('195', 'Philippines', 'RP', 'PH', 'PHL', '608', 'Manila ', 'The Philippines', '1');
INSERT INTO `country` VALUES ('196', 'Pitcairn Islands', 'PC', 'PN', 'PCN', '612', 'Adamstown ', 'The Pitcairn Islands', '1');
INSERT INTO `country` VALUES ('197', 'Poland', 'PL', 'PL', 'POL', '616', 'Warsaw ', 'Poland', '1');
INSERT INTO `country` VALUES ('198', 'Portugal', 'PO', 'PT', 'PRT', '620', 'Lisbon ', 'Portugal', '1');
INSERT INTO `country` VALUES ('199', 'Puerto Rico', 'RQ', 'PR', 'PRI', '630', 'San Juan ', 'Puerto Rico', '1');
INSERT INTO `country` VALUES ('200', 'Qatar', 'QA', 'QA', 'QAT', '634', 'Doha ', 'Qatar', '1');
INSERT INTO `country` VALUES ('201', 'Reunion', 'RE', 'RE', 'REU', '638', 'Saint-Denis', 'Reunion', '1');
INSERT INTO `country` VALUES ('202', 'Romania', 'RO', 'RO', 'ROU', '642', 'Bucharest ', 'Romania', '1');
INSERT INTO `country` VALUES ('203', 'Russia', 'RS', 'RU', 'RUS', '643', 'Moscow ', 'Russia', '1');
INSERT INTO `country` VALUES ('204', 'Rwanda', 'RW', 'RW', 'RWA', '646', 'Kigali ', 'Rwanda', '1');
INSERT INTO `country` VALUES ('205', 'Saint Helena', 'SH', 'SH', 'SHN', '654', 'Jamestown ', 'Saint Helena', '1');
INSERT INTO `country` VALUES ('206', 'Saint Kitts and Nevis', 'SC', 'KN', 'KNA', '659', 'Basseterre ', 'Saint Kitts and Nevis', '1');
INSERT INTO `country` VALUES ('207', 'Saint Lucia', 'ST', 'LC', 'LCA', '662', 'Castries ', 'Saint Lucia', '1');
INSERT INTO `country` VALUES ('208', 'Saint Pierre and Miquelon', 'SB', 'PM', 'SPM', '666', 'Saint-Pierre ', 'Saint Pierre and Miquelon', '1');
INSERT INTO `country` VALUES ('209', 'Saint Vincent and the Grenadines', 'VC', 'VC', 'VCT', '670', 'Kingstown ', 'Saint Vincent and the Grenadines', '1');
INSERT INTO `country` VALUES ('210', 'Samoa', 'WS', 'WS', 'WSM', '882', 'Apia ', 'Samoa', '1');
INSERT INTO `country` VALUES ('211', 'San Marino', 'SM', 'SM', 'SMR', '674', 'San Marino ', 'San Marino', '1');
INSERT INTO `country` VALUES ('212', 'Sao Tome and Principe', 'TP', 'ST', 'STP', '678', 'Sao Tome', 'Sao Tome and Principe', '1');
INSERT INTO `country` VALUES ('213', 'Saudi Arabia', 'SA', 'SA', 'SAU', '682', 'Riyadh ', 'Saudi Arabia', '1');
INSERT INTO `country` VALUES ('214', 'Senegal', 'SG', 'SN', 'SEN', '686', 'Dakar ', 'Senegal', '1');
INSERT INTO `country` VALUES ('215', 'Serbia', '--', '--', '-- ', '--', '', 'Serbia', '1');
INSERT INTO `country` VALUES ('216', 'Serbia and Montenegro', '--', '--', '-- ', '--', '', 'Serbia and Montenegro', '1');
INSERT INTO `country` VALUES ('217', 'Seychelles', 'SE', 'SC', 'SYC', '690', 'Victoria ', 'Seychelles', '1');
INSERT INTO `country` VALUES ('218', 'Sierra Leone', 'SL', 'SL', 'SLE', '694', 'Freetown ', 'Sierra Leone', '1');
INSERT INTO `country` VALUES ('219', 'Singapore', 'SN', 'SG', 'SGP', '702', 'Singapore ', 'Singapore', '1');
INSERT INTO `country` VALUES ('220', 'Slovakia', 'LO', 'SK', 'SVK', '703', 'Bratislava ', 'Slovakia', '1');
INSERT INTO `country` VALUES ('221', 'Slovenia', 'SI', 'SI', 'SVN', '705', 'Ljubljana ', 'Slovenia', '1');
INSERT INTO `country` VALUES ('222', 'Solomon Islands', 'BP', 'SB', 'SLB', '90', 'Honiara ', 'The Solomon Islands', '1');
INSERT INTO `country` VALUES ('223', 'Somalia', 'SO', 'SO', 'SOM', '706', 'Mogadishu ', 'Somalia', '1');
INSERT INTO `country` VALUES ('224', 'South Africa', 'SF', 'ZA', 'ZAF', '710', 'Pretoria', 'South Africa', '1');
INSERT INTO `country` VALUES ('225', 'South Georgia and the South Sandwich Islands', 'SX', 'GS', 'SGS', '239', '', 'The South Georgia and the South Sandwich Islands', '1');
INSERT INTO `country` VALUES ('226', 'Spain', 'SP', 'ES', 'ESP', '724', 'Madrid ', 'Spain', '1');
INSERT INTO `country` VALUES ('227', 'Spratly Islands', 'PG', '--', '-- ', '--', '', 'The Spratly Islands', '1');
INSERT INTO `country` VALUES ('228', 'Sri Lanka', 'CE', 'LK', 'LKA', '144', 'Colombo', 'Sri Lanka', '1');
INSERT INTO `country` VALUES ('229', 'Sudan', 'SU', 'SD', 'SDN', '736', 'Khartoum ', 'Sudan', '1');
INSERT INTO `country` VALUES ('230', 'Suriname', 'NS', 'SR', 'SUR', '740', 'Paramaribo ', 'Suriname', '1');
INSERT INTO `country` VALUES ('231', 'Svalbard', 'SV', 'SJ', 'SJM', '744', 'Longyearbyen ', 'Svalbard', '1');
INSERT INTO `country` VALUES ('232', 'Swaziland', 'WZ', 'SZ', 'SWZ', '748', 'Mbabane ', 'Swaziland', '1');
INSERT INTO `country` VALUES ('233', 'Sweden', 'SW', 'SE', 'SWE', '752', 'Stockholm ', 'Sweden', '1');
INSERT INTO `country` VALUES ('234', 'Switzerland', 'SZ', 'CH', 'CHE', '756', 'Bern ', 'Switzerland', '1');
INSERT INTO `country` VALUES ('235', 'Syria', 'SY', 'SY', 'SYR', '760', 'Damascus ', 'Syria', '1');
INSERT INTO `country` VALUES ('236', 'Taiwan', 'TW', 'TW', 'TWN', '158', 'Taipei ', 'Taiwan', '1');
INSERT INTO `country` VALUES ('237', 'Tajikistan', 'TI', 'TJ', 'TJK', '762', 'Dushanbe ', 'Tajikistan', '1');
INSERT INTO `country` VALUES ('238', 'Tanzania', 'TZ', 'TZ', 'TZA', '834', 'Dar es Salaam', 'Tanzania', '1');
INSERT INTO `country` VALUES ('239', 'Thailand', 'TH', 'TH', 'THA', '764', 'Bangkok ', 'Thailand', '1');
INSERT INTO `country` VALUES ('240', 'Togo', 'TO', 'TG', 'TGO', '768', 'Lome ', 'Togo', '1');
INSERT INTO `country` VALUES ('241', 'Tokelau', 'TL', 'TK', 'TKL', '772', '', 'Tokelau', '1');
INSERT INTO `country` VALUES ('242', 'Tonga', 'TN', 'TO', 'TON', '776', 'Nuku\'alofa ', 'Tonga', '1');
INSERT INTO `country` VALUES ('243', 'Trinidad and Tobago', 'TD', 'TT', 'TTO', '780', 'Port-of-Spain ', 'Trinidad and Tobago', '1');
INSERT INTO `country` VALUES ('244', 'Tromelin Island', 'TE', '--', '-- ', '--', '', 'Tromelin Island', '1');
INSERT INTO `country` VALUES ('245', 'Tunisia', 'TS', 'TN', 'TUN', '788', 'Tunis ', 'Tunisia', '1');
INSERT INTO `country` VALUES ('246', 'Turkey', 'TU', 'TR', 'TUR', '792', 'Ankara ', 'Turkey', '1');
INSERT INTO `country` VALUES ('247', 'Turkmenistan', 'TX', 'TM', 'TKM', '795', 'Ashgabat ', 'Turkmenistan', '1');
INSERT INTO `country` VALUES ('248', 'Turks and Caicos Islands', 'TK', 'TC', 'TCA', '796', 'Cockburn Town ', 'The Turks and Caicos Islands', '1');
INSERT INTO `country` VALUES ('249', 'Tuvalu', 'TV', 'TV', 'TUV', '798', 'Funafuti ', 'Tuvalu', '1');
INSERT INTO `country` VALUES ('250', 'Uganda', 'UG', 'UG', 'UGA', '800', 'Kampala ', 'Uganda', '1');
INSERT INTO `country` VALUES ('251', 'Ukraine', 'UP', 'UA', 'UKR', '804', 'Kiev ', 'The Ukraine', '1');
INSERT INTO `country` VALUES ('252', 'United Arab Emirates', 'AE', 'AE', 'ARE', '784', 'Abu Dhabi ', 'The United Arab Emirates', '1');
INSERT INTO `country` VALUES ('253', 'United Kingdom', 'UK', 'GB', 'GBR', '826', 'London ', 'The United Kingdom', '1');
INSERT INTO `country` VALUES ('254', 'United States', 'US', 'US', 'USA', '840', 'Washington, DC ', 'The United States', '1');
INSERT INTO `country` VALUES ('255', 'United States Minor Outlying Islands', '--', 'UM', 'UMI', '581', '', 'The United States Minor Outlying Islands', '1');
INSERT INTO `country` VALUES ('256', 'Uruguay', 'UY', 'UY', 'URY', '858', 'Montevideo ', 'Uruguay', '1');
INSERT INTO `country` VALUES ('257', 'Uzbekistan', 'UZ', 'UZ', 'UZB', '860', 'Tashkent', 'Uzbekistan', '1');
INSERT INTO `country` VALUES ('258', 'Vanuatu', 'NH', 'VU', 'VUT', '548', 'Port-Vila ', 'Vanuatu', '1');
INSERT INTO `country` VALUES ('259', 'Venezuela', 'VE', 'VE', 'VEN', '862', 'Caracas ', 'Venezuela', '1');
INSERT INTO `country` VALUES ('260', 'Vietnam', 'VM', 'VN', 'VNM', '704', 'Hanoi ', 'Vietnam', '1');
INSERT INTO `country` VALUES ('261', 'Virgin Islands', 'VQ', 'VI', 'VIR', '850', 'Charlotte Amalie ', 'The Virgin Islands', '1');
INSERT INTO `country` VALUES ('262', 'Virgin Islands (UK)', '--', '--', '-- ', '--', '', 'Virgin Islands (UK)', '1');
INSERT INTO `country` VALUES ('263', 'Virgin Islands (US)', '--', '--', '-- ', '--', '', 'Virgin Islands (US)', '1');
INSERT INTO `country` VALUES ('264', 'Wake Island', 'WQ', '--', '-- ', '--', '', 'Wake Island', '1');
INSERT INTO `country` VALUES ('265', 'Wallis and Futuna', 'WF', 'WF', 'WLF', '876', 'Mata-Utu', 'Wallis and Futuna', '1');
INSERT INTO `country` VALUES ('266', 'West Bank', 'WE', '--', '-- ', '--', '', 'The West Bank', '1');
INSERT INTO `country` VALUES ('267', 'Western Sahara', 'WI', 'EH', 'ESH', '732', '', 'Western Sahara', '1');
INSERT INTO `country` VALUES ('268', 'Western Samoa', '--', '--', '-- ', '--', '', 'Western Samoa', '1');
INSERT INTO `country` VALUES ('269', 'World', '--', '--', '-- ', '--', '', 'The World', '1');
INSERT INTO `country` VALUES ('270', 'Yemen', 'YM', 'YE', 'YEM', '887', 'Sanaa ', 'Yemen', '1');
INSERT INTO `country` VALUES ('271', 'Yugoslavia', 'YI', 'YU', 'YUG', '891', 'Belgrade ', 'Yugoslavia', '1');
INSERT INTO `country` VALUES ('272', 'Zaire', '--', '--', '-- ', '--', '', 'Zaire', '1');
INSERT INTO `country` VALUES ('273', 'Zambia', 'ZA', 'ZM', 'ZWB', '894', 'Lusaka ', 'Zambia', '1');
INSERT INTO `country` VALUES ('274', 'Zimbabwe', 'ZI', 'ZW', 'ZWE', '716', 'Harare ', 'Zimbabwe', '1');
INSERT INTO `country` VALUES ('275', 'Palestinian Territory', '--', 'PS', 'PSE', '275', '', 'Palestine', '1');

-- ----------------------------
-- Table structure for event
-- ----------------------------
DROP TABLE IF EXISTS `event`;
CREATE TABLE `event` (
  `id` varchar(10) NOT NULL,
  `sport` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `start` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Id` (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of event
-- ----------------------------

-- ----------------------------
-- Table structure for general
-- ----------------------------
DROP TABLE IF EXISTS `general`;
CREATE TABLE `general` (
  `gen_id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) NOT NULL,
  `ads_image` varchar(255) NOT NULL,
  `ads_url` varchar(255) NOT NULL,
  `facebook` text NOT NULL,
  `youtube` text NOT NULL,
  `twitter` text NOT NULL,
  `rss` text NOT NULL,
  `linkedin` text NOT NULL,
  `date` date NOT NULL,
  `bidprice` float NOT NULL,
  `bidcost` float NOT NULL,
  `bidtime` int(11) NOT NULL,
  `footer_text` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email1` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  PRIMARY KEY (`gen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of general
-- ----------------------------
INSERT INTO `general` VALUES ('1', '', '', '', 'https://www.facebook.com/', 'http://www.youtube.com/', 'https://www.twitter.com/', 'https://www.google.com/', '', '0000-00-00', '0', '0', '0', '', '', '', '', '');

-- ----------------------------
-- Table structure for language
-- ----------------------------
DROP TABLE IF EXISTS `language`;
CREATE TABLE `language` (
  `lang_id` int(11) NOT NULL AUTO_INCREMENT,
  `lang_name` varchar(100) NOT NULL,
  `lang_flag` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(2) NOT NULL,
  PRIMARY KEY (`lang_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of language
-- ----------------------------
INSERT INTO `language` VALUES ('1', 'English', '1559115728au.png', '2019-05-29', 'A');
INSERT INTO `language` VALUES ('2', 'Chinese', '1560236600zh_cn.svg', '2019-06-11', 'A');

-- ----------------------------
-- Table structure for league
-- ----------------------------
DROP TABLE IF EXISTS `league`;
CREATE TABLE `league` (
  `league_id` int(11) NOT NULL AUTO_INCREMENT,
  `sports` varchar(255) NOT NULL,
  `en_title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `zh_title` text CHARACTER SET utf8 NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`league_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of league
-- ----------------------------
INSERT INTO `league` VALUES ('1', 'Baseball', 'Major League Baseball', ' 美国职业棒球大联盟', '0000-00-00', '0000-00-00', '', '', '', '2019-08-06', 'A');
INSERT INTO `league` VALUES ('2', 'Baseball', 'MLB Outrights 2019', 'MLB Outrights 2019', '0000-00-00', '0000-00-00', '', '', '', '2019-08-06', 'A');
INSERT INTO `league` VALUES ('3', 'Basketball', 'NBA', 'NBA', '0000-00-00', '0000-00-00', '', '', '', '2019-08-06', 'A');
INSERT INTO `league` VALUES ('4', 'Basketball', 'FIBA World cup Men', 'FIBA世界杯男子', '0000-00-00', '0000-00-00', '', '', '', '2019-08-06', 'A');
INSERT INTO `league` VALUES ('5', 'Basketball', 'Australian NBL', '澳大利亚NBL', '0000-00-00', '0000-00-00', '', '', '', '2019-08-06', 'A');
INSERT INTO `league` VALUES ('6', 'Football', 'UEFA Champions League Qualifiers', '欧洲冠军联赛资格赛', '0000-00-00', '0000-00-00', '', '', '', '2019-08-06', 'A');
INSERT INTO `league` VALUES ('7', 'Football', 'English Premier League', '英超联赛', '0000-00-00', '0000-00-00', '', '', '', '2019-08-06', 'A');
INSERT INTO `league` VALUES ('8', 'Football', 'English Football League Cup', '英格兰足球联赛杯', '0000-00-00', '0000-00-00', '', '', '', '2019-08-06', 'A');
INSERT INTO `league` VALUES ('9', 'Cricket', 'Test Matches', '测试比赛', '0000-00-00', '0000-00-00', '', '', '', '2019-08-06', 'A');
INSERT INTO `league` VALUES ('10', 'Cricket', 'The Ashes (Series Markets)', '灰烬（系列市场）', '0000-00-00', '0000-00-00', '', '', '', '2019-08-06', 'A');
INSERT INTO `league` VALUES ('11', 'Cricket', 'T20 Blast', ' T20爆炸', '0000-00-00', '0000-00-00', '', '', '', '2019-08-06', 'A');
INSERT INTO `league` VALUES ('12', 'Tennis', 'ATP Montreal Rogers Cup 2019', 'ATP蒙特利尔罗杰斯杯2019年', '0000-00-00', '0000-00-00', '', '', '', '2019-08-06', 'A');
INSERT INTO `league` VALUES ('13', 'Tennis', 'WTA Toronto Rogers Cup 2019', 'WTA多伦多罗杰斯杯2019年', '0000-00-00', '0000-00-00', '', '', '', '2019-08-06', 'A');
INSERT INTO `league` VALUES ('14', 'Tennis', 'Australian Open 2020', '澳大利亚公开赛2020', '0000-00-00', '0000-00-00', '', '', '', '2019-08-06', 'A');
INSERT INTO `league` VALUES ('15', 'Tennis', 'French Open 2020', '法国公开赛2020', '0000-00-00', '0000-00-00', '', '', '', '2019-08-06', 'A');
INSERT INTO `league` VALUES ('16', 'Boxing', 'Boxing Matches', '拳击比赛', '0000-00-00', '0000-00-00', '', '', '', '2019-08-06', 'A');

-- ----------------------------
-- Table structure for market
-- ----------------------------
DROP TABLE IF EXISTS `market`;
CREATE TABLE `market` (
  `id` varchar(10) NOT NULL,
  `event_id` varchar(10) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `runner` varchar(255) DEFAULT NULL,
  `back` double(10,2) DEFAULT NULL,
  `lay` double(10,2) DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of market
-- ----------------------------

-- ----------------------------
-- Table structure for membership
-- ----------------------------
DROP TABLE IF EXISTS `membership`;
CREATE TABLE `membership` (
  `membership_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `escrow` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`membership_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of membership
-- ----------------------------
INSERT INTO `membership` VALUES ('1', 'Gold', '$99.00', '$100.00', '1year', '2019-05-29', 'A');

-- ----------------------------
-- Table structure for offer
-- ----------------------------
DROP TABLE IF EXISTS `offer`;
CREATE TABLE `offer` (
  `offer_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `en_title` varchar(255) NOT NULL,
  `zh_title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `en_titlee` text NOT NULL,
  `zh_titlee` text CHARACTER SET utf8 NOT NULL,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY (`offer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of offer
-- ----------------------------
INSERT INTO `offer` VALUES ('1', '1565013076354x149_Default_CashOutwithPhone.jpg', 'Cash out', '兑现', 'Don\'t miss out on Gaming offers ', '不要错过Gaming优惠', 'A');
INSERT INTO `offer` VALUES ('2', '1565013219354x149_Default_FootballPlayers.jpg', 'FIFA World cup', '世界杯', 'Catch the offer for FIFA world cup 2019', '赶上2019年FIFA世界杯的报价', 'A');
INSERT INTO `offer` VALUES ('3', '1565013387354x149_Default_TennisRacket.jpg', 'Wimbledon 2019', ' 温布尔登2019年', 'USA Wimbledon 2019. Ready to action', ' 美国温布尔登2019。准备行动', 'A');

-- ----------------------------
-- Table structure for payment
-- ----------------------------
DROP TABLE IF EXISTS `payment`;
CREATE TABLE `payment` (
  `account_name` varchar(250) NOT NULL,
  `account_number` varchar(250) NOT NULL,
  `amount` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of payment
-- ----------------------------

-- ----------------------------
-- Table structure for sports
-- ----------------------------
DROP TABLE IF EXISTS `sports`;
CREATE TABLE `sports` (
  `sports_id` int(11) NOT NULL AUTO_INCREMENT,
  `en_title` varchar(255) NOT NULL,
  `zh_title` text CHARACTER SET utf8 NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`sports_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sports
-- ----------------------------
INSERT INTO `sports` VALUES ('2', 'Baseball', '棒球', '2019-05-29', 'A');
INSERT INTO `sports` VALUES ('3', 'Basketball', '篮球', '2019-05-29', 'A');
INSERT INTO `sports` VALUES ('4', 'Football', '足球', '2019-05-29', 'A');
INSERT INTO `sports` VALUES ('5', 'Hockey', '曲棍球', '2019-05-29', 'A');
INSERT INTO `sports` VALUES ('6', 'Cricket', '蟋蟀', '2019-07-30', 'A');
INSERT INTO `sports` VALUES ('7', 'Cycling', '循环', '2019-07-30', 'A');
INSERT INTO `sports` VALUES ('8', 'Boxing', '拳击', '2019-07-30', 'A');
INSERT INTO `sports` VALUES ('9', 'Fishing', '钓鱼', '2019-07-30', 'A');
INSERT INTO `sports` VALUES ('10', 'Golf', '高尔夫球', '2019-07-30', 'A');
INSERT INTO `sports` VALUES ('11', 'Horse Racing', '赛马', '2019-07-30', 'A');
INSERT INTO `sports` VALUES ('12', 'Motor Sport', '汽车运动', '2019-07-30', 'A');
INSERT INTO `sports` VALUES ('13', 'Tennis', '网球', '2019-07-30', 'A');
INSERT INTO `sports` VALUES ('14', 'Volley Ball', '排球', '2019-07-30', 'A');
INSERT INTO `sports` VALUES ('15', 'Snooker', '阻挠', '2019-07-30', 'A');
INSERT INTO `sports` VALUES ('16', 'Esports', '电子竞技', '2019-07-30', 'A');

-- ----------------------------
-- Table structure for subadmin
-- ----------------------------
DROP TABLE IF EXISTS `subadmin`;
CREATE TABLE `subadmin` (
  `sub_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(150) NOT NULL,
  `sub_name` varchar(150) NOT NULL,
  `sub_password` varchar(250) NOT NULL,
  `sub_email` varchar(150) NOT NULL,
  `sub_logintime` datetime NOT NULL,
  `sub_created` datetime NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of subadmin
-- ----------------------------
INSERT INTO `subadmin` VALUES ('4', 'subadmin', 'subadmin name', 'subadmin', 'subadmin@gmail.com', '2019-05-28 11:48:38', '2019-05-28 11:48:38', 'A');

-- ----------------------------
-- Table structure for tbl_admin
-- ----------------------------
DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_mail` varchar(255) NOT NULL,
  `admin_profilephoto` varchar(200) NOT NULL,
  `admin_paypal` varchar(255) NOT NULL,
  `admin_facebook` varchar(255) NOT NULL,
  `admin_twitter` varchar(255) NOT NULL,
  `admin_linkedin` varchar(255) NOT NULL,
  `admin_ytube` varchar(255) NOT NULL,
  `admin_myspace` varchar(255) NOT NULL,
  `admin_paypalurl` varchar(255) NOT NULL,
  `admin_lastlogin` datetime NOT NULL,
  `admin_address` text NOT NULL,
  `admin_phone` varchar(255) NOT NULL,
  `admin_city` varchar(255) NOT NULL,
  `admin_state` varchar(255) NOT NULL,
  `admin_country` varchar(255) NOT NULL,
  `admin_zipcode` varchar(255) NOT NULL,
  `admin_logo` varchar(255) NOT NULL,
  `admin_viewcount` int(11) NOT NULL,
  `admin_ipaddr` text NOT NULL,
  `admin_bannerspeed` int(11) NOT NULL,
  `admin_noreply` varchar(255) NOT NULL,
  `admin_logintime` datetime NOT NULL,
  `admin_logouttime` datetime NOT NULL,
  `admin_googleplus` varchar(255) NOT NULL,
  `admin_instagram` varchar(255) NOT NULL,
  `admin_pinterest` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_admin
-- ----------------------------
INSERT INTO `tbl_admin` VALUES ('1', 'admin', 'admin', 'admin', 'admin@gmail.com', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '11/1089, America', '8542634215', '', '', '', '', '', '0', '', '0', '', '2019-08-14 11:32:01', '0000-00-00 00:00:00', '', '', '');

-- ----------------------------
-- Table structure for tbl_multi_lang
-- ----------------------------
DROP TABLE IF EXISTS `tbl_multi_lang`;
CREATE TABLE `tbl_multi_lang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `en_title` text CHARACTER SET utf8 NOT NULL,
  `zh_title` text CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `content_zh` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=227 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_multi_lang
-- ----------------------------
INSERT INTO `tbl_multi_lang` VALUES ('1', 'Dashboard', '仪表板', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('2', 'Admin Management', '管理员', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('3', 'Sub Admin', '子管理员', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('4', 'Sports Management', '体育管理', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('5', 'General Management', '综合管理', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('6', 'Odds Management', '赔率管理', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('7', 'Betters Management', '更好的管理', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('8', 'User Management', '用户管理', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('9', 'Membership', '籍', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('10', 'Banner Management', '横幅管理', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('11', 'Withdraw', '退出', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('12', 'Payment', '付款', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('13', 'Language', '语言', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('14', 'Content Management', '内容管理', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('15', 'Home', '家', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('16', 'About us', '关于我们', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('17', 'Contact us', '联系我们', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('18', 'Terms and Conditions', '条款和条件', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('19', 'Privacy Policy', '隐私政策', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('20', 'Contents', '内容', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('21', 'Banners', '横幅', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('22', 'Users', '用户', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('23', 'Admin', '管理员', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('24', 'Admin Information', '管理员信息', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('25', 'Name', '名称', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('26', 'Password', '密码', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('27', 'Email', '电子邮件', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('28', 'Phone Number', '电话号码', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('29', 'Address', '地址', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('30', 'Sub Admin Management', '子管理员', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('31', 'Subadmin', '子管理员', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('32', 'Sub admin username', '子管理员用户名', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('33', 'Created Date', '创建日期', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('34', 'Auction', '拍卖', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('35', 'Add New Subadmin', '添加新的子管理员', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('36', 'Sports Management', '体育管理', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('37', 'Sports', '体育', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('38', 'Add New Sports', '添加新体育', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('39', 'Sports Name', '体育名称', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('40', 'Status', '状态', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('41', 'General Management', '综合管理', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('42', 'General Information', '一般信息', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('43', 'Facebook', 'Facebook的', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('44', 'Youtube', '的Youtube', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('45', 'Twitter', '推特', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('46', 'General', '一般', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('47', 'Sports and Odds Management', '体育和赔率管理', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('48', 'Sports And Odds', '运动和赔率', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('49', 'League', '联盟', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('50', 'Group', '组', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('51', 'Betters Management', '更好的管理', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('52', 'Better Name', '更好的名字', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('53', 'Price', '价钱', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('54', 'Match Name', '匹配名称', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('55', 'User Management', '用户管理', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('56', 'Select Language', '选择语言', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('57', 'English', '英语', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('58', 'Chinese', '中文', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('59', 'All Rights Reserved', '版权所有', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('60', 'My Profile', '我的简历', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('61', 'My Dashboard', '我的仪表板', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('62', 'Logout', '登出', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('63', 'Designed and Developed by', '设计和开发', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('64', 'Add New User', '添加新用户', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('65', 'Membership Management', '会员管理', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('66', 'Membership', '籍', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('67', 'Add New Membership', '添加新会员资格', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('68', 'Type', '类型', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('69', 'Duration', '持续时间', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('70', 'Escrow', '第三方托管', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('71', 'Banner Management', '横幅管理', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('72', 'Banner', '旗帜', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('73', 'Add New Banner', '添加新横幅', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('74', 'Title', '标题', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('75', 'Image', '图片', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('76', 'Withdraw Management', '撤回管理', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('77', 'Withdraw Request', '撤回请求', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('78', 'User Name', '用户名', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('79', 'Payment Management', '付款管理', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('80', 'Payment', '付款', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('81', 'Account Holder Name', '账户持有人姓名', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('82', 'Account Number', '帐号', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('83', 'Amount', '量', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('84', 'Language Management', '语言管理', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('85', 'Language', '语言', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('86', 'Add New Language', '添加新语言', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('87', 'Language Name', '语言名称', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('88', 'Flag', '旗', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('91', 'Page Title', '页面标题', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('92', 'User Image', '用户图片', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('93', 'Page Content', '页面内容', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('94', 'Content Management', '内容管理', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('95', 'Edit Content', '编辑内容', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('99', 'HELP', '救命', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('100', 'NEWS', '新闻', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('101', 'CONTACTS', '聯繫', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('102', 'Login', '登錄', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('103', 'HOME', '家', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('104', 'IN PLAY', ' 在玩', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('105', 'CONTACT US', '联系我们', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('106', 'Next Races', '下一场比赛', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('107', 'Ireland', '爱尔兰', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('108', 'All Races', '所有比赛', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('109', 'Horse Racing Schedule', '赛马日程', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('110', 'Today', '今天', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('111', 'Tomorrow ', '明天', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('112', 'wednesday', '星期三', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('113', 'Please log in below', '请在下面登录', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('114', 'Email / Username', '电子邮件/用户名', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('115', 'Forgot Your Password', '忘记密码了吗', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('116', 'New to Betfair ?', '必发新手？', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('117', 'Join Now', '现在加入', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('118', 'Log In', '登录', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('119', 'Open Account', '开户口', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('120', 'Country of Residence', '居住国家', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('121', 'Personal Information', '个人信息', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('122', 'Contact Information', '联系信息', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('123', 'Create Login', '创建登录', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('124', 'Security', '安全', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('125', 'Preferences', '喜好', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('126', 'Please enter accurate information. Your identity must be verified to allow continued use of your account.', '请输入准确的信息。您的身份必须经过验证才能继续使用您的帐户', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('127', 'First Name', '名字', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('128', 'Surname', '姓', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('129', 'Chinese Full Name', '中文全名', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('130', 'Date of Birth', '出生日期', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('131', 'Email Address', '电子邮件地址', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('132', 'Contact number', '联系电话', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('133', 'Choose how you receive your offers.', '选择接收优惠的方式。', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('134', 'Notification', '通知', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('135', 'Text message', '短信', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('136', 'Messages', '消息', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('137', 'Address Line 1', '地址第一行', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('138', 'Address Line 2', '地址第2行', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('139', 'Address Line 3', '地址第3行', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('140', 'Town/City', '镇/市', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('141', 'State/Region', '国家/地区', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('142', 'Postcode', '邮编', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('143', 'Confirm Password', '確認密碼', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('144', 'You will need to quote your four-digit security number when you contact us.', '當您聯繫我們時，您需要引用您的四位數安全號碼。', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('145', 'Four-Digit Security Number', '四位數安全碼', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('146', 'Confirm Four-Digit Security Number', '确认四位数安全号码', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('147', 'Time Zone', '时区', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('148', 'Odds Display', '赔率显示', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('149', 'Bonus Code', '奖金代码', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('151', 'I am at least 18 years of age and I have read, accept and agree to the', '我至少18岁，我已阅读，接受并同意', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('152', 'Terms and Conditions', '条款和条件', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('153', 'Rules', '规则', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('154', 'Privacy Policy', '隐私政策', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('155', 'Cookies Policy', '饼干 政策', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('156', 'and policies relating to', '和有关的政策', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('157', 'age verification', '年龄验证', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('158', 'and', '和', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('159', 'KYC (Know Your Customer)', 'KYC（了解您的客户）', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('160', 'Mr', '先生', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('161', 'Mrs', '太太', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('162', 'Ms', '女士', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('163', 'Miss', '小姐', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('164', 'Enter your first name', '输入您的名字', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('165', 'Enter your surname', '输入你的姓氏', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('166', 'Enter your full name', '输入您的全名', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('167', 'Select your date of birth', '选择您的出生日期', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('168', 'Email', '输入你的电子邮箱', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('169', 'Yes', '是', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('170', 'No', '没有', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('171', 'Enter your address', '输入您的地址', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('172', 'Enter your city', '输入你的城市', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('173', 'Enter your state', '输入你的州', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('174', 'Enter your postcode', '输入您的邮政编码', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('175', 'Enter username', '输入用户名', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('176', 'Password', '输入密码', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('177', 'Enter confirm password', '输入确认密码', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('178', 'Enter security number', '输入安全号码', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('179', 'Enter confirm security number', '输入确认安全号码', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('180', 'Enter bonus code', '输入红利代码', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('181', 'My Profile', '我的简历', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('182', 'Preference', '偏爱', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('183', 'Security', '安全', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('184', 'My Details', '我的细节', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('185', 'Contact Details', '联系方式', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('186', 'Residential Address', '住宅地址', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('187', 'Town/City', '镇/市', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('188', 'Choose how you receive your offers.', '选择接收优惠的方式。', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('189', 'Old Password', '旧密码', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('190', 'New Password', '新密码', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('191', 'New Password Again', '確認新密碼', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('192', 'Current Security Number', '目前的安全号码', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('193', 'New Security Number', '新安全号码', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('194', 'Confirm New Security Number', '确认新的安全号码', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('195', 'Country', '国家', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('196', 'City', '市', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('197', 'En / GBP', '英镑/英镑', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('198', 'Ch / CNY', 'Ch/中国新年', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('199', 'Baseball', '棒球', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('200', 'Basketball', '篮球', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('201', 'Football', '足球', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('202', 'Hockey', '曲棍球', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('203', 'Cricket', '蟋蟀', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('204', 'Cycling', '循环', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('205', 'Boxing', '拳击', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('206', 'Fishing', '钓鱼', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('207', 'Golf', '高尔夫球', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('208', 'Horse Racing', '赛马', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('209', 'Motor Sport', '汽车运动', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('210', 'Tennis', '网球', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('211', 'Volley Ball', '排球', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('212', 'Snooker', '阻挠', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('213', 'Esports', '电子竞技', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('214', 'Quick Links', '快速链接', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('215', 'Royal Ascot', '皇家阿斯科特', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('216', 'Royal Ascot preview', '皇家阿斯科特预览', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('217', 'FIFA Women\'s world cup', 'FIFA女足世界杯', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('218', 'Copa American', ' 美洲杯', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('219', 'CWC west indies v Bangladesh', 'CWC西印度群岛对孟加拉国', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('220', 'Cricket World Cup Winner', ' 板球世界杯冠军', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('221', 'Queen\'s Club', '女王俱乐部', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('222', 'Next Conservative Leader', '下一个保守党领袖', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('223', 'Cash Race', '现金竞赛', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('224', 'Future', '未来', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('225', 'All', ' 所有', '', '');
INSERT INTO `tbl_multi_lang` VALUES ('226', 'View by', '查看', '', '');

-- ----------------------------
-- Table structure for team_odds
-- ----------------------------
DROP TABLE IF EXISTS `team_odds`;
CREATE TABLE `team_odds` (
  `team_id` int(11) NOT NULL AUTO_INCREMENT,
  `league` int(11) NOT NULL,
  `sports` varchar(255) NOT NULL,
  `sport_key` varchar(255) NOT NULL,
  `en_title` text CHARACTER SET utf8 NOT NULL,
  `zh_title` text CHARACTER SET utf8 NOT NULL,
  `en_titlea` text CHARACTER SET utf8 NOT NULL,
  `zh_titlea` text CHARACTER SET utf8 NOT NULL,
  `en_titleb` text NOT NULL,
  `zh_titleb` text CHARACTER SET utf8 NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `hodds` varchar(255) NOT NULL,
  `hoddss` varchar(255) NOT NULL,
  `draw` varchar(255) NOT NULL,
  `draws` varchar(255) NOT NULL,
  `away` varchar(255) NOT NULL,
  `aways` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`team_id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of team_odds
-- ----------------------------
INSERT INTO `team_odds` VALUES ('1', '1', 'Baseball', 'Major League Baseball', 'Atlanta', '亚特兰大', ' Minnesota', '明尼苏达', 'Atlanta @ Minnesota', '亚特兰大@明尼苏达州', '2019-08-19', '2019-08-21', '14:00', '15:00', '15000', '2.06', '2.14', '3.32', '3.64', '1.88', '1.95', '2019-08-06', 'A');
INSERT INTO `team_odds` VALUES ('2', '1', 'Baseball', 'Major League Baseball', 'Chicago White Sox', '芝加哥白袜队', 'Detroit', '底特律', 'Chicago White Sox @ Detroit', '芝加哥白袜队@底特律', '2019-08-22', '2019-08-24', '14:00', '16:00', '14000', '1.84', '1.89', '1.91', '2.06', '1.87', '1.92', '2019-08-07', 'A');
INSERT INTO `team_odds` VALUES ('3', '1', 'Baseball', 'Major League Baseball', 'Kansas City', '堪萨斯城', 'Boston', '波士顿', 'Kansas City @ Boston', '堪萨斯城@波士顿', '2019-08-20', '2019-08-22', '13:00', '14:00', '12000', '1.02', '3.4', '3.45', '3.95', '1.01', '1.34', '2019-08-07', 'A');
INSERT INTO `team_odds` VALUES ('4', '2', 'Baseball', 'MLB Outrights 2019', 'Los Angeles Dodgers', ' 洛杉矶道奇队', 'New York Yankees', '纽约洋基队', 'World Series 2019', ' 2019年世界大赛', '2019-08-19', '2019-08-21', '17:00', '19:00', '240000', '1.02', '1.89', '3.45', '3.95', '1.87', '1.92', '2019-08-07', 'A');
INSERT INTO `team_odds` VALUES ('5', '2', 'Baseball', 'MLB Outrights 2019', 'San Francisco Giants', '旧金山巨人队', 'Los Angeles Dodgers', ' 洛杉矶道奇队', 'National League', '全国联赛', '2019-08-21', '2019-08-23', '15:00', '16:00', '18000', '1.02', '3.2', '1.51', '1.91', '1.92', '4.5', '2019-08-07', 'A');
INSERT INTO `team_odds` VALUES ('6', '6', 'Football', 'UEFA Champions League Qualifiers', 'FK Krasnodar', ' FK克拉斯诺达尔', 'Porto', '波尔图', 'FK Krasnodar v Porto', 'FC克拉斯诺达尔在波尔图', '2019-08-20', '2019-08-23', '17:00', '19:00', '190000', '1.02', '3.4', '3.45', '3.95', '1.87', '1.92', '2019-08-07', 'A');
INSERT INTO `team_odds` VALUES ('7', '6', 'Football', 'UEFA Champions League Qualifiers', 'Basaksehir', 'Basaksehir', 'Olympiakos', '奥林匹克', 'Basaksehir v Olympiakos', ' Vasakeshir v Olympiacos', '2019-08-24', '2019-08-26', '18:00', '20:00', '12000', '1.02', '1.89', '3.45', '2.06', '1.87', '1.34', '2019-08-07', 'A');
INSERT INTO `team_odds` VALUES ('8', '7', 'Football', 'English Premier League', 'West Ham', '西汉姆', 'Man City', ' 曼城', 'West Ham v Man City', ' 西汉姆对曼城', '2019-08-16', '2019-08-17', '15:00', '17:00', '210000', '2.02', '2.84', '1.66', '1.84', '2.63', '3.2', '2019-08-07', 'A');
INSERT INTO `team_odds` VALUES ('9', '7', 'Football', 'English Premier League', 'Watford', '沃特福德', 'Brighton', '布莱顿', 'Watford v Brighton', '沃特福德诉布莱顿', '2019-08-19', '2019-08-21', '20:00', '22:00', '200000', '1.95', '1.96', '4.4', '4.5', '3.45', '3.5', '2019-08-07', 'A');
INSERT INTO `team_odds` VALUES ('10', '8', 'Football', 'English Football League Cup', 'AFC Fylde', 'AFC Fylde', 'Ebbsfleet Utd', 'Ebbsfleet Utd', 'AFC Fylde v Ebbsfleet Utd', ' AFC Fylde v Ebbsfleet Utd', '2019-08-24', '2019-08-28', '15:00', '17:00', '340000', '1.84', '1.89', '1.91', '2.06', '2.63', '3.2', '2019-08-07', 'A');
INSERT INTO `team_odds` VALUES ('11', '3', 'Basketball', 'NBA', 'Los Angeles Clippers', ' 洛杉矶快船队', 'Los Angeles Lakers', '洛杉矶湖人队', 'NBA Championship 2019/2020', '2019/2020 NBA总冠军', '2019-08-20', '2019-08-24', '13:00', '14:00', '0', '5.5', '5.7', '6.6', '7', '5.8', '6', '2019-08-07', 'A');
INSERT INTO `team_odds` VALUES ('12', '3', 'Basketball', 'NBA', 'Milwaukee Bucks', '密尔沃基雄鹿队', 'Philadelphia 76ers', '费城76人队', 'NBA Championship 2019/2020', ' 2019/2020 NBA总冠军', '2019-08-20', '2019-08-24', '14:00', '16:00', '14000', '7', '7.4', '8.2', '8.8', '8.8', '9', '2019-08-07', 'A');
INSERT INTO `team_odds` VALUES ('13', '4', 'Basketball', 'FIBA World cup Men', 'Los Angeles Clippers', ' 洛杉矶快船队', 'Los Angeles Lakers', '洛杉矶湖人队', 'NBL Outright Winner 2019/2020', 'NBL Outright Winner 2019/2020', '2019-08-20', '2019-08-30', '14:00', '15:00', '0', '1.84', '1.89', '1.91', '2.06', '1.01', '1.34', '2019-08-07', 'A');
INSERT INTO `team_odds` VALUES ('14', '4', 'Basketball', 'FIBA World cup Men', 'Houston Rockets', ' 休斯顿火箭队', 'Golden State Warriors', '金州勇士队', 'Eastern Conference Winner', '东部冠军', '2019-08-23', '2019-08-24', '16:00', '17:30', '0', '1.84', '1.89', '3.45', '3.95', '2.63', '2.67', '2019-08-07', 'A');
INSERT INTO `team_odds` VALUES ('15', '5', 'Basketball', 'Australian NBL', 'San Miguel Beermen ', '圣米格尔啤酒', 'TNT Katropa', 'TNT Katropa', 'San Miguel Beermen v TNT Katropa', 'San Miguel Beermen v TNT Katropa', '2019-08-16', '2019-08-17', '21:00', '23:00', '0', '2.02', '2.84', '6.6', '7', '5.8', '6', '2019-08-07', 'A');
INSERT INTO `team_odds` VALUES ('16', '9', 'Cricket', 'Test Matches', 'England', '英国', 'Australia', '澳大利亚', 'England v Australia (2nd Test)', ' 英格兰对澳大利亚（第二次测试', '2019-08-24', '2019-08-28', '10:00', '18:00', '190000', '2.3', '2.32', '6.2', '6.4', '2.3', '2.32', '2019-08-07', 'A');
INSERT INTO `team_odds` VALUES ('17', '11', 'Cricket', 'T20 Blast', 'Essex', '埃塞克斯', 'Somerset', '萨默塞特', 'Essex v Somerset', '埃塞克斯诉萨默塞特', '2019-08-19', '2019-08-23', '22:00', '23:30', '210000', '1.84', '1.89', '1.91', '2.06', '1.92', '2.3', '2019-08-07', 'A');
INSERT INTO `team_odds` VALUES ('18', '11', 'Cricket', 'T20 Blast', 'Gloucestershire', '格洛斯特郡', 'Kent', '肯特', 'Gloucestershire v Kent', '格洛斯特郡对肯特郡', '2019-08-20', '2019-08-26', '21:00', '23:00', '190000', '2.22', '2.38', '1.61', '1.68', '1.87', '1.92', '2019-08-07', 'A');
INSERT INTO `team_odds` VALUES ('19', '12', 'Tennis', 'ATP Montreal Rogers Cup 2019', 'Borna Coric', '博尔纳科里奇', 'Adrian Mannarino', '阿德里安·曼纳里诺', 'Doubles Matches', '双打比赛', '2019-08-23', '2019-08-24', '15:00', '16:00', '210000', '1.48', '1.52', '2.2', '2.8', '1.5', '1.52', '2019-08-07', 'A');
INSERT INTO `team_odds` VALUES ('20', '12', 'Tennis', 'ATP Montreal Rogers Cup 2019', 'Radu Albot', 'Radu Albot', 'Guido Pella', '吉多佩拉', 'Second Round Matches', '第二轮比赛', '2019-08-25', '2019-08-27', '17:00', '19:00', '0', '2.28', '2.22', '2.3', '234', '1.76', '1.78', '2019-08-07', 'A');
INSERT INTO `team_odds` VALUES ('21', '13', 'Tennis', 'WTA Toronto Rogers Cup 2019', 'Aoyama/Christian', '青山/基督教', 'Groenefeld/Schuurs', 'Groenefeld/Schuurs', 'Doubles Matches', ' 双打比赛', '2019-08-22', '2019-08-23', '15:00', '16:00', '0', '2.7', '2.72', '2.75', '3.45', '1.39', '1.4', '2019-08-07', 'A');
INSERT INTO `team_odds` VALUES ('22', '14', 'Tennis', 'Australian Open 2020', 'Novak Djokovic', '诺瓦克·德约科维奇', 'Rafael Nadal', '拉斐尔·纳达尔', 'Australian Open Men\'s', '澳大利亚男子公开赛', '2019-08-19', '2019-08-23', '14:00', '15:00', '0', '2.02', '2.1', '2.52', '2.76', '2.52', '3.2', '2019-08-07', 'A');
INSERT INTO `team_odds` VALUES ('23', '15', 'Tennis', 'French Open 2020', 'Dominic Thiem', ' 多米尼克蒂姆', 'Andy Murray', '安迪穆雷', 'French Open Men\'s', '法国男子公开赛', '2019-08-23', '2019-08-30', '19:00', '21:30', '12000', '1.02', '1.8', '1.02', '1.8', '1.02', '1.8', '2019-08-07', 'A');
INSERT INTO `team_odds` VALUES ('24', '16', 'Boxing', 'Boxing Matches', 'Deontay Wilder', 'Deontay Wilder', 'Luis Ortiz', 'Luis Ortiz', 'Deontay Wilder v Luis Ortiz', 'Deontay Wilder v Luis Ortiz', '2019-08-19', '2019-08-20', '19:00', '22:00', '0', '1.84', '3.4', '3.45', '3.95', '2.63', '3.2', '2019-08-07', 'A');
INSERT INTO `team_odds` VALUES ('25', '16', 'Boxing', 'Boxing Matches', 'Hughie Fury', 'Hughie Fury', 'Alexander Povetkin', 'Alexander Povetkin', 'Hughie Fury v Alexander Povetkin', ' 在Alexander Povetkin需要卡车', '2019-08-28', '2019-08-30', '13:00', '15:00', '0', '1.01', '2.56', '1.44', '23', '1.47', '1.51', '2019-08-07', 'A');
INSERT INTO `team_odds` VALUES ('26', '16', 'Boxing', 'Boxing Matches', 'Jeff Horn', '杰夫霍恩', 'Michael Zerafa', '迈克尔·泽拉法', 'Jeff Horn v Michael Zerafa', '杰夫霍恩诉迈克尔泽拉法', '2019-08-25', '2019-08-26', '17:00', '19:00', '12000', '1.02', '1.2', '1.01', '1.18', '3.55', '3.8', '2019-08-07', 'A');
INSERT INTO `team_odds` VALUES ('27', '16', 'Boxing', 'Boxing Matches', 'Tim Tszyu', 'Tim Tszyu', 'Dwight Ritchie', 'Dwight Ritchie', 'Tim Tszyu v Dwight Ritchie', 'Tim Tszyu v Dwight Ritchie', '2019-08-19', '2019-08-20', '18:00', '20:00', '12000', '1.02', '1.89', '3.45', '2.06', '2.63', '3.2', '2019-08-07', 'A');
INSERT INTO `team_odds` VALUES ('28', '16', 'Boxing', 'Boxing Matches', 'Vasiliy Lomachenko', 'Vasiliy Lomachenko', 'Luke Campbell', '卢克坎贝尔', 'Vasiliy Lomachenko v Luke Campbell', '卢卡坎贝尔的瓦西里罗马琴科', '2019-08-21', '2019-08-23', '20:00', '22:00', '0', '1.06', '1.07', '27', '34', '11.5', '12.5', '2019-08-07', 'A');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `country` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `notification` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `emailn` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address_option` varchar(255) NOT NULL,
  `address_options` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `securityn` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `odds` varchar(255) NOT NULL,
  `bonus` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `promo_code` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `security` varchar(255) NOT NULL,
  `balance` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `request` varchar(2) NOT NULL,
  `response` varchar(250) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('4', 'Mrs', 'ramesh', 'kumar', 'rameshkumar', '0000-00-00', 'Select Country', '', 'ramesh', 'dramesh@swelltechnologies.com', 'Yes', 'No', 'Yes', 'No', 'cbe', 'cbe', 'cbe', '9c084474155a38b62bc01237ef2163edc869cc13', '1234', 'GMT-8', 'Decimal', '', '98775666665', '', '34337887', 'coimbatore', 'tamilnadu', '46a72166f3e2094077a9e860506bb2c9', '0', '1', '0000-00-00', '', '');
INSERT INTO `user` VALUES ('5', 'Ms', 'sripriya', 'sripriya', 'priya', '0000-00-00', 'India', '', 'priya', 'nsripriya@swelltechnologies.com', 'Yes', 'No', 'Yes', 'No', 'coimbartore', '', '', 'cb249fbbf53c7980fa8c6007f0c685f5c718de14', '1234', 'GMT-9', 'Decimal', 'wert', '96675665666', '', '641238', 'mettupalayam', 'tamilnadu', 'eadbcc37788f532699bd0859d1914fb1', '88', '1', '0000-00-00', '', '');
