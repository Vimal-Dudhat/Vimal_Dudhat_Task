<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
  @endif
  <div class="container">
    @if (Auth::user()->Partner)
      <h2>Match Records</h2>
      {{-- <p>The .table-striped class adds zebra-stripes to a table:</p> --}}
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>Annual Income</th>
            <th>Occupation</th>
            <th>Family Type</th>
            <th>Manglik</th>
          </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->dob }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->annual_income }}</td>
                    <td>{{ $user->occupation }}</td>
                    <td>{{ $user->family_type }}</td>
                    <td>{{ $user->manglik }}</td>
                </tr>
            @endforeach
          </tbody>
        </table>
        <tr>{{ $users->links() }}</tr>
    @else    
      <div style="padding: 1%;">
        <a class="btn btn-primary" href="{{route('partner-preference.register')}}">Add Partner Preference</a>
      </div>
    @endif
    <div style="padding: 1%;">
      <a class="btn btn-primary" href="{{route('logout')}}">Logout</a>
    </div>
  </div>
</body>
</html>
