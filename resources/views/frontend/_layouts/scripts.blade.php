   <!-- Jquery  -->
   <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
   <!-- Bootstrap Bundle -->
   <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
   <!-- Fontawesome -->
   <script src="{{ asset('frontend/assets/fontawesome/js/all.min.js') }}"></script>
   <!-- AOS Script -->
   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
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

    //    $(document).ready(function() {
    //        var txt = '571845';
    //        var txt = $('#visitorcounter').text();
    //        var newTxt = txt.replace(/\w/g, function(c) {
    //            return '<span>' + c + '</span>';
    //        })
    //        $('#visitorcounter').html(newTxt);
    //    })
   </script>
