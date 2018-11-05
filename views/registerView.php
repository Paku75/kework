<div class="login">
	<h1>Inscrire une personne</h1>
    <form method="post">
    	<input type="text" name="username" placeholder="Username" required="required" />
        <input type="password" name="pass" placeholder="Password" required="required" />
        <input type="text" name="email" placeholder="Email" required="required" />
        <br>
        <select>
          <option value="informatique">Informatique</option>
          <option value="communication">Communication presse</option>
          <option value="developpement">Développement commercial</option>
          <option value="comptable">Comptable</option>
          <option value="rh">Ressources humaines</option>
          <option value="admin">Administrative</option>
        </select>
        <br><br>
        <button type="submit" name="submit" class="btn btn-primary btn-block btn-large">Valider</button>
    </form>
</div>