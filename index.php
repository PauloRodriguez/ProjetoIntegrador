<!doctype html>
<html lang="en">
  <head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <!--para colocar o icone-->
      <!--link do icone de pesquisa-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="icon" href="MeuIcone.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="icone/b.png" type="image/x-icon"/>
   <title>Buy Express</title>
  </head>
  <body>

  <div>
  <header class="topbar ">
      <div class="container">
        <div class="row">
          <!-- social icon-->
          <div class="col-sm-12">
            <ul class="social-network">
              <li><a class="waves-effect waves-dark" style="font-size:20px" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="waves-effect waves-dark" style="font-size:20px" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="waves-effect waves-dark" style="font-size:20px" href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a class="waves-effect waves-dark" style="font-size:20px" href="#"><i class="fa fa-pinterest"></i></a></li>
              <li><a class="waves-effect waves-dark" style="font-size:20px" href="#"><i class="fa fa-google-plus"></i></a></li>

            </ul>
          </div>

        </div>
      </div>
  </header>
  <nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear">
    <div class="container">
      <a class="navbar-brand" href="index.html" style="font-size:20px" style="text-transform: uppercase;"> BUY EXPRESS.COM</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">

        <ul class="navbar-nav ml-auto">

          <li class="nav-item active">
            <a class="nav-link" style="font-size:15px" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" style="font-size:15px" href="eletronicos.php">Eletrônico</a>
          </li>

         <li class="nav-item">
            <a class="nav-link" style="font-size:15px" href="celular.php">Celular</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" style="font-size:15px" href="informatica.php">Informática</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" style="font-size:15px" href="games.php">Games</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" style="font-size:15px" href="livro.php">Livro</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" style="font-size:15px" href="roupa.php">Roupa</a>
          </li>
          

        </ul>
      </div>
    </div>
  </nav>
</div>

 <!--modal serve para abrir a janela do login -->

      <div class="modal" id="modalLogin">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="font-size: 20px">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label for="staticEmail" class="col-sm-2 col-form-label" style="font-size:15px; padding:10px; margin:-10px;">E-mail</label>
       <div class="form-group">
      
      <input style="font-size: 11px" type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="email@example.com">
      <input style="font-size: 12px" type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Digite seu email">      
      
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" style="font-size: 15px">Senha</label>
      <input style="font-size: 12px" type="password" class="form-control" id="Password1" placeholder="Digite sua senha">
    </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" style="font-size: 15px">Logar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="font-size: 15px">Cancelar</button>
        <a href="cadastro.php"<button type="button" class="btn btn-primary" style="font-size: 15px">Cadastra-se</button></a>
      </div>

       
    </div>
  </div>
</div>
            


<nav class="navbar navbar-expand-sm bg-light">

  <!-- Links -->
  <ul class="navbar-nav">
    
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" size="200" style="padding-top: 15px; font-size: 15px;"  type="text" placeholder="Encontre seu produto">
      <button class="btn btn-primary my-2 my-sm-0" type="submit"><i class="fa fa-search fa-3x" aria-hidden="true"></i></button>
    </form>
    
    <ul class="navbar-nav ">
      <li class="nav-item " >
      <a class="nav-link login" aria-hidden="true" href="#modalLogin" data-toggle="modal" data-target="#modalLogin">
      <i class="fa fa-user-circle fa-4x" aria-hidden="true"></i><h3> Login</h3></a>    

      </li>
    </ul>
    <a href=""><i class="fa fa-cart-arrow-down"  style="font-size:50px"></i></a>
</nav>


  <div class="page">
  <div class="page__demo">
    <svg width="26" height="28" style="display: none;">
      <symbol id="twitter" viewBox="0 0 26 28">
        <path d="M25.312 6.375c-0.688 1-1.547 1.891-2.531 2.609 0.016 0.219 0.016 0.438 0.016 0.656 0 6.672-5.078 14.359-14.359 14.359-2.859 0-5.516-0.828-7.75-2.266 0.406 0.047 0.797 0.063 1.219 0.063 2.359 0 4.531-0.797 6.266-2.156-2.219-0.047-4.078-1.5-4.719-3.5 0.313 0.047 0.625 0.078 0.953 0.078 0.453 0 0.906-0.063 1.328-0.172-2.312-0.469-4.047-2.5-4.047-4.953v-0.063c0.672 0.375 1.453 0.609 2.281 0.641-1.359-0.906-2.25-2.453-2.25-4.203 0-0.938 0.25-1.797 0.688-2.547 2.484 3.062 6.219 5.063 10.406 5.281-0.078-0.375-0.125-0.766-0.125-1.156 0-2.781 2.25-5.047 5.047-5.047 1.453 0 2.766 0.609 3.687 1.594 1.141-0.219 2.234-0.641 3.203-1.219-0.375 1.172-1.172 2.156-2.219 2.781 1.016-0.109 2-0.391 2.906-0.781z"></path>
      </symbol>
      <symbol id="codepen" viewBox="0 0 28 28">
        <path d="M3.375 18.266l9.422 6.281v-5.609l-5.219-3.484zM2.406 16.016l3.016-2.016-3.016-2.016v4.031zM15.203 24.547l9.422-6.281-4.203-2.812-5.219 3.484v5.609zM14 16.844l4.25-2.844-4.25-2.844-4.25 2.844zM7.578 12.547l5.219-3.484v-5.609l-9.422 6.281zM22.578 14l3.016 2.016v-4.031zM20.422 12.547l4.203-2.812-9.422-6.281v5.609zM28 9.734v8.531c0 0.391-0.203 0.781-0.531 1l-12.797 8.531c-0.203 0.125-0.438 0.203-0.672 0.203s-0.469-0.078-0.672-0.203l-12.797-8.531c-0.328-0.219-0.531-0.609-0.531-1v-8.531c0-0.391 0.203-0.781 0.531-1l12.797-8.531c0.203-0.125 0.438-0.203 0.672-0.203s0.469 0.078 0.672 0.203l12.797 8.531c0.328 0.219 0.531 0.609 0.531 1z"></path>
      </symbol>
      <symbol id="linkedin" viewBox="0 0 24 28">
        <path d="M5.453 9.766v15.484h-5.156v-15.484h5.156zM5.781 4.984c0.016 1.484-1.109 2.672-2.906 2.672v0h-0.031c-1.734 0-2.844-1.188-2.844-2.672 0-1.516 1.156-2.672 2.906-2.672 1.766 0 2.859 1.156 2.875 2.672zM24 16.375v8.875h-5.141v-8.281c0-2.078-0.75-3.5-2.609-3.5-1.422 0-2.266 0.953-2.641 1.875-0.125 0.344-0.172 0.797-0.172 1.266v8.641h-5.141c0.063-14.031 0-15.484 0-15.484h5.141v2.25h-0.031c0.672-1.062 1.891-2.609 4.672-2.609 3.391 0 5.922 2.219 5.922 6.969z"></path>
      </symbol>
    </svg>
    <!--<input id="purple" class="radio radio_color" type="radio" name="color" checked>
    <input id="black" class="radio radio_color" type="radio" name="color">
    <input id="blue" class="radio radio_color" type="radio" name="color">
    <input id="green" class="radio radio_color" type="radio" name="color">
    <input id="red" class="radio radio_color" type="radio" name="color">
    <div class="preview-options">-->
      <!--<div class="main-container preview-options__container">
        <label for="purple" class="preview-options__param preview-options__color preview-options__color_purple"></label>
        <label for="black" class="preview-options__param preview-options__color preview-options__color_black"></label>
        <label for="blue" class="preview-options__param preview-options__color preview-options__color_blue"></label>
        <label for="green" class="preview-options__param preview-options__color preview-options__color_green"></label>
        <label for="red" class="preview-options__param preview-options__color preview-options__color_red"></label>
      </div>
    </div>-->

    <!-- type1 -->
    <!-- teamy_mask-circle -->

    <section class="section">
      <div class="main-container">
        <header class="section__header">
          <h2 class="title section__title">Eletrônico</h2>
          <span class="section__hint"></span>
        </header>
        <div class="section__content teamy-team">
          <article class="teamy teamy_style1 teamy_mask-circle">
            <div class="teamy__layout">
              <div class="teamy__preview">
                <img src="img/foto.jpg" class="teamy__avatar" alt="The demo photo">
              </div>
              <div class="teamy__back">
                <div class="teamy__back-inner">
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#twitter"></use></svg>
                    <span class="social__name">Twitter</span>
                  </a>
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#codepen"></use></svg>
                    <span class="social__name">Codepen</span>
                  </a>
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#linkedin"></use></svg>
                    <span class="social__name">LinkedIn</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="teamy__content">
              <h3 class="teamy__name" style="font-size: 20px">Maquina Fotográfica Sony</h3>
              <span class="teamy__t" style="font-size:15px ">R$ 2.157,20</span>
            </div>
          </article>
          <article class="teamy teamy_style1 teamy_mask-circle teamy_zoom-photo">
            <div class="teamy__layout">
              <div class="teamy__preview">
                <img src="img/tv1.jpg" class="teamy__avatar" alt="The demo photo">
              </div>
              <div class="teamy__back">
                <div class="teamy__back-inner">
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#twitter"></use></svg>
                    <span class="social__name">Twitter</span>
                  </a>
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#codepen"></use></svg>
                    <span class="social__name">Codepen</span>
                  </a>
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#linkedin"></use></svg>
                    <span class="social__name">LinkedIn</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="teamy__content">
              <h3 class="teamy__name" style="font-size: 20px">TV Samsung cuva</h3>
              <span class="teamy__post" style="font-size:15px">R$ 3.500,00</span>
            </div>
          </article>
          <article class="teamy teamy_style1 teamy_mask-circle teamy_zoom-rotate-photo">
            <div class="teamy__layout">
              <div class="teamy__preview">
                <img src="img/dvd.jpg" class="teamy__avatar" alt="The demo photo">
              </div>
              <div class="teamy__back">
                <div class="teamy__back-inner">
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#twitter"></use></svg>
                    <span class="social__name">Twitter</span>
                  </a>
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#codepen"></use></svg>
                    <span class="social__name">Codepen</span>
                  </a>
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#linkedin"></use></svg>
                    <span class="social__name">LinkedIn</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="teamy__content">
              <h3 class="teamy__name" style="font-size: 20px">DVD Player</h3>
              <span class="teamy__post" style="font-size: 15px">R$ 200,00</span>
            </div>
          </article>
          <article class="teamy teamy_style1 teamy_mask-circle teamy_zoom-slide-photo">
            <div class="teamy__layout">
              <div class="teamy__preview">
                <img src="img/som.jpg" class="teamy__avatar" alt="The demo photo">
              </div>
              <div class="teamy__back">
                <div class="teamy__back-inner">
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#twitter"></use></svg>
                    <span class="social__name">Twitter</span>
                  </a>
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#codepen"></use></svg>
                    <span class="social__name">Codepen</span>
                  </a>
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#linkedin"></use></svg>
                    <span class="social__name">LinkedIn</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="teamy__content">
              <h3 class="teamy__name" style="font-size: 20px">Mini HI-FI System </h3>
              <span class="teamy__post" style="font-size: 15px">R$ 1.500,00</span>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- type1 -->
    <!-- teamy_mask-triangle -->

    <section class="section">
      <div class="main-container" >
        <header class="section__header" >
          <h2 class="title title_xl section__title">Celular</h2>
          <span class="section__hint"></span>
        </header>
        <div class="section__content teamy-team">
          <article class="teamy teamy_style1 teamy_mask-triangle">
            <div class="teamy__layout">
              <div class="teamy__preview">
                <img src="img/cel1.jpg" class="teamy__avatar" alt="The demo photo">
              </div>
              <div class="teamy__back">
                <div class="teamy__back-inner">
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#twitter"></use></svg>
                    <span class="social__name">Twitter</span>
                  </a>
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#codepen"></use></svg>
                    <span class="social__name">Codepen</span>
                  </a>
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#linkedin"></use></svg>
                    <span class="social__name">LinkedIn</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="teamy__content">
              <h3 class="teamy__name" style="font-size: 20px">Samsung J5</h3>
              <span class="teamy__post" style="font-size: 15px">R$ 800,00</span>
            </div>
          </article>
          <article class="teamy teamy_style1 teamy_mask-triangle teamy_zoom-photo">
            <div class="teamy__layout">
              <div class="teamy__preview">
                <img src="img/if1.jpg" class="teamy__avatar" alt="The demo photo">
              </div>
              <div class="teamy__back">
                <div class="teamy__back-inner">
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#twitter"></use></svg>
                    <span class="social__name">Twitter</span>
                  </a>
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#codepen"></use></svg>
                    <span class="social__name">Codepen</span>
                  </a>
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#linkedin"></use></svg>
                    <span class="social__name">LinkedIn</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="teamy__content">
              <h3 class="teamy__name" style="font-size: 20px">Iphone 8 </h3>
              <span class="teamy__post" style="font-size: 15px">R$ 4.000.00</span>
            </div>
          </article>
          <article class="teamy teamy_style1 teamy_mask-triangle teamy_zoom-rotate-photo">
            <div class="teamy__layout">
              <div class="teamy__preview">
                <img src="img/moto.jpg" class="teamy__avatar" alt="The demo photo">
              </div>
              <div class="teamy__back">
                <div class="teamy__back-inner">
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#twitter"></use></svg>
                    <span class="social__name">Twitter</span>
                  </a>
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#codepen"></use></svg>
                    <span class="social__name">Codepen</span>
                  </a>
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#linkedin"></use></svg>
                    <span class="social__name">LinkedIn</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="teamy__content">
              <h3 class="teamy__name" style="font-size: 20px">Moto G5 Plus </h3>
              <span class="teamy__post" style="font-size: 15px">R$ 1.079.00</span>
            </div>
          </article>
          <article class="teamy teamy_style1 teamy_mask-triangle teamy_zoom-slide-photo">
            <div class="teamy__layout">
              <div class="teamy__preview">
                <img src="img/lg.jpg" class="teamy__avatar" alt="The demo photo">
              </div>
              <div class="teamy__back">
                <div class="teamy__back-inner">
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#twitter"></use></svg>
                    <span class="social__name">Twitter</span>
                  </a>
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#codepen"></use></svg>
                    <span class="social__name">Codepen</span>
                  </a>
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#linkedin"></use></svg>
                    <span class="social__name">LinkedIn</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="teamy__content">
              <h3 class="teamy__name" style="font-size: 20px">LG Q6</h3>
              <span class="teamy__post" style="font-size: 15px">R$ 1.124,00</span>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- type2 -->
    <!-- teamy_mask-circle -->

    <section class="section">
      <div class="main-container">
        <header class="section__header">
          <h2 class="title title_xl section__title">Informática</h2>
          <span class="section__hint"></span>
        </header>
        <div class="section__content teamy-team">
          <article class="teamy teamy_style2 teamy_mask-circle">
            <div class="teamy__layout">
              <div class="teamy__preview">
                <img src="img/S.jpg" class="teamy__avatar" alt="The demo photo">
              </div>
              <div class="teamy__back">
                <div class="teamy__back-inner">
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#twitter"></use></svg>
                    <span class="social__name">Twitter</span>
                  </a>
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#codepen"></use></svg>
                    <span class="social__name">Codepen</span>
                  </a>
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#linkedin"></use></svg>
                    <span class="social__name">LinkedIn</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="teamy__content">
              <h3 class="teamy__name" style="font-size: 20px">Notbook Sansung</h3>
              <span class="teamy__post" style="font-size: 15px">R$ 1.079,10</span>
            </div>
          </article>
          <article class="teamy teamy_style2 teamy_mask-circle teamy_zoom-photo">
            <div class="teamy__layout">
              <div class="teamy__preview">
                <img src="img/teclado.jpg" class="teamy__avatar" alt="The demo photo">
              </div>
              <div class="teamy__back">
                <div class="teamy__back-inner">
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#twitter"></use></svg>
                    <span class="social__name">Twitter</span>
                  </a>
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#codepen"></use></svg>
                    <span class="social__name">Codepen</span>
                  </a>
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#linkedin"></use></svg>
                    <span class="social__name">LinkedIn</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="teamy__content">
              <h3 class="teamy__name" style="font-size: 20px">Teclado para Tablet</h3>
              <span class="teamy__post" style="font-size: 15px"> R$ 250,00</span>
            </div>
          </article>
          <article class="teamy teamy_style2 teamy_mask-circle teamy_zoom-rotate-photo">
            <div class="teamy__layout">
              <div class="teamy__preview">
                <img src="img/mause.jpg" class="teamy__avatar" alt="The demo photo">
              </div>
              <div class="teamy__back">
                <div class="teamy__back-inner">
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#twitter"></use></svg>
                    <span class="social__name">Twitter</span>
                  </a>
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#codepen"></use></svg>
                    <span class="social__name">Codepen</span>
                  </a>
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#linkedin"></use></svg>
                    <span class="social__name">LinkedIn</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="teamy__content">
              <h3 class="teamy__name" style="font-size: 20px">Mause Gamer</h3>
              <span class="teamy__post" style="font-size: 15px">R$ 60,00</span>
            </div>
          </article>
          <article class="teamy teamy_style2 teamy_mask-circle teamy_zoom-slide-photo">
            <div class="teamy__layout">
              <div class="teamy__preview">
                <img src="img/gab.jpg" class="teamy__avatar" alt="The demo photo">
              </div>
              <div class="teamy__back">
                <div class="teamy__back-inner">
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#twitter"></use></svg>
                    <span class="social__name">Twitter</span>
                  </a>
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#codepen"></use></svg>
                    <span class="social__name">Codepen</span>
                  </a>
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#linkedin"></use></svg>
                    <span class="social__name">LinkedIn</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="teamy__content">
              <h3 class="teamy__name" style="font-size: 20px">Gabinete Gamer</h3>
              <span class="teamy__post" style="font-size: 15px">R$ 269,00</span>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- type2 -->
    <!-- teamy_mask-triangle -->

    <section class="section">
      <div class="main-container">
        <header class="section__header">
          <h2 class="title title_xl section__title">Games</h2>
          <span class="section__hint"></span>
        </header>
        <div class="section__content teamy-team">
          <article class="teamy teamy_style2 teamy_mask-triangle">
            <div class="teamy__layout">
              <div class="teamy__preview">
                <img src="img/xbox.jpg" class="teamy__avatar" alt="The demo photo">
              </div>
              <div class="teamy__back">
                <div class="teamy__back-inner">
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#twitter"></use></svg>
                    <span class="social__name">Twitter</span>
                  </a>
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#codepen"></use></svg>
                    <span class="social__name">Codepen</span>
                  </a>
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#linkedin"></use></svg>
                    <span class="social__name">LinkedIn</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="teamy__content">
              <h3 class="teamy__name" style="font-size: 20px">XBOX ONE</h3>
              <span class="teamy__post" style="font-size: 15px">R$ 3.179,00</span>
            </div>
          </article>
          <article class="teamy teamy_style2 teamy_mask-triangle teamy_zoom-photo">
            <div class="teamy__layout">
              <div class="teamy__preview">
                <img src="img/ps.jpg" class="teamy__avatar" alt="The demo photo">
              </div>
              <div class="teamy__back">
                <div class="teamy__back-inner">
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#twitter"></use></svg>
                    <span class="social__name">Twitter</span>
                  </a>
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#codepen"></use></svg>
                    <span class="social__name">Codepen</span>
                  </a>
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#linkedin"></use></svg>
                    <span class="social__name">LinkedIn</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="teamy__content">
              <h3 class="teamy__name" style="font-size: 20px">PS4 Slim</h3>
              <span class="teamy__post" style="font-size: 15px">1.699.00</span>
            </div>
          </article>
          <article class="teamy teamy_style2 teamy_mask-triangle teamy_zoom-rotate-photo">
            <div class="teamy__layout">
              <div class="teamy__preview">
                <img src="img/vita.jpg" class="teamy__avatar" alt="The demo photo">
              </div>
              <div class="teamy__back">
                <div class="teamy__back-inner">
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#twitter"></use></svg>
                    <span class="social__name">Twitter</span>
                  </a>
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#codepen"></use></svg>
                    <span class="social__name">Codepen</span>
                  </a>
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#linkedin"></use></svg>
                    <span class="social__name">LinkedIn</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="teamy__content">
              <h3 class="teamy__name" style="font-size: 20px">PSP Vita</h3>
              <span class="teamy__post" style="font-size: 15px">R$ 699,00</span>
            </div>
          </article>
          <article class="teamy teamy_style2 teamy_mask-triangle teamy_zoom-slide-photo">
            <div class="teamy__layout">
              <div class="teamy__preview">
                <img src="img/cadeira.jpg" class="teamy__avatar" alt="The demo photo">
              </div>
              <div class="teamy__back">
                <div class="teamy__back-inner">
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#twitter"></use></svg>
                    <span class="social__name">Twitter</span>
                  </a>
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#codepen"></use></svg>
                    <span class="social__name">Codepen</span>
                  </a>
                  <a href="#0" class="social">
                    <svg class="social__icon"><use xlink:href="#linkedin"></use></svg>
                    <span class="social__name">LinkedIn</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="teamy__content">
              <h3 class="teamy__name" style="font-size: 20px">Cadeira gamer</h3>
              <span class="teamy__post" style="font-size: 15px">R$ 839,90</span>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- type3 -->
    <!-- teamy_mask-circle -->

    <section class="section">
      <div class="main-container">
        <header class="section__header">
          <h2 class="title title_xl section__title">Livro</h2>
          <span class="section__hint"></span>
        </header>
        <div class="section__content teamy-team">
          <article class="teamy teamy_style3 teamy_mask-circle">
            <div class="teamy__layout">
              <div class="teamy__preview">
                <img src="img/livro.png" class="teamy__avatar" alt="The demo photo">
              </div>
              <div class="teamy__back">
                <div class="teamy__back-inner">
                  <div class="teamy__content">
                    <h3 class="teamy__name"></h3>
                    <span class="teamy__post"></span>
                  </div>
                  <div class="socials">
                    <a href="#0" class="social">
                      <svg class="social__icon"><use xlink:href="#twitter"></use></svg>
                      <span class="social__name">Twitter</span>
                    </a>
                    <a href="#0" class="social">
                      <svg class="social__icon"><use xlink:href="#codepen"></use></svg>
                      <span class="social__name">Codepen</span>
                    </a>
                    <a href="#0" class="social">
                      <svg class="social__icon"><use xlink:href="#linkedin"></use></svg>
                      <span class="social__name">LinkedIn</span>
                    </a>
                 </div>
                </div>
                   
                   <div class="teamy__content">
                   <h3 class="teamy__name" style="font-size: 20px">Encontro com Deus </h3>
                   <span class="teamy__post" style="font-size: 15px">R$ 50,90</span>
                  </div>

              </div>
            </div>

          </article>
          <article class="teamy teamy_style3 teamy_mask-circle teamy_zoom-photo">
            <div class="teamy__layout">
              <div class="teamy__preview">
                <img src="img/livro1.jpg" class="teamy__avatar" alt="The demo photo">
              </div>
              <div class="teamy__back">
                <div class="teamy__back-inner">
                  <div class="teamy__content">
                    <h3 class="teamy__name"></h3>
                    <span class="teamy__post"></span>
                  </div>
                  <div class="socials">
                    <a href="#0" class="social">
                      <svg class="social__icon"><use xlink:href="#twitter"></use></svg>
                      <span class="social__name">Twitter</span>
                    </a>
                    <a href="#0" class="social">
                      <svg class="social__icon"><use xlink:href="#codepen"></use></svg>
                      <span class="social__name">Codepen</span>
                    </a>
                    <a href="#0" class="social">
                      <svg class="social__icon"><use xlink:href="#linkedin"></use></svg>
                      <span class="social__name">LinkedIn</span>
                    </a>
                  </div>

                  <div class="teamy__content">
                   <h3 class="teamy__name" style="font-size: 20px">Cid Moreira </h3>
                   <span class="teamy__post" style="font-size: 15px">R$ 60,90</span>
                  </div>

                </div>
              </div>
            </div>
          </article>
          <article class="teamy teamy_style3 teamy_mask-circle teamy_zoom-rotate-photo">
            <div class="teamy__layout">
              <div class="teamy__preview">
                <img src="img/livro2.png" class="teamy__avatar" alt="The demo photo">
              </div>
              <div class="teamy__back">
                <div class="teamy__back-inner">
                  <div class="teamy__content">
                    <h3 class="teamy__name"></h3>
                    <span class="teamy__post"></span>
                  </div>
                  <div class="socials">
                    <a href="#0" class="social">
                      <svg class="social__icon"><use xlink:href="#twitter"></use></svg>
                      <span class="social__name">Twitter</span>
                    </a>
                    <a href="#0" class="social">
                      <svg class="social__icon"><use xlink:href="#codepen"></use></svg>
                      <span class="social__name">Codepen</span>
                    </a>
                    <a href="#0" class="social">
                      <svg class="social__icon"><use xlink:href="#linkedin"></use></svg>
                      <span class="social__name">LinkedIn</span>
                    </a>
                  </div>
                   <div class="teamy__content">
                   <h3 class="teamy__name" style="font-size: 20px">Eu mereço ter dinheiro </h3>
                   <span class="teamy__post" style="font-size: 15px">R$ 24,90</span>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <article class="teamy teamy_style3 teamy_mask-circle teamy_zoom-slide-photo">
            <div class="teamy__layout">
              <div class="teamy__preview">
                <img src="img/livro3.jpg" class="teamy__avatar" alt="The demo photo">
              </div>
              <div class="teamy__back">
                <div class="teamy__back-inner">
                  <div class="teamy__content">
                    <h3 class="teamy__name"></h3>
                    <span class="teamy__post"></span>
                  </div>
                  <div class="socials">
                    <a href="#0" class="social">
                      <svg class="social__icon"><use xlink:href="#twitter"></use></svg>
                      <span class="social__name">Twitter</span>
                    </a>
                    <a href="#0" class="social">
                      <svg class="social__icon"><use xlink:href="#codepen"></use></svg>
                      <span class="social__name">Codepen</span>
                    </a>
                    <a href="#0" class="social">
                      <svg class="social__icon"><use xlink:href="#linkedin"></use></svg>
                      <span class="social__name">LinkedIn</span>
                    </a>
                  </div>
                   <div class="teamy__content">
                   <h3 class="teamy__name" style="font-size: 20px">A sacola perdida </h3>
                   <span class="teamy__post" style="font-size: 15px">R$ 24,90</span>
                  </div>
                </div>
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- type3 -->
    <!-- teamy_mask-triangle -->

    <section class="section">
      <div class="main-container">
        <header class="section__header">
          <h2 class="title title_xl section__title">Roupa</h2>
          <span class="section__hint"></span>
        </header>
        <div class="section__content teamy-team">
          <article class="teamy teamy_style3 teamy_mask-triangle">
            <div class="teamy__layout">
              <div class="teamy__preview">
                <img src="img/lost.jpg" class="teamy__avatar" alt="The demo photo">
              </div>
              <div class="teamy__back">
                <div class="teamy__back-inner">
                  <div class="teamy__content">
                    <h3 class="teamy__name"></h3>
                    <span class="teamy__post"></span>
                  </div>
                  <div class="socials">
                    <a href="#0" class="social">
                      <svg class="social__icon"><use xlink:href="#twitter"></use></svg>
                      <span class="social__name">Twitter</span>
                    </a>
                    <a href="#0" class="social">
                      <svg class="social__icon"><use xlink:href="#codepen"></use></svg>
                      <span class="social__name">Codepen</span>
                    </a>
                    <a href="#0" class="social">
                      <svg class="social__icon"><use xlink:href="#linkedin"></use></svg>
                      <span class="social__name">LinkedIn</span>
                    </a>
                  </div>
                   <div class="teamy__content">
                   <h3 class="teamy__name" style="font-size: 20px">Camiseta da Lost </h3>
                   <span class="teamy__post" style="font-size: 15px">R$ 100,00</span>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <article class="teamy teamy_style3 teamy_mask-triangle teamy_zoom-photo">
            <div class="teamy__layout">
              <div class="teamy__preview">
                <img src="img/casaco.jpg" class="teamy__avatar" alt="The demo photo">
              </div>
              <div class="teamy__back">
                <div class="teamy__back-inner">
                  <div class="teamy__content">
                    <h3 class="teamy__name"></h3>
                    <span class="teamy__post"></span>
                  </div>
                  <div class="socials">
                    <a href="#0" class="social">
                      <svg class="social__icon"><use xlink:href="#twitter"></use></svg>
                      <span class="social__name">Twitter</span>
                    </a>
                    <a href="#0" class="social">
                      <svg class="social__icon"><use xlink:href="#codepen"></use></svg>
                      <span class="social__name">Codepen</span>
                    </a>
                    <a href="#0" class="social">
                      <svg class="social__icon"><use xlink:href="#linkedin"></use></svg>
                      <span class="social__name">LinkedIn</span>
                    </a>
                  </div>
                  <div class="teamy__content">
                   <h3 class="teamy__name" style="font-size: 20px">Casaco Hurley </h3>
                   <span class="teamy__post" style="font-size: 15px">R$ 200,00</span>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <article class="teamy teamy_style3 teamy_mask-triangle teamy_zoom-rotate-photo">
            <div class="teamy__layout">
              <div class="teamy__preview">
                <img src="img/tenis.jpg" class="teamy__avatar" alt="The demo photo">
              </div>
              <div class="teamy__back">
                <div class="teamy__back-inner">
                  <div class="teamy__content">
                    <h3 class="teamy__name"></h3>
                    <span class="teamy__post"></span>
                  </div>
                  <div class="socials">
                    <a href="#0" class="social">
                      <svg class="social__icon"><use xlink:href="#twitter"></use></svg>
                      <span class="social__name">Twitter</span>
                    </a>
                    <a href="#0" class="social">
                      <svg class="social__icon"><use xlink:href="#codepen"></use></svg>
                      <span class="social__name">Codepen</span>
                    </a>
                    <a href="#0" class="social">
                      <svg class="social__icon"><use xlink:href="#linkedin"></use></svg>
                      <span class="social__name">LinkedIn</span>
                    </a>
                  </div>
                   <div class="teamy__content">
                   <h3 class="teamy__name" style="font-size: 20px">Tenis Oakley </h3>
                   <span class="teamy__post" style="font-size: 15px">R$ 699,00</span>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <article class="teamy teamy_style3 teamy_mask-triangle teamy_zoom-slide-photo">
            <div class="teamy__layout">
              <div class="teamy__preview">
                <img src="img/moletom.jpg" class="teamy__avatar" alt="The demo photo">
              </div>
              <div class="teamy__back">
                <div class="teamy__back-inner">
                  <div class="teamy__content">
                    <h3 class="teamy__name"></h3>
                    <span class="teamy__post"></span>
                  </div>
                  <div class="socials">
                    <a href="#0" class="social">
                      <svg class="social__icon"><use xlink:href="#twitter"></use></svg>
                      <span class="social__name">Twitter</span>
                    </a>
                    <a href="#0" class="social">
                      <svg class="social__icon"><use xlink:href="#codepen"></use></svg>
                      <span class="social__name">Codepen</span>
                    </a>
                    <a href="#0" class="social">
                      <svg class="social__icon"><use xlink:href="#linkedin"></use></svg>
                      <span class="social__name">LinkedIn</span>
                    </a>
                  </div>
                    <div class="teamy__content">
                   <h3 class="teamy__name" style="font-size: 20px">Calça Moletom Oakley </h3>
                   <span class="teamy__post" style="font-size: 15px">R$ 149,00</span>
                  </div>

                </div>
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>
  </div>

     <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="icone/subir.png"></button>

   
     <!--footer start-->
<div class="footer-wrap">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <h3></h3>
        <div class="footer-logo" ><img src="img/logo.png" alt="" style="width: 300px; height: 200px; "></div>
        <p> <a href="about-us.html"></a></p>
      </div>

      <div class="col-md-2 col-sm-6">
        <h3>CADASTRA-SE</h3>
        <ul class="footer-links">
          <li><a href="#modalLogin" data-toggle="modal" data-target="#modalLogin">Login</a></li>
          <li><a href="cadastro.php">Cadastro</a></li>
          
        </ul>
      </div>

      <div class="col-md-3 col-sm-6">
        <h3>CATEGORIAS</h3>
        <ul class="footer-category">
          <li><a href="">Eletrônicos</a></li>
          <li><a href="">Celular</a></li>
          <li><a href="">Informática</a></li>
          <li><a href="">Games</a></li>
          <li><a href="">Livro</a></li>
          <li><a href="">Roupas</a></li>
          
        </ul>
        <div class="clearfix"></div>
      </div>

      <div class="col-md-3 col-sm-6">
        <h3>Onde Estamos</h3>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3673.087578630958!2d-43.212140685032885!3d-22.983806784972735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bd506f50ce93b%3A0x69793904e3b19dbd!2sR.+Visc.+de+Piraj%C3%A1%2C+500+-+Ipanema%2C+Rio+de+Janeiro+-+RJ%2C+22410-002!5e0!3m2!1spt-BR!2sbr!4v1515415711293" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

    </div>
    <div class="copyright">Copyright © 2018 Classify - All Rights Reserved.</div>
  </div>
</div>
      <script type="text/javascript">
        // When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
      </script>
     


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  </body>

</html>