<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Invoice</title>
  <link rel="canonical" href="" />
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
  <link href="<?=base_url()?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plugins/datatables.net-bs4/css/responsive.dataTables.min.css">

  <style type="text/css">
   .col-md-3 {
    width: 29%!important;
    padding-left: 28px;
  }
  .col-md-12 {
    width: 57%;
  }
  .col-md-5 {
    width: 81.666667%;
  }
  

</style>
<style type="">
  @media print {
    body{
      width: 28cm;
      height: 40.6cm;
      margin: 0mm 0mm 0mm 0mm; 
      font-size: 5px!important;
      color: #1F4E79!important;
      background:url(images/mybg.png) no-repeat;
      /* change the margins as you want them to be. */
    } 
    

    #Header, #Footer { display: none !important; }
    #damage{
     display:inline-flex!important;
     margin:0px!important;}
     
     #li{
       margin-top:27px!important;
     }
     
     #tex{
       width: 400px!important;
       height: 109px!important;
       background: transparent!important;
       margin-left: -250px!important;
       margin-top:10px!important;
     }
     #b1{display:none!important;}
     #b2{display:none!important;}
     #b3{display:none!important;}
     #b4{display:none!important;}

     #onprint{
      display:none!important;
    }
    #med_logo{
     width: 909px!important;
     margin-top: -15px!important;
     margin-left: -102px!important;
     text-align: center!important;
   }

   #med20{
    /*margin-top: 108px!important;*/
    color: #1f4e79!important;

    font-size: 25px!important;
  }

  #med20211{
   color: #000!important;
   font-size: 23px!important;
   margin-left:23px!important; 
   margin-top:562px!important; 
 }

 #pbox{
  width: 113%!important;
  height:1343px!important;
}
#hiim-logo{
  margin-left: -94px!important;
  margin-top: 10px!important;
  width: 909px!important;
}
#center1{
  font-size: 38px!important;
  color: #1f4e79!important;
}

#email1{
  color: #1f4e79!important;
  /*margin-left: -182px!important;*/
}

#hr1{
  margin-top:53px!important;
  margin-right:73px!important;
  width:995px!important;
}
#table1{
  width:905px!important; 
}
#table11{
  margin-top:19px!important; 
  width:905px!important; 
}
#font1{
 font-size: 18px!important; 
}

#tab1{
  margin-top:54px!important;
  font-size:19px;
}
}
</style>
</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo page-sidebar-closed-hide-logo" style="background: #ffff!important;">

  <!-- BEGIN HEADER -->

  <!-- END HEADER -->
  <div class="clearfix">
  </div>
  <!-- BEGIN CONTAINER -->
  <div class="page-container" style="background: #fff;">
    <!-- BEGIN SIDEBAR -->

    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
     <div class="page-content" style="margin-top: 32px;margin-left: 63px;margin-right: 58px;">

      <!-- BEGIN PAGE CONTENT-->
      <?php foreach ($user_details as $key => $value) { ?>
        <div class="row">				<!-- BEGIN EXAMPLE TABLE PORTLET-->
         <div class="col-md-12 ">
           <a onclick="myFunction()" id="onprint" type="button" class="btn btn-success" style="padding: 6px 22px;font-size: 12px;margin-top: -59px;"> Print</a>
           <!-- BEGIN SAMPLE FORM PORTLET-->
           <div class="portlet box green " style="border: 3px solid #1f4e79;margin-left: 11px;width: 59%;/* margin-bottom: 3px; */background-color: #fff;padding-left: 36px;" id="pbox">
            <div class="portlet-body form" id="port-body" style="width: 824px;margin-left: 8px;margin-top: 8px;margin-right: 8px;margin-bottom: 54px;"><br>
             <div style="width: 509px;text-align: center!important;margin-top: -23px;text-align: left;margin-left: 34px;" id="hiim-logo">
              <span style="color: #1f4e79;text-align: center;font-size: 28px;font-weight: 1000;" id="center1">Invoice <BR></div>
                <div style="width: 505px;margin-top: -5px;margin-left: 38px;text-align: center;" id="med_logo">
                  <span style="font-size: 15px;color: #1F4E79;font-weight: 600;/* margin-top: 73px; */" id="med20">Ph: 9012345678 <br><span id="email1">email: info@invoice.com</span></span> </div>
                  <br>
                  <hr style="margin-left: -8px;margin-right: 180px;margin-top: -16px;border-top: 1px solid #3e80b9;" id="hr1">
                  <div class="col-md-8" style="margin-top: 25px;" id="tab1">
                    <table style="height: 53px;width: 322px;" id="table1">
                     <tr>
                      <td><b> Name:</b> </td> 
                      <td> <?=$value['name']?> </td> 
                    </tr>
                    <tr>
                      <td><b> Phone Number:</b> </td> 
                      <td> <?=$value['phone']?> </td> 
                    </tr>
                    <tr>
                      <td><b> Address:</b> </td> 
                      <td> <?=$value['address']?> </td> 
                    </tr>


                  </table>
                </div>
                <div class="col-md-4" style="margin-top: 25px;" id="tab1">
                  Date :<?=date("d/m/Y")?>
                </div>
                <br>

                <br>

                <div>
                  <table style="height: 53px;border: 1px solid #3e80b9;width: 598px;margin-left: 15px;" id="table11">
                    <tr>
                      <th style="padding-left: 9px;border: 1px solid #3e80b9;" id="font1">Item Name</th>
                      <th style="padding-left: 9px;border: 1px solid #3e80b9;" id="font1">Price</th>
                      <th style="padding-left: 9px;border: 1px solid #3e80b9;" id="font1">Quantity</th>
                      <th style="padding-left: 9px;border: 1px solid #3e80b9;" id="font1">Tax</th>
                      <th style="padding-left: 9px;border: 1px solid #3e80b9;" id="font1">Total</th>
                    </tr>
                    <?php foreach ($list_data as $key => $value) {?>
                      <tr style="height: 24px;border: 1px solid #3e80b9;">
                        <td style="padding-left: 9px;border: 1px solid #3e80b9;" id="font1"><?=$value['name']?></td>
                        <td style="padding-left: 9px;border: 1px solid #3e80b9;" id="font1">$ <?=$value['unit_price']?></td>
                        <td style="padding-left: 9px;border: 1px solid #3e80b9;" id="font1"><?=$value['quantity']?></td>
                        <td style="padding-left: 9px;border: 1px solid #3e80b9;" id="font1"><?=$value['tax']?> %</td>
                        <?php $total =$value['unit_price']*$value['quantity'];
                        $total_tax = $total * ($value['tax']/100);
                        $grand_total = $total + $total_tax;?>
                        <td style="padding-left: 9px;border: 1px solid #3e80b9;" id="font1"> $ <?=$total?>/-</td>
                      </tr>
                    <?php } ?>
                    <tr style="height: 24px;border: 1px solid #3e80b9;">
                      <td style="padding-left: 9px;" id="font1"></td>
                      <td style="padding-left: 9px;" id="font1"></td>
                      <td style="padding-left: 9px;" id="font1"></td>
                      <td style="padding-left: 9px;border-right: 1px solid #3e80b9;" id="font1"><b>SubTotal Without Tax</b></td>
                      <td style="padding-left: 9px;" id="font1"> $ <?=$subtotal->subtotal?>/-</td>
                    </tr>
                    <tr style="height: 24px;border: 1px solid #3e80b9;">
                      <td style="padding-left: 9px;" id="font1"></td>
                      <td style="padding-left: 9px;" id="font1"></td>
                      <td style="padding-left: 9px;" id="font1"></td>
                      <td style="padding-left: 9px;border-right: 1px solid #3e80b9;" id="font1"><b>Discount</b></td>
                      <?php  foreach ($discount_value as $key => $list1) { ?>
                        <?php if($list1['discount']=="amount") {?>
                          <td style="padding-left: 9px;" id="font1"> $ <?=$list1['amount']?>/-</td>

                        <?php } else {?>
                         <td style="padding-left: 9px;" id="font1"> <?=$list1['amount']?>%</td>
                       <?php } ?>
                     <?php } ?>

                   </tr>
                   <tr style="height: 24px;border: 1px solid #3e80b9;">
                    <td style="padding-left: 9px;" id="font1"></td>
                    <td style="padding-left: 9px;" id="font1"></td>
                    <td style="padding-left: 9px;" id="font1"></td>
                    <td style="padding-left: 9px;border-right: 1px solid #3e80b9;" id="font1"><b>SubTotal With Tax</b></td>
                    <td style="padding-left: 9px;" id="font1"> $ <?=$grandtotal->grandtotal?>/-</td>
                  </tr>
                  <tr style="height: 24px;">
                    <td style="padding-left: 9px;" id="font1"></td>
                    <td style="padding-left: 9px;" id="font1"></td>
                    <td style="padding-left: 9px;" id="font1"></td>
                    <td style="padding-left: 9px;border-right: 1px solid #3e80b9;" id="font1"><b>Total Amount</b> </td>

                    <?php if($discount!="0"){?>
                      <?php  foreach ($discount_value as $key => $list1) { ?>
                        <?php if($list1['discount']=="amount") { ?>
                          <?=$total_discount = $grandtotal->grandtotal - $list1['amount'];?>
                          <td style="padding-left: 9px;" id="font1">$ <?=$total_discount?>/-</td>

                        <?php } else {?>
                         <?=$total_discount1 = $grandtotal->grandtotal - ($grandtotal->grandtotal * ($list1['amount']/100));?>
                         <td style="padding-left: 9px;" id="font1">$ <?=$total_discount1?>/-</td>
                       <?php } ?>
                     <?php } ?>
                   <?php } else { ?>
                    <td style="padding-left: 9px;" id="font1">$ <?=$grandtotal->grandtotal?> /-</td>
                  <?php } ?>

                </tr>
              </table>
            </div><br>

            <br><br><br>

            <span style="font-size: 14px;margin-left: 34px;/* margin-top: 70px; */font-weight: 300;color: #000000;" id="med20211"><b>(Signature) </span> 

            </div>
          </div>
          <!-- END SAMPLE FORM PORTLET-->
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
      </div>
    <?php } ?>
    <!-- END PAGE CONTENT-->
  </div>
</div>
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->

<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<script src="<?=base_url()?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?=base_url()?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
  jQuery(document).ready(function() {       
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
FormWizard.init();
});
</script>
<script>
  function myFunction() {
    window.print();
  }

</script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
<!-- BEGIN PAGE LEVEL PLUGINS -->
