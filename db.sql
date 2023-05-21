CREATE TABLE estudiantes(
	id_carnet INT NOT NULL , 
    nombre_estudiante VARCHAR(50) , 
    apellido_estudiante VARCHAR(50), 
    PRIMARY KEY(id_carnet)
);  


INSERT INTO estudiantes (id_carnet, nombre_estudiante, apellido_estudiante)
VALUES (FLOOR(RAND() * 100000), 'Juan', 'Pérez'),
        (FLOOR(RAND() * 100000), 'Jose', 'Guzman'),
        (FLOOR(RAND() * 100000), 'Karla', 'Pérez'),
        (FLOOR(RAND() * 100000), 'Gustavo', 'Hernandez')

;
