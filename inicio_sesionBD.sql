-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-03-2024 a las 00:16:49
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inicio_sesion`
--
CREATE DATABASE IF NOT EXISTS `inicio_sesion` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `inicio_sesion`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

DROP TABLE IF EXISTS `citas`;
CREATE TABLE `citas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `fecha_cita` date NOT NULL,
  `talleres_mecanicos_id` bigint(20) UNSIGNED NOT NULL,
  `usuarios_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `citas`
--

TRUNCATE TABLE `citas`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Fecha_registro` date NOT NULL,
  `personas_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `clientes`
--

TRUNCATE TABLE `clientes`;
--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `Fecha_registro`, `personas_id`, `created_at`, `updated_at`) VALUES
(1, '2024-03-11', 1, NULL, NULL),
(2, '0000-00-00', 2, NULL, NULL),
(3, '0000-00-00', 3, NULL, NULL),
(62, '2024-03-16', 62, NULL, NULL),
(71, '2024-03-18', 71, NULL, NULL),
(85, '2024-03-18', 85, NULL, NULL),
(86, '2024-03-18', 86, NULL, NULL),
(87, '2024-03-18', 87, NULL, NULL),
(88, '2024-03-18', 88, NULL, NULL),
(93, '2024-03-18', 93, NULL, NULL);
(89, '2024-03-18', 89, NULL, NULL),

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

DROP TABLE IF EXISTS `empleados`;
CREATE TABLE `empleados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `personas_id` bigint(20) UNSIGNED NOT NULL,
  `tipos_cargos_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `empleados`
--

TRUNCATE TABLE `empleados`;
--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `personas_id`, `tipos_cargos_id`, `created_at`, `updated_at`) VALUES
(4, 4, 3,  NULL, NULL),
(71, 71, 3, NULL, NULL),
(72, 74, 2,  NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

DROP TABLE IF EXISTS `estados`;
CREATE TABLE `estados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `estados`
--

TRUNCATE TABLE `estados`;
--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Tabasco', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `failed_jobs`
--

TRUNCATE TABLE `failed_jobs`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

DROP TABLE IF EXISTS `marcas`;
CREATE TABLE `marcas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `marcas`
--

TRUNCATE TABLE `marcas`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `migrations`
--

TRUNCATE TABLE `migrations`;
--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_03_03_205804_create_estados_table', 1),
(7, '2024_03_04_211013_create_marcas_table', 1),
(8, '2024_03_05_205753_create_municipios_table', 1),
(9, '2024_03_06_210000_create_talleres_mecanicos_table', 1),
(10, '2024_03_07_061852_create_personas_table', 1),
(11, '2024_03_07_205631_create_tipos_cargos_table', 1),
(12, '2024_03_07_211005_create_modelos_table', 1),
(13, '2024_03_11_205826_create_servicios_table', 1),
(14, '2024_03_13_184707_create_clientes_table', 1),
(15, '2024_03_14_061239_create_empleados_table', 1),
(16, '2024_03_15_210957_create_vehiculos_table', 1),
(17, '2024_03_18_162318_create_citas_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelos`
--

DROP TABLE IF EXISTS `modelos`;
CREATE TABLE `modelos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `marcas_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `modelos`
--

TRUNCATE TABLE `modelos`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

DROP TABLE IF EXISTS `municipios`;
CREATE TABLE `municipios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `estados_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `municipios`
--

TRUNCATE TABLE `municipios`;
--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id`, `nombre`, `estados_id`, `created_at`, `updated_at`) VALUES
(1, 'Balancán', 1, NULL, NULL),
(2, 'Cárdenas', 1, NULL, NULL),
(3, 'Centla', 1, NULL, NULL),
(4, 'Comalcalco', 1, NULL, NULL),
(5, 'Cunduacán', 1, NULL, NULL),
(6, 'Emiliano Zapata', 1, NULL, NULL),
(7, 'Huimanguillo', 1, NULL, NULL),
(8, 'Jalapa', 1, NULL, NULL),
(9, 'Jalpa de Méndez', 1, NULL, NULL),
(10, 'Jonuta', 1, NULL, NULL),
(11, 'Macuspana', 1, NULL, NULL),
(12, 'Nacajuca', 1, NULL, NULL),
(13, 'Paraíso', 1, NULL, NULL),
(14, 'Tacotalpa', 1, NULL, NULL),
(15, 'Teapa', 1, NULL, NULL),
(16, 'Tenosique', 1, NULL, NULL),
(17, 'Centro', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `password_resets`
--

TRUNCATE TABLE `password_resets`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `password_reset_tokens`
--

TRUNCATE TABLE `password_reset_tokens`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `personal_access_tokens`
--

TRUNCATE TABLE `personal_access_tokens`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

DROP TABLE IF EXISTS `personas`;
CREATE TABLE `personas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `correo` varchar(120) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `direccion` text NOT NULL,
  `taller_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `personas`
--

TRUNCATE TABLE `personas`;
--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `nombre`, `correo`, `telefono`, `direccion`, `taller_id`, `created_at`, `updated_at`) VALUES
(1, 'David Garcia Jeronimo', 'davidgarcia2809@gmail.com', '9363842008', 'Paseo de las estrellas lote 207 Edificio F departamento F-16', 1, NULL, NULL),
(2, 'Adipisci beatae alia', 'habat@mailinator.com', '10', 'Quasi ut quod dolori', 1, NULL, NULL),
(3, 'Dolorem inventore no', 'divivonapy@mailinator.com', '98', 'Dolor consequat Pro', 1, NULL, NULL),
(4, 'David Garcia Jeronimo', 'carlosgarciajeronimo190@gmail.com', '9361140771', 'que tal soy sech', 1, NULL, NULL),
(62, 'david', 'davidgarcia213132123@mailinator.com', '12', 'Et eveniet dolor an', 1, NULL, NULL),
(71, 'Voluptatem commodi', 'suguhyde@mailinator.com', '16', 'Qui quia unde dolore', 1, NULL, NULL),
(74, 'Ramon Adrian', 'ramonadrian@gmail.com', '9361140773', 'dasdasd', 2, NULL, NULL),
(85, 'Ramon Adrian Garcia Martinez', 'supermanagm@gmail.com', '9361105394', 'villa el cielo tumbulushal primera etapa enfrente del oxxo edificio c color naranja C-12', 2, NULL, NULL),
(86, 'Numquam laborum magn', 'xofytarot@mailinator.com', '66', 'Eos natus sapiente', 2, NULL, NULL),
(87, 'Voluptates quae aper', 'wosecotale@mailinator.com', '67', 'Commodo harum possim', 2, NULL, NULL),
(88, 'Repudiandae qui omni', 'dymujyp@mailinator.com', '71', 'Accusamus soluta vol', 2, NULL, NULL),
(89, 'Ipsa voluptatibus q', 'sago@mailinator.com', '61', 'Assumenda est praes', 2, NULL, NULL),
(90, 'Eos excepteur id e', 'haxozilejo@mailinator.com', '1', 'Voluptas ut vel sequ', 2, NULL, NULL),
(93, 'Rerum suscipit volup', 'deqawy@mailinator.com', '35', 'Nulla exercitationem', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

DROP TABLE IF EXISTS `servicios`;
CREATE TABLE `servicios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `talleres_mecanicos_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `servicios`
--

TRUNCATE TABLE `servicios`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talleres_mecanicos`
--

DROP TABLE IF EXISTS `talleres_mecanicos`;
CREATE TABLE `talleres_mecanicos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `correo` varchar(120) NOT NULL,
  `direccion` text NOT NULL,
  `municipios_id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `talleres_mecanicos`
--

TRUNCATE TABLE `talleres_mecanicos`;
--
-- Volcado de datos para la tabla `talleres_mecanicos`
--

INSERT INTO `talleres_mecanicos` (`id`, `nombre`, `telefono`, `correo`, `direccion`, `municipios_id`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 'Taller Mecanico David', '9361140771', 'davidgarcia2809@gmail.com', 'Ut aut laborum QuisUt aut laborum QuisUt aut laborum QuisUt aut laborum QuisUt aut laborum Quis', 17, 1, NULL, NULL),
(2, 'Taller Mecanico El deivid', '9361140772', 'davisdgarciajeronimo@gmail.com', 'el pepe', 11, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_cargos`
--

DROP TABLE IF EXISTS `tipos_cargos`;
CREATE TABLE `tipos_cargos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `taller_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `tipos_cargos`
--

TRUNCATE TABLE `tipos_cargos`;
--
-- Volcado de datos para la tabla `tipos_cargos`
--

INSERT INTO `tipos_cargos` (`id`, `nombre`, `taller_id`, `created_at`, `updated_at`) VALUES
(1, 'Gerente', 1, NULL, NULL),
(2, 'Electricista', 1, NULL, NULL),
(3, 'Hojalatero', 1, NULL, NULL),
(4, 'Empleado', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `users`
--

TRUNCATE TABLE `users`;
--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'David Garcia Jeronimo', 'davidgarcia2809@gmail.com', NULL, '$2y$12$A5rXox2ppHAs4i0cC.Ny/uNkeGciJ3wAhJEp44OgY5Q8t1sjdTW9O', NULL, '2024-03-19 18:26:53', '2024-03-19 18:26:53'),
(2, 'David Garcia Jeronimo', 'davisdgarciajeronimo@gmail.com', NULL, '$2y$12$f4pXXsjLX9JpL7XLnUBgH.HtsSlfNo5kwylw74fmidR.1pqCD3OLW', NULL, '2024-03-19 18:32:32', '2024-03-19 18:32:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

DROP TABLE IF EXISTS `vehiculos`;
CREATE TABLE `vehiculos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `clientes_id` bigint(20) UNSIGNED NOT NULL,
  `marcas_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `vehiculos`
--

TRUNCATE TABLE `vehiculos`;
--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `citas_talleres_mecanicos_id_foreign` (`talleres_mecanicos_id`),
  ADD KEY `citas_usuarios_id_foreign` (`usuarios_id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clientes_personas_id_foreign` (`personas_id`),
  ADD KEY `clientes_talleres_mecanicos_id_foreign` (`talleres_mecanicos_id`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empleados_personas_id_foreign` (`personas_id`),
  ADD KEY `empleados_tipos_cargos_id_foreign` (`tipos_cargos_id`),
  ADD KEY `empleados_talleres_mecanicos_id_foreign` (`talleres_mecanicos_id`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modelos`
--
ALTER TABLE `modelos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `modelos_marcas_id_foreign` (`marcas_id`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `municipios_estados_id_foreign` (`estados_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personas_taller_id_foreign` (`taller_id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `servicios_talleres_mecanicos_id_foreign` (`talleres_mecanicos_id`);

--
-- Indices de la tabla `talleres_mecanicos`
--
ALTER TABLE `talleres_mecanicos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `talleres_mecanicos_municipios_id_foreign` (`municipios_id`),
  ADD KEY `talleres_mecanicos_users_id_foreign` (`users_id`);

--
-- Indices de la tabla `tipos_cargos`
--
ALTER TABLE `tipos_cargos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipos_cargos_taller_id_foreign` (`taller_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehiculos_clientes_id_foreign` (`clientes_id`),
  ADD KEY `vehiculos_marcas_id_foreign` (`marcas_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `modelos`
--
ALTER TABLE `modelos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `talleres_mecanicos`
--
ALTER TABLE `talleres_mecanicos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipos_cargos`
--
ALTER TABLE `tipos_cargos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_talleres_mecanicos_id_foreign` FOREIGN KEY (`talleres_mecanicos_id`) REFERENCES `talleres_mecanicos` (`id`),
  ADD CONSTRAINT `citas_usuarios_id_foreign` FOREIGN KEY (`usuarios_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_personas_id_foreign` FOREIGN KEY (`personas_id`) REFERENCES `personas` (`id`),
  ADD CONSTRAINT `clientes_talleres_mecanicos_id_foreign` FOREIGN KEY (`talleres_mecanicos_id`) REFERENCES `talleres_mecanicos` (`id`);

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_personas_id_foreign` FOREIGN KEY (`personas_id`) REFERENCES `personas` (`id`),
  ADD CONSTRAINT `empleados_talleres_mecanicos_id_foreign` FOREIGN KEY (`talleres_mecanicos_id`) REFERENCES `talleres_mecanicos` (`id`),
  ADD CONSTRAINT `empleados_tipos_cargos_id_foreign` FOREIGN KEY (`tipos_cargos_id`) REFERENCES `tipos_cargos` (`id`);

--
-- Filtros para la tabla `modelos`
--
ALTER TABLE `modelos`
  ADD CONSTRAINT `modelos_marcas_id_foreign` FOREIGN KEY (`marcas_id`) REFERENCES `marcas` (`id`);

--
-- Filtros para la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD CONSTRAINT `municipios_estados_id_foreign` FOREIGN KEY (`estados_id`) REFERENCES `estados` (`id`);

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `personas_taller_id_foreign` FOREIGN KEY (`taller_id`) REFERENCES `talleres_mecanicos` (`id`);

--
-- Filtros para la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD CONSTRAINT `servicios_talleres_mecanicos_id_foreign` FOREIGN KEY (`talleres_mecanicos_id`) REFERENCES `talleres_mecanicos` (`id`);

--
-- Filtros para la tabla `talleres_mecanicos`
--
ALTER TABLE `talleres_mecanicos`
  ADD CONSTRAINT `talleres_mecanicos_municipios_id_foreign` FOREIGN KEY (`municipios_id`) REFERENCES `municipios` (`id`),
  ADD CONSTRAINT `talleres_mecanicos_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `tipos_cargos`
--
ALTER TABLE `tipos_cargos`
  ADD CONSTRAINT `tipos_cargos_taller_id_foreign` FOREIGN KEY (`taller_id`) REFERENCES `talleres_mecanicos` (`id`);

--
-- Filtros para la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD CONSTRAINT `vehiculos_clientes_id_foreign` FOREIGN KEY (`clientes_id`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `vehiculos_marcas_id_foreign` FOREIGN KEY (`marcas_id`) REFERENCES `marcas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
