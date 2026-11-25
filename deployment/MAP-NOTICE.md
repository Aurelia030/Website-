# Apartment overview map – Version 17

## Integration

Apply `map_patch.patch(source)` before the SEO patch. It injects `map.js`, `map.css`, the map/list controls and hooks into the original `renters`, `bind` and `filterApartments` functions. Merge `map-translations.json` into `window.AURELIA_TRANSLATIONS` using exact source keys.

The dynamic selected-apartment links call `window.AURELIA_SEO?.rewriteLinks(selection)` and `window.AURELIA_I18N?.apply()` after creation. Map view/category/selection/zoom are in memory; the map sets no cookies or localStorage values. Existing individual Google Maps embeds are unchanged.

## Map source and attribution

Source: https://github.com/funkeinteraktiv/Berlin-Geodaten/blob/master/berlin_bezirke.geojson

Source README: https://github.com/funkeinteraktiv/Berlin-Geodaten/blob/master/README.md

Source credits the administrative district geometries to Amt für Statistik Berlin-Brandenburg, originally prepared by m-hoerz and collected by Berliner Morgenpost (now under funkeinteraktiv). The source states **CC-BY**, without a licence version, and WGS84 projection. The file metadata dates to 2013. These stable district outlines are used only as a general orientation map, not a current legal boundary record.

The geometries were simplified using Ramer–Douglas–Peucker with an approximately 60 m angular tolerance and projected locally to an equirectangular Berlin view. A visible on-map credit identifies the source, contributors, licence and simplification. Full original GeoJSON and source README are retained locally as `berlin-bezirke-source.geojson` and `berlin-geodata-README.md` for provenance. The production map embeds only ~14.5 KB of derived path geometry; no remote map service is contacted.

## Location privacy

Markers represent publicly known **neighbourhood centres**, not apartment coordinates. Every page explains that markers are approximate at Stadtteil level and exact addresses are supplied personally. Moabit groups the two apartments in one marker to avoid suggesting fictional, distinct house locations. Category filtering works for both map and list.

Representative points:

- Friedrichshain: 52.5155 N, 13.4543 E, inside Friedrichshain-Kreuzberg district.
- Wilmersdorf: 52.4859 N, 13.3235 E, inside Charlottenburg-Wilmersdorf district.
- Prenzlauer Berg: 52.5398 N, 13.4246 E, inside Pankow district.
- Moabit: 52.5306 N, 13.3379 E, inside Mitte district.

Point-in-polygon checks against the original data passed for all four representative neighbourhood centres. Apartments in these four neighbourhoods are matched by their existing `district` field, so additional apartments in the same neighbourhood automatically appear without adding per-apartment coordinates. A future apartment in another neighbourhood requires a corresponding representative map group; its exact house location must not be inferred.

## UI and accessibility

View switch preserves category, and category filtering retains the map view. Native HTML marker buttons expose neighbourhood names and pressed states. The selection panel is an aria-live region and includes names, existing prices, status and detail links. Zoom controls are accessible native buttons; no wheel or touch interception is installed. No new forms are introduced.

## Checks

`map-test.cjs` covers DE/EN/ES at 320, 390 and 1440 pixels, list/map switching, all category filters, all map groups, two Moabit cards, translated prices/ARIA text, no horizontal overflow, zoom/reset, no runtime errors and no external network requests. Existing prices and durations are read directly from APARTMENT_DATA.
