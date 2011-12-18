<?php

/**
 * SprayFire is a custom built framework intended to ease the development
 * of websites with PHP 5.3.
 *
 * SprayFire makes use of namespaces, a custom-built ORM layer, a completely
 * object oriented approach and minimal invasiveness so you can make the framework
 * do what YOU want to do.  Some things we take seriously over here at SprayFire
 * includes clean, readable source, completely unit tested implementations and
 * not polluting the global scope.
 *
 * SprayFire is released under the Open-Source Initiative MIT license.
 *
 * @author Charles Sprayberry <cspray at gmail dot com>
 * @license OSI MIT License <http://www.opensource.org/licenses/mit-license.php>
 * @copyright Copyright (c) 2011, Charles Sprayberry
 */

namespace libs\sprayfire\request;

/**
 * An interface for an object that will interpret a URI and map the pattern to a
 * Controller::action() as defined in the \libs\sprayfire\config\Configuration
 * object passed to it.
 *
 * @see https://github.com/cspray/SprayFire/wiki/Routing
 */
interface Router {

    /**
     * Should use the Configuration object passed to gather whatever details are
     * necessary for the routing implementation to map a Uri object to a RoutedUri
     * object.
     *
     * @param \libs\sprayfire\config\Configuration $RoutesConfig
     */
    public function __construct(\libs\sprayfire\config\Configuration $RoutesConfig);

    /**
     * Should return a RoutedUri that is mapped off of the Uri object being passed.
     *
     * @param \libs\sprayfire\request\Uri $Uri
     * @return \libs\sprayfire\request\RoutedUri
     */
    public function getRoutedUri(\libs\sprayfire\request\Uri $Uri);

}

// End Router