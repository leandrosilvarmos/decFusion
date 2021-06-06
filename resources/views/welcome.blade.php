@extends('layouts.web')
@section('content')


<div class="header-container">
    <img class="" src="../../assets/header2.png" alt="">

    <div class="header-info">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos pariatur quaerat cupiditate
            molestias voluptatum soluta eos nemo, dolorem blanditiis eum?</p>
        <a href="#nossos-produtos">Saiba mais</a>
    </div>
</div>

<section id="nossos-produtos" class="sc-nossosProds container">
    <h2>Nossos Produtos</h2>

    <div class="nossoProds-info">
        <div class="produto">
            <p>Poltronas</p>
            <a href="#"><img src="../assets/Poltrona.jpg" alt="Poltronas" /></a>
        </div>
        <div class="produto">
            <p>Sofás</p>
            <a href="#"><img src="../assets/Sofás.jpg" alt="Sofás" /></a>
        </div>
        <div class="produto">
            <p>Decorados</p>
            <a href="#"><img src="../assets/Plantas.jpg" alt="Decorados " /></a>
        </div>
    </div>
</section>

<section class="sc-diferenciaisBg">
    <div class="sc-diferenciais container">
        <h2>Entenda um pouco mais sobre os diferenciais da nossa empresa.</h2>

        <div class="sc-diferenciais-info">
            <div class="diferenciais">
                <span>Objetivo</span>
                <p>A plataforma tem como o principal objetivo, proporcionar a todos os clientes uma experiencia unica, a qual ele pode adquirir seus produtos
                    de forma simples e rapida, obter informações das melhores formas para acomodar o produto adquirido ao seu ambiente, seja de casa, trabalho ou empresa.
                </p>
            </div>
            <div class="diferenciais">
                <span>Interação</span>
                <p>A interação da plataforma ela acontece da seguinte forma, temos diversos profissionais da area de arquitetura, desing de interiores etc. cadastrados em nossa plataforma
                    assim quando finalizar um compra, voce automaticamente pode solicitar atendimento com um profissionais cadastrados.
                </p>
            </div>
            <div class="diferenciais">
                <span>Diferencial</span>
                <p>Esse diferencial traz uma facilidade consideravel a todos os clientes que irão efetuar compras na plataforma, pois dessa forma o contato com o 
                    profissional, que podera auxilia-lo da melhor maneira possivel se torna facil e rapido.Assim esperamos otimizar a experiencia de nossos clientes.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="sc-nossoApp container">
    <div class="sc-nossoApp-info">
        <h2>Baixe nosso App</h2>
        <p>
          Realize o donwload do nosso aplicativo, para realizar o seu cadastro seja como cliente ou profissional é ter a experiencia completa , conhecer nossos produtos
          e poder adquiri-lós quando e onde quiser, <span>disponivél para qualquer smartphone android somente na PlayStore<span>.
        </p>
    </div>

    <img src="../assets/iconPlaystore.jpg" alt="Playstore" />
</section>




@endsection