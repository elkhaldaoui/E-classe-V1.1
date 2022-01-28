<?php
include 'assets/navbar.php';
?>
<style>
#form{
  margin: 10%;
}
</style>

<div class="container">

  <br><br>
  <form action="/action_page.php" id="form" >
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
    <a class="btn btn-primary" href="Students.php" role="button">Submit</a>
  </form>
</div>

<?php
    include './js.php';
    ?>