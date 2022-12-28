<?php require_once 'header.php'?>
<div class="registration-form-container">
<!--  <div class="alert alert-danger" role="alert">-->
<!---->
<!--  </div>-->
  <div class="registration-form-title">
    Форма регистрации
  </div>
  <form action="/registration.php" method="post">
    <div class="mb-3">
      <label for="login" class="form-label">Email address</label>
      <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input name="password" type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Confirm password</label>
      <input name="password_confirm" type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="full_name" class="form-label">Full name</label>
      <input name="full_name" type="text" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="interests" class="form-label">Interests</label>
      <input name="interests" type="text" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="vk" class="form-label">Link to VK page</label>
      <input name="vk" type="text" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="blood_type" class="form-label">Factor group</label>
      <input name="blood_type" type="text" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="rhesus_factor" class="form-label">Rhesus factor</label>
      <input name="rhesus_factor" type="text" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
  </form>
</div>

<?php require_once 'footer.php'?>

