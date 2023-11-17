<?php
    function insert_taikhoan($name,$email, $user, $pass){
        $sql = "insert into taikhoan(name,email, user, pass) 
        values ('$name','$email','$user','$pass')";
        pdo_execute($sql);
    }
    function checkuser($user, $pass){
        $sql="select * from taikhoan where user= '".$user."' and pass='".$pass."'";
        $dm=pdo_query_one($sql);
        return $dm;
    }
    function checkuseradmin($user, $pass){
        $sql="select * from taikhoan where user= '".$user."' and pass='".$pass."'";
        $dm=pdo_query_one($sql);
        if($dm >0 ) return $dm['role'];
        else return 0;
    }
    function checkemail($email){
        $sql="select * from taikhoan where email= '".$email."'";
        $dm=pdo_query_one($sql);
        return $dm;
    }
    function update_taikhoan($id, $email, $name,$address, $tel){
           $sql = " update taikhoan set  email='".$email."'
           , name='".$name."' , address='".$address."' , tel='".$tel."' where id=".$id;
           pdo_execute($sql);
        
    }
    function loadall_taikhoan(){
        $sql="select * from taikhoan order by id desc";
        $listtaikhoan=pdo_query($sql);
        return $listtaikhoan;
    }
    
    function loadone_taikhoan($user){
        $sql="select * from taikhoan where user like '%$user%' ";
        $tk=pdo_query_one($sql);
        return $tk;
    }
    function delete_taikhoan($id){
        $delete="delete from taikhoan where id =" .$id;
        pdo_execute($delete);
    }

    function checkdoimk($user, $passcu, $passmoi){
        $sql="select * from taikhoan where user= '".$user."' and pass='".$passcu."' limit 1";
        $dmk=pdo_query_one($sql);
        if($dmk>0){
            $sql = " update taikhoan set user= '".$user."', pass='".$passmoi."' where user= '".$user."' and pass='".$passcu."'  ";
            $thongbao = "Đổi mật khẩu thành công";
            pdo_execute($sql);
            
        }
        return $dmk;
    }