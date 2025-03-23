
<!-- jobs.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">WorkIndia</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#">Candidate</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Employer</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Company</a></li>
                </ul>
                <button class="btn btn-outline-primary me-2">Find a job</button>
                <button class="btn btn-primary">Hire Now</button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="text-center py-5 bg-light">
        <h1 class="fw-bold">India's <span class="text-primary">Largest</span> Job Portal</h1>
        <p>WorkIndia helps you hire staff in 2 days</p>
        <div class="d-flex justify-content-center gap-3">
            <button class="btn btn-primary">Hire Now</button>
            <button class="btn btn-secondary">Get a Job</button>
        </div>
    </section>

    <!-- Search Section -->
    <div class="container py-4">
        <div class="card p-3">
            <h5 class="fw-bold">Search candidate database</h5>
            <div class="row">
                <div class="col-md-5">
                    <input type="text" class="form-control" placeholder="Eg. Back Office job">
                </div>
                <div class="col-md-5">
                    <select class="form-select">
                        <option selected>Pick Your City</option>
                        <option value="1">Mumbai</option>
                        <option value="2">Delhi</option>
                        <option value="3">Bangalore</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary w-100">Search</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
