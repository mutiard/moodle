<?php

class __Mustache_3ca98c7f2b4f3438dd07b4f3423e22f5 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '<div id="';
        $blockFunction = $context->findInBlock('id');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $buffer .= 'courses-view-status-';
            $value = $this->resolveValue($context->find('uniqid'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
        }
        $buffer .= '"
';
        $buffer .= $indent . '     data-status="';
        $blockFunction = $context->findInBlock('status');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
        }
        $buffer .= '">
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('block_myoverview/course-paging-content')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="text-xs-center text-center">
';
        if ($partial = $this->mustache->loadPartial('block_myoverview/paging-bar')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionE90edc9173a1d892404a0e5b8e7982c9($context, $indent, $value);

        return $buffer;
    }

    private function sectionE90edc9173a1d892404a0e5b8e7982c9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\', \'block_myoverview/paging_bar\', \'block_myoverview/paging_content\'],
    function($, PagingBar, PagingContent) {

    var root = $(\'#{{$id}}courses-view-status-{{uniqid}}{{/id}}\');
    var pagingBarElement = root.find(PagingBar.rootSelector);
    var pagingContentElement = root.find(PagingContent.rootSelector);

    var content = new PagingContent(pagingContentElement, pagingBarElement);
    content.registerEventListeners();
});
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
                
                $buffer .= $indent . 'require([\'jquery\', \'block_myoverview/paging_bar\', \'block_myoverview/paging_content\'],
';
                $buffer .= $indent . '    function($, PagingBar, PagingContent) {
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    var root = $(\'#';
                $blockFunction = $context->findInBlock('id');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    $buffer .= 'courses-view-status-';
                    $value = $this->resolveValue($context->find('uniqid'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                }
                $buffer .= '\');
';
                $buffer .= $indent . '    var pagingBarElement = root.find(PagingBar.rootSelector);
';
                $buffer .= $indent . '    var pagingContentElement = root.find(PagingContent.rootSelector);
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    var content = new PagingContent(pagingContentElement, pagingBarElement);
';
                $buffer .= $indent . '    content.registerEventListeners();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
