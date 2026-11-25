# Logo sources and current representation

- Aurelia Apartments uses the existing user-supplied local SVG `assets/ce5201d8012cd3d711e5.svg` unchanged.
- External brands are represented by their names in ordinary typography. They are not presented as recreated official logos.
- No external logo files have been added without a verifiable original source.

## Checks completed

1. Downloaded the official `simple-icons` npm package16.38.1 from the npm registry. Its archive was verified against the registry's SHA-512 integrity value. None of the requested brands occurs in that package.
2. Inspected public GitHub organisation pages for `nuki-io`, `spotahome`, and `housinganywhere`.
3. Read these available official organisation repositories' READMEs: `nuki-io/go-nuki`, `spotahome/kooper`, `spotahome/redis-operator`, `housinganywhere/rn-assignment`. They provide no suitable original corporate logo assets (CI/project badges are not corporate marks).
4. Tried organisation `.github/profile/README.md` files on main/master; no such logo source was available.
5. The direct corporate websites/CDNs are outside this environment's current network allowlist. Access restrictions were not bypassed.

## Original uploads still needed

Wunderflats, Spotahome, Farawayhome, HousingAnywhere, Kloeber Versicherungsmakler, HVS Hamburger Versicherungsservice, and Nuki. Hauschild is intentionally a secondary text mention, not a dominant logo tile.

When verified originals are supplied, add an appropriate local asset `logo` path to `OWNER_NETWORK_BRANDS`. The CSS supports SVG/PNG original colours without tinting. Keep each brand name visible and remove no-website-link behaviour unchanged.

The marquee makes no certification/authorised-partnership claim. It is labelled as technology, insurance and marketing channels; it introduces no outbound links or external HTTP requests.
