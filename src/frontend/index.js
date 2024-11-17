// функция для загрузки данных сотрудников
function loadEmployees() {
    // получить данные сотрудников из сервера
    fetch('/employees')
       .then(response => response.json())
       .then(data => {
            // обновить таблицу с данными сотрудников
            const table = document.querySelector('table');
            table.innerHTML = '';
            data.forEach(employee => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${employee.name}</td>
                    <td>${employee.surname}</td>
                    <td>${employee.position}</td>
                    <td>${employee.rights}</td>
                `;
                table.appendChild(row);
            });
        });
}

// функция для загрузки данных папок
function loadFolders() {
    // получить данные папок из сервера
    fetch('/folders')
       .then(response => response.json())
       .then(data => {
            // обновить список папок
            const list = document.querySelector('ul');
            list.innerHTML = '';
            data.forEach(folder => {
                const item = document.createElement('li');
                item.innerHTML = `
                    <a href="${folder.url}">${folder.name}</a>
                `;
                list.appendChild(item);
            });
        });
}

// вызвать функции для загрузки данных
loadEmployees();
loadFolders();