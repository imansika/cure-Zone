<!doctype html>
<html lang="{{ str_replace('_', '-',   app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cure-Zone</title>

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
                <div class="card">
                    <div class="card-header">
                        <h4> Appointment Detail
                            <a href="{{ url('category') }}" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label>Patient name</label>
                            <p>
                                {{ $category->name }}
                            </p>
                        </div>
                        <div class="mb-3">
                            <label>Age</label>
                            <p>
                                {{ $category->age }}
                            </p>
                        </div>
                        <div class="mb-3">
                            <label>Contact Number</label>
                            <p>
                                {{ $category->contact }}
                            </p>
                        </div>
                        <div class="mb-3">
                            <label>Address</label>
                            <p>
                                {!! $category->description !!}
                            </p>
                        </div>
                        <div class="mb-3">
                            <label>speciality</label>
                            <p>
                                {{ $category->specialty }}
                            </p>
                        </div>
                        <div class="mb-3">
                            <label>Date</label>
                            <p>
                                {{ $category->date }}
                            </p>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>