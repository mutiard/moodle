<?php

class __Mustache_810cdc502ba21b133c88295ebc95abd6 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '<div>
';
        // 'links' section
        $value = $context->find('links');
        $buffer .= $this->sectionA7e633dcdfe0c025b7106e1286a69edf($context, $indent, $value);
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function sectionA7e633dcdfe0c025b7106e1286a69edf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a class="sr-only sr-only-focusable" href="#{{{url}}}">{{{text}}}</a>
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <a class="sr-only sr-only-focusable" href="#';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= $value;
                $buffer .= '">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= $value;
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
