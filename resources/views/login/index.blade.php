<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Informasi Akademik</title>
    <link rel="stylesheet" href="/assets/css/main/app.css">
    <link rel="stylesheet" href="/assets/css/pages/auth.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Readex Pro', sans-serif;
            /* background-image: url("https://media.istockphoto.com/photos/abstract-blue-cyan-background-picture-id995719694?k=20&m=995719694&s=612x612&w=0&h=zI2SFqWdZallvqgVphnq5T8ZWYK0TBIkKdyYP60JAI8="); */
        }
    </style>
</head>

<body>

    <div id="auth">

        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">

                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        @if (session()->has('loginError'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('loginError') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <div id="auth-center">
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <div class="auth-logo">
                                        <img src="/img/Logo-ITS-1-300x185.png" alt="Logo">
                                    </div>
                                    <h1 class="auth-title">Log in</h1>
                                    <p class="auth-subtitle mb-5">Sistem Informasi Akademik</p>
                                </div>
                            </div>

                            <form action="/login" method="post">
                                @csrf
                                <div class="form-group position-relative has-icon-left mb-2">
                                    <input type="text" name="nrp"
                                        class="form-control @error('nrp') is-invalid @enderror" id="nrp"
                                        placeholder="Masukkan NRP" autofocus required>
                                    <div class="form-control-icon">
                                        <i class="bi bi-person"></i>
                                    </div>
                                    @error('nrp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <input type="password" name="password" id="password"
                                        class="form-control
                                @error('password') is-invalid @enderror"
                                        placeholder="Password" autofocus required>
                                    <div class="form-control-icon">
                                        <i class="bi bi-shield-lock"></i>
                                    </div>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <button class="btn btn-primary btn-block btn-lg shadow-lg" type="submit">Log in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
