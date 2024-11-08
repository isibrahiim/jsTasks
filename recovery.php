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
  
  <!-- Social Media Links -->
  <div class="social-media">
    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
    <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
  </div>

  <!-- main section  -->
  <section class="main-section">
  <div class="left-image">
    <!-- <img src="./images/frontend.png" alt="front end image"> -->
    <div class="text-overlay">
      <h1>Your Heading Here</h1>
      <p>Your text overlay on the image goes here...</p>
    </div>
  </div>
  
  <div class="right-content">
    <div class="about-me">
      <h2>About Me</h2>
      <div class="about-wrapper">
        <img src="./images/person.jpg" alt="Your Image" class="passport-img">
        <div class="about-text">
          <p>Brief description about yourself. This text wraps around the image and continues on the next line as needed...</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, exercitationem illum facere error explicabo velit accusantium quae voluptatem! Odio, obcaecati similique culpa repellendus vitae sunt ducimus dolores optio fuga voluptatem.</p>
        </div>
      </div>
      <button class="about-button">Get to Know Me</button>
    </div>
    
    <div class="follow-me">
    <h3>Follow Me</h3>
    <div class="social-media-horizontal">
  <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
  <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
  <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
  <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
</div>

    </div>
  </div>
</section>


  <!-- First blog -->
  <section class="home-page">
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
                          <p>Blog content goes here. You can add text, links, and other elements as needed...</p>
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
  <section class="home-page">
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
 <section class="home-page">
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
</body>
</html>
