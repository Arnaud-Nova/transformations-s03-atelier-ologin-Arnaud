<div id="login">
    <form action="" id="login-form" method="post" autocomplete="off">
      <div id="form-title">
        Création d'un nouveau compte
      </div>
      <div class="field">
        <label 
          class="field-label"
          for="field-username"
        >
          Identifiant
        </label>
        <input
          class="field-input"
          id="field-username"
          name="username"
          type="text"
          placeholder="Choisissez un identifiant"
          value=""
        />
        <p class="field-info">Obligatoire - doit contenir au minimum 3 caractères</p>
      </div>
      <div class="field">
        <label 
          class="field-label"
          for="field-password"
        >
          Mot de passe
        </label>
        <input
          class="field-input input-password"
          id="field-password"
          name="password"
          type="password"
          placeholder="Mot de passe"
        />
        <div class="field" id="try">
          <label 
            class="field-label"
            for="field-confirmpassword"
          >
            Mot de passe
          </label>
          <input
            class="field-input input-confirm-password"
            id="field-confirmpassword"
            name="confirmpassword"
            type="password"
            placeholder="Confirmez le mot de passe"
          />
          <p class="field-info">Obligatoire - doit contenir au minimum 3 caractères</p>
      </div>
      <div id="errors"></div>
      <button id="login-submit">validation</button>
    </form>
    </div>