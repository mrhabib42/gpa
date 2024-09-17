<?php include 'header.php' ?>
<style>
    .top-line{
        width: 100%;
        height: 30px;
        background-color: #783143;
    }
    .text{
        text-align: center !important;
    }
    span{
        text-align: center;
    }
</style>

<div class="top-line d-flex justify-content-around">
    <span class="text-white"><i class="fa-solid fa-phone"></i> +1 201 5020919</span>
    <span class="text-white"><i class="fa-solid fa-envelope"></i> Info@ghostpublishingagency.com</span>
</div>

<?php include 'navigation.php'?>


<div class="py-5 shadow hero" style="background:linear-gradient(-50deg, #783143  50%, transparent 50%)">
    <div class="container-fluid my-2">
        <div class="row">
            <div class="col-lg-6 my-auto">
                <h1 class="display-3 font-weight-bold">Ghost Publishing Agency</h1>
                <p class="py-lg-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro aperiam similique
                    error, <br> iste molestiae dignissimos odit voluptat</p>
                <a href="" class="btn btn-lg btn-primary">Call to Action</a>
            </div>
            <div class="col-lg-6">
                <div class="col-lg-8 mx-auto card shadow-lg">
                    <div class="card-body py-5">
                        <h3>Inquiry Form</h3>
                        <form action="" method="post" class="">
                            <!-- Material input -->
                            <div class="md-form">
                                <input type="text" id="form1" class="form-control">
                                <label for="form1">Your Name</label>
                            </div>
                            <!-- Material input -->
                            <div class="md-form">
                                <input type="email" id="email" class="form-control">
                                <label for="email">Your Email</label>
                            </div>
                            <!-- Material input -->
                            <div class="md-form">
                                <input type="text" id="mobile" class="form-control">
                                <label for="mobile">Your Mobile</label>
                            </div>
                            <!-- Material input -->
                            <div class="md-form">
                                <!-- <input type="text" id="class" class="form-control"> -->
                                <textarea name="" id="message" class="form-control md-textarea" rows="2"></textarea>
                                <label for="message">Your Query</label>
                            </div>

                            <button class="btn btn-large btn-primary btn-block">Submit Form</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About us -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 py-5 ">
                <h1 class="font-weight-bold">About School <br> Management System</h1>
                <hr>
                <div class="pr-5">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque quidem id ad dolores iusto nobis
                        sunt, atque, eligendi nesciunt ipsa aliquam mollitia nemo magnam quae adipisci libero voluptatum
                        omnis vel. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo dicta ipsum ea
                        sint quisquam sit dignissimos numquam. Velit aliquid necessitatibus id adipisci officiis nobis
                        voluptates maiores consectetur, sunt nisi? Commodi.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam quos ab, recusandae repellendus
                        cum quasi totam saepe sit earum tenetur modi vitae explicabo, neque, consequatur aut ipsam
                        dolore magni laudantium?</p>
                </div>
                <a href="about-us.php" class="btn btn-secondary">Know More</a>
            </div>
            <!-- <style>
                .hello {
                    box-shadow: 20px 10px 150px 3px;
                }
            </style> -->
            <div class="col-lg-6 img-fluid hello" style="background:url(./assets/images/school.jpg); background-size:cover;  border-image: fill 0 linear-gradient(#0001,#000);">
            </div>
        </div>
    </div>
</section>
<style>
    .course-images {
        width: 100%;
        height: 180px !important;
        object-fit: cover;
        object-position: center;
    }
</style>

<!-- Our Courses -->
<section class="py-5 bg-light">
    <div class="text-center mb-5 container-fluid ">
        <h2 class="font-weight-bold">Our Courses</h2>
        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus perspiciatis obcaecati
            facilis nulla</p>
        <hr>
    </div>

    <div class="container">
        <div class="row">



            <div class="col-lg-3 mb-4">
                <div class="card">
                    <div>
                        <img src="./dist/img/user1-128x128.jpg" alt="..." class="img-fluid rounded-top course-images">
                    </div>
                    <div class="card-body">
                        <h6>Never Lie</h6>
                        <p class="card-text">
                            <!-- <b>Duration: </b>  <br> -->
                            <!-- <b>Price: </b> -->
                        </p>
                        <button class="btn btn-block btn-primary btn-sm">Enroll Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Teachers -->
<section class="py-5">
    <div class="text-center mb-5 container-fluid ">
        <h2 class="font-weight-bold">Our Teachers</h2>
        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus perspiciatis obcaecati
            facilis nulla</p>
        <hr>
    </div>

    <div class="container">
        <div class="row">
            <?php for ($i = 0; $i < 6; $i++) { ?>
                <div class="col-lg-4 my-5">
                    <div class="card">
                        <div class="col-5 position-absolute" style="top:-50px">
                            <img src="./assets/images/hunain.jpg" alt="" class="mw-100 border rounded-circle">
                        </div>
                        <div class="card-body pt-5 mt-4">
                            <h5 class="card-title mb-0">Hunain Murphy</h5>
                            <p><i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i></p>
                            <p class="card-text">
                                <b>Courses: </b> Comp.Science<br>
                                <b>Ratings: </b>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- Acheivements -->
<section class="py-5 text-white" style="background:#3923a7">
    <div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pr-5">
                    <h2>Acheivements</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, commodi laboriosam. Ullam aliquam
                        dicta officiis accusamus.</p>

                    <img src="./assets/images/school.jpg" alt="..." class="img-fluid rounded">
                </div>
                <div class="col-lg-6 my-auto">
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <div class="border rounded">
                                <div class="card-body text-center">
                                    <span><i class=" text-warning fas fa-graduation-cap fa-2x"></i></span>
                                    <h2 class="my-2 font-weight-bold h1">334</h2>
                                    <hr class="border-warning">
                                    <h4>Graduates</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="border rounded">
                                <div class="card-body text-center">
                                    <span><i class=" text-warning fas fa-graduation-cap fa-2x"></i></span>
                                    <h2 class="my-2 font-weight-bold h1">334</h2>
                                    <hr class="border-warning">
                                    <h4>Graduates</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="border rounded">
                                <div class="card-body text-center">
                                    <span><i class=" text-warning fas fa-graduation-cap fa-2x"></i></span>
                                    <h2 class="my-2 font-weight-bold h1">334</h2>
                                    <hr class="border-warning">
                                    <h4>Graduates</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="border rounded">
                                <div class="card-body text-center">
                                    <span><i class=" text-warning fas fa-graduation-cap fa-2x"></i></span>
                                    <h2 class="my-2 font-weight-bold h1">334</h2>
                                    <hr class="border-warning">
                                    <h4>Graduates</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Testimonials -->
<section class="py-5">
    <div class="text-center mb-5">
        <h2 class="font-weight-bold">What Pepole Says</h2>
        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus perspiciatis obcaecati
            facilis nulla</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="border rounded position-relative">
                    <div class="p-4 text-center">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus corporis quasi dolorum
                        officia illum, cumque quo accusamus expedita dignissimos eligendi libero eum perferendis quos,
                        aliquid assumenda! Cumque a quis molestias.
                    </div>
                    <i class="fa fa-quote-left fa-3x position-absolute" style="top:-0rem; left: .5rem; opacity:.2"></i>
                    <i class="fa fa-quote-right fa-3x position-absolute" style="bottom:.2rem; right: .3rem; opacity:.2"></i>
                </div>
                <div class="text-center mt-n0">
                    <img src="./assets/images/hunain.jpg" alt="" class="rounded-circle border" width="100" height="100">
                    <h6 class="mb-0 font-weight-bold">Hunain Murphy</h6>
                    <p><i>Prime Minister</i></p>
                </div>
            </div>
            <div class="col-6">
                <div class="border rounded position-relative">
                    <div class="p-4 text-center">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus corporis quasi dolorum
                        officia illum, cumque quo accusamus expedita dignissimos eligendi libero eum perferendis quos,
                        aliquid assumenda! Cumque a quis molestias.
                    </div>
                    <i class="fa fa-quote-left fa-3x position-absolute" style="top:-0rem; left: .5rem; opacity:.2"></i>
                    <i class="fa fa-quote-right fa-3x position-absolute" style="bottom:.2rem; right: .3rem; opacity:.2"></i>
                </div>
                <div class="text-center mt-n0">
                    <img src="./assets/images/hunain.jpg" alt="" class="rounded-circle border" width="100" height="100">
                    <h6 class="mb-0 font-weight-bold">Name Of Candidate</h6>
                    <p><i>Designation</i></p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Footer -->
<footer style="background:url(./assets/images/still-life-851328_1280.jpg) center/cover no-repeat">
    <div class="py-5 text-white" style="background:#000000bb">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <h5>Useful Links</h5>

                    <ul class="fa-ul ml-4">
                        <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>Home</a></li>
                        <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>About Us</a></li>
                        <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>Courses</a></li>
                        <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>Terms & Conditions</a>
                        </li>
                        <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5>Social Presence</h5>

                    <div>
                        <span class="fa-stack">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x fa-inverse text-dark"></i>
                        </span>
                        <span class="fa-stack">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fab fa-instagram fa-stack-1x fa-inverse text-dark"></i>
                        </span>
                        <span class="fa-stack">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fab fa-twitter fa-stack-1x fa-inverse text-dark"></i>
                        </span>
                        <span class="fa-stack">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fab fa-linkedin fa-stack-1x fa-inverse text-dark"></i>
                        </span>
                        <span class="fa-stack">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fab fa-youtube fa-stack-1x fa-inverse text-dark"></i>
                        </span>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h5>Subscribe Now</h5>
                    <form action="">
                        <!-- Material input -->
                        <div class="form-group">
                            <input type="email" id="email-s" class="form-control" placeholder="Your Email">
                        </div>
                        <button class="btn btn-secondary py-2 btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>

<section class="py-2 bg-dark text-light">
    <div class="container-fluid">
        Copyright 2020-2020 All Rights Reseved. <a href="#" class="text-light">School Management System</a>
    </div>
</section>

<?php include('footer.php') ?>