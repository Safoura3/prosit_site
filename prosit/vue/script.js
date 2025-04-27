document.getElementById("formulaire").addEventListener("submit", function (e) {
    e.preventDefault(); // Empêche le rechargement
  
    const email = document.getElementById("email").value.trim();
  
    if (!email) {
      alert("Veuillez remplir le champ e-mail.");
      return;
    }
  
    alert("Merci pour votre candidature !");
  });
  
  function televerserCV() {
    const fichier = document.getElementById("file").files[0];
  
    if (!fichier) {
      alert("Veuillez sélectionner un fichier PDF.");
      return;
    }
  
    if (fichier.type !== "application/pdf") {
      alert("Seuls les fichiers PDF sont acceptés.");
      return;
    }
  
    const url = URL.createObjectURL(fichier);
    window.open(url, "_blank");
  }
  