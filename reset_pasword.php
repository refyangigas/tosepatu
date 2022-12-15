<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Login</title>
</head>

<body>
  <!-- <a href="https://front.codes/" class="logo" target="_blank">
		<img src="https://assets.codepen.io/1462889/fcy.png" alt="">
	</a> -->

  <div class="section">
    <div class="container">
      <div class="row full-height justify-content-center">
        <div class="col-12 text-center align-self-center py-5">
          <div class="section pb-5 pt-5 pt-sm-2 text-center">
            <!-- <h6 class="mb-0 pb-3"><span>Login</span></h6> -->
            <!-- <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
            <label for="reg-log"></label> -->
            <div class="card-3d-wrap mx-auto">
              <div class="card-3d-wrapper">
                <div class="card-front">
                  <form action='reset_password.php' method="POST">
                    <div class="center-wrap">

                      <div class="section text-center">
                        <h4 class="mb-4 pb-3">Change Password</h4>
                        <div class="form-group">
                          <input type="text" name="username" class="form-style" placeholder="Enter Username" id="logemail" autocomplete="off" required>
                          <i class="input-icon uil uil-at"></i>
                        </div>
                        <div class="form-group mt-2">
                          <input type="password" name="new-password" class="form-style" placeholder="Enter New Password" id="logpass" autocomplete="off" required>
                          <i class="input-icon uil uil-lock-alt"></i>
                        </div>
                        <div class="form-group mt-2">
                          <input type="password" name="new-re-password" class="form-style" placeholder="Enter Re New Password" id="logpass" autocomplete="off" required>
                          <i class="input-icon uil uil-lock-alt"></i>
                        </div>
                        <button class="btn mt-4" name="change-password" type="submit">Change Password</button>
                        <!-- <a href="#" type ="submit" name ="submit" class="btn mt-4">submit</a> -->
                        <p class="mb-0 mt-4 text-center"><a href="login.php" class="link">Back To Login ?</a></p>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    /* Please ❤ this if you like it! */
