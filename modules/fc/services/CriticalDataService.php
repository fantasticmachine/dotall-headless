<?php

namespace modules\fc\services;

use Craft;
use craft\base\Component;
use craft\commerce\Plugin;

class CriticalDataService extends Component {
    /**
     * Get the CSRF token from Craft
     *
     * @return array
     */
    public function getCsrfToken(): array {
        return [
            'name'  => Craft::$app->getConfig()->getGeneral()->csrfTokenName,
            'token' => Craft::$app->request->getCsrfToken()
        ];
    }
	/**
	 * Get the countries enabled in Commerce
	 *
	 * @return array
	 */
    public function getStoreCountries(): array {
        return Plugin::getInstance()->getStore()->getStore()->getCountriesList();
    }
	/**
	 * Get the country regions enabled in Commerce
	 *
	 * @return array
	 */
    public function getStoreRegions(): array {
        return Plugin::getInstance()->getStore()->getStore()->getAdministrativeAreasListByCountryCode();
    }
	/**
	 * Get the enabled payment gateways in Commerce
	 *
	 * @return array
	 */
    public function getStorePaymentGateways(): array {
    	return Plugin::getInstance()->gateways->getAllCustomerEnabledGateways();
	}
}
