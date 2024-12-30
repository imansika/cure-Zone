<!doctype html>
<html lang="{{ str_replace('_', '-',   app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Laravel 11 CRUD Application</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    @session('status')
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endsession

                    <div class="card">
                        <div class="card-header">
                            <h4>Doctors
                                <a href="{{ url('doctor/create') }}" class="btn btn-primary float-end">Add Doctors</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-stiped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Doctor Name</th>
                                        <th>Contact Number</th>
                                        <th>Email</th>
                                        <th>Speciality</t>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($doctors as $doctor)

                                    <tr>
                                        <td>{{ $doctor->id }}</td>
                                        <td>{{ $doctor->name }}</td>
                                        <td>{{ $doctor->contact }}</td>
                                        <td>{{ $doctor->email }}</td>
                                        <td>{{ $doctor->specialty }}</td>

                                        <td>
                                            <form action="{{ route('doctor.destroy', $doctor->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>


                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>