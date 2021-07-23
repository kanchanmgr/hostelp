@extends('frontend.templates.app')
@section('content')
    
    <!-- Carousel -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" style="max-height: 83vh;">
          <div class="carousel-item active " style="max-height: 83vh;">
            <img src="https://images.pexels.com/photos/206172/pexels-photo-206172.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item"style="max-height: 83vh;">
            <img src="https://images.pexels.com/photos/164595/pexels-photo-164595.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item"style="max-height: 83vh;">
            <img src="https://images.pexels.com/photos/2898170/pexels-photo-2898170.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
    </div>

   
        <div class="container">
    
            {{-- Introduction --}}
            <div class="row my-4">
                <div class="row">
                    <div class="col-md">
                        <h1 class="text-center text-bold">Welcome to <span class="text-white" style="background-color:#4a4e69 ;">The Pathivara Girls Hostel </span> </h1>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias amet pariatur sint excepturi dolorum perferendis iusto incidunt voluptatem fugit architecto mollitia iste, quos laborum quibusdam qui quas eveniet deleniti. Voluptatum. Lorem, ipsum dolor sit amet consectetur adipisicing elit. In delectus tempora dolorum alias nesciunt soluta saepe tempore voluptas odit fugiat. Placeat rerum sint cum quas porro officiis adipisci ex sit aliquam provident voluptatem distinctio et voluptatibus rem voluptate tempora maxime tempore nostrum repellat ipsam recusandae tenetur, dicta nobis? Eum, debitis.</p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias amet pariatur sint excepturi dolorum perferendis iusto incidunt voluptatem fugit architecto mollitia iste, quos laborum quibusdam qui quas eveniet deleniti. Voluptatum. Lorem, ipsum dolor sit amet consectetur adipisicing elit. In delectus tempora dolorum alias nesciunt soluta saepe tempore voluptas odit fugiat. Placeat rerum sint cum quas porro officiis adipisci ex sit aliquam provident voluptatem distinctio et voluptatibus rem voluptate tempora maxime tempore nostrum repellat ipsam recusandae tenetur, dicta nobis? Eum, debitis.</p>
                        
                    </div>
        
                </div>
            </div>
            {{-- main --}}
            <main style="background-color:#adb5bd" class="mt-4">
                
                    <h1 class="text-center text-bold text-uppercase"   style="color:#4a4e69" data-aos="fade-up">Our Rooms</h1>
                    <div class="row">
                        
                        <div class="col-md-4">
                            <a href=""data-aos="zoom-in-down"> <img src="https://images.pexels.com/photos/2029719/pexels-photo-2029719.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" class="img-thumbnail"></a> 
                        </div>
                        <div class="col-md-4">
                            <a href=""data-aos="zoom-in-down"> 
                                <img src="https://images.pexels.com/photos/2029687/pexels-photo-2029687.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" class="img-thumbnail">
                            </a> 
                        </div>
                        <div class="col-md-4">
                            <a href=""data-aos="zoom-in-down"> 
                                <img src="https://images.pexels.com/photos/2029698/pexels-photo-2029698.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" class="img-thumbnail">
                            </a> 
                        </div>


                    

                    </div>
                    <div class="row " >
                        <div class="col-md-11"></div>
                        <div class="col-md-1"><a class="text-decoration-none " href="" style="color: #4a4e69;" >More<i class="fas fa-arrow-circle-right"></i></a></div>

                        
                    </div>
                
            </main>

            {{-- About US --}}
            <div style="background-color:#adb5bd">
                <div class="row my-4" >
                    <div class="col-md-8 "style="background-color:#adb5bd">
                        <h1 class="text-center text-bold text-uppercase "   style="color:#4a4e69"><span class="text-white" style="background-color:#4a4e69 ;"data-aos="fade-up">Get to know Us </span> </h1>
                        <p data-aos="fade-up">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic alias nobis, laborum deleniti odit similique ullam id optio expedita dolorum magni ratione unde accusamus, sint maiores nam ex enim explicabo atque, officia at ea ducimus rem! Esse delectus a beatae.</p>
        
                    </div>
        
                    <div class="col-md-4 my-2">
                        <img src="https://images.pexels.com/photos/1138903/pexels-photo-1138903.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" data-aos="fade-up" class="img-thumbnail">
        
                    </div>
                </div>

            </div>
        </div>
        
        
        

        <div class="py-5 text-white" style="background-image: url(https://images.pexels.com/photos/1145257/pexels-photo-1145257.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940); background-repeat: no-repeat; background-size: cover; background-position: center; background-attachment: fixed;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="d-flex flex-column justify-content-center align-items-md-center">
                            <h3 class="text-uppercase fs-lg-3 fs-sm-6">Our Facilites</h3>
                            
                        </div>
                    </div>
                </div>
    
                <div class="row justify-content-md-center mt-5">
                  <div class="col-md-4">
                    <ul>
                      <li>Electricity</li>
                      <li>Library</li>
                      <li>Laundry</li>
                    </ul>
                  </div>
    
                  <div class="col-md-4">
                    <ul>
                      <li>Wi-Fi</li>
                      <li>Sports</li>
                    </ul>
                  </div>
                </div>
      
            </div>
        </div>

        <!-- Map -->
        <div>
            <div class="container " >
                <h1 >Our Location</h1>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1780.3352503414064!2d87.28236875572514!3d26.81861837059179!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef41c138bde423%3A0x1b900ac20e0f4549!2sPathubhara%20hostel!5e0!3m2!1sen!2snp!4v1613331394034!5m2!1sen!2snp" width="1100" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          
            </div>
        </div>


    <footer style="background: #4a4e69;">
        <div class="container">
            <div class="row pt-4">
                <div class="col-md-5 text-white">
                  <h1 class="fs-5">About us</h1>
                  <p style="font-size: .8rem;" class="fw-light">Pathivara Girls Hostel is prestigious name since 2071 BS. The friendly environment and best hospitality is the main theame that we stand for. </p>
                </div>
                <div class="col-md-3 text-white">
                  <h1 class="fs-5">Address</h1>
                  <address style="font-size: .8rem;" class="fw-light">
                    Dharan-1,Siddicharan Marga<br>
                    Sunsari, Nepal <br>
                    Tel: 977-9819392227, <br>
                    Mobile:9819392227 / 9819392227 <br>
                    Email : PathivaraGirls@gmail.com <br>
                  </address>
                </div>
      
                <div class="col-md-2 text-white">
                  <h1 class="fs-5">Menu</h1>
                    <div class="d-flex flex-column" style="font-size: .8rem;">
                      <a href="https://www.termsfeed.com/live/89dcfffa-4462-4e33-bc1b-425692af721d" class="text-decoration-none text-white fw-light" target="_blank">Terms &amp; Condition</a>
                      <a href="https://www.privacypolicygenerator.info/live.php?token=U3I0UFEV5MrZeZAitmMBkS3QC9uOniwu" class="text-decoration-none text-white fw-light" target="_blank">Privacy &amp; Policy</a>
                      <a href="/gallery" class="text-decoration-none text-white fw-light">Gallery</a>
                      <a href="/contact" class="text-decoration-none text-white fw-light">Contact</a>
                    </div>
                </div>
      
                <div class="col-md-2 text-white">
                  <h1 class="fs-5">Payment Option</h1>
                  <img src="https://dharankitchen.com/img/debitcard.png" alt="" width="120">
                </div>
              </div>
            
      
            <div class="row">
              <div  style="background-color:#adb5bd" class="col  text-center text-white fw-light">
                  Powered by: <a href="http://www.ITGirls.com" class="text-white text-decoration-none fw-bold">IT Girls</a> | Dharan, Sunsari Nepal
              </div>
            </div>
        </div>
          
   
    </footer>

    <!-- JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
      AOS.init({
        delay: 100,
        
      });
    </script>

@endsection