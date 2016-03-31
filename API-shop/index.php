<?php require("header.php");?>
<?php require("nav.php");?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <form method="post" action="trigger.php?f=1">
                <h2>Create category</h2>
                <div class="form-group">
                    <label for="exampleInputEmail1">ctg_name</label>
                    <input type="text" name="ctg_name" class="form-control" id="exampleInputEmail1"
                           placeholder="category name">
                </div>

                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <form method="post" action="trigger.php?f=2">

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

            <form  method="post" action="trigger.php?f=3" enctype="multipart/form-data">
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
        <div class="col-md-6">
<<<<<<< HEAD
                        <form method="post" action="trigger.php?f=6">

                <h2>Get product by id</h2>
                <div class="form-group">
                    <label for="exampleInputEmail1">sub_ctg_name</label>
                    <input type="text" name="main_category_id" class="form-control" id="exampleInputEmail1"
                           placeholder="category id">
                </div>

                <button type="submit" class="btn btn-default">Submit</button>
            </form>
                        <form method="post" action="trigger.php?f=8">

                <h2>User Registration</h2>
                <div class="form-group">
                 <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                       <input type="text" name="name" class="form-control" 
                           placeholder="Name">
                </div>
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" 
                           placeholder="example@gmail.com">

                    <label for="exampleInputEmail1">mobile_no</label>
                    <input type="tel" name="mobile_no" class="form-control" 
                           placeholder="Mobile No">

                             <label for="exampleInputEmail1">password</label>
                    <input type="password" name="password" class="form-control" 
                           placeholder="Enter valid password">

                             <label for="exampleInputEmail1">Delivery Address</label>
                    <input type="text" name="delivery_address" class="form-control" 
                           placeholder="example@gmail.com">    
                </div>

                <button type="submit" class="btn btn-default">Submit</button>
            </form>

              <form method="post" action="trigger.php?f=9">

                <h2>Login</h2>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" 
                           placeholder="example@gmail.com">

                             <label for="exampleInputEmail1">password</label>
                    <input type="password" name="password" class="form-control" 
                           placeholder="password">    
                </div>

                <button type="submit" class="btn btn-default">Login</button>
            </form>


              <form method="post" action="trigger.php?f=9">
                <h2>Checkout Process</h2>
                <div class="form-group">
                    <label for="exampleInputEmail1">User ID#</label>
                    <input type="text" name="user_id" value="1" class="form-control" 
                           placeholder="example@gmail.com">

                 <label for="exampleInputEmail1">Total Amount</label>
                    <input type="text" name="total_amount" class="form-control" 
                           placeholder="" value="200">    

                     <label for="exampleInputEmail1">Discount Amount</label>
                    <input type="text" name="discount_amount" class="form-control" 
                           placeholder="Discount" value="20">    


                  <label for="exampleInputEmail1">Grand Total</label>
                                    <input type="text" name="grand_total" class="form-control" 
                                           placeholder="" value="180">    


                  <label for="exampleInputEmail1">Payment type</label>
                                    <select name="payment_type" class="form-control" >
                                      <option value="1">Cash on Delivery</option>
                                    </select>    

                  <label for="exampleInputEmail1">Delivery Date</label>
                                    <input type="text" name="delivery_date" class="form-control" 
                                           placeholder="Delivery date">    

                    <label for="exampleInputEmail1">Delivery Time</label>
                                    <input type="text" name="delivery_time" class="form-control" 
                                           placeholder="Delivery time">    


                </div>

                <button type="submit" class="btn btn-default">Login</button>
            </form>

=======
>>>>>>> 794553664befbb90f7ac50e7806f7e7b99af76ea

        </div>
    </div>
</div>
<?php
<<<<<<< HEAD
require("footer.php");
=======
require("footere.php");
>>>>>>> 794553664befbb90f7ac50e7806f7e7b99af76ea
?>