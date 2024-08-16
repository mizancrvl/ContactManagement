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
          
            <tr>
                <td>{{ $contacts->id }}</td>
                <td>{{ $contacts->name }}</td>
                <td>{{ $contacts->email }}</td>
                <td>{{ $contacts->phone }}</td>
                <td>{{ $contacts->address }}</td>
                <td>{{ $contacts->created_at }}</td>
                <td width="100"> <a  href="{{ url('contacts') }}">View</a>
                    <a  href="{{ url('contacts/'.$contacts->id.'/edit') }}">Edit</a>
                    <form action="{{ url('contacts/'.$contacts->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button style="float: right;"   type="submit">Delete</button>
                    </form> </td>
            </tr>
        
        </table>
      <a style="margin-left:600px;text-decoration:none; color:brown; font-size:20px;" href="{{ url('contacts/create') }}">Back to Create</a>
    </div>

</body>
</html>