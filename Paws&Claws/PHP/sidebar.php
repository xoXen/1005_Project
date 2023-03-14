<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paws & Claws</title>
    <!--Custom CSS-->
    <link rel="stylesheet" href="CSS/appointments.css">
    <!--FontAwesome, for Icons and Fonts-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--jQuery-->
    <script defer src="https://code.jquery.com/jquery-3.6.0.min.js" 
            integrity="sha384-7Jk5w5/RNA+8lv6o6O9aXnGz9KtV7y2OGndcQI7Zz5wfeSjBbI5+XyJp5cJvqJCE" 
            crossorigin="anonymous"></script>
    <!--Bootstrap JS-->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--Custom JS-->
    <script defer src="JS/main.js"></script>
    <script defer src="/your_path_to_version_6_files/js/fontawesome.js"></script>
</head>

<body>

    <aside class="navbar-expand-sm main-container d-flex">
        <div class="sidebar" id="side_nav">
            <div class="header-box px-3 pt-3 pb-2">
                <a class="navbar-brand">
                <img src="../Images/logo.png" class=".img-fluid" width="120" alt="Logo"/>
                </a>
            </div>

            <ul class="list-unstyled px-2">
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-home"></i> Dashboard</a></li>
                <li class="active"><a href="../PHP/appointments.php" class="text-decoration-none px-3 py-2 d-block"><i class="far fa-calendar-check"></i> Appointments</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fad fa-paw"></i> Pets</a></li>
                <hr class="h-color mx-3"></hr>
            </ul>

            <ul class="list-unstyled px-2">
                <li class=''><a href='#' class='text-decoration-none px-3 py-2 d-block'><i class='fal fa-bell'></i> Notifications</a></li>
            </ul>


            <div class="dropdown">
                <button class="btn link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>User</strong>
                </button>

                <ul class="dropdown-menu dropdown-menu-right text-small shadow" aria-labelledby="dropdownUser2">
                    <li><a class="dropdown-item" href="#">View Profile</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>

    </aside>
            
    
</body>
