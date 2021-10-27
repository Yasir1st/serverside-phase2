<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

<div class="box">
   <form action="index/proses" method="POST">
    @csrf
   <table cellpadding="0" cellspacing="20">
        <h1 class="title">login</h1>
        <tr>
            <td><h3>id_card_number</h3></td>
            <td><h3>:</h3></td>
            <td><input class="input" type="text" name="id_card"></td>
        </tr>
        <tr>
            <td><h3>password</h3></td>
            <td><h3>:</h3></td>
            <td><input class="input" type="text" name="password"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><button type="submit">login</button></td>
        </tr>
    </table>
   </form>
</div>
    
</body>
</html>