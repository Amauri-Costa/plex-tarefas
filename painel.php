<?php
  session_start();

  include_once('login_verifica.php');
  include_once('header.php');
?>

<p class="right-align" style="margin-right: 15px; margin-top: 3px;">Olá, <?php echo $_SESSION['usuario']; ?>!</p>
</br >
  <h5 style="text-align: center;">Seja bem vindo ao Plex Tarefas</h5>


  <div class="carousel">
    <a class="carousel-item" href="#one!"><img src="imagens/logo/logo.png">  </a>
    <a class="carousel-item" href="#two!"><img src="imagens/logo/logo.png">  </a>
    <a class="carousel-item" href="#three!"><img src="imagens/logo/logo.png"></a>
    <a class="carousel-item" href="#four!"><img src="imagens/logo/logo.png"> </a>
    <a class="carousel-item" href="#five!"><img src="imagens/logo/logo.png"> </a>
  </div>



<!--JQUERY.JS-->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<!--MATERIALIZE.JS-->
<script src="js/materialize.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();
  });


//EDIÇÃO DO SIDENAV
 document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  // Initialize collapsible (uncomment the lines below if you use the dropdown variation)
  // var collapsibleElem = document.querySelector('.collapsible');
  // var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);

  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();
  });

  //CONTROLE DO CARROCEL  
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.carousel');
    var instances = M.Carousel.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.carousel').carousel();
  });



</script>

</script>



<?php
  
  include_once('footer.php');

?>