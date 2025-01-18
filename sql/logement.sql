CREATE TABLE `logement` (
    `id_logement` int(11) NOT NULL,
    `titre` varchar(50) NOT NULL,
    `adresse` varchar(100) NOT NULL,
    `ville` varchar(50) NOT NULL,
    `cp` int(11) NOT NULL,
    `surface` int(11) NOT NULL,
    `prix` int(11) NOT NULL,
    `photo` text NOT NULL,
    `type` varchar(20) NOT NULL,
    `description` text NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

ALTER TABLE `logement` ADD PRIMARY KEY (`id_logement`);

ALTER TABLE `logement`
MODIFY `id_logement` int(11) NOT NULL AUTO_INCREMENT;