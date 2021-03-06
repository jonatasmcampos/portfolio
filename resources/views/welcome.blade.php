@extends('structureHTML')

@section('conteudo')

    <!-- ----------------- SEÇÃO QUEM SOU ----------------- -->

    <div class="secao-quem margin-top-100">

        <h1 class="titulo-secao">Quem sou</h1>
        <h2 class="subtitulo-secao">Eu</h2>
        
        <hr class="hr">

        <div class="conteudo-quem">
            <div class="minha-foto">
                <img src="{{asset('assets/images/minhafoto.jpeg')}}" alt="Minha foto">
            </div>
            <div class="sobre-mim">
                <h1>Sobre mim</h1>
                <p>bla bla bla bla bla bla bla bla bla bla bla bla bla bla blabla bla bla </p>
            </div>
        </div>
    </div>
    <!-- ----------------- END SEÇÃO QUEM SOU ----------------- -->

    
    <!-- ----------------- SEÇÃO O QUE FAÇO ----------------- -->
    <div class="secao-oque margin-top-100">

        <h1 class="titulo-secao">O que faço</h1>
        <h2 class="subtitulo-secao">Serviços e soluções.</h2>
        
        <hr class="hr">

        <div class="div-cards">

            <div class="card-oquefaco">
    
                <img src="{{asset('assets/images/android.png')}}" alt="Icone android">
                
                <div class="descricao-programacao">
                    <h2 class="gradient-texto">ANDROID</h2>
                    <p>Desenvolvimento de aplicativos nativos android.</p>
                </div>
            </div>
    
            <div class="card-oquefaco">
        
                <img src="{{asset('assets/images/frontend.png')}}" alt="Icone android">
                
                <div class="descricao-programacao">
                    <h2 class="gradient-texto">FRONT END</h2>
                    <p>Desenvolvimento web, front end.</p>
                    <p>HTML, CSS, JS, PHP, REACT, LARAVEL.</p>
                </div>
            </div>

        </div>

    </div>

    <!-- ----------------- END SEÇÃO O QUE FAÇO ----------------- -->
@endsection