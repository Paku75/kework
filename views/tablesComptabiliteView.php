<?php
  include __DIR__ ."/../Modals/comptabilite.php";
?>

    <div class="comptabiliteContainer">
      <h3><?= $companyName ?></h3>
      <p><?= $description ?></p><br>
      <a href="#" id="btn_add_categorie_<?= $companyName ?>" class="btn btn-primary btn-lg" role="button" data-toggle="modal" data-target="">Ajouter une categorie</a>
      <a href="#" id="btn_add_fonction_<?= $companyName ?>" class="btn btn-primary btn-lg" role="button" data-toggle="modal" data-target="">Ajouter une fonction</a>
      <br><br><br><br>
      <div class="">
        <table class="darkTable" style="">
          <thead>
            <tr id="">
              <th colspan="2">I-CHARGES COURANTES ENTREPRISE</th>
              <th colspan="7"><?= $companyName ?></th>
            </tr>
            <tr id="">
              <th>
                FONCTION
              </th>
              <th>
                PRESTATAIRE
              </th>
              <th>
                COUT MOIS/HT
              </th>
              <th>
                COUT AN/HT
              </th>
              <th>
                TVA
              </th>
              <th>
                TTC
              </th>
              <th>
                ANNIV CONTRAT
              </th>
              <th>
                HISTORIQUE
              </th>
              <th>
                CONTENTIEUX
              </th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($categories as $categorie) { ?>
            <tr>
              <td>
                <label id="" for="" class="control-label">
                  <?= $categorie['nom_categorie'] ?>
                </label>
                <input type="hidden" class="edit-input1" />
              </td>
              <td colspan="8"></td>
            </tr>
            <?php $chargesOfThisCategorie = getChargesByCategorie($companyName, $categorie['nom_categorie']); ?>
            <?php foreach ($chargesOfThisCategorie as $charge) { ?>
            <tr>
              <td>
                <label id="" for="" class="control-label">
                  <?= $charge['nom_fonction'] ?>
                </label>
                <input type="hidden" class="edit-input1" />
              </td>
              <td>
                <label id="" for="" class="control-label">
                  <?= $charge['prestataire'] ?>
                </label>
                <input type="hidden" class="edit-input1" />
              </td>
              <td>
                <label id="" for="" class="control-label">
                  <?= $charge['cout_mois'] ?>
                </label>
                <input type="hidden" class="edit-input1" />
              </td>
              <td>
                <label id="" for="" class="control-label">
                  <?= ($charge['cout_mois'] * 12) ?>
                </label>
                <input type="hidden" class="edit-input1" />
              </td>
              <td>
                <label id="" for="" class="control-label">
                  <?= $charge['tva'] ?>
                </label>
                <input type="hidden" class="edit-input1" />
              </td>
              <td>
                <label id="" for="" class="control-label">
                  <?= $charge['ttc'] ?>
                </label>
                <input type="hidden" class="edit-input1" />
              </td>
              <td>
                <label id="" for="" class="control-label">
                  <?= $charge['anniv_contrat'] ?>
                </label>
                <input type="hidden" class="edit-input1" />
              </td>
              <td>
                <label id="" for="" class="control-label">
                  <?= $charge['historique'] ?>
                </label>
                <input type="hidden" class="edit-input1" />
              </td>
              <td>
                <label id="" for="" class="control-label">
                  <?= $charge['contentieux'] ?>
                </label>
                <input type="hidden" class="edit-input1" />
              </td>
            </tr>
            <?php } ?>
            <?php } ?>
          </tbody>
        </table>
        <br><hr><br>
        <table class="detail" style="color: black;" style="width:100%">
          <thead>
            <tr id="modal_menu_detail">
              <th colspan="2">II-ENREGISTREMENT FACTURES PRO</th>
              <th colspan="7"><?= $companyName ?></th>
            </tr>
            <tr id="modal_menu_detail">
              <th colspan="3">Partie 1</th>
              <th colspan="4">Partie 2</th>
              <th colspan="2">Partie 3</th>
            </tr>
            <tr id="modal_sous_menu_detail">
              <th>
                COMPTE ATTRIBUE
              </th>
              <th>
                OBJET
              </th>
              <th>
                MOYEN PAIEMENT
              </th>
              <th>
                MONTANT HT
              </th>
              <th>
                TVA
              </th>
              <th>
                MONTANT TVA
              </th>
              <th>
                MONTANT TTC
              </th>
              <th>
                DOSSIER ARCHIVE
              </th>
              <th>
                N° facture
              </th>
            </tr>
          </thead>
          <tbody>
            <?php //foreach ($clients as $client) { ?>
            <tr>
              <td>
                <label id="" for="" class="control-label">
                  <!-- <?php echo $client['client_nom']; ?> -->
                  Compte N° 1
                </label>
                <input type="hidden" class="edit-input1" />
              </td>
              <td>
                <label id="" for="" class="control-label">
                  <!-- <?php echo $client['client_nom']; ?> -->
                </label>
                <input type="hidden" class="edit-input1" />
              </td>
              <td>
                <label id="" for="" class="control-label">
                  <!-- <?php echo $client['client_nom']; ?> -->
                </label>
                <input type="hidden" class="edit-input1" />
              </td>
              <td>
                <label id="" for="" class="control-label">
                  <!-- <?php echo $client['client_nom']; ?> -->
                </label>
                <input type="hidden" class="edit-input1" />
              </td>
              <td>
                <label id="" for="" class="control-label">
                  <!-- <?php echo $client['client_nom']; ?> -->
                </label>
                <input type="hidden" class="edit-input1" />
              </td>
              <td>
                <label id="" for="" class="control-label">
                  <!-- <?php echo $client['client_nom']; ?> -->
                </label>
                <input type="hidden" class="edit-input1" />
              </td>
              <td>
                <label id="" for="" class="control-label">
                  <!-- <?php echo $client['client_nom']; ?> -->
                </label>
                <input type="hidden" class="edit-input1" />
              </td>
              <td>
                <label id="" for="" class="control-label">
                  <!-- <?php echo $client['client_nom']; ?> -->
                </label>
                <input type="hidden" class="edit-input1" />
              </td>
              <td>
                <label id="" for="" class="control-label">
                  <!-- <?php echo $client['client_nom']; ?> -->
                </label>
                <input type="hidden" class="edit-input1" />
              </td>
            </tr>
            <?php //} ?>
          </tbody>
        </table>
      </div>
</div>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script type="text/javascript">
  $(document).ready(function() {
      $("#btn_add_categorie_<?= $companyName ?>").click(function() {
          $("#myModal_add_categorie_<?= $companyName ?>").modal();
      });
      $("#btn_add_fonction_<?= $companyName ?>").click(function() {
          $("#myModal_add_fonction_<?= $companyName ?>").modal();
      });
  });
</script>