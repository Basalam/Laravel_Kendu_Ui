<?php

namespace Kendo\Dataviz\UI;

class ChartXAxisItemTitle extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The background color of the title. Accepts a valid CSS color string, including hex and rgb.
    * @param string $value
    * @return \Kendo\Dataviz\UI\ChartXAxisItemTitle
    */
    public function background($value) {
        return $this->setProperty('background', $value);
    }

    /**
    * The border of the title.
    * @param \Kendo\Dataviz\UI\ChartXAxisItemTitleBorder|array $value
    * @return \Kendo\Dataviz\UI\ChartXAxisItemTitle
    */
    public function border($value) {
        return $this->setProperty('border', $value);
    }

    /**
    * The text color of the title. Accepts a valid CSS color string, including hex and rgb.
    * @param string $value
    * @return \Kendo\Dataviz\UI\ChartXAxisItemTitle
    */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
    * The font style of the title.
    * @param string $value
    * @return \Kendo\Dataviz\UI\ChartXAxisItemTitle
    */
    public function font($value) {
        return $this->setProperty('font', $value);
    }

    /**
    * The margin of the title. A numeric value will set all margins.
    * @param float|\Kendo\Dataviz\UI\ChartXAxisItemTitleMargin|array $value
    * @return \Kendo\Dataviz\UI\ChartXAxisItemTitle
    */
    public function margin($value) {
        return $this->setProperty('margin', $value);
    }

    /**
    * The padding of the title. A numeric value will set all paddings.
    * @param float|\Kendo\Dataviz\UI\ChartXAxisItemTitlePadding|array $value
    * @return \Kendo\Dataviz\UI\ChartXAxisItemTitle
    */
    public function padding($value) {
        return $this->setProperty('padding', $value);
    }

    /**
    * The position of the title.The supported values are:
    * @param string $value
    * @return \Kendo\Dataviz\UI\ChartXAxisItemTitle
    */
    public function position($value) {
        return $this->setProperty('position', $value);
    }

    /**
    * The rotation angle of the title. By default the title is not rotated.
    * @param float $value
    * @return \Kendo\Dataviz\UI\ChartXAxisItemTitle
    */
    public function rotation($value) {
        return $this->setProperty('rotation', $value);
    }

    /**
    * The text of the title.
    * @param string $value
    * @return \Kendo\Dataviz\UI\ChartXAxisItemTitle
    */
    public function text($value) {
        return $this->setProperty('text', $value);
    }

    /**
    * If set to true the chart will display the scatter chart x axis title. By default the scatter chart x axis title is visible.
    * @param boolean $value
    * @return \Kendo\Dataviz\UI\ChartXAxisItemTitle
    */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

    /**
    * Sets the visual option of the ChartXAxisItemTitle.
    * A function that can be used to create a custom visual for the title. The available argument fields are:
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\Dataviz\UI\ChartXAxisItemTitle
    */
    public function visual($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('visual', $value);
    }

//<< Properties
}

?>
