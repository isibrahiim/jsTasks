<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome for social media icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
    <!-- header  -->
    <header role="banner" aria-label="Main navigation">
        <a class="skip-link" href="#main-content">Skip to main content</a>
        <div class="logo">
            <figure>
                <a href="index.php">
                    <img src="./images/logo-user-img.png" alt="Little Lemon Website Logo" />
                </a>
                <figcaption class="visually-hidden">User image Logo</figcaption>
            </figure>
        </div>

        <button type="button" class="toggle-menu" id="mobile-menu" aria-label="Toggle navigation">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>

        <nav aria-label="Primary navigation">
            <ul class="nav-items">
                <li><a href="index.php">Home</a></li>
                <li class="dropdown">
                    <a href="tutorials.php" class="dropdown-toggle" aria-haspopup="true"
                        aria-expanded="false">Tutorials</a>
                    <ul class="dropdown-menu" aria-label="Tutorial Categories">
                        <li><a href="html.php">HTML</a></li>
                        <li class="dropdown-submenu">
                            <a href="php.php" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">PHP</a>
                            <ul class="dropdown-menu" aria-label="PHP Submenu">
                                <li><a href="php-lessons.php">Lessons</a></li>
                                <li><a href="php-tasks.php">Tasks</a></li>
                            </ul>
                        </li>
                        <li><a href="clanguage.php">C Language</a></li>
                        <!-- <li><a href="js.php">JavaScript</a></li> -->
                        <li class="dropdown-submenu">
                            <a href="php.php" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Js</a>
                            <ul class="dropdown-menu" aria-label="PHP Submenu">
                                <li><a href="php-lessons.php">Lessons</a></li>
                                <li><a href="jsTasks.php">Tasks</a></li>
                            </ul>
                        </li>
                        <li><a href="css.php">CSS & Sass</a></li>
                        <li><a href="jquery.php">jQuery</a></li>
                        <li><a href="angular.php">Angular</a></li>
                        <li><a href="database.php">Database</a></li>
                    </ul>
                </li>
                <li><a href="resources.php">Resources</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a class="btns order-now" href="subscribe.php">Subscribe</a></li>
            </ul>
        </nav>
    </header>

    <!-- Social Media Links - vertical/leftside -->
    <div class="social-media">
        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
        <a href="#" class="social-icon"><i class="fab fa-vk"></i></a>
        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
    </div>
    <!-- a general container  -->
    <div class="container">

        <!-- main section  -->
        <section class="main-section">
            <!-- left side of the main section  -->
            <div class="left-image">

                <!-- text overlay over the image of the main section -->
                <div class="text-overlay">

                    <h1>Front-End</h1>
                    <p>The front end is the user-facing part of a website, encompassing everything you see and interact
                        with, like menus, graphics, and text.</p>
                    <button class="subscribe-btn">
                        <span class="button-text">ReadMore</span>
                        <span class="arrow">→</span>
                    </button>

                    <!-- Meta Information -->
                    <div class="post-meta">
                        <span class="post-date">
                            <i class="fas fa-calendar-alt"></i> <?php echo date("F j, Y"); ?>
                        </span>
                        <span class="post-author">
                            <i class="fas fa-user"></i> Isse Ibrahim
                        </span>
                        <span class="post-read-time">
                            <i class="fas fa-clock"></i> 2 min read
                        </span>
                        <span class="post-comments">
                            <i class="fas fa-comments"></i> 55 comments
                        </span>
                    </div>

                </div>

            </div>

            <!-- right side of the main section  -->
            <div class="right-content">
                <div class="about-me">
                    <h2>About Me</h2>
                    <div class="about-wrapper">
                        <img src="./images/myImg.jfif" alt="Your Image" class="passport-img">
                        <div class="about-text">
                        <p>Hey there! I’m Isse Ibrahim, a passionate UI/UX designer and developer. I love designing and developing website UI/UX designs, and coding is not just a hobby for me; it’s my lifestyle! Currently studying ICT at StadinAo in Helsinki, I’ve also been part of the Beetroot Swedish Ukrainian School and the MBA-kids school for children and teens. Speaking six languages, I’m very kind and supportive. Though I’m an introvert, once I get comfortable, I transform into an extroverted joke machine whose humor might just knock you out (literally!). I recently earned my first badge from IBM as a UI/UX developer and I’m thrilled to keep learning and growing. Enjoy reading and stay awesome! 😄</p>

                        </div>
                    </div>
                    <button class="about-button">Get to Know Me</button>
                </div>

                <div class="follow-me">
                    <h3>Follow Me</h3>
                    <div class="social-media-horizontal">
                        <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-vk"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                    </div>

                </div>
            </div>
        </section>

        <!-- First blog -->
        <section class="section-container">
            <div class="content-wrapper">
                <!-- Left section: Blog posts or news -->
                <div class="main-content">
                    <article class="blog-post">
                        <div class="post-header">
                            <h1 class="blog-title">New Blog</h1>
                        </div>
                        <div class="post-container">
                            <div class="post-image">
                                <img src="./images/html.jpg" alt="Blog Image">
                            </div>
                            <div class="post-content">
                                <!-- date and the author of the blog post -->
                                <div class="post-meta">
                                    <span class="post-date">
                                        <i class="fas fa-calendar-alt"></i> <?php echo date('F j, Y'); ?>
                                    </span>
                                    <span class="post-author">
                                        <i class="fas fa-user"></i> Isse Ibrahim
                                    </span>
                                </div>
                                <h1>How to Convert Checkbox Lists into Dropdown</h1>
                                <p>Blog content goes here. You can add text, links, and other elements as needed as
                                    needed as needed as needed...</p>
                                <button id="task2Btn" class="question-btn">Read More</button>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Right section: Cards for tutorials or additional info -->
                <aside class="sidebar">
                    <div class="post-header underline">
                        <h2 class="aside-text">Learn GitHub!</h2>
                    </div>
                    <div class="card">
                        <img src="./images/github.jfif" alt="Card Image">
                        <h3>Card Title</h3>
                        <p>Brief description or link to tutorials...</p>
                    </div>
                </aside>
            </div>
        </section>



        <!-- Section 2 -->
        <section class="section-container">
            <div class="content-wrapper">
                <!-- Left section: Blog posts or news -->
                <div class="main-content">
                    <article class="blog-post">
                        <div class="post-header">
                            <h1 class="blog-title">New Blog</h1>
                        </div>
                        <div class="post-container">
                            <div class="post-image">
                                <img src="./images/php.jpg" alt="Blog Image">
                            </div>
                            <div class="post-content">
                                <!-- date and the author of the blog post -->
                                <div class="post-meta">
                                    <span class="post-date">
                                        <i class="fas fa-calendar-alt"></i> <?php echo date('F j, Y'); ?>
                                    </span>
                                    <span class="post-author">
                                        <i class="fas fa-user"></i> Isse Ibrahim
                                    </span>
                                </div>
                                <h1>How to Convert Checkbox Lists into Dropdown</h1>
                                <p>Blog content goes here...</p>
                                <button id="task2Btn" class="question-btn">Read More</button>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Right section: Cards for tutorials or additional info -->
                <aside class="sidebar">
                    <div class="post-header underline">
                        <h1 class="aside-text">Git Version Control</h1>
                    </div>
                    <div class="card">
                        <img src="./images/git.jpg" alt="Card Image">
                        <h3>Card Title</h3>
                        <p>Brief description or link to tutorials...</p>
                    </div>
                </aside>
            </div>
        </section>
        <!-- Section 3 -->
        <section class="section-container">
            <div class="content-wrapper">
                <!-- Left section: Blog posts or news -->
                <div class="main-content">
                    <article class="blog-post">
                        <div class="post-header">
                            <h1 class="blog-title">New Blog</h1>
                        </div>
                        <div class="post-container">
                            <div class="post-image">
                                <img src="./images/css.jpg" alt="Blog Image">
                            </div>
                            <div class="post-content">
                                <!-- date and the author of the blog post -->
                                <div class="post-meta">
                                    <span class="post-date">
                                        <i class="fas fa-calendar-alt"></i> <?php echo date('F j, Y'); ?>
                                    </span>
                                    <span class="post-author">
                                        <i class="fas fa-user"></i> Isse Ibrahim
                                    </span>
                                </div>
                                <h1>How to Convert Checkbox Lists into Dropdown</h1>
                                <p>Blog content goes here...</p>
                                <button id="task2Btn" class="question-btn">Read More</button>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Right section: Cards for tutorials or additional info -->
                <aside class="sidebar">
                    <div class="post-header underline">
                        <h1 class="aside-text">Git Version Control</h1>
                    </div>
                    <div class="card">
                        <img src="./images/git.jpg" alt="Card Image">
                        <h3>Card Title</h3>
                        <p>Brief description or link to tutorials...</p>
                    </div>
                </aside>
            </div>
        </section>

        <!-- Section 4 -->
        <section class="section-container">
            <div class="content-wrapper">
                <!-- Left section: Popular Courses -->
                <div class="main-content">
                    <article class="blog-post">

                        <div class="post-header">
                            <h1 class="blog-title">Popular Courses</h1>
                        </div>
                        <div class="courses-grid">
                            <div class="course-card">
                                <img src="./images/html.jpg" alt="HTML5">
                                <h3>HTML5</h3>
                            </div>
                            <div class="course-card">
                                <img src="./images/php.jpg" alt="PHP">
                                <h3>PHP</h3>
                            </div>
                            <div class="course-card">
                                <img src="./images/css.jpg" alt="CSS">
                                <h3>CSS</h3>
                            </div>
                            <div class="course-card">
                                <img src="./images/sass.jpg" alt="SASS">
                                <h3>SASS</h3>
                            </div>
                            <div class="course-card">
                                <img src="./images/javascript.png" alt="JavaScript">
                                <h3>JavaScript</h3>
                            </div>
                            <div class="course-card">
                                <img src="./images/git.jpg" alt="Git">
                                <h3>Git & GitHub</h3>
                            </div>
                            <div class="course-card">
                                <img src="./images/gitHub.png" alt="GitHub">
                                <h3>Git & GitHub</h3>
                            </div>
                            <div class="course-card">
                                <img src="./images/database.png" alt="Database">
                                <h3>Database</h3>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Right section: Cards for tutorials or additional info -->
                <aside class="sidebar">
                    <div class="post-header underline">
                        <h1 class="aside-text">C language</h1>
                    </div>
                    <div class="card">
                        <img src="./images/clanguage.png" alt="C language">
                        <h3>C Language </h3>
                        <p>Brief description or link to tutorials...</p>
                    </div>
                </aside>
            </div>
        </section>

        <!-- Section 5: Featured Tutorials -->
        <section class="section-container">
            <div class="content-wrapper">
                <!-- Left section: Featured Tutorials -->
                <div class="main-content">
                    <article class="blog-post">
                        <div class="post-header">
                            <h1 class="blog-title">Featured Tutorials</h1>
                        </div>
                        <div class="tutorials-grid">
                            <div class="tutorial-card">
                                <img src="./images/html.jpg" alt="Tutorial 1">
                                <h3>Tutorial 1</h3>
                                <p>Brief description of the tutorial...</p>
                                <button class="tutorial-btn">Learn More</button>
                            </div>
                            <div class="tutorial-card">
                                <img src="./images/css.jpg" alt="Tutorial 2">
                                <h3>Tutorial 2</h3>
                                <p>Brief description of the tutorial...</p>
                                <button class="tutorial-btn">Learn More</button>
                            </div>
                            <div class="tutorial-card">
                                <img src="./images/sass.jpg" alt="Tutorial 3">
                                <h3>Tutorial 3</h3>
                                <p>Brief description of the tutorial...</p>
                                <button class="tutorial-btn">Learn More</button>
                            </div>
                            <div class="tutorial-card">
                                <img src="./images/php.jpg" alt="Tutorial 4">
                                <h3>Tutorial 4</h3>
                                <p>Brief description of the tutorial...</p>
                                <button class="tutorial-btn">Learn More</button>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Right section: Cards for additional info -->
                <aside class="sidebar">
                    <div class="post-header underline">
                        <h1 class="aside-text">Recommended Tools</h1>
                    </div>
                    <div class="card">
                        <img src="./images/gitHub.png" alt="Tool">
                        <h3>Tool Name</h3>
                        <p>Brief description or link to the tool...</p>
                    </div>
                </aside>
            </div>
        </section>









    </div>
    <!-- footer -->
    <footer id="main-footer" class="py-2">
        <div class="footer-content footer-container ">
            <div>
                <!-- <img src="./img/ciise.png" alt="news grid" /> -->
                <a href="index.html"><img src="./images/ciise.png" alt="logo image" /></a>
                <p>
                    Welcome to My Personal Porfolio Website, I create all kinds of
                    Websites and Mobile Apps
                </p>
            </div>
            <div>
                <h3>Email new letter</h3>
                <p>Subscribe To Get The Latest Updates!</p>

                <form method="POST" class="contact-form">
                    <input type="email" placeholder="Enter Email..." class="email-input2" required />
                    <input type="button" value="Subscribe" class="btn btn-primary" onclick="sendEmail()" />
                </form>
            </div>
            <div>
                <h3>Company</h3>
                <ul class="list">
                    <li>
                        <i class="fas fa-chevron-right"></i>
                        <a href="#">Help & Support</a>
                    </li>
                    <li>
                        <i class="fas fa-chevron-right"></i>
                        <a href="#">Privicy Policy</a>
                    </li>
                    <li>
                        <i class="fas fa-chevron-right"></i>
                        <a href="about.html">About Us</a>
                    </li>
                    <li>
                        <i class="fas fa-chevron-right"></i>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <div>
                <h3>Have Project?</h3>
                <p>
                    Any Type Of Query & Discussion, Click the Button Below, I`m
                    Available
                </p>
                <a href="contact.html" class="btn btn-secondary">Get Free Consultation</a>
            </div>
            <div class="inner-footer">
                <p>This Website Was Designed and Developed By: Isse S.Ibrahim</p>
                <p>Copyright &copy; 2024 All Rights Reserved</p>
                <div class="social">
                    <a href="https://facebook.com/issefr" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com/isibrahiim/" target="_blank"> <i
                            class="fab fa-instagram"></i></a>
                    <a href="https://vk.com/your_vk_profile" target="_blank"><i class="fab fa-vk"></i></a>
                    <a href="https://www.linkedin.com/in/your_linkedin_profile" target="_blank"><i
                            class="fab fa-linkedin"></i></a>
                </div>

            </div>
        </div>
    </footer>
    <script src="./js/script.js"></script>
</body>

</html>