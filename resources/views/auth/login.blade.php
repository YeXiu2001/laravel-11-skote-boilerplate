<!doctype html>
<html lang="en">

    @include('layouts.components.head')

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            background: #1b263b;
            /* background-image: url("{{asset('assets/images/login/2.jpg')}}"); */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .wrapper{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            /* background: rgba(39, 39, 39, 0.4); */
        }

        .nav{
            position: fixed;
            top: 0;
            display: flex;
            width: 100%;
            height: 100px;
            line-height: 100px;
            background: linear-gradient(rgba(39, 39, 39, 1) transparent);
            z-index: 100;
        }

        .login{
            width: 500px;
            display: flex;
            flex-direction: column;
            transition: .5s ease-in-out;
            border-radius: 0.8rem;
            -webkit-box-shadow: 0px 0px 155px 7px rgba(2,88,186,0.41);
            -moz-box-shadow: 0px 0px 155px 7px rgba(2,88,186,0.41);
            box-shadow: 0px 0px 155px 7px rgba(2,88,186,0.41);
        }

        header{
            color: #fff;
            font-size: 30px;
            text-align: center;
            padding: 10px 0 30px 0;
        }

        .input-field {
            font-size: 15px;
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            height: 50px;
            width: calc(100% - 40px); /* Adjusted width for the input field */
            padding: 0 10px 0 45px;
            border: none;
            border-radius: 30px;
            outline: none;
            transition: .2s ease;
        }
        .input-field:hover, .input-field:focus{ background: rgba(255, 255, 255, 0.25); color:#fff }

        ::-webkit-input-placeholder{ color: #fff !important; }

        .input-container {
            position: relative;
        }

        .input-box {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            margin-bottom: 30px;
        }

        .input-box i {
            position: absolute;
            font-size: 20px;
            top: 50%;
            transform: translateY(-50%);
            left: 30px;
            color: #fff;
        }

        .invalid-feedback{
            position: absolute;
            font-size: 13px;
            margin-top: 75px;
            left: 30px;
        }

        .submit{
            font-size: 15px;
            font-weight: 500;
            color: white;
            height: 45px;
            width: 93%;
            border: none;
            border-radius: 30px;
            outline: none;
            background: rgba(255, 255, 255, 0.25);
            cursor: pointer;
            transition: .3s ease-in-out;
        }
        .submit:hover{
            background: #259ba6;
            box-shadow: 1px 5px 7px 1px rgba(0, 0, 0, 0.2);
        }

        .two-col{
            display: flex;
            justify-content: space-between;
            color: #fff;
            font-size: small;
            margin-left: 30px;
            margin-bottom: 20px;
        }
        .two-col .one{
            display: flex;
            gap: 5px;
        }


    </style>

    <body>
        <div class="wrapper">
            <nav class="nav d-flex justify-content-left">
                <div class="nav-logo navbar-brand-box">
                    <span class="logo-lg">
                        <img src="{{url('assets/images/logo_only.png')}}" class="logo" alt="" height="75">
                    </span>
                </div>
            </nav>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div>
                    <div class="login" id="login">
                        <div class="top">
                            <div style="text-align: center;">
                                <img src="{{url('assets/images/medsys_logo_nobg.png')}}" alt="" height="100" style="margin-bottom: 0; padding: 0;">
                            </div>
                            <header>Sign In</header>
                        </div>

                        <div class="input-container">
                                <div class="input-box">
                                    <input id="email" type="email" class="input-field form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                                    <i class="bx bxs-envelope"></i>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                        </div>
                        
                        <div class="input-container">
                            <div class="input-box">
                                <input id="password" type="password" class="input-field form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                <i class="bx bxs-lock-alt"></i>
                                
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                        </div>

                        <div class="two-col">
                            <div class="form-check one">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>

                        <div class="input-box">
                            <input type="submit" class="btn submit" value="Sign In">
                        </div>
                    </div>
                </div>
            </form>
        </div>

        @include('layouts.components.script')

    </body>
</html>
