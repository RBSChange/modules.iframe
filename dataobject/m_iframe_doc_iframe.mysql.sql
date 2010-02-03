CREATE TABLE IF NOT EXISTS `m_iframe_doc_iframe` (
  `document_id` int(11) NOT NULL default '0',
  `document_model` varchar(50) NOT NULL default '',
  `document_label` varchar(255),
  `document_author` varchar(50),
  `document_creationdate` datetime,
  `document_modificationdate` datetime,
  `document_publicationstatus` varchar(50),
  `document_lang` varchar(2),
  `document_modelversion` varchar(20),
  `document_startpublicationdate` datetime,
  `document_endpublicationdate` datetime,
  `url` varchar(255),
  `text` text,
  `height` int(11),
  `width` int(11),
  `scrolling` varchar(255),
  PRIMARY KEY  (`document_id`)
  ) TYPE=InnoDB CHARACTER SET utf8 COLLATE utf8_bin
;