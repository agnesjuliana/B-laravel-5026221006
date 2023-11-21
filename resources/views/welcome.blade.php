<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Personal Website" />
    <meta name="author" content="Agnes" />
    <title>Agnes Personal Website</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/8983/8983107.png" />

    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/css/styles.css" rel="stylesheet" />
    <link href="/css/mystyle.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
        <div class="container px-5 ag-text-secondary">
            <a class="navbar-brand fw-bold" href="#page-top">Agnes Juliana</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#expertise">Expertise</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#experience">Experience</a></li>
                    <!-- <li class="nav-item"><a class="nav-link me-lg-3" href="#contact">Contact</a></li> -->
                </ul>
                <button class="btn ag-btn-primary rounded-pill px-3 mb-2 mb-lg-0">
                    <span class="d-flex align-items-center">
                        <i class="bi-chat-text-fill me-2"></i>
                        <span class="small">
                            <a class="nav-link" href="#contact">Contact</a>
                        </span>
                    </span>
                </button>
            </div>
        </div>
    </nav>
    <!-- Mashead header-->
    <header class="masthead ag-container-100">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 ag-on-mobile">
                    <img src="assets/img/header.png" alt="..." class="ag-hero-img">
                </div>
                <div class="col-lg-6">
                    <!-- Mashead text and app badges-->
                    <div class="mb-5 mb-lg-0 text-center text-lg-start">
                        <h3 class="display-3 lh-1 mb-3 text-decoration-underline">Hello, I'm Agnes</h3>
                        <h1 class="display-1 lh-1 mb-3 ag-text-secondary mb-5">
                            <span class="ag-text-primary">Revolutionize</span> your digital presence by crafting your
                            software solution
                        </h1>
                        <div class="d-flex flex-column flex-lg-row align-items-center">
                            <button class="btn ag-btn-primary me-lg-3 mb-4 mb-lg-0" href="#contact">
                                Contact Me!
                            </button>
                            <button class="btn ag-btn-outline-primary me-lg-3 mb-4 mb-lg-0" href="#portfolio">
                                My Portfolio
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ag-on-desktop">
                    <img src="assets/img/header.png" alt="..." class="ag-hero-img">
                </div>
            </div>
        </div>
    </header>
    <!-- About -->
    <aside class="ag-bg-secondary text-white" id="about">
        <div class="container px-5 ag-container-70">
            <div class="row">
                <h2 class="display-2 text-lg-start fw-bold text-decoration-underline text-center mb-lg-0 mb-5">About Me.
                </h2>
            </div>
            <div class="row mt-lg-5 gx-5 justify-content-center align-items-center">
                <div class="col-lg-6">
                    <img src="assets/img/aboutme.png" class="ag-about-img" alt="..." />
                </div>
                <div class="col-lg-6">
                    <p class="display-body ms-lg-5 mt-lg-0 mt-5">
                        “Hi, there! I'm a engineer with expertise in multiple backend frameworks such as Node.js, .NET,
                        and Laravel. I'm also familiar with frontend frameworks and technologies such as React.js,
                        Next.js, Bootstrap, and Material UI. My passion lies in digital business, and I love building
                        scalable, efficient, and robust applications that can solve real-world problems. I enjoy keeping
                        up-to-date with the latest trends and developments in the tech world. If you're looking for
                        someone to build a top-notch digital product that meets your needs, let’s work together”
                    </p>
                    <p class="fs-5 ms-lg-5 mt-4 fw-bold">~Agnes 2023</p>
                </div>
            </div>
        </div>
    </aside>
    <!-- Expertise -->
    <section class="bg-light" id="expertise">
        <div class="container px-5 ag-container-70 mt-5">
            <div class="row">
                <h2
                    class="ag-text-primary display-2 text-lg-start fw-bold text-decoration-underline text-center mb-lg-0 mb-5">
                    My Expertise.</h2>
            </div>
            <div class="row mt-lg-5 gx-5 gy-lg-0 gy-5 justify-content-between align-items-center">
                <div class="col-lg-4">
                    <div class="card ag-card p-3">
                        <div class="card-body ag-text-secondary">
                            <h3 class="display-3 fw-normal">Back-end.</h3>
                            <div class="divider"></div>
                            <p class="display-card mt-4">
                                I'm a backend engineer with expertise in building scalable and efficient applications
                                using various backend frameworks and technologies.
                            </p>

                            <div class="row mt-4 gy-lg-0 gy-3">
                                <img src="assets/img/nodeIcon.png" class="ag-expertise-img" alt="..." />
                                <img src="assets/img/nestIcon.png" class="ag-expertise-img" alt="..." />
                                <img src="assets/img/laravelIcon.png" class="ag-expertise-img" alt="..." />
                                <img src="assets/img/dotnetIcon.png" class="ag-expertise-img" alt="..." />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card ag-card p-3">
                        <div class="card-body ag-text-secondary">
                            <h3 class="display-3 fw-normal">Front-end.</h3>
                            <div class="divider"></div>
                            <p class="display-card mt-4">
                                I'm a backend engineer with expertise in building scalable and efficient applications
                                using various backend frameworks and technologies.
                            </p>

                            <div class="row mt-4 gy-lg-0 gy-3">
                                <img src="assets/img/reactIcon.png" class="ag-expertise-img" alt="..." />
                                <img src="assets/img/nextIcon.png" class="ag-expertise-img" alt="..." />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card ag-card p-3">
                        <div class="card-body ag-text-secondary">
                            <h3 class="display-3 fw-normal">Business.</h3>
                            <div class="divider"></div>
                            <p class="display-card mt-4">
                                I'm a backend engineer with expertise in building scalable and efficient applications
                                using various backend frameworks and technologies.
                            </p>

                            <div class="row mt-4 gy-lg-0 gy-3">
                                <img src="assets/img/udigiIcon.png" class="ag-expertise-img" alt="..." />
                                <img src="assets/img/wiyataIcon.png" class="ag-expertise-img" alt="..." />
                                <img src="assets/img/eazychiseIcon.png" class="ag-expertise-img" alt="..." />
                                <img src="assets/img/evobizIcon.png" class="ag-expertise-img" alt="..." />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio-->
    <aside class="bg-white ag-text-primary" id="portfolio">
        <div class="container px-5 my-5">
            <div class="row">
                <h2 class="display-2 text-lg-center fw-bold text-decoration-underline text-center mb-lg-0 mb-5">My
                    Portfolio.</h2>
            </div>
            <div class="row mt-lg-5 g-5 justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="card ag-card-outline">
                        <img src="./assets/img/udigiPict.png" class="card-img-top" alt="...">
                        <div class="card-body p-lg-5">
                            <h3 class="display-3 fw-bold">U.Digi</h3>
                            <p class="display-card">U.Digi is a digital platform that integrates multiple e-wallet
                                accounts into one centralized platform</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card ag-card-outline">
                        <img src="./assets/img/eazychisePict.png" class="card-img-top" alt="...">
                        <div class="card-body p-lg-5">
                            <h3 class="display-3 fw-bold">EazyChise</h3>
                            <p class="display-card">EazyChise is a franchise solution to promote Indonesian cuisine and
                                preserve its unique regional variations</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card ag-card-outline">
                        <img src="./assets/img/evobizPict.png" class="card-img-top" alt="...">
                        <div class="card-body p-lg-5">
                            <h3 class="display-3 fw-bold">Evobiz</h3>
                            <p class="display-card">Evobiz is an new era skill learning platform supported by AI to
                                evolve ability become business</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card ag-card-outline">
                        <img src="./assets/img/lokapinPict.png" class="card-img-top" alt="...">
                        <div class="card-body p-lg-5">
                            <h3 class="display-3 fw-bold">Lokapin</h3>
                            <p class="display-card">Lokapin offers a solution to the difficult experience of losing a
                                beloved pet with an innovative IoT product</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!-- Experience-->
    <section class="ag-bg-secondary-light" id="experience">
        <div class="container-fluid">
            <div class="row">
                <h1 class="display-1 text-center text-decoration-underline">Experience.</h1>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div id="inam" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container">
                                    <div class="row">
                                        <h1 class="display-1 text-center">2021</h1>
                                    </div>
                                    <div class="row gx-5 gy-3 gy-lg-0 justify-content-center">
                                        <div class="col-lg-3">
                                            <div class="card ag-card p-3 h-100">
                                                <div class="card-body">
                                                    <h4 class="display-4 fw-bold">Intern at Telkom Indonesia</h4>
                                                    <p>July - September 2022</p>
                                                    <p class="display-card">Actively participate in developing eazyapi.
                                                        An internal platform for APIs documentation. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="card ag-card p-3 h-100">
                                                <div class="card-body">
                                                    <h4 class="display-4 fw-bold">1st Winner of BIONIX</h4>
                                                    <p>November 2021</p>
                                                    <p class="display-card">Work in a team to complete business and IT
                                                        olympiad</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="card ag-card p-3 h-100">
                                                <div class="card-body">
                                                    <h4 class="display-4 fw-bold">Top 50 SMK Do Well Social Fest</h4>
                                                    <p>February 2021</p>
                                                    <p class="display-card">Vocational high school idea challenge held
                                                        by Telkom Indonesia. Idea title "Belanjain" about digitize
                                                        traditional markets</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 2022 -->
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="row">
                                        <h1 class="display-1 text-center">2022</h1>
                                    </div>
                                    <div class="row gx-5 gy-3 gy-lg-0 justify-content-center">
                                        <div class="col-lg-3">
                                            <div class="card ag-card p-3 h-100">
                                                <div class="card-body">
                                                    <h4 class="display-4 fw-bold">Best graduate student 28th gen</h4>
                                                    <p>July 2022</p>
                                                    <p class="display-card">Honored to be one of The Best Students of
                                                        Software Engineering Program</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="card ag-card p-3 h-100">
                                                <div class="card-body">
                                                    <h4 class="display-4 fw-bold">1st Winner of Permata Youth Preneur
                                                    </h4>
                                                    <p>May 2022</p>
                                                    <p class="display-card">Have been passed 24 hour hackathon and
                                                        delivering pitch deck. Finish with our product titled u.Digi.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="card ag-card p-3 h-100">
                                                <div class="card-body">
                                                    <h4 class="display-4 fw-bold">1st Runner Up of KOMPEk 24 BC</h4>
                                                    <p>February 2022</p>
                                                    <p class="display-card">Implement business knowledge to complete
                                                        business case and business planning entitled "EazyChise"</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#inam" class="carousel-control-prev" data-slide="prev">
                            <span class="carousel-control-prev-icon ag-bg-primary"></span>
                        </a>
                        <a href="#inam" class="carousel-control-next" data-slide="next">
                            <span class="carousel-control-next-icon ag-bg-primary"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to action section-->
    <section class="cta">
        <div class="cta-content">
            <div class="container px-5">
                <div class="row justify-content-center align-items-center">
                    <h1 class="display-1 text-white text-center">Contact Me.</h1>
                </div>
                <div class="row justify-content-center align-items-center">
                    <div class="col-6">
                        <form id="contactForm" onsubmit="return validateForm()">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..."/>
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" id="name-invalid">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com"/>
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" id="email-invalid">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(62) 83848160"/>
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" id="phone-invalid">A phone number is required.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text"
                                    placeholder="Enter your message here..." style="height: 10rem"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" id="message-invalid">A message is required.
                                </div>
                            </div>
                            <div class="d-grid">
                                <button class="btn ag-btn-primary rounded-pill btn-lg" id="submitButton" type="submit">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact -->
    <section class="ag-bg-secondary-light" id="contact">
        <div class="container px-5">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <h1 class="display-1 ag-text-secondary"><span class="ag-text-primary">Agnes</span> Personal Contact.
                    </h1>
                </div>
                <div class="col-lg-3 d-flex align-items-center">
                    <img src="./assets/img/mailIcon.png" class="ag-contact-img me-3" alt="..." />
                    <p class="display-body">agnesjulianaprofile<br>@gmail.com</p>
                </div>
                <div class="col-lg-3 d-flex align-items-center">
                    <img src="./assets/img/linkedinIcon.png" class="ag-contact-img me-3" alt="..." />
                    <p class="display-body">linkedin.com/in/<br>agnesjuliana</p>
                </div>
                <div class="col-lg-3 d-flex align-items-center">
                    <img src="./assets/img/githubIcon.png" class="ag-contact-img me-3" alt="..." />
                    <p class="display-body">github.com/<br>agnesjuliana</p>
                </div>

            </div>
        </div>
    </section>
    <section class="ag-bg-secondary-light" id="contact">
        <div class="container px-5">
            <div class="row align-items-center">
                <div class="col-lg-3 d-flex align-items-center">
                    <a class="btn ag-btn-primary rounded-pill btn-lg" href="pertemuan-1">Pertemuan 1</a>
                </div>
            </div>
        </div>
        <div class="container px-5">
            <div class="row align-items-center">
                <div class="col-lg-3 d-flex align-items-center">
                    <a class="btn ag-btn-primary rounded-pill btn-lg" href="pertemuan-1">Pertemuan 1</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="ag-bg-secondary text-center py-5">
        <div class="container px-5">
            <div class="text-white-50 small">
                <div class="mb-2">&copy; Agnes Website 2023. All Rights Reserved.</div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JS-->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="js/scripts.js"></script>
</body>

</html>