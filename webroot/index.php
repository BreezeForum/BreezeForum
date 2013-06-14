<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2011, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

require dirname(__DIR__) . '/config/bootstrap.php';

/**
 * The following will instantiate a new `Request` object and pass it off to the `Dispatcher` class.
 * By default, the `Request` will automatically aggregate all the server / environment settings, URL
 * and query string parameters, request content (i.e. POST or PUT data), and HTTP method and header
 * information.
 *
 * The `Request` is then used by the `Dispatcher` (in conjunction with the `Router`) to determine
 * the correct `Controller` object to dispatch to, and the correct response type to render. The
 * response information is then encapsulated in a `Response` object, which is returned from the
 * controller to the `Dispatcher`, and finally echoed below. Echoing a `Response` object causes its
 * headers to be written, and its response body to be written in a buffer loop.
 *
 * @see lithium\action\Request
 * @see lithium\action\Response
 * @see lithium\action\Dispatcher
 * @see lithium\net\http\Router
 * @see lithium\action\Controller
 */
echo lithium\action\Dispatcher::run(new lithium\action\Request());
