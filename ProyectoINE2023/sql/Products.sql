-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 04-11-2022 a las 14:54:59
-- Versión del servidor: 5.7.34
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ine22ara`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Products`
--

CREATE TABLE `Products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgUrl` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pricePerCredit` double(8,3) NOT NULL,
  `discountPercent` double(8,2) NOT NULL,
  `discountStart_at` datetime NOT NULL,
  `discountEnd_at` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `Products`
--

INSERT INTO `Products` (`id`, `company_id`, `name`, `description`, `imgUrl`, `pricePerCredit`, `discountPercent`, `discountStart_at`, `discountEnd_at`, `created_at`, `updated_at`) VALUES
(1, NULL, 'EDNL', 'Estructura de Datos No Lineales, asignatura de complejidad avanzada, con respecto a la forma de evaluacion tu nota se decidira entre la media del resultado en un dado de 5 caras y el estado de la luna.', 'img/EDNL.png', 20.123, 0.00, '2022-10-25 00:00:00', '2022-11-25 00:00:00', '2022-10-27 04:57:27', '2022-10-27 04:57:27'),
(2, NULL, 'AEED', 'Analisis De Algoritmos y Estructuras de Datos, esta asignatura te debería iniciar en C++ pero no lo hacemos, creemos que el aprobado solo existe a partir de la tercera matrícula', 'img/AEED.png', 30.541, 1.20, '2022-10-24 15:00:00', '2022-11-28 19:00:00', '2022-10-27 15:57:13', '2022-10-27 15:57:13'),
(3, NULL, 'POO', 'Programación Orientada a Objetos, asignatura orientada a la enseñanza del paradigma de la programación orientada a objetos, aún siendo así no la impartimos en Java si no que en C++, a día de hoy por motivos aun no conclusos.', 'img/POO.png', 12.567, 3.00, '2022-10-02 15:00:00', '2022-11-28 19:00:00', '2022-10-27 15:57:13', '2022-10-27 15:57:13'),
(4, NULL, 'DA', 'Diseño de Algoritmos, asignar muy bien llevada pero si te equivocas en una linea del código el ejercicio esta mal', 'img/DA.png', 10.567, 2.00, '2022-10-26 18:00:00', '2022-10-28 19:00:00', '2022-10-27 15:57:13', '2022-10-27 15:57:13');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_company_id_foreign` (`company_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Products`
--
ALTER TABLE `Products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Products`
--
ALTER TABLE `Products`
  ADD CONSTRAINT `products_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `Companies` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
