
importScripts(
    'https://storage.googleapis.com/workbox-cdn/releases/6.4.1/workbox-sw.js'
);

workbox.setConfig({
    debug: false,
});

// ASSERTS JS
workbox.routing.registerRoute(
    new RegExp('/.*\\.js'),
    new workbox.strategies.NetworkFirst({
        cacheName: "asserts-js"
    }),
);

// ASSERTS CSS
workbox.routing.registerRoute(
    /\/.*\.css/g,
    new workbox.strategies.NetworkFirst({
        cacheName: "asserts-css"
    }),
);

// ASSERTS FONT
workbox.routing.registerRoute(
    new RegExp('/.*\\.(?:eot|svg|ttf|woff|woff2)'),
    new workbox.strategies.NetworkFirst({
        cacheName: "asserts-font",
        plugins: [
            new workbox.expiration.ExpirationPlugin({
                maxEntries: 20,
                maxAgeSeconds: 60 * 60 * 24 * 7,
                purgeOnQuotaError: true,
            }),
            new workbox.cacheableResponse.CacheableResponsePlugin({
                statuses: [0, 200],
            }),
        ],
    }),
);

workbox.routing.registerRoute(
    new RegExp('^https://fonts.gstatic.com/s/materialicons/v77/'),
    new workbox.strategies.NetworkFirst({
        cacheName: "asserts-font",
        plugins: [
            new workbox.expiration.ExpirationPlugin({
                maxEntries: 20,
                maxAgeSeconds: 60 * 60 * 24 * 7,
                purgeOnQuotaError: true,
            }),
            new workbox.cacheableResponse.CacheableResponsePlugin({
                statuses: [0, 200],
            }),
        ],

    }),
);

// ASSERTS IMAGE
workbox.routing.registerRoute(
    new RegExp('/.*\\.(?:png|jpg|jpeg|svg|gif)'),
    new workbox.strategies.CacheFirst({
        cacheName: 'asserts-image',
        plugins: [
            new workbox.expiration.ExpirationPlugin({
                maxEntries: 20,
            }),
        ],
    }),
);

