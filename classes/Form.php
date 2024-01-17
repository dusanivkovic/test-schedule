<?php
class Form extends HtmlElement
{
    private array $elements = [];
    public string $action;
    public string $method;
    // protected array $elements = [];

    public function __construct(string $action = '', $method = 'post')
    {
        $this->action = $action;
        $this->method = $method;
    }
    
    public function addElement (HtmlElement $el)
    {
        $this->elements[] = $el;
    }

    public function render (): string
    {
        $content = implode(PHP_EOL, array_map(fn ($el) => $el->render(), $this->elements));
        return sprintf('
            <form action="%s" method="%s" class="row g-3 align-items-center">
                %s
            </form', $this->action, $this->method, $content);
    }

}