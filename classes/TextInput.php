<?php
class TextInput extends BaseInput
{
    public function renderInput(): string
    {
        return sprintf('<input type="text" name="%s" value="%s" class="form-control" placeholder="%s"></div>', $this->name, $this->value, $this->placeholder);
    }
}