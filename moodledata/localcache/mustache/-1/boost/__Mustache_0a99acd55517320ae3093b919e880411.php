<?php

class __Mustache_0a99acd55517320ae3093b919e880411 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        
        $blocksContext['classes'] = array($this, 'block76712dfca4fdaf630450b0fa908d5827');
        $blocksContext['content'] = array($this, 'block94d124c60dc2b1e1792a9b33a975bc18');
        
        if ($parent = $this->mustache->loadPartial('block_myoverview/paging-content-item')) {
            $context->pushBlockContext($blocksContext);
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function section84e92add636554bd1d15382f3c79a8c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> block_myoverview/courses-view-course-item }}
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
                
                if ($partial = $this->mustache->loadPartial('block_myoverview/courses-view-course-item')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block76712dfca4fdaf630450b0fa908d5827($context)
    {
        $indent = $buffer = '';
        $blocksContext = array();
        $buffer .= $indent . 'row';
    
        return $buffer;
    }

    public function block94d124c60dc2b1e1792a9b33a975bc18($context)
    {
        $indent = $buffer = '';
        $blocksContext = array();
        // 'courses' section
        $value = $context->find('courses');
        $buffer .= $this->section84e92add636554bd1d15382f3c79a8c0($context, $indent, $value);
    
        return $buffer;
    }
}
