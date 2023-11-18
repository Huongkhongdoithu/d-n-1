<?php

session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh'); // add this line with config timezone =)
if (isset($_SESSION['role']) && ($_SESSION['role'] == 1)) {


    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/binhluan.php";
    include "../model/cart.php";

    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
                //tài khoản
                /**
             * ====================================================================================
             *                                 TÀI KHOẢN
             * ====================================================================================
             */
            case 'UpdateTaiKhoan':
                $id = $_GET['id'];
                $Onetaikhoan = loadone_taikhoan($id);

                if (isset($_POST['sua'])) {

                    extract($_POST);
                    update_taikhoan($name, $user, $pass, $email, $address, $tel,$role, $id);
                    // header('location:index.php?act=sửa');
                }

                include_once 'view/taikhoan/UpdateTaiKhoan.php';
                break;
            case 'ListTaiKhoan':
                $listtaikhoan = loadall_taikhoan();
                include_once 'view/taikhoan/ListTaiKhoan.php';
                break;
            case 'AddTaiKhoan':
                if (isset($_POST['them'])) {
                    $role = $_POST['role'];
                    // echo"<pre>";
                    // print_r($_POST);
                    // echo"</pre>";

                    extract($_POST);
                    if (insert_taikhoan($name, $user, $pass, $email, $address, $tel, $role)) {
                        echo "<script>alert('Thành công')</script>";
                        // header('location: index.php?act=');
                    };
                }
                include_once 'view/taikhoan/AddTaiKhoan.php';
                break;
                //tài khoản
                /**
                 * ====================================================================================
                 *                                 TÀI KHOẢN
                 * ====================================================================================
                 */
                // //Thêm danh mục
            case 'adddm':
                //kiểm tra xem người dùng có nhấn vào nút add không
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $tenloai = $_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao = "Thêm thành công";
                }
                include "danhmuc/add.php";
                break;

                //List danh mục
            case 'listdm':
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;

                //Xoá danh mục
            case 'xoadm';
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_danhmuc($_GET['id']);
                }
                $sql = "select * from danhmuc order by id desc";
                $listdanhmuc = pdo_query($sql);
                include "danhmuc/list.php";
                break;

                //Sửa danh mục
            case 'suadm';
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $dm = loadone_danhmuc($_GET['id']);
                }
                include "danhmuc/update.php";
                break;

                //Update danh mục
            case 'updatedm';
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $id = $_POST['id'];
                    $tenloai = $_POST['tenloai'];
                    update_danhmuc($id, $tenloai);
                    $thongbao = "Cập nhật thành công";
                }
                $sql = "select * from danhmuc order by id desc";
                $listdanhmuc = pdo_query($sql);
                include "danhmuc/list.php";
                break;

                /** CONTROLLER CHO SẢN PHẨM */

            case 'addsp':
                //kiểm tra xem người dùng có nhấn vào nút add không
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $soluong = $_POST['soluong'];
                    $mota = $_POST['mota'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                    insert_sanpham($tensp, $giasp, $soluong, $hinh, $mota, $iddm);
                    $thongbao = "Thêm thành công";
                }
                $listdanhmuc = loadall_danhmuc();
                include "sanpham/add.php";
                break;
                //List sản phẩm
            case 'listsp':
                if (isset($_POST['listok']) && ($_POST['listok'])) {
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
                } else {
                    $kyw = '';
                    $iddm = 0;
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham($kyw, $iddm);
                include "sanpham/list.php";
                break;

                //Xoá sản phẩm
            case 'xoasp';
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_sanpham($_GET['id']);
                }
                $listsanpham = loadall_sanpham();

                include "sanpham/list.php";
                break;
            case 'suasp';
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $sanpham = loadone_sanpham($_GET['id']);
                }
                $listdanhmuc = loadall_danhmuc();
                include "sanpham/update.php";

                break;


                //Update sản phẩm
            case 'updatesp';
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $id = $_POST['id'];
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $soluong = $_POST['soluong'];
                    $mota = $_POST['mota'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);

                    update_sanpham($id, $iddm, $tensp, $giasp, $soluong, $mota, $hinh);
                    $thongbao = "Cập nhật thành công";
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham();

                include "sanpham/list.php";
                //     break;
                // case 'edit_taikhoan':
                //     if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                //         $name = $_POST['name'];
                //         $email = $_POST['email'];
                //         $address = $_POST['address'];
                //         $tel = $_POST['tel'];
                //         $id = $_POST['id'];
                //         update_taikhoan($id, $email, $name, $address, $tel);


                //         header('location:index.php?act=edit_taikhoan');
                //     }

                //     include "taikhoan/update.php";
                //     break;
                // case 'dangky':
                //     if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                //         $name = $_POST['name'];
                //         $email = $_POST['email'];
                //         $user = $_POST['user'];
                //         $pass = $_POST['pass'];
                //         insert_taikhoan($name, $email, $user, $pass);
                //         $thongbao = "Đã đăng ký thành công. Vui lòng đăng nhập để thực hiện chúc năng";
                //     }
                //     include "taikhoan/dangky.php";
                //     break;

            case 'thoat':
                unset($_SESSION['role']);
                header('location:../index.php');

                break;

                //Danh sách tài khoản

            case 'dskh';
                $listtaikhoan = loadall_taikhoan();
                include "taikhoan/list.php";
                break;
            case 'suatk';
                $listtaikhoan = loadall_taikhoan();
                include "taikhoan/list.php";
                break;

            case 'dsbl';
                $listbinhluan = loadall_binhluan(0);
                // var_dump($listbinhluan);
                include "binhluan/list.php";
                break;
                //Xoá bình luận

            case 'xoabl';
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_binhluan($_GET['id']);
                }

                $listbinhluan = loadall_binhluan(0);
                include "binhluan/list.php";
                break;

                //Xoá tài khoản
            case 'xoatk';
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_taikhoan($_GET['id']);
                }
                $sql = "select * from taikhoan order by id desc";
                $listtaikhoan = pdo_query($sql);
                include "taikhoan/list.php";
                break;

            case 'listbill':
                if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                    $kyw = $_POST['kyw'];
                } else {
                    $kyw = "";
                }
                $listbill = loadall_bill($kyw, 0);
                include "bill/listbill.php";
                include "home.php";
                break;

            case 'xoabill':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_bill($_GET['id']);
                }
                $sql = "select * from bill order by id desc";
                $listbill = pdo_query($sql);
                include "bill/listbill.php";
                include "home.php";

                break;

            case 'thongke':
                $listtk = loadall_thongke();
                include "thongke/list.php";
                break;
            case 'bieudo':
                $listtk = loadall_thongke();
                include "thongke/bieudo.php";
                break;
            default:
                include "view/taikhoan/UpdateTaiKhoan.php";
                break;
        }
    } else {
        include "view/taikhoan/UpdateTaiKhoan.php";
    }

    include "footer.php";
} else {
    header('location:login.php');
}
