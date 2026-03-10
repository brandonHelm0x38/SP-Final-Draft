<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SP - Featured Priorities</title>
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Main CSS for all Bootstrap responsive pages -->
    <link rel="stylesheet" href="../../../css/main-responsive.css">
    <!-- Main CSS for all Bootstrap responsive pages; Custom Media-Queries -->
    <link rel="stylesheet" href="../../../css/main-media-queries.css">
</head>
<body>
    <!-- -~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~ -->
    <?php
    session_start();
    $userId = isset($_SESSION['n_user_id']) ? $_SESSION['n_user_id'] : null;
    $nameAlias = isset($_SESSION['v_name_alias']) ? $_SESSION['v_name_alias'] : null;
    ?>
    <!-- -~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~ -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../../../images/main-icons/SP_Logo_Silhouette.png" alt="Startegic Pivot Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Left-aligned links -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="../../../index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#">Priorities</a></li>
                    <li class="nav-item"><a class="nav-link" href="../projects/top-projects.php">Top-Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="../newsletters/featured.php">Newsletters</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
                
                <!-- Right-aligned Login/Signup -->
                <div class="navbar-nav ms-auto">
                    <?php if ($nameAlias): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo '@' . htmlspecialchars($nameAlias); ?>
                            </a>
                            <ul class="dropdown-menu custom-navbar-dropdown" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Main/Alerts</a></li>
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Help</a></li>
                            </ul>
                        </li>
                    <form action="../../../php-includes/logout-inc.php" method="post" style="display:inline;">
                        <button type="submit" class="btn btn-outline-light btn-sm ms-2" id="logout-nav-btn">Log Out</button>
                    </form>
                    <?php else: ?>
                        <button class="nav-link" id="login-nav-btn">Login</button>
                        <button class="btn btn-outline-light btn-sm ms-2" id="signup-nav-btn">Sign Up</button>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>
    <div class="scroll-container">
        <div class="internal-container">
            
            <!-- BootStrap Container System -->
            <div class="container mt-5">
                <!-- Brief Page Introduction/Explanation -->
                <h1 class="mt-4 text-center">Welcome to the Featured Priorities Hub</h1>
                <p class="lead text-center">This page is our suggested model for tracking our National Initiatives. Our legacy page outlines our plans for unique lasting Presidential Priveleges that dial the Department of Government Efficiency into a lasting identity.<br>
                <br>
                The CVO of Strategic Pivot is our suggested head of the DOGE. They have unique responsibilities in ensuring our learning Eco-Systems have relevant content and tools for our National Intitiatives. It's a tool for scoping out options and helping the public follow along with relevant concepts.<br>
                <br>
                We're working on finalizing the backend so you can view active projects with unique elements of solutions mapped out with an engaging learning-content eco-system to power it.</p>
                <hr>
                <!-- Priority Tracking By Year Quick-Search -->
                <h4 class="mt-4 text-center">Priority Tracking By Year</h4>
                <nav class="categories-container">
                    <div class="categories-wrapper">
                        <button class="category-item">2026</button>
                    </div>
                </nav>
                <hr>
            </div>

            <!-- BootStrap Container System -->
            <div class="container mt-5 mb-5" style="background-color: var(--primary-pane-bg-color);border:2px solid var(--dark-border-color);padding:2rem;">

                <!-- Priorities Overview; Populated by origin year query -->
                <h1 class="black-text-gold-underline" style="margin-bottom:2rem;">Priorities Overview - @2026</h1>
                <!-- First set of 2 columns -->
                <div class="row text-center">
                    <div class="col-md-6 text-center">
                        <h3 class="black-text-gold-underline">CVO of SP Priorities</h3>
                        <ul class="list-unstyled">
                            <li><a href="#" class="btn btn-priorities-list">Project Management & Engagement Product Eco-System</a></li>
                            <li><a href="#" class="btn btn-priorities-list">Cyber-Force Market Model for the AI Age</a></li>
                            <li><a href="#" class="btn btn-priorities-list">28th Amendment & Bussinesses Bill of Rights</a></li>
                            <li><a href="#" class="btn btn-priorities-list">Advanced Psychology Journaling Product Eco-System</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 text-center">
                        <h3 class="black-text-gold-underline">Industrial Priorities</h3>
                        <ul class="list-unstyled">
                            <li><a href="#" class="btn btn-priorities-list">Advanced AI Research Initiatives</a></li>
                            <li><a href="#" class="btn btn-priorities-list">Environmental & Net-Zero Initiatives</a></li>
                            <li><a href="#" class="btn btn-priorities-list">Forming Democratic Major Market Verticals Collaboration Strategy</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Second set of 2 columns -->
                <div class="row mt-4 text-center">
                    <div class="col-md-6 text-center">
                        <h3 class="black-text-gold-underline">Presidential Priorities</h3>
                        <ul class="list-unstyled">
                            <li><a href="#" class="btn btn-priorities-list">Immigration Reform & Securing Border the Border</a></li>
                            <li><a href="#" class="btn btn-priorities-list">Combating Fraud Strategies</a></li>
                            <li><a href="#" class="btn btn-priorities-list">Medical Records Access Initiative</a></li>
                            <li><a href="#" class="btn btn-priorities-list">Department of Government Efficiency (DOGE)</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 text-center">
                        <h3 class="black-text-gold-underline">Political Priorities</h3>
                        <ul class="list-unstyled">
                            <li><a href="#" class="btn btn-priorities-list">Advanced AI Research Initiatives</a></li>
                            <li><a href="#" class="btn btn-priorities-list">National Budget Strategy</a></li>
                            <li><a href="#" class="btn btn-priorities-list">Social-Security Reform for Imminent Insolvency</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
            </div>

            <!-- BootStrap Container System -->
            <div class="container mt-5">
                <hr>
                <!-- Perhaps add a footer here later -->
            </div><!-- END -<div>-BootStrap Container System -->
            
        </div><!-- END -<div>-internal-container -->
    </div><!-- END -<div>-scroll-container -->

    <!-- Login Pop-up Window -->
    <div id="login-popup" class="login-register-greyout">
        <div class="login-register-modal-content">
            <span class="close-btn" id="login-close-btn">&times;</span>
            <h2>Login</h2>
            <form id="login-form" action="../../../php-includes/login-inc.php" method="post">
                <div class="mb-3">
                    <label for="login-email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="login-email" name="login-email" required>
                </div>
                <div class="mb-3">
                    <label for="login-password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="login-password" name="login-password" required>
                </div>
                <button type="submit" class="btn btn-primary" id="login-form-btn" name="login-form-btn" style="align-items: center;">Login</button>
            </form>
            <hr>
            <h4 style="text-align:center;">Not a member?</h4>
            <h4 style="text-align:center;">Sign up now!</h4>
            <button class="btn btn-primary" id="signup-from-login-btn">Sign Up</button>
        </div>
    </div>

    <!-- Sign-Up/Registration Pop-up Window -->
    <div id="signup-popup" class="login-register-greyout">
        <div class="login-register-modal-content">
            <span class="close-btn" id="signup-close-btn">&times;</span>
            <h2>Sign Up</h2>
            <form id="signup-form" action="../../../php-includes/signup-inc.php" method="post">
                <div class="mb-3">
                    <label for="signup-name" class="form-label">First and Last Name/Alias</label>
                    <input type="text" class="form-control" id="signup-name" name="signup-name" required>
                </div>
                <div class="mb-3">
                    <label for="signup-email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="signup-email" name="signup-email" required>
                </div>
                <div class="mb-3">
                    <label for="signup-password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="signup-password" name="signup-password" required>
                </div>
                <div class="mb-3">
                    <label for="signup-password-confirm" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="signup-password-confirm" name="signup-password-confirm" required>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="newsletter-signup-check" name="newsletter-signup-check">
                    <label class="form-check-label" for="newsletter-signup-check">Subscribe to our Newsletters!</label>
                </div>
                <button type="submit" class="btn btn-primary" id="signup-form-btn" name="signup-form-btn">Sign Up</button>
            </form>
            <hr>
            <h4 style="text-align:center;">Already a member?</h4>
            <h4 style="text-align:center;">Log in now!</h4>
            <button class="btn btn-primary" id="login-from-signup-btn">Log In</button>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- Custom JS -->
    <script src="../../../js/main-bootstrap-pages.js"></script>
</body>
</html>