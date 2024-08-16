<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View All</title>
</head>
<body>
    
    <div>
         <form action="{{ 'name_sort' }}" method="get">
            @csrf
            <p style="color:red">Please click on view button before sorting</p>
            <select name="sort_value">
                <option value="name" name="name">Name</option>
                <option value="created_at" name= "created_at">Created_at</option>
            </select>
            <input type="submit" value="Sort">
        </form><br>

        <form action="{{ 'name_search' }}" method="get">
            @csrf
            <input type="search" name="search" placeholder="write name or email for search">
            <input type="submit" value="Search">
        </form>

        <table border="1" cellspacing="0" cellpadding="5" align="center">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Created_At</th>
                <th>Action</th>
            </tr>
            @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone }}</td>
                <td>{{ $contact->address }}</td>
                <td>{{ $contact->created_at }}</td>
                <td width="100"> <a  href="{{ url('contacts') }}">View</a>
                    <a  href="{{ url('contacts/'.$contact->id.'/edit') }}">Edit</a>
                    <form action="{{ url('contacts/'.$contact->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button style="float: right;"   type="submit">Delete</button>
                    </form> </td>
            </tr>
            @endforeach
        </table>
      <a style="margin-left:600px;text-decoration:none; color:brown; font-size:20px;" href="{{ url('contacts/create') }}">Back to Create</a>
    </div>

</body>
</html>