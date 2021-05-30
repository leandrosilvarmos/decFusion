@extends('layouts.web')
@section('content')

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
                <span>Consumidores</span>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur officia necessitatibus tempora
                    sunt totam nobis?</p>
            </div>
            <div class="diferenciais">
                <span>Interação</span>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur officia necessitatibus tempora
                    sunt totam nobis?</p>
            </div>
            <div class="diferenciais">
                <span>Diferencial</span>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur officia necessitatibus tempora
                    sunt totam nobis?</p>
            </div>
        </div>
    </div>
</section>

<section class="sc-nossoApp container">
    <div class="sc-nossoApp-info">
        <h3>Baixe nosso App</h3>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam sit veniam quasi velit repellendus
            nihil debitis suscipit, in tenetur. Voluptate repellat impedit esse quod neque nesciunt ipsa voluptatem
            commodi, dolorem temporibus rem est omnis inventore delectus? Aut numquam non maxime?
        </p>
    </div>

    <img src="../assets/iconPlaystore.jpg" alt="Playstore" />
</section>

<footer class="footerBg">
    <div class="footer-container container">
        <img class="footer-logo" src="../assets/dacfusionWhite.png" alt="Logo" />

        <div class="footer-info">
            <div class="ftRedes-sociais">
                <span>Redes Sociais</span>
                <img src="../assets/facebook.png" alt="redes sociais" />
                <img src="../assets/instagram.png" alt="redes sociais" />
            </div>
            <div class="ftContato">
                <span>Contato</span>
                <p>Insira seu e-mail</p>
                <input type="text" />
            </div>
            <div class="ftEndereco">
                <span>Endereço</span>
                <p>Avenida Eusébio Stevaux 4007 São Paulo, SP - 047-200</p>
            </div>
        </div>
    </div>
</footer>


@endsection