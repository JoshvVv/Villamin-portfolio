<section class="about section-padding" id="about">
    <div class="container">
        <div class="row">
            @foreach ($about as $i )
                
           
            <div class="col-lg-6 col-md-6 col-12">
                <h3 class="mb-4">This is {{$i->first}} Resume:</h3>

                <p>{{$i->description}}</p>

                <ul class="mt-4 mb-5 mb-lg-0 profile-list list-unstyled">
                    <li><strong>Full Name :</strong> {{$i->first}} {{$i->middle}}. {{$i->last}} </li>

                    <li><strong>Date of Birth:</strong> {{$i->day}} {{$i->month}} {{$i->year}}</li>

                    <li><strong>Website :</strong> {{$i->site}}</li>

                    <li><strong>Email :</strong> {{$i->email}}</li>
                </ul>
            </div>

            <div class="col-lg-5 mx-auto col-md-6 col-12">
                <img src="{{asset('upload/'.$i->image)}}" class="about-image img-fluid" alt="Josh Resume">
            </div>

        </div>
        <div class="row about-third">
            <div class="col-lg-4 col-md-4 col-12">
            <h3>Skills and Strengths:</h3>
            <p>{{$i->description1}}</p>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
            <h3>Professional Philosophy:</h3>
            <p>{{$i->description2}}</p>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
            <h3>Achievements and Awards:</h3>
            <p>{{$i->description3}}</p>
            </div>
        </div>
    </div>
    @endforeach
</section>