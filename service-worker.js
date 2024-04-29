// service-worker.js
const filesToCache = [
  '_QRcode.html',
  './pg/_afficher_image.php'
  './assets/components/contact.php',
  './assets/components/header.php'
];

self.addEventListener('install', function(event) {
  event.waitUntil(
    caches.open('cacheName')
      .then(function(cache) {
        return cache.addAll(filesToCache);
      })
  );
});

self.addEventListener('install', event => {
  event.waitUntil(
    caches.open('police-cache-v1')
      .then(cache => {
        return cache.addAll([
          './assets/fonts/notosans-regular.woff',
          './assets/fonts/notosans-regular.woff2',
          './assets/fonts/notosans-light-webfont.woff',
          './assets/fonts/notosans-light-webfont.woff2',
          './assets/fonts/kalam_light-webfont.woff',
          './assets/fonts/kalam_light-webfont.woff2'
        ]);
      })
  );
});

self.addEventListener('fetch', function(event) {
  event.respondWith(
    caches.match(event.request)
      .then(function(response) {
        if (response) {
          return response;
        }
        return fetch(event.request);
      })
  );
});
