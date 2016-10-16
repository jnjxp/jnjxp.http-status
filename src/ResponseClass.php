<?php
/**
 * HTTP Status
 *
 * PHP version 5
 *
 * Copyright (C) 2016 Jake Johns
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 *
 * @category  Class
 * @package   Jnjxp\HttpStatus
 * @author    Jake Johns <jake@jakejohns.net>
 * @copyright 2016 Jake Johns
 * @license   http://jnj.mit-license.org/2016 MIT License
 * @link      https://github.com/jnjxp/jnjxp.http-status
 */

namespace Jnjxp\HttpStatus;

use Psr\Http\Message\ResponseInterface as Response;

/**
 * Response Class
 *
 * @category Class
 * @package  Jnjxp\HttpStatus
 * @author   Jake Johns <jake@jakejohns.net>
 * @license  http://jnj.mit-license.org/ MIT License
 * @link     https://github.com/jnjxp/jnjxp.http-status
 */
class ResponseClass
{
    const INFORMATIONAL = 'INFORMATIONAL';
    const SUCCESS       = 'SUCCESSFUL';
    const REDIRECTION   = 'REDIRECTION';
    const CLIENT_ERROR  = 'CLIENT_ERROR';
    const SERVER_ERROR  = 'SERVER_ERROR';

    /**
     * Classes
     *
     * @var array
     *
     * @access protected
     */
    protected $classes = [
        1 => self::INFORMATIONAL,
        2 => self::SUCCESS,
        3 => self::REDIRECTION,
        4 => self::CLIENT_ERROR,
        5 => self::SERVER_ERROR,
    ];

    /**
     * Get the classification for an HTTP Status Code
     *
     * @param int|Response $code HTTP Status Code
     *
     * @return string
     *
     * @access public
     */
    public function getClass($code)
    {
        $code = $this->fixCode($code);
        $prefix = substr($code, 0, 1);
        return $this->classes[$prefix];
    }

    /**
     * Get a valid HTTP Status Code
     *
     * @param Response|int $code HTTP Status Code
     *
     * @return int
     * @throws Exception if invalid HTTP Status Code
     *
     * @access protected
     */
    protected function fixCode($code)
    {
        if ($code instanceof Response) {
            $code = $code->getStatusCode();
        }

        $this->assertValidHttpCode($code);

        return $code;
    }

    /**
     * Assert Valid HTTP Code
     *
     * @param int $code HTTP Status Code
     *
     * @return null
     * @throws Exception if invalid HTTP Status Code;
     *
     * @access protected
     */
    protected function assertValidHttpCode($code)
    {
        if (! is_numeric($code)
            || is_float($code)
            || $code < 100
            || $code >= 600
        ) {

            $msg = sprintf(
                'Invalid status code "%s"; '
                . 'must be an integer between 100 and 599, inclusive',
                (is_scalar($code) ? $code : gettype($code))
            );

            throw new Exception($msg);
        }
    }

    /**
     * Is Response of given class?
     *
     * @param string       $class class to test for
     * @param int|Response $code  code to test
     *
     * @return bool
     *
     * @access public
     */
    public function isResponse($class, $code)
    {
        return $class == $this->getClass($code);
    }

    /**
     * Is Status Informational?
     *
     * @param int|Response $code HTTP Status Code
     *
     * @return bool
     *
     * @access public
     */
    public function isInformational($code)
    {
        return $this->isResponse(self::INFORMATIONAL, $code);
    }

    /**
     * Is Status a Success?
     *
     * @param int|Response $code HTTP Status Code
     *
     * @return bool
     *
     * @access public
     */
    public function isSuccess($code)
    {
        return $this->isResponse(self::SUCCESS, $code);
    }

    /**
     * Is Status a Redirect?
     *
     * @param int|Response $code HTTP Status Code
     *
     * @return bool
     *
     * @access public
     */
    public function isRedirection($code)
    {
        return $this->isResponse(self::REDIRECTION, $code);
    }

    /**
     * Is Status a Client Error?
     *
     * @param int|Response $code HTTP Status Code
     *
     * @return bool
     *
     * @access public
     */
    public function isClientError($code)
    {
        return $this->isResponse(self::CLIENT_ERROR, $code);
    }

    /**
     * Is Status a Server Error?
     *
     * @param int|Response $code HTTP Status Code
     *
     * @return bool
     *
     * @access public
     */
    public function isServerError($code)
    {
        return $this->isResponse(self::SERVER_ERROR, $code);
    }
}
