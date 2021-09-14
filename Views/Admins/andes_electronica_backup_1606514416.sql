

CREATE TABLE `ciudad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ciudad` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

INSERT INTO ciudad VALUES("1","BARRANQUILLA");
INSERT INTO ciudad VALUES("2","CARTAGENA");
INSERT INTO ciudad VALUES("3","SOLEDAD");
INSERT INTO ciudad VALUES("4","BUCARAMANGA");
INSERT INTO ciudad VALUES("5","SANTA MARTA");
INSERT INTO ciudad VALUES("6","VILLAVICENCIO");
INSERT INTO ciudad VALUES("7","SOACHA");
INSERT INTO ciudad VALUES("8","PEREIRA");
INSERT INTO ciudad VALUES("9","BELLO");
INSERT INTO ciudad VALUES("10","VALLEDUPAR");
INSERT INTO ciudad VALUES("11","PASTO");
INSERT INTO ciudad VALUES("12","MANIZALES");
INSERT INTO ciudad VALUES("13","BUENAVENTURA");
INSERT INTO ciudad VALUES("14","NEIVA");
INSERT INTO ciudad VALUES("15","BARRANCABERMEJA");
INSERT INTO ciudad VALUES("16","PALMIRA");
INSERT INTO ciudad VALUES("17","ARMENIA");
INSERT INTO ciudad VALUES("18","SINCELEJO");
INSERT INTO ciudad VALUES("19","ITAGUI");
INSERT INTO ciudad VALUES("20","FLORIDABLANCA");
INSERT INTO ciudad VALUES("21","RIOHACHA");
INSERT INTO ciudad VALUES("22","ENVIGADO");
INSERT INTO ciudad VALUES("23","DOSQUEBRADAS");
INSERT INTO ciudad VALUES("24","TUNJA");
INSERT INTO ciudad VALUES("25","FLORENCIA");
INSERT INTO ciudad VALUES("26","URIBIA");
INSERT INTO ciudad VALUES("27","IPIALES");
INSERT INTO ciudad VALUES("28","TURBO");
INSERT INTO ciudad VALUES("29","MAICAO");
INSERT INTO ciudad VALUES("30","PIEDECUESTA");
INSERT INTO ciudad VALUES("31","YOPAL");
INSERT INTO ciudad VALUES("32","CARTAGO");
INSERT INTO ciudad VALUES("33","PITALITO");
INSERT INTO ciudad VALUES("34","CAUCASIA");
INSERT INTO ciudad VALUES("35","MALAMBO");
INSERT INTO ciudad VALUES("36","RIONEGRO");
INSERT INTO ciudad VALUES("37","LORICA");
INSERT INTO ciudad VALUES("38","JAMUNDI");
INSERT INTO ciudad VALUES("39","GUADALAJARA DE BUGA");
INSERT INTO ciudad VALUES("40","YUMBO");
INSERT INTO ciudad VALUES("41","SOGAMOSO");
INSERT INTO ciudad VALUES("42","DUITAMA");
INSERT INTO ciudad VALUES("43","GIRARDOT");
INSERT INTO ciudad VALUES("44","BOGOTA DC");



CREATE TABLE `genero` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `genero` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO genero VALUES("1","Masculino");
INSERT INTO genero VALUES("2","Femenino");



CREATE TABLE `producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_producto` varchar(50) NOT NULL,
  `nombre_producto` varchar(50) NOT NULL,
  `marca_producto` varchar(50) NOT NULL,
  `precio_compra` varchar(50) NOT NULL,
  `cantidad_compra` varchar(50) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_producto_usuario` (`id_usuario`),
  CONSTRAINT `fk_producto_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO producto VALUES("3","9876","lenovo c200","lenovo","45000","2","1");
INSERT INTO producto VALUES("4","45654","samsung a10","samsung","450000","34","1");
INSERT INTO producto VALUES("7","324342","computador","hp","3500000","5","1");



CREATE TABLE `rol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO rol VALUES("1","Administrador");
INSERT INTO rol VALUES("2","Empleado");



CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `id_genero` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_ciudad` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuario_genero` (`id_genero`),
  KEY `fk_usuario_rol` (`id_rol`),
  KEY `fk_usuario_ciudad` (`id_ciudad`),
  CONSTRAINT `fk_usuario_ciudad` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudad` (`id`),
  CONSTRAINT `fk_usuario_genero` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id`),
  CONSTRAINT `fk_usuario_rol` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO usuario VALUES("1","Juan","Ordoñez","email@correo.com","123","6466576565","cra 34","2020-10-13","1","1","44");
INSERT INTO usuario VALUES("2","pepe","gonzales","pepe@correo.com","123","231312","calle 45","2020-10-27","1","2","43");
INSERT INTO usuario VALUES("4","Marco","Polo Caicedo","marco.polo@hotmail.com","1234","3187199145","Av 2B2 Calle 74 N 35","1987-12-19","1","1","40");

