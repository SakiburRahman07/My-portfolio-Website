<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sakibur Rahman</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="main-content">
    
   <header class="section sec1 header active" id="home">

    <div class="header-content">
        <div class="left-header">
            <div class="h-shape"></div>
            <div class="image">
                <img id="profile-picture" src="images/hero.jpg" alt="Sakibur Rahman">
            </div>
        </div>
        <div class="right-header">
            <h1 class="name">
                <span id="salam">Assalamu Alaikum, I'm</span> <br><span>Md. <span style="color: red;">Sakib</span>ur Rahman</span>
            </h1>
            <p>
                I'm a Web Developer, I love to create beautiful and functional websites.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, libero?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque blanditiis sed aut!
            </p>
            <div class="btn-con">
                <a href="" class="main-btn">
                    <span class="btn-text">Download CV</span>
                    <span class="btn-icon"><i class="fas fa-download"></i></span>
                </a>
            </div>
        </div>
    </div>

   </header>

   <main>
    <section class="section sec2 about" id="about">

        <div class="main-title about-us-title">
            <h2>About <span>me</span>
            <span class="bg-text">my stats</span></h2>
        </div>


        <!-- about me section with photo  -->

        <div class="about-container">
            <div class="content">
                <div class="article">
                    <?php
                    $conn = mysqli_connect("localhost:3307", "root", "", "portfolio") or die("Connection Failed"); 
                    $sql = "SELECT about_me_description,about_me_description_2 from about_me";
                    $result = mysqli_query($conn, $sql) or die("Query Failed");
                    if(mysqli_num_rows($result) > 0){
                    ?>

                    <?php
                    while($row = mysqli_fetch_assoc($result)){
                   
                    ?>
                    <h3><?php echo $row['about_me_description']; ?></h3>
                    <p><?php echo $row['about_me_description_2']; ?></p>
                    <div class="button">
                        <a href="">Read More</a>
                    </div>
                    <?php } } ?>
                </div>
            </div>
            <div class="image-section">
                <img src="images/about-us-image.jpg" alt="MSR">
            </div>
            <div class="social">
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>


        <!-- education section  -->


        <div class="educationbody">

            
            <div class="container">
                <h1 class="educationheading">Educa<span>tion</span>  </h1><br>
              <input type="radio" name="dot" id="one">
              <input type="radio" name="dot" id="two">
              <div class="main-card">
                <div class="cards">
                  <div class="card">
                   <div class="content">
                     <div class="img">
                       <img src="images/kuetLogo.png" alt="">
                     </div>
                     <div class="details">
                       <div class="name">Khulna University of Engineering & Technology</div><br>
                       <div class="job">BSc(Engg) in Computer Science & Engineering</div>
                     </div>
                     <div class="media-icons">
                       <a href="#"><i class="fab fa-facebook-f"></i></a>
                       <a href="#"><i class="fab fa-twitter"></i></a>
                       <a href="#"><i class="fab fa-instagram"></i></a>
                       <a href="#"><i class="fab fa-youtube"></i></a>
                     </div>
                   </div>
                  </div>
                  <div class="card">
                   <div class="content">
                     <div class="img">
                       <img src="images/kuetLogo.png" alt="">
                     </div>
                     <div class="details">
                       <div class="name">Jamuna College</div><br>
                       <div class="job">Higher Secondary Education</div>
                     </div>
                     <div class="media-icons">
                       <a href="#"><i class="fab fa-facebook-f"></i></a>
                       <a href="#"><i class="fab fa-twitter"></i></a>
                       <a href="#"><i class="fab fa-instagram"></i></a>
                       <a href="#"><i class="fab fa-youtube"></i></a>
                     </div>
                   </div>
                  </div>
                  <div class="card">
                   <div class="content">
                     <div class="img">
                       <img src="images/kuetLogo.png" alt="">
                     </div>
                     <div class="details">
                       <div class="name">Mohera Ananda High School</div><br>
                       <div class="job">Secondary Education</div>
                     </div>
                     <div class="media-icons">
                       <a href="#"><i class="fab fa-facebook-f"></i></a>
                       <a href="#"><i class="fab fa-twitter"></i></a>
                       <a href="#"><i class="fab fa-instagram"></i></a>
                       <a href="#"><i class="fab fa-youtube"></i></a>
                     </div>
                   </div>
                  </div>
                </div>
                <div class="cards">
                  <div class="card">
                   <div class="content">
                     <div class="img">
                       <img src="images/kuetLogo.png" alt="">
                     </div>
                     <div class="details">
                       <div class="name">7 no. Gobra Govt Primary School</div><br>
                       <div class="job">Primary Education</div>
                     </div>
                     <div class="media-icons">
                       <a href="#"><i class="fab fa-facebook-f"></i></a>
                       <a href="#"><i class="fab fa-twitter"></i></a>
                       <a href="#"><i class="fab fa-instagram"></i></a>
                       <a href="#"><i class="fab fa-youtube"></i></a>
                     </div>
                   </div>
                  </div>
                 
                 
                </div>
              </div>
              <div class="button">
                <label for="one" class=" active one"></label>
                <label for="two" class="two"></label>
              </div>
            </div>
        </div>


        <!-- timeline  -->

        <div class="timelinebody">
            <br>
            <h1 class="educationheading">TIME<span>LINES</span>  </h1><br>
            <div class="timeline">

                <div class="timeline-container left-container">
                    <img src="images/kuetLogo.png" alt="kuet">
                    <div class="text-box">
                    <h2>Khulna University of Engineering & Technology</h2>
                    <small>2021-current</small>
                    <p>Bsc(Engg) in Computer Science & Engineering</p><span class="left-container-arrow"></span>
                </div>
                </div>

                <div class="timeline-container right-container">
                    <img src="images/kuetLogo.png" alt="kuet">
                    <div class="text-box">
                    <h2>Jamuna College</h2>
                    <small>2018-2020</small>
                    <p>Higher Secondary Education</p><span class="right-container-arrow"></span>
                </div>
                  
                </div>

                <div class="timeline-container left-container">
                    <img src="images/kuetLogo.png" alt="kuet">
                    <div class="text-box">
                    <h2>Mohera Ananda High School</h2>
                    <small>2012-2018</small>
                    <p>Secondary Education</p><span class="left-container-arrow"></span>
                </div>
                    
                </div>

                <div class="timeline-container right-container">
                    <img src="images/kuetLogo.png" alt="kuet">
                    <div class="text-box">
                    <h2>7 no. Gobra Govt Primary School</h2>
                    <small>2008-2012</small>
                    <p>Primary Education</p><span class="right-container-arrow"></span>
                </div>
                    
                </div>



            </div>
        </div>

        <!-- skill section  -->
        <h1 class="educationheading">SKIL<span>LS</span>  </h1><br>
       <div class="skill-container">
        
        <div class="skills">
            <div class="skill">
              <div class="skill-name">HTML</div>
              <div class="skill-bar">
                <div class="skill-per" per="90%" style="max-width:90%"></div>
              </div>
            </div>
          
            <div class="skill">
              <div class="skill-name">CSS</div>
              <div class="skill-bar">
                <div class="skill-per" per="70%" style="max-width:70%"></div>
              </div>
            </div>
          
            <div class="skill">
              <div class="skill-name">Javascript</div>
              <div class="skill-bar">
                <div class="skill-per" per="60%" style="max-width:60%"></div>
              </div>
            </div>
            <div class="skill">
                <div class="skill-name">PHP</div>
                <div class="skill-bar">
                  <div class="skill-per" per="90%" style="max-width:90%"></div>
                </div>
              </div>
            
              <div class="skill">
                <div class="skill-name">ASP.NET</div>
                <div class="skill-bar">
                  <div class="skill-per" per="70%" style="max-width:70%"></div>
                </div>
              </div>
            
              <div class="skill">
                <div class="skill-name">Java</div>
                <div class="skill-bar">
                  <div class="skill-per" per="60%" style="max-width:60%"></div>
                </div>
              </div>
              <div class="skill">
                <div class="skill-name">C++</div>
                <div class="skill-bar">
                  <div class="skill-per" per="70%" style="max-width:70%"></div>
                </div>
              </div>
            
              <div class="skill">
                <div class="skill-name">C</div>
                <div class="skill-bar">
                  <div class="skill-per" per="60%" style="max-width:60%"></div>
                </div>
              </div>
          
          
          </div>

          <div class="personalskill">
            <div class="personalskill-container">
                <div class="progress" style="--i:85;--clr:#43f94a;">
                   <h3>85<span>%</span></h3>
                   <h4>Creativity</h4>
                </div>
                <div class="progress" style="--i:62;--clr:#43f9e1;">
                   <h3>62<span>%</span></h3>
                   <h4>Team Work</h4>
                </div>
                <div class="progress less" style="--i:35;--clr:#a143f9;">
                   <h3>35<span>%</span></h3>
                   <h4>Project Management</h4>
                </div>
                <div class="progress" style="--i:78;--clr:#f9bf43;">
                   <h3>78<span>%</span></h3>
                   <h4>Communication</h4>
                </div>
             </div>
          </div>

       </div>

       <!-- Achivement  -->

       <div class="achivement-container">
        <br>
        <h1 class="educationheading">ACHIVE<span>MENT</span>  </h1><br>
        <div class="wrapper">
            <div class="box">
                <h3>Dean's Award</h3>
                <p>Department of CSE, Khulna University of Engineering & Technology</p>
                <!-- <a href="#"><button>learn more</button></a> -->
            </div>
            
            <div class="box">
                <h3>Merit Scholarship</h3>
                <p>For securing position among top 3 students among Tangail District, Secondary School Certificate Examination 2015</p>
                <!-- <a href="#"><button>learn more</button></a> -->
            </div>
            <div class="box">
                <h3>Merit Scholarship</h3>
                <p>For securing position among top 10 students among Mirzapur Upzilla, Junior School Certificate Examination 2015</p>
                <!-- <a href="#"><button>learn more</button></a> -->
            </div>
        </div>
       </div>





       


       

    </section>


    <section class="section sec3 portfolio" id="portfolio">

        <div class="main-title">
            <h2>My <span>Portfolio</span><span class="bg-text">My Work</span></h2>
        </div>
        <p class="port-text">
            Here is some of my work that I've done in various programming languages.
        </p>
        <div class="portfolios">
            <div class="portfolio-item">
                <div class="image">
                    <img src="images/hero.jpg
                    " alt="">
                </div>
                <div class="hover-items">
                    <h3>Project Source</h3>
                    <div class="icons">
                        <a href="#" class="icon">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-behance"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="portfolio-item">
                <div class="image">
                    <img src="img/port2.jpg" alt="">
                </div>
                <div class="hover-items">
                    <h3>Project Source</h3>
                    <div class="icons">
                        <a href="#" class="icon">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-behance"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="portfolio-item">
                <div class="image">
                    <img src="img/port3.jpg" alt="">
                </div>
                <div class="hover-items">
                    <h3>Project Source</h3>
                    <div class="icons">
                        <a href="#" class="icon">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-behance"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="portfolio-item">
                <div class="image">
                    <img src="img/port4.jpg" alt="">
                </div>
                <div class="hover-items">
                    <h3>Project Source</h3>
                    <div class="icons">
                        <a href="#" class="icon">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-behance"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="portfolio-item">
                <div class="image">
                    <img src="img/port5.jpg" alt="">
                </div>
                <div class="hover-items">
                    <h3>Project Source</h3>
                    <div class="icons">
                        <a href="#" class="icon">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-behance"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="portfolio-item">
                <div class="image">
                    <img src="img/port2.jpg" alt="">
                </div>
                <div class="hover-items">
                    <h3>Project Source</h3>
                    <div class="icons">
                        <a href="#" class="icon">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-behance"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="portfolio-item">
                <div class="image">
                    <img src="img/port7.jpg" alt="">
                </div>
                <div class="hover-items">     
                    <h3>Project Source</h3>
                    <div class="icons">
                        <a href="#" class="icon">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-behance"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="section sec4 blogs" id="blogs">

        <div class="blogs-content">
            
            <div class="blogs">

                <div class="main-title">
                    <h2>My <span>Blogs</span><span class="bg-text">My Blogs</span></h2>
                </div>

                <div class="blog">
                    <img src="images/hero.jpg" alt="">
                    <div class="blog-text">
                        <h4>
                            How to Create Your Own Website
                        </h4>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                            Doloribus natus voluptas, eos obcaecati recusandae amet?
                        </p>
                    </div>
                </div>
                <div class="blog">
                    <img src="images/hero.jpg" alt="">
                    <div class="blog-text">
                        <h4>
                            How to Become an Expert in Web Design
                        </h4>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                            Doloribus natus voluptas, eos obcaecati recusandae amet?
                        </p>
                    </div>
                </div>
                <div class="blog">
                    <img src="images/hero.jpg" alt="">
                    <div class="blog-text">
                        <h4>
                            Become a Web Designer in 10 Days
                        </h4>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                            Doloribus natus voluptas, eos obcaecati recusandae amet?
                        </p>
                    </div>
                </div>
                <div class="blog">
                    <img src="images/hero.jpg" alt="">
                    <div class="blog-text">
                        <h4>
                            Debbuging made easy with Web Inspector
                        </h4>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                            Doloribus natus voluptas, eos obcaecati recusandae amet?
                        </p>
                    </div>
                </div>
                <div class="blog">
                    <img src="images/hero.jpg" alt="">
                    <div class="blog-text">
                        <h4>
                            Get started with Web Design and UI Design
                        </h4>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                            Doloribus natus voluptas, eos obcaecati recusandae amet?
                        </p>
                    </div>
                </div>
                <div class="blog">
                    <img src="images/hero.jpg" alt="">
                    <div class="blog-text">
                        <h4>
                            This is what you need to know about Web Design
                        </h4>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                            Doloribus natus voluptas, eos obcaecati recusandae amet?
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="section sec5 contact" id="contact">

        <div class="contact-container">
            <div class="main-title">
                <h2>Contact <span>Me</span><span class="bg-text">Contact</span></h2>
            </div>
            <div class="contact-content-con">
                <div class="left-contact">
                    <h4>Contact me here</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        In, laborum numquam? Quam excepturi perspiciatis quas quasi.
                    </p>
                    <div class="contact-info">
                        <div class="contact-item">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Location</span>
                            </div>
                            <p>
                            :Tangail, Dhaka, Bangladesh
                            </p>
                        </div>
                        <div class="contact-item">
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                                <span>Email</span>
                            </div>
                            <p>
                                <span>: rahman2007007@studbd</span>
                            </p>
                        </div>
                        <div class="contact-item">
                            <div class="icon">
                                <i class="fas fa-user-graduate"></i>
                                <span>Education</span>
                            </div>
                            <p>
                                <span>:KUET</span>
                            </p>
                        </div>
                        <div class="contact-item">
                            <div class="icon">
                                <i class="fas fa-user-graduate"></i>
                                <span>Mobile Number</span>
                            </div>
                            <p>
                                <span>: 01794111768</span>
                            </p>
                        </div>
                        <div class="contact-item">
                            <div class="icon">
                                <i class="fas fa-globe-africa"></i>
                                <span>Languages</span>
                            </div>
                            <p>
                                <span>: Bangla, English, Hindi</span>
                            </p>
                        </div>
                    </div>
                    <div class="contact-icons">
                        <div class="contact-icon">
                            <a href="www.facebook.com" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" target="_blank">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="right-contact">
                    <form action="" class="contact-form">
                        <div class="input-control i-c-2">
                            <input type="text" required placeholder="YOUR NAME">
                            <input type="email" required placeholder="YOUR EMAIL">
                        </div>
                        <div class="input-control">
                            <input type="text" required placeholder="ENTER SUBJECT">
                        </div>
                        <div class="input-control">
                            <textarea name="" id="" cols="15" rows="8" placeholder="Message Here..."></textarea>
                        </div>
                        <div class="submit-btn">
                            <a href="#" class="main-btn">
                                <span class="btn-text">Download CV</span>
                                <span class="btn-icon"><i class="fas fa-download"></i></span>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>

   </main>

   <div class="controlls">

   

    <div class="control btn control-1 active-btn" data-id="home">
      <i class="fas fa-house"></i>
    </div>
    <div class="control btn control-2" data-id="about">
        <i class="fas fa-address-card"></i>
    </div>
    <div class="control btn control-3" data-id="portfolio">
        <i class="fas fa-user-tie"></i>
    </div>
    <div class="control btn control-4" data-id="blogs">
        <i class="fas fa-blog"></i>
    </div>
    <div class="control btn control-5" data-id="contact">
        <i class="fas fa-address-book"></i>
    </div>
    
   

   
</div>

<div class="theme-btn btn">
    <i class="fas fa-adjust"></i>
</div>

   <script src="script.js"></script>
</body>
</html>
   