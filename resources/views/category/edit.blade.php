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
                        <h4>Edit Appointment
                            <a href="{{ url('category') }}" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <!-- Form for updating category -->
                        <form action="{{ route('category.update', $category->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name', $category->name) }}" />
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>Age</label>
                                <input type="text" name="age" class="form-control" value="{{ old('age', $category->age) }}" />
                                @error('age') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>Contact Number</label>
                                <input type="number" name="contact" class="form-control" value="{{ old('contact', $category->contact) }}" />
                                @error('contact') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>Address</label>
                                <textarea name="description" rows="3" class="form-control">{{ old('description', $category->description) }}</textarea>
                                @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <label for="specialty">Choose a Specialty:</label>
                            <select id="specialty" name="specialty" class="form-control" required>
                                <option value="" disabled>Select Specialty</option>
                                <option value="cardiology" {{ old('specialty', $category->specialty) == 'cardiology' ? 'selected' : '' }}>Cardiology</option>
                                <option value="pediatrics" {{ old('specialty', $category->specialty) == 'pediatrics' ? 'selected' : '' }}>Pediatrics</option>
                                <option value="dermatology" {{ old('specialty', $category->specialty) == 'dermatology' ? 'selected' : '' }}>Dermatology</option>
                                <option value="orthopedics" {{ old('specialty', $category->specialty) == 'orthopedics' ? 'selected' : '' }}>Orthopedics</option>
                                <option value="general-medicine" {{ old('specialty', $category->specialty) == 'general-medicine' ? 'selected' : '' }}>General Medicine</option>
                                <option value="neurology" {{ old('specialty', $category->specialty) == 'neurology' ? 'selected' : '' }}>Neurology</option>
                                <option value="psychiatry" {{ old('specialty', $category->specialty) == 'psychiatry' ? 'selected' : '' }}>Psychiatry</option>
                                <option value="gynecology" {{ old('specialty', $category->specialty) == 'gynecology' ? 'selected' : '' }}>Gynecology</option>
                            </select>


                            <div class="mb-3">
                                <label>Date</label>
                                <input type="date" rows="3" name="date" class="form-control" value="{{ old('date', $category->date) }}" />
                                @error('date') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                    </
                        </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>