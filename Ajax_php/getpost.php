<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>


<?php /* 
 <script>
            $(document).ready(function(){
                $('#btnhere').click(function(){
                    $.get('getpost.txt',function(data,status){
                        $("#my").html(data);
                        alert(status);
                    });
                });
            });
 </script>
 <p class="text-center" id="my">Here showing get value</p>
 
    <div class="text-center" id="btnhere">
        <button class="btn btn-primary">press me</button>
    </div>


*/
?>  

<script>
$(document).ready(function(){
    $("input").keyup(function(){
        var name=$("input").val();
        $.post("suggest.php",{
            "suggetion":name
        },function(data,status){
            $("#test").html(data);
        });
    });
});
</script>
<p>Showing all </p>
<input  type="text" name="name"></input>
<p id="test"></p>
    
    

</body>
</html>