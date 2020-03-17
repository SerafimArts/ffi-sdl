<?php

namespace PHPSTORM_META {
    override(\Serafim\SDL\Library::new(), map([
        ''         => type(0),
        // mixed
        "void *"   => \FFI\CScalar::class,

        // floats
        "float"    => \FFI\CFloat::class,
        "float *"  => \CFloatPtr::class,
        "float **" => \CFloatPtrPtr::class,

        "double"    => \FFI\CFloat::class,
        "double *"  => \CFloatPtr::class,
        "double **" => \CFloatPtrPtr::class,

        "long double"    => \FFI\CFloat::class,
        "long double *"  => \CFloatPtr::class,
        "long double **" => \CFloatPtrPtr::class,

        // integers
        "int"            => \FFI\CInt::class,
        "int *"          => \CIntPtr::class,
        "int **"         => \CIntPtrPtr::class,

        "uint8_t"    => \FFI\CInt::class,
        "uint8_t *"  => \CIntPtr::class,
        "uint8_t **" => \CIntPtrPtr::class,

        "int8_t"    => \FFI\CInt::class,
        "int8_t*"   => \CIntPtr::class,
        "int8_t *"  => \CIntPtr::class,
        "int8_t**"  => \CIntPtrPtr::class,
        "int8_t **" => \CIntPtrPtr::class,

        "uint16_t"    => \FFI\CInt::class,
        "uint16_t *"  => \CIntPtr::class,
        "uint16_t **" => \CIntPtrPtr::class,

        "int16_t"    => \FFI\CInt::class,
        "int16_t *"  => \CIntPtr::class,
        "int16_t **" => \CIntPtrPtr::class,

        "uint32_t"    => \FFI\CInt::class,
        "uint32_t *"  => \CIntPtr::class,
        "uint32_t **" => \CIntPtrPtr::class,

        "int32_t"    => \FFI\CInt::class,
        "int32_t *"  => \CIntPtr::class,
        "int32_t **" => \CIntPtrPtr::class,

        "uint64_t"    => \FFI\CInt::class,
        "uint64_t *"  => \CIntPtr::class,
        "uint64_t **" => \CIntPtrPtr::class,

        "int64_t"    => \FFI\CInt::class,
        "int64_t *"  => \CIntPtr::class,
        "int64_t **" => \CIntPtrPtr::class,

        // bool
        "bool"       => \FFI\CBool::class,
        "bool *"     => \CBoolPtr::class,
        "bool **"    => \CBoolPtrPtr::class,

        // string
        "char"       => \FFI\CChar::class,
        "char *"     => \CStringPtr::class,
        "char **"    => \CStringPtrPtr::class,
    ]));

    override(\Serafim\SDL\Library::addr(), map([
        '' => '@Ptr',
    ]));

    override(\Serafim\SDL\Library::cast(), map([
        '' => '@',
    ]));
}
