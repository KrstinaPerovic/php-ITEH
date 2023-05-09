function obrisiPutovanje(putovanjeId) {
    // Napravi AJAX zahtev za brisanje putovanja
    fetch('handler/obrisi-putovanje.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({ putovanjeId: putovanjeId })
    })
    .then(response => response.json())
    .then(data => {
      // Ažuriraj prikaz tabele nakon uspešnog brisanja putovanja
      if (data.success) {
         alert("USPEH")
         location.reload(); // Osveži stranicu nakon uspešnog brisanja putovanja
      }
    })
    .catch(error => {
      console.error('Došlo je do greške:', error);
    });
  }
  

  $("#form-putovanje").submit(function (event) {
    var form = $('#form-putovanje')[0];
    var formData = new FormData(form);
    event.preventDefault();  
 

    request = $.ajax({  
        url: 'handler/dodaj-putovanje.php',  
        type: 'post', 
        processData: false,
        contentType: false,
        data: formData
    });

    request.done(function (response, textStatus, jqXHR) {
        console.log(textStatus);
        console.log(jqXHR);
      console.log(response);

        if (response === "Success") {
            alert("Uspesno");
         
        }
        else {
       
            console.log("Greska" + response);
        }
    });

    request.fail(function (jqXHR, textStatus, errorThrown) {
        console.error('Greska: ' + textStatus, errorThrown);
    });
  });
  
  