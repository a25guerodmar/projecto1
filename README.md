# Projecte Videojocs amb PHP

Aquest projecte servira per fer un CRUD de PHP que permet gestionar una base de dades de videojocs. L’aplicació inclou funcionalitats per crear, llegir, actualitzar i eliminar registres, utilitzant formularis i connexió a MySQL amb consultes preparades per millorar la seguretat. A més, incorpora una interfície senzilla amb Bootstrap i permet classificar els videojocs per gènere mitjançant un camp ENUM, mostrant-los de forma visual amb diferents colors.

# Sentecia SQL per crear les taules en la base de dades

CREATE TABLE videojuegos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(150) NOT NULL,
    descripcion TEXT NOT NULL,
    genero ENUM('Accion', 'RPG', 'Estrategia', 'Deportes') NOT NULL DEFAULT 'Accion'
);

**autor Guery Rodríguez**