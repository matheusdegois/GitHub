<?php include_once 'includes/header.php'; ?>

<div class="container my-5">
    <div class="row align-items-center">
        <!-- Texto -->
        <div class="col-md-6 text-center">
            <h2 class="text-primary-custom mb-3 text-center">Desenvolvimento</h2>
            <h5 class="text-primary-custom mb-3 text-center">Sobre o Curso</h5>
            <p class="float-start me-3 mb-3 rounded-4 shadow-sm">
                O Técnico em Desenvolvimento de Sistemas é um profissional capacitado para projetar, desenvolver e manter softwares e aplicações. Ele atua em todas as etapas do desenvolvimento de sistemas, desde a análise de requisitos até os testes e a implementação, com foco em eficiência, inovação e qualidade. Este profissional também se destaca na aplicação de boas práticas de programação, segurança da informação e integração de sistemas, contribuindo para a automação de processos e a competitividade das organizações no setor tecnológico.
            </p>
        </div>

        <!-- Imagem -->
        <div class="col-md-6 text-center">
            <img src="img/Desenvolvimento.jpg" alt="desenvolvimento" class="img-fluid imagem-curso">
        </div>
    </div>
</div>

<style>
    .titulo-curso {
        font-family: 'Georgia', serif;
        font-weight: bold;
        text-align: center;
        margin-bottom: 20px;
    }

    .subtitulo-curso {
        font-family: 'Georgia', serif;
        font-weight: bold;
        margin-bottom: 15px;
    }

    .descricao-curso {
        font-family: 'Georgia', serif;
        font-size: 1rem;
        line-height: 1.7;
        text-align: justify;
    }

    .imagem-curso {
        max-width: 300px;
        border-radius: 10px;
        border: 5px solid black;
    }
</style>

<ul class="container nav nav-tabs mb-4" id="courseTab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="true">Areas de Atuação</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="documentos-tab" data-bs-toggle="tab" data-bs-target="#documentos" type="button" role="tab" aria-controls="documentos" aria-selected="false">Documentos</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="gallery-tab" data-bs-toggle="tab" data-bs-target="#gallery" type="button" role="tab" aria-controls="gallery" aria-selected="false">Galeria</button>
    </li>
</ul>

<div class="tab-content container" id="courseTabContent">
    <!-- Sobre o Curso -->
    <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab">
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="row align-items-center">
                    <!-- Texto -->
                    <div class="col-md-7">
                        <p>
                            O curso técnico em Análise e Desenvolvimento de Sistemas na modalidade integrada ao Ensino Médio proporciona uma formação completa, unindo os conhecimentos do ensino regular com as competências técnicas necessárias para atuar na área de tecnologia da informação.
                        </p>
                        <p>
                            Durante os três anos de formação, os alunos aprendem desde os fundamentos da programação até o desenvolvimento de sistemas completos, incluindo banco de dados, desenvolvimento web, aplicativos móveis, além de realizar projetos práticos que simulam situações reais do mercado de trabalho.
                        </p>
                        <h4 class="mb-3 mt-4">Objetivos</h4>
                        <ul>
                            <li>Formar profissionais técnicos em desenvolvimento de sistemas com sólidos conhecimentos teóricos e práticos</li>
                            <li>Desenvolver habilidades para analisar, projetar e implementar sistemas computacionais</li>
                            <li>Capacitar para o desenvolvimento de aplicações web e móveis</li>
                            <li>Promover o conhecimento em banco de dados e infraestrutura de TI</li>
                            <li>Preparar para a atuação em equipes de desenvolvimento de software</li>
                        </ul>
                        <h4 class="mb-3 mt-4">Perfil do Egresso</h4>
                        <p>O técnico em Análise e Desenvolvimento de Sistemas estará apto a:</p>
                        <ul>
                            <li>Desenvolver sistemas computacionais seguindo metodologias de desenvolvimento</li>
                            <li>Projetar e implementar bancos de dados</li>
                            <li>Criar interfaces gráficas para aplicações desktop, web e móveis</li>
                            <li>Realizar testes e manutenção de sistemas</li>
                            <li>Trabalhar em equipes de desenvolvimento de software</li>
                            <li>Documentar sistemas e processos de desenvolvimento</li>
                        </ul>
                    </div>

                    <!-- Imagem -->
                    <div class="col-md-5 text-center">
                        <img src="img/Desenvolvimento.jpg" alt="Foto do CEEP" class="img-fluid rounded shadow-sm">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="row justify-content-center g-4">
                    <div class="col-12 col-md-6">
                        <a href="matriz-agro.pdf" target="_blank" class="text-decoration-none">
                            <div class="card h-100" style="max-width: 400px; margin: 0 auto;">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <iframe src="matriz-agro.pdf" width="100%" height="200px" class="mb-3 border rounded"></iframe>
                                    <button type="button" class="btn btn-dark">Matriz curricular</button>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-12 col-md-6">
                        <a href="Plano_de_Curso_Agroneg.pdf" target="_blank" class="text-decoration-none">
                            <div class="card h-100" style="max-width: 400px; margin: 0 auto;">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <iframe src="Plano_de_Curso_Agroneg.pdf" width="100%" height="200px" class="mb-3 border rounded"></iframe>
                                    <button type="button" class="btn btn-dark">Plano de curso</button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Galeria -->
<div class="tab-pane fade" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">
    <div class="card shadow-sm bg-white border-0">
        <div class="card-body">
            <div class="carousel-galeria js-flickity" data-flickity='{"wrapAround": true, "pageDots": false, "autoPlay": 2500, "draggable": true}'>
                <div class="carousel-cell">
                    <a data-fancybox="galeria" href="img/eletrotecnica.jpeg">
                        <img src="img/quadra1.jpeg" class="galeria-img img-fluid rounded shadow-sm" alt="Foto 1">
                    </a>
                </div>
                <div class="carousel-cell">
                    <a data-fancybox="galeria" href="img/enfermagem.jpeg">
                        <img src="img/quadra2.jpeg" class="galeria-img img-fluid rounded shadow-sm" alt="Foto 2">
                    </a>
                </div>
                <div class="carousel-cell">
                    <a data-fancybox="galeria" href="img/estacionamento.jpeg">
                        <img src="img/quadra3.jpeg" class="galeria-img img-fluid rounded shadow-sm" alt="Foto 3">
                    </a>
                </div>
                <div class="carousel-cell">
                    <a data-fancybox="galeria" href="img/farmacia.jpeg">
                        <img src="img/formaturaadm.jpg" class="galeria-img img-fluid rounded shadow-sm" alt="Foto 4">
                    </a>
                </div>
                <div class="carousel-cell">
                    <a data-fancybox="galeria" href="img/estacionamento.jpeg">
                        <img src="img/turmaadm.jpg" class="galeria-img img-fluid rounded shadow-sm" alt="Foto 3">
                    </a>
                </div>
                <!-- Adicione mais imagens aqui -->
            </div>

            <div class="text-center mt-4">
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#galleryModal">
                    <i class="fas fa-images me-2"></i>Ver mais fotos
                </button>
            </div>
        </div>
    </div>
</div>

<?php include_once 'includes/footer.php'; ?>