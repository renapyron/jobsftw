<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/

namespace Tygh\Api\Entities;

use Tygh\Api\AEntity;
use Tygh\Api\Response;
use Tygh\Settings;

class Shipments extends AEntity
{
    public function index($id = 0, $params = array())
    {
        if (!empty($id)) {
            $params['shipment_id'] = $id;
            $params['advanced_info'] = true;
            list($shipments, ) = fn_get_shipments_info($params);
            $data = reset($shipments);

            if (empty($data)) {
                $status = Response::STATUS_NOT_FOUND;
            } else {
                $status = Response::STATUS_OK;
            }

        } else {

            $params['advanced_info'] = isset($params['advanced_info']) ? $params['advanced_info'] : true;

            list($data, ) = fn_get_shipments_info($params);
            $status = Response::STATUS_OK;
        }

        return array(
            'status' => $status,
            'data' => $data
        );
    }

    public function create($params)
    {
        $data = array();
        $valid_params = true;
        $status = Response::STATUS_BAD_REQUEST;

        unset($params['shipment_id']);

        if (empty($params['order_id'])) {
            $data['message'] = __('api_need_order_id');
            $valid_params = false;

        } elseif (empty($params['shipping_id'])) {
            $data['message'] = __('api_need_shipping_id');
            $valid_params = false;
        }

        if ($valid_params) {
            if (empty($params['products'])) {
                $shipment_id = fn_update_shipment($params, 0, 0, true);
            } else {
                $shipment_id = fn_update_shipment($params);
            }

            if ($shipment_id) {
                $status = Response::STATUS_CREATED;
                $data = array(
                    'shipment_id' => $shipment_id,
                );
            }
        }

        return array(
            'status' => $status,
            'data' => $data
        );
    }

    public function update($id, $params)
    {

        $data = array();
        $valid_params = true;
        $status = Response::STATUS_BAD_REQUEST;

        unset($params['shipment_id']);
        list($shipments, ) = fn_get_shipments_info(array('shipment_id' => $id));
        $shipment_data = reset($shipments);

        $order_info = fn_get_order_info($shipment_data['order_id'], false, true, true);

        if (Settings::instance()->getValue('use_shipments', '', $order_info['company_id']) == 'Y') {
            $data['message'] = __('api_shipments_not_allow_update');
            $valid_params = false;
        }

        if ($valid_params) {
            $shipment_id = fn_update_shipment($params, $id);
            if ($shipment_id) {
                $status = Response::STATUS_OK;
                $data = array(
                    'shipment_id' => $shipment_id
                );
            }
        }

        return array(
            'status' => $status,
            'data' => $data
        );
    }

    public function delete($id)
    {
        $data = array();
        $status = Response::STATUS_BAD_REQUEST;

        if (fn_delete_shipments($id)) {
            $status = Response::STATUS_OK;
            $data['message'] = 'Ok';
        }

        return array(
            'status' => $status,
            'data' => $data
        );
    }

    public function priveleges()
    {
        return array(
            'create' => 'edit_order',
            'update' => 'edit_order',
            'delete' => 'edit_order',
            'index'  => 'view_order'
        );
    }

}
