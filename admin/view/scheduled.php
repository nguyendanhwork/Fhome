<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Nhập thông tin</h4>

                    </div>
                    <div class="card-body">
                        <form method="POST" action="index.php?ctrl=scheduled&act=add">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="hidden" name="scheduled_id"
                                            value="<?php if(isset($scheduled)) echo $scheduled['id']?>">
                                        <label class="bmd-label-floating">Tên KH</label>
                                        <input type="text" name="scheduled_name" class="form-control"
                                            value="<?php if(isset($scheduled)) echo $scheduled['name']?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Mã Phòng</label>
                                        <select name="scheduled_id_room" class="form-control">
                                        <?php
                                                  foreach($listRooms as $room){
                                                    $selected = '';
                                                        if($scheduled['id_phong'] == $room['id']){
                                                            $selected = 'selected';
                                                        }
                                                        echo '<option value="'.$room['id'].'"'.$selected.'>'.$room['name'].'</option>';
                                                }
                                            ?>
                                         <select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Email</label>
                                        <input type="email" name="email" class="form-control"
                                            value="<?php if(isset($scheduled)) echo $scheduled['email']?>">
                                    </div>
                                </div>
                          
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">SĐT</label>
                                        <input type="text" name="scheduled_phone" class="form-control"
                                            value="<?php if(isset($scheduled)) echo $scheduled['sdt']?>">
                                    </div>
                                </div>
                          
                               
                                <div class="col-md-4">
                                    <div class="form-group">
                                       
                                        <label class="bmd-label-floating">Check_in</label>
                                        <input type="date" name="check_in" class="form-control"
                                            value="<?php if(isset($scheduled)) echo $scheduled['check_in']?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                       
                                        <label class="bmd-label-floating">Check_out</label>
                                        <input type="date" name="check_out" class="form-control"
                                            value="<?php if(isset($scheduled)) echo $scheduled['check_out']?>">
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
                    <h4 class="card-title mt-0">Danh sách đặt lịch</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                       ID Phòng
                                    </th>
                                    <th>
                                       Tên khách hàng
                                    </th>
                                    <th>
                                       SĐT
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Check_in
                                    </th>
                                    <th>
                                    Check_out
                                    </th>
                                    

                                </thead>
                                <tbody>
                                    <?php
                        foreach ($listScheduled as $scheduled){
                          echo '
                          <tr>
                                <td>
                                    '.$scheduled['id'].'
                                </td>
                             
                                <td>
                                    '.$scheduled['id_phong'].'
                                </td>
                                <td>
                                    '.$scheduled['name'].'
                                </td>
                                <td>
                                '.$scheduled['sdt'].'
                                </td>
                                <td>
                                '.$scheduled['email'].'
                                </td>
                                <td>
                                '.$scheduled['check_in'].'
                                </td>
                                <td>
                                '.$scheduled['check_out'].'
                                </td>
                               
                          <td>
                          <a href="index.php?ctrl=scheduled&act=delete&id='.$scheduled['id'].'" style="margin-right:20px">Xóa </a>
                          <a href="index.php?ctrl=scheduled&act=edit&id='.$scheduled['id'].'">Sửa </a>
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