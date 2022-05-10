<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel | Eloquent CRUD</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>
    <div class="container-sm">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="text" class="form-control m-3" placeholder="Enter Your Name" name="name" value="{{$student->name}}">
            <input type="email" class="form-control m-3" placeholder="Enter Your Email" name="email" value="{{$student->email}}">
            <input type="text" class="form-control m-3" placeholder="Enter Your City" name="city" value="{{$student->city}}">
            <input type="text" class="form-control m-3" placeholder="Enter Your Marks" name="marks" value="{{$student->marks}}">
            {{-- Single File Upload --}}
            <input type="file" name="filename" class="form-control m-3">
            <button type="submit" class="btn btn-primary m-auto">Update</button>
        </form>
    </div>
    {{-- <div class="container-sm">
        <h1 class="text-center text-warning m-5">Table</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>Marks</th>
                    <th colspan="2" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $stu)
                    <tr>
                        <td>{{$stu->id}}</td>
                        <td>{{$stu->name}}</td>
                        <td>{{$stu->email}}</td>
                        <td>{{$stu->city}}</td>
                        <td>{{$stu->marks}}</td>
                        <td class="text-center"><a href={{url('/edit',$stu->id)}}><button class="btn btn-success">Edit</button></a></td>
                        <td class="text-center"><a href={{url('/delete',$stu->id)}}><button class="btn btn-danger">Danger</button></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}
</body>

</html>
