<?php
class Form extends HtmlElement
{
    private array $elements = [];
    public string $action;
    public string $method;
    public string $id;

    public function __construct(string $action = '', $method = 'post', $id='form')
    {
        $this->action = $action;
        $this->method = $method;
        $this->id = $id;
    }
    
    public function addElement (HtmlElement $el)
    {
        $this->elements[] = $el;
    }

    public function render (): string
    {
        $content = implode(PHP_EOL, array_map(fn ($el) => $el->render(), $this->elements));
        return sprintf('
            <form id="%s" action="%s" method="%s" class="row g-3 align-items-center">
                <div class="col-12 card text-bg-info p-3 my-3"><span class="small color-info">Унеси име и презиме, одабери предмет, врсту провјере, разред, као и сва одјељења разреда која имају провјеру у изабраној седмици. Уколико имаш више провјера или провјере нису у истој седмици, потребно је за сваку провјеру унијети тражене податке и прослиједити</span></div>
                %s
            </form>', $this->id, $this->action, $this->method, $content);
    }

}