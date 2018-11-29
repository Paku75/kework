<h2>Filtrer par département acheteur</h2>
<select name="sort-client" id="sort-client">
	<option value="All">Tous les départements</option>
	<option value="services_generaux">Services généraux</option>
	<option value="achats">Achats</option>
	<option value="commercials">Commercials</option>
	<option value="conseils">Conseils</option>
	<option value="definir">A définir</option>
</select> 
<hr />
<table class="table_client">
       <thead>
           <tr>
               <th>
                   Services
               </th>
               <th>
                   Achat
               </th>
               <th>
                   Commercial
               </th>
               <th>
                   Conseil
               </th>
               <th>
                   Definir
               </th>
           </tr>
       </thead>
       <tbody>
        <tr>
            <td class="table_ligne" data-category="services_generaux">
                <h3><a href="">Services généraux</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
            </td>
            <td class="table_ligne" data-category="achats">
                <h3><a href="">Achats</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
            </td>
            <td class="table_ligne" data-category="commercials">
                <h3><a href="">Commercials</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
            </td>
            <td class="table_ligne" data-category="conseils">
                <h3><a href="">Conseils</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
            </td>
            <td class="table_ligne" data-category="definir">
                <h3><a href="">A définir</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
            </td>
        </tr>
        </tbody>
</table>

<!--
<section class="table_client">
    <article class="table_ligne" data-category="services_generaux">
        <div class="news-txt">
            <h3><a href="">Services généraux</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
        </div>
    </article>
    <article class="table_ligne" data-category="achats">
        <div class="news-txt">
            <h3><a href="">Achats</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
        </div>
    </article>
    <article class="table_ligne" data-category="achats">
        <div class="news-txt">
            <h3><a href="">Achats 2</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
        </div>
    </article>
    <article class="table_ligne" data-category="commercials">
        <div class="news-txt">
            <h3><a href="">Commercials</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
        </div>
    </article>
    <article class="table_ligne" data-category="conseils">
        <div class="news-txt">
            <h3><a href="">Conseils</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
        </div>
    </article>
    <article class="table_ligne" data-category="definir">
        <div class="news-txt">
            <h3><a href="">A définir</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
        </div>
    </article>
</section>
-->
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-12/jquery-2.0.3.min_1.js"></script>
  
<!--
 <style>
    body {
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}
.news-item { display:inline-block; vertical-align:top; width:300px;}  
 </style>
-->
 
<script>
    //Filter News
$('select#sort-client').change(function() {
	var filter = $(this).val()
	filterList(filter);
});

//News filter function
function filterList(value) {
	var list = $(".table_client .table_ligne");
	$(list).fadeOut("fast");
	if (value == "All") {
		$(".table_client").find("td").each(function (i) {
			$(this).delay(200).slideDown("fast");
		});
	} else {
		//Notice this *=" <- This means that if the data-category contains multiple options, it will find them
		//Ex: data-category="Cat1, Cat2"
		$(".table_client").find("td[data-category*=" + value + "]").each(function (i) {
			$(this).delay(200).slideDown("fast");
		});
	}
}
</script>