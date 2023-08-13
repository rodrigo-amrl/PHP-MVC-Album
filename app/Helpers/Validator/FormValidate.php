<?php

namespace  App\Helpers\Validator;

class FormValidate
{
    private static $errors = [];
    public static function make(array $fields, array $form_data)
    {
        $self = new static();
        foreach ($fields as $field => $params) {
            $field_value = $self->setFieldValue($field, $form_data);
            $validate = new FieldValidate($field, $field_value, $params);
            $self->setErrors($validate->getErrors());
        }
        return self::$errors;
    }
    private function setFieldValue($field, $form_data)
    {
        if (!array_key_exists($field, $form_data))
            return;

        return $form_data[$field];
    }
    private function setErrors($errors)
    {
        if (empty($errors)) return;
        self::$errors[] = $errors;
    }
}
