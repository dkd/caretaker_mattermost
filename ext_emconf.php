<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "caretaker_mattermost".
 *
 * Auto generated 16-08-2018 16:55
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Caretaker Mattermost',
  'description' => 'Mattermost exitpoint for advanced notification system of EXT:caretaker',
  'category' => 'misc',
  'author' => 'Nicole Cordes',
  'author_email' => 'typo3@cordes.co',
  'author_company' => 'CPS-IT GmbH',
  'state' => 'stable',
  'version' => '2.0.0-dev',
  'uploadfolder' => 0,
  'createDirs' => '',
  'clearCacheOnLoad' => 0,
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '7.6.0-8.7.99',
      'php' => '5.5.0-7.2.99',
      'caretaker' => '0.3.0-0.0.0',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  'autoload' => 
  array (
    'classmap' => 
    array (
      0 => 'Classes/',
    ),
  ),
  '_md5_values_when_last_written' => 'a:131:{s:9:"ChangeLog";s:4:"ddb9";s:9:"README.md";s:4:"4f8a";s:13:"composer.json";s:4:"93ef";s:16:"ext_autoload.php";s:4:"ec50";s:12:"ext_icon.png";s:4:"98a7";s:17:"ext_localconf.php";s:4:"da47";s:14:"ext_tables.sql";s:4:"491d";s:39:"Classes/Mattermost/CaretakerMessage.php";s:4:"4ee3";s:93:"Classes/Services/ExitPoints/class.Tx_CaretakerMattermost_NotificationMattermmostExitPoint.php";s:4:"4a6c";s:90:"Classes/Services/ExitPoints/ds.Tx_CaretakerMattermost_NotificationMattermmostExitPoint.xml";s:4:"b6b5";s:44:"Configuration/TCA/Overrides/tx_caretaker.php";s:4:"1c28";s:27:"Resources/Php/composer.json";s:4:"feff";s:27:"Resources/Php/composer.lock";s:4:"f359";s:33:"Resources/Php/vendor/autoload.php";s:4:"0e04";s:45:"Resources/Php/vendor/composer/ClassLoader.php";s:4:"7bcd";s:37:"Resources/Php/vendor/composer/LICENSE";s:4:"955d";s:51:"Resources/Php/vendor/composer/autoload_classmap.php";s:4:"3446";s:48:"Resources/Php/vendor/composer/autoload_files.php";s:4:"8e6f";s:53:"Resources/Php/vendor/composer/autoload_namespaces.php";s:4:"35e1";s:47:"Resources/Php/vendor/composer/autoload_psr4.php";s:4:"de9a";s:47:"Resources/Php/vendor/composer/autoload_real.php";s:4:"e240";s:49:"Resources/Php/vendor/composer/autoload_static.php";s:4:"d986";s:44:"Resources/Php/vendor/composer/installed.json";s:4:"1d2f";s:51:"Resources/Php/vendor/guzzlehttp/guzzle/CHANGELOG.md";s:4:"110c";s:46:"Resources/Php/vendor/guzzlehttp/guzzle/LICENSE";s:4:"5de5";s:48:"Resources/Php/vendor/guzzlehttp/guzzle/README.md";s:4:"bb3a";s:51:"Resources/Php/vendor/guzzlehttp/guzzle/UPGRADING.md";s:4:"ead9";s:52:"Resources/Php/vendor/guzzlehttp/guzzle/composer.json";s:4:"d920";s:53:"Resources/Php/vendor/guzzlehttp/guzzle/src/Client.php";s:4:"aba7";s:62:"Resources/Php/vendor/guzzlehttp/guzzle/src/ClientInterface.php";s:4:"6c43";s:59:"Resources/Php/vendor/guzzlehttp/guzzle/src/HandlerStack.php";s:4:"9880";s:63:"Resources/Php/vendor/guzzlehttp/guzzle/src/MessageFormatter.php";s:4:"f01b";s:57:"Resources/Php/vendor/guzzlehttp/guzzle/src/Middleware.php";s:4:"52e7";s:51:"Resources/Php/vendor/guzzlehttp/guzzle/src/Pool.php";s:4:"0526";s:68:"Resources/Php/vendor/guzzlehttp/guzzle/src/PrepareBodyMiddleware.php";s:4:"8233";s:65:"Resources/Php/vendor/guzzlehttp/guzzle/src/RedirectMiddleware.php";s:4:"5f7c";s:61:"Resources/Php/vendor/guzzlehttp/guzzle/src/RequestOptions.php";s:4:"005c";s:62:"Resources/Php/vendor/guzzlehttp/guzzle/src/RetryMiddleware.php";s:4:"219f";s:60:"Resources/Php/vendor/guzzlehttp/guzzle/src/TransferStats.php";s:4:"f94b";s:58:"Resources/Php/vendor/guzzlehttp/guzzle/src/UriTemplate.php";s:4:"1915";s:56:"Resources/Php/vendor/guzzlehttp/guzzle/src/functions.php";s:4:"3dfd";s:64:"Resources/Php/vendor/guzzlehttp/guzzle/src/functions_include.php";s:4:"5f6e";s:63:"Resources/Php/vendor/guzzlehttp/guzzle/src/Cookie/CookieJar.php";s:4:"980d";s:72:"Resources/Php/vendor/guzzlehttp/guzzle/src/Cookie/CookieJarInterface.php";s:4:"0cd2";s:67:"Resources/Php/vendor/guzzlehttp/guzzle/src/Cookie/FileCookieJar.php";s:4:"ecdc";s:70:"Resources/Php/vendor/guzzlehttp/guzzle/src/Cookie/SessionCookieJar.php";s:4:"f932";s:63:"Resources/Php/vendor/guzzlehttp/guzzle/src/Cookie/SetCookie.php";s:4:"1531";s:77:"Resources/Php/vendor/guzzlehttp/guzzle/src/Exception/BadResponseException.php";s:4:"7e1c";s:72:"Resources/Php/vendor/guzzlehttp/guzzle/src/Exception/ClientException.php";s:4:"d1c7";s:73:"Resources/Php/vendor/guzzlehttp/guzzle/src/Exception/ConnectException.php";s:4:"4c3a";s:72:"Resources/Php/vendor/guzzlehttp/guzzle/src/Exception/GuzzleException.php";s:4:"bbf7";s:73:"Resources/Php/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php";s:4:"6f33";s:70:"Resources/Php/vendor/guzzlehttp/guzzle/src/Exception/SeekException.php";s:4:"d332";s:72:"Resources/Php/vendor/guzzlehttp/guzzle/src/Exception/ServerException.php";s:4:"36ec";s:82:"Resources/Php/vendor/guzzlehttp/guzzle/src/Exception/TooManyRedirectsException.php";s:4:"9952";s:74:"Resources/Php/vendor/guzzlehttp/guzzle/src/Exception/TransferException.php";s:4:"6792";s:66:"Resources/Php/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php";s:4:"5e3c";s:75:"Resources/Php/vendor/guzzlehttp/guzzle/src/Handler/CurlFactoryInterface.php";s:4:"b4db";s:66:"Resources/Php/vendor/guzzlehttp/guzzle/src/Handler/CurlHandler.php";s:4:"18c8";s:71:"Resources/Php/vendor/guzzlehttp/guzzle/src/Handler/CurlMultiHandler.php";s:4:"05c5";s:65:"Resources/Php/vendor/guzzlehttp/guzzle/src/Handler/EasyHandle.php";s:4:"02ee";s:66:"Resources/Php/vendor/guzzlehttp/guzzle/src/Handler/MockHandler.php";s:4:"051e";s:60:"Resources/Php/vendor/guzzlehttp/guzzle/src/Handler/Proxy.php";s:4:"0ead";s:68:"Resources/Php/vendor/guzzlehttp/guzzle/src/Handler/StreamHandler.php";s:4:"7675";s:53:"Resources/Php/vendor/guzzlehttp/promises/CHANGELOG.md";s:4:"17cf";s:48:"Resources/Php/vendor/guzzlehttp/promises/LICENSE";s:4:"ea21";s:49:"Resources/Php/vendor/guzzlehttp/promises/Makefile";s:4:"1232";s:50:"Resources/Php/vendor/guzzlehttp/promises/README.md";s:4:"1eaa";s:54:"Resources/Php/vendor/guzzlehttp/promises/composer.json";s:4:"5ba9";s:67:"Resources/Php/vendor/guzzlehttp/promises/src/AggregateException.php";s:4:"babe";s:70:"Resources/Php/vendor/guzzlehttp/promises/src/CancellationException.php";s:4:"a9a2";s:58:"Resources/Php/vendor/guzzlehttp/promises/src/Coroutine.php";s:4:"e851";s:60:"Resources/Php/vendor/guzzlehttp/promises/src/EachPromise.php";s:4:"df67";s:65:"Resources/Php/vendor/guzzlehttp/promises/src/FulfilledPromise.php";s:4:"d600";s:56:"Resources/Php/vendor/guzzlehttp/promises/src/Promise.php";s:4:"c04d";s:65:"Resources/Php/vendor/guzzlehttp/promises/src/PromiseInterface.php";s:4:"d89b";s:66:"Resources/Php/vendor/guzzlehttp/promises/src/PromisorInterface.php";s:4:"a9d3";s:64:"Resources/Php/vendor/guzzlehttp/promises/src/RejectedPromise.php";s:4:"0dec";s:67:"Resources/Php/vendor/guzzlehttp/promises/src/RejectionException.php";s:4:"dcf7";s:58:"Resources/Php/vendor/guzzlehttp/promises/src/TaskQueue.php";s:4:"f689";s:67:"Resources/Php/vendor/guzzlehttp/promises/src/TaskQueueInterface.php";s:4:"93f2";s:58:"Resources/Php/vendor/guzzlehttp/promises/src/functions.php";s:4:"2ff3";s:66:"Resources/Php/vendor/guzzlehttp/promises/src/functions_include.php";s:4:"f5cb";s:49:"Resources/Php/vendor/guzzlehttp/psr7/CHANGELOG.md";s:4:"e3ac";s:44:"Resources/Php/vendor/guzzlehttp/psr7/LICENSE";s:4:"582d";s:46:"Resources/Php/vendor/guzzlehttp/psr7/README.md";s:4:"1782";s:50:"Resources/Php/vendor/guzzlehttp/psr7/composer.json";s:4:"85d9";s:57:"Resources/Php/vendor/guzzlehttp/psr7/src/AppendStream.php";s:4:"c3a6";s:57:"Resources/Php/vendor/guzzlehttp/psr7/src/BufferStream.php";s:4:"ca89";s:58:"Resources/Php/vendor/guzzlehttp/psr7/src/CachingStream.php";s:4:"9044";s:59:"Resources/Php/vendor/guzzlehttp/psr7/src/DroppingStream.php";s:4:"adac";s:53:"Resources/Php/vendor/guzzlehttp/psr7/src/FnStream.php";s:4:"8c73";s:58:"Resources/Php/vendor/guzzlehttp/psr7/src/InflateStream.php";s:4:"3b09";s:59:"Resources/Php/vendor/guzzlehttp/psr7/src/LazyOpenStream.php";s:4:"2648";s:56:"Resources/Php/vendor/guzzlehttp/psr7/src/LimitStream.php";s:4:"9067";s:57:"Resources/Php/vendor/guzzlehttp/psr7/src/MessageTrait.php";s:4:"a6b8";s:60:"Resources/Php/vendor/guzzlehttp/psr7/src/MultipartStream.php";s:4:"418b";s:57:"Resources/Php/vendor/guzzlehttp/psr7/src/NoSeekStream.php";s:4:"a071";s:55:"Resources/Php/vendor/guzzlehttp/psr7/src/PumpStream.php";s:4:"55ac";s:52:"Resources/Php/vendor/guzzlehttp/psr7/src/Request.php";s:4:"1ff8";s:53:"Resources/Php/vendor/guzzlehttp/psr7/src/Response.php";s:4:"6db7";s:58:"Resources/Php/vendor/guzzlehttp/psr7/src/ServerRequest.php";s:4:"7d2f";s:51:"Resources/Php/vendor/guzzlehttp/psr7/src/Stream.php";s:4:"8c29";s:65:"Resources/Php/vendor/guzzlehttp/psr7/src/StreamDecoratorTrait.php";s:4:"d4b4";s:58:"Resources/Php/vendor/guzzlehttp/psr7/src/StreamWrapper.php";s:4:"cf8a";s:57:"Resources/Php/vendor/guzzlehttp/psr7/src/UploadedFile.php";s:4:"a36b";s:48:"Resources/Php/vendor/guzzlehttp/psr7/src/Uri.php";s:4:"5c6a";s:58:"Resources/Php/vendor/guzzlehttp/psr7/src/UriNormalizer.php";s:4:"0c59";s:56:"Resources/Php/vendor/guzzlehttp/psr7/src/UriResolver.php";s:4:"726f";s:54:"Resources/Php/vendor/guzzlehttp/psr7/src/functions.php";s:4:"2b16";s:62:"Resources/Php/vendor/guzzlehttp/psr7/src/functions_include.php";s:4:"8471";s:50:"Resources/Php/vendor/psr/http-message/CHANGELOG.md";s:4:"c5bb";s:45:"Resources/Php/vendor/psr/http-message/LICENSE";s:4:"1b0b";s:47:"Resources/Php/vendor/psr/http-message/README.md";s:4:"515a";s:51:"Resources/Php/vendor/psr/http-message/composer.json";s:4:"1cbe";s:62:"Resources/Php/vendor/psr/http-message/src/MessageInterface.php";s:4:"5b86";s:62:"Resources/Php/vendor/psr/http-message/src/RequestInterface.php";s:4:"9f96";s:63:"Resources/Php/vendor/psr/http-message/src/ResponseInterface.php";s:4:"3a90";s:68:"Resources/Php/vendor/psr/http-message/src/ServerRequestInterface.php";s:4:"8694";s:61:"Resources/Php/vendor/psr/http-message/src/StreamInterface.php";s:4:"dde8";s:67:"Resources/Php/vendor/psr/http-message/src/UploadedFileInterface.php";s:4:"bf30";s:58:"Resources/Php/vendor/psr/http-message/src/UriInterface.php";s:4:"77f0";s:60:"Resources/Php/vendor/thibaud-dauce/mattermost-php/LICENSE.md";s:4:"3a67";s:59:"Resources/Php/vendor/thibaud-dauce/mattermost-php/README.md";s:4:"cdf3";s:63:"Resources/Php/vendor/thibaud-dauce/mattermost-php/composer.json";s:4:"39cd";s:68:"Resources/Php/vendor/thibaud-dauce/mattermost-php/src/Attachment.php";s:4:"f0f6";s:68:"Resources/Php/vendor/thibaud-dauce/mattermost-php/src/Mattermost.php";s:4:"8597";s:65:"Resources/Php/vendor/thibaud-dauce/mattermost-php/src/Message.php";s:4:"eb95";s:64:"Resources/Php/vendor/thibaud-dauce/mattermost-php/tests/test.php";s:4:"dc92";s:43:"Resources/Private/Language/locallang_db.xlf";s:4:"9504";s:77:"Tests/Functional/Services/ExitPoints/NotificationMattermmostExitPointTest.php";s:4:"c6b6";}',
);

