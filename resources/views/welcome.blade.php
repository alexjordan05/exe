<!DOCTYPE html>

<html lang="en">
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <title>Girly</title>
</head>

<body>
  <nav class="navbar navbar-expand-md  fixed-top maine-menu">
    <div class="container">
      <button class="navbar-toggler ml-auto" data-target="#my-nav" onclick="myFunction(this)" data-toggle="collapse"> <span class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span> </button>
      <div id="my-nav" class="collapse navbar-collapse">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active"> <a class="nav-link" href="#">Home</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#about" tabindex="-1" aria-disabled="true">About</a></li>
          <li class="nav-item"> <a class="nav-link" href="#activity" tabindex="-1" aria-disabled="true">Activity</a></li>
          <li class="nav-item"> <a class="nav-link" href="#portfolio" tabindex="-1" aria-disabled="true">Portfolio</a></li>
          <li class="nav-item"> <a class="nav-link" href="#testimonial" tabindex="-1" aria-disabled="true">Testimonial</a></li>
          <li class="nav-item"> <a class="nav-link" href="#blog.html" tabindex="-1" aria-disabled="true">Blog</a></li>
          <li class="nav-item"> <a class="nav-link" href="#contact" tabindex="-1" aria-disabled="true">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid fh5co-home-banner">
    <div class="card"> <img class="card-img" src="{{asset('assets/img/banner-img.jpg')}}" alt="">
      <div class="card-img-overlay">
        <div class="center-text">
          <h2 class="card-title">A camera is the save button
          for the mind’s eye</h2>
          <a href="#" class="btn">
            <svg width="201" height="51" viewBox="0 0 201 51">
              <defs>
                <style>
                .cls-1 {
                  fill: none;
                  stroke-width: 1px;
                  stroke: url(#linear-gradient);
                }
              </style>
              <linearGradient id="linear-gradient" x1="140.508" y1="50.5" x2="60.492" y2="0.5" gradientUnits="userSpaceOnUse">
                <stop offset="0" stop-color="#e90e65"/>
                <stop offset="1" stop-color="#fff"/>
              </linearGradient>
            </defs>
            <rect id="Rounded_Rectangle_1" data-name="Rounded Rectangle 1" class="cls-1" x="0.5" y="0.5" width="200" height="50" rx="25" ry="25"/>
          </svg>
        Explore</a> </div>
      </div>
    </div>
  </div>
  <div class="container-fluid fh5co-two-img">
    <div class="row">
      <div class="col-sm-6 pr-0 pl-0">
        <div class="card"> <img class="card-img" src="{{asset('assets/img/girl1.jpg')}}" alt="">
          <div class="card-img-overlay"> </div>
        </div>
      </div>
      <div class="col-sm-6 pr-0 pl-0">
        <div class="card"> <img class="card-img" src="{{asset('assets/img/girl2.jpg')}}" alt="">
          <div class="card-img-overlay"> </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid fh5co-recent-work">
    <div class="container contact-pop">
      <div class="row">
        <div class="col-md-6  pr-0">
          <div class="card"> <img class="card-img w-100" src="{{asset('assets/img/girl3.jpg')}}" alt="">
            <div class="card-img-overlay"> </div>
          </div>
        </div>
        <div class="col-md-6 pl-0" id="about">
          <div class="content">
            <h3>I am Sandra Reigel</h3>
            <h4>Professional photographer</h4>
            <hr />
            <p>Sed do eiusmod tempor incididunt ut labore et dolo magna aliqua. Ut enim ad minim veniam, quis nostd exercitation ullamco laboris nisi ut aliquip ex ea mo consequat. Duis aute irure dolor in reprehenderit in ullamco.</p>
            <a href="#" class="btn">CONTACT</a> </div>
          </div>
        </div>
      </div>
      <div class="container recent" id="activity">
        <div class="row">
          <h2>Recent works</h2>
          <div class="owl-carousel owl-carousel2 owl-theme">
            <div>
              <div class="card"> <img class="card-img" src="{{asset('assets/img/recent-img1.jpg')}}" alt="">
                <div class="card-img-overlay"> <a href="#"><img src="{{asset('assets/img/heart.png')}}" class="heart" alt="heart icon"></a>
                  <div class="bottom-text">
                    <h5 class="card-title">Model photography</h5>
                    <p class="card-text">Digital, Photography</p>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="card"> <img class="card-img" src="{{asset('assets/img/recent-img2.jpg')}}" alt="">
                <div class="card-img-overlay"> <a href="#"><img src="{{asset('assets/img/heart.png')}}" class="heart" alt="heart icon"></a>
                  <div class="bottom-text">
                    <h5 class="card-title">Product photography</h5>
                    <p class="card-text">Digital, Photography</p>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="card"> <img class="card-img" src="{{asset('assets/img/recent-img3.jpg')}}" alt="">
                <div class="card-img-overlay"> <a href="#"><img src="{{asset('assets/img/heart.png')}}" class="heart" alt="heart icon"></a>
                  <div class="bottom-text">
                    <h5 class="card-title">Tour and potrait</h5>
                    <p class="card-text">Digital, Photography</p>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="card"> <img class="card-img" src="{{asset('assets/img/recent-img4.jpg')}}" alt="">
                <div class="card-img-overlay"> <a href="#"><img src="{{asset('assets/img/heart.png')}}" class="heart" alt="heart icon"></a>
                  <div class="bottom-text">
                    <h5 class="card-title">Classical photography</h5>
                    <p class="card-text">Digital, Photography</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid recent fh5co-portfolio" id="portfolio">
    <div class="container">
      <h2>Portfolios</h2>
      <div class="row">
        <div class="bx bx-1">
          <div class="card"> <img class="card-img" src="{{asset('assets/img/portfolio-img1.png')}}" alt="">
            <div class="card-img-overlay"> <a href="#"><img src="{{asset('assets/img/heart.png')}}" class="heart" alt="heart icon"></a>
              <div class="bottom-text">
                <h5 class="card-title">Natural site</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="bx bx-2">
          <div class="card"> <img class="card-img" src="{{asset('assets/img/portfolio-img2.png')}}" alt="">
            <div class="card-img-overlay"> <a href="#"><img src="{{asset('assets/img/heart.png')}}" class="heart" alt="heart icon"></a>
              <div class="bottom-text">
                <h5 class="card-title">Vacation special photography</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="bx bx-3">
          <div class="card"> <img class="card-img" src="{{asset('assets/img/portfolio-img3.png')}}" alt="">
            <div class="card-img-overlay"> <a href="#"><img src="{{asset('assets/img/heart.png')}}" class="heart" alt="heart icon"></a>
              <div class="bottom-text">
                <h5 class="card-title">Product photography</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="bx bx-4">
          <div class="card"> <img class="card-img" src="{{asset('assets/img/portfolio-img4.png')}}" alt="">
            <div class="card-img-overlay"> <a href="#"><img src="{{asset('assets/img/heart.png')}}" class="heart" alt="heart icon"></a>
              <div class="bottom-text">
                <h5 class="card-title">Historical place shots</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="bx bx-middle" style="padding: 0;">
          <div class="bx bx-5">
            <div class="card"> <img class="card-img" src="{{asset('assets/img/portfolio-img5.png')}}" alt="">
              <div class="card-img-overlay"> <a href="#"><img src="{{asset('assets/img/heart.png')}}" class="heart" alt="heart icon"></a>
                <div class="bottom-text">
                  <h5 class="card-title">Lorem ipsum dolor</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="bx bx-6">
            <div class="card"> <img class="card-img" src="{{asset('assets/img/portfolio-img6.png')}}" alt="">
              <div class="card-img-overlay"> <a href="#"><img src="{{asset('assets/img/heart.png')}}" class="heart" alt="heart icon"></a>
                <div class="bottom-text">
                  <h5 class="card-title">Lorem ipsum dolor</h5>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="bx bx-7">
              <div class="card"> <img class="card-img" src="{{asset('assets/img/portfolio-img7.png')}}" alt="">
                <div class="card-img-overlay"> <a href="#"><img src="{{asset('assets/img/heart.png')}}" class="heart" alt="heart icon"></a>
                  <div class="bottom-text">
                    <h5 class="card-title">Portraits</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="bx bx-8">
              <div class="card"> <img class="card-img" src="{{asset('assets/img/portfolio-img8.png')}}" alt="">
                <div class="card-img-overlay"> <a href="#"><img src="{{asset('assets/img/heart.png')}}" class="heart" alt="heart icon"></a>
                  <div class="bottom-text">
                    <h5 class="card-title">Wedding photography</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid fh5co-recent-work activity">
    <div class="container recent">
      <div class="row">
        <h2>Activity of the month</h2>
        <div class="owl-carousel owl-carousel3 owl-theme">
          <div>
            <div class="card"> <img class="card-img" src="{{asset('assets/img/activity-img1.png')}}" alt="">
              <div class="card-img-overlay">
                <div class="bottom-text">
                  <h5 class="card-title">Sed ut perspiciatis unde &nbsp; iste natus error sit volup</h5>
                  <a href="#">Read more <img src="{{asset('assets/img/double-right.svg')}}" alt=""></a> 
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="card"> <img class="card-img" src="{{asset('assets/img/activity-img2.png')}}"  alt="">
              <div class="card-img-overlay">
                <div class="bottom-text">
                  <h5 class="card-title">Sed ut perspiciatis unde &nbsp; iste natus error sit volup</h5>
                  <a href="#">Read more <img src="{{asset('assets/img/double-right.svg')}}" alt=""></a> 
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="card"> <img class="card-img" src="{{asset('assets/img/activity-img3.png')}}" alt="">
              <div class="card-img-overlay">
                <div class="bottom-text">
                  <h5 class="card-title">Sed ut perspiciatis unde &nbsp; iste natus error sit volup</h5>
                  <a href="#">Read more <img src="{{asset('assets/img/double-right.svg')}}" alt=""></a> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid fh5co-about-me" id="testimonial">
    <div id="my-carousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="card"> <img class="card-img d-block w-100" src="{{asset('assets/img/about-me-img.jpg')}}" alt="">
          <div class="card-img-overlay">
            <h2>People says about me</h2>
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-caption d-md-block"> <img src="{{asset('assets/img/quote-icon.png')}}" alt="">
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
          </div>
        </div>
        <div class="carousel-item active">
          <div class="carousel-caption d-md-block"> <img src="{{asset('assets/img/quote-icon.pn')}}g" alt="">
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-caption d-md-block"> <img src="{{asset('assets/img/quote-icon.png')}}" alt="">
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
          </div>
        </div>
      </div>
      <ol class="carousel-indicators">
        <li data-target="#my-carousel" data-slide-to="0" > <img src="{{asset('assets/img/about-me-img1.png')}}" alt=""> <span>Sherrie Rose</span> </li>
        <li class="active" data-target="#my-carousel" data-slide-to="1" aria-current="location"> <img src="{{asset('assets/img/about-me-img2.png')}}" alt=""> <span>Sherrie Rose</span> </li>
        <li data-target="#my-carousel" data-slide-to="2"> <img src="{{asset('assets/img/about-me-img3.png')}}" alt=""> <span>Sherrie Rose</span> </li>
      </ol>
    </div>
  </div>
  <div class="container-fluid fh5co-insta-feed activity">
    <div class="container recent">
      <div class="row mb-5 pb-5">
        <div class="col-lg-6">
          <div class="twit-box">
            <div class="media mb-3"> <img class="align-self-start mr-3 rounded-circle" src="{{asset('assets/img/twit-girl-img.png')}}" alt="">
              <div class="media-body">
                <h5 class="mb-0 mt-3">Sandra reigel</h5>
                <p>@sandraphotography</p>
              </div>
            </div>
            <p class="text-justify"> “Sed ut perspiciatis unde omnis iste nats error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut. </p>
            <div class="clearfix"> <a href="#" class="btn btn-primary mt-2 float-right">Follow</a> </div>
          </div>
        </div>
        <div class="col-lg-6 feed-caro">
          <h2>Instagram feed</h2>
          <div class="owl-carousel owl-carousel4 owl-theme">
            <div>
              <div class="card"> <img class="card-img" src="{{asset('assets/img/feed-img1.png')}}" alt="">
                <div class="card-img-overlay"> </div>
              </div>
            </div>
            <div>
              <div class="card"> <img class="card-img" src="{{asset('assets/img/feed-img2.png')}}"  alt="">
                <div class="card-img-overlay"> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <h2 class="text-center d-block">Find me on social media</h2>
      <div class="row social-links">
        <ul class="nav mx-auto">
          <li class="nav-item"> <a class="nav-link" href="#"><img src="{{asset('assets/img/facebook.png')}}" alt=""></a> </li>
          <li class="nav-item"> <a class="nav-link" href="#"><img src="{{asset('assets/img/twitter.png')}}" alt=""></a> </li>
          <li class="nav-item"> <a class="nav-link" href="#"><img src="{{asset('assets/img/pinterest.png')}}" alt=""></a> </li>
          <li class="nav-item"> <a class="nav-link" href="#"><img src="{{asset('assets/img/google-plus.png')}}" alt=""></a> </li>
        </ul>
      </div>
    </div>
  </div>
  <footer class="container-fluid p-0 pr-0">
    <div class="row mr-0 ml-0">
      <div class="col-md-6 pr-0 pl-0 map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13035.46901327725!2d-80.85396551628644!3d35.234674411422155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8856a03af474f38f%3A0xf8301daadf5f7670!2sFourth+Ward%2C+Charlotte%2C+NC%2C+USA!5e0!3m2!1sen!2sin!4v1551001218548"  style="border:0" allowfullscreen></iframe>
      </div>
      <div class="col-md-6 content-us">
        <div class="contact-form" id="contact">
          <h3 class="text-uppercase">Contact me</h3>
          <input type="text" class="form-control" placeholder="Your Name">
          <input type="text" class="form-control" placeholder="Your Email">
          <textarea class="form-control" placeholder="Your Message"></textarea>
          <button type="submit">Send</button>
        </div>
      </div>
    </div>
    <div class="copy pt-4 pb-4">
      <p><a href="https://freehtml5.co/" target="_blank"> &copy; 2019 Girly</a>  &nbsp;  |  &nbsp; Design by <a href="https://freehtml5.co/" target="_blank">freehtml5.co</a> &nbsp; | &nbsp;  All rights reserved</p>
    </div>
  </footer>

  <!-- jQuery first, then Popper.js, then Bootstrap JS --> 
  <script src="{{asset('assets/js/jquery-3.3.1.slim.min.js')}}"></script> 
  <script src="{{asset('assets/js/popper.min.js')}}" ></script> 
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script> 
  <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script> 
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>