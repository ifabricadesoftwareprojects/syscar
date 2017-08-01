-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 01/08/2017 às 22:10
-- Versão do servidor: 10.1.13-MariaDB
-- Versão do PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `syscar`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `anuncio`
--

CREATE TABLE `anuncio` (
  `idanuncio` int(11) NOT NULL,
  `dataanuncio` date DEFAULT NULL,
  `dataexpiracao` date DEFAULT NULL,
  `statusanuncio` varchar(20) DEFAULT NULL,
  `descricaoanuncio` varchar(500) DEFAULT NULL,
  `modelo_idmodelo` int(11) NOT NULL,
  `km` int(11) DEFAULT NULL,
  `anofab` int(11) DEFAULT NULL,
  `anomodelo` int(11) DEFAULT NULL,
  `aceitatrocal` varchar(45) DEFAULT NULL,
  `unicodono` varchar(45) DEFAULT NULL,
  `valor` double DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `concessionaria`
--

CREATE TABLE `concessionaria` (
  `usuario_idusuario` int(11) NOT NULL,
  `cnpj` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `foto`
--

CREATE TABLE `foto` (
  `idfoto` int(11) NOT NULL,
  `caminhofoto` varchar(150) DEFAULT NULL,
  `anuncio_idanuncio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `marca`
--

CREATE TABLE `marca` (
  `idmarca` int(11) NOT NULL,
  `nomemarca` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `modelo`
--

CREATE TABLE `modelo` (
  `idmodelo` int(11) NOT NULL,
  `nomemodelo` varchar(45) DEFAULT NULL,
  `marca_idmarca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `modelo_opcional`
--

CREATE TABLE `modelo_opcional` (
  `modelo_idmodelo` int(11) NOT NULL,
  `opcional_idopcional` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `opcional`
--

CREATE TABLE `opcional` (
  `idopcional` int(11) NOT NULL,
  `descricaoopcional` varchar(45) DEFAULT NULL,
  `modelo_idmodelo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nome` varchar(75) DEFAULT NULL,
  `email` varchar(75) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL,
  `perfil` varchar(20) DEFAULT NULL,
  `token` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `versao`
--

CREATE TABLE `versao` (
  `idversao` int(11) NOT NULL,
  `descricaoversao` varchar(75) DEFAULT NULL,
  `motor` char(5) DEFAULT NULL,
  `combustivel` varchar(20) DEFAULT NULL,
  `portas` char(2) DEFAULT NULL,
  `cambio` varchar(20) DEFAULT NULL,
  `modelo_idmodelo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `anuncio`
--
ALTER TABLE `anuncio`
  ADD PRIMARY KEY (`idanuncio`),
  ADD KEY `fk_anuncio_modelo1_idx` (`modelo_idmodelo`),
  ADD KEY `fk_anuncio_usuario1_idx` (`usuario_idusuario`);

--
-- Índices de tabela `concessionaria`
--
ALTER TABLE `concessionaria`
  ADD PRIMARY KEY (`usuario_idusuario`),
  ADD KEY `fk_concessionaria_usuario1_idx` (`usuario_idusuario`);

--
-- Índices de tabela `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`idfoto`),
  ADD KEY `fk_fotos_anuncio1_idx` (`anuncio_idanuncio`);

--
-- Índices de tabela `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`idmarca`);

--
-- Índices de tabela `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`idmodelo`),
  ADD KEY `fk_modelo_marca_idx` (`marca_idmarca`);

--
-- Índices de tabela `modelo_opcional`
--
ALTER TABLE `modelo_opcional`
  ADD PRIMARY KEY (`modelo_idmodelo`,`opcional_idopcional`),
  ADD KEY `fk_modelo_has_opcional_opcional1_idx` (`opcional_idopcional`),
  ADD KEY `fk_modelo_has_opcional_modelo1_idx` (`modelo_idmodelo`);

--
-- Índices de tabela `opcional`
--
ALTER TABLE `opcional`
  ADD PRIMARY KEY (`idopcional`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- Índices de tabela `versao`
--
ALTER TABLE `versao`
  ADD PRIMARY KEY (`idversao`),
  ADD KEY `fk_versao_modelo1_idx` (`modelo_idmodelo`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `anuncio`
--
ALTER TABLE `anuncio`
  MODIFY `idanuncio` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `foto`
--
ALTER TABLE `foto`
  MODIFY `idfoto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `marca`
--
ALTER TABLE `marca`
  MODIFY `idmarca` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `modelo`
--
ALTER TABLE `modelo`
  MODIFY `idmodelo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `opcional`
--
ALTER TABLE `opcional`
  MODIFY `idopcional` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `versao`
--
ALTER TABLE `versao`
  MODIFY `idversao` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `anuncio`
--
ALTER TABLE `anuncio`
  ADD CONSTRAINT `fk_anuncio_modelo1` FOREIGN KEY (`modelo_idmodelo`) REFERENCES `modelo` (`idmodelo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_anuncio_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `concessionaria`
--
ALTER TABLE `concessionaria`
  ADD CONSTRAINT `fk_concessionaria_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `fk_fotos_anuncio1` FOREIGN KEY (`anuncio_idanuncio`) REFERENCES `anuncio` (`idanuncio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `modelo`
--
ALTER TABLE `modelo`
  ADD CONSTRAINT `fk_modelo_marca` FOREIGN KEY (`marca_idmarca`) REFERENCES `marca` (`idmarca`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `modelo_opcional`
--
ALTER TABLE `modelo_opcional`
  ADD CONSTRAINT `fk_modelo_has_opcional_modelo1` FOREIGN KEY (`modelo_idmodelo`) REFERENCES `modelo` (`idmodelo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_modelo_has_opcional_opcional1` FOREIGN KEY (`opcional_idopcional`) REFERENCES `opcional` (`idopcional`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `versao`
--
ALTER TABLE `versao`
  ADD CONSTRAINT `fk_versao_modelo1` FOREIGN KEY (`modelo_idmodelo`) REFERENCES `modelo` (`idmodelo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
