<?php namespace Skedify\Appointments\VO;

use DateTime;

class DateRange {

    private $start;

    private $end;

    /**
     * DateRange constructor.
     *
     * @param $start
     * @param $end
     */
    private function __construct($start, $end)
    {
        $this->start = $start;
        $this->end = $end;
    }

    public static function fromTimestamps($start, $end)
    {
        return new self($start, $end);
    }

    public static function timestampToDateTime($timestamp)
    {
        $datetime = new DateTime();
        $datetime->setTimestamp($timestamp);

        return $datetime;
    }

    /**
     * @return mixed
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @return mixed
     */
    public function getEnd()
    {
        return $this->end;
    }

}