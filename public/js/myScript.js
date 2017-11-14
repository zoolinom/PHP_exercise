

$( document ).ready(function() {
    $("#error").hide(); //hide <p> with id="error"
    //click on submit button
    $(':submit').on('click', function(e) {
        console.log('Submit pressed');
        //this could be used for retreving values also
        //console.log($("form").serializeArray());
        console.log($(":input"));
        //foreach item in input array call function
        $(":input").each(function() {
           console.log('inputs');
           console.log($(this));
           var input = $(this);
           ret = validateObj(input);
           if (ret === false) {
               console.log("ret is false")
               e.preventDefault();
               return false;
           }
        });
        //TODO remove this when everything is done and ok :)
        //e.preventDefault();
    });

    function validateObj(obj)
    {
        var str = obj.val();
        str = str.trim();
        console.log(str);
        if (str.length === 0)
        {
            console.log("str is 0");
            var text = obj[0].previousSibling.wholeText;
            text = text.trim();
            text = text.substring(0, text.indexOf(':'));
            console.log(text);
            $("#error").text("Error! Input: " + text + " is empty");
            $("#error").show();

            return false;
        }

        if (str.length > 20)
        {
            console.log('more than 20 chars')
            $("#error").text("Error! String can not be larger than 20 chars");
            $("#error").show();

            return false;
        }

        if (obj[0].name === 'jmbg')
        {
            console.log("it is jmbg")
            if (str.length !== 13)
            {
                $("#error").text("Error! JMBG must be 13 digits");
                $("#error").show();

                return false;
            }

            var num = Number(str);
            console.log(num);
            if (isNaN(num))
            {
                $("#error").text("Error! JMBG must be all digits");
                $("#error").show();
                return false;
            }
        }

        $("#error").hide();
        return true;

    }
});