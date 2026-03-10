<!-- Welcome to the Dani Krossing Login System, adapted for Strategic Pivot. -->
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
    <title>SP - Home</title>
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Main CSS for all Bootstrap responsive pages -->
    <link rel="stylesheet" href="css/main-responsive.css">
    <!-- Main CSS for all Bootstrap responsive pages; Custom Media-Queries -->
    <link rel="stylesheet" href="css/main-media-queries.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="images/main-icons/SP_Logo_Silhouette.png" alt="Startegic Pivot Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Left-aligned links -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/sp-core/projects/featured-priorities.php">Priorities</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/sp-core/projects/top-projects.php">Top-Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/sp-core/newsletters/featured.php">Newsletters</a></li>
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
                    <form action="php-includes/logout-inc.php" method="post" style="display:inline;">
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
            <div class="container my-4">
                <h1 class="mt-4 text-center">Welcome to Strategic Pivot</h1>
                <h5 class="mt-4 text-center">A National Project Management and Engagement Eco-System</h5>
                <hr>
                <img id="fade-in-logo" src="images/main-icons/SP_Logo_Silhouette.png" class="mx-auto d-block" alt="Strategic Pivot Logo" style="max-width: 400px;">
                <hr>
                <p class="lead text-center">This company is founded on a complex series of relationships...</p>
                <p class="lead text-center">Having a Social-Media Eco-System where you can post a source content (whether that's an article, video, or interactive presentation), and then create a linked-quiz... solves a huge number of market problems because of how creatively that approach can be applied. This opens the extra-credit market to be finely tuned for current events in schools, and this also brings political and private sector objectives into focus through the same approach.</p>
                <p class="lead text-center">We can make schools a lot more interactive, while also enabling a huge evolution of global geo-politics, so much so that it might uncover a path to world peace. This is because so much of networking at top levels, especially in politics... is about scoping things out.</p>
                <p class="lead text-center">The key piece of technology we believe will make this all super interactive, is the right 3D concept mapping technology with features for brand recognition of specific solutions, and modeling of the relationships (similarities and differences) between competing approaches. We have a working shell which demonstartes this technology, but we're currently working on the model loading, and the related queries to support crediting of understanding in post commenting.</p>
                <p class="lead text-center">While we plan to be an indepenet functioning Social-Media at launch of Minimum-Viable-Product... it is our intention to launch this as an Open-Source endeavor. With the ultimate goal of attracting other Social-Medias to implement this as an extension of their platforms which you sign into through theirs. There is then a continued Open-Market competition to serve this Eco-System where a continued "Space-Race Like Chase" over the best tools to follow along with our current goals/projects as a nation can evolve.</p>
                <p class="lead text-center">Tying this complex series of relationships together... A path to world peace is possible for a number of reasons... chief of which is the reality modern peace treaties, and the heart of a lot of the policy we need to track moving forward... has to do with complex data structures to support Eco-Systems of products. Digital Identity products, a more detailed plan for how networks can get involved in banking, elements of AI platforms, all will be complex discussions we need complex tools to follow along with.</p>
                <p class="lead text-center">With all this in scope, we identified we need a "Businesses Bill of Rights" to define the ground rules, and some model for democratic collaboration on these individual grids which support entire markets, which we need a Digital plan for in order for Free Markets to truly be protected..</p>
                <p class="lead text-center">Below is a link to our legacy pitch site on the "28th Amendment" which would be a solve for these issues and is what we call the "Businesses Bill of Rights". The site is full of videos explaining this overall intiative, including how the President could partner through this model to unlock unique Presidential Priveleges in line with expanding the efforts of DOGE in a very focused, lasting way. This is done by giving the President partial control of the CVO of Strategic Pivot. They get to set a number of priorities and the CVO helps to pivot the learning Eco-Systems into focusing on exploring the current issues.</p>
                <a class="link-blue-bg d-flex justify-content-center" href="pages/legacy/mobile/mbl_SPbrand.html">The 28th Amendment Legacy Pitch Page</a>
                <hr>
                <h5 class="mt-4 text-center"><u>Key Features and Launch Strategy</u></h5>
                <p class="text-center">This video explores the UI/UX and product network design theory.</p>
                <div class="ratio ratio-16x9" style="max-width:800px;margin:auto;border-radius:12px;overflow:hidden;box-shadow:0 4px 8px rgba(0,0,0,0.2);">
                    <iframe src="https://www.youtube.com/embed/zpOULjyy-n8" title="YouTube video" allowfullscreen></iframe>
                </div>

            </div><!-- END -<div>-BootStrap Container System -->
        </div>
    </div>

    <!-- Login Pop-up Window -->
    <div id="login-popup" class="login-register-greyout">
        <div class="login-register-modal-content">
            <span class="close-btn" id="login-close-btn">&times;</span>
            <h2>Login</h2>
            <form id="login-form" action="php-includes/login-inc.php" method="post">
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
            <form id="signup-form" action="php-includes/signup-inc.php" method="post">
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

    <!-- -~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~ -->
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- Debug SESSION variables in console -->
    <script>
        function debugSessionVars() {
            const sessionVars = {
                userId: <?php echo json_encode($userId); ?>,
                nameAlias: <?php echo json_encode($nameAlias); ?>
            };
            console.log('SESSION Variables:', sessionVars);
        }
        debugSessionVars();
    </script>
    <!-- Custom JS -->
    <script src="js/main-bootstrap-pages.js" defer> </script>
    <!-- -~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~ -->
</body>
</html>