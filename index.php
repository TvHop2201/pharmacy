<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Đăng Nhập</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <!--<link rel="stylesheet" href="css/index.css"> -->
  <link rel="stylesheet" href="css/login.css">
  <script src="js/index.js"></script>
</head>

<body>

  <div class='full py-5'>
    <div class="container">
      <div class="row gy-5 justify-content-center py-5 headT ">
        <div class="col-md-7 shadow p-3 mb-5 bg-white rounded">
          <div class="card border border-success border-radius">
            <div class="card-header text-center m-3 h2 fw-bold">ĐĂNG NHẬP</div>
            <div class="card-body p-5">
              <form name="login-form" class="login-form" action="home.php" method="post" onsubmit="return validateCredentials();">
                <div class="row mb-3">
                  <label for="email" class="col-md-4 col-form-label text-md-end">Name</label>
                  <div class="col-md-6">
                    <input name="username" type="text" class="form-control" placeholder="username" onkeyup="validate();" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="password" class="col-md-4 col-form-label text-md-end">Pass</label>
                  <div class="col-md-6">
                    <input name="password" type="password" class="form-control" placeholder="password" onkeyup="validate();" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="remember" id="remember" />
                      <label class="form-check-label" for="remember">
                        Remember Me
                      </label>
                    </div>
                  </div>
                </div>
                <div class="row mb-0">
                  <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-outline-success">
                      Đăng Nhập
                    </button>

                    <div className='pt-3'>
                      <p>Chưa có tài khoản
                        <Link class="btn btn-link" to={'/register'}>
                        Đăng Ký
                        </Link>
                      </p>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>