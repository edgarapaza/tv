CREATE TABLE estados(
idestado int not null primary key auto_increment,
numSolicitud int not not,
fechaCreacion datetime not null,
fechaFin datetime not null,
estado int(1) not null
);

CREATE TABLE visualizacion(
idvisualiz int not null PRIMARY KEY auto_increment,
idestado int not null,
busqueda int(1) not null,
consulta int(1) not null,
encontrado int(1) not null,
calificacion int(1) not null,
pago int(1) not null,
recogido int(1) not null
fechaModificacion datetime not null
codPersonal int not null
);

CREATE TABLE permisos(
idpermisos int not null PRIMARY KEY auto_increment,

);