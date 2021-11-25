-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 22-Nov-2021 às 17:35
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- --------------------------------------------------------
--
-- Estrutura da tabela `veiculo`

--
-- veiculo:   string
-- ano:       integer
-- descricao: text
-- vendido:   bool
-- created:   datetime
--
--

DROP TABLE IF EXISTS 'veiculo';

CREATE TABLE IF NOT EXISTS 'veiculo' (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'fabricante' varchar(60) NOT NULL,
  'veiculo' varchar(90) NOT NULL,
  'ano' int(4) DEFAULT NULL,
  'descricao' text NOT NULL,
  'criado' datetime not null default current_timestamp,  
  PRIMARY KEY ('id'),

) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `veiculo`
--

INSERT INTO 'veiculos' ('id', 'fabricante', 'veiculo', 'ano', 'descricao','criado') VALUES
(1, 'FIAT', 'ELBA WEEKEND', '1994','O Fiat Elba foi um automóvel fabricado pela Fiat lançado em 1986 e fabricado até 1996. Era a versão perua do Uno e foi produzida nas versões 3 e 5 portas.'),
(2, 'VOLKSWAGEM', 'FUSCA', '1970','O Volkswagen Typ 1, popularmente conhecido como Fusca (no Brasil) ou Carocha (em Portugal), foi o primeiro modelo de automóvel fabricado pela companhia');
COMMIT;

