$(document).ready(function () {

    $('#writepost').validate({ 
        rules: {
            title: {
                required: true,
            },
            content: {
                required: true,
                
            }
         }
    });
});