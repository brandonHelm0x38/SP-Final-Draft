<!-- YouTube Tutorial Video: https://www.youtube.com/watch?v=gCo6JqGMi30 -->

<?php
session_start();
$userId = isset($_SESSION['n_user_id']) ? $_SESSION['n_user_id'] : null;
$nameAlias = isset($_SESSION['v_name_alias']) ? $_SESSION['v_name_alias'] : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SP - Author Admin</title>
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
                    <li class="nav-item"><a class="nav-link" href="../../sp-core/projects/featured-priorities.php">Priorities</a></li>
                    <li class="nav-item"><a class="nav-link" href="../../sp-core/projects/top-projects.php">Top-Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="../../sp-core/newsletters/featured.php">Newsletters</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
                
                <!-- Right-aligned Login/Signup -->
                <div class="navbar-nav ms-auto">
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
                </div>
            </div>
        </div>
    </nav>
    <!-- -~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~ -->
    <div class="scroll-container">
        <div class="internal-container">
            
            <!-- BootStrap Container System -->
            <div class="container my-4">
                <h1 class="mt-4 text-center">Author Admin - Logged in Main Page.</h1>
                <hr>

                <h3 class="my-4 text-center">Author Dashboard</h3>

                <div class="d-flex flex-column flex-lg-row">
                    <!-- Trigger Button (Visible only on Mobile) -->
                    <button class="btn btn-primary d-lg-none m-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarAside">
                        Quick Actions
                    </button>

                    <!-- Sidebar / Aside -->
                    <div class="offcanvas-lg offcanvas-start bg-light" tabindex="-1" id="sidebarAside" aria-labelledby="sidebarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="sidebarLabel">Sidebar</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarAside"></button>
                        </div>
                        <div class="offcanvas-body p-3" style="border:2px solid var(--dark-border-color);">
                            <ul class="nav flex-column">
                                <h3 class="black-text-gold-underline" style="text-align:left;">Quick Actions</h3>
                                <li class="nav-item my-2"><a href="#" class="main-link">Create Project</a></li>
                                <li class="nav-item my-2"><a href="#" class="main-link">Create Newsletter</a></li>
                                <li class="nav-item my-2"><a href="#" class="main-link">Manage Newsletter Categories</a></li>
                            </ul>
                        </div>
                    </div>

                    
                    <!-- Your Projects; Quick-Links -->
                    <div class="col p-3 d-pad-1" style="background-color:var(--primary-pane-bg-color);border:2px solid var(--dark-border-color);">
                        <h3 class="black-text-gold-underline" style="text-align:left;">Your Projects</h3>
                        <table class="projects-table">
                            <thead>
                                <tr>
                                    <th>Project Name</th>
                                    <th>Status</th>
                                    <th>Actions?</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#" class="main-link">Strategic Pivot</a></td>
                                    <td>Active</td>
                                    <td>Buttons?</td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="main-link">National Project Managment Eco-System</a></td>
                                    <td>Active</td>
                                    <td>Buttons?</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div><!-- END -<div>-BootStrap Container System -->

            <!-- BootStrap Container System -->
            <div class="container d-flex flex-column flex-lg-row mb-4">
                <!-- Followed Projects -->
                <div class="col-12 col-lg-8 p-3 d-pad-2" style="background-color:var(--primary-pane-bg-color);border:2px solid var(--dark-border-color);">
                    <h3 class="black-text-gold-underline" style="text-align:left;">Followed Projects</h3>
                    <table class="projects-table">
                        <thead>
                            <tr>
                                <th>Project Name</th>
                                <th>Priority</th>
                                <th>Status?</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#" class="main-link">Strategic Pivot</a></td>
                                <td><a href="#" class="main-link">National Project Management Eco-System</a></td>
                                <td>Active?</td>
                            </tr>
                            <tr>
                                <td><a href="#" class="main-link">OPEN</a></td>
                                <td><a href="#" class="main-link">Medical Records Access</a></td>
                                <td>N/A?</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Alerts -->
                <div class="col-12 col-lg p-3 d-pad-3" style="background-color:var(--light-pane-bg-color);border:2px solid var(--dark-border-color);">
                    <h3 class="black-text-gold-underline" style="text-align:left;">Alerts</h3>

                    <table class="alerts-table">
                        <tr>
                            <td>Comment from @UserName - @Date</td>
                        </tr>
                        <tr>
                            <td>Fundraiser increment - $$$$</td>
                        </tr>
                    </table>
                </div>
                
            </div>

            <!-- BootStrap Container System; -->
            <div class="container">
                <hr>
                <h4 class="mt-4 text-center">Admin Metrics</h4>
                <p class="lead text-center">Reporting queries to support...</p>
                <ul class="list-unstyled text-center">
                    <li>1) Author's Newsletters by Views</li>
                </ul>
            </div>

            <!-- BootStrap Container System -->
            <div class="container d-flex flex-column flex-lg-row mb-4">
                <!-- Top Projects by Views -->
                <div class="col-12 col-lg-6 p-3 d-pad-2" style="background-color:var(--light-pane-bg-color);border:2px solid var(--dark-border-color);">
                    <h3 class="black-text-gold-underline" style="text-align:left;">Top Projects Across SP</h3>
                    <table class="projects-table">
                        <thead>
                            <tr>
                                <th>Project Name</th>
                                <th>Priority</th>
                                <th>Views</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#" class="main-link">Strategic Pivot</a></td>
                                <td><a href="#" class="main-link">National Project Management Eco-System</a></td>
                                <td>1234</td>
                            </tr>
                            <tr>
                                <td><a href="#" class="main-link">Forward</a></td>
                                <td><a href="#" class="main-link">Medical Records Access</a></td>
                                <td>23456</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Top Newsletters by Views -->
                <div class="col-12 col-lg p-3 d-pad-3" style="background-color:var(--primary-pane-bg-color);border:2px solid var(--dark-border-color);">
                    <h3 class="black-text-gold-underline" style="text-align:left;">Top Newsletters Across SP</h3>
                    <table class="projects-table">
                        <thead>
                            <tr>
                                <th>Newsletter Title</th>
                                <th>Author</th>
                                <th>Views</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#" class="main-link">Strategic Pivot</a></td>
                                <td><a href="#" class="main-link">Brandon Helm</a></td>
                                <td>1234</td>
                            </tr>
                            <tr>
                                <td><a href="#" class="main-link">Forward</a></td>
                                <td><a href="#" class="main-link">Adrian Aoun</a></td>
                                <td>23456</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>

        </div>
    </div>

    <!-- Login/Sign-Up Pop-up Windows are not needed for logged-in users -->

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- Custom JS -->
    <script src="../../../js/main-bootstrap-pages.js"></script>
</body>
</html>