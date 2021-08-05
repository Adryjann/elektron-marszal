<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Log in</title>




        <link href="css/styles.css" rel="stylesheet" />
        <style>
            #ma{
                width: 50%;
                margin: auto;
                margin-top: 10vh;
                border: 1px solid gray;
                padding: 15px;

            }
            h1{
                text-align: center;
            }
         </style>
    </head>
    <body>
        <div id="ma">
            <h1>Elektron</h1>
        <form action={{ route('loguj')}} method="POST">
            <div class="form-group">
                @csrf
              <label for="exampleInputEmail1">Login</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Podaj login" name="login">

            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Hasło</label>
              <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Hasło">
            </div>
            <div class="form-check">


            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
    </body>







</html>
