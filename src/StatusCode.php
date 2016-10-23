<?php
/**
 * HttpStatus
 *
 * PHP version 5
 *
 * Copyright (C) 2016 Jake Johns
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 *
 * @category  Codes
 * @package   Jnjxp\Status
 * @author    Jake Johns <jake@jakejohns.net>
 * @copyright 2016 Jake Johns
 * @license   http://jnj.mit-license.org/2016 MIT License
 * @link      http://jakejohns.net
 */

namespace Jnjxp\HttpStatus;

/**
 * StatusCode
 *
 * @category Codes
 * @package  Jnjxp\HttpStatus
 * @author   Jake Johns <jake@jakejohns.net>
 * @license  http://jnj.mit-license.org/ MIT License
 * @link     http://jakejohns.net
 */
class StatusCode
{
    const HTTP_CONTINUE                        = 100;
    const HTTP_SWITCHING_PROTOCOLS             = 101;
    const HTTP_PROCESSING                      = 102;
    const HTTP_OK                              = 200;
    const HTTP_CREATED                         = 201;
    const HTTP_ACCEPTED                        = 202;
    const HTTP_NON_AUTHORITATIVE_INFORMATION   = 203;
    const HTTP_NO_CONTENT                      = 204;
    const HTTP_RESET_CONTENT                   = 205;
    const HTTP_PARTIAL_CONTENT                 = 206;
    const HTTP_MULTI_STATUS                    = 207;
    const HTTP_ALREADY_REPORTED                = 208;
    const HTTP_IM_USED                         = 226;
    const HTTP_MULTIPLE_CHOICES                = 300;
    const HTTP_MOVED_PERMANENTLY               = 301;
    const HTTP_FOUND                           = 302;
    const HTTP_SEE_OTHER                       = 303;
    const HTTP_NOT_MODIFIED                    = 304;
    const HTTP_USE_PROXY                       = 305;
    const HTTP_TEMPORARY_REDIRECT              = 307;
    const HTTP_PERMANENT_REDIRECT              = 308;
    const HTTP_BAD_REQUEST                     = 400;
    const HTTP_UNAUTHORIZED                    = 401;
    const HTTP_PAYMENT_REQUIRED                = 402;
    const HTTP_FORBIDDEN                       = 403;
    const HTTP_NOT_FOUND                       = 404;
    const HTTP_METHOD_NOT_ALLOWED              = 405;
    const HTTP_NOT_ACCEPTABLE                  = 406;
    const HTTP_PROXY_AUTHENTICATION_REQUIRED   = 407;
    const HTTP_REQUEST_TIMEOUT                 = 408;
    const HTTP_CONFLICT                        = 409;
    const HTTP_GONE                            = 410;
    const HTTP_LENGTH_REQUIRED                 = 411;
    const HTTP_PRECONDITION_FAILED             = 412;
    const HTTP_PAYLOAD_TOO_LARGE               = 413;
    const HTTP_URI_TOO_LONG                    = 414;
    const HTTP_UNSUPPORTED_MEDIA_TYPE          = 415;
    const HTTP_REQUESTED_RANGE_NOT_SATISFIABLE = 416;
    const HTTP_EXPECTATION_FAILED              = 417;
    const HTTP_I_AM_A_TEAPOT                   = 418;
    const HTTP_MISDIRECTED_REQUEST             = 421;
    const HTTP_UNPROCESSABLE_ENTITY            = 422;
    const HTTP_LOCKED                          = 423;
    const HTTP_FAILED_DEPENDENCY               = 424;
    const HTTP_UPGRADE_REQUIRED                = 426;
    const HTTP_PRECONDITION_REQUIRED           = 428;
    const HTTP_TOO_MANY_REQUESTS               = 429;
    const HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE = 431;
    const HTTP_UNAVAILABLE_FOR_LEGAL_REASONS   = 451;
    const HTTP_INTERNAL_SERVER_ERROR           = 500;
    const HTTP_NOT_IMPLEMENTED                 = 501;
    const HTTP_BAD_GATEWAY                     = 502;
    const HTTP_SERVICE_UNAVAILABLE             = 503;
    const HTTP_GATEWAY_TIMEOUT                 = 504;
    const HTTP_VERSION_NOT_SUPPORTED           = 505;
    const HTTP_VARIANT_ALSO_NEGOTIATES         = 506;
    const HTTP_INSUFFICIENT_STORAGE            = 507;
    const HTTP_LOOP_DETECTED                   = 508;
    const HTTP_NOT_EXTENDED                    = 510;
    const HTTP_NETWORK_AUTHENTICATION_REQUIRED = 511;

    // @codeCoverageIgnoreStart
    /**
     * __construct
     *
     * @access private
     */
    final private function __construct()
    {
    }
    // @codeCoverageIgnoreEnd
}
