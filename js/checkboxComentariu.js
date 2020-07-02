$(function() {
    window.invalidate_input = function() {
        if ($('input[name=XIAlmnus]:checked').val() == "Yes")
            $('#XIyop').removeAttr('disabled');
        else
            $('#XIyop').attr('disabled', 'disabled');
    };
    
    $("input[name=XIAlmnus]").change(invalidate_input);
    
    invalidate_input();
});