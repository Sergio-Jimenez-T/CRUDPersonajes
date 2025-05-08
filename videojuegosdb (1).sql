-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-05-2025 a las 00:40:39
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
-- Base de datos: `videojuegosdb`
--
CREATE DATABASE IF NOT EXISTS `videojuegosdb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `videojuegosdb`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personajes`
--

CREATE TABLE `personajes` (
  `id` int(11) NOT NULL,
  `personaje` varchar(100) NOT NULL,
  `saga` varchar(100) NOT NULL,
  `especie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personajes`
--

INSERT INTO `personajes` (`id`, `personaje`, `saga`, `especie`) VALUES
(1, 'Mario', 'Super Mario Bros', 'Humano'),
(2, 'Link', 'The Legend of Zelda', 'Hyliano'),
(3, 'Samus Aran', 'Metroid', 'Humano Mejorado'),
(4, 'Sonic', 'Sonic the Hedgehog', 'Erizo'),
(5, 'Pikachu', 'Pokémon', 'Pokémon'),
(6, 'Kratos', 'God of War', 'Semidiós'),
(7, 'Master Chief', 'Halo', 'Humano'),
(8, 'Lara Croft', 'Tomb Raider', 'Humano'),
(9, 'Geralt de Rivia', 'The Witcher', 'Mutante'),
(10, 'Dante', 'Devil May Cry', 'Híbrido'),
(11, 'Mega Man', 'Mega Man', 'Robot'),
(12, 'Ryu', 'Street Fighter', 'Humano'),
(13, 'Scorpion', 'Mortal Kombat', 'No-muerto'),
(14, 'Kirby', 'Kirby', 'Entidad Cosmica'),
(15, 'Fox McCloud', 'Star Fox', 'Zorro antropomórfico'),
(16, 'Arthur Morgan', 'Red Dead Redemption', 'Humano'),
(17, 'Steve', 'Minecraft', 'Humano'),
(18, 'Sephiroth', 'Final Fantasy', 'Híbrido'),
(19, 'Bayonetta', 'Bayonetta', 'Bruja'),
(20, 'Jill Valentine', 'Resident Evil', 'Humano'),
(21, 'Luigi', 'Super Mario', 'Humano'),
(23, 'Atreus', 'God of war', 'Semi Dios y Raza Gigante'),
(24, 'Terry Bogard', 'Fatal Fury', 'Humano'),
(25, 'Knight', 'Hollow Knight', 'Desconocido'),
(26, 'Princesa Peach', 'Super Mario', 'Humana');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personajes`
--
ALTER TABLE `personajes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personajes`
--
ALTER TABLE `personajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
