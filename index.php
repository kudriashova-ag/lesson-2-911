<?php
require_once './functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

  <div class="container">

    <?php
    if (isset($_POST['send-email'])) {
      $email = clear($_POST['email'] ?? null);
      $subject = clear($_POST['subject'] ?? null);
      $message = clear($_POST['message'] ?? null);

      $errors = [];
      if (empty($email)) {
        $errors['email'] = 'Email is required';
      }
      if (empty($subject)) {
        $errors['subject'] = 'Subject is required';
      }
      if (empty($message)) {
        $errors['message'] = 'Message is required';
      }

      if (count($errors) > 0) {
        echo "<div class='alert alert-danger'>" . implode('<br>', $errors) . "</div>";
      } else {

        mail('kudriashova.ag@gmail.com', $subject, "$email $message");
        echo "<div class='alert alert-success'>Thank!</div>";
        header('Location: index.php');
      }
    }

    ?>

    <form action="index.php" method="POST">

      <div class="form-group mt-3">
        <label for="">Email:</label>
        <input type="email" name="email" class="form-control">
      </div>

      <div class="form-group mt-3">
        <label for="">Subject:</label>
        <input type="text" name="subject" class="form-control">
      </div>

      <div class="form-group mt-3">
        <label for="">Message:</label>
        <textarea name="message" class="form-control"></textarea>
      </div>

      <button class="btn btn-primary mt-3 w-100" name="send-email">Send</button>
    </form>





    <hr>

    <!-- <form action="result.php" method="GET">

      <div class="form-group">
        <label for="login">Login</label>
        <input type="text" name="login" id="login" class="form-control">
      </div>

      <div class="form-group mt-3">
        <label><input type="radio" name="gender" value="mr." checked> Male</label>
        <label><input type="radio" name="gender" value="ms."> Female</label>
      </div>

      <div class="form-group mt-3">
        <label class="d-block"><input type="checkbox" name="langs[]" value="ukr"> Украинский</label>
        <label class="d-block"><input type="checkbox" name="langs[]" value="en"> Английский</label>
        <label class="d-block"><input type="checkbox" name="langs[]" value="de"> Немецкий</label>
      </div>

      <div class="form-group mt-3">
        <select name="color" class="form-control">
          <option value="red">Red</option>
          <option value="green">Green</option>
          <option value="blue">Blue</option>
        </select>
      </div>

      <button class="btn btn-primary mt-3">Send</button>
    </form> -->






  </div>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>