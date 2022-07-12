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
    <x-header/>
    <div class="container">
        <h2 class="text-center">Customers</h2>
        <a href="{{url('/customer/create')}}" class="btn btn-primary">Add New Customer</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Country</th>
                    <th>City</th>
                    <th>DOB</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                <tr>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->email}}</td>
                    <td> @if($customer->gender == 'M')
                        Male
                        @elseif($customer->gender == 'F')
                        Female
                        @else
                        Other
                        @endif</td>
                    <td>{{$customer->country}}</td>
                    <td>{{$customer->city}}</td>
                    <td>{{$customer->dob}}</td>
                    <td>
                        @if($customer->status == '1')
                     <b>  <span class="text-success font-weight-bold">Active</span> </b>
                       @else
                      <b> <span class="text-danger font-weight-bold">Inactive</span> </b>
                       @endif
                    </td>
                    <td><a href="{{url('/customer/delete')}}/{{$customer->customer_id}}" class="btn btn-danger">Delete</a></td>
                    <td><a href="{{url('/customer/update')}}/{{$customer->customer_id}}" class="btn btn-primary">Edit</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>