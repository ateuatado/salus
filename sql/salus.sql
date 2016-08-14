-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14-Ago-2016 às 14:13
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salus`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bateria`
--

CREATE TABLE `bateria` (
  `id_bateria` bigint(20) UNSIGNED NOT NULL,
  `nome_bateria` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_inicio` date DEFAULT NULL,
  `data_fim` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `consulta`
--

CREATE TABLE `consulta` (
  `id_consulta` bigint(20) UNSIGNED NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_paciente` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `hora` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comparecimento_paciente` tinyint(1) DEFAULT NULL,
  `comparecimento_estagiario` tinyint(1) DEFAULT NULL,
  `observacao_paciente` text COLLATE utf8_unicode_ci,
  `observacao_estagiario` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `id_paciente` bigint(20) UNSIGNED NOT NULL,
  `id_consulta` int(11) DEFAULT NULL,
  `id_prontuario` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `nome_completo` char(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `hipotese_diagnostico` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nome` char(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sobrenome` char(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` date DEFAULT NULL,
  `cid` char(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nome_responsavel` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parentesco_resp` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `documento_resp` char(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo_doc_resp` char(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `endereco` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefone` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `celular` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `queixa_principal` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deficit_funcional` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `medico_resp` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hospital_procedencia` char(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tratamento_previo` char(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adnpm` tinyint(1) DEFAULT NULL,
  `adnpm_motivo` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `class_topografia` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `class_clinica` char(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nivel` char(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gmfcs_nivel` char(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `historia_molestia` char(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `paciente_ativo` tinyint(1) DEFAULT NULL,
  `patol_disturbio_assoc` char(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `medicamento_uso` char(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `exames_complementares` char(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `orteses_proteses_adaptacoes` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `caracteristicas_sindromicas` char(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prontuario`
--

CREATE TABLE `prontuario` (
  `id_prontuario` int(11) NOT NULL,
  `id_paciente` int(11) DEFAULT NULL,
  `adm_visao` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adm_audicao` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adm_linguaem` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adm_cognitivo` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adm_cognitivo_obs` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adm_reflexos_prim` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adm_reflexos_prim_obs` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adm_contr_servic` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adm_linha_media` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adm_simetria` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adm_alinhamento` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adm_mov_ativo` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adm_rolar` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adm_rolar_obs` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adm_control_tronco` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adm_post_quadril` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adm_deform_col` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adm_deform_quadril` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adm_ortostatismo` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adm_ortostatismo_obs` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adm_marcha` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dm_marcha_obse` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trocas_posturais` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avt_hipertonia_elastica` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avt_hipertonia_elastica_obs` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avt_hipertonia_plastica` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avt_hipertonia_plastica_obs` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avt_sinais_clinicos` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avt_aswort` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avt_discinesias` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avt_discinesias_local` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avt_hipotonia` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avt_hipotonia_local` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avt_incordena_mov` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `encurt_muscular_deform` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fm_mms_gm` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fm_mms_d` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fm_mms_e` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fm_mmii_gm` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fm_mmii_d` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fm_mmii_e` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mrp_reac_end_post_sent` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mrp_reac_end_bipede` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mrp_reac_equi_post_sent` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mrp_reac_equi_bipede` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mrp_reac_prot_post_sent` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mrp_reac_prot_bipede` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avd_alimetacao` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avd_alimetacao_obs` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avd_higiene` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avd_higiene_obs` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avd_vestuario` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avd_vestuario_obs` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avd_locomocao` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avd_locomocao_obs` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sistema_resp` char(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `ra` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `tre` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `email`, `senha`, `ra`, `tre`) VALUES
(1, 'Marcos', 'anjosdoamor@gmail.com', '202cb962ac59075b964b07152d234b70', '12151101552', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bateria`
--
ALTER TABLE `bateria`
  ADD PRIMARY KEY (`id_bateria`);

--
-- Indexes for table `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`id_consulta`);

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id_paciente`);

--
-- Indexes for table `prontuario`
--
ALTER TABLE `prontuario`
  ADD PRIMARY KEY (`id_prontuario`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `id_usuario` (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bateria`
--
ALTER TABLE `bateria`
  MODIFY `id_bateria` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `consulta`
--
ALTER TABLE `consulta`
  MODIFY `id_consulta` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id_paciente` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
