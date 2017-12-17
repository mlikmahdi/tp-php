<?php
/**
 * Created by PhpStorm.
 * User: mahdi
 * Date: 15/12/2017
 * Time: 11:51
 */

declare (strict_types=1);

namespace Meeting\Repository;

use Meeting\Collection\MeetingCollection;
use Meeting\Entity\Meeting;
use Meeting\Exception\MeetingNotFoundException;
use PDO;

class MeetingRepository
{
    /**
     * @var PDO
     */
    private $pdo;

    private function __construct(PDO $pdo)
    {
        $this->pdo =$pdo;
    }

    public function fetchAll() : MeetingCollection
    {
        $result = $this->pdo->query('SELECT id, title, description, start_date as startDate, end_date as endDate FROM meeting');
        $meetings = [];
        while ($meeting = $result->fetch()) {
            $meetings[] = new Meeting($meetings['title'],$meetings['description']
                                    , $meetings['start_date'], $meetings['end_date']);
        }
        return new MeetingCollection(...$meetings);
    }

    public function get(string $name) : Meeting
    {
        $statement = $this->pdo->prepare('SELECT id, title FROM films WHERE title = :name');
        $statement->execute([':name' => $name]);
        $meeting = $statement->fetch();
        if (!$meeting) {
            throw new MeetingNotFoundException();
        }
        return new Meeting($meeting['title']);
    }

}