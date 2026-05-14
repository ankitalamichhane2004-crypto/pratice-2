<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background: #f4f4f4;
        }

        .container{
            width: 400px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
        }

        h2{
            text-align: center;
            margin-bottom: 20px;
        }

        input{
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button{
            width: 100%;
            padding: 10px;
            margin-top: 15px;
            background: green;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover{
            background: darkgreen;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Edit User</h2>

    <form  method="POST" action="{{ route('update',$data->id ) }}">
        @csrf

        <input type="text" name="name" value="{{ $data->name }}" placeholder="Enter Name">

        <input type="email" name="email" value="{{ $data->email }}" placeholder="Enter Email">

        <input type="text" name="phone" value="{{ $data->phone }}" placeholder="Enter Phone">

        <button type="submit">Update</button>
    </form>
</div>

</body>
</html>