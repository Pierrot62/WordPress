<!DOCTYPE html> <html lang="fr"> <head> <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content=""> <meta name="author" content="">
<title>Exemple de thème WordPress</title>
<!-- CSS de Bootstrap --> 
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
 <!-- Ajout d'une nouvelle feuille de style qui sera spécifique à notre thème -->


 <link href= "<?php echo get_stylesheet_directory_uri() . "/style.css" ?>" rel="stylesheet">
  <!-- Ajout d'une nouvelle feuille de style qui sera spécifique à nos blogs -->
   <link href="<?php bloginfo('template_directory');?>/blog.css" rel="stylesheet">
    <!-- HTML5 shim et Respond.js pour supporter les éléments HTML5 pour les versions plus anciennes que Internet Explorer 9 --> <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> <![endif]-->
     </head> 
     <body>
      <div class="header"> <div class="container">
      <nav id="navigation-principale" role="navigation"> 
      <a class="active" href="#">Accueil</a> 
      <a href="#">Services</a> 
      <a href="#">À Propos</a>
       <a href="#">Contact</a> 
       </nav> 
       </div> 
       </div> 
       <div class="container"> 
       <div class="blog-header">
        <h1 class="blog-title">Exemple de thème WordPress</h1>
         <p class="lead blog-description">Création d'un thème WordPress à titre de tutoriel sur WP Pour Les Nuls.</p> 
         </div> 
         <div class="row"> 
         <div class="col-sm-8 blog-main">
          <div class="blog-post"> 
          <h2 class="blog-post-title">Un article de blog</h2>
           <p class="blog-post-meta">20 décembre 2017 par <a href="#">Louis-Philippe</a></p> 
           <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p> 
           </div><!-- /.blog-post --> </div><!-- /.blog-main --> 
           <div class="col-sm-3 col-sm-offset-1 blog-sidebar"> 
           <div class="sidebar-module sidebar-module-inset">
            <h4>À Propos</h4> <p>Etiam porta <em>sem malesuada magna</em>
             mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
              </div> 
              </div><!-- /.blog-sidebar --> </div><!-- /.row --> </div><!-- /.container --> 
              <footer class="blog-footer"> <p>Par <a href="https://www.wppourlesnuls.com/">WP Pour les Nuls</a>.
            </p> </footer> <!-- JavaScript de Bootstrap et jQuery --> <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
            </body>
             </html>