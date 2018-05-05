$(document).ready(function () {

    if(localStorage.getItem('last_opened')) {
        const id = $(localStorage.getItem('last_opened'));
        id.click();

        $('html, body').animate({
            scrollTop: id.offset().top
        }, 500);
    }


    $('h4').on('click', function(){
        $('html, body').animate({
            scrollTop: $(this).offset().top
        }, 500);
        localStorage.setItem('last_opened', '#' + $(this).attr('id'));
    });
});