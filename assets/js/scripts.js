//Collapsible

$('.capsule').click(function () {
    var $this = $(this)

    if ($('body').find('.open').length) {

        if ($this.hasClass('clicked')) {
            $this.next().removeClass('open')
            $this.removeClass('clicked')
        } else {
            $('body').find('.clicked').removeClass('clicked')
            $this.addClass('clicked')
            $('body').find('.open').removeClass('open')
            setTimeout(function () {

                $this.next().toggleClass('open')
            }, 600)
        }
    } else {
        $this.addClass('clicked')
        $this.next().toggleClass('open')
    }
})
