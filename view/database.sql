-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 20 déc. 2023 à 13:06
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `helpdesk-ticketing`
--

-- --------------------------------------------------------

--
-- Structure de la table `assignation`
--

CREATE TABLE `assignation` (
  `id_user` int(11) NOT NULL,
  `id_ticket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `assignation`
--

INSERT INTO `assignation` (`id_user`, `id_ticket`) VALUES
(1, 100),
(2, 100),
(3, 100),
(1, 103),
(2, 103),
(3, 103),
(1, 105),
(2, 105),
(1, 107),
(1, 109),
(2, 109),
(3, 109),
(1, 111),
(4, 111),
(1, 113),
(2, 113),
(3, 113),
(1, 114),
(2, 114),
(3, 114),
(1, 115),
(3, 115),
(4, 115),
(1, 117),
(1, 118),
(2, 118);

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `contenu` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `id_user` int(11) NOT NULL,
  `id_ticktet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `priorite`
--

CREATE TABLE `priorite` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `color` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `priorite`
--

INSERT INTO `priorite` (`id`, `title`, `color`) VALUES
(1, 'High', 'red'),
(2, 'Medium', 'orange'),
(3, 'Low', 'green');

-- --------------------------------------------------------

--
-- Structure de la table `statu`
--

CREATE TABLE `statu` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `color` varchar(250) NOT NULL,
  `svg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `statu`
--

INSERT INTO `statu` (`id`, `title`, `color`, `svg`) VALUES
(1, 'to do', 'blue', '<svg xmlns=\"http://www.w3.org/2000/svg\" class=\" text-gray-500 fill-blue-500\" width=\"34\" height=\"34\" viewBox=\"0 0 20 20\">\n                            <path fill-rule=\"evenodd\" d=\"M10 2.5a7.5 7.5 0 100 15 7.5 7.5 0 000-15zM9 4h2v5H9zm0 7h2v2H9z\" clip-rule=\"evenodd\"></path>\n                        </svg>'),
(2, 'in progress', 'orange', '   <svg xmlns:osb=\"http://www.openswatchbook.org/uri/2009/osb\" xmlns:dc=\"http://purl.org/dc/elements/1.1/\" xmlns:cc=\"http://creativecommons.org/ns#\" xmlns:rdf=\"http://www.w3.org/1999/02/22-rdf-syntax-ns#\" xmlns:svg=\"http://www.w3.org/2000/svg\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:sodipodi=\"http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd\" xmlns:inkscape=\"http://www.inkscape.org/namespaces/inkscape\" width=\"34\" height=\"34\" id=\"svg3035\" version=\"1.1\" inkscape:version=\"0.48.4 r9939\" sodipodi:docname=\"Work_in_progress_icon.svg\">                             <metadata id=\"metadata3045\">                                 <rdf:RDF>                                     <cc:Work rdf:about=\"\">                                         <dc:format>image/svg+xml</dc:format>                                         <dc:type rdf:resource=\"http://purl.org/dc/dcmitype/StillImage\" />                                         <dc:title />                                     </cc:Work>                                 </rdf:RDF>                             </metadata>                             <defs id=\"defs3043\">                                 <linearGradient inkscape:collect=\"always\" id=\"linearGradient3825\" osb:paint=\"gradient\">                                     <stop style=\"stop-color:#000000;stop-opacity:1;\" offset=\"0\" id=\"stop3827\" />                                     <stop style=\"stop-color:#000000;stop-opacity:0;\" offset=\"1\" id=\"stop3829\" />                                 </linearGradient>                             </defs>                             <sodipodi:namedview pagecolor=\"#ffffff\" bordercolor=\"#666666\" borderopacity=\"1\" objecttolerance=\"10\" gridtolerance=\"10\" guidetolerance=\"10\" inkscape:pageopacity=\"0\" inkscape:pageshadow=\"2\" inkscape:window-width=\"970\" inkscape:window-height=\"773\" id=\"namedview3041\" showgrid=\"false\" inkscape:zoom=\"1\" inkscape:cx=\"275.92219\" inkscape:cy=\"102.76212\" inkscape:window-x=\"57\" inkscape:window-y=\"34\" inkscape:window-maximized=\"0\" inkscape:current-layer=\"svg3035\" />                             <path d=\"m 16.977523,0.24095147 c -9.2629169,0 -16.73280045,7.51449143 -16.73280045,16.77740253 0,9.262912 7.46988355,16.777403 16.73280045,16.777403 9.262917,0 16.777413,-7.514491 16.777413,-16.777403 0,-9.2629111 -7.514496,-16.77740253 -16.777413,-16.77740253 z m 0,4.14972823 c 6.966927,0 12.627682,5.6607523 12.627682,12.6276743 0,6.966923 -5.660755,12.583053 -12.627682,12.583053 -6.966937,0 -12.5830596,-5.61613 -12.5830596,-12.583053 0,-6.966922 5.6161226,-12.6276743 12.5830596,-12.6276743 z\" style=\"color:#000000;fill:#000000;fill-opacity:0.08333333;stroke:#565656;stroke-width:0.5;stroke-opacity:0.19607843\" id=\"path3037\" />                             <path d=\"M 16.903174,2.2294442 A 14.680199,14.680208 0 0 0 2.7231982,13.110132\" style=\"fill:none;stroke:#000000;stroke-width:2.25834560000000018;stroke-linecap:round;stroke-opacity:0.5\" id=\"path3039\" inkscape:connector-curvature=\"0\" />                             <path inkscape:connector-curvature=\"0\" d=\"m 26.534976,23.996706 -11.936899,0.01534 c -0.108125,-0.0098 -0.186444,-0.03442 -0.145509,-0.163431 l 4.386175,-5.622443 c 0.15169,-0.214972 0.380542,-0.331209 0.61078,-0.324599 l 2.204073,-0.0047 c 0.357459,-1.46e-4 0.495297,0.103309 0.691991,0.35028 l 4.295045,5.546242 c 0.03931,0.09758 0.004,0.195158 -0.105656,0.203308 z\" style=\"font-size:12px;fill-rule:evenodd;fill:#550000;stroke:#d95b00;stroke-opacity:1;stroke-width:0.4;stroke-miterlimit:4;stroke-dasharray:none\" id=\"path633\" />                             <rect width=\"3.0200865\" height=\"6.0596466\" rx=\"0.54454094\" ry=\"0.57430226\" x=\"17.040688\" y=\"4.1348033\" transform=\"matrix(0.88544923,0.46473612,-0.40805309,0.9129582,0,0)\" style=\"font-size:12px;fill:#000002;fill-rule:evenodd\" id=\"rect613\" />                             <rect width=\"4.8600006\" height=\"1.5795\" rx=\"0.4574118\" ry=\"0.38880002\" x=\"10.800983\" y=\"11.82098\" style=\"font-size:12px;fill-rule:evenodd\" id=\"rect615\" />                             <rect width=\"4.5291238\" height=\"1.3434505\" rx=\"0.42627051\" ry=\"0.3306956\" x=\"-5.9359756\" y=\"15.664654\" transform=\"matrix(0.46868988,-0.88336278,0.74463494,0.66747195,0,0)\" style=\"font-size:12px;fill-rule:evenodd\" id=\"rect616\" />                             <rect width=\"10.78014\" height=\"0.77215397\" rx=\"0.98051679\" ry=\"0.13222297\" x=\"14.421082\" y=\"9.101388\" transform=\"matrix(0.89042304,0.45513385,-0.44770212,0.89418276,0,0)\" style=\"font-size:12px;fill-rule:evenodd\" id=\"rect617\" />                             <g transform=\"matrix(0.0486,0,0,0.0486,-2.1564664,-1.2326814)\" id=\"g3295\">                                 <rect id=\"rect618\" style=\"font-size:12px;fill-rule:evenodd\" transform=\"matrix(-0.05720584,-0.9983624,0.9970356,-0.0769422,0,0)\" y=\"335.38721\" x=\"-440.25488\" ry=\"6.6537695\" rx=\"12.701341\" height=\"27.030939\" width=\"134.95171\" />                             </g>                             <ellipse sodipodi:ry=\"32.5\" sodipodi:rx=\"31.25\" sodipodi:cy=\"467.36218\" sodipodi:cx=\"418.75\" cx=\"418.75\" cy=\"467.36218\" rx=\"31.25\" ry=\"32.5\" transform=\"matrix(0.04653805,0,0,0.04727828,-2.8941023,-11.004086)\" style=\"font-size:12px;fill-rule:evenodd;stroke-width:1\" id=\"path619\" />                             <rect width=\"3.7940228\" height=\"1.5180751\" rx=\"0.35708451\" ry=\"0.37368011\" x=\"-22.917742\" y=\"7.5528417\" transform=\"matrix(-0.23400793,-0.97223469,0.98564518,-0.16883003,0,0)\" style=\"font-size:12px;fill-rule:evenodd\" id=\"rect621\" />                             <rect width=\"3.8024707\" height=\"1.5185478\" rx=\"0.35787964\" ry=\"0.37379646\" x=\"-22.943907\" y=\"12.612084\" transform=\"matrix(-0.00756986,-0.99997135,0.99703364,0.07696705,0,0)\" style=\"font-size:12px;fill-rule:evenodd\" id=\"rect622\" />                             <rect width=\"7.6159029\" height=\"1.552925\" rx=\"0.71679103\" ry=\"0.38225853\" x=\"-14.651141\" y=\"18.132904\" transform=\"matrix(0.49470811,-0.8690592,0.81786715,0.5754071,0,0)\" style=\"font-size:12px;fill-rule:evenodd\" id=\"rect623\" />                         </svg>'),
(3, 'done', 'green', '<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-green-500  fill-green-500\" viewBox=\"0 0 20 20\">\n                                <path fill-rule=\"evenodd\" d=\"M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z\" clip-rule=\"evenodd\"></path>\n                            </svg>');

-- --------------------------------------------------------

--
-- Structure de la table `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `nameTag` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tag`
--

INSERT INTO `tag` (`id`, `nameTag`) VALUES
(1, 'front-end'),
(2, 'back-end'),
(3, 'updat'),
(4, 'delet'),
(5, 'bug');

-- --------------------------------------------------------

--
-- Structure de la table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `titre` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_statu` int(11) NOT NULL,
  `id_priorite` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `ticket`
--

INSERT INTO `ticket` (`id`, `titre`, `description`, `id_user`, `id_statu`, `id_priorite`, `created_at`) VALUES
(110, 'mlkeznfqjslfd', 'mlaqeksfndjg', 8, 1, 2, '2023-12-20 11:25:17'),
(111, 'mlkeznfqjslfd', 'mlaqeksfndjg', 8, 1, 2, '2023-12-20 11:25:17'),
(112, 'Labore culpa et quia', 'At sed quibusdam dol', 8, 1, 3, '2023-12-20 11:50:11'),
(113, 'Labore culpa et quia', 'At sed quibusdam dol', 8, 2, 3, '2023-12-20 11:50:11'),
(114, 'dzflseg', 'qzersgefd', 9, 1, 1, '2023-12-20 11:51:32'),
(115, 'lhazbrqg', 'kjqwdgbo', 9, 3, 2, '2023-12-20 11:51:53'),
(117, 'klsjdnq', 'mlqkfn', 9, 1, 1, '2023-12-20 12:39:50'),
(118, 'lrskdgx', 'qskldfgd', 9, 1, 1, '2023-12-20 12:44:46');

-- --------------------------------------------------------

--
-- Structure de la table `tickettag`
--

CREATE TABLE `tickettag` (
  `id_tickt` int(11) NOT NULL,
  `id_tag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tickettag`
--

INSERT INTO `tickettag` (`id_tickt`, `id_tag`) VALUES
(100, 1),
(100, 2),
(100, 3),
(103, 1),
(103, 3),
(103, 4),
(105, 1),
(105, 3),
(107, 1),
(107, 2),
(109, 1),
(109, 2),
(111, 1),
(111, 2),
(111, 3),
(113, 1),
(113, 2),
(113, 3),
(113, 4),
(114, 2),
(114, 3),
(114, 4),
(115, 2),
(115, 3),
(115, 4),
(117, 1),
(118, 2),
(118, 3);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Geraldine Hays', 'loveh@mailinator.com', '0'),
(2, 'Zephr Bernard', 'xupizaquh@mailinator.com', '0'),
(3, 'Jolene Collins', 'veheby@mailinator.com', '0'),
(4, 'Inga Robles', 'wipaquf@mailinator.com', '0'),
(5, 'Oliver Fox', 'hixeq@mailinator.com', '0'),
(6, 'Lacy Moses', 'mokhlis@gmail.com', '0'),
(7, 'mokhlis', 'admin@admin.com', '$2y$10$KgMgakPsgg2BGyJhpizOtOQmSg3DAdWTmn1SvoTiefdSr5KF8WjIq'),
(8, 'mokhlis', 'belhajmokhlis@gmail.com', '$2y$10$yx.r.RiDY8LvKbF0I1Xx8eoQCivS.4BODQeIoaaMwPZ4l7ZgmrheC'),
(9, 'test', 'test@gmail.com', '$2y$10$/u/f4nnCZz7TQyCU20Yixu//NkO/YLJ3lxKx7A2ZxE152cymQeuRm');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `assignation`
--
ALTER TABLE `assignation`
  ADD KEY `id_ticket` (`id_ticket`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_ticktet` (`id_ticktet`);

--
-- Index pour la table `priorite`
--
ALTER TABLE `priorite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `statu`
--
ALTER TABLE `statu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_statu` (`id_statu`),
  ADD KEY `id_priorite` (`id_priorite`);

--
-- Index pour la table `tickettag`
--
ALTER TABLE `tickettag`
  ADD KEY `id_tickt` (`id_tickt`),
  ADD KEY `tickettag_ibfk_1` (`id_tag`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `priorite`
--
ALTER TABLE `priorite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `statu`
--
ALTER TABLE `statu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `assignation`
--
ALTER TABLE `assignation`
  ADD CONSTRAINT `assignation_ibfk_1` FOREIGN KEY (`id_ticket`) REFERENCES `ticket` (`id`),
  ADD CONSTRAINT `assignation_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `commentaires_ibfk_2` FOREIGN KEY (`id_ticktet`) REFERENCES `ticket` (`id`);

--
-- Contraintes pour la table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`id_statu`) REFERENCES `statu` (`id`),
  ADD CONSTRAINT `ticket_ibfk_3` FOREIGN KEY (`id_priorite`) REFERENCES `priorite` (`id`);

--
-- Contraintes pour la table `tickettag`
--
ALTER TABLE `tickettag`
  ADD CONSTRAINT `tickettag_ibfk_1` FOREIGN KEY (`id_tag`) REFERENCES `tag` (`id`),
  ADD CONSTRAINT `tickettag_ibfk_2` FOREIGN KEY (`id_tickt`) REFERENCES `ticket` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
