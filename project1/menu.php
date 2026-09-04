
<?php
include_once "navbar.php"
?>

    <title>Menu</title>

    <style>
        .menu-header {

            background-color: #faf7f2;

            display: flex;

            justify-content: space-between;

            align-items: center;

            padding: 35px 80px;

        }


        .menu-header h1 {

            font-size: 45px;

            color: #35180c;

            margin-bottom: 15px;

        }


        .menu-header p {

            color: #777;

            font-size: 17px;

            line-height: 1.6;

        }


        .menu-header img {

            width: 300px;

            height: 190px;

            object-fit: cover;

            border-radius: 50%;

        }

        .categories {

            text-align: center;

            padding: 25px 0;

        }


        .categories button {

            border: none;

            background-color: white;

            padding: 12px 30px;

            margin: 0 12px;

            border-radius: 25px;

            font-size: 15px;

            cursor: pointer;

        }


        .categories .active {

            background-color: #f1e3d1;

        }

        .menu {

            width: 90%;

            margin: auto;

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 25px;

        }

        .card {

            display: flex;

            align-items: center;

            padding: 12px;

            border: 1px solid #eee;

            border-radius: 10px;

            box-shadow: 0 2px 8px #eee;

            background-color: white;

        }

        .card img {

            width: 100px;

            height: 100px;

            object-fit: cover;

            border-radius: 10px;

            margin-right: 15px;

        }


        .info {

            flex: 1;

        }


        .info h3 {

            margin: 0 0 7px;

            color: #35180c;

            font-size: 18px;

        }


        .info span {

            color: #a66b45;

            font-size: 14px;

        }


        .info p {

            color: #999;

            font-size: 13px;

            line-height: 1.4;

        }

        .card-right {

            text-align: right;

        }


        .card-right strong {

            font-size: 14px;

            color: #333;

        }


        .card-right button {

            display: block;

            margin-top: 25px;

            background-color: #5b270b;

            color: white;

            border: none;

            width: 35px;

            height: 35px;

            border-radius: 7px;

            font-size: 22px;

            cursor: pointer;

        }


        .card-right button:hover {

            background-color: #35180c;

        }


    </style>

</head>


<body>

    <section class="menu-header">

        <div>

            <h1>Our Menu</h1>

            <p>
                Choose your favorite coffee and enjoy
                <br>
                the best taste around .
            </p>

        </div>

        <img src="cafe-logo.png" alt="Coffee">

    </section>

     <div class="categories">

        <button class="active">All</button>

        <button>Hot Coffee</button>

        <button>Cold Coffee</button>

        <button>Desserts</button>

        <button>Snacks</button>

    </div>

    <section class="menu">


        <div class="card">

            <img src="esspresso.jpg" alt="Espresso">

            <div class="info">

                <h3>Espresso</h3>

                <span>$3.00</span>

                <p>
                    Strong and bold espresso.
                </p>

            </div>

            <div class="card-right">

                <strong>$3.00</strong>

                <button>+</button>

            </div>

        </div>


        <div class="card">

            <img src="amricano.jpg" alt="Americano">

            <div class="info">

                <h3>Americano</h3>

                <span>$2.50</span>

                <p>
                    Classic coffee with hot water.
                </p>

            </div>

            <div class="card-right">

                <strong>$2.50</strong>

                <button>+</button>

            </div>

        </div>


        <div class="card">

            <img src="cappuccino.jpg" alt="Cappuccino">

            <div class="info">

                <h3>Cappuccino</h3>

                <span>$3.50</span>

                <p>
                    Espresso with steamed milk.
                </p>

            </div>

            <div class="card-right">

                <strong>$3.50</strong>

                <button>+</button>

            </div>

        </div>


        <div class="card">

            <img src="latte.jpg" alt="Latte">

            <div class="info">

                <h3>Latte</h3>

                <span>$3.00</span>

                <p>
                    Smooth latte with milk.
                </p>

            </div>

            <div class="card-right">

                <strong>$3.00</strong>

                <button>+</button>

            </div>

        </div>

        <div class="card">

            <img src="mocha.jpg" alt="Mocha">

            <div class="info">

                <h3>Mocha</h3>

                <span>$3.50</span>

                <p>
                    Chocolate and coffee blend.
                </p>

            </div>

            <div class="card-right">

                <strong>$3.50</strong>

                <button>+</button>

            </div>

        </div>

        <div class="card">

            <img src="caramel_macchiato.jpg" alt="Caramel Macchiato">

            <div class="info">

                <h3>Caramel Macchiato</h3>

                <span>$3.30</span>

                <p>
                    Vanilla milk with caramel.
                </p>

            </div>

            <div class="card-right">

                <strong>$3.30</strong>

                <button>+</button>

            </div>

        </div>

        <div class="card">

            <img src="coldbrew.jpg" alt="Cold Brew">

            <div class="info">

                <h3>Cold Brew</h3>

                <span>$4.00</span>

                <p>
                    Chilled coffee made fresh.
                </p>

            </div>

            <div class="card-right">

                <strong>$4.00</strong>

                <button>+</button>

            </div>

        </div>

        <div class="card">

            <img src="iced_latte.jpg" alt="Iced Latte">

            <div class="info">

                <h3>Iced Latte</h3>

                <span>$3.50</span>

                <p>
                    Cold milk latte with ice.
                </p>

            </div>

            <div class="card-right">
                <strong>$3.50</strong>

                <button>+</button>

            </div>

        </div>


        <div class="card">

            <img src="cheesecake.jpg" alt="Cheesecake">

            <div class="info">

                <h3>Cheesecake</h3>

                <span>$3.20</span>

                <p>
                    Creamy cheesecake slice.
                </p>

            </div>

            <div class="card-right">

                <strong>$3.20</strong>

                <button>+</button>

            </div>

        </div>


    </section>
    <?php 
    include_once "footer.php"
    ?>


