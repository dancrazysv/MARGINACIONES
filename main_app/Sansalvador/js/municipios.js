
			
  
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var municipios = ["Ahuachapán, Ahuachapán",
"Apaneca, Ahuachapán",
"Atiquizaya, Ahuachapán",
"Concepción de Ataco, Ahuachapán",
"El Refugio, Ahuachapán",
"Guaymango, Ahuachapán",
"Jujutla, Ahuachapán",
"San Francisco Menéndez, Ahuachapán",
"San Lorenzo, Ahuachapán",
"San Pedro Puxtla, Ahuachapán",
"Tacuba, Ahuachapán",
"Turín, Ahuachapán",
"Cinquera, Cabañas",
"Dolores, Cabañas",
"Guacotecti, Cabañas",
"Ilobasco, Cabañas",
"Jutiapa, Cabañas",
"San Isidro, Cabañas",
"Sensuntepeque, Cabañas",
"Tejutepeque, Cabañas",
"Victoria, Cabañas",
"Agua Caliente, Chalatenango",
"Arcatao, Chalatenango",
"Azacualpa, Chalatenango",
"Chalatenango, Chalatenango",
"Citalá, Chalatenango",
"Comalapa, Chalatenango",
"Concepción Quezaltepeque, Chalatenango",
"Dulce Nombre de María, Chalatenango",
"El Carrizal, Chalatenango",
"El Paraíso, Chalatenango",
"La Laguna, Chalatenango",
"La Palma, Chalatenango",
"La Reina, Chalatenango",
"Las Vueltas, Chalatenango",
"Nombre de Jesús, Chalatenango",
"Nueva Concepción, Chalatenango",
"Nueva Trinidad, Chalatenango",
"Ojos de Agua, Chalatenango",
"Potonico, Chalatenango",
"San Antonio de la Cruz, Chalatenango",
"San Antonio Los Ranchos, Chalatenango",
"San Fernando, Chalatenango",
"San Francisco Lempa, Chalatenango",
"San Francisco Morazán, Chalatenango",
"San Ignacio, Chalatenango",
"San Isidro Labrador, Chalatenango",
"San José Cancasque, Chalatenango",
"San José Las Flores, Chalatenango",
"San Luis del Carmen, Chalatenango",
"San Miguel de Mercedes, Chalatenango",
"San Rafael, Chalatenango",
"Santa Rita, Chalatenango",
"Tejutla, Chalatenango",
"Candelaria, Cuscatlán",
"Cojutepeque, Cuscatlán",
"El Carmen, Cuscatlán",
"El Rosario, Cuscatlán",
"Monte San Juan, Cuscatlán",
"Oratorio de Concepción, Cuscatlán",
"San Bartolomé Perulapía, Cuscatlán",
"San Cristóbal, Cuscatlán",
"San José Guayabal, Cuscatlán",
"San Pedro Perulapán, Cuscatlán",
"San Rafael Cedros, Cuscatlán",
"San Ramón, Cuscatlán",
"Santa Cruz Analquito, Cuscatlán",
"Santa Cruz Michapa, Cuscatlán",
"Suchitoto, Cuscatlán",
"Tenancingo, Cuscatlán",
"Zacatecas, Cuscatlán",
"Antiguo Cuscatlán, La Libertad",
"Chiltiupán, La Libertad",
"Ciudad Arce, La Libertad",
"Colón, La Libertad",
"Comasagua, La Libertad",
"Huizúcar, La Libertad",
"Jayaque, La Libertad",
"Jicalapa, La Libertad",
"La Libertad, La Libertad",
"Nuevo Cuscatlán, La Libertad",
"Opico, La Libertad",
"Quezaltepeque, La Libertad",
"Sacacoyo, La Libertad",
"San José Villanueva, La Libertad",
"San Matías, La Libertad",
"San Pablo Tacachico, La Libertad",
"Santa Tecla, La Libertad",
"Talnique, La Libertad",
"Tamanique, La Libertad",
"Teotepeque, La Libertad",
"Tepecoyo, La Libertad",
"Zaragoza, La Libertad",
"Cuyultitán, La Paz",
"El Rosario, La Paz",
"Jerusalén, La Paz",
"Mercedes La Ceiba, La Paz",
"Olocuilta, La Paz",
"Paraíso de Osorio, La Paz",
"San Antonio Masahuat, La Paz",
"San Emigdio, La Paz",
"San Francisco Chinameca, La Paz",
"San Juan Nonualco, La Paz",
"San Juan Talpa, La Paz",
"San Juan Tepezontes, La Paz",
"San Luis La Herradura, La Paz",
"San Luis Talpa, La Paz",
"San Miguel Tepezontes, La Paz",
"San Pedro Masahuat, La Paz",
"San Pedro Nonualco, La Paz",
"San Rafael Obrajuelo, La Paz",
"Santa María Ostuma, La Paz",
"Santiago Nonualco, La Paz",
"Tapalhuaca, La Paz",
"Zacatecoluca, La Paz",
"Anamorós, La Unión",
"Bolívar, La Unión",
"Concepción de Oriente, La Unión",
"Conchagua, La Unión",
"El Carmen, La Unión",
"El Sauce, La Unión",
"Intipucá, La Unión",
"La Unión, La Unión",
"Lislique, La Unión",
"Meanguera del Golfo, La Unión",
"Nueva Esparta, La Unión",
"Pasaquina, La Unión",
"Polorós, La Unión",
"San Alejo, La Unión",
"San José, La Unión",
"Santa Rosa de Lima, La Unión",
"Yayantique, La Unión",
"Yucuaiquín, La Unión",
"Arambala, Morazán",
"Cacaopera, Morazán",
"Chilanga, Morazán",
"Corinto, Morazán",
"Delicias de Concepción, Morazán",
"El Divisadero, Morazán",
"El Rosario, Morazán",
"Gualococti, Morazán",
"Guatajiagua, Morazán",
"Joateca, Morazán",
"Jocoaitique, Morazán",
"Jocoro, Morazán",
"Lolotiquillo, Morazán",
"Meanguera, Morazán",
"Osicala, Morazán",
"Perquín, Morazán",
"San Carlos, Morazán",
"San Fernando, Morazán",
"San Francisco Gotera, Morazán",
"San Isidro, Morazán",
"San Simón, Morazán",
"Sensembra, Morazán",
"Sociedad, Morazán",
"Torola, Morazán",
"Yamabal, Morazán",
"Yoloaiquín, Morazán",
"Carolina, San Miguel",
"Chapeltique, San Miguel",
"Chinameca, San Miguel",
"Chirilagua, San Miguel",
"Ciudad Barrios, San Miguel",
"Comacarán, San Miguel",
"El Tránsito, San Miguel",
"Lolotique, San Miguel",
"Moncagua, San Miguel",
"Nueva Guadalupe, San Miguel",
"Nuevo Edén de San Juan, San Miguel",
"Quelepa, San Miguel",
"San Antonio, San Miguel",
"San Gerardo, San Miguel",
"San Jorge, San Miguel",
"San Luis de la Reina, San Miguel",
"San Miguel, San Miguel",
"San Rafael Oriente, San Miguel",
"Sesori, San Miguel",
"Uluazapa, San Miguel",
"Aguilares, San Salvador",
"Apopa, San Salvador",
"Ayutuxtepeque, San Salvador",
"Cuscatancingo, San Salvador",
"Delgado, San Salvador",
"El Paisnal, San Salvador",
"Guazapa, San Salvador",
"Ilopango, San Salvador",
"Mejicanos, San Salvador",
"Nejapa, San Salvador",
"Panchimalco, San Salvador",
"Rosario de Mora, San Salvador",
"San Marcos, San Salvador",
"San Martín, San Salvador",
"San Salvador, San Salvador",
"Santiago Texacuangos, San Salvador",
"Santo Tomás, San Salvador",
"Soyapango, San Salvador",
"Tonacatepeque, San Salvador",
"Apastepeque, San Vicente",
"Guadalupe, San Vicente",
"San Cayetano Istepeque, San Vicente",
"San Esteban Catarina, San Vicente",
"San Ildefonso, San Vicente",
"San Lorenzo, San Vicente",
"San Sebastián, San Vicente",
"San Vicente, San Vicente",
"Santa Clara, San Vicente",
"Santo Domingo, San Vicente",
"Tecoluca, San Vicente",
"Tepetitán, San Vicente",
"Verapaz, San Vicente",
"Candelaria de la Frontera, Santa Ana",
"Chalchuapa, Santa Ana",
"Coatepeque, Santa Ana",
"El Congo, Santa Ana",
"El Porvenir, Santa Ana",
"Masahuat, Santa Ana",
"Metapán, Santa Ana",
"San Antonio Pajonal, Santa Ana",
"San Sebastián Salitrillo, Santa Ana",
"Santa Ana, Santa Ana",
"Santa Rosa Guachipilín, Santa Ana",
"Santiago de la Frontera, Santa Ana",
"Texistepeque, Santa Ana",
"Acajutla, Sonsonate",
"Armenia, Sonsonate",
"Caluco, Sonsonate",
"Cuisnahuat, Sonsonate",
"Izalco, Sonsonate",
"Juayúa, Sonsonate",
"Nahuizalco, Sonsonate",
"Nahulingo, Sonsonate",
"Salcoatitán, Sonsonate",
"San Antonio del Monte, Sonsonate",
"San Julián, Sonsonate",
"Santa Catarina Masahuat, Sonsonate",
"Santa Isabel Ishuatán, Sonsonate",
"Santo Domingo, Sonsonate",
"Sonsonate, Sonsonate",
"Sonzacate, Sonsonate",
"Alegría, Usulután",
"Berlín, Usulután",
"California, Usulután",
"Concepción Batres, Usulután",
"El Triunfo, Usulután",
"Ereguayquín, Usulután",
"Estanzuelas, Usulután",
"Jiquilisco, Usulután",
"Jucuapa, Usulután",
"Jucuarán, Usulután",
"Mercedes Umaña, Usulután",
"Nueva Granada, Usulután",
"Ozatlán, Usulután",
"Puerto El Triunfo, Usulután",
"San Agustín, Usulután",
"San Buenaventura, Usulután",
"San Dionisio, Usulután",
"San Francisco Javier, Usulután",
"Santa Elena, Usulután",
"Santa María, Usulután",
"Santiago de María, Usulután",
"Tecapán, Usulután",
"Usulután, Usulután"
];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("LugarB"), municipios);
autocomplete(document.getElementById("lugarid"), municipios);
autocomplete(document.getElementById("lugaradec"), municipios);
autocomplete(document.getElementById("lugarreg"), municipios);
autocomplete(document.getElementById("lugarvar"), municipios);
autocomplete(document.getElementById("lugarvar"), municipios);

autocomplete(document.getElementById("alcaldiadef"), municipios);
autocomplete(document.getElementById("alcaldiadef2"), municipios);
autocomplete(document.getElementById("alcaldiadefad"), municipios);
autocomplete(document.getElementById("alcaldiadefad2"), municipios);
// JavaScript Document