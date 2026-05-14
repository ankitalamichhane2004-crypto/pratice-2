<!DOCTYPE html>
<html>
<head>
    <title>Simple Table</title>

    <style>
        table{
            width: 60%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th, td{
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th{
            background-color: lightgray;
        }
    </style>
</head>

<body>

    <table>
        <tr>
           
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Show</th>
            <th colspan="2">Modify</th>
        </tr>

         @foreach ( $datas as $data ) 
        
      <tr>
        <td>{{ $data->name }}</td>
        <td>{{ $data->phone }}</td>
        <td>{{ $data->email }} </td>
        <td><a href="{{ route('show', $data->id) }}"><button>Show</button></a></td>
        <td><a href="{{ route('edit', $data->id) }}"><button>Edit</button></td></a></td>
        <td><form action="{{ route('delete',$data->id) }}" method="POST">@csrf<button type="submit">Delete</button></form></td>
      </tr>
       
        @endforeach
   
    </table>

</body>
</html>