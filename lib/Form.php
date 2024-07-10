<?php
class Form
{
    public static function checked($current_value, $select_value)
    {
        if ($current_value == $select_value) return 'checked';
    }

    public static function selected($current_value, $select_value)
    {
        if ($current_value == $select_value) return 'selected';
    }
}
