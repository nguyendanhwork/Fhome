<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Nhập thông tin</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="index.php?ctrl=customer&act=add">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="hidden" name="customer_id"
                                            value="<?php if(isset($customer)) echo $customer['id']?>">
                                        <label class="bmd-label-floating">Tên khách hàng</label>
                                        <input type="text" name="customer_name" class="form-control"
                                            value="<?php if(isset($customer)) echo $customer['name']?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Tên tài khoản</label>
                                        <input type="text" name="customer_username" class="form-control"
                                            value="<?php if(isset($customer)) echo $customer['user_name']?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Mật khẩu</label>
                                        <input type="password" name="customer_password" class="form-control"
                                            value="<?php if(isset($customer)) echo $customer['pass_word']?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Số điện thoại</label>
                                        <input type="text" name="customer_sdt" class="form-control"
                                            value="<?php if(isset($customer)) echo $customer['sdt']?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Email</label>
                                        <input type="email" name="customer_email" class="form-control"
                                            value="<?php if(isset($customer)) echo $customer['email']?>">
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
                        <h4 class="card-title mt-0">Danh sách khách hàng</h4>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Tên khách hàng
                                    </th>
                                    <th>
                                        Tên tài khoản
                                    </th>
                                    <th>
                                       Số điện thoại
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
                        foreach ($listCustomers as $customer){
                          echo '
                          <tr>
                          <td>
                            '.$customer['id'].'
                          </td>
                          <td>
                            '.$customer['name'].'
                          </td>
                          <td>
                            '.$customer['user_name'].'
                          </td>
                          <td>
                          '.$customer['sdt'].'
                        </td>
                        <td>
                        '.$customer['email'].'
                      </td>
                          <td>
                          <a href="index.php?ctrl=customer&act=delete&id='.$customer['id'].'" style="margin-right:20px">Xóa </a>
                          <a href="index.php?ctrl=customer&act=edit&id='.$customer['id'].'">Sửa </a>
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