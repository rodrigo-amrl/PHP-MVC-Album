<?php

namespace  App\Helpers;

class ValidateForm
{
    private static $errors = [];
    private static $form_data = [];
    private static $field;

    public static function make(array $fields, array $form_data)
    {
        $self = new static();

        self::$form_data = $form_data;
        foreach ($fields as $field => $params) {
            self::$field = $field;
            $params_array  = explode("|", $params);
            foreach ($params_array as $param) {
                $params_explode = explode(':', $param);
                $method_validation = $params_explode[0];
                $param_adicional = $params_explode[1] ?? null;
                if (method_exists($self,  $method_validation))
                    $self->$method_validation($param_adicional);
            }
        }
        dd(self::$errors);
    }
    protected function required()
    {
        if (!empty(self::$form_data[self::$field]))
            $this->addError(' O campo ' . self::$field . ' é obrigatório');
    }
    protected function max($param)
    {
        if (!$this->required()) return;

        dd('fo');
        $method_validation = explode(':', $param);
        if (!empty(self::$form_data[self::$field]))
            $this->addError(' O campo ' . self::$field . ' é obrigatório');
    }
    private function addError($error)
    {
        self::$errors[] = $error;
    }
}
