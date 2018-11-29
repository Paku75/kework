<?php
  include __DIR__ ."/../Modals/comptabilite.php";
?>

    <div class="comptabiliteContainer">
      <h3><?= $companyName ?></h3>
      <p><?= $description ?></p><br>
      <a href="#" id="btn_add_categorie_<?= $companyName ?>" class="btn_add_cat">Ajouter une categorie</a>
      <a href="#" id="btn_add_fonction_<?= $companyName ?>" class="btn_add_fn">Ajouter une fonction</a>
      <a href="#" id="btn_add_charge_<?= $companyName ?>" class="btn_add_charge">Ajouter une charge</a>
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
          <tfoot>
            <tr>
              <td colspan="1">
                BALANCE
              </td>
              <td>
              </td>
              <td>
                <?= calculateBalanceOf("cout_mois", $companyName) ?>
              </td>
              <td>
                <?= calculateBalanceOf("cout_annee", $companyName) ?>
              </td>
              <td>
                <?= calculateBalanceOf("tva", $companyName) ?>
              </td>
              <td>
                <?= calculateBalanceOf("ttc", $companyName) ?>
              </td>
              <td colspan="3">
              </td>
            </tr>
          </tfoot>
          <tbody>
            <?php foreach ($categories as $categorie) { ?>
              <tr class="categorie">
                <td>
                  <label id="" for="" class="control-label">
                    <?= $categorie['nom_categorie'] ?>
                  </label>
                  <input type="hidden" class="edit-input1" />
                </td>
                <td colspan="8"></td>
              </tr>
              <?php $fonctionsOfThisCategorie = getFonctionsByCategoryId($categorie['id_categorie']); ?>
              <?php foreach ($fonctionsOfThisCategorie as $fonction) { ?>
                <tr class="charges">
                  <td class="fonction">
                    <label id="" for="" class="control-label">
                      <?= $fonction['nom_fonction'] ?>
                    </label>
                    <input type="hidden" class="edit-input1" />
                  </td>
                  <?php $chargesOfThisFonction = getChargesByIdFonction($fonction['id_fonction']); ?>
                  <?php if (count($chargesOfThisFonction) == 0) { ?>
                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                  <?php } else { ?>
                    <?php foreach ($chargesOfThisFonction as $charge) { ?>
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
                    <?php } ?>
                  <?php } ?>
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
      $("#btn_add_charge_<?= $companyName ?>").click(function() {
          $("#myModal_add_charge_<?= $companyName ?>").modal();
      });
  });
</script>