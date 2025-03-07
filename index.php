<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mop Limo Services LLC.</title>
    <meta name="description" content="Car hire services with Limousine, Airport pickup,touring services,wedding services,cities and neigboring states services.">
    <link rel="icon" type="image/x-icon" href="/images/mop-logo.png">

    <!--------------------Bootstrap CSS---------------------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
       
       <!------------------- JS Library---------------------------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
       integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
     <!---------JQuary Library-------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>  
       
       <!----------------------------------Custom CSS------------------------------->
    <link rel="stylesheet" href="css/icon-font.css">   
    <link rel="stylesheet" href="css/style.css">

   
    <!----------------Boostrap Icons--------------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    
    <!--------Google Fonts------------------->
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>

    <!------------------- FONT AWESONE ICONS CDN----------------------------------->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity=
     "sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">
    <header id="header" class="header fixed-top">
        
      <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
          <a class="navbar-brand" href="index.html"><img class="site-logo" src="images/mop-logo.png" alt="site-logo"></a>
          
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
           data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvas" aria-expanded="false" 
           aria-label="Toggle navigation">
            <span class=" bi bi-list-nested"></span>
          </button>

          <div class="offcanvas offcanvas-end  bg-light" id="navbarOffcanvas"
        tabindex="-1" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title text-black" id="offcanvasNavbarLabel">Mop Limo Services</h5>
          <button type="button" class="btn-close btn-close-black text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
          <div class=" offcanvas-body ">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link" href="#section1">Home</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#section2">About</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#section3">Services</a>
              </li>

              </li>
              <li class="nav-item">
                <a class="nav-link" href="#section4">Testimonials</a>
              </li>


            
              <li class="nav-item">
                <a class="nav-link" href="#section5">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
    </header>



  <div id="section1" class="home">
    <!-- <div class="container-fluid bg-dark"> -->
      <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1">
        <div class="col">
        <div id="carouselExampleDark" class="carousel carousel-fade" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <img src="images/mop1 (2).jpeg" class="d-block w-100 carousel-item__img img-fluid" alt="slide1">
              <div class="carousel-caption d-md-block">
                <h1 class="carousel-caption__header">MOP LIMO SERVICES</h1>
                <p class="carousel-caption__description">Redefining the standard of luxury transportation.</p>
                <a class="carousel-caption__btn  btn btn--orange" href="mailto:moplimoservices@gmail.com">Request A Quote</a>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="images/mop6 (2).jpeg" class="d-block w-100  carousel-item__img img-fluid" alt="slide2">
              <div class="carousel-caption d-md-block">
                <h1 class="carousel-caption__header">MOP LIMO SERVICES</h1>
                <p class="carousel-caption__description">We prioritize the satisfaction of our clients above anything else.</p>
                <a class="carousel-caption__btn  btn btn--orange" href="mailto:moplimoservices@gmail.com">Request A Quote</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/mop4 (2).jpeg" class="d-block w-100 carousel-item__img img-fluid" alt="slide3">
              <div class="carousel-caption d-md-block">
                <h1 class="carousel-caption__header">MOP LIMO SERVICES</h1>
                <p class="carousel-caption__description"> From customizing routes to accommodating special requests.</p>
                <a class="carousel-caption__btn  btn btn--orange" href="mailto:moplimoservices@gmail.com">Request A Quote</a>
                
              </div>
              
            </div>
            
          </div>
            
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
       
       
        </div>  
    </div>
  </div>

   
  
  
  <div id="section2" class="section-about bg-black">
    <div class="container-fluid justify-content-center  px-2">
      <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2 gy-5">
        <div class="col">
          <div class="card bg-black">
            <div class="card-body">
              <h2 class="section-about--heading  text-center  u-margin-top-medium u-margin-bottom-small">About us</h2>
              <p class="section-about--paragraph1 justify-content-evenly">At Mop Limo Service LLC, we pride ourselves on 
                delivering unparalleled luxury transportation experiences tailored to meet the unique needs of our 
                esteemed clientele. With a steadfast commitment to excellence, reliability, and impeccable service, 
                we have established ourselves as a premier provider of luxury transportation solutions in the industry.</p>
              
                <h3 class="section-about--heading  text-center  u-margin-top-medium u-margin-bottom-small">Our Mission</h3>
                <p class="section-about--paragraph1 justify-content-evenly"> Our mission at Mop Limo Service LLC is to redefine
                   the standards of luxury transportation by offering impeccable service, unparalleled comfort, and utmost
                    reliability to our clients. We strive to exceed expectations with every ride, ensuring that each journey
                     with us is a seamless and unforgettable experience.</p>  

                <h3 class="section-about--heading  text-center  u-margin-top-medium u-margin-bottom-small">Our Vision</h3>
                <p class="section-about--paragraph1 justify-content-evenly"> Mop Limo Services LLC is dedicated to redefining 
                  urban mobility with a commitment to exceptional, reliable, and luxurious transportation experiences, ensuring 
                  that every journey with us sets a new standard for comfort and customer satisfaction.</p>  

                <h3 class="section-about--heading  text-center  u-margin-top-medium u-margin-bottom-small">Why choose us </h3>
                <ul class="section-about--paragraph1 justify-content-evenly"> 
                  <li>Luxurious Fleet: Our fleet comprises a selection of meticulously maintained luxury vehicles, ranging 
                    from sedans and SUVs to stretch limousines, ensuring that we have the perfect vehicle for every occasion</li> 
                  
                  <li>Professional Chauffeurs: Our chauffeurs are not only highly skilled drivers but also courteous, knowledgeable, 
                      and committed to providing the highest level of service to our clients.</li>
                  
                  <li>24/7 Availability: We understand that travel plans can change at a moment's notice, which is why we offer
                         round-the-clock availability to accommodate any schedule or request.</li>
                  
                  <li>Personalized Service: From customizing routes to accommodating special requests, we pride ourselves on 
                      offering personalized service that caters to the individual needs of each client.</li>  

                  <li>Competitive Pricing: Despite offering premium luxury transportation services, we strive to keep our rates
                         competitive, ensuring that our clients receive exceptional value for their investment.</li>

                  <li>At Mop Limo Service LLC, we are more than just a transportation company; we are your trusted partner in 
                          luxury travel. Experience the difference with us and elevate your journey to new heights of comfort, style,
                           and sophistication</li>
                
                </ul> 

            </div>
          </div>
           
        </div>
        <div class="col">
          <div class="card bg-black">
            <div class="card-body section-about__img">
              <img class="section-about--img img-fluid u-margin-top-medium " src="images/mop17 (2).jpeg" alt="danny-driver">

              <h3 class="section-about--heading  text-center  u-margin-top-medium u-margin-bottom-small">Core Values</h3>
                <ul class="section-about--paragraph1 justify-content-evenly"> 
                  <li>Excellence: We are dedicated to delivering excellence in every aspect of our service, 
                    from the punctuality of our drivers to the immaculate condition of our vehicles.</li> 
                  <li>Reliability: Clients can trust us to provide reliable and efficient transportation solutions,
                     ensuring they arrive at their destination safely and on time, every time</li>
                  <li>Customer Satisfaction: We prioritize the satisfaction of our clients above all else, 
                    going above and beyond to meet their needs and exceed their expectations.</li>
                  <li>Professionalism: Our team consists of highly trained professionals who are committed to 
                    upholding the highest standards of professionalism in every interaction.</li>  
                
                </ul> 


              <a href="mailto:moplimoservices@gmail.com" class="  btn btn--orange">Request A Quote</a>
              
            </div>
          </div>
          

          
        </div>
      </div>
      
    </div>
</div>
      


   <div id="section3" class="section-services   text-light">
    <div class="p-3 bg-black"><h2 class="section-services--heading  text-center  u-margin-top-big  u-margin-bottom-medium">
      Our Services
    </h2>
    <div class="container overflow-hidden">
      <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-5 row-cols-xl-5 gx-5">
        <div  id="section-services" class="col bg-black">
          <div class="card">
            <img src="images/mop1 (2).jpeg" class="card-img-top card-image" alt="service-photo1">
            <div class="card-body bg-black">
              <h5 class="section-services--heading2">Airport Transfers</h5>
              <p class="section-services--paragraph1"> Start or end your journey with
                 ease and comfort with our reliable airport transfer services.</p>
            </div>
          </div>
        </div>
        <div id="section-services" class="col">
          <div class="card">
            <img src="images/mop12 (2).jpeg" class="card-img-top card-image" alt="service-photo2">
            <div class="card-body bg-black">
              <h5 class="section-services--heading2">Corporate Transportation</h5>
              <p class="section-services--paragraph1"> Impress your clients or colleagues
                 with our sophisticated corporate transportation solutions, perfect for business meetings, conferences, and events</p>
            </div>
          </div>
        </div>
        <div id="section-services" class="col">
          <div class="card">
            <img src="images/mop14 (2).jpeg" class="card-img-top  card-image " alt="service-photo3">
            <div class="card-body bg-black">
              <h5 class="section-services--heading2">Special Events </h5>
              <p class="section-services--paragraph1">Whether it's a wedding, prom, anniversary, 
                or any other special occasion, we provide elegant transportation to make your event truly memorable.

              </p>
            </div>
          </div>
        </div>

        <div id="section-services" class="col">
          <div class="card">
            <img src="images/mop8-(2).jpg" class="card-img-top card-image" alt="service-photo4">
            <div class="card-body bg-black">
              <h5 class="section-services--heading2">City Tours</h5>
              <p class="section-services--paragraph1"> Explore the sights and sounds of the city in 
                style with our personalized city tour packages, complete with knowledgeable chauffeurs and luxurious vehicles</p>
            </div>
          </div>
        </div>
      
        <div id="section-services" class="col">
          <div class="card">
            <img src="images/mop3 (2).jpeg" class="card-img-top card-image" alt="service-photo3">
            <div class="card-body bg-black">
              <h5 class="section-services--heading2">VIP Transportation</h5>
              <p class="section-services--paragraph1"> For those who demand the utmost in luxury and exclusivity,
                 our VIP transportation services offer a bespoke experience tailored to your unique preferences.</p>
            </div>
          </div>
        </div>
      
     
     
      </div>
    </div>
  </div>
</div>



  <div id="section4" class="section-testimonial"> <div class="p-3 bg-black">
    <h2 class="section-testimonial--heading  text-center  u-margin-top-big  u-margin-bottom-small">
    What 0ur Clients Say &darr;</h2>

    <div class="container mt-5">
      <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner text-center">
         
          <div class="carousel-item active">
            <div class="carousel-item__testimonial text-light">
              <p>"Exceptional service! Mop Limo Services made my travel experience seamless and luxurious. 
                From the moment I booked until the end of my journey, their professionalism and attention 
                to detail were evident. The chauffeur arrived promptly, the vehicle was immaculate, 
                and the ride was smooth. Highly recommend Mop Limo for any transportation needs!"</p>
              <h4 class="carousel-item__header">- Rosemary Elliot</h4>
            </div>
          </div>
          
          <div class="carousel-item text-light">
            <div class="carousel-item__testimonial">
              <p>I recently used Mop Limo Services for a special event, and I couldn't be happier with my choice.
                 The team was incredibly accommodating, making sure every detail was taken care of to ensure a
                  memorable experience. The chauffeur was courteous and knowledgeable, providing top-notch service
                   throughout the evening. Thank you, Mop Limo, for exceeding my expectations!"</p>
              <h4 class="carousel-item__header">- Jane Smith</h4>
            </div>
          </div>
         
          <div class="carousel-item text-light">
            <div class="carousel-item__testimonial">
              <p>"Absolutely fantastic service! Mop Limo Services went above and beyond to make my wedding day extra special. 
                From coordinating multiple pick-up locations to ensuring timely arrivals, they handled everything flawlessly.
                 The fleet of vehicles was impressive, and the attention to detail was unmatched. Thank you for making our day
                  truly unforgettable!"</p>
              <h4 class="carousel-item__header">- Michael Johnson</h4>
            </div>
          </div>
         
          <div class="carousel-item text-light">
            <div class="carousel-item__testimonial">
              <p>"I've used Mop Limo Services for both business and leisure travel, and they consistently deliver excellence. 
                Their fleet is luxurious and well-maintained, their chauffeurs are professional and courteous, and their customer 
                service is outstanding. Whether I'm heading to the airport or attending a corporate event, I trust Mop Limo to provide
                 reliable and first-class transportation every time. Highly recommended!"</p>
              <h4 class="carousel-item__header">- Emily Davis</h4>
            </div>
          </div>

          <div class="carousel-item text-light">
            <div class="carousel-item__testimonial">
              <p>"I've used Mop Limo Services for both business and leisure travel, and they consistently deliver excellence. Highly recommended!"</p>
              <h4 class="carousel-item__header">- John Billy</h4>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    
    

  </div>


  <div id="section5" class="section-contact  ">
    <div class="p-2 bg-black"><h4 class="section-contact--heading3 text-center u-margin-top-big">
      GET IN TOUCH</h4></div>
    <div class="container ">
      <div class="row g-5">
        <div id="section-contact-info" class="col-sm-4">
         <div class="p-2 section-contact-info u-center-text ">
          <i class="section-contact__icon  icon-basic-mail-open-text "></i>
          <a class="section-contact__iink text-decoration-none" href="mailto:"><p class="section-contact__email">moplimoservices@gmail.com</p>
          </a>
          <i class="section-contact__icon  icon-basic-smartphone "></i>
          <p class="section-contact__phone">#(312) 358-4780</p>



         
         </div>
        </div>
        
        <div id="section-contact-form" class="col-sm-8 justify-content-center">
          <div class="section-contact-form p-2 ">
            <form action="process_form.php" method="post" id="contactForm" class="form"> 
              <div class="u-margin-bottom-medium">
                  <h2 class="heading-form">
                      Write to us few lines
                  </h2>
              </div>


              <?php if (isset($_SESSION['email_message'])): ?>
                    <div id="success-message" class=" success-msg alert alert-<?php echo $_SESSION['email_message_type']; ?> mt-3">
                        <?php 
                        echo $_SESSION['email_message']; 
                        unset($_SESSION['email_message']);
                        unset($_SESSION['email_message_type']);
                        ?>
                    </div>
                <?php endif; ?>

                <script type="text/javascript">
        function onSubmit(token) {
            document.getElementById("contactForm").submit();
        }
    </script>
              

              
                <div class="form__group">
                    <input type="text" class="form__input" placeholder="Full name" id="name" name="name" required>
                    <label for="name" class="form__label"> Full Name</label>
                </div>


                <div class="form__group">
                    <input type="phone" class="form__input" placeholder="Phone" id="phone" name="phone" required>
                    <label for="phone" class="form__label"> Telephone</label>
                </div>


                <div class="form__group">
                  <input type="email" class="form__input" placeholder="Email" id="email" name="email" required>
                  <label for="email" class="form__label"> Email Address</label>
              </div>

              <div class="form__group">
                <textarea class="form__textarea" placeholder="Write your message here " id="message" name="message" rows="5" required></textarea> </textarea>
                <label for="message" class="form__label"> Your Message</label>
            </div>



               

                   
                <div class="form__group ">
                  <button class=" btn btn-primary  section-form__submit g-recaptcha" data-sitekey="6LfwHx4qAAAAAD1YaFK2cyQBO_L2bjnYIgRQs-yk" data-callback="onSubmit">Submit &rAarr;</button>
                </div>

                <p id="response" class="message"></p>
           
             
              

              

          </form>  
          
        </div>
           
      </div>

        
      </div>
    </div>
  </div>

  <div class="section-footer bg-dark">
     <div class="container">
         <div id="section-footer" class="col-sm-12">
          <p class="section-footer--copyright  text-center "> &copy; 2024. Mop Limo Services LLC. All Right Reserverd</p>
         </div>
     </div>
  </div>


   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>   
   <script src="js/script.js"></script>
</body>
</html>
