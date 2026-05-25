const CACHE_OFFLINE_PAGE = "offline-page";
const offlineFallbackPage = "offline.html";
const CACHE_ASSETS_OFFLINE = [
	"./",
	"./css/offline.css",
	"/images/error/no-connection.png",
	"/offline.html",
];

self.addEventListener('install', async (event) => {
	event.waitUntil(
		caches.open(CACHE_OFFLINE_PAGE)
			.then((cache) => {
				cache.addAll(CACHE_ASSETS_OFFLINE);
			})
	);
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
				const cachedResp = await cache.match(offlineFallbackPage);
				return cachedResp;
			}
		})());
	}
});
