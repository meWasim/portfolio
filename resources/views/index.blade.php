<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="My portfolio , Thanks  for visit">
    <meta name="author" content="Wasim Ansari">
    <title>Portfolio</title>
    <!-- Bootstrap +  style.css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Bootstrap Icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <!-- <a href="components.html" class="btn btn-primary btn-component" data-spy="affix" data-offset-top="600"><i class="ti-shift-left-alt"></i> Components</a> -->
    <header class="header">
        <div class="container">
            <ul class="social-icons pt-3">
                <li class="social-item"><a class="social-link text-light" href="#"><i class="bi bi-linkedin" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="bi bi-twitter" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="bi bi-google" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="bi bi-instagram" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="https://github.com/meWasim" target="_blank"><i class="bi bi-github" aria-hidden="true"></i></a></li>
            </ul>
            <div class="header-content">
                <h4 class="header-subtitle">Hello, I am</h4>
                <h1 class="header-title">WASIM ANSARI</h1>
                <h6 class="header-mono">Backend Developer</h6>
                <button class="btn btn-primary btn-rounded"><i class="ti-printer pr-2"></i>Print Resume</button>
            </div>
        </div>
    </header>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white" data-spy="affix" data-offset-top="510">
        <div class="container">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse mt-sm-20 navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#resume" class="nav-link">Resume</a>
                    </li>
                </ul>
                <ul class="navbar-nav brand">
                    <img src="{{asset('img/avtar.jpg')}}" alt="" class="brand-img">
                    <li class="brand-txt">
                        <h5 class="brand-title">Wasim Ansari</h5>
                        <div class="brand-subtitle">Backend Developer</div>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#portfolio" class="nav-link">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#blog" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item last-item">
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div id="about" class="row about-section">
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Who am I ?</h3>
                <span class="line mb-5"></span>
                <h5 class="mb-3">A Backend Developer</h5>
                <p class="mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit.sit amet, Qui deserunt consequatur fugit repellendusillo voluptas?</p>
                <button class="btn btn-outline-danger"><i class="icon-down-circled2 "></i>Download My CV</button>
            </div>
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Personal Info</h3>
                <span class="line mb-5"></span>
                <ul class="mt40 info list-unstyled">
                    <li><span>Birthdate</span> : 27/12/2000</li>
                    <li><span>Email</span> : alfwasim@gmail.com</li>
                    <li><span>Phone</span> : +918676041080</li>
                    <li><span>Address</span> : 12345 Fake ST NoWhere AB Country.</li>
                </ul>
                <ul class="social-icons pt-3">
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">My Expertise</h3>
                <span class="line mb-5"></span>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-widget icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>UX Design</h6>
                        <p class="subtitle"> exercitat Repellendus, corrupt.</p>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-paint-bucket icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>Web Development</h6>
                        <p class="subtitle">Lorem ipsum dolor sit consectetur.</p>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-stats-up icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>Digital Marketing</h6>
                        <p class="subtitle">voluptate commodi illo voluptatib.</p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Resume Section-->
    @component('components.resume-component')
   @endcomponent

    <section class="section bg-dark text-center">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 col-lg-3">
                    <div class="row ">
                        <div class="col-5 text-right text-light border-right py-3">
                            <div class="m-auto"><i class="ti-alarm-clock icon-xl"></i></div>
                        </div>
                        <div class="col-7 text-left py-3">
                            <h1 class="text-danger font-weight-bold font40">6</h1>
                            <p class="text-light mb-1">Month</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="row">
                        <div class="col-5 text-right text-light border-right py-3">
                            <div class="m-auto"><i class="ti-layers-alt icon-xl"></i></div>
                        </div>
                        <div class="col-7 text-left py-3">
                            <h1 class="text-danger font-weight-bold font40">10</h1>
                            <p class="text-light mb-1">Project Finished</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="row">
                        <div class="col-5 text-right text-light border-right py-3">
                            <div class="m-auto"><i class="ti-face-smile icon-xl"></i></div>
                        </div>
                        <div class="col-7 text-left py-3">
                            <h1 class="text-danger font-weight-bold font40">3</h1>
                            <p class="text-light mb-1">Company</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="row">
                        <div class="col-5 text-right text-light border-right py-3">
                            <div class="m-auto"><i class="ti-heart-broken icon-xl"></i></div>
                        </div>
                        <div class="col-7 text-left py-3">
                            <h1 class="text-danger font-weight-bold font40">2k</h1>
                            <p class="text-light mb-1">Coffee Drinked</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="service">
        <div class="container">
            <h2 class="mb-5 pb-4"><span class="text-danger">My</span> Services</h2>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-5">
                        <div class="card-header has-icon">
                            <i class="ti-vector text-danger" aria-hidden="true"></i>
                        </div>
                        <div class="card-body px-4 py-3">
                            <h5 class="mb-3 card-title text-dark">Ullam</h5>
                            <P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.</P>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-5">
                        <div class="card-header has-icon">
                            <i class="ti-write text-danger" aria-hidden="true"></i>
                        </div>
                        <div class="card-body px-4 py-3">
                            <h5 class="mb-3 card-title text-dark">Asperiores</h5>
                            <P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.</P>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-5">
                        <div class="card-header has-icon">
                            <i class="ti-package text-danger" aria-hidden="true"></i>
                        </div>
                        <div class="card-body px-4 py-3">
                            <h5 class="mb-3 card-title text-dark">Tempora</h5>
                            <P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.</P>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-5">
                        <div class="card-header has-icon">
                            <i class="ti-map-alt text-danger" aria-hidden="true"></i>
                        </div>
                        <div class="card-body px-4 py-3">
                            <h5 class="mb-3 card-title text-dark">Provident</h5>
                            <P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.</P>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-5">
                        <div class="card-header has-icon">
                            <i class="ti-bar-chart text-danger" aria-hidden="true"></i>
                        </div>
                        <div class="card-body px-4 py-3">
                            <h5 class="mb-3 card-title text-dark">Consectetur</h5>
                            <P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.</P>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-5">
                        <div class="card-header has-icon">
                            <i class="ti-support text-danger" aria-hidden="true"></i>
                        </div>
                        <div class="card-body px-4 py-3">
                            <h5 class="mb-3 card-title text-dark">Veritatis</h5>
                            <P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.</P>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="section bg-dark py-5">
        <div class="container text-center">
            <h2 class="text-light mb-5 font-weight-normal">I Am Available For FreeLance</h2>
            <button class="btn bg-primary w-lg">Hire me</button>
        </div>
    </section>

   
    @component('components.contact-component')
   @endcomponent
    
   @component('components.footer-component')
   @endcomponent

    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope  -->
    <script src="assets/vendors/isotope/isotope.pkgd.js"></script>

    <!-- Google mpas -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

    <!-- JohnDoe js -->
    <script src="assets/js/johndoe.js"></script>

</body>

</html>