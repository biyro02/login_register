<?php 

$user_name = $_SESSION['user_name'];
$photos = 
	[
		'admin'=> ['ryan.jpg','Admin İstrator'],
		'root' => ['eva.jpg', 'Ro Ot'],
		'batu' => ['logo.png', 'Bat Uhan']
	];
?>
  <div class="wrapper">
    <div class="page-header clear-filter" filter-color="orange">
      <div class="page-header-image" data-parallax="true" style="background-image:url('assets/img/bg5.jpg');">
      </div>
      <div class="container">
        <div class="photo-container">
          <img src="assets/img/<?=$photos[$user_name][0];?>" class="rounded-circle img-raised">
        </div>
        <h3 class="title"><?=$photos[$user_name][1];?></h3>
        <p class="category">Photographer</p>
        <div class="content">
          <div class="social-description">
            <h2>26</h2>
            <p>Comments</p>
          </div>
          <div class="social-description">
            <h2>26</h2>
            <p>Comments</p>
          </div>
          <div class="social-description">
            <h2>48</h2>
            <p>Bookmarks</p>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="button-container">
          <a href="#button" class="btn btn-primary btn-round btn-lg">Follow</a>
          <a href="#button" class="btn btn-default btn-round btn-lg btn-icon" rel="tooltip" title="Follow me on Twitter">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#button" class="btn btn-default btn-round btn-lg btn-icon" rel="tooltip" title="Follow me on Instagram">
            <i class="fab fa-instagram"></i>
          </a>
        </div>
        <h3 class="title">Hakkımda</h3>
        <h5 class="description">Falan filan.Falan filan.Falan filan.Falan filan.Falan filan.Falan filan.Falan filan.Falan filan.Falan filan.Falan filan.Falan filan.</h5>
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <h4 class="title text-center">Portfolyomu inceleyebilirsiniz</h4>
            <div class="nav-align-center">
              <ul class="nav nav-pills nav-pills-primary nav-pills-just-icons" role="tablist">
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#profile" role="tablist">
                    <i class="now-ui-icons design_image"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#home" role="tablist">
                    <i class="now-ui-icons location_world"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#messages" role="tablist">
                    <i class="now-ui-icons sport_user-run"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!-- Tab panes -->
          <div class="tab-content gallery">
            <div class="tab-pane active" id="home" role="tabpanel">
              <div class="col-md-10 ml-auto mr-auto">
                <div class="row collections">
                  <div class="col-md-6">
                    <img src="assets/img/bg1.jpg" alt="" class="img-raised">
                    <img src="assets/img/bg3.jpg" alt="" class="img-raised">
                  </div>
                  <div class="col-md-6">
                    <img src="assets/img/bg8.jpg" alt="" class="img-raised">
                    <img src="assets/img/bg7.jpg" alt="" class="img-raised">
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="profile" role="tabpanel">
              <div class="col-md-10 ml-auto mr-auto">
                <div class="row collections">
                  <div class="col-md-6">
                    <img src="assets/img/bg6.jpg" class="img-raised">
                    <img src="assets/img/bg11.jpg" alt="" class="img-raised">
                  </div>
                  <div class="col-md-6">
                    <img src="assets/img/bg7.jpg" alt="" class="img-raised">
                    <img src="assets/img/bg8.jpg" alt="" class="img-raised">
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="messages" role="tabpanel">
              <div class="col-md-10 ml-auto mr-auto">
                <div class="row collections">
                  <div class="col-md-6">
                    <img src="assets/img/bg3.jpg" alt="" class="img-raised">
                    <img src="assets/img/bg8.jpg" alt="" class="img-raised">
                  </div>
                  <div class="col-md-6">
                    <img src="assets/img/bg7.jpg" alt="" class="img-raised">
                    <img src="assets/img/bg6.jpg" class="img-raised">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>