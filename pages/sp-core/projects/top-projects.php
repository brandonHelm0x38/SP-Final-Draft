<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SP - Top Projects / Search</title>
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
                    <li class="nav-item"><a class="nav-link" href="../projects/featured-priorities.php">Priorities</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#">Top-Projects</a></li>
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
                 <h1 class="mt-4 text-center">Welcome to the Top-Projects Hub</h1>
                <p class="lead text-center">This page displays the top projects based on search criteria. It's the same page the Priorities Overview page uses to display projects for each priority, by year and point of origin. On this page, you can also perform broader searches across all projects. By deafult it displays the top 12 active projects.</p>
                <hr>
                <!-- Top Search Card Row -->
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm-10">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title text-center">Search All Projects</h5>
                                <form action="top-projects.php" method="get" >
                                    <div class="d-flex" style="flex-direction:column;width:90%;margin:auto;">
                                        <!-- Search by origin year; Key Detail to include in results -->
                                        <label for="origin-year-select"><strong>Priority Category:</strong></label>
                                        <select id="origin-year-select" name="origin-year-select">
                                            <option value="all">All</option>
                                            <option value="category1">AI</option>
                                            <option value="category2">Environmental Initiatives</option>
                                        </select>
                                        <!-- Search by origin year; Key Detail to include in results -->
                                        <label for="origin-year-select"><strong>Origin Year:</strong></label>
                                        <select id="origin-year-select" name="origin-year-select">
                                            <option value="all">All</option>
                                            <option value="category1">2026</option>
                                            <option value="category2">2025</option>
                                        </select>
                                        <!-- Search by origin source; Key Detail to include in results -->
                                        <label for="origin-year-select"><strong>Origin Source:</strong></label>
                                        <select id="origin-year-select" name="origin-year-select">
                                            <option value="all">All</option>
                                            <option value="category1">CVO of SP</option>
                                            <option value="category1">Industrial</option>
                                            <option value="category1">President of USA</option>
                                            <option value="category1">Political</option>
                                            <option value="category3">All Public Open Projects</option>
                                        </select>
                                        <!-- Search by active VS closed -->
                                        <div>
                                            <h7><strong>Toggle Active/Closed/All:</strong></h7>
                                            <div class="d-flex">
                                                <div style="margin: 0 1rem 0 0;">
                                                    <input type="radio" id="active" name="status" value="Active" checked>
                                                    <label for="active">Active</label>
                                                </div>

                                                <div style="margin: 0 1rem 0 0;">
                                                    <input type="radio" id="closed" name="status" value="Closed">
                                                    <label for="closed">Closed</label>
                                                </div>

                                                <div style="margin:0;">
                                                    <input type="radio" id="all" name="status" value="All">
                                                    <label for="all">All</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Search by active VS closed -->
                                    <div class="d-flex justify-content-between" style="margin-top: 1rem;">
                                        <input type="search" id="priority-search" name="priority-search" placeholder="Currently not supported...">
                                        <button class="btn btn-primary" type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Horizontal Rule and Results Heading -->
                <hr class="mb-5">
                <h2 class="mb-4 text-center">Project Search Results</h2>

                <!-- Search Results Grid (3 Columns - 4 Rows for 12 Total Results) -->
                <!-- ROW with 12 Search Results -->
                <!-- Use row-cols-* classes for responsive column counts -->
                 <!-- Example Result Cards (Using h-100 for consistent height) -->
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-4">
                    <!-- Search Result 1 -->
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <img src="../../../images/main-icons/project-logos/temp_1.jpg" class="card-img-top" alt="Demo Image 1">
                                <h6><u><b>Project Name:</b></u></h6>
                                <h5 style="font-weight:300;">Strategic Pivot</h5>
                                <h6><u><b>Priority:</b></u></h6>
                                <h5 style="font-weight:300;">Project Management Eco-System</h5>
                                <h6><u><b>Priority Category:</b></u></h6>
                                <h5 style="font-weight:300;">Systems Design</h5>
                                <h6><u><b>Problem Solved:</b></u></h6>
                                <h5 style="font-weight:300;">One can say we could be more organized as a nation. We lack project tracking more than anything else. In effort to solve this problem, we have designed an interactive concept mapping UI/UX. It pairs with a specific Social-Media Eco-System design for linking quizzes with source content.</h5>
                                <h6><u><b>Point-Of-Origin:</b></u></h6>
                                <h5 style="font-weight:300;">CVO of Strategic Pivot</h5>
                                <h6><u><b>Origin-Date:</b></u></h6>
                                <h5 style="font-weight:300;">2024-01-15</h5>
                            </div>
                        </div>
                    </div>
                    <!-- Search Result 2 -->
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <img src="../../../images/main-icons/project-logos/temp_2.png" class="card-img-top" alt="Demo Image 2">
                                <h6><u><b>Project Name:</b></u></h6>
                                <h5 style="font-weight:300;">Strategic Pivot</h5>
                                <h6><u><b>Priority:</b></u></h6>
                                <h5 style="font-weight:300;">Project Management Eco-System</h5>
                                <h6><u><b>Priority Category:</b></u></h6>
                                <h5 style="font-weight:300;">Systems Design</h5>
                                <h6><u><b>Problem Solved:</b></u></h6>
                                <h5 style="font-weight:300;">One can say we could be more organized as a nation. We lack project tracking more than anything else. In effort to solve this problem, we have designed an interactive concept mapping UI/UX. It pairs with a specific Social-Media Eco-System design for linking quizzes with source content.</h5>
                                <h6><u><b>Point-Of-Origin:</b></u></h6>
                                <h5 style="font-weight:300;">CVO of Strategic Pivot</h5>
                                <h6><u><b>Origin-Date:</b></u></h6>
                                <h5 style="font-weight:300;">2024-01-15</h5>
                            </div>
                        </div>
                    </div>
                    <!-- Search Result 3 -->
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <img src="../../../images/main-icons/project-logos/temp_3.png" class="card-img-top" alt="Demo Image 3">
                                <h6><u><b>Project Name:</b></u></h6>
                                <h5 style="font-weight:300;">Strategic Pivot</h5>
                                <h6><u><b>Priority:</b></u></h6>
                                <h5 style="font-weight:300;">Project Management Eco-System</h5>
                                <h6><u><b>Priority Category:</b></u></h6>
                                <h5 style="font-weight:300;">Systems Design</h5>
                                <h6><u><b>Problem Solved:</b></u></h6>
                                <h5 style="font-weight:300;">One can say we could be more organized as a nation. We lack project tracking more than anything else. In effort to solve this problem, we have designed an interactive concept mapping UI/UX. It pairs with a specific Social-Media Eco-System design for linking quizzes with source content.</h5>
                                <h6><u><b>Point-Of-Origin:</b></u></h6>
                                <h5 style="font-weight:300;">CVO of Strategic Pivot</h5>
                                <h6><u><b>Origin-Date:</b></u></h6>
                                <h5 style="font-weight:300;">2024-01-15</h5>
                            </div>
                        </div>
                    </div>
                    <!-- Search Result 4 -->
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <img src="../../../images/main-icons/project-logos/temp_1.jpg" class="card-img-top" alt="Demo Image 1">
                                <h6><u><b>Project Name:</b></u></h6>
                                <h5 style="font-weight:300;">Strategic Pivot</h5>
                                <h6><u><b>Priority:</b></u></h6>
                                <h5 style="font-weight:300;">Project Management Eco-System</h5>
                                <h6><u><b>Priority Category:</b></u></h6>
                                <h5 style="font-weight:300;">Systems Design</h5>
                                <h6><u><b>Problem Solved:</b></u></h6>
                                <h5 style="font-weight:300;">One can say we could be more organized as a nation. We lack project tracking more than anything else. In effort to solve this problem, we have designed an interactive concept mapping UI/UX. It pairs with a specific Social-Media Eco-System design for linking quizzes with source content.</h5>
                                <h6><u><b>Point-Of-Origin:</b></u></h6>
                                <h5 style="font-weight:300;">CVO of Strategic Pivot</h5>
                                <h6><u><b>Origin-Date:</b></u></h6>
                                <h5 style="font-weight:300;">2024-01-15</h5>
                            </div>
                        </div>
                    </div>
                    <!-- Search Result 5 -->
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <img src="../../../images/main-icons/project-logos/temp_2.png" class="card-img-top" alt="Demo Image 2">
                                <h6><u><b>Project Name:</b></u></h6>
                                <h5 style="font-weight:300;">Strategic Pivot</h5>
                                <h6><u><b>Priority:</b></u></h6>
                                <h5 style="font-weight:300;">Project Management Eco-System</h5>
                                <h6><u><b>Priority Category:</b></u></h6>
                                <h5 style="font-weight:300;">Systems Design</h5>
                                <h6><u><b>Problem Solved:</b></u></h6>
                                <h5 style="font-weight:300;">One can say we could be more organized as a nation. We lack project tracking more than anything else. In effort to solve this problem, we have designed an interactive concept mapping UI/UX. It pairs with a specific Social-Media Eco-System design for linking quizzes with source content.</h5>
                                <h6><u><b>Point-Of-Origin:</b></u></h6>
                                <h5 style="font-weight:300;">CVO of Strategic Pivot</h5>
                                <h6><u><b>Origin-Date:</b></u></h6>
                                <h5 style="font-weight:300;">2024-01-15</h5>
                            </div>
                        </div>
                    </div>
                    <!-- Search Result 6 -->
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <img src="../../../images/main-icons/project-logos/temp_3.png" class="card-img-top" alt="Demo Image 3">
                                <h6><u><b>Project Name:</b></u></h6>
                                <h5 style="font-weight:300;">Strategic Pivot</h5>
                                <h6><u><b>Priority:</b></u></h6>
                                <h5 style="font-weight:300;">Project Management Eco-System</h5>
                                <h6><u><b>Priority Category:</b></u></h6>
                                <h5 style="font-weight:300;">Systems Design</h5>
                                <h6><u><b>Problem Solved:</b></u></h6>
                                <h5 style="font-weight:300;">One can say we could be more organized as a nation. We lack project tracking more than anything else. In effort to solve this problem, we have designed an interactive concept mapping UI/UX. It pairs with a specific Social-Media Eco-System design for linking quizzes with source content.</h5>
                                <h6><u><b>Point-Of-Origin:</b></u></h6>
                                <h5 style="font-weight:300;">CVO of Strategic Pivot</h5>
                                <h6><u><b>Origin-Date:</b></u></h6>
                                <h5 style="font-weight:300;">2024-01-15</h5>
                            </div>
                        </div>
                    </div>
                    <!-- Search Result 7 -->
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <img src="../../../images/main-icons/project-logos/temp_1.jpg" class="card-img-top" alt="Demo Image 1">
                                <h6><u><b>Project Name:</b></u></h6>
                                <h5 style="font-weight:300;">Strategic Pivot</h5>
                                <h6><u><b>Priority:</b></u></h6>
                                <h5 style="font-weight:300;">Project Management Eco-System</h5>
                                <h6><u><b>Priority Category:</b></u></h6>
                                <h5 style="font-weight:300;">Systems Design</h5>
                                <h6><u><b>Problem Solved:</b></u></h6>
                                <h5 style="font-weight:300;">One can say we could be more organized as a nation. We lack project tracking more than anything else. In effort to solve this problem, we have designed an interactive concept mapping UI/UX. It pairs with a specific Social-Media Eco-System design for linking quizzes with source content.</h5>
                                <h6><u><b>Point-Of-Origin:</b></u></h6>
                                <h5 style="font-weight:300;">CVO of Strategic Pivot</h5>
                                <h6><u><b>Origin-Date:</b></u></h6>
                                <h5 style="font-weight:300;">2024-01-15</h5>
                            </div>
                        </div>
                    </div>
                    <!-- Search Result 8 -->
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <img src="../../../images/main-icons/project-logos/temp_2.png" class="card-img-top" alt="Demo Image 2">
                                <h6><u><b>Project Name:</b></u></h6>
                                <h5 style="font-weight:300;">Strategic Pivot</h5>
                                <h6><u><b>Priority:</b></u></h6>
                                <h5 style="font-weight:300;">Project Management Eco-System</h5>
                                <h6><u><b>Priority Category:</b></u></h6>
                                <h5 style="font-weight:300;">Systems Design</h5>
                                <h6><u><b>Problem Solved:</b></u></h6>
                                <h5 style="font-weight:300;">One can say we could be more organized as a nation. We lack project tracking more than anything else. In effort to solve this problem, we have designed an interactive concept mapping UI/UX. It pairs with a specific Social-Media Eco-System design for linking quizzes with source content.</h5>
                                <h6><u><b>Point-Of-Origin:</b></u></h6>
                                <h5 style="font-weight:300;">CVO of Strategic Pivot</h5>
                                <h6><u><b>Origin-Date:</b></u></h6>
                                <h5 style="font-weight:300;">2024-01-15</h5>
                            </div>
                        </div>
                    </div>
                    <!-- Search Result 9 -->
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <img src="../../../images/main-icons/project-logos/temp_3.png" class="card-img-top" alt="Demo Image 3">
                                <h6><u><b>Project Name:</b></u></h6>
                                <h5 style="font-weight:300;">Strategic Pivot</h5>
                                <h6><u><b>Priority:</b></u></h6>
                                <h5 style="font-weight:300;">Project Management Eco-System</h5>
                                <h6><u><b>Priority Category:</b></u></h6>
                                <h5 style="font-weight:300;">Systems Design</h5>
                                <h6><u><b>Problem Solved:</b></u></h6>
                                <h5 style="font-weight:300;">One can say we could be more organized as a nation. We lack project tracking more than anything else. In effort to solve this problem, we have designed an interactive concept mapping UI/UX. It pairs with a specific Social-Media Eco-System design for linking quizzes with source content.</h5>
                                <h6><u><b>Point-Of-Origin:</b></u></h6>
                                <h5 style="font-weight:300;">CVO of Strategic Pivot</h5>
                                <h6><u><b>Origin-Date:</b></u></h6>
                                <h5 style="font-weight:300;">2024-01-15</h5>
                            </div>
                        </div>
                    </div>
                    <!-- Search Result 10 -->
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <img src="../../../images/main-icons/project-logos/temp_1.jpg" class="card-img-top" alt="Demo Image 1">
                                <h6><u><b>Project Name:</b></u></h6>
                                <h5 style="font-weight:300;">Strategic Pivot</h5>
                                <h6><u><b>Priority:</b></u></h6>
                                <h5 style="font-weight:300;">Project Management Eco-System</h5>
                                <h6><u><b>Priority Category:</b></u></h6>
                                <h5 style="font-weight:300;">Systems Design</h5>
                                <h6><u><b>Problem Solved:</b></u></h6>
                                <h5 style="font-weight:300;">One can say we could be more organized as a nation. We lack project tracking more than anything else. In effort to solve this problem, we have designed an interactive concept mapping UI/UX. It pairs with a specific Social-Media Eco-System design for linking quizzes with source content.</h5>
                                <h6><u><b>Point-Of-Origin:</b></u></h6>
                                <h5 style="font-weight:300;">CVO of Strategic Pivot</h5>
                                <h6><u><b>Origin-Date:</b></u></h6>
                                <h5 style="font-weight:300;">2024-01-15</h5>
                            </div>
                        </div>
                    </div>
                    <!-- Search Result 11 -->
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <img src="../../../images/main-icons/project-logos/temp_2.png" class="card-img-top" alt="Demo Image 2">
                                <h6><u><b>Project Name:</b></u></h6>
                                <h5 style="font-weight:300;">Strategic Pivot</h5>
                                <h6><u><b>Priority:</b></u></h6>
                                <h5 style="font-weight:300;">Project Management Eco-System</h5>
                                <h6><u><b>Priority Category:</b></u></h6>
                                <h5 style="font-weight:300;">Systems Design</h5>
                                <h6><u><b>Problem Solved:</b></u></h6>
                                <h5 style="font-weight:300;">One can say we could be more organized as a nation. We lack project tracking more than anything else. In effort to solve this problem, we have designed an interactive concept mapping UI/UX. It pairs with a specific Social-Media Eco-System design for linking quizzes with source content.</h5>
                                <h6><u><b>Point-Of-Origin:</b></u></h6>
                                <h5 style="font-weight:300;">CVO of Strategic Pivot</h5>
                                <h6><u><b>Origin-Date:</b></u></h6>
                                <h5 style="font-weight:300;">2024-01-15</h5>
                            </div>
                        </div>
                    </div>
                    <!-- Search Result 12 -->
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <img src="../../../images/main-icons/project-logos/temp_3.png" class="card-img-top" alt="Demo Image 3">
                                <h6><u><b>Project Name:</b></u></h6>
                                <h5 style="font-weight:300;">Strategic Pivot</h5>
                                <h6><u><b>Priority:</b></u></h6>
                                <h5 style="font-weight:300;">Project Management Eco-System</h5>
                                <h6><u><b>Priority Category:</b></u></h6>
                                <h5 style="font-weight:300;">Systems Design</h5>
                                <h6><u><b>Problem Solved:</b></u></h6>
                                <h5 style="font-weight:300;">One can say we could be more organized as a nation. We lack project tracking more than anything else. In effort to solve this problem, we have designed an interactive concept mapping UI/UX. It pairs with a specific Social-Media Eco-System design for linking quizzes with source content.</h5>
                                <h6><u><b>Point-Of-Origin:</b></u></h6>
                                <h5 style="font-weight:300;">CVO of Strategic Pivot</h5>
                                <h6><u><b>Origin-Date:</b></u></h6>
                                <h5 style="font-weight:300;">2024-01-15</h5>
                            </div>
                        </div>
                    </div>
                </div>
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