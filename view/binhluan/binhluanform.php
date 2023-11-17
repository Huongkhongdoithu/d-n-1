<?php

session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";
$idpro = $_REQUEST['idpro'];
$dsbl = loadall_binhluan($idpro);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <div id="binhluan">
        <h3>BÌNH LUẬN</h3>

        <div class="nd">
            <table>
                <tr>
                    <th>Nội dung</th>
                    <th>Username</th>
                    <th>Thời gian</th>
                </tr>

                <?php
                foreach ($dsbl as $bl) {
                    
                    # code...
                    extract($bl);
                    echo '  <tr>  <td> ' . $noidung . ' </td>';
                    echo ' <td> ' . $name . ' </td>';
                    echo ' <td> ' . $ngaybinhluan . ' </td> </tr>';
                }
                ?>

            </table>



        </div>

        <div class="guibl">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <input type="hidden" name="idpro" value="<?= $idpro ?>">
                <input type="text" name="noidung" class="noidung" placeholder="Bình luận sản phẩm">
                <input type="submit" value="Gửi bình luận" name="guibinhluan" class="guibinhluan">
                
            </form>
        </div>

        <?php
        if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
            $noidung = $_POST['noidung'];
            $idpro = $_POST['idpro'];
            $iduser =  $_SESSION['id'];
            $ngaybinhluan = date('G:i:s A d/m/Y');

          
            insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
            header("location: " . $_SERVER['HTTP_REFERER']);
        }


        ?>

    </div>
</body>

</html>

<style>
    table {
        width: 100%;
        text-align: center;
        margin-top: 20px;
    }

    .noidung {
        width: 50%;
        border-radius: 5px;
        height: 35px;
        border: 1px solid gray;
    }

    .guibl {
        margin-top: 20px;
    }

    .guibinhluan {
        width: 85px;
        height: 35px;
        margin-left: 5px;
        color: white;
        background-color: black;
        border-radius: 5px;
    }

    .guibinhluan:hover {
        color: black;
        background-color: white;
    }
</style>