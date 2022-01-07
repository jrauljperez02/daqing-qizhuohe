<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="/styles/styles.css">
    <link rel="stylesheet" href="/styles/normalize.css">
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,100&display=swap" rel="stylesheet">
</head>
<body>
    <!--In this part we are going to collocate our header-->
    <header class="navigation">
        <div class="navigation__logo">
            <h1>Daqing Qizhuohe Economic and Trade Co.</h1>
        </div>
        <div class="navigation__links">
            <a href="/index.html">Inicio</a>
            <a href="/spanish/about.html">Sobre Nosotros</a>
            <a href="/spanish/products.html">Productos</a>
            <a href="/spanish/contact.html">Contactos</a>
        </div>
        <div class="navigation__languages">
            <a href="/chinese/index.html">Chino</a>
            <a href="/index.html">Español</a>
            <a href="/english/index.html"> Inglés</a>
        </div>
    </header>

    <div class="body">
        <!--image slider start-->
        <div class="slider">
            <div class="slides">
                <!--radio buttons start-->
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <!--radio buttons end-->
                <!--slide image start-->
                <div class="slide first">
                    <img class="img1" src="/img/slider1.jpg" alt="">
                </div>
                <div class="slide">
                    <img class="img2" src="/img/slider2.jpg" alt="">
                </div>
                <div class="slide">
                    <img class="img3" src="/img/slider3.jpg" alt="">
                </div>
                <!--slide image ends-->
                <!--automatic navigation starts-->
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                </div>
                <!--automatic navigation ends-->
            </div>
            <!--manual navigation start-->
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
            </div>
            <!--manual navigation ends-->
        </div>
    <!--image slider end-->
    </div>

    <!--Javascript-->
    <script type="text/javascript">
        var counter = 1;
        setInterval(function(){
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if(counter>3){
                counter = 1;
            }
        },2500);
    </script>


    <main class="container">
        <h3>Productos</h3>
        <h4>Proveer productos de calidad global</h4>
        <div class="grid">
            <img src="/img/footer1.jpg" alt="">
            <img src="/img/footer2.jpg" alt="">
            <p>Mung Beans</p>
            <p>Alfalfa</p>
        </div>
    </main>

    
    <footer class="footer">
        <div class="footer__info">
            <h3>Acerca de nosotros</h3>
                <a href="/spanish/about.html">Perfil de la compañia</a>
                <a href="/spanish/contact.html">Contacto</a>
        </div>
        <div class="footer__info">
            <h3>Productos</h3>
                <a href="#">Alfalfa</a>
                <a href="#">Frijol mungo</a>
        </div>
        <div class="footer__info">
            <h3>Contactanos</h3>
                <a href="#">E-mail: hksantaluz@gmail.com</a>
        </div>
    </footer>

</body>
</html>