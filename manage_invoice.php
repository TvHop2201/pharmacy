<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Quản Lý Hóa Đơn</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/sidenav.css">
  <link rel="stylesheet" href="css/home.css">
  <script src="js/manage_invoice.js"></script>
  <script src="js/restrict.js"></script>
</head>

<body>
  <!-- including side navigations -->
  <?php include("sections/sidenav.html"); ?>

  <div class="container-fluid">
    <div class="container">

      <!-- header section -->
      <?php
      require "php/header.php";
      createHeader('address-book', 'Quản Lý Hóa Đơn', 'Quản Lý Hóa Đơn');
      ?>
      <!-- header section end -->

      <!-- form content -->
      <div class="row">

        <div class="col-md-12 form-group form-inline">
          <label class="font-weight-bold" for="">Tìm Kiếm :&emsp;</label>
          <input type="number" class="form-control" id="by_invoice_number" placeholder="ID_Hóa ĐƠN" onkeyup="searchInvoice(this.value, 'INVOICE_ID');">
          &emsp;<input type="text" class="form-control" id="by_customer_name" placeholder="Tên Khách Hàng" onkeyup="searchInvoice(this.value, 'NAME');">
          &emsp;<label class="font-weight-bold" for="">Theo Ngày Lập Hóa Đơn :&emsp;</label>
          <input type="date" class="form-control" id="by_date" onchange="searchInvoice(this.value, 'INVOICE_DATE');">
          &emsp;<button class="btn btn-success font-weight-bold" onclick="refresh();"><i class="fa fa-refresh"></i></button>
        </div>

        <div class="col col-md-12">
          <hr class="col-md-12" style="padding: 0px; border-top: 2px solid  #02b6ff;">
        </div>


        <div class="col col-md-12 table-responsive">
          <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>ID Hóa Đơn</th>
                  <th>Tên Khách Hàng</th>
                  <th>Ngày Tháng</th>
                  <th>Giá Bán</th>
                  <th>Giảm Giá </th>
                  <th>Tổng</th>
                  <th>Hành Động</th>
                </tr>
              </thead>
              <tbody id="invoices_div">
                <?php
                require 'php/manage_invoice.php';
                showInvoices();
                ?>
              </tbody>
            </table>
          </div>
        </div>

      </div>
      <!-- form content end -->
      <hr style="border-top: 2px solid #ff5252;">
    </div>
  </div>
</body>

</html>