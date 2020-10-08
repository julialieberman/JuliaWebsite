<!-- Julia Lieberman cs169 project
http://www.javascriptkit.com/javatutors/externalphp2.shtml
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Creative - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/mystyle.css" rel="stylesheet" />

    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">JLieberman Photography</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold">Julia Lieberman</h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5">Computer scientist, amateur photographer, outdoor sports enthusiast.</p>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
<section id ="test">
  <div class = "container-fluid" style="height: auto;" >
    <!--
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="assets/img/patagucciWatermark/finalpatagucci-21.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="assets/img/patagucciWatermark/finalpatagucci-23.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="assets/img/patagucciWatermark/finalpatagucci-22.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" role="button" data-slide="prev" onclick="$('#myCarousel').carousel('prev')">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" role="button" data-slide="next" onclick="$('#myCarousel').carousel('next')">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
-->

<ul class="list-inline">
  <li data-toggle="modal" data-target="#myModal">
    <a href="#myGallery" data-slide-to="0">
      <img class="img-thumbnail" src="assets/img/patagucciWatermark/finalpatagucci-22.jpg">
    </a>
  </li>
</ul>

<!--begin modal window-->
<div class="modal fade" id="myModal">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<div class="pull-left">Bitch werk</div>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true" class="glyphicon glyphicon-remove"></span></button>
</div>

<div class="modal-body">

<!--CAROUSEL CODE GOES HERE-->
<!--begin carousel-->
  <div id="myGallery" class="carousel slide" data-interval="false">
    <div class="carousel-inner">
      <div class="carousel-item active"> <img class = "d-block w-100" src="assets/img/patagucciWatermark/finalpatagucci-6.jpg" alt="item0">
      </div>
      <div class="carousel-item"> <img class = "d-block w-100" src="assets/img/patagucciWatermark/finalpatagucci-7.jpg" alt="item1">
      </div>
      <div class="carousel-item"> <img class = "d-block w-100" src="assets/img/patagucciWatermark/finalpatagucci-8.jpg" alt="item2">
      </div>
      <div class="carousel-item"> <img class = "d-block w-100" src="assets/img/patagucciWatermark/finalpatagucci-16.jpg" alt="item3">
      </div>
  <!--end carousel-inner-->
    </div>
  <!--Begin Previous and Next buttons-->
    <a class="carousel-control-prev" data-slide="prev" href="#myGallery" role="button">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myGallery" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span></a>
    <!--end carousel-->
  </div>
  <!--end modal-body-->
</div>

<div class="modal-footer">
<div class="pull-left"></div>

<button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
<!--end modal-footer--></div>
<!--end modal-content--></div>
<!--end modal-dialoge--></div>
<!--end myModal-->></div>
    </div>

</section>        <!-- Portfolio-->
        <section id="portfolio">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/patagucciWatermark/finalpatagucci-6.jpg">
                            <img class="img-fluid" src="assets/img/patagucciWatermark/finalpatagucci-6.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Nature</div>
                                <div class="project-name">Futaleufu
                                </div>
                            </div>
                          </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portraitsWatermark/lucy/lucy-1.jpg">
                            <img class="img-fluid" src="assets/img/smallPortraits/Lucy/lucy-1.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Portraits
                                </div>
                                <div class="project-name">Lucy
                                </div>
                            </div>
                          </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/patagucciWatermark/finalpatagucci-6.jpg">
                            <img class="img-fluid" src="assets/img/patagucciWatermark/finalpatagucci-6.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Landscape
                                </div>
                                <div class="project-name">Patagonia
                                </div>
                            </div>
                          </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/cityskapes2/seville2.jpg">
                            <img class="img-fluid" src="assets/img/cityskapes2/seville2.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Cityskapes
                                </div>
                                <div class="project-name">Seville, Spain
                                </div>
                            </div>
                          </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/smallPortraits/all0.jpg">
                            <img class="img-fluid" src="assets/img/smallPortraits/all0.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Portraits
                                </div>
                            </div>
                          </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/stars/stars-1.jpg">
                            <img class="img-fluid" src="assets/img/stars/stars-1.jpg" alt="" />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">Elements</div>
                                <div class="project-name">Astrophotography</div>
                            </div>
                          </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to action-->
        <section class="page-section bg-dark text-white">
            <div class="container text-center carousel slide" style="height: 500px;">
                <img id="slideshow" class ="myslideshow" src="assets/img/portraitsWatermark/lucy/lucy-1.jpg" />
                <button id="leftslider" class="leftslider" data-slide="prev" role="button" >
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </button>

                <button id="rightslider" class="rightslider" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </button>
            </div>
        </section>

        <section class="page-section bg-dark text-white" style="padding: 10px; margin-bottom: 10px;">
            <div class="container text-center carousel slide" style="height: 500px;">
                <img id="slideshow1" class ="myslideshow" src="assets/img/chile/IMG_0169.jpg" />
                <button id="leftslider1" class="leftslider" data-slide="prev" role="button" >
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </button>

                <button id="rightslider1" class="rightslider" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </button>
            </div>
        </section>
        <!-- Contact-->
          <!--  <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0">Let's Get In Touch!</h2>
                        <hr class="divider my-4" />
                        <p class="text-muted mb-5">Ready to start your next project with us? Give us a call or send us an email and we will get back to you as soon as possible!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                        <div>+1 (555) 123-4567</div>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i
                        ><!- Make sure to change the email address in BOTH the anchor text and the link target below!-- <a class="d-block" href="mailto:contact@yourwebsite.com">contact@yourwebsite.com</a>
                    </div>
                </div>
            </div> -->

<script type = "text/javascript">

var jsarr1=[];
var slideshow1iter=[];

setupSlideshow('assets/img/portraitsWatermark/lucy', 'slideshow');
slideshow1iter.push(0);
setupSlideshow('assets/img/patagucciWatermark', 'slideshow1');
slideshow1iter.push(0);

//anonymous function!
document.getElementById('rightslider').onclick = function()
{ clickieforward('slideshow', 0); }
document.getElementById('rightslider1').onclick = function()
{ clickieforward('slideshow1', 1); }
document.getElementById('leftslider').onclick = function()
{ clickiebackward('slideshow', 0); }
document.getElementById('leftslider1').onclick = function()
{ clickiebackward('slideshow1', 1); }

//non anonymous functions
function clickieforward(id, num)
{
  console.log(slideshow1iter[num]);
  slideshow1iter[num]=(slideshow1iter[num]+1) % (jsarr1[num].length-1)
  console.log(slideshow1iter[num]);
  document.getElementById(id).setAttribute('src', (jsarr1[num][slideshow1iter[num]]));
}

function clickiebackward(id, num)
{
  if(slideshow1iter[num]==0) slideshow1iter[num] = jsarr1[num].length-1;
  else slideshow1iter[num]=(Math.abs(slideshow1iter[num]-1)) % (jsarr1[num].length-1);

  document.getElementById(id).setAttribute('src', jsarr1[num][slideshow1iter[num]]);
  console.log(slideshow1iter[num]);
}


function setupSlideshow(path, id)
{ //js function to be able to set up slideshows easily assuming the html element with the provided id already exists
  fetch('http://localhost:5000/filetest.php?path=' + path)  // http request to the backend. returns a string
    .then((data) => data.json())                            // extract the json from the http response, basically parsing the string to be a json object
    .then((data) => Object.keys(data).map(e => data[e]))    // response was key value pair - get rid of the keys
    .then((data) =>
    {                                       // now I set up an array of the images
      const jsarr =[];

      for(let i=0; i< data.length; i++)
      {
        // ['assets/img/add/asdasd.jpg', ..]
        jsarr.push(`${path}/${data[i]}`); // create array that contains path of images
      }
      jsarr1.push(jsarr);
      console.log("jsarr1=");
      let j=0 //let yields block scoping! without saying let or any other keyword it implies var which is GLOBAL scope!
      console.log("set j to 0");


     setInterval(() => //fun way to define a function in javascript
      {
        document.getElementById(id).setAttribute('src', jsarr[j]);  // assign new image to the element that contains `id`
        j=(j+1)%(jsarr.length-1);                                   //update j to wrap around to continue the sequential scrolling
      //  document.getElementById(id).setAttribute('src', jsarr[Math.floor(Math.random() * jsarr.length)]);  // assign new image to the element that contains `id`
    }, 2500); //rotate through array of images in slideshow every 2.5s

  });
}
</script>
 
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container"><div class="small text-center text-muted">Copyright © 2020 - Start Bootstrap</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

    </body>
</html>
