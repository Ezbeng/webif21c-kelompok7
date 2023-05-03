<!DOCTYPE html>
<html lang="en">
  
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/styleutama.css">
</head>
<body>
<div class="container-fluid ps-md-0">
  <div class="row g-0">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login-form d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">

              <div class="row align-items-center">
                <div class="col"></div>
                <div class="col-4">
                <img src="assets/images/UNIVERSITASTEKNOKRAT.png" class="avatar" alt="">
                </div>
                <div class="col"></div>
              </div>
              <br>
              <h3 class="login-heading mb-4" style="text-align:center;"><b>SISFO M.D.A TEKNOKRAT</b></h3>
              <form>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" placeholder="admin">
                  <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">Password</label>
                </div>

                <div class="form-check mb-3">
                  <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                  <label class="form-check-label" for="rememberPasswordCheck">
                    Remember password
                  </label>
                </div>

                <div class="d-grid">
                  <button class="btn btn-lg btn-login text-uppercase fw-bold mb-2" type="submit">Log in</button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
