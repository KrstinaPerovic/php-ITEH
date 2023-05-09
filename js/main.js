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
  