<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Value Form</title>
</head>
<body style="background-color:silver;">
    <div class="bg-primary p-3">
    <h1 class="text-center text-white">Value Form</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6" style="color:blue;">
            <form action="value_form.php" method="get" class="mt-3">
            
            <div class="form-group" >
                    <label for="">Name</label>
                    <input type="text" name="name" value="" class="form-control">
                </div>

                
            <div class="form-group">
                    <label for="">Nim</label>
                    <input type="text" name="nim" value="" class="form-control">
                </div>
                <label for="">Jurusan</label>
                <select class="form-select form-control" name="jurusan" class="form-control">
                    <option selected>Choose Jurusan :</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                </select>
                <br>
                <label for="">Lesson</label>
                <select class="form-select form-control" name="lesson" class="form-control">
                    <option selected>Choose Lesson :</option>
                    <option value="Web programming">Web Programming</option>
                    <option value="Database">Database</option>
                    <option value="Statiska">Statiska</option>
                    <option value="Pkn">PKN</option>
                    <option value="UI/UX">UI/UX</option>
                </select>
                <br>
                <div class="form-group">
                    <label for=""> UTS Value</label>
                    <input type="text" name="uts_value" value="" class="form-control">
                </div>

                
                <div class="form-group">
                    <label for="">UAS Value</label>
                    <input type="text" name="uas_value" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Assignment Value</label>
                    <input type="text" name="assignment_value" value="" class="form-control">
                </div>
                <input class="btn btn-primary" type="submit" value="Simpan" name="simpan"/>

            </form>
<?php
$hari_ini = date("j-F-y");
$name = $_GET['name'];
$nim = $_GET['nim'];
$jurusan = $_GET['jurusan'];
$lesson = $_GET['lesson'];
$uts_value = $_GET['uts_value'];
$uas_value = $_GET['uas_value'];
$assignment_value = $_GET['assignment_value'];
$value_total = $_GET['value_total'];
$value_in_alphabet = $_GET['value_in_alphabet'];
$simpan = $_GET['simpan']; 
?>
            <?php
            $value_total=($uts_value + $uas_value + $assignment_value);
            $va=($value_total / 3) 
            ?>

<?php
    if ($va <= 39 ) 
{
$value_in_alphabet = 'E' ;
}
else if ($va <= 40 )
{
$value_in_alphabet = 'D' ;
}

else if ($va <= 60 )
{
$value_in_alphabet = 'C' ;
}
else if ($va <= 70 )
{
$value_in_alphabet = 'B' ;
}
else
{
$value_in_alphabet = 'A' ;
}
?>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Tanggal :<?= $hari_ini?></li>
                    <li class="list-group-item">Name :<?= $name?></li>
                    <li class="list-group-item">Nim :<?= $nim?></li>
                    <li class="list-group-item">Jurusan :<?= $jurusan ?></li>
                    <li class="list-group-item">Lesson:<?= $lesson?></li>
                    <li class="list-group-item"> UTS Value :<?= $uts_value?></li>
                    <li class="list-group-item">UAS Value:<?= $uas_value?></li>
                    <li class="list-group-item">Assignment Value:<?= $assignment_value?></li>
                    <li class="list-group-item">Value Total:<?= $value_total?></li>
                    <li class="list-group-item">Value in Alphabet:<?= $value_in_alphabet?></li>
                    
                    
                </ul>
                </div>

            </div>
            
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Value
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">A : 85 - 100</li>
                    <li class="list-group-item">B : 70 -84</li>
                    <li class="list-group-item">C: 60-79</li>
                    <li class="list-group-item">D : 40 - 59 </li>
                    <li class="list-group-item">C : Less than 40 </li>
                    
                    
                </ul>
                </div>

        </div>
        
    </div>
</body>
</html>