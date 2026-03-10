<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SP - Featured Newsletters</title>
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
                    <li class="nav-item"><a class="nav-link" href="../projects/top-projects.php">Top-Projects</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#">Newsletters</a></li>
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
    <!-- -~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~ -->
    <div class="scroll-container">
        <div class="internal-container">
            
            <!-- BootStrap Container System -->
            <div class="container mt-4">
                <h1 class="mt-4 text-center">Welcome to the Newsletters Hub.</h1>
                <p class="lead text-center">Our Newsletters are created primarily as a source of linked-content for quizzes. We intend to demonstrate internally how this technology can be used. Our launch strategy is to create a standalone social-media featuring this linked content system with the paired concept mapping engine. It was always intended for this to be an Open-Source technology the other social medias can implement as an extension of their platforms.</p>
                <hr>
                <h4 class="mt-4 text-center">Newsletter Categories</h4>
                <nav class="categories-container">
                    <div class="categories-wrapper">
                        <button class="category-item">All</button>
                        <button class="category-item">UI/UX Design</button>
                        <button class="category-item">Development</button>
                        <button class="category-item">Product Management</button>
                        <button class="category-item">Marketing</button>
                        <button class="category-item">Data Science</button>
                        <button class="category-item">Web3</button>
                        <button class="category-item">AI/ML</button>
                    </div>
                </nav>
                <hr>
                <!-- Search Bar -->
                <h6 class="mt-4 text-center">Search all newsletters:</h6>
                <form action="top-newsletters.php" method="get" class="d-flex my-4 justify-content-center align-items-center">
                    <input type="search" id="newsletter-search" name="newsletter-search" placeholder="Currently not supported...">
                    <button class="btn btn-primary ms-2" type="submit">Search</button>
                </form>
                <hr>
                <h2 class="mt-5 text-center">Featured Articles</h2>
                <div class="row">
                    <!-- The columns will be equal width on medium screens (md) and up -->
                    <!-- On extra-small (mobile) and small (tablet) screens, they will stack vertically -->
                    <div class="col-md-6">
                        <div id="blogCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#blogCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#blogCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#blogCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../../../images/newsletters/EvgeniyVuchetich4_Swords2ploughshares.jpg" class="d-block w-100" alt="Post 1">
                                    <!-- <div class="carousel-caption d-none d-md-block">
                                        <h5>Featured Title 1</h5>
                                        <p>Description of the first blog post.</p>
                                    </div> -->
                                </div>
                                <div class="carousel-item">
                                    <img src="../../../images/newsletters/RearFront Memorial_Magnitogorsk.Russia.jpg" class="d-block w-100" alt="Post 2">
                                    <!-- <div class="carousel-caption d-none d-md-block">
                                        <h5>Featured Title 2</h5>
                                        <p>Description of the second blog post.</p>
                                    </div> -->
                                </div>
                                <div class="carousel-item">
                                    <img src="../../../images/newsletters/EvgeniyVuchetich5_Swords2ploughshares.jpg" class="d-block w-100" alt="Post 3">
                                    <!-- <div class="carousel-caption d-none d-md-block">
                                        <h5>Featured Title 3</h5>
                                        <p>Description of the third blog post.</p>
                                    </div> -->
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#blogCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#blogCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="carousel-1-details" class="p-3 mb-2 bg-secondary text-white">
                            <h3>Sample Article Title 1 - One</h3>
                            <h6>Author: @-Brandon Helm &nbsp;| &nbsp;Date: 2024-06-01</h6>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci vitae, quas ipsum officiis asperiores hic ut soluta aliquid nostrum impedit fuga omnis magni voluptate doloribus enim, excepturi sequi provident eius.</p>
                        </div>
                        <div id="carousel-2-details" class="p-3 mb-2 bg-secondary text-white">
                            <h3>Sample Article Title 2 - Two</h3>
                            <h6>Author: @-Brandon Helm &nbsp;| &nbsp;Date: 2024-06-01</h6>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci vitae, quas ipsum officiis asperiores hic ut soluta aliquid nostrum impedit fuga omnis magni voluptate doloribus enim, excepturi sequi provident eius.</p>
                        </div>
                        <div id="carousel-3-details" class="p-3 mb-2 bg-secondary text-white">
                            <h3>Sample Article Title 3 - Three</h3>
                            <h6>Author: @-Brandon Helm &nbsp;| &nbsp;Date: 2024-06-01</h6>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci vitae, quas ipsum officiis asperiores hic ut soluta aliquid nostrum impedit fuga omnis magni voluptate doloribus enim, excepturi sequi provident eius.</p>
                        </div>
                    </div>
                </div>
                <hr>
            </div>

            <!-- Latest Blog Content Section (in a single column layout) -->
            <!-- BootStrap Container System -->
            <div class="container my-5">
                <h2 class="text-center mb-4">Latest Newsletters</h2>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <!-- Newsletter Item 1 -->
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="Newsletter Title">
                            <div class="card-body">
                                <img src="../../../images/main-icons/project-logos/temp_1.jpg" class="card-img-top" alt="Demo Image 1">
                                <h5 class="card-title">Newsletter Title 1</h5>
                                <p class="card-text">Short description of the newsletter goes here to entice readers.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Newsletter Item 2 -->
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="Newsletter Title">
                            <div class="card-body">
                                <img src="../../../images/main-icons/project-logos/temp_2.png" class="card-img-top" alt="Demo Image 2">
                                <h5 class="card-title">Newsletter Title 2</h5>
                                <p class="card-text">Short description of the newsletter goes here to entice readers.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Newsletter Item 3 -->
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="Newsletter Title">
                            <div class="card-body">
                                <img src="../../../images/main-icons/project-logos/temp_3.png" class="card-img-top" alt="Demo Image 1">
                                <h5 class="card-title">Newsletter Title 3</h5>
                                <p class="card-text">Short description of the newsletter goes here to entice readers.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Newsletter Item 4 -->
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="Newsletter Title">
                            <div class="card-body">
                                <img src="../../../images/main-icons/project-logos/temp_1.jpg" class="card-img-top" alt="Demo Image 1">
                                <h5 class="card-title">Newsletter Title 4</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto delectus non voluptate maxime esse tempore sed quaerat nihil provident repellendus saepe accusamus, expedita voluptates nisi dolorem iusto consequatur consequuntur aliquid?.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Newsletter Item 5 -->
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="Newsletter Title">
                            <div class="card-body">
                                <img src="../../../images/main-icons/project-logos/temp_2.png" class="card-img-top" alt="Demo Image 1">
                                <h5 class="card-title">Newsletter Title 5</h5>
                                <p class="card-text">Short description of the newsletter goes here to entice readers.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Newsletter Item 6 -->
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="Newsletter Title">
                            <div class="card-body">
                                <img src="../../../images/main-icons/project-logos/temp_3.png" class="card-img-top" alt="Demo Image 1">
                                <h5 class="card-title">Newsletter Title 6</h5>
                                <p class="card-text">Short description of the newsletter goes here to entice readers.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

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