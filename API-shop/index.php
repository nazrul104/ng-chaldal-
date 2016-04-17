<?php require("template/header.php");?>
<?php require("template/nav.php");?>
<div class="container-fluid">
    <?php

            switch ($_REQUEST['page']) {
            case 1:
              include("template/web_api.php");
            break;

            case 2:
            include("template/mobileapi.php");
            break;

              case 3:
            include("template/admin_api.php");
            break;
          
          default:
            # code...
            break;
        }
    ?>
</div>
