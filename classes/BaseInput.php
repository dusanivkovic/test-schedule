<?php
abstract class BaseInput extends HtmlElement
{
    public string $label;
    public string $name;
    public $for;
    public string $placeholder;
    public string $value;
    public string $bootstrapClass;


    public function __construct(string $name, string $label = '', string $for ='', string $placeholder= '', string $value = '', string $bootstrapClass = 'col-md-4')
    {
        $this->name = $name;
        $this->label = $label;
        $this->for = $for;
        $this->placeholder = $placeholder;
        $this->value = $value;
        $this->bootstrapClass = $bootstrapClass;
    }

    public function render (): string
    {
        return sprintf('
            <div class="%s">
                <label for="%s" class="form-check-label">%s</label>%s', $this->bootstrapClass, $this->for, $this->label, $this->renderInput());
    }

    abstract public function renderInput (): string;
}