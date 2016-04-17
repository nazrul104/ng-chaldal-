
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-6 col-md-4">
            <form method="post" action="trigger.php?f=1">
                <h2>Create category</h2>
                <div class="form-group">
                    <label for="exampleInputEmail1">ctg_name</label>
                    <input type="text" name="ctg_name" class="form-control" id="exampleInputEmail1"
                           placeholder="category name">
                </div>

                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <form method="post" action="admin_api_router.php?f=2">

                <h2>Create sub category</h2>
                <div class="form-group">
                 <div class="form-group">
                    <label for="exampleInputEmail1">select category</label>
                        <select name="ctg_id" class="form-control" id="exampleInputEmail1">
                            <?php
                                require 'common.php';
                                $instance = new Common();
                                $instance->ListOfCategory();
                            ?>
                           </select>
                </div>
                    <label for="exampleInputEmail1">sub_ctg_name</label>
                    <input type="text" name="sub_ctg_name" class="form-control" id="exampleInputEmail1"
                           placeholder="sub category name">
                </div>

                <button type="submit" class="btn btn-default">Submit</button>
            </form>

            <form  method="post" action="admin_api_router.php?f=3" enctype="multipart/form-data">
                <h2>Create products</h2>
               <div class="form-group">
                    <label for="exampleInputEmail1">select category</label>
                        <select name="sub_category_id" class="form-control" id="exampleInputEmail1">
                            <?php
                                $instance->ListOfSubCategory();
                            ?>
                           </select>
                </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">product_title</label>
                    <input type="text" name="product_title" class="form-control" id="exampleInputEmail1"
                           placeholder="item title">
                </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">product_summary</label>
                    <textarea name="product_summary" class="form-control" id="exampleInputEmail1"
                           placeholder="short description"></textarea>
                </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">product_descripton</label>
                    <textarea name="product_descripton" class="form-control" id="exampleInputEmail1"
                           placeholder="Details of product"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">product_size</label>
                    <input type="text" name="product_size" class="form-control" id="exampleInputEmail1"
                           placeholder="if(any)size">
                </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">product_color</label>
                    <input type="text" name="product_color" class="form-control" id="exampleInputEmail1"
                           placeholder="if(any) color">
                </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">product_price</label>
                    <input type="text" name="product_price" class="form-control" id="exampleInputEmail1"
                           placeholder="product price">
                </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">product_weight</label>
                    <input type="text" name="product_weight" class="form-control" id="exampleInputEmail1"
                           placeholder="Weight of product">
                </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">product_image</label>
                    <input type="file" name="product_image" class="form-control" id="exampleInputEmail1"
                           placeholder="select image">
                </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">product_isActive</label>
                    <select name="product_isActive" class="form-control" id="exampleInputEmail1" >
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">product_stock</label>
                    <input type="text" name="product_stock" class="form-control" id="exampleInputEmail1"
                           placeholder="Number of item in stock">
                </div>

                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
        <div class="col-xs-6 col-md-4">
              <form method="post" action="admin_api_router.php?f=4">
                <h2>Product List</h2>
                <div class="form-group">
                    <label for="exampleInputEmail1">Product ID#</label>
                    <input type="text" name="pid" value="1" class="form-control"
                           placeholder="Product id">
                </div>

                <button type="submit" class="btn btn-default">Login</button>
            </form>
        </div>

        <div class="col-xs-6 col-md-4">
              <form method="post" action="admin_api_router.php?f=5">
                <h2>Product List</h2>
                <div class="form-group">
                    <label for="exampleInputEmail1">Product ID#</label>
                    <input type="text" name="pid" value="1" class="form-control"
                           placeholder="Product id">
                </div>

                <button type="submit" class="btn btn-default">Login</button>
            </form>
        </div>

    </div>
</div>
