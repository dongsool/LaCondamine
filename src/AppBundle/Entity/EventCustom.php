<?php

namespace AppBundle\Entity;

use AncaRebeca\FullCalendarBundle\Model\FullCalendarEvent;

/**
 * EventCustom
 */
class EventCustom
{
    /**
     * @var int
     */
    private $id;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}



class CalendarEvent extends FullCalendarEvent
{
    // Your fields
}
