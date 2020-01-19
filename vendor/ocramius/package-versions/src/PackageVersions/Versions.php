<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = '__root__';
    public const VERSIONS          = array (
  'doctrine/annotations' => 'v1.8.0@904dca4eb10715b92569fbcd79e201d5c349b6bc',
  'doctrine/cache' => '1.10.0@382e7f4db9a12dc6c19431743a2b096041bcdd62',
  'doctrine/collections' => '1.6.4@6b1e4b2b66f6d6e49983cebfe23a21b7ccc5b0d7',
  'doctrine/common' => '2.12.0@2053eafdf60c2172ee1373d1b9289ba1db7f1fc6',
  'doctrine/dbal' => 'v2.9.3@7345cd59edfa2036eb0fa4264b77ae2576842035',
  'doctrine/doctrine-bundle' => '2.0.7@6926771140ee87a823c3b2c72602de9dda4490d3',
  'doctrine/doctrine-migrations-bundle' => '2.1.2@856437e8de96a70233e1f0cc2352fc8dd15a899d',
  'doctrine/event-manager' => '1.1.0@629572819973f13486371cb611386eb17851e85c',
  'doctrine/inflector' => '1.3.1@ec3a55242203ffa6a4b27c58176da97ff0a7aec1',
  'doctrine/instantiator' => '1.3.0@ae466f726242e637cebdd526a7d991b9433bacf1',
  'doctrine/lexer' => '1.0.2@1febd6c3ef84253d7c815bed85fc622ad207a9f8',
  'doctrine/migrations' => '2.2.1@a3987131febeb0e9acb3c47ab0df0af004588934',
  'doctrine/orm' => 'v2.7.0@4d763ca4c925f647b248b9fa01b5f47aa3685d62',
  'doctrine/persistence' => '1.3.6@5dd3ac5eebef2d0b074daa4440bb18f93132dee4',
  'doctrine/reflection' => 'v1.1.0@bc420ead87fdfe08c03ecc3549db603a45b06d4c',
  'easycorp/easy-log-handler' => 'v1.0.9@224e1dfcf9455aceee89cd0af306ac097167fac1',
  'egulias/email-validator' => '2.1.14@c4b8d12921999d8a561004371701dbc2e05b5ece',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'monolog/monolog' => '1.25.3@fa82921994db851a8becaf3787a9e73c5976b6f1',
  'ocramius/package-versions' => '1.4.2@44af6f3a2e2e04f2af46bcb302ad9600cba41c7d',
  'ocramius/proxy-manager' => '2.1.1@e18ac876b2e4819c76349de8f78ccc8ef1554cd7',
  'phpdocumentor/reflection-common' => '2.0.0@63a995caa1ca9e5590304cd845c15ad6d482a62a',
  'phpdocumentor/reflection-docblock' => '4.3.4@da3fd972d6bafd628114f7e7e036f45944b62e9c',
  'phpdocumentor/type-resolver' => '1.0.1@2e32a6d48972b2c1976ed5d8967145b6cec4a4a9',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.2@446d54b4cb6bf489fc9d75f55843658e6f25d801',
  'sensio/framework-extra-bundle' => 'v5.3.1@5f75c4658b03301cba17baa15a840b57b72b4262',
  'swiftmailer/swiftmailer' => 'v6.2.3@149cfdf118b169f7840bbe3ef0d4bc795d1780c9',
  'symfony/asset' => 'v4.4.2@7ec5fc653dab63d7519a6f411982ee224a696d66',
  'symfony/cache' => 'v4.4.2@6af64bab165e588300378a87bcd2df3c7c31c144',
  'symfony/config' => 'v4.4.2@6911d432edd5b50822986604fd5a5be3af856d30',
  'symfony/console' => 'v4.4.2@82437719dab1e6bdd28726af14cb345c2ec816d0',
  'symfony/contracts' => 'v1.1.8@f51bca9de06b7a25b19a4155da7bebad099a5def',
  'symfony/debug' => 'v4.4.2@5c4c1db977dc70bb3250e1308d3e8c6341aa38f5',
  'symfony/dependency-injection' => 'v4.4.2@79b0358207a3571cc3af02a57d0321927921f539',
  'symfony/doctrine-bridge' => 'v4.4.2@3e40beb8dbb06d2967e37938f4c3f20f425137a6',
  'symfony/dotenv' => 'v4.4.2@c387ab37887f997162a8579d335b38f328d27859',
  'symfony/error-handler' => 'v4.4.2@6d7d7712a6ff5215ec26215672293b154f1db8c1',
  'symfony/event-dispatcher' => 'v4.4.2@b3c3068a72623287550fe20b84a2b01dcba2686f',
  'symfony/expression-language' => 'v4.4.2@539e7ff0b635c8b90d8127bc929da781a96eab2d',
  'symfony/filesystem' => 'v4.4.2@40c2606131d56eff6f193b6e2ceb92414653b591',
  'symfony/finder' => 'v4.4.2@ce8743441da64c41e2a667b8eb66070444ed911e',
  'symfony/flex' => 'v1.6.0@952f45d1c5077e658cb16a61d11603bee873f968',
  'symfony/form' => 'v4.4.2@7ed4441a347fe33299908a9aa24ff8a556848a16',
  'symfony/framework-bundle' => 'v4.4.2@c80526b4c22f6ddc23080225bf276f094d2c398e',
  'symfony/http-foundation' => 'v4.4.2@fcae1cff5b57b2a9c3aabefeb1527678705ddb62',
  'symfony/http-kernel' => 'v4.4.2@fe310d2e95cd4c356836c8ecb0895a46d97fede2',
  'symfony/inflector' => 'v4.4.2@98581481d9ddabe4db3a66e10202fe1fa08d791b',
  'symfony/intl' => 'v4.4.2@727fed5372915b5ea5e8177070f5e7e547063f24',
  'symfony/mime' => 'v4.4.2@010cc488e56cafe5f7494dea70aea93100c234df',
  'symfony/monolog-bridge' => 'v4.4.2@da3718c84f29d4b1ef607e2a13c496186a5975c1',
  'symfony/monolog-bundle' => 'v3.5.0@dd80460fcfe1fa2050a7103ad818e9d0686ce6fd',
  'symfony/options-resolver' => 'v4.4.2@2be23e63f33de16b49294ea6581f462932a77e2f',
  'symfony/orm-pack' => 'v1.0.7@c57f5e05232ca40626eb9fa52a32bc8565e9231c',
  'symfony/polyfill-intl-icu' => 'v1.13.1@b3dffd68afa61ca70f2327f2dd9bbeb6aa53d70b',
  'symfony/polyfill-intl-idn' => 'v1.13.1@6f9c239e61e1b0c9229a28ff89a812dc449c3d46',
  'symfony/polyfill-mbstring' => 'v1.13.1@7b4aab9743c30be783b73de055d24a39cf4b954f',
  'symfony/polyfill-php72' => 'v1.13.1@66fea50f6cb37a35eea048d75a7d99a45b586038',
  'symfony/polyfill-php73' => 'v1.13.1@4b0e2222c55a25b4541305a053013d5647d3a25f',
  'symfony/process' => 'v4.4.2@b84501ad50adb72a94fb460a5b5c91f693e99c9b',
  'symfony/property-access' => 'v4.4.2@055fe3134f8f301ff44af314d83463b858ea6413',
  'symfony/property-info' => 'v4.4.2@8afd280f159697177e48eefa89efd4db60a57665',
  'symfony/routing' => 'v4.4.2@628bcafae1b2043969378dcfbf9c196539a38722',
  'symfony/security-bundle' => 'v4.4.2@9bf16458fee90bd62c240625dd94e335bad91885',
  'symfony/security-core' => 'v4.4.2@52709ee2aafd13d777253d510d96fbf2ccc5a578',
  'symfony/security-csrf' => 'v4.4.2@aeed1a2315019b5a090f5ad34c01f1935ea9b757',
  'symfony/security-guard' => 'v4.4.2@203a81f9fcfc3bbaba7f1103c261a30d2648611b',
  'symfony/security-http' => 'v4.4.2@8ab510f214fd9c37769378b5036da58d444fe142',
  'symfony/serializer' => 'v4.4.2@e5bc3f6dee44dc06e7e640cce4baa741b73ecb6e',
  'symfony/serializer-pack' => 'v1.0.2@c5f18ba4ff989a42d7d140b7f85406e77cd8c4b2',
  'symfony/stopwatch' => 'v4.4.2@5745b514fc56ae1907c6b8ed74f94f90f64694e9',
  'symfony/swiftmailer-bundle' => 'v3.4.0@553d2474288349faed873da8ab7c1551a00d26ae',
  'symfony/translation' => 'v4.4.2@f7669f48a9633bf8139bc026c755e894b7206677',
  'symfony/twig-bridge' => 'v4.4.2@936cf6f5b973377345e8ac43870987ef8e747ce3',
  'symfony/twig-bundle' => 'v4.4.2@a6e7bd9731256a55b2270c1283de8bc3bda06e8f',
  'symfony/validator' => 'v4.4.2@79eb122bed116c1fbe0769698d5b46acce1860a2',
  'symfony/var-dumper' => 'v4.4.2@be330f919bdb395d1e0c3f2bfb8948512d6bdd99',
  'symfony/var-exporter' => 'v4.4.2@e566070effe60b8d16b99e958cdbd92aa2e470cb',
  'symfony/web-link' => 'v4.4.2@bc6432b92681b2f28ced2f3bbcf051e75eea569c',
  'symfony/yaml' => 'v4.4.2@a08832b974dd5fafe3085a66d41fe4c84bb2628c',
  'twig/twig' => 'v2.12.3@97b6311585cae66a26833b14b33785f5797f7d39',
  'webmozart/assert' => '1.6.0@573381c0a64f155a0d9a23f4b0c797194805b925',
  'zendframework/zend-code' => '3.4.1@268040548f92c2bfcba164421c1add2ba43abaaa',
  'zendframework/zend-eventmanager' => '3.2.1@a5e2583a211f73604691586b8406ff7296a946dd',
  'fig/link-util' => '1.1.0@47f55860678a9e202206047bc02767556d298106',
  'nikic/php-parser' => 'v4.3.0@9a9981c347c5c49d6dfe5cf826bb882b824080dc',
  'symfony/browser-kit' => 'v4.4.2@e19e465c055137938afd40cfddd687e7511bbbf0',
  'symfony/css-selector' => 'v4.4.2@64acec7e0d67125e9f4656c68d4a38a42ab5a0b7',
  'symfony/debug-bundle' => 'v4.4.2@2255db767f7f5bf6740e9f3b4f92199f6890ca2e',
  'symfony/debug-pack' => 'v1.0.7@09a4a1e9bf2465987d4f79db0ad6c11cc632bc79',
  'symfony/dom-crawler' => 'v4.4.2@36bbcab9369fc2f583220890efd43bf262d563fd',
  'symfony/maker-bundle' => 'v1.14.3@c864e7f9b8d1e1f5f60acc3beda11299f637aded',
  'symfony/phpunit-bridge' => 'v5.0.2@010cf42a81e7bec744edfdef5f76d6394f4906a7',
  'symfony/profiler-pack' => 'v1.0.4@99c4370632c2a59bb0444852f92140074ef02209',
  'symfony/test-pack' => 'v1.0.6@ff87e800a67d06c423389f77b8209bc9dc469def',
  'symfony/web-profiler-bundle' => 'v4.4.2@92453ec17c365c561d9e65b06050b9e2a65e9306',
  'symfony/web-server-bundle' => 'v4.4.2@301dad4563b21a791a796da9a736408215b9e9fc',
  'paragonie/random_compat' => '2.*@d12971280367f3e490da41ac0d8e49b1872df1b2',
  'symfony/polyfill-ctype' => '*@d12971280367f3e490da41ac0d8e49b1872df1b2',
  'symfony/polyfill-iconv' => '*@d12971280367f3e490da41ac0d8e49b1872df1b2',
  'symfony/polyfill-php71' => '*@d12971280367f3e490da41ac0d8e49b1872df1b2',
  'symfony/polyfill-php70' => '*@d12971280367f3e490da41ac0d8e49b1872df1b2',
  'symfony/polyfill-php56' => '*@d12971280367f3e490da41ac0d8e49b1872df1b2',
  '__root__' => 'dev-master@d12971280367f3e490da41ac0d8e49b1872df1b2',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
