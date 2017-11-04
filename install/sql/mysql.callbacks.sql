
# Table structure for table `callbacks`
#

CREATE TABLE callbacks (
  cbid mediumint(255) unsigned NOT NULL auto_increment,
  callback tinytext,
  post longtext,
  response int(4) NOT NULL default '0',
  created int(10) unsigned NOT NULL default '0',
  called int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (cbid),
  KEY createdcalled (created,called)
) ENGINE=INNODB;
