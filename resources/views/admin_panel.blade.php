<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Log in</title>




        <link href="{{asset ('css/styles.css')}}" rel="stylesheet" />

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <a class="navbar-brand" href="#">Elektron</a>
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                <li class="nav-item active">
                    <a class="nav-link" href="{{"niemcy/panel"}}">Niemcy <span class="sr-only">(current)</span></a>
                  </li>

                <li class="nav-item active">
                  <a class="nav-link" href="{{"panel/logout"}}">Wyloguj <span class="sr-only">(current)</span></a>
                </li>


              </ul>

            </div>
          </nav>

          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nazwa</th>
                <th scope="col">Opis</th>
                <th scope="col">Zdjecie</th>
                <th scope="col">Modyfikacje</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($realizacje as $realizacja)
                <tr>
                    <th scope="row">{{$realizacja->id}}</th>
                    <td>{{$realizacja->nazwa}}</td>
                    <td>{{$realizacja->opis}}</td>

                    <td><img src="{{asset('storage/app/public/image/')}}/{{$realizacja->zdjecie1}}" class="admin-photo"></td>
                    <td><a href="{{ route('edytuj', ['id' => $realizacja->id]) }}" class="btn btn-primary">Edytuj</a>
                        <form method="POST" action="{{ route('delete', ['id' => $realizacja->id]) }}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">U s u ń    </button>
                        </form>
                    </td>>

                 </tr>
                @endforeach
                 <td><a href="{{ route('dodaj') }}" class="btn btn-primary">Dodaj nowa</a></td>

            </tbody>
          </table>

    </body>







</html>
