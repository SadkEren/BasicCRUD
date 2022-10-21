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

    

<div class="container " >
<h1> CRUD İşlemler</h1>

<a href="ekle.php" ><button class="btn btn-sm btn-success" > Yeni Kayit</button></a>
    <table class="table">
        <thead>
          
            <tr>
            <th scope="col"></th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Title</th>
            <th scope="col"> </th>
            <th scope="col"> </th>
            
            </tr>
        </thead>
        <tbody>

        <?php while( $verial = $veri->fetch(PDO::FETCH_ASSOC) ) 
        {?>
            <tr>
            <th scope="row"></th>
            <td><?php echo $verial['name']?></td>
            <td><?php echo $verial['email']; ?></td>
            <td><?php echo $verial['title'];?></td>
            <td> <a href="islem/islem.php?id=<?php echo $verial['id']?>&sil=yes"> <button class="btn btn-danger">Sil</button></a></td>
            <td> <a href="duzenle.php?id=<?php echo $verial['id'] ?>"> <button class="btn btn-info" >Güncelle</button></a></td>
            
            </tr>
           

            <?php } ?>
        </tbody>
    </table>

</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
 
</body>
</html>

