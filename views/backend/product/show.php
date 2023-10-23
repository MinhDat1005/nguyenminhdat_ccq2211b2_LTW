<?php
use App\Models\Product;
use App\Libraries\MyClass;

//SELECT * FROM category WHERE status != '0' AND ... ODERBY created at DESC...

$id = $_REQUEST['id'];
$product = Product::find($id);
if($product==null)
{
   MyClass::set_flash('message', ['msg'=>'Lỗi trang 404', 'type'=>'danger']);
    header("location:index.php?option=product");
}
?>


<?php require_once "../views/backend/header.php"; ?>
      <!-- CONTENT -->
      <div class="content-wrapper">
         <section class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-12">
                     <h1 class="d-inline">Chi tiết sản phẩm</h1>
                  </div>
               </div>
            </div>
         </section>

         <!-- Main content -->
         <section class="content">
            <div class="card">
               <div class="card-header text-right">
                  <a href="../backend/product_index.html" class="btn btn-sm btn-info">
                     <i class="fa fa-arrow-left" aria-hidden="true"></i>
                     Về danh sách
                  </a>
               </div>
               <div class="card-body p-2">
                  <table class="table table-bordered">
                     <thead>
                        <tr>
                           <th style="width:30%">Tên trường</th>
                           <th>Giá trị</th>
                        </tr>
                     </thead>
                     <tbody>
                     <tr>
                        <td>ID</td>
                        <td><?=$brand->id;?></td>
                     </tr>
                     <tr>
                        <td>CATEGORY_ID</td>
                        <td><?=$brand->category_id;?></td>
                     </tr>
                     <tr>
                        <td>BRAND_ID</td>
                        <td><?=$brand->brabd_id;?></td>
                     </tr>
                     <tr>
                        <td>NAME</td>
                        <td><?=$brand->name;?></td>
                     </tr>
                     <tr>
                        <td>SLUG</td>
                        <td><?=$brand->slug;?></td>
                     </tr>
                     <tr>   
                        <td>IMAGE</td>
                        <td><img style="width:100px" src="../public/images/brand/<?= $brand->image; ?>" alt="<?= $brand->image; ?>"></td>
                     </tr>
                     
                     <tr>
                        <td>SORT_ORDER</td>
                        <td><?=$brand->sort_order;?></td>
                     </tr>
                     <tr>
                        <td>DESCRIPTION</td>
                        <td><?=$brand->description;?></td>
                     </tr>
                     <tr>
                        <td>CREATED_AT</td>
                        <td><?=$brand->created_at;?></td>
                     </tr>
                     <tr>
                        <td>CREATED_BY</td>
                        <td><?=$brand->created_by;?></td>
                     </tr>
                     <tr>
                        <td>UPDATED_AT</td>
                        <td><?=$brand->updated_at;?></td>
                     </tr>
                     <tr>
                        <td>UPDATED_BY</td>
                        <td><?=$brand->updated_by;?></td>
                     </tr>
                     <tr>
                        <td>STATUS</td>
                        <td><?=$brand->status;?></td>
                     </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </section>
      </div>
      <!-- END CONTENT-->
      <?php require_once "../views/backend/footer.php"; ?>