<?php

namespace Vivait\InspectorBundle\Event;

use Symfony\Component\EventDispatcher\Event;

class InspectionEvent extends Event {

    /**
     * @var \Vivait\InspectorBundle\Entity\Inspection
     */
    private $inspection;

    function __construct(\Vivait\InspectorBundle\Entity\Inspection $inspection)
    {
        $this->inspection = $inspection;
    }

    /**
     * Gets inspection
     * @return \Vivait\InspectorBundle\Entity\Inspection
     */
    public function getInspection()
    {
        return $this->inspection;
    }

    /**
     * Sets inspection
     * @param \Vivait\InspectorBundle\Entity\Inspection $inspection
     * @return $this
     */
    public function setInspection($inspection)
    {
        $this->inspection = $inspection;

        return $this;
    }
}