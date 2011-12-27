<?php

/**
 * @file
 * @brief Holds an abstract class that allows
 *
 * @details
 * SprayFire is a fully unit-tested, light-weight PHP framework for developers who
 * want to make simple, secure, dynamic website content.
 *
 * SprayFire repository: http://www.github.com/cspray/SprayFire/
 *
 * SprayFire wiki: http://www.github.com/cspray/SprayFire/wiki/
 *
 * SprayFire API Documentation: http://www.cspray.github.com/SprayFire/
 *
 * SprayFire is released under the Open-Source Initiative MIT license.
 * OSI MIT License <http://www.opensource.org/licenses/mit-license.php>
 *
 * @author Charles Sprayberry cspray at gmail dot com
 * @copyright Copyright (c) 2011, Charles Sprayberry
 */

namespace libs\sprayfire\logger;

/**
 * @brief A framework implemented class that adds a timestamp log message to
 * the end of an injected file.
 */
class FileLogger implements \libs\sprayfire\logger\Logger  {

    /**
     * @brief A SplFileObject that should be used to write log messages to.
     *
     * @property $LogFile
     */
    protected $LogFile;

    /**
     * @param $LogFile SplFileObject that should have log messages written to
     */
    public function __construct(\SplFileInfo $LogFile) {
        try {
            $this->LogFile = $LogFile->openFile('a');
        } catch (\RuntimeException $InvalidArgumentException) {
            throw new \InvalidArgumentException('There was an error attempting to open a writable log file.', null, $InvalidArgumentException);
        }
    }

    /**
     * @param $timestamp A formatted timestamp string
     * @param $message The message string to log
     * @return int The number of bytes written or null on error
     */
    public function log($timestamp, $message) {
        if (!isset($timestamp) || empty($timestamp)) {
            $timestamp = '00-00-0000 00:00:00';
        }

        if (!isset($message) || empty($message)) {
            $message = 'Blank message.';
        }

        $separator = ' := ';
        $message = $timestamp . $separator . $message . PHP_EOL;
        return $this->LogFile->fwrite($message);
    }

}