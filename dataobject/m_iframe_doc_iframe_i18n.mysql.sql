CREATE TABLE IF NOT EXISTS `m_iframe_doc_iframe_i18n` (
  `document_id` int(11) NOT NULL default '0',
  `lang_i18n` varchar(2) NOT NULL default 'fr',
  `document_label_i18n` varchar(255),
  `url_i18n` varchar(255),
  `text_i18n` text,
  PRIMARY KEY  (`document_id`, `lang_i18n`)
  ) TYPE=InnoDB CHARACTER SET utf8 COLLATE utf8_bin
;