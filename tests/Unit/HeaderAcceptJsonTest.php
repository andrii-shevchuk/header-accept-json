<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Middleware\HeaderAcceptJson;
use Illuminate\Http\Request;

class HeaderAcceptJsonMiddlewareTest extends TestCase
{
    /**
     * Test for getting header with accept = application/json by App\Http\Middleware\HeaderAcceptJson middleware
     *
     * @return void
     */
    public function testRequestTest()
    {
        
    	$request = new Request;

        $middleware = new HeaderAcceptJson;

        $middleware->handle($request, function ($request) {

        	return $this->assertTrue($request->header('accept') === 'application/json' ? true : false);
        });
    }
}