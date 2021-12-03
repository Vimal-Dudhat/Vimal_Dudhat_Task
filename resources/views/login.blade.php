<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>

        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        @if (\Session::has('error'))
                                            <div class="alert alert-danger">
                                                <ul>
                                                    <li>{!! \Session::get('error') !!}</li>
                                                </ul>
                                            </div>
                                        @endif
                                        <form action="{{route('user.login')}}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control py-4" id="inputEmailAddress" type="email" name="email" placeholder="Enter email address" value="{{Request::old('email')}}" />
                                                @if ($errors->has('email'))
                                                  <span class="text-danger">{{ $errors->first('email') }}</span>
                                              @endif
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control py-4" id="inputPassword" type="password" name="password" placeholder="Enter password" value="{{Request::old('password')}}" />
                                                @if ($errors->has('password'))
                                                  <span class="text-danger">{{ $errors->first('password') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between">
                                                <button class="btn btn-success btn-lg btn-block" type="submit">Login</button>
                                            </div>
                                        </form>
                                        <div class="form-group d-flex" style="justify-content: center;"><span>OR</span></div>
                                        <div class="">
                                            <a href="{{route('google.login')}}" class="google btn  btn-primary btn-lg btn-block">
                                              <i class="fa fa-google fa-fw"></i> Login with Google+
                                            </a>
                                          </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="{{route('user.register')}}">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
