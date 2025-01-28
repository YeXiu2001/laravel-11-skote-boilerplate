<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.components.head')
</head>
<body>
<main>
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center py-4">
                            <a href="index.html" class="logo d-flex align-items-center w-auto">
                                <img src="assets/img/logo.png" alt="">
                                <span class="d-none d-lg-block">Boiler Plate</span>
                            </a>
                        </div>

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-2 pb-2 mb-2">
                                    <h5 class="card-title text-center pb-0  fs-4">Login to Your Account</h5>
                                </div>

                                <form method="POST" action="{{ route('login') }}" class="row g-3 needs-validation" novalidate>
                                    @csrf

                                    <div class="col-12">
                                        <label for="email" class="form-label">Email Address</label>
                                        <div class="input-group has-validation">
                                            <input id="email" type="email" name="email" 
                                                   class="form-control @error('email') is-invalid @enderror" 
                                                   value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="password" class="form-label">Password</label>
                                        <input id="password" type="password" name="password" 
                                               class="form-control @error('password') is-invalid @enderror" 
                                               required autocomplete="current-password">
                                        @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" 
                                                   {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">Remember me</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary w-100">Login</button>
                                    </div>

                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

    </div>
</main>
    @include('layouts.components.scripts')
</body>
</html>
