
    <h3><?= $companyName ?></h3>
      <p><?= $description ?></p><br>
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

<style type="text/css">
/* START - TABLES STYLE */
table {
  width: 100%;
  border-collapse: collapse;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}
th,
td {
  padding: 15px;
  background-color: rgba(255, 255, 255, 0.2);
  color: #fff;
}
th {
  text-align: left;
}
thead th {
  background-color: #55608f;
}
tbody tr:hover {
  background-color: rgba(255, 255, 255, 0.3);
}
tbody td {
  position: relative;
  width: 100%; /* Extend the cell as much as possible */
  max-width: 0;
  overflow: hidden;
  text-overflow: ellipsis;
}
tbody td:hover:before {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  top: -9999px;
  bottom: -9999px;
  background-color: rgba(255, 255, 255, 0.2);
  z-index: -1;
}

/* END   - TABLES STYLE */
</style>