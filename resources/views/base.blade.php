<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <div class="container">
        <a href="{{route('book.index')}}" class="navbar-brand "><img src="{{asset('book-1.png')}}" alt="" width="67px" class="mr-2">Bookie</a>
        <form class="d-flex" action="{{route('book.index')}}">
            <input type="search" class="form-control" name="search" size="60" placeholder="Search By ISBN Number">
            <input class="btn btn-danger" type="submit">
        </form>
       <ul class="navbar-nav">
          <li class="nav-item"><a href="{{route('book.create')}}" class="btn btn-outline-dark">Insert</a></li>
       </ul>
    </div>
</nav>
@yield('content')
    
</body>
</html>