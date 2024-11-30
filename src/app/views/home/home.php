<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine Teste - Fã de Filmes </title>

    <link rel="stylesheet" href="../../../public/assets/scss/home.scss">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" type="image/jpg" sizes="32x32" href="Imagens/cineS.jpeg">
    <link rel="icon" type="image/png" sizes="16x16" href="Imagens/cineS.jpeg">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <div class="fundo">
        <div class="overlay"></div>


        <!--Inicio do Menu-->

        <header>

            <div class="menu-mobile" >
                <label for="chk1" onclick="menu()">
                    <img  class="icon" id="icon-mobile" src="Imagens/menu-aberto.png" alt="">
                </label>
            </div>

               <input type="checkbox" name="" id="chk1">
           
            <div class="logo">
                <h1><a href="/index.html">Cine<span class="gradient">Teste +</span></a></h1>
            </div>

            <ul>
                <li><a href="/index.html">Inicio</a></li>
                <li><a href="#">Sobre Nós</a></li>
                <li><a href="#">Suporte</a></li>
                

                <li><!--Icones de Redes Sociais-->

                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="far fa-user icon-modify"></i></a>
                </li>
            </ul>

        </header>

        <br>
        <!--Fim do Menu-->

        <!--=============FILMES=============-->
        <main>
            <section class="categoria-films">

                <ul class="list-films">
                    <li>
                        <button  onclick="cartaz()" id="cartaz">
                            <a href="#">Em Cartaz</a>
                        </button>
                        <button  onclick="breve()" id="breve">
                            <a href="#" >Em Breve</a>
                        </button>
                        <button onclick="assistidos()" id="assistidos">
                            <a href="#">Mais Assistidos</a>
                        </button>
                    </li>
                </ul>
            </section>
        
            <br>

            <section class="container">
                <article class="slider-wrapper">
                    <button id="prev-slide" class="slide-button material-symbols-rounded">
                        < </button>
                            <ul class="image-list">

                                <a href="/Filmes/Duna.html"><img class="image-item" id="figura"
                                        src="Imagens/Capa Duna Parte 2.jpg" alt="img-1" /></a>
                                <a href="/Filmes/Duna.html"><img class="image-item" id="figura1"
                                        src="Imagens/Capa Duna Parte 2.jpg" alt="img-2" /></a>
                                <a href="/Filmes/Duna.html"><img class="image-item" id="figura2"
                                        src="Imagens/Capa Duna Parte 2.jpg" alt="img-3" /></a>
                                <a href="/Filmes/Duna.html"><img class="image-item" id="figura3"
                                        src="Imagens/Capa Duna Parte 2.jpg" alt="img-4" /></a>
                                <a href="/Filmes/Duna.html"><img class="image-item" id="figura4"
                                        src="Imagens/Capa Duna Parte 2.jpg" alt="img-5" /></a>
                                <a href="/Filmes/Duna.html"><img class="image-item" id="figura5"
                                        src="Imagens/Capa Duna Parte 2.jpg" alt="img-6" /></a>
                                <a href="/Filmes/Duna.html"><img class="image-item" id="figura6"
                                        src="Imagens/Capa Duna Parte 2.jpg" alt="img-7" /></a>
                                <a href="/Filmes/Duna.html"><img class="image-item" id="figura7"
                                    src="Imagens/Capa Duna Parte 2.jpg" alt="img-8"></a>

                        
                            </ul>
                            <button id="next-slide" class="slide-button material-symbols-rounded">
                                >
                            </button>
                </article>
                <article class="slider-scrollbar">
                    <div class="scrollbar-track">
                        <div class="scrollbar-thumb"></div>
                    </div>
                </article>
            </section>
        </main>

        <br><br>
        <footer><!--Rodapé da Página-->

            <div class="main-content">
                <div class="left box">
                    <h2>Sobre nós</h2>
                    <div class="content">
                        <p></p>

                        <div class="social">
                            <a href="#"><span class="fab fa-facebook-f"></span></a>

                            <a href="#"><span class="fab fa-instagram"></span></a>
                        </div>
                    </div>
                </div><!--left box-->

                <br>

                <div class="center box">
                    <h2>Endereço</h2>
                    <div class="content">
                        <div class="place">
                            <span class="fas fa-map-marker"></span>
                            <span class="text">R teste, teste 3632</span>
                        </div>
                        <br>

                        <div class="phone">
                            <span class="fas fas fa-phone-alt"></span>
                            <span class="text">(17) 3632-8922</span>
                        </div>
                        <br>
                        <div class="email">
                            <span class="fas fa-envelope"></span>
                            <span class="text">exemplo@exemplo.com</span>
                        </div>
                    </div>
                </div>
                <br>
                <div class="right box">
                    <h2>Contato</h2>
                    <div class="content">
                        <form action="#">
                            <div class="email">
                                <div class="text">Email *</div>
                                <input type="email" required>
                            </div>

                            <div class="msg">
                                <div class="text">Mensagem *</div>
                                <textarea rows="2" cols="25" required></textarea>
                            </div>

                            <div class="btn">
                                <button type="submit">Enviar</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div><!--main-content-->

            <div class="bottom">
                <div class="center">
                    <span class="credit">Criado por Heitor Zelbato <a
                            href="https://www.instagram.com/heitor__a.ndre/">FRONT</a></span>

                    <span class="far fa-copyright">2023 Todos os direitos reservados</span>
                </div>
            </div>

        </footer>



        <script src="filmes.js"></script>

        <div vw class="enabled">
            <div vw-access-button class="active"></div>
            <div vw-plugin-wrapper>
                <div class="vw-plugin-top-wrapper"></div>
            </div>
        </div>
        <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
        <script>
            new window.VLibras.Widget('https://vlibras.gov.br/app');
        </script>
    </div>

    <script src="script.js"></script>