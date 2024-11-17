# Cif-Suv-Database

Схема базы данных:

CREATE TABLE Users (
  id INT PRIMARY KEY,
  username VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  role VARCHAR(255) NOT NULL  -- администратор, сотрудник, гость
);

CREATE TABLE Departments (
  id INT PRIMARY KEY,
  name VARCHAR(255) NOT NULL
);

CREATE TABLE Documents (
  id INT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  type VARCHAR(255) NOT NULL,  -- текстовый, изображение, видео и т.п.
  creator_id INT NOT NULL,
  department_id INT NOT NULL,
  FOREIGN KEY (creator_id) REFERENCES Users(id),
  FOREIGN KEY (department_id) REFERENCES Departments(id)
);

CREATE TABLE DocumentMetadata (
  id INT PRIMARY KEY,
  document_id INT NOT NULL,
  key VARCHAR(255) NOT NULL,
  value VARCHAR(255) NOT NULL,
  FOREIGN KEY (document_id) REFERENCES Documents(id)
);

CREATE TABLE DocumentVersions (
  id INT PRIMARY KEY,
  document_id INT NOT NULL,
  version INT NOT NULL,
  content TEXT NOT NULL,
  FOREIGN KEY (document_id) REFERENCES Documents(id)
);

CREATE TABLE DocumentHistory (
  id INT PRIMARY KEY,
  document_id INT NOT NULL,
  version_id INT NOT NULL,
  user_id INT NOT NULL,
  timestamp TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (document_id) REFERENCES Documents(id),
  FOREIGN KEY (version_id) REFERENCES DocumentVersions(id),
  FOREIGN KEY (user_id) REFERENCES Users(id)
);

CREATE TABLE DocumentFolders (
  id INT PRIMARY KEY,
  document_id INT NOT NULL,
  folder_id INT NOT NULL,
  FOREIGN KEY (document_id) REFERENCES Documents(id)
);

CREATE TABLE Folders (
  id INT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  parent_id INT,
  FOREIGN KEY (parent_id) REFERENCES Folders(id)
);

Описание таблиц:

Users: таблица для хранения данных о сотрудниках, включая их имена, пароли и роли.
Departments: таблица для хранения данных о подразделениях, включая их названия.
Documents: таблица для хранения данных о документах, включая их названия, типы, создателей и подразделения.
DocumentMetadata: таблица для хранения метаданных о документах, включая их ключи и значения.
DocumentVersions: таблица для хранения версий документов, включая их содержимое и номера версий.
DocumentHistory: таблица для хранения истории изменений документов, включая их версии, пользователей и время изменения.
DocumentFolders: таблица для хранения данных о папках документов, включая их идентификаторы и папки.
Folders: таблица для хранения данных о папках, включая их названия и родительские папки.
Описание отношений между таблицами:

User-Document: отношение многие-один между сотрудниками и документами, где один сотрудник может создать множество документов.
Department-Document: отношение многие-один между подразделениями и документами, где один документ принадлежит одному подразделению.
Document-DocumentMetadata: отношение многие-один между документами и их метаданными, где один документ может иметь множество метаданных.
Document-DocumentVersions: отношение многие-один между документами и их версиями, где один документ может иметь множество версий.
Document-DocumentHistory: отношение многие-один между документами и их историей изменений, где один документ может иметь множество версий и историй изменений.
Document-Folders: отношение многие-один между документами и их папками, где один документ может находиться в множестве папок.
Folder-Document: отношение многие-один между папками и документами, где одна папка может содержать множество документов.
Описание функций:

Добавление сотрудника: функция для добавления нового сотрудника в систему.
Добавление подразделения: функция для добавления нового подразделения в систему.
Создание документа: функция для создания нового документа в системе.
Добавление метаданных: функция для добавления новых метаданных к документу.
Создание версии документа: функция для создания новой версии документа.
Добавление истории изменения: функция для добавления новой истории изменения к документу.
Добавление документа в папку: функция для добавления документа в папку.
Просмотр документа: функция для просмотра документа и его метаданных.
Редактирование документа: функция для редактирования содержимого документа.
Удаление документа: функция для удаления документа из системы.
