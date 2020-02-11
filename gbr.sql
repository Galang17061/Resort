-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.40-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for gbr
CREATE DATABASE IF NOT EXISTS `gbr` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `gbr`;

-- Dumping structure for table gbr.c_room
CREATE TABLE IF NOT EXISTS `c_room` (
  `cr_id` int(11) NOT NULL AUTO_INCREMENT,
  `cr_name` varchar(150) DEFAULT NULL,
  `cr_desc` longtext,
  `cr_desc_short` longtext,
  `cr_price` decimal(10,0) DEFAULT NULL,
  `cr_tax` decimal(10,0) DEFAULT NULL,
  `cr_serve` decimal(10,0) DEFAULT NULL,
  `cr_additional` decimal(10,0) DEFAULT NULL,
  `cr_total` decimal(10,0) DEFAULT NULL,
  `cr_type_room` int(11) DEFAULT NULL,
  `cr_payment` varchar(50) DEFAULT NULL,
  `cr_created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `cr_updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`cr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gbr.c_room: ~0 rows (approximately)
/*!40000 ALTER TABLE `c_room` DISABLE KEYS */;
/*!40000 ALTER TABLE `c_room` ENABLE KEYS */;

-- Dumping structure for table gbr.c_room_features
CREATE TABLE IF NOT EXISTS `c_room_features` (
  `crf_id` int(11) DEFAULT NULL,
  `crf_dt` int(11) NOT NULL AUTO_INCREMENT,
  `crf_features` int(11) DEFAULT NULL,
  `crf_created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `crf_updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`crf_dt`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gbr.c_room_features: ~0 rows (approximately)
/*!40000 ALTER TABLE `c_room_features` DISABLE KEYS */;
/*!40000 ALTER TABLE `c_room_features` ENABLE KEYS */;

-- Dumping structure for table gbr.c_room_image
CREATE TABLE IF NOT EXISTS `c_room_image` (
  `cri_id` int(11) DEFAULT NULL,
  `cri_dt` int(11) NOT NULL AUTO_INCREMENT,
  `cri_image` varchar(50) DEFAULT NULL,
  `cri_created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `cri_updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`cri_dt`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='gambar ukuran \r\n612x612';

-- Dumping data for table gbr.c_room_image: ~0 rows (approximately)
/*!40000 ALTER TABLE `c_room_image` DISABLE KEYS */;
/*!40000 ALTER TABLE `c_room_image` ENABLE KEYS */;

-- Dumping structure for table gbr.c_ticket
CREATE TABLE IF NOT EXISTS `c_ticket` (
  `ct_id` int(11) NOT NULL AUTO_INCREMENT,
  `ct_ticket` int(11) DEFAULT NULL,
  `ct_qty` varchar(50) DEFAULT NULL,
  `ct_qty_sold` varchar(50) DEFAULT NULL,
  `ct_qty_left` varchar(50) DEFAULT NULL,
  `ct_created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ct_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gbr.c_ticket: ~0 rows (approximately)
/*!40000 ALTER TABLE `c_ticket` DISABLE KEYS */;
/*!40000 ALTER TABLE `c_ticket` ENABLE KEYS */;

-- Dumping structure for table gbr.d_mem
CREATE TABLE IF NOT EXISTS `d_mem` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_code` varchar(50) DEFAULT NULL,
  `m_username` varchar(20) DEFAULT NULL,
  `m_password` varchar(40) DEFAULT NULL,
  `m_email` varchar(100) DEFAULT NULL,
  `m_phone` varchar(100) DEFAULT NULL,
  `m_first_name` varchar(100) DEFAULT NULL,
  `m_last_name` varchar(100) DEFAULT NULL,
  `m_birth_tgl` date DEFAULT NULL,
  `m_address` text,
  `m_img` varchar(225) DEFAULT NULL,
  `m_last_login` timestamp NULL DEFAULT NULL,
  `m_last_logout` timestamp NULL DEFAULT NULL,
  `m_insert` timestamp NULL DEFAULT NULL,
  `m_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `m_birth_place` varchar(50) DEFAULT NULL,
  `m_kel` enum('P','W') DEFAULT NULL,
  `m_isactive` enum('Y','N') DEFAULT NULL,
  `m_role` int(11) DEFAULT NULL,
  PRIMARY KEY (`m_id`),
  KEY `m_role` (`m_role`),
  CONSTRAINT `d_mem_ibfk_1` FOREIGN KEY (`m_role`) REFERENCES `m_role` (`r_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gbr.d_mem: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_mem` DISABLE KEYS */;
/*!40000 ALTER TABLE `d_mem` ENABLE KEYS */;

-- Dumping structure for table gbr.d_mem_comment
CREATE TABLE IF NOT EXISTS `d_mem_comment` (
  `dmc_id` int(11) DEFAULT NULL,
  `dmc_message` longtext,
  `dmc_comment_by` int(11) DEFAULT NULL,
  `dmc_commended` int(11) DEFAULT NULL,
  `dmc_created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gbr.d_mem_comment: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_mem_comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `d_mem_comment` ENABLE KEYS */;

-- Dumping structure for table gbr.d_mem_follow
CREATE TABLE IF NOT EXISTS `d_mem_follow` (
  `dmf_id` int(11) NOT NULL AUTO_INCREMENT,
  `dmf_follow_by` int(11) DEFAULT NULL,
  `dmf_followed` int(11) DEFAULT NULL,
  `dmf_read` varchar(50) DEFAULT 'N',
  `dmf_created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`dmf_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gbr.d_mem_follow: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_mem_follow` DISABLE KEYS */;
/*!40000 ALTER TABLE `d_mem_follow` ENABLE KEYS */;

-- Dumping structure for table gbr.d_novel
CREATE TABLE IF NOT EXISTS `d_novel` (
  `dn_id` int(11) NOT NULL AUTO_INCREMENT,
  `dn_title` text,
  `dn_description` longtext,
  `dn_cover` varchar(50) DEFAULT NULL,
  `dn_type_novel` int(11) DEFAULT '2',
  `dn_view` int(11) DEFAULT NULL,
  `dn_vote` int(11) DEFAULT NULL,
  `dn_rating` int(11) DEFAULT NULL,
  `dn_created_at` timestamp NULL DEFAULT NULL,
  `dn_created_by` int(11) DEFAULT NULL,
  `dn_updated_by` int(11) DEFAULT NULL,
  `dn_updated_at` timestamp NULL DEFAULT NULL,
  `dn_status` enum('publish','draft') DEFAULT NULL,
  `dn_approve_by` int(11) DEFAULT NULL,
  `dn_category` int(11) DEFAULT NULL,
  PRIMARY KEY (`dn_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='status_novel\r\n\r\n1:  publish\r\n2:  draft to admin\r\n3:  draft for writter\r\n\r\ntype_novel\r\n\r\n1: official story\r\n2: story';

-- Dumping data for table gbr.d_novel: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_novel` DISABLE KEYS */;
/*!40000 ALTER TABLE `d_novel` ENABLE KEYS */;

-- Dumping structure for table gbr.d_novel_category
CREATE TABLE IF NOT EXISTS `d_novel_category` (
  `dnc_id` int(11) NOT NULL AUTO_INCREMENT,
  `dnc_category_id` int(11) DEFAULT NULL,
  `dnc_ref_id` int(11) DEFAULT NULL,
  `dnc_created_at` timestamp NULL DEFAULT NULL,
  `dnc_updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`dnc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gbr.d_novel_category: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_novel_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `d_novel_category` ENABLE KEYS */;

-- Dumping structure for table gbr.d_novel_chapter
CREATE TABLE IF NOT EXISTS `d_novel_chapter` (
  `dnch_id` int(11) NOT NULL AUTO_INCREMENT,
  `dnch_ref_id` int(11) DEFAULT NULL,
  `dnch_title` longtext,
  `dnch_content` longtext,
  `dnch_created_by` int(11) DEFAULT NULL,
  `dnch_created_at` timestamp NULL DEFAULT NULL,
  `dnch_updated_at` timestamp NULL DEFAULT NULL,
  `dnch_status` enum('publish','draft') DEFAULT NULL,
  `dnch_approved_by` int(11) DEFAULT NULL,
  `dnch_viewer` int(11) DEFAULT NULL,
  PRIMARY KEY (`dnch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='status_novel\r\n\r\n1:  publish\r\n2:  draft to admin\r\n3:  draft for writter\r\n';

-- Dumping data for table gbr.d_novel_chapter: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_novel_chapter` DISABLE KEYS */;
/*!40000 ALTER TABLE `d_novel_chapter` ENABLE KEYS */;

-- Dumping structure for table gbr.d_novel_chapter_comment
CREATE TABLE IF NOT EXISTS `d_novel_chapter_comment` (
  `dncc_id` int(11) NOT NULL AUTO_INCREMENT,
  `dncc_ref_id` int(11) DEFAULT NULL,
  `dncc_ref_iddt` int(11) DEFAULT NULL,
  `dncc_message` longtext,
  `dncc_creator` int(11) DEFAULT NULL,
  `dncc_comment_by` int(11) DEFAULT NULL,
  `dncc_created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`dncc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gbr.d_novel_chapter_comment: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_novel_chapter_comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `d_novel_chapter_comment` ENABLE KEYS */;

-- Dumping structure for table gbr.d_novel_chapter_comment_dt
CREATE TABLE IF NOT EXISTS `d_novel_chapter_comment_dt` (
  `dnccdt_id` int(11) NOT NULL AUTO_INCREMENT,
  `dnccdt_ref_iddt` int(11) NOT NULL DEFAULT '0',
  `dnccdt_ref_id` int(11) DEFAULT NULL,
  `dnccdt_comment_id` int(11) DEFAULT NULL,
  `dnccdt_reply_by` int(11) DEFAULT NULL,
  `dnccdt_message` longtext,
  `dnccdt_created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`dnccdt_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gbr.d_novel_chapter_comment_dt: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_novel_chapter_comment_dt` DISABLE KEYS */;
/*!40000 ALTER TABLE `d_novel_chapter_comment_dt` ENABLE KEYS */;

-- Dumping structure for table gbr.d_novel_like
CREATE TABLE IF NOT EXISTS `d_novel_like` (
  `dnl_id` int(11) NOT NULL AUTO_INCREMENT,
  `dnl_ref_id` int(11) DEFAULT NULL,
  `dnl_like_by` int(11) DEFAULT NULL,
  `dnl_creator` int(11) DEFAULT NULL,
  `dnl_created_at` timestamp NULL DEFAULT NULL,
  `dnl_read` enum('Y','N') DEFAULT 'N',
  PRIMARY KEY (`dnl_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gbr.d_novel_like: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_novel_like` DISABLE KEYS */;
/*!40000 ALTER TABLE `d_novel_like` ENABLE KEYS */;

-- Dumping structure for table gbr.d_novel_notif
CREATE TABLE IF NOT EXISTS `d_novel_notif` (
  `dnn_id` int(11) NOT NULL AUTO_INCREMENT,
  `dnn_creator` int(11) DEFAULT NULL,
  `dnn_subscriber` int(11) DEFAULT NULL,
  `dnn_novel` int(11) DEFAULT NULL,
  `dnn_read` varchar(50) DEFAULT NULL,
  `dnn_created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`dnn_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gbr.d_novel_notif: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_novel_notif` DISABLE KEYS */;
/*!40000 ALTER TABLE `d_novel_notif` ENABLE KEYS */;

-- Dumping structure for table gbr.d_novel_notif_chapter
CREATE TABLE IF NOT EXISTS `d_novel_notif_chapter` (
  `dnnc_id` int(11) NOT NULL AUTO_INCREMENT,
  `dnnc_creator` int(11) DEFAULT NULL,
  `dnnc_subscriber` int(11) DEFAULT NULL,
  `dnnc_novel` int(11) DEFAULT NULL,
  `dnnc_read` varchar(50) DEFAULT NULL,
  `dnnc_chapter` int(11) DEFAULT NULL,
  `dnnc_created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`dnnc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gbr.d_novel_notif_chapter: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_novel_notif_chapter` DISABLE KEYS */;
/*!40000 ALTER TABLE `d_novel_notif_chapter` ENABLE KEYS */;

-- Dumping structure for table gbr.d_novel_rate
CREATE TABLE IF NOT EXISTS `d_novel_rate` (
  `dr_id` int(11) NOT NULL AUTO_INCREMENT,
  `dr_rate` int(11) NOT NULL DEFAULT '0',
  `dr_ref_id` int(11) DEFAULT NULL,
  `dr_rated_by` int(11) DEFAULT NULL,
  `dr_message` longtext,
  `dr_created_at` timestamp NULL DEFAULT NULL,
  `dr_updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`dr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gbr.d_novel_rate: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_novel_rate` DISABLE KEYS */;
/*!40000 ALTER TABLE `d_novel_rate` ENABLE KEYS */;

-- Dumping structure for table gbr.d_novel_rate_dt
CREATE TABLE IF NOT EXISTS `d_novel_rate_dt` (
  `drdt_id` int(11) NOT NULL AUTO_INCREMENT,
  `drdt_reply_by` int(11) NOT NULL DEFAULT '0',
  `drdt_message` longtext,
  `drdt_ref_id` int(11) DEFAULT NULL,
  `drdt_ref_rate_id` int(11) DEFAULT NULL,
  `drdt_created_at` timestamp NULL DEFAULT NULL,
  `drdt_updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`drdt_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gbr.d_novel_rate_dt: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_novel_rate_dt` DISABLE KEYS */;
/*!40000 ALTER TABLE `d_novel_rate_dt` ENABLE KEYS */;

-- Dumping structure for table gbr.d_novel_review
CREATE TABLE IF NOT EXISTS `d_novel_review` (
  `dnr_id` int(11) NOT NULL AUTO_INCREMENT,
  `dnr_review` longtext,
  `dnr_rate` float DEFAULT NULL,
  `dnr_created_by` int(11) DEFAULT NULL,
  `dnr_created_at` int(11) DEFAULT NULL,
  `dnr_updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`dnr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gbr.d_novel_review: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_novel_review` DISABLE KEYS */;
/*!40000 ALTER TABLE `d_novel_review` ENABLE KEYS */;

-- Dumping structure for table gbr.d_novel_subscribe
CREATE TABLE IF NOT EXISTS `d_novel_subscribe` (
  `dns_id` int(11) NOT NULL AUTO_INCREMENT,
  `dns_ref_id` int(11) DEFAULT NULL,
  `dns_subscribe_by` int(11) DEFAULT NULL,
  `dns_created_at` timestamp NULL DEFAULT NULL,
  `dns_creator` int(11) DEFAULT NULL,
  `dns_read` enum('Y','N') DEFAULT 'N',
  PRIMARY KEY (`dns_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gbr.d_novel_subscribe: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_novel_subscribe` DISABLE KEYS */;
/*!40000 ALTER TABLE `d_novel_subscribe` ENABLE KEYS */;

-- Dumping structure for table gbr.d_novel_tags
CREATE TABLE IF NOT EXISTS `d_novel_tags` (
  `dnt_id` int(11) NOT NULL AUTO_INCREMENT,
  `dnt_name` text,
  `dnt_ref_id` int(11) DEFAULT NULL,
  `dnt_created_at` timestamp NULL DEFAULT NULL,
  `dnt_updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`dnt_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gbr.d_novel_tags: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_novel_tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `d_novel_tags` ENABLE KEYS */;

-- Dumping structure for table gbr.d_room_book
CREATE TABLE IF NOT EXISTS `d_room_book` (
  `drb_id` int(11) NOT NULL AUTO_INCREMENT,
  `drb_code` varchar(50) DEFAULT NULL,
  `drb_start_date` date DEFAULT NULL,
  `drb_serve_price` double NOT NULL DEFAULT '0',
  `drb_tax_price` double NOT NULL DEFAULT '0',
  `drb_end_date` date DEFAULT NULL,
  `drb_created_by` int(11) DEFAULT NULL,
  `drb_room_id` int(11) DEFAULT NULL,
  `drb_token` varchar(50) DEFAULT NULL,
  `drb_token2` varchar(50) DEFAULT NULL,
  `drb_qty` int(11) DEFAULT NULL,
  `drb_total_price` double DEFAULT NULL,
  `drb_guest` int(11) DEFAULT NULL,
  `drb_user` int(11) DEFAULT NULL,
  `drb_created_at` timestamp NULL DEFAULT NULL,
  `drb_updated_at` timestamp NULL DEFAULT NULL,
  `drb_room_price` double DEFAULT NULL,
  `drb_additional_price` double DEFAULT NULL,
  `drb_type_bed` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`drb_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gbr.d_room_book: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_room_book` DISABLE KEYS */;
/*!40000 ALTER TABLE `d_room_book` ENABLE KEYS */;

-- Dumping structure for table gbr.d_room_book_guest
CREATE TABLE IF NOT EXISTS `d_room_book_guest` (
  `drbg_id` int(11) DEFAULT NULL,
  `drbg_book_id` int(11) DEFAULT NULL,
  `drbg_first_name` varchar(50) DEFAULT NULL,
  `drbg_last_name` varchar(50) DEFAULT NULL,
  `drbg_address` varchar(250) DEFAULT NULL,
  `drbg_email` varchar(50) DEFAULT NULL,
  `drbg_phone` varchar(50) DEFAULT NULL,
  `drbg_phone1` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gbr.d_room_book_guest: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_room_book_guest` DISABLE KEYS */;
/*!40000 ALTER TABLE `d_room_book_guest` ENABLE KEYS */;

-- Dumping structure for table gbr.d_room_book_invoice
CREATE TABLE IF NOT EXISTS `d_room_book_invoice` (
  `drbi_id` int(11) NOT NULL AUTO_INCREMENT,
  `drbi_code` varchar(50) NOT NULL,
  `drbi_book_id` int(11) NOT NULL DEFAULT '0',
  `drbi_created_by` int(11) NOT NULL DEFAULT '0',
  `drbi_price` double NOT NULL DEFAULT '0',
  `drbi_image` varchar(50) NOT NULL DEFAULT '0',
  `drbi_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`drbi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gbr.d_room_book_invoice: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_room_book_invoice` DISABLE KEYS */;
/*!40000 ALTER TABLE `d_room_book_invoice` ENABLE KEYS */;

-- Dumping structure for table gbr.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table gbr.migrations: ~0 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table gbr.m_category
CREATE TABLE IF NOT EXISTS `m_category` (
  `mc_id` int(11) NOT NULL AUTO_INCREMENT,
  `mc_name` varchar(50) DEFAULT NULL,
  `mc_created_at` timestamp NULL DEFAULT NULL,
  `mc_updated_at` timestamp NULL DEFAULT NULL,
  `mc_color` varchar(50) DEFAULT NULL,
  `mc_bgcolor` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`mc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gbr.m_category: ~0 rows (approximately)
/*!40000 ALTER TABLE `m_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_category` ENABLE KEYS */;

-- Dumping structure for table gbr.m_features
CREATE TABLE IF NOT EXISTS `m_features` (
  `mf_id` int(11) NOT NULL AUTO_INCREMENT,
  `mf_name` varchar(50) DEFAULT NULL,
  `mf_icon` varchar(50) DEFAULT NULL,
  `mf_created_at` timestamp NULL DEFAULT NULL,
  `mf_updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`mf_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gbr.m_features: ~0 rows (approximately)
/*!40000 ALTER TABLE `m_features` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_features` ENABLE KEYS */;

-- Dumping structure for table gbr.m_log
CREATE TABLE IF NOT EXISTS `m_log` (
  `l_id` int(11) NOT NULL,
  `l_features` varchar(50) DEFAULT NULL,
  `i_function` varchar(50) NOT NULL,
  `l_username` varchar(50) DEFAULT NULL,
  `l_created_at` timestamp NULL DEFAULT NULL,
  `l_updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`l_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gbr.m_log: ~0 rows (approximately)
/*!40000 ALTER TABLE `m_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_log` ENABLE KEYS */;

-- Dumping structure for table gbr.m_previlege
CREATE TABLE IF NOT EXISTS `m_previlege` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_code` varchar(50) DEFAULT NULL,
  `p_level` varchar(50) DEFAULT NULL,
  `p_menu` varchar(50) DEFAULT NULL,
  `p_action` enum('aktif','tidak') DEFAULT NULL,
  `p_active` enum('aktif','tidak') DEFAULT NULL,
  `p_created_at` timestamp NULL DEFAULT NULL,
  `p_updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gbr.m_previlege: ~0 rows (approximately)
/*!40000 ALTER TABLE `m_previlege` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_previlege` ENABLE KEYS */;

-- Dumping structure for table gbr.m_role
CREATE TABLE IF NOT EXISTS `m_role` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `r_level` int(11) DEFAULT NULL,
  `r_name` varchar(50) DEFAULT NULL,
  `r_insert_at` timestamp NULL DEFAULT NULL,
  `r_updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`r_id`),
  UNIQUE KEY `r_level` (`r_level`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gbr.m_role: ~0 rows (approximately)
/*!40000 ALTER TABLE `m_role` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_role` ENABLE KEYS */;

-- Dumping structure for table gbr.m_ticket
CREATE TABLE IF NOT EXISTS `m_ticket` (
  `mt_id` int(11) NOT NULL AUTO_INCREMENT,
  `mt_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`mt_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gbr.m_ticket: ~0 rows (approximately)
/*!40000 ALTER TABLE `m_ticket` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_ticket` ENABLE KEYS */;

-- Dumping structure for table gbr.m_type_room
CREATE TABLE IF NOT EXISTS `m_type_room` (
  `tr_id` int(11) NOT NULL AUTO_INCREMENT,
  `tr_name` varchar(50) DEFAULT NULL,
  `tr_created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`tr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gbr.m_type_room: ~0 rows (approximately)
/*!40000 ALTER TABLE `m_type_room` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_type_room` ENABLE KEYS */;

-- Dumping structure for table gbr.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table gbr.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
