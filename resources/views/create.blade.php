<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Data</title>
</head>
<body>
    <div>
        <form action="{{ url('contacts') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Name" required><br><br>
            <input type="text" name="email" placeholder="email" required><br><br>
            <input type="text" name="phone" placeholder="phone"><br><br>
            <input type="text" name="address" placeholder="address"><br><br>
            
            <button type="submit">Create Contact</button>
        </form>
    </div>
</body>
</html>