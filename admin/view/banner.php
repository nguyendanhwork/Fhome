<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Nhập thông tin</h4>

                    </div>
                    <div class="card-body">
                        <form method="POST" action="index.php?ctrl=banner&act=add" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <input type="hidden" name="banner_id"
                                            value="<?php if(isset($banner)) echo $banner['id']?>">
                                        <label class="bmd-label-floating">Tên loại</label>
                                        <input type="text" name="banner_name" class="form-control"
                                            value="<?php if(isset($banner)) echo $banner['name']?>">
                                            
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                      
                                        <label class="bmd-label-floating">Mô tả</label>
                                        <input type="text" name="banner_des" class="form-control"
                                            value="<?php if(isset($banner)) echo $banner['mo_ta']?>">
                                            
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Hot</label>
                                        <input type="number" min=0 max=1 name="banner_hot" class="form-control"
                                            value="<?php if(isset($banner)) echo $banner['hot']?>">
                                            
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Sort</label>
                                        <input type="number" min=0 max=1 name="banner_sort" class="form-control"
                                            value="<?php if(isset($banner)) echo $banner['sort']?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">URL</label>
                                        <input type="text" name="banner_url" class="form-control"
                                            value="<?php if(isset($banner)) echo $banner['url']?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="file" name="banner_image"
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
                                        Tên 
                                    </th>
                                    <th>
                                       Mô tả
                                    </th>
                                    <th>
                                        Hot
                                    </th>
                           
                                    <th>
                                        Sort
                                    </th>
                                    <th>
                                        URL
                                    </th>
                                    <th>
                                        Hình
                                    </th>
                                </thead>
                                <tbody>
                                    <?php
                        foreach ($listBanner as $banner){
                          echo '
                          <tr>
                          <td>
                            '.$banner['id'].'
                          </td>
                          <td>
                            '.$banner['name'].'
                          </td>
                          <td>
                          '.$banner['mo_ta'].'
                        </td>
                          <td>
                            '.$banner['hot'].'
                          </td>
                          <td>
                            '.$banner['sort'].'
                          </td>
                          <td>
                          '.$banner['url'].'
                        </td>
                          <td>
                                <img src="'.$pathImg.''.$banner['hinh'].'"/>;</td
                          </td>
                          <td>
                          <a href="index.php?ctrl=banner&act=delete&id='.$banner['id'].'" style="margin-right:20px">Xóa </a>
                          <a href="index.php?ctrl=banner&act=edit&id='.$banner['id'].'">Sửa </a>
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