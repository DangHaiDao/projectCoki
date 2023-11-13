<?php 
    include "../database/connect.php";
?>

<?php 
    // Hàm hiện danh sách sản phẩm
    function showCategories($connect){
        $query_cate = "SELECT * FROM category";
        $result = mysqli_query($connect, $query_cate);
        while($row = mysqli_fetch_array($result)){
            echo "
                <li class='head_cate'>
                    <a>
                        <img src='../assets/img/splen.png' width='40px' height='auto'>
                        <p id_cate='$row[0]'>$row[1]</p>
                    </a>
                </li>
            ";
        }
    }
    
    // Hàm hiện sản phẩm theo danh mục
    function showProduct($connect){
        $Id_cate = $_POST['category'];
        $query_product = "SELECT * FROM product WHERE category_id =$Id_cate";
        $result = mysqli_query($connect, $query_product);
        while($row = mysqli_fetch_array($result)){
            echo "
            <form method='post' action='cart.php'>
                <div class='product-item'>
                    <a>
                        <img src='../assets/img/$row[5]' alt=''>
                        <div class='product-detail'>
                            <p class='product-name'>$row[2]</p>
                            <p class='product-price'>$row[4]<del style='color:#8C8B8B; margin-left: 6px;'>$row[3] đ</del>
                            </p>
                        </div>
                    </a>
                    <input type='submit' class='product-btn-add-to-cart' value='Add to Cart' name='btnATC'>
                    <input type='number' style='width:80px; height:28px' value='1' name='qntP'>
                </div>
                <input type='hidden' name='img' value='../assets/img/$row[5]'>
                <input type='hidden' name='name' value='$row[2]'>
                <input type='hidden' name='realP' value='$row[3]'>
                <input type='hidden' name='saleP' value='$row[4]'>
            </form>
            ";
        }
    }

    // Hàm hiện tất cả sản phẩm
    function showAllP($connect){
        if((isset($_POST['start'])) || $_POST['start'] > 0){
            $start = mysqli_real_escape_string($connect, $_POST['start']);
            $query_Allproduct = "SELECT DISTINCT * FROM product LIMIT $start, 6";
            $result = mysqli_query($connect, $query_Allproduct);
            while($row = mysqli_fetch_array($result)){
                echo "
                <form method='post' action='cart.php'>
                    <div class='product-item'>
                        <a>
                            <img src='../assets/img/$row[5]' alt=''>
                            <div class='product-detail'>
                                <p class='product-name'>$row[2]</p>
                                <p class='product-price'>$row[4]<del style='color:#8C8B8B; margin-left: 6px;'>$row[3] đ</del>
                                </p>
                            </div>
                        </a>
                        <input type='submit' class='product-btn-add-to-cart' value='Add to Cart' name='btnATC'>
                        <input type='number' style='width:80px; height:28px' value='1' name='qntP'>
                    </div>
                    <input type='hidden' name='img' value='../assets/img/$row[5]'>
                    <input type='hidden' name='name' value='$row[2]'>
                    <input type='hidden' name='realP' value='$row[3]'>
                    <input type='hidden' name='saleP' value='$row[4]'>
                </form>
                ";
            }
        }
    }

    // Hàm tìm kiếm sản phẩm theo từ khóa
    function search($connect){
        $keyword = $_POST['value'];
        $query_key = "SELECT * FROM product WHERE title LIKE '%$keyword%'";
        $result = mysqli_query($connect, $query_key);
        if(mysqli_num_rows($result) >0 ){
             while($row = mysqli_fetch_array($result)){
                echo "
            <form method='post' action='cart.php'>
                <div class='product-item'>
                    <a>
                        <img src='../assets/img/$row[5]' alt=''>
                        <div class='product-detail'>
                            <p class='product-name'>$row[2]</p>
                            <p class='product-price'>$row[4]<del style='color:#8C8B8B; margin-left: 6px;'>$row[3] đ</del>
                            </p>
                        </div>
                    </a>
                    <input type='submit' class='product-btn-add-to-cart' value='Add to Cart' name='btnATC'>
                    <input type='number' style='width:80px; height:28px' value='1' name='qntP'>
                </div>
                <input type='hidden' name='img' value='../assets/img/$row[5]'>
                <input type='hidden' name='name' value='$row[2]'>
                <input type='hidden' name='realP' value='$row[3]'>
                <input type='hidden' name='saleP' value='$row[4]'>
            </form>
            ";
            }
            
        }
        else echo "No result";
       
    }
?>

<?php 
    if(isset($_POST['action'])){
        $action = $_POST['action'];
        if($action == 'showCate') showCategories($connect);
        elseif ($action == 'showP') showProduct($connect);
        else if ($action == 'showAllP') showAllP($connect);
        else if ($action == 'search') search($connect);
        
    }
?>