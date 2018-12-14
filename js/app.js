var app = {
  init: function() {
    /**
     * Objectif :
     * 
     * - si tout va bien (formulaire valide), alors soumission OK
     * - si erreur (formulaire invalide) => preventDefault() + affichage des erreurs
     * 
     * Erreur :
     * - pour un input donné, erreur si le texte < 3 caractères
     * - pour le formulaire, erreur si au moins un champ est en erreur
     * 
     * Logique de validation (check 3 caractères) => fonction (car utilisé pour les deux validations, inputs et form)
     */
    var form = document.querySelector('#login-form');
    form.addEventListener('submit', app.isValidForm);

    var inputs = document.querySelectorAll('.field-input');
    for (var i = 0; i < inputs.length; i++) {
      var input = inputs[i];
      input.addEventListener('blur', function(evt) {
        var text = input.value;
        app.validateTextLength(text, input);
      });
    }
  },

  isValidForm: function(evt) {
    /**
     * 1. vérifier, pour chaque input, si l'input est valide => boucle
     * 2. form invalide si au moins 1 input est invalide => if (||)
     */
    var invalidForm = app.formHasErrors();
    if (invalidForm) {
      evt.preventDefault();
      // element.innerHTML += '<div class="toto"><p>du <span>texte</p>';
      var errorsArea = document.querySelector('#errors');
      errorsArea.innerHTML = '';
      for (var i = 0; i < app.errors.length; i++) {
        var errorMessage = document.createElement('p');
        errorMessage.className = 'error';
        errorMessage.textContent = app.errors[i];
        errorsArea.appendChild(errorMessage);
      }
    }
  },

  formHasErrors: function() {
    // 1. Sélection des inputs > validation des inputs
    var inputs = document.querySelectorAll('.field-input');
    console.log(inputs);

    var results = [];
    app.errors = [];
    for (var i = 0; i < inputs.length; i++) {
      var val = inputs[i].value;
      var result = app.validateTextLength(val, inputs[i]);
      results.push(result);
      if (result === false) {
        var errorMessage = inputs[i].placeholder + ' doit contenir au moins 3 caractères';
        app.errors.push(errorMessage);
      }
    }

    // Autre possiblité pour valider les deux champs :
    // - faire 2x document.querySelector('#id-du-champ');
    // - faire 2x app.validateTextLength :
    //     results.push(app.validateTextLength(inputUsername.value));
    //     results.push(app.validateTextLength(inputPassword.value));

    return results.includes(false);
  },

  /**
   * Valide un texte d'un input :
   * - texte valide si > 3 caractères
   * - affichage d'une bordure sur l'input, en fonction de text valide ou pas
   */
  validateTextLength: function(text, input) {
    if (text.length < 3) {
      input.classList.add('field--invalid');
      return false;
    } else {
      input.classList.add('field--valid');
      return true;
    }

    // En version plus courte :
    // return text.length < 3;
  }
};

// document.addEventListener('DOMContentLoaded', app.init);
app.init();