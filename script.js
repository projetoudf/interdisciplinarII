        $(document).ready(function(){
        var maxChars = $(".limiteDeCaracteres");
            var max_length = maxChars.attr('maxlength');
            if (max_length > 0) {
                maxChars.bind('keyup', function(e){
                    length = new Number(maxChars.val().length);
                    counter = max_length-length;
                });
            }
        });