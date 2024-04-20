@include('admin.components.header')

<body class="g-sidenav-show   bg-gray-100">
    {{-- side --}}
@include('admin.components.sidebar')
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
   @include('admin.components.nav')
    <!-- End Navbar -->

    {{-- cards --}}
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <a href="{{route('skill.index')}}">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Testimonials</p>
                  
                  </div>
                </a>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                    <i class="fa fa-graduation-cap text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <a href="{{route('education.index')}}">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Socials</p>
                  
                  </div>
                </a>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                    <i class="fa fa-graduation-cap text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <a href="{{route('work.index')}}">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Portfolio</p>
                    
                  </div>
                </a>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                    <i class="fa fa-briefcase text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
     
    {{-- footer --}}
    @include('admin.components.subfooter')
    </div>
    {{-- end cards --}}
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Display Setting</h5>
         
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      {{-- side --}}
      @include('admin.components.side')
      </div>
    </div>
  </div>
  @include('admin.components.footer')
</body>

</html>