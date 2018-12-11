<?php

class __Mustache_5e154aa3f682a198cfb3bba071a92ae4 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        // 'tagscount' section
        $value = $context->find('tagscount');
        $buffer .= $this->sectionFcb5e3c46ecd29c67faa484457458f28($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionBcc0a3dfaf8c771349847803bdb8f866($context, $indent, $value);

        return $buffer;
    }

    private function sectionAd141f843e5c5404db15d3df3540bab5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <b>{{label}}:</b>
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
                
                $buffer .= $indent . '    <b>';
                $value = $this->resolveValue($context->find('label'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ':</b>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC97881a730b88ac5af39b988a93d9309(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'class="overlimit"';
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
                
                $buffer .= 'class="overlimit"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section35cd54248ef1a2a54527fd6114b87692(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'standardtag';
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
                
                $buffer .= 'standardtag';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1cf6d5b31ed97d81500b07bb449c7fd6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <span class="flagged-tag">{{name}}</span></a>
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
                
                $buffer .= $indent . '                    <span class="flagged-tag">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFf0ce1e1d5c63f3d62b2642eacd53b77(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li {{#overlimit}}class="overlimit"{{/overlimit}}>
                <a href="{{viewurl}}" class="label label-info {{#isstandard}}standardtag{{/isstandard}}" >
                {{#flag}}
                    <span class="flagged-tag">{{name}}</span></a>
                {{/flag}}
                {{^flag}}
                    {{name}}</a>
                {{/flag}}
            </li>
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
                
                $buffer .= $indent . '            <li ';
                // 'overlimit' section
                $value = $context->find('overlimit');
                $buffer .= $this->sectionC97881a730b88ac5af39b988a93d9309($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('viewurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="label label-info ';
                // 'isstandard' section
                $value = $context->find('isstandard');
                $buffer .= $this->section35cd54248ef1a2a54527fd6114b87692($context, $indent, $value);
                $buffer .= '" >
';
                // 'flag' section
                $value = $context->find('flag');
                $buffer .= $this->section1cf6d5b31ed97d81500b07bb449c7fd6($context, $indent, $value);
                // 'flag' inverted section
                $value = $context->find('flag');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    ';
                    $value = $this->resolveValue($context->find('name'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</a>
';
                }
                $buffer .= $indent . '            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section88b25ad7fde04eac92bb3043d7e6ed40(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'moretags, core_tag';
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
                
                $buffer .= 'moretags, core_tag';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5c41e879729f0a186e15bde6fbb7ab5d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'lesstags, core_tag';
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
                
                $buffer .= 'lesstags, core_tag';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCe63e055122995a77a8338d1e89308c1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li class="visibleifjs">
                <a href="#" class="tagmorelink">{{#str}}moretags, core_tag{{/str}}</a>
            </li>
            <li class="visibleifjs">
                <a href="#" class="taglesslink">{{#str}}lesstags, core_tag{{/str}}</a>
            </li>
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
                
                $buffer .= $indent . '            <li class="visibleifjs">
';
                $buffer .= $indent . '                <a href="#" class="tagmorelink">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section88b25ad7fde04eac92bb3043d7e6ed40($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '            </li>
';
                $buffer .= $indent . '            <li class="visibleifjs">
';
                $buffer .= $indent . '                <a href="#" class="taglesslink">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section5c41e879729f0a186e15bde6fbb7ab5d($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFcb5e3c46ecd29c67faa484457458f28(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="tag_list hideoverlimit {{classes}}">
    {{#label}}
    <b>{{label}}:</b>
    {{/label}}
    <ul class="inline-list">
        {{#tags}}
            <li {{#overlimit}}class="overlimit"{{/overlimit}}>
                <a href="{{viewurl}}" class="label label-info {{#isstandard}}standardtag{{/isstandard}}" >
                {{#flag}}
                    <span class="flagged-tag">{{name}}</span></a>
                {{/flag}}
                {{^flag}}
                    {{name}}</a>
                {{/flag}}
            </li>
        {{/tags}}
        {{#overflow}}
            <li class="visibleifjs">
                <a href="#" class="tagmorelink">{{#str}}moretags, core_tag{{/str}}</a>
            </li>
            <li class="visibleifjs">
                <a href="#" class="taglesslink">{{#str}}lesstags, core_tag{{/str}}</a>
            </li>
        {{/overflow}}
    </ul>
    </div>
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
                
                $buffer .= $indent . '    <div class="tag_list hideoverlimit ';
                $value = $this->resolveValue($context->find('classes'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                // 'label' section
                $value = $context->find('label');
                $buffer .= $this->sectionAd141f843e5c5404db15d3df3540bab5($context, $indent, $value);
                $buffer .= $indent . '    <ul class="inline-list">
';
                // 'tags' section
                $value = $context->find('tags');
                $buffer .= $this->sectionFf0ce1e1d5c63f3d62b2642eacd53b77($context, $indent, $value);
                // 'overflow' section
                $value = $context->find('overflow');
                $buffer .= $this->sectionCe63e055122995a77a8338d1e89308c1($context, $indent, $value);
                $buffer .= $indent . '    </ul>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBcc0a3dfaf8c771349847803bdb8f866(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\'], function($) {
    $(\'.tag_list .tagmorelink\').click(function(e) {
        e.preventDefault();
        $(this).closest(\'.tag_list\').removeClass(\'hideoverlimit\');
    });
    $(\'.tag_list .taglesslink\').click(function(e) {
        e.preventDefault();
        $(this).closest(\'.tag_list\').addClass(\'hideoverlimit\');
    });
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
                
                $buffer .= $indent . 'require([\'jquery\'], function($) {
';
                $buffer .= $indent . '    $(\'.tag_list .tagmorelink\').click(function(e) {
';
                $buffer .= $indent . '        e.preventDefault();
';
                $buffer .= $indent . '        $(this).closest(\'.tag_list\').removeClass(\'hideoverlimit\');
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '    $(\'.tag_list .taglesslink\').click(function(e) {
';
                $buffer .= $indent . '        e.preventDefault();
';
                $buffer .= $indent . '        $(this).closest(\'.tag_list\').addClass(\'hideoverlimit\');
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
