<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Information Detail Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Registration Number</th>
        <th>Email</th>
        <th>School</th>
        <th>Department</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($students as $student)
      <tr>
        <td>{{$student['id']}}</td>
        <td>{{$student['name']}}</td>
        <td>{{$student['reg_no']}}</td>
        <td>{{$student['email']}}</td>
        <td>{{$student['school']}}</td>
        <td>{{$student['department']}}</td>
        
        <td><a href="{{action('StudentController@edit', $student['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('StudentController@destroy', $student['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>
