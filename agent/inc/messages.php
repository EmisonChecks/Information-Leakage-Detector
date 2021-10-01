<?php
                        if(isset($_SESSION['del_s'])){?>
                         <div class="alert alert-danger alert-dismissible">
                           <button class="close" type="button" data-dismiss="alert" area-hidden="true">&times</button>
                           <?php echo $_SESSION['del_s'];?> <i class="fa fa-check"></i></div> 
                         <?php unset($_SESSION['del_s']);
                      }
                          elseif(isset($_SESSION['del_f'])){?>
                            <div class="alert alert-danger alert-dismissible">
                           <button class="close" type="button" data-dismiss="alert" area-hidden="true">&times</button>
                           <?php echo $_SESSION['del_f'];?> <i class="fa fa-ban"></i></div> 
                            <?php
                            unset($_SESSION['del_f']);
                          }
                          elseif(isset($_SESSION['distributor_u'])){?>
                            <div class="alert alert-info alert-dismissible">
                           <button class="close" type="button" data-dismiss="alert" area-hidden="true">&times</button>
                           <?php echo $_SESSION['distributor_u'];?> <i class="fa fa-check"></i></div> 
                            <?php
                            unset($_SESSION['distributor_u']);
                          }
                        ?>
<?php


if(isset($_SESSION['file'])){?>
  <div class="alert alert-success alert-dismissible">
    <button class="close" type="button" data-dismiss="alert" area-hidden="true">&times</button>
   <span class="textbold">SUCCESS:</span> <?php echo $_SESSION['file'];?> <i class="fa fa-check"></i></div> 
  <?php unset($_SESSION['file']);
}
   elseif(isset($_SESSION['fail'])){?>
     <div class="alert alert-danger alert-dismissible">
    <button class="close" type="button" data-dismiss="alert" area-hidden="true">&times</button>
    <span class="textbold">Error:</span> <?php echo $_SESSION['fail'];?> <i class="fa fa-ban"></i></div> 
     <?php
     unset($_SESSION['fail']);
   }
   elseif(isset($_SESSION['file_ex'])){?>
     <div class="alert alert-warning alert-dismissible">
    <button class="close" type="button" data-dismiss="alert" area-hidden="true">&times</button>
    <span class="textbold">Error:</span> <?php echo $_SESSION['file_ex'];?> <i class="fa fa-check"></i></div> 
     <?php
     unset($_SESSION['file_ex']);
   }
 ?>