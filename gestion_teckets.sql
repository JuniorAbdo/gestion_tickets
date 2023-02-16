-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : jeu. 16 fév. 2023 à 18:47
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_teckets`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `intitule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `intitule`) VALUES
(1, 'Client d\'enrôlement\r\n'),
(4, 'Connectivité/ Electricité'),
(2, 'Logiciels'),
(3, 'Matériels');

-- --------------------------------------------------------

--
-- Structure de la table `cscs`
--

CREATE TABLE `cscs` (
  `id` int(10) UNSIGNED NOT NULL,
  `libelle_csc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cscs`
--

INSERT INTO `cscs` (`id`, `libelle_csc`) VALUES
(1, '(Cercle)CERLE REHAMNA/(Caidat) BOUCHANE'),
(2, '(Cercle)CERLE REHAMNA/(Caidat)LABRIKYINE'),
(3, '(Cercle)CERLE REHAMNA/(Caidat)OULED TMIM'),
(4, '(Cercle)CERLE REHAMNA/(Caidat)SKHOURS'),
(5, '(Cercle)SIDI BOUOTHMANE/(Caidat)LOTA'),
(6, '(Cercle)SIDI BOUOTHMANE/(Caidat)RAS EL AIN'),
(7, '(Cercle)SIDI BOUOTHMANE/(Caidat)SIDI BOUOTHMANE'),
(8, '(Pachalik)SIDI BOUOTHMANE'),
(9, '(Cercle)SIDI BOUOTHMANE/(Caidat)JBILAT'),
(10, '(Pachalik)BEN GUERIR /(Annexes administratives)Annexe administrative 2'),
(11, '(Pachalik)BEN GUERIR /(Annexes administratives)    1 Annexe administrative '),
(12, '(Cercle)SIDI BOUOTHMANE/(Caidat)LABHIRA '),
(13, '(Pachalik)BEN GUERIR /(Annexes administratives)Annexe Administrative 3');

-- --------------------------------------------------------

--
-- Structure de la table `etats`
--

CREATE TABLE `etats` (
  `id` int(10) UNSIGNED NOT NULL,
  `intitule_etat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'initier'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etats`
--

INSERT INTO `etats` (`id`, `intitule_etat`) VALUES
(1, 'initier'),
(2, 'en cour');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_02_02_203948_create_tickets_table', 1),
(7, '2023_02_02_204026_create_categories_table', 1),
(8, '2023_02_02_204117_create_type_categories_table', 1),
(9, '2023_02_03_054314_create_cscs_table', 1),
(10, '2023_02_03_054500_create_etats_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sous_categories`
--

CREATE TABLE `sous_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `intitule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sous_categories`
--

INSERT INTO `sous_categories` (`id`, `intitule`, `categorie_id`) VALUES
(1, 'Blocage Regclient', 1),
(2, 'Capture biométrique', 1),
(3, 'Chargement des paquets', 1),
(4, 'Login/MDP', 1),
(5, 'Public_Portal', 2),
(6, 'Windows / Systèmes', 2),
(7, 'Validation Manuelle', 2),
(8, 'BI', 2),
(9, 'CRM', 2),
(10, 'Matériels Informatiques', 3),
(11, 'Capteurs Biométriques', 3),
(12, 'Electricité', 4),
(13, 'Réseau', 4);

-- --------------------------------------------------------

--
-- Structure de la table `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number_ticket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `csc_id` int(10) UNSIGNED NOT NULL,
  `etat_id` int(10) UNSIGNED NOT NULL,
  `categorie_id` int(10) UNSIGNED NOT NULL,
  `sous_categorie_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tickets`
--

INSERT INTO `tickets` (`id`, `number_ticket`, `title`, `description`, `pice`, `user_id`, `csc_id`, `etat_id`, `categorie_id`, `sous_categorie_id`, `created_at`, `updated_at`) VALUES
(1, 'TST40', 'Eos cupiditate culpa odit ut.', 'Nobis voluptas dolorum ipsam recusandae. In similique id magnam eos ipsam sed. Magni quia repellendus vitae reiciendis cum sit ad. Recusandae distinctio quidem officia occaecati quisquam ut incidunt.', '', 1, 7, 1, 4, 10, '2015-11-15 22:04:56', '2017-07-14 15:24:47'),
(2, 'TST3', 'Dolor pariatur ratione omnis.', 'Quia sequi tempore fugit saepe. Pariatur voluptas quo nihil aperiam similique quae magni. Laudantium voluptas praesentium mollitia ut tempore error dolores.', '', 1, 12, 1, 4, 2, '2019-02-14 04:55:44', '2016-07-14 02:59:56'),
(3, 'TST79', 'Illo est aut quam.', 'Velit ipsum deleniti ut dolores error fugiat. Cumque non nesciunt dolores eos laboriosam quasi non. Quia maiores rerum enim debitis vel quis.', '', 1, 10, 4, 2, 13, '2013-06-20 04:26:42', '2016-03-27 08:39:59'),
(4, 'TST1', 'Est quia quaerat distinctio.', 'Aperiam sequi nihil nulla maiores. Perferendis ducimus modi et quod est consectetur ea ut. Ex laboriosam est quae perferendis.', '', 1, 2, 4, 3, 5, '2014-10-15 06:04:28', '2016-12-13 00:18:09'),
(5, 'TST66', 'Sed velit atque omnis sint.', 'Iusto et commodi ut voluptatem occaecati. Tenetur similique expedita ab cum nulla. Aut provident dolorem voluptatum quia veritatis quis.', '', 1, 7, 4, 1, 15, '2014-09-09 10:50:17', '2016-08-30 14:18:06'),
(6, 'TST69', 'Aut iusto facilis qui.', 'Molestiae soluta ut a dolor rerum et quidem. Atque harum quae et occaecati dolores commodi vero iste. Est quas quis minima rerum magni eos non. Sapiente aut nesciunt est quo aut voluptatem.', '', 1, 3, 3, 2, 3, '2020-02-28 14:31:19', '2021-10-24 02:57:53'),
(7, 'TST97', 'Ut in eos laborum commodi.', 'In doloremque voluptatem inventore. Voluptatum voluptas perferendis consequatur molestiae quia et. Assumenda at et reprehenderit.', '', 1, 9, 1, 3, 12, '2021-03-30 20:22:40', '2019-03-04 13:35:30'),
(15, 'RSU8', 'titre titre', 'titre titre', NULL, 1, 2, 2, 4, 6, '2023-02-21 04:54:56', '2023-03-01 04:54:56'),
(16, 'RSU9', 'hello', 'hello', NULL, 1, 3, 2, 4, 2, '2023-02-21 04:51:17', '2023-02-21 04:51:17'),
(17, 'RSU_11', 'test', 'test', NULL, 1, 7, 1, 1, 7, '2023-02-15 04:07:37', '2023-03-01 04:07:37'),
(18, 'RSU_12', 'test', 'test test', NULL, 1, 8, 2, 1, 3, '2023-02-16 04:24:45', '2023-03-01 04:24:45'),
(19, 'RHU', 'fdfdsqfds', 'hddfdq', 'regqsg', 1, 2, 1, 1, 7, '2023-02-17 05:38:15', '2023-02-28 05:38:15');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` char(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `droit` enum('rapporteur','responsable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'rapporteur',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `phone`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `role`, `droit`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ABDESLAM ALAOUIMHAMDI', 'abdoalaouii1995@gmail.com', NULL, NULL, '$2y$10$McFSnBkYLLL3DgjIeRUCUOGz3iVUl2X5mhuh.Vil93P5XWTsUFgH2', NULL, NULL, NULL, 'user', 'responsable', NULL, '2023-02-15 12:04:43', '2023-02-15 12:04:43');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_intitule_unique` (`intitule`);

--
-- Index pour la table `cscs`
--
ALTER TABLE `cscs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etats`
--
ALTER TABLE `etats`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `sous_categories`
--
ALTER TABLE `sous_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sous_categories_intitule_unique` (`intitule`),
  ADD KEY `sous_categories_categorie_id_foreign` (`categorie_id`);

--
-- Index pour la table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tickets_number_ticket_unique` (`number_ticket`),
  ADD KEY `tickets_user_id_foreign` (`user_id`),
  ADD KEY `tickets_csc_id_foreign` (`csc_id`),
  ADD KEY `tickets_etat_id_foreign` (`etat_id`),
  ADD KEY `tickets_categorie_id_foreign` (`categorie_id`),
  ADD KEY `tickets_sous_categorie_id_foreign` (`sous_categorie_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `cscs`
--
ALTER TABLE `cscs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `etats`
--
ALTER TABLE `etats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `sous_categories`
--
ALTER TABLE `sous_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `sous_categories`
--
ALTER TABLE `sous_categories`
  ADD CONSTRAINT `sous_categories_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`);

--
-- Contraintes pour la table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `tickets_csc_id_foreign` FOREIGN KEY (`csc_id`) REFERENCES `cscs` (`id`),
  ADD CONSTRAINT `tickets_etat_id_foreign` FOREIGN KEY (`etat_id`) REFERENCES `etats` (`id`),
  ADD CONSTRAINT `tickets_sous_categorie_id_foreign` FOREIGN KEY (`sous_categorie_id`) REFERENCES `sous_categories` (`id`),
  ADD CONSTRAINT `tickets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
