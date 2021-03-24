<!-- 
    R.S AHMAD AGIL ALATAS
    203040093
    Praktikum Web Programming, Kamis jam 8
 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Latihan3e_203040092</title>
</head>
<style>
* {
  margin: 0;
  padding: 0;
}
table {
  display: inline-flexbox;
  font-size: 15px;
  text-align: center;
  padding-right: 50px;
}
</style>
<body>
    <?php
    $distro = [
        ["no" => "1",
        "Picture" => "img/img1.jpg",
        "Name" => "Black Hoodie",
        "Description" => "Coton 60%, Polyester 40%Doublure de capuche: Polyester 100%",
        "Price" => "Rp.100.000",
        "Size" => "S M L XL"],

        ["no" => "2",
        "Picture" => "img/img2.jpg",
        "Name" => "White Hoodie",
        "Description" => "Coton 60%, Polyester 40%Doublure de capuche: Polyester 100%",
        "Price" => "Rp.15 0.000",
        "Size" => "S M L XL"],

        ["no" => "3",
        "Picture" => "img/img3.jpg",
        "Name" => "Maroon Hoodie",
        "Description" => "Coton 60%, Polyester 40%Doublure de capuche: Polyester 100%",
        "Price" => "Rp.400.000",
        "Size" => "S M L XL"],

        ["no" => "4",
        "Picture" => "img/img4.jpg",
        "Name" => "Pink Hoodie",
        "Description" => "Coton 60%, Polyester 40%Doublure de capuche: Polyester 100%",
        "Price" => "Rp.100.000",
        "Size" => "S M L XL"],

        ["no" => "5",
        "Picture" => "img/img5.jpg",
        "Name" => "white Tshirt",
        "Description" => "Coton 60%, Polyester 40%Doublure de capuche: Polyester 100%",
        "Price" => "Rp.100.000",
        "Size" => "S M L XL"],

        ["no" => "6",
        "Picture" => "img/img6.jpg",
        "Name" => "Black Tshirt",
        "Description" => "Coton 60%, Polyester 40%Doublure de capuche: Polyester 100%",
        "Price" => "Rp.300.000",
        "Size" => "S M L XL"],

        ["no" => "7",
        "Picture" => "img/img7.jpg",
        "Name" => "Maroon Tshirt",
        "Description" => "Coton 60%, Polyester 40%Doublure de capuche: Polyester 100%",
        "Price" => "Rp.200.000",
        "Size" => "S M L XL"],

        ["no" => "8",
        "Picture" => "img/img8.jpg",
        "Name" => "Grey Tshirt",
        "Description" => "Coton 60%, Polyester 40%Doublure de capuche: Polyester 100%",
        "Price" => "Rp.500.000",
        "Size" => "S M L XL"],

        ["no" => "9",
        "Picture" => "img/img9.jpg",
        "Name" => "Blue Crewneck",
        "Description" => "Coton 60%, Polyester 40%Doublure de capuche: Polyester 100%",
        "Price" => "Rp.600.000",
        "Size" => "S M L XL"],

        ["no" => "10",
        "Picture" => "img/img10.jpg",
        "Name" => "Green crewneck",
        "Description" => "Coton 60%, Polyester 40%Doublure de capuche: Polyester 100%",
        "Price" => "Rp.100.000",
        "Size" => "S M L XL"],
    ];
?>
<div class="jaket">
    <h2>Distro<h2>
    <table class="table table-bordered table-info table-hover "  >
  <thead>
  <tbody>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Picture</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Size</th>
    </tr>
    <?php foreach ($distro as $i) { ?>
        <tr>
            <td><?php echo $i["no"]; ?></td>
            <td><img src="img/<?php echo $i["Picture"]?>"></td>    
            <td><?php echo $i["Name"]; ?><br></td>
            <td><?php echo $i["Description"]; ?><br></td>
            <td><?php echo $i["Price"]; ?><br></td>
            <td><?php echo $i["Size"]; ?><br></td>

        </tr>   
      </tbody>
  </thead>
  <?php } ?>
</table>
</body>
</html>