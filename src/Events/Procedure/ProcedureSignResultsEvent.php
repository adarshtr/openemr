<?php


namespace OpenEMR\Events\Procedure;

use Symfony\Component\EventDispatcher\Event;

class ProcedureSignResultsEvent extends Event
{
    /**
     * This event is triggered after a user has been created, and an assoc
     * array containing the POST of new user data is passed to the event object
     */
    const EVENT_HANDLE = 'sign.results';

    private $resultData;

    /**
     * ProcedureSignResultsEvent constructor.
     * @param $resultData
     */
    public function __construct($resultData)
    {
        $this->resultData = $resultData;
    }

    /**
     * @return mixed
     */
    public function getResultData()
    {
        return $this->resultData;
    }

    /**
     * @param mixed $resultData
     */
    public function setResultData($resultData): void
    {
        $this->resultData = $resultData;
    }

}
