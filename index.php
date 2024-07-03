<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Каталог гитар</title>
    
        <style> 
        body { 
            font-family: Arial, sans-serif; 
            background-color: #333; 
            margin: 0; 
            padding: 0; 
        } 
        .container { 
            width: 80%; 
            margin: auto; 
            overflow: hidden; 
        } 


        .container_wrap {
            width: 80%; 
            margin: 300px auto; 
            overflow: hidden;
            margin-bottom: 120px;
            font-size: 18px;
        }


        header { 
            background:  #a84058; 
            color: white; 
            padding-top: 30px; 
            min-height: 70px; 
            border-bottom: #edb7c3 5px solid;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            width: 100%; 
        } 
        header a { 
            color: #ffffff; 
            text-decoration: none; 
            text-transform: uppercase; 
            font-size: 20px; 
            font-weight: bold;
        } 
        header ul { 
            padding: 0; 
            list-style: none; 
        } 
        header ul li { 
            float: left; 
            display: inline; 
            padding: 0 20px 0 20px; 
        } 
        header #branding { 
            float: left; 
        } 
        header #branding h1 { 
            margin: 0; 
        } 
        header nav { 
            float: right; 
            margin-top: 10px; 
        } 
        header .highlight, header .current a { 
            color: #e8b0bd; 
            font-weight: bold; 
            transition: 0.5s;
        } 

        header .highlight, header .current a:hover { 
            color: #ffff; 
            font-weight: bold;
            transition: 0.5s; 
        }


        header a:hover { 
            color: #e8b0bd; 
             transition: 0.5s;
        } 

        footer {
        background-color: #a84058; 
        color: #ffffff; /* темно-серый текст */
        padding: 40px 0; /* вертикальный отступ */
        text-align: center; /* выравнивание текста по центру */
        font-size: 18px; /* увеличенный размер шрифта */
        }

        footer {
        border-top: #edb7c3 5px solid;
        font-size: 18px; /* уменьшенный размер шрифта */
        position: fixed;
        bottom: 0; /* Прижимает футер к нижней части страницы */
        left: 0; /* Прижимает футер к левому краю страницы */
        width: 100%; /* Футер растягивается на всю ширину страницы */
        z-index: 1000; /* Устанавливает футер поверх других элементов */
        }
 
        button { 
            background-color: #a84058; 
            border-bottom: #c77f90 5px solid; 
            border-left: none; 
            border-right: none;
            border-top: none;
            color: white; 
            padding: 10px 25px; 
            text-align: center; 
            text-decoration: none; 
            display: inline-block; 
            font-size: 17px; 
            margin: 20px 2px; 
            cursor: pointer; 
            border-radius: 4px; 
            transition: 0.5s; 
        } 
 
         
        button:hover { 
            background-color: #bd7989;
            transition: 0.5s; 
        } 

        #branding {
            font-size: 13px;
            padding-top: 20px;
            color: #fad7df;
        }


        .login-container {
            width: 300px;
            margin: 190px auto;
            padding: 30px;
            background: white;
            border: 1px solid #004d1a;
            border-radius: 5px;
        }

        @media screen and (width < 730px) {
            .login-container {
                width: 280px;
                margin: 190px auto;
                padding: 20px;
                background: white;
                border: 1px solid #004d1a;
                border-radius: 5px;
            }
        }

        input {
            width: 230px;
            height: 40px;
            border: #004d66 1px solid;
            border-radius: 4px;
        }

        .special_card {
            height: auto;
            width: 60%;
            background-color: #ffffff;
            border: #004d1a 1px solid;
            border-radius: 4px;
            margin-top: 20px;
            padding: 10px 20px;
        }

        .basket-card {
            height: auto;
            width: auto;
            background-color: #ffffff;
            border: #a84058 5px solid;
            border-radius: 4px;
            margin-top: 20px;
            padding: 10px 20px;
        }

        .basket-container {
            width: 60%;
            height: auto;
            padding: 20px 20px 30px 20px;
            margin: 170px auto;

        }


        .basket-content {
            display: flex;
            justify-content: space-between;
            padding: 5px 0;
        }

        .basket-card-item1 {
            width: 40%;
            margin-left: 20px;
        }

        .basket-card-item2 {
            width: 80%;
            margin-top: 30px;
            margin-left: 20px;
        }

        .basket-card-item3 {
            width: 60%;
            margin-left: 20px;
            margin-top: 45px;
            text-align: center;
            align-items: center;
            font-size: 20px;
        }

        #sell {
            background-color: #00cc44;
            font-weight: 600;
        }

        #sell:hover{
            background-color: #006622;
            font-weight: 600;
        }

        
    
    </style>
</head>
<body>
    <header>
    <div class="container"> 
            <div id="branding"> 
                <h1>Магазин гитар "𝓢𝓽𝓻𝓾𝓷𝓪" 🎸</h1> 
            </div> 
            <nav> 
                <ul> 
                    <li><a href="">Главная</a></li> 
                    <li class="current"><a href="index.php">Каталог</a></li> 
                    <li><a href="">Личный кабинет </a></li> 
                    <li><a href="">О нас</a></li> 
                    <li><a href="">Контакты</a></li> 
                </ul> 
            </nav> 
        </div>
    </header>

    <div class="basket-container">
        <?php
            $host = '127.0.0.1';
            $database = 'guitar';
            $user = 'root';
            $password = '';

            $mysqli = new mysqli($host, $user, $password, $database);

            if ($mysqli->connect_error) {
                die("Ошибка подключения: " . $mysqli->connect_error);
            }

            $query = "SET NAMES utf8";
            $mysqli->query($query);

            $query = "SELECT * FROM products";
            $results = $mysqli->query($query);

            if ($results) {
                while ($row = $results->fetch_assoc()) {
                    echo '
                    <div class="basket-card">
                        <div class="basket-content">
                            <div class="basket-card-item1">
                                <img style="width: 200px; height: 200px; border-radius: 15px; padding: 0px 0px; border: #4d3319 1px solid;" src="'.$row["imgFile"].'">
                            </div>
                            <div class="basket-card-item2">
                                <h3>'.$row["name"].'</h3><br>
                                <p style="margin-top: -20px; font-size: 20px;">'.$row["text"].'</p>
                            </div>
                            <div class="basket-card-item3">
                                <button style="width: 63%; margin-top: 30px; font-size: 20px;">'.$row["amount"].' ₽</button>
                            </div>
                        </div>
                    </div>
                    ';
                }
            } else {
                echo "Ошибка запроса: " . $mysqli->error;
            }

            $mysqli->close();
        ?>
        </div>

    

    

    </div>
    <footer>
        Музыкальные инструменты в г.Барнаул тел. +7-913-567-78-89 
    </footer>
</body>
</html>