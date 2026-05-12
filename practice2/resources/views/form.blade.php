<!DOCTYPE html>
<html>
<head>
    <title>Form and Table</title>

    <style>

        body{
            font-family: Arial, sans-serif;
        }

        .container{
            width: 60%;
            margin: auto;
        }

        form{
            border: 1px solid gray;
            padding: 20px;
            margin-bottom: 20px;
        }

        input{
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
        }

        button{
            padding: 10px 20px;
            background-color: blue;
            color: white;
            border: none;
            cursor: pointer;
        }

        table{
            width: 100%;
            border-collapse: collapse;
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

<div class="container">

    <!-- Form Section -->

    <form method="POST" action="{{ route('store') }}">
 @csrf
        <h2>User Form</h2>

        <label>Name</label>
        <input type="text" placeholder="Enter Name" name="name">

        <label>Email</label>
        <input type="email" placeholder="Enter Email" name="email">

        <label>Phone</label>
        <input type="text" placeholder="Enter Phone Number" name="Phone">

        <button type="submit">Submit</button>

    </form>


    <!-- Table Section -->

    <table>

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>

        <tr>
            <td>1</td>
            <td>Kamal</td>
            <td>kamal@gmail.com</td>
            <td>9800000000</td>
        </tr>

        <tr>
            <td>2</td>
            <td>Ankita</td>
            <td>ankita@gmail.com</td>
            <td>9811111111</td>
        </tr>

        <tr>
            <td>3</td>
            <td>Ram</td>
            <td>ram@gmail.com</td>
            <td>9822222222</td>
        </tr>

    </table>

</div>

</body>
</html>