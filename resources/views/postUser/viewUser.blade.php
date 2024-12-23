<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGE USER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        /* HEADER UTAMA */
        .header-utama {
            display: flex; 
            align-items: center;
            position: sticky;
            z-index: 100;
            top: 0;
            background-color: #dbceb0;
            padding: 10px 20px;
            flex-wrap: wrap;
        }

        .header .navbar-brand {
            display: flex;
            align-items: center; 
        }

        .header h1 {
            padding-left: 10px;
            font-size: 1.5rem;
            margin: 0;
        }

        .navbar {
            margin-left: auto; 
        }

        .navbar a {
            color: black;
        }

        .navbar-toggler {
            border-color: black;
        }

        .navbar-nav .nav-item .navbar-brand:hover {
            color: black;
        }

        .navbar-nav .nav-item.dropdown:hover .navbar-brand {
            color: black;
        }

        .navbar-nav .nav-item .dropdown-menu .dropdown-item:hover {
            color: black;
            background-color: #dbceb0;
        }

        .navbar-right {
            padding-left: 40px;
        }





        .profile-dropdown {
            position: relative;
        }

        .profile-pic {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
        }

        .dropdown-menu {
            position: absolute;
            top: 50px;
            right: 0;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            display: none;
            width: 150px;
            z-index: 100;
        }

        .dropdown-menu.show {
            display: block;
        }

        .dropdown-menu a {
            display: block;
            padding: 10px 15px;
            color: #1e293b;
            text-decoration: none;
            font-size: 14px;
        }

        .dropdown-menu a:hover {
            background-color: #f1f5f9;
            color: #1e40af;
        }





        /* STYLING CAROUSEL ELEMENT */
        .carousel-control-prev,
        .carousel-control-next {
            width: 5%;
            color: black;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            margin-top: 50px;
            background-color: black;
            width: 30px;
            height: 30px;
            border-radius: 50%;
        }

        .carousel-item img {
            margin: 0 auto;
        }

        .carousel-inner h3 {
            text-align: center;
            margin-top: 50px;
        }

        .carousel-item {
            margin-top: 30px;
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover,
        .carousel-control-prev:focus,
        .carousel-control-next:focus {
            background-color: transparent;
            outline: none;
            box-shadow: none;
        }





        /* CARD ELEMENT */
        .items-wrapper-ready {
            padding-top: 50px;
            justify-content: space-between;
            align-items: center;
            text-align: center;
        }

        .items-wrapper-soldout {
            padding-top: 50px;
            justify-content: space-between;
            align-items: center;
            text-align: center;
            opacity: 0.5;
        }

        .items-container {
            background-color: #dbceb0;
            display: inline-block;
            width: 320px;
            margin: 1.5rem;
            padding: 1rem;
            border-radius: 1rem;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            color: black;
        }

        .items-container .card-body h5,
        .items-container .card-body p {
            color: black;
            text-decoration: none; 
        }

        .card a {
            text-decoration: none; 
            color: black; 
        }





        /* CONTACT */
        .contact {
            background-color: #dbceb0;
            padding: 10px;
            margin-top: 80px;
        }

        .sosmed {
            display: flex;
            justify-content: space-around;
        }

        .sosmed h5 {
            padding-top: 20px;
        }

        .contact h2 {
            padding-bottom: 15px;
        }

        .contact a {
            text-align: center;
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
            color: inherit;
            padding-left: 30px;
            padding-right: 30px;
        }

        .contact a:hover {
            color: white;
        }

        .contact img {
            margin-right: 8px; 
            padding-left: 0;
        }

        .contact p {
            margin: 0; 
            font-size: 14px; 
        }





        /* FEEDBACK USER */
        .review-container {
            background-color: #dbceb0;
            justify-content: center;
            align-items: center;
            padding: 20px;
            margin-top: 20px;
            border-radius: 8px;
            width: 100vw;
        }

        .review-container h2, .review-container h3 {
            text-align: center;
            margin-top: 20px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .rating {
            text-align: center;
            margin-bottom: 20px;
        }

        .star {
            font-size: 24px;
            cursor: pointer;
            color: grey;
        }

        textarea {
            width: 100%;
            height: 100px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
            font-size: 16px;
            resize: none;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: lightblue;
        }

        .reviews {
            margin-top: 20px;
        }

        .review-item {
            background-color: #f9f9f9;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .review-item .user-rating {
            color: #FFD700;
            margin-bottom: 5px;
        }





        @media (max-width: 768px) {
            .carousel-item img {
                width: 50%;
            }
            
            .sosmed {
                display: block;
            }
            
            .contact a {
                display: flex;
                align-items: center;
                margin-bottom: 20px;
                padding-left: 0;
                padding-right: 0;
            }
            
            .contact img {
                margin-right: 10px;
            }
            
            .contact a span {
                display: block;
                font-size: 16px;
            }

            .header-utama {
                flex-direction: column; 
                align-items: center; 
            }

            .navbar {
                margin-left: 0; 
                width: 100%; 
                display: flex;
                flex-direction: column; 
                align-items: center; 
                justify-content: center; 
                padding-top: 10px; 
                gap: 10px; 
            }

            .navbar-toggler {
                margin: 0 auto; 
                display: block; 
                border: 1px solid black;
            }

            .navbar-collapse {
                width: 100%; 
            }

            .navbar-nav {
                display: flex;
                flex-direction: column; 
                align-items: center; 
                gap: 10px; 
            }

            .navbar-toggler-icon {
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba%280, 0, 0, 1%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
            }
        }

    </style>
</head>
<!-- HEADER -->
<div class="header-utama">
    <!-- LOGO & HEADING -->
    <nav class="header navbar-light ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="display: flex;">
                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg2qsIm-TY-CbL48rzncMX_hiwJYhgYFDyzgrxM_iCn1enUenC0X5xsNJ-lEQ3ivRT_aIiM98XlZDxbxrGCfX13bllkAKvneU6rnVNlncQSdjg7fG082ghkO3jqWm7UnwrismbageOqQfj9jqW8OJOJ8Yqj1zqNSLVkTgF5UDHCTGeKW4kzGuaggQ/w400-h300/Telkom%20University%20Logo.png" alt="" width="20%" class="d-inline-block align-text-top">
                <h1>TELKOM GARAGE</h1>
            </a>
        </div>
    </nav>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="navbar-brand dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">CATALOG</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#items-wrapper-ready">READY</a></li>
                            <li><a class="dropdown-item" href="#items-wrapper-soldout">SOLD OUT</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand" href="#carouselExampleControls">TESTIMONI</a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand" href="#contact">CONTACT</a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand" href="#review-container">REVIEW</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>

                <div class="navbar-right">
                    <div class="profile-dropdown">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7tyEA8rRXZabfLf_AwxDy-vQ91ecjMJjxVw&s" alt="Profile" class="profile-pic" id="profile-btn">
                        <div class="dropdown-menu" id="dropdown-menu">
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                 @csrf
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); 
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </a>
                                </form> 
                            </li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
</div>







    <!-- CARD -->
    <!-- CATALOG READY -->
    <div id="items-wrapper-ready" class="items-wrapper-ready">
        <h3>CATALOG READY</h3>
        <!-- ISI CATALOG READY -->
        @foreach ($products as $product)
        <div class="items-container">
            <div class="card" style="width: 18rem;">
                <a href="{{ route('productView', ['id' => $product->id]) }}">
                    <img src="{{ asset('storage/' . $product->images) }}" alt="{{ $product->model }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color: black; text-decoration: none;">{{ $product->merek }} - {{ $product->nama }} {{ $product->year }}</h5>
                        <p>Rp. {{ number_format($product->price, 0, ',', '.') }}</p>
                    </div>
                </a>
                <a href="{{ route('productView', ['id' => $product->id]) }}">
                    <button type="button" class="btn btn-primary">Read More -></button>
                </a>
            </div>
        </div>
        @endforeach


    <!-- SOLD OUT -->
    <div id="items-wrapper-soldout" class="items-wrapper-soldout">
        <h3>SOLD OUT</h3>

        <div class="items-container">
            <div class="card" style="width: 18rem;">
                <img src="ASSETS/katalog product.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" style="color: black; text-decoration: none;">Nama Motor</h5>
                    <p>Harga Motor</p>
                </div>
            </div>
        </div>

        <div class="items-container">
            <div class="card" style="width: 18rem;">
                <img src="ASSETS/katalog product.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" style="color: black; text-decoration: none;">Nama Motor</h5>
                    <p>Harga Motor</p>
                </div>
            </div>
        </div>

        <div class="items-container">
            <div class="card" style="width: 18rem;">
                <img src="ASSETS/katalog product.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" style="color: black; text-decoration: none;">Nama Motor</h5>
                    <p>Harga Motor</p>
                </div>
            </div>
        </div>
    </div>


        




    <!-- TESTIMONI -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <h3>TESTIMONI</h3>
            <div class="carousel-item active">
                <img src="ASSETS/testimoni 1.png" class="d-block mx-auto" alt="testimoni 1" width="50%">
            </div>
            <div class="carousel-item">
                <img src="ASSETS/testimoni 2.png" alt="testimoni 2" width="50%">
            </div>
            <div class="carousel-item">
                <img src="ASSETS/testimoni 3.png" class="d-block mx-auto" alt="testimoni 3" width="50%">
            </div>
        </div>
        <button class="carousel-control-prev custom-carousel-control" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next custom-carousel-control" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

     <!-- CONTACT -->
     <div id="contact" class="contact">
        <h2>CONTACT</h2>
        <div class="sosmed">
            <a href="https://www.instagram.com/hansss.motor?igsh=c3djNmowcjYzbGw3" target = "_blank"> 
                <img src="https://pngimg.com/uploads/instagram/instagram_PNG9.png" alt="instagram" width="80px">
                <h5>radit.motor</h5>
            </a>
            <a href="https://vt.tiktok.com/ZS22mBDJA/" class="secondlink" target = "_blank"> 
                <img src="https://pngimg.com/uploads/tiktok/tiktok_PNG9.png" alt="tiktok" width="80px">
                <h5>radit.motor</h5>
            </a>
            <a href="https://wa.me/6287847587171" class="thirdlink" target = "_blank"> 
                <img src="https://pngimg.com/d/whatsapp_PNG21.png" alt="" width="80px">
                <h5>087847587171</h5>
            </a>
        </div>
    </div>

    <script>
        const profileBtn = document.getElementById("profile-btn");
        const dropdownMenu = document.getElementById("dropdown-menu");

        profileBtn.addEventListener("click", () => {
            dropdownMenu.classList.toggle("show");
        });

        window.addEventListener("click", (e) => {
            if (!profileBtn.contains(e.target) && !dropdownMenu.contains(e.target)) {
                dropdownMenu.classList.remove("show");
            }
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
        const searchInput = document.querySelector('input[type="search"]');
        const items = document.querySelectorAll(".card");

        searchInput.addEventListener("input", function () {
        const searchValue = searchInput.value.toLowerCase();

        items.forEach(item => {const title = item.querySelector(".card-title").textContent.toLowerCase();
                    // Menampilkan atau menyembunyikan kartu berdasarkan hasil pencarian
                   if (title.includes(searchValue)) {
                        item.parentElement.style.display = ""; // Tampilkan item
                    } else {
                        item.parentElement.style.display = "none"; // Sembunyikan item
                    }
                });
            });
        });      
    </script>   

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>