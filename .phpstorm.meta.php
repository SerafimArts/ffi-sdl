<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPSTORM_META {

    registerArgumentsSet('ffiCType',
        "void *",
        // floats
        "float",
        "float *",
        "float **",

        "double",
        "double *",
        "double **",

        "long double",
        "long double *",
        "long double **",
        // integers
        "int",
        "int *",
        "int **",
        "uint8_t",
        "uint8_t *",
        "uint8_t **",

        "int8_t",
        "int8_t*",
        "int8_t *",
        "int8_t**",
        "int8_t **",

        "uint16_t",
        "uint16_t *",
        "uint16_t **",

        "int16_t",
        "int16_t *",
        "int16_t **",

        "uint32_t",
        "uint32_t *",
        "uint32_t **",

        "int32_t",
        "int32_t *",
        "int32_t **",

        "uint64_t",
        "uint64_t *",
        "uint64_t **",

        "int64_t",
        "int64_t *",
        "int64_t **",

        // bool
        "bool",
        "bool *",
        "bool **",

        // string
        "char",
        "char *",
        "char **",
    );

    override(\Serafim\SDL\SDL::new(), map([
        ''         => '@',
        // mixed
        "void *"   => \FFI\CScalar::class,

        // floats
        "float"    => \FFI\CFloat::class,
        "float *"  => \FFI\CFloatPtr::class,
        "float **" => \FFI\CFloatPtrPtr::class,

        "double"    => \FFI\CFloat::class,
        "double *"  => \FFI\CFloatPtr::class,
        "double **" => \FFI\CFloatPtrPtr::class,

        "long double"    => \FFI\CFloat::class,
        "long double *"  => \FFI\CFloatPtr::class,
        "long double **" => \FFI\CFloatPtrPtr::class,
        // integers
        "int"            => \FFI\CInt::class,
        "int *"          => \FFI\CIntPtr::class,
        "int **"         => \FFI\CIntPtrPtr::class,
        "uint8_t"        => \FFI\CInt::class,
        "uint8_t *"      => \FFI\CIntPtr::class,
        "uint8_t **"     => \FFI\CIntPtrPtr::class,

        "int8_t"    => \FFI\CInt::class,
        "int8_t*"   => \FFI\CIntPtr::class,
        "int8_t *"  => \FFI\CIntPtr::class,
        "int8_t**"  => \FFI\CIntPtrPtr::class,
        "int8_t **" => \FFI\CIntPtrPtr::class,

        "uint16_t"    => \FFI\CInt::class,
        "uint16_t *"  => \FFI\CIntPtr::class,
        "uint16_t **" => \FFI\CIntPtrPtr::class,

        "int16_t"    => \FFI\CInt::class,
        "int16_t *"  => \FFI\CIntPtr::class,
        "int16_t **" => \FFI\CIntPtrPtr::class,

        "uint32_t"    => \FFI\CInt::class,
        "uint32_t *"  => \FFI\CIntPtr::class,
        "uint32_t **" => \FFI\CIntPtrPtr::class,

        "int32_t"    => \FFI\CInt::class,
        "int32_t *"  => \FFI\CIntPtr::class,
        "int32_t **" => \FFI\CIntPtrPtr::class,

        "uint64_t"    => \FFI\CInt::class,
        "uint64_t *"  => \FFI\CIntPtr::class,
        "uint64_t **" => \FFI\CIntPtrPtr::class,

        "int64_t"    => \FFI\CInt::class,
        "int64_t *"  => \FFI\CIntPtr::class,
        "int64_t **" => \FFI\CIntPtrPtr::class,

        // bool
        "bool"       => \FFI\CBool::class,
        "bool *"     => \FFI\CBoolPtr::class,
        "bool **"    => \FFI\CBoolPtrPtr::class,

        // string
        "char"       => \FFI\CChar::class,
        "char *"     => \FFI\CStringPtr::class,
        "char **"    => \FFI\CStringPtrPtr::class,
    ]));
    override(\Serafim\SDL\SDL::addr(), map([
        '' => '@Ptr',
    ]));
    expectedArguments(\Serafim\SDL\SDL::new(), 0, argumentsSet('ffiCType'));
    expectedArguments(\Serafim\SDL\SDL::cast(), 0, argumentsSet('ffiCType'));

    override(\Serafim\SDL\Support\ProxyTrait::new(), map([
        ''         => '@',
        // mixed
        "void *"   => \FFI\CScalar::class,

        // floats
        "float"    => \FFI\CFloat::class,
        "float *"  => \FFI\CFloatPtr::class,
        "float **" => \FFI\CFloatPtrPtr::class,

        "double"    => \FFI\CFloat::class,
        "double *"  => \FFI\CFloatPtr::class,
        "double **" => \FFI\CFloatPtrPtr::class,

        "long double"    => \FFI\CFloat::class,
        "long double *"  => \FFI\CFloatPtr::class,
        "long double **" => \FFI\CFloatPtrPtr::class,
        // integers
        "int"            => \FFI\CInt::class,
        "int *"          => \FFI\CIntPtr::class,
        "int **"         => \FFI\CIntPtrPtr::class,
        "uint8_t"        => \FFI\CInt::class,
        "uint8_t *"      => \FFI\CIntPtr::class,
        "uint8_t **"     => \FFI\CIntPtrPtr::class,

        "int8_t"    => \FFI\CInt::class,
        "int8_t*"   => \FFI\CIntPtr::class,
        "int8_t *"  => \FFI\CIntPtr::class,
        "int8_t**"  => \FFI\CIntPtrPtr::class,
        "int8_t **" => \FFI\CIntPtrPtr::class,

        "uint16_t"    => \FFI\CInt::class,
        "uint16_t *"  => \FFI\CIntPtr::class,
        "uint16_t **" => \FFI\CIntPtrPtr::class,

        "int16_t"    => \FFI\CInt::class,
        "int16_t *"  => \FFI\CIntPtr::class,
        "int16_t **" => \FFI\CIntPtrPtr::class,

        "uint32_t"    => \FFI\CInt::class,
        "uint32_t *"  => \FFI\CIntPtr::class,
        "uint32_t **" => \FFI\CIntPtrPtr::class,

        "int32_t"    => \FFI\CInt::class,
        "int32_t *"  => \FFI\CIntPtr::class,
        "int32_t **" => \FFI\CIntPtrPtr::class,

        "uint64_t"    => \FFI\CInt::class,
        "uint64_t *"  => \FFI\CIntPtr::class,
        "uint64_t **" => \FFI\CIntPtrPtr::class,

        "int64_t"    => \FFI\CInt::class,
        "int64_t *"  => \FFI\CIntPtr::class,
        "int64_t **" => \FFI\CIntPtrPtr::class,

        // bool
        "bool"       => \FFI\CBool::class,
        "bool *"     => \FFI\CBoolPtr::class,
        "bool **"    => \FFI\CBoolPtrPtr::class,

        // string
        "char"       => \FFI\CChar::class,
        "char *"     => \FFI\CStringPtr::class,
        "char **"    => \FFI\CStringPtrPtr::class,
    ]));
    override(\Serafim\SDL\Support\ProxyTrait::addr(), map([
        '' => '@Ptr',
    ]));
    expectedArguments(\Serafim\SDL\Support\ProxyTrait::new(), 0, argumentsSet('ffiCType'));
    expectedArguments(\Serafim\SDL\Support\ProxyTrait::cast(), 0, argumentsSet('ffiCType'));
}
