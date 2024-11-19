CREATE DATABASE document_system;

USE document_system;

CREATE TABLE users_doc (
    id INTEGER PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    podpis TINYINT(1) NOT NULL,
    link TEXT NOT NULL
);



-- создать таблицу сотрудников
CREATE TABLE employees (
    id INT PRIMARY KEY,
    name VARCHAR(255),
    surname VARCHAR(255),
    position VARCHAR(255),
    rights VARCHAR(255)
);

-- создать таблицу папок
CREATE TABLE folders (
    id INT PRIMARY KEY,
    name VARCHAR(255),
    url VARCHAR(255)
);