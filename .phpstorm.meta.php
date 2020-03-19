<?php

namespace PHPSTORM_META {
    override(\FFI::new(), map([
        ''         => type(0),
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

        "uint8_t"    => \FFI\CInt::class,
        "uint8_t *"  => \FFI\CIntPtr::class,
        "uint8_t **" => \FFI\CIntPtrPtr::class,

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

    override(\Serafim\SDL\SDL::new(), map([
        ''         => type(0),
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

        "uint8_t"    => \FFI\CInt::class,
        "uint8_t *"  => \FFI\CIntPtr::class,
        "uint8_t **" => \FFI\CIntPtrPtr::class,

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

    override(\Serafim\SDL\Library::new(), map([
        ''         => type(0),
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

        "uint8_t"    => \FFI\CInt::class,
        "uint8_t *"  => \FFI\CIntPtr::class,
        "uint8_t **" => \FFI\CIntPtrPtr::class,

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

    override(\Serafim\SDL\Library::addr(), map([
        '' => '@Ptr',
    ]));

    override(\Serafim\SDL\Library::cast(), map([
        '' => '@',
    ]));
}
