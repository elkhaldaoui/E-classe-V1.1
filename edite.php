<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

  <br><br>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="Name">Name:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Name" name="email">
    </div>
    <div class="form-group">
      <label for="email">Phone</label>
      <input type="text" class="form-control" id="Phone" placeholder="Enter Phone number" name="Phone">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="form-group">
      <label for="pwd">Date of admission:</label>
      <input type="date" class="form-control" id="Dateofadmission" placeholder="Enter Date" name="Dateofadmission">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Are you sure</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</body>
</html>