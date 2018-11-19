
<div class="container">
  <br><br>
  <h2>Our companies</h2>
  <p>Here you can find data about our companies</p>
  <br>
  <hr>
  <nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <a class="nav-item nav-link active" id="nav-horus-tab" data-toggle="tab" href="#nav-horus" role="tab" aria-controls="nav-horus" aria-selected="true">Horus</a>
      <a class="nav-item nav-link" id="nav-kework-tab" data-toggle="tab" href="#nav-kework" role="tab" aria-controls="nav-kework" aria-selected="false">Kework</a>
    </div>
  </nav>
  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-horus" role="tabpanel" aria-labelledby="nav-horus-tab"><br>
      <?= getContent("Horus"); ?>
    </div>
    <div class="tab-pane fade" id="nav-kework" role="tabpanel" aria-labelledby="nav-kework-tab"><br>
      <?= getContent("Kework"); ?>
  </div>
</div>

