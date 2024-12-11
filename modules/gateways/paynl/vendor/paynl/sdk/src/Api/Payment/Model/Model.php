<?php

namespace Paynl\Api\Payment\Model;

abstract class Model
{
    /**
     * @return array
     */
    public function toArray()
    {
        $result = array();

        foreach ((array) $this as $index => $subItem) {
            if ($subItem === null) {
                continue;
            }
            $keyStr = str_replace(get_class(!empty($this) ? $this : ''), '', $index);
            $key = trim(!empty($keyStr) ? $keyStr : '');
            $result[$key] = $subItem instanceof Model
                ? $subItem->toArray()
                : $subItem;
        }

        return $result;
    }
}