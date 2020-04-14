CREATE TABLE `hoplinks` (
`id` int(6) NOT NULL auto_increment,
`product_number` varchar(255) NOT NULL default '',
`product_name` varchar(255) NOT NULL default '',
`product_url` varchar(255) NOT NULL default '',
PRIMARY KEY  (`id`),
UNIQUE KEY `product_number` (`product_number`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;
