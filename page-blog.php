<?php
// Template Name: o_blog
?>
<?php get_header()?>
    <!--Navegação breadcrumb-->
    <div class="
        container 
        ff-inter 
        fz-14 
        fz-sm-16
        lh-140
        py-awe-32
        ">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <nav style="--bs-breadcrumb-divider: '>>';" aria-label="breadcrumb">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="index.html" class="text-prata-2">Home</a></li>
                        <li class="breadcrumb-item text-truncate active" aria-current="page">O blog</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!--/Navegação breadcrumb-->

    <!--Container geral do conteúdo-->
    <main class="container text-black-2">
        <article>
            <div class="row">

                <!--Caixa do título da noticia (nela fica a pequena borda inferior laranja)-->
                <div class="
                    col-12 
                    col-lg-10 
                    offset-lg-1 
                    box-title
                    position-relative
                    pb-awe-24
                    px-lg-0
                    ">
                    <!--Titulo da notícia-->
                    <h1 class="
                        fz-44
                        lh-140
                        fw-extra-bold
                        ">
                        Escrevo contos e crônicas para me divertir e aos para alegrar os meus leitores fiéis
                    </h1>
                </div>

                <!--Espaço para os dados da notícia, como autor, data de puplicação e notícias semelhantes-->
                <div class="
                    dados-noticia 
                    col-12 
                    col-md-8
                    col-lg-10
                    offset-md-1
                    offset-lg-2
                    pt-awe-80
                    pb-awe-48
                    px-lg-0
                    ">

                    <span class="fst-italic text-gray fw-medium lh-140 fz-16 d-flex flex-wrap">
                        por
                        <a href="" class="text-prata fw-bold text-decoration-underline fst-normal mx-2">Sérgio
                            Trindade</a>
                        foi atualizado em
                        <span class="text-prata fw-medium mx-2">16.out.2018</span>
                    </span>
                </div>

                <!--Container de texto-->
                <div class="
                    col-12
                    col-md-10
                    col-lg-8 
                    offset-md-1
                    offset-lg-2
                    lh-180
                    fz-21
                    px-lg-0
                    ">
                    <p>
                        Filho de Jacinto de Souza Rojão, um dos mais q ueridos funcionários da Escola Federal de
                        Educação, Ciência, Filosofia e Tecnologia do Rio das Mortes (EFECFTRM), Alan Gideon assumiu vaga
                        de concurso, como administrador, na Unidade Natividad Zona Leste, num momento conturbado.
                    </p>

                    <h3 class="text-uppercase fz-28 fw-bold lh-180 mb-awe-48">Como nasceu</h3>

                    <p>
                        Filho de Jacinto de Souza Rojão, um dos mais queridos funcionários da <span
                            class="text-danger-light">
                            Escola Federal de Educação, Ciência, Filosofia e Tecnologia do Rio das Mortes
                            (EFECFTRM)</span>, Alan Gideon assumiu vaga de
                        concurso, como administrador, na Unidade Natividad Zona Leste, num momento conturbado.
                    </p>

                    <p>
                        Simão, o Celerado, ainda acalentava sonhos milagrosos; Zorba, democrata de ocasião, não
                        simpatizava com o
                        MDF,
                        não simpatizava com democracia e detestava o contraditório, ainda que se inchasse todo para
                        discursar, de
                        forma empolada e até piegas, sobre os benefícios deles.
                    </p>

                    <p>
                        Terminada a intervenção que não interveio em nada e que nada descobriu sobre mau uso de dinheiro
                        público,
                        Alan
                        Gideon foi nomeado diretor de administração,
                    </p>

                    <!--Caixa para frases em destaque-->
                    <div class="
                        destaque-box
                        py-awe-24
                        px-awe-16
                        px-sm-awe-24
                        px-md-awe-32
                        px-lg-awe-48
                        fw-bold
                        ff-open-sans
                        mb-awe-48
                        ">
                        <p class="m-0 fz-21 fz-md-26 lh-160">para infortúnio dele e gáudio de Bacamarte e Zorba, afeitos
                            a culpar os
                            outros pelos erros que
                            cometem. Pensava a dupla: encon tramos alguém para servir de bode expiatório.
                        </p>
                    </div>

                    <p>
                        Em pouco mais de quatro meses no cargo, Alan Gideon começou a perceber que tinha tanta autonomia
                        para
                        decidir
                        sobre a sua pasta quanto qualquer ministro da Coreia do Norte, ou seja, nenhuma. Todas as ações
                        lhe eram
                        barradas, impedidas de saírem do papel. Quando assim não procediam, Bacamarte e/ou Zorba
                        tratavam de
                        miná-las
                        quando estavam em andamento.
                    </p>

                </div>

                <!--Container de imagem-->
                <div class="
                    col-12 
                    col-lg-10 
                    offset-lg-1 
                    container
                    position-relative
                    pb-awe-24
                    px-lg-0
                    ">
                    <figure class="figure">
                        <img src="../dist/image/img-post2.jpg" class="figure-img img-fluid" alt="">
                        <figcaption class="mt-awe-14 text-prata-2 lh-160 fz-16">Paris vista de uma forma diferente da
                            que estamos
                            acostumados a ver dos holofotes. Vista da rua 25 de Março em Paris, anos 20.</figcaption>
                    </figure>
                </div>
            </div>
        </article>
    </main>

<?php get_footer()?>