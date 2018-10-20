<?php

class __Mustache_65f034a7b2c41042dac751bb5ccdaad2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        
        $blocksContext['classes'] = array($this, 'blockE737f467bd785c3f6072027241ca452e');
        $blocksContext['attributes'] = array($this, 'block9f466da5f78c039b07c784f923ee6145');
        $blocksContext['togglelabel'] = array($this, 'blockE2e6add9b2312bbf2b377163a519dc27');
        $blocksContext['togglecontent'] = array($this, 'blockF5cfbf205e136a89aa8f50866cb4be49');
        $blocksContext['containerlabel'] = array($this, 'blockFdd358a57d064879bfabcf99cddc2acd');
        $blocksContext['headertext'] = array($this, 'blockAf898d26ed1e9583f0f37bccc708be5a');
        $blocksContext['headeractions'] = array($this, 'blockD5bf9ad5175f74ed47bb154634c315e5');
        $blocksContext['content'] = array($this, 'block7e3f15612160e3fe1762f99ffc9995a1');
        
        if ($parent = $this->mustache->loadPartial('core/popover_region')) {
            $context->pushBlockContext($blocksContext);
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section30ba41ee4c2389a7667b7f893427624c($context, $indent, $value);

        return $buffer;
    }

    private function section75a2d2a58de39eaa0eab52024156c94b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' showmessagewindownonew, message ';
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
                
                $buffer .= ' showmessagewindownonew, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB69af701c3da068c4b63a9d598702913(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' togglemessagemenu, message ';
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
                
                $buffer .= ' togglemessagemenu, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAb38a1c1b6aa5e4850d7c5aa9c0530f6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/message, core, {{#str}} togglemessagemenu, message {{/str}} ';
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
                
                $buffer .= ' t/message, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB69af701c3da068c4b63a9d598702913($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEb70af33b8011de7432c8334305b6a62(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' notificationwindow, message ';
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
                
                $buffer .= $indent . ' notificationwindow, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section29c757f7e4b4143731d7f32ce8d916eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' messages, message ';
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
                
                $buffer .= ' messages, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAae28451a64929fa29d065a6ae6c6f49(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' newmessage, message ';
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
                
                $buffer .= ' newmessage, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD52891bef9837f9da27028964220b7a5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' markallread ';
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
                
                $buffer .= ' markallread ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section312c64ea60f10c9fbf96f4e4c612411c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/markasread, core, {{#str}} markallread {{/str}} ';
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
                
                $buffer .= ' t/markasread, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD52891bef9837f9da27028964220b7a5($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD0f74ddaef5ca561ea840045e2d91329(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' messagepreferences, message ';
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
                
                $buffer .= ' messagepreferences, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE9bff338a5cd2dc2634667be314ae4c6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/settings, core, {{#str}} messagepreferences, message {{/str}} ';
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
                
                $buffer .= ' i/settings, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD0f74ddaef5ca561ea840045e2d91329($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section955d68f55e8eb436a9fa5ea3d268a3ab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' nomessages, message ';
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
                
                $buffer .= ' nomessages, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section30ba41ee4c2389a7667b7f893427624c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\', \'message_popup/message_popover_controller\'], function($, controller) {
    var container = $(\'#nav-message-popover-container\');
    var controller = new controller(container);
    controller.registerEventListeners();
    controller.registerListNavigationEventListeners();
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
                
                $buffer .= $indent . 'require([\'jquery\', \'message_popup/message_popover_controller\'], function($, controller) {
';
                $buffer .= $indent . '    var container = $(\'#nav-message-popover-container\');
';
                $buffer .= $indent . '    var controller = new controller(container);
';
                $buffer .= $indent . '    controller.registerEventListeners();
';
                $buffer .= $indent . '    controller.registerListNavigationEventListeners();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockE737f467bd785c3f6072027241ca452e($context)
    {
        $indent = $buffer = '';
        $blocksContext = array();
        $buffer .= $indent . 'popover-region-messages';
    
        return $buffer;
    }

    public function block9f466da5f78c039b07c784f923ee6145($context)
    {
        $indent = $buffer = '';
        $blocksContext = array();
        $buffer .= 'id="nav-message-popover-container" data-userid="';
        $value = $this->resolveValue($context->find('userid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"';
    
        return $buffer;
    }

    public function blockE2e6add9b2312bbf2b377163a519dc27($context)
    {
        $indent = $buffer = '';
        $blocksContext = array();
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section75a2d2a58de39eaa0eab52024156c94b($context, $indent, $value);
    
        return $buffer;
    }

    public function blockF5cfbf205e136a89aa8f50866cb4be49($context)
    {
        $indent = $buffer = '';
        $blocksContext = array();
        $buffer .= '        ';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->sectionAb38a1c1b6aa5e4850d7c5aa9c0530f6($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        <div class="count-container hidden" data-region="count-container"></div>
';
    
        return $buffer;
    }

    public function blockFdd358a57d064879bfabcf99cddc2acd($context)
    {
        $indent = $buffer = '';
        $blocksContext = array();
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionEb70af33b8011de7432c8334305b6a62($context, $indent, $value);
    
        return $buffer;
    }

    public function blockAf898d26ed1e9583f0f37bccc708be5a($context)
    {
        $indent = $buffer = '';
        $blocksContext = array();
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section29c757f7e4b4143731d7f32ce8d916eb($context, $indent, $value);
    
        return $buffer;
    }

    public function blockD5bf9ad5175f74ed47bb154634c315e5($context)
    {
        $indent = $buffer = '';
        $blocksContext = array();
        $buffer .= '        <div class="newmessage-link">
';
        $buffer .= $indent . '            <a href="';
        $value = $this->resolveValue($context->findDot('urls.writeamessage'), $context);
        $buffer .= $value;
        $buffer .= '">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionAae28451a64929fa29d065a6ae6c6f49($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <a class="mark-all-read-button"
';
        $buffer .= $indent . '           href="#"
';
        $buffer .= $indent . '           role="button"
';
        $buffer .= $indent . '           title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionD52891bef9837f9da27028964220b7a5($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '           data-action="mark-all-read">
';
        $buffer .= $indent . '            <span class="normal-icon">';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->section312c64ea60f10c9fbf96f4e4c612411c($context, $indent, $value);
        $buffer .= '</span>
';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '        </a>
';
        $buffer .= $indent . '        <a href="';
        $value = $this->resolveValue($context->findDot('urls.preferences'), $context);
        $buffer .= $value;
        $buffer .= '"
';
        $buffer .= $indent . '           title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionD0f74ddaef5ca561ea840045e2d91329($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '            ';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->sectionE9bff338a5cd2dc2634667be314ae4c6($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </a>
';
    
        return $buffer;
    }

    public function block7e3f15612160e3fe1762f99ffc9995a1($context)
    {
        $indent = $buffer = '';
        $blocksContext = array();
        $buffer .= $indent . '        <div class="messages" data-region="messages" role="log" aria-busy="false" aria-atomic="false" aria-relevant="additions"></div>
';
        $buffer .= $indent . '        <div class="empty-message" data-region="empty-message" tabindex="0">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section955d68f55e8eb436a9fa5ea3d268a3ab($context, $indent, $value);
        $buffer .= '</div>
';
    
        return $buffer;
    }
}
