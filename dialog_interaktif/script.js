document.addEventListener("DOMContentLoaded", function() {
    loadItems();
});

function loadItems() {
    fetch('database/read.php')
        .then(response => response.json())
        .then(data => {
            const itemsDiv = document.getElementById('items');
            itemsDiv.innerHTML = '';
            data.forEach(item => {
                itemsDiv.innerHTML += `
                    <div class="item">
                        <h3>${item.name}</h3>
                        <p>${item.description}</p>
                        <button onclick="editItem(${item.id}, '${item.name}', '${item.description}')">Edit</button>
                        <button onclick="deleteItem(${item.id})">Delete</button>
                    </div>
                `;
            });
        });
}

function createItem() {
    const name = document.getElementById('name').value;
    const description = document.getElementById('description').value;

    fetch('database/create.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: `name=${name}&description=${description}`
    })
    .then(response => response.text())
    .then(data => {
        alert(data);
        loadItems();
    });
}

function editItem(id, name, description) {
    const newName = prompt("Enter new name:", name);
    const newDescription = prompt("Enter new description:", description);

    fetch('database/update.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: `id=${id}&name=${newName}&description=${newDescription}`
    })
    .then(response => response.text())
    .then(data => {
        alert(data);
        loadItems();
    });
}

function deleteItem(id) {
    if (confirm("Are you sure you want to delete this item?")) {
        fetch('database/delete.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: `id=${id}`
        })
        .then(response => response.text())
        .then(data => {
            alert(data);
            loadItems();
        });
    }
}
