<?php
/**
 * Created by PhpStorm.
 * User: mahdi
 * Date: 15/12/2017
 * Time: 13:52
 */

declare (strict_types = 1);

namespace Meeting\Factory;

use Meeting\Controller\ShowMeetingController;
use Meeting\Repository\MeetingRepository;
use Psr\Container\ContainerInterface;

final class ShowMeetingControllerFactory
{
    public function __invoke(ContainerInterface $container) : ShowMeetingController
    {
        $meetingRepository = $container->get(MeetingRepository::class);

        return new ShowMeetingController($meetingRepository);
    }
}