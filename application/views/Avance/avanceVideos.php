<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta http-equiv="Expires" content="0">
 
 <meta http-equiv="Last-Modified" content="0">
  
 <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  
 <meta http-equiv="Pragma" content="no-cache">
    <!-- Title -->
    <title>Vizew - Blog &amp; Magazine HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url(); ?>img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>micssjs/avance/style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
<!-- BOOTSTAP.MIN CUSTOMIZADO POR EL TEMPLATE -->
<link href="<?php echo base_url(); ?>micssjs/css/bootstrapmin.css" rel="stylesheet">



</head>


<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <?php 
        echo form_open_multipart('inscripcion/misCursos')
        ?>
        <input type="hidden" name="idUsuario" value="<?php echo $this->session->userdata('idusuario'); ?>">
        <button class="navbar-brand d-flex align-items-center px-4 px-lg-5 btn btn-outline-link nav-item nav-link">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i><?php echo $this->session->userdata('nombreMateria'); ?></h2>
        </button>
        <?php 
                    echo form_close();
                ?>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="<?php echo base_url(); ?>index.php/usuarios/inicioUsuario" class="nav-item nav-link active">INICIO</a>
                <a href="<?php echo base_url(); ?>index.php/Inscripcion/explorar" class="nav-item nav-link">EXPLORAR CURSOS</a>
                <?php 
                    echo form_open_multipart('inscripcion/misCursos')
                ?>
                <input type="hidden" name="idUsuario" value="<?php echo $this->session->userdata('idusuario'); ?>">
                <button type="submit" class="btn btn-outline-link nav-item nav-link" ><a>MIS CURSOS</a></button>
                <?php 
                    echo form_close();
                ?>
      
        <a href="https://api.whatsapp.com/send?phone=+59175999620&text=Quiero%20este%20curso%20:D" target="_blank" class="nav-item nav-link">CONTACTANOS :D</a>
            </div>
            <a href="<?php echo base_url(); ?>index.php/usuarios/logout" class="btn btn-primary py-4 px-lg-5 fs-5 ">CERRAR SESIÓN</a>
        </div>
    </nav>
    <!-- Navbar End -->
 


    <!-- ##### VIDEOS STAR :D ##### -->
    <section class="hero--area section-padding-80">
        <div class="container">
            <div class="row no-gutters">
            <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h4>VIDEOS DEL TEMA</h4>
                        <div class="line"></div>
                    </div>
                </div>
                <div class="col-12 col-md-7 col-lg-8">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="post-1" role="tabpanel" aria-labelledby="post-1-tab">
                            <!-- Single Feature Post -->
                            <div class="single-feature-post video-post bg-img" style="background-image: url(<?php echo base_url(); ?>img/video.jpg);">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/A1v6r79H9Ys" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="#" class="post-cata">Videos</a>
                                    <a href="single-post.html" class="post-title">Reunification of migrant toddlers, parents should be completed Thursday</a>
                                    
                                </div>

                                <!-- Video Duration -->
                                <span class="video-duration">05.03</span>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="post-2" role="tabpanel" aria-labelledby="post-2-tab">
                            <!-- Single Feature Post -->
                            <div class="single-feature-post video-post bg-img" style="background-image: url(<?php echo base_url(); ?>img/video.jpg);">

                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/A1v6r79H9Ys" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <!-- Play Button -->
                                <a href="video-post.html" class="btn play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>

                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="#" class="post-cata">Sports</a>
                                    <a href="single-post.html" class="post-title">Reunification of migrant toddlers, parents should be completed Thursday</a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
                                    </div>
                                </div>

                                <!-- Video Duration -->
                                <span class="video-duration">05.03</span>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="post-3" role="tabpanel" aria-labelledby="post-3-tab">
                            <!-- Single Feature Post -->
                            <div class="single-feature-post video-post bg-img" style="background-image: url(<?php echo base_url(); ?>img/video.jpg);">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/ooBVD4JpoLg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                <!-- Play Button -->
                                <a href="video-post.html" class="btn play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>

                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="#" class="post-cata">Sports</a>
                                    <a href="single-post.html" class="post-title">Reunification of migrant toddlers, parents should be completed Thursday</a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
                                    </div>
                                </div>

                                <!-- Video Duration -->
                                <span class="video-duration">05.03</span>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="post-4" role="tabpanel" aria-labelledby="post-4-tab">
                            <!-- Single Feature Post -->
                            <div class="single-feature-post video-post bg-img" style="background-image: url(img/bg-img/10.jpg);">
                                <!-- Play Button -->
                                <a href="video-post.html" class="btn play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>

                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="#" class="post-cata">Sports</a>
                                    <a href="single-post.html" class="post-title">Reunification of migrant toddlers, parents should be completed Thursday</a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
                                    </div>
                                </div>

                                <!-- Video Duration -->
                                <span class="video-duration">05.03</span>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="post-5" role="tabpanel" aria-labelledby="post-5-tab">
                            <!-- Single Feature Post -->
                            <div class="single-feature-post video-post bg-img" style="background-image: url(img/bg-img/7.jpg);">
                                <!-- Play Button -->
                                <a href="video-post.html" class="btn play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>

                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="#" class="post-cata">Sports</a>
                                    <a href="single-post.html" class="post-title">Reunification of migrant toddlers, parents should be completed Thursday</a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
                                    </div>
                                </div>

                                <!-- Video Duration -->
                                <span class="video-duration">05.03</span>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="post-6" role="tabpanel" aria-labelledby="post-6-tab">
                            <!-- Single Feature Post -->
                            <div class="single-feature-post video-post bg-img" style="background-image: url(img/bg-img/10.jpg);">
                                <!-- Play Button -->
                                <a href="video-post.html" class="btn play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>

                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="#" class="post-cata">Sports</a>
                                    <a href="single-post.html" class="post-title">Reunification of migrant toddlers, parents should be completed Thursday</a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
                                    </div>
                                </div>

                                <!-- Video Duration -->
                                <span class="video-duration">05.03</span>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="post-7" role="tabpanel" aria-labelledby="post-7-tab">
                            <!-- Single Feature Post -->
                            <div class="single-feature-post video-post bg-img" style="background-image: url(img/bg-img/7.jpg);">
                                <!-- Play Button -->
                                <a href="video-post.html" class="btn play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>

                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="#" class="post-cata">Sports</a>
                                    <a href="single-post.html" class="post-title">Reunification of migrant toddlers, parents should be completed Thursday</a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
                                    </div>
                                </div>

                                <!-- Video Duration -->
                                <span class="video-duration">05.03</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-5 col-lg-4">
                    <ul class="nav vizew-nav-tab" role="tablist">

                        <li class="nav-item">
                            <a class="nav-link active" id="post-1-tab" data-toggle="pill" href="#post-1" role="tab" aria-controls="post-1" aria-selected="true">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post style-2 d-flex align-items-center">
                                    <div class="post-thumbnail">
                                        <img src="img/bg-img/3.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <h6 class="post-title">Boys 'doing well' after Thai cave rescue</h6>
                                        <div class="post-meta d-flex justify-content-between">
                                            <span><i class="fa fa-comments-o" aria-hidden="true"></i> 25</span>
                                            <span><i class="fa fa-eye" aria-hidden="true"></i> 11</span>
                                            <span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 19</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="post-2-tab" data-toggle="pill" href="#post-2" role="tab" aria-controls="post-2" aria-selected="false">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post style-2 d-flex align-items-center">
                                    <div class="post-thumbnail">
                                        <img src="img/bg-img/4.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <h6 class="post-title">Meet the 12 boys rescued from cave</h6>
                                        <div class="post-meta d-flex justify-content-between">
                                            <span><i class="fa fa-comments-o" aria-hidden="true"></i> 14</span>
                                            <span><i class="fa fa-eye" aria-hidden="true"></i> 34</span>
                                            <span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="post-3-tab" data-toggle="pill" href="#post-3" role="tab" aria-controls="post-3" aria-selected="false">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post style-2 d-flex align-items-center">
                                    <div class="post-thumbnail">
                                        <img src="img/bg-img/5.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <h6 class="post-title">Pogba dedicates France win to Thai cave boys</h6>
                                        <div class="post-meta d-flex justify-content-between">
                                            <span><i class="fa fa-comments-o" aria-hidden="true"></i> 14</span>
                                            <span><i class="fa fa-eye" aria-hidden="true"></i> 34</span>
                                            <span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="post-4-tab" data-toggle="pill" href="#post-4" role="tab" aria-controls="post-4" aria-selected="false">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post style-2 d-flex align-items-center">
                                    <div class="post-thumbnail">
                                        <img src="img/bg-img/6.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <h6 class="post-title">How the world reacted to PM's Brexit crisis</h6>
                                        <div class="post-meta d-flex justify-content-between">
                                            <span><i class="fa fa-comments-o" aria-hidden="true"></i> 24</span>
                                            <span><i class="fa fa-eye" aria-hidden="true"></i> 98</span>
                                            <span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 63</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="post-5-tab" data-toggle="pill" href="#post-5" role="tab" aria-controls="post-5" aria-selected="false">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post style-2 d-flex align-items-center">
                                    <div class="post-thumbnail">
                                        <img src="img/bg-img/4.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <h6 class="post-title">Meet the 12 boys rescued from cave</h6>
                                        <div class="post-meta d-flex justify-content-between">
                                            <span><i class="fa fa-comments-o" aria-hidden="true"></i> 14</span>
                                            <span><i class="fa fa-eye" aria-hidden="true"></i> 34</span>
                                            <span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="post-6-tab" data-toggle="pill" href="#post-6" role="tab" aria-controls="post-6" aria-selected="false">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post style-2 d-flex align-items-center">
                                    <div class="post-thumbnail">
                                        <img src="img/bg-img/6.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <h6 class="post-title">How the world reacted to PM's Brexit crisis</h6>
                                        <div class="post-meta d-flex justify-content-between">
                                            <span><i class="fa fa-comments-o" aria-hidden="true"></i> 24</span>
                                            <span><i class="fa fa-eye" aria-hidden="true"></i> 98</span>
                                            <span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 63</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="post-7-tab" data-toggle="pill" href="#post-7" role="tab" aria-controls="post-7" aria-selected="false">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post style-2 d-flex align-items-center">
                                    <div class="post-thumbnail">
                                        <img src="img/bg-img/4.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <h6 class="post-title">Meet the 12 boys rescued from cave</h6>
                                        <div class="post-meta d-flex justify-content-between">
                                            <span><i class="fa fa-comments-o" aria-hidden="true"></i> 14</span>
                                            <span><i class="fa fa-eye" aria-hidden="true"></i> 34</span>
                                            <span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
   <!-- ##### VIDEOS END:C ##### -->

     <!--*****************Aqui se veran los examenes :D *********************--->
     <section class="hero--area section-padding-80">
        <div class="container">
            <div class="row no-gutters">
            <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h4>EXAMENES POR LECCION</h4>
                        <div class="line"></div>
                    </div>
                </div>
                <div class="col-12 col-md-7 col-lg-8">
                    <div class="tab-content">
                        <?php 
                        $indice=1;
                        foreach($infolecciones-> result() as $row)
                        {
                        ?>

                        <?php 
                        if ($indice==1) { 
                        ?>
                        <div class="tab-pane fade show active" id="post-l<?php echo $indice;?>" role="tabpanel" aria-labelledby="post-l<?php echo $indice;?>-tab">
                             <!-- Single Feature Post -->
                            <div class="single-feature-post video-post bg-img" style="background-image: url(<?php echo base_url(); ?>img/examen.jpg);">
                            <!-- Post Content -->
                                <div class="post-content">

                                 <a href="#" class="post-cata"><?php echo $row->nombreLeccion;?></a>
                                    <?php echo form_open_multipart('inscripcion/examenes_leccion')?>
                                      <input type="hidden" name="idUsuario" value="<?php echo $this->session->userdata('idusuario'); ?>">
                                      <input type="text" name="idLeccion" value="<?php echo $row->idLeccion;?>">

                                      <button type="submit" class="btn btn-outline-link  " ><a class="post-title"><?php echo $row->descripcion;?></a></button>
                                    <?php echo form_close();?>
                                </div>

                                <!-- Video Duration -->
                                <span class="video-duration">05.03</span>
                            </div>
                         </div>
                        <?php 
                        }
                        else  {  
                        ?> 
                        <div class="tab-pane fade" id="post-l<?php echo $indice;?>" role="tabpanel" aria-labelledby="post-l<?php echo $indice;?>-tab">
                            <!-- Single Feature Post -->
                            <div class="single-feature-post video-post bg-img" style="background-image: url(<?php echo base_url(); ?>img/video.jpg);">

                                <!-- Play Button -->
                                <a href="video-post.html" class="btn play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>

                                <!-- Post Content -->
                                <div class="post-content">
                                <a href="#" class="post-cata"><?php echo $row->nombreLeccion;?></a>
                                <?php echo form_open_multipart('inscripcion/examenes_leccion')?>
                                      <input type="hidden" name="idUsuario" value="<?php echo $this->session->userdata('idusuario'); ?>">
                                      <input type="text" name="idLeccion" value="<?php echo $row->idLeccion;?>">
                                      <button type="submit" class="btn btn-outline-link  " ><a class="post-title"><?php echo $row->descripcion;?></a></button>
                                    <?php echo form_close();?>
                                </div>

                                <!-- Video Duration -->
                                <span class="video-duration">05.03</span>
                            </div>
                        </div>
                        <?php 
                        }
                        ?> 
                        <?php
                        $indice++;
                        }
                        ?>
                    </div>
                </div>

                <div class="col-12 col-md-5 col-lg-4">
                    <ul class="nav vizew-nav-tab" role="tablist">
                        <?php 
                        $indice=1;
                        foreach($infolecciones-> result() as $row)
                        {
                        ?> 

                        <?php 
                        if ($indice==1) { 
                        ?>

                        <li class="nav-item">
                          
                            <a class="nav-link active" id="post-l<?php echo $indice;?>-tab" data-toggle="pill" href="#post-l<?php echo $indice;?>" role="tab" aria-controls="post-l<?php echo $indice;?>" aria-selected="true">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post style-2 d-flex align-items-center">
                                    <div class="post-thumbnail">
                                        <img src="img/bg-img/3.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <h6 class="post-title">Boys 'doing well' after Thai cave rescue</h6>
                                        <div class="post-meta d-flex justify-content-between">
                                            <span><i class="fa fa-comments-o" aria-hidden="true"></i> 25</span>
                                            <span><i class="fa fa-eye" aria-hidden="true"></i> 11</span>
                                            <span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 19</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <?php 
                        }
                        else{  
                        ?> 

                        <li class="nav-item">
                            <a class="nav-link" id="post-l<?php echo $indice;?>-tab" data-toggle="pill" href="#post-l<?php echo $indice;?>" role="tab" aria-controls="post-l<?php echo $indice;?>" aria-selected="false">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post style-2 d-flex align-items-center">
                                    <div class="post-thumbnail">
                                        <img src="img/bg-img/4.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <h6 class="post-title">Meet the 12 boys rescued from cave</h6>
                                        <div class="post-meta d-flex justify-content-between">
                                            <span><i class="fa fa-comments-o" aria-hidden="true"></i> 14</span>
                                            <span><i class="fa fa-eye" aria-hidden="true"></i> 34</span>
                                            <span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <?php 
                        }
                        ?> 
                        <?php
                        $indice++;
                        }
                        ?>

                    </ul>
                </div>
            </div>
        </div>
    </section>
   <!--*****************Aqui termina los examenes :C*********************--->
<!----**************************HERRAMIENTAS*************************---->
 <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4 justify-content-center">   
                  <!-- Section Heading -->
                  <div class="section-heading">
                        <h4>HERRAMIENTAS</h4>
                        <div class="line"></div>
                    </div>             
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="<?php echo base_url(); ?>img/course-1.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                            <?php echo form_open_multipart('Inscripcion/verExamen'); ?>
                                <input type="text" name="idMateria" value="<?php echo $this->session->userdata('idMateria'); ?>"> <!--Nombre de la tabla-->
                                <input type="submit" name="buttonz" value="EXAMENES REALIZADOS" class="btn btn-warning btn-xs">
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                        <div class="text-center p-2 pb-0">
                            <h4 class="mb-2">Examenes globales</h4>
                            <p class="h6">Los examenes globales son examenes de gestiones pasadas</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="<?php echo base_url(); ?>img/course-1.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                            <!--***********************ir a examenes GLOBALES :D************************-->
                                <?php echo form_open_multipart('Inscripcion/verExamenR'); ?>
                                <input type="text" name="idMateria" value="<?php echo $this->session->userdata('idMateria'); ?>"> <!--Nombre de la tabla-->
                                <input type="submit" name="buttonz" value="EXAMENES REALIZADOS" class="btn btn-warning btn-xs">
                                <?php echo form_close(); ?>
                                
                            <!--***********************FIN DE EXAMENES GLOBALES :C************************-->
                            </div>
                        </div>
                        <div class="text-center p-2 pb-0">
                            <h4 class="mb-2">EXAMENES GLOBALES REALIZADOS</h4>
                            <p class="h6">Aqui podra ver todos los examenes globales que ha resuelto</Sp>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="<?php echo base_url(); ?>img/course-1.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                           


                            <!--***********************ir a examenes Bibliografia y Avance :D************************-->
                            <?php echo form_open_multipart('reportes/avance'); ?>
                                <input type="text" name="idMateria" value="<?php echo $this->session->userdata('idMateria'); ?>"> <!--Nombre de la tabla-->
                                <input type="hidden" name="idUsuario" value="<?php echo $this->session->userdata('idusuario'); ?>">
                                <button class="btn btn-warning btn-xs">BIBLIOGRAFIA Y DATOS DE AVANCE</button>
                                <?php echo form_close(); ?>
                            <!--***********************FIN DE BIBLIOGRAFIA Y AVANCE :C************************-->



                            </div>
                        </div>
                        <div class="text-center p-2 pb-0">
                            <h4 class="mb-2">Bibliografia y Avance</h4>
                            <p class="h6">Aqui podra ver su bibliografia y avance visualizar su avance realizado</p>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                        </div>
                    </div>
                </div>

   </div>
   </div>
</div>


   <!-- Footer End -->
   

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="<?php echo base_url(); ?>micssjs/avance/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?php echo base_url(); ?>micssjs/avance/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo base_url(); ?>micssjs/avance/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="<?php echo base_url(); ?>micssjs/avance/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="<?php echo base_url(); ?>micssjs/avance/js/active.js"></script>
</body>

</html>