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
            <div class="container-fluid" style="margin-left: 147px;margin-top: 70px;width: 83%;">
                <div class="row page-titles">
                   <span style="margin-left: 14px;font-size: 26px;font-weight: 600;">Users</span>
                   <div><a href="<?=base_url()?>user"><button class="btn btn-warning"  style="
                   margin-top: -61px;
                   margin-left: 892px;
                   background: #5d6bc4;
                   border-color: #5d6bc4;
                   color: #fff;
                   font-size: 13px;
                   border-radius: 1px;
                   border:     border-color: #5d6bc4;
                   ">View Users</button></a></div>


               </div>

               <div class="row" style="margin-top: -22px;">
                <div class="col-12">

                    <div class="card">
                        <div class="card-body" style="min-height: 450px;">

                            <form class="form-horizontal" role="form" action="<?=base_url()?>user/add" method="post" enctype="multipart/form-data" style="min-height: 284px;margin-top: 12px;margin-left: 14px;border: 1px solid #eceaea;margin-right: 21px;padding-left: 31px;padding-top: 17px;padding-bottom: 13px;">

                              <div class="form-body" style="min-height: 185px;border-bottom: 1px solid #eceaea;margin-right: 41px;">

                                <div class="form-group row">
                                  <label class="col-md-2 control-label" style="font-size: 13px;font-weight: bold!important;margin-top: 8px;">Name <span style="color: red">*</span></label>
                                  <div class="col-md-7">
                                    <input type="text" class="form-control" placeholder="Name" name="name" style="font-size: 13px;border-radius: 0px;" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-md-2 control-label" style="font-size: 13px;font-weight: bold!important;margin-top: 8px;">Phone Number <span style="color: red">*</span></label>
                              <div class="col-md-7">
                                
                                <input type="text" class="form-control" placeholder="Phone Number" id="phone" name="phone" style="font-size: 13px;border-radius: 0px;" required="" onkeypress="return mask(this,event);">
                            </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-2 control-label" style="font-size: 13px;font-weight: bold!important;margin-top: 8px;"> Address
                            <span style="color: red">*</span></label>
                            <div class="col-md-7">
                                <textarea rows="6" class="form-control" placeholder="Address" name="address" style="font-size: 13px;border-radius: 0px;" required=""></textarea>
                            </div>
                        </div>
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
 function mask(textbox, e) {

  var charCode = (e.which) ? e.which : e.keyCode;
  if (charCode == 46 || charCode > 31&& (charCode < 48 || charCode > 57)) 
  {
    alert("Only Numbers Allowed");
    return false;
}
else
{
   return true;
}
}
</script>
<script src="<?=base_url()?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>