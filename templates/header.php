<?php use Roots\Sage\Nav; ?>

<header class="banner navbar navbar-default navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!--a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a-->
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new Nav\SageNavWalker(), 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
<header id="masthead" class="site-header" role="banner">
	<div class="curtain"></div>
	<div class="bg-image"></div>
	<div class="container">
    <div class="row site-subnav">
      <div class="col-sm-7">
        <div class="sitelogo">
        		<a href="/" title="City of Yakima"><img src="/images/dot.gif" alt="City of Yakima"></a>
        </div>
        <div class="logo">
        	<div class="city"><a href="/" title="City of Yakima">City of</a></div>
        	<div class="yakima"><a href="/" title="City of Yakima">Yakima</a></div>
        	<div class="heartofwa"><a href="/" title="City of Yakima">The Heart of Central Washington</a></div>
        </div>
      </div>
      <div class="col-sm-5 text-right">
        <div class="important-links">
            <a href="http://www.yakimatransit.org/">Transit</a> |
            <a href="/minutes/">Council Packets</a> |
            <a href="/services/codes/permits/">Permits</a> |
            <a href="http://agency.governmentjobs.com/yakimawa/">Jobs</a> |
            <a href="http://translate.google.com/translate?hl=en&sl=en&tl=es&u=http://www.yakimawa.gov" class="googletrans" onclick="if (! confirm('Renuncia de traducci&oacute;n de Google\nHa elegido para traducir la p&aacute;gina anterior de (English) to (Spanish). Antes de continuar, por favor lea la cl&aacute;usula de exenci&oacute;n de responsabilidad. Una vez que haya terminado, haga clic en el enlace que dice Continuar Traducir a Google. Gracias.\nLas siguientes declaraciones de descargo de la traducci&oacute;n y toda la informaci&oacute;n suministrada a trav&eacute;s de los enlaces a continuaci&oacute;n se procesan a trav&eacute;s de Google &reg; libre traducci&oacute;n autom&aacute;tica / proceso informatizado y son s&oacute;lo una aproximaci&oacute;n del contenido original. El servicio de traducci&oacute;n Google funciona con la mayor&iacute;a del contenido de la p&aacute;gina web sobre www.yakimawa.gov obstante, algunos art&iacute;culos no realizar la traducci&oacute;n, incluso mientras que en el modo de traducir.\nEl idioma oficial utilizado por el contenido de la Ciudad de Yakima es el sitio Web de Ingl&eacute;s. Un servicio de traducci&oacute;n gratuito proporcionado por Google &reg; est&aacute; disponible a trav&eacute;s de los enlaces que ofrecen de inmediato a condici&oacute;n de que la traducci&oacute;n de nuestras p&aacute;ginas web utilizando el software de Google.\nLas traducciones son s&oacute;lo una aproximaci&oacute;n del sitio en la Web del contenido original. La traducci&oacute;n no debe considerarse exacta, y en algunos casos puede incluir la lengua incorrecta u ofensiva. La ciudad de Yakima no garantiza la exactitud, fiabilidad o la oportunidad de la informaci&oacute;n traducida por este sistema. Adem&aacute;s, en algunas aplicaciones, archivos o elementos no pueden ser traducidos incluyendo gr&aacute;ficos, fotos o formatos de documento port&aacute;til (pdfs).\nLa ciudad de Yakima no avala el uso de la traducci&oacute;n sitio de Google &reg; otros servicios de traducci&oacute;n se puede usar para ver nuestro sitio. Cualquier persona o entidades que se basan en la informaci&oacute;n obtenida del sistema lo hace a su propio riesgo.\nGracias por visitar www.yakimawa.gov!')) { return false; }">Espa&#241;ol</a>
        </div>
        <form class="navbar-form pull-right" role="search" id="cse-search-box">
          <div class="input-group">
            <input type="hidden" name="cx" value="000682829429502656071:WMX-870012126" />
  					<input type="hidden" name="cof" value="FORID:1" />
  					<input type="hidden" name="ie" value="UTF-8" />
            <input type="text" class="form-control" placeholder="Search" name="q" id="search-question">
            <div class="input-group-btn">
              <button class="btn btn-default" name="sa" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
          </div>
        </form>		
      </div>
    </div>
    <div class="row site-desc">
			<p class="long-site-description text-center col-sm-8 col-sm-offset-2">Revitalizing the North 1st Street corridor is one of the top budget priorities for the City of Yakima in 2015. <br/><a href="#" class="btn btn-primary btn-lg">2015 City of Yakima Budget in Brief</a></p>
		</div>
	</div>
</header>