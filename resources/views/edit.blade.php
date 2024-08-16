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
        <form action="{{ url('/contacts',$contact->id) }}" method="post">
            @csrf
            <input type="text" name="name" value="{{ $contact->name }}" required><br><br>
            <input type="text" name="email" value="{{ $contact->email }}" required><br><br>
            <input type="text" name="phone" value="{{ $contact->phone }}"><br><br>
            <input type="text" name="address" value="{{ $contact->address }}"><br><br>
            
            <button type="submit">Update Contact</button>
        </form>
    </div>
</body>
</html>