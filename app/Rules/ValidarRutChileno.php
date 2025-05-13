<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidarRutChileno implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if (!is_string($value)) {
            return false;
        }

        $rut = preg_replace('/[^0-9kK]/', '', $value);
        $dv = strtolower(substr($rut, -1));
        $numero = substr($rut, 0, strlen($rut) - 1);
        $i = 2;
        $suma = 0;
        foreach (array_reverse(str_split($numero)) as $v) {
            if ($i == 8) {
                $i = 2;
            }
            $suma += $v * $i;
            ++$i;
        }
        $dvr = 11 - ($suma % 11);
        if ($dvr == 10) {
            $dvr = 'k';
        } elseif ($dvr == 11) {
            $dvr = '0';
        }
        return ($dvr == $dv);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'El formato del RUT no es válido.';
    }
}