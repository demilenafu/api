      var key = "788c8429b074f5a0ab84232e46568b77",
		      key_private = "32ed22dee4712a976b0964319bef35ffb4e1775c",
		      NUM_RESULTS = 5,
          hash = "3a2f7400abf9eaeec02d708f7992bb9d";	  
	  
      $.ajax({
          url: 'http://gateway.marvel.com:80/v1/public/characters?ts=1&apikey='+ key +'&hash='+ hash,
          data: {
              
          },
          success: function (response) {
              resultadosPlaceholder.innerHTML = template(response);
          }
      });

	  // Buscador
      var templateSource = document.getElementById('resultados-template').innerHTML,
          template = Handlebars.compile(templateSource),
          resultadosPlaceholder = document.getElementById('resultados'),
          relatedPlaceholder = document.getElementById('title_related');

      var searchCharacter = function (query) {
          $.ajax({
              url: 'http://gateway.marvel.com:80/v1/public/characters?ts=1&apikey='+ key +'&hash='+ hash,
              data: {
                  name: query,
              },
              success: function (response) {
                  resultadosPlaceholder.innerHTML = template(response);
              }
          });
      }

      resultados.addEventListener('click', function (e) {
          
      });

      document.getElementById('search-form').addEventListener('submit', function (e) {
          e.preventDefault();
          searchCharacter(document.getElementById('query').value);
      }, false);





      // Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}