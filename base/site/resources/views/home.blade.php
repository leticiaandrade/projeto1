@extends('layouts.app')

@section('title', 'Home')

@section('content')


<div id="home" class="image">
   <h1 class="heading">O seu sonho é o nosso!</h1>
   <p><button class="btn btn-large">Faça seu orçamento.</button></p>
</div>


<!-- SOBRE -->
<div id = "about">
<div class="about">
   
   
   <div class="container">
                <h2>SOBRE</h2>
   
          
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                </p>
                <div class="col-sm-12 col-md-12 col-lg-4 boxsobre">
                    <h3> NOSSA MISSÃO</h3>
                    <hr/>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua </p>
                </div>
                
                <div class="col-sm-12 col-md-12 col-lg-4 boxsobre">
                    <h3> NOSSA VISÃO</h3>
                    <hr/>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua </p>
                </div>
                
                
                <div class="col-sm-12 col-md-12 col-lg-4 boxsobre">
                    <h3> NOSSOS VALORES</h3>
                    <hr/>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua </p>
                </div>
                    
    </div>
   
   
   
   
   

</div>
   </div>
   <div id= "servicos">
   <div class="servicos">
 
   <div class="container"> 
   <h2> CONHEÇA OS NOSSOS SERVIÇOS:</h2>
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/slider/foto1.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua" style="width:68%;" style="height:68%;" >
      </div>

      <div class="item">
        <img src="img/slider/foto4.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua" style="width:68%;" style="height:68%;"   >
      </div>
    
      <div class="item">
        <img src="img/slider/fotoempresa.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua" style="width:68%;" style="height:68%;"  >
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

 
</div>
   </div>
   
            <div id= "noticias">
        <div class="noticias">
        <h2>NOTÍCIAS:</h2>
   
                
        
        <section class="details-card">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                    
                        <img src="img/noticias/1.jpg" alt="">
                        <span><h4>07/02/2018</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>Notícia 1</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis
                            voluptas totam</p>
                            <a href="noticias.html" class="btn-card">Ler mais</a>   
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="img/noticias/2.jpg" alt="">
                        <span><h4>09/02/2018</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>Notícia 2</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis
                            voluptas totam.Lorem ipsum dolor sit amet consectetur, adipisicing elit. </p>
                            <a href="#" class="btn-card">Ler mais</a>   
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="img/noticias/3.jpg" alt="">
                        <span><h4>10/02/2018</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>Notícia 3</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis
                            voluptas totam</p>
                            <a href="#" class="btn-card">Ler mais</a>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        
        
        
        
        
        </div>
        </div>
        
        <div id= "contato">
   <div class="contato">
   
    <h2> FALE CONOSCO:</h2>
   <!-- MAPA -->
   
   <div class="container">
    

        <div class="col-sm-12 col-md-12 col-lg-6">
            
            <div class="pgContato">
   <div class="contato">
      <div class="formContato">
         <form id="formContato" method="post" onsubmit="return false;" novalidate="novalidate">
            <input id="nome" name="nome" required="" type="text" placeholder="Nome" /> 
            <input id="email" name="email" required="" type="email" placeholder="Email" /> 
            <input id="tel" name="tel" type="tel" placeholder="Telefone" /> 
            <textarea id="conteudo" name="conteudo" required="" placeholder="Deixe uma mensagem"></textarea>
            <button class="botaoContato" type="submit">Enviar</button>
         </form>
      </div>
   </div>
</div>
            
        </div>
        
        
        <div class="col-sm-12 col-md-12 col-lg-6">
            
            <div class="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3899.0623853435013!2d-38.97787523673665!3d-12.24405522743186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x71437f9d2c56d8b%3A0x5ba82cf5355121cb!2sR.+Barra%2C+410+-+Jardim+Cruzeiro%2C+Feira+de+Santana+-+BA%2C+44024-246!5e0!3m2!1spt-BR!2sbr!4v1526759254223" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    
   
   </div>
   
   
   
</div>
   
   </div>
  @stop