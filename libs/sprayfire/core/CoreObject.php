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
 * @version 0.10b
 * @since 0.10b
 */

namespace libs\sprayfire\core;

use libs\sprayfire\interfaces\Object;

/**
 * The base object for all application classes, allows for the overloading of
 * properties.
 */
abstract class CoreObject implements Object {

    /**
     * Returns a unique identifier for the calling object.
     *
     * @return string
     */
    public final function hashCode() {
        $hashCode = spl_object_hash($this);
        return $hashCode;
    }

    /**
     * The default implemenation for the equals function, will compare the hash
     * code of the object passed and the calling object.
     *
     * If your objects need to implement a Comparator be sure to override the
     * implementation of this class.
     *
     * @param Object $CompareObject
     * @return boolean
     */
    public function equals(Object $CompareObject) {
        $thisHash = $this->hashCode();
        $compareHash = $CompareObject->hashCode();
        $areHashesEqual = $thisHash === $compareHash;
        return $areHashesEqual;
    }

    /**
     * @return string
     */
    public function __toString() {
        return get_class($this);
    }

}

// End CoreObject