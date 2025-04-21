

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

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

CREATE TABLE `estados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `municipios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `estados_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



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

CREATE TABLE `clientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Fecha_registro` date NOT NULL,
  `personas_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `tipos_cargos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `taller_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `empleados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `personas_id` bigint(20) UNSIGNED NOT NULL,
  `tipos_cargos_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `marcas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;





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


CREATE TABLE `modelos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `marcas_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `vehiculos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `clientes_id` bigint(20) UNSIGNED NOT NULL,
  `marcas_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);




ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);




ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `citas_talleres_mecanicos_id_foreign` (`taller_id`),
  ADD KEY `citas_usuarios_id_foreign` (`usuarios_id`);




ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clientes_personas_id_foreign` (`personas_id`);


ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empleados_personas_id_foreign` (`personas_id`),
  ADD KEY `empleados_tipos_cargos_id_foreign` (`tipos_cargos_id`);



ALTER TABLE `modelos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `modelos_marcas_id_foreign` (`marcas_id`);



ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `municipios_estados_id_foreign` (`estados_id`);


ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personas_taller_id_foreign` (`taller_id`);



ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `servicios_talleres_mecanicos_id_foreign` (`taller_id`);




ALTER TABLE `talleres_mecanicos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `talleres_mecanicos_municipios_id_foreign` (`municipios_id`),
  ADD KEY `talleres_mecanicos_users_id_foreign` (`users_id`);



ALTER TABLE `tipos_cargos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipos_cargos_taller_id_foreign` (`taller_id`);



ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);



ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehiculos_clientes_id_foreign` (`clientes_id`),
  ADD KEY `vehiculos_marcas_id_foreign` (`marcas_id`);



ALTER TABLE `citas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;




ALTER TABLE `clientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;




ALTER TABLE `empleados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;




ALTER TABLE `estados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;




ALTER TABLE `marcas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;




ALTER TABLE `modelos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;




ALTER TABLE `municipios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;




ALTER TABLE `personas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;




ALTER TABLE `servicios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;




ALTER TABLE `talleres_mecanicos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;




ALTER TABLE `tipos_cargos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;




ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;




ALTER TABLE `vehiculos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;








ALTER TABLE `citas`
  ADD CONSTRAINT `citas_talleres_mecanicos_id_foreign` FOREIGN KEY (`taller_id`) REFERENCES `talleres_mecanicos` (`id`),
  ADD CONSTRAINT `citas_usuarios_id_foreign` FOREIGN KEY (`usuarios_id`) REFERENCES `users` (`id`);




ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_personas_id_foreign` FOREIGN KEY (`personas_id`) REFERENCES `personas` (`id`);




ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_personas_id_foreign` FOREIGN KEY (`personas_id`) REFERENCES `personas` (`id`),
  ADD CONSTRAINT `empleados_tipos_cargos_id_foreign` FOREIGN KEY (`tipos_cargos_id`) REFERENCES `tipos_cargos` (`id`);




ALTER TABLE `modelos`
  ADD CONSTRAINT `modelos_marcas_id_foreign` FOREIGN KEY (`marcas_id`) REFERENCES `marcas` (`id`);


ALTER TABLE `municipios`
  ADD CONSTRAINT `municipios_estados_id_foreign` FOREIGN KEY (`estados_id`) REFERENCES `estados` (`id`);




ALTER TABLE `personas`
  ADD CONSTRAINT `personas_taller_id_foreign` FOREIGN KEY (`taller_id`) REFERENCES `talleres_mecanicos` (`id`);




ALTER TABLE `servicios`
  ADD CONSTRAINT `servicios_talleres_mecanicos_id_foreign` FOREIGN KEY (`taller_id`) REFERENCES `talleres_mecanicos` (`id`);


ALTER TABLE `talleres_mecanicos`
  ADD CONSTRAINT `talleres_mecanicos_municipios_id_foreign` FOREIGN KEY (`municipios_id`) REFERENCES `municipios` (`id`),
  ADD CONSTRAINT `talleres_mecanicos_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

ALTER TABLE `tipos_cargos`
  ADD CONSTRAINT `tipos_cargos_taller_id_foreign` FOREIGN KEY (`taller_id`) REFERENCES `talleres_mecanicos` (`id`);


ALTER TABLE `vehiculos`
  ADD CONSTRAINT `vehiculos_clientes_id_foreign` FOREIGN KEY (`clientes_id`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `vehiculos_marcas_id_foreign` FOREIGN KEY (`marcas_id`) REFERENCES `marcas` (`id`);
COMMIT;
