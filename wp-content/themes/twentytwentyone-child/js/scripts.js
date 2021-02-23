(function($) {

    $(document).ready(function(){
        $(document).on('change', '.js-filter-form', function(e){
            e.preventDefault();

            var category = $(this).find('option:selected').val();

            // console.log('category: ' + category);

            $.ajax({
                url: wpAjax.ajaxUrl,
                data: { 
                    action: 'filter', category: category 
                },
                type: 'post',
                success: function(result) {
                    $('.js-filter .dropdown-row').html(result);
                },
                error: function(result) {
                    console.warn(result);
                }
            });
        });
    });

})(jQuery);