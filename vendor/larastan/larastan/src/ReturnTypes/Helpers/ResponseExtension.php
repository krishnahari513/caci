<?php

declare(strict_types=1);

namespace Larastan\Larastan\ReturnTypes\Helpers;

use PhpParser\Node\Expr\FuncCall;
use PHPStan\Analyser\Scope;
use PHPStan\Reflection\FunctionReflection;
use PHPStan\Type\DynamicFunctionReturnTypeExtension;
use PHPStan\Type\ObjectType;
use PHPStan\Type\Type;

use function count;

/**
 * @internal
 */
final class ResponseExtension implements DynamicFunctionReturnTypeExtension
{
    /**
     * {@inheritdoc}
     */
    public function isFunctionSupported(FunctionReflection $functionReflection): bool
    {
        return $functionReflection->getName() === 'response';
    }

    /**
     * {@inheritdoc}
     */
    public function getTypeFromFunctionCall(
        FunctionReflection $functionReflection,
        FuncCall $functionCall,
        Scope $scope
    ): Type {
        if (count($functionCall->getArgs()) === 0) {
            return new ObjectType(\Illuminate\Contracts\Routing\ResponseFactory::class);
        }

        return new ObjectType(\Illuminate\Http\Response::class);
    }
}
