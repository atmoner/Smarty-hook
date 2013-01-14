--
-- Structure de la table `plugins`
--

CREATE TABLE IF NOT EXISTS `plugins` (
  `filename` varchar(127) COLLATE utf8_bin NOT NULL DEFAULT '',
  `action` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`filename`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
