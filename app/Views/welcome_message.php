<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ferdi Personal Website</title>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>" />
    <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.png') ?>" type="image/x-icon">
    <script src="https://kit.fontawesome.com/139ceb599e.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="header">
        <div class="container">
            <nav>
                <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="" />
                <ul id="sidemenu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <i class="fas fa-times" onclick="closemenu()"></i>
                </ul>
                <i class="fas fa-bars" onclick="openmenu()"></i>
            </nav>
            <div class="header-text">
                <p>Mobile Developer</p>
                <h1>Hi, I'm <span>Ferdi</span><br />from Indonesia</h1>
            </div>
        </div>
    </div>

    <!-- ----------------About---------------- -->
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="<?php echo base_url('assets/images/user.png'); ?>" alt="" />
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title">About Me</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Consequuntur rem atque placeat voluptas tenetur earum enim id
                        eaque adipisci ullam. Consequuntur nesciunt asperiores maxime
                        vitae assumenda ut atque, accusantium consectetur?
                    </p>

                    <div class="tab-titles">
                        <p class="tab-links active-link" onclick="opentab('skills')">
                            Skils
                        </p>
                        <p class="tab-links" onclick="opentab('experience')">
                            Experience
                        </p>
                        <p class="tab-links" onclick="opentab('education')">Education</p>
                    </div>
                    <div class="tab-contents active-tab" id="skills">
                        <ul>
                            <li>
                                <span>Mobile Development</span><br />Build Mobile App
                                (Android/iOS)
                            </li>
                            <li><span>Web Development</span><br />Develop Website</li>
                            <li>
                                <span>Backend Development</span><br />Develop Server Side
                                Architecture
                            </li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="experience">
                        <ul>
                            <li>
                                <span>Jan - Apr 2023</span><br />Mobile App Developer at
                                Esolusindo
                            </li>
                            <li>
                                <span>Dec 2023 - Current</span><br />Mobile App Developer at
                                Assistindo
                            </li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="education">
                        <ul>
                            <li>
                                <span>2023</span><br />Bachelor of Science from University of
                                Jember
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ----------------Services---------------- -->
    <div id="services">
        <div class="container">
            <h1 class="sub-title">My Services</h1>
            <div class="services-list">
                <div>
                    <i class="fa-brands fa-app-store"></i>
                    <h2>Mobile Development</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Consequuntur rem atque placeat voluptas tenetur earum enim id
                        eaque adipisci ullam. Consequuntur nesciunt asperiores maxime
                        vitae assumenda ut atque, accusantium consectetur?
                    </p>
                    <a href="#">Learn more</a>
                </div>

                <div>
                    <i class="fa-solid fa-code"></i>
                    <h2>Web Development</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Consequuntur rem atque placeat voluptas tenetur earum enim id
                        eaque adipisci ullam. Consequuntur nesciunt asperiores maxime
                        vitae assumenda ut atque, accusantium consectetur?
                    </p>
                    <a href="#">Learn more</a>
                </div>

                <div>
                    <i class="fa-solid fa-crop"></i>
                    <h2>Backend Development</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Consequuntur rem atque placeat voluptas tenetur earum enim id
                        eaque adipisci ullam. Consequuntur nesciunt asperiores maxime
                        vitae assumenda ut atque, accusantium consectetur?
                    </p>
                    <a href="#">Learn more</a>
                </div>
            </div>
        </div>
    </div>

    <!-- ----------------Portfolio---------------- -->
    <div id="portfolio">
        <div class="container">
            <h1 class="sub-title">My Work</h1>
            <div class="work-list">
                <div class="work">
                    <img src="<?php echo base_url('assets/images/work-1.png'); ?>">
                    <div class="layer">
                        <h3>Work 1</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur rem atque placeat voluptas tenetur earum enim id eaque adipisci ullam. Consequuntur nesciunt asperiores maxime vitae assumenda ut atque, accusantium consectetur?</p>
                        <a href="#">
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>
                </div>
                <div class="work">
                    <img src="<?php echo base_url('assets/images/work-2.png'); ?>">
                    <div class="layer">
                        <h3>Work 2</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur rem atque placeat voluptas tenetur earum enim id eaque adipisci ullam. Consequuntur nesciunt asperiores maxime vitae assumenda ut atque, accusantium consectetur?</p>
                        <a href="#">
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>
                </div>
                <div class="work">
                    <img src="<?php echo base_url('assets/images/work-3.png'); ?>">
                    <div class="layer">
                        <h3>Work 3</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur rem atque placeat voluptas tenetur earum enim id eaque adipisci ullam. Consequuntur nesciunt asperiores maxime vitae assumenda ut atque, accusantium consectetur?</p>
                        <a href="#">
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
            <a href="#" class="btn">See more</a>
        </div>
    </div>

    <!-- ----------------Blog---------------- -->
    <div id="blog">
        <div class="container">
            <h1 class="sub-title">Blog</h1>
            <div class="work-list">
                <div class="work">
                    <img src="<?php echo base_url('assets/images/work-1.png'); ?>">
                    <div class="layer">
                        <h3>Work 1</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur rem atque placeat voluptas tenetur earum enim id eaque adipisci ullam. Consequuntur nesciunt asperiores maxime vitae assumenda ut atque, accusantium consectetur?</p>
                        <a href="#">
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>
                </div>
                <div class="work">
                    <img src="<?php echo base_url('assets/images/work-2.png'); ?>">
                    <div class="layer">
                        <h3>Work 2</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur rem atque placeat voluptas tenetur earum enim id eaque adipisci ullam. Consequuntur nesciunt asperiores maxime vitae assumenda ut atque, accusantium consectetur?</p>
                        <a href="#">
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>
                </div>
                <div class="work">
                    <img src="<?php echo base_url('assets/images/work-3.png'); ?>">
                    <div class="layer">
                        <h3>Work 3</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur rem atque placeat voluptas tenetur earum enim id eaque adipisci ullam. Consequuntur nesciunt asperiores maxime vitae assumenda ut atque, accusantium consectetur?</p>
                        <a href="#">
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url('blog'); ?>" target="_blank" class="btn">Read more</a>
        </div>
    </div>

    <!-- ----------------Contact---------------- -->
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="sub-title">Contact Me</h1>
                    <p><i class="fas fa-paper-plane"></i> contact@example.com</p>
                    <p><i class="fas fa-phone-square-alt"></i> 0123456789</p>
                    <div class="social-icons">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                    <a href="images/my-cv.pdf" download class="btn btn2">Download CV</a>
                </div>
                <div class="contact-right">
                    <form>
                        <input type="text" name="Name" placeholder="Your Name" required>
                        <input type="email" name="Email" placeholder="Your Email" required>
                        <textarea name="Message" rows="6" placeholder="Your Message" required></textarea>
                        <button type="submit" class="btn btn2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>&copy; 2023 Ferdifir. All rights reserved.</p>
    </div>

    <script src="<?php echo base_url('assets/js/script.js'); ?>"></script>
</body>

</html>