<?php

class __Mustache_488a206e655a44ee767614c473e0205a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '<div class="form-item row" id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <div class="form-label col-sm-3 text-sm-right">
';
        $buffer .= $indent . '        <label ';
        // 'labelfor' section
        $value = $context->find('labelfor');
        $buffer .= $this->section3d8f2ee95af1360bf9488b09a602ca85($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= $value;
        $buffer .= '
';
        // 'override' section
        $value = $context->find('override');
        $buffer .= $this->sectionBd80e6928ddd4776e81c70b68913241c($context, $indent, $value);
        // 'warning' section
        $value = $context->find('warning');
        $buffer .= $this->section5439c2e5499d7ae5a9844058b95c7725($context, $indent, $value);
        $buffer .= $indent . '        </label>
';
        $buffer .= $indent . '        <span class="form-shortname d-block small text-muted">';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= $value;
        $buffer .= '</span>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="form-setting col-sm-9">
';
        // 'error' section
        $value = $context->find('error');
        $buffer .= $this->section140290f3ca1a9fea4397b07a472eca5b($context, $indent, $value);
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('element'), $context);
        $buffer .= $value;
        $buffer .= '
';
        // 'default' section
        $value = $context->find('default');
        $buffer .= $this->section617a7367e95cdd3d1274b6e62c817795($context, $indent, $value);
        $buffer .= $indent . '        <div class="form-description m-t-1">';
        $value = $this->resolveValue($context->find('description'), $context);
        $buffer .= $value;
        $buffer .= '</div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section3d8f2ee95af1360bf9488b09a602ca85(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'for="{{labelfor}}"';
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
                
                $buffer .= 'for="';
                $value = $this->resolveValue($context->find('labelfor'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBd80e6928ddd4776e81c70b68913241c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="form-overridden">{{override}}</div>
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
                
                $buffer .= $indent . '                <div class="form-overridden">';
                $value = $this->resolveValue($context->find('override'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5439c2e5499d7ae5a9844058b95c7725(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="form-warning">{{warning}}</div>
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
                
                $buffer .= $indent . '                <div class="form-warning">';
                $value = $this->resolveValue($context->find('warning'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section140290f3ca1a9fea4397b07a472eca5b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div><span class="error">{{error}}</span></div>
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
                
                $buffer .= $indent . '            <div><span class="error">';
                $value = $this->resolveValue($context->find('error'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE883efc355488afa28c6a1efa34031dd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'text-ltr';
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
                
                $buffer .= 'text-ltr';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section617a7367e95cdd3d1274b6e62c817795(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="form-defaultinfo text-muted {{#forceltr}}text-ltr{{/forceltr}}">{{{default}}}</div>
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
                
                $buffer .= $indent . '            <div class="form-defaultinfo text-muted ';
                // 'forceltr' section
                $value = $context->find('forceltr');
                $buffer .= $this->sectionE883efc355488afa28c6a1efa34031dd($context, $indent, $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('default'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
