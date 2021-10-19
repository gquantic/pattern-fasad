<?php

/**
 * Неймспейсы для талерантности
 */

namespace App\Travel;

/**
 * Подключаем подклассы.
 * К сожалению без автолоадера.
 */

require_once 'Train.php';
require_once 'Taxi.php';

use App\Travel\Types;

/**
 * Это и есть наш Фасад.
 * Отсюда же мы подключаем другие подклассы и реализовываем работу.
 */


class Travel
{
    /**
     * @var $maxDistance - Максимальная дистанция поездки будет доступна для подклассов для изменения.
     * @var $price - Цена за километр.
     */

    protected $maxDistance = 2000;
    protected $price = 9;

    public function __construct()
    {
        /**
         * Подключение самих подклассов.
         */

        $this->train = new Types\Train();
        $this->taxi = new Types\Taxi();
    }

    /**
     * Получить цену за поезд из подкласса поезда.
     */

    public function train_getTotal($distance)
    {
        return $this->train->getAmount($distance);
    }

    /**
     * Получить цену за поезд из подкласса такси.
     */

    public function taxi_getTotal($distance)
    {
        return $this->taxi->getAmount($distance);
    }
}
