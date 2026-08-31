<?php

use Invertus\dpdBalticsApi\Api\DTO\Request\CourierRequestRequest;
use PHPUnit\Framework\TestCase;

class CourierRequestRequestSerializationTest extends TestCase
{
    public function testLegacyPayloadIsUnchangedWhenSlotFieldsAreNotSet()
    {
        $request = $this->createCourierRequestRequest();

        $payload = $request->jsonSerialize();

        $this->assertSame('2030-02-20 15:00:00', $payload['pickupTime']);
        $this->assertSame('2030-02-20 18:00:00', $payload['senderWorkUntil']);
        $this->assertArrayNotHasKey('pickupDate', $payload);
        $this->assertArrayNotHasKey('pickupTimeFrom', $payload);
        $this->assertArrayNotHasKey('pickupTimeTo', $payload);
    }

    public function testSlotFieldsAreSerializedWhenSet()
    {
        $request = $this->createCourierRequestRequest();
        $request->setPickupDate('2030-02-20');
        $request->setPickupTimeFrom('08:00');
        $request->setPickupTimeTo('17:00');

        $payload = $request->jsonSerialize();

        $this->assertSame('2030-02-20', $payload['pickupDate']);
        $this->assertSame('08:00', $payload['pickupTimeFrom']);
        $this->assertSame('17:00', $payload['pickupTimeTo']);
        $this->assertSame('2030-02-20 15:00:00', $payload['pickupTime']);
    }

    private function createCourierRequestRequest()
    {
        return new CourierRequestRequest(
            '123456',
            'testAddres',
            'senderCity',
            'LV',
            1005,
            'contactName',
            '123456789',
            '2030-02-20 18:00:00',
            '2030-02-20 15:00:00',
            15.2,
            1
        );
    }
}
