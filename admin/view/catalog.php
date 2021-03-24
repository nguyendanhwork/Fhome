<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Nhập thông tin</h4>

                    </div>
                    <div class="card-body">
                        <form method="POST" action="index.php?ctrl=catalog&act=add">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="hidden" name="cata_id"
                                            value="<?php if(isset($catalog)) echo $catalog['id']?>">
                                        <label class="bmd-label-floating">Tên loại</label>
                                        <input type="text" name="cata_name" class="form-control"
                                            value="<?php if(isset($catalog)) echo $catalog['name']?>">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                       
                                        <label class="bmd-label-floating">Mô tả</label>
                                        <input type="text" name="cata_des" class="form-control"
                                            value="<?php if(isset($catalog)) echo $catalog['mo_ta']?>">
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
                                        Tên danh mục
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
                        foreach ($listCatalogs as $cata){
                          echo '
                          <tr>
                          <td>
                            '.$cata['id'].'
                          </td>
                          <td>
                            '.$cata['name'].'
                          </td>
                          <td>
                            '.$cata['mo_ta'].'
                          </td>
                    
                          <td>
                          <a href="index.php?ctrl=catalog&act=delete&id='.$cata['id'].'" style="margin-right:20px">Xóa </a>
                          <a href="index.php?ctrl=catalog&act=edit&id='.$cata['id'].'">Sửa </a>
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