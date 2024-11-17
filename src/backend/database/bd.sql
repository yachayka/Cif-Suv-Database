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