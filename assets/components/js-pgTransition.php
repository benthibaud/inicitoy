<!-- charge le body avant de lancer la transition prévue dans _animPages -->
<script>
  function resetTransformAndScale(element, delay = 910) { // Délai en fonction de la durée de notre animation
    setTimeout(() => {
      const style = window.getComputedStyle(element);
  
      // Vérifier et réinitialiser transform
      const transform = style.getPropertyValue('transform');
      if (transform && transform !== 'none') {
        element.style.transform = 'none';
      }

      console.log('Transform a été réinitialisé');
    }, delay);
  }

  // Utilisation
  window.addEventListener("load", function () {
    document.body.classList.add("loaded");
    resetTransformAndScale(document.body);
  });

</script>