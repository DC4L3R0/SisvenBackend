<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CREATE CLIENT</title>
  </head>
  <body>
      <div class="container">
          <h1>CREATE CLIENT</h1>
          <form method="POST" action="{{route('client.update', ['client' => client -> id_client])}}">
              @method('put')
              @csrf
              <div class="mb-3">
                  <label for="id_client" class="form-label">ID</label>
                  <input type="text" class="form-control" name="id_client" id="id_client" aria-describedby="id_clientHelp">
                  <div id="id_client" class="form-text">Client Id</div>
              </div>
              <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" id="name" aria-describedby="nameHelp" name="name">
                  <div id="nameHelp" class="form-text">Client Name</div>
              </div>
              <div class="mb-3">
                  <label for="surname" class="form-label">Surname</label>
                  <input type="text" class="form-control" name="surname" id="surname" aria-describedby="surnameHelp">
                  <div id="surnameHelp" class="form-text">Client Surname</div>
              </div>
              <div class="mb-3">
                  <label for="adress" class="form-label">Adress</label>
                  <input type="text" class="form-control" name="adress" id="adress" aria-describedby="adressHelp">
                  <div id="adressHelp" class="form-text">Client Adress</div>
              </div>
              <div class="mb-3">
                  <label for="birth_date" class="form-label">Dirth Date</label>
                  <input type="text" class="form-control" name="birth_date" id="birth_date" aria-describedby="birth_dateHelp">
                  <div id="birth_dateHelp" class="form-text">Client Birth Date</div>
              </div>
              <div class="mb-3">
                  <label for="phone_number" class="form-label">Phone Number</label>
                  <input type="text" class="form-control" name="phone_number" id="phone_number" aria-describedby="phone_numberHelp">
                  <div id="phone_numberHelp" class="form-text">Client Phone Number</div>
              </div>
              <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">Client Email</div>
              </div>
              <div class="mb-3">
                  <button type="submit" class="btn btn-primary">Save</button>
                  <a href="{{ route('client.index')}}" class="btn btn-warning">Cancel</a>
              </div>
          </form>

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