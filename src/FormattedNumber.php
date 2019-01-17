<?php

namespace MZiraki\Fields;

use Laravel\Nova\Fields\Number;

class FormattedNumber extends Number
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'formatted-number-field';

    /**
     * Create a new field.
     *
     * @param  string      $name
     * @param  string|null $attribute
     * @param  mixed|null  $resolveCallback
     * @return void
     */
    public function __construct($name, $attribute = null, $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback);

        $this->displayUsing(function ($value) {
            return !is_null($value) ? number_format($value) : null;
        });
    }
}
