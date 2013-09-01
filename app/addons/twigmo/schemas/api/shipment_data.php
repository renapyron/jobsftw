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

$schema = array (
    'object_name' => 'shipment_data',
    'fields' => array (
        'shippings' => array (
            'schema' => array (
                'type' => 'shippings',
                'name' => 'shippings',
            ),
            'required' => true
        ),
        'carriers' => array (
            'schema' => array (
                'type' => 'carriers',
                'name' => 'carriers',
            ),
            'required' => true
        ),
    )
);
return $schema;