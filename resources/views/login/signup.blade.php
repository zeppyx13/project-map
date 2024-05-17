<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Sign Up</title>
</head>

<body>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3>Sign Up</h3>
                                <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur
                                    adipisicing.</p>
                            </div>
                            <form action="" method="post">
                                @csrf
                                <div class="form-group first mb-2">
                                    <label for="Name">Name</label>
                                    <input type="text" name="name" class="form-control" autocomplete="off"
                                        required id="Name">
                                </div>
                                <div class="form-group first mb-2">
                                    <label for="User Name">User Name</label>
                                    <input type="text" name="username" class="form-control" autocomplete="off"
                                        required id="User Name">
                                </div>
                                <div class="form-group third mb-2">
                                    <label for="username">Email</label>
                                    <input type="email" name="email" class="form-control" autocomplete="off"
                                        required id="email">
                                </div>
                                <div class="row">
                                    <div class="col-11">
                                        <div class="form-group last mb-4">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" autocomplete="off" required
                                                class="form-control" id="password">
                                        </div>
                                    </div>
                                    <div class="col-1 pl-1 ">
                                        <div class="icon d-flex align-content-center">
                                            <i class="bi bi-eye-fill flex-fill mt-4 fs-3" id="iconpw"
                                                style="font-size: 25px"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-0"><span class="caption">Remember
                                            me</span>
                                        <input type="checkbox" checked="checked" />
                                        <div class="control__indicator"></div>
                                    </label>
                                    <span class="ml-auto"><a href="/" class="forgot-pass">Login</a></span>
                                </div>

                                <input type="submit" value="Create" class="btn btn-block btn-primary">

                                <span class="d-block text-left my-4 text-muted">&mdash; or register with &mdash;</span>

                                <div class="social-login">
                                    <a href="{{ route('redirect') }}" class="google">
                                        <span class="icon-google mr-3"></span>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('berhasil'))
        <script>
            Swal.fire({
                title: 'Success',
                text: "{{ session('berhasil') }}",
                icon: 'success',
                confirmButtonText: 'OK!'
            })
        </script>
    @endif
    @if (session('error'))
        <script>
            Swal.fire({
                title: 'Error',
                text: "{{ session('error') }}",
                icon: 'error',
                confirmButtonText: 'OK!'
            })
        </script>
    @endif

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        let iconpw = document.getElementById("iconpw");
        let password = document.getElementById("password");
        iconpw.onclick = function() {
            if (password.type == "password") {
                password.type = "text";
                iconpw.classList.remove('bi-eye-fill');
                iconpw.classList.add('bi-eye-slash-fill');
            } else {
                password.type = "password"
                iconpw.classList.remove('bi-eye-slash-fill');
                iconpw.classList.add('bi-eye-fill');
            }
        }
    </script>
</body>

</html>
