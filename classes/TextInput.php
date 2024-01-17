<?php
class TextInput extends BaseInput
{
    public function renderInput(): string
    {
        return sprintf('<input type="text" name="%s" value="%s" class="form-select" placeholder="%s"></div>', $this->name, $this->value, $this->placeholder);
    }
}