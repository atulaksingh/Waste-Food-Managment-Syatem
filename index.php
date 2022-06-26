<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WFM</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <!-- <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    /> -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../TYIT_Project/css/style.css" />
  </head>
  <body>
    <!-- <nav class="navigation container">
      <div class="nav_brand">Waste Food Management</div>
      <ul class="ullist">
        <li class="list">
          <a class="listitem" href="How its Work">How its Work</a>
        </li>
        <li class="list">
          <a class="listitem" href="About">about</a>
        </li>
        <li class="list">
          <a class="listitem" href="Contact">Contact</a>
        </li>
        <li class="list">
          <a class="listitem" href="Registration">Registration</a>
        </li>
      </ul>
    </nav> -->
    <main class="mainpage">
      <?php
      include './components/navigation.php';
      ?>
      ​<img
        src="../TYIT_Project/bill-wegener-LqOO5Ko0zSo-unsplash.jpg"
        class="img-fluid"
        alt="Responsive image"
      />

      <div id="how-us" class="bg-#18BC9C text-dark">
        <div class="container">
          <div id="howitsworks" class="how-us fs-1 p-1">
            <p>How its Work</p>
          </div>
          <p class="fs-5 m-2">
            WFM website will provide platform to donate the food from Hotel to
            NGO, for NGO its provide service to the needly people. manage
            there’s record and manipulate the data.
          </p>
          <p class="fs-5">
            There are different sectors like Registration, Login , etc. So the
            Hotel can easily use these service and for NGOs it is perfect way to
            store the records and secure it from unauthorized the person.
          </p>
          <p class="fs-5">
            The Hotel can easily donate their food and NGO will take the action
            such as confirm request.
          </p>
          <p class="fs-5">
            Admin will manage the system by feedback stored the records of NGO
            for security purpose.
          </p>
        </div>
      </div>
      <!-- aaaaaaaaAbout Usaaaaaaaaaaaa -->
      <div id="about-us" class="bg-dark text-light fs-1">
        <div class="container">
          <div class="about-us"><p>About us</p></div>
          <div class="row">
            <div class="col-md-6 col-lg-6 fs-5">
              <p>
                Waste food management is a charity non-profit website whose
                intention is to feed needy people by avoiding leftover food to
                be wasted we collect left over food from hotel restaurant
                aria-expanded party hall by connecting them many NGOs
              </p>
            </div>
            <div class="col-md-6 col-lg-6">
              <img
                src="../TYIT_Project/Capture.PNG"
                class="img-thumbnail"
                alt="..."
              />
            </div>
          </div>
        </div>
      </div>
      <!-- hhhhhhhhhh  How its Works hhhhhhhhhh  -->
    </main>
  </body>
</html>
