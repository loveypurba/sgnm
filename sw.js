/**
 * Copyright 2016 Google Inc. All rights reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

// This generated service worker JavaScript will precache your site's resources.
// The code needs to be saved in a .js file at the top-level of your site, and registered
// from your pages in order to be used. See
// https://github.com/googlechrome/sw-precache/blob/master/demo/app/js/service-worker-registration.js
// for an example of how you can register this script and handle various service worker events.

/* eslint-env worker, serviceworker */
/* eslint-disable indent, no-unused-vars, no-multiple-empty-lines, max-nested-callbacks, space-before-function-paren */
'use strict';




importScripts("scripts/sw/sw-toolbox.js","scripts/sw/runtime-caching.js");


/* eslint-disable quotes, comma-spacing */
var PrecacheConfig = [["about.html","9517c62a6d427db7c527b8cb06c8138b"],["contact.html","5433b60761f778e4fd63481b2136dfd4"],["donate.html","810e52aa05821249676f9b229fe8b71b"],["events.html","ab3731fc3dc67251b7decbc066bd69bc"],["gallery.html","bde672762d153f6d807ec99aaddab59f"],["images/_calendar2.png","6bab9ffd4216b0a91368355a8ba75ba1"],["images/about/about-benefits.jpg","b3859cd3e326381ab3a0a6bf057f8ef9"],["images/about/header-bg-about.jpg","c0750e34894734e590d4c2fde1ce8475"],["images/about/mataji-about.JPG","be087c97c39f31b9461a4c45417c8a10"],["images/calendar.png","c00a008a417142852a0b8e5b603a29c8"],["images/calendar2.png","0d439e282f89fafd5fc881e4ea870c29"],["images/contact/header-bg-contact.jpg","c0750e34894734e590d4c2fde1ce8475"],["images/donate/header-bg-donate.jpg","c0750e34894734e590d4c2fde1ce8475"],["images/events/city/durby.jpg","879c4ce3fe66fad7f91ccae4d3b1a0c1"],["images/events/city/manchaster.jpg","9f2a7f19c8ac1a350748ec5130bfd25b"],["images/events/header-bg-events.jpg","c0750e34894734e590d4c2fde1ce8475"],["images/gallery/header-bg-gallery.jpg","c0750e34894734e590d4c2fde1ce8475"],["images/home/__hero.jpg","485da8143c239bced090ff51218e9315"],["images/home/gallery/1.jpg","0d48d8a718f6ff7539e31be27d9e39b3"],["images/home/gallery/10.jpg","5fbc525dafc9111606333778ec48a835"],["images/home/gallery/11.jpg","97748e33eecb8f5cb317361da15717d5"],["images/home/gallery/12.jpg","32f21c420e3cace67a34794ffcf82c82"],["images/home/gallery/13.jpg","aa49b87499cf7c8b43d68a6f7aa1e75a"],["images/home/gallery/2.jpg","f0dd9c1596ccb1431451c9682bcaf0fe"],["images/home/gallery/3.jpg","51ae557ee7bcadcd3ce28f51734504ea"],["images/home/gallery/4.jpg","9d81305d980eabfca7a0d1eedf12b8c4"],["images/home/gallery/5.jpg","5807c5f0cefc556f42a969c2f10e8ba6"],["images/home/gallery/6.jpg","3d6b293562161c34d43916d2a61c1431"],["images/home/gallery/7.jpg","b5342c4cb6a7b900fdbeb63e2e1ceab0"],["images/home/gallery/8.jpg","b67d802553d32a49b1db3f012d8fc75e"],["images/home/gallery/9.jpg","471b394cbbb68a65e58bcfa0378d9fa8"],["images/home/hero.jpg","6689d79d830fa82d9049be78d863cfe3"],["images/home/hero/1.jpg","6689d79d830fa82d9049be78d863cfe3"],["images/home/hero/2.jpg","a89b7a9594153201056ddab5f7815483"],["images/home/hero/3.jpg","51ee05b18da001865a0ad63aea9a957b"],["images/home/hero/4.jpg","8e19248b7a7e054398c5484c1052502e"],["images/home/hero/5.jpg","ef8c1ed6f6a948932aab4e973f0aca17"],["images/home/hero/6.jpg","2a36de0c15100eb2612411f27199d1a8"],["images/home/hero/hero-c5.jpg","fcc45bbedd5f6066e9e2945f5da9c9c1"],["images/home/hero/pattern.png","10efa10c334c31f9b6818147a9bf38a5"],["images/home/mataji-about.jpg","fcc45bbedd5f6066e9e2945f5da9c9c1"],["images/home/mataji-bachan.jpg","9232b9fcba1de765a8de98d1556b09b4"],["images/home/mission-aim.jpg","ca4148adac40d9b9b20fcee0008d53ce"],["images/logo.png","eb68ae2f1e8cc1a99b7b0e22b75a8fc5"],["images/sewa/dunera.JPG","be087c97c39f31b9461a4c45417c8a10"],["images/sewa/header-bg-sewa.jpg","c0750e34894734e590d4c2fde1ce8475"],["images/sewa/widow-sewa.JPG","be087c97c39f31b9461a4c45417c8a10"],["images/sprite.png","4c135471d9ebc019e447372b7e5b2af6"],["images/touch/apple-touch-icon.png","7326f54bfe6776293f08b34c3a5fde7b"],["images/touch/chrome-touch-icon-192x192.png","571f134f59f14a6d298ddd66c015b293"],["images/touch/icon-128x128.png","7c46d686765c49b813ac5eb34fabf712"],["images/touch/ms-touch-icon-144x144-precomposed.png","452d90b250d6f41a0c8f9db729113ffd"],["index.html","75de97dc2aaab69c3f9b968795e9480f"],["manifest.json","950c3948d31cfa0ec99e796ef87add11"],["register.html","4545b09b7e5f2ad41ac53695400e4984"],["scripts/main.min.js","34a00bde0733369f65ba9b3c8f750784"],["scripts/sw/runtime-caching.js","4f3881ee12be74267853341468418ccb"],["scripts/sw/sw-toolbox.js","2770efb889cc10c4de88d0b746c2a13c"],["sewa.html","f275a4c89f28ae9a604a02b561d5bdd5"],["styles/full-bg-carousel.css","e81b8f5c9157e1898aca061dc9e76656"],["styles/main.css","c33b8dfb913780309a92e481beb1ee79"],["styles/owl.carousel.min.css","cc217ccac55c859fe916b793bb8a9da1"],["styles/owl.theme.default.css","13b30e7d8ff0e977183e0993af61f82a"],["temp.html","c944fe213a20f0f0973cf14dfeec9eec"]];
/* eslint-enable quotes, comma-spacing */
var CacheNamePrefix = 'sw-precache-v1-web-starter-kit-' + (self.registration ? self.registration.scope : '') + '-';


var IgnoreUrlParametersMatching = [/^utm_/];



var addDirectoryIndex = function (originalUrl, index) {
    var url = new URL(originalUrl);
    if (url.pathname.slice(-1) === '/') {
      url.pathname += index;
    }
    return url.toString();
  };

var getCacheBustedUrl = function (url, param) {
    param = param || Date.now();

    var urlWithCacheBusting = new URL(url);
    urlWithCacheBusting.search += (urlWithCacheBusting.search ? '&' : '') +
      'sw-precache=' + param;

    return urlWithCacheBusting.toString();
  };

var isPathWhitelisted = function (whitelist, absoluteUrlString) {
    // If the whitelist is empty, then consider all URLs to be whitelisted.
    if (whitelist.length === 0) {
      return true;
    }

    // Otherwise compare each path regex to the path of the URL passed in.
    var path = (new URL(absoluteUrlString)).pathname;
    return whitelist.some(function(whitelistedPathRegex) {
      return path.match(whitelistedPathRegex);
    });
  };

var populateCurrentCacheNames = function (precacheConfig,
    cacheNamePrefix, baseUrl) {
    var absoluteUrlToCacheName = {};
    var currentCacheNamesToAbsoluteUrl = {};

    precacheConfig.forEach(function(cacheOption) {
      var absoluteUrl = new URL(cacheOption[0], baseUrl).toString();
      var cacheName = cacheNamePrefix + absoluteUrl + '-' + cacheOption[1];
      currentCacheNamesToAbsoluteUrl[cacheName] = absoluteUrl;
      absoluteUrlToCacheName[absoluteUrl] = cacheName;
    });

    return {
      absoluteUrlToCacheName: absoluteUrlToCacheName,
      currentCacheNamesToAbsoluteUrl: currentCacheNamesToAbsoluteUrl
    };
  };

var stripIgnoredUrlParameters = function (originalUrl,
    ignoreUrlParametersMatching) {
    var url = new URL(originalUrl);

    url.search = url.search.slice(1) // Exclude initial '?'
      .split('&') // Split into an array of 'key=value' strings
      .map(function(kv) {
        return kv.split('='); // Split each 'key=value' string into a [key, value] array
      })
      .filter(function(kv) {
        return ignoreUrlParametersMatching.every(function(ignoredRegex) {
          return !ignoredRegex.test(kv[0]); // Return true iff the key doesn't match any of the regexes.
        });
      })
      .map(function(kv) {
        return kv.join('='); // Join each [key, value] array into a 'key=value' string
      })
      .join('&'); // Join the array of 'key=value' strings into a string with '&' in between each

    return url.toString();
  };


var mappings = populateCurrentCacheNames(PrecacheConfig, CacheNamePrefix, self.location);
var AbsoluteUrlToCacheName = mappings.absoluteUrlToCacheName;
var CurrentCacheNamesToAbsoluteUrl = mappings.currentCacheNamesToAbsoluteUrl;

function deleteAllCaches() {
  return caches.keys().then(function(cacheNames) {
    return Promise.all(
      cacheNames.map(function(cacheName) {
        return caches.delete(cacheName);
      })
    );
  });
}

self.addEventListener('install', function(event) {
  event.waitUntil(
    // Take a look at each of the cache names we expect for this version.
    Promise.all(Object.keys(CurrentCacheNamesToAbsoluteUrl).map(function(cacheName) {
      return caches.open(cacheName).then(function(cache) {
        // Get a list of all the entries in the specific named cache.
        // For caches that are already populated for a given version of a
        // resource, there should be 1 entry.
        return cache.keys().then(function(keys) {
          // If there are 0 entries, either because this is a brand new version
          // of a resource or because the install step was interrupted the
          // last time it ran, then we need to populate the cache.
          if (keys.length === 0) {
            // Use the last bit of the cache name, which contains the hash,
            // as the cache-busting parameter.
            // See https://github.com/GoogleChrome/sw-precache/issues/100
            var cacheBustParam = cacheName.split('-').pop();
            var urlWithCacheBusting = getCacheBustedUrl(
              CurrentCacheNamesToAbsoluteUrl[cacheName], cacheBustParam);

            var request = new Request(urlWithCacheBusting,
              {credentials: 'same-origin'});
            return fetch(request).then(function(response) {
              if (response.ok) {
                return cache.put(CurrentCacheNamesToAbsoluteUrl[cacheName],
                  response);
              }

              console.error('Request for %s returned a response status %d, ' +
                'so not attempting to cache it.',
                urlWithCacheBusting, response.status);
              // Get rid of the empty cache if we can't add a successful response to it.
              return caches.delete(cacheName);
            });
          }
        });
      });
    })).then(function() {
      return caches.keys().then(function(allCacheNames) {
        return Promise.all(allCacheNames.filter(function(cacheName) {
          return cacheName.indexOf(CacheNamePrefix) === 0 &&
            !(cacheName in CurrentCacheNamesToAbsoluteUrl);
          }).map(function(cacheName) {
            return caches.delete(cacheName);
          })
        );
      });
    }).then(function() {
      if (typeof self.skipWaiting === 'function') {
        // Force the SW to transition from installing -> active state
        self.skipWaiting();
      }
    })
  );
});

if (self.clients && (typeof self.clients.claim === 'function')) {
  self.addEventListener('activate', function(event) {
    event.waitUntil(self.clients.claim());
  });
}

self.addEventListener('message', function(event) {
  if (event.data.command === 'delete_all') {
    console.log('About to delete all caches...');
    deleteAllCaches().then(function() {
      console.log('Caches deleted.');
      event.ports[0].postMessage({
        error: null
      });
    }).catch(function(error) {
      console.log('Caches not deleted:', error);
      event.ports[0].postMessage({
        error: error
      });
    });
  }
});


self.addEventListener('fetch', function(event) {
  if (event.request.method === 'GET') {
    var urlWithoutIgnoredParameters = stripIgnoredUrlParameters(event.request.url,
      IgnoreUrlParametersMatching);

    var cacheName = AbsoluteUrlToCacheName[urlWithoutIgnoredParameters];
    var directoryIndex = 'index.html';
    if (!cacheName && directoryIndex) {
      urlWithoutIgnoredParameters = addDirectoryIndex(urlWithoutIgnoredParameters, directoryIndex);
      cacheName = AbsoluteUrlToCacheName[urlWithoutIgnoredParameters];
    }

    var navigateFallback = '';
    // Ideally, this would check for event.request.mode === 'navigate', but that is not widely
    // supported yet:
    // https://code.google.com/p/chromium/issues/detail?id=540967
    // https://bugzilla.mozilla.org/show_bug.cgi?id=1209081
    if (!cacheName && navigateFallback && event.request.headers.has('accept') &&
        event.request.headers.get('accept').includes('text/html') &&
        /* eslint-disable quotes, comma-spacing */
        isPathWhitelisted([], event.request.url)) {
        /* eslint-enable quotes, comma-spacing */
      var navigateFallbackUrl = new URL(navigateFallback, self.location);
      cacheName = AbsoluteUrlToCacheName[navigateFallbackUrl.toString()];
    }

    if (cacheName) {
      event.respondWith(
        // Rely on the fact that each cache we manage should only have one entry, and return that.
        caches.open(cacheName).then(function(cache) {
          return cache.keys().then(function(keys) {
            return cache.match(keys[0]).then(function(response) {
              if (response) {
                return response;
              }
              // If for some reason the response was deleted from the cache,
              // raise and exception and fall back to the fetch() triggered in the catch().
              throw Error('The cache ' + cacheName + ' is empty.');
            });
          });
        }).catch(function(e) {
          console.warn('Couldn\'t serve response for "%s" from cache: %O', event.request.url, e);
          return fetch(event.request);
        })
      );
    }
  }
});




