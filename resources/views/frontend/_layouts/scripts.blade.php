   <!-- Jquery  -->
   <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
   <!-- Bootstrap Bundle -->
   <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
   <!-- Fontawesome -->
   <script src="{{ asset('frontend/assets/fontawesome/js/all.min.js') }}"></script>
   <!-- AOS Script -->
   <script src="{{ asset('frontend/assets/css/aos-master/dist/aos.js') }}"></script>
   <!-- My Own Script -->
   <script src="{{ asset('frontend/assets/js/script.js') }}"></script>
   <script>
       AOS.init({
           offset: 300,
           duration: 1000,
       });
   </script>
   <!--------------Visitor Counter ----------->
   <script type="text/javascript">
       var counterContainer = document.querySelector("#visitorcounter");
       var visitCount = localStorage.getItem("page_view");
       visitCount = 1;
       localStorage.setItem("page_view", 1);
       visitCount = Number(visitCount) + 1;
       localStorage.setItem("page_view", visitCount);
       counterContainer.innerHTML = visitCount;
   </script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
   <script src="{{ asset('backend/assets/libs/toastr/build/toastr.min.js') }}"></script>
   <script>
       @if (Session::has('success'))
           toastr.options = {
               "closeButton": true,
               "progressBar": true,
               "positionClass": "toast-bottom-right",
           }
           toastr.success("{{ session('success') }}");
       @endif

       @if (Session::has('error'))
           toastr.options = {
               "closeButton": true,
               "progressBar": true,
               "positionClass": "toast-bottom-right",
           }
           toastr.error("{{ session('error') }}");
       @endif

       @if (Session::has('info'))
           toastr.options = {
               "closeButton": true,
               "progressBar": true,
               "positionClass": "toast-bottom-right",
           }
           toastr.info("{{ session('info') }}");
       @endif

       @if (Session::has('warning'))
           toastr.options = {
               "closeButton": true,
               "progressBar": true,
               "positionClass": "toast-bottom-right",
           }
           toastr.warning("{{ session('warning') }}");
       @endif
   </script>
