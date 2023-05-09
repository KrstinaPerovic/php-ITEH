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
            window.location.href = 'index.php';
        }
        else {
       
            console.log("Greska" + response);
        }
    });

    request.fail(function (jqXHR, textStatus, errorThrown) {
        console.error('Greska: ' + textStatus, errorThrown);
    });
  });
  
  $(document).ready(function() {
    $('.btn-edit').on('click', function() {
        var putovanjeId = $(this).data('id');
        window.location.href = 'azuriraj.php?id=' + putovanjeId;
    });
});
 

$("#forma-azuriraj").submit(function (event) {
    var form = $('#forma-azuriraj')[0];
    var formData = new FormData(form);
    event.preventDefault();
    console.log(formData)
    
    request = $.ajax({
        url: 'handler/azuriraj-putovanje.php',
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
            alert("Putovanje uspešno ažurirano!");
            window.location.href = 'index.php';
        } else {
            alert("Greška prilikom ažuriranja putovanja: " + response);
        }
    });

    request.fail(function (jqXHR, textStatus, errorThrown) {
        console.error('Greška: ' + textStatus, errorThrown);
        alert('Greška prilikom ažuriranja putovanja. Pokušajte ponovo.');
    });
});
