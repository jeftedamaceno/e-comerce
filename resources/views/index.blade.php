<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nice Store</title>
    <link rel="stylesheet" href="css/global.css">
</head>
<body>
    <div class="navbar">
        <div class="header-inner-content">
            <h1 class="logo">Nice <span>Store</span></h1>
            <form action="get">
                    <input type="text" placeholder="pesquisar">
            </form>
            <nav>
                <ul>
                    <a href=""><li>Trabalhe conosco</li></a>
                    @if (!auth()->check())
                        <a href="{{ route("cadastro_user") }}"><li>Cadastre-se</li></a>
                        <a href="{{ route("login") }}"><li>Entre</li></a>
                    @endif
                    
                    @if (auth()->check())
                        {{-- <a href=""><li>Bem Vindo {{ auth()->user()->firstName }} </li></a> --}}
                        <a href="{{ route("users.edit", auth()->user()->id)}}"><li>Editar Perfil</li></a>
                        <a href="{{ route("users.logout") }}"><li>Sair</li></a>
                    @endif
                </ul>
            </nav>
            <div class="nav-icon-container">
                    <img src="imagens/cart.png">
                    <img src="imagens/menu.png" class="menu-button">
                </div>
        </div>
    </div>

    <header>
        <div class="header-inner-content">
            <div class="header-botton-side">
                <div class="header-botton-side-left">
                    <h2>de um novo estilo a seu trabalho</h2>
                    <p>Sussesso nem sempre tem haver com grandeza. tem a ver com consistencia. 
                        Trabalho duro e consistencia supera o sussesso. A grandeza vira
                    </p>
                    <button type="">ver agora &#8594</button>
                </div>
                <div class="header-botton-side-right">
                    <img src="imagens/gaming-msi-header.png" alt="">
                </div>
            </div>
        </div>
    </header>
    <!-- main header -->
    <main>
        <div class="gray-background">
            <div class="page-inner-content">
                <h2>Produtos em Destaque</h2>
                <div class="cols cols-3">
                    <img src="imagens/products/product-1.png">
                    <img src="imagens/products/product-2.png">
                    <img src="imagens/products/product-3.png">
                </div>
            </div>
        </div>
        <div class="page-inner-content">
            <h3 class="section-title">Produtos Selecionados</h3>
            <div class="subtitle-underline"></div>
            <div class="cols cols-4">
                <div class="product">
                    <img src="imagens/products/product-4.png">
                    <p class="product-name">combo gamer metion</p>
                    <p class="rate">&#9733 &#9733 &#9733 &#9733 &#9734</p>
                    <p class="product-prince">4000 <span>R$</span></p>
                </div>
                <div class="product">
                    <img src="imagens/products/product-5.png">
                    <p class="product-name">combo gamer metion</p>
                    <p class="rate">&#9733 &#9733 &#9733 &#9733 &#9734</p>
                    <p class="product-prince">4000 <span>R$</span></p>
                </div>
                <div class="product">
                    <img src="imagens/products/product-6.png">
                    <p class="product-name">combo gamer metion</p>
                    <p class="rate">&#9733 &#9733 &#9733 &#9733 &#9734</p>
                    <p class="product-prince">4000 <span>R$</span></p>
                </div>
                <div class="product">
                    <img src="imagens/products/product-7.png">
                    <p class="product-name">combo gamer metion</p>
                    <p class="rate">&#9733 &#9733 &#9733 &#9733 &#9734</p>
                    <p class="product-prince">4000 <span>R$</span></p>
                </div>
            </div>               
            
        </div>
        <div class="page-inner-content">
            <h3 class="section-title">Ultimos Produtos</h3>
            <div class="subtitle-underline"></div>
            <div class="cols cols-4">
                <div class="product">
                    <img src="imagens/products/product-8.png">
                    <p class="product-name">combo gamer metion</p>
                    <p class="rate">&#9733 &#9733 &#9733 &#9733 &#9734</p>
                    <p class="product-prince">4000 <span>R$</span></p>
                </div>
                <div class="product">
                    <img src="imagens/products/product-9.png">
                    <p class="product-name">combo gamer metion</p>
                    <p class="rate">&#9733 &#9733 &#9733 &#9733 &#9734</p>
                    <p class="product-prince">4000 <span>R$</span></p>
                </div>
                <div class="product">
                    <img src="imagens/products/product-10.png">
                    <p class="product-name">combo gamer metion</p>
                    <p class="rate">&#9733 &#9733 &#9733 &#9733 &#9734</p>
                    <p class="product-prince">4000 <span>R$</span></p>
                </div>
                <div class="product">
                    <img src="imagens/products/product-11.png">
                    <p class="product-name">combo gamer metion</p>
                    <p class="rate">&#9733 &#9733 &#9733 &#9733 &#9734</p>
                    <p class="product-prince">4000 <span>R$</span></p>
                </div>
            </div>               
            
        </div>
        <div class="gray-background">
            <div class="page-inner-content">
                <div class="header-botton-side  exclusive-container">
                    <div class="header-botton-side-left">
                        <h2>smart band 4</h2>
                        <p>O mi smart band 4 tem uma tela 39.9% maior que o mi smart band 3 completamente digital e com brilho ajustavel
                        </p>
                        <button type="">ver agora &#8594</button>                      
                    </div>
                    <div class="header-botton-side-right">
                            <img src="imagens/exclusive.png" alt="">
                    </div>  
                </div>
            </div>
        </div>
        <div>
            <div class="page-inner-content">
                <div class="testimonials">
                    <div class="testimonial">
                        <p>"</p>
                        <p>o melhor web comerce moderno e responsivo. ja vou repassar esse site para meus amigos e familiares</p>
                        <p class="rate">&#9733 &#9733 &#9733 &#9733 &#9733</p>
                        <p>jefte damaceno</p>
                    </div>
                    <div class="testimonial">
                        <p>"</p>
                        <p>o melhor web comerce moderno e responsivo. ja vou repassar esse site para meus amigos e familiares</p>
                        <p class="rate">&#9733 &#9733 &#9733 &#9733 &#9733</p>
                        <p>joão</p>
                    </div>
                    <div class="testimonial">
                        <p>"</p>
                        <p>o melhor web comerce moderno e responsivo. ja vou repassar esse site para meus amigos e familiares</p>
                        <p class="rate">&#9733 &#9733 &#9733 &#9733 &#9733</p>
                        <p>Maria martins</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="gray-background">
            <div class="page-inner-content footer-content">
                <div class="download-option">
                    <p>Baixe nossa aplicação.</p>
                    <p>Baixe nossa aplicação para androide e IOS</p>
                    <div>
                        <img src="imagens/app-store.png">
                        <img src="imagens/play-store.png">
                    </div>
                </div>
                <div class="logo-footer">
                    <h1 class="logo">Gamer <span>Store</span></h1>
                    <p>Nosso objetivo e ajudar as pessoas a descobrir um novo jeito de comprar online </p>
                </div>
                <div class="link-footer">
                    <h3>Links Uteis</h3>
                    <ul>
                        <li>Cupons</li>
                        <li>Blog</li>
                        <li>Politicas</li>
                        <li>Torne-se afiliado</li>
                    </ul>
                </div>
            </div>
            <hr class="page-inner-content">
            <div class="page-inner-content copyrigth">
                <p>copyrigth 2023 Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>
    

    <script>
        const navbar=document.querySelector(".navbar")
        const menuButton=document.querySelector(".menu-button")
        
        menuButton.addEventListener("click", () => {
            navbar.classList.toggle("show-menu");
        });
    </script>
</body>
</html>