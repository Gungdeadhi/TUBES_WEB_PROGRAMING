<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGE PRODUCT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        * {
    padding: 0;
    margin: 0;
}


/* HEADER UTAMA */
.header-utama {
    display: flex; /* Menyusun elemen secara horizontal */
    align-items: center;
    position: sticky;
    z-index: 100;
    top: 0;
    background-color: #dbceb0;
    padding: 10px 20px;
    flex-wrap: wrap; /* Membuat elemen bisa berpindah ke baris berikutnya */
}

/* LOGO & HEADING */
.header .navbar-brand {
    display: flex;
    align-items: center; /* Menjaga logo dan teks vertikal sejajar */
}

.header h1 {
    padding-left: 10px;
    font-size: 1.5rem;
    margin: 0;
}

/* NAVBAR */
.navbar {
    margin-left: auto; /* Memindahkan navbar ke kanan */
}

.navbar a {
    color: black;
}

/* TOGGLER */
.navbar-toggler {
    border-color: black;
}

/* Mengubah warna navbar item saat hover */
.navbar-nav .nav-item .navbar-brand:hover {
    color: black;
}

/* Untuk item dropdown */
.navbar-nav .nav-item.dropdown:hover .navbar-brand {
    color: black;
}

/* Mengubah warna teks di dropdown saat item di-hover */
.navbar-nav .nav-item .dropdown-menu .dropdown-item:hover {
    color: black;
    background-color: #dbceb0;
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








.container {
    display: flex;
    justify-content: space-between;
    max-width: 1000px;
    margin: 0 auto;
    border-top: 1px solid #ddd; /* Garis pemisah atas */
    padding-top: 20px;
    margin-top: 50px;
  }
  
  /* Left Content Styling */
  .left-content {
    flex: 3;
    padding-right: 20px;
  }
  
  .left-content h1 {
    font-size: 2rem;
    margin-bottom: 10px;
    font-weight: bold;
  }
  
  .left-content h3 {
    font-size: 1.2rem;
    margin: 20px 0 10px;
    font-weight: bold;
  }
  
  .left-content ul {
    list-style: disc;
    margin-left: 20px;
  }
  
  .left-content p {
    margin-bottom: 10px;
    color: #555555;
    font-size: 1rem;
  }
  
  /* Right Content Styling */
  .right-content {
    flex: 1;
    text-align: center;
    border-left: 1px solid #ddd; /* Garis pemisah kiri */
    padding-left: 20px;
  }
  
  .price {
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 20px;
  }
  
  .add-to-bag {
    background-color: #635bff; /* Warna ungu */
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 1rem;
    font-weight: bold;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  
  .add-to-bag:hover {
    background-color: #5048c3; /* Warna ungu lebih tua */
  }
    </style>
</head>
<body>
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
    </div>





    <!-- TESTIMONI -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($images as $image)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <img src="{{ asset('storage/' . $image->image_path) }}" class="d-block mx-auto" alt="{{ $product->id }}" width="25%">
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev custom-carousel-control" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next custom-carousel-control" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Nexts</span>
        </button>
    </div>





    <!-- DESKRIPSI -->
    <div class="container">
        <!-- Left Section -->
        <div class="left-content">
        <h1>{{ $product->merek }} - {{ $product->nama }} {{$product->year}}</h1>

        <h3>Deskripsi</h3>
        <ul>
            <li>{!! nl2br(e($product-> description)) !!}</li>
        </ul>
    </div>

        <!-- Right Section -->
        <div class="right-content">
            <div class="price">Rp. {{ number_format($product->price, 0, ',', '.') }}</div>
            <a href="https://wa.me/6287847587171" target="_blank"><button class="add-to-bag">Hubungi Penjual</button></a>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>