<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <body style="background-color:grey;">
    <nav class="navbar-dark bg-secondary ">
      <ul class="nav justify-content-center">

        <li class="nav-item ">
            <h6 style="text-align: center;color:antiquewhite">
          <a class="nav-link active text-light" href="Panca_Home.php">
            Home
          </a>
            </h6>
        </li>
        <li class="nav-item ">
            <h6 style="text-align: center;color:antiquewhite">
          <a class="nav-link active text-light" href="Panca_Booking.php">
            Booking
          </a>
          </h6>
        </li>
      </ul>
    </nav>

        <div class = "container style="text-align: center; padding-top: 0.5cm;">

            <div class="class text-center mb-5 text-primary">
                <h6 style="text-align: center;color:blue">
                   <p>
                   Thank You Panca_1202204283 for Reserving
                   <br>
                   double check your reservation details please
                   </p> 
                </h6>

<table class="table">
  <thead>
    <tr>
      <th scope="col">
          <b>
              Booking Number
          </b>
      </th>
      <th scope="col">
          <b>
              Name
          </b>
      </th>
      <th scope="col">
          <b>
              Check-in
          </b>
      </th>
      <th scope="col">
          <b>
                Check-out
          </b>
      </th>

      <th scope="col">
          <b>
                Car Type
          </b>
      </th>

      <th scope="col">
          <b>
                Phone Number
          </b>
      </th>

      <th scope="col">
          <b>
                Service(s)
          </b>
      </th>

      <th scope="col">
          <b>
                Total Price
          </b>
      </th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">
          <?php 
          echo rand();
          ?></th>
      <td>Noor Panca Maulana</td>
      <td>25-12-2022 09:00:00</td>
      <td>26-12-2022 09:00:00</td>
      <td>Brio</td>
      <td>082385892450</td>
      <td>- Health protocol
        <br>
        - Fuel Filled
      </td>
      <td>Rp150.000</td>
    </tr>

  </tbody>
</table>
<footer style="text-align: center;color:black">
    <b>
        (Panca_1202204283)
    </b>
</footer>
</body>
</html>