<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/style.css" />
    <script src="assets/app.js"></script>
  </head>
  <body class="bg-black">
    <div class="container py-5 text-white">
        <div class="row justify-content-center">
            <a class="col-12 my-5" href="index.html">
                <div class="text-center my-5">
                    <img src="assets/images/logo-white.png" alt="logo" width="250px">
                </div>
            </a>
        </div>
        <div class="container m-auto">
            <div class="col-lg-4 justify-content-center m-auto">
                <h4 class="fs-3 mb-4">Log In</h4>
                <form>
                    <div class="form-group my-2">
                      <label for="exampleInputEmail1" class="my-2">Username</label>
                      <input type="text" class="form-control" id="validationCustom01" required>
                    </div>
                    <div class="form-group my-4">
                      <label for="exampleInputPassword1" class="my-2">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group form-check mt-4">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                    </div>
                    <button type="submit" class="btn btn-primary my-5 px-5">Submit</button>
                    <br>
                    <div class="container-xs text-center">
                        <a href="forget" class="text-decoration-none">Forget Password?</a>
                    </div>
                  </form>
            </div>
        </div>
    </div>
  </body>
</html>
