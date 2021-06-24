@section ('halaman_utama')

<body>
    <div class="hello" id="hello">
        <div class="container">
            <div class="jumbotron">
                <h1>My-Money</h1>
                <p>
                    .....................
                </p>
                <p>
                    <button class="btn btn-lg btn-primary">Tutorial</button>
                    <button class="btn btn-lg btn-danger">Demo</button>
                </p>
            </div>
        </div>
        <p>
        </p>
    </div>
</body>
@endsection

@section ('halaman_contact')

<body>
    <div class="hello" id="hello">
        <div class="container">
            <div class="jumbotron">
                <h1>Contact</h1>
                <p>
                    .....................
                </p>
                <p>
                    <button class="btn btn-lg btn-primary">Tutorial</button>
                    <button class="btn btn-lg btn-danger">Demo</button>
                </p>
            </div>
        </div>
    </div>
    <!--Bawah jumbotron-->
    <div class="form1">

        <form action="/contacts/store" method="POST" class="tm-contact-form">
            @csrf
            <h2 class="tm-h2 tm-white-text">Contact Form</span></h2>
            <div class="form-group margin-top-30">
                <input type="text" name="name" id="contact_name" class="form-control" placeholder="NAME" />
            </div>
            <div class="form-group">
                <input type="email" name="email" id="contact_email" class="form-control" placeholder="EMAIL" />
            </div>
            <div class="form-group">
                <input type="text" name="subject" id="contact_subject" class="form-control" placeholder="SUBJECT" />
            </div>
            <div class="form-group">
                <textarea id="contact_message" name="message" class="form-control" rows="6" placeholder="MESSAGE"></textarea>
            </div>
            <div class="form-group">
                <button class="tm-blue-button tm-form-submit-button" type="submit" name="submit">Send</button>
            </div>
        </form>
    </div>
</body>
@endsection
@section ('halaman_about')

<body>
    <div class="hello" id="hello">
        <div class="container">
            <div class="jumbotron">
                <h1>About</h1>
                <p>
                    .....................
                </p>
                <p>
                    <button class="btn btn-lg btn-primary">Tutorial</button>
                    <button class="btn btn-lg btn-danger">Demo</button>
                </p>
            </div>
        </div>
        <p>
        </p>
    </div>
</body>
@endsection

@section ('login')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="img/login_img.jpg" alt="IMG">
            </div>
            <form class="login100-form validate-form" method="POST" action="">
                <span class=" login100-form-title">
                    LOGIN
                </span>

                <div class="wrap-input100 validate-input" data-validate="Valid email is required: riyanlasso">
                    <input class="input100" type="text" name="username" placeholder="username">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="password" placeholder="password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        LOGIN
                    </button>
                </div>

                <div class="text-center p-t-12">
                    <span class="txt1">
                        Forgot
                    </span>
                    <a class="txt2" href="#">
                        Username / Password?
                    </a>
                </div>

                <div class="text-center p-t-100">
                    <button class="btn btn-primary" type="button">Create Account</button></a>
                </div>

            </form>
        </div>
    </div>
</div>
<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/tilt/tilt.jquery.min.js"></script>
<script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="js/main.js"></script>
@endsection

@section('login1')
<div class="container">
    <div class="col-md-4 offset-md-4 mt-5">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Form Login</h3>
            </div>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="card-body">
                    @if(session('errors'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Something it's wrong:
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    @if (Session::has('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }}
                    </div>
                    @endif
                    <div class="form-group">
                        <label for=""><strong>Email</strong></label>
                        <input type="text" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Password</strong></label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-block">Log In</button>
                    <p class="text-center">Belum punya akun? <a href="{{ route('register') }}">Register</a> sekarang!</p>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
@endsection

@section('register')
<div class="container">
    <div class="col-md-4 offset-md-4 mt-5">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Form Register</h3>
            </div>
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="card-body">
                    @if(session('errors'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Something it's wrong:
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="form-group">
                        <label for=""><strong>Nama Lengkap</strong></label>
                        <input type="text" name="name" class="form-control" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Email</strong></label>
                        <input type="text" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Password</strong></label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Konfirmasi Password</strong></label>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Password">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                    <p class="text-center">Sudah punya akun? <a href="{{ route('login') }}">Login</a> sekarang!</p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection