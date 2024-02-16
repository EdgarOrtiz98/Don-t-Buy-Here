<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.4.0/remixicon.css" crossorigin="">
        <link rel="stylesheet" href="css/plantillaGeneral.css">
        <link rel="stylesheet" href="/css/fontello.css">
        <title>Don't buy here</title>
    </head>
    <body>
        <header id="header">
            <nav class="navbar">
                <div id="branding">
                    <form action="" id="content_search">
                        <button type="submit" id="btnSearch" name="btnSearch"><span class="icon-search"></span></button>
                        <input type="text" name="search" id="search" autocomplete="off" placeholder="Buscar...">
                    </form>
                </div>
                <div class="nav-links">
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Restaurantes</a></li>
                        <li><a href="#">Tiendas</a></li>
                        <!-- <li><a href="#" class="iconUser"><i class="icon-user"></i></a><a href="#" class="textUser">Perfil</a></li>
                        <li><a href="#" class="btnLogin"><button class="btnLogin">Login</button></a><a href="#" class="textLogin">Login</a></li> -->
                        <?php
                            $usuario_iniciado = false; 
                            if ($usuario_iniciado) {
                                echo '<li><a href="#" class="iconUser"><i class="icon-user"></i></a><a href="#" class="textUser">Perfil</a></li>';
                            } else {
                                echo '<li><a href="#" class="btnLogin"><button class="btnLogin">Login</button></a><a href="#" class="textLogin">Login</a></li>';
                            }
                        ?>
                    </ul>
                </div>
                <div class="menu-trigger">
                    <div class="menu-icon">
                        <div class="barTop"></div>
                        <div class="barMiddle"></div>
                        <div class="barBottom"></div>
                    </div>
                </div>
            </nav>
        </header>
        <main id="main">
            <?php echo $__env->yieldContent('contenido'); ?>
        </main> 
        <footer>
            <section class="socials">
                <ul>
                    <li><a href="#"><i class="icon-facebook"></i>Facebook</a></li>
                    <li><a href="#"><i class="icon-twitter"></i>Twitter</a></li>
                    <li><a href="#"><i class="icon-instagram"></i>Instragram</a></li>
                </ul>
            </section><br>
            <p class="legal">©2024 NoCompresAqui. Todos los derechos reservados</p>
        </footer>
        <script src="js/bsbase.js"></script>
    </body>
</html><?php /**PATH C:\xampp\htdocs\dontBuyHere\resources\views/plantillaGeneral.blade.php ENDPATH**/ ?>