<?php
/* Aurelia v18: extracts one verified, fixed static release into a new folder.
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

const RELEASE_HASH = '0ab05f304b888cb63cffc0adf5f93ec9e6229f413a8cadf94449944e8cd48e1a';
const CODE_HASH = '9117cb41e5e91205ff52620a3bcfdd17046fda62d0526bd9152182f089f08e89';
const ZIP_NAME = 'Aurelia-Website-18.zip';
const TARGET_NAME = 'Aurelia-v18';
$manifest = json_decode('{"404/index.html":[9203,"50e83342a86da654023391d378f5a2763a708196557504b515741ee8d47c23d9"],"404.html":[9203,"50e83342a86da654023391d378f5a2763a708196557504b515741ee8d47c23d9"],"THIRD-PARTY-NOTICES.txt":[672,"5fd865c1a5fbedcd3747eaff8f5bea0a874d57a3529e2ab222390ff845a015e3"],"anfrage/index.html":[12810,"ca22be3872ce3eaf71379897571e72a9dfbe402eabb01d72df61557ae66404f4"],"apartments/antonius/index.html":[32204,"6d7f306b0c2085b897708499469d3b5d1ec2568f21decac5c5ee8c9c34d5c270"],"apartments/brutus/index.html":[26569,"6406447e5f29b92745fdfa47efcef04fbc8591d44fc5eb46d5c5796423296b08"],"apartments/index.html":[44869,"7a2fab53165e65bd9f39126dc9c206a3908a0993ac801f669e63bbe9e5960ae6"],"apartments/kurzzeit/index.html":[39169,"c798486bd8fa3760df3d007ddf35168d3bc9a6b7412a5ae9bd54e392260c5ea6"],"apartments/leandros/index.html":[32902,"95858e4884ada325cf81bfe86e7d2d7688510005143528af6210b5c153495605"],"apartments/myhappyplace/index.html":[33262,"4b4887a2a0c958d2693f73f1979f805f34042e2438cd70010dd4450791314629"],"apartments/myhappyplace-two/index.html":[33084,"8d4a1af2a404a8b3cbc24e5d2b6f94edeb9ee12a946bc3482381e6fef986ebd4"],"apartments/wohnen-auf-zeit/index.html":[40888,"eea5bb39f25af2fd84949162160c380ac59c0641a3f895b9abd6358a438b9efc"],"assets/04a33af71467d7797832.jpg":[503758,"04a33af71467d77978322b1e9b7b3e743cf81171be45996d713013dbf138a175"],"assets/065c1724536053a3425f.webp":[158882,"065c1724536053a3425fac0d5caee2cdbb37a0e56507b10f0f3dcf8f612e5638"],"assets/0a5f7964213d7a1829bb.jpg":[152892,"0a5f7964213d7a1829bba4691ed2ab0a4c59d620287e9690931e8d71a96bc723"],"assets/0b3505cd6404c46e0810.webp":[371506,"0b3505cd6404c46e081094aace775b03154237f8a6d6ad16881136b60faae138"],"assets/0c7ddf01f26c07e7a85b.jpg":[325250,"0c7ddf01f26c07e7a85b20ea8d7800ebb096d5b92f371f1ea7dc5a0140d47019"],"assets/0ef213e8be910d9af9fd.webp":[84844,"0ef213e8be910d9af9fd72b07bcee0096e6c825b0f860220ffa4d414f190ae6c"],"assets/0f1d021997365e77fb99.webp":[240974,"0f1d021997365e77fb99b54ccef59e127117b586aabfa487fbf3a80bf33761af"],"assets/0f60219698ba96bf34f3.webp":[390172,"0f60219698ba96bf34f37185a1409d137ba145524d99bbb02f8a59082018b58f"],"assets/136d50367100806cf3db.webp":[379222,"136d50367100806cf3dba92066076bf77b5514598e7da61a5e1ff0ba865e32bb"],"assets/1e47dce7db48ea1ee2c1.webp":[175064,"1e47dce7db48ea1ee2c133f6980b671b6b8fa78618e877bb108d941f20cb9179"],"assets/1f8f4b0a8cb8aa6299ef.jpg":[353027,"1f8f4b0a8cb8aa6299efc5b190eef77680d7dbdd6c7a293ac17852158a2dc585"],"assets/21806f28bbac453dbd94.jpg":[364575,"21806f28bbac453dbd9484d49fa394ffba15f213cb3baf79e98950dea12f4a1b"],"assets/22da7b450d5b0b0d0cd8.webp":[218172,"22da7b450d5b0b0d0cd8bf73e501d634f13da38248243b0928f711e81a50de8a"],"assets/231394135a35664380dc.js":[294519,"231394135a35664380dc82f4de324464b5bfe5a95f1fc89a5f93ee870ea86b2c"],"assets/235de02994b07299ae8a.webp":[180674,"235de02994b07299ae8acc6fb86218bc1747b4206a315353950712ae1fe08a58"],"assets/27ea0f049c57a792f5c0.webp":[219264,"27ea0f049c57a792f5c0e32e7f8b7f9a04b9ad29181e0dad57670d756dd0fb4f"],"assets/286994b79536e2e0d023.js":[295204,"286994b79536e2e0d023c24ca325feaa5421273e6052302d2bbb333d5ff0ad5b"],"assets/2ab5672d7ad1436a910f.webp":[240016,"2ab5672d7ad1436a910f0d3c996d275bd7e12394593c93ef434308749c8a93ed"],"assets/2ffe73224f6124042c3a.webp":[111766,"2ffe73224f6124042c3a96e9931df99df633c01d73000bcbeb8d649d5b79bb3f"],"assets/316ca57c4dd97dd9b670.webp":[71526,"316ca57c4dd97dd9b670b237e61fd799340bb33a739327446760d4af8056b276"],"assets/32389658d4f1f9664082.webp":[43360,"32389658d4f1f9664082704fa1c185a2b36cedf64a94a9c53e59cb4e0af31732"],"assets/35aafbd1687ff79fe971.webp":[190878,"35aafbd1687ff79fe9717f6f5f04721bddbb1be98016eb0ae4049ac55d72e85d"],"assets/35adae45724dc2ac1e96.webp":[205238,"35adae45724dc2ac1e96a86c04f068198e73f9ec011f00ced69ca8c5e8a14226"],"assets/3ae11c49db0455a3cc33.ttf":[164700,"3ae11c49db0455a3cc33e37d380f20fdb8c7f8b41dc07625c177e3d87a9d6ae6"],"assets/46fa5eed6acd45a02a6e.jpg":[301718,"46fa5eed6acd45a02a6e8d8c393d8ca1efee0870815c8c4b55ad315d4a8b8e6e"],"assets/4784c4a133feb2106857.jpg":[345024,"4784c4a133feb2106857e6c6c10030159021a1bee6df53c6490506e7e79e0fa0"],"assets/48cb7da712214a43e035.webp":[54020,"48cb7da712214a43e035f36b1520bef4698f87485b2aa0205b65f4bbad25590b"],"assets/4b22eb5b5238683a9872.jpg":[317865,"4b22eb5b5238683a9872f6f5abf92f5550930ace1497c7ce035cb6b638f129b9"],"assets/4d08c2ed75b234c17c72.webp":[571254,"4d08c2ed75b234c17c723e11187a87b12062dd6822fcb679e4787a6a766ce075"],"assets/4d676d7ee8ce25931a66.webp":[172012,"4d676d7ee8ce25931a6625839e2bb7bd93821f98d0280473652954414c11e50e"],"assets/4dcc541459c28c07b0ca.webp":[387352,"4dcc541459c28c07b0caaee642e89115fed6d5cf2eb6e3b153cbaf2eb6e15816"],"assets/4e8ebcf785c2650af27d.png":[2966258,"4e8ebcf785c2650af27d0bc2bcea19bc52fe8a55d652bc99ec9692278b93d93b"],"assets/501b784ba37874021d72.webp":[163254,"501b784ba37874021d72ed896fe31b0d469d1c01624481804378bf8b731cf79a"],"assets/55af73ad920e43e1cb74.webp":[103570,"55af73ad920e43e1cb74b5f4cb89c213156d9c5303d44836720b258b368ca24b"],"assets/588f22b695d9b10a9ec7.webp":[76628,"588f22b695d9b10a9ec7638c8dc2f9b04734f7510612533336094d216260546e"],"assets/5aacb448bf4541f7c66c.webp":[84904,"5aacb448bf4541f7c66cbbc50bfe2c818fe88db77621006636cd153514bcf1a6"],"assets/63e60b8c6a80a70555f9.jpg":[340625,"63e60b8c6a80a70555f97cfb191d1aa8dccd0edacd99738610061a03cc1d8710"],"assets/640e1acfa7a56a6df8d2.webp":[159824,"640e1acfa7a56a6df8d26243343cd88336f2510599942225578b86ff3bec649e"],"assets/66bcf58291e46114524f.webp":[202462,"66bcf58291e46114524f4461a451a3d86305d4fdc18e6bde0e78c8a902c7a055"],"assets/671eb6f0fa277eae9a6e.webp":[155404,"671eb6f0fa277eae9a6e0dcb89c01f323b98bf855ab9120f12bd1f1f901a0f24"],"assets/6e9ccd4b5756ce5f4f5f.jpg":[278220,"6e9ccd4b5756ce5f4f5f4db14b7270526c43dec0d383759e1317bf79b191532c"],"assets/6eef453aab2eda2fadb8.webp":[155156,"6eef453aab2eda2fadb8721e5ebb1c39bf0c5b3afed1a94f155dcd714758caf0"],"assets/70f4223bb053ef36d92a.webp":[225230,"70f4223bb053ef36d92a246f9e7e5640dcbea798cb44dfb69c27a06cbe06ff0d"],"assets/758a299aad4b13b6b7f4.css":[87452,"758a299aad4b13b6b7f4d9ce22ada4e23fcb717fe833ca9f6f19fdc851e5eeb8"],"assets/7bf08789610ee3608ddb.webp":[144020,"7bf08789610ee3608ddbf5b5a8f588db8f966239f73ff2d327508e8db1d2a76e"],"assets/80b8831881b62e39811c.webp":[182388,"80b8831881b62e39811cea6f977e5881ce5533da671e40fb39ef014a8bd0d429"],"assets/85e9ec500ffb09d22319.webp":[106534,"85e9ec500ffb09d223192f4406f22fffa95143e67489173dace92e04f33d81f6"],"assets/88e63a8002ddc270d253.webp":[200746,"88e63a8002ddc270d2530c00de6877f469536391197b46d139ae709168079148"],"assets/8a8f79aeee60493d5cb0.webp":[273782,"8a8f79aeee60493d5cb0b8b426b3bc2abef9e415a65e4a9fbd0f68feeecec4d7"],"assets/900354706610fafbafa3.webp":[173426,"900354706610fafbafa3ad1f679bbd4e64cfb4a784bc0a78a944d4f25d646681"],"assets/9057af739b46d0224413.webp":[199022,"9057af739b46d02244139c79ea8f12bc3aede527f16bb8da324a73325e03d463"],"assets/94d6f7e8a9c75ae40028.webp":[387838,"94d6f7e8a9c75ae40028d98384e49b3260a781bd0acfc71dfe1258b300ae795f"],"assets/9cab1d0b07c2c7e0da25.webp":[198126,"9cab1d0b07c2c7e0da251354b9e40949eb04b2a76cb4edea1849989534b221d0"],"assets/a3d49f41d84ed6a0e0c5.webp":[117242,"a3d49f41d84ed6a0e0c56e7dddb82d9ee51a08aeebd43149bbded617c296d3a4"],"assets/a3df16fdba94ef77bf9d.css":[86613,"a3df16fdba94ef77bf9d736e4700bcfd69d278fb1aba72afbf14cbb4424debcc"],"assets/aefb447fe66544b74c92.webp":[193330,"aefb447fe66544b74c92ff7f70052f647c9d02ac3b5550568889bf603755e87b"],"assets/apple-touch-icon.png":[5098,"337376c83d196f6f3c8530454e1138b0b4959f8512aa52217918d127682a4376"],"assets/aurelia-favicon.svg":[283,"541e74044702a7b288417249623e2e41a19f5b75268668ea73a216daf422e86f"],"assets/aurelia-schluesseluebergabe.webp":[136240,"79bcd9da8d2385c51f2dac1c192d1356d725812576b41531e6736127471c6c2d"],"assets/b2c26e543764a4c02ebe.webp":[386614,"b2c26e543764a4c02ebea1883f65b2f70c9415daf40258d639676234193833d1"],"assets/bb32d6b7afd18cb9bf59.webp":[81058,"bb32d6b7afd18cb9bf59c9bbb6c024b95dfc0266219d5ad5b0a20deb1bfc4f87"],"assets/bcb81f376f1c3892c702.ttf":[400468,"bcb81f376f1c3892c7026dabf2beafbd1a7ee8ae95d132ee7d4ff7d7c3988261"],"assets/bdca73d8053b62c98dfb.webp":[342360,"bdca73d8053b62c98dfbb585af74c003b718872a995c54457d1d6c0c437bc591"],"assets/c393c91633f840457ac0.webp":[120444,"c393c91633f840457ac095261162dc97db434ebe1faeb3a0d272579569bc3271"],"assets/c6703c6fe4be3fac70b5.webp":[173408,"c6703c6fe4be3fac70b5d88167edc7386b94f4812d465ca3591a98b2cacb98ea"],"assets/c7aa80f3b1ac2b943046.webp":[502324,"c7aa80f3b1ac2b943046cb8fd2d330ec6edfe286403346f11db468a65fb7d556"],"assets/ca3a0fefc61b4e1756f0.webp":[122522,"ca3a0fefc61b4e1756f08a4c286bd0186ed86a652de130a8c0bd95e5b9e62bec"],"assets/ce5201d8012cd3d711e5.svg":[380,"ce5201d8012cd3d711e509fb8337b76a0979c3b716eba5b6ded108684aa6254b"],"assets/cf935ba29ad15df4871a.webp":[145366,"cf935ba29ad15df4871a7d0bebdfb86857db3de4c697b1ffeef569ae7a1cf4b2"],"assets/d11598674f06e9dfb610.jpg":[538410,"d11598674f06e9dfb61021e7a5fc4aad83906cfd03aa18cacb10464b06df005f"],"assets/de999cb6a4badb7e1921.webp":[116964,"de999cb6a4badb7e19211e4cf7a238d5675ff6ef58c57c102a130d9ffd2434fb"],"assets/e339d77a724a22655a1d.webp":[88456,"e339d77a724a22655a1d0d7cd924df5d615b6438ade3ab404dc886f0b8f81853"],"assets/e3c51d2eef495335114b.png":[2249148,"e3c51d2eef495335114bd2fd4e2d4c9a96a9383b95ae6c0dd73fe047a47bc2dc"],"assets/e502c4c8203844fb4130.webp":[197504,"e502c4c8203844fb41307020cc449388f3db5fe9329399d6403be76d898e92c4"],"assets/ea9a591adf48e8c4807b.webp":[390816,"ea9a591adf48e8c4807b67f488eb11a5baf8536f9c7821d79b80f38e9c4e0855"],"assets/ebc6af8d1de2b2291970.webp":[254702,"ebc6af8d1de2b2291970f68c2a56fc1f93c4b476dc9f402adc4bcfbbf71832c1"],"assets/ee0e4d2f248cb732b6e6.webp":[271118,"ee0e4d2f248cb732b6e6cd5a8e6e5237d9465c9413b519116f4dfef337d72d4b"],"assets/f0e48bee8a45386f05d3.webp":[203810,"f0e48bee8a45386f05d36710b9fb9bd9efc1215855540d5fca8abdb9b4480299"],"assets/f32c5b7ea3ca6c5c394d.webp":[422628,"f32c5b7ea3ca6c5c394d5b4316af8bcf58cbf2d407c7d3abc7c365afaef96d8c"],"assets/favicon-96.png":[2615,"594e0c23540fb566eb3cf8136354ab446ee11dfe00b6af06ec534ba8a2fb1e8a"],"assets/fd61f2f166e0a7549899.webp":[231938,"fd61f2f166e0a7549899d1d25af34f30ee91a871c8aadfa767fbaa0eb71a3205"],"datenschutz/index.html":[15773,"f1df6981bb3339c07a9d6933e91302b6fabbfdad41665e8b23157594919fa423"],"eigentuemer/index.html":[26406,"666965eee557dbfff560cb7ad73cd98d6d940ccc4669091370580d6568be4dd6"],"en/about/index.html":[18180,"f8c062d9c03b79807f3c6424eb20ee64a9d3ea11200a08ed1a4b24ea1af81f81"],"en/apartments/antonius/index.html":[31735,"abd42ea5ca0e8c3462fea97ee910acc5bf94019adb715e0c03e872b379939f98"],"en/apartments/brutus/index.html":[26054,"c2621d2452fafb436d9a4577d0d8af07bf4bf38bad2ba3090286e463a7ad19aa"],"en/apartments/index.html":[43790,"b5c3e92b6c6aea02374351e76649901bdeaef5e45b63a8fbb36ac3eda0d07ebb"],"en/apartments/leandros/index.html":[32322,"796290f9d4dc11af511a28014caf933e00b5f1bcf1fdfbf258f6567268655ca4"],"en/apartments/mid-term/index.html":[40045,"d6e21b86a08971eae9bb60829b076ef799430aee0c1fcebc883dbca566353552"],"en/apartments/myhappyplace/index.html":[32710,"6d1d5a70f0ba31a889a9f586d2e4b428daeabc79ec2f87a3db8031ef51d02759"],"en/apartments/myhappyplace-two/index.html":[32574,"a59ed8ec4dc425b3c23c4a5da42e3e6081d2b983ce4f843490d67028616bf377"],"en/apartments/short-term/index.html":[38445,"96c437aecc17c6c63ff82a8295eb71a5d214f695c068a4554c4d6b46e068d7e6"],"en/enquiry/index.html":[12921,"af669d11485171bfb2b397f908b19095d01ea2ed43b4bec953cbac03e104c74c"],"en/index.html":[30380,"ed56cbf714a0024e4dc6b2631d2153b73891eab0e0477c344a45644a03166508"],"en/legal-notice/index.html":[9967,"4bd3de705224a842ba7bc8056651909dabcd7acd9001fdce17ad9439372fa00e"],"en/owners/index.html":[25970,"dfd5048a177c77d17e930394642d8d05a80ab569838d380609a76b5fbdefaac4"],"en/privacy/index.html":[15046,"1a8fb08e832d16234e19de2ff83860bbfff5c8ba3445e47b4930c28bf031e025"],"en/refurbishment/index.html":[18448,"79b9331582e38dbfc40bec7cbdb245205f3cc9c7c1d627a975ec83fdb9da75bc"],"es/apartamentos/antonius/index.html":[32800,"10fc21ca8586e1a17edc6904d799b2777bbe2591eb0ebba4b2a2eb00d002ca05"],"es/apartamentos/brutus/index.html":[27202,"8a1e199a6cc58294882b03307265a4e7153bc6887d8590b5531bf12da062e5b0"],"es/apartamentos/corta-estancia/index.html":[39676,"f1e2ed91fd0c1b21fbd035a2c32ce72436f1e598931841655d1c7727d4f88838"],"es/apartamentos/index.html":[45264,"0fb56dbdf8531cf960e585c484b76a2ea6dfb45ed6c2c3505e303a9dc7f49bbe"],"es/apartamentos/leandros/index.html":[33283,"75b903b7415363c08d7ed8e8028b62ad70ac1a21c43443e08cc9d72b9963ceb3"],"es/apartamentos/myhappyplace/index.html":[33549,"df289c4156c107e1e579bd18a23ac8c590661c169b7df2b2cd1ac2b7e40f9f1b"],"es/apartamentos/myhappyplace-two/index.html":[33443,"453b9b38f807ff330c09299264eed5596bccb1ce7101cc2bfd8c4bd44bb85afe"],"es/apartamentos/temporada/index.html":[41337,"08d606f7ed464bb3fd87ff794ea2a4d57c92222ee087a90cc1b8cc15d35b3689"],"es/aviso-legal/index.html":[10335,"92effefc0d1d1dd7b6eff4e6c8245b634ccd6c64c1589ccf28d72f2b093110fe"],"es/consulta/index.html":[13394,"ef9eb93b6ed2737edf8fc03ec6ef79b9759ea532d4341d21fad5fa6be6b5ae0a"],"es/index.html":[31842,"e96a2c03cf900c47e13dad415ee5a55a1f3a6f5f68c778390fca82ead337aab9"],"es/privacidad/index.html":[16310,"5f1bd06d5cfc2ba5a797edd63d7f7814185ade8e748acedb778e8217ae576985"],"es/propietarios/index.html":[27297,"455bcf2014d6877fe0d6d39f6e769cea8c8a91fe27f1211fba1eec37987ae686"],"es/reformas/index.html":[19297,"a4e884d65add0aed4f8463f30e06e1256de1281e39ef0dad028fd2bf3a46acca"],"es/sobre-nosotros/index.html":[18723,"97a91888d600bb378bdbb85712910f38f73a191ed6fa2397cfddf1b0a0087406"],"impressum/index.html":[9916,"e4a771a4ca6c69c43c8ddc2596a4c1e50ee49b31245e002b505425d2d8a32ea4"],"index.html":[30999,"54a5ca89fb1d75d0c46d043733e63623f4d0339acd488f295e09fb91f7551a39"],"robots.txt":[192,"22563b8f00e529bdac7fd89f858dbe66e86911563507a4e7d60ddfedc49c8890"],"sanierung/index.html":[18792,"aed26bbcd76890f5d80dc1d30c57d515c1a8b5fff3545fd6d888227d9d159a94"],"sitemap.xml":[21336,"3cb63d55bf0004b21aabae62a66d62418e9dd73db2f95bacad823deb51c2fe37"],"ueber-uns/index.html":[18474,"3b67e4ae91a646e720697a8a9a1ae2a82fb0a0b99c59f73d098ec2b5b2e6027d"]}', true, 512, JSON_THROW_ON_ERROR);
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
        if (is_link($zipPath) || !is_file($zipPath)) throw new RuntimeException('Die Datei Aurelia-Website-18.zip fehlt im selben Ordner.');
        if (!hash_equals(RELEASE_HASH, hash_file('sha256', $zipPath))) {
            throw new RuntimeException('Die hochgeladene ZIP stimmt nicht mit der geprüften Version 18 überein. Bitte die aktuelle ZIP aus dem Chat erneut herunterladen und hochladen.');
        }
        if (!emptyTarget($target)) throw new RuntimeException('Aurelia-v18 enthält bereits Dateien oder ist eine Verknüpfung. Die Hilfe überschreibt keine bestehende Installation. Bitte die Ordneransicht im Chat zeigen.');
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
        $stage = $base . '/.aurelia-v18-vorbereitung-' . bin2hex(random_bytes(16));
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
<html lang="de"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><meta name="robots" content="noindex,nofollow"><title>Aurelia · Version 18 vorbereiten</title>
<style>body{margin:0;background:#f3f4f6;color:#10202f;font:17px/1.6 system-ui,sans-serif}main{max-width:640px;margin:8vh auto;padding:34px;background:white;border-radius:18px;box-shadow:0 18px 60px #10202f10}small{letter-spacing:.12em;text-transform:uppercase;color:#65716c}h1{font:42px/1.15 Georgia,serif}button{font:inherit;color:white;background:#10202f;border:0;border-radius:8px;padding:15px 22px;cursor:pointer}button:disabled{opacity:.4;cursor:default}.error{background:#fff2ed;padding:18px;border-left:4px solid #a44027}.ok{background:#edf7ee;padding:18px;border-left:4px solid #2c693a}input{box-sizing:border-box;width:100%;font:inherit;padding:10px;margin:10px 0}code{word-break:break-word}@media(max-width:700px){main{margin:20px 14px;padding:25px}h1{font-size:34px}}</style></head><body><main><small>Aurelia Apartments</small>
<?php if ($success): ?>
<h1>Version 18 ist vorbereitet.</h1><p class="ok">Alle <?= count($manifest) ?> Website-Dateien wurden geprüft und im Ordner <strong>Aurelia-v18</strong> gespeichert.</p>
<p>Die bisherige Website läuft weiter. Als Nächstes richten wir im Chat die Umschaltung ein.</p>
<?php if ($cleanupNotes): ?><p>Bitte diese Hilfsdateien anschließend im STRATO-Dateimanager löschen: <strong><?= esc(implode(', ', $cleanupNotes)) ?></strong>.</p><?php else: ?><p>Die ZIP und diese Entpackhilfe wurden nach erfolgreicher Vorbereitung automatisch entfernt.</p><?php endif; ?>
<?php else: ?>
<h1>Neue Website vorbereiten</h1><p>Die Hilfe entpackt die geprüfte Version 18 in <strong>Aurelia-v18</strong>. Die bestehende Website und ihre Serverkonfiguration bleiben unverändert.</p>
<?php if ($error): ?><p class="error"><?= esc($error) ?></p><?php endif; ?>
<form method="post" action="<?= esc(basename($_SERVER['SCRIPT_NAME'] ?? 'aurelia-v18-entpacken.php')) ?>" autocomplete="off">
<input id="code" type="hidden" name="code" value="<?= $validCode ? esc($code) : '' ?>">
<p id="missing">Bitte den vollständigen Freigabelink aus dem Chat öffnen.</p><button id="install" type="submit" disabled>Version 18 entpacken und prüfen</button>
<noscript><p>JavaScript ist deaktiviert. Den Freigabecode aus dem Teil nach # im Link einfügen:</p><input name="code" aria-label="Freigabecode"><button type="submit">Entpacken und prüfen</button></noscript>
</form>
<script nonce="<?= esc($nonce) ?>">const field=document.getElementById('code');function activate(){const fragment=location.hash.slice(1);if(/^[a-f0-9]{64}$/.test(fragment))field.value=fragment;if(location.hash)history.replaceState(null,'',location.pathname);if(/^[a-f0-9]{64}$/.test(field.value)){document.getElementById('missing').hidden=true;document.getElementById('install').disabled=false}}window.addEventListener('hashchange',activate);activate();document.querySelector('form').addEventListener('submit',()=>{const b=document.getElementById('install');b.disabled=true;b.textContent='Wird entpackt und geprüft …'})</script>
<?php endif; ?></main></body></html>
