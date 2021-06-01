<html>
<head>
    <title></title>
</head>

<body>
    <form method="post" >
        <input type="number" name="num" placeholder="numero">
        <input type="text" name="ip" placeholder="ip">
        <input type="submit" name = "buscar" value="Buscar">
    </form>
</body>
</html>



<?php

if(isset($_POST['buscar'])){
    
    $file = file_get_contents("http://".$_POST['ip']."/rpc/RPC.php?num=".$_POST['num'], false);
    echo $file;
    exit();


}
?>
