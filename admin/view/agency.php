<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Nhập thông tin</h4>

                    </div>
                    <div class="card-body">
                        <form method="POST" action="index.php?ctrl=agency&act=add">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="hidden" name="agency_id"
                                            value="<?php if(isset($agency)) echo $agency['id']?>">

                                        <label class="bmd-label-floating">Tên Chi Nhánh</label> 
                                        <input type="text" name="agency_name" class="form-control"
                                            value="<?php if(isset($agency)) echo $agency['name']?>">
                                    </div>
                                    
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        
                                        <label class="bmd-label-floating">Địa Chỉ</label> 
                                        
                                        <input type="text" name="agency_address" class="form-control"
                                            value="<?php if(isset($agency)) echo $agency['dia_chi']?>">
                                    </div>
                                    
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                       
                                        <label class="bmd-label-floating">Số Điện Thoại</label> 
                                        <input type="text" name="agency_phone" class="form-control"
                                            value="<?php if(isset($agency)) echo $agency['sdt']?>">
                                    </div>
                                    
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                       
                                        <label class="bmd-label-floating">Email</label>     
                                        <input type="email" name="agency_email" class="form-control"
                                            value="<?php if(isset($agency)) echo $agency['email']?>">
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
                                        Tên Chi Nhánh
                                    </th>
                                    <th>
                                        Địa Chỉ
                                    </th>
                                    <th>
                                        Số Điện Thoại
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Thao tác
                                    </th>

                                </thead>
                                <tbody>
                                    <?php
                        foreach ($listAgencies as $agency){
                          echo '
                          <tr>
                          <td>
                            '.$agency['id'].'
                          </td>
                          <td>
                            '.$agency['name'].'
                          </td>
                          <td>
                            '.$agency['dia_chi'].'
                          </td>
                          <td>
                            '.$agency['sdt'].'
                          </td>
                          <td>
                            '.$agency['email'].'
                          </td>
                      
                    
                          <td>
                          <a href="index.php?ctrl=agency&act=delete&id='.$agency['id'].'" style="margin-right:20px">Xóa </a>
                          <a href="index.php?ctrl=agency&act=edit&id='.$agency['id'].'">Sửa </a>
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