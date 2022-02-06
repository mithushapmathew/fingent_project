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
    <link rel="stylesheet" type="text/css"
    href="<?=base_url()?>assets/plugins/datatables.net-bs4/css/responsive.dataTables.min.css">
    <link href="<?=base_url()?>assets/plugins/horizontal/css/style.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/plugins/horizontal/css/style.css" id="theme" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="//cdn.ckeditor.com/4.5.5/standard/ckeditor.js"></script>
    <style type="text/css">
      .page-titles .breadcrumb .breadcrumb-item + .breadcrumb-item::before {
        display: none;
    }
    body{
        font-family: Open Sans, sans-serif!important;
        font-size: 13px!important;
    }
    .table td, .table th {
        padding: 0.45rem;
    }
    .form-group {
        margin-bottom: 11px!important;
    }
</style>
</head>

<body class="fix-header card-no-border fix-sidebar">

    <div id="main-wrapper">
      <?php $this->load->view('header');?>
      <div class="page-wrapper">
        <div class="container-fluid" style="margin-left: 147px;margin-top: 60px;width: 78%;">
            <div class="row page-titles">
                <div class="col-md-6 col-8 align-self-center">
                    <span style="margin-left: 14px;font-size: 26px;font-weight: 600;">User</span>

                </div>

            </div>

            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-body">

                            <div class="tools" style="margin-top: -6px;margin-right: 24px;text-align: right;">

                             <a href="<?=base_url()?>user" style="color: #000;font-size: 14px;font-weight: 400;"><u style="border-bottom: 1px solid;color: #3ad45b;">View All users</u><!-- </button> --></a> &nbsp;&nbsp;&nbsp;
                         </div><br>
                         <?php foreach ($details as $key => $value) { ?>
                          <?php $b64_uid = urlencode(base64_encode($value['user_id']));?>
                          <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" style="margin-left: 32px;">
                           <div class="form-body">
                            <div class="row" style="border: 1px solid #e6e3e3;padding-top: 27px;padding-bottom: 44px;margin-right: 23px;">
                             <div class="col-md-12">
                              <div class="col-md-9">
                                  <p style="margin-left: 3px;"><strong style="font-size: 18px;font-weight: 700;">Details</strong></p><br>
                                  <table class="table table-striped table-bordered table-hover" id="sample_1" style="margin-left: 3px;">
                                    <tbody>
                                     <tr>
                                      <td style="width: 164px;font-weight: 700;border: 1px solid #ddd;"><strong>Name</strong></td>
                                      <td style="border: 1px solid #ddd;"><?=$value['name']?></td>
                                  </tr>
                                  <tr>
                                      <td style="width: 164px;font-weight: 700;border: 1px solid #ddd;"><strong>Phone No</strong></td>
                                      <td style="border: 1px solid #ddd;"><?=$value['phone']?> </td>
                                  </tr>
                                  <tr>
                                    <td style="width: 164px;font-weight: 700;border: 1px solid #ddd;"><strong>Address</strong></td>
                                    <td style="border: 1px solid #ddd;"><?=$value['address']?> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>							
    </form>
<?php } ?>
<br>
<span style="margin-left: 14px;font-size: 26px;font-weight: 600;">Items</span>
<div class="table-responsive m-t-40" style="margin-top: 9px;">
    <table id="myTable" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th style="color: #54667a;font-size: 13px;font-weight: bold!important;margin-top: 8px;line-height: 1.5;font-weight: bold;border-bottom: 1px solid rgb(222, 226, 230)!important;border-right: 1px solid rgb(222, 226, 230)!important;width: 48.625px;">Sl No</th>
                <th style="color: #54667a;font-size: 13px;font-weight: bold!important;margin-top: 8px;line-height: 1.5;font-weight: bold;border-bottom: 1px solid rgb(222, 226, 230)!important;border-right: 1px solid rgb(222, 226, 230)!important;">Item Name</th>
                <th style="color: #54667a;font-size: 13px;font-weight: bold!important;margin-top: 8px;line-height: 1.5;font-weight: bold;border-bottom: 1px solid rgb(222, 226, 230)!important;border-right: 1px solid rgb(222, 226, 230)!important;">Price & Quantity</th>
                <th style="color: #54667a;font-size: 13px;font-weight: bold!important;margin-top: 8px;line-height: 1.5;font-weight: bold;border-bottom: 1px solid rgb(222, 226, 230)!important;border-right: 1px solid rgb(222, 226, 230)!important;">Tax</th>
                <th style="color: #54667a;font-size: 13px;font-weight: bold!important;margin-top: 8px;line-height: 1.5;font-weight: bold;border-bottom: 1px solid rgb(222, 226, 230)!important;border-right: 1px solid rgb(222, 226, 230)!important;">Total</th>
                <th class="text-center" style="color: #54667a;font-size: 13px;font-weight: bold!important;margin-top: 8px;line-height: 1.5;font-weight: bold;border-bottom: 1px solid rgb(222, 226, 230)!important;border-right: 1px solid rgb(222, 226, 230)!important;"></th>


            </tr>
        </thead>
        <tbody>
            <?php 
            $i=1; foreach ($item_list as $key => $list) { ?>
                <tr>
                    <td class="text-center" style="font-size: 12px;border-radius: 0px;border-bottom: 1px solid #dee2e6!important;border-right: 1px solid #dee2e6!important;color: #54667a;font-weight: 400;line-height: 1.5;"><?=$i?></td>
                    <td style="font-size: 12px;border-radius: 0px;border-bottom: 1px solid #dee2e6!important;border-right: 1px solid #dee2e6!important;color: #54667a;font-weight: 400;line-height: 1.5;"><?=$list['name']?></td>
                    <td style="font-size: 12px;border-radius: 0px;border-bottom: 1px solid #dee2e6!important;border-right: 1px solid #dee2e6!important;color: #54667a;font-weight: 400;line-height: 1.5;"><?=$list['unit_price']?>*<?=$list['quantity']?></td>
                    
                    <td style="font-size: 12px;border-radius: 0px;border-bottom: 1px solid #dee2e6!important;border-right: 1px solid #dee2e6!important;color: #54667a;font-weight: 400;line-height: 1.5;"><?=$list['tax']?>%</td>
                    <?php $total =$list['unit_price']*$list['quantity'];
                    $total_tax = $total * ($list['tax']/100);
                    $grand_total = $total + $total_tax;?>
                    <td style="font-size: 12px;border-radius: 0px;border-bottom: 1px solid #dee2e6!important;border-right: 1px solid #dee2e6!important;color: #54667a;font-weight: 400;line-height: 1.5;">$ <?=$grand_total?> /-</td>
                    <?php $b64_vid = urlencode(base64_encode($list['item_id']));?>


                    <td class="text-center" style="border-bottom: 1px solid #dee2e6!important;font-size: 12px"><a href="<?=base_url();?>item/invoice/<?=$b64_wid?>" >View Invoice</a></td>
                </tr>
                <?php $i++;} ?>

            </tbody>
            <?php if($item_list){ ?>
                <tbody>
                    <td></td><td></td>
                    <td></td><td style="text-align: right;font-weight: 600;">SubTotal Without Tax</td>
                    <td style="font-weight: 600;">$ <?=$subtotal->subtotal?></td>
                    <td></td>
                    <td></td>
                </tbody>
                <tbody>
                    <td></td><td></td>
                    <td></td><td style="text-align: right;font-weight: 600;">Discount</td>
                    <td style="font-weight: 600;">
                        <?php if($discount!="0"){?>
                            <?php  foreach ($discount_value as $key => $list1) { ?>
                                <?php if($list1['discount']=="amount") {?>
                                    $ <?=$list1['amount'];?>
                                <?php } else {?>
                                 <?=$list1['amount'];?> %
                             <?php } ?>
                         <?php } ?>
                     <?php } else {?>
                        <form class="form-horizontal" role="form" action="<?=base_url()?>item/add_discount/<?=$b64_wid?>" method="post" enctype="multipart/form-data" ><input type="radio" name="discount" value="percentage">Percentage   <input type="radio" name="discount" value="amount" checked="">Amount <br><input type="number" name="amount" placeholder="Amount/Percentage"> <button type="submit" class="btn btn-info" style="padding: 1px 12px!important;">Add</button></form>
                    <?php } ?>
                </td>
                <td></td>
                <td></td>
            </tbody>
            <tbody>
                <td></td><td></td>
                <td></td><td style="text-align: right;font-weight: 600;">SubTotal With Tax</td>
                <td style="font-weight: 600;">$ <?=$grandtotal->grandtotal?></td>
                <td></td>
                <td></td>
                
            </tbody>
            <tbody>
                <td></td><td></td>
                <td></td><td style="text-align: right;font-weight: 600;">Total Amount(with discount)</td>
                <?php if($discount!="0"){?>
                    <?php  foreach ($discount_value as $key => $list1) { ?>
                        <?php if($list1['discount']=="amount") {?>
                            <?=$total_discount = $grandtotal->grandtotal - $list1['amount'];?>
                            <td style="font-weight: 600;">$ <?=$total_discount?></td>
                            
                        <?php } else {?>
                         <?=$total_discount1 = $grandtotal->grandtotal - ($grandtotal->grandtotal * ($list1['amount']/100));?>
                         <td style="font-weight: 600;">$ <?=$total_discount1?></td>
                     <?php } ?>
                 <?php } ?>
             <?php } else {?>

                <td style="font-weight: 600;">$ <?=$grandtotal->grandtotal?></td>
            <?php } ?>
            <!-- <td style="font-weight: 600;">$ <?=$grandtotal->grandtotal?></td> -->
            <td></td>
            <td></td>
            
        </tbody>
    <?php } ?>
</table>
</div>
</div>
</div>


</div>
</div>
</div>

<script data-cfasync="false" src="<?=base_url()?>assets/plugins/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables.net-bs4/js/dataTables.responsive.min.js"></script>

<script>
    $(function () {
        $('#myTable').DataTable();
            // responsive table
            $('#config-table').DataTable({
                responsive: true
            });
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function (settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function (group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function () {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });

            $('#example23').DataTable({
                dom: 'Bfrtip',
                buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
            $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
        });

    </script>  
    <script src="<?=base_url()?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>