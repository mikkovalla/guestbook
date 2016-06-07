--
-- Table `viestit`
--

CREATE TABLE `viestit` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nimi` varchar(128) collate utf8_unicode_ci NOT NULL default '',
  `viesti` text collate utf8_unicode_ci NOT NULL,
  `aika` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;