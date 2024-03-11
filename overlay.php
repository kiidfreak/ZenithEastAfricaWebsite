<div id="overlay" class="overlay" style="display: none; z-index: 10000;">
  <h2>Sectors We Offer Services To</h2>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const barsIcon = document.getElementById('bars-icon');
    const closeIcon = document.getElementById('close-icon');
    const overlay = document.getElementById('overlay');

    function openOverlay() {
      overlay.classList.add('show');
      barsIcon.style.display = 'none';
      closeIcon.style.display = 'block';
    }

    function closeOverlay() {
      overlay.classList.remove('show');
      closeIcon.style.display = 'none';
      barsIcon.style.display = 'block';
    }

    barsIcon.addEventListener('click', openOverlay);
    closeIcon.addEventListener('click', closeOverlay);

    // Expose the openOverlay and closeOverlay functions globally
    window.openOverlay = openOverlay;
    window.closeOverlay = closeOverlay;
  });
</script>
