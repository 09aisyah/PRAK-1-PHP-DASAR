<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Online Shop</title>
</head>
<body style="background-color:silver;">
    <div class="bg-success p-3">
    <h1 class="text-center text-white">Online Shop</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6" style="color:green;">
            <form action="online_shop.php" method="post" class="mt-3">
            
            <div class="form-group">
                    <label for=""> Customer</label>
                    <input type="text" name="customer" value="" class="form-control">
                </div>
                <div class="form-group">
                <label for="">Item</label><br>
                  <div class="form-check form-check-inline" style="color:black;">
                  
                    <input class="form-check-input" type="radio" name="item" id="inlineRadio1" value="TV">
                    <label class="form-check-label" for="inlineRadio1">TV</label>
                    </div>
                    <div class="form-check form-check-inline" style="color:black;">
                    <input class="form-check-input" type="radio" name="item" id="inlineRadio2" value="Kulkas">
                    <label class="form-check-label" for="inlineRadio2">Refrigator</label>
                    </div>
                    <div class="form-check form-check-inline" style="color:black;">
                    <input class="form-check-input" type="radio" name="item" id="inlineRadio2" value="Mesin Cuci">
                    <label class="form-check-label" for="inlineRadio3">Washing Machine</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Total Item</label>
                    <input type="text" name="total_item" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for=""> Order Date</label>
                    <input type="date" name="tanggal_order" value="" class="form-control">
                </div>
                <label for="">Courier Type</label>
                <select class="form-select form-control" name= "kurir" class="form-control">
                    <option selected>Choose Courier Type :</option>
                    <option value="Tiki">Tiki</option>
                    <option value="Si Cepat">Si Cepat</option>
                    <option value=" Pos">Pos</option>
                    <option value=" Grab">Grab</option>
                    <option value=" Gojek">Gojek</option>
                </select>
                <br>
                <div class="form-group">
                    <label for="">Shipping Address</label>
                    <textarea class="form-control" name="alamat" id="" cols="30" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Contact Number</label>
                    <input type="text" name="contact" value="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Courier Cost</label>
                    <input type="text" name="biaya_antar" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Assurance Cost</label>
                    <input type="text" name="asuransi" value="" class="form-control">
                </div>
                <br>
                <input type="submit" value="Simpan" name="simpan" class="btn btn-success btn-sm btn-block">
            </form>
            <?php

error_reporting(0);
    
    $customer = $_POST['customer'];
    $item = $_POST['item'];
    $total_item = $_POST['total_item'];
    $tanggal_order = $_POST['tanggal_order'];
    $kurir = $_POST['kurir'];
    $alamat = $_POST['alamat'];
    $contact = $_POST['contact'];
    $biaya_antar = $_POST['biaya_antar'];
    $asuransi = $_POST['asuransi'];
    $simpan = $_POST['simpan'];
    if($item == "TV") {
        $total_cost = (3000000 * $total_item) + ($biaya_antar + $asuransi);
    } else if ($item == "Refrigator") {
        $total_cost = (6000000 * $total_item) + ($biaya_antar + $asuransi);
    } else{
        $total_cost = (4000000 * $total_item) + ($biaya_antar + $asuransi);
    }
?>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Customer :<?= $customer; ?></li>
                    <li class="list-group-item">Item : <?= $item; ?></li>
                    <li class="list-group-item">Date Shipping : <?= $tanggal_order; ?> </li>
                    <li class="list-group-item">Courier Type : <?= $kurir; ?></li>
                    <li class="list-group-item">Shipping Address : <?= $alamat; ?></li>
                    <li class="list-group-item">Contact Number : <?= $contact; ?></li>
                    <li class="list-group-item">Courier Cost : <?= $biaya_antar; ?> </li>
                    <li class="list-group-item">Assurance Cost : <?= $asuransi; ?> </li>
                    <li class="list-group-item">Total Cost : <?= $total_cost; ?></li>
                   
                </ul>
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                    Cost List
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">TV : Rp.3.000.000</li>
                    <li class="list-group-item">Refrigator : Rp.6.000.000</li>
                    <li class="list-group-item">Washing Machine : Rp. 4.000.000</li>
                </ul>
                </div>
            </div>
            
        </div>
        
    </div>
</body>
</html>