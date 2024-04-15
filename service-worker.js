// service-worker.js
const cacheName = 'inicitoy-cache-v1';
const filesToCache = [
  '_QRcode.html',
  'assets/fonts/',
  'assets/img/',
  'assets/styles/'
];

self.addEventListener('install', function(event) {
  event.waitUntil(
    caches.open(cacheName)
      .then(function(cache) {
        return cache.addAll(filesToCache);
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
