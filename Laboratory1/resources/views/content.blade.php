<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="All about Ken Anne Acosta">
        <title>Content - keniii blog</title>

    <!-- CSS ==== -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/feature.css') }}">

    <!-- Style css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="template-color-1 spybody" data-spy="scroll">

    <main class="main-page-wrapper">

        <nav>
            <img src="{{ asset('images/logo/keniii.png') }}" class="logo">
            <div class="nav-links">
                <a href="{{ url('/') }}">HOME</a>
                <a href="{{ url('/content') }}">CONTENT</a>
                <a href="{{ url('/about') }}">ABOUT</a>
            </div>
        </nav>

        <div id="home" class="rn-slider-area">
            <div class="slide slider-style-1">
                <div class="container">
                    <div class="row row--30 align-items-center">
                        <div class="order-2 order-lg-1 col-lg-7 mt_md--50 mt_sm--50 mt_lg--30">
                            <div class="content">
                                <div class="inner">
                                    <span class="subtitle">Welcome to my world</span>
                                    <h1 class="title">Hi, I’m <span>Ken Anne</span><br>
                                        <span class="header-caption" id="page-top">
                                            <span class="cd-headline clip is-full-width">
                                                <span>a </span>
                                                    <span class="cd-words-wrapper">
                                                        <b class="is-visible">aspiring UI/UX Designer.</b>
                                                        <b class="is-hidden">Student BSIT Coder.</b>
                                                        <b class="is-hidden">aspiring Web Developer.</b>
                                                    </span>
                                            </span>
                                        </span>
                                    </h1>

                                    <div>
                                        <p class="description">I'm a third-year BSIT student at Bicol University with a strong passion for web design. My aspiration is to become a web designer, 
                                            and I am dedicated to continually adapting and learning new skills to achieve this goal. With a keen interest in creating engaging 
                                            and user-friendly web experiences, I am committed to staying current with industry trends and technologies.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-12">
                                        <div class="social-share-inner-left">
                                            <span class="title">find with me</span>
                                            <ul class="social-share d-flex liststyle">
                                                <li class="facebook"><a href="https://www.facebook.com/kenanne.acosta.3?mibextid=ZbWKwL"><i data-feather="facebook"></i></a>
                                                </li>
                                                <li class="instagram"><a href="https://www.instagram.com/alyxv_sr?igsh=MXN2MDh1N2pteXlpNg=="><i data-feather="instagram"></i></a>
                                                </li>
                                                <li class="twitter"><a href=""><i data-feather="twitter"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-12 mt_mobile--30">
                                        <div class="skill-share-inner">
                                            <span class="title">best skill on</span>
                                            <ul class="skill-share d-flex liststyle">
                                                <li><img src="{{ asset('images/icons/figma.png') }}" alt="Figma Images"></li>
                                                <li><img src="{{ asset('images/icons/html.png') }}" alt="HTML Images"></li>
                                                <li><img src="{{ asset('images/icons/adobe.png') }}" alt="Adobe Images"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 

                        <div class="order-1 order-lg-2 col-lg-5">
                            <div class="thumbnail">
                                <div class="inner">
                                    <img src="{{ asset('images/slider/banner-01.png') }}" alt="Personal Portfolio Images">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Start Service Area -->
        <div class="rn-service-area rn-section-gap section-separator" id="features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-left" data-aos="fade-up">
                            <span class="subtitle">Features</span>
                            <h2 class="title">What I Do</h2>
                        </div>
                    </div>
                </div>
                <div class="row row--25 mt_md--10 mt_sm--10">

                    <div data-aos="fade-up" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="content">
                                    <h4 class="title"><a href="#">Learning Front-End Development</a></h4>
                                    <p class="description">I optimize the user experience using HTML, JavaScript and CSS to bring concepts to life.I'm trying to develop and maintain the user interface by following SEO best practices.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div data-aos="fade-up" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="content">
                                    <h4 class="title"><a href="#">Programming</a></h4>
                                    <p class="description">Learning to Write and debug a code in various languages.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div data-aos="fade-up" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="content">
                                    <h4 class="title"><a href="#">Logo & Icon Design</a></h4>
                                    <p class="description">I'm still learning about logo design and branding, but I can offer various styles to fit your business needs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Service Area  -->

        <!-- Start Resume Area -->
        <div class="rn-resume-area rn-section-gap section-separator" id="resume">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">Years of Experience</span>
                            <h2 class="title">My Resume</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--45">
                    <div class="col-lg-12">
                        <ul class="rn-nav-list nav nav-tabs" id="myTabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="education-tab" data-toggle="tab" href="#education" role="tab" aria-controls="education" aria-selected="true">education</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="professional-tab" data-toggle="tab" href="#professional" role="tab" aria-controls="professional" aria-selected="false">professional
                                    Skills</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="experience-tab" data-toggle="tab" href="#experience" role="tab" aria-controls="experience" aria-selected="false">interest</a>
                            </li>
                        </ul>
                        
                        <div class="rn-nav-content tab-content" id="myTabContents">
                            
                            <div class="tab-pane show active fade single-tab-area" id="education" role="tabpanel" aria-labelledby="education-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-12">
                                            <div class="content">
                                                <span class="subtitle">2010 - Present</span>
                                                <h4 class="maintitle">Education Quality</h4>
                                                <div class="experience-list">

                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Elementary School</h4>
                                                                    <span>Cararayan-Naga Elementary School (2010 - 2016)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
 
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>High School</h4>
                                                                    <span>Naga National High School (2016 - 2020)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Science, Technology, Engineering and Mathematics (STEM)</h4>
                                                                    <span>Naga National High School (2020 - 2022)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Bachelor of Science in Information Technology</h4>
                                                                    <span>Bicol University (2022 - Present)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-12 col-12 mt_md--60 mt_sm--60">
                                            <div class="content">
                                                <span class="subtitle">2010-Present</span>
                                                <h4 class="maintitle">Interest</h4>
                                                <div class="experience-list">

                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>UI/UX DESIGNING</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Troubleshooting</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Web Design</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Technology Trends</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade " id="professional" role="tabpanel" aria-labelledby="professional-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row row--40">

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="progress-wrapper">
                                                <div class="content">
                                                    <span class="subtitle">Features</span>
                                                    <h4 class="maintitle">Design Skill</h4>
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">PHOTOSHOP</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 60%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">60%</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">FIGMA</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.6s" data-wow-delay=".4s" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">85%</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">ADOBE XD</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay=".5s" role="progressbar" style="width: 60%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">60%</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">ADOBE ILLUSTRATOR</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".6s" role="progressbar" style="width: 40%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">40%</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">DESIGN</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay=".7s" role="progressbar" style="width: 50%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">50%</span></div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12 mt_sm--60">
                                            <div class="progress-wrapper">
                                                <div class="content">
                                                    <span class="subtitle">Features</span>
                                                    <h4 class="maintitle">Development Skill</h4>
                                                  
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">HTML</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 60%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">60%</span></div>
                                                        </div>
                                                    </div>
                                
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">CSS</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.6s" data-wow-delay=".4s" role="progressbar" style="width: 60%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">60%</span></div>
                                                        </div>
                                                    </div>
                
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">JAVASCRIPT</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay=".5s" role="progressbar" style="width: 10%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">10%</span></div>
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">JQuery</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".6s" role="progressbar" style="width: 0%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">0%</span></div>
                                                        </div>
                                                    </div>
                                                 
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">PHP</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay=".7s" role="progressbar" style="width: 20%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">20%</span></div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                    
                                    </div>
                                </div>
                            </div>
                
                            <div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="experience-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-12">
                                            <div class="content">
                                                <span class="subtitle">2010 - Present</span>
                                                <h4 class="maintitle">Interest</h4>
                                                <div class="experience-list">

                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>UX/UI DESIGNING</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
 
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Troubleshooting</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Web design</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Technology trends</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Resume Area -->
    </main>

    <!-- Start Footer Area -->
    <footer>
        <div class="logo">
            <a href="index.html">
                <img src="{{ asset('images/logo/keniii.png') }}" alt="logo">
            </a>
        </div>
        <div class="bottom-bar">
            <p>&copy; 2024 All rights reserved.</p>
        </div>
    </footer>
    <!-- End Footer Area -->

    <!-- JS ============================================ -->
    <script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/modernizer.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/text-type.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/wow.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/aos.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/particles.js') }}"></script>
    <!-- main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
