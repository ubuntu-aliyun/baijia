<?php defined('SYSTEM_IN') or exit('Access Denied');defined('LOCK_TO_UPDATE') or exit('Access Denied');
$sql ="
CREATE TABLE IF NOT EXISTS `baijiacms_bj_tbk_diyshopindex` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `active` tinyint(1) NOT NULL,
  `beid` int(10) NOT NULL,
  `pagename` varchar(255) NOT NULL DEFAULT '' COMMENT 'ҳ������',
  `pagetype` tinyint(3) NOT NULL DEFAULT '0' COMMENT 'ҳ������ 1��ҳ��0����',
  `pageinfo` text NOT NULL,
  `createtime` varchar(255) NOT NULL DEFAULT '' COMMENT 'ҳ�洴��ʱ��',
  `updatetime` varchar(255) NOT NULL DEFAULT '' COMMENT 'ҳ����󱣴�ʱ��',
  `datas` text NOT NULL COMMENT '����',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
";
if(!mysqld_fieldexists('system_store', 'fullwebsite')) {
	$sql=$sql."ALTER TABLE ".table('system_store')." ADD COLUMN `fullwebsite` varchar(200) NOT NULL DEFAULT '' COMMENT '��������';";
}
if(!mysqld_fieldexists('system_store', 'website2')) {
	$sql=$sql."ALTER TABLE ".table('system_store')." ADD COLUMN `website2` varchar(100) NOT NULL DEFAULT '' COMMENT '�Ӱ�����1';";
}
if(!mysqld_fieldexists('system_store', 'website3')) {
	$sql=$sql."ALTER TABLE ".table('system_store')." ADD COLUMN `website3` varchar(100) NOT NULL DEFAULT '' COMMENT '�Ӱ�����2';";
}
if(!mysqld_fieldexists('bj_tbk_diyshopindex', 'showtype')) {
	$sql=$sql."ALTER TABLE ".table('bj_tbk_diyshopindex')." ADD COLUMN `showtype` tinyint(2) NOT NULL DEFAULT '0' COMMENT 'ҳ������0DIYҳ��1html����ҳ��';";
}
mysqld_batch($sql); 


clear_theme_cache();
