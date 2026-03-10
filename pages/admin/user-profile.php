<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SP - User Profile</title>
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Include Cropper.js CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Main CSS for all Bootstrap responsive pages -->
    <link rel="stylesheet" href="../../css/main-responsive.css">
    <!-- Main CSS for all Bootstrap responsive pages; Custom Media-Queries -->
    <link rel="stylesheet" href="../../css/main-media-queries.css">
</head>
<body>
    <!-- -~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~ -->
    <?php
    session_start();
    $user_id = isset($_SESSION['n_user_id']) ? $_SESSION['n_user_id'] : null;
    $name_alias = isset($_SESSION['v_name_alias']) ? $_SESSION['v_name_alias'] : null;
    $email = isset($_SESSION['v_user_email']) ? $_SESSION['v_user_email'] : null;

    // Query Data for page...
    include '../../php-includes/classes/dbh.php';
    $conn = new Dbh();
    $conn = $conn->connect();

    // $host = 'localhost';
    // $db_user = 'root';
    // $db_pass = '';
    // $db_name = 'strategicpivotmain';

    // $conn = new mysqli($host, $db_user, $db_pass, $db_name);
    // if ($conn->connect_errno) {
    //     echo json_encode(['success' => false, 'error' => 'DB connection failed: ' . $conn->connect_error]);
    //     exit;
    // }

    $sql = "SELECT * FROM users_core_data WHERE n_user_id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
    if (!$stmt->execute()) {
        // Handle query error
        header("Location: ../user-profile.php?error=loading-query");
        exit;
    }

    $result = $stmt->get_result();
    $stmt->close();
    $row = $result->fetch_assoc();

    $newsletter_subscription = ($row['b_newsletter_subscriber'] == 1) ? true : false;
    $report_subscription = ($row['b_report_subscriber'] == 1) ? true : false;
    //Name/Alias from session...
    //Email from session...
    $company = $row['v_user_company']; // Could be Null
    $title = $row['v_user_roletitle']; // Could be Null
    $profile_pic = $row['v_user_prof_pic']; // Could be Null

    ?>
    <!-- -~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~ -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../../images/main-icons/SP_Logo_Silhouette.png" alt="Startegic Pivot Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Left-aligned links -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="../sp-core/projects/featured-priorities.php">Priorities</a></li>
                    <li class="nav-item"><a class="nav-link" href="../sp-core/projects/top-projects.php">Top-Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="../sp-core/newsletters/featured.php">Newsletters</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
                
                <!-- Right-aligned Login/Signup -->
                <div class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo '@' . htmlspecialchars($name_alias); ?>
                        </a>
                        <ul class="dropdown-menu custom-navbar-dropdown" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="std-user/std-dashboard.php">Main/Alerts</a></li>
                            <li><a class="dropdown-item active" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Help</a></li>
                        </ul>
                    </li>
                    <form action="../../php-includes/logout-inc.php" method="post" style="display:inline;">
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
                <h1 class="mt-4 text-center">User Profile - Logged in Main Page.</h1>
                <p class="lead text-center">Details to manage include:</p>
                <ul class="list-unstyled text-center">
                    <li>1) Newsletter Subscription | Followed Project Weekly Reports</li>
                    <li>2) Core User Data</li>
                    <li>3) Profile Picture</li>
                </ul>
                <hr>

                <h3 class="my-4 text-center">User Profile Management</h3>

                <div class="row justify-content-center">
                    <div class="col-sm-12 col-lg-8 card-styling p-3">
                        <form id="user-profile-form" name="user-profile-form" action="php-includes/update-core-profile.php" method="post">
                            <h5 class="black-text-gold-underline" style="text-align:left;">Subscriptions</h5>
                            <label for="newsletter-subscription">Company Newsletter:</label>
                            <input type="checkbox" id="newsletter-subscription" name="newsletter-subscription" value="1" <?php echo $newsletter_subscription ? 'checked' : ''; ?>><br>
                            <label for="followed-projects-report">Weekly Followed Projects Report:</label>
                            <input type="checkbox" id="followed-projects-report" name="followed-projects-report" class="mb-5" value="1" <?php echo $report_subscription ? 'checked' : ''; ?>>
                            <h5 class="black-text-gold-underline" style="text-align:left;">Core User Data</h5>
                            <label for="user-name-alias" style="display:inline-block;">Name/Alias:</label>
                            <input type="text" id="user-name-alias" name="user-name-alias" value="<?php echo $name_alias; ?>" required>
                            <label for="user-email" style="display:inline-block;">Email:</label>
                            <input type="email" id="user-email" name="user-email" value="<?php echo $email; ?>" required>
                            <label for="user-company" style="display:inline-block;">Company:</label>
                            <input type="text" id="user-company" name="user-company" value="<?php echo $company; ?>" placeholder="Your company info is optional...">
                            <label for="user-roletitle" style="display:inline-block;">RoleTitle:</label>
                            <input type="text" id="user-roletitle" name="user-roletitle" value="<?php echo $title; ?>" placeholder="Your role/title is optional...">
                            <button type="submit" name="update-profile-btn" class="btn btn-primary mt-3">Update Profile</button>
                        </form>
                    </div>
                </div>

                <!-- Upload, Preview, Crop, Compress -->
                <div class="img-crop-container card-styling">

                    <h2>Upload, Preview, and Crop Image</h2>
                    <input type="file" id="fileInput" accept="image/*">

                    <div class="preview-container">
                        <h3>Preview (Croppable Area)</h3>
                        <img id="image" src="" alt="Image Preview" class="crop-img">
                        <div style="width:100%;display:flex;justify-content:center;">
                            <button id="saveImgButton" class="hidden btn btn-primary mt-3">Update Image</button>
                        </div>
                    </div>

                </div>

                <div style="display:flex;justify-content:center;">
                    <div class="card-styling" style="border: 1px solid #ddd;padding:1rem;max-width:800px;">

                        <h3>Preview (Demo Comment)</h3>
                        <div class="comment-pane">

                            <div class="current-img-pane">
                                <img id="current-image" src="../../images/user-profile/<?php echo $profile_pic; ?>" alt="<?php echo $profile_pic; ?>">
                            </div>

                            <div class="comment-header">
                                <h5 class="cmnt-header-text">@-Name/Alias | <small>2 hours ago</small></h5>
                                <h6 class="cmnt-header-text">@-Focused-% | @-Foundational-%</h6>
                            
                                <div class="comment-text-body">
                                    <p class="comment-text">&emsp;Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo veritatis vel alias minus repudiandae molestiae, asperiores aut magnam autem similique libero numquam? Ipsum maxime eaque corporis soluta aperiam, quaerat nobis.<br>
                                    <br>
                                    &emsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius molestiae qui laboriosam rem nostrum, nobis dolores pariatur, quam eum, repellat praesentium omnis quos amet quisquam eveniet inventore. Rerum, quo nemo.</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- Login/Sign-Up Pop-up Windows are not needed for logged-in users -->

    <!-- Include Cropper.js JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Your Custom Crop-Upload Script for User Profile Images-->
    <script src="../../js/crop-user-prof-upload.js" defer></script>
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- Custom JS -->
    <script src="../../js/main-bootstrap-pages.js" defer></script>
    <!-- Success/Failure Messages Script -->
    <script>
    if (window.location.search.includes('success=true')) {
        alert('Profile update successful!');
    }
    </script>
</body>
</html>