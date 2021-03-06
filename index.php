<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./font/fontawesome-free-5.15.4-web/css/all.min.css">
    <title>BaiTap2</title>
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <nav class="navbar navbar-expand-md">
                        <img src="image/logo.png" alt="" class="img-fluid">

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse List-header" id="navbarNav">
                            <ul class="navbar-nav ">
                                <li class="nav-item ">
                                    <a class="nav-link active  " href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="Cate.php">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="Food.php">Food</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" herf="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="body">
        <div class="container-fluid">
            <div class="row" me-auto ms-auto>
                <div class="col-md-12  cuatoi">
                    <nav class="navbar">
                        <div class="container">
                            <form class="d-flex Search_foods ">
                                <input class="form-control me-2" type="search" placeholder="Search for food" aria-label="Search">
                                <button class="btn btn-outline-success Search" type="submit">Search</button>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--Explorefood b???t ?????u -->
    <div class="Explorefood">
        <div class="container">
            <div class="title_Explorefood">
                <h2>Explore Foods</h2>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="./image/pizza.jpg" class="card-img-top img_Explorefood_home" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Pizza</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="./image/burger.jpg" class="card-img-top img_Explorefood_home" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Burger</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="./image/momo.jpg" class="card-img-top img_Explorefood_home" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Momo</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Explorefood k???t th??c-->
    <!--FoodMenu b???t ?????u-->
    <div class="FoodMenu bg-light">
        <div class="container">
            <div class="title-FoodMenu">
                <h2>Food Menu</h2>

            </div>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card flex-row d_flex_Food_menu_home">
                        <div class="div_img_food_menu_home">
                            <img src="./image/menu-momo.jpg" class="card-img-top img_Food_menu_home" alt="...">
                        </div>
                        <div class="title_menu">
                            <h4>Dumplings Speacials</h4>
                            <h4>$5.00</h4>
                            <p>Chicken Dumpling with herbs from Mountains</p>
                            <p class="ordernow">Order now</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card flex-row d_flex_Food_menu_home">
                        <div class="div_img_food_menu_home">
                            <img src="./image/burger.jpg" class="card-img-top img_Food_menu_home" alt="...">
                        </div>
                        <div class="title_menu">
                            <h4>Best Burger</h4>
                            <h4>$4.00</h4>
                            <p>Burger wwith Ham, Pineapple and lots of Cheese</p>
                            <p class="ordernow">Order now</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card flex-row d_flex_Food_menu_home">
                        <div class="div_img_food_menu_home">
                            <img src="./image/menu-momo.jpg" class="card-img-top img_Food_menu_home" alt="...">
                        </div>
                        <div class="title_menu">
                            <h4>Sadeko Momo</h4>
                            <h4>$6.00</h4>
                            <p>Best Spicy Momo for Winter</p>
                            <p class="ordernow">Order now</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card flex-row d_flex_Food_menu_home">
                        <div class="div_img_food_menu_home">
                            <img src="./image/pizza.jpg" class="card-img-top img_Food_menu_home" alt="...">
                        </div>
                        <div class="title_menu">
                            <h4>Mixed Pizza</h4>
                            <h4>$10.00</h4>
                            <p>Pizza with Chicken, Ham, Buff, Mushroom and vegetables</p>
                            <p class="ordernow">Order now</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <a href="foods.php" class="nav justify-content-center mb-5 text-decoration-none" style="color: #ff6b81;">See All Foods</a>
                </div>
            </div>

        </div>
    </div>



    <!--Social Start here-->
    <section class=" social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png" alt="Facebook"></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png" alt="Instagram"></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png" alt=""></a>
                </li>
            </ul>
        </div>
    </section>
    <!--Social Ends here-->

    <!--Footer Start here-->
    <section class=" footer">
        <div class="container text-center">
            <p>All right reserved. Desgin by <a href="#">QuangPhuong</a> </p>
        </div>
    </section>
    <!--Footer Ends here-->



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>

</html>