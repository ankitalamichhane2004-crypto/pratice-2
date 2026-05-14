<!DOCTYPE html>
<html>
<head>
    <title>Show Page</title>

    <style>
        body{
            font-family: Arial;
            background-color: #f2f2f2;
        }

        .box{
            width: 400px;
            background: white;
            padding: 20px;
            margin: 50px auto;
            border-radius: 10px;
        }

        h2{
            text-align: center;
        }

        p{
            font-size: 18px;
        }

        .title{
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="box">

    <h2>User Details</h2>

    <p>
        <span class="title">Name :</span>
        {{ $data->name }}
    </p>

    <p>
        <span class="title">email :</span>
        {{ $data->email }}
    </p>

    <p>
        <span class="title">Phone :</span>
        {{ $data->phone }}
    </p>

</div>

</body>
</html>