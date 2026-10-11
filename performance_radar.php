<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BEACON - Performance Radar</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Chart.js for Radar Chart -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light d-none d-lg-block">
        <div class="row align-items-center top-bar">
            <div class="col-lg-3 col-md-12 text-center text-lg-start">
                <a href="" class="navbar-brand m-0 p-0">
                    <h1 class="text-primary m-0">BEACON</h1>
                </a>
            </div>
            <div class="col-lg-9 col-md-12 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <i class="fa fa-map-marker-alt text-primary me-2"></i>
                    <p class="m-0">85/1 Moo.3 Bangkayang,Pathumthani, TH</p>
                </div>
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <i class="far fa-envelope-open text-primary me-2"></i>
                    <p class="m-0">plainc.official@gmail.com</p>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fas fa-user-lock"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid nav-bar bg-light">
        <nav class="navbar navbar-expand-lg navbar-light bg-white p-3 py-lg-0 px-lg-4">
            <a href="" class="navbar-brand d-flex align-items-center m-0 p-0 d-lg-none">
                <h1 class="text-primary m-0">BEACON</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav me-auto">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="service.html" class="nav-item nav-link">Services</a>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <div class="mt-4 mt-lg-0 me-lg-n4 py-3 px-4 bg-primary d-flex align-items-center">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 45px; height: 45px;">
                        <i class="fa fa-phone-alt text-primary"></i>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Plant Assessment</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Performance Radar</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container-fluid px-4">
            <div class="text-center">
                <h6 class="text-secondary text-uppercase">Performance Summary</h6>
                <h1 class="mb-5">BEACON</h1>
            </div>

            <!-- Performance Radar Container -->
            <div class="bg-light rounded p-4 p-sm-5">
                <div class="mb-4">
                    <h3 class="mb-3 text-primary">PERFORMANCE RADAR - Plant Summary on One Page</h3>
                    <p class="text-muted">Each axis is the weighted score of its KPIs: 50 = typical plant, 100 = best practice. Rating scale: 75-100 Leading | 50-75 Above typical | 25-50 Below typical | 0-25 Lagging.</p>
                </div>

                <!-- Plant Info Header Cards -->
                <div class="row g-3 mb-5">
                    <div class="col-md-3">
                        <div class="p-3 bg-white border rounded shadow-sm">
                            <span class="text-muted small">Plant / Owner</span>
                            <h5 class="text-primary mb-0">Nakhon Sawan Biomass 1</h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="p-3 bg-white border rounded shadow-sm">
                            <span class="text-muted small">Technology / Cooling</span>
                            <h6 class="mb-0">CFB Boiler / ACC</h6>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="p-3 bg-white border rounded shadow-sm">
                            <span class="text-muted small">Capacity & Period</span>
                            <h6 class="mb-0">8.5 MWe Net / FY2025</h6>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="p-3 bg-white border rounded shadow-sm text-center bg-primary text-white">
                            <span>OVERALL SCORE (0-100)</span>
                            <h3 class="mb-0 text-white">68.4</h3>
                            <small>Above Typical</small>
                        </div>
                    </div>
                </div>

                <!-- Radar Chart and Summary Table Row -->
                <div class="row g-4 align-items-center mb-5">
                    <div class="col-lg-6">
                        <div class="bg-white p-4 border rounded shadow-sm text-center">
                            <h5 class="text-secondary mb-3">Performance Radar Chart</h5>
                            <div style="position: relative; height: 380px; width: 100%;">
                                <canvas id="radarChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-white p-4 border rounded shadow-sm">
                            <h5 class="text-secondary mb-3">Radar Axes Summary</h5>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped align-middle text-center" style="font-size: 0.85rem;">
                                    <thead class="table-primary text-dark">
                                        <tr>
                                            <th class="text-start">Radar Axis</th>
                                            <th>Score</th>
                                            <th>Rating</th>
                                            <th>Plant</th>
                                            <th>Typical</th>
                                            <th>Best</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $radar_data = [
                                            ['axis' => 'Thermal efficiency', 'score' => 62, 'rating' => 'Above typical', 'plant' => '62', 'typical' => 50, 'best' => 100],
                                            ['axis' => 'Availability & reliability', 'score' => 74, 'rating' => 'Above typical', 'plant' => '74', 'typical' => 50, 'best' => 100],
                                            ['axis' => 'Maintenance & O&M cost', 'score' => 55, 'rating' => 'Above typical', 'plant' => '55', 'typical' => 50, 'best' => 100],
                                            ['axis' => 'Fuel supply security', 'score' => 68, 'rating' => 'Above typical', 'plant' => '68', 'typical' => 50, 'best' => 100],
                                            ['axis' => 'Ash & circular economy', 'score' => 45, 'rating' => 'Below typical', 'plant' => '45', 'typical' => 50, 'best' => 100],
                                            ['axis' => 'Environment', 'score' => 85, 'rating' => 'Leading', 'plant' => '85', 'typical' => 50, 'best' => 100],
                                            ['axis' => 'People & safety', 'score' => 80, 'rating' => 'Leading', 'plant' => '80', 'typical' => 50, 'best' => 100]
                                        ];

                                        foreach ($radar_data as $row) {
                                            $badge_color = ($row['score'] >= 75) ? 'bg-success' : (($row['score'] >= 50) ? 'bg-primary' : 'bg-warning text-dark');
                                            echo "<tr>";
                                            echo "<td class='text-start fw-semibold'>{$row['axis']}</td>";
                                            echo "<td class='fw-bold'>{$row['score']}</td>";
                                            echo "<td><span class='badge {$badge_color}'>{$row['rating']}</span></td>";
                                            echo "<td>{$row['plant']}</td>";
                                            echo "<td>{$row['typical']}</td>";
                                            echo "<td>{$row['best']}</td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Detailed KPI Scorecard Table -->
                <div class="bg-white p-4 border rounded shadow-sm mb-4">
                    <h4 class="text-secondary mb-3">KPI Scorecard - Detail Behind Each Axis</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle text-center" style="font-size: 0.85rem;">
                            <thead class="table-dark text-white">
                                <tr>
                                    <th class="text-start">KPI Metric</th>
                                    <th>Plant Value</th>
                                    <th>Unit</th>
                                    <th>Typical Benchmark</th>
                                    <th>Best Practice</th>
                                    <th>Score (0-100)</th>
                                    <th>Rating</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $scorecards = [
                                    ['kpi' => 'Gross Heat Rate (LHV)', 'val' => '13,450', 'unit' => 'kJ/kWh', 'typical' => '14,500', 'best' => '12,800', 'score' => 65, 'rating' => 'Above typical'],
                                    ['kpi' => 'Boiler Thermal Efficiency', 'val' => '84.2', 'unit' => '%', 'typical' => '81.5', 'best' => '88.0', 'score' => 60, 'rating' => 'Above typical'],
                                    ['kpi' => 'Equivalent Availability Factor (EAF)', 'val' => '91.2', 'unit' => '%', 'typical' => '88.0', 'best' => '96.0', 'score' => 72, 'rating' => 'Above typical'],
                                    ['kpi' => 'Forced Outage Rate (FOR)', 'val' => '3.8', 'unit' => '%', 'typical' => '5.5', 'best' => '1.0', 'score' => 76, 'rating' => 'Leading'],
                                    ['kpi' => 'Total O&M Cost per MWh', 'val' => '385', 'unit' => 'LCU/MWh', 'typical' => '420', 'best' => '310', 'score' => 58, 'rating' => 'Above typical'],
                                    ['kpi' => 'Single Largest Supplier Share', 'val' => '38', 'unit' => '%', 'typical' => '45', 'best' => '20', 'score' => 68, 'rating' => 'Above typical'],
                                    ['kpi' => 'Ash Sold / Valorised Share', 'val' => '15', 'unit' => '%', 'typical' => '10', 'best' => '80', 'score' => 45, 'rating' => 'Below typical'],
                                    ['kpi' => 'NOx Emissions (at 6% O2)', 'val' => '180', 'unit' => 'mg/Nm3', 'typical' => '210', 'best' => '120', 'score' => 82, 'rating' => 'Leading'],
                                    ['kpi' => 'Lost Time Injury Frequency Rate (LTIFR)', 'val' => '1.2', 'unit' => 'per 1M hrs', 'typical' => '3.5', 'best' => '0.0', 'score' => 80, 'rating' => 'Leading']
                                ];

                                foreach ($scorecards as $sc) {
                                    $badge_color = ($sc['score'] >= 75) ? 'bg-success' : (($sc['score'] >= 50) ? 'bg-primary' : 'bg-warning text-dark');
                                    echo "<tr>";
                                    echo "<td class='text-start fw-semibold'>{$sc['kpi']}</td>";
                                    echo "<td class='fw-bold'>{$sc['val']}</td>";
                                    echo "<td class='text-muted'>{$sc['unit']}</td>";
                                    echo "<td>{$sc['typical']}</td>";
                                    echo "<td>{$sc['best']}</td>";
                                    echo "<td class='fw-bold'>{$sc['score']}</td>";
                                    echo "<td><span class='badge {$badge_color}'>{$sc['rating']}</span></td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Notes Section -->
                <div class="p-3 bg-white border rounded">
                    <h6 class="text-secondary mb-2" style="font-size: 0.9rem;"><i class="fas fa-info-circle me-2"></i>Notes & Guidelines:</h6>
                    <ul class="text-muted mb-0" style="font-size: 0.78rem; line-height: 1.6;">
                        <li><strong>Scoring Basis:</strong> 50 represents a typical benchmark plant in the peer group, while 100 represents top-quartile best practice.</li>
                        <li><strong>Overall Score:</strong> Computed as the simple arithmetic mean across all active axes with available plant data.</li>
                    </ul>
                </div>

                <div class="text-center mt-5">
                    <button type="button" class="btn btn-secondary py-3 px-5 me-3" onclick="history.back()">Back</button>
                    <button type="submit" formaction="assessment_improvement.php" class="btn btn-primary py-3 px-5">View Improvement Areas</button>
                </div>

            </div>
            <!-- Performance Radar Container End -->
            
        </div>
    </div>
    <!-- Testimonial End -->
        

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>85/1 Moo.3, Bangkayang, Muang, Pathumthani, Thailand</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+66 85 519 1959</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>plainc.official@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Opening Hours</h4>
                    <h6 class="text-light">Monday - Friday:</h6>
                    <p class="mb-4">09.00 AM - 09.00 PM</p>
                    <h6 class="text-light">Saturday - Sunday:</h6>
                    <p class="mb-0">09.00 AM - 12.00 PM</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Services</h4>
                    <a class="btn btn-link" href="">Data Praparation</a>
                    <a class="btn btn-link" href="">Plant Assessment</a>
                    <a class="btn btn-link" href="">Efficiency Improvement</a>
                    <a class="btn btn-link" href="">Cost Analysis</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">beacon</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">PLAI Inc.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries & Chart.js Initialization -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="js/main.js"></script>

    <!-- Radar Chart Script -->
    <script>
        const ctx = document.getElementById('radarChart').getContext('2d');
        const radarChart = new Chart(ctx, {
            type: 'radar',
            data: {
                labels: [
                    'Thermal efficiency', 
                    'Availability & reliability', 
                    'Maintenance & O&M cost', 
                    'Fuel supply security', 
                    'Ash & circular economy', 
                    'Environment', 
                    'People & safety'
                ],
                datasets: [{
                    label: 'Plant Score',
                    data: [62, 74, 55, 68, 45, 85, 80],
                    backgroundColor: 'rgba(0, 185, 142, 0.2)',
                    borderColor: 'rgba(0, 185, 142, 1)',
                    pointBackgroundColor: 'rgba(0, 185, 142, 1)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgba(0, 185, 142, 1)'
                }, {
                    label: 'Typical Plant (50)',
                    data: [50, 50, 50, 50, 50, 50, 50],
                    backgroundColor: 'rgba(108, 117, 125, 0.05)',
                    borderColor: 'rgba(108, 117, 125, 0.5)',
                    borderDash: [5, 5],
                    pointRadius: 2
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    r: {
                        angleLines: { display: true },
                        suggestedMin: 0,
                        suggestedMax: 100,
                        ticks: { stepSize: 20 }
                    }
                },
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }
        });
    </script>
</body>

</html>