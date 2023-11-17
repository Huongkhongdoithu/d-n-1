<?php
function insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan)
{
    $sql = "insert into binhluan (noidung,iduser,idpro,ngaybinhluan) 
    values ('$noidung','$iduser','$idpro','$ngaybinhluan')";
    pdo_execute($sql);
}

function delete_binhluan($id)
{
    $delete = "delete from binhluan where id =" . $id;
    pdo_execute($delete);
}

function loadall_binhluan($idpro)
{
    $sql = "select b.*, u.name as name, u.user as nameuser  from binhluan b inner join taikhoan u on b.iduser = u.id where 1";
    if ($idpro > 0) {
        $sql .= " AND b.idpro='" . $idpro . "' ";
        $sql .= " order by b.id desc";
    }
    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}



?>