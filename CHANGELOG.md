Yii Framework 2 authclient extension Change Log
===============================================

2.1.3 June 23, 2017
-------------------

- Bug #152: Fixed `\yii\custom\authclient\OAuth1::fetchRequestToken()` skips formatting for `yii\httpclient\Request` (klimov-paul)
- Bug #160: Fixed `\yii\custom\authclient\OAuth1::composeSignatureBaseString()` does not take URL query string into account (klimov-paul)
- Enh #155: Added `\yii\custom\authclient\OpenIdConnect` supporting [OpenID Connect](http://openid.net/connect/) protocol (klimov-paul)
- Enh #156: Added `\yii\custom\authclient\signature\RsaSha` and `\yii\custom\authclient\signature\HmacSha` supporting general 'SHAwithRSA' and 'HMAC SHA' signature methods (klimov-paul)
- Enh #157: Added `\yii\custom\authclient\OAuth2::authenticateUserJwt()` supporting authentication via JSON Web Token (JWT) (klimov-paul)
- Enh #163: Added support for exchanging access token at `yii\custom\authclient\clients\Facebook` (klimov-paul)
- Enh #163: Added support for client-specific access tokens at `yii\custom\authclient\clients\Facebook` (klimov-paul)
- Chg #163: `yii\custom\authclient\clients\Facebook::$autoRefreshAccessToken` is now disabled by default (klimov-paul)


2.1.2 February 15, 2017
-----------------------

- Bug #135: Fixed `\yii\custom\authclient\OAuth1::fetchRequestToken()` duplicates auth params in the request body, which may cause error on some OAuth 1.0 providers (klimov-paul)
- Bug #149: Changed `$` to `jQuery` to prevent global conflicts in widget JavaScript (Ariestattoo)
- Enh #67: Added `appsecret_proof` generation for the API requests at `yii\custom\authclient\clients\Facebook` (blackhpro, SDKiller, klimov-paul)


2.1.1 August 29, 2016
---------------------

- Bug #128: Fixed `\yii\custom\authclient\BaseClient::createRequest()` does not apply `defaultRequestOptions` and `requestOptions` (klimov-paul)
- Bug #130: Fixed `\yii\custom\authclient\OAuth1::fetchRequestToken()` unable to unset current access token (klimov-paul)
- Enh #27: Added `\yii\custom\authclient\OAuth1::authorizationHeaderMethods` option allowing to control request methods, which require authorization header (klimov-paul)
- Enh #132: URL endpoints for `authUrl` and `tokenUrl` for `yii\custom\authclient\clients\VKontakte` updated (KhristenkoYura)


2.1.0 August 04, 2016
---------------------

- Enh #27: This extension no longer require PHP 'cURL' extension to be installed (klimov-paul)
- Enh #30: Added support for 'client_credentials' grant type via `\yii\custom\authclient\OAuth2::authenticateClient()` (klimov-paul)
- Enh #33: Added ability to pass raw request content at `\yii\custom\authclient\BaseOAuth::api()` (klimov-paul)
- Enh #41: Added support for signature generation from request token at `\yii\custom\authclient\OAuth1::fetchAccessToken()` (klimov-paul)
- Enh #63: Markup for `\yii\custom\authclient\widgets\AuthChoice` simplified (klimov-paul)
- Enh #108: This extension now uses `yii2-httpclient` library for the HTTP requests (klimov-paul)
- Enh #118: Added support for 'password' grant type via `\yii\custom\authclient\OAuth2::authenticateUser()` (klimov-paul)
- Enh #121: Auth client 'State Storage' abstraction layer extracted (klimov-paul)
- Enh #124: Methods `clientLink()` and `renderMainContent()` of `yii\custom\authclient\widgets\AuthChoice` reworked to return HTML instead of echo (klimov-paul)
- Enh #127: Auth 'state' validation added to `OAuth2` for preventing cross-site request forgery (klimov-paul)


2.0.6 July 08, 2016
-------------------

- Bug #37: Fixed `\yii\custom\authclient\widgets\AuthChoice` overrides any `<a>` tag click behavior between `begin()` and `end()` methods (klimov-paul)
- Enh #31: Allow to disable automatic 'refresh access token' requests (klimov-paul)
- Enh #58: Added support for user attribute request params setup for Twitter (umanamente, klimov-paul)
- Enh #111: `yii\custom\authclient\clients\GitHub` now retrieves user email even if it is set as 'private' at GitHub account (klimov-paul)


2.0.5 September 23, 2015
------------------------

- Bug #25: `yii\custom\authclient\BaseOAuth` now can be used without without `session` application component available (klimov-paul)
- Enh #40: Added `attributeNames` field to `yii\custom\authclient\clients\Facebook`, which allows definition of attributes list fetched from API (samdark)
- Chg: #47: Default popup size for `yii\custom\authclient\clients\Facebook` has been increased up to 860x480 (lame07, klimov-paul)


2.0.4 May 10, 2015
------------------

- Bug #7224: Fixed incorrect POST fields composition at `yii\custom\authclient\OAuth1` (klimov-paul)
- Bug #7639: Automatic exception throw on 'error' key presence at `yii\custom\authclient\BaseOAuth::processResponse()` removed (klimov-paul)
- Enh #17: Added `attributeNames` field to `yii\custom\authclient\clients\VKontakte` and `yii\custom\authclient\clients\LinkedIn`, which allows definition of attributes list fetched from API (klimov-paul)
- Enh #6743: Icon for Google at `yii\custom\authclient\widgets\AuthChoice` fixed to follow the Google Brand guidelines (klimov-paul)
- Enh #7733: `yii\custom\authclient\clients\VKontakte` now gets attributes from access token also (klimov-paul)
- Enh #7754: New client `yii\custom\authclient\clients\GooglePlus` added to support Google recommended auth flow (klimov-paul)
- Chg: #7754: `yii\custom\authclient\clients\GoogleOpenId` is now deprecated because this auth method is no longer supported by Google as of April 20, 2015 (klimov-paul)


2.0.3 March 01, 2015
--------------------

- Enh #6892: Default value of `yii\custom\authclient\clients\Twitter::$authUrl` changed to 'authenticate', allowing usage of previous logged user without request an access (kotchuprik)


2.0.2 January 11, 2015
----------------------

- Bug #6502: Fixed `\yii\custom\authclient\OAuth2::refreshAccessToken()` does not save fetched token (sebathi)
- Bug #6510: Fixed infinite redirect loop using default `\yii\custom\authclient\AuthAction::cancelUrl` (klimov-paul)


2.0.1 December 07, 2014
-----------------------

- Bug #6000: Fixed CCS for `yii\custom\authclient\widgets\AuthChoice` does not loaded if `popupMode` disabled (klimov-paul)


2.0.0 October 12, 2014
----------------------

- Enh #5135: Added ability to operate nested and complex attributes via `yii\custom\authclient\BaseClient::normalizeUserAttributeMap` (zinzinday, klimov-paul)


2.0.0-rc September 27, 2014
---------------------------

- Bug #3633: OpenId return URL comparison advanced to prevent url encode problem (klimov-paul)
- Bug #4490: `yii\custom\authclient\widgets\AuthChoice` does not preserve initial settings while opening popup (klimov-paul)
- Bug #5011: OAuth API Response with 20x status were not considered success (ychongsaytc)
- Enh #3416: VKontakte OAuth support added (klimov-paul)
- Enh #4076: Request HTTP headers argument added to `yii\custom\authclient\BaseOAuth::api()` method (klimov-paul)
- Enh #4134: `yii\custom\authclient\InvalidResponseException` added for tracking invalid remote server response (klimov-paul)
- Enh #4139: User attributes requesting at GoogleOAuth switched to Google+ API (klimov-paul)


2.0.0-beta April 13, 2014
-------------------------

- Initial release.
