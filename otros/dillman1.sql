CREATE DATABASE dillman1;
USE dillman1;
-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 29-01-2016 a las 11:17:46
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `dillman1`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `alertas`
-- 

CREATE TABLE `alertas` (
  `id` int(20) NOT NULL auto_increment,
  `texto` varchar(500) NOT NULL,
  `time` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Volcar la base de datos para la tabla `alertas`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `campos`
-- 

CREATE TABLE `campos` (
  `id` int(8) NOT NULL auto_increment,
  `nombre` varchar(60) NOT NULL,
  `activo` int(2) NOT NULL default '0',
  `estado1` varchar(20) NOT NULL,
  `estado2` varchar(20) NOT NULL,
  `estado3` varchar(20) NOT NULL,
  `estado4` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- Volcar la base de datos para la tabla `campos`
-- 

INSERT INTO `campos` VALUES (1, 'DILLMAN GERSON QUISPE LUNA', 1, '0', '1', '0', '1');
INSERT INTO `campos` VALUES (2, 'JHON RAMOS HUARAYA', 1, '1', '1', '1', '1');
INSERT INTO `campos` VALUES (3, 'asdsadasdasd', 0, '', '', '', '');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `personas`
-- 

CREATE TABLE `personas` (
  `cod` int(10) NOT NULL auto_increment,
  `nombre` varchar(200) NOT NULL,
  PRIMARY KEY  (`cod`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- 
-- Volcar la base de datos para la tabla `personas`
-- 

INSERT INTO `personas` VALUES (1, 'jerry');
INSERT INTO `personas` VALUES (2, 'andres');
INSERT INTO `personas` VALUES (3, 'john');
INSERT INTO `personas` VALUES (4, 'albert');
INSERT INTO `personas` VALUES (5, 'anna');
INSERT INTO `personas` VALUES (6, 'rita');
INSERT INTO `personas` VALUES (7, 'Beto');
INSERT INTO `personas` VALUES (8, 'George');
INSERT INTO `personas` VALUES (9, 'Paul');
INSERT INTO `personas` VALUES (10, 'Humberto');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `vistas`
-- 

CREATE TABLE `vistas` (
  `id` int(50) NOT NULL auto_increment,
  `idalert` int(20) NOT NULL,
  `ip` varchar(12) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Volcar la base de datos para la tabla `vistas`
-- 

INSERT INTO `vistas` VALUES (1, 0, '');
