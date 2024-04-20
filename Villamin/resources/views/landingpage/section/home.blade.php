<section class="hero d-flex flex-column justify-content-center align-items-center" id="intro">

    <div class="container">
       <div class="row">
            @foreach ($about as $item )
                
            
             <div class="mx-auto col-lg-5 col-md-5 col-10">
                 <img src="{{asset('upload/'.$item->image)}}" class="img-fluid" alt="Josh Resume HTML">
             </div>

             <div class="d-flex flex-column justify-content-center align-items-center col-lg-7 col-md-7 col-12">
                <div class="hero-text text-center"> <!-- Added text-center class for text alignment -->
            
                    <h1 class="hero-title">👋 I'm {{$item->first}}, your friendly {{$item->role}}.</h1>
            
                    <a href="{{$item->email}}" class="hero-title email-link">
                        Email: {{$item->email}}
                    </a>
            
                </div>
            </div>
            
               @endforeach
       </div>
   </div>
</section>