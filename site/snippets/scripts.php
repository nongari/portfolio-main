<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src="https://unpkg.com/sortablejs-make/Sortable.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-sortablejs@latest/jquery-sortable.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


  <script>
    //Metalist

    // List 1
    $('#items-1').sortable({
        group: 'list',
        animation: 250,
        ghostClass: 'ghost',
        onSort: reportActivity,
    });

    // List 2
    $('#items-2').sortable({
        group: 'list',
        animation: 250,
        ghostClass: 'ghost',
        onSort: reportActivity,
    });

    // Arrays of "data-id"
    $('#get-order').click(function () {
        var sort1 = $('#items-1').sortable('toArray');
        console.log(sort1);
        var sort2 = $('#items-2').sortable('toArray');
        console.log(sort2);
    });

    // Report when the sort order has changed
    function reportActivity() {
        console.log('The sort order has changed');
    };
  </script>

<!-- Capsules -->

<script>
  var acc = document.getElementsByClassName("capsule");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("open");
      var panel = this.nextElementSibling;
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
        
      } 
    });
  }
</script>

<script>
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      } 
    });
  }

  document.getElementById('expand-all').addEventListener('click', function(e) {
    for (i = 0; i < acc.length; i++) {
      acc[i].classList.add('active');
      var panel = acc[i].nextElementSibling;
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });

  document.getElementById('close-all').addEventListener('click', function(e) {
    for (i = 0; i < acc.length; i++) {
      acc[i].classList.remove('active');
      var panel = acc[i].nextElementSibling;
      panel.style.maxHeight = null;
    }
  });
</script>



<!-- Swiper Options -->

<script>
      var swiper = new Swiper(".mySwiper", {
        
        lazy: {
        //  tell swiper to load images before they appear
        loadPrevNext: true,
        // amount of images to load
      	loadPrevNextAmount: 2,
        checkInView: true,
        },

        
        setWrapperSize: true,
        autoHeight: true,
        effect: 'fade',
          fadeEffect: {
            crossFade: true
          },
        slidesPerView: 1,
        loop: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
</script>