<?php

class __Mustache_fe9b82a56de73f215a7dfdba3ef44af5 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '
';
        $buffer .= $indent . '<ul class="nav nav-tabs" role="tablist">
';
        $buffer .= $indent . '<!-- First the top most node and immediate children -->
';
        $buffer .= $indent . '    <li class="nav-item">
';
        $buffer .= $indent . '        <a class="nav-link active" href="#link';
        $value = $this->resolveValue($context->findDot('node.key'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-toggle="tab" role="tab">';
        $value = $this->resolveValue($context->findDot('node.text'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '    </li>
';
        $buffer .= $indent . '<!-- Now the first level children with sub nodes -->
';
        // 'node.children' section
        $value = $context->findDot('node.children');
        $buffer .= $this->section660fbb4d46ba816152cf6059e6951336($context, $indent, $value);
        $buffer .= $indent . '</ul>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="tab-content">
';
        $buffer .= $indent . '    <div class="tab-pane active" id="link';
        $value = $this->resolveValue($context->findDot('node.key'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" role="tabpanel">
';
        $buffer .= $indent . '        <div class="card">
';
        $buffer .= $indent . '            <div class="card-block">
';
        $buffer .= $indent . '                <div class="container">
';
        $buffer .= $indent . '                    <div class="row">
';
        $buffer .= $indent . '                        <div class="col-sm-9 push-sm-3">
';
        $buffer .= $indent . '                            <ul class="list-unstyled">
';
        // 'node.children' section
        $value = $context->findDot('node.children');
        $buffer .= $this->section2bf196d766eaf87986b3b10839148c10($context, $indent, $value);
        $buffer .= $indent . '                            </ul>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '
';
        // 'node.children' section
        $value = $context->findDot('node.children');
        $buffer .= $this->section272b7549df6bd4f8d014792cc3c0aedd($context, $indent, $value);
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        // 'node.children' section
        $value = $context->findDot('node.children');
        $buffer .= $this->sectionDeeb0cd8bda7a15954d9492fcdff400a($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionB49391bacd99e2130c3d1ae730ac70e1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{^is_short_branch}}
                <li class="nav-item">
                    <a class="nav-link" href="#link{{key}}" data-toggle="tab" role="tab">{{text}}</a>
                </li>
            {{/is_short_branch}}
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
                
                // 'is_short_branch' inverted section
                $value = $context->find('is_short_branch');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <li class="nav-item">
';
                    $buffer .= $indent . '                    <a class="nav-link" href="#link';
                    $value = $this->resolveValue($context->find('key'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" data-toggle="tab" role="tab">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</a>
';
                    $buffer .= $indent . '                </li>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE799124a3f4e2497fff36764d0bc3da8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#display}}
            {{^is_short_branch}}
                <li class="nav-item">
                    <a class="nav-link" href="#link{{key}}" data-toggle="tab" role="tab">{{text}}</a>
                </li>
            {{/is_short_branch}}
        {{/display}}
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
                
                // 'display' section
                $value = $context->find('display');
                $buffer .= $this->sectionB49391bacd99e2130c3d1ae730ac70e1($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section660fbb4d46ba816152cf6059e6951336(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#children.count}}
        {{#display}}
            {{^is_short_branch}}
                <li class="nav-item">
                    <a class="nav-link" href="#link{{key}}" data-toggle="tab" role="tab">{{text}}</a>
                </li>
            {{/is_short_branch}}
        {{/display}}
    {{/children.count}}
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
                
                // 'children.count' section
                $value = $context->findDot('children.count');
                $buffer .= $this->sectionE799124a3f4e2497fff36764d0bc3da8($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAbcd5961005ba290cc9470330eaf3f99(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <li><a href="{{{action}}}">{{text}}</a></li>
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
                
                $buffer .= $indent . '                                            <li><a href="';
                $value = $this->resolveValue($context->find('action'), $context);
                $buffer .= $value;
                $buffer .= '">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2bf196d766eaf87986b3b10839148c10(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    {{^children.count}}
                                        {{#display}}
                                            <li><a href="{{{action}}}">{{text}}</a></li>
                                        {{/display}}
                                    {{/children.count}}
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
                
                // 'children.count' inverted section
                $value = $context->findDot('children.count');
                if (empty($value)) {
                    
                    // 'display' section
                    $value = $context->find('display');
                    $buffer .= $this->sectionAbcd5961005ba290cc9470330eaf3f99($context, $indent, $value);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB6e367e371fcb0da95b962d4ad85c9dc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h4><a href="{{action}}">{{text}}</a><h4>';
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
                
                $buffer .= '<h4><a href="';
                $value = $this->resolveValue($context->find('action'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a><h4>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA98345c9f43379d0ce517c08e0a8abbf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                    {{> core/settings_link_page_single }}
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
                
                if ($partial = $this->mustache->loadPartial('core/settings_link_page_single')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section988d0c860eeb6295152a2d7866465997(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            {{#action}}<h4><a href="{{action}}">{{text}}</a><h4>{{/action}}
                                            {{^action}}<h4>{{text}}<h4>{{/action}}
                                        </div>
                                        <div class="col-sm-9">
                                            <ul class="list-unstyled">
                                                {{#children}}
                                                    {{> core/settings_link_page_single }}
                                                {{/children}}
                                            </ul>
                                        </div>
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
                
                $buffer .= $indent . '                                    <hr>
';
                $buffer .= $indent . '                                    <div class="row">
';
                $buffer .= $indent . '                                        <div class="col-sm-3">
';
                $buffer .= $indent . '                                            ';
                // 'action' section
                $value = $context->find('action');
                $buffer .= $this->sectionB6e367e371fcb0da95b962d4ad85c9dc($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                            ';
                // 'action' inverted section
                $value = $context->find('action');
                if (empty($value)) {
                    
                    $buffer .= '<h4>';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '<h4>';
                }
                $buffer .= '
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <div class="col-sm-9">
';
                $buffer .= $indent . '                                            <ul class="list-unstyled">
';
                // 'children' section
                $value = $context->find('children');
                $buffer .= $this->sectionA98345c9f43379d0ce517c08e0a8abbf($context, $indent, $value);
                $buffer .= $indent . '                                            </ul>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB61e69288142faffc195f3eabff3a215(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                {{#is_short_branch}}
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            {{#action}}<h4><a href="{{action}}">{{text}}</a><h4>{{/action}}
                                            {{^action}}<h4>{{text}}<h4>{{/action}}
                                        </div>
                                        <div class="col-sm-9">
                                            <ul class="list-unstyled">
                                                {{#children}}
                                                    {{> core/settings_link_page_single }}
                                                {{/children}}
                                            </ul>
                                        </div>
                                    </div>
                                {{/is_short_branch}}
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
                
                // 'is_short_branch' section
                $value = $context->find('is_short_branch');
                $buffer .= $this->section988d0c860eeb6295152a2d7866465997($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA0f9e375cd05e9fa4b8e24751f269076(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{#children.count}}
                                {{#is_short_branch}}
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            {{#action}}<h4><a href="{{action}}">{{text}}</a><h4>{{/action}}
                                            {{^action}}<h4>{{text}}<h4>{{/action}}
                                        </div>
                                        <div class="col-sm-9">
                                            <ul class="list-unstyled">
                                                {{#children}}
                                                    {{> core/settings_link_page_single }}
                                                {{/children}}
                                            </ul>
                                        </div>
                                    </div>
                                {{/is_short_branch}}
                            {{/children.count}}
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
                
                // 'children.count' section
                $value = $context->findDot('children.count');
                $buffer .= $this->sectionB61e69288142faffc195f3eabff3a215($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section272b7549df6bd4f8d014792cc3c0aedd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#display}}
                            {{#children.count}}
                                {{#is_short_branch}}
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            {{#action}}<h4><a href="{{action}}">{{text}}</a><h4>{{/action}}
                                            {{^action}}<h4>{{text}}<h4>{{/action}}
                                        </div>
                                        <div class="col-sm-9">
                                            <ul class="list-unstyled">
                                                {{#children}}
                                                    {{> core/settings_link_page_single }}
                                                {{/children}}
                                            </ul>
                                        </div>
                                    </div>
                                {{/is_short_branch}}
                            {{/children.count}}
                        {{/display}}
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
                
                // 'display' section
                $value = $context->find('display');
                $buffer .= $this->sectionA0f9e375cd05e9fa4b8e24751f269076($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section840a97986bc536da327748b2fbfa53d0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                {{^children.count}}
                                                    <li><a href="{{{action}}}">{{text}}</a></li>
                                                {{/children.count}}
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
                
                // 'children.count' inverted section
                $value = $context->findDot('children.count');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                                    <li><a href="';
                    $value = $this->resolveValue($context->find('action'), $context);
                    $buffer .= $value;
                    $buffer .= '">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</a></li>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6df0e81100e8acb539ad4406f427b5b7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            {{#display}}
                                                {{^children.count}}
                                                    <li><a href="{{{action}}}">{{text}}</a></li>
                                                {{/children.count}}
                                            {{/display}}
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
                
                // 'display' section
                $value = $context->find('display');
                $buffer .= $this->section840a97986bc536da327748b2fbfa53d0($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section42eb31cedb48915a149548740a290623(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                        {{> core/settings_link_page_single }}
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
                
                if ($partial = $this->mustache->loadPartial('core/settings_link_page_single')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                                        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section25bff2ae5f6455d49373e437f4ed2c62(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                {{#action}}<h4><a href="{{action}}">{{text}}</a><h4>{{/action}}
                                                {{^action}}<h4>{{text}}<h4>{{/action}}
                                            </div>
                                            <div class="col-sm-9">
                                                <ul class="list-unstyled">
                                                    {{#children}}
                                                        {{> core/settings_link_page_single }}
                                                    {{/children}}
                                                </ul>
                                            </div>
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
                
                $buffer .= $indent . '                                        <hr>
';
                $buffer .= $indent . '                                        <div class="row">
';
                $buffer .= $indent . '                                            <div class="col-sm-3">
';
                $buffer .= $indent . '                                                ';
                // 'action' section
                $value = $context->find('action');
                $buffer .= $this->sectionB6e367e371fcb0da95b962d4ad85c9dc($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                                ';
                // 'action' inverted section
                $value = $context->find('action');
                if (empty($value)) {
                    
                    $buffer .= '<h4>';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '<h4>';
                }
                $buffer .= '
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="col-sm-9">
';
                $buffer .= $indent . '                                                <ul class="list-unstyled">
';
                // 'children' section
                $value = $context->find('children');
                $buffer .= $this->section42eb31cedb48915a149548740a290623($context, $indent, $value);
                $buffer .= $indent . '                                                </ul>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC7c8b76a126af0450370e9831c76e6d2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    {{#children.count}}
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                {{#action}}<h4><a href="{{action}}">{{text}}</a><h4>{{/action}}
                                                {{^action}}<h4>{{text}}<h4>{{/action}}
                                            </div>
                                            <div class="col-sm-9">
                                                <ul class="list-unstyled">
                                                    {{#children}}
                                                        {{> core/settings_link_page_single }}
                                                    {{/children}}
                                                </ul>
                                            </div>
                                        </div>
                                    {{/children.count}}
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
                
                // 'children.count' section
                $value = $context->findDot('children.count');
                $buffer .= $this->section25bff2ae5f6455d49373e437f4ed2c62($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCfcb86512568c7476e976faa3fcf113e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                {{#display}}
                                    {{#children.count}}
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                {{#action}}<h4><a href="{{action}}">{{text}}</a><h4>{{/action}}
                                                {{^action}}<h4>{{text}}<h4>{{/action}}
                                            </div>
                                            <div class="col-sm-9">
                                                <ul class="list-unstyled">
                                                    {{#children}}
                                                        {{> core/settings_link_page_single }}
                                                    {{/children}}
                                                </ul>
                                            </div>
                                        </div>
                                    {{/children.count}}
                                {{/display}}
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
                
                // 'display' section
                $value = $context->find('display');
                $buffer .= $this->sectionC7c8b76a126af0450370e9831c76e6d2($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1b1312a574d483e66d75a52273ed8839(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="tab-pane" id="link{{key}}" role="tabpanel">
                <div class="card">
                    <div class="card-block">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-3">
                                    {{#action}}<h4><a href="{{action}}">{{text}}</a><h4>{{/action}}
                                    {{^action}}<h4>{{text}}<h4>{{/action}}
                                </div>
                                <div class="col-sm-9">
                                    <ul class="list-unstyled">
                                        {{#children}}
                                            {{#display}}
                                                {{^children.count}}
                                                    <li><a href="{{{action}}}">{{text}}</a></li>
                                                {{/children.count}}
                                            {{/display}}
                                        {{/children}}
                                    </ul>
                                </div>
                            </div>
                            {{#children}}
                                {{#display}}
                                    {{#children.count}}
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                {{#action}}<h4><a href="{{action}}">{{text}}</a><h4>{{/action}}
                                                {{^action}}<h4>{{text}}<h4>{{/action}}
                                            </div>
                                            <div class="col-sm-9">
                                                <ul class="list-unstyled">
                                                    {{#children}}
                                                        {{> core/settings_link_page_single }}
                                                    {{/children}}
                                                </ul>
                                            </div>
                                        </div>
                                    {{/children.count}}
                                {{/display}}
                            {{/children}}
                        </div>
                    </div>
                </div>
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
                
                $buffer .= $indent . '            <div class="tab-pane" id="link';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" role="tabpanel">
';
                $buffer .= $indent . '                <div class="card">
';
                $buffer .= $indent . '                    <div class="card-block">
';
                $buffer .= $indent . '                        <div class="container">
';
                $buffer .= $indent . '                            <div class="row">
';
                $buffer .= $indent . '                                <div class="col-sm-3">
';
                $buffer .= $indent . '                                    ';
                // 'action' section
                $value = $context->find('action');
                $buffer .= $this->sectionB6e367e371fcb0da95b962d4ad85c9dc($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                    ';
                // 'action' inverted section
                $value = $context->find('action');
                if (empty($value)) {
                    
                    $buffer .= '<h4>';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '<h4>';
                }
                $buffer .= '
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                <div class="col-sm-9">
';
                $buffer .= $indent . '                                    <ul class="list-unstyled">
';
                // 'children' section
                $value = $context->find('children');
                $buffer .= $this->section6df0e81100e8acb539ad4406f427b5b7($context, $indent, $value);
                $buffer .= $indent . '                                    </ul>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                // 'children' section
                $value = $context->find('children');
                $buffer .= $this->sectionCfcb86512568c7476e976faa3fcf113e($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDeeb0cd8bda7a15954d9492fcdff400a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#children.count}}
            <div class="tab-pane" id="link{{key}}" role="tabpanel">
                <div class="card">
                    <div class="card-block">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-3">
                                    {{#action}}<h4><a href="{{action}}">{{text}}</a><h4>{{/action}}
                                    {{^action}}<h4>{{text}}<h4>{{/action}}
                                </div>
                                <div class="col-sm-9">
                                    <ul class="list-unstyled">
                                        {{#children}}
                                            {{#display}}
                                                {{^children.count}}
                                                    <li><a href="{{{action}}}">{{text}}</a></li>
                                                {{/children.count}}
                                            {{/display}}
                                        {{/children}}
                                    </ul>
                                </div>
                            </div>
                            {{#children}}
                                {{#display}}
                                    {{#children.count}}
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                {{#action}}<h4><a href="{{action}}">{{text}}</a><h4>{{/action}}
                                                {{^action}}<h4>{{text}}<h4>{{/action}}
                                            </div>
                                            <div class="col-sm-9">
                                                <ul class="list-unstyled">
                                                    {{#children}}
                                                        {{> core/settings_link_page_single }}
                                                    {{/children}}
                                                </ul>
                                            </div>
                                        </div>
                                    {{/children.count}}
                                {{/display}}
                            {{/children}}
                        </div>
                    </div>
                </div>
            </div>
        {{/children.count}}
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
                
                // 'children.count' section
                $value = $context->findDot('children.count');
                $buffer .= $this->section1b1312a574d483e66d75a52273ed8839($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
