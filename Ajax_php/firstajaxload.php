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

    <script>
    $(document).ready(function(){
        $('#btnhere').click(function(){
            $('#nothing').load('okay.txt',{
                fname:'Rana',
                lname:'Sarkar' 
            },function(){
                alert("okay all right");
            });
        });
    });
    </script>
    <div class="text-center">
    
    <div id="nothing">
        <p> Here load the data</p>
    </div>

    <div id="btnhere">
        <button class="btn btn-primary">press me</button>
    </div>
    </div>
</body>
</html>