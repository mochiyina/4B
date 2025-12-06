<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ZALORE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.5.0/chart.min.js" integrity="sha512-n/G+dROKbKL3GVngGWmWfwK0yPctjZQM752diVYnXZtD/48agpUKLIn0xDQL9ydZ91x6BiOmTIFwWjjFi2kEFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">UiTM Dihatiku</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <button class="dark-mode-toggle" id="darkModeToggle" title="Toggle Dark Mode">
                        <i class="bi bi-moon-stars-fill" id="darkModeIcon" style="font-size: 1.5rem;"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid header d-flex flex-column justify-content-center text-white texxt-shadow">
        <h1 class="fw-bold fs-1 text-center">Universiti Teknologi MARA (UiTM)</h1>
        <h2 class="text-center fw-normal fs-4">Faculty of Information Science</h2>
    </div>

    <!-- Main Content -->
    <div class="container">

        <div class="row" style="margin-top:-42px;">
            <div class="col-md-3">
                <div class="card bg-body-tertiary mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="smc-title">Total Users</div>
                                <div class="fw-normal fs-6">10,000</div>
                            </div>
                            <div class="col">
                                <div class="d-flex align-items-center justify-content-center h-100">
                                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-primary" style="width: 50px; height: 50px;">
                                        <i class="bi bi-person-fill fs-4"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-body-tertiary mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="smc-title">Total Users</div>
                                <div class="fw-normal fs-6">10,000</div>
                            </div>
                            <div class="col">
                                <div class="d-flex align-items-center justify-content-center h-100">
                                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-primary" style="width: 50px; height: 50px;">
                                        <i class="bi bi-person-fill fs-4"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-body-tertiary mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="smc-title">Total Users</div>
                                <div class="fw-normal fs-6">10,000</div>
                            </div>
                            <div class="col">
                                <div class="d-flex align-items-center justify-content-center h-100">
                                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-primary" style="width: 50px; height: 50px;">
                                        <i class="bi bi-person-fill fs-4"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-body-tertiary mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="smc-title">Total Users</div>
                                <div class="fw-normal fs-6">10,000</div>
                            </div>
                            <div class="col">
                                <div class="d-flex align-items-center justify-content-center h-100">
                                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-primary" style="width: 50px; height: 50px;">
                                        <i class="bi bi-person-fill fs-4"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-4">
                <div class="card bg-body-tertiary mb-3">
                    <div class="ribbon-featured">Featured</div>
                    <div class="card-body">
                        <div class="fs-5 mb-2 fw-bold">Announcement</div>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores et ex omnis optio? Reiciendis eos similique facilis praesentium, dolorem neque. Tenetur consectetur possimus maxime sint doloremque cupiditate natus quod consequatur.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card promotion">
                    <div class="card-body">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel quisquam nostrum consequatur explicabo necessitatibus nisi tenetur quos ab, cupiditate facere voluptatum repudiandae, ea animi? Harum voluptas quidem similique suscipit voluptate?
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <canvas id="myChart"></canvas>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                <script>
                    const ctx = document.getElementById('myChart');

                    new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                            datasets: [{
                                label: '# of Votes',
                                data: [12, 19, 3, 5, 2, 30],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                </script>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <!-- Dark Mode Toggle Script -->
    <script>
        const darkModeToggle = document.getElementById('darkModeToggle');
        const darkModeIcon = document.getElementById('darkModeIcon');
        const htmlElement = document.documentElement;

        const currentTheme = localStorage.getItem('theme') || 'light';
        htmlElement.setAttribute('data-bs-theme', currentTheme);
        updateIcon(currentTheme);

        darkModeToggle.addEventListener('click', () => {
            const currentTheme = htmlElement.getAttribute('data-bs-theme');
            const newTheme = currentTheme === 'light' ? 'dark' : 'light';

            htmlElement.setAttribute('data-bs-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            updateIcon(newTheme);
        });

        function updateIcon(theme) {
            if (theme === 'dark') {
                darkModeIcon.className = 'bi bi-sun-fill';
            } else {
                darkModeIcon.className = 'bi bi-moon-stars-fill';
            }
        }
    </script>
</body>

</html>

