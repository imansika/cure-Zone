<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cure-Zone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Doctors
                            <a href="{{ url('doctor') }}" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('doctor.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            <div class="mb-3">
                                <label>Doctor Name</label>
                                <input type="text" name="name" class="form-control" />
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-3">
                                <label>Contact Number</label>
                                <input type="number" name="contact" class="form-control" />
                                @error('contact') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" />
                                @error('contact') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <label for="specialty">Choose a Specialty:</label>
                            <select id="specialty" name="specialty" required>
                                <option value="" disabled selected>Select Specialty</option>
                                <option value="cardiology">Cardiology</option>
                                <option value="pediatrics">Pediatrics</option>
                                <option value="dermatology">Dermatology</option>
                                <option value="orthopedics">Orthopedics</option>
                                <option value="general-medicine">General Medicine</option>
                                <option value="neurology">Neurology</option>
                                <option value="psychiatry">Psychiatry</option>
                                <option value="gynecology">Gynecology</option>
                            </select>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>