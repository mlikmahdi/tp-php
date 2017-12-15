<?php
/**
 * Created by PhpStorm.
 * User: mahdi
 * Date: 14/12/2017
 * Time: 14:56
 */

declare (strict_types = 1);

namespace Application\Entity;

final class Film
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    private $showtime;

    public function __construct(int $id, string $name, string $description, array $showtime = [] )
    {
        $this->id = $id;
        $this->name = $name;
        $this->description =$description;
        $this->showtime = $showtime;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    public function getShowtime(): array
    {
        return $this->showtime;
    }
}