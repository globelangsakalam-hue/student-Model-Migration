<!DOCTYPE html>
<html lang  ="en">

<head>
    <meta charset ="UTF-8">
    <meta name"viewport" content="width=device-width, intial-scale=1.0">
    <tile> Student Management System </title>

    <link
    href ="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel ="styesheet">
    </head>

    <body class = "bg-light">
        <nav class ="navbar navbar-dark bg-dark">
            <div class ="container">
                <a class ="navbar-brand" href="{{route ('students.index')}}">
                    Student Management System
                </a>
            </div>>
        </nav>

        <div class ="containter mt-4">
            @if(session('success'))
                <div class class ="alert alert-success">
                    {{session ('success')}}
            @endif

            @yield('content')
        </div>
    </body>
    </html>


