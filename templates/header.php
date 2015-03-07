<?php use Roots\Sage\Nav; ?>
<!-- Demo navbar -->
    <div class="navbar yamm navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="#" class="navbar-brand">Yamm Megamenu</a>
        </div>
        <div id="navbar-collapse-1" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <!-- Classic list -->
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">List<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <!-- Content container to add padding -->
                  <div class="yamm-content">
                    <div class="row">
                      <ul class="col-sm-2 list-unstyled">
                        <li>
                          <p><strong>Section Title</strong></p>
                        </li>
                        <li>List Item</li>
                        <li>List Item</li>
                        <li>List Item</li>
                        <li>List Item</li>
                        <li>List Item</li>
                        <li>List Item</li>
                      </ul>
                      <ul class="col-sm-2 list-unstyled">
                        <li>
                          <p><strong>Links Title</strong></p>
                        </li>
                        <li><a href="#"> Link Item </a></li>
                        <li><a href="#"> Link Item </a></li>
                        <li><a href="#"> Link Item </a></li>
                        <li><a href="#"> Link Item </a></li>
                        <li><a href="#"> Link Item </a></li>
                        <li><a href="#"> Link Item </a></li>
                      </ul>
                      <ul class="col-sm-2 list-unstyled">
                        <li>
                          <p><strong>Section Title</strong></p>
                        </li>
                        <li>List Item</li>
                        <li>List Item</li>
                        <li>List Item</li>
                        <li>List Item</li>
                        <li>List Item</li>
                        <li>List Item</li>
                      </ul>
                      <ul class="col-sm-2 list-unstyled">
                        <li>
                          <p><strong>Section Title</strong></p>
                        </li>
                        <li>List Item</li>
                        <li>List Item</li>
                        <li>
                          <ul>
                            <li><a href="#"> Link Item </a></li>
                            <li><a href="#"> Link Item </a></li>
                            <li><a href="#"> Link Item </a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Accordion demo -->
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Accordion<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <div class="yamm-content">
                    <div class="row">
                      <div id="accordion" class="panel-group">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Collapsible Group Item #1</a></h4>
                          </div>
                          <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">Ut consectetur ullamcorper purus a rutrum. Etiam dui nisi, hendrerit feugiat scelerisque et, cursus eu magna. </div>
                          </div>
                        </div>
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Collapsible Group Item #2</a></h4>
                          </div>
                          <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">Nullam pretium fermentum sapien ut convallis. Suspendisse vehicula, magna non tristique tincidunt, massa nisi luctus tellus, vel laoreet sem lectus ut nibh. </div>
                          </div>
                        </div>
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Collapsible Group Item #3</a></h4>
                          </div>
                          <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">Praesent leo quam, faucibus at facilisis id, rhoncus sit amet metus. Sed vitae ipsum non nibh mattis congue eget id augue. </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Classic dropdown -->
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Classic<b class="caret"></b></a>
              <ul role="menu" class="dropdown-menu">
                <li><a tabindex="-1" href="#"> Action </a></li>
                <li><a tabindex="-1" href="#"> Another action </a></li>
                <li><a tabindex="-1" href="#"> Something else here </a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="#"> Separated link </a></li>
              </ul>
            </li>
            <!-- Pictures -->
            <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Pictures<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <div class="yamm-content">
                    <div class="row">
                      <div class="col-xs-6 col-sm-2"><a href="#" class="thumbnail"><img alt="150x190" src="http://placekitten.com/150/190/"></a></div>
                      <div class="col-xs-6 col-sm-2"><a href="#" class="thumbnail"><img alt="150x190" src="http://placekitten.com/150/190/"></a></div>
                      <div class="col-xs-6 col-sm-2"><a href="#" class="thumbnail"><img alt="150x190" src="http://placekitten.com/150/190/"></a></div>
                      <div class="col-xs-6 col-sm-2"><a href="#" class="thumbnail"><img alt="150x190" src="http://placekitten.com/150/190/"></a></div>
                      <div class="col-xs-6 col-sm-2"><a href="#" class="thumbnail"><img alt="150x190" src="http://placekitten.com/150/190/"></a></div>
                      <div class="col-xs-6 col-sm-2"><a href="#" class="thumbnail"><img alt="150x190" src="http://placekitten.com/150/190/"></a></div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
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