<?php require("header.php");?>
<?php require("nav.php");?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <form method="post" action="trigger.php?f=4">
                <h2>Product List</h2>
                <div class="form-group">
                 <div class="form-group">
                    <label for="exampleInputEmail1">select category</label>
                        <select name="ctg_id" class="form-control" id="exampleInputEmail1">
                          <option value="0">Select</option>
                            <?php
                                require 'common.php';
                                $instance = new Common();
                                $instance->ListOfCategory();
                            ?>
                           </select>
                </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">select sub category</label>
                        <select name="sub_category_id" class="form-control" id="exampleInputEmail1">
                        <option value="0">Select</option>
                            <?php
                                $instance->ListOfSubCategory();
                            ?>
                           </select>
                </div>
                </div>

                <button type="submit" class="btn btn-default">Submit</button>
            </form>

        </div>
        <div class="col-md-6">

        </div>
    </div>
</div>
<?php
require("footer.php");
?>