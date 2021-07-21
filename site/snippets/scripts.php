<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src="assets\js\scripts.js"></script>

<script src="https://unpkg.com/sortablejs-make/Sortable.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-sortablejs@latest/jquery-sortable.js"></script>

  <script>
    //Metalist

    // List 1
    $('#items-1').sortable({
        group: 'list',
        animation: 500,
        ghostClass: 'ghost',
        handle: '.handle',
        onSort: reportActivity,
    });

    // List 2
    $('#items-2').sortable({
        group: 'list',
        animation: 500,
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