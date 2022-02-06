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
    ::placeholder
    {
      color: #bdc2c8!important;
    }
  </style>
</head>

<body class="fix-header card-no-border fix-sidebar">

  <div id="main-wrapper">
   <?php $this->load->view('header');?>
   <div class="page-wrapper">
    
    <div class="container-fluid" style="margin-left: 147px;margin-top: 60px;width: 78%;">
      <div class="row page-titles">
       <span style="margin-left: 14px;font-size: 26px;font-weight: 600;">Items</span>
       <div><a href="<?=base_url()?>item/details/<?=$b64_wid?>"><button class="btn btn-warning"  style="
       margin-top: -60px;
       margin-left: 913px;
       background: #5d6bc4;
       border-color: #5d6bc4;
       color: #fff;
       font-size: 13px;
       border-radius: 1px;
       border:     border-color: #5d6bc4;
       ">View Items</button></a></div>
     </div>

     <div class="row">
      <div class="col-12">

        <div class="card" style="margin-top: -19px;">
          <div class="card-body" style="min-height: 450px;">

            <form class="form-horizontal" role="form" action="<?=base_url()?>item/add/<?=$b64_wid?>" method="post" enctype="multipart/form-data" style="min-height: 284px;margin-top: 12px;margin-left: 14px;border: 1px solid #eceaea;margin-right: 21px;padding-left: 31px;padding-top: 17px;padding-bottom: 13px;">

              <div class="form-body" style="min-height: 185px;border-bottom: 1px solid #eceaea;margin-right: 41px;">
                <table class="table table-bordered" id="dynamic_field" style="border: none!important;">  
                  <tr>  
                    <td style="border: none!important;"> <input type="text" class="form-control" placeholder="Name" name="name[]" style="font-size: 13px;border-radius: 0px;" required=""></td>  
                    <td style="border: none!important;"><input type="number" class="form-control" placeholder="Quantity" name="quantity[]" style="font-size: 13px;border-radius: 0px;" required=""></td>
                    <td style="border: none!important;"><input type="text" class="form-control" placeholder="Unit Price" name="unit_price[]" style="font-size: 13px;border-radius: 0px;" required=""></td>
                    <td style="border: none!important;"> <select class="form-control select2 select2_sample21" data-placeholder="Select Tax..." name="tax[]" style="font-size: 13px;border-radius: 0px;height: 33px;" required="required">
                      <option value="">Select Tax</option>
                      <option value="0">0%</option>
                      <option value="1">1%</option>
                      <option value="5">5%</option>
                      <option value="10">10%</option>
                    </select></td>
                    <td style="border: none!important;"><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                  </tr>  
                </table> 
              </div><br>
              <div class="text-xs-right">
                <button type="submit" class="btn btn-info">Submit</button>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script data-cfasync="false" src="<?=base_url()?>assets/plugins/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script src="<?=base_url()?>assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?=base_url()?>assets/plugins/datatables.net-bs4/js/dataTables.responsive.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){      
      var i=1;  

      $('#add').click(function(){  
       i++;  
       $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td style="border: none!important;"> <input type="text" class="form-control" placeholder="Name" name="name[]" style="font-size: 13px;border-radius: 0px;" required=""></td><td style="border: none!important;"><input type="number" class="form-control" placeholder="Quantity" name="quantity[]" style="font-size: 13px;border-radius: 0px;" required=""></td><td style="border: none!important;"><input type="text" class="form-control" placeholder="Unit Price" name="unit_price[]" style="font-size: 13px;border-radius: 0px;" required=""></td><td style="border: none!important;"><select class="form-control select2 select2_sample21" data-placeholder="Select Tax..." name="tax[]" style="font-size: 13px;border-radius: 0px;height: 33px;" required="required"><option value="">Select Tax</option><option value="0">0%</option><option value="1">1%</option><option value="5">5%</option><option value="10">10%</option></select></td><td style="border: none!important;"><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
     });

      $(document).on('click', '.btn_remove', function(){  
       var button_id = $(this).attr("id");   
       $('#row'+button_id+'').remove();  
     });  

    });  
  </script>

  <script src="<?=base_url()?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>