(function($){


    $( "select" )
        .change(function() {
            $( "select option:selected" ).each(function() {
                console.log("select worked");

                cat = $(this).val();
                console.log(cat);
                $('div.resource').hide();
                $('div.' + cat).slideDown(1000);

            });

        })
        .trigger( "change" );

    $('div.resource').show();



}(jQuery));


