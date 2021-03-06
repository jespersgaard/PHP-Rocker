<?php
namespace Rocker\Object\User;

use Rocker\Object\ObjectInterface;


/**
 * Interface for objects representing a user
 *
 * @package rocker/server
 * @author Victor Jonsson (http://victorjonsson.se)
 * @license MIT license (http://opensource.org/licenses/MIT)
 */
interface UserInterface extends ObjectInterface {

    /**
     * @return string
     */
    function getNick();

    /**
     * @param string $nick
     * @return string
     */
    function setNick($nick);

    /**
     * @param string $pass
     * @return void
     */
    function setPassword($pass);

    /**
     * @param string $pass
     * @return bool
     */
    function hasPassword($pass);

    /**
     * @alias getName()
     * @return string
     */
    function getEmail();

    /**
     * @alias setName()
     * @param $email
     * @return void
     */
    function setEmail($email);

    /**
     * @return bool
     */
    function isAdmin();
}