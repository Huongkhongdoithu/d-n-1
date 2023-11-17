<div class="row">
            <div class="row frmtitle">
                <H1>DANH SÁCH TÀI KHOẢN</H1>
            </div>
            <div class="row frmcontent">

                <div class="row1 mb10 frmdsloai">
                    <table>
                        <tr>
                            <th></th>
                            <th>MÃ TÀI KHOẢN</th>
                            <th>HỌ VÀ TÊN</th>
                            <th>TÊN ĐĂNG NHÂP</th>
                            
                            <th>EMAIL</th>
                            <th>ĐỊA CHỈ</th>
                            <th>SỐ ĐIỆN THOẠI</th>
                            <th>VAI TRÒ</th>
                            <th></th>
                        </tr>
                        <?php
                        foreach ($listtaikhoan as $taikhoan) {
                            extract($taikhoan);
                            $suatk="index.php?act=edit_taikhoan&id=".$id;
                            $xoatk="index.php?act=xoatk&id=".$id;
                            echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td>'.$user.'</td>
                           
                            <td>'.$email.'</td>
                            <td>'.$address.'</td>
                            <td>'.$tel.'</td>
                            <td>'.$role.'</td>
                          
                            <td> <a href="'.$suatk.'"><input type="button" value="Sửa" class="sua">  </a> 

                            <a href="'.$xoatk.'"><input type="button" value="Xóa" class="xoa"></td> </a>
                        </tr>';
                        }
                         ?>
                        
                       
                        
                    </table>
                </div>
                <div class="row2 mb10">
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn">
                    <a href="index.php?act=dangky"><input type="button" value="Nhập thêm"></a>
                </div>
            </div>
        </div>
    </div>

    <style>
    .xoa,
    .sua {
        width: 60px;
        height: 25px;
        margin-top: 10px;
        margin-left: 5px;
       
    }

    .xoa {
        background-color: white;
        color: black;
        border: 1px solid gray;
    }

    .xoa:hover {
        background-color: black;
        color: white;
    }

    .sua {
        background-color: black;
        border: 1px solid gray;
        color: white;
      
    }

    .sua:hover {
        background-color: white;
        color: black;
    }

    .row2 input {
        width: 100px;
        height: 35px;
        background-color: black;
        color: white;
        border: 1px solid gray;
    }

    .row2 input:hover {
        background-color: white;
        color: black;
    }
</style>