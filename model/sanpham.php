<?php
    function insert_sanpham($tensp, $giasp,$soluong, $hinh, $mota, $iddm){
        $sql = "insert into sanpham(name, price, soluong, img, mota, iddm) 
        values ('$tensp','$giasp','$soluong','$hinh','$mota','$iddm')";
        pdo_execute($sql);
    }
    function delete_sanpham($id){
        $delete="delete from sanpham where id =" .$id;
        pdo_execute($delete);
    }
    function loadall_sanpham_trangchu(){
        $sql="select * from sanpham where 1 order by id desc limit 0,9";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham_top10(){
        $sql="select * from sanpham where 1 order by luotxem desc limit 0,10";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham($kyw="", $iddm=0){
        $sql="select * from sanpham where 1";
        if($kyw !=""){
            $sql .= " and name like '%" .$kyw. "%' ";
        }
        if($iddm >0){
            $sql .= " and iddm = '".$iddm."' ";
        }
        $sql.=" order by id desc";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    function load_ten_dm($iddm){
        if($iddm>0){
            $sql="select * from danhmuc where id=" .$iddm;
            $dm=pdo_query_one($sql);
            extract($dm);
            return $name;
        }else{
            return "";
        }
       
    }
    function loadone_sanpham($id){
        $sql="select * from sanpham where id=" .$id;
        $dm=pdo_query_one($sql);
        return $dm;
    }
    function load_sanpham_cungloai($id,$iddm){
        $sql="select * from sanpham where iddm= ".$iddm." AND id <>" .$id;
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    function update_sanpham($id,$iddm, $tensp, $giasp,$soluong, $mota,$hinh){
        if($hinh!=""){
            $sql = " update sanpham set iddm='".$iddm."', name='".$tensp."', price='".$giasp."'
            ,soluong='".$soluong."' , mota='".$mota."', img='".$hinh."' where id=".$id;
        }else

           $sql = " update sanpham set  iddm='".$iddm."', name='".$tensp."', price='".$giasp."',soluong='".$soluong."' 
           , mota='".$mota."' where id=".$id;
           pdo_execute($sql);
        
    }
    function update_luotxem($id,$luotxem){

        $sql = " update sanpham set luotxem='".($luotxem +1) ."'  where id=".$id;
           pdo_execute($sql);
        
    }

?>