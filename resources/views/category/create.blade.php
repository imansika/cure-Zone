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
                        <h4>Make Appointment
                            <a href="{{ url('category') }}" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('category.store') }}" method="POST">

                            @csrf
                            <div class="mb-3">
                                <label>Patient Name</label>
                                <input type="text" name="name" class="form-control" />
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>Age</label>
                                <input type="text" name="age" class="form-control" />
                                @error('age') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>Contact Number</label>
                                <input type="number" name="contact" class="form-control" />
                                @error('contact') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>Address</label>
                                <textarea name="description" rows="3" class="form-control"></textarea>
                                @error('description') <span class="text-danger">{{ $message }}</span> @enderror
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
                                <label>Date</label>
                                <input type="date" rows="3" name="date" class="form-control" />
                                @error('date') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
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