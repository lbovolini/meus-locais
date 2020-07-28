CREATE TABLE IF NOT EXISTS `meus_locais`.`Locais` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NULL,
  `cep` VARCHAR(8) NULL,
  `logradouro` VARCHAR(150) NULL,
  `complemento` VARCHAR(100) NULL,
  `numero` VARCHAR(6) NULL,
  `bairro` VARCHAR(100) NULL,
  `uf` VARCHAR(2) NULL,
  `cidade` VARCHAR(100) NULL,
  `data` DATE NULL,
  PRIMARY KEY (`id`)
);
