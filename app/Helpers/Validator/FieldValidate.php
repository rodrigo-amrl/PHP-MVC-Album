<?php

namespace  App\Helpers\Validator;

class FieldValidate
{
    use Rules;

    private array $rules;
    private string $adicional_param;
    private string $method;
    public $errors;
    public function __construct(protected string $field, protected $field_value, protected string $params)
    {
        $this->init();
    }
    private function init()
    {
        $this->getRules();
        $this->execRules();
    }
    private function getRules()
    {
        $this->rules = explode("|", $this->params);
    }
    private function execRules()
    {
        foreach ($this->rules as $rule) {
            $rule = $this->getRule($rule);
            if (method_exists($this,  $rule))
                $this->$rule();
        }
    }
    private function getRule($rule)
    {
        $rule_explode = explode(':', $rule);
        $this->checkAdicionalParam($rule_explode);
        return  $rule_explode[0];
    }
    private function checkAdicionalParam($rule_explode)
    {
        $this->adicional_param = $rule_explode[1] ?? '';
    }
    protected function addError($error)
    {
        $this->errors[] = $error;
    }
    public function getErrors()
    {
        return $this->errors;
    }
}
