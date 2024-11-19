<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Информационная система электронного документооборота</title>
    <link rel="stylesheet" href="./src/frontend/css/style.css">
    <style>
        /* Основные стили */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #f4f4f4;
            padding: 10px 20px;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        nav ul li {
            margin-right: 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
        }

        .section {
            padding: 20px;
            border-bottom: 1px solid #ddd;
        }

        .section h2 {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .section button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 8px 16px;
            cursor: pointer;
            border-radius: 5px;
        }

        .section button:hover {
            background-color: #45a049;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table th,
        table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        table th {
            background-color: #f2f2f2;
        }

        footer {
            text-align: center;
            background-color: #f4f4f4;
            padding: 10px 0;
        }
    </style>
</head>

<body>

    <header>
        <nav>
            <ul>
                <li><a href="#">Главная</a></li>
                <li><a href="#">Сотрудники</a></li>
                <li><a href="#">Документы</a></li>
                <li><a href="#">Папки</a></li>
                <li><a href="#">Настройки</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="section">
            <h1>Информационная система электронного документооборота</h1>
            <p>Система для структурирования документов в организации и обеспечения взаимодействия сотрудников по их
                управлению и согласованию.</p>
        </section>
        <section class="section">
            <h2>Сотрудники</h2>
            <table>
                <thead>
                    <tr>
                        <th>Имя</th>
                        <th>Фамилия</th>
                        <th>Должность</th>
                        <th>Права</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- таблица с данными сотрудников -->
                </tbody>
            </table>
        </section>
        <section class="section">
            <h2>
                Документы
                <button type="button" onclick="refreshDocuments()">Обновить</button>
            </h2>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <label for="department">Отдел:</label>
                <select id="department" name="department">
                    <option value="administration">Администрация</option>
                    <option value="cafeteria">Столовая</option>
                    <option value="security">Кафедра охраны</option>
                </select>
                <br>
                <label for="file-name">Название документа:</label>
                <input type="text" id="file-name" name="file-name" required>
                <br>
                <label>
                    <input type="checkbox" name="signature" value="1">
                    Требуется подпись?
                </label>
                <br>
                <label for="file-upload">Загрузить файл:</label>
                <input type="file" id="file-upload" name="file-upload" required>
                <br>
                <button type="submit">Загрузить</button>
            </form>
        </section>
        <section class="section">
            <h2>Папки</h2>
            <ul>
                <!-- список папок -->
            </ul>
        </section>
    </main>
    <!-- PHP-код можно оставить как есть, он в комментарии -->
    <footer>
        <p>Copyright 2023</p>
    </footer>
    <script>
        // Пример функции обновления документов
        function refreshDocuments() {
            alert("Документы обновлены!");
        }
    </script>
</body>

</html>