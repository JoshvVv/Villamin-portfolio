<section class="testimonials section-padding" id="testimonials">
    <div class="container">
         <div class="row">

              <div class="col-12">
                  <h3 class="mb-5 text-center">Colleagues and Associates Feedback</h3>

                  <div class="owl-carousel owl-theme" id="testimonials-carousel">
                    @foreach ($skill as $i)
                        <div class="item">
                            <div class="testimonials-thumb d-flex align-items-center"> <!-- Added align-items-center class -->
                                <div class="testimonials-image">
                                    <!-- Adjusted the max-width of the image -->
                                    <img src="{{ asset('upload/'.$i->image) }}" class="img-fluid" alt="testimonials image" style="max-width: 100px;">
                                </div>
                
                                <div class="testimonials-info">
                                    <!-- Added margin-bottom to the <p> tag -->
                                    <p style="margin-bottom: 10px;">"{{ $i->description }}"</p>
                
                                    <h6 class="mb-0">{{ $i->name }}</h6>
                                    <span>{{ $i->role }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                     
                  </div>

              </div>

         </div>
    </div>
</section>