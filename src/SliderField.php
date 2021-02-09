<?php

namespace Absolutezeroo\SliderField;

use Laravel\Nova\Fields\Field;

class SliderField extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'slider-field';

    /**
     * Set the minimum value, defaults to 0
     *
     * @param float $min
     *
     * @return SliderField
     */
    public function min(float $min)
    {
        return $this->withMeta(['min' => $min]);
    }

    /**
     * Set the maximum value, defaults to 100
     *
     * @param float $max
     *
     * @return SliderField
     */
    public function max(float $max)
    {
        return $this->withMeta(['max' => $max]);
    }

    /**
     * Set the interval of which the slider should increment/decrement, default is 1
     *
     * @param float $interval
     *
     * @return SliderField
     */
    public function interval(float $interval)
    {
        return $this->withMeta(['interval' => $interval]);
    }

    /**
     * Set the placement of the tooltip on the show view
     *
     * @param string $placement
     *
     * @return SliderField
     */
    public function placementShow(string $placement)
    {
        return $this->withMeta(['placementShow' => $placement]);
    }

    /**
     * Set the placement of the tooltip on the form view
     *
     * @param string $placement
     *
     * @return SliderField
     */
    public function placementForm(string $placement)
    {
        return $this->withMeta(['placementForm' => $placement]);
    }

    /**
     * Don't show a tooltip on the detail page
     *
     * @return SliderField
     */
    public function withoutTooltip()
    {
        return $this->withMeta(['tooltip' => false]);
    }

    /**
     * Show a tooltip on hover on the detail page
     *
     * @return SliderField
     */
    public function tooltipOnHover()
    {
        return $this->withMeta(['tooltip' => 'hover']);
    }

    /**
     * Custom formatter for the text in the tooltip
     *
     * @param string $formatter The format to use, for example "{value} %"
     *
     * @return SliderField
     */
    public function formatter(string $formatter)
    {
        return $this->withMeta(['formatter' => $formatter]);
    }
}
