<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paws & Claws</title>
    <!--Custom CSS-->
    <link rel="stylesheet" href="../CSS/appointments.css">
    <link rel="stylesheet" href="../CSS/footer.css">
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--jQuery-->
        <script defer
        src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
        </script>
    <!--Bootstrap JS-->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--Custom JS-->
    <script defer src="../JS/appointments.js"></script>
</head>


<body>
        
    <?php include "sidebar.php"?>   

    
    <div class="content">
        <br>
        <h1 style="font-weight: 300">Your Appointments</h1>
        <br>
        <h3 style="font-weight: bold">Ongoing</h3>
        <br>
        <div class="dropdown">

            <button class="btn text-decoration-none dropdown-toggle" id="dropdownStatus" data-bs-toggle="dropdown" aria-expanded="false"”>Status
                <span class="caret"></span>
            </button>

            <ul class="dropdown-menu dropdown-menu-right text-small shadow" aria-labelledby="dropdownStatus">
                <li><a class="dropdown-item" href="#">Upcoming</a></li>
                <li><a class="dropdown-item" href="#">Previous</a></li>
            </ul>
        </div>

        <div class="nobookings container d-flex align-items-center justify-content-center flex-column">
            <img src="../Images/paw.png" width="120px" alt="Paw Icon"/>
            <p class="mt-3">There are currently no bookings.</p>
        <button type="button" class="btn btn-outline-secondary mt-3" style="color: #9CAF88; border-color: #9CAF88;">Make a Booking</button>
        </div>
    </div>
    
    <?php include "footer.inc.php"?>   

</body>