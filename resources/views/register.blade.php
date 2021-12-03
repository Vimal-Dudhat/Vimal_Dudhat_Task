<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Register</title>

        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container color-b">
                        <div class="row justify-content-center">
                            <div class="col-sm-12">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Register</h3></div>
                                    <div class="card-body">
                                      <div class="d-flex" style="justify-content: center;">
                                        <h3>Personal Details</h3>
                                      </div>
                                        <form action="{{route('user.store')}}" method="POST">
                                          @csrf
                                          <div class="form-group">
                                            <label class="control-label col-sm-2" for="first_name">First Name:</label>
                                            <div class="col-sm-10 pb-3">
                                              <input type="text" class="form-control" id="first_name" placeholder="Enter First Name" name="first_name" value="{{Request::old('first_name')}}">
                                              @if ($errors->has('first_name'))
                                                  <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                              @endif
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-sm-2" for="last_name">Last Name:</label>
                                            <div class="col-sm-10 pb-3">
                                              <input type="text" class="form-control" id="last_name" placeholder="Enter Last Name" name="last_name" value="{{Request::old('last_name')}}">
                                              @if ($errors->has('last_name'))
                                                  <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                              @endif
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-sm-2" for="email">Email:</label>
                                            <div class="col-sm-10 pb-3">
                                              <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" value="{{Request::old('email')}}">
                                              @if ($errors->has('email'))
                                                  <span class="text-danger">{{ $errors->first('email') }}</span>
                                              @endif
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-sm-2" for="pwd">Password:</label>
                                            <div class="col-sm-10 pb-3">
                                              <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" value="{{Request::old('password')}}">
                                              @if ($errors->has('password'))
                                                  <span class="text-danger">{{ $errors->first('password') }}</span>
                                              @endif
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-sm-2" for="dob">Date of Birth:</label>
                                            <div class="col-sm-10 pb-3">
                                              <input type="date" class="form-control" id="dob" placeholder="Enter dob" name="dob" value="{{Request::old('dob')}}">
                                              @if ($errors->has('dob'))
                                                  <span class="text-danger">{{ $errors->first('dob') }}</span>
                                              @endif
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-sm-2" for="dob">Gender:</label>
                                            <div class="col-sm-10 pb-3">
                                              <input type="radio" class="" name="gender" value="male" checked>Male
                                              <input type="radio" class="" name="gender" value="female">Female
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-sm-2" for="annual_income">Annual Income:</label>
                                            <div class="col-sm-10 pb-3">
                                              <input type="number" class="form-control" id="annual_income" placeholder="Enter Annual Income" name="annual_income" value="{{Request::old('annual_income')}}">
                                              @if ($errors->has('annual_income'))
                                                  <span class="text-danger">{{ $errors->first('annual_income') }}</span>
                                              @endif
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-sm-2" for="occupation">Occupation:</label>
                                            <div class="col-sm-10 pb-3">
                                              <select name="occupation" class="form-control">
                                                <option value="private_job">Private Job</option>
                                                <option value="govt_job">Government Job</option>
                                                <option value="business">Business</option>
                                              </select>
                                              @if ($errors->has('occuption'))
                                                  <span class="text-danger">{{ $errors->first('occuption') }}</span>
                                              @endif
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-sm-2" for="family_type">Family Type:</label>
                                            <div class="col-sm-10 pb-3">
                                              <select name="family_type" class="form-control">
                                                <option value="joint">Joint Family</option>
                                                <option value="nuclear">Nuclear Family</option>
                                              </select>
                                              @if ($errors->has('family_type'))
                                                  <span class="text-danger">{{ $errors->first('family_type') }}</span>
                                              @endif
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-sm-2" for="manglik">Manglik:</label>
                                            <div class="col-sm-10 pb-3">
                                              <select name="manglik" class="form-control">
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                              </select>
                                              @if ($errors->has('manglik'))
                                                  <span class="text-danger">{{ $errors->first('manglik') }}</span>
                                              @endif
                                            </div>
                                          </div>

                                          <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10 pb-3">
                                              <button type="submit" class="btn btn-lg btn-block btn-primary ">Submit</button>
                                            </div>
                                          </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="{{url('/')}}">Already have an account? Sign in.</a></div>
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
