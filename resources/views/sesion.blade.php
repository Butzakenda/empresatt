<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        header{
        border: 2px solid black;
        border-bottom: 8px solid black;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        align-items: center;
        align-content: center;
        background-color: #4f2361;
        margin-bottom: 15px;
        
        }
        .header{
            text-align: center;
            color: white;
        }
        .title{
            color: white
        }
        nav{
            display: flex;
            flex-direction: row;
            justify-content: center;
            gap: 15px;   
            padding-bottom: 15px;
            border-bottom: 5px solid black;
            border-radius: 10px;
            background-color: #7f5281;
            font-family: 'Inter' sans-serif;
            margin-bottom: 30px;
        }
        nav > a{
            margin-top: 15px;
            border: 1px solid black;
            border-radius: 10px;
            text-decoration: none;
            cursor: pointer;
            color: black;
            background-color: white;
            
        }
        body{
            font-family: 'Inter' sans-serif;
            
            background-color: #ffccdd;
        }
    </style>
</head>
<body>
    <header class="title">
        <h1>Administrador</h1>
    </header>
    @include('partials/menusesion')
    @yield('contenidorrhh')
</body>
</html>