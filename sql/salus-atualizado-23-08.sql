-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 23, 2016 at 07:26 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

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
-- Table structure for table `bateria`
--

CREATE TABLE `bateria` (
  `id_bateria` int(11) NOT NULL,
  `ano` int(11) NOT NULL,
  `semestre` int(11) NOT NULL,
  `nome_bateria` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_inicio` date DEFAULT NULL,
  `data_fim` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `consulta`
--

CREATE TABLE `consulta` (
  `id_consulta` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `comparecimento_paciente` int(11) DEFAULT NULL,
  `comparecimento_estagiario` int(11) DEFAULT NULL,
  `observacao_paciente` longtext COLLATE utf8_unicode_ci,
  `observacao_estagiario` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `opcoes`
--

CREATE TABLE `opcoes` (
  `id_opcoes` int(11) NOT NULL,
  `campo` varchar(255) NOT NULL,
  `opcao` varchar(100) NOT NULL,
  `obs` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opcoes`
--

INSERT INTO `opcoes` (`id_opcoes`, `campo`, `opcao`, `obs`) VALUES
(1, 'adm_visao', 'presente', NULL),
(2, 'adm_visao', 'ausente', NULL),
(3, 'adm_visao', 'parcial - acompanha objeto mas não fixa', NULL),
(4, 'adm_audicao', 'presente', NULL),
(5, 'adm_audicao', 'ausente', NULL),
(6, 'adm_audicao', 'parcial - acompanha sons', NULL),
(7, 'adm_linguagem', 'presente', NULL),
(8, 'adm_linguagem', 'ausente', NULL),
(9, 'adm_linguagem', 'se comunica olhar', NULL),
(10, 'adm_linguagem', 'se comunica gestos', NULL),
(11, 'adm_cognitivo', 'adequado para idade', NULL),
(12, 'adm_cognitivo', 'inadequado para idade', NULL),
(13, 'adm_cognitivo', 'entende ordens simples', NULL),
(14, 'adm_cognitivo', 'contactua - qual resposta?', 's'),
(15, 'adm_cognitivo', 'não contactua', NULL),
(16, 'adm_reflexos_prim', 'integrados', NULL),
(17, 'adm_reflexos_prim', 'presente', 's'),
(18, 'supino_simetria', 'presente', NULL),
(19, 'supino_simetria', 'ausente', NULL),
(20, 'supino_alinhamento', 'presente', NULL),
(21, 'supino_alinhamento', 'ausente', NULL),
(22, 'supino_movimentacao_ativa', 'presente', NULL),
(23, 'supino_movimentacao_ativa', 'ausente', NULL),
(24, 'supino_movimentacao_ativa', 'hipoativa', NULL),
(25, 'supino_movimentacao_ativa', 'agitação', NULL),
(26, 'prono_controle_cervical', 'ausente', NULL),
(27, 'prono_controle_cervical', 'incompleto', NULL),
(28, 'prono_controle_cervical', 'presente', NULL),
(29, 'prono_controle_escapular', 'ausente', NULL),
(30, 'prono_controle_escapular', 'incompleto', NULL),
(31, 'prono_controle_escapular', 'presente', NULL),
(32, 'prono_simetria', 'presente', NULL),
(33, 'prono_simetria', 'ausente', NULL),
(34, 'prono_alinhamento', 'presente', NULL),
(35, 'prono_alinhamento', 'ausente', NULL),
(36, 'prono_movimentacao_ativa', 'presente', NULL),
(37, 'prono_movimentacao_ativa', 'ausente', NULL),
(38, 'prono_movimentacao_ativa', 'hipoativa', NULL),
(39, 'prono_movimentacao_ativa', 'agitação', NULL),
(40, 'rolar', 'realiza', NULL),
(41, 'rolar', 'não realiza', NULL),
(42, 'rolar', 'inicia, porém incompleto - decúbito', NULL),
(43, 'rolar', 'd', NULL),
(44, 'rolar', 'e', NULL),
(45, 'rolar', 'uso de padrão patológico - qual?', 's'),
(46, 'rolar', 'com dissociação', NULL),
(47, 'rolar', 'sem dissociação', NULL),
(48, 'sentado_controle_cervical', 'ausente', NULL),
(49, 'sentado_controle_cervical', 'incompleto', NULL),
(50, 'sentado_controle_cervical', 'presente', NULL),
(51, 'sentado_controle_tronco', 'presente', NULL),
(52, 'sentado_controle_tronco', 'ausente', NULL),
(53, 'sentado_controle_tronco', 'incompleto', NULL),
(54, 'sentando_simetria', 'presente', NULL),
(55, 'sentando_simetria', 'ausente', NULL),
(56, 'sentado_alinhamento', 'presente', NULL),
(57, 'sentado_alinhamento', 'ausente', NULL),
(58, 'sentado_movimentacao_ativa', 'presente', NULL),
(59, 'sentado_movimentacao_ativa', 'ausente', NULL),
(60, 'sentado_movimentacao_ativa', 'hipoativa', NULL),
(61, 'sentado_movimentacao_ativa', 'agitação', NULL),
(62, 'sentado_postura_quadril', 'alinhada', NULL),
(63, 'sentado_postura_quadril', 'inclinada - d', NULL),
(64, 'sentado_postura_quadril', 'inclinada - e', NULL),
(65, 'sentado_postura_quadril', 'retroversão', NULL),
(66, 'sentado_postura_quadril', 'anteversão', NULL),
(67, 'sentado_deformidade_coluna', 'ausente', NULL),
(68, 'sentado_deformidade_coluna', 'presente - postural', NULL),
(69, 'sentado_deformidade_coluna', 'presente - fixa', NULL),
(70, 'sentado_deformidade_quadril', 'ausente', NULL),
(71, 'sentado_deformidade_quadril', 'presente - galeazzi - d', NULL),
(72, 'sentado_deformidade_quadril', 'presente - galeazzi - e', NULL),
(73, 'engatinhar', 'sim', NULL),
(74, 'engatinhar', 'não', NULL),
(75, 'arrastar', 'sim', NULL),
(76, 'arrastar', 'não', NULL),
(77, 'ortostatismo', 'presente', NULL),
(78, 'ortostatismo', 'ausente', NULL),
(79, 'ortostatismo', 'sustento parcial', NULL),
(80, 'ortostatismo', 'base de apoio aumentada', NULL),
(81, 'ortostatismo', 'base de apoio diminuída', NULL),
(82, 'ortostatismo', 'posicionamento dos pés', 's'),
(83, 'marcha', 'não realiza', NULL),
(84, 'marcha', 'realiza', NULL),
(85, 'tonus_base_hipertonia_elastica', 'sim', 's'),
(86, 'tonus_base_hipertonia_elastica', 'não', NULL),
(87, 'tonus_base_hipertonia_plastica', 'sim', 's'),
(88, 'tonus_base_hipertonia_plastica', 'não', NULL),
(89, 'tonus_base_discinesias', 'atetose', 's'),
(90, 'tonus_base_discinesias', 'coréia', 's'),
(91, 'tonus_base_discinesias', 'distonia', 's'),
(92, 'tonus_base_discinesias', 'não', NULL),
(93, 'tonus_base_hipotonia', 'sim', 's'),
(94, 'tonus_base_hipotonia', 'não', NULL),
(95, 'tonus_base_incordenacao_movimentos', 'ataxia', NULL),
(96, 'tonus_base_incordenacao_movimentos', 'dismetria', NULL),
(97, 'tonus_base_incordenacao_movimentos', 'hipometria', NULL),
(98, 'tonus_base_incordenacao_movimentos', 'hipermetria', NULL),
(99, 'atividades_vida_diaria_alimentacao', 'dependente', NULL),
(100, 'atividades_vida_diaria_alimentacao', 'semi-dependente', NULL),
(101, 'atividades_vida_diaria_alimentacao', 'independente', NULL),
(102, 'atividades_vida_diaria_higiene', 'dependente', NULL),
(103, 'atividades_vida_diaria_higiene', 'semi-dependente', NULL),
(104, 'atividades_vida_diaria_higiene', 'independente', NULL),
(105, 'atividades_vida_diaria_vestuario', 'dependente', NULL),
(106, 'atividades_vida_diaria_vestuario', 'semi-dependente', NULL),
(107, 'atividades_vida_diaria_vestuario', 'independente', NULL),
(108, 'atividades_vida_diaria_locomocao', 'dependente', NULL),
(109, 'atividades_vida_diaria_locomocao', 'semi-dependente', NULL),
(110, 'atividades_vida_diaria_locomocao', 'independente', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `paciente`
--

CREATE TABLE `paciente` (
  `id_paciente` int(11) NOT NULL,
  `paciente_ativo` int(11) DEFAULT NULL,
  `nome_completo` char(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `sexo` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `hipotese_diagnostico` text COLLATE utf8_unicode_ci,
  `cid` char(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nome_responsavel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parentesco_resp` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `documento_resp` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo_doc_resp` int(11) DEFAULT NULL,
  `tipo_doc_resp_obs` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefone` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `celular` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `queixa_principal` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deficit_funcional` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `medico_resp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hospital_procedencia` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tratamento_previo` text COLLATE utf8_unicode_ci,
  `adnpm` int(11) DEFAULT NULL,
  `adnpm_motivo` text COLLATE utf8_unicode_ci,
  `sindrome_de_down` int(11) NOT NULL,
  `sindrome_de_down_obs` longtext COLLATE utf8_unicode_ci NOT NULL,
  `encefalopatia` int(11) NOT NULL,
  `class_topografia` int(11) DEFAULT NULL,
  `class_clinica` text COLLATE utf8_unicode_ci,
  `nivel` int(11) DEFAULT NULL,
  `gmfcs_nivel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `historia_molestia` int(11) DEFAULT NULL,
  `historia_molestia_obs` longtext COLLATE utf8_unicode_ci NOT NULL,
  `patol_disturbio_assoc` longtext COLLATE utf8_unicode_ci,
  `medicamento_uso` longtext COLLATE utf8_unicode_ci,
  `exames_complementares` longtext COLLATE utf8_unicode_ci,
  `orteses_proteses_adaptacoes` longtext COLLATE utf8_unicode_ci,
  `caracteristicas_sindromicas` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `paciente`
--

INSERT INTO `paciente` (`id_paciente`, `paciente_ativo`, `nome_completo`, `data_nascimento`, `sexo`, `hipotese_diagnostico`, `cid`, `nome_responsavel`, `parentesco_resp`, `documento_resp`, `tipo_doc_resp`, `tipo_doc_resp_obs`, `endereco`, `telefone`, `celular`, `queixa_principal`, `deficit_funcional`, `medico_resp`, `hospital_procedencia`, `tratamento_previo`, `adnpm`, `adnpm_motivo`, `sindrome_de_down`, `sindrome_de_down_obs`, `encefalopatia`, `class_topografia`, `class_clinica`, `nivel`, `gmfcs_nivel`, `historia_molestia`, `historia_molestia_obs`, `patol_disturbio_assoc`, `medicamento_uso`, `exames_complementares`, `orteses_proteses_adaptacoes`, `caracteristicas_sindromicas`) VALUES
(1, 1, 'teste da silva', '2014-10-22', 'm', 'diagnostico', 'a30', 'fulano pereira', 'irmao', '123.456.789-10', 1, 'n/a', 'rua um, 2', '1173821723', '1191230294', 'dor de cabeça', 'sei la', 'fulana maria', 'um ai', 'nenhum', 1, 'uma desculpa ai', 0, 'n/a', 0, 1, 'blabla', 1, 'outro', 1, 'molestia obs', 'outro disturbio', 'nenhum medicamento', 'nenhum', 'blablabla', 'sidromicas');

-- --------------------------------------------------------

--
-- Table structure for table `prontuario`
--

CREATE TABLE `prontuario` (
  `id_prontuario` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `adm_visao` int(11) DEFAULT NULL,
  `adm_audicao` int(11) DEFAULT NULL,
  `adm_linguagem` int(11) DEFAULT NULL,
  `adm_cognitivo` int(11) DEFAULT NULL,
  `adm_cognitivo_obs` longtext COLLATE utf8_unicode_ci,
  `adm_reflexos_prim` int(11) DEFAULT NULL,
  `adm_reflexos_prim_obs` longtext COLLATE utf8_unicode_ci,
  `supino_simetria` int(11) DEFAULT NULL,
  `supino_alinhamento` int(11) DEFAULT NULL,
  `supino_movimentacao_ativa` int(11) DEFAULT NULL,
  `supino_obs` longtext COLLATE utf8_unicode_ci,
  `prono_controle_cervical` int(11) DEFAULT NULL,
  `prono_controle_escapular` int(11) DEFAULT NULL,
  `prono_simetria` int(11) DEFAULT NULL,
  `prono_alinhamento` int(11) DEFAULT NULL,
  `prono_movimentacao_ativa` int(11) DEFAULT NULL,
  `prono_obs` longtext COLLATE utf8_unicode_ci,
  `rolar` int(11) DEFAULT NULL,
  `rolar_obs` longtext COLLATE utf8_unicode_ci,
  `sentado_controle_cervical` int(11) DEFAULT NULL,
  `sentado_controle_tronco` int(11) DEFAULT NULL,
  `sentando_simetria` int(11) DEFAULT NULL,
  `sentado_alinhamento` int(11) DEFAULT NULL,
  `sentado_movimentacao_ativa` int(11) DEFAULT NULL,
  `sentado_obs` longtext COLLATE utf8_unicode_ci,
  `sentado_troca_postural` longtext COLLATE utf8_unicode_ci,
  `sentado_postura_quadril` int(11) NOT NULL,
  `sentado_deformidade_coluna` int(11) NOT NULL,
  `sentado_deformidade_quadril` int(11) NOT NULL,
  `engatinhar` int(11) DEFAULT NULL,
  `engatinhar_obs` longtext COLLATE utf8_unicode_ci,
  `arrastar` int(11) DEFAULT NULL,
  `arrastar_obs` longtext COLLATE utf8_unicode_ci,
  `ortostatismo` int(11) DEFAULT NULL,
  `ortostatismo_obs` longtext COLLATE utf8_unicode_ci,
  `marcha` int(11) DEFAULT NULL,
  `marcha_obs` longtext COLLATE utf8_unicode_ci,
  `observacao` longtext COLLATE utf8_unicode_ci,
  `tonus_base_hipertonia_elastica` int(11) DEFAULT NULL,
  `tonus_base_hipertonia_elastica_obs` longtext COLLATE utf8_unicode_ci,
  `tonus_base_hipertonia_elastica_sinais_clinicos` longtext COLLATE utf8_unicode_ci,
  `tonus_base_asworth` longtext COLLATE utf8_unicode_ci,
  `tonus_base_hipertonia_plastica` int(11) DEFAULT NULL,
  `tonus_base_hipertonia_plastica_obs` longtext COLLATE utf8_unicode_ci,
  `tonus_base_hipertonia_plastica_sinais_clinicos` longtext COLLATE utf8_unicode_ci,
  `tonus_base_discinesias` int(11) DEFAULT NULL,
  `tonus_base_discinesias_obs` longtext COLLATE utf8_unicode_ci,
  `tonus_base_hipotonia` int(11) DEFAULT NULL,
  `tonus_base_hipotonia_obs` longtext COLLATE utf8_unicode_ci,
  `tonus_base_incordenacao_movimentos` int(11) DEFAULT NULL,
  `tonus_dinamico` longtext COLLATE utf8_unicode_ci,
  `encurtamento_musculares_deformidades` longtext COLLATE utf8_unicode_ci,
  `forca_muscular_mms_gm` longtext COLLATE utf8_unicode_ci,
  `forca_muscular_mms_d` longtext COLLATE utf8_unicode_ci,
  `forca_muscular_mms_e` longtext COLLATE utf8_unicode_ci,
  `forca_muscular_mmii_gm` longtext COLLATE utf8_unicode_ci,
  `forca_muscular_mmii_d` longtext COLLATE utf8_unicode_ci,
  `forca_muscular_mmii_e` longtext COLLATE utf8_unicode_ci,
  `mrp_reacoes_endireitamento_postura_sentada` longtext COLLATE utf8_unicode_ci,
  `mrp_reacoes_endireitamento_bipede` longtext COLLATE utf8_unicode_ci,
  `mrp_reacoes_equilibrio_postura_sentada` longtext COLLATE utf8_unicode_ci,
  `mrp_reacoes_equilibrio_bipede` longtext COLLATE utf8_unicode_ci,
  `mrp_reacoes_protecao_postura_sentada` longtext COLLATE utf8_unicode_ci,
  `mrp_reacoes_protecao_bipede` longtext COLLATE utf8_unicode_ci,
  `atividades_vida_diaria_alimentacao` int(11) DEFAULT NULL,
  `atividades_vida_diaria_alimentacao_obs` longtext COLLATE utf8_unicode_ci,
  `atividades_vida_diaria_higiene` int(11) DEFAULT NULL,
  `atividades_vida_diaria_higiene_obs` longtext COLLATE utf8_unicode_ci,
  `atividades_vida_diaria_vestuario` int(11) DEFAULT NULL,
  `atividades_vida_diaria_vestuario_obs` longtext COLLATE utf8_unicode_ci,
  `atividades_vida_diaria_locomocao` int(11) DEFAULT NULL,
  `atividades_vida_diaria_locomocao_obs` longtext COLLATE utf8_unicode_ci,
  `sistema_respiratorio` longtext COLLATE utf8_unicode_ci,
  `objetivos` longtext COLLATE utf8_unicode_ci,
  `condutas` longtext COLLATE utf8_unicode_ci,
  `evolucao_periodo` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `prontuario`
--

INSERT INTO `prontuario` (`id_prontuario`, `id_paciente`, `id_usuario`, `adm_visao`, `adm_audicao`, `adm_linguagem`, `adm_cognitivo`, `adm_cognitivo_obs`, `adm_reflexos_prim`, `adm_reflexos_prim_obs`, `supino_simetria`, `supino_alinhamento`, `supino_movimentacao_ativa`, `supino_obs`, `prono_controle_cervical`, `prono_controle_escapular`, `prono_simetria`, `prono_alinhamento`, `prono_movimentacao_ativa`, `prono_obs`, `rolar`, `rolar_obs`, `sentado_controle_cervical`, `sentado_controle_tronco`, `sentando_simetria`, `sentado_alinhamento`, `sentado_movimentacao_ativa`, `sentado_obs`, `sentado_troca_postural`, `sentado_postura_quadril`, `sentado_deformidade_coluna`, `sentado_deformidade_quadril`, `engatinhar`, `engatinhar_obs`, `arrastar`, `arrastar_obs`, `ortostatismo`, `ortostatismo_obs`, `marcha`, `marcha_obs`, `observacao`, `tonus_base_hipertonia_elastica`, `tonus_base_hipertonia_elastica_obs`, `tonus_base_hipertonia_elastica_sinais_clinicos`, `tonus_base_asworth`, `tonus_base_hipertonia_plastica`, `tonus_base_hipertonia_plastica_obs`, `tonus_base_hipertonia_plastica_sinais_clinicos`, `tonus_base_discinesias`, `tonus_base_discinesias_obs`, `tonus_base_hipotonia`, `tonus_base_hipotonia_obs`, `tonus_base_incordenacao_movimentos`, `tonus_dinamico`, `encurtamento_musculares_deformidades`, `forca_muscular_mms_gm`, `forca_muscular_mms_d`, `forca_muscular_mms_e`, `forca_muscular_mmii_gm`, `forca_muscular_mmii_d`, `forca_muscular_mmii_e`, `mrp_reacoes_endireitamento_postura_sentada`, `mrp_reacoes_endireitamento_bipede`, `mrp_reacoes_equilibrio_postura_sentada`, `mrp_reacoes_equilibrio_bipede`, `mrp_reacoes_protecao_postura_sentada`, `mrp_reacoes_protecao_bipede`, `atividades_vida_diaria_alimentacao`, `atividades_vida_diaria_alimentacao_obs`, `atividades_vida_diaria_higiene`, `atividades_vida_diaria_higiene_obs`, `atividades_vida_diaria_vestuario`, `atividades_vida_diaria_vestuario_obs`, `atividades_vida_diaria_locomocao`, `atividades_vida_diaria_locomocao_obs`, `sistema_respiratorio`, `objetivos`, `condutas`, `evolucao_periodo`) VALUES
(1, 1, 2, 1, 4, 7, 11, 'bla bla bla', 17, 'prim obs', 18, 20, 25, 'supino obs', 27, 29, 33, 35, 38, 'prono obs', 41, 'rolar obs', 48, 51, 55, 56, 60, 'sentado obs', 'sentado troca postural bla bla', 64, 68, 72, 73, 'engatinhar obs bla', 76, 'arrastar obs bla', 82, 'ortostatimos obs bla', 84, 'marcha obs bla', 'obs bla', 85, 'elastica obs', 'sinais clinicos bla', 'worth? yeah', 87, 'plastica obs bla', 'sinais clinicos', 91, 'discinesias obs bla', 93, 'hipotonia obs', 98, 'tonus dinamico obs bla', 'musc deformidades bla', 'mms gm', 'mms d', 'mms e', 'mmii gm', 'mmii d', 'mmii e', 'postura sentada obs bla', 'bipede bla', 'postura sentada obs bla', 'bipede obs bla', 'postura sentada obs bla', 'bipede obs bla', 100, 'alimentacao obs bla', 102, 'higiene obs bla', 104, 'vestuario obs', 108, 'locomocao obs', 'sistema respiratorio obs bla', 'objetivos obs bla', 'condutas obs bla', 'evolucao periodo'),
(2, 1, 1, 1, 4, 7, 11, 'marcos', 17, 'prim obs', 18, 20, 25, 'supino obs', 27, 29, 33, 35, 38, 'prono obs', 41, 'rolar obs', 48, 51, 55, 56, 60, 'sentado obs', 'sentado troca postural bla bla', 64, 68, 72, 73, 'engatinhar obs bla', 76, 'arrastar obs bla', 82, 'ortostatimos obs bla', 84, 'marcha obs bla', 'obs bla', 85, 'elastica obs', 'sinais clinicos bla', 'worth? yeah', 87, 'plastica obs bla', 'sinais clinicos', 91, 'discinesias obs bla', 93, 'hipotonia obs', 98, 'tonus dinamico obs bla', 'musc deformidades bla', 'mms gm', 'mms d', 'mms e', 'mmii gm', 'mmii d', 'mmii e', 'postura sentada obs bla', 'bipede bla', 'postura sentada obs bla', 'bipede obs bla', 'postura sentada obs bla', 'bipede obs bla', 100, 'alimentacao obs bla', 102, 'higiene obs bla', 104, 'vestuario obs', 108, 'locomocao obs', 'sistema respiratorio obs bla', 'objetivos obs bla', 'condutas obs bla', 'evolucao periodo');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `ra` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_usuario` int(11) NOT NULL,
  `id_bateria` int(11) NOT NULL,
  `login_desativado` char(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome_usuario`, `email`, `senha`, `ra`, `tipo_usuario`, `id_bateria`, `login_desativado`) VALUES
(1, 'Marcos', 'anjosdoamor@gmail.com', '202cb962ac59075b964b07152d234b70', '12151101552', 0, 0, 'n'),
(2, 'Giovanni', 'vsf@vsf.vsf', '202cb962ac59075b964b07152d234b70', '12345678910', 0, 0, 'n');

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
  ADD PRIMARY KEY (`id_consulta`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indexes for table `opcoes`
--
ALTER TABLE `opcoes`
  ADD PRIMARY KEY (`id_opcoes`);

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id_paciente`);

--
-- Indexes for table `prontuario`
--
ALTER TABLE `prontuario`
  ADD PRIMARY KEY (`id_prontuario`),
  ADD KEY `id_paciente` (`id_paciente`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bateria`
--
ALTER TABLE `bateria`
  MODIFY `id_bateria` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `consulta`
--
ALTER TABLE `consulta`
  MODIFY `id_consulta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `opcoes`
--
ALTER TABLE `opcoes`
  MODIFY `id_opcoes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
--
-- AUTO_INCREMENT for table `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `prontuario`
--
ALTER TABLE `prontuario`
  MODIFY `id_prontuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `consulta_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `consulta_ibfk_2` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`);

--
-- Constraints for table `prontuario`
--
ALTER TABLE `prontuario`
  ADD CONSTRAINT `prontuario_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`),
  ADD CONSTRAINT `prontuario_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
