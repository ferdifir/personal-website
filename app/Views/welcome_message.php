<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ferdi Personal Website</title>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/welcome.css'); ?>" />
    <script src="https://kit.fontawesome.com/139ceb599e.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="header">
        <div class="container">
            <nav>
                <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="logo" />
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
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
                <i class="fa-brands fa-android"></i>
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

    <script src="<?php echo base_url('assets/js/welcome.js'); ?>"></script>
</body>

</html>