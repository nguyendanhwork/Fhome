<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Nhập thông tin</h4>

                    </div>
                    <div class="card-body">
                        <form method="POST" action="index.php?ctrl=styleofroom&act=add" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="hidden" name="style_id"
                                            value="<?php if(isset($styleofroom)) echo $styleofroom['id']?>">
                                        <label class="bmd-label-floating">Tên loại</label>
                                        <input type="text" name="style_name" class="form-control"
                                            value="<?php if(isset($styleofroom)) echo $styleofroom['name']?>">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                       
                                        <label class="bmd-label-floating">Mô tả</label>
                                        <input type="text" name="style_des" class="form-control"
                                            value="<?php if(isset($styleofroom)) echo $styleofroom['mo_ta']?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="file" name="style_image"
                                            style="opacity:1 !important;position:unset">
                                        <img src="">
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
                        <h4 class="card-title mt-0">Danh sách kiểu phòng</h4>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Kiểu Phòng
                                    </th>
                                    <th>
                                        Mô tả
                                    </th>
                                    <th>
                                        Hình
                                    </th>
                           
                                    <th>
                                        Thao tác
                                    </th>

                                </thead>
                                <tbody>
                                    <?php
                        foreach ($liststyleofroom as $styleofroom){
                          echo '
                          <tr>
                          <td>
                            '.$styleofroom['id'].'
                          </td>
                          <td>
                            '.$styleofroom['name'].'
                          </td>
                          <td>
                            '.$styleofroom['mo_ta'].'
                          </td>
                          <td>
                          <img src ="'.$pathImg.''.$styleofroom['hinh'].'" />
                        </td>
                    
                          <td>
                          <a href="index.php?ctrl=styleofroom&act=delete&id='.$styleofroom['id'].'" style="margin-right:20px">Xóa </a>
                          <a href="index.php?ctrl=styleofroom&act=edit&id='.$styleofroom['id'].'">Sửa </a>
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