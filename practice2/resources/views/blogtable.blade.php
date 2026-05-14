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
           
            <th>Blog Title</th>
            <th>Author Name</th>
            <th>Blog DEscription</th>
            <th>Show</th>
            <th colspan="2">Modify</th>
        </tr>

         @foreach ( $datas as $data ) 
        
      <tr>
        <td>{{ $data->BlogTitle }}</td>
        <td>{{ $data->AuthorName }}</td>
        <td>{{ $data->BlogDescription }} </td>
        <td><a href="{{ route('blogshow', $data->id) }}"><button>Show</button></a></td>
        <td><a href="{{ route('blogedit', $data->id) }}"><button>Edit</button></td></a></td>
        <td><form action="{{ route('blogdelete',$data->id) }}" method="POST">@csrf<button type="submit">Delete</button></form></td>
      </tr>
       
        @endforeach
   
    </table>

</body>
</html>