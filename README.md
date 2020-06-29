# Tu Laptop
## Descripción
Tu Laptop es una página web de ejemplo basada en la página [zonalaptop.com.uy](https://zonalaptop.com.uy/) con algunas modificaciones. No es una tienda oficial, solo es un proyecto para incluirlo en mi portfolio.


## Lenguajes utilizados
* HTML
* CSS
* Bootstrap
* Responsive Web Design
* Javascript
* PHP
* SQL


## Agregar la base de datos (Obligatorio)
Para visualiar y utilizar la página se debe crear la base de datos.
Copie y pegue el siguiente código en su base de datos:
```
CREATE DATABASE tu_laptop;
USE tu_laptop;

CREATE TABLE usuarios(
id              int(255) auto_increment not null,
nombre          varchar(100) not null,
apellidos       varchar(255) not null,
email           varchar(255) not null,
password        varchar(255) not null,
rol             varchar(20),
imagen          varchar(255),
CONSTRAINT pk_usuarios PRIMARY KEY(id),
CONSTRAINT uq_email UNIQUE(email)  
)ENGINE=InnoDb;

INSERT INTO usuarios VALUES(NULL, 'Admin', 'Admin', 'admin@admin.com', 'contraseña', 'admin', null);

CREATE TABLE categorias(
id              int(255) auto_increment not null,
nombre          varchar(100) not null,
CONSTRAINT pk_categorias PRIMARY KEY(id) 
)ENGINE=InnoDb;

INSERT INTO categorias VALUES(null, 'Notebooks');
INSERT INTO categorias VALUES(null, 'Celulares');
INSERT INTO categorias VALUES(null, 'PC');
INSERT INTO categorias VALUES(null, 'Consolas');
INSERT INTO categorias VALUES(null, 'Cámaras');
INSERT INTO categorias VALUES(null, 'Accesorios');
INSERT INTO categorias VALUES(null, 'Audio & Video');
INSERT INTO categorias VALUES(null, 'Networking');
INSERT INTO categorias VALUES(null, 'Tablets');
INSERT INTO categorias VALUES(null, 'Repuestos y partes');

CREATE TABLE productos(
id              int(255) auto_increment not null,
categoria_id    int(255) not null,
nombre          varchar(100) not null,
descripcion     text not null,
precio          float(100,2) not null,
stock           int(255) not null,
precio_oferta   float(100,2) not null,
imagen          varchar(255),
destacado       varchar(2) not null,
CONSTRAINT pk_productos PRIMARY KEY(id),
CONSTRAINT fk_producto_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id)
)ENGINE=InnoDb;

INSERT INTO productos VALUES(null, '1', 'Notebook Microsoft Surface I5/8gb/128ssd Open Box', 'Procesador- Intel Core i5, Frecuencia del procesador- Hasta 3.00 GHz', '1900.00', '20', '1600.00', 'https://s.fenicio.app/f2/zlt/catalogo/articulos/889842185300-1_460x460_1548787128_021.jpg', 'si');
INSERT INTO productos VALUES(null, '1', 'Netbook Gateway LT4010U Dual 1GB 320GB', 'Procesador- Intel Atom, Frecuencia del procesador- 1.6 GHz', '159.00', '40', '0.00', 'https://s.fenicio.app/f2/zlt/catalogo/articulos/880000001470-1_460x460_1569687811_d83.jpg', 'no');
INSERT INTO productos VALUES(null, '1', 'Notebook Dell XPS D12-533CRBFB i5/4GB/128GB SSD', 'Modelo- Xps - D12-533CRBFB, Procesador- Intel Core i5 5ta generacion', '899.00', '3', '799.00', 'https://s.fenicio.app/f2/zlt/catalogo/articulos/880000010595-1_460x460_1569418209_39c.jpg', 'si');
INSERT INTO productos VALUES(null, '1', 'Notebook Asus C200MADS01 Celeron/2Gb/16Gb', 'Procesador- Intel Celeron, Disco Duro- 16 GB', '179.00', '20', '168.00', 'https://s.fenicio.app/f2/zlt/catalogo/articulos/880000019284-1_460x460_1592404280_6c0.jpg', 'no');
INSERT INTO productos VALUES(null, '1', 'Macbook Air 12 MNYH2E/A M3 8gb 256ssd', 'Procesador- Core M, Frecuencia del procesador- 1.2 Ghz (hasta 3.0 Ghz con Turbo Boost)', '1358.00', '60', '0.00', 'https://s.fenicio.app/f2/zlt/catalogo/articulos/190198202437-1_460x460_1590171028_736.jpg', 'si');
INSERT INTO productos VALUES(null, '1', 'Macbook Pro MPXQ2LL/A i5/8GB/128Ssd OB', 'Procesador- Intel Core i5, Frecuencia del procesador- 2,3 GHz a 3,6 GHz', '1899.00', '11', '1799.00', 'https://s.fenicio.app/f2/zlt/catalogo/articulos/190198392985-1_460x460_1575309694_6f5.jpg', 'si');
INSERT INTO productos VALUES(null, '1', 'Macbook Air 13 ZOUU3LL/A i7/8Gb/128Ssd New', 'Procesador- Intel Core I7, Disco duro- 128SSD', '2822.00', '6', '2500.00', 'https://s.fenicio.app/f2/zlt/catalogo/articulos/190199107069-1_460x460_1568730745_78d.jpg', 'no');
INSERT INTO productos VALUES(null, '2', 'Celular Xiaomi Mi A3 4gb 128gb Blue New', 'Modelo- A3, Procesador- Qualcomm Snapdragon 665', '400.00', '28', '300.00', 'https://s.fenicio.app/f2/zlt/catalogo/articulos/6941059626367-1_460x460_1587746750_62d.jpg', 'si');
INSERT INTO productos VALUES(null, '3', 'All in one Lenovo F0DT001TUS i3 4gb+16gb 1tb', 'Modelo- F0DT001TUS, Procesador- Intel Core i3', '899.00', '7', '699.00', 'https://s.fenicio.app/f2/zlt/catalogo/articulos/190403980020-1_460x460_1591980710_be1.jpg', 'si');
INSERT INTO productos VALUES(null, '4', 'PS4 Pro CUH-7215B 4k 1tb New', 'Modelo- PRO CUH-7215B, Estado- Nuevo', '669.00', '12', '599.00', 'https://s.fenicio.app/f2/zlt/catalogo/articulos/711719524144-1_460x460_1588002574_d56.jpg', 'si');
INSERT INTO productos VALUES(null, '5', 'Camara de Vigilancia Inalámbrica DXG-110V Wi-Fi', 'Estado- Nuevo, Garantía- 6 meses', '99.00', '58', '0.00', 'https://s.fenicio.app/f2/zlt/catalogo/articulos/880734011004-1_460x460_1548786514_b94.jpg', 'si');
INSERT INTO productos VALUES(null, '6', 'Google Chromecast 3 Negro', 'Estado- Nuevo, Garantía- 6 meses', '59.00', '5', '50.00', 'https://s.fenicio.app/f2/zlt/catalogo/articulos/193575003962-1_460x460_1587994080_876.jpg', 'si');
INSERT INTO productos VALUES(null, '7', 'Bola sicodelica giratoria 5 pulgadas 7824', 'Estado- Nuevo, Garantía- 30 días', '14.99', '14', '0.00', 'https://s.fenicio.app/f2/zlt/catalogo/articulos/880000057484-1_460x460_1566394944_b0c.jpg', 'si');
INSERT INTO productos VALUES(null, '8', 'Extensor Repetidor de Seńal D-Link DAP-1525 110V', 'Estado- Nuevo, Garantía- 6 meses', '39.00', '66', '35.00', 'https://s.fenicio.app/f2/zlt/catalogo/articulos/790069411175-1_460x460_1548783484_43e.jpg', 'si');
INSERT INTO productos VALUES(null, '9', 'Ipad Air ME913/LLA 16Ssd Silver Open Box', 'Modelo- MH0W2LL/A, Estado- Open Box', '469.00', '52', '400.00', 'https://s.fenicio.app/f2/zlt/catalogo/articulos/880000056180-1_460x460_1563222744_c92.jpg', 'si');
INSERT INTO productos VALUES(null, '10', 'Bateria Original J7 Prime BT-01', 'Esta batería es original Dimensiones: 5.7 x 4.0 x 0.5 cm Capacidad: 1200mAh / 4.44 Wh Voltaje: 3.7V', '45.00', '48', '0.00', 'https://s.fenicio.app/f2/zlt/catalogo/articulos/880000042268-1_460x460_1548785560_271.jpg', 'si');

CREATE TABLE pedidos(
id              int(255) auto_increment not null,
usuario_id      int(255) not null,
departamento    varchar(100) not null,
direccion       varchar(255) not null,
coste           float(200,2) not null,
estado          varchar(20) not null,
fecha           date,
hora            time,
CONSTRAINT pk_pedidos PRIMARY KEY(id),
CONSTRAINT fk_pedido_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
)ENGINE=InnoDb;

CREATE TABLE lineas_pedidos(
id              int(255) auto_increment not null,
pedido_id       int(255) not null,
producto_id     int(255) not null,
unidades        int(255) not null,
CONSTRAINT pk_lineas_pedidos PRIMARY KEY(id),
CONSTRAINT fk_linea_pedido FOREIGN KEY(pedido_id) REFERENCES pedidos(id),
CONSTRAINT fk_linea_producto FOREIGN KEY(producto_id) REFERENCES productos(id)
)ENGINE=InnoDb;
```
##### Nota: Este código está en "database/database.sql"


## Agregar usuario
1. Ir a "Mi Cuenta"
2. Ir a "Crear una cuenta"
3. Rellenar los campos y dar en "Crear Cuenta"


## Iniciar sesión
1. Ir a "Mi Cuenta"
2. Rellenar los campos y dar en "Ingresar"


## Convertir a administrador una cuenta (solo para ejemplo)
1. Iniciar sesión
2. Ir a "Mi Cuenta"
3. Ir a "Mis datos"
4. Cambiar el Rol de "User" a "Admin"


## Crear productos
1. Tener la cuenta como administrador
2. Ir a "Mi cuenta"
3. Ir a "Crear Productos"
4. Rellenar los campos y dar en "Guardar"


## Crear categorias
1. Tener la cuenta como administrador
2. Ir a "Mi cuenta"
3. Ir a "Crear Categorias"
4. Rellenar los campos y dar en "Guardar"


## Agregar productos al carrito
1. Iniciar sesion
2. Buscar el producto que quieras agregar
3. Seleccionar la cantidad que se desea agregar y dar click en "Comprar"


## Realizar pedido
1. Ir al carrito de compras y dar click en "Hacer pedido"
2. Rellenar los campos y dar click en "Enviar"


## Gestionar pedidos
1. Tener la cuenta como administrador
2. Ir al icono de carrito (arriba a la derecha)
3. Realizar cambios a los pedidos de los clientes
4. Guardar
