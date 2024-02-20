<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODOS</title>
</head>
<body>
    <h1>TODOS</h1>

    <hr>
    <a href="{{ route('todos.create') }}">Ajouter une todo</a>
    <hr>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>User_id</th>
                <th>Description</th>
                <th>Terminé ?</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $todo->id }}</td>
                <td>{{ $todo->user_id }}</td>
                <td>{{ $todo->description }}</td>
                <td>{{ $todo->is_done }}</td>
                <td>
                    <a href="{{ route('todos.edit', $todo->id) }}">Modifier</a>
                    <hr>
                    <form action="{{ route('todos.destroy') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" value="{{ $todo->id }}" name="id">
                        <button type="submit">Supprimer</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>

    <h2>User</h2>
    <p>{{ $todo->user->name }}</p>
    <p>{{ $todo->user->email }}</p>
</body>
</html>