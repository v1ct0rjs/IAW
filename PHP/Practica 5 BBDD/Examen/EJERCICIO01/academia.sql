CREATE DATABASE IF NOT EXISTS academia;
USE academia;

-- Creación de la tabla profesores
CREATE TABLE IF NOT EXISTS profesores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    dni VARCHAR(9) UNIQUE NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    especialidad VARCHAR(50) NOT NULL,
    fecha_contratacion DATE NOT NULL
);