<!-- MENU START HIDDEN XS-->
<div class="container-fluid hidden-xs">

  <div class="row">
    <nav class="navbar navbar-fixed-top navbar-main-home" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="navbar-brand navbar-brand-centered header-logo animated fadeInDown"></div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-brand-centered">
          <ul class="nav navbar-nav animated bounceInLeft">
            <li><a href="#" class="menu-a"><i class="fa fa-search icons-menu-top" aria-hidden="true"></i> </a></li>
            <li class="dropdown"><a href="#" class="menu-a" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bmw</a>
              <ul class="dropdown-menu">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li role="separator" class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                          <li role="separator" class="divider"></li>
                          <li><a href="#">One more separated link</a></li>
                        </ul>
            </li>

            <li><a href="#" class="menu-a">Mercedes</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right animated bounceInRight">
            <li><a href="#" class="menu-a">Audi</a></li>
            <li><a href="#" class="menu-a">Volkswagen</a></li>
            <li><a href="#connexion" class="menu-a" data-toggle="modal" data-target="#myConnexion"><i class="fa fa-sign-in icons-menu-top" aria-hidden="true"></i></a></li>

          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </div>

</div>
<!-- MENU END -->


<!-- MENU START SHOW XS -->
<div class="container-fluid show-xs">
  <div class="row">

  </div>
</div>
<!-- MENU END -->

<!-- START CONNEXION - INSCRIPTION -->
<div class="modal fade" id="myConnexion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body mod-padding">

        <div>

          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active li-tabs-navbar"><a href="#co" aria-controls="co" role="tab" data-toggle="tab">Connexion</a></li>
            <li role="presentation" class="li-tabs-navbar"><a href="#inscr" aria-controls="inscr" role="tab" data-toggle="tab">Inscription</a></li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="co">
              <form class="connexion-form" action="" method="post">

                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Email" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Mot de passe</label>
                  <input type="password" class="form-control" name="password" placeholder="Mot de passe">
                </div>

                <div class="form-group">
                  <input type="submit" class="btn btn-success btn-arround" style="width:100%" value="Connexion">
                </div>

              </form>

            </div>
            <div role="tabpanel" class="tab-pane fade" id="inscr">

              <form class="connexion-form" action="" method="post">

                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Email" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Mot de passe</label>
                  <input type="password" class="form-control" name="password" placeholder="Mot de passe">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Mot de passe confirmation</label>
                  <input type="password" class="form-control" name="password" placeholder="Mot de passe">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Age</label>
                  <input type="text" class="form-control" name="email" placeholder="Age" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Voiture</label>
                  <input type="text" class="form-control" name="email" placeholder="Voiture" autocomplete="off">
                </div>
    #DROPZONES<br/>
                <div class="form-group">
                  <input type="submit" class="btn btn-success btn-arround" style="width:100%" value="Inscription">
                </div>

              </form>

            </div>
          </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-arround" data-dismiss="modal" style="width:100%;">Fermer</button>
      </div>
    </div>
  </div>
</div>
<!-- END CONNEXION - INSCRIPTION -->
