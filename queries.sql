CREATE TABLE `loja_phpoo`.`users` (
`id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`nome` VARCHAR(150),
`sobrenome` VARCHAR(255),
`is_admin` INT,
`email` VARCHAR(255),
`password` VARCHAR(255)
);


CREATE TABLE `loja_phpoo`.`produtos` (
	`id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	`produto_nome` VARCHAR(50),
	`produto_valor` DECIMAL(10,2),
	`produto_slug` VARCHAR(150),
	`produto_descricao` TEXT,
	`produto_foto` VARCHAR(150),
	`produto_promocao` INT(11),
	`produto_valor_promocao` DECIMAL(10,2),
	`produto_categoria` INT(11),
	`produto_marca` INT(11),
	`produto_presente` INT(11),
	`produto_destaque` INT(11)
);