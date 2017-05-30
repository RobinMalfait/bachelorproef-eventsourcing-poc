<?php namespace Skedify\Appointments\VO;

class SubjectId
{
    private $subjectId;

    public function __construct($subjectId)
    {
        $this->subjectId = $subjectId;
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
        return $this->subjectId;
    }

    public function __toString()
    {
        return $this->toString();
    }
}
