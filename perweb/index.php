<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <div id="header">
        <div class="container">
            <nav>
                <a href="https://national-u.edu.ph/">
                    <img src="NU.png" class="logo" alt="National University">
                </a>


                <ul>
                    <li><a href="#header">Home</a></li>
                    <li><a href="#about">About Me</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="login.php">Logout</a></li>
                </ul>
            </nav>
            <div class="header-text">
                <p>NU Fairview Student</p>
                <h1>Hi, I'm Hans Timothy Samson<br>this is my personal website</h1>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="ncba.jpg" alt="Image Alt Text">
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title">About Me</h1>
                    <p>"Hi, my name is Hans Timothy Samson, but you can call me Hans. I'm a student at National University, pursuing a degree in BSIT-MI. I live in Quezon City. In my free time, I enjoy playing games and watching movies or TV series to pass the time when I'm bored. Most of the time, I'm playing games such as LoL, Valorant, and Dota, but I also spend time playing indie games with friends, either solo or multiplayer, similar to LoL. I also enjoy hanging out with friends, whether it's in person for meetups or virtually on Discord, where we bond by talking, playing, and watching things together."</p>

                    <div class="tab-titles">
                        <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                        <p class="tab-links" onclick="opentab('education')">Education</p>
                    </div>
                    <div class="tab-contents active-tab" id="skills">
                        <ul>
                            <li><span>HTML/CSS/JS</span><br>Web Development</li>
                            <li><span>Python</span><br>Basic skills in Python</li>
                            <li><span>Java</span><br>Basic skills in Java</li>
                            <li><span>Operating System</span><br>Basic Knowledge in Linux/OS</li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="education">
                        <ul>
                            <li><span>Went to The Seed Montessori School</span></li>
                            <li><span>Went to Grace Flous</span></li>
                            <li><span>Graduated at Blessed Scalabrini Institute</span></li>
                            <li><span>Graduated at National College Business and Arts High School and Senior High School</span></li>
                            <li><span>Went to National University</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Section -->
    <div id="portfolio">
        <div class="container">
            <h1 class="subtitle">My Work</h1>
            <div class="work-list">
                <div class="work">
                    <img src="nutriglow.png" alt="Nutriglow">
                    <div class="layer">
                        <h3>Nutriglow</h3>
                        <p>This is an app that we created last semester in Mobile Programming a second year subject, this app is called Nutriglow this app contains healthy recommended for the user and their goal to their body. </p>
                    </div>
                </div>
                <div class="work">
                    <img src="forms.png" alt="Forms">
                    <div class="layer">
                        <h3>Forms</h3>
                        <p>This is a basic HTML Forms that I created this semester in Web Programming this forms contains information of the user when filling up the text fields given in the HTML forms.</p>
                    </div>
                </div>
                <div class="work">
                    <img src="gui.png" alt="GUI">
                    <div class="layer">
                        <h3>GUI</h3>
                        <p>This is a simple calculator that I made in python for my subject last semester in Data structure it is a simple calculator for adding, subtracting orders for a small eatery.</p>
                    </div>
                </div>
            </div>
            <a href="#" class="btn">See More</a>
        </div>
    </div>

    <!-- Contact Section -->
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="sub-title">Contact Me</h1>
                    <p><i class="fas fa-paper-plane"></i> hanssamson2316@gmail.com</p>
                    <p><i class="fas fa-phone"></i> 09123456901</p>

                    <div class="social-icons">
                        <a href="http://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="http://gmail.com"><i class="far fa-envelope"></i></a>
                        <a href="http://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                    </div>

                </div>
                <div class="contact-right">
                    <form id="contact-form">
                        <input type="text" name="Name" placeholder="Your Name" required>
                        <input type="email" name="email" placeholder="Your Email" required>
                        <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
                        <span id="submit-message" style="display:none;">Your message has been submitted. Thank you!</span>
                        <br>
                        <button type="submit" class="btn2">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <script>
        var tablinks = document.getElementsByClassName("tab-links");
        var tabcontents = document.getElementsByClassName("tab-contents");

        function opentab(tabname) {
            for (var i = 0; i < tablinks.length; i++) {
                tablinks[i].classList.remove("active-link");
            }

            for (var i = 0; i < tabcontents.length; i++) {
                tabcontents[i].classList.remove("active-tab");
            }

            document.querySelector(`#${tabname}`).classList.add("active-tab");
            event.currentTarget.classList.add("active-link");
        }

        // Submit button click event handler
        document.getElementById("contact-form").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent default form submission

            // Display a confirmation message
            document.getElementById("submit-message").style.display = "block";

            // Optionally, you can reset the form fields after submission
            // this.reset();
        });
    </script>
</body>

</html>
