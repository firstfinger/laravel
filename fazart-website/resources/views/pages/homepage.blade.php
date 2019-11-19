<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>


    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{env('APP_NAME')}}</title>
    <!-- Meta End -->

    <!-- Styles -->
    <link href="/css/global.css{{ config('app.link_version') }}" type="text/css" rel="stylesheet" />
    <link href="/css/plugin/bootstrap.min.css{{ config('app.link_version') }}" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Inconsolata" />
    <!-- Styles End -->

    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Script End -->

</head>
<body>

    <header>
        <div class="container-fluid p-0">

                  @include('components.topbar')

        </div>


        <div id="carouselFull" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/webbanner.png" alt="First slide">
                        <div class="carousel-caption d-md-block text-left">
                                <h1 class="title">IDEAS </h1>
                                <h1 class="title">INTO REALITY</h1>
                                <p class="ml-2">@fazartdesign</p>
                                <button type="button" class="btn-start"> START NOW!</button>
                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselFull" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselFull" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

    </header>

    <div class="container">
        <div class="row">
             <div class="col-sm-8">
                   <h4 class="font-grey mt-4">Why Our <span class="db-color"> Agency?</span></h4>
                   <h3 class="font-weight-bold font-grey mt-1">"Designed to provide information and stimulate interest, about your product or business."</h3>
                   <p class="font-grey mt-4 text-justify"><span class="font-weight-bold ">Fazart Design</span> is all about generate imagination, inspiring design with 'ideas into reality', and also exiciting creation, blessed with creative, innovative and talented imagination. Pan Fareast Studio evoked magical also impressive brilliant ideas with transformative results.</p>
             </div>

             <div class="col-sm-4 float-right ">
                 <img src="img/phonemockup2.png" class="img-fluid"/>
             </div>
        </div>
     </div>

    <div class="container-fluid box">
        <div class="container">
            <div class="card-deck">
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <div class="card mt-2">

                    <img src="img/1branding.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Branding</h5>
                        <p class="font-grey text-justify">It's about making and delivering a promise. We'll help define, position and deliver your brand, ensuring customers stay committed to you and your business.</p>
                        <button type="button" class="btn-view"><small class="font-weight-bold">View More>></small></button>
                    </div>
                </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <div class="card mt-2">
                    <img src="img/2Advertising.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Advertising</h5>
                        <p class="text-justify font-grey">Depending on the type of market you're in or are aiming for, our team or experts will help decide the most effective form of advertising for your needs.</p>
                        <button type="button" class="btn-view"><small class="font-weight-bold">View More>></small></button>
                    </div>
                </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <div class="card justify-content mt-2">
                    <img src="img/3Digital.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Digital</h5>
                        <p class="text-justify font-grey">We'll maintain an effective digital communication which will establish you as an authority within your industry through selected digital platforms.</p>
                        <button type="button" class="btn-view"><small class="font-weight-bold">View More>></small></button>
                    </div>
                </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <div class="card mt-2">
                    <img src="img/4illustration.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Illustration</h5>
                        <p class="text-justify font-grey">Get a custom illustration design for your business. Our professional designers are ready to ceate the perfect illustration for you</p>
                        <button type="button" class="btn-view mt-4"><small class="font-weight-bold">Vew More>></small></button>
                    </div>
                </div>
                </div>

            </div>
        </div>
    </div>


    <div class="container">
        <h4 class="text-center">DESIGN SERVICES</h4>
        <p class="text-center text-muted">Our vast variety of design services give you everything you need to start your business, with 100% SATISFACTION</p>

        <div class="row text-center">
                <div class="col-sm-12 mb-5">
                    <p><img src="img/ds/logo&brand_icon.png" class="ds-img"/></p>
                    <p>LOGO & BRAND IDENTITY PACK</p>
                    <button class="btn-popular mb-2"><i class="fas fa-star"></i>MOST POPULAR</button>
                    <p>Professional Logo, Business Card & Stationary to start your business.</p>
                </div>

                <div class="col-sm-4 ">
                    <p><img src="img/ds/logo_design_icon.png" class="ds-img"/></p>
                    <p >LOGO DESIGN</p>
                </div>


                <div class="col-sm-4">
                    <p><img src="img/ds/logo_design_icon.png" class="ds-img"/></p>
                    <p>LOGO & HOSTED WEBSITE</p>
                </div>

                <div class="col-sm-4">
                    <p><img src="img/ds/t_shirt_icon.png" class="ds-img"/></p>
                    <p>T-SHIRT DESIGN</p>
                </div>

                <div class="col-sm-4 ">
                    <p><img src="img/ds/web_design_icon.png" class="ds-img"/></p>
                    <p >WEB DESIGN</p>
                </div>

                <div class="col-sm-4">
                    <p><img src="img/ds/book_icon.png" class="ds-img"/></p>
                    <p >BOOK COVER DESIGN</p>
                </div>

                <div class="col-sm-4 ">
                    <p><img src="img/ds/brand_guide_icon.png" class="ds-img"/></p>
                    <p >BRAND GUIDE</p>
                </div>

        </div>

    </div>

    <div class="container-fluid text-center box2 p-0">
        <div class="container">

            <h5 class="text-light">Contact Us For More Info</h5>
            <p class="text-light">Whatsapp <span class="text-primary">+6011-6237-7620</span class="text-light"> or mail at <span></span><span class="text-primary">fazartd@gmail.com</span></p>
            <button class="btn-quote"> GET A FREE QUOTE</button>

        </div>

    </div>

  <div class="container justify-items text-center">

        <h1>Latest Projects</h1>
        <p>Browse through our impressive portfolio to see the projects we did for our clients.</p>
        <p>We wil be more than happy to showcase yours!</p>

        <div class="row">

                <div class="col-6">
                    <div class="card">
                        <img src="img/latest/1.jpg" class="card-img-top"/>
                    </div>
                </div>
                {{-- card-img-top-> make card stick at top --}}
                          <div class="col-3">

                                  <div class="card">
                                      <img src="img/latest/2.jpg" class="card-img-top"/>
                                  </div>


                                  <div class="card mt-4">
                                      <img src="img/latest/4.jpg" class="card-img-top"/>
                                  </div>

                        </div>
                        <div class="col-3">

                                  <div class="card">
                                      <img src="img/latest/3.jpg" class="card-img-top"/>
                                  </div>


                                  <div class="card mt-4">
                                      <img src="img/latest/5.jpg" class="card-img-top"/>
                                  </div>

                        </div>

                   </div>

      <div class="row mt-4">

              <div class="col-3">

                      <div class="card">
                          <img src="img/latest/6.jpg" class="card-img-top"/>
                      </div>


                      <div class="card mt-4">
                          <img src="img/latest/8.jpg" class="card-img-top"/>
                      </div>

            </div>
            <div class="col-3">

                      <div class="card">
                          <img src="img/latest/7.jpg" class="card-img-top"/>
                      </div>


                      <div class="card mt-4">
                          <img src="img/latest/9.jpg" class="card-img-top"/>
                      </div>

            </div>
            <div class="col-6">
                      <div class="card ">
                          <img src="img/latest/10-2.jpg" class="card-img-top" alt="...">
                    </div>

          </div>
     </div>
        <button class="btn-portfolio mt-5"><small class="font-weight-bold"> VIEW PORTFOLIO</small></button>

  </div>

  <div class="container-fluid jumbotron p-0">
      <div class="container text-center">

            <h3>Make Your Business Shine - Show The World Your</h3>
            <h3> Business Potential TODAY!</h3>
            <p> Connect with Malaysia's best digital marketing, branding and designing service.</p>

            <button type="button" class="btn-warning text-light m-1">EMAIL</button>
            <button type="button" class="btn-warning text-light m-1">GET A FREE QUOTE</button>
            <button type="button" class="btn-warning text-light m-1">WHATSAPP</button>
      </div>

  </div>

  <div class="container">
      <div class="row">
          <div class="col-md-8 paratop">

              <h1>Strategic Partnership</h1>
              <p class="font-grey text-justify">Through channel partnerships, businesses move their relationships beyond one-off buying and selling transactions
                and develop methods of collaboration to create more stable and efﬁcient supply chains that lead to increased sales.
                Channel partnership agreements allow for the open sharing of sales information, pricing data and best sales strategies.
                For example, just in time inventory allows retailers to communicate in real-time with their suppliers to maintain inventory of hot items.</p>
          </div>

          <div class="col-md-4">
                <img src="img/strategicpartner.png" class="sp-img"/>
         </div>
      </div>

  </div>

    <div class="container-fluid text-center box4 p-0">
       <div class="container">
            <h2 class="text-light">Our Client</h2>
            <p class="text-light">We love to boast about our sustaining and rewarding relationship with our</p>
            <p class="text-light">esteemed clientele. Come, be a part of our showcase.</p>

            <div class="card-deck mt-5">
                    <div class="card img-fluid">

                      <div class="card-body">
                            <img class="card-img-top small-img" src="img/c11.png" alt="Card image cap">


                            <img class="card-img-top small-img" src="img/c12.png" alt="Card image cap">


                            <img class="card-img-top small-img" src="img/c13.png" alt="Card image cap">
                      </div>

                    </div>

                    <div class="card img-fluid">

                      <div class="card-body">
                            <img class="card-img-top small-img" src="img/c21.png" alt="Card image cap">

                            <img class="card-img-top small-img" src="img/c22.png" alt="Card image cap">

                            <img class="card-img-top small-img" src="img/c23.png" alt="Card image cap">
                      </div>
                    </div>


                    <div class="card img-fluid">

                      <div class="card-body">
                            <img class="card-img-top small-img" src="img/c31.png" alt="Card image cap">
                            <img class="card-img-top small-img" src="img/c32.png" alt="Card image cap">
                            <img class="card-img-top small-img" src="img/c33.png" alt="Card image cap">
                      </div>
                    </div>
                    <div class="card img-fluid">

                        <div class="card-body">
                            <img class="card-img-top small-img" src="img/c41.png" alt="Card image cap">
                            <img class="card-img-top small-img" src="img/c42.png" alt="Card image cap">
                            <img class="card-img-top small-img" src="img/c43.png" alt="Card image cap">
                        </div>
                    </div>

             </div>


       </div>
    </div>

    <div class="container-fluid box5 text-light">
        <div class="container">
            <div class="row">

                <div class="col-sm">
                    <div class="mb-4">
                            <img src="img/logo2.png"/>
                    </div>

                    <div class="d-flex flex-row">
                        <div class="p-1"><img src="img/addressicon.png" class="tl-icon"/></div>
                        <div class="p-2 small">D-13A-03A, Menara Mitraland, Jalan PJU5/1, Kota Damansara, 47810, Petaling Jaya, Selangor.</div>
                    </div>

                    <div class="d-flex flex-row">
                            <div class="p-1 mb-1"><img src="img/telephoneicon.png" class="tl-icon"/></div>
                            <div class="p-2 small">+6 03-7621-1880</div>
                    </div>

                    <div class="d-flex flex-row">
                        <div class="p-1 mb-1"><img src="img/mobileicon.png" class="tl-icon"/></div>
                        <div class="p-2 small">+6 011-6237-7620</div>
                    </div>

                    <div class="d-flex flex-row">
                        <div class="p-1 mb-1"><img src="img/emailicon.png" class="tl-icon"/></div>
                        <div class="p-2 small">fazartd@gmail.com</div>
                    </div>

                    <div class="mt-3">
                        <a><img src="img/sm1.png" class="sm-img"/></a>
                        <a><img src="img/sm2.png" class="sm-img"/></a>
                        <a><img src="img/sm3.png" class="sm-img"/></a>
                        <a><img src="img/sm4.png" class="sm-img"/></a>
                        <a><img src="img/sm5.png" class="sm-img"/></a>
                        <a><img src="img/sm6.png" class="sm-img"/></a>
                    </div>

                </div>


                <div class="col-sm mt-3">
                    <h6 class="text-bottom">START YOUR PROJECT</h6>
                    <div class="small mt-5">
                        <p>Logo Design</p>
                        <p>Branding</p>
                        <p>Company Profile</p>
                        <p>Corporate Website</p>
                        <p>Ecommerce Website</p>
                        <p>Event/Booth</p>
                    </div>
                </div>

                <div class="col-sm mt-3">
                    <h6 class="text-bottom">ADVERTISING</h6>
                    <div class="small mt-5">
                        <p>Print Design</p>
                        <p>Brochure Design</p>
                        <p>Stationery Design</p>
                        <p>Billboard / Digital Billboard</p>
                        <p>Packaging Design</p>
                        <p>Digital Publishing</p>
                    </div>
                </div>
                <div class="col-sm mt-3">
                    <h6 class="text-bottom">DIGITAL MARKETING</h6>
                    <div class="small mt-5">
                        <p>Email Marketing</p>
                        <p>Display Advertising</p>
                        <p>Social Media Advertising</p>
                        <p>Social Media Management</p>
                        <p>Social Media Marketing</p>
                        <p>Website Design & Development</p>
                    </div>
                </div>
                <div class="col-sm mt-3">
                    <h6 class="text-bottom">OUR COMPANY</h6>
                    <div class="small mt-5">
                        <p>About Us</p>
                        <p>Services</p>
                        <p>Pricing</p>
                        <p>Portfolio</p>
                        <p>Contact Us</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
@include('components.footer')
</html>
