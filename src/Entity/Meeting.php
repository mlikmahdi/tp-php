<?php
/**
 * Created by PhpStorm.
 * User: mahdi
 * Date: 17/12/2017
 * Time: 18:57
 */

declare (strict_types = 1);

namespace Application\Entity;

use DateTime;

final class Meeting
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var DateTime
     */
    private $start_date;

    /**
     * @var DateTime
     */
    private $end_date;

    public function __construct(int $id, string $title, string $description, datetime $startDate, datetime $endDate)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->start_date = $startDate;
        $this->end_date = $endDate;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return DateTime
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * @return DateTime
     */
    public function getEndDate()
    {
        return $this->end_date;
    }
}