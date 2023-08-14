<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <main>
    <div class="container-fluid">
        <div class="row">
        
        <div class="col-sm-6 login-section-wrapper">
            <div class="brand-wrapper">
            <img src="assets/img/logo.jpg" alt="logo" class="logo">
            </div>
            <div class="login-wrapper my-auto">
            <h1 class="login-title">Log in</h1>
            
                
                <form action="{{route('login-proses')}}" method="post">
                @csrf
                <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email">
                </div>
                <div class="form-group mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="minimum 8 characters">
                </div>
                <div id="may" class="form-group mb-3">
                <input type="checkbox" name="remember" value="1">
                <label for="remember">Remember me</label>
                <!-- <a href="#!" class="forgot-password-link">Forgot password?</a> -->
                </div>

                <input name="login" id="login" class="btn btn-block login-btn" button type="submit" value="Login" onclick="kliklogin()">
                </form>
            <p class="login-wrapper-footer-text">Not Registered yet? <a href="/registrasi" class="text-reset">Create a new account</a></p>
            </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
            <img src="assets/img/gambar.png" alt="login image" class="login-img">
        </div>
        </div>
    </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <script>
    function kliklogin(){
        console.log(
        document.getElementById("email").value
        );
        console.log(
        document.getElementById("password").value
        );
    }
    </script>
</body>
</html>