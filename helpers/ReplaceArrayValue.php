<?php

    namespace nox\base\helpers;

    /**
     * Object that represents the replacement of array value while performing [[ArrayHelper::merge()]].
     *
     * Usage example:
     *
     * ```php
     * $array1 = [
     *     'ids' => [
     *         1,
     *     ],
     *     'validDomains' => [
     *         'example.com',
     *         'www.example.com',
     *     ],
     * ];
     *
     * $array2 = [
     *     'ids' => [
     *         2,
     *     ],
     *     'validDomains' => new \yii\helpers\ReplaceArrayValue([
     *         'yiiframework.com',
     *         'www.yiiframework.com',
     *     ]),
     * ];
     *
     * $result = \yii\helpers\ArrayHelper::merge($array1, $array2);
     * ```
     *
     * The result will be
     *
     * ```php
     * [
     *     'ids' => [
     *         1,
     *         2,
     *     ],
     *     'validDomains' => [
     *         'yiiframework.com',
     *         'www.yiiframework.com',
     *     ],
     * ]
     * ```
     *
     * @author Robert Korulczyk <robert@korulczyk.pl>
     * @since  2.0.10
     */
    class ReplaceArrayValue
    {
        /**
         * @var mixed value used as replacement.
         */
        public $value;


        /**
         * Constructor.
         *
         * @param mixed $value value used as replacement.
         */
        public function __construct($value)
        {
            $this->value = $value;
        }
    }