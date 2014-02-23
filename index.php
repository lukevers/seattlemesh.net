  <?php require('header.php'); ?>
    
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <h1 class="title">Seattle Meshnet</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <h5 class="description">Building a decentralized, distributed mesh network in Seattle, Washington</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="w500">
            <div class="visible-xs">
              <a href="https://fund.meshwith.me/" class="btn btn-lg btn-seattle shrink" id="donate"><span class="glyphicon glyphicon-heart-empty"></span>&nbsp;Donate</a>
              <a href="" class="btn btn-lg btn-seattle shrink" id="map"><span class="glyphicon glyphicon-globe"></span>&nbsp;Map</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row visible-xs">
        <div class="col-xs-12">
          <a href="https://twitter.com/SeattleMeshnet" class="btn btn-lg btn-seattle shrink" id="twitter">Twitter</a>
          <a href="http://www.reddit.com/r/seattlemeshnet" class="btn btn-lg btn-seattle shrink" id="donate">Reddit</a>
          <a href="https://plus.google.com/+SeattleMeshnet" class="btn btn-lg btn-seattle shrink" id="map">Google+</a>
          <div class="space"></div>
        </div>
      </div>
    </div>

    <script>
      $(function() {
        $("h1.title").fitText();
      });
    </script>

    <?php require('footer.php'); ?>