<?php
class DateInput extends BaseInput
{
    public function renderInput(): string
    {
        return sprintf('<input type="week" class="form-control" id="sedmica" name="%s" ></div>', $this->name);
    }
}