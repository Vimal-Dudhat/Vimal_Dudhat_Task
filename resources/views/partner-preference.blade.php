<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Register</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        <link href="{{asset('css/range-slider.css')}}" rel="stylesheet" />
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
       
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container color-b">
                        <div class="row justify-content-center">
                            <div class="col-sm-8">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Partner Preference</h3></div>
                                    <div class="card-body">
                                      <form method="post" action="{{route('partner-preference.store')}}" id="partnerPrefForm">
                                          @csrf
                                          <div class="form-group">
                                            <label class="control-label col-sm-2" for="annual_income">Annual Income:</label>
                                              <div class="row">
                                                <div class="col-sm-12">
                                                  <div id="slider-range"></div>
                                                </div>
                                              </div>
                                              <div class="slider-labels">
                                                <div class="col-xs-6 caption">
                                                  <strong>Min:</strong> <span id="slider-range-value1"></span>
                                                </div>
                                                <div class="col-xs-6 text-right caption">
                                                  <strong>Max:</strong> <span id="slider-range-value2"></span>
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col-sm-12">
                                                    <input type="hidden" name="min_value" value="">
                                                    <input type="hidden" name="max_value" value="">
                                                </div>
                                              </div>
                                            {{-- <div class="col-sm-10 pb-3">
                                              <input type="number" class="form-control" id="annual_income" placeholder="Enter Annual Income" name="expected_income">
                                            </div> --}}
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-sm-2" for="occupation">Occupation:</label>
                                            <div class="col-sm-10 pb-3">
                                              <select class="js-example-basic-multiple form-control" name="occupation[]" multiple="multiple" required>
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
                                              <select class="js-example-basic-multiple form-control" name="family_type[]" multiple="multiple" required>
                                                <option value="joint">Joint Family</option>
                                                <option value="nuclear">Nuclear Family</option>
                                              </select>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-sm-2" for="manglik">Manglik:</label>
                                            <div class="col-sm-10 pb-3">
                                              <select name="manglik" class="form-control">
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                                <option value="both">Both</option>
                                              </select>
                                            </div>
                                          </div>

                                          <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10 pb-3">
                                              <button type="submit" class="btn btn-lg btn-block btn-primary">Submit</button>
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
        <script>
          $(document).ready(function() {
              $('.js-example-basic-multiple').select2();
          });
        </script>
        <script src="{{asset('js/range-slider.js')}}"></script>

    </body>
</html>
