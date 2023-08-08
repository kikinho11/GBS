<?php
    session_start();
    if(!isset($_SESSION['id_usuario']))
    {
        header("location: index.php");
        exit;
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, inicial-scale=1.0">
    <title>Livros</title>
    <link rel="stylesheet" href="CSS/estiloLivro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<boby>
<section>
    <nav>
        <div class="logo">
            <a href="https://www.seeduc.rj.gov.br/">
            <img src="imagens/logo rj.png">
            </a>
        </div>
        <ul>
            <li><a href="areaPrivada.php">Home</a></li>
            <li><a href="#Livros">Livros</a></li>
            <li><a href="#Pesquisar">Pesquisar</a></li>
            <li><a href="#Ajuda">Ajuda</a></li>
            <li><a href="#Solicitações">Solicitações</a></li>
            <li><a href="#Devolver">Devolver</a></li>
        </ul>
        <div class="social_icon">
            <input type="text" class="social_icon-txt" placeholder="Pesquisar">
            <ion-icon name="search"></ion-icon>
            <a href="#">
            </a>
        </div>
    </nav>
</section>
    <!--Livros-->

    <div class="livros">
        <h1>Mais lidos</h1>
        <div class="livros_box">
            <div class="livros_box_cards">
                <div class="livros_box_img">
                    <img src="https://m.media-amazon.com/images/I/61H4KOlZxFL.jpg">
                </div>
                <div class="livros_box_tag">
                    <h2>Livro</h2>
                    <p class="autor">Kristin Hanna</p>
                    <div class="categoria">Drama, Romance, Fantasia</div>
                    <a href="cadastrarlivro.php" class="f_btn">Solicitar</a>
                </div>
            </div>

            <div class="livros_box_cards">
                <div class="livros_box_img">
                    <img src="https://p2.trrsf.com/image/fget/cf/940/0/images.terra.com/2015/04/17/thumbnail644.jpg">
                </div>
                <div class="livros_box_tag">
                    <h2>Livro</h2>
                    <p class="autor">Kristin Hanna</p>
                    <div class="categoria">Drama, Romance, Fantasia</div>
                    <a href="#" class="f_btn">Solicitar</a>
                </div>
            </div>

            <div class="livros_box_cards">
                <div class="livros_box_img">
                    <img src="https://http2.mlstatic.com/D_NQ_NP_741955-MLB43994850355_112020-O.jpg">
                </div>
                <div class="livros_box_tag">
                    <h2>Livro</h2>
                    <p class="autor">Kristin Hanna</p>
                    <div class="categoria">Drama, Romance, Fantasia</div>
                    <a href="#" class="f_btn">Solicitar</a>
                </div>
            </div>

            <div class="livros_box_cards">
                <div class="livros_box_img">
                    <img src="https://www.lopes.com.br/blog/wp-content/uploads/2016/07/1-4.jpg">
                </div>
                <div class="livros_box_tag">
                    <h2>Livro</h2>
                    <p class="autor">Kristin Hanna</p>
                    <div class="categoria">Drama, Romance, Fantasia</div>
                    <a href="#" class="f_btn">Solicitar</a>
                </div>
            </div>

            <div class="livros_box_cards">
                <div class="livros_box_img">
                    <img src="https://i.pinimg.com/736x/e4/d7/7e/e4d77e205655a15753b43ecd8c44bc44.jpg">
                </div>
                <div class="livros_box_tag">
                    <h2>Livro</h2>
                    <p class="autor">Kristin Hanna</p>
                    <div class="categoria">Drama, Romance, Fantasia</div>
                    <a href="#" class="f_btn">Solicitar</a>
                </div>
            </div>

            <div class="livros_box_cards">
                <div class="livros_box_img">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/81Izv2GRWoL._AC_UL600_SR600,400_.jpg">
                </div>
                <div class="livros_box_tag">
                    <h2>Livro</h2>
                    <p class="autor">Kristin Hanna</p>
                    <div class="categoria">Drama, Romance, Fantasia</div>
                    <a href="#" class="f_btn">Solicitar</a>
                </div>
            </div>

        </div>
    </div>
<!--Livros-->

<div class="livros">
        <h1>Sugestões</h1>
        <div class="livros_box">
            <div class="livros_box_cards">
                <div class="livros_box_img">
                    <img src="https://m.media-amazon.com/images/I/61H4KOlZxFL.jpg">
                </div>
                <div class="livros_box_tag">
                    <h2>Livro</h2>
                    <p class="autor">Kristin Hanna</p>
                    <div class="categoria">Drama, Romance, Fantasia</div>
                    <a href="#" class="f_btn">Solicitar</a>
                </div>
            </div>

            <div class="livros_box_cards">
                <div class="livros_box_img">
                    <img src="https://p2.trrsf.com/image/fget/cf/940/0/images.terra.com/2015/04/17/thumbnail644.jpg">
                </div>
                <div class="livros_box_tag">
                    <h2>Livro</h2>
                    <p class="autor">Kristin Hanna</p>
                    <div class="categoria">Drama, Romance, Fantasia</div>
                    <a href="#" class="f_btn">Solicitar</a>
                </div>
            </div>

            <div class="livros_box_cards">
                <div class="livros_box_img">
                    <img src="https://http2.mlstatic.com/D_NQ_NP_741955-MLB43994850355_112020-O.jpg">
                </div>
                <div class="livros_box_tag">
                    <h2>Livro</h2>
                    <p class="autor">Kristin Hanna</p>
                    <div class="categoria">Drama, Romance, Fantasia</div>
                    <a href="#" class="f_btn">Solicitar</a>
                </div>
            </div>

            <div class="livros_box_cards">
                <div class="livros_box_img">
                    <img src="https://www.lopes.com.br/blog/wp-content/uploads/2016/07/1-4.jpg">
                </div>
                <div class="livros_box_tag">
                    <h2>Livro</h2>
                    <p class="autor">Kristin Hanna</p>
                    <div class="categoria">Drama, Romance, Fantasia</div>
                    <a href="#" class="f_btn">Solicitar</a>
                </div>
            </div>

            <div class="livros_box_cards">
                <div class="livros_box_img">
                    <img src="https://i.pinimg.com/736x/e4/d7/7e/e4d77e205655a15753b43ecd8c44bc44.jpg">
                </div>
                <div class="livros_box_tag">
                    <h2>Livro</h2>
                    <p class="autor">Kristin Hanna</p>
                    <div class="categoria">Drama, Romance, Fantasia</div>
                    <a href="#" class="f_btn">Solicitar</a>
                </div>
            </div>

            <div class="livros_box_cards">
                <div class="livros_box_img">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/81Izv2GRWoL._AC_UL600_SR600,400_.jpg">
                </div>
                <div class="livros_box_tag">
                    <h2>Livro</h2>
                    <p class="autor">Kristin Hanna</p>
                    <div class="categoria">Drama, Romance, Fantasia</div>
                    <a href="#" class="f_btn">Solicitar</a>
                </div>
            </div>

        </div>
    </div>

   <!--rodapé-->
   
   <footer>
        <div class="footer_main">
            <div class="tag">
                <img src="imagens/logo rj.png">
                <p>
                </p>
            </div>

            <div class="tag">
                <h1>Contato</h1>
                <a href="#"><ion-icon name="call"></ion-icon> (21)00000-1111</a>
                <a href="#"><ion-icon name="call"></ion-icon> (21)23456-1111</a>
                <a href="#"><ion-icon name="mail"></ion-icon> escola.rj@email.com.br</a>
            </div>
            <div class="tag">
                <h1>Siga nossas redes</h1>
                <div class="social_link">
                    <a href="https://pt-br.facebook.com/"><ion-icon name="logo-facebook"></ion-icon></a>
                    <a href="https://www.whatsapp.com/?lang=pt_br"><ion-icon name="logo-whatsapp"></ion-icon></a>
                    <a href="https://twitter.com/"><ion-icon name="logo-twitter"></ion-icon></a>
                    <a href="https://www.instagram.com/"><ion-icon name="logo-instagram"></ion-icon></a>
                </div>
            </div>
        </div>
    </footer>            
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>

