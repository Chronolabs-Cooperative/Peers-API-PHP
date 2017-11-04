
# Table structure for table `peers`
#

CREATE TABLE peers (
  pid mediumint(32) unsigned NOT NULL auto_increment,
  uid mediumint(8) unsigned NOT NULL default 0,
  company varchar(100) NOT NULL default '',
  license varchar(60) NOT NULL default '',
  email varchar(60) NOT NULL default '',
  protocol varchar(10) NOT NULL default '',
  port varchar(10) NOT NULL default '',
  host varchar(100) NOT NULL default '',
  path varchar(100) NOT NULL default '',
  version varchar(60) NOT NULL default '',
  type varchar(20) NOT NULL default '',
  PRIMARY KEY  (pid),
  KEY company (company),
  KEY license (license),
  KEY protocolhostpathversion (protocol,host,path,version),
  KEY type (type)
) ENGINE=INNODB;


# Table structure for table `users`
#

CREATE TABLE users (
  uid mediumint(255) unsigned NOT NULL auto_increment,
  name varchar(60) NOT NULL default '',
  uname varchar(25) NOT NULL default '',
  email varchar(60) NOT NULL default '',
  hash varchar(12) NOT NULL default '-----------',
  url varchar(100) NOT NULL default '',
  callback tinytext,
  api_avatar_file varchar(64) NOT NULL default 'blank.gif',
  api_avatar_path varchar(128) NOT NULL default 'uploads/avatars',
  api_regdate int(10) unsigned NOT NULL default '0',
  api_from varchar(100) NOT NULL default '',
  api_sig tinytext,
  actkey varchar(8) NOT NULL default '',
  pass varchar(255) NOT NULL default '',
  hits mediumint(8) unsigned NOT NULL default '0',
  attachsig tinyint(1) unsigned NOT NULL default '0',
  timezone varchar(150) NOT NULL default '',
  last_online int(10) unsigned NOT NULL default '0',
  last_login int(10) unsigned NOT NULL default '0',
  api_mailok tinyint(1) unsigned NOT NULL default '1',
  salt_alpha tinytext,
  salt_charley tinytext,
  salt_delta tinytext,
  salt_gamma enum('salt_alpha', 'salt_charley', 'salt_delta', 'salt_alpha + salt_alpha', 'salt_charley + salt_alpha', 'salt_delta + salt_alpha', 'salt_alpha + salt_charley', 'salt_charley + salt_charley', 'salt_delta + salt_charley', 'salt_alpha + salt_delta', 'salt_charley + salt_delta', 'salt_delta + salt_delta', 'none') NOT NULL DEFAULT 'none',
  PRIMARY KEY  (uid),
  KEY uname (uname),
  KEY email (email),
  KEY uiduname (uid,uname)
) ENGINE=INNODB;
