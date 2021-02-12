
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-sm bg-secondary navbar-light">
                <a>
                    <h1 style = "margin-left:450px" class = "text-black">Customer Form</h1>
                </a>
            </nav>        
        </header>
        <form action="{{route('store')}}" method="POST" enctype="multipart/form-data" style="margin-top:50px">
          @csrf
          <div class="row col-6" style="margin-left:300px" ;>
            <div class="col-6">
              <label>NAME</label>
            </div>
            <div class="col-6">
              <input class="" type="text" value="{{old('name')}}" name="name"><br>
              <span style="color:red">@error('name'){{$message}}@enderror</span>
            </div>
            <div class="col-6">
              <label>EMAIL</label>
            </div>
            <div class="col-6">
              <input class="" type="email" value="{{old('email')}}" name="email"> <br>
              <span style="color:red">@error('email'){{$message}}@enderror</span>
            </div>
            <div class="col-6">
              <label>PASSWORD</label>
            </div>
            <div class="col-6">
              <input class="" type="password" value="" name="password"> <br>
              <span style="color:red">@error('password'){{$message}}@enderror</span>
            </div>
            <div class="col-6">
            <input type="submit" value="submit" name="submit"/>
            </div>
        </form>
        </body>
</html>