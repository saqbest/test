<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery UI Dialog - Default functionality</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script>
        $(function() {
            $( "#dialog" ).dialog();
        });
    </script>
</head>
<body>

<div id="dialog" title="Basic dialog">
    <p>This is the default dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
</div>
<script>
    $(document).ready(function(){
        //Get
        $(".ui-dialog").mouseup(function () {

            var p = $(".ui-dialog");
            var offset = p.offset();
           // console.log(offset.top)
            var top=offset.top
            var left=offset.left
            $.post("dbset.php", {top: top, left: left})
                .done(function (data) {
//                    obj = jQuery.parseJSON(data)
//                    console.log(obj)

                })

            })
//set
        $.post("dbinfo.php")
            .done(function (data) {
                obj = jQuery.parseJSON(data)
                console.log(obj)
                $(".ui-dialog").offset({ top:obj.top, left:obj.left})

            })



    });
</script>

</body>
</html>