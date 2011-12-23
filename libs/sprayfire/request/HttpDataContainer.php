<?php

/**
 * @file
 * @brief Holds an interface used to store the various HTTP related superglobals
 * as objects to later be used by application components.
 *
 * @details
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
 * @author Charles Sprayberry cspray at gmail dot com
 * @copyright Copyright (c) 2011, Charles Sprayberry OSI MIT License <http://www.opensource.org/licenses/mit-license.php>
 */

/**
 * @namespace libs.sprayfire.request
 * @brief Contains all classes and interfaces needed to parse the requested URI
 * and manage the HTTP data, both headers and normal GET/POST data, that get passed
 * in each request.
 */
namespace libs\sprayfire\request {

    /**
     * @brief An interface used to store various HTTP data sent in the current
     * request.
     */
    interface HttpDataContainer {

        /**
         * @param $Get libs.sprayfire.request.HttpData should be associated with \a $_GET
         */
        public function setGetData(\libs\sprayfire\request\HttpData $Get);

        /**
         * @return libs.sprayfire.request.HttpData should return the object associated with \a $_GET
         */
        public function getGetData();

        /**
         * @param $Post libs.sprayfire.request.HttpData should be associated with \a $_POST
         */
        public function setPostData(\libs\sprayfire\request\HttpData $Post);

        /**
         * @return libs.sprayfire.request.HttpData should return the object associated with \a $_POST
         */
        public function getPostData();

        /**
         * @param $Files libs.sprayfire.request.HttpData should be associated with \a $_FILES
         */
        public function setFilesData(\libs\sprayfire\request\HttpData $Files);

        /**
         * @return libs.sprayfire.request.HttpData should return the object associated with \a $_FILES
         */
        public function getFilesData();

    }

    // End HttpDataContainer
}

// End libs.sprayfire