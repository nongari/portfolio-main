<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src="https://unpkg.com/sortablejs-make/Sortable.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-sortablejs@latest/jquery-sortable.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>


  <script>
    //Metalist

    // List 1
    $('#items-1').sortable({
        group: 'list',
        handle: '.handle',
        animation: 10,
        ghostClass: 'ghost',
        onSort: reportActivity,
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

  // document.getElementById('expand-all').addEventListener('click', function(e) {
  //   for (i = 0; i < acc.length; i++) {
  //     acc[i].classList.add('active');
  //     var panel = acc[i].nextElementSibling;
  //     panel.style.maxHeight = panel.scrollHeight + "px";
  //   }
  // });

  document.getElementById('close-all').addEventListener('click', function(e) {
    for (i = 0; i < acc.length; i++) {
      acc[i].classList.remove('active');
      var panel = acc[i].nextElementSibling;
      panel.style.maxHeight = null;
    }
  });
</script>

<script>
  $('.carousel').slick({
    draggable: true,
    arrows: true,
    fade: true,
    infinite: true,
    cssEase: 'ease-in-out',
    touchThreshold: 100
  })
</script>