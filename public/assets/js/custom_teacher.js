$(function() {
    $(document).on('click', '.delete_question', function(e) {
        e.preventDefault()
        $(this).closest('li.mb-2').remove()
    })

    /* Question number */   
    var lengthBar;
    $('.questions__items form').each(function() {
        $('.total-resolve').text(0)
         lengthBar =  100 / $(this).children().length ;
         $('.total-qu').text($(this).children().length)
    })
    $(document).on('click','.questions__items form .sel-form .radio-input-field input', function() {
        var len = 0
        $('.questions__items form > .questions-item').each(function() {
            if($(this).find('input').is(':checked')) {
                len +=1;
            }
            var progressValue = len * lengthBar;
            $('.my-progress-equ').css('width',progressValue + '%' )
        })
        $('.total-resolve').text(len)
       
    }) 
})