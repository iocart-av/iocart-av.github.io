<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>khususupload</title>
</head>
<body>
<div class="judul">
    <h4>PILIH YANG INGIN DI UPLOAD</h4>
    <hr color="burlywood" width="95%" size="3px">
</div><br>
<div class="list">
    <ul>
        <li><a href="kaos/upload.php"><b>KAOS</b></a></li><br>
        <li><a href="kaos/delete.php"><b>Delet</b></a></li><br>
        <hr color="burlywood" width="95%" size="3px"><br>
        <li><a href="sweter/upload.php"><b>HOODIE</b></a></li><br>
        <li><a href="sweter/delete.php"><b>Delet</b></a></li><br>
        <hr color="burlywood" width="95%" size="3px"><br>
        <li><a href="aksesoris/upload.php"><b>AKSESORIS</b></a></li><br>
        <li><a href="aksesoris/delete.php"><b>Delet</b></a></li>
</ul>
</div>
</body>
</html>
<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
        padding: 0;
        margin: 0;
        background-color: black;
        color: white;
}
.judul{
    text-align: center;
}
.list ul{
    list-style-type: none;
    display: grid;
    justify-content: center;    
}
.list li{
    background-color: brown;
    padding: 10px;
    border-radius: 10px;
}
.list a{
    color: whitesmoke;
    text-decoration: none;
}
</style>