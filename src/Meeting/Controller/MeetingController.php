<?php
/**
 * Created by PhpStorm.
 * User: mahdi
 * Date: 15/12/2017
 * Time: 11:35
 */

declare (strict_types=1);

namespace Meeting\Controller;

use Meeting\Repository\MeetingRepository;


final class MeetingController
{
    /**
     * @var MeetingRepository
     */
    private $meetingRepository;

    public function __construct(MeetingRepository $meetingRepository)
    {
        $this->meetingRepository = $meetingRepository;
    }

    public function indexAction() : string
    {
        $meetings = $this->meetingRepository->fetchAll();

        ob_start();
        include __DIR__.'/../../../views/meeting.phtml';
        return ob_get_clean();
    }
}