<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<x-header/>
    <div class="container">
        <h2 class="text-center">{{$title}}</h2>
        <form action="{{$url}}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Name: </label>
                <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{$customer->name}}">
                <small id="helpId" class="text-danger">
                    @error('name')
                            {{$message}}
                    @enderror
                </small>
            </div>
            <div class="form-group">
                <label for="">Email: </label>
                <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{$customer->email}}">
                <small id="helpId" class="text-danger">
                    @error('email')
                            {{$message}}
                    @enderror
                </small>
            </div>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Gender: </legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="M"  {{$customer->gender == "M" ? "checked" : ""}}>
                        <label class="form-check-label" for="gridRadios1"
                       >
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="F" {{$customer->gender == "F" ? "checked" : ""}}>
                        <label class="form-check-label" for="gridRadios2" >
                            Female
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="gender" id="gridRadios3" value="O"  {{$customer->gender == "O" ? "checked" : ""}}>
                        <label class="form-check-label" for="gridRadios3" {{$customer->gender == "O" ? "checked" : ""}}>
                            Other
                        </label>
                    </div>
                </div>
            </fieldset>
            <div class="form-group">
                <label for="">Address: </label>
                <textarea name="address" id="" cols="10" rows="5" class="form-control">{{$customer->address}}</textarea>
                <small id="helpId" class="text-danger" >
                    @error('address')
                            {{$message}}
                    @enderror
                </small>
            </div>
            <div class="form-group">
                <label for="">Country: </label>
                <input type="text" name="country" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{$customer->country}}">
            </div>
            <div class="form-group">
                <label for="">City: </label>
                <input type="text" name="city" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{$customer->city}}">
            </div>
            <div class="form-group">
                <label for="">DOB: </label>
                <input type="date" name="dob" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{$customer->dob}}">
            </div>
            <div class="form-group">
                <label for="">Password: </label>
                <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId" >
                <small id="helpId" class="text-danger" >
                    @error('password')
                            {{$message}}
                    @enderror
                </small>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" id="" value="Add Customer" class="btn btn-primary">
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>