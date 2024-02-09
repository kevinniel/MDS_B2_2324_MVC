<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODOS</title>
</head>
<body>
    <h1>Ajout d'une TODO</h1>

    <hr>

    <form action="{{ route('todos.store') }}" method="POST">
        @csrf
        <label for="description">Description</label>
        <input type="text" name="description" id="description">
        <br>
        <button type="submit">Ajouter</button>
    </form>

</body>
</html>