define(
    [
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (
        Component,
        rendererList
    ) {
        'use strict';
        rendererList.push(
            {
                type: 'cartoffline',
                component: 'Dragonfly_CartOfflinePaymentMethod/js/view/payment/method-renderer/cartoffline'
            }
        );
        return Component.extend({});
    }
);