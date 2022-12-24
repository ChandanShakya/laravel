<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />
</head>

<body>
  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg" class="img-fluid" alt="Phone image">
        </div>
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">

          <form action="{{route('register.post')}}" method="post">
            @csrf

            <!-- Name input -->
            <div class="form-outline mb-4">
              <input type="text" id="form1Example01" class="form-control form-control-lg" name="name" />
              <label class="form-label" for="form1Example13">Name</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form1Example13" class="form-control form-control-lg" name="email" />
              <label class="form-label" for="form1Example13">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" id="form1Example23" class="form-control form-control-lg" name="password" />
              <label class="form-label" for="form1Example23">Password</label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-lg btn-block">Sign Up</button>

          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->
</body>

</html>