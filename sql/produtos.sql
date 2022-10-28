
--
-- Banco de dados: `produtos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carne`
--

CREATE TABLE `carne` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `preco` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `molho`
--

CREATE TABLE `molho` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `preco` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pao`
--

CREATE TABLE `pao` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `preco` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `porcao`
--

CREATE TABLE `porcao` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `preco` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `queijo`
--

CREATE TABLE `queijo` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `preco` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------


-- Estrutura da tabela `salada`


CREATE TABLE `salada` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `preco` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




-- Índices para tabela `carne`

ALTER TABLE `carne`
  ADD PRIMARY KEY (`id`);


-- Índices para tabela `molho`

ALTER TABLE `molho`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `pao`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `porcao`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `queijo`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `salada`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `carne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `molho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `pao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `porcao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `queijo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `salada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
