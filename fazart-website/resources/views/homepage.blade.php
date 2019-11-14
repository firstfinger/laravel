<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<style>
    .right    {
	border-right: 2px solid #ccc;
    }
    .logo-img {
    position:absolute;
    left:10px;
    top:10px;
    margin: 0px 15px 15px 0px;
    }

    .social-img{

      width:33px;
      height:33px;
      padding-right: 5px;

    }
    .ds-img{

width:53px;
height:53px;


}

.navbar-default {
  background-color:#1C2331;

 }

    .product-holder {
    position: relative;
    display: block;
}

.plus-image {
    left: 50%;
    top: 50%;
    position: absolute;
    margin-top: -8px;
    margin-left: -11px;
    width:15px;
    height:15 px;
}

.navbar-nav > li{
  padding-right:15px;
}

.container {
padding-top: 40px;
padding-bottom: 40px;

}
.font-grey{
  color:gray;
}

.font-lightblue{
  color:#00BFFF;
}
.bg-red{
  background-color: red;
}
.box{
  width: 100%;
  background-size: cover;
  display: table;
  background-image: url(img/webbanner3.png);
}

.box2{
  width: 100%;
  height: 40%;
  background-image: url(img/fazartgreyscale.png);
  background-color: #2B3856;
  background-position: left;
  background-repeat: no-repeat;
  background-size: 20%;

  position: relative;


}

.ds-border-right {

  border-right: 1px solid grey;
}
.ds-border-top {

  border-top: 1px solid grey;

}

.contactus-container {
  padding-top: 40px;
  padding-bottom: 40px;


}

</style>
<body>
    <header >
        <div class="container-fluid p-0">
                <nav class="navbar navbar-expand-lg  navbar-dark navbar-default">

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                   <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-10">
                            <li class="nav-item active">
                              <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">SERVICES</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">PRICING</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link right" href="#">PORTFOLIO</a>
                            </li>

                        </ul>
                        <div class='product-holder'>
                            <img src="img/searchbg.png" class='product-image social-img'>
                            <img src="img/searchicon.png" class='plus-image'>
                        </div>


                     </div>

                            <a class="navbar-brand mx-auto" href="#"><img src="img/logo2.png"/></a>

                     <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">

                            <li class="nav-item">
                                <img src="img/social/whatsapp.png" class="social-img">
                            </li>

                            <li class="nav-item">
                                <img src="img/social/insta.png" class="social-img">
                            </li>

                            <li class="nav-item">
                                <img src="img/social/facebook.png" class="social-img">
                            </li>

                            <li class="nav-item">
                                <img src="img/social/email.png" class="social-img"/>
                            </li>

                           <li class="nav-item">

                              <a class="nav-link dropdown-toggle" href="#">ABOUT US</a>
                           </li>

                           <li class="nav-item">
                              <button class="nav-link "> REQUEST A QUOTE </button>
                           </li>

                          </ul>

                      </div>

                </nav>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide p-0" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="img/webbanner.png" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                            <h1>IDEAS INTO REALITY</h1>
                            <p>@fazartdesign</p>
                            <button> START NOW!</button>
                          </div>
                  </div>

                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/webbanner.png" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/webbanner.png" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
          </div>

    </header>

    <div class="container">
        <div class="row">
             <div class="col-sm-8">
                   <h3 class >Why Our <span> Agency?</span></h3>
                   <p>"Designed to provide information and stimulate interest, about your product or buisness."</p>
                   <P> Fazart Design is all about generate imagination, inspiring design with 'ideas into reality', and also exiciting creation, blessed with creative, innovative and talented imagination. Pan Fareast Studio evoked magical also impressive brilliant ideas with transformative results.</P>

             </div>

             <div class="col-sm-4 float-right">
                 <img src="img/phonemockup2.png"/>
             </div>
        </div>
     </div>

     <div class="container-fluid box">
     <div class="container">
     <div class="card-deck">

        <div class="card">
          <img src="img/1branding.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Branding</h5>
            <p class="card-text">It's about making and delivering a promise. We'll help define, position and deliver your brand, ensuring customers stay committed to you and your business.</p>
            <p class="card-text"><small class="text-muted">View More>></small></p>
          </div>
        </div>
        <div class="card">
          <img src="img/2Advertising.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Advertising</h5>
            <p class="card-text">Depending on the type of market you're in or are aiming for, our team or experts will help decide the most effective form of advertising for your needs.</p>
            <p class="card-text"><small class="text-muted">View More>></small></p>
          </div>
        </div>
        <div class="card">
          <img src="img/3Digital.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Digital</h5>
            <p class="card-text">We'll maintain an effective digital communication which will establish you as an authority within your industry through selected digital platforms.</p>
            <p class="card-text"><small class="text-muted">View More>></small></p>
          </div>
        </div>
        <div class="card">
            <img src="img/4illustration.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Illustration</h5>
              <p class="card-text">Get a custom illustration design for your business. Our professional designers are ready to ceate the perfect illustration for you</p>
              <p class="card-text"><small class="text-muted">Vew More>></small></p>
            </div>
          </div>
      </div>
    </div>
  </div>


  <div class="container">
    <h4 class="text-center">DESIGN SERVICES</h4>
    <p class="text-center text-muted">Our vast variety of design services give you everything you need to start your business, with 100% SATISFACTION</p>
    <div class="row text-center">
        <div class="col-2 ds-border-right">

            <p><img src="img/ds/logo_design_icon.png" class="ds-img"/></p>
            <p >LOGO DESIGN</p>
        </div>
        <div class="col-6 ds-border-right">

            <p><img src="img/ds/logo&brand_icon.png" class="ds-img"/></p>
            <p>LOGO & BRAND IDENTITY PACK</p>
            <button class="btn btn-primary">
                MOST POPULAR
            </button>
            <p>Professional Logo, Business Card & Stationary to start your business.</p>

        </div>
        <div class="col-2 ds-border-right ">
            <p><img src="img/ds/logo_design_icon.png" class="ds-img"/></p>
            <p>LOGO & HOSTED WEBSITE</p>
        </div>

        <div class="col-2">
            <p><img src="img/ds/t_shirt_icon.png" class="ds-img"/></p>
            <p>T-SHIRT DESIGN</p>
        </div>
    </div>
      <div class="row text-center ">
        <div class="col-2 ds-border-top ds-border-right  ">
            <p><img src="img/ds/web_design_icon.png" class="ds-img"/></p>
            <p >WEB DESIGN</p>
        </div>
        <div class="col-6 ds-border-right ">

        </div>
        <div class="col-2 ds-border-top ds-border-right">
            <p><img src="img/ds/book_icon.png" class="ds-img"/></p>
            <p >BOOK COVER DESIGN</p>
        </div>
        <div class="col-2 ds-border-top">
            <p><img src="img/ds/brand_guide_icon.png" class="ds-img"/></p>
            <p >BRAND GUIDE</p>
        </div>
      </div>


  </div>

  <div class="container-fluid text-center box2 p-0">
      <div class="container">
              <h5 class="text-light">Contact Us For More Info</h5>

              <p class="text-light">Whatsapp <span class="text-primary">+6011-6237-7620</span class="text-light"> or mail at <span></span><span class="text-primary">fazartd@gmail.com</span></p>
              <button class="btn btn-primary btn-sm"> GET A FREE QUOTE</button>
      </div>

  </div>

  <div class="container text-center">
        <h1>Latest Projects</h1>
        <p>Browse through our impressive portfolio to see the projects we did for our clients.</p>
        <p>We wil be more than happy to showcase yours!</p>

        <div class="row">
          <div class="col-6">
              <div class="card">
                  <img src="img/latest/1.jpg" class="card-img-top" alt="...">
             </div>

          </div>
{{-- card-img-top-> make card stick at top --}}
          <div class="col-3">
              <div class="card">
                  <img src="img/latest/2.jpg" class="card-img-top"/>
              </div>
          </div>
          <div class="col-3">
              <div class="card">
                  <img src="img/latest/3.jpg" class="card-img-top"/>
              </div>
          </div>
        </div>

  </div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
