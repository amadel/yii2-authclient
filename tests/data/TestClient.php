<?php

namespace yiiunit\extensions\authclient\data;

use yii\custom\authclient\BaseClient;

/**
 * Mock for the Auth client.
 */
class TestClient extends BaseClient
{
    /**
     * @inheritdoc
     */
    protected function initUserAttributes()
    {
        return [];
    }
}