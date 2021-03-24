<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Nhập thông tin</h4>

                    </div>
                    <div class="card-body">
                        <form method="POST" action="index.php?ctrl=news&act=add" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="hidden" name="news_id"
                                            value="<?php if(isset($news)) echo $news['id']?>">
                                        <label class="bmd-label-floating">Tiêu đề</label>
                                        <input type="text" name="news_name" class="form-control"
                                            value="<?php if(isset($news)) echo $news['name']?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Mô tả</label>
                                        <input type="text" name="news_description" class="form-control"
                                            value="<?php if(isset($news)) echo $news['mo_ta']?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="file" name="news_image"
                                            style="opacity:1 !important;position:unset">
                                        <img src="">
                                    </div>
                                </div>
                             
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Danh mục</label>
                                        <select name="news_newscatalog" class="form-control">
                                            <?php
                                                  foreach($listNewscatalogs as $newscatalog){
                                                    $selected = '';
                                                        if($news['id_dmtt'] == $newscatalog['id']){
                                                            $selected = 'selected';
                                                        }
                                                        echo '<option value="'.$newscatalog['id'].'"'.$selected.'>'.$newscatalog['name'].'</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nội dung</label>
                                        <textarea name="news_content" id="news_content" class="form-control"
                                            value="<?php if(isset($news)) echo $news['noi_dung']?>"></textarea>
                                    </div>
                                </div>  
                                <script>
                                    tinymce.init({
                                    selector: '#news_content'
                                    });         
                                </script>

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
                                        Tiêu đề
                                    </th>
                                    <th>
                                        Mô tả
                                    </th>
                                    <th>
                                        Hình
                                    </th>
                                    <th>
                                        Danh mục
                                    </th>
                                    <th>
                                       Ngày tạo
                                    </th>
                                    <th>
                                        Thao tác
                                    </th>

                                </thead>
                                <tbody>
                                    <?php
                        foreach ($listNews as $news){
                          echo '
                          <tr>
                          <td>
                            '.$news['id'].'
                          </td>
                          <td>
                            '.$news['name'].'
                          </td>
                          <td>
                            '.$news['name'].'
                          </td>
                          <td>
                          <img src="'.$pathImg.''.$news['hinh'].'" />

                          </td>
                          <td>
                            '.$news['id_dmtt'].'
                          </td>
                          <td>'.$news['ngay_tao'].'</td>
                          <td>
                          <a href="index.php?ctrl=news&act=delete&id='.$news['id'].'" style="margin-right:20px">Xóa </a>
                          <a href="index.php?ctrl=news&act=edit&id='.$news['id'].'">Sửa </a>
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