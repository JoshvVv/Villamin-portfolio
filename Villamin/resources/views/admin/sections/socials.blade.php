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
            <!-- Button trigger modal -->
      <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add
      </button>
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Social table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Role</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($education as $item )                        
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$item->name}}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <i class="{{$item->icon}}"></i>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$item->created_at}}</span>
                      </td>
                      <td class="align-middle">  
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#updateModal" data-id="{{$item->id}}" data-name="{{$item->name}}" data-icon="{{$item->icon}}" data-link="{{$item->link}}" data-target="{{$item->target}}">
                          Edit
                        </button>
                        <form action="{{route('education.delete', ['id'=>$item->id])}}" method="POST">
                          @csrf
                          @method('delete')
                        <button type="submit" class="btn btn-danger">
                          Delete
                        </button>
                      </form>
                      </td>
                    </tr> 
                    @endforeach        
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      
     <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('education.add')}}"  class="row g-3" enctype="multipart/form-data" method="POST">
          @csrf
          @method('post')
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="inputEmail4">
          </div>
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Icon</label>
            <input type="text" class="form-control" name="icon" id="inputEmail4">
          </div>
          <div class="row">
            <div class="col-md-6 mx-auto">
                <label for="inputEmail4" class="form-label">Link</label>
                <input type="text" class="form-control" name="link" id="inputEmail4">
            </div>
            <div class="col-md-6 mx-auto">
              <label for="inputEmail4" class="form-label">Target</label>
              <input type="text" class="form-control" name="target" id="inputEmail4">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="subimt" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>

 <!-- UPdate Modal -->
 <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('education.update', ['id'=>'__ID__']) }}" id="updateForm" method="POST"  class="row g-3" >
            @csrf
            @method('post')
          <div class="col-md-6">
            <input type="hidden" name="id" id="updateId">
            <label for="inputEmail4" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name">
          </div>
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Icon</label>
            <input type="text" class="form-control" name="icon" id="icon">
          </div>
          <div class="row">
            <div class="col-md-6 mx-auto">
                <label for="inputEmail4" class="form-label">Link</label>
                <input type="text" class="form-control" name="link" id="link">
            </div>
        </div>
        <div class="mb-3">
            <label for="inputEmail4" class="form-label">Target</label>
            <input type="text" class="form-control" name="target" id="target">
        </div>
        
        
       <script>
        function setFormAction(id) {
            var form = document.getElementById('updateForm');
            var action = form.getAttribute('action');
            // Replace '__ID__' in the action attribute with the actual id value
            form.setAttribute('action', action.replace('__ID__', id));
        }
    
        // Call the setFormAction function when the modal is shown
        var myModal = document.getElementById('updateModal');
        
        myModal.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget;
            var id = button.getAttribute('data-id');
            // Set the value of the hidden input field to the id
            document.getElementById('updateId').value = id;
            // Call the setFormAction function to update the form action
            setFormAction(id);
            var button = event.relatedTarget;
            var id = button.getAttribute('data-id');
            var name = button.getAttribute('data-name');
            var link = button.getAttribute('data-link');
            var icon = button.getAttribute('data-icon');
            var target = button.getAttribute('data-target');
          
    
            document.getElementById('updateId').value = id;
            document.getElementById('name').value = name;
            document.getElementById('icon').value = icon;
            document.getElementById('link').value = link;
            document.getElementById('target').value = target;
        });
    </script>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>
     
    {{-- footer --}}
   
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