<?php declare(strict_types=1);
/**
 * @author Anikeev Dmitry <anikeev.dmitry@outlook.com>
 */

namespace OrangeData\Request;

use OrangeData\Response\OrangeDataResponseInterface;
use OrangeData\Response\OrderStatusResponse;
use Psr\Http\Message\ResponseInterface;

class OrderStatusRequest extends AbstractOrangeDataRequest
{

    protected function createResponse(ResponseInterface $response): OrangeDataResponseInterface
    {
        return new OrderStatusResponse($response);
    }
}