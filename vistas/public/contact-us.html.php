           <div id="heading">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-content">
                                <h2>Contacto</h2>
                                <span>Inicio / <a href="contact-us.html">Contacto</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                    <?php if(isset($_SESSION['ok'])): ?>
                    <div class="alert alert-success" role="alert">
                       <?php echo $_SESSION['ok'] ?>
                  </div>
                  <?php endif; ?>


            <div id="product-post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>Contactanos</h2>
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div id="contact-us">
                        <div class="container">
                            <div class="row">
                                <div class="product-item col-md-12">
                                    <div class="row">
                                        <div class="col-md-8">  
                                            <div class="message-form">
                                                <form id="contact" action="enviar_mensaje.php" method="post">
                                                    <div class="row">
                                                    <div class="name col-md-4">
                                                        <input type="text" name="nombre" id="name" placeholder="nombre" />
                                                    </div>
                                                    <div class="email col-md-4">
                                                        <input type="text" name="email" id="email" placeholder="Email" />
                                                    </div>
                                                    <div class="subject col-md-4">
                                                        <input type="text" name="asunto" id="subject" placeholder="asunto" />
                                                    </div>
                                                    </div>
                                                    <div class="row">        
                                                        <div class="text col-md-12">
                                                            <textarea name="mensaje" placeholder="mensaje"></textarea>
                                                        </div>   
                                                    </div>                              
                                                    <div class="send">
                                                        <button type="submit">Send</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="info">
                                                <p></p>
                                                <ul>
                                                    <li><i class="fa fa-phone"></i>644444444</li>
                                                    <li><i class="fa fa-globe"></i>(barcelona)</li>
                                                    <li><i class="fa fa-envelope"></i><a href="#">@gmail.com</a></li>
                                                </ul>
                                            </div>
                                        </div>     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>