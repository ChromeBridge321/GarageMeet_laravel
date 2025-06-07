-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-04-2024 a las 13:22:05
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `rol` int(11) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `estados`;
CREATE TABLE `estados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `municipios`;
CREATE TABLE `municipios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `estados_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



DROP TABLE IF EXISTS `citas`;
CREATE TABLE `citas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nombre` varchar(60) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `Correo` varchar(120) NOT NULL,
  `Vehiculo` varchar(60) NOT NULL,
  `Placas` varchar(60) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `fecha_cita` date NOT NULL,
  `taller_id` bigint(20) UNSIGNED NOT NULL,
  `usuarios_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `observaciones` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

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

-- Estructura de tabla para la tabla `clientes`
-DROP TABLE IF EXISTS `personas`;
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
-

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Fecha_registro` date NOT NULL,
  `personas_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
DROP TABLE IF EXISTS `tipos_cargos`;
CREATE TABLE `tipos_cargos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `taller_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--


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

-- --------------------------------------------------------

--
-- EsDROP TABLE IF EXISTS `servicios`;
CREATE TABLE `servicios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `taller_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `vehiculo` varchar(60) NOT NULL,
  `fecha_servicio` date NOT NULL,
  `Servicios` text NOT NULL,
  `Placas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- tructura de tabla para la tabla `modelos`
--

DROP TABLE IF EXISTS `modelos`;
CREATE TABLE `modelos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `marcas_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

DROP TABLE IF EXISTS `vehiculos`;
CREATE TABLE `vehiculos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `clientes_id` bigint(20) UNSIGNED NOT NULL,
  `marcas_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Estructura de tabla para la tabla `municipios`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

--------------------------------------------------------

--
-- Estructura de tabla para la tabla `talleres_mecanicos`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_cargos`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

--
-- Índices para tablas volcadas
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `citas_talleres_mecanicos_id_foreign` (`taller_id`),
  ADD KEY `citas_usuarios_id_foreign` (`usuarios_id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clientes_personas_id_foreign` (`personas_id`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empleados_personas_id_foreign` (`personas_id`),
  ADD KEY `empleados_tipos_cargos_id_foreign` (`tipos_cargos_id`);

--
-- Indices de la tabla `estados`
--

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
  ADD KEY `servicios_talleres_mecanicos_id_foreign` (`taller_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modelos`
--
ALTER TABLE `modelos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `talleres_mecanicos`
--
ALTER TABLE `talleres_mecanicos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipos_cargos`
--
ALTER TABLE `tipos_cargos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `citas_talleres_mecanicos_id_foreign` FOREIGN KEY (`taller_id`) REFERENCES `talleres_mecanicos` (`id`),
  ADD CONSTRAINT `citas_usuarios_id_foreign` FOREIGN KEY (`usuarios_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_personas_id_foreign` FOREIGN KEY (`personas_id`) REFERENCES `personas` (`id`);

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_personas_id_foreign` FOREIGN KEY (`personas_id`) REFERENCES `personas` (`id`),
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
  ADD CONSTRAINT `servicios_talleres_mecanicos_id_foreign` FOREIGN KEY (`taller_id`) REFERENCES `talleres_mecanicos` (`id`);

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
