<?php

class __Mustache_e79a71a2f2ddc62ed7040e36a5ba94e6 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        // 'pagingbar' section
        $value = $context->find('pagingbar');
        $buffer .= $this->section17a4ea167597058192b1afca571788d5($context, $indent, $value);

        return $buffer;
    }

    private function section6082c1f5941a12f77083512a9a2e6a62(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'previous';
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
                
                $buffer .= 'previous';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC56961156ce091005753174944b9b60f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{< block_myoverview/paging-bar-item }}
                {{$item-content}}
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">{{#str}}previous{{/str}}</span>
                {{/item-content}}
            {{/ block_myoverview/paging-bar-item }}
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
                
                $buffer .= $indent . '            ';
                
        $blocksContext['item-content'] = array($this, 'block46d43139f778beb6737b2c055f3db8bc');
                
                if ($parent = $this->mustache->loadPartial('block_myoverview/paging-bar-item')) {
                    $context->pushBlockContext($blocksContext);
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCc31dc17e0b6511dd9e18ce8262f22f2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{< block_myoverview/paging-bar-item }}
                {{$pagenumber}}first{{/pagenumber}}
            {{/ block_myoverview/paging-bar-item }}
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
                
                $buffer .= $indent . '            ';
                
        $blocksContext['pagenumber'] = array($this, 'block5df2fc85ff072023003e7828b00dd93b');
                
                if ($parent = $this->mustache->loadPartial('block_myoverview/paging-bar-item')) {
                    $context->pushBlockContext($blocksContext);
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA056dbdfdb4de7f39713779ae205bb30(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> block_myoverview/paging-bar-item }}
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
                
                if ($partial = $this->mustache->loadPartial('block_myoverview/paging-bar-item')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBa2d023823c7da445a00b1132097a8a8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{< block_myoverview/paging-bar-item }}
                {{$pagenumber}}last{{/pagenumber}}
            {{/ block_myoverview/paging-bar-item }}
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
                
                $buffer .= '            ';
                
        $blocksContext['pagenumber'] = array($this, 'blockC200067c32df72ae0bd9cd69bb24abac');
                
                if ($parent = $this->mustache->loadPartial('block_myoverview/paging-bar-item')) {
                    $context->pushBlockContext($blocksContext);
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBa8bb7b1bb267b8cc98d38fe4bf9f047(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'next';
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
                
                $buffer .= 'next';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6c2917b7549dc7ff68224e0d1ddbe6d8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{< block_myoverview/paging-bar-item }}
                {{$item-content}}
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">{{#str}}next{{/str}}</span>
                {{/item-content}}
            {{/ block_myoverview/paging-bar-item }}
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
                
                $buffer .= '            ';
                
        $blocksContext['item-content'] = array($this, 'block5069ddc5f2f4cebc669851d0a4cd6abb');
                
                if ($parent = $this->mustache->loadPartial('block_myoverview/paging-bar-item')) {
                    $context->pushBlockContext($blocksContext);
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8233bbe9f475f3eb7440171ddc3ed500(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\', \'block_myoverview/paging_bar\'], function($, PagingBar) {
    var root = $(\'#{{$pagingbarid}}paging-bar-{{uniqid}}{{/pagingbarid}}\');
    PagingBar.registerEventListeners(root);
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
                
                $buffer .= $indent . 'require([\'jquery\', \'block_myoverview/paging_bar\'], function($, PagingBar) {
';
                $buffer .= $indent . '    var root = $(\'#';
                $blockFunction = $context->findInBlock('pagingbarid');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    $buffer .= 'paging-bar-';
                    $value = $this->resolveValue($context->find('uniqid'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                }
                $buffer .= '\');
';
                $buffer .= $indent . '    PagingBar.registerEventListeners(root);
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section17a4ea167597058192b1afca571788d5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<nav aria-label="{{label}}"
     id="{{$pagingbarid}}paging-bar-{{uniqid}}{{/pagingbarid}}"
     data-region="paging-bar"
     data-page-count="{{pagecount}}">

    <ul class="pagination">
        {{#previous}}
            {{< block_myoverview/paging-bar-item }}
                {{$item-content}}
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">{{#str}}previous{{/str}}</span>
                {{/item-content}}
            {{/ block_myoverview/paging-bar-item }}
        {{/previous}}
        {{#first}}
            {{< block_myoverview/paging-bar-item }}
                {{$pagenumber}}first{{/pagenumber}}
            {{/ block_myoverview/paging-bar-item }}
        {{/first}}
        {{#pages}}
            {{> block_myoverview/paging-bar-item }}
        {{/pages}}
        {{#last}}
            {{< block_myoverview/paging-bar-item }}
                {{$pagenumber}}last{{/pagenumber}}
            {{/ block_myoverview/paging-bar-item }}
        {{/last}}
        {{#next}}
            {{< block_myoverview/paging-bar-item }}
                {{$item-content}}
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">{{#str}}next{{/str}}</span>
                {{/item-content}}
            {{/ block_myoverview/paging-bar-item }}
        {{/next}}
    </ul>
</nav>
{{#js}}
require([\'jquery\', \'block_myoverview/paging_bar\'], function($, PagingBar) {
    var root = $(\'#{{$pagingbarid}}paging-bar-{{uniqid}}{{/pagingbarid}}\');
    PagingBar.registerEventListeners(root);
});
{{/js}}
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
                
                $buffer .= $indent . '<nav aria-label="';
                $value = $this->resolveValue($context->find('label'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '     id="';
                $blockFunction = $context->findInBlock('pagingbarid');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    $buffer .= 'paging-bar-';
                    $value = $this->resolveValue($context->find('uniqid'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                }
                $buffer .= '"
';
                $buffer .= $indent . '     data-region="paging-bar"
';
                $buffer .= $indent . '     data-page-count="';
                $value = $this->resolveValue($context->find('pagecount'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <ul class="pagination">
';
                // 'previous' section
                $value = $context->find('previous');
                $buffer .= $this->sectionC56961156ce091005753174944b9b60f($context, $indent, $value);
                // 'first' section
                $value = $context->find('first');
                $buffer .= $this->sectionCc31dc17e0b6511dd9e18ce8262f22f2($context, $indent, $value);
                // 'pages' section
                $value = $context->find('pages');
                $buffer .= $this->sectionA056dbdfdb4de7f39713779ae205bb30($context, $indent, $value);
                // 'last' section
                $value = $context->find('last');
                $buffer .= $this->sectionBa2d023823c7da445a00b1132097a8a8($context, $indent, $value);
                // 'next' section
                $value = $context->find('next');
                $buffer .= $this->section6c2917b7549dc7ff68224e0d1ddbe6d8($context, $indent, $value);
                $buffer .= $indent . '    </ul>
';
                $buffer .= $indent . '</nav>
';
                // 'js' section
                $value = $context->find('js');
                $buffer .= $this->section8233bbe9f475f3eb7440171ddc3ed500($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block46d43139f778beb6737b2c055f3db8bc($context)
    {
        $indent = $buffer = '';
        $blocksContext = array();
        $buffer .= '                    <span aria-hidden="true">&laquo;</span>
';
        $buffer .= $indent . '                    <span class="sr-only">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section6082c1f5941a12f77083512a9a2e6a62($context, $indent, $value);
        $buffer .= '</span>
';
    
        return $buffer;
    }

    public function block5df2fc85ff072023003e7828b00dd93b($context)
    {
        $indent = $buffer = '';
        $blocksContext = array();
        $buffer .= 'first';
    
        return $buffer;
    }

    public function blockC200067c32df72ae0bd9cd69bb24abac($context)
    {
        $indent = $buffer = '';
        $blocksContext = array();
        $buffer .= 'last';
    
        return $buffer;
    }

    public function block5069ddc5f2f4cebc669851d0a4cd6abb($context)
    {
        $indent = $buffer = '';
        $blocksContext = array();
        $buffer .= '                    <span aria-hidden="true">&raquo;</span>
';
        $buffer .= $indent . '                    <span class="sr-only">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionBa8bb7b1bb267b8cc98d38fe4bf9f047($context, $indent, $value);
        $buffer .= '</span>
';
    
        return $buffer;
    }
}
