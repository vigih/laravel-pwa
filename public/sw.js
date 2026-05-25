
importScripts(
    'https://storage.googleapis.com/workbox-cdn/releases/6.4.1/workbox-sw.js'
);

const CACHE_ASSERTS_JS = "asserts-js";
const CACHE_ASSERTS_CSS = "asserts-css";
const CACHE_ASSERTS_FONT = "asserts-font";
const CACHE_ASSERTS_IMAGE = "asserts-image";
const CACHE_OFFLINE_PAGE = "offline-page-v1";
const OFFLINE_FALLBACK_PAGE = "offline.html";
const CACHE_ASSETS_OFFLINE = [
    "/",
    "/offline.html",
];


workbox.setConfig({
    debug: false,
});

// OFFLINE INSTALL
self.addEventListener('install', async (event) => {
    event.waitUntil(
        caches.open(CACHE_OFFLINE_PAGE)
            .then((cache) => {
                cache.addAll(CACHE_ASSETS_OFFLINE);
            })
    );
    self.skipWaiting();
});

self.addEventListener('activate', (event) => {
    event.waitUntil((async () => {
        if ('navigationPreload' in self.registration) {
            await self.registration.navigationPreload.enable();
        }
    })());

    self.clients.claim();
});

self.addEventListener('fetch', (event) => {
    if (event.request.mode === 'navigate') {
        event.respondWith((async () => {
            try {
                const preloadResp = await event.preloadResponse;

                if (preloadResp) {
                    return preloadResp;
                }

                const networkResp = await fetch(event.request);
                return networkResp;
            } catch (error) {

                const cache = await caches.open(CACHE_OFFLINE_PAGE);
                const cachedResp = await cache.match(OFFLINE_FALLBACK_PAGE);
                return cachedResp;
            }
        })());
    }
});

// ASSERTS JS
workbox.routing.registerRoute(
    /\.*\.js/g,
    new workbox.strategies.NetworkFirst({
        cacheName: CACHE_ASSERTS_JS
    }),
);

// ASSERTS CSS
workbox.routing.registerRoute(
    /\/.*\.css/g,
    new workbox.strategies.NetworkFirst({
        cacheName: CACHE_ASSERTS_CSS
    }),
);

// ASSERTS FONT
workbox.routing.registerRoute(
    /\.*\.?(?:eot|svg|ttf|woff|woff2)/g,
    new workbox.strategies.NetworkFirst({
        cacheName: CACHE_ASSERTS_FONT,
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
    /^https:\/\/fonts.gstatic.com\/s\/materialicons\/v77\//g,
    new workbox.strategies.NetworkFirst({
        cacheName: CACHE_ASSERTS_FONT,
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
    /\.*\.?(?:png|jpg|jpeg|svg|gif)/g,
    new workbox.strategies.CacheFirst({
        cacheName: CACHE_ASSERTS_IMAGE,
        plugins: [
            new workbox.expiration.ExpirationPlugin({
                maxEntries: 20,
            }),
        ],
    }),
);


