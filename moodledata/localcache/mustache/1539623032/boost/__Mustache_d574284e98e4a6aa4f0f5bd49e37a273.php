<?php

class __Mustache_d574284e98e4a6aa4f0f5bd49e37a273 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '<nav class="list-group">
';
        // 'flatnavigation' section
        $value = $context->find('flatnavigation');
        $buffer .= $this->sectionD800f71a73fbada37097eb2cd79dabfb($context, $indent, $value);
        $buffer .= $indent . '</nav>
';

        return $buffer;
    }

    private function section2d88b357993e4a12230fae6669f2c68d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
</nav>
<nav class="list-group m-t-1">
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
                
                $buffer .= $indent . '</nav>
';
                $buffer .= $indent . '<nav class="list-group m-t-1">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE262a41669da4e6e3b97fcdc38c27010(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'font-weight-bold';
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
                
                $buffer .= 'font-weight-bold';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDe9955ab2a0642065d5e708bf9e87436(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/folder';
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
                
                $buffer .= 'i/folder';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC233b6e176c5ffa832ad3656ce0ea548(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="media">
                    <span class="media-left">
                        {{#pix}}i/folder{{/pix}}
                    </span>
                    <span class="media-body">{{{text}}}</span>
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
                
                $buffer .= $indent . '                <div class="media">
';
                $buffer .= $indent . '                    <span class="media-left">
';
                $buffer .= $indent . '                        ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->sectionDe9955ab2a0642065d5e708bf9e87436($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </span>
';
                $buffer .= $indent . '                    <span class="media-body">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= $value;
                $buffer .= '</span>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1aae6300d658a4fdd7e5bd9f3bb88020(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a class="list-group-item list-group-item-action {{#isactive}}font-weight-bold{{/isactive}}" href="{{{action}}}" data-key="{{key}}">
        <div class="m-l-{{get_indent}}">
            {{#is_section}}
                <div class="media">
                    <span class="media-left">
                        {{#pix}}i/folder{{/pix}}
                    </span>
                    <span class="media-body">{{{text}}}</span>
                </div>
            {{/is_section}}
            {{^is_section}}
                {{{text}}}
            {{/is_section}}
        </div>
    </a>
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
                
                $buffer .= $indent . '    <a class="list-group-item list-group-item-action ';
                // 'isactive' section
                $value = $context->find('isactive');
                $buffer .= $this->sectionE262a41669da4e6e3b97fcdc38c27010($context, $indent, $value);
                $buffer .= '" href="';
                $value = $this->resolveValue($context->find('action'), $context);
                $buffer .= $value;
                $buffer .= '" data-key="';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '        <div class="m-l-';
                $value = $this->resolveValue($context->find('get_indent'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                // 'is_section' section
                $value = $context->find('is_section');
                $buffer .= $this->sectionC233b6e176c5ffa832ad3656ce0ea548($context, $indent, $value);
                // 'is_section' inverted section
                $value = $context->find('is_section');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                ';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= $value;
                    $buffer .= '
';
                }
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section28cde2f7966121b726f81d3e8a80d530(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#pix}}i/folder{{/pix}}
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
                
                $buffer .= $indent . '                ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->sectionDe9955ab2a0642065d5e708bf9e87436($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD800f71a73fbada37097eb2cd79dabfb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#showdivider}}
</nav>
<nav class="list-group m-t-1">
    {{/showdivider}}
    {{#action}}
    <a class="list-group-item list-group-item-action {{#isactive}}font-weight-bold{{/isactive}}" href="{{{action}}}" data-key="{{key}}">
        <div class="m-l-{{get_indent}}">
            {{#is_section}}
                <div class="media">
                    <span class="media-left">
                        {{#pix}}i/folder{{/pix}}
                    </span>
                    <span class="media-body">{{{text}}}</span>
                </div>
            {{/is_section}}
            {{^is_section}}
                {{{text}}}
            {{/is_section}}
        </div>
    </a>
    {{/action}}
    {{^action}}
    <div class="list-group-item" data-key="{{key}}">
        <div class="m-l-{{get_indent}}">
            {{#is_section}}
                {{#pix}}i/folder{{/pix}}
            {{/is_section}}
            {{{text}}}
        </div>
    </div>
    {{/action}}
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
                
                // 'showdivider' section
                $value = $context->find('showdivider');
                $buffer .= $this->section2d88b357993e4a12230fae6669f2c68d($context, $indent, $value);
                // 'action' section
                $value = $context->find('action');
                $buffer .= $this->section1aae6300d658a4fdd7e5bd9f3bb88020($context, $indent, $value);
                // 'action' inverted section
                $value = $context->find('action');
                if (empty($value)) {
                    
                    $buffer .= $indent . '    <div class="list-group-item" data-key="';
                    $value = $this->resolveValue($context->find('key'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">
';
                    $buffer .= $indent . '        <div class="m-l-';
                    $value = $this->resolveValue($context->find('get_indent'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">
';
                    // 'is_section' section
                    $value = $context->find('is_section');
                    $buffer .= $this->section28cde2f7966121b726f81d3e8a80d530($context, $indent, $value);
                    $buffer .= $indent . '            ';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= $value;
                    $buffer .= '
';
                    $buffer .= $indent . '        </div>
';
                    $buffer .= $indent . '    </div>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
