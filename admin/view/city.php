<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Nhập thông tin</h4>

                    </div>
                    <div class="card-body">
                        <form method="POST" action="index.php?ctrl=city&act=add" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="hidden" name="city_id"
                                            value="<?php if(isset($city)) echo $city['id']?>">
                                        <label class="bmd-label-floating">Tên loại</label>
                                        <input type="text" name="city_name" class="form-control"
                                            value="<?php if(isset($city)) echo $city['name']?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="file" name="city_image"
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
                        <h4 class="card-title mt-0">Danh sách danh mục</h4>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Tên Thành Phố
                                    </th>
                                <td>
                                        Hình
                                </th>
                           
                                    <th>
                                        Thao tác
                                    </th>

                                </thead>
                                <tbody>
                                    <?php
                        foreach ($listCity as $city){
                          echo '
                          <tr>
                          <td>
                            '.$city['id'].'
                          </td>
                          <td>
                            '.$city['name'].'
                          </td>
                          <td> <img src="'.$pathImg.''.$city['hinh'].'"/>;</td>
                            
                          <td>
                          <a href="index.php?ctrl=city&act=delete&id='.$city['id'].'" style="margin-right:20px">Xóa </a>
                          <a href="index.php?ctrl=city&act=edit&id='.$city['id'].'">Sửa </a>
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