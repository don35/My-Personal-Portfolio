<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MY Personal Portfolio</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
    />
    <link rel="stylesheet" href="swiper-bundle.min.css">
    <script src="https://unpkg.com/scrollreveal"></script>
  </head>
  <body>
    <!-- ===========Header============ -->

    <div class="scrollToTop-btn flex-center">
      <i class="fas fa-arrow-up"></i>
    </div>

    <!-- ===========Header============ -->
    <div class="theme-btn flex-center">
      <i class="fas fa-moon"></i>
      <i class="fas fa-sun"></i>
    </div>

    <header>
      <div class="nav-bar">
        <a href="#" class="logo">Fernando</a>
        <div class="navigation">
          <div class="nav-items">
            <div class="nav-close-btn"></div>
            <a class="active" href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#services">Services</a>
            <a href="#portfolio">My Projects</a>
            <a href="#contact">Contact</a>
          </div>
        </div>
        <div class="nav-menu-btn"></div>
      </div>
    </header>

    <!-- ===========Home Section============ -->
    <section class="home flex-center" id="home">
      <div class="home-container">
        <div class="media-icons">
          <a href="https://web.facebook.com/theclaw02/" target="_blank"><i class="fab fa-facebook"></i></a>
          <a href="https://www.instagram.com/dondonskieeee/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="https://www.linkedin.com/in/fernando-bingga-72357b252/" target="_blank"><i class="fab fa-linkedin"></i></a>
        </div>
        <div class="info">
          <h2>Hi, I am Fernando</h2>
          <h3>A <span class="st" id="typing-text"></span></h3>
          <p>
          I design, develop, and test stunning, functional websites for businesses, leveraging my extensive experience.
          </p>
          <a href="https://mail.google.com/mail/u/6/#inbox?compose=new" class="btn"
            >Contact Me <i class="fas fa-arrow-circle-right"></i
          ></a>
        </div>
        <div class="home-img">
          <img src="images/bsu.png" alt="" />
        </div>
      </div>
      <a href="#about" class="scroll-down"
        >Scroll Down <i class="fas fa-arrow-down"></i
      ></a>
    </section>

    <!-- ===========About Section============ -->
    <section class="about section" id="about">
        <div class="container flex-center">
            <h1 class="section-title-01">About Me</h1>
            <h2 class="section-title-02">About Me</h2>
            <div class="content flex-center">
                <div class="about-img">
                    <img class="img" src="images/profile.jpg" alt="">
                </div>
                <div class="about-info">
                    <div class="description">
                        <h3>I'm Fernando Bingga</h3>
                        <h4>A Lead <span>Front-End Developer, Back-End Developer, Software Tester</span> based in <span>Batangas City, Philipppines</span></h4>
                        <p>I design, develop, and test visually appealing and highly functional websites for businesses, leveraging my extensive experience in web design, development, and software testing. Checkout out my Portfolio. </p>
                    </div>
                    <ul class="professional-list">
                        <li class="list-item">
                            <h3>1+</h3>
                            <span>Years of<br>Experience</span>
                        </li>
                        <li class="list-item">
                            <h3>1+</h3>
                            <span>Happy<br>Customers</span>
                        </li>
                        <li class="list-item">
                            <h3>2+</h3>
                            <span>Success<br>Projects</span>
                        </li>
                    </ul>
                    <a href="MY CURRICULUM VITAE (2).pdf" target="_blank" class="btn">Download CV <i class="fas fa-download"></i></a>
                </div>
            </div>
        </div>
    </section>

     <!-- ===========Skills Section============ -->
     <section class="skills section" id="skills">
       <div class="container flex-center">
        <h1 class="section-title-01">Skills</h1>
        <h2 class="section-title-02">Skills</h2>
        <div class="content">
          <div class="skills-description">
            <h3>Education & Skills</h3>
            <p>For more than 4 years, I have been excelling in modern web development and next-generation web and app programming languages.</p>
          </div>
          <div class="skills-info education-all">
            <div class="education">
              <h4><label>Education</label></h4>
              <ul class="edu-list">
                <li class="item">
                  <span class="year">2020 -2024</span>
                  <p><span>Batangas State University - Alangilan Campus</span> - Alangilan Batangas City</p>
                </li>
                <li class="item">
                  <span class="year">2018 - 2020</span>
                  <p><span>AMA Computer College Batangas</span> - Bolbok Batangas City</p>
                </li>
                <li class="item">
                  <span class="year">2014 - 2018</span>
                  <p><span>Batangas National High School</span> - Rizal Avenue Batangas City</p>
                </li>
                <li class="item">
                  <span class="year">2005- 2014</span>
                  <p><span>Julian A. Pastor Memorial Elementary School</span> - Cuta Batangas City</p>
                </li>
              </ul>
            </div>
            <div class="education">
              <h4><label>Skills</label></h4>
              <ul class="bars">
                <li class="bar">
                  <div class="info">
                    <span>HTML</span>
                    <span>95%</span>
                  </div>
                  <div class="line html"></div>
                </li>
                <li class="bar">
                  <div class="info">
                    <span>CSS</span>
                    <span>80%</span>
                  </div>
                  <div class="line css"></div>
                </li>
                <li class="bar">
                  <div class="info">
                    <span>Javascript</span>
                    <span>75%</span>
                  </div>
                  <div class="line javascript"></div>
                </li>
                <li class="bar">
                  <div class="info">
                    <span>SQL</span>
                    <span>80%</span>
                  </div>
                  <div class="line sql"></div>
                </li>
                <li class="bar">
                  <div class="info">
                    <span>PHP</span>
                    <span>75%</span>
                  </div>
                  <div class="line php"></div>
                </li>
                <li class="bar">
                  <div class="info">
                    <span>Software Testing</span>
                    <span>80%</span>
                  </div>
                  <div class="line softwaretesting"></div>
                </li>
              </ul>
            </div>
            <div class="education">
              <h4><label>Awards</label></h4>
              <ul class="edu-list">
                <li class="item">
                  <span class="year">2024</span>
                  <p><span>Cum Laude</span> - Batangas State University</p>
                </li>
                <li class="item">
                  <span class="year">2023</span>
                  <p><span>Dean Lister Second Semester</span> - Batangas State University</p>
                </li>
                <li class="item">
                  <span class="year">2022</span>
                  <p><span>Dean Lister First Semester</span> - Batangas State University</p>
                </li>
                <li class="item">
                  <span class="year">2021</span>
                  <p><span>Dean Lister Fist Semester</span> - Batangas State University</p>
                </li>
              </ul>
            </div>
          </div>
          <div class="skills-description">
            <h3>Work & Experience</h3>
          </div>
          <div class="skills-info">
            <div class="experience-card">
              <div class="upper">
                <h3>Backend Developer</h3>
                <h5>On the Job Training</h5>
                <span>February 5, 2024 - May 3, 2024</span>
              </div>
              <div class="hr"></div>
              <h4><label>BatStateU ACTION Center</label></h4>
              <p>I create and develop services for clients of all sizes, speacializing in creating stylish, modern websites</p>
            </div>
            <!-- <div class="experience-card">
              <div class="upper">
                <h3>Cr. Web Developer</h3>
                <h5>Full Time | Inhouse</h5>
                <span>2019 - 2020</span>
              </div>
              <div class="hr"></div>
              <h4><label>ib-themes ltd.</label></h4>
              <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites</p>
            </div>
            <div class="experience-card">
              <div class="upper">
                <h3>Jr. Web Developer</h3>
                <h5>Full Time | Remote</h5>
                <span>2018 - 2019</span>
              </div>
              <div class="hr"></div>
              <h4><label>Creative Gigs.</label></h4>
              <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites</p>
            </div> -->
          </div>
        </div>
       </div>
     </section>

     <!-- ===========Services Section============ -->
     <section class="services section" id="services">
      <div class="container flex-center">
        <h1 class="section-title-01">Services</h1>
        <h2 class="section-title-02">Services</h2>
        <div class="content">
          <div class="services-description">
            <h3>What I Offer</h3>
          </div>
          <ul class="service-list">
            <li class="service-container">
              <div class="service-card">
                <i class="fas fa-pencil-ruler"></i>
                <h3>UI/UX Designing</h3>
                <div class="learn-more-btn">Learn More <i class="fas fa-long-arrow-alt-right"></i></div>
              </div>
              <div class="service-modal flex-center">
                <div class="service-modal-body">
                  <i class="fas fa-times modal-close-btn"></i>
                  <h3>UI/UX Designing</h3>
                  <h4>What is UI/UX Designing</h4>
                  <p>
                  UI/UX design enhances product usability and efficiency by applying effective design processes, methods, and tools, ensuring a seamless user experience while optimizing costs for businesses.</p>
                  <h4>What I Offer</h4>
                  <ul>
                    <li><i class="fas fa-check-circle"></i> Testing prototypes and gathering insights to enhance user experiences.</li>
                    <li><i class="fas fa-check-circle"></i> Crafting interfaces that reflect brand identity and enhance user interaction.</li>
                    <li><i class="fas fa-check-circle"></i> Enhancing usability and satisfaction through intuitive design and efficient user flows.</li>
                    <li><i class="fas fa-check-circle"></i> Offering expert advice and optimizing existing designs to meet industry standards.</li>
                  </ul>
                </div>
              </div>
            </li>
            <li class="service-container">
              <div class="service-card">
                <i class="fas fa-photo-video"></i>
                <h3>Branding & Design</h3>
                <div class="learn-more-btn">Learn More <i class="fas fa-long-arrow-alt-right"></i></div>
              </div>
              <div class="service-modal flex-center">
                <div class="service-modal-body">
                  <i class="fas fa-times modal-close-btn"></i>
                  <h3>Branding & Design</h3>
                  <h4>What is Brand & Design?</h4>
                  <p>Brand design involves essential marketing practices aimed at establishing a unique identity through the creation of the brand's name, logo, design elements, and symbolic representations. This differentiation strategy sets the brand apart from competitors and enhances product distinctiveness in the market.</p>
                  <h4>What I offer</h4>
                  <ul>
                    <li><i class="fas fa-check-circle"></i> Logo Design</li>
                    <li><i class="fas fa-check-circle"></i> Banner Design</li>
                    <li><i class="fas fa-check-circle"></i> Visual Identity Package</li>
                    <li><i class="fas fa-check-circle"></i> Business Cards & Business Systems</li>
                  </ul>
                </div>
              </div>
            </li>
            <li class="service-container">
              <div class="service-card">
                <i class="fas fa-file-code"></i>
                <h3>Web Development</h3>
                <div class="learn-more-btn">Learn More <i class="fas fa-long-arrow-alt-right"></i></div>
              </div>
              <div class="service-modal flex-center">
                <div class="service-modal-body">
                  <i class="fas fa-times modal-close-btn"></i>
                  <h3>Web Development</h3>
                  <h4>What is Web Development?</h4>
                  <p>Web development services encompass the design, construction, maintenance, and enhancement of various web-based software solutions.</p>
                  <h4>What I provide</h4>
                  <ul>
                    <li><i class="fas fa-check-circle"></i> Web Application Development</li><li><i class="fas fa-check-circle">
                    </i> Creating visually appealing and user-friendly websites.</li>
                    <li><i class="fas fa-check-circle"></i> Building custom web applications tailored to specific business needs.</li>
                    <li><i class="fas fa-check-circle"></i> Web Designing</li>
                    <li><i class="fas fa-check-circle"></i> Functionalities Integration</li>
                  </ul>
                </div>
              </div>
            </li>
            <li class="service-container">
              <div class="service-card">
                <i class="fas fa-file-code"></i>
                <h3>Software Tesing</h3>
                <div class="learn-more-btn">Learn More <i class="fas fa-long-arrow-alt-right"></i></div>
              </div>
              <div class="service-modal flex-center">
                <div class="service-modal-body">
                  <i class="fas fa-times modal-close-btn"></i>
                  <h3>Sofware Testing</h3>
                  <h4>What is Software Testing?</h4>
                  <p>Providing expert advice, optimizing existing designs, and ensuring quality through software testing based on industry standards.</p>
                  <h4>What I offer</h4>
                  <ul>
                    <li><i class="fas fa-check-circle"></i> Manual Testing</li>
                    <li><i class="fas fa-check-circle"></i> Automation Testing</li>
                    <li><i class="fas fa-check-circle"></i> Performance Testing</li>
                    <li><i class="fas fa-check-circle"></i> Regression Testing</li>
                    <li><i class="fas fa-check-circle"></i> Security Testing</li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
     </section>

     <!-- ===========Portfolio Section============ -->
     <section class="portfolio section" id="portfolio">
      <div class="container flex-center">
        <h1 class="section-title-01">My Projects</h1>
        <h2 class="section-title-02">My Projects</h2>
        <div class="content">
          <div class="portfolio-list">
            <div class="img-card-container">
              <div class="img-card">
                <div class="overlay">
                  <div class="info">
                    <h3>Web Design</h3>
                    <span>ACTION Center Public Information</span>
                  </div>
                </div>
                <img class="image" src="images/batstateu.png" alt="">
              </div>
              <div class="portfolio-model flex-center">
                <div class="portfolio-model-body">
                  <i class="fas fa-times portfolio-close-btn"></i>
                  <h3>ACTION Center Public Information</h3>
                  <img src="images/batstateu.png" alt="">
                  <p>The BatStateU ACTION Center is the home for community folks, barangay leaders, local executives, disaster managers, researchers, partner civil society organizations and other stakeholders needing assistance and support to enhance their knowledge and skills on disaster preparedness and response. BatStateU ACTION Center operates under the Office of the University President in collaboration with partner Local Government Units (LGUs), Regional Line Agencies (RLAs) and private organizations in the local, national and international levels.</p>
                    <a class="live" href="https://bsuaction.000webhostapp.com/dashboard-public-information/" target="_blank">Live Preview</a>
                </div>
              </div>
            </div>
            <div class="img-card-container">
              <div class="img-card">
                <div class="overlay">
                  <div class="info">
                    <h3>Web Design</h3>
                    <span>Dream Academy</span>
                  </div>
                </div>
                <img class="image" src="images/dream.png" alt="">
              </div>
              <div class="portfolio-model flex-center">
                <div class="portfolio-model-body">
                  <i class="fas fa-times portfolio-close-btn"></i>
                  <h3>DREAM Academy</h3>
                  <img src="images/dream.png" alt="">
                  <p>The Dream Academy website is a comprehensive platform designed to provide current and prospective students, faculty, and alumni with essential information about the academy's offerings, events, and achievements. The site features several key sections to ensure a user-friendly experience and to keep the community engaged and informed.</p>
                    <a class="live" href="https://bsuaction.000webhostapp.com/dashboard-public-information/dream.php" target="_blank">Live Preview</a>
                </div>
              </div>
            </div>
            <div class="img-card-container">
              <div class="img-card">
                <div class="overlay">
                  <div class="info">
                    <h3>Web Design</h3>
                    <span>BANGIS</span>
                  </div>
                </div>
                <img class="image" src="images/bangis.png" alt="">
              </div>
              <div class="portfolio-model flex-center">
                <div class="portfolio-model-body">
                  <i class="fas fa-times portfolio-close-btn"></i>
                  <h3>BANGIS: BATANGAS ANIMAL BITE MANAGEMENT GATEWAY INFORMATION SYSTEM</h3>
                  <img src="images/bangis.png" alt="">
                  <p>BANGIS is a project that will enhance the management of human rabies vaccines in the Province of Batangas, covering the administration of rabies outbreaks and fostering better relationships among key stakeholders such as the Agricultural Sectors, Veterinary authorities, ABTC, and Clinical Laboratories. This was driven by the challenges that were faced by the Veterinary Office of Batangas, such as poor communication channels and improper administration of anti-rabies vaccines for both animals and humans, hence the call to coordinate in addressing rabies prevention and control. </p>
                    <a class="live" href="https://bangis.online/login" target="_blank"><i class="fas fa-menu"></i>Live Preview</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>

      <!-- ===========Get-in-Touch============ -->
       <div class="get-in-touch sub-section">
        <div class="container">
          <div class="content flex-center">
            <div class="contact-card flex-center">
              <div class="title">
                <h4>Let's Talk</h4>
                <h3>About Your</h3>
                <h2>Next Project</h2>
              </div>
              <div class="contact-btn">
                <a href="" class="btn">Get in Touch <i class="fas fa-paper-plane"></i></a>
              </div>
            </div>
          </div>
        </div>
       </div>

       <!-- ===========Our Clients============ -->
       <!-- <div class="our-client sub-section">
        <div class="container flex-center">
          <h1 class="section-title-01">Our Clients</h1>
          <h2 class="section-title-02">Our Clients</h2>
          <div class="content">
            <div class="swiper swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide flex-center">
                  <div class="client-img">
                    <img src="images/client1.jpg" alt="">
                  </div>
                  <div class="client-details">
                    <p>dsadasdsadasdsadsadasdasddsdasdasdasd</p>
                    <h3>Arah Collins</h3>
                    <span>dsadsadasdasdasds</span>
                  </div>
                </div>
                <div class="swiper-slide">
                  <img src="images/client2.jpg" alt="">
                </div>
                
              </div>
              
              <div class="swiper-pagination"></div>
              
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
              
              <div class="swiper-scrollbar"></div>
            </div>
          </div> 
        </div>-->
       </div>
    </section>

    <!-- ===========Contacts============ -->
     <section class="contact section" id="contact">
      <div class="container flex-center">
        <h1 class="section-title-01">Contact Me</h1>
        <h1 class="section-title-02">Contact Me</h1>
        <div class="content">
          <div class="contact-left">
            <h2>Let's Discuss Your Project</h2>
            <ul class="contact-list">
              <li>
                <h3 class="item-title"><i class="fas fa-phone"></i> Phone</h3>
                <span>0945-752-9218</span>
              </li>
              <li>
                <h3 class="item-title"><i class="fas fa-envelope"></i> Email Address</h3>
                <span><a href="https://mail.google.com/mail/u/4/#inbox?compose=new">fernandobingga10@gmail.com</a></span>
              </li>
              <li>
                <h3 class="item-title"><i class="fas fa-map-marker-alt"></i> Official Address</h3>
                <span>Purok 2 Wawa Kanluran Batangas City</span>
              </li>
            </ul>
          </div>
          <div class="contact-right">
            <form action="sendemail.php" method="POST" class="contact-form">
            <p>I'm always open to discussing product <br><span>design work or partnerships.</span></p>
              <div class="first-row">
                <input type="text" name="first_name" id="first_name" placeholder="First Name" required>
                <input type="text" name="last_name" id="last_name" placeholder="Last Name" required>
              </div>
              <div class="second-row">
                <input type="email" name="email" id="email_address" placeholder="Email" required>
                <input type="text" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="third-row">
                <textarea name="message" id="message" rows="7" placeholder="Message" required></textarea>
              </div>
              <button class="btn" type="submit" name="submitContact">Send Message <i class="fas fa-paper-plane"></i></button>
            </form>
          </div>
        </div>
      </div>
     </section>

     <footer>
      <div class="footer-container">
        <div class="about group">
          <h2>Fernando</h2>
          <p>Front and Back-End Dev also Software Tester</p>
          <a href="#about">About Me</a>
        </div>
        <div class="hr"></div>
        <div class="info group">
          <h3>More</h3>
          <ul>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">My Projects</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
        <div class="hr"></div>
        <div class="follow group">
          <h3>Follow</h3>
          <ul>
            <li><a href=""><i class="fab fa-facebook"></i></a></li>
            <li><a href=""><i class="fab fa-instagram"></i></a></l>
              <li><a href=""><i class="fab fa-twitter"></i></a></l>
          </ul>
        </div>
      </div>
      <div class="footer-copyright group">
        <p>© 2024 by Fernando Bingga. All Rights Reserved</p>
      </div>
     </footer>
     <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="swiper-bundle.min.js"></script>
    <script src="script.js"></script>
    <script>

      var messageText = "<?= $_SESSION['status'] ?? ''; ?>";
      if(messageText != ''){
          Swal.fire({
            title: "Thank You!!",
            text: messageText,
            icon: "success"
          });
          <?php unset($_SESSION['status']) ?>
      } 
    </script>
  </body>
</html>
