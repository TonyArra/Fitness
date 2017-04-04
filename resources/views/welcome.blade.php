<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ config('app.name') }}</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <link rel="stylesheet" href="{{ asset('css/main.css') }}">


</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
              aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" placeholder="Email" class="form-control">
        </div>
        <div class="form-group">
          <input type="password" placeholder="Password" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Sign in</button>
      </form>
    </div><!--/.navbar-collapse -->
  </div>
</nav>

<div class="container">
  <div class="row">
    <form method="POST" action="{{ route('add-food') }}">
      <h2>Add Food</h2>
      {{ csrf_field() }}
      <div class="form-group">
        <input class="form-control" name="name" title="Name" placeholder="Food/Product Name">
      </div>
      <div class="form-group">
        <input class="form-control" name="calories" title="Calories" placeholder="Calories">
      </div>
      <div class="form-group">
        <input class="form-control" name="protein" title="Protein" placeholder="Protein">
      </div>
      <div class="form-group">
        <input class="form-control" name="carbs" title="Carbs" placeholder="Carbs">
      </div>
      <div class="form-group">
        <input class="form-control" name="fat" title="Fat" placeholder="Fat">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
  <div class="row">
    <h2>Food Diary</h2>
    <table class="table table-striped" id="food-diary-table">
      <thead>
      <tr>
        <th>Name</th>
        <th>Calories</th>
        <th>Protein</th>
        <th>Carbohydrates</th>
        <th>Fat</th>
      </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>

  <hr>

  <footer>
    <p>&copy; 2017 Tony Arra</p>
  </footer>
</div> <!-- /container -->

<!-- Bootstrap Javascript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

</body>
</html>
