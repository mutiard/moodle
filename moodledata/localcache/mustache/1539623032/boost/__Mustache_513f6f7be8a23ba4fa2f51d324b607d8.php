<?php

class __Mustache_513f6f7be8a23ba4fa2f51d324b607d8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        
        $blocksContext['element'] = array($this, 'block495bb491374122f69bbd5bc7488a41ef');
        
        if ($parent = $this->mustache->loadPartial('core_form/element-template')) {
            $context->pushBlockContext($blocksContext);
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section8454ba76b22dc4b75fc5582cf255f362($context, $indent, $value);

        return $buffer;
    }

    private function sectionBd6d241829fcbe59e01506b6f6c8d128(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'readonly';
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
                
                $buffer .= 'readonly';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5968b0313ca3957f90dc584bb9649f31(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'form-control-danger';
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
                
                $buffer .= 'form-control-danger';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBf970183db350f18431b4ff96ccaccc4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            autofocus aria-describedby="id_error_{{ element.name }}"
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
                
                $buffer .= $indent . '                            autofocus aria-describedby="id_error_';
                $value = $this->resolveValue($context->findDot('element.name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB1966ed63f39357352a1e773a9fe2c4a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' passwordunmaskedithint, form ';
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
                
                $buffer .= ' passwordunmaskedithint, form ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA7d3cdaa80a4fb55cbbbdcf6e8230551(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/passwordunmask-edit, core, {{# str }} passwordunmaskedithint, form {{/ str }}';
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
                
                $buffer .= ' t/passwordunmask-edit, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB1966ed63f39357352a1e773a9fe2c4a($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0456df008114280c7908271e554ab4e3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' passwordunmaskrevealhint, form ';
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
                
                $buffer .= ' passwordunmaskrevealhint, form ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD238d708b51d531766660a637c3be472(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/passwordunmask-reveal, core, {{# str }} passwordunmaskrevealhint, form {{/ str }}';
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
                
                $buffer .= ' t/passwordunmask-reveal, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0456df008114280c7908271e554ab4e3($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF86965103a62cc37f20777605d623629(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' passwordunmaskinstructions, form ';
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
                
                $buffer .= ' passwordunmaskinstructions, form ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8454ba76b22dc4b75fc5582cf255f362(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'core_form/passwordunmask\'], function(PasswordUnmask) {
    new PasswordUnmask("{{ element.id }}");
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
                
                $buffer .= $indent . 'require([\'core_form/passwordunmask\'], function(PasswordUnmask) {
';
                $buffer .= $indent . '    new PasswordUnmask("';
                $value = $this->resolveValue($context->findDot('element.id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '");
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block495bb491374122f69bbd5bc7488a41ef($context)
    {
        $indent = $buffer = '';
        $blocksContext = array();
        $buffer .= $indent . '        <span data-passwordunmask="wrapper" data-passwordunmaskid="';
        $value = $this->resolveValue($context->findDot('element.id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '            <span data-passwordunmask="editor">
';
        $buffer .= $indent . '                <input  type="hidden"
';
        $buffer .= $indent . '                        ';
        // 'element.frozen' section
        $value = $context->findDot('element.frozen');
        $buffer .= $this->sectionBd6d241829fcbe59e01506b6f6c8d128($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                        ';
        // 'element.hardfrozen' inverted section
        $value = $context->findDot('element.hardfrozen');
        if (empty($value)) {
            
            $buffer .= ' name="';
            $value = $this->resolveValue($context->findDot('element.name'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '"';
        }
        $buffer .= '
';
        $buffer .= $indent . '                        id="';
        $value = $this->resolveValue($context->findDot('element.id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '                        value="';
        $value = $this->resolveValue($context->findDot('element.value'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '                        class="form-control d-inline-block ';
        // 'error' section
        $value = $context->find('error');
        $buffer .= $this->section5968b0313ca3957f90dc584bb9649f31($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '                        data-size="';
        $value = $this->resolveValue($context->findDot('element.size'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        // 'error' section
        $value = $context->find('error');
        $buffer .= $this->sectionBf970183db350f18431b4ff96ccaccc4($context, $indent, $value);
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->find('attributes'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                        >
';
        $buffer .= $indent . '            </span>
';
        // 'element.frozen' inverted section
        $value = $context->findDot('element.frozen');
        if (empty($value)) {
            
            $buffer .= $indent . '            <a href="#" data-passwordunmask="edit" title="';
            $value = $this->resolveValue($context->find('edithint'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '">
';
        }
        $buffer .= $indent . '                <span data-passwordunmask="displayvalue">';
        if ($partial = $this->mustache->loadPartial('core_form/element-passwordunmask-fill')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= '</span>
';
        // 'element.frozen' inverted section
        $value = $context->findDot('element.frozen');
        if (empty($value)) {
            
            $buffer .= $indent . '                ';
            // 'pix' section
            $value = $context->find('pix');
            $buffer .= $this->sectionA7d3cdaa80a4fb55cbbbdcf6e8230551($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '            </a>
';
        }
        $buffer .= $indent . '            <a href="#" data-passwordunmask="unmask" title="';
        $value = $this->resolveValue($context->find('unmaskhint'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '                ';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->sectionD238d708b51d531766660a637c3be472($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '            <span data-passwordunmask="instructions" class="form-text text-muted" style="display: none;">
';
        // 'element.frozen' inverted section
        $value = $context->findDot('element.frozen');
        if (empty($value)) {
            
            $buffer .= $indent . '                ';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->sectionF86965103a62cc37f20777605d623629($context, $indent, $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '            </span>
';
        $buffer .= $indent . '        </span>
';
    
        return $buffer;
    }
}
