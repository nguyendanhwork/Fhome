<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Nhập thông tin</h4>

                    </div>
                    <div class="card-body">
                        <form method="POST" action="index.php?ctrl=newscatalog&act=add">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="hidden" name="newscatalog_id"
                                            value="<?php if(isset($newscatalog)) echo $newscatalog['id']?>">
                                        <label class="bmd-label-floating">Tên loại</label>
                                        <input type="text" name="newscatalog_name" class="form-control"
                                            value="<?php if(isset($newscatalog)) echo $newscatalog['name']?>">
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
                                        Thao tác
                                    </th>

                                </thead>
                                <tbody>
                                    <?php
                        foreach ($listNewscatalogs as $cata){
                          echo '
                          <tr>
                          <td>
                            '.$cata['id'].'
                          </td>
                          <td>
                            '.$cata['name'].'
                          </td>
                          <td>
                          <a href="index.php?ctrl=newscatalog&act=delete&id='.$cata['id'].'" style="margin-right:20px">Xóa </a>
                          <a href="index.php?ctrl=newscatalog&act=edit&id='.$cata['id'].'">Sửa </a>
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