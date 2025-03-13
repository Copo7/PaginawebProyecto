  <!-- ***** Main Banner Area Start ***** -->
  <div class="page-heading" id="top">
  <div class="container">

        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Product Area Starts ***** -->
    <section class="section" id="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                <div class="left-images">
                <img src="../admin/imagenes/posts/<?php echo $post['id'] ?>.jpg" style="width: 600px; height: 600px; object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="right-content">
                    <h4><?php echo $post['titulo']?></h4>
                    <span class="price"><?php echo $post['fecha_publicacion']?>;</span>
                    <div class="quote">
                        <i class="fa fa-quote-left"></i><p><?php echo $post['contenido']?></p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    
