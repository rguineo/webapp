create table usuarios(
id_usuario int not null auto_increment,
usuario text,
password text,
nombres text,
apellidos text,
rol int,
primary key(id_usuario)
);

INSERT INTO usuarios VALUES(NULL, 'claudio@correo.cl', '123', 'Claudio Andres', 'Pinto Caceres', 0);

INSERT INTO usuarios VALUES(NULL, 'juan@correo.cl', '123456', 'Juan Pedro', 'Perez Soto', 1);

INSERT INTO usuarios VALUES(NULL, 'javiera@correo.cl', '1234567', 'Javiera Antonia', 'Reinoso Aravena', 2);