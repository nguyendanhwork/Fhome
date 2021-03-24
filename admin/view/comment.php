<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Nhập thông tin</h4>

                    </div>
                    <div class="card-body">
                        <form method="POST" action="index.php?ctrl= comment&act=add">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="hidden" name=" comment_id"
                                            value="<?php if(isset($comment)) echo $comment['id']?>">
                                        <label class="bmd-label-floating">Tên Khách Hàng</label>
                                        <input type="text" name="name" class="form-control"
                                            value="<?php if(isset($comment)) echo $comment['name']?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label class="bmd-label-floating">Mã phòng</label>
                                        <select name="room_kindof" class="form-control">
                                        <?php
                                                  foreach($listRooms as $room){
                                                    $selected = '';
                                                        if($comment['id_phong'] == $room['id']){
                                                            $selected = 'selected';
                                                        }
                                                        echo '<option value="'.$room['id'].'"'.$selected.'>'.$room['name'].'</option>';
                                                }
                                            ?>
                                       </select> 
                                    </div>
                                </div>
                         
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Đánh Giá</label>
                                        <input type="text" name="stars" class="form-control"
                                            value="<?php if(isset($comment)) echo $comment['stars']?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">

                                        <label class="bmd-label-floating">Nhận Xét</label>
                                        <input type="text" name="comment" class="form-control"
                                            value="<?php if(isset($comment)) echo $comment['nhan_xet']?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Email</label>
                                        <input type="email" name="email" class="form-control"
                                            value="<?php if(isset($comment)) echo $comment['email']?>">
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
                        <h4 class="card-title mt-0">Danh sách nhận xét</h4>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Tên Khách Hàng
                                    </th>
                                    <th>
                                        Mã phòng
                                    </th>
                                    <th>
                                        Đánh Giá
                                    </th>
                                    <th>
                                        Nhận Xét
                                    </th>
                                    <th>
                                        Email
                                    </th>


                                </thead>
                                <tbody>
                                    <?php
                        foreach ($listComments as $comment){
                          echo '
                          <tr>
                          <td>
                            '.$comment['id'].'
                          </td>
                          <td>
                            '.$comment['name'].'
                          </td>
                          <td>
                            '.$comment['id_phong'].'
                          </td>
                          <td>
                          '.$comment['stars'].'
                        </td>
                        <td>
                        '.$comment['nhan_xet'].'
                        </td>
                        <td>
                        '.$comment['email'].'
                      </td>

                          <td>
                          <a href="index.php?ctrl=comment&act=delete&id='.$comment['id'].'" style="margin-right:20px">Xóa </a>
                          <a href="index.php?ctrl=comment&act=edit&id='.$comment['id'].'">Sửa </a>
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