<?php
/* Aurelia v17: extracts one verified, fixed static release into a new folder.
 * No shell commands, external requests, file uploads, or configuration changes.
 * The private activation code is supplied through the URL fragment, not cookies.
 */
declare(strict_types=1);
ini_set('display_errors', '0');
header('Content-Type: text/html; charset=utf-8');
header('Cache-Control: no-store, private, max-age=0');
header('X-Robots-Tag: noindex, nofollow, noarchive');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: DENY');
header('Referrer-Policy: no-referrer');
$nonce = base64_encode(random_bytes(18));
header("Content-Security-Policy: default-src 'none'; style-src 'unsafe-inline'; script-src 'nonce-" . $nonce . "'; form-action 'self'; base-uri 'none'; frame-ancestors 'none'");

const RELEASE_HASH = '5676731e04d99e181b3c2c87e560ec3952685f725bc6c25d875b8cd76a924261';
const CODE_HASH = '97da76250e9d3266af517813021ecf351f3d033618dba520e98935636c8abc63';
const ZIP_NAME = 'Aurelia-Website-17.zip';
const TARGET_NAME = 'Aurelia-v17';
$manifest = json_decode('{"404/index.html":[9037,"ee2cc4161b721e825cece41e31fabd1fd1304a08ddf7ac157477f4abb3db5d97"],"404.html":[9037,"ee2cc4161b721e825cece41e31fabd1fd1304a08ddf7ac157477f4abb3db5d97"],"THIRD-PARTY-NOTICES.txt":[672,"5fd865c1a5fbedcd3747eaff8f5bea0a874d57a3529e2ab222390ff845a015e3"],"anfrage/index.html":[12644,"d0543783585eb227491721a6b29e5235b0d36ee94f15cc5203204450b1475bad"],"apartments/antonius/index.html":[32038,"65a73813f9170c6f716dee850ad01d89ff688d9f2c68b9f1d970fef66d65eb04"],"apartments/brutus/index.html":[26403,"b1b952cf5c7f42fd29bd2e72056cea722fe0817d37123b03dccff8797077f3c1"],"apartments/index.html":[44703,"0d84878fdddfdaf1c2c87beab5ebef5adb29f071c7e75ff086d3c4cc5b42ec7c"],"apartments/kurzzeit/index.html":[39003,"cc379cff5b92ccfa6e461c984d5289d5b0d4c8a87e47a3b2739d812659e0d948"],"apartments/leandros/index.html":[32736,"9b269f59f9c97e833d6467dffd606a61f2afface7fc092031b35097091012c35"],"apartments/myhappyplace/index.html":[33096,"e79956f995b94e185aac7221eb3f03c140c838548d3ea02b7c5b1ca31ee720e9"],"apartments/myhappyplace-two/index.html":[32918,"a6bbe72ab629af2a2190fc9c8340ef4ac59b8e87384169c532e96a62d90227a8"],"apartments/wohnen-auf-zeit/index.html":[40722,"b3f4b49a2ee439d4f0cd829b226b9c98c9c386f5fbb365dc3fbf14eda2dda897"],"assets/04a33af71467d7797832.jpg":[503758,"04a33af71467d77978322b1e9b7b3e743cf81171be45996d713013dbf138a175"],"assets/065c1724536053a3425f.webp":[158882,"065c1724536053a3425fac0d5caee2cdbb37a0e56507b10f0f3dcf8f612e5638"],"assets/0a5f7964213d7a1829bb.jpg":[152892,"0a5f7964213d7a1829bba4691ed2ab0a4c59d620287e9690931e8d71a96bc723"],"assets/0b3505cd6404c46e0810.webp":[371506,"0b3505cd6404c46e081094aace775b03154237f8a6d6ad16881136b60faae138"],"assets/0c7ddf01f26c07e7a85b.jpg":[325250,"0c7ddf01f26c07e7a85b20ea8d7800ebb096d5b92f371f1ea7dc5a0140d47019"],"assets/0ef213e8be910d9af9fd.webp":[84844,"0ef213e8be910d9af9fd72b07bcee0096e6c825b0f860220ffa4d414f190ae6c"],"assets/0f1d021997365e77fb99.webp":[240974,"0f1d021997365e77fb99b54ccef59e127117b586aabfa487fbf3a80bf33761af"],"assets/0f60219698ba96bf34f3.webp":[390172,"0f60219698ba96bf34f37185a1409d137ba145524d99bbb02f8a59082018b58f"],"assets/136d50367100806cf3db.webp":[379222,"136d50367100806cf3dba92066076bf77b5514598e7da61a5e1ff0ba865e32bb"],"assets/1e47dce7db48ea1ee2c1.webp":[175064,"1e47dce7db48ea1ee2c133f6980b671b6b8fa78618e877bb108d941f20cb9179"],"assets/1f8f4b0a8cb8aa6299ef.jpg":[353027,"1f8f4b0a8cb8aa6299efc5b190eef77680d7dbdd6c7a293ac17852158a2dc585"],"assets/21806f28bbac453dbd94.jpg":[364575,"21806f28bbac453dbd9484d49fa394ffba15f213cb3baf79e98950dea12f4a1b"],"assets/22da7b450d5b0b0d0cd8.webp":[218172,"22da7b450d5b0b0d0cd8bf73e501d634f13da38248243b0928f711e81a50de8a"],"assets/235de02994b07299ae8a.webp":[180674,"235de02994b07299ae8acc6fb86218bc1747b4206a315353950712ae1fe08a58"],"assets/27ea0f049c57a792f5c0.webp":[219264,"27ea0f049c57a792f5c0e32e7f8b7f9a04b9ad29181e0dad57670d756dd0fb4f"],"assets/286994b79536e2e0d023.js":[295204,"286994b79536e2e0d023c24ca325feaa5421273e6052302d2bbb333d5ff0ad5b"],"assets/2ab5672d7ad1436a910f.webp":[240016,"2ab5672d7ad1436a910f0d3c996d275bd7e12394593c93ef434308749c8a93ed"],"assets/2ffe73224f6124042c3a.webp":[111766,"2ffe73224f6124042c3a96e9931df99df633c01d73000bcbeb8d649d5b79bb3f"],"assets/316ca57c4dd97dd9b670.webp":[71526,"316ca57c4dd97dd9b670b237e61fd799340bb33a739327446760d4af8056b276"],"assets/32389658d4f1f9664082.webp":[43360,"32389658d4f1f9664082704fa1c185a2b36cedf64a94a9c53e59cb4e0af31732"],"assets/35aafbd1687ff79fe971.webp":[190878,"35aafbd1687ff79fe9717f6f5f04721bddbb1be98016eb0ae4049ac55d72e85d"],"assets/35adae45724dc2ac1e96.webp":[205238,"35adae45724dc2ac1e96a86c04f068198e73f9ec011f00ced69ca8c5e8a14226"],"assets/3ae11c49db0455a3cc33.ttf":[164700,"3ae11c49db0455a3cc33e37d380f20fdb8c7f8b41dc07625c177e3d87a9d6ae6"],"assets/46fa5eed6acd45a02a6e.jpg":[301718,"46fa5eed6acd45a02a6e8d8c393d8ca1efee0870815c8c4b55ad315d4a8b8e6e"],"assets/4784c4a133feb2106857.jpg":[345024,"4784c4a133feb2106857e6c6c10030159021a1bee6df53c6490506e7e79e0fa0"],"assets/48cb7da712214a43e035.webp":[54020,"48cb7da712214a43e035f36b1520bef4698f87485b2aa0205b65f4bbad25590b"],"assets/4b22eb5b5238683a9872.jpg":[317865,"4b22eb5b5238683a9872f6f5abf92f5550930ace1497c7ce035cb6b638f129b9"],"assets/4d08c2ed75b234c17c72.webp":[571254,"4d08c2ed75b234c17c723e11187a87b12062dd6822fcb679e4787a6a766ce075"],"assets/4d676d7ee8ce25931a66.webp":[172012,"4d676d7ee8ce25931a6625839e2bb7bd93821f98d0280473652954414c11e50e"],"assets/4dcc541459c28c07b0ca.webp":[387352,"4dcc541459c28c07b0caaee642e89115fed6d5cf2eb6e3b153cbaf2eb6e15816"],"assets/4e8ebcf785c2650af27d.png":[2966258,"4e8ebcf785c2650af27d0bc2bcea19bc52fe8a55d652bc99ec9692278b93d93b"],"assets/501b784ba37874021d72.webp":[163254,"501b784ba37874021d72ed896fe31b0d469d1c01624481804378bf8b731cf79a"],"assets/55af73ad920e43e1cb74.webp":[103570,"55af73ad920e43e1cb74b5f4cb89c213156d9c5303d44836720b258b368ca24b"],"assets/588f22b695d9b10a9ec7.webp":[76628,"588f22b695d9b10a9ec7638c8dc2f9b04734f7510612533336094d216260546e"],"assets/5aacb448bf4541f7c66c.webp":[84904,"5aacb448bf4541f7c66cbbc50bfe2c818fe88db77621006636cd153514bcf1a6"],"assets/63e60b8c6a80a70555f9.jpg":[340625,"63e60b8c6a80a70555f97cfb191d1aa8dccd0edacd99738610061a03cc1d8710"],"assets/640e1acfa7a56a6df8d2.webp":[159824,"640e1acfa7a56a6df8d26243343cd88336f2510599942225578b86ff3bec649e"],"assets/66bcf58291e46114524f.webp":[202462,"66bcf58291e46114524f4461a451a3d86305d4fdc18e6bde0e78c8a902c7a055"],"assets/671eb6f0fa277eae9a6e.webp":[155404,"671eb6f0fa277eae9a6e0dcb89c01f323b98bf855ab9120f12bd1f1f901a0f24"],"assets/6e9ccd4b5756ce5f4f5f.jpg":[278220,"6e9ccd4b5756ce5f4f5f4db14b7270526c43dec0d383759e1317bf79b191532c"],"assets/6eef453aab2eda2fadb8.webp":[155156,"6eef453aab2eda2fadb8721e5ebb1c39bf0c5b3afed1a94f155dcd714758caf0"],"assets/70f4223bb053ef36d92a.webp":[225230,"70f4223bb053ef36d92a246f9e7e5640dcbea798cb44dfb69c27a06cbe06ff0d"],"assets/7bf08789610ee3608ddb.webp":[144020,"7bf08789610ee3608ddbf5b5a8f588db8f966239f73ff2d327508e8db1d2a76e"],"assets/80b8831881b62e39811c.webp":[182388,"80b8831881b62e39811cea6f977e5881ce5533da671e40fb39ef014a8bd0d429"],"assets/85e9ec500ffb09d22319.webp":[106534,"85e9ec500ffb09d223192f4406f22fffa95143e67489173dace92e04f33d81f6"],"assets/88e63a8002ddc270d253.webp":[200746,"88e63a8002ddc270d2530c00de6877f469536391197b46d139ae709168079148"],"assets/8a8f79aeee60493d5cb0.webp":[273782,"8a8f79aeee60493d5cb0b8b426b3bc2abef9e415a65e4a9fbd0f68feeecec4d7"],"assets/900354706610fafbafa3.webp":[173426,"900354706610fafbafa3ad1f679bbd4e64cfb4a784bc0a78a944d4f25d646681"],"assets/9057af739b46d0224413.webp":[199022,"9057af739b46d02244139c79ea8f12bc3aede527f16bb8da324a73325e03d463"],"assets/94d6f7e8a9c75ae40028.webp":[387838,"94d6f7e8a9c75ae40028d98384e49b3260a781bd0acfc71dfe1258b300ae795f"],"assets/9cab1d0b07c2c7e0da25.webp":[198126,"9cab1d0b07c2c7e0da251354b9e40949eb04b2a76cb4edea1849989534b221d0"],"assets/a3d49f41d84ed6a0e0c5.webp":[117242,"a3d49f41d84ed6a0e0c56e7dddb82d9ee51a08aeebd43149bbded617c296d3a4"],"assets/a3df16fdba94ef77bf9d.css":[86613,"a3df16fdba94ef77bf9d736e4700bcfd69d278fb1aba72afbf14cbb4424debcc"],"assets/aefb447fe66544b74c92.webp":[193330,"aefb447fe66544b74c92ff7f70052f647c9d02ac3b5550568889bf603755e87b"],"assets/b2c26e543764a4c02ebe.webp":[386614,"b2c26e543764a4c02ebea1883f65b2f70c9415daf40258d639676234193833d1"],"assets/bb32d6b7afd18cb9bf59.webp":[81058,"bb32d6b7afd18cb9bf59c9bbb6c024b95dfc0266219d5ad5b0a20deb1bfc4f87"],"assets/bcb81f376f1c3892c702.ttf":[400468,"bcb81f376f1c3892c7026dabf2beafbd1a7ee8ae95d132ee7d4ff7d7c3988261"],"assets/bdca73d8053b62c98dfb.webp":[342360,"bdca73d8053b62c98dfbb585af74c003b718872a995c54457d1d6c0c437bc591"],"assets/c393c91633f840457ac0.webp":[120444,"c393c91633f840457ac095261162dc97db434ebe1faeb3a0d272579569bc3271"],"assets/c6703c6fe4be3fac70b5.webp":[173408,"c6703c6fe4be3fac70b5d88167edc7386b94f4812d465ca3591a98b2cacb98ea"],"assets/c7aa80f3b1ac2b943046.webp":[502324,"c7aa80f3b1ac2b943046cb8fd2d330ec6edfe286403346f11db468a65fb7d556"],"assets/ca3a0fefc61b4e1756f0.webp":[122522,"ca3a0fefc61b4e1756f08a4c286bd0186ed86a652de130a8c0bd95e5b9e62bec"],"assets/ce5201d8012cd3d711e5.svg":[380,"ce5201d8012cd3d711e509fb8337b76a0979c3b716eba5b6ded108684aa6254b"],"assets/cf935ba29ad15df4871a.webp":[145366,"cf935ba29ad15df4871a7d0bebdfb86857db3de4c697b1ffeef569ae7a1cf4b2"],"assets/d11598674f06e9dfb610.jpg":[538410,"d11598674f06e9dfb61021e7a5fc4aad83906cfd03aa18cacb10464b06df005f"],"assets/de999cb6a4badb7e1921.webp":[116964,"de999cb6a4badb7e19211e4cf7a238d5675ff6ef58c57c102a130d9ffd2434fb"],"assets/e339d77a724a22655a1d.webp":[88456,"e339d77a724a22655a1d0d7cd924df5d615b6438ade3ab404dc886f0b8f81853"],"assets/e3c51d2eef495335114b.png":[2249148,"e3c51d2eef495335114bd2fd4e2d4c9a96a9383b95ae6c0dd73fe047a47bc2dc"],"assets/e502c4c8203844fb4130.webp":[197504,"e502c4c8203844fb41307020cc449388f3db5fe9329399d6403be76d898e92c4"],"assets/ea9a591adf48e8c4807b.webp":[390816,"ea9a591adf48e8c4807b67f488eb11a5baf8536f9c7821d79b80f38e9c4e0855"],"assets/ebc6af8d1de2b2291970.webp":[254702,"ebc6af8d1de2b2291970f68c2a56fc1f93c4b476dc9f402adc4bcfbbf71832c1"],"assets/ee0e4d2f248cb732b6e6.webp":[271118,"ee0e4d2f248cb732b6e6cd5a8e6e5237d9465c9413b519116f4dfef337d72d4b"],"assets/f0e48bee8a45386f05d3.webp":[203810,"f0e48bee8a45386f05d36710b9fb9bd9efc1215855540d5fca8abdb9b4480299"],"assets/f32c5b7ea3ca6c5c394d.webp":[422628,"f32c5b7ea3ca6c5c394d5b4316af8bcf58cbf2d407c7d3abc7c365afaef96d8c"],"assets/fd61f2f166e0a7549899.webp":[231938,"fd61f2f166e0a7549899d1d25af34f30ee91a871c8aadfa767fbaa0eb71a3205"],"datenschutz/index.html":[15607,"fb164d711abceff8f31962ddc1c5834950a2422420f646be0092b17f88b252aa"],"eigentuemer/index.html":[27093,"7729163e5e94f67a2c0e5c4119c60f623df43178a56489ef4fa92f7d10b96b45"],"en/about/index.html":[18014,"dc30073168d8b7408e173951462520210d75b803a2bd6c2ce48040e8dd9485fa"],"en/apartments/antonius/index.html":[31569,"61450be93e5756054011fcd50f26c5053bd9460f4714dd7f27f297e24162b310"],"en/apartments/brutus/index.html":[25888,"b6ed57a3b37a2131a5399bdae064f10064efe41ed419040665bf0d8d8ba2f1f5"],"en/apartments/index.html":[43624,"ddedd00b6a97b6c5806d4543bc5806c74df935cf97462ae806e39922c1c85b77"],"en/apartments/leandros/index.html":[32156,"94afbeb95a41eed43b27388f6df9e810955eeaa3cbb58f1c2ead5744cb9d58e6"],"en/apartments/mid-term/index.html":[39879,"289d042553a80acd5f10f71854ee87c481055cbb52df3d76ac5dc952cd9f1dde"],"en/apartments/myhappyplace/index.html":[32544,"d8919e48b4a7db7b5b6c5a464ce5025c6a010f28cd41ca3c863ef512d3437c2e"],"en/apartments/myhappyplace-two/index.html":[32408,"3be452714a94618b56ea5bd8090cadfbb32d8f4793a3e4c3a96b15b0b0204d98"],"en/apartments/short-term/index.html":[38279,"4e6a03b61ea54c0da4c82fa9b62f4891c77137d1dff96885fbcb673137ae79ea"],"en/enquiry/index.html":[12755,"b4f28206920c292eed59396c63ab325657280b2e28948adf667130a0bb1aa6f9"],"en/index.html":[29946,"4b48cea8c857e1ae6af738fed5c4ac4fb6818da50c12f047c0348679dc9e1813"],"en/legal-notice/index.html":[10021,"bcacabe076ce3eb1fb03596e45ae143d5864aefa77cbf7215d9cf8fbfafda475"],"en/owners/index.html":[26620,"216ebc38f2e6f81425bb3fb7e59aade47f7bcd86e38f9aacbfff8f76e3f72dec"],"en/privacy/index.html":[14880,"f74520595c9bb7c2714bcf3e6619436990b6f3f469185f04f31c366186954834"],"en/refurbishment/index.html":[19366,"262409c41262231f0e7a4b7256ab73a3d20337491b16191d8dd3f6e74374047b"],"es/apartamentos/antonius/index.html":[32634,"9719ab882a6442f64cacf08731dcae592c22480f5e41e6f2268b9dfc23e6a9f7"],"es/apartamentos/brutus/index.html":[27036,"d8533e22ef59f3a6cee0bf9f35bfcf1ae76caca5fcb2ea637a8344ab9f94f08c"],"es/apartamentos/corta-estancia/index.html":[39510,"6714139b3c1a62542f96ae05ea561d6498351c71c913e4397ce8f6fcffb495c4"],"es/apartamentos/index.html":[45098,"4b8a13f1d5a6a3c6a25e5b9aa5bd2c24110b485d6b4f7edeb516c613b6a9e937"],"es/apartamentos/leandros/index.html":[33117,"49cce6437a6e7262c5edc1635be0df1ebd1d37cda0548c07b85536a8745830a9"],"es/apartamentos/myhappyplace/index.html":[33383,"7acf558a378c68ddcd58ea03c1c5a9b6d1ae1d068ea17435319406733392d838"],"es/apartamentos/myhappyplace-two/index.html":[33277,"a9c77c36c717fec71df7c2d701f6832331aae9c9c33da9fe85956468e2b462d6"],"es/apartamentos/temporada/index.html":[41171,"2bdc1f6a2ffcab830a9793edb838a178b850dc4c45234b69657944afe7daf863"],"es/aviso-legal/index.html":[10388,"3d280b3ad69131b745710a1f55a3469927cde1a969c7f2ea256e3ae520c70482"],"es/consulta/index.html":[13228,"e57a3d15750358abd4cdea79bb9f01850c1ec253ed9ec974e3d08451f72c70ea"],"es/index.html":[31395,"bb2d2f79360842ceb7b12b5fff9737e395764cfda0cc3ed80c24aef67a7f612e"],"es/privacidad/index.html":[16144,"0a5adeb2a2ca6fddba7cdfb7d9a4b5fe02f810d95a1faa2c03567798deb6de7c"],"es/propietarios/index.html":[27998,"5f15bce9dd41fd0ad757126f3017461777ce54dde8a5ace4185d88f8b61ec3a0"],"es/reformas/index.html":[20279,"6178751992370056fd17516afec0c20e8d629ee722a04f71a49ad627511dca53"],"es/sobre-nosotros/index.html":[18557,"e5715c5eec08f8464af675effc744ab319119d44e7f98ac2b3b2dbf179a40373"],"impressum/index.html":[9971,"4fc9c4278b2ad7e7ae8a7c16b1b339c8fbbe84e8119d56bb7fd1205a343a84c5"],"index.html":[30561,"a20d9a2d9a55b597ac15f71ce3e832ff912cc19054838820e9c8a308eeb08cd2"],"robots.txt":[168,"92e3fe89a4594a222e61db517f8ed62ddeff39636d2d2dec60bbb36928994246"],"sanierung/index.html":[19751,"25681d0742d67c2a0d9045dac51bc0d05350f6e8b62716aca18e4fbb09e75083"],"sitemap.xml":[21336,"3cb63d55bf0004b21aabae62a66d62418e9dd73db2f95bacad823deb51c2fe37"],"ueber-uns/index.html":[18308,"296e87303253a68daf0364652ac03b0cb84236d3a646f521879447c596d4d07e"]}', true, 512, JSON_THROW_ON_ERROR);
$base = __DIR__;
$zipPath = $base . '/' . ZIP_NAME;
$target = $base . '/' . TARGET_NAME;
$posted = ($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST';
$code = $_POST['code'] ?? '';
$validCode = is_string($code) && strlen($code) === 64 && hash_equals(CODE_HASH, hash('sha256', $code));
$error = '';
$success = false;
$cleanupNotes = [];
$createdFiles = [];
$createdDirs = [];
$stage = null;
$lock = null;
$reader = null;

function ensureDirectory(string $path): void {
    global $createdDirs;
    if (is_link($path)) throw new RuntimeException('Ein Zielordner ist eine Verknüpfung. Es wurde nichts überschrieben.');
    if (is_dir($path)) return;
    ensureDirectory(dirname($path));
    if (!mkdir($path, 0755)) throw new RuntimeException('Ein neuer Unterordner konnte nicht angelegt werden.');
    $createdDirs[] = $path;
}

function emptyTarget(string $path): bool {
    if (is_link($path)) return false;
    if (!file_exists($path)) return true;
    return is_dir($path) && scandir($path) === ['.', '..'];
}

try {
    if ($posted && !$validCode) {
        http_response_code(403);
        throw new RuntimeException('Der Freigabecode fehlt oder ist ungültig. Bitte den vollständigen Link aus dem Chat öffnen.');
    }
    if ($posted) {
        @set_time_limit(90);
        if (!is_dir($base . '/wp-content') || !is_dir($base . '/wp-admin') || !is_file($base . '/.htaccess')) {
            throw new RuntimeException('Die Hilfe liegt noch nicht im richtigen Ordner. Bitte direkt neben der bestehenden .htaccess und den WordPress-Ordnern hochladen.');
        }
        $lock = fopen(__FILE__, 'rb');
        if (!$lock || !flock($lock, LOCK_EX | LOCK_NB)) throw new RuntimeException('Die Vorbereitung läuft bereits. Bitte kurz warten.');
        if (is_link($zipPath) || !is_file($zipPath)) throw new RuntimeException('Die Datei Aurelia-Website-17.zip fehlt im selben Ordner.');
        if (!hash_equals(RELEASE_HASH, hash_file('sha256', $zipPath))) {
            throw new RuntimeException('Die hochgeladene ZIP stimmt nicht mit der geprüften Version 17 überein. Bitte die aktuelle ZIP aus dem Chat erneut herunterladen und hochladen.');
        }
        if (!emptyTarget($target)) throw new RuntimeException('Aurelia-v17 enthält bereits Dateien oder ist eine Verknüpfung. Die Hilfe überschreibt keine bestehende Installation. Bitte die Ordneransicht im Chat zeigen.');
        if (!is_writable($base)) throw new RuntimeException('STRATO erlaubt hier gerade keine neuen Dateien. Bitte diese Meldung im Chat zeigen.');

        $zip = null;
        $phar = null;
        if (class_exists('ZipArchive')) {
            $zip = new ZipArchive();
            if ($zip->open($zipPath, ZipArchive::RDONLY) !== true) throw new RuntimeException('Die ZIP-Datei lässt sich nicht öffnen.');
            $reader = $zip;
        } elseif (class_exists('PharData')) {
            $phar = new PharData($zipPath);
            $reader = $phar;
        } else {
            throw new RuntimeException('Die PHP-Funktionen zum Entpacken sind bei diesem STRATO-Zugang nicht verfügbar. Bitte diese Meldung im Chat zeigen.');
        }
        $stage = $base . '/.aurelia-v17-vorbereitung-' . bin2hex(random_bytes(16));
        ensureDirectory($stage);
        $guard = $stage . '/.htaccess';
        $createdFiles[] = $guard;
        if (file_put_contents($guard, "Require all denied\n", LOCK_EX) === false) throw new RuntimeException('Der Vorbereitungsordner konnte nicht geschützt werden.');
        $initialConfig = hash_file('sha256', $base . '/.htaccess');
        foreach ($manifest as $relative => $expected) {
            if (!preg_match('~\A(?:[A-Za-z0-9_-]+/)*[A-Za-z0-9][A-Za-z0-9_.-]*\z~D', $relative) || strpos($relative, '..') !== false) {
                throw new RuntimeException('Ungültiger Dateipfad in der vorbereiteten Version.');
            }
            $entry = TARGET_NAME . '/' . $relative;
            $data = $zip ? $zip->getFromName($entry) : $phar[$entry]->getContent();
            if (!is_string($data) || strlen($data) !== $expected[0] || !hash_equals($expected[1], hash('sha256', $data))) {
                throw new RuntimeException('Eine Datei in der ZIP hat die Prüfung nicht bestanden. Es wird keine neue Version übernommen.');
            }
            $destination = $stage . '/' . $relative;
            ensureDirectory(dirname($destination));
            $createdFiles[] = $destination;
            if (file_put_contents($destination, $data, LOCK_EX) !== $expected[0] || !chmod($destination, 0644)) throw new RuntimeException('Eine Datei konnte nicht vollständig gespeichert werden.');
            unset($data);
        }
        if ($zip) $zip->close();
        $reader = null;
        unset($zip, $phar);
        foreach ($manifest as $relative => $expected) {
            if (!hash_equals($expected[1], hash_file('sha256', $stage . '/' . $relative))) throw new RuntimeException('Eine gespeicherte Datei hat die Abschlussprüfung nicht bestanden.');
        }
        if (!hash_equals($initialConfig, hash_file('sha256', $base . '/.htaccess'))) throw new RuntimeException('Die Serverkonfiguration hat sich während der Vorbereitung geändert. Bitte erst im Chat prüfen.');
        if (!emptyTarget($target)) throw new RuntimeException('Im Zielordner wurden zwischenzeitlich Dateien angelegt. Die vorhandenen Dateien bleiben erhalten.');
        if (!unlink($guard)) throw new RuntimeException('Der vorbereitete Ordner konnte nicht freigegeben werden.');
        if (is_dir($target) && !rmdir($target)) throw new RuntimeException('Der leere Zielordner konnte nicht ersetzt werden.');
        if (!rename($stage, $target)) throw new RuntimeException('Der vollständig vorbereitete Ordner konnte nicht an seine Zielstelle verschoben werden.');
        $stage = null;
        $createdFiles = [];
        $createdDirs = [];
        $success = true;
        if (!@unlink($zipPath)) $cleanupNotes[] = ZIP_NAME;
        if (!@unlink(__FILE__)) $cleanupNotes[] = basename(__FILE__);
    }
} catch (Throwable $e) {
    if ($reader instanceof ZipArchive) @$reader->close();
    $reader = null;
    foreach (array_reverse($createdFiles) as $path) {
        if (is_file($path) && !is_link($path)) @unlink($path);
    }
    foreach (array_reverse($createdDirs) as $path) {
        if (is_dir($path) && !is_link($path)) @rmdir($path);
    }
    if (http_response_code() < 400) http_response_code(422);
    $error = $e instanceof RuntimeException ? $e->getMessage() : 'Die Vorbereitung konnte nicht abgeschlossen werden. Bitte diese Meldung im Chat zeigen.';
}
if (is_resource($lock)) { flock($lock, LOCK_UN); fclose($lock); }
function esc(string $value): string { return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); }
?>
<!doctype html>
<html lang="de"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><meta name="robots" content="noindex,nofollow"><title>Aurelia · Version 17 vorbereiten</title>
<style>body{margin:0;background:#f3f4f6;color:#10202f;font:17px/1.6 system-ui,sans-serif}main{max-width:640px;margin:8vh auto;padding:34px;background:white;border-radius:18px;box-shadow:0 18px 60px #10202f10}small{letter-spacing:.12em;text-transform:uppercase;color:#65716c}h1{font:42px/1.15 Georgia,serif}button{font:inherit;color:white;background:#10202f;border:0;border-radius:8px;padding:15px 22px;cursor:pointer}button:disabled{opacity:.4;cursor:default}.error{background:#fff2ed;padding:18px;border-left:4px solid #a44027}.ok{background:#edf7ee;padding:18px;border-left:4px solid #2c693a}input{box-sizing:border-box;width:100%;font:inherit;padding:10px;margin:10px 0}code{word-break:break-word}@media(max-width:700px){main{margin:20px 14px;padding:25px}h1{font-size:34px}}</style></head><body><main><small>Aurelia Apartments</small>
<?php if ($success): ?>
<h1>Version 17 ist vorbereitet.</h1><p class="ok">Alle <?= count($manifest) ?> Website-Dateien wurden geprüft und im Ordner <strong>Aurelia-v17</strong> gespeichert.</p>
<p>Die bisherige Website läuft weiter. Als Nächstes richten wir im Chat die Umschaltung ein.</p>
<?php if ($cleanupNotes): ?><p>Bitte diese Hilfsdateien anschließend im STRATO-Dateimanager löschen: <strong><?= esc(implode(', ', $cleanupNotes)) ?></strong>.</p><?php else: ?><p>Die ZIP und diese Entpackhilfe wurden nach erfolgreicher Vorbereitung automatisch entfernt.</p><?php endif; ?>
<?php else: ?>
<h1>Neue Website vorbereiten</h1><p>Die Hilfe entpackt die geprüfte Version 17 in <strong>Aurelia-v17</strong>. Die bestehende Website und ihre Serverkonfiguration bleiben unverändert.</p>
<?php if ($error): ?><p class="error"><?= esc($error) ?></p><?php endif; ?>
<form method="post" action="<?= esc(basename($_SERVER['SCRIPT_NAME'] ?? 'aurelia-v17-entpacken.php')) ?>" autocomplete="off">
<input id="code" type="hidden" name="code" value="<?= $validCode ? esc($code) : '' ?>">
<p id="missing">Bitte den vollständigen Freigabelink aus dem Chat öffnen.</p><button id="install" type="submit" disabled>Version 17 entpacken und prüfen</button>
<noscript><p>JavaScript ist deaktiviert. Den Freigabecode aus dem Teil nach # im Link einfügen:</p><input name="code" aria-label="Freigabecode"><button type="submit">Entpacken und prüfen</button></noscript>
</form>
<script nonce="<?= esc($nonce) ?>">const field=document.getElementById('code');function activate(){const fragment=location.hash.slice(1);if(/^[a-f0-9]{64}$/.test(fragment))field.value=fragment;if(location.hash)history.replaceState(null,'',location.pathname);if(/^[a-f0-9]{64}$/.test(field.value)){document.getElementById('missing').hidden=true;document.getElementById('install').disabled=false}}window.addEventListener('hashchange',activate);activate();document.querySelector('form').addEventListener('submit',()=>{const b=document.getElementById('install');b.disabled=true;b.textContent='Wird entpackt und geprüft …'})</script>
<?php endif; ?></main></body></html>
