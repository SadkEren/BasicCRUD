<?php 
include 'baglan.php';


if(isset($_POST['veriduzenle']))
{
    $veri_Id = $_POST['veri_id']; //gizli yolladığım id buradan alıyorum. 

    $veriguncelle=$db->prepare("UPDATE tablo1 SET
        name=:veri_ismi,
        email=:veri_email,
        title=:veri_title
    WHERE id={$_POST['veri_id']} "); 

    $guncelle=$veriguncelle->execute(array(
        'veri_ismi' => $_POST['veriname'],
        'veri_email' => $_POST['verimail'],
        'veri_title' => $_POST['verititle']
    ));

    if($guncelle)
    {
        Header("Location:../index.php?durum=guncel");
    }else{
        Header("Location:../index.php?durum=olmadi");
    }

}



if($_GET['sil'] == "yes")
{
    $sil = $db->prepare("DELETE from tablo1 where id=:idm");
    $dogru=$sil->execute(array(
        'idm' => $_GET['id']
    ));

    if($dogru)
    {
        Header("Location:../index.php?sil=yes");
    }else{
        Header("Location:../index.php?sil=no");
    }


}


if(isset($_POST['verikayit']))
{

    $veriguncelle=$db->prepare("INSERT INTO tablo1 SET
        name=:veri_ismi,
        email=:veri_email,
        title=:veri_title "); 

    $guncelle=$veriguncelle->execute(array(
        'veri_ismi' => $_POST['veriname'],
        'veri_email' => $_POST['verimail'],
        'veri_title' => $_POST['verititle']
    ));

    if($guncelle)
    {
        Header("Location:../index.php?durum=guncel");
    }
    else
    {
        Header("Location:../index.php?durum=olmadi");
    }

}






?>