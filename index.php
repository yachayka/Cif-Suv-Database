<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Информационная система электронного документооборота</title>
    <link rel="stylesheet" href="./src/frontend/css/style.css">
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
            <p>Система для структурирования документов в организации и обеспечения взаимодействия сотрудников по их управлению и согласованию.</p>
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
            <h2>Документы</h2>
            <form>
                <label for="document-type">Тип документа:</label>
                <select id="document-type" name="document-type">
                    <option value="text">Текстовый документ</option>
                    <option value="image">Изображение</option>
                    <option value="video">Видео</option>
                </select>
                <br>
                <label for="document-title">Название документа:</label>
                <input type="text" id="document-title" name="document-title">
                <br>
                <label for="document-content">Содержимое документа:</label>
                <textarea id="document-content" name="document-content"></textarea>
                <br>
                <button type="submit">Сохранить документ</button>
            </form>
        </section>
        <section class="section">
            <h2>Папки</h2>
            <ul>
                <!-- список папок -->
            </ul>
        </section>
    </main>
    <?php
        $mysql = new mysqli("localhost", "root", "root");
        $mysql->query("SET NAMES 'utf8'");

        if($mysql -> connect_error){
            echo 'Error Number: '.$mysql->connect_errno.'<br>';
            echo 'Error:'.$mysql->connect_error;


        } else{
            echo 'Host info: '.$mysql->host_info;
        }

        //$mysql->query("INSERT INTO `users_doc` (`name`, `bio`) VALUES('passport', '.txt', '')");


        $mysql->close();
    ?>
    <footer>
        <p>Copyright 2023</p>
    </footer>
    <script src="index.js"></script>
</body>
</html>