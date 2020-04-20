$(document).ready( () => {

  // ------------------------------------PRIMA PAGINA------------------------------------
  if(window.location == "http://localhost:8889/Esercizi_Boolean/20-04-2020/php-ajax-dischi/") {

  };



  // ------------------------------------SECONDA PAGINA------------------------------------
  if(window.location == "http://localhost:8889/Esercizi_Boolean/20-04-2020/php-ajax-dischi/index_2.php") {

    // DA RIPETERE SOLO UNA VOLTA PER TEMPLATE
    var source = $("#card-template").html();
    var template = Handlebars.compile(source);
    // DA RIPETERE SOLO UNA VOLTA PER TEMPLATE

    $.ajax({
      url: "http://localhost:8889/Esercizi_Boolean/20-04-2020/php-ajax-dischi/server.php",
      method: "GET",
      success: function (data) {
        // console.log(data);
        for (var i = 0; i < data.length; i++) {
          let album = {
            cover: data[i].cover,
            album: data[i].title,
            artist: data[i].artist,
            year: data[i].year
          };
          var templateCompiled = template(album);
          $("main .row.cards").append(templateCompiled);
        }
      },
      error: function (err) {
        alert("Qualcosa è andato storto!");
      }
    });



  };


});
