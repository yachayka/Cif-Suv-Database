<?php
require 'db_connection.php'; // Подключение к базе данных

// Проверяем, отправлена ли форма
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $department = $_POST['department'];
    $name = $_POST['file-name'];
    $signature = isset($_POST['signature']) ? 1 : 0;

    // Обработка файла
    if (isset($_FILES['file-upload']) && $_FILES['file-upload']['error'] === 0) {
        $fileTmpPath = $_FILES['file-upload']['tmp_name'];
        $fileName = $_FILES['file-upload']['name'];
        $fileId = uniqid(); // Генерируем уникальный ID
        $cloudFilePath = "https://cloud.yandex.ru/$fileId"; // Подготовка ссылки на файл в облаке

        // Эмулируем загрузку в облако (путь меняется для реальной интеграции)
        $uploadDir = __DIR__ . '/uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        $destination = $uploadDir . $fileName;
        move_uploaded_file($fileTmpPath, $destination);

        // Сохранение данных в базе
        $stmt = $mysqli->prepare("INSERT INTO users_doc (name, podpis, link) VALUES (?, ?, ?)");
        $stmt->bind_param('sis', $name, $signature, $cloudFilePath);
        if ($stmt->execute()) {
            echo "Файл успешно загружен и сохранён в базе данных!";
        } else {
            echo "Ошибка при сохранении данных: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Ошибка загрузки файла.";
    }
}

$mysqli->close();
?>
