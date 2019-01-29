<!-- edit.blade.php -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Edit Student Information</h2><br  />
        <form method="post" action="{{action('StudentController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" value="{{$student->name}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="email">Registration Number:</label>
              <input type="text" class="form-control" name="reg_no" value="{{$student->reg_no}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="number">Email:</label>
              <input type="text" class="form-control" name="email" value="{{$student->email}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4" style="margin-left:38px">
                <lable>School:</lable>
                <select name="school">
                  <option value="Science"  @if($student->school=="Science") selected @endif>Science</option>
                  <option value="Engineering"  @if($student->school=="Engineering") selected @endif>Engineering</option>
                </select>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4" style="margin-left:38px">
                <lable>Department:</lable>
                <select name="department">
                  <option value="CS"  @if($student->department=="Computer Science") selected @endif>Computer Science</option>
                  <option value="CE"  @if($student->department=="Computer Engineering") selected @endif>Computer Engineering</option>
                </select>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>

