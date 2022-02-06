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
    	.page-titles .breadcrumb .breadcrumb-item + .breadcrumb-item::before {
    		display: none;
    	}
    	body{
    		font-family: Open Sans, sans-serif!important;
    		font-size: 13px!important;
    	}
    	.table td, .table th {
            padding: 0.45rem!important;
        }
    </style>
    
</head>

<body class="fix-header card-no-border fix-sidebar">
    
    <div id="main-wrapper">
       <?php $this->load->view('item/header');?>
       
       <div class="page-wrapper">
           <div class="container-fluid" style="margin-left: 146px;margin-top: 80px;width: 78%;">
            <div class="row page-titles">
                <span style="margin-left: 14px;font-size: 26px;font-weight: 600;">User</span>
                <div><a href="<?=base_url()?>user/add"><button class="btn btn-warning"  style="margin-left: 897px;margin-top: -57px;background: #5d6bc4;border-color: #5d6bc4;color: #fff;font-size: 13px;border-radius: 1px;border:     border-color: #5d6bc4;">Add user</button></a></div>
                
                
            </div>
            
            <div class="row">
                <div class="col-12">
                   
                    <div class="card">
                        <div class="card-body">
                          
                           
                            <div class="table-responsive m-t-40" style="margin-top: 9px;">
                                <table id="myTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                         <th style="color: #54667a;font-size: 13px;font-weight: bold!important;margin-top: 8px;line-height: 1.5;font-weight: bold;border-bottom: 1px solid rgb(222, 226, 230)!important;border-right: 1px solid rgb(222, 226, 230)!important;width: 48.625px;">Sl No</th>
                                         <th style="color: #54667a;font-size: 13px;font-weight: bold!important;margin-top: 8px;line-height: 1.5;font-weight: bold;border-bottom: 1px solid rgb(222, 226, 230)!important;border-right: 1px solid rgb(222, 226, 230)!important;">Name</th>
                                         <th style="color: #54667a;font-size: 13px;font-weight: bold!important;margin-top: 8px;line-height: 1.5;font-weight: bold;border-bottom: 1px solid rgb(222, 226, 230)!important;border-right: 1px solid rgb(222, 226, 230)!important;">Phone Number</th>
                                         <th style="color: #54667a;font-size: 13px;font-weight: bold!important;margin-top: 8px;line-height: 1.5;font-weight: bold;border-bottom: 1px solid rgb(222, 226, 230)!important;border-right: 1px solid rgb(222, 226, 230)!important;">Address</th>
                                         <th style="width: 31.625px;border-bottom: 1px solid #dee2e6!important;border-right: 1px solid #dee2e6!important;"></th>
                                         <th style="width: 31px;border-bottom: 1px solid #dee2e6!important;border-right: 1px solid #dee2e6!important;"></th>
                                         <th style="width: 99px;border-bottom: 1px solid #dee2e6!important;border-right: 1px solid #dee2e6!important;"></th>
                                         
                                     </tr>
                                 </thead>
                                 <tbody>
                                    <?php 
                                    $i=1; foreach ($list_data as $key => $list) { ?>
                                        <tr>
                                            <td class="text-center" style="font-size: 12px;border-radius: 0px;border-bottom: 1px solid #dee2e6!important;border-right: 1px solid #dee2e6!important;color: #54667a;font-weight: 400;line-height: 1.5;"><?=$i?></td>
                                            <td style="font-size: 12px;border-radius: 0px;border-bottom: 1px solid #dee2e6!important;border-right: 1px solid #dee2e6!important;color: #54667a;font-weight: 400;line-height: 1.5;"><?=$list['name']?></td>
                                            <td style="font-size: 12px;border-radius: 0px;border-bottom: 1px solid #dee2e6!important;border-right: 1px solid #dee2e6!important;color: #54667a;font-weight: 400;line-height: 1.5;"><?=$list['phone']?></td>
                                            <td style="font-size: 12px;border-radius: 0px;border-bottom: 1px solid #dee2e6!important;border-right: 1px solid #dee2e6!important;color: #54667a;font-weight: 400;line-height: 1.5;"><?=$list['address']?></td>
                                            <?php $b64_uid = urlencode(base64_encode($list['user_id']));?>
                                            
                                            <td class="text-center" style="border-bottom: 1px solid #dee2e6!important;border-right: 1px solid #dee2e6!important;font-size: 12px">
                                                <a href="<?=base_url();?>user/view/<?=$b64_uid?>" data-toggle="tooltip" title="View" style="color: #000000">View</a></td>
                                                
                                                <td class="text-center" style="border-bottom: 1px solid #dee2e6!important;font-size: 12px"><a href="<?=base_url();?>user/delete/<?=$b64_uid?>"  onClick="return confirm('Are you sure you want to delete this item')" data-toggle="tooltip" title="Delete" style="color: #000000">Delete</a></td>
                                                <td class="text-center" style="border-bottom: 1px solid #dee2e6!important;border-right: 1px solid #dee2e6!important;font-size: 12px">
                                                    <a href="<?=base_url();?>item/details/<?=$b64_uid?>" data-toggle="tooltip" title="View" style="color:red;font-weight: 800;">Add/View Items</a></td>
                                                </tr>
                                                <?php $i++;} ?>
                                                
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
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