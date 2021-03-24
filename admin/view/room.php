<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Nhập thông tin</h4>

                    </div>
                    <div class="card-body">
                        <form method="POST" action="index.php?ctrl=room&act=add" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="hidden" name="room_id"
                                            value="<?php if(isset($room)) echo $room['id']?>">
                                        <label class="bmd-label-floating">Tên</label>
                                        <input type="text" name="room_name" class="form-control"
                                            value="<?php if(isset($room)) echo $room['name']?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Số phòng</label>
                                        <input type="number" name="room_number" min=0 class="form-control"
                                            value="<?php if(isset($room)) echo $room['so_phong']?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="file" name="room_images[]" multiple
                                            style="opacity:1 !important;position:unset">
                                        <img src="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Dịch vụ</label>
                                        <input type="text" name="room_service" class="form-control"
                                            value="<?php if(isset($room)) echo $room['dich_vu']?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Giường</label>
                                        <input type="number" name="room_bed" min=0 class="form-control"
                                            value="<?php if(isset($room)) echo $room['giuong']?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Số người</label>
                                        <input type="number" name="room_people" min=0 class="form-control"
                                            value="<?php if(isset($room)) echo $room['so_nguoi']?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Giá tiền</label>
                                        <input type="number" name="room_price" class="form-control"
                                            value="<?php if(isset($room)) echo $room['gia_tien']?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nổi bật</label>
                                        <input type="number" name="room_hot" min=0 max=1 class="form-control"
                                            value="<?php if(isset($room)){echo $room['hot'];}else{echo 1;}?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Mô tả</label>
                                        <input type="text" name="room_des" class="form-control"
                                            value="<?php if(isset($room)) echo $room['mo_ta']?>">

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Danh mục</label>
                                        <select name="room_catalog" class="form-control">
                                            <?php
                                             foreach($listCatalogs as $catalog){
                                                $selected = '';
                                                    if($room['id_danhmuc'] == $catalog['id']){
                                                        $selected = 'selected';
                                                    }
                                                    echo '<option value="'.$catalog['id'].'"'.$selected.'>'.$catalog['name'].'</option>';
                                            }
                                        ?>
                                            <select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Loại phòng</label>
                                        <select name="room_kindof" class="form-control">
                                        <?php
                                                foreach($listKindofRooms as $kindofroom){
                                                    $selected = '';
                                                        if($room['id_loaiphong'] == $kindofroom['id']){
                                                            $selected = 'selected';
                                                        }
                                                        echo '<option value="'.$kindofroom['id'].'"'.$selected.'>'.$kindofroom['name'].'</option>';
                                                }
                                            ?>
                                            <select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Thành phố</label>
                                        <select name="room_city" class="form-control">
                                        <?php
                                                foreach($listCities as $city){
                                                    $selected = '';
                                                        if($room['id_thanhpho'] == $city['id']){
                                                            $selected = 'selected';
                                                        }
                                                        echo '<option value="'.$city['id'].'"'.$selected.'>'.$city['name'].'</option>';
                                                }
                                            ?>
                                            <select>
                                    </div>
                                </div>
                             
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Chi nhánh</label>
                                        <select name="room_agency" class="form-control">
                                            <?php
                                                foreach($listAgencies as $agency){
                                                    $selected = '';
                                                        if($room['id_chinhanh'] == $agency['id']){
                                                            $selected = 'selected';
                                                        }
                                                        echo '<option value="'.$agency['id'].'"'.$selected.'>'.$agency['name'].'</option>';
                                                }
                                            ?>
                                            <select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Kiểu phòng</label>
                                        <select name="room_style" class="form-control">
                                               <?php
                                                foreach($listStyleofRooms as $styleofroom){
                                                    $selected = '';
                                                        if($room['id_kieuphong'] == $styleofroom['id']){
                                                            $selected = 'selected';
                                                        }
                                                        echo '<option value="'.$styleofroom['id'].'"'.$selected.'>'.$styleofroom['name'].'</option>';
                                                }
                                            ?>
                                            <select>
                                    </div>
                                </div>


                            </div>
                            <button type="submit" name="btnSave" class="btn btn-primary pull-right">Cập nhật</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card card-plain">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title mt-0">Danh sách phòng</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Tên Phòng
                                    </th>
                                    <th>
                                        Số Phòng
                                    </th>
                                    <th>
                                        Dịch vụ
                                    </th>
                                    <th>
                                        Giường
                                    </th>
                                    <th>
                                        Số người
                                    </th>
                                    <th>
                                        Giá tiền
                                    </th>
                                    <th>
                                        Hình ảnh
                                    </th>
                                    <th>
                                        Thao tác
                                    </th>

                                </thead>
                                <tbody>
                                    <?php
                        foreach ($listRooms as $room){
                          echo '
                          <tr>
                          <td>
                            '.$room['id'].'
                          </td>
                          <td>
                            '.$room['name'].'
                          </td>
                          <td>
                            '.$room['so_phong'].'
                          </td>
                          <td>
                            '.$room['dich_vu'].'
                          </td>
                          <td>
                            '.$room['giuong'].'
                          </td>
                          <td>
                            '.$room['so_nguoi'].'
                          </td>
                          <td>
                            '.$room['gia_tien'].'
                          </td><td>';
                          $images = explode('/',$room['hinh']);
                          foreach($images as $img){
                              if($img != ""){
                                echo '<img src = "'.$pathImg.''.$img.'" width=50px style="margin-right:3px" >';
                              }      
                          }
                            echo '
                            </td>
                            <td>
                            <a href="index.php?ctrl=room&act=delete&id='.$room['id'].'" style="margin-right:20px">Xóa </a>
                            <a href="index.php?ctrl=room&act=edit&id='.$room['id'].'">Sửa </a>
                            </td>
                          </tr>';
                        }
                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>