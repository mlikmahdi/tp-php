<?php
/**
 * Created by PhpStorm.
 * User: mahdi
 * Date: 15/12/2017
 * Time: 12:17
 */

declare (strict_types =1 );

namespace Meeting\Entity;

final class Meeting
{
    /**
     * @var string
     */
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function name() : string
    {
        return $this->name;
    }
}