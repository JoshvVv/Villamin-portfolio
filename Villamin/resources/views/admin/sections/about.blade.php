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
      <h1>About Info</h1>
      <div class="row">
        @foreach ($about as $item)
        <form action="{{route("about.update", ['id'=>$item->id])}}"  enctype="multipart/form-data" method="POST" class="row g-3">
          @csrf
          @method('put')
          <div class="input-group">
            <<span class="input-group-text bg-dark text-white">First name</span>
            <input type="text" aria-label="First name" class="form-control" value="{{$item->first}}" name="first">
            <span class="input-group-text bg-dark text-white">Middle name</span>
            <input type="text" aria-label="First name" class="form-control" name="middle" value="{{$item->middle}}">
            <span class="input-group-text bg-dark text-white">Last name</span>
            <input type="text" aria-label="Last name" class="form-control" name="last" value="{{$item->last}}">
          </div>

          <div class="col-12">
              <label for="exampleFormControlTextarea1" class="form-label">Description</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"  placeholder="{{$item->description}}">{{$item->description}}</textarea>
          </div>

          <div class="input-group">
            <span class="input-group-text bg-dark text-white">month</span>
            <input type="text" aria-label="First name" class="form-control" name="month" value="{{$item->month}}">
            <span class="input-group-text bg-dark text-white">Day</span>
            <input type="text" aria-label="First name" class="form-control" name="day" value="{{$item->day}}">
            <span class="input-group-text bg-dark text-white">Year</span>
            <input type="text" aria-label="Last name" class="form-control" name="year" value="{{$item->year}}">
          </div>
          <div class="col-md-2">
            <label for="inputAddress2" class="form-label">Web Site</label>
            <input type="text" class="form-control" id="inputAddress2"  name="site" value="{{$item->site}}">
          </div>
          <div class="col-md-3">
            <label for="inputCity" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputCity" name="email" value="{{$item->email}}">
          </div>
          <div class="col-md-3">
            <label for="inputCity" class="form-label">Role</label>
            <input type="text" class="form-control" id="inputCity" name="role" value="{{$item->role}}">
          </div>

          <div class="col-md-3">
            <label for="inputCity" class="form-label">Number</label>
            <input type="text" class="form-control" id="inputCity" name="number" value="{{$item->number}}">
          </div>
          <div class="col-md-12">
            <label for="inputState" class="form-label">Skills and Strengths:</label>
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description1"  placeholder="{{$item->description1}}">{{$item->description1}}</textarea>
          </div>

          <div class="col-md-12">
            <label for="inputState" class="form-label">Professional Philosophy:</label>
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description2"  placeholder="{{$item->description2}}">{{$item->description2}}</textarea>
          </div>
          
          <div class="col-md-12">
            <label for="inputState" class="form-label">Achievements and Awards:</label>
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description3"  placeholder="{{$item->description3}}">{{$item->description3}}</textarea>
          </div>
          <div class="col-md-2">   
            <label for="formFile" class="form-label">Select an image</label>
            <input class="form-control" type="file" id="formFile" name="image"  onchange="previewImage(event)">
        </div>
        <div class="col-md-10">
            <img id="preview" src="#" alt="Preview Image" style="display: none;">
        </div>
        <style>
          /* Adjust image size as needed */
#preview {
    max-width: 100%;
    max-height: 200px; /* Limit the height to prevent stretching */
}

        </style>
          <div class="col-12">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
          @endforeach
        </form>
      </div>

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