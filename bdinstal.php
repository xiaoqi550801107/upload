<?php

//on fait la connexion � mysql
mysql_connect(MYSQL_SERVER,  MYSQL_USER, MYSQL_PWD);
mysql_select_db(MYSQL_DB);

$requete = "CREATE TABLE IF NOT EXISTS `".TABLE_PREFIX."utilisateur`(
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`pseudo` varchar(255) NOT NULL,
	`nom` varchar(255) NOT NULL,
	`prenom` varchar(255) NOT NULL,
	`mot_de_passe` varchar(255) NOT NULL,
	`mail` varchar(255) NOT NULL,
	`date_inscription` date NOT NULL,
	`date_anniversaire` date NOT NULL,
	`signature` varchar(255) DEFAULT NULL,
	PRIMARY KEY (`id`)
)";
mysql_query($requete);

//on se d�connecte
mysql_close();