
<div class="container">
  <br><br>
  <h2>ECOLE / PARTENAIRE</h2>
  <p>Here you can find data about our companies</p>
  <br>
  <hr>
  <nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <a class="nav-item nav-link active" id="nav-table1-tab" data-toggle="tab" href="#nav-table1" role="tab" aria-controls="nav-table1" aria-selected="true">Table 1</a>
      <a class="nav-item nav-link" id="nav-table2-tab" data-toggle="tab" href="#nav-table2" role="tab" aria-controls="nav-table2" aria-selected="false">Table 2</a>
      <a class="nav-item nav-link" id="nav-table3-tab" data-toggle="tab" href="#nav-table3" role="tab" aria-controls="nav-table3" aria-selected="false">Table 3</a>
      <a class="nav-item nav-link" id="nav-table4-tab" data-toggle="tab" href="#nav-table4" role="tab" aria-controls="nav-table4" aria-selected="false">Table 4</a>
    </div>
  </nav>
  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-table1" role="tabpanel" aria-labelledby="nav-horus-tab"><br>
      <?= getContent("Table 1"); ?>
    </div>
    <div class="tab-pane fade" id="nav-table2" role="tabpanel" aria-labelledby="nav-kework-tab"><br>
      <?= getContent("Table 2"); ?>
    </div>
    <div class="tab-pane fade" id="nav-table3" role="tabpanel" aria-labelledby="nav-kework-tab"><br>
      <?= getContent("Table 3"); ?>
    </div>
    <div class="tab-pane fade" id="nav-table4" role="tabpanel" aria-labelledby="nav-kework-tab"><br>
      <?= getContent("Table 4"); ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script> 
<script type="text/javascript">
  $(document).ready(function() {
    /*
     * START TABS: REFRESH AND STAY IN SAME TAB
     */
    $('#nav-tab a').click(function(e) {
      e.preventDefault();
      $(this).tab('show');
    });
    // store the currently selected tab in the hash value
    $("div.nav-tabs > a").on("shown.bs.tab", function(e) {
      var id = $(e.target).attr("href").substr(1);
      window.location.hash = id;
    });
    // on load of the page: switch to the currently selected tab
    var hash = window.location.hash;
    $('#nav-tab a[href="' + hash + '"]').tab('show');
    /*
     * END TABS: REFRESH AND STAY IN SAME TAB
     */
  });
</script>
