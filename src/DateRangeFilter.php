<?php

namespace Ampeco\Filters;

use Laravel\Nova\Filters\Filter;

abstract class DateRangeFilter extends Filter
{
    public $component = 'date-range-filter';


    public function enableTime()
    {
        $this->withMeta(['enableTime' => true]);
        return $this;
    }

    public function dateFormat($format)
    {
        $this->withMeta(['dateFormat' => $format]);
        return $this;
    }

    public function placeholder($placeholder)
    {
        $this->withMeta(['placeholder' => $placeholder]);
        return $this;
    }
}
