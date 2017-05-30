<?php namespace Skedify\Appointments\VO;

class CustomerId
{
    private $customerId;

    public function __construct($customerId)
    {
        $this->customerId = $customerId;
    }

    public static function generate()
    {
        return new self(ID::generate()->getId());
    }

    public static function fromString($input)
    {
        return new self($input);
    }

    public function toString()
    {
        return $this->customerId;
    }

    public function __toString()
    {
        return $this->toString();
    }
}
