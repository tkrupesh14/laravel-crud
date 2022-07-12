<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
<form action="{{url('/')}}/register" method="post">
    @csrf
   <div class="container">
    <h1 class="text-center">Registration</h1>
    <div class="form-group">
      <label for="">Name: </label>
      <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{old('name')}}">
      <small id="helpId" class="text-danger">
            @error('name')
                    {{$message}}
            @enderror

      </small>
    </div>
    <div class="form-group">
      <label for="">Email: </label>
      <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
      <small id="helpId" class="text-danger">
            @error('email')
                    {{$message}}
            @enderror

      </small>
    </div>
    <div class="form-group">
      <label for="">Password: </label>
      <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">
      <small id="helpId" class="text-danger">
            @error('password')
                    {{$message}}
            @enderror

      </small>
    </div>
    <div class="form-group">
      <label for="">Confirm Password: </label>
      <input type="password" name="password_confirmation" id="" class="form-control" placeholder="" aria-describedby="helpId">
      <small id="helpId" class="text-danger">
            @error('password_confirmation')
                    {{$message}}
            @enderror

      </small>
    </div>
    .<div class="form-group">
            <input type="submit" value="Register" class="btn btn-primary">
    </div>
   </div>
   </form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>