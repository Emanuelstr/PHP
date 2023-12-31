<?php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="PaulKusuma" />
    <meta name="Nim" content="215314051" />
    <title>LOGIN</title>
    <!-- Css -->
    <link rel="stylesheet" href="style.css" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  </head>
  <body>
    <section class="vh-100">
      <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="" class="img-fluid" alt="Sample image" />
          </div>
          <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form>
              <!-- Username input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="login-username">NAMA PENGGUNA</label>
                <input type="text" id="login-username" class="form-control form-control-lg" name="username" value="" placeholder="Enter username" />
              </div>

              <!-- Password input -->
              <div class="form-outline mb-3">
                <label class="form-label" for="login-password">KATA SANDI</label>
                <input type="password" id="login-password" class="form-control form-control-lg" name="password" value="" placeholder="Enter password" />
              </div>

              <div class="d-flex justify-content-between align-items-center">
                <!-- Checkbox -->
                <div class="form-check mb-0">
                  <input class="form-check-input me-2" type="checkbox" name="remember" value="" id="login-remember" />
                  <label class="form-check-label" for="login-remember"> INGAT AKU </label>
                </div>
              </div>

              <div class="text-center text-lg-start mt-4 pt-2">
                <button type="button" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem">LOGIN</button>
                <p class="small fw-bold mt-2 pt-1 mb-0">GAKPUNYA AKUN? <a href="#!" class="link-danger">DAFTAR</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
        <!-- Copyright -->
        <div class="text-white mb-3 mb-md-0">author EMANUELSATRIO</div>
        <!-- Copyright -->
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>