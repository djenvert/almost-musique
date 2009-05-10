CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) default NULL,
  `slug` varchar(255) NOT NULL,
  `username` varchar(40) default NULL,
  `email` varchar(255) default NULL,
  `short_desc` varchar(40) default NULL,
  `long_desc` varchar(255) default NULL,
  `activity` tinyint(1) NOT NULL default '0',
  `password` varchar(40) NOT NULL,
  `group_id` int(11) default NULL,
  `signature` varchar(50) NOT NULL,
  `created` datetime default NULL,
  `modified` datetime default NULL,
  `last_login` datetime default NULL,
  `mobile_phone` varchar(20) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE `news` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `published` tinyint(1) NOT NULL default '0',
  `date_start` datetime default NULL,
  `date_end` datetime default NULL,
  `comment_count` int(11) NOT NULL default '0',
  `user_id` int(11) unsigned NOT NULL default '0',
  `created` datetime default NULL,
  `modified` datetime default NULL,
  PRIMARY KEY  (`id`),
  KEY `IDX_SLUG` (`slug`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE `projects` (
	`id` int(11) unsigned NOT NULL auto_increment,
	`title` varchar(255) NOT NULL,
  	`slug` varchar(255) NOT NULL,
	`text` text NOT NULL,
 	`date_start` datetime default NULL,
 	`date_end` datetime default NULL,
 	`published` tinyint(1) NOT NULL default '0',
	`user_id` int(11) unsigned NOT NULL default '0',
  	`created` datetime default NULL,
  	`modified` datetime default NULL,
	PRIMARY KEY  (`id`)
  ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE `posts` (
	`id` int(11) unsigned NOT NULL auto_increment,
	`title` varchar(255) NOT NULL,
	`slug` varchar(255) NOT NULL,
	`date` datetime NOT NULL default '0000-00-00 00:00:00',
	`content` longtext NOT NULL,
	`post_excerpt` text NOT NULL,
	`ping_status` varchar(20) NOT NULL default 'open',
	`post_name` varchar(200) NOT NULL default '',
	`to_ping` text NOT NULL,
	`pinged` text NOT NULL,
	`guid` varchar(255) NOT NULL default '',
	`comment_count` bigint(20) NOT NULL default '0',
	`published` tinyint(1) NOT NULL default '0',
	`user_id` int(11) unsigned NOT NULL default '0',
	`created` datetime default NULL,
	`modified` datetime default NULL,
  PRIMARY KEY  (`id`),
  KEY `title` (`title`),
  KEY `slug` (`slug`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `search_index` (
  `id` int(10) NOT NULL auto_increment,
  `model` varchar(100) default NULL,
  `model_id` int(10) default NULL,
  `data` longtext default NULL,
  `created` datetime default NULL,
  `modified` datetime default NULL,
  PRIMARY KEY  (`id`),
  KEY `association_key` (`model`,`model_id`),
  FULLTEXT KEY `data` (`data`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(160) default NULL,
  `slug` varchar(160) default NULL,
  `count` int(10) NOT NULL default '0',
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
);

DROP TABLE IF EXISTS `tagged`;
CREATE TABLE `tagged` (
  `id` int(10) NOT NULL auto_increment,
  `tag_id` int(10) default NULL,
  `model` varchar(100) default NULL,
  `model_id` int(10) default NULL,
  PRIMARY KEY  (`id`),
  KEY `tag_id` (`tag_id`),
  KEY `model` (`model`),
  KEY `model_id` (`model_id`)
);
