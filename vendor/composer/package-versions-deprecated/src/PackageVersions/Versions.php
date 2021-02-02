<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99.1@7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
  'doctrine/annotations' => '1.11.1@ce77a7ba1770462cd705a91a151b6c3746f9c6ad',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '3.1.1@2afde5a9844126bc311cd5f548b5475e75f800d3',
  'doctrine/dbal' => '2.12.1@adce7a954a1c2f14f85e94aed90c8489af204086',
  'doctrine/doctrine-bundle' => '2.2.3@015fdd490074d4daa891e2d1df998dc35ba54924',
  'doctrine/doctrine-migrations-bundle' => '3.0.2@b8de89fe811e62f1dea8cf9aafda0ea45ca6f1f3',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.0.2@6195e836ffc2e1bd5ddea468fa46015fbea00b3a',
  'doctrine/orm' => '2.8.1@242cf1a33df1b8bc5e1b86c3ebd01db07851c833',
  'doctrine/persistence' => '2.1.0@9899c16934053880876b920a3b8b02ed2337ac1d',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'friendsofphp/proxy-manager-lts' => 'v1.0.3@121af47c9aee9c03031bdeca3fac0540f59aa5c3',
  'laminas/laminas-code' => '4.0.0@28a6d70ea8b8bca687d7163300e611ae33baf82a',
  'laminas/laminas-eventmanager' => '3.3.0@1940ccf30e058b2fd66f5a9d696f1b5e0027b082',
  'laminas/laminas-zendframework-bridge' => '1.1.1@6ede70583e101030bcace4dcddd648f760ddf642',
  'monolog/monolog' => '2.2.0@1cb1cde8e8dd0f70cc0fe51354a59acad9302084',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'sensio/framework-extra-bundle' => 'v6.0.0@503c29d3cb7cf477513ea6e8620dd2e98a930e5f',
  'symfony/apache-pack' => 'v1.0.1@3aa5818d73ad2551281fc58a75afd9ca82622e6c',
  'symfony/asset' => 'v5.2.2@54a42aa50f9359d1184bf7e954521b45ca3d5828',
  'symfony/cache' => 'v5.2.2@d6aed6c1bbf6f59e521f46437475a0ff4878d388',
  'symfony/cache-contracts' => 'v2.2.0@8034ca0b61d4dd967f3698aaa1da2507b631d0cb',
  'symfony/config' => 'v5.2.2@50e0e1314a3b2609d32b6a5a0d0fb5342494c4ab',
  'symfony/console' => 'v5.2.2@d62ec79478b55036f65e2602e282822b8eaaff0a',
  'symfony/dependency-injection' => 'v5.2.2@62f72187be689540385dce6c68a5d4c16f034139',
  'symfony/deprecation-contracts' => 'v2.2.0@5fa56b4074d1ae755beb55617ddafe6f5d78f665',
  'symfony/doctrine-bridge' => 'v5.2.2@793cfa617c55c68c492712b773e5e5262d1e97e0',
  'symfony/dotenv' => 'v5.2.2@783f12027c6b40ab0e93d6136d9f642d1d67cd6b',
  'symfony/error-handler' => 'v5.2.2@4fd4a377f7b7ec7c3f3b40346a1411e0a83f9d40',
  'symfony/event-dispatcher' => 'v5.2.2@4f9760f8074978ad82e2ce854dff79a71fe45367',
  'symfony/event-dispatcher-contracts' => 'v2.2.0@0ba7d54483095a198fa51781bc608d17e84dffa2',
  'symfony/expression-language' => 'v5.2.2@7bf30a4e29887110f8bd1882ccc82ee63c8a5133',
  'symfony/filesystem' => 'v5.2.2@262d033b57c73e8b59cd6e68a45c528318b15038',
  'symfony/finder' => 'v5.2.2@196f45723b5e618bf0e23b97e96d11652696ea9e',
  'symfony/flex' => 'v1.11.0@ceb2b4e612bd0b4bb36a4d7fb2e800c861652f48',
  'symfony/form' => 'v5.2.2@b9fc4092f5c138ec89604ee5faa9cb0c12e2b601',
  'symfony/framework-bundle' => 'v5.2.2@ff455b2afd3f98237d4131ffebe190e59cc0f011',
  'symfony/http-client' => 'v5.2.2@22cb1a7844fff206cc5186409776e78865405ea5',
  'symfony/http-client-contracts' => 'v2.3.1@41db680a15018f9c1d4b23516059633ce280ca33',
  'symfony/http-foundation' => 'v5.2.2@16dfa5acf8103f0394d447f8eea3ea49f9e50855',
  'symfony/http-kernel' => 'v5.2.2@831b51e9370ece0febd0950dd819c63f996721c7',
  'symfony/intl' => 'v5.2.2@930f17689729cc47d2ce18be21ed403bcbeeb6a9',
  'symfony/mailer' => 'v5.2.2@eeeabec5511d14aebba1808da959a3e31375e1f4',
  'symfony/mime' => 'v5.2.2@37bade585ea100d235c031b258eff93b5b6bb9a9',
  'symfony/monolog-bridge' => 'v5.2.2@aca99c4135001224b917eed17cc846e8c0ba981c',
  'symfony/monolog-bundle' => 'v3.6.0@e495f5c7e4e672ffef4357d4a4d85f010802f940',
  'symfony/notifier' => 'v5.2.2@bdb8702e91f19fc64d0c678f41fed144d0263657',
  'symfony/options-resolver' => 'v5.2.2@5d0f633f9bbfcf7ec642a2b5037268e61b0a62ce',
  'symfony/polyfill-intl-grapheme' => 'v1.22.0@267a9adeb8ecb8071040a740930e077cdfb987af',
  'symfony/polyfill-intl-icu' => 'v1.22.0@b2b1e732a6c039f1a3ea3414b3379a2433e183d6',
  'symfony/polyfill-intl-idn' => 'v1.22.0@0eb8293dbbcd6ef6bf81404c9ce7d95bcdf34f44',
  'symfony/polyfill-intl-normalizer' => 'v1.22.0@6e971c891537eb617a00bb07a43d182a6915faba',
  'symfony/polyfill-mbstring' => 'v1.22.0@f377a3dd1fde44d37b9831d68dc8dea3ffd28e13',
  'symfony/polyfill-php73' => 'v1.22.0@a678b42e92f86eca04b7fa4c0f6f19d097fb69e2',
  'symfony/polyfill-php80' => 'v1.22.0@dc3063ba22c2a1fd2f45ed856374d79114998f91',
  'symfony/process' => 'v5.2.2@313a38f09c77fbcdc1d223e57d368cea76a2fd2f',
  'symfony/property-access' => 'v5.2.2@3af8ed262bd3217512a13b023981fe68f36ad5f3',
  'symfony/property-info' => 'v5.2.2@4e4f368c3737b1c175d66f4fc0b99a5bcd161a77',
  'symfony/proxy-manager-bridge' => 'v5.2.2@fd6bb40190b1719abbe831be09adf38e0744d5f5',
  'symfony/routing' => 'v5.2.2@348b5917e56546c6d96adbf21d7f92c9ef563661',
  'symfony/security-bundle' => 'v5.2.2@51854aa28585d196e60519271338aecad86f95f5',
  'symfony/security-core' => 'v5.2.2@6c7314eac7c4870e6316fa9c277ebf4d393063ca',
  'symfony/security-csrf' => 'v5.2.2@e22ef49d5d3773014942f3dfe301b168a4a833dc',
  'symfony/security-guard' => 'v5.2.2@a191352047f2ea0d927c62e1a2f261cf906d1bde',
  'symfony/security-http' => 'v5.2.2@b2289c9c6837d627df12508bda91d74d6fe0e03e',
  'symfony/serializer' => 'v5.2.2@4218dd0902543dc454b2eac0db37044f187283d7',
  'symfony/service-contracts' => 'v2.2.0@d15da7ba4957ffb8f1747218be9e1a121fd298a1',
  'symfony/stopwatch' => 'v5.2.2@b12274acfab9d9850c52583d136a24398cdf1a0c',
  'symfony/string' => 'v5.2.2@c95468897f408dd0aca2ff582074423dd0455122',
  'symfony/translation' => 'v5.2.2@c021864d4354ee55160ddcfd31dc477a1bc77949',
  'symfony/translation-contracts' => 'v2.3.0@e2eaa60b558f26a4b0354e1bbb25636efaaad105',
  'symfony/twig-bridge' => 'v5.2.2@5618cadebf28dff5c375f6c3c8e6f1d52df397e1',
  'symfony/twig-bundle' => 'v5.2.2@5ebbb5f0e8bfaa0b4b37cb25ff97f83b18caf221',
  'symfony/validator' => 'v5.2.2@c2c234d80dad3925247b0a3fbbcecfe676e2b551',
  'symfony/var-dumper' => 'v5.2.2@72ca213014a92223a5d18651ce79ef441c12b694',
  'symfony/var-exporter' => 'v5.2.2@5aed4875ab514c8cb9b6ff4772baa25fa4c10307',
  'symfony/web-link' => 'v5.2.2@28e6bd9028740602c158f5c6ac8d5e2a2692812e',
  'symfony/webpack-encore-bundle' => 'v1.9.0@ea80d29e82da32942dc796c02b48e83b98665aaa',
  'symfony/yaml' => 'v5.2.2@6bb8b36c6dea8100268512bf46e858c8eb5c545e',
  'twig/extra-bundle' => 'v3.2.1@07c94c7dcfe7e49abd45d4083ca5544a34969714',
  'twig/twig' => 'v3.2.1@f795ca686d38530045859b0350b5352f7d63447d',
  'webmozart/assert' => '1.9.1@bafc69caeb4d49c39fd0779086c03a3738cbb389',
  'nikic/php-parser' => 'v4.10.4@c6d052fc58cb876152f89f532b95a8d7907e7f0e',
  'symfony/browser-kit' => 'v5.2.2@b03b2057ed53ee4eab2e8f372084d7722b7b8ffd',
  'symfony/css-selector' => 'v5.2.2@f65f217b3314504a1ec99c2d6ef69016bb13490f',
  'symfony/debug-bundle' => 'v5.2.2@ec21bd26d24dab02ac40e4bec362b3f4032486e8',
  'symfony/dom-crawler' => 'v5.2.2@5d89ceb53ec65e1973a555072fac8ed5ecad3384',
  'symfony/maker-bundle' => 'v1.28.0@6f4d27a68c92179c124f5331a27e32d197c9bd59',
  'symfony/phpunit-bridge' => 'v5.2.2@587f2b6bbcda8c473b91c18165958ffbb8af3c4c',
  'symfony/web-profiler-bundle' => 'v5.2.2@d9ce6aa8abdb84fc0db8a6f47962a949e1c652c2',
  'symfony/polyfill-ctype' => '*@',
  'symfony/polyfill-iconv' => '*@',
  'symfony/polyfill-php72' => '*@',
  '__root__' => '1.0.0+no-version-set@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
