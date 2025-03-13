           <section class="section" id="posts">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Nuestros Post</h2>
                    </div>
                </div>
            </div>
        </div>
    
    <div id="latest-blog">

        <div class="container">
            <div class="row">
                <?php foreach($posts as $post): ?>
                <div class="col-md-4 col-sm-6">
                    <div class="blog-post">
                        <div class="blog-thumb">
                            <a href="single-post.php?id=<?php echo $post['id']?>"><img src="../admin/imagenes/posts/<?php echo $post['id'] ?>.jpg" height= "300px"; width="auto";></a>
                        </div>
                        <div class="down-content">
                            <h4><?php echo $post['titulo'] ?></h4>
                            <span><?php echo $post['fecha_publicacion'] ?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

                <div class="col-lg-12">
                <?php include('paginacion.html.php');?>
                </div>
            </div>
        </div>
    </div>
    </section>