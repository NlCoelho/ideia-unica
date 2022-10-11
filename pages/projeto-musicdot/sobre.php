<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
    <title>
        MusicDot | Sobre a MusicDot
    </title>
    <link rel="icon" href="img/favicon.ico">
    <!--  CSS externo	-->
    <link rel="stylesheet" href="css/sobre.css">

</head>

<body>
	<header>
		<a href="index.html"><img src="img/logo.svg" alt="logo MusicDot"></a>
		<nav>
			<ul class="justify">
				<li class="links"><a href="#contato">Contato</a></li>
				<li class="links"><a href="#">Entrar</a></li>
				<li class="links"><a href="#">Matricule-se</a></li>
			</ul>
		</nav>
	</header>
	
	<main>
		<h1 class="titulo"> Sobre a MusicDot </h1>

		<p>
		<?php print date("Y"); ?>
			A MusicDot é a maior escola online de música em todo o mundo.
			Fundada em 1932, possui estúdios em 124 países, sendo líder de mercado com mais de 90% de
			participação em 118 deles.
		</p>

		<p>
			Nossa matriz fica em <a href="https://goo.gl/maps/Woi8DhHTv1mSWERDA"> Mafra, em Santa
			Catarina</a>. De lá, saem grande parte das gravações de nosso cursos. Nossa matriz:
		</p>

		<figure class="matriz">
			<img src="img/matriz-musicdot.png" alt="Matriz	da	musicdot">
			<figcaption>
				Nathan e seu pai Ricardo
			</figcaption>
		</figure>

		<p>
			Assine os cursos da MusicDot. Acesse <a href="index.html">nosso site</a> ou entre em contato
			se tiver dúvidas. Conheça também <a href="#historia">nossa história</a> e <a href="#diferenciais">nossos
            diferenciais</a>.
		</p>

		<h2 class="subtitulo" id="historia"> História </h2>

		<figure class="familia">
			<img src="img/familia-tupfeln.jpg" alt="Foto	da	família	tüpfeln">
			<figcaption>Família Coelho</figcaption>
		</figure>

		<p>
			A fundação em 1932 ocorreu no momento da descoberta econônica de cursos por stream online no interior de Santa
			Catarina. A família Tüpfeln, tradicional da região, investiu todas as suas economias nessa nova iniciativa,
			revolucionária para a época. A fundadora frau Dagmar Olaf Tüpfeln, dotada de particular visão
			administrativa, guiou os negócios da empresa durante mais de 50 anos, muitos deles ao lado
			de seu filho Ernst Noten Tüpfeln, atual CEO. O nome da empresa é inspirado no nome da família.
		</p>

		<p>
			O crescimento da empresa foi praticamente instantâneo. Nos primeiros 5 anos, já atendia 18 países.
			Bateu a marca de 100 países em apenas 15 anos de existência. Até hoje, já atendeu 2 bilhões
			de usuários diferentes, em bilhões de diferentes pedidos.
		</p>

		<p>
			O crescimento em número de funcionários é também assombroso. Hoje, é a maior empregadora do
			Brasil, mas mesmo após apenas 5 anos de sua existência, já possuía 30 mil funcionários. Fora do
			Brasil, há 240 mil funcionários, além dos 890 mil brasileiros nas instalações de Mafra e
			nos escritórios em todo país.
		</p>

		<p>
			Dada a importância econômica da empresa para o Brasil, a família Tüpfeln já recebeu diversos prêmios,
			homenagens e condecorações. Todos os presidentes do Brasil já visitaram as instalações da MusicDot, além de
			presidentes da União Européia, Ásia e o secretário-geral da ONU.
		</p>

		<h2 class="subtitulo" id="diferenciais"> Diferencias </h2>

		<ul>
			<li> Há <?php print date("Y") - 1932; ?> anos nascia </li>
			<li> Menor preço do mercado, garantido </li>
			<li> Se você achar um serviço mais barato, leva 1 mês de graça </li>
			<li> Pague em reais, dólares, euros, libras, dodgecoins, litecoins ou bitcoins </li>
			<li> Todas as compras acompanham acesso à Alura </li>
			<li> Maior escola de música online do mundo </li>
			<li> Atendimento via telefone, email, chat, twitter, facebook, instagram, ICQ, WhatsApp, SMS, carta, fax, sinal
			de fumaça e telegrama </li>
			<li> Presente em 124 países </li>
			<li> Mais de um milhão de funcionários em todo o mundo </li>
		</ul>

		<h2 class="titulo" id="contato"> Contato </h2>

		<div class="contato__secao">
			<h3 class="contato__subtitulo"> Correspondência </h3>
			<small> (todos os dias, das 9h às 18h) </small>

			<address class="contato__info">
				AOVS Sistemas de Informática S.A
				<br>
				Av. Guaratinguetá, 346 casa 2
				<br>
				Nova Sorocaba &nbsp;&nbsp;&nbsp;&nbsp;
				Sorocaba - SP
				<br>
				18070-780
			</address>
		</div>

		<div class="contato__secao	contato__secao-telefone">
			<h3 class="contato__subtitulo">Telefones</h3>
			<small> (segunda à sexta, das 9h às 18h) </small>

			<dl class="contato__info">
				<div>
					<dt class="contato__info-titulo"> Ricardo Coelho: </dt>
					<dd class="contato__info-pf"> <a href="tel://15981-582773">(15) 981-582773 </a> </dd>
				</div>
				<div>
					<dt class="contato__info-titulo"> Jeniffer Lopes: </dt>
					<dd class="contato__info-pj"> <a href="tel://1598157-4996">(15) 98157-4996 </a> </dd>
				</div>
			</dl>
		</div>
	
		<p class="testP">Um parágrafo que é block</p>
		<p class="testP">Outro parágrafo que é block</p>
		<a class="testA">Um link que é inline</a>
		<a class="testA">Outro link que é inline</a>
	
	</main>
	
    <footer class="rodape">
        <img src="img/logo.svg" alt="Logo	da	musicdot" class="rodape__logo">
        <p class="rodape__copyright"> &copy; Copyright MusicDot </p>
    </footer>

</body>

</html>