-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS votacion;

-- Seleccionar la base de datos
USE votacion;



-- Crear la tabla de regiones
CREATE TABLE regiones (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL
);

CREATE TABLE votos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre_apellido VARCHAR(255) NOT NULL,
    alias VARCHAR(255) NOT NULL,
    rut VARCHAR(12) NOT NULL,
    region_id INT NOT NULL,
    comuna_id INT NOT NULL,
    candidato_id INT NOT NULL,
    como_se_entero VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL, -- Agregamos la columna 'email' aquí
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    UNIQUE KEY idx_rut (rut) -- Creamos el índice único en la columna 'rut'
);


CREATE TABLE comunas (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    region_id INT NOT NULL,
    FOREIGN KEY (region_id) REFERENCES regiones(id)
);

-- Crear la tabla de candidatos
CREATE TABLE candidatos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre_apellido VARCHAR(255) NOT NULL UNIQUE
);


-- Insertar regiones
INSERT INTO regiones (nombre) VALUES 
('Region de Arica y Parinacota'),
('Region de Tarapaca'),
('Region de Antofagasta'),
('Region de Atacama'),
('Region de Coquimbo'),
('Region de Valparaiso'),
('Region Metropolitana de Santiago'),
('Region del Libertador General Bernardo O''Higgins'),
('Region del Maule'),
('Region de Nuble'),
('Region del Biobio'),
('Region de La Araucania'),
('Regionde Los Rios'),
('Region de Los Lagos'),
('Region de Aysen del General Carlos Ibanez del Campo'),
('Region de Magallanes y de la Antartica Chilena');



-- Crear la tabla de comunas


-- Insertar comunas de Arica y Parinacota
INSERT INTO comunas (nombre, region_id) VALUES 
('Arica', 1),
('Camarones', 1),
('Putre', 1),
('General Lagos', 1);

-- Insertar comunas de Tarapacá
INSERT INTO comunas (nombre, region_id) VALUES 
('Iquique', 2),
('Alto Hospicio', 2),
('Pozo Almonte', 2),
('Camina', 2),
('Colchane', 2),
('Huara', 2);

-- Insertar comunas de Antofagasta
INSERT INTO comunas (nombre, region_id) VALUES 
('Antofagasta', 3),
('Mejillones', 3),
('Sierra Gorda', 3),
('Taltal', 3),
('Calama', 3),
('Ollague', 3);

-- Insertar comunas de Atacama
INSERT INTO comunas (nombre, region_id) VALUES 
('Copiapo', 4),
('Caldera', 4),
('Tierra Amarilla', 4),
('Chañaral', 4),
('Diego de Almagro', 4),
('Vallenar', 4);

-- Insertar comunas de Coquimbo
INSERT INTO comunas (nombre, region_id) VALUES 
('La Serena', 5),
('Coquimbo', 5),
('Andacollo', 5),
('La Higuera', 5),
('Paiguano', 5),
('Vicuna', 5);

-- Insertar comunas de Valparaíso
INSERT INTO comunas (nombre, region_id) VALUES 
('Valparaiso', 6),
('Casablanca', 6),
('Concon', 6),
('Juan Fernandez', 6),
('Puchuncavi', 6),
('Quintero', 6);

-- Insertar comunas de Región Metropolitana
INSERT INTO comunas (nombre, region_id) VALUES 
('Santiago', 7),
('Cerrillos', 7),
('Cerro Navia', 7),
('Conchali', 7),
('El Bosque', 7),
('Estacion Central', 7);

-- Insertar comunas de O'Higgins
INSERT INTO comunas (nombre, region_id) VALUES 
('Rancagua', 8),
('Codegua', 8),
('Coinco', 8),
('Coltauco', 8),
('Donihue', 8),
('Graneros', 8);

-- Insertar comunas del Maule
INSERT INTO comunas (nombre, region_id) VALUES 
('Talca', 9),
('Constitucion', 9),
('Curepto', 9),
('Curico', 9),
('Empedrado', 9),
('Maule', 9);

-- Insertar comunas de Ñuble
INSERT INTO comunas (nombre, region_id) VALUES 
('Chillan', 10),
('Bulnes', 10),
('Cobquecura', 10),
('Coelemu', 10),
('Coihueco', 10),
('Chillan Viejo', 10);

-- Insertar comunas del Biobío
INSERT INTO comunas (nombre, region_id) VALUES 
('Concepcion', 11),
('Coronel', 11),
('Chiguayante', 11),
('Florida', 11),
('Hualqui', 11),
('Lota', 11);

-- Insertar comunas de La Araucanía
INSERT INTO comunas (nombre, region_id) VALUES 
('Temuco', 12),
('Carahue', 12),
('Cunco', 12),
('Curarrehue', 12),
('Freire', 12),
('Galvarino', 12);

-- Insertar comunas de Los Ríos
INSERT INTO comunas (nombre, region_id) VALUES 
('Valdivia', 13),
('Corral', 13),
('Lanco', 13),
('Los Lagos', 13),
('Mafil', 13),
('Mariquina', 13);

-- Insertar comunas de Los Lagos
INSERT INTO comunas (nombre, region_id) VALUES 
('Puerto Montt', 14),
('Calbuco', 14),
('Cochamo', 14),
('Fresia', 14),
('Frutillar', 14),
('Los Muermos', 14);

-- Insertar comunas de Aysén
INSERT INTO comunas (nombre, region_id) VALUES 
('Coyhaique', 15),
('Lago Verde', 15),
('Cochrane', 15),
('O''Higgins', 15),
('Tortel', 15),
('Chile Chico', 15);

-- Insertar comunas de Magallanes
INSERT INTO comunas (nombre, region_id) VALUES
('Punta Arenas', 16),
('Laguna Blanca', 16),
('Rio Verde', 16),
('San Gregorio', 16),
('Cabo de Hornos (Ex Navarino)', 16),
('Antartica', 16);


-- Insertar candidatos
INSERT INTO candidatos (nombre_apellido) VALUES 
('Bernardo O''Higgins'),
('Jose Joaquin Prieto'),
('Manuel Montt'),
('Jose Manuel Balmaceda');

-- Crear la tabla de votos

-- Agregar relación entre votos y regiones
ALTER TABLE votos
ADD FOREIGN KEY (region_id) REFERENCES regiones(id);

-- Agregar relación entre votos y comunas
ALTER TABLE votos
ADD FOREIGN KEY (comuna_id) REFERENCES comunas(id);

-- Agregar relación entre votos y candidatos
ALTER TABLE votos
ADD FOREIGN KEY (candidato_id) REFERENCES candidatos(id);






