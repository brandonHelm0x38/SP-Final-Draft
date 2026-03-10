<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strategic Pivot</title>
    <!-- JavaScript Page redirection if not a 1920 x 1080 desktop -->
    <script type="text/javascript">
        // Detect if device resolution is less than1920 x 1080 desktop
        // const isSmallerThanStd = window.outerWidth < 1920 || window.outerHeight < 1080;
        // const isLargerThanStd = window.outerWidth > 1920 || window.outerHeight > 1080;
        const isFullHD = window.screen.width === 1920 && window.screen.height === 1080
        // const screenWidth = window.screen.width;
        // const screenHeight = window.screen.height;
        // alert("Screen Width = " + screenWidth + " | Screen Height = " + screenHeight);
        if (!isFullHD) {
            // Redirect to page describing development goals
            window.location.replace("non-std-redirect.php");
        }
        // Bugs alert; Goal is to make page minimally responsive within categories...
        // I believe what I'm going for is called adaptive design; Where I detect the users device dimensions and then route them to a page with a properly designed UI/UX as it will be different for different devices.
        const isAtMaxWidth = window.outerWidth >= screen.availWidth;
        const isAtMaxHeight = window.outerHeight >= screen.availHeight;
        if (!isAtMaxWidth || !isAtMaxHeight) {
            alert("This website does not have a mobile or tablet version. Please use a desktop, and please maximize your browser window for the best experience. This website has bugs. It must be viewed on a Chrome browser in a non-minimzed mode. A window that only takes up part of the screen will look funny until it is maximized.");
        }
    </script>
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../../css/feature-page-desktop.css">
    <!-- Custom Media Queries -->
    <link rel="stylesheet" href="../../../css/custom-media.css">
    <!-- GL-Matrix Math Library for 3D Graphics -->
    <script src="../../../js/gl-matrix.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="../../../js/feature-page.js" defer></script>
</head>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<body>
    <!-- HEADER SECTION -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- ============================================================================================= -->
    <div class="sp-header">
        <div class="logo-container">
            <img src="../../../images/main-icons/SP_Logo_WhiteSquareBG.png" alt="Strategic Pivot Logo" class="logo">
        </div>
        <div class="chi-column">
            <h1>Strategic Pivot</h1>
            <table style="margin:0 1rem;">
                <tr>
                    <td style="text-align:right;">
                        <div class="sp-nav-button-dropdown">
                            <button class="sp-nav-button">Projects Group <i class="fa-solid fa-chevron-down"></i></button>
                            <div class="main-dropdown-menu">
                                <div>
                                    <div class="dropdown-heading">By Year</div>
                                    <div class="dropdown-links">
                                        <a href="#" class="link">2024</a>
                                        <a href="#" class="link">2025</a>
                                        <a href="#" class="link">2026</a>
                                        <a href="#" class="link">2027</a>
                                        <a href="#" class="link">Older Search</a>
                                    </div>
                                </div>
                                <div>
                                    <div class="dropdown-heading">Open Bids/Pitches</div>
                                    <div class="dropdown-links">
                                        <a href="#" class="link">SP Board Projects</a>
                                        <a href="#" class="link">Political Projects</a>
                                        <a href="#" class="link">General Open Projects</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td><h3 style="top:-.2rem;left:.1rem;">@-Selected-Year--2026</h3></td>
                </tr>
                <tr>
                    <td style="text-align:right;">
                        <div class="sp-nav-button-dropdown">
                            <button class="sp-nav-button">Priority <i class="fa-solid fa-chevron-down"></i></button>
                            <div class="main-dropdown-menu">
                                <div>
                                    <div class="dropdown-heading">Political Priorities</div>
                                    <div class="dropdown-links">
                                        <a href="#" class="link">Project Mgmt & Engagement Platform</a>
                                        <a href="#" class="link">Cyber Force</a>
                                    </div>
                                </div>
                                <div>
                                    <div class="dropdown-heading">Presidential Priorities</div>
                                    <div class="dropdown-links">
                                        <a href="#" class="link">Advanced Psychology Grid</a>
                                        <a href="#" class="link">Interactive Tax Program</a>
                                    </div>
                                </div>
                                <div>
                                    <div class="dropdown-heading">Industrial Priorities</div>
                                    <div class="dropdown-links">
                                        <a href="#" class="link">Identity Products</a>
                                        <a href="#" class="link">Environmental Solutions</a>
                                        <a href="#" class="link">UPC & Accounting Automation</a>
                                    </div>
                                </div>
                                <div>
                                    <div class="dropdown-heading">CVO Priorities</div>
                                    <div class="dropdown-links">
                                        <a href="#" class="link">Lithography & MicroChip</a>
                                        <a href="#" class="link">Battery Technology</a>
                                        <a href="#" class="link">Solar Panel Production</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td><h3 style="top:-.2rem;left:.1rem;">@-Selected-Project--National Project Management and Engagement Eco-System</h3></td>
                </tr>
            </table>
        </div>
    </div>

    <!-- The Central section is composed of two main parts: the feature section on the left and the WebGL aside on the right -->
    <!-- These elements are made hidden and visible by controlling the following IDs: -->
    <!-- feature-section-navs-docked : webGL-aside-docked : linked-content-nav-docked ~~> Toggle in sets -->
    <!-- feature-section-navs-opened : webGL-aside-opened : linked-content-nav-opened ~~> Toggle in sets -->
    <!-- DESIGN NOTE: The page will open with feature-section-navs-docked, webGL-aside-docked, and linked-content-nav-docked visible, then after 3 seconds automatically toggle to the opened state -->

    <!-- Div to flex content side by side -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div style="display: flex;">
        <!-- FEATURE 1/4 -> LEFT SECTION; ALWAYS VISIBLE BUT CHANGES SIZES -> SIDE-NAV CLOSED VIEW / LARGER -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- ============================================================================================= -->
        <div id="feature-section-navs-docked">
            <div class="feature-header">
                <div class="feature-filters-docked">
                    <div class="sp-nav-button-dropdown">
                        <button class="sp-nav-button" style="padding:0.2rem;margin:0.2rem;">Presentation Mode <i class="fa-solid fa-chevron-down"></i></button>
                        <div class="main-dropdown-menu">
                            <div>
                                <div class="dropdown-heading">Sort Posts</div>
                                <div class="dropdown-links">
                                    <a href="#" class="link">Owner Arranged</a>
                                    <a href="#" class="link">By Date - ASC</a>
                                    <a href="#" class="link">By Date - DESC</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sp-nav-button-dropdown">
                        <button class="sp-nav-button" style="padding:0.2rem;margin:0.2rem;">Sort Comments <i class="fa-solid fa-chevron-down"></i></button>
                        <div class="main-dropdown-menu">
                            <div>
                                <div class="dropdown-heading">By % Understood</div>
                                <div class="dropdown-links">
                                    <a href="#" class="link">Focused:90% - Foundational:50%</a>
                                    <a href="#" class="link">Focused:75% - Foundational:30%</a>
                                    <a href="#" class="link">Focused:50% - Foundational:10%</a>
                                </div>
                            </div>
                            <div>
                                <div class="dropdown-heading">Other</div>
                                <div class="dropdown-links">
                                    <a href="#" class="link">By Most Liked</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="feature-alerts-pane-docked">
                    <p style="position:relative;top:-.6rem;transform:skew(10deg);font-weight:bold;color:var(--primary-text-color);">@-User-defined-scrollable-message-which-I'm-making-long-for-test-purposes.</p>
                </div>
            </div>
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="feature-scroll-bg-docked">
                <div class="feature-scroll-section">
                    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                    <!-- Top (Not a post); Solution Name, Description, Location, Collaboration Tools, and Project Status  -->
                    <div class="page-feature-wrapper-docked">
                        <div class="page-feature-section-docked">
                            <div class="pf-img-links-col">
                                <div class="pf-company-img-pane">
                                    <div class="pf-company-img" style="background-image: linear-gradient(0.25turn, red, black, red);"></div>
                                </div>
                                <div class="pf-social-links-border"></div>
                                <div class="pf-social-pane">
                                    <h6 style="text-align:center;"><u>Follow Us on Social-Media:</u></h6>
                                    <div class="pf-social-links">
                                        <a href="#" class="sm-icon-link" style="background-image: url('../../../images/main-icons/social-links/FacebookLogo.png');"></a>
                                        <a href="#" class="sm-icon-link" style="background-image: url('../../../images/main-icons/social-links/LinkedInLogo.png');"></a>
                                        <a href="#" class="sm-icon-link" style="background-image: url('../../../images/main-icons/social-links/Xlogo.png');"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="pf-status-details-pane-docked">
                                <div class="pf-name-details-pane-docked">
                                    <div class="pf-name-location-pane-docked">
                                        <div class="pf-col-name-docked">
                                            <h4><u>@-Solution-Name--Strategic-Pivot</u></h4>
                                        </div>
                                        <div class="pf-col-location-docked">
                                            <h4>@-Solution-Location--Saint Paul, MN</h4>
                                        </div>
                                    </div>
                                    <div style="padding-left:1.4rem;">
                                        <h5>@-Solution-Quick-Description--This is a brief description of the solution.</h5>
                                    </div>
                                </div>
                                <div class="pf-name-dtls-brdr-docked"></div>
                                <div class="pf-links-status-pane-docked ">
                                    <div class="pf-collab-tools-pane">
                                        <h6 style="text-align:center;margin-bottom:.4vh;"><u>Collaboration Tools:</u></h6>
                                        <!-- This section is again something I want to make configurable and detectable based on the configurations of a specific page.  There is only space for 9 icons.  That's more space than most need, but there are many apps that could be used. We want to protect that market. -->
                                        <div class="pf-collab-links-pane">
                                            <div class="pf-collab-links-row"><!-- DEV NOTE: Add background-color -->
                                                <a href="#" class="pf-collab-icon" style="background-image: url('../../../images/main-icons/social-links/FacebookLogo.png');"></a>
                                                <a href="#" class="pf-collab-icon" style="background-image: url('../../../images/main-icons/social-links/LinkedInLogo.png');"></a>
                                                <a href="#" class="pf-collab-icon" style="background-image: url('../../../images/main-icons/social-links/Xlogo.png');"></a>
                                            </div>
                                            <div class="pf-collab-links-row"><!-- DEV NOTE: Add background-color -->
                                                <a href="#" class="pf-collab-icon" style="background-image: url('../../../images/main-icons/social-links/FacebookLogo.png');"></a>
                                                <a href="#" class="pf-collab-icon" style="background-image: url('../../../images/main-icons/social-links/LinkedInLogo.png');"></a>
                                                <a href="#" class="pf-collab-icon" style="background-image: url('../../../images/main-icons/social-links/Xlogo.png');"></a>
                                            </div>
                                            <div class="pf-collab-links-row"><!-- DEV NOTE: Add background-color -->
                                                <a href="#" class="pf-collab-icon" style="background-image: url('../../../images/main-icons/social-links/FacebookLogo.png');"></a>
                                                <a href="#" class="pf-collab-icon" style="background-image: url('../../../images/main-icons/social-links/LinkedInLogo.png');"></a>
                                                <a href="#" class="pf-collab-icon" style="background-image: url('../../../images/main-icons/social-links/Xlogo.png');"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pf-link-status-border"></div>
                                    <div class="pf-project-status-docked">
                                        <h6 style="margin-left:.8rem;"><u>Project Status:</u></h6>
                                        <h6 style="margin:.6vh 1vw;font-weight:600;">&emsp;@-Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo repudiandae optio inventore corrupti quisquam nesciunt sunt autem? Dolorum est, quibusdam nobis magni harum soluta repellendus recusandae dolor? Ullam, animi repellat! Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, atque? Placeat commodi velit nihil, natus facilis mollitia. Quo, labore reprehenderit quidem suscipit molestias voluptates tenetur dignissimos doloremque at qui iure.</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- QUERIED POSTS SECTION; SIDE-NAV DOCKED VIEW -->
                    <!-- ******************************************* -->
                    <!-- ******************************************* -->
                    <!-- Queried Post Styles Aim to include: 
                            1) Linked-Learning-Content Posts (with Featured UI/UX Interaction when clicking anywhere in a post)
                            2) Fundraising Links/Goals/Status (Goal to support GoFundMe and KickStarter as well as Private Equity Channels)
                            3) General Post with basic links supported, as in many forums and social-medias -->

                    <!-- STYLE 1 : Linked-Learning-Content; Note 'lc' stands for Linked Content -->
                    <div class="post-pane-docked">
                        <div class="post-type-div">
                            <h6 style="text-align:center;padding-top:1vh;">
                                <u>Linked-Content Post</u>&emsp;&emsp;Date: <small>@-MM/DD/YY</small></h6>
                        </div>
                        <div class="post-content-docked">
                            <div class="post-type-top-pane"> <!-- Shared in both views -->
                                <div class="lc-source-content-col"> <!-- Shared in both views -->
                                    <h2 style="text-align:center;">Source Content</h2>
                                    <div class="post-type-flex-pane">
                                        <div style="width:38%;padding: 1.5vh 2vw;">
                                            <a href="#">
                                                <img class="lc-source-post-banner" src="../../../images/main-icons/source-networks/Wired_Banner.png"></img>
                                                <img class="lc-source-post-img" src="../../../images/main-icons/source-networks/demo-api-images/DemoArticlePic.png"></img>
                                            </a>
                                        </div>
                                        <div style="width:60%;">
                                            <h5 style="text-align:center;padding-top:1vh;"><u>@-Long Source Title Test With Extra That Should Go to Line 2</u></h5>
                                            <p>&emsp;@-Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit perferendis veniam, fuga officia quod, iure quas, iusto possimus autem aliquam vero provident! Eos obcaecati vero explicabo architecto magnam accusamus eligendi!<br>
                                            <br>
                                            &emsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate nulla dolore similique nostrum ad, odit perspiciatis quidem dicta repellat fugiat provident atque rem modi itaque quos, possimus dolorum, delectus ullam?<br>
                                            <br>
                                            This section is responsive to extra text, but should still have a limit for aesthetics.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="lc-vert-divider"></div> <!-- Shared in both views -->
                                <div class="lc-linked-quiz-col"> <!-- Shared in both views -->
                                    <h2 style="text-align:center;">Linked Quiz</h2>
                                    <div class="post-type-flex-pane"> <!-- Shared in both views -->
                                        <div class="lc-quiz-left-col-docked">
                                            <div class="lc-quiz-top-pane-docked">
                                                <div class="lc-quiz-logo-pane">
                                                    <img class="lc-quiz-network-icon" src="../../../images/main-icons/learning-networks/KhanAcademy.png"></img>
                                                </div>
                                                <div class="lc-quiz-name-network-docked">
                                                    <h5 style="padding: 1vh 0vw 0vh 0vw;"><u>@-Quiz Network</u></h5>
                                                    <h6 style="padding: .2vh 0vw 0vh 0vw;">@-Quiz Named Description</h6>
                                                </div>
                                            </div>
                                            <div class="lc-quiz-overview-docked"> <!-- Bottom Pane -->
                                                <h6 style="padding: .2vh 0vw 0vh 1vw;"><u>Quiz Overview:</u></h6>
                                                <p style="padding: .2vh 1vw 1vh 1vw;">&emsp;@-Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat, sunt molestias placeat vel laboriosam eum, laudantium facere eius, deserunt inventore ipsa tenetur reiciendis dignissimos illo! Ab accusamus cupiditate id nesciunt!<br>
                                                <br>
                                                This section is responsive to extra text, but should still have a limit for aesthetics..</p>
                                            </div>
                                        </div>
                                        <div class="lc-quiz-right-col">
                                            <h6 style="text-align:center;">@-Subject Name</h6>
                                            <img class="lc-subject-icon" src="../../../images/main-icons/subject-icons/k1_digitalLogic.png"></img>
                                            <h6 style="text-align:center;">@-Subject Name</h6>
                                            <img class="lc-subject-icon" src="../../../images/main-icons/subject-icons/k2_informationTechnology.png"></img>
                                            <h6 style="text-align:center;">@-Subject Name</h6>
                                            <img class="lc-subject-icon" src="../../../images/main-icons/subject-icons/k3_science.png"></img>
                                            <h6 style="text-align:center;">@-Eliptic-Curve Encryption</h6>
                                            <img class="lc-subject-icon" src="../../../images/main-icons/subject-icons/k3_science.png"></img>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-comment-sect"> <!-- Shared in both views -->
                                <div class="post-comment-top-border"></div>
                                <div class="post-comment-row">
                                    <img class="post-commenter-icon" src="../../../images/user-profile/BrandonHelm2.jpg"></img>
                                    <div class="post-comment-content">
                                        <h6>@-CommenterName&nbsp;&nbsp;&nbsp;&nbsp;<small>@-CommentDate</small></h6>
                                        <h6><small>Focused-@-%&nbsp;&nbsp;|&nbsp;&nbsp;Foundational-@-%</small></h6>
                                        <p>&emsp;@-Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, voluptate? Ea, magnam! Voluptas quisquam cumque doloremque, consequatur corporis dolorem ipsam, voluptate deleniti sed, sint molestiae consequatur nemo?</p>
                                        <div class="post-comment-button-pane">
                                            <button class="like-button"><i class="fa-solid fa-thumbs-up"></i></button>&nbsp;<span class="likes-count">@-123 likes</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-comment-divider"></div>
                                <div class="post-comment-row">
                                    <img class="post-commenter-icon" src="../../../images/user-profile/BrandonHelm2.jpg"></img>
                                    <div class="post-comment-content">
                                        <h6>@-CommenterName&nbsp;&nbsp;&nbsp;&nbsp;<small>@-CommentDate</small></h6>
                                        <h6><small><u>Focused-@-%&nbsp;&nbsp;|&nbsp;&nbsp;Foundational-@-%</u></small></h6>
                                        <p>&emsp;@-Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, voluptate? Ea, magnam! Voluptas quisquam cumque doloremque, consequatur corporis dolorem ipsam, voluptate deleniti sed, sint molestiae consequatur nemo?</p>
                                        <div class="post-comment-button-pane">
                                            <button class="like-button"><i class="fa-solid fa-thumbs-up"></i></button>&nbsp;<span class="likes-count">@-123 likes</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-comment-divider"></div>
                                <!-- When adding more content you need to adjust the height calculation so the divs are responsive -->
                                <div class="post-comment-button-pane">
                                    <button class="add-comment-button">+ Add Comment</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- STYLE 2 : Fundraising Links/Goals/Status; Note 'fg' stands for Fundraising Goals -->
                    <div class="post-pane-docked">
                        <div class="post-type-div">
                            <h6 style="text-align:center;padding-top:1vh;">
                                <u>Fundraising Post</u>&emsp;&emsp;Date: <small>@-MM/DD/YY</small></h6>
                        </div>
                        <div class="post-content-docked">
                            <div class="post-type-top-pane">
                                <div class="fggp-left-col">
                                    <h2 style="margin-bottom:0;">Help Us Achieve Our Next Milestone!</h2>
                                    <div style="display: flex;">
                                        <a href="#"><img class="funding-campaign-icon" src="../../../images/main-icons/funding-campaign/KickStarter.png"></img></a>
                                        <div>
                                            <h5 style="padding: 1vh 0vw 0vh 0vw;"><u>@-Partnered-Network-Campaign</u></h5>
                                            <div style="display: flex;">
                                                <h6 style="padding: 1vh .5vw 0vh 0vw;">Target:</h6>
                                                <h6 style="padding: 1vh 0vw 0vh 0vw;">$100,000</h6>
                                            </div>
                                            <div style="display: flex;">
                                                <h6 style="padding: .2vh .5vw 0vh 0vw;">Raised:</h6>
                                                <h6 style="padding: .2vh 0vw 0vh 0vw;">$76,543</h6>
                                            </div>
                                            <div style="display: flex;">
                                                <h6 style="padding: .2vh .5vw 0vh 0vw;">Progress:</h6>
                                                <div class="progress-container">
                                                    <div class="progress-bar" id="funding-progress-bar">
                                                        <span class="progress-label" id="funding-progress-label">0%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="funding-link"><h6 style="margin-top:1vh;">Visit us on @KickStarter</h6></a>
                                        </div>
                                    </div>
                                    <h6 style="padding: 0vh 0vw 0vh 1vw;"><u>Campaign Goal:</u></h6>
                                    <p style="padding: 0vh 1vw;">&emsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil aspernatur corporis, id a voluptatem ea quis minima unde modi cumque saepe officia hic quaerat. Eaque sunt ipsa officia quia laborum!</p>
                                </div>
                                <div class="fggp-right-col">
                                    <h6 style="padding: 6.8vh 0vw 0vh 1vw;"><u>Pre-Campaign Status:</u></h6>
                                    <p style="padding: 0vh 1vw;">&emsp;Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam, ab? Provident officiis facere commodi quasi, numquam esse mollitia? In repellendus necessitatibus nostrum saepe tempore itaque iusto, commodi impedit dolorem culpa.</p>
                                </div>
                            </div>
                            <div class="post-comment-sect"> <!-- Shared in both views -->
                                <div class="post-comment-top-border"></div>
                                <div class="post-comment-row">
                                    <img class="post-commenter-icon" src="../../../images/user-profile/BrandonHelm2.jpg"></img>
                                    <div class="post-comment-content">
                                        <h6>@-CommenterName&nbsp;&nbsp;&nbsp;&nbsp;<small>@-CommentDate</small></h6>
                                        <h6><small>Focused-@-%&nbsp;&nbsp;|&nbsp;&nbsp;Foundational-@-%</small></h6>
                                        <p>&emsp;@-Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, voluptate? Ea, magnam! Voluptas quisquam cumque doloremque, consequatur corporis dolorem ipsam, voluptate deleniti sed, sint molestiae consequatur nemo?</p>
                                        <div class="post-comment-button-pane">
                                            <button class="like-button"><i class="fa-solid fa-thumbs-up"></i></button>&nbsp;<span class="likes-count">@-123 likes</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-comment-divider"></div>
                                <div class="post-comment-row">
                                    <img class="post-commenter-icon" src="../../../images/user-profile/BrandonHelm2.jpg"></img>
                                    <div class="post-comment-content">
                                        <h6>@-CommenterName&nbsp;&nbsp;&nbsp;&nbsp;<small>@-CommentDate</small></h6>
                                        <h6><small>Focused-@-%&nbsp;&nbsp;|&nbsp;&nbsp;Foundational-@-%</small></h6>
                                        <p>&emsp;@-Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, voluptate? Ea, magnam! Voluptas quisquam cumque doloremque, consequatur corporis dolorem ipsam, voluptate deleniti sed, sint molestiae consequatur nemo?</p>
                                        <div class="post-comment-button-pane">
                                            <button class="like-button"><i class="fa-solid fa-thumbs-up"></i></button>&nbsp;<span class="likes-count">@-123 likes</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-comment-divider"></div>
                                <!-- When adding more content you need to adjust the height calculation so the divs are responsive -->
                                <div class="post-comment-button-pane">
                                    <button class="add-comment-button">+ Add Comment</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- STYLE 3 : General Post with basic links supported; Note 'gp' stands for General Post -->
                    <div class="post-pane-docked">
                        <div class="post-type-div">
                            <h6 style="text-align:center;padding-top:1vh;">
                                <u>General Post</u>&emsp;&emsp;Date: <small>@-MM/DD/YY</small></h6>
                        </div>
                        <div class="post-content-docked">
                            <div class="post-type-top-pane">
                                <div class="fggp-left-col">
                                    <div style="display:flex;align-items:center;justify-content:center;">
                                        <div style="width:586px;height:421px;margin: 2vh 0vw;">
                                            <img class="youtube-channel-banner" src="../../../images/sim-api/YouTube-Banners/SP_YouTubeBanner.png"></img>
                                            <iframe class="youtube-iframe" src="https://www.youtube.com/embed/pXehsjFW8nY?si=EpHKhJu4gawXhxi5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class="fggp-right-col" style="display:flex;justify-content:center;align-items:center;">
                                    <p>&emsp;@-Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, voluptate? Ea, magnam! Voluptas quisquam cumque doloremque, consequatur corporis dolorem ipsam, voluptate deleniti sed, sint molestiae consequatur nemo?</p>
                                </div>
                            </div>
                            <div class="post-comment-sect"> <!-- Shared in both views -->
                                <div class="post-comment-top-border"></div>
                                <div class="post-comment-row">
                                    <img class="post-commenter-icon" src="../../../images/user-profile/BrandonHelm2.jpg"></img>
                                    <div class="post-comment-content">
                                        <h6>@-CommenterName&nbsp;&nbsp;&nbsp;&nbsp;<small>@-CommentDate</small></h6>
                                        <h6><small>Focused-@-%&nbsp;&nbsp;|&nbsp;&nbsp;Foundational-@-%</small></h6>
                                        <p>&emsp;@-Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, voluptate? Ea, magnam! Voluptas quisquam cumque doloremque, consequatur corporis dolorem ipsam, voluptate deleniti sed, sint molestiae consequatur nemo?</p>
                                        <div class="post-comment-button-pane">
                                            <button class="like-button"><i class="fa-solid fa-thumbs-up"></i></button>&nbsp;<span class="likes-count">@-123 likes</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-comment-divider"></div>
                                <div class="post-comment-row">
                                    <img class="post-commenter-icon" src="../../../images/user-profile/BrandonHelm2.jpg"></img>
                                    <div class="post-comment-content">
                                        <h6>@-CommenterName&nbsp;&nbsp;&nbsp;&nbsp;<small>@-CommentDate</small></h6>
                                        <h6><small>Focused-@-%&nbsp;&nbsp;|&nbsp;&nbsp;Foundational-@-%</small></h6>
                                        <p>&emsp;@-Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, voluptate? Ea, magnam! Voluptas quisquam cumque doloremque, consequatur corporis dolorem ipsam, voluptate deleniti sed, sint molestiae consequatur nemo?</p>
                                        <div class="post-comment-button-pane">
                                            <button class="like-button"><i class="fa-solid fa-thumbs-up"></i></button>&nbsp;<span class="likes-count">@-123 likes</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-comment-divider"></div>
                                <!-- When adding more content you need to adjust the height calculation so the divs are responsive -->
                                <div class="post-comment-button-pane">
                                    <button class="add-comment-button">+ Add Comment</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                </div>
            </div>
        </div>

        <!-- FEATURE DEFAULT 2/4 -> LEFT SECTION; ALWAYS VISIBLE BUT CHANGES SIZES -> SIDE-NAV OPEN VIEW / SMALLER -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- ============================================================================================= -->
        <div id="feature-section-navs-opened">
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="feature-header">
                <div class="feature-filters-opened">
                    <div class="sp-nav-button-dropdown">
                        <button class="sp-nav-button" style="padding:0.2rem;margin:0.2rem;">Presentation Mode <i class="fa-solid fa-chevron-down"></i></button>
                        <div class="main-dropdown-menu">
                            <div>
                                <div class="dropdown-heading">Sort Posts</div>
                                <div class="dropdown-links">
                                    <a href="#" class="link">Owner Arranged</a>
                                    <a href="#" class="link">By Date - ASC</a>
                                    <a href="#" class="link">By Date - DESC</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sp-nav-button-dropdown">
                        <button class="sp-nav-button" style="padding:0.2rem;margin:0.2rem;">Sort Comments <i class="fa-solid fa-chevron-down"></i></button>
                        <div class="main-dropdown-menu">
                            <div>
                                <div class="dropdown-heading">By % Understood</div>
                                <div class="dropdown-links">
                                    <a href="#" class="link">Focused:90% - Foundational:50%</a>
                                    <a href="#" class="link">Focused:75% - Foundational:30%</a>
                                    <a href="#" class="link">Focused:50% - Foundational:10%</a>
                                </div>
                            </div>
                            <div>
                                <div class="dropdown-heading">Other</div>
                                <div class="dropdown-links">
                                    <a href="#" class="link">By Most Liked</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="feature-alerts-pane-opened">
                    <p style="position:relative;top:-.6rem;transform:skew(10deg);font-weight:bold;color:var(--primary-text-color);">@-User-defined-scrollable-message-which-I'm-making-long-for-test-purposes.</p>
                </div>
            </div>
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="feature-scroll-bg-opened">
                <div class="feature-scroll-section">
                    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                    <!-- Top (Not a post); Solution Name, Description, Location, Collaboration Tools, and Project Status  -->
                    <div class="page-feature-wrapper-opened">
                        <div class="page-feature-section-opened">
                            <div class="pf-img-links-col">
                                <div class="pf-company-img-pane">
                                    <div class="pf-company-img" style="background-image: linear-gradient(0.25turn, red, black, red);"></div>
                                </div>
                                <div class="pf-social-links-border"></div>
                                <div class="pf-social-pane">
                                    <h6 style="text-align:center;"><u>Follow Us on Social-Media:</u></h6>
                                    <div class="pf-social-links">
                                        <!-- I'm thinking of ways to allow users to select from a set of Social-Media options, then display their selected options here. It ideally requires linking accounts, but for now, we'll just display static icons. -->
                                        <a href="#" class="sm-icon-link" style="background-image: url('../../../images/main-icons/social-links/FacebookLogo.png');"></a>
                                        <a href="#" class="sm-icon-link" style="background-image: url('../../../images/main-icons/social-links/LinkedInLogo.png');"></a>
                                        <a href="#" class="sm-icon-link" style="background-image: url('../../../images/main-icons/social-links/Xlogo.png');"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="pf-status-details-pane-opened">
                                <div class="pf-name-details-pane-opened">
                                    <div class="pf-name-location-pane-opened">
                                        <div class="pf-col-name-opened">
                                            <h4><u>@-Solution-Name--Strategic-Pivot</u></h4>
                                        </div>
                                        <div class="pf-col-location-opened">
                                            <h4>@-Solution-Location--Saint Paul, MN</h4>
                                        </div>
                                    </div>
                                    <div style="padding-left:1.4rem;">
                                        <h5>@-Solution-Quick-Description--This is a brief description of the solution.</h5>
                                    </div>
                                </div>
                                <div class="pf-name-dtls-brdr-opened"></div>
                                <div class="pf-links-status-pane-opened ">
                                    <div class="pf-collab-tools-pane">
                                        <h6 style="text-align:center;margin-bottom:.4vh;"><u>Collaboration Tools:</u></h6>
                                        <!-- This section is again something I want to make configurable and detectable based on the configurations of a specific page.  There is only space for 9 icons.  That's more space than most need, but there are many apps that could be used. We want to protect that market. -->
                                        <div class="pf-collab-links-pane">
                                            <div class="pf-collab-links-row"><!-- DEV NOTE: Add background-color -->
                                                <a href="#" class="pf-collab-icon" style="background-image: url('../../../images/main-icons/social-links/FacebookLogo.png');"></a>
                                                <a href="#" class="pf-collab-icon" style="background-image: url('../../../images/main-icons/social-links/LinkedInLogo.png');"></a>
                                                <a href="#" class="pf-collab-icon" style="background-image: url('../../../images/main-icons/social-links/Xlogo.png');"></a>
                                            </div>
                                            <div class="pf-collab-links-row"><!-- DEV NOTE: Add background-color -->
                                                <a href="#" class="pf-collab-icon" style="background-image: url('../../../images/main-icons/social-links/FacebookLogo.png');"></a>
                                                <a href="#" class="pf-collab-icon" style="background-image: url('../../../images/main-icons/social-links/LinkedInLogo.png');"></a>
                                                <a href="#" class="pf-collab-icon" style="background-image: url('../../../images/main-icons/social-links/Xlogo.png');"></a>
                                            </div>
                                            <div class="pf-collab-links-row"><!-- DEV NOTE: Add background-color -->
                                                <a href="#" class="pf-collab-icon" style="background-image: url('../../../images/main-icons/social-links/FacebookLogo.png');"></a>
                                                <a href="#" class="pf-collab-icon" style="background-image: url('../../../images/main-icons/social-links/LinkedInLogo.png');"></a>
                                                <a href="#" class="pf-collab-icon" style="background-image: url('../../../images/main-icons/social-links/Xlogo.png');"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pf-link-status-border"></div>
                                    <div class="pf-project-status-opened">
                                        <h6 style="margin-left:.8rem;"><u>Project Status:</u></h6>
                                        <h6 style="margin:.6vh 1vw;font-weight:600;">&emsp;@-Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo repudiandae optio inventore corrupti quisquam nesciunt sunt autem? Dolorum est, quibusdam nobis magni harum soluta repellendus recusandae dolor? Ullam, animi repellat! Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, atque? Placeat commodi velit nihil, natus facilis mollitia. Quo, labore reprehenderit quidem suscipit molestias voluptates tenetur dignissimos doloremque at qui iure.</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- QUERIED POSTS SECTION; SIDE-NAV OPENED VIEW -->
                    <!-- ******************************************* -->
                    <!-- ******************************************* -->
                    <!-- Queried Post Styles Aim to include: 
                            1) Linked-Learning-Content Posts (with Featured UI/UX Interaction when clicking anywhere in a post)
                            2) Fundraising Links/Goals/Status (Goal to support GoFundMe and KickStarter as well as Private Equity Channels)
                            3) General Post with basic links supported, as in many forums and social-medias -->

                    <!-- STYLE 1 : Linked-Learning-Content; Note 'lc' stands for Linked Content -->
                    <div class="post-pane-opened">
                        <div class="post-type-div">
                            <h6 style="text-align:center;padding-top:1vh;">
                                <u>Linked-Content Post</u>&emsp;&emsp;Date: <small>@-MM/DD/YY</small></h6>
                        </div>
                        <div class="post-content-opened">
                            <div class="post-type-top-pane"> <!-- Shared in both views -->
                                <div class="lc-source-content-col"> <!-- Shared in both views -->
                                    <h2 style="text-align:center;">Source Content</h2>
                                    <div class="post-type-flex-pane"> <!-- Shared in both views; Both Columns -->
                                        <div style="width:48%;padding: 1.5vh 2vw;">
                                            <a href="#">
                                                <img class="lc-source-post-banner" src="../../../images/main-icons/source-networks/Wired_Banner.png"></img>
                                                <img class="lc-source-post-img" src="../../../images/main-icons/source-networks/demo-api-images/DemoArticlePic.png"></img>
                                            </a>
                                        </div>
                                        <div style="width:50%;">
                                            <h5 style="text-align:center;padding-top:1vh;"><u>@-Long Source Title Test With Extra That Should Go to Line 2</u></h5>
                                            <p>&emsp;@-Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit perferendis veniam, fuga officia quod, iure quas, iusto possimus autem aliquam vero provident! Eos obcaecati vero explicabo architecto magnam accusamus eligendi!<br>
                                            <br>
                                            This section is responsive to extra text, but should still have a limit for aesthetics.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="lc-vert-divider"></div> <!-- Shared in both views -->
                                <div class="lc-linked-quiz-col"> <!-- Shared in both views -->
                                    <h2 style="text-align:center;">Linked Quiz</h2>
                                    <div class="post-type-flex-pane"> <!-- Shared in both views; Both Columns -->
                                        <div class="lc-quiz-left-col-opened">
                                            <div class="lc-quiz-top-pane-opened">
                                                <div class="lc-quiz-logo-pane">
                                                    <img class="lc-quiz-network-icon" src="../../../images/main-icons/learning-networks/KhanAcademy.png"></img>
                                                </div>
                                                <div class="lc-quiz-name-network-opened">
                                                    <h5 style="padding: 1vh 0vw 0vh 0vw;"><u>@-Quiz Network</u></h5>
                                                    <h6 style="padding: .2vh 0vw 0vh 0vw;">@-Quiz Named Description</h6>
                                                </div>
                                            </div>
                                            <div class="lc-quiz-overview-opened"> <!-- Bottom Pane -->
                                                <h6 style="padding: .2vh 0vw 0vh 1vw;"><u>Quiz Overview:</u></h6>
                                                <p style="padding: .2vh 1vw 1vh 1vw;">&emsp;@-Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat, sunt molestias placeat vel laboriosam eum, laudantium facere eius, deserunt inventore ipsa tenetur reiciendis dignissimos illo! Ab accusamus cupiditate id nesciunt!<br>
                                                <br>
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam corporis consequatur vero rem officiis harum. Nesciunt, excepturi totam! Nam libero perspiciatis temporibus, culpa quia labore. Quis, aut. Minima, optio maiores.<br>
                                                <br>
                                                This section is responsive to extra text, but should still have a limit for aesthetics.</p>
                                            </div>
                                        </div>
                                        <div class="lc-quiz-right-col">
                                            <h6 style="text-align:center;">@-Subject Name</h6>
                                            <img class="lc-subject-icon" src="../../../images/main-icons/subject-icons/k1_digitalLogic.png"></img>
                                            <h6 style="text-align:center;">@-Subject Name</h6>
                                            <img class="lc-subject-icon" src="../../../images/main-icons/subject-icons/k2_informationTechnology.png"></img>
                                            <h6 style="text-align:center;">@-Subject Name</h6>
                                            <img class="lc-subject-icon" src="../../../images/main-icons/subject-icons/k3_science.png"></img>
                                            <h6 style="text-align:center;">@-Eliptic-Curve Encryption</h6>
                                            <img class="lc-subject-icon" src="../../../images/main-icons/subject-icons/k3_science.png"></img>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-comment-sect"> <!-- Shared in both views -->
                                <div class="post-comment-top-border"></div>
                                <div class="post-comment-row">
                                    <img class="post-commenter-icon" src="../../../images/user-profile/BrandonHelm2.jpg"></img>
                                    <div class="post-comment-content">
                                        <h6>@-CommenterName&nbsp;&nbsp;&nbsp;&nbsp;<small>@-CommentDate</small></h6>
                                        <h6><small>Focused-@-%&nbsp;&nbsp;|&nbsp;&nbsp;Foundational-@-%</small></h6>
                                        <p>&emsp;@-Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, voluptate? Ea, magnam! Voluptas quisquam cumque doloremque, consequatur corporis dolorem ipsam, voluptate deleniti sed, sint molestiae consequatur nemo?</p>
                                        <div class="post-comment-button-pane">
                                            <button class="like-button"><i class="fa-solid fa-thumbs-up"></i></button>&nbsp;<span class="likes-count">@-123 likes</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-comment-divider"></div>
                                <div class="post-comment-row">
                                    <img class="post-commenter-icon" src="../../../images/user-profile/BrandonHelm2.jpg"></img>
                                    <div class="post-comment-content">
                                        <h6>@-CommenterName&nbsp;&nbsp;&nbsp;&nbsp;<small>@-CommentDate</small></h6>
                                        <h6><small>Focused-@-%&nbsp;&nbsp;|&nbsp;&nbsp;Foundational-@-%</small></h6>
                                        <p>&emsp;@-Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, voluptate? Ea, magnam! Voluptas quisquam cumque doloremque, consequatur corporis dolorem ipsam, voluptate deleniti sed, sint molestiae consequatur nemo?</p>
                                        <div class="post-comment-button-pane">
                                            <button class="like-button"><i class="fa-solid fa-thumbs-up"></i></button>&nbsp;<span class="likes-count">@-123 likes</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-comment-divider"></div>
                                <div class="post-comment-row">
                                    <img class="post-commenter-icon" src="../../../images/user-profile/BrandonHelm2.jpg"></img>
                                    <div class="post-comment-content">
                                        <h6>@-CommenterName&nbsp;&nbsp;&nbsp;&nbsp;<small>@-CommentDate</small></h6>
                                        <h6><small>Focused-@-%&nbsp;&nbsp;|&nbsp;&nbsp;Foundational-@-%</small></h6>
                                        <p>&emsp;@-Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, voluptate? Ea, magnam! Voluptas quisquam cumque doloremque, consequatur corporis dolorem ipsam, voluptate deleniti sed, sint molestiae consequatur nemo?<br>
                                        <br>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, amet maxime similique, omnis eius libero pariatur adipisci fuga laborum officiis nisi! Quae iusto eos voluptates. Iste obcaecati eaque ut nisi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo commodi alias in sed quasi. Deserunt voluptatibus doloribus hic assumenda expedita fuga magni voluptate. Dolorum fugit officiis a magni deserunt facilis!<br>
                                        <br>
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis praesentium alias commodi enim nesciunt vel dolore voluptatem officia recusandae ab sunt corrupti maxime, tempore deleniti totam repudiandae voluptas sit fuga!<br>
                                        <br>
                                        Comment sections have been made responsive to extra text.</p>
                                        <div class="post-comment-button-pane">
                                            <button class="like-button"><i class="fa-solid fa-thumbs-up"></i></button>&nbsp;<span class="likes-count">@-123 likes</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-comment-divider"></div>
                                <!-- When adding more content you need to adjust the height calculation so the divs are responsive -->
                                <div class="post-comment-button-pane">
                                    <button class="add-comment-button">+ Add Comment</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- STYLE 2 : Fundraising Links/Goals/Status; Note 'fg' stands for Fundraising Goals -->
                    <div class="post-pane-opened">
                        <div class="post-type-div">
                            <h6 style="text-align:center;padding-top:1vh;">
                                <u>Fundraising Post</u>&emsp;&emsp;Date: <small>@-MM/DD/YY</small></h6>
                        </div>
                        <div class="post-content-opened">
                            <div class="post-type-top-pane">
                                <div class="fggp-left-col">
                                    <h2 style="margin-bottom:0;">Help Us Achieve Our Next Milestone!</h2>
                                    <div style="display: flex;">
                                        <a href="#"><img class="funding-campaign-icon" src="../../../images/main-icons/funding-campaign/KickStarter.png"></img></a>
                                        <div>
                                            <h5 style="padding: 1vh 0vw 0vh 0vw;"><u>@-Partnered-Network-Campaign</u></h5>
                                            <div style="display: flex;">
                                                <h6 style="padding: 1vh .5vw 0vh 0vw;">Target:</h6>
                                                <h6 style="padding: 1vh 0vw 0vh 0vw;">$100,000</h6>
                                            </div>
                                            <div style="display: flex;">
                                                <h6 style="padding: .2vh .5vw 0vh 0vw;">Raised:</h6>
                                                <h6 style="padding: .2vh 0vw 0vh 0vw;">$76,543</h6>
                                            </div>
                                            <div style="display: flex;">
                                                <h6 style="padding: .2vh .5vw 0vh 0vw;">Progress:</h6>
                                                <div class="progress-container">
                                                    <div class="progress-bar" id="funding-progress-bar2">
                                                        <span class="progress-label" id="funding-progress-label2">0%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="funding-link"><h6 style="margin-top:1vh;">Visit us on @KickStarter</h6></a>
                                        </div>
                                    </div>
                                    <h6 style="padding: 0vh 0vw 0vh 1vw;"><u>Campaign Goal:</u></h6>
                                    <p style="padding: 0vh 1vw;">&emsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil aspernatur corporis, id a voluptatem ea quis minima unde modi cumque saepe officia hic quaerat. Eaque sunt ipsa officia quia laborum!<br>
                                    <br>This section has been made responsive to extra text, but should still have a limit for aesthetics.</p>
                                </div>
                                <div class="fggp-right-col">
                                    <h6 style="padding: 6.8vh 0vw 0vh 1vw;"><u>Pre-Campaign Status:</u></h6>
                                    <p style="padding: 0vh 1vw;">&emsp;Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam, ab? Provident officiis facere commodi quasi, numquam esse mollitia? In repellendus necessitatibus nostrum saepe tempore itaque iusto, commodi impedit dolorem culpa.<br>
                                    <br>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident voluptatum, doloribus corporis quis nisi vel in expedita, dignissimos molestiae explicabo dolor iste nobis repellat totam cupiditate commodi beatae quae non! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, velit at numquam temporibus in ad sed quia accusantium natus saepe provident sint accusamus architecto id explicabo atque nostrum. Quos, consequatur!<br>
                                    <br>
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum asperiores dolorem nesciunt veritatis accusantium sunt consectetur aliquam laudantium laborum, unde fugiat libero explicabo repellendus totam quas omnis voluptates eaque porro?<br>
                                    <br>
                                    This section has been made responsive to extra text, but should still have a limit for aesthetics.</p>
                                </div>
                            </div>
                            <div class="post-comment-sect"> <!-- Shared in both views -->
                                <div class="post-comment-top-border"></div>
                                <div class="post-comment-row">
                                    <img class="post-commenter-icon" src="../../../images/user-profile/BrandonHelm2.jpg"></img>
                                    <div class="post-comment-content">
                                        <h6>@-CommenterName&nbsp;&nbsp;&nbsp;&nbsp;<small>@-CommentDate</small></h6>
                                        <h6><small>Focused-@-%&nbsp;&nbsp;|&nbsp;&nbsp;Foundational-@-%</small></h6>
                                        <p>&emsp;@-Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, voluptate? Ea, magnam! Voluptas quisquam cumque doloremque, consequatur corporis dolorem ipsam, voluptate deleniti sed, sint molestiae consequatur nemo?</p>
                                        <div class="post-comment-button-pane">
                                            <button class="like-button"><i class="fa-solid fa-thumbs-up"></i></button>&nbsp;<span class="likes-count">@-123 likes</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-comment-divider"></div>
                                <div class="post-comment-row">
                                    <img class="post-commenter-icon" src="../../../images/user-profile/BrandonHelm2.jpg"></img>
                                    <div class="post-comment-content">
                                        <h6>@-CommenterName&nbsp;&nbsp;&nbsp;&nbsp;<small>@-CommentDate</small></h6>
                                        <h6><small>Focused-@-%&nbsp;&nbsp;|&nbsp;&nbsp;Foundational-@-%</small></h6>
                                        <p>&emsp;@-Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, voluptate? Ea, magnam! Voluptas quisquam cumque doloremque, consequatur corporis dolorem ipsam, voluptate deleniti sed, sint molestiae consequatur nemo?</p>
                                        <div class="post-comment-button-pane">
                                            <button class="like-button"><i class="fa-solid fa-thumbs-up"></i></button>&nbsp;<span class="likes-count">@-123 likes</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-comment-divider"></div>
                                <!-- When adding more content you need to adjust the height calculation so the divs are responsive -->
                                <div class="post-comment-button-pane">
                                    <button class="add-comment-button">+ Add Comment</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- STYLE 3 : General Post with basic links supported; Note 'gp' stands for General Post -->
                    <div class="post-pane-opened">
                        <div class="post-type-div">
                            <h6 style="text-align:center;padding-top:1vh;">
                                <u>General Post</u>&emsp;&emsp;Date: <small>@-MM/DD/YY</small></h6>
                        </div>
                        <div class="post-content-opened">
                            <div class="post-type-top-pane">
                                <div class="fggp-left-col">
                                    <div style="display:flex;align-items:center;justify-content:center;">
                                        <div style="width:586px;height:421px;margin: 2vh 0vw;">
                                            <img class="youtube-channel-banner" src="../../../images/sim-api/YouTube-Banners/SP_YouTubeBanner.png"></img>
                                            <iframe class="youtube-iframe" src="https://www.youtube.com/embed/pXehsjFW8nY?si=EpHKhJu4gawXhxi5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class="fggp-right-col" style="display:flex;justify-content:center;align-items:center;">
                                    <p>&emsp;@-Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, voluptate? Ea, magnam! Voluptas quisquam cumque doloremque, consequatur corporis dolorem ipsam, voluptate deleniti sed, sint molestiae consequatur nemo?</p>
                                </div>
                            </div>
                            <div class="post-comment-sect"> <!-- Shared in both views -->
                                <div class="post-comment-top-border"></div>
                                <div class="post-comment-row">
                                    <img class="post-commenter-icon" src="../../../images/user-profile/BrandonHelm2.jpg"></img>
                                    <div class="post-comment-content">
                                        <h6>@-CommenterName&nbsp;&nbsp;&nbsp;&nbsp;<small>@-CommentDate</small></h6>
                                        <h6><small>Focused-@-%&nbsp;&nbsp;|&nbsp;&nbsp;Foundational-@-%</small></h6>
                                        <p>&emsp;@-Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, voluptate? Ea, magnam! Voluptas quisquam cumque doloremque, consequatur corporis dolorem ipsam, voluptate deleniti sed, sint molestiae consequatur nemo?</p>
                                        <div class="post-comment-button-pane">
                                            <button class="like-button"><i class="fa-solid fa-thumbs-up"></i></button>&nbsp;<span class="likes-count">@-123 likes</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-comment-divider"></div>
                                <div class="post-comment-row">
                                    <img class="post-commenter-icon" src="../../../images/user-profile/BrandonHelm2.jpg"></img>
                                    <div class="post-comment-content">
                                        <h6>@-CommenterName&nbsp;&nbsp;&nbsp;&nbsp;<small>@-CommentDate</small></h6>
                                        <h6><small>Focused-@-%&nbsp;&nbsp;|&nbsp;&nbsp;Foundational-@-%</small></h6>
                                        <p>&emsp;@-Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, voluptate? Ea, magnam! Voluptas quisquam cumque doloremque, consequatur corporis dolorem ipsam, voluptate deleniti sed, sint molestiae consequatur nemo?</p>
                                        <div class="post-comment-button-pane">
                                            <button class="like-button"><i class="fa-solid fa-thumbs-up"></i></button>&nbsp;<span class="likes-count">@-123 likes</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-comment-divider"></div>
                                <!-- When adding more content you need to adjust the height calculation so the divs are responsive -->
                                <div class="post-comment-button-pane">
                                    <button class="add-comment-button">+ Add Comment</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                </div>
            </div>
        </div>

        <!-- FEATURE ASIDE 3/4 -> RIGHT SECTION; HIDES WITH BOTTOM -> SIDE-NAV CLOSED VIEW -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- ============================================================================================= -->
        <div id="webGL-aside-docked">
            <div class="DCKhlhtSqr" style="top: -3.3vh; left: 1.4vw; border-bottom: .6vh solid var(--accent3); border-right: .5vw solid var(--accent3);">
                <div class="unpDCKcurveUPaway"></div>
            </div>

            <div class="unpDCKpicPane">
                <div class="DCKpicSweep">
                    <div class="unpDCKpic" style="background-image: url('../../../images/user-profile/BrandonHelm2.jpg');"></div>
                </div>
            </div>

            <div class="DCKhlhtSqr" style="top: 54.1vh; left: 1.4vw; border-top: .6vh solid var(--accent3); border-right: .5vw solid var(--accent3);">
                <div class="unpDCKcurveDWNaway"></div>
            </div>
        </div>

        <!-- FEATURE DEFAULT ASIDE 4/4 -> RIGHT SECTION; HIDES WITH BOTTOM -> SIDE-NAV OPEN VIEW -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- ============================================================================================= -->
        <div id="webGL-aside-opened">
            <div style="border: 5px solid var(--light-border-color);background-color: var(--light-pane-bg-color);">
                <canvas id="renderCanvas" width="393" height="375"></canvas>
                <div style="margin:8px 0;">
                <label for="lineThickness">Line thickness (px):</label>
                <input id="lineThickness" type="range" min="1" max="40" value="4">
                <!-- <span id="lineThicknessValue">4</span> -->
                <div id="selectedObject" style="display:inline-block; margin-left:24px;">Selected: none</div>
                </div>
                <!-- <script src="../js/cubesTextures_ObjectsLinesRaycasting.js"></script> -->
                <script src="../../../js/concept-mapping-shell.js"></script>
                <!-- Vertex Shader Script -->
                <script id="vertexShader" type="vertexShader">
                    #version 300 es
                    in vec3 position;
                    in vec4 color;
                    in vec2 textureCoord;

                    out vec4 fcolor;
                    out vec2 ftextureCoord;

                    uniform mat4 modelMatrix;
                    uniform mat4 viewMatrix;
                    uniform mat4 projectionMatrix;

                    void main() {
                        gl_Position = projectionMatrix * viewMatrix * modelMatrix * vec4(position.x, position.y, position.z, 1.0);
                        fcolor = color;
                        ftextureCoord = textureCoord;
                    }
                </script>
                <!-- Fragment Shader Script -->
                <script id="fragmentShader" type="fragmentShader">
                    #version 300 es
                    precision mediump float;
                    in vec4 fcolor;
                    in vec2 ftextureCoord;

                    uniform sampler2D uniformSampler;
                    uniform vec4 uColor;

                    out vec4 finalColor;

                    void main() {
                        finalColor = texture(uniformSampler, ftextureCoord) * fcolor * uColor;
                    }
                </script>
            </div>
            <div class="user-profile-pane">
                <img class="user-profile-pic" src="../../../images/user-profile/BrandonHelm2.jpg"></img>
                <div class="user-metrics-alerts-pane">
                    <h6 style="margin:0 .5vw;"><u>Metrics for Current Page</u></h6>
                    <p style="margin:0 .5vw;">User Focused: @-%</p>
                    <p style="margin:0 .5vw;">User Foundational: @-%</p>
                    <div style="display:flex;justify-content:center;align-items:center;">
                        <button class="notifications-button">
                            <i class="fa-solid fa-bell"></i>&nbsp;Notifications:&nbsp;<span class="notification-badge">@-3</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>


    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    </div> <!-- Div to flex content side by side -->

    <!-- FEATURE FOOTER 1/2 -> BOTTOM SECTION; HIDES WITH SIDE-NAV -> SIDE-NAV CLOSED VIEW -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- ============================================================================================= -->
    <div id="linked-content-nav-docked">
        <div class="footerPane_DCK">

            <div class="DCKhlhtSqr" style="top: 3.1vh; left: -1.85vw; border-bottom: .6vh solid var(--accent3); border-right: .5vw solid var(--accent3);">
                <div class="ftrDCKcurveLFTaway"></div>
            </div>

            <div class="ftrDCKpicPane">
                <div class="ftrPicSweep">
                </div>
                <div class="ftrDCKpic" style="background-image: url('../../../images/main-icons/SP_Logo_Silhouette.png'); left: 1.7vw;"></div>
            </div>

            <div class="DCKhlhtSqr" style="top: 3.1vh; left: 85.25vw; border-left: .4vw solid var(--accent3);">
                <div class="ftrDCKcurveRHTaway"></div>
            </div>

        </div>
    </div>

    <!-- FEATURE DEFAULT FOOTER 2/2 -> BOTTOM SECTION; HIDES WITH SIDE-NAV -> SIDE-NAV OPEN VIEW -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- ============================================================================================= -->
    <div id="linked-content-nav-opened">
        <div class="lc-nav-left-scroll-bg">
            <div class="linked-content-nav-pane">
                <div class="lc-item">
                    <div class="lc-item-left-col">
                        <img class="lc-item-source-banner" src="../../../images/main-icons/source-networks/Wired_Banner.png"></img>
                        <img class="lc-item-source-image" src="../../../images/main-icons/source-networks/demo-api-images/DemoArticlePic.png"></img>
                    </div>
                    <div class="lc-item-internal-vert-divider"></div>
                    <div class="lc-item-right-col">
                        <h6 style="margin:.5vh 0 0 .5vw;"><u>@-Testing Max Length - abcdefghijklmnopqrstuvwxyz</u></h6>
                        <p style="margin:0 0 0 .5vw;font-size:.8rem;">&emsp;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore quae voluptatum illum voluptas quisquam natus? Voluptatem voluptates, ipsam maxime nisi harum sequi asperiores. abcdefgh (This is the max length).</p>
                        <div style="display:flex;">
                            <img class="lc-item-linked-quiz-icon" src="../../../images/main-icons/learning-networks/KhanAcademy.png"></img>
                            <div>
                                <h6><u>@-Quiz Network - abcdefghijklmnopqrstuvwxyz</u></h6>
                                <div style="display:flex;justify-content:space-around;">
                                    <table style="margin: 0 auto;padding:0;">
                                        <tr>
                                            <td><p style="margin:0;font-size:.8rem;">@-Subject 1</p></td>
                                        </tr>
                                        <tr>
                                            <td><p style="margin:0;font-size:.8rem;">@-Subject 3</p></td>
                                        </tr>
                                    </table>
                                    <table style="margin: 0 auto;padding:0;">
                                        <tr>
                                            <td><p style="margin:0;font-size:.8rem;">@-Subject 2</p></td>
                                        </tr>
                                        <tr>
                                            <td><p style="margin:0;font-size:.8rem;">@-Subject 4</p></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lc-item-vert-div-wrapper"><div class="lc-item-vert-divider"></div></div>
                <div class="lc-item">
                    <div class="lc-item-left-col">
                        <img class="lc-item-source-banner" src="../../../images/main-icons/source-networks/Wired_Banner.png"></img>
                        <img class="lc-item-source-image" src="../../../images/main-icons/source-networks/demo-api-images/DemoArticlePic.png"></img>
                    </div>
                    <div class="lc-item-internal-vert-divider"></div>
                    <div class="lc-item-right-col">
                        <h6 style="margin:.5vh 0 0 .5vw;"><u>@-Testing Max Length - abcdefghijklmnopqrstuvwxyz</u></h6>
                        <p style="margin:0 0 0 .5vw;font-size:.8rem;">&emsp;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore quae voluptatum illum voluptas quisquam natus? Voluptatem voluptates, ipsam maxime nisi harum sequi asperiores. abcdefgh (This is the max length).</p>
                        <div style="display:flex;">
                            <img class="lc-item-linked-quiz-icon" src="../../../images/main-icons/learning-networks/KhanAcademy.png"></img>
                            <div>
                                <h6><u>@-Quiz Network - abcdefghijklmnopqrstuvwxyz</u></h6>
                                <div style="display:flex;justify-content:space-around;">
                                    <table style="margin: 0 auto;padding:0;">
                                        <tr>
                                            <td><p style="margin:0;font-size:.8rem;">@-Subject 1</p></td>
                                        </tr>
                                        <tr>
                                            <td><p style="margin:0;font-size:.8rem;">@-Subject 3</p></td>
                                        </tr>
                                    </table>
                                    <table style="margin: 0 auto;padding:0;">
                                        <tr>
                                            <td><p style="margin:0;font-size:.8rem;">@-Subject 2</p></td>
                                        </tr>
                                        <tr>
                                            <td><p style="margin:0;font-size:.8rem;">@-Subject 4</p></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lc-item-vert-div-wrapper"><div class="lc-item-vert-divider"></div></div>
                <div class="lc-item">
                    <div class="lc-item-left-col">
                        <img class="lc-item-source-banner" src="../../../images/main-icons/source-networks/Wired_Banner.png"></img>
                        <img class="lc-item-source-image" src="../../../images/main-icons/source-networks/demo-api-images/DemoArticlePic.png"></img>
                    </div>
                    <div class="lc-item-internal-vert-divider"></div>
                    <div class="lc-item-right-col">
                        <h6 style="margin:.5vh 0 0 .5vw;"><u>@-Testing Max Length - abcdefghijklmnopqrstuvwxyz</u></h6>
                        <p style="margin:0 0 0 .5vw;font-size:.8rem;">&emsp;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore quae voluptatum illum voluptas quisquam natus? Voluptatem voluptates, ipsam maxime nisi harum sequi asperiores. abcdefgh (This is the max length).</p>
                        <div style="display:flex;">
                            <img class="lc-item-linked-quiz-icon" src="../../../images/main-icons/learning-networks/KhanAcademy.png"></img>
                            <div>
                                <h6><u>@-Quiz Network - abcdefghijklmnopqrstuvwxyz</u></h6>
                                <div style="display:flex;justify-content:space-around;">
                                    <table style="margin: 0 auto;padding:0;">
                                        <tr>
                                            <td><p style="margin:0;font-size:.8rem;">@-Subject 1</p></td>
                                        </tr>
                                        <tr>
                                            <td><p style="margin:0;font-size:.8rem;">@-Subject 3</p></td>
                                        </tr>
                                    </table>
                                    <table style="margin: 0 auto;padding:0;">
                                        <tr>
                                            <td><p style="margin:0;font-size:.8rem;">@-Subject 2</p></td>
                                        </tr>
                                        <tr>
                                            <td><p style="margin:0;font-size:.8rem;">@-Subject 4</p></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="lc-item-vert-div-wrapper"><div class="lc-item-vert-divider"></div></div> -->
            </div>
        </div>
        <div class="lc-nav-middle">
            <div class="lc-search-filter-pane">
                <h6 style="text-align:center;"><u>Linked-Content Filters</u></h6>
                <table style="padding-left:1vw;">
                    <tr>
                        <td><input type="checkbox" id="filter-1" name="filter-1" value="Filter 1">
                            <label for="filter-1"> Videos</label></td>
                        <td><input type="checkbox" id="filter-2" name="filter-2" value="Filter 2">
                            <label for="filter-2"> Articles</label></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="filter-3" name="filter-3" value="Filter 3">
                            <label for="filter-3"> Free</label></td>
                        <td><input type="checkbox" id="filter-4" name="filter-4" value="Filter 4">
                            <label for="filter-4"> Paid</label></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="filter-5" name="filter-5" value="Filter 5">
                            <label for="filter-5"> Focused</label></td>
                        <td><input type="checkbox" id="filter-6" name="filter-6" value="Filter 6">
                            <label for="filter-6"> Foundational</label></td>
                    </tr>
                </table>
                <input type="checkbox" id="filter-7" name="filter-7" value="Filter 7" style="margin-left:1.4vw;">
                <label for="filter-7"> Alternate Approaches</label>
                <div style="margin-top:1vh;text-align:center;">
                    <button class="apply-filters-button">Apply Filters</button>
                </div>
            </div>
        </div>
        <div class="lc-nav-close-div">
            <div id="lc-nav-close-btn" onclick="toggleFeaturePageNavs()">
                <p>C<br>L<br>O<br>S<br>E</p>
            </div>
        </div>
        </div>
    </div>

</body>

</html>