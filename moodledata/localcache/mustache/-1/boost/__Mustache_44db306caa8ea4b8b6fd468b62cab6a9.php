<?php

class __Mustache_44db306caa8ea4b8b6fd468b62cab6a9 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '<div data-region="paging-content-item"
';
        $buffer .= $indent . '     data-page="';
        $value = $this->resolveValue($context->find('page'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '     class="';
        // 'active' inverted section
        $value = $context->find('active');
        if (empty($value)) {
            
            $buffer .= 'hidden';
        }
        $buffer .= ' ';
        $blockFunction = $context->findInBlock('classes');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
        }
        $buffer .= '">
';
        $blockFunction = $context->findInBlock('content');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $buffer .= $indent . '        ';
            $value = $this->resolveValue($context->find('content'), $context);
            $buffer .= $value;
            $buffer .= '
';
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
