// функция для получения данных сотрудников
function getEmployees() {
    // получить данные сотрудников из базы данных
    $employees = array();
    $db = new PDO('mysql:host=localhost;dbname=database', 'username', 'password');
    $stmt = $db->prepare('SELECT * FROM employees');
    $stmt->execute();
    $result = $stmt->fetchAll();
    foreach ($result as $row) {
        $employees[] = array(
            'name' => $row['name'],
            'urname' => $row['surname'],
            'position' => $row['position'],
            'rights' => $row['rights']
        );
    }
    return $employees;
}

// функция для получения данных папок
function getFolders() {
    // получить данные папок из базы данных
    $folders = array();
    $db = new PDO('mysql:host=localhost;dbname=database', 'username', 'password');
    $stmt = $db->prepare('SELECT * FROM folders');
    $stmt->execute();
    $result = $stmt->fetchAll();
    foreach ($result as $row) {
        $folders[] = array(
            'name' => $row['name'],
            'url' => $row['url']
        );
    }
    return $folders;
}

// вызвать функции для получения данных
$employees = getEmployees();
$folders = getFolders();

// вывести данные сотрудников и папок в виде JSON
echo json_encode($employees);
echo json_encode($folders);
