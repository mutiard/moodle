<?php

class __Mustache_64e71fbe24ad87099ba7ad9af5db02c4 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $blocksContext = array();

        if ($partial = $this->mustache->loadPartial('core_form/element-select')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }
}
