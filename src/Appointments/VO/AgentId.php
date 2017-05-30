<?php namespace Skedify\Appointments\VO;

class AgentId
{
    private $agentId;

    public function __construct($agentId)
    {
        $this->agentId = $agentId;
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
        return $this->agentId;
    }

    public function __toString()
    {
        return $this->toString();
    }
}
