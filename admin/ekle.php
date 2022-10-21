<?php 
    include 'header.php';
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

    

<div class="container" >
<h1>Veri Düzenle</h1>
    
    <form method="POST" action="islem/islem.php">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" name="veriname" value="" class="form-control"aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" value="" name="verimail" class="form-control"  aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Title</label>
        <input type="text" value="" name="verititle" class="form-control" >
    </div>

    <button type="submit" name="verikayit" class="btn btn-primary">Submit</button>
    </form>

</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
 
</body>
</html>

