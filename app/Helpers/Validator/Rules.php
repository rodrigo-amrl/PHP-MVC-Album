<?php

namespace  App\Helpers\Validator;

trait Rules
{
    protected function required()
    {
        if (empty($this->field_value))
            $this->addError(' O campo ' . $this->field . ' é obrigatório');
    }
    protected function max()
    {
        if (strlen($this->field_value) > $this->adicional_param)
            $this->addError(' O campo ' . $this->field . "deve ter no mínimo {$this->adicional_param} caracteres");
    }
    protected function min()
    {
        if (strlen($this->field_value) < $this->adicional_param)
            $this->addError(' O campo ' . $this->field . " deve ter no mínimo {$this->adicional_param} caracteres");
    }
}
