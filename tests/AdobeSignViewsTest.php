<?php


namespace Eazieer\AdobeSign\Tests;


class AdobeSignViewsTest extends BaseTestCase
{
    /**
     * Sets up the fixture, for example, open a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        parent::setUp();

        $this->provider->shouldReceive('getAuthenticatedRequest')->andReturn($this->request);
        $this->provider->shouldReceive('getResponse')->andReturn(['mock_response' => 'mock_response']);
    }

    public function testGetAgreementAssetsViewUrl()
    {
        $res = $this->adobeSign->getAgreementAssetsViewUrl([]);
        $this->assertEquals($res, ['mock_response' => 'mock_response']);
    }

    public function testGetAgreementAssetListViewUrl()
    {
        $res = $this->adobeSign->getAgreementAssetListViewUrl([]);
        $this->assertEquals($res, ['mock_response' => 'mock_response']);
    }

    public function testGetSettingsViewUrl()
    {
        $res = $this->adobeSign->getSettingsViewUrl([]);
        $this->assertEquals($res, ['mock_response' => 'mock_response']);
    }
}