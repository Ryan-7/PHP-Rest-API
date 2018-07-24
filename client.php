<!DOCTYPE html>
<html lang="en">
<head>
  <title>Todo Application</title>
  <link rel="stylesheet" href="https://bootswatch.com/3/cosmo/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Todo App</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <h1 class="text-center">List of Todos</h1>
            <ul class="list-group" id="todo-list">
            </ul>
        </div>
    </div>
    
<script>

    (function () {

        
        const connectedToDb = false; // Change to true if running local DB 
        const todoList = document.getElementById('todo-list');

        const mockData = [
            {
                id: 0,
                title: 'Practice Guitar',
                body: 'Key of C Major'
            },
            {
                id: 1,
                title: 'Grocery Shopping',
                body: 'Healthy food only!'
            },
            {
                id: 2,
                title: 'Exercise',
                body: 'Run 3 miles'
            }
        ]

        const renderView = (data) => {
            data.forEach((item) => {
                todoList.innerHTML += `
                    <li class="list-group-item">
                        <h3>${item.title}</h3>
                        <p><strong>Notes: </strong>${item.body}</p>
                        <button class="btn btn-large btn-danger">Delete</button>
                    </li>
                `    
            })
        }

        // Hit API for Data if running a local DB
        // If not, use mock data

        if(connectedToDb) {
            fetch(`API/todo/read.php`)
            .then((response) => {
                return response.json();
            })
            .then((response) => {
                renderView(response);
            });
        } else {
            renderView(mockData);
        }

    }());

</script>
</body>
</html>