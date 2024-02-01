<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wise Concern</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/wiselogo.png') }}">
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/selectize.js') }}"></script>
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        .red {
            border: 1px red;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="wrapper login">
            <main class="main">
                <div class="reg__wrap">
                    <div class="reg__image">
                        <div class="bg-absolute"><img src="{{ asset('img/hero-bg.png') }}" alt="Hesk" /></div>
                    </div>
                    <div class="reg__section">
                        <div class="reg__box">
                            <h2 class="reg__heading">Welcome to Wise Concern! <br> Please log in.</h2>
                            <div style="margin-right: -24px; margin-left: -16px">
                            </div>
                            <form action="{{ route('login') }}" class="form " id="form1" method="POST" name="form1" novalidate>
                                @csrf
                                @if(session('error'))
                                <div class="notice-flash" style="margin-bottom:30px; margin-top: 25px">
                                    <div class="notification red browser-default" style="margin-top: 12px; margin-bottom: 12px">
                                        <p><strong>Email or Password is incorrect!</strong></p>
                                    </div>
                                </div>
                                @endif
                                <div class="form-group">
                                    <label for="regInputUsername">Email Address</label>
                                    <input type="text" class="form-control " id="email" name="email" placeholder="sample@email.com" autocomplete="off" required>
                                    <div class="form-control__error">This field is required</div>
                                </div>
                                <div class="form-group">
                                    <label for="regInputPassword">Password</label>
                                    <div class="input-group">
                                        <input type="password" name="password" id="password" class="form-control">
                                        <div class="input-group-append--icon passwordIsHidden">
                                            <svg class="icon icon-eye-close">
                                                <use xlink:href="../img/sprite.svg#icon-eye-close"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="form-control__error">This field is required</div>
                                </div>
                                <div class="form__submit">
                                    <button class="btn btn-full" ripple="ripple" type="submit" id="recaptcha-submit"> Click here to login </button>
                                    <input type="hidden" name="a" value="do_login">
                                </div>
                                <div class="g-recaptcha" data-sitekey="6LfH41EjAAAAAAGdGdnNFxkufpAP21mIki_irUdi" data-bind="recaptcha-submit" data-callback="recaptcha_submitForm"></div>
                            </form>
                        </div>
                    </div>
                </div>

                <script>
                    $(() => {
                        $('form :visible[class*=isError]:first').focus();
                    });

                    document.addEventListener('DOMContentLoaded', function() {
                        var errorAlert = document.getElementById('errorAlert');
                        if (errorAlert) {
                            var form = document.getElementById('form1');
                            form.insertBefore(errorAlert, form.firstChild);
                        }
                    });
                </script>

                <footer class="footer">
                    <p class="text-center">Powered by <a href="https://www.hesk.com" class="link">Wise Immigration & Study Services</a> <span class="font-weight-bold">WISS</span><br>
                </footer>
            </main>
        </div>

        <script src="{{ asset('js/svg4everybody.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/app.min.js') }}"></script>

    </div>
</body>

</html>