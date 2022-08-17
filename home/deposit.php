<?php 
require('includes/auth.php');
require('includes/header.php'); 
require('includes/nav.php'); 


$sql = mysqli_query($con, "SELECT * FROM `fx_coin` order by ID desc");
$rows = mysqli_num_rows($sql) ;
?>
<!-- Header -->
<div class="header pb-6" style="background-color:#288FDD;">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Home</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item">
                <a href="#"><i class="fas fa-home"></i></a>
              </li>
              <li class="breadcrumb-item"><a href="#">Deposit</a></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Header end -->

<!-- Page content -->
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col-xl-12">
      <div class="card">
        <div class="card-header bg-transparent">
          <div class="row align-items-center">
            <div class="col">
              <h2 class="h1 text-center text-default mb-0">Deposit</h2>
            </div>
          </div>
        </div>
        <div class="card-body">
          <form method="POST" action="payment.php">
            
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label style="font-size:25px;" class="form-control-label" for="input-username"
                      >Choose payment method</label
                    >
                    <select required name="coinid" class="custom-select" id="inputGroupSelect02">
                    <?php
                                if($rows<1){?>
                                  <option>No coin</option>
                                  <?php
                                }else{
                                   echo " <option value=''>Select coin</option>";
                                  while($row1 = mysqli_fetch_array($sql)){
                                    $coin_id =$row1["ID"];

                                    $coin_name =$row1["coin_name"];

                                    echo"<option value='$coin_id'>$coin_name</option>
                                    ";
                                  }
                                }
                                ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label style="font-size:25px;" class="form-control-label" for="input-first-name"
                      >Amount in USD</label
                    >
                    <input 
                      required 
                      type="number"
                      id="input-first-name"
                      class="form-control"
                      placeholder="Amount"
                      name="amount"
                      step="any"
                    />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="text-right">
                    <input
                      type="submit"
                      id="submit1"
                      class="form-control btn bg-gradient-danger text-white my-4"
                      value="Proceed to Deposit"
                      name="submit"
                    />
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php 
require('includes/footer.php'); 
?>
</div>
