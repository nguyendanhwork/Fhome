<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Nhập thông tin</h4>

                    </div>
                    <div class="card-body">
                        <form method="POST" action="index.php?ctrl=kindofroom&act=add">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="hidden" name="kindof_id"
                                            value="<?php if(isset($kindofroom)) echo $kindofroom['id']?>">
                                        <label class="bmd-label-floating">Tên loại</label>
                                        <input type="text" name="kindof_name" class="form-control"
                                            value="<?php if(isset($kindofroom)) echo $kindofroom['name']?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                       
                                        <label class="bmd-label-floating">Giá Tiền</label>
                                        <input type="text" name="kindof_price" class="form-control"
                                            value="<?php if(isset($kindofroom)) echo $kindofroom['gia_tien']?>">
                                    </div>
                                </div><br>
                                <div class="col-md-4">
                                    <div class="form-group">
                                       
                                        <label class="bmd-label-floating">Mô Tả</label>
                                        <input type="text" name="kindof_des" class="form-control"
                                            value="<?php if(isset($kindofroom)) echo $kindofroom['mo_ta']?>">
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
                        <h4 class="card-title mt-0">Danh sách loại phòng</h4>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Loại phòng
                                    </th>
                                    <th>
                                        Giá tiền
                                    </th>
                           
                                    <th>
                                        Mô tả
                                    </th>
                                    <th>
                                        Thao tác
                                    </th>
                                </thead>
                                <tbody>
                                    <?php
                        foreach ($listkindofroom as $kindofroom){
                          echo '
                          <tr>
                          <td>
                            '.$kindofroom['id'].'
                          </td>
                          <td>
                            '.$kindofroom['name'].'
                          </td>
                          <td>
                            '.$kindofroom['gia_tien'].'
                          </td>
                          <td>
                            '.$kindofroom['mo_ta'].'
                          </td>
                    
                          <td>
                          <a href="index.php?ctrl=kindofroom&act=delete&id='.$kindofroom['id'].'" style="margin-right:20px">Xóa </a>
                          <a href="index.php?ctrl=kindofroom&act=edit&id='.$kindofroom['id'].'">Sửa </a>
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