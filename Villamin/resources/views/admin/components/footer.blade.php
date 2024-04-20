<!--   Core JS Files   -->
<script src="{{ asset('js/core/popper.min.js')}}"></script>
  <script src="{{ asset('js/core/bootstrap.min.js')}}"></script>
  <script src="{{ asset('js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{ asset('./assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{ asset('js/plugins/chartjs.min.js')}}"></script>
 
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }

    function setActive(link) {
        // Remove active class from all nav links
        document.querySelectorAll('.nav-link').forEach(function(item) {
            item.classList.remove('active');
        });

        // Add active class to the clicked link
        link.classList.add('active');
    }

    // Set active class initially based on current URL
    document.addEventListener('DOMContentLoaded', function() {
        var currentUrl = window.location.href;
        var navLinks = document.querySelectorAll('.nav-link');

        navLinks.forEach(function(link) {
            if (link.href === currentUrl) {
                link.classList.add('active');
            }
        });
    });

  function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function() {
        var preview = document.getElementById('preview');
        preview.src = reader.result;
        preview.style.display = 'block';
    }
    reader.readAsDataURL(event.target.files[0]);
}

  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('js/argon-dashboard.min.js?v=2.0.4')}}"></script>