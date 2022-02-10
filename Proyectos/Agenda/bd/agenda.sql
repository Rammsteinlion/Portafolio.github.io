
/*CODIGO BD EN WORBENCH*/
#CREATE SCHEMA `agenda_php` ;

use agenda_php;

/*TABLA CATEGORIA*/
CREATE TABLE `agenda_php`.`t_categoria` (
  `id_categoria` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NULL,
  `descripcion` TEXT NULL,
  `fechainsert` DATETIME NULL DEFAULT now(),
  PRIMARY KEY (`id_categoria`));



/*tabla contactos*/

CREATE TABLE `agenda_php`.`t_contacto` (
  `idt_contacto` INT NOT NULL AUTO_INCREMENT,
  `id_categoria` INT NOT NULL,
  `nombre` VARCHAR(50) NULL,
  `primer_apellido` VARCHAR(50) NULL,
  `segundo_apellido` VARCHAR(50) NULL,
  `email` VARCHAR(100) NULL DEFAULT 'unique',
  `telefono` VARCHAR(30) NULL,
  `fechainsert` DATETIME NOT NULL DEFAULT now(),
  PRIMARY KEY (`idt_contacto`));

/*relacion de tablas*/
ALTER TABLE `agenda_php`.`t_contactos` 
ADD CONSTRAINT `fkCategoriaContacto`
  FOREIGN KEY (`id_categoria`)
  REFERENCES `agenda_php`.`t_categorias` (`id_categoria`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;