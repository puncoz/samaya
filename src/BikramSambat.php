<?php

namespace Puncoz\Samaya;

use DateInterval;
use DateTimeInterface;
use DateTimeZone;

class BikramSambat implements BikramSambatInterface
{

    /**
     * (PHP 5 &gt;=5.5.0)<br/>
     * The __wakeup handler
     * @link http://www.php.net/manual/en/datetime.wakeup.php
     * @return void Initializes a DateTime object.
     */
    public function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

    /**
     * (PHP 5 &gt;=5.5.0)<br/>
     * Returns the difference between two DateTime objects
     * @link http://www.php.net/manual/en/datetime.diff.php
     *
     * @param DateTimeInterface $datetime2 <p>The date to compare to.</p>
     * @param bool              $absolute  <p>Should the interval be forced to be positive?</p>
     *
     * @return DateInterval
     * The http://www.php.net/manual/en/class.dateinterval.php DateInterval} object representing the
     * difference between the two dates or <b>FALSE</b> on failure.
     *
     */
    public function diff($datetime2, $absolute = false)
    {
        // TODO: Implement diff() method.
    }

    /**
     * (PHP 5 &gt;=5.5.0)<br/>
     * Returns date formatted according to given format
     * @link http://www.php.net/manual/en/datetime.format.php
     *
     * @param string $format <p>
     *                       Format accepted by  {@link http://www.php.net/manual/en/function.date.php date()}.
     *                       </p>
     *
     * @return string
     * Returns the formatted date string on success or <b>FALSE</b> on failure.
     *
     */
    public function format($format)
    {
        // TODO: Implement format() method.
    }

    /**
     * (PHP 5 &gt;=5.5.0)<br/>
     * Returns the timezone offset
     * @return int
     * Returns the timezone offset in seconds from UTC on success
     * or <b>FALSE</b> on failure.
     *
     */
    public function getOffset()
    {
        // TODO: Implement getOffset() method.
    }

    /**
     * (PHP 5 &gt;=5.5.0)<br/>
     * Gets the Unix timestamp
     * @return int
     * Returns the Unix timestamp representing the date.
     */
    public function getTimestamp()
    {
        // TODO: Implement getTimestamp() method.
    }

    /**
     * (PHP 5 &gt;=5.5.0)<br/>
     * Return time zone relative to given DateTime
     * @link http://www.php.net/manual/en/datetime.gettimezone.php
     * @return DateTimeZone
     * Returns a {@link http://www.php.net/manual/en/class.datetimezone.php DateTimeZone} object on success
     * or <b>FALSE</b> on failure.
     */
    public function getTimezone()
    {
        // TODO: Implement getTimezone() method.
    }
}
