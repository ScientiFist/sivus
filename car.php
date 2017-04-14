<?php include('controller/CarController.php'); ?>
<?php include('default/header.php'); ?>
<?php include('default/menu.php'); ?>
<style>
.top-image-container{
  background: url('/assets/images/<?php echo strtolower($v);?>/<?php echo strtolower($v);?>-<?php echo strtolower($nom_car);?>-container.jpg');
  height:400px;
  background-size: cover;
  background-position: center;
}
</style>
<div class="container-fluid nopadding">
<div class="top-image-container"></div>
</div>
<div class="container black-main">
  <h1 class="main-title-car"><?php echo $v; ?> <?php echo $nom_car; ?> <span style="float:right;"><?php echo $ch_car; ?> CH</span></h1>
  <p class="main-text-car"><?php echo $descr_car; ?></p>
  <div class="slider">#SLIDER</div>
  <div class="col-md-12 nopadding marged">
    <div class="col-md-4 bordered text-center">
      <h3>Performance</h3>
      <?php echo $perf_descr_car; ?>
    </div>
    <div class="col-md-4 bordered text-center">
      <h3>Ergonomie</h3>
      <?php echo $ergo_descr_car; ?>
    </div>
    <div class="col-md-4 text-center">
      <h3>Caractéristiques</h3>
      <?php echo $cara_descr_car; ?>
    </div>
  </div>
  <div class="clearfix"></div>
<div class="maxview marged">
  <h3 class="second-vue-title-car">Vue 360° Intérieur</h3>
  <iframe src="<?php echo $url_view_car; ?>" class="" scrolling="no" marginheight="0" marginwidth="0" name="" frameborder="0" style="height: 650px;width:100%;margin-top:10px;"></iframe>
</div>

<div>
  <h3 class="second-vue-title-car">Avis de l'équipe</h3>
<?php echo $avis_team_car; ?>
<p style="font-size:50px; text-align:center;">

<?php
/* SYSTEME NOTATION */
$note_max = 5;
$note_min = 0;
for ($vx = 0; $vx < $note && $vx < $note_max ; $vx++) {
echo '<i class="fa fa-star" aria-hidden="true"></i> ';
}
$calc = 5 - $vx ;
$z = 1;
while ($z  <= $calc){
  echo '<i class="fa fa-star-o" aria-hidden="true"></i> ';
  $z++;
}
/* END NOTATION */
?>

</p>
</div>

<div>
  <h3 class="second-vue-title-car">Video</h3>
  <iframe width="100%" height="480" src="<?php echo $url_youtube_video_car; ?>" frameborder="0" allowfullscreen></iframe>
</div>

<div>
  <h3 class="second-vue-title-car">Commentaires</h3>
  <div class="col-md-12">
<div class="col-md-2" style="text-align:center;padding:10px;">
  <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzE0MHgxNDAKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNWIwYmZhMjc4OSB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1YjBiZmEyNzg5Ij48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQ0LjY4NzUiIHk9Ijc0LjM2NDA2MjUiPjE0MHgxNDA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" alt="..." style="width:50%" class="img-circle">

  #NOM_USER#
</div>
<div class="col-md-10">
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</div>
</div>

<div class="col-md-12 greyed">
<div class="col-md-2" style="text-align:center;padding:10px;">
<img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzE0MHgxNDAKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNWIwYmZhMjc4OSB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1YjBiZmEyNzg5Ij48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQ0LjY4NzUiIHk9Ijc0LjM2NDA2MjUiPjE0MHgxNDA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" alt="..." style="width:50%" class="img-circle">
#NOM_USER#
</div>
<div class="col-md-10">
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</div>
</div>
<div class="col-md-12">
  <div class="col-md-6 col-md-offset-3 border-top-main">
  </div>
</div>
<div class="col-md-12" style="margin-bottom:500px;">
  <div class="col-md-2" style="text-align:center;padding:10px;">
  <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzE0MHgxNDAKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNWIwYmZhMjc4OSB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1YjBiZmEyNzg5Ij48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQ0LjY4NzUiIHk9Ijc0LjM2NDA2MjUiPjE0MHgxNDA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" alt="..." style="width:50%" class="img-circle">
  #NOM_USER#
  </div>
  <div class="col-md-10 text-center" style="margin-top:15px">
  <textarea class="form-control btn-arround"></textarea>
  <input type="submit" class="btn btn-success btn-arround" style="width:100%;" value="Envoyer">
  </div>
</div>
</div>


</div>
<?php include('default/footer.php'); ?>
