    <!-- mise en cache -->
    <script>
      if ("serviceWorker" in navigator) {
        window.addEventListener("load", function () {
          navigator.serviceWorker.register("./service-worker.js");
        });
      }
    </script>