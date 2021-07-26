$('#expandAll').click(function () {
    $(".details").slideToggle(200);
    if ($(this).text() === 'expand all') {
        $(this).text('collapse all');
    }
    else {
        $(this).text('expand all');
    }
});