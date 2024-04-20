<section class="contact section-padding pt-0" id="contact">
    <div class="container">
      <div class="row">

        <div class="col-lg-6 col-md-6 col-12">
          <form action="#" method="get" class="contact-form webform"  role="form">
              
              <div class="form-group d-flex flex-column-reverse">
                  <input type="text" class="form-control" name="cf-name" id="cf-name" placeholder="Your Name">

                  <label for="cf-name" class="webform-label">Full Name</label>
              </div>

              <div class="form-group d-flex flex-column-reverse">
                  <input type="email" class="form-control" name="cf-email" id="cf-email" placeholder="Your Email">

                  <label for="cf-email" class="webform-label">Your Email</label>
              </div>

              <div class="form-group d-flex flex-column-reverse">
                  <textarea class="form-control" rows="5" name="cf-message" id="cf-message" placeholder="Your Message"></textarea>

                  <label for="cf-message" class="webform-label">Message</label>
              </div>

              <button type="button" class="form-control" id="submit-button"  onclick="sendMail()">Send</button>
          </form>
          
        </div>
            
                
        @foreach ($about as $i )
          <div class="mx-auto col-lg-4 col-md-6 col-12">
              <h3 class="my-4 pt-4 pt-lg-0">Contact Me:</h3>

              <p class="mb-1">Contact Number: {{$i->number}}</p>
              <p class="mb-1">Email Address: <a href="mailto:{{$i->email}}" class=""><strong>{{$i->email}}</strong></a></p>


              <p>
                  <a href="#about">
                      Josh's Resume
                  <i class="fas fa-arrow-right custom-icon"></i>
                  </a>
              </p>
              @endforeach
              <ul class="social-links mt-2">
                @foreach ($education as $item )

                  <li><a href="{{route('about.link', ['link'=>$item->link,'target'=>$item->target])}}" target="_blank" rel="noopener" class="{{$item->icon}}"></a></li>                          
                  @endforeach
                </ul>
      </div>
    </div>
   
    
  </section>

  {{-- https://www.facebook.com/Just.Joshua.26/ 
    https://www.instagram.com/_itsjoshv/
    https://twitter.com/i/flow/signup?lang=en
    https://github.com/JoshvVv/
    https://www.youtube.com/channel/UCMDaIvWYEsOjg4tmyINFXwQ--}}