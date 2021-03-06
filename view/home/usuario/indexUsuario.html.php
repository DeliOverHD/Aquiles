<?php include_once $fsConfig->getPath() . 'view/parcial/head.php' ?>
<?php include_once $fsConfig->getPath() . 'view/parcial/headerDos.php' ?>

<section class="container mainIndex">

  <div class="row">
    <div class="col-md-5">
      <article class="articulo">    
        <a>
          <img class="imgarticle" src="<?php echo $fsConfig->getUrl() ?>img/deport.jpg" alt="Imagen">
        </a>
        <h2 class="titulo-evento">
          <a href="#">Caminata Ecologica</a>
        </h2>
        <p><span class="articulofecha"></span> por <span class="articulo-autor"><a href="#">Admin</a></span></p>
        <p class="articulo-contenido text-justify">
          Etiam eu eros justo. Mauris semper rutrum felis, ac aliquam 
          nibh dictum eu. Nam fermentum id tellus tempus tincidunt. 
          Nulla dictum, ligula vitae feugiat rutrum, urna mauris lobortis
          neque, vitae accumsan erat erat ut nibh. Donec faucibus porta 
          lectus non imperdiet.<br> Mauris feugiat diam sapien, consequat 
          molestie odio placerat eu. Vestibulum id magna nibh. Morbi
          suscipit vestibulum malesuada. Integer dictum tortor et quam
          porttitor rhoncus. Integer at mi laoreet dolor rhoncus porttitor.
          Etiam laoreet, tellus non maximus tempor, ipsum tellus condimentum 
          est, sit amet auctor sapien lorem ut sapien. Cras nibh felis, 
          congue at pellentesque quis, suscipit eget est.
        </p>
        <div class="contenedor-botones">
          <a href="#" class="btn btn-primary">Ver Mas</a>
        </div>
      </article>
    </div>

    <div class="col-md-5">
      <article class="articulo">    
        <a>
          <img class="imgarticle" src="<?php echo $fsConfig->getUrl() ?>img/relig.jpg" alt="Imagen">
        </a>
        <h2 class="titulo-evento">
          <a href="#">Visita de monumentos</a>
        </h2>
        <p><span class="articulofecha"></span> por <span class="articulo-autor"><a href="#">Admin</a></span></p>
        <p class="articulo-contenido text-justify">
          Etiam eu eros justo. Mauris semper rutrum felis, ac aliquam 
          nibh dictum eu. Nam fermentum id tellus tempus tincidunt. 
          Nulla dictum, ligula vitae feugiat rutrum, urna mauris lobortis
          neque, vitae accumsan erat erat ut nibh. Donec faucibus porta 
          lectus non imperdiet.<br> Mauris feugiat diam sapien, consequat 
          molestie odio placerat eu. Vestibulum id magna nibh. Morbi
          suscipit vestibulum malesuada. Integer dictum tortor et quam
          porttitor rhoncus. Integer at mi laoreet dolor rhoncus porttitor.
          Etiam laoreet, tellus non maximus tempor, ipsum tellus condimentum 
          est, sit amet auctor sapien lorem ut sapien. Cras nibh felis, 
          congue at pellentesque quis, suscipit eget est.
        </p>
        <div class="contenedor-botones">
          <a href="#" class="btn btn-primary">Ver Mas</a>
        </div>
      </article>      
    </div>

    <aside class="aside-index hidden-xs hidden-sm col-md-2" >
      <h4>Categorias</h4>    
      <div class="list-group">
        <a href="#" class="list-group-item active">Religion</a>
        <a href="#" class="list-group-item">Deportes</a>
        <a href="#" class="list-group-item">Ecoturismo</a>
        <a href="#" class="list-group-item">Cicloturismo</a>
        <a href="#" class="list-group-item">Gastronomia</a>
      </div>
      <h4>Articulos Recientes</h4>
      <a href="#" class="list-group-item">
        <h4 class="list-group-heading">Buga tatto el mejor evento de arte en la ciudad de buga</h4>
        <p class="list-item-text">Participa en el evento</p>
      </a>
      <a href="#" class="list-group-item">
        <h4 class="list-group-heading">Buga tatto el mejor evento de arte en la ciudad de buga</h4>
        <p class="list-item-text">Participa en el evento</p>
      </a>
    </aside>

  </div>
</section>


<?php include_once $fsConfig->getPath() . 'view/parcial/footer.php' ?>
<?php include_once $fsConfig->getPath() . 'view/parcial/foot.php' ?>