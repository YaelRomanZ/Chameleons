CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(200),
    imagen text NOT NULL,
    descripcion text NOT NULL,
    precio float(10, 2) NOT NULL,
);


INSERT INTO productos (id, nombre, imagen, descripcion, precio) VALUES
(1, 'Playera casual', 'img\shop\1.jpg', 'Playera casual gris', 170.00),
(2, 'Tenis deportivos', 'img\shop\2.jpg', 'Tenis deportivos blancos', 1500.00),
(3, 'Bolso deportivo', 'img\shop\3.jpg', 'Bolso deportivo azul', 500.00),
(4, 'Tenis casuales', 'img\shop\4.jpg', 'Tenis casuales azules', 1100.00),
(5, 'Gorro de lana', 'img\shop\5.jpg', 'Gorro de lana gris', 300.00),
(6, 'Abrigo', 'img\shop\6.jpg', 'Abrigo para mujer vino', 600.00),
(7, 'Tenis casuales', 'img\shop\7.jpg', 'Tenis casuales dark obsidian', 450.00),
(8, 'Chaqueta Urbana', 'img\shop\8.jpg', 'Chaqueta urbana azul marino', 2100.00),
(9, 'Mochila bandolera', 'img\shop\9.jpg', 'Mochila bandolera musgo', 650.00),
(10, 'Reloj de Cuarzo', 'img\shop\10.jpg', 'Reloj de cuarzo analogico', 3000.00),
(11, 'Sombrero Cowboy', 'img\shop\11.jpg', 'Sombrero Cowboy', 450.00),
(12, 'Zapatillas informales', 'img\shop\12.jpg', 'Zpatillas informales blancos', 1500.00),
(13, 'Relog M12', 'img\shop\13.jpg', 'Reloj M12 analogico', 2500.00),
(14, 'Botas', 'img\shop\14.jpg', 'Botas caballero marrones', 1700.00),
(15, 'Gorro', 'img\shop\15.jpg', 'Gorro gris', 240.00),
(16, 'Camiseta casual', 'img\shop\16.jpg', 'Camiseta casual morada', 200.00),
(17, 'Chaqueta Bomber', 'img\shop\17.jpg', 'Chaqueta Bomber', 750.00),
(18, 'Gorra Krusty', 'img\shop\18.jpg', 'Gorra Krusty amarilla', 550.00),
(19, 'Sudadera con gorra', 'img\shop\19.jpg', 'Sudadera con gorra negra', 650.00),
(20, 'Gabardina', 'img\shop\20.jpg', 'Gabardina naranja', 1550.00),
(21, 'Saco', 'img\shop\20.jpg', 'Saco negro', 1250.00),
(22, 'Mochila Rubiks', 'img\shop\17.jpg', 'Mochila Rubiks azul', 750.00),
(23, 'Camisa ligera', 'img\shop\18.jpg', 'Camisa ligera verde', 360.00),
(24, 'Camiseta de Algodón', 'img\shop\19.jpg', 'Camiseta de algodón', 350.00);
