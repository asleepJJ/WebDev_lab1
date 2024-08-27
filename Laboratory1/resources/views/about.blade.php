<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="About Ken Anne Acosta">
        <title>About - Keniii Blog</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />

        <style>
             @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
            *{
                padding: 0;
                margin: 0;
                box-sizing: border-box;
                font-family: poppins;
                color: #878e99;
            }

            #about-section {
                width: 100%;
                height: 100%;
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 100px 12%;
                background-color: #1e2125;
            }

            nav {
                width: 100%;
                position: absolute;
                top: 0;
                left: 0;
                padding: 20px 8%;
                display: flex;
                align-items: center; 
                justify-content: space-between; 
                z-index: 1000; 
            }
  
            nav .logo {
                width: 80px;
                height: auto; 
            }
  
            nav .nav-links {
                display: flex; 
                gap: 40px;
            }
  
            nav .nav-links a {
                text-decoration: none; 
                color: whitesmoke; 
                font-size: 17px; 
                transition: color 0.3s ease; 
            }
  
            nav .nav-links a:hover {
                color: #ff014f; 
            }

            .about-left img{
                bottom: 50%;
                width: 420px;
                height: auto;
                transform: translateY(50px);
                border: 3px solid whitesmoke;
            }
            .about-right {
                width: 54%;
            }

            .about-right ul li {
                display: flex;
                align-items: center;
            }

            .about-right h1 {
                color: #ff014f;
                font-size: 37px;
                margin-bottom: 5px;
            }

            .about-right p {
                color: whitesmoke;
                line-height: 26px;
                font-size: 15px;
            }

            .about-right .address {
                margin: 25px 0;
            }

            .about-right .address ul li {
                margin-bottom: 5px;
            }

            .address .address-logo {
                margin-right: 15px;
                color: #ff014f;
            }

            .address .saprater {
                margin: 0 35px;
            }

            .about-right .expertise ul {
                width: 80%;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .expertise h3 {
                margin-bottom: 10px;
                color: whitesmoke;
            }

            .expertise .expertise-logo {
                font-size: 19px;
                margin-right: 10px;
                color: #ff014f;
            }

            .about-right .social-icons ul {
                width: 80%;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .social-icons h4 {
                margin-bottom: 10px;
                color: whitesmoke;
            }

            .social-icons .social-logo {
                font-size: 19px;
                margin-right: 10px;
                color: #ff014f;
            }
            
        </style>
    </head>

    <body>

        <section id="about-section">

            <nav>
                <img src="{{ asset('images/logo/keniii.png') }}" class="logo">
                <div class="nav-links">
                    <a href="{{ url('/') }}">HOME</a>
                    <a href="{{ url('/content') }}">CONTENT</a>
                    <a href="{{ url('/about') }}">ABOUT</a>
                </div>
            </nav>
         
            <div class="about-left">
                <img src="{{ asset('images/idpic.png') }}" class="ken">
            </div>

            
            <div class="about-right">
                <p>Welcome to my world</p>
                <h1>Hi! I'm Ken Anne </h1>
                <p>I'm a third-year BSIT student at Bicol University with a strong passion for web design. My aspiration is to become a web designer, 
                    and I am dedicated to continually adapting and learning new skills to achieve this goal. With a keen interest in creating engaging 
                    and user-friendly web experiences, I am committed to staying current with industry trends and technologies.
                </p>
                <div class="address">
                    <ul>
                        <li>
                            <span class="address-logo">
                                <i class="fas fa-paper-plane"></i>
                            </span>
                            <p>Address</p>
                            <span class="saprater">:</span>
                            <p>Cararayan, Tiwi, Albay</p>
                        </li>
                        <li>
                            <span class="address-logo">
                                <i class="fas fa-phone-alt"></i>
                            </span>
                            <p>Phone No</p>
                            <span class="saprater">:</span>
                            <p>+639 510-168-807</p>
                        </li>
                        <li>
                            <span class="address-logo">
                                <i class="far fa-envelope"></i>
                            </span>
                            <p>Email ID</p>
                            <span class="saprater">:</span>
                            <p>kaja2022-2721-1239@bicol-u.edu.ph</p>
                        </li>
                    </ul>
                </div>
                <div class="expertise">
                    <h3>My Expertise</h3>
                    <ul>
                        <li>
                            <span class="expertise-logo">
                                <i class="fab fa-html5"></i>
                            </span>
                            <p>HTML</p>
                        </li>
                        <li>
                            <span class="expertise-logo">
                                <i class="fab fa-css3-alt"></i>
                            </span>
                            <p>CSS</p>
                        </li>
                        <li>
                            <span class="expertise-logo">
                                <i class="fab fa-node-js"></i>
                            </span>
                            <p>Java Script</p>
                        </li>
                        <li>
                            <span class="expertise-logo">
                                <i class="fab fa-c"></i>
                            </span>
                            <p>C</p>
                        </li>
                    </ul>
                </div><br>

                <div class="social-icons">
                    <h4>Find Me</h4>
                    <ul>
                        <li>
                            <span class="social-logo">
                                <i class="fab fa-facebook"><a href="https://www.facebook.com/kenanne.acosta.3?mibextid=ZbWKwL"></i>
                            </span>
                            <p>Facebook</p>
                        </li>
                        <li>
                            <span class="social-logo">
                                <i class="fab fa-twitter"></i>
                            </span>
                            <p>Twitter</p>
                        </li>
                        <li>
                            <span class="social-logo">
                                <i class="fab fa-instagram"><a href="https://www.instagram.com/alyxv_sr?igsh=MXN2MDh1N2pteXlpNg=="></i>
                            </span>
                            <p>Instagram</p>
                        </li>
                        <li>
                            <span class="social-logo">
                                <i class="fab fa-youtube"></i>
                            </span>
                            <p>Youtube</p>
                        </li>
                    </ul>
                </div>
                
            </div>
        </section>
    </body>
</html>

