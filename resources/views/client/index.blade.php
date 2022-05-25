<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CLIENTS</title>
  </head>
  <body>
    <div class="container">
    <h1 class="mb-4">LIST CLIENTS</h1>
    <a class="btn btn-sucess" href="{{ route('client.create') }}">Add</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">name</th>
      <th scope="col">Surname</th>
      <th scope="col">adress</th>
      <th scope="col">birth date</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($client as $client)
    <tr>
      <th scope="row">{{ $client -> id_client}}</th>
      <td> {{ $client->name}}</td>
      <td> {{ $client->surname}}</td>
      <td> {{ $client->adress}}</td>
      <td> {{ $client->birth_date	}}</td>
      <td> {{ $client->phone_number}}</td>
      <td> {{ $client->email}}</td>
      <td>

      <a href="{{route('client.edit',['client' => $client-> id_client]) }}"
      class="btn btn-info">Editar</a></li>
      <form action="{{route('client.destroy',['client' => $client-> id_client]) }}" method='POST' style="display: inline-block">
    @method('delete')
  @csrf
<input class="btn btn-danger mb-3" type="submit" value="Delete">
</form>
</td>
    </tr>
    @endforeach
  </tbody>
</table>
</ul>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>