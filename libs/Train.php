<?php

namespace App\Travel\Types;
use App\Travel\Travel;

/**
 * Класс поезда.
 * Я опишу только один, так как второй подкласс по сути копия.
 *
 * В общем мы наследуем главный класс-фасад
 */

class Train extends Travel
{
    public function __construct()
    {
        /**
         * Меняем тариф за поезд, он у нас дешевле, чем такси. В рашке живём.
         *
         * Не забываем про принцип открытости-закрытости:
         * Цена у нас с идентификатором @protected, что позволяет нам избежать изменений из любых мест, позволяя
         * вносить их в наследуемых классах.
         */

        $this->price = 6;
    }

    /**
     * Функция определяющая цену
     *
     * @var $Дистанция *
     * @var $ТарифЗаКМ
     */

    public function getAmount($distance)
    {
        return $distance * $this->price;
    }
}