<?php
/**
 * Created by PhpStorm.
 * User: mahdi
 * Date: 15/12/2017
 * Time: 13:52
 */

declare (strict_types = 1);

namespace Meeting\Controller;

use Application\Controller\ErrorController;
use Meeting\Exception\MeetingNotFoundException;
use Meeting\Repository\MeetingRepository;

final class ShowMeetingController
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
        try {
            $meeting = $this->meetingRepository->get($_GET['name'] ?? '');

            ob_start();
            include __DIR__.'/../../../views/meeting-details.phtml';
            return ob_get_clean();
        } catch (MeetingNotFoundException $exception) {
            return (new ErrorController($exception))->error404Action();
        }
    }

}