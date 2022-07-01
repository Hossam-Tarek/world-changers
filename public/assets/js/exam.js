$(function() {
    $(document).on('change','#language', function() {
        if($(this).val() != 'first') {
            // $('.selectedLangDir').attr('href', 'assets/css/RTLExam.css')
            // $('.selectedLangDirBootstrap').attr('href', 'assets/css/bootstrap.min.css')
            $('.selectedLangDirRTL').attr('href', '')
            $('input').addClass('text-end')
            $('textarea').addClass('text-end')
        } else {
            $('.selectedLangDir').attr('href', null)
            // $('.selectedLangDirBootstrap').attr('href', null)
            $('input').removeClass('text-end')
            $('textarea').removeClass('text-end')

            // $('.selectedLangDirRTL').attr('href', 'assets/css/bootstrap.rtl.min.css')
            
        }
    })
    // when select units
    $("body").on('DOMSubtreeModified', ".exam-units", function() {
       $('.exam-units .selectize-input .item').each(function() {
            
       })
    });
    $(document).on('change','.exam-units select', function() {
        console.log($(this).val());
        if($(this).val() == 'exam-op') {
            $('.lesson-units').addClass('d-none')
            $('.exam-title').removeClass('d-none')
        } else {
            $('.lesson-units').removeClass('d-none')
            $('.exam-title').addClass('d-none')
        }
    })
})