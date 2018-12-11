<?php

class __Mustache_594a52e3263928daa923f4a59ca0fc65 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        
        $blocksContext['paging-content-item'] = array($this, 'block37e0d75753bf22a8acd327a5f09f24f7');
        
        if ($parent = $this->mustache->loadPartial('block_myoverview/paging-content')) {
            $context->pushBlockContext($blocksContext);
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }


    public function block37e0d75753bf22a8acd327a5f09f24f7($context)
    {
        $indent = $buffer = '';
        $blocksContext = array();
        if ($partial = $this->mustache->loadPartial('block_myoverview/course-paging-content-item')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
    
        return $buffer;
    }
}
