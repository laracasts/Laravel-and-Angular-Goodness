<!doctype html>
<html lang="en" ng-app>
<head>
    <meta charset="UTF-8">
    <title>Angular Training</title>
    <style>
        small { font-size: .8em; color: grey; }
    </style>
</head>

<body ng-controller="TodosController">

    <h1>
        Todos
        <small ng-if="remaining()">({{ remaining() }} remaining)</small>
    </h1>

    <input type="text" placeholder="Filter todos" ng-model="search">

    <ul>
        <li ng-repeat="todo in todos | filter:search">
            <input type="checkbox" ng-model="todo.completed">
            {{ todo.body }}
        </li>
    </ul>

    <form ng-submit="addTodo()">
        <input type="text" placeholder="Add new task" ng-model="newTodoText">
        <button type="submit">Add Task</button>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.5/angular.min.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>
