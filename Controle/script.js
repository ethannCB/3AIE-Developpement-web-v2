document.getElementById('select_ville').addEventListener('change', function() {
    const villeChoisie = this.value;

    if (villeChoisie === "") return;

    fetch(`index.php?ville=${villeChoisie}`)
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                alert(data.error);
            } else {
                document.getElementById('ville').textContent = data.ville;
                document.getElementById('temperature_label').textContent = data.temperature;
                document.getElementById('condition_label').textContent = data.conditions;
            }
        })
        .catch(error => console.error('Erreur:', error));
});
