<?php
class Checkbox extends BaseInput
{
    public function renderInput(): string
    {
        return sprintf('
                <div class="form-check">
                    <label class="form-check-label" for="%s">%s</label>    
                    <input class="form-check-input" type="checkbox" name="%s" value="%s">
                </div>
            </div>', $this->for, $this->value, $this->name, $this->value);
    }
}