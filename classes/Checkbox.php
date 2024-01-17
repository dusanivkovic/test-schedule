<?php
class Checkbox extends BaseInput
{
    public array $checkboxs = ['pismeni', 'kontrolni'];
    public function renderInput(): string
    {
        return sprintf(
            '   <div class="form-check">
                    <input type="checkbox" name="%s" value="%s" class="form-check-input">
                </div>
            </div>', $this->name, $this->value);
    }
}