SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

CREATE SCHEMA IF NOT EXISTS `coursera` DEFAULT CHARACTER SET utf8 ;
USE `coursera` ;

-- -----------------------------------------------------
-- Table `coursera`.`imagenesUsuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `coursera`.`imagenesUsuarios` (
  `idImagenesUsuarios` INT NOT NULL AUTO_INCREMENT,
  `direccionImagen` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`idImagenesUsuarios`));


-- -----------------------------------------------------
-- Table `coursera`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE `coursera`.`usuarios` (
  `idusuarios` INT NOT NULL AUTO_INCREMENT,
  `Nombre_usuario` VARCHAR(45) NOT NULL,
  `contrasenia` VARCHAR(45) NOT NULL,
  `correo` VARCHAR(45) NOT NULL,
  `idImagenesUsuarios` INT NOT NULL,
  PRIMARY KEY (`idusuarios`),
  UNIQUE INDEX (`correo`),
  FOREIGN KEY (`idImagenesUsuarios`)
  REFERENCES `coursera`.`imagenesUsuarios` (`idImagenesUsuarios`)
);


-- -----------------------------------------------------
-- Table `coursera`.`forEnterprise`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `coursera`.`forEnterprise` (
  `idforEnterprise` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `contrasenia` VARCHAR(45) NOT NULL,
  `titulo` VARCHAR(45) NOT NULL,
  `nombreOrganizacion` VARCHAR(45) NOT NULL,
  `goverment` VARCHAR(45) NOT NULL,
  `nonprofit` VARCHAR(45) NOT NULL,
  `numeroTelefono` VARCHAR(45) NOT NULL,
  `pais` VARCHAR(45) NOT NULL,
  `compania` VARCHAR(45) NOT NULL,
  `learners` VARCHAR(45) NOT NULL,
  `descripcion` VARCHAR(45) NOT NULL,
  `correo` VARCHAR(45) NOT NULL,
  `num_telefono` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idforEnterprise`),
  UNIQUE INDEX (`correo`),
  UNIQUE INDEX (`num_telefono`)
  );
  
  CREATE TABLE IF NOT EXISTS `coursera`.`Cursos` (
  `idCurso` INT NOT NULL AUTO_INCREMENT,
  `nombreCurso` VARCHAR(45) NOT NULL,
  `descripcionCurso` VARCHAR(400) NOT NULL,
  `tutor` VARCHAR(45) NOT NULL,
  `Archivos` VARCHAR(500) NULL,
  `idforEnterprise` INT NOT NULL,
  PRIMARY KEY (`idCurso`),
  INDEX `idforEnterprise_idx` (`idforEnterprise` ASC),
  CONSTRAINT `idforEnterprise`
    FOREIGN KEY (`idforEnterprise`)
    REFERENCES `coursera`.`forEnterprise` (`idforEnterprise`)
    )
ENGINE = InnoDB;
  
  CREATE TABLE IF NOT EXISTS `coursera`.`ArchivosCursos` (
  `idArchivosCursos` INT NOT NULL AUTO_INCREMENT,
  `nombreArchivo` VARCHAR(45) NOT NULL,
  `ArchivosCursoscol` VARCHAR(45) NOT NULL,
  `direccionArchivo` VARCHAR(45) NOT NULL,
  `idCursos` INT NOT NULL,
  PRIMARY KEY (`idArchivosCursos`),
  INDEX `idCurso_idx` (`idCursos` ASC),
  CONSTRAINT `idCurso`
    FOREIGN KEY (`idCursos`)
    REFERENCES `coursera`.`Cursos` (`idCurso`)
    )
;

-- ---------------------------------------------------
-- Esto solo si no existe el usuario  
-- ---------------------------------------------------
CREATE USER usuario@localhost IDENTIFIED BY 'usuarios123';

-- -------------------------------------------------------
-- Esto crea los permisos respectivos para el usuario
-- Solo se le da permiso a la tabla usuarios pero no 
-- a toda la BD
-- -------------------------------------------------------

GRANT DELETE ON coursera.usuarios TO 'usuario'@'localhost'; 
GRANT CREATE ON coursera.usuarios TO 'usuario'@'localhost'; 
GRANT SELECT ON coursera.usuarios TO 'usuario'@'localhost'; 
GRANT UPDATE ON coursera.usuarios TO 'usuario'@'localhost';
GRANT INSERT ON coursera.usuarios TO 'usuario'@'localhost'; 

-- ---------------------------------------------------------
-- En esta parte vamos a crear al usuario
-- ---------------------------------------------------------

CREATE USER forBussiness@localhost identified BY 'forBussiness123';

-- ---------------------------------------------------------
-- Esta es la parte en la que vamos a darle los permisos 
-- a la tabla donde se va ingresar la informacion de los
-- tutores
-- ---------------------------------------------------------

GRANT DELETE ON coursera.forenterprise TO 'forBussiness'@'localhost'; 
GRANT CREATE ON coursera.forenterprise TO 'forBussiness'@'localhost'; 
GRANT SELECT ON coursera.forenterprise TO 'forBussiness'@'localhost'; 
GRANT UPDATE ON coursera.forenterprise TO 'forBussiness'@'localhost';
GRANT INSERT ON coursera.forenterprise TO 'forBussiness'@'localhost';

GRANT DELETE ON coursera.cursos TO 'forBussiness'@'localhost'; 
GRANT CREATE ON coursera.cursos TO 'forBussiness'@'localhost'; 
GRANT SELECT ON coursera.cursos TO 'forBussiness'@'localhost'; 
GRANT UPDATE ON coursera.cursos TO 'forBussiness'@'localhost';
GRANT INSERT ON coursera.cursos TO 'forBussiness'@'localhost'; 

GRANT DELETE ON coursera.archivosCursos TO 'forBussiness'@'localhost'; 
GRANT CREATE ON coursera.archivosCursos TO 'forBussiness'@'localhost'; 
GRANT SELECT ON coursera.archivosCursos TO 'forBussiness'@'localhost'; 
GRANT UPDATE ON coursera.archivosCursos TO 'forBussiness'@'localhost';
GRANT INSERT ON coursera.archivosCursos TO 'forBussiness'@'localhost';

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
