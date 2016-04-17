
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-6 col-md-4">
                        <form method="post" action="web_api_router.php?f=5">
                <h2>Get All Categories</h2>
                <div class="form-group">
                    <label for="exampleInputEmail1">main_category_id</label>
                    <input type="text" name="main_category_id" class="form-control" id="exampleInputEmail1"
                           placeholder="Main category id">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>

            <form method="post" action="web_api_router.php?f=4">
                <h2>Get Sub Categories by id</h2>
                <div class="form-group">
                    <label for="exampleInputEmail1">main_category_id</label>
                    <input type="text" name="main_category_id" class="form-control" id="exampleInputEmail1"
                           placeholder="Main category id">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>


            <form method="post" action="web_api_router.php?f=7">
                <h2>Get Products by category id</h2>
                <div class="form-group">
                    <label for="exampleInputEmail1">main_ctg_id</label>
                    <input type="text" name="main_category_id" class="form-control" id="exampleInputEmail1"
                           placeholder="Main category id">

                      <label for="exampleInputEmail1">sub_ctg_name</label>
                    <input type="text" name="sub_category_id" class="form-control" id="exampleInputEmail1"
                           placeholder="sub category id">

                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>

              <form method="post" action="web_api_router.php?f=6">
                <h2>Get product by main category id</h2>
                <div class="form-group">
                    <label for="exampleInputEmail1">sub_ctg_name</label>
                    <input type="text" name="main_category_id" class="form-control" id="exampleInputEmail1"
                           placeholder="category id">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>

              <form method="post" action="web_api_router.php?f=3">
                <h2>Get product Details by id</h2>
                <div class="form-group">
                    <label for="exampleInputEmail1">sub_ctg_name</label>
                    <input type="text" name="pid" class="form-control" id="exampleInputEmail1"
                           placeholder="Product id">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>

            <form method="post" action="web_api_router.php?f=8">
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

              <form method="post" action="web_api_router.php?f=9">

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


              <form method="post" action="web_api_router.php?f=10">
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



        </div>
    </div>
</div>
