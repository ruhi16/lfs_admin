<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <title>{{ config('app.name', 'Little Flowers School') }}</title>    
    {{-- <title>Little Flowers School</title> --}}
    <!-- New Templates -->
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    
    
    @livewireStyles    
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="index.html" class="navbar-brand">
                <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>Little Flower School</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="{{url('/')}}" class="nav-item nav-link active">Home</a>
                    <a href="#about" class="nav-item nav-link">About Us</a>
                    <a href="#classes" class="nav-item nav-link">Classes</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="facility.html" class="dropdown-item">School Facilities</a>
                            <a href="team.html" class="dropdown-item">Popular Teachers</a>
                            <a href="call-to-action.html" class="dropdown-item">Become A Teachers</a>
                            <a href="appointment.html" class="dropdown-item">Make Appointment</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                        </div>
                    </div>
                    <a href="#contact" class="nav-item nav-link">Contact Us</a>
                    <a href="#contact" class="nav-item nav-link">Contact Us</a>
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <a wire:navigate href="{{ url('/dashboard') }}"
                                    class="btn btn-primary rounded-pill px-3 ">Dashboard
                                </a>
                            @else
                                <a wire:navigate href="{{ route('login') }}"
                                    class="btn btn-primary rounded-pill px-3 ">Log in
                                </a>
                                @if (Route::has('register'))
                                    {{-- <a wire:navigate href="{{ route('register') }}"
                                        class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a> --}}
                                @endif                        
                            @endauth
                        </div>
                    @endif 
                                    
                    
                </div>
                    
                {{-- <a href="" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Shin In<i class="fa fa-arrow-right ms-3"></i></a> --}}
            </div>

            
            
        </nav>
        <!-- Navbar End -->


        <!-- Carousel Start -->
        

        <!-- Carousel End -->

        @livewire('gen-caraosel-component')
        
        
        <!-- Notice Board start -->
        @livewire('gen-notice-view-component')
        <!-- Notice Board End -->


        <!-- Facilities Start -->

        @livewire('gen-facilities-component')
        <!-- Facilities End -->


        <!-- About Start -->
        <a name="about"></a>

        @livewire('gen-activities-component')
        <!-- About End -->


        <!-- Principal Speach Start -->
        
        @livewire('gen-principal-speach-component')
        <!-- Principal Speach End -->


        <!-- Classes Start -->
        <a name="classes"></a><br/><br/>
        


        @livewire('gen-school-classes-component')
        <!-- Classes End -->


        <!-- Appointment Start -->
        


        @livewire('gen-appointment-component')
        <!-- Appointment End -->


        <!-- Team Start -->
        

        @livewire('gen-team-works-component')
        <!-- Team End -->


        <!-- Parent Comments Start -->
        

        @livewire('gen-parent-comment-component')
        <!-- Parent Comments End -->

        <!-- Contact Start -->
        <a name="contact"></a><br/><br/>
        
        @livewire('gen-contact-us-component')
        <!-- Contact End -->
        
        
                
        <!-- Photo Gallery Start -->
        
        
        @livewire('gen-photo-gallery-component')
        <!-- Photo Gallery End -->


        <!-- Footer Start -->
        

        @livewire('gen-footer-component')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>


    
    <!-- Urgent Notice Modal Start-->
    <div class="modal fade" id="urgentNoticeModal" tabindex="-1" aria-labelledby="urgentNoticeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h3 class="modal-title text-white" id="urgentNoticeModalLabel">Urgent Notice</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Your urgent notice content goes here -->
                    <h1 class="text-primary">Little Flower School,</h1>
                    <h3>English Medium Primary School</h3>

                        <p>Welcome to Bright Futures English Medium Primary School, where we believe in nurturing young minds and fostering a love for learning in a vibrant and inclusive environment. Our school is dedicated to providing a high-quality education that empowers students to excel academically while developing essential life skills.</p>
                        
                        <h2>Our Vision</h2>
                        <p>At Little Flower School, our vision is to create a community of lifelong learners who are confident, curious, and compassionate. We aim to equip our students with the knowledge and skills they need to thrive in an ever-changing world.</p>
                        
                        <h2>Curriculum</h2>
                        Our curriculum is designed to meet the diverse needs of our students, focusing on a holistic approach to education. We offer a comprehensive program that includes:
                        <ul>

                            <li>
                                <b>Core Subjects:</b> English, Mathematics, Science, and Social Studies, taught by experienced educators who are passionate about their subjects.
                            </li>
                            <li>
                                <b>Creative Arts:</b> Music, Art, and Drama classes that encourage self-expression and creativity.
                            </li>
                            <li>

                                <b>Physical Education:</b> A robust sports program that promotes teamwork, discipline, and a healthy lifestyle.
                            </li>
                            <li>

                                <b>Technology Integration:</b> Incorporating modern technology into the classroom to enhance learning and prepare students for the digital age.</p>
                            </li>
                        </ul>
                        <h2>Join Us</h2>
                        <p>We invite you to be a part of our vibrant school community. Whether you are a parent looking for the best educational foundation for your child or a student eager to embark on an exciting learning journey, <b>Little Flower English Medium Primary School</b> is the perfect place to grow, learn, and thrive.</p>

                        <p>For more information about our programs, admissions, and upcoming events, please visit our website or contact our admissions office. Together, let’s build a brighter future for our children!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Urgent Notice Modal End-->

    @livewireScripts
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
    $(document).ready(function() {
        // $('#urgentNoticeModal').modal('show');
    });
    </script>
</body>

</html>