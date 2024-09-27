<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
    <link rel="stylesheet" href="{{ asset('assets/admin/css/admin.css') }}">

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>

<div class="container mt-5">
    <h2>Add Category</h2>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('category') }}" method="POST">
                @csrf
                <!-- Category ID -->
                <div class="form-group">
                    <label for="category-id">Category ID</label>
                    <input type="number" name="id" class="form-control" id="category-id" placeholder="Enter Category ID" required>
                    @error('id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Category Name -->
                <div class="form-group mt-3">
                    <label for="category-name">Category Name</label>
                    <input type="text" name="name" class="form-control" id="category-name" placeholder="Enter Category Name" required>
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-success mt-4">Save</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
