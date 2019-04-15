/*
 Navicat Premium Data Transfer

 Source Server         : phpmyAdmin
 Source Server Type    : MySQL
 Source Server Version : 50640
 Source Host           : localhost:3306
 Source Schema         : sgtfc

 Target Server Type    : MySQL
 Target Server Version : 50640
 File Encoding         : 65001

 Date: 17/01/2019 16:11:27
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for actividades
-- ----------------------------
DROP TABLE IF EXISTS `actividades`;
CREATE TABLE `actividades`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trabalho_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `inicio` datetime(0) NOT NULL,
  `fim` datetime(0) NOT NULL,
  `duracao` int(255) NULL DEFAULT NULL,
  `comentarios` text CHARACTER SET latin1 COLLATE latin1_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of actividades
-- ----------------------------
INSERT INTO `actividades` VALUES (1, 2, 'Levantamento dos Requisitos', '2023-01-02 00:00:00', '2020-06-10 00:00:00', 5, 'Levantamento dos Requisitos');
INSERT INTO `actividades` VALUES (2, 1, 'Levantamento dos Requisitos', '2023-03-02 00:00:00', '2022-04-14 00:00:00', 7, 'Levantamento dos Requisitos');
INSERT INTO `actividades` VALUES (3, 1, 'Descriçáo do Problema', '2022-02-05 00:00:00', '2018-07-14 00:00:00', 3, 'Descriçáo do Problema');
INSERT INTO `actividades` VALUES (4, 1, 'Rever os requisitos', '2013-11-18 00:00:00', '2015-09-19 00:00:00', 12, 'Rever os requisitos');
INSERT INTO `actividades` VALUES (5, 1, 'Esboco da Metologia', '2018-09-14 00:00:00', '2018-09-13 00:00:00', NULL, 'Esboco da Metologia');

-- ----------------------------
-- Table structure for areaspesquisas
-- ----------------------------
DROP TABLE IF EXISTS `areaspesquisas`;
CREATE TABLE `areaspesquisas`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `descricao` text CHARACTER SET latin1 COLLATE latin1_general_ci NULL,
  `created` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of areaspesquisas
-- ----------------------------
INSERT INTO `areaspesquisas` VALUES (1, 'Redes de Computadores e Sistemas Distribuídos', 'Na área de redes locais e de alta velocidade, a pesquisa com aplicações como teleconferência e correio eletrônico conduziu ao trabalho com sistemas hipermídia. ', '2018-07-15 14:00:58');
INSERT INTO `areaspesquisas` VALUES (2, 'Optimização e Raciocínio Automático', 'As pesquisas na área de raciocínio automático têm como objetivo o projeto e a análise de programas que aprendem modelos de classificação/predição a partir de bases de conhecimento e, também, de programas que aprendem políticas/estratégias de ação a partir de tentativa e erro.\r\n\r\nAs pesquisas na área de otimização combinatória têm como objetivo desenvolver métodos que permitem resolver eficientemente problemas cujo objetivo é encontrar soluções boas/ótimas, segundo algum critério de qualidade, a partir de um universo grande, porém finito, de soluções.', '2018-07-15 14:07:07');
INSERT INTO `areaspesquisas` VALUES (3, 'Linguagens de Programação', 'Linguagens de programação constituem uma linha básica da computação, separada da Engenharia de Software em várias classificações, por exemplo nos códigos de linha. Nesta linha estão incluídas as pesquisas referentes a compiladores, autômatos e ambientes de programação. Em especial, dirigem-se esforcos para o desenvolvimento de compiladores e interpretadores para linguagens extensíveis e linguagens orientadas a objetos. Vale ressaltar que esta área já conta com um simpósio nacional organizado pela Sociedade Brasileira de Computação.', '2018-07-15 14:13:53');
INSERT INTO `areaspesquisas` VALUES (4, 'Interação Humano-Computador', 'A área de Interação Humano-Computador (IHC) se dedica a investigar a interação entre pessoas e artefatos de base computacional. Tem por objetivos principais: alavancar o desenvolvimento de novas tecnologias; aumentar a qualidade dos produtos tecnológicos existentes; e subsidiar a pesquisa científica em várias áreas envolvidas com Computação, Ciências Sociais e Humanas.', '2018-07-15 14:14:54');
INSERT INTO `areaspesquisas` VALUES (5, 'Hipertexto e Multimídia', 'A área de Hipertextos e Multimídia estuda os diversos aspectos envolvidos no uso de informações e conhecimento representados em múltiplas mídias. As pesquisas desenvolvidas abrangem desde os fundamentos até a utilização destas tecnologias e conceitos na solucão de problemas do mundo real.', '2018-07-15 14:15:47');
INSERT INTO `areaspesquisas` VALUES (6, 'Engenharia de Software', 'A área de Engenharia de Software engloba várias disciplinas e visa trazer para a construção de software os métodos de trabalho das engenharias tradicionais. Uma das principais metas da engenharia de software é construir software podendo-se falar em qualidade do produto e respeito a custo/cronograma predefinidos.', '2018-07-15 14:16:20');
INSERT INTO `areaspesquisas` VALUES (7, 'Computação Gráfica', 'O programa acadêmico cooperativo de Computação Gráfica envolve os departamentos de Informática, Engenharia Mecânica, Engenharia Civil e Matemática, e conta com a colaboração do IMPA. O laboratório mais abrangente do programa é o Laboratório de CAD Inteligente (ICAD), tanto do ponto de vista do número de pesquisadores quanto do grau de integração com a indústria.', '2018-07-15 14:16:59');
INSERT INTO `areaspesquisas` VALUES (8, 'Base de Dados', 'Os Sistemas de Gestão de Base de Dados (SGBDs) são fundamentais para suporte a várias áreas de aplicações. No passado, as pesquisas voltaram-se para SGBDs para suporte a aplicações típicas, tais como gestão de pessoal e financeira. ', '2018-07-15 14:18:29');
INSERT INTO `areaspesquisas` VALUES (9, 'Teoria da Computação', 'A área de Teoria da Computação visa fornecer fundamentos matemáticos rigorosos para as diversas áreas da Informática. O grupo de pesquisadores que a compõem no Departamento está envolvido em projetos que vão desde a lógica formal até a semântica denotacional, os cálculos de construção de programas e o projeto e análise de algoritmos sequenciais e paralelos.', '2018-07-15 14:19:03');

-- ----------------------------
-- Table structure for cursos
-- ----------------------------
DROP TABLE IF EXISTS `cursos`;
CREATE TABLE `cursos`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `comentarios` text CHARACTER SET latin1 COLLATE latin1_general_ci NULL,
  `created` datetime(0) NULL DEFAULT NULL,
  `modified` varchar(0) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for estudantes
-- ----------------------------
DROP TABLE IF EXISTS `estudantes`;
CREATE TABLE `estudantes`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `apelido` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `genero` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `nome_pai` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `nome_mae` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `telefone` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tipo_documento` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `numero_doc` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `occupation_id` int(11) NULL DEFAULT NULL,
  `local_trabalho` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `comentarios` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `profissao_estudante`(`occupation_id`) USING BTREE,
  CONSTRAINT `profissao_estudante` FOREIGN KEY (`occupation_id`) REFERENCES `occupations` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of estudantes
-- ----------------------------
INSERT INTO `estudantes` VALUES (1, 'Sebastião Júlio', 'Mugunhe', '0000-00-00', 'Masculino', 'Julio Chitoatoa Mugunhe', 'Rabelina Daniel Muiambo', '847878227', 'sebastian@gmail.com', 'BI', '100103187', 1, 'RFS', 'Foto', '');
INSERT INTO `estudantes` VALUES (2, 'Victoria Agostinho', 'Machiana', '1925-06-11', 'Masculino', 'Agostinho Machiana', 'Maria Matusse', '847798389', 'victoriamachiana@gmail.com', 'BI', '1234567890', 5, 'BM', 'FOTO', '');
INSERT INTO `estudantes` VALUES (3, 'Amelia Agostinho', 'Machiana', '1940-11-10', 'Femenino', 'Agostinho Machiana', 'Maria Matusse', '847798389', 'ameliamachiana@gmail.com', 'BI', '1234567890', 5, 'BM', 'FOTO', '');
INSERT INTO `estudantes` VALUES (4, 'Acacio Julio', 'Mugunhe', '1927-11-09', 'Masculino', 'Julio Chitoatoa Mugunhe', 'Rabelina Daniel Muiambo', '827821230', 'acaciomugunhe@gmail.com', 'BI', '123456789099', 3, 'RFS', 'FOTO', '');
INSERT INTO `estudantes` VALUES (5, 'Fabiao', 'Cuna', '1928-06-19', 'Masculino', 'Julio Chitoatoa Mugunhe', 'Rabelina Daniel Muiambo', '847798377', 'fabiao@gmail.com', 'BI', '123456789099', 2, 'BM', 'Foto', '');
INSERT INTO `estudantes` VALUES (6, 'Felismina Francisco', 'Cau', '2017-11-06', 'Femenino', 'Agostinho Machiana', 'Maria Matusse', '847798389', 'sebastiann@gmail.com', 'BI', '1234567890', 2, 'BM', 'Foto', '');

-- ----------------------------
-- Table structure for grupos
-- ----------------------------
DROP TABLE IF EXISTS `grupos`;
CREATE TABLE `grupos`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `comentarios` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `created` datetime(0) NULL DEFAULT NULL,
  `modified` datetime(0) NULL DEFAULT NULL,
  `updated` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of grupos
-- ----------------------------
INSERT INTO `grupos` VALUES (1, 'Comissão Cientifica', 'Este grupo possui todos os utilizadores que são Comissão Cientifica.', '2018-07-20 06:53:45', '2018-07-20 07:01:21', NULL);
INSERT INTO `grupos` VALUES (2, 'Director da Faculdade', 'Este grupo possui todos os utilizadores que são Directores da Faculdade.', '2018-07-20 07:00:03', '2018-07-20 07:03:12', NULL);
INSERT INTO `grupos` VALUES (3, 'Director do Curso', 'Este grupo possui todos os utilizadores da Comissão do Curso', '2018-07-20 07:02:17', '2018-07-20 07:04:45', NULL);
INSERT INTO `grupos` VALUES (4, 'Supervisor', 'Este grupo possui todos os utilizadores docentes que são Supervisores.', '2018-07-20 07:06:02', '2018-07-20 07:06:02', NULL);
INSERT INTO `grupos` VALUES (6, 'Estudante', 'Este grupo possui todos os utilizadores que são estudantes.', '2018-07-27 10:07:36', '2018-07-27 10:07:36', NULL);

-- ----------------------------
-- Table structure for occupations
-- ----------------------------
DROP TABLE IF EXISTS `occupations`;
CREATE TABLE `occupations`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `comentario` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of occupations
-- ----------------------------
INSERT INTO `occupations` VALUES (1, 'Técnico de Hardware e Software', 'Esta é a profissão de técnico de hardware e software.');
INSERT INTO `occupations` VALUES (2, 'Analista Programador de Sistemas ', 'Este utilizador é analista de sistemas.');
INSERT INTO `occupations` VALUES (3, 'Progamador Java', 'Este utilizador é progamador java');
INSERT INTO `occupations` VALUES (4, 'Gestor de Projectos', 'Este utilizador é gestor de projectos');
INSERT INTO `occupations` VALUES (5, 'Arquivista', 'Este utilizador é arquivista');
INSERT INTO `occupations` VALUES (6, 'Gestor de Incidentes', 'Este utilizador é gestor  de incidentes');

-- ----------------------------
-- Table structure for propostas
-- ----------------------------
DROP TABLE IF EXISTS `propostas`;
CREATE TABLE `propostas`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `areaspesquisa_id` int(11) NOT NULL,
  `descricao` text CHARACTER SET latin1 COLLATE latin1_general_ci NULL,
  `estado` enum('pendente','aprovado','reprovado') CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT 'pendente',
  `parecer` text CHARACTER SET latin1 COLLATE latin1_general_ci NULL,
  `created` datetime(0) NULL DEFAULT NULL,
  `updated` datetime(0) NULL DEFAULT NULL,
  `modified` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of propostas
-- ----------------------------
INSERT INTO `propostas` VALUES (1, 0, 'Sistema de Gestão de Recrutamento e Seleção de Pessoal - Matalana', 1, 'Desenvolver um sistema de gestão de Recursos Humanos', 'pendente', '', NULL, NULL, '2018-07-25 16:37:24');
INSERT INTO `propostas` VALUES (2, 0, 'Sistema de Gestão de Monografias', 6, 'Sistema de gestão de monografias do DMI', 'reprovado', NULL, '2018-07-15 14:50:12', NULL, '2018-07-19 14:26:41');
INSERT INTO `propostas` VALUES (3, 0, 'Sistema de Gestão de avalição de desempenho de estudantes universitarios ', 1, 'Este sistema visa...', 'aprovado', 'Este trabalho foi aprovado pela comissão cientifica.', '2018-07-15 17:51:24', NULL, '2018-07-25 07:10:22');

-- ----------------------------
-- Table structure for trabalhos
-- ----------------------------
DROP TABLE IF EXISTS `trabalhos`;
CREATE TABLE `trabalhos`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `proposta_id` int(11) NOT NULL,
  `estudocaso` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `geral` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  `especificos` text CHARACTER SET latin1 COLLATE latin1_general_ci NULL,
  `dataentrega` date NULL DEFAULT NULL,
  `estrutura` text CHARACTER SET latin1 COLLATE latin1_general_ci NULL,
  `obras` text CHARACTER SET latin1 COLLATE latin1_general_ci NULL,
  `created` datetime(0) NULL DEFAULT NULL,
  `modified` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of trabalhos
-- ----------------------------
INSERT INTO `trabalhos` VALUES (1, 1, 1, 'Escola Prática da Polícia em Matalana -BB', 'Comando da PRMR', '', '2018-08-31', '', '', '2018-08-08 12:43:28', '2018-08-08 13:22:09');
INSERT INTO `trabalhos` VALUES (2, 1, 1, 'Comando da PRMR', 'Gerar', '', '2018-08-29', '', '', '2018-08-08 13:26:23', '2018-08-08 13:26:23');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `primeiro_nome` varchar(225) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ultimo_nome` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `grupo_id` int(11) NOT NULL,
  `passkey` varchar(13) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `timeout` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created` datetime(0) NOT NULL,
  `modified` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Sebastião Júlio', 'Mugunhe', 'sebastian', 'director.faculdade@gmail.com', 2, 'sbstmugunhe', '2018-07-23 18:41:00', '123456', '2018-07-23 16:27:23', '2018-07-30 07:47:22');
INSERT INTO `users` VALUES (2, 'Momede Nazir', 'Amade', 'aula', 'comissao.cientifica@gmail.com', 1, 'mnazir', '2018-07-24 12:01:00', '$2y$10$7EOW1/E4OpAMEN.rnNw8suCy.0mRDVYzWD29aLXPzo2LYwRe6swjG', '2018-07-24 10:02:23', '2018-10-31 18:24:08');
INSERT INTO `users` VALUES (3, 'Justino Fernando', 'Balança', 'justhyno', 'director.curso@gmail.com', 3, 'justhyno', '2018-07-27 12:05:00', '$2y$10$smsxgZp7M/IyyHlGZgv2tOCe9GwUN68tsPsdeC9UXl/aflJH8qGo2', '2018-07-25 12:36:17', '2018-07-30 07:47:50');
INSERT INTO `users` VALUES (4, 'Pena ', 'Carlos', 'penacarlos', 'estudante@gmail.com', 6, 'penacarlos', '2018-07-30 09:47:00', '$2y$10$I3dUKyC7Y4p/IDdEgZ5lZesR/XnzHZYMkJg7Qsq4m/LIN.c5faIiy', '2018-07-27 10:25:13', '2018-07-30 07:48:15');
INSERT INTO `users` VALUES (5, 'Cristina de Sousa', 'Cuna', 'cristina', 'cristina.cuna@gmail.com', 1, 'cuna', NULL, '$2y$10$/vuJPx7HChvDEaqgxzDpcugrhU5.6ZvT4W17wniqNp5ZngSN61qg6', '2018-10-31 18:28:42', '2018-10-31 18:28:42');

SET FOREIGN_KEY_CHECKS = 1;
