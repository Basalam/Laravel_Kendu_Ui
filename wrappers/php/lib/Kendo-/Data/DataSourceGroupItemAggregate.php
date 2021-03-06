<?php

namespace Kendo\Data;

class DataSourceGroupItemAggregate extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The name of the aggregate function. Specifies the aggregate function. The supported aggregates are "average", "count", "max", "min" and "sum".
    * @param string $value
    * @return \Kendo\Data\DataSourceGroupItemAggregate
    */
    public function aggregate($value) {
        return $this->setProperty('aggregate', $value);
    }

    /**
    * The data item field which will be used to calculate the aggregates.
    * @param string $value
    * @return \Kendo\Data\DataSourceGroupItemAggregate
    */
    public function field($value) {
        return $this->setProperty('field', $value);
    }

//<< Properties
}

?>
