<?php
namespace App\Http\Controllers;
use Auth;
use Socialite;
use Session;
use Illuminate\Http\Request;

class ProductController extends MainController
{

    public function getProduct(Request $request)
	{
		$postresult = $request->all();
		// $result = $this->callAPI('getProductList',$postresult);
        $result = $this->getProductTest();
		return json_decode($result,true);
	}

    public function getProductTest()
    {
        $product = '[
            {
                "id": 796687,
                "name": "Buy 2 @RM139.99",
                "date_modified": "2022-10-21T07:39:13",
                "type": "composite",
                "status": "publish",
                "catalog_visibility": "visible",
                "description": "",
                "sku": "",
                "regular_price": 0,
                "sale_price": "",
                "date_on_sale_from": "",
                "date_on_sale_to": "",
                "tax_class": "",
                "manage_stock": false,
                "stock_quantity": null,
                "in_stock": true,
                "backorders": "no",
                "backorders_allowed": false,
                "backordered": false,
                "weight": "",
                "dimensions": {
                    "length": "",
                    "width": "",
                    "height": ""
                },
                "shipping_class": "",
                "shipping_class_id": 0,
                "cross_sell_ids": [],
                "categories": [
                    {
                        "id": 14509,
                        "name": "Consumer Goods - Food",
                        "slug": "consumer-goods-food"
                    }
                ],
                "tags": [],
                "images": [
                    {
                        "id": 796688,
                        "src": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/FFM13.png",
                        "alt": "",
                        "hash": "",
                        "src_small": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/FFM13-150x150.png",
                        "src_medium": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/FFM13-250x246.png",
                        "src_large": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/FFM13.png"
                    }
                ],
                "attributes": [],
                "default_attributes": [],
                "variations": [],
                "menu_order": 0,
                "composite_layout": "single",
                "composite_components": [
                    {
                        "id": "1666366754",
                        "title": "Buy 2 @RM139.99",
                        "description": "",
                        "query_type": "product_ids",
                        "query_ids": [
                            796636
                        ],
                        "default_option_id": 796636,
                        "thumbnail_id": "",
                        "quantity_min": 2,
                        "quantity_max": 2,
                        "priced_individually": true,
                        "shipped_individually": false,
                        "optional": false,
                        "discount": "",
                        "options_style": "dropdowns"
                    }
                ],
                "composite_scenarios": [],
                "bundle_layout": "",
                "bundled_by": [],
                "bundled_items": [],
                "mixed_sku_volume_pricing_group": {
                    "product_ids": [],
                    "product_attributes": []
                },
                "custom_fields": {
                    "sales_item": "",
                    "internal_sales_item": "",
                    "inventory_item": "",
                    "to_hide_during_picking_and_packing": "",
                    "source": "",
                    "disallow_children_backorders": "",
                    "group": "",
                    "date_valid_from": "",
                    "date_valid_to": "",
                    "internal_description": "",
                    "discontinued": "",
                    "customer_tiers": "",
                    "barcode": "",
                    "is_rack_barcode": "",
                    "customers": "",
                    "price_tags": ""
                },
                "pricing_groups": [],
                "composite_product_details": {
                    "per_item_pricing": "true",
                    "components": [
                        {
                            "name": "Buy 2 @RM139.99",
                            "products": [
                                {
                                    "id": 796633,
                                    "name": "Snow Brand MBP® NeoMilk",
                                    "date_modified": "2022-10-21T05:15:56",
                                    "type": "variable",
                                    "status": "publish",
                                    "catalog_visibility": "visible",
                                    "description": "<p>Snow Brand</p>\n",
                                    "sku": "",
                                    "regular_price": "",
                                    "sale_price": "",
                                    "date_on_sale_from": "",
                                    "date_on_sale_to": "",
                                    "tax_class": "",
                                    "manage_stock": false,
                                    "stock_quantity": 0,
                                    "in_stock": true,
                                    "backorders": "no",
                                    "backorders_allowed": false,
                                    "backordered": false,
                                    "weight": "",
                                    "dimensions": {
                                        "length": "",
                                        "width": "",
                                        "height": ""
                                    },
                                    "shipping_class": "",
                                    "shipping_class_id": 0,
                                    "cross_sell_ids": [],
                                    "categories": [
                                        {
                                            "id": 14509,
                                            "name": "Consumer Goods - Food",
                                            "slug": "consumer-goods-food"
                                        }
                                    ],
                                    "tags": [],
                                    "images": [
                                        {
                                            "id": 796634,
                                            "src": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/FFM6.png",
                                            "alt": "",
                                            "hash": "",
                                            "src_small": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/FFM6-152x180.png",
                                            "src_medium": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/FFM6-212x250.png",
                                            "src_large": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/FFM6.png"
                                        }
                                    ],
                                    "attributes": [
                                        {
                                            "id": 1,
                                            "name": "Variations",
                                            "position": 0,
                                            "visible": true,
                                            "variation": true,
                                            "options": [
                                                "TIN"
                                            ]
                                        }
                                    ],
                                    "default_attributes": [],
                                    "variations": [
                                        {
                                            "id": 796636,
                                            "sku": "FFM-F-004",
                                            "description": "",
                                            "regular_price": "74.9",
                                            "sale_price": "",
                                            "date_on_sale_from": "",
                                            "date_on_sale_to": "",
                                            "tax_class": "",
                                            "manage_stock": false,
                                            "stock_quantity": 0,
                                            "in_stock": true,
                                            "backorders": "no",
                                            "backorders_allowed": false,
                                            "backordered": false,
                                            "weight": "",
                                            "dimensions": {
                                                "length": "",
                                                "width": "",
                                                "height": ""
                                            },
                                            "shipping_class": "",
                                            "shipping_class_id": 0,
                                            "image": [],
                                            "attributes": [
                                                {
                                                    "id": 1,
                                                    "name": "Variations",
                                                    "option": "TIN"
                                                }
                                            ],
                                            "custom_fields": {
                                                "to_hide": "false",
                                                "cost": "",
                                                "customer_tiers_on_sale": "",
                                                "variation_barcode": "",
                                                "variation_shelf": "",
                                                "minprice": "",
                                                "conversionrategroup": "",
                                                "conversionrate": ""
                                            },
                                            "points_earned": "",
                                            "points_required": "0",
                                            "maximum_points_discount": "",
                                            "insurance_class": "",
                                            "insurance_class_id": null,
                                            "inventory": [
                                                {
                                                    "branch_id": 794751,
                                                    "batch_id": null,
                                                    "stock_quantity": 100,
                                                    "physical_stock_quantity": 100,
                                                    "updated_at": "2022-10-20 09:46:13"
                                                },
                                                {
                                                    "branch_id": 619740,
                                                    "batch_id": null,
                                                    "stock_quantity": 100,
                                                    "physical_stock_quantity": 100,
                                                    "updated_at": "2022-10-20 09:47:34"
                                                },
                                                {
                                                    "branch_id": 769343,
                                                    "batch_id": null,
                                                    "stock_quantity": 10,
                                                    "physical_stock_quantity": 10,
                                                    "updated_at": "2022-10-20 09:49:03"
                                                }
                                            ]
                                        }
                                    ],
                                    "menu_order": 0,
                                    "composite_layout": "",
                                    "composite_components": [],
                                    "composite_scenarios": [],
                                    "bundle_layout": "",
                                    "bundled_by": [],
                                    "bundled_items": [],
                                    "mixed_sku_volume_pricing_group": {
                                        "product_ids": [],
                                        "product_attributes": []
                                    },
                                    "custom_fields": {
                                        "sales_item": "false",
                                        "internal_sales_item": "false",
                                        "inventory_item": "false",
                                        "to_hide_during_picking_and_packing": "false",
                                        "source": "",
                                        "disallow_children_backorders": "false",
                                        "group": "",
                                        "date_valid_from": "",
                                        "date_valid_to": "",
                                        "internal_description": "",
                                        "discontinued": "false",
                                        "customer_tiers": "",
                                        "barcode": "",
                                        "is_rack_barcode": "false",
                                        "customers": "",
                                        "price_tags": ""
                                    },
                                    "pricing_groups": [],
                                    "composite_product_details": null,
                                    "bundle_product_details": null,
                                    "group_of": 1,
                                    "minimum_quantity": null,
                                    "maximum_quantity": null,
                                    "insurance_class": "",
                                    "insurance_class_id": null,
                                    "allowed_variations": [
                                        796636
                                    ],
                                    "allowed_variation_skus": [
                                        "FFM-F-004"
                                    ]
                                }
                            ],
                            "number_of_different_products_allowed": 0,
                            "minimum_quantity": 2,
                            "maximum_quantity": 2,
                            "is_same_sku_free_item": false,
                            "same_sku_free_quantity": 0,
                            "different_sku_free_quantity": 0,
                            "lowest_price_free": false,
                            "discount_percentage": 0,
                            "discount_on_regular_price": false,
                            "discount_amount": 0,
                            "price": 70,
                            "composite_minimum_order": null,
                            "purchase_with_purchase_minimum_order": null
                        }
                    ]
                },
                "bundle_product_details": null,
                "group_of": 1,
                "minimum_quantity": null,
                "maximum_quantity": null,
                "points_earned": "",
                "points_required": "",
                "maximum_points_discount": "",
                "insurance_class": "",
                "insurance_class_id": null,
                "inventory": [],
                "_links": {
                    "self": [
                        {
                            "href": "https://mangomart-autocount.myboostorder.com/wp-json/wc/v1/products/796687"
                        }
                    ],
                    "collection": [
                        {
                            "href": "https://mangomart-autocount.myboostorder.com/wp-json/wc/v1/products"
                        }
                    ]
                }
            },
            {
                "id": 796674,
                "name": "Combo Set (package discount)",
                "date_modified": "2022-10-20T09:28:23",
                "type": "composite",
                "status": "publish",
                "catalog_visibility": "visible",
                "description": "",
                "sku": "",
                "regular_price": 0,
                "sale_price": "",
                "date_on_sale_from": "",
                "date_on_sale_to": "",
                "tax_class": "",
                "manage_stock": false,
                "stock_quantity": null,
                "in_stock": true,
                "backorders": "no",
                "backorders_allowed": false,
                "backordered": false,
                "weight": "",
                "dimensions": {
                    "length": "",
                    "width": "",
                    "height": ""
                },
                "shipping_class": "",
                "shipping_class_id": 0,
                "cross_sell_ids": [],
                "categories": [
                    {
                        "id": 14511,
                        "name": "Consumer Goods - Non Food",
                        "slug": "consumer-goods-non-food"
                    }
                ],
                "tags": [],
                "images": [
                    {
                        "id": 796681,
                        "src": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/2022-10-20_17h10_40.png",
                        "alt": "",
                        "hash": "",
                        "src_small": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/2022-10-20_17h10_40-180x152.png",
                        "src_medium": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/2022-10-20_17h10_40-250x211.png",
                        "src_large": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/2022-10-20_17h10_40.png"
                    }
                ],
                "attributes": [],
                "default_attributes": [],
                "variations": [],
                "menu_order": 0,
                "composite_layout": "single",
                "composite_components": [
                    {
                        "id": "1666276717",
                        "title": "Single / multiple brands - Combo Set (package discount)",
                        "description": "",
                        "query_type": "product_ids",
                        "query_ids": [
                            796641,
                            796645,
                            796648,
                            796659
                        ],
                        "default_option_id": "",
                        "thumbnail_id": "",
                        "quantity_min": 1,
                        "quantity_max": "",
                        "priced_individually": true,
                        "shipped_individually": false,
                        "optional": false,
                        "discount": 8,
                        "options_style": "dropdowns"
                    }
                ],
                "composite_scenarios": [],
                "bundle_layout": "",
                "bundled_by": [],
                "bundled_items": [],
                "mixed_sku_volume_pricing_group": {
                    "product_ids": [],
                    "product_attributes": []
                },
                "custom_fields": {
                    "sales_item": "",
                    "internal_sales_item": "",
                    "inventory_item": "",
                    "to_hide_during_picking_and_packing": "",
                    "source": "",
                    "disallow_children_backorders": "",
                    "group": "",
                    "date_valid_from": "",
                    "date_valid_to": "",
                    "internal_description": "",
                    "discontinued": "",
                    "customer_tiers": "",
                    "barcode": "",
                    "is_rack_barcode": "",
                    "customers": "",
                    "price_tags": ""
                },
                "pricing_groups": [],
                "composite_product_details": {
                    "per_item_pricing": "true",
                    "components": [
                        {
                            "name": "Single / multiple brands - Combo Set (package discount)",
                            "products": [
                                {
                                    "id": 796639,
                                    "name": "PDB Kids Toothpaste Strawberry",
                                    "date_modified": "2022-10-20T09:44:10",
                                    "type": "variable",
                                    "status": "publish",
                                    "catalog_visibility": "visible",
                                    "description": "",
                                    "sku": "FFM-NF-001",
                                    "regular_price": "",
                                    "sale_price": "",
                                    "date_on_sale_from": "",
                                    "date_on_sale_to": "",
                                    "tax_class": "",
                                    "manage_stock": false,
                                    "stock_quantity": 0,
                                    "in_stock": true,
                                    "backorders": "no",
                                    "backorders_allowed": false,
                                    "backordered": false,
                                    "weight": "",
                                    "dimensions": {
                                        "length": "",
                                        "width": "",
                                        "height": ""
                                    },
                                    "shipping_class": "",
                                    "shipping_class_id": 0,
                                    "cross_sell_ids": [],
                                    "categories": [
                                        {
                                            "id": 14511,
                                            "name": "Consumer Goods - Non Food",
                                            "slug": "consumer-goods-non-food"
                                        }
                                    ],
                                    "tags": [],
                                    "images": [
                                        {
                                            "id": 796640,
                                            "src": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/FFM7.jpg",
                                            "alt": "",
                                            "hash": "",
                                            "src_small": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/FFM7-180x146.jpg",
                                            "src_medium": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/FFM7-300x243.jpg",
                                            "src_large": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/FFM7.jpg"
                                        }
                                    ],
                                    "attributes": [
                                        {
                                            "id": 1,
                                            "name": "Variations",
                                            "position": 0,
                                            "visible": true,
                                            "variation": true,
                                            "options": [
                                                "UNIT"
                                            ]
                                        }
                                    ],
                                    "default_attributes": [],
                                    "variations": [
                                        {
                                            "id": 796641,
                                            "sku": "FFM-NF-001-U",
                                            "description": "",
                                            "regular_price": "3.4",
                                            "sale_price": "",
                                            "date_on_sale_from": "",
                                            "date_on_sale_to": "",
                                            "tax_class": "",
                                            "manage_stock": false,
                                            "stock_quantity": 0,
                                            "in_stock": true,
                                            "backorders": "no",
                                            "backorders_allowed": false,
                                            "backordered": false,
                                            "weight": "",
                                            "dimensions": {
                                                "length": "",
                                                "width": "",
                                                "height": ""
                                            },
                                            "shipping_class": "",
                                            "shipping_class_id": 0,
                                            "image": [],
                                            "attributes": [
                                                {
                                                    "id": 1,
                                                    "name": "Variations",
                                                    "option": "UNIT"
                                                }
                                            ],
                                            "custom_fields": {
                                                "to_hide": "false",
                                                "cost": "",
                                                "customer_tiers_on_sale": "",
                                                "variation_barcode": "",
                                                "variation_shelf": "",
                                                "minprice": "",
                                                "conversionrategroup": "",
                                                "conversionrate": ""
                                            },
                                            "points_earned": "",
                                            "points_required": "0",
                                            "maximum_points_discount": "",
                                            "insurance_class": "",
                                            "insurance_class_id": null,
                                            "inventory": [
                                                {
                                                    "branch_id": 794751,
                                                    "batch_id": null,
                                                    "stock_quantity": 100,
                                                    "physical_stock_quantity": 100,
                                                    "updated_at": "2022-10-20 05:32:15"
                                                },
                                                {
                                                    "branch_id": 769343,
                                                    "batch_id": null,
                                                    "stock_quantity": 10,
                                                    "physical_stock_quantity": 10,
                                                    "updated_at": "2022-10-20 09:34:33"
                                                },
                                                {
                                                    "branch_id": 619740,
                                                    "batch_id": null,
                                                    "stock_quantity": 10,
                                                    "physical_stock_quantity": 10,
                                                    "updated_at": "2022-10-20 09:44:09"
                                                }
                                            ]
                                        }
                                    ],
                                    "menu_order": 0,
                                    "composite_layout": "",
                                    "composite_components": [],
                                    "composite_scenarios": [],
                                    "bundle_layout": "",
                                    "bundled_by": [],
                                    "bundled_items": [],
                                    "mixed_sku_volume_pricing_group": {
                                        "product_ids": [],
                                        "product_attributes": []
                                    },
                                    "custom_fields": {
                                        "sales_item": "false",
                                        "internal_sales_item": "false",
                                        "inventory_item": "false",
                                        "to_hide_during_picking_and_packing": "false",
                                        "source": "",
                                        "disallow_children_backorders": "false",
                                        "group": "",
                                        "date_valid_from": "",
                                        "date_valid_to": "",
                                        "internal_description": "",
                                        "discontinued": "false",
                                        "customer_tiers": "",
                                        "barcode": "",
                                        "is_rack_barcode": "false",
                                        "customers": "",
                                        "price_tags": ""
                                    },
                                    "pricing_groups": [],
                                    "composite_product_details": null,
                                    "bundle_product_details": null,
                                    "group_of": 1,
                                    "minimum_quantity": null,
                                    "maximum_quantity": null,
                                    "insurance_class": "",
                                    "insurance_class_id": null,
                                    "allowed_variations": [
                                        796641
                                    ],
                                    "allowed_variation_skus": [
                                        "FFM-NF-001-U"
                                    ]
                                },
                                {
                                    "id": 796642,
                                    "name": "PDB BBB Toothbrush 3-6",
                                    "date_modified": "2022-10-20T09:44:26",
                                    "type": "variable",
                                    "status": "publish",
                                    "catalog_visibility": "visible",
                                    "description": "",
                                    "sku": "FFM-NF-002",
                                    "regular_price": "",
                                    "sale_price": "",
                                    "date_on_sale_from": "",
                                    "date_on_sale_to": "",
                                    "tax_class": "",
                                    "manage_stock": false,
                                    "stock_quantity": 0,
                                    "in_stock": true,
                                    "backorders": "no",
                                    "backorders_allowed": false,
                                    "backordered": false,
                                    "weight": "",
                                    "dimensions": {
                                        "length": "",
                                        "width": "",
                                        "height": ""
                                    },
                                    "shipping_class": "",
                                    "shipping_class_id": 0,
                                    "cross_sell_ids": [],
                                    "categories": [
                                        {
                                            "id": 14511,
                                            "name": "Consumer Goods - Non Food",
                                            "slug": "consumer-goods-non-food"
                                        }
                                    ],
                                    "tags": [],
                                    "images": [
                                        {
                                            "id": 796643,
                                            "src": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/FFM8.png",
                                            "alt": "",
                                            "hash": "",
                                            "src_small": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/FFM8-108x180.png",
                                            "src_medium": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/FFM8-150x250.png",
                                            "src_large": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/FFM8.png"
                                        },
                                        {
                                            "id": 796644,
                                            "src": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/FFM9.png",
                                            "alt": "",
                                            "hash": "",
                                            "src_small": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/FFM9-121x180.png",
                                            "src_medium": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/FFM9-168x250.png",
                                            "src_large": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/FFM9.png"
                                        }
                                    ],
                                    "attributes": [
                                        {
                                            "id": 1,
                                            "name": "Variations",
                                            "position": 0,
                                            "visible": true,
                                            "variation": true,
                                            "options": [
                                                "UNIT"
                                            ]
                                        }
                                    ],
                                    "default_attributes": [],
                                    "variations": [
                                        {
                                            "id": 796645,
                                            "sku": "FFM-NF-002-U",
                                            "description": "",
                                            "regular_price": "3.4",
                                            "sale_price": "",
                                            "date_on_sale_from": "",
                                            "date_on_sale_to": "",
                                            "tax_class": "",
                                            "manage_stock": false,
                                            "stock_quantity": 0,
                                            "in_stock": true,
                                            "backorders": "no",
                                            "backorders_allowed": false,
                                            "backordered": false,
                                            "weight": "",
                                            "dimensions": {
                                                "length": "",
                                                "width": "",
                                                "height": ""
                                            },
                                            "shipping_class": "",
                                            "shipping_class_id": 0,
                                            "image": [],
                                            "attributes": [
                                                {
                                                    "id": 1,
                                                    "name": "Variations",
                                                    "option": "UNIT"
                                                }
                                            ],
                                            "custom_fields": {
                                                "to_hide": "false",
                                                "cost": "",
                                                "customer_tiers_on_sale": "",
                                                "variation_barcode": "",
                                                "variation_shelf": "",
                                                "minprice": "",
                                                "conversionrategroup": "",
                                                "conversionrate": ""
                                            },
                                            "points_earned": "",
                                            "points_required": "0",
                                            "maximum_points_discount": "",
                                            "insurance_class": "",
                                            "insurance_class_id": null,
                                            "inventory": [
                                                {
                                                    "branch_id": 794751,
                                                    "batch_id": null,
                                                    "stock_quantity": 100,
                                                    "physical_stock_quantity": 100,
                                                    "updated_at": "2022-10-20 05:32:26"
                                                },
                                                {
                                                    "branch_id": 769343,
                                                    "batch_id": null,
                                                    "stock_quantity": 10,
                                                    "physical_stock_quantity": 10,
                                                    "updated_at": "2022-10-20 09:34:49"
                                                },
                                                {
                                                    "branch_id": 619740,
                                                    "batch_id": null,
                                                    "stock_quantity": 10,
                                                    "physical_stock_quantity": 10,
                                                    "updated_at": "2022-10-20 09:44:25"
                                                }
                                            ]
                                        }
                                    ],
                                    "menu_order": 0,
                                    "composite_layout": "",
                                    "composite_components": [],
                                    "composite_scenarios": [],
                                    "bundle_layout": "",
                                    "bundled_by": [],
                                    "bundled_items": [],
                                    "mixed_sku_volume_pricing_group": {
                                        "product_ids": [],
                                        "product_attributes": []
                                    },
                                    "custom_fields": {
                                        "sales_item": "false",
                                        "internal_sales_item": "false",
                                        "inventory_item": "false",
                                        "to_hide_during_picking_and_packing": "false",
                                        "source": "",
                                        "disallow_children_backorders": "false",
                                        "group": "",
                                        "date_valid_from": "",
                                        "date_valid_to": "",
                                        "internal_description": "",
                                        "discontinued": "false",
                                        "customer_tiers": "",
                                        "barcode": "",
                                        "is_rack_barcode": "false",
                                        "customers": "",
                                        "price_tags": ""
                                    },
                                    "pricing_groups": [],
                                    "composite_product_details": null,
                                    "bundle_product_details": null,
                                    "group_of": 1,
                                    "minimum_quantity": null,
                                    "maximum_quantity": null,
                                    "insurance_class": "",
                                    "insurance_class_id": null,
                                    "allowed_variations": [
                                        796645
                                    ],
                                    "allowed_variation_skus": [
                                        "FFM-NF-002-U"
                                    ]
                                },
                                {
                                    "id": 796646,
                                    "name": "V-Soy Multigrain 4 x 200ml",
                                    "date_modified": "2022-12-21T01:28:36",
                                    "type": "variable",
                                    "status": "publish",
                                    "catalog_visibility": "visible",
                                    "description": "",
                                    "sku": "FFM-F-005",
                                    "regular_price": "",
                                    "sale_price": "",
                                    "date_on_sale_from": "",
                                    "date_on_sale_to": "",
                                    "tax_class": "",
                                    "manage_stock": false,
                                    "stock_quantity": 0,
                                    "in_stock": true,
                                    "backorders": "no",
                                    "backorders_allowed": false,
                                    "backordered": false,
                                    "weight": "",
                                    "dimensions": {
                                        "length": "",
                                        "width": "",
                                        "height": ""
                                    },
                                    "shipping_class": "",
                                    "shipping_class_id": 0,
                                    "cross_sell_ids": [],
                                    "categories": [
                                        {
                                            "id": 14509,
                                            "name": "Consumer Goods - Food",
                                            "slug": "consumer-goods-food"
                                        }
                                    ],
                                    "tags": [],
                                    "images": [
                                        {
                                            "id": 796647,
                                            "src": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/FFM9.jpg",
                                            "alt": "",
                                            "hash": "",
                                            "src_small": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/FFM9-150x150.jpg",
                                            "src_medium": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/FFM9-300x290.jpg",
                                            "src_large": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/FFM9.jpg"
                                        }
                                    ],
                                    "attributes": [
                                        {
                                            "id": 1,
                                            "name": "Variations",
                                            "position": 0,
                                            "visible": true,
                                            "variation": true,
                                            "options": [
                                                "UNIT"
                                            ]
                                        }
                                    ],
                                    "default_attributes": [],
                                    "variations": [
                                        {
                                            "id": 796648,
                                            "sku": "FFM-F-005-U",
                                            "description": "",
                                            "regular_price": "6",
                                            "sale_price": "",
                                            "date_on_sale_from": "",
                                            "date_on_sale_to": "",
                                            "tax_class": "",
                                            "manage_stock": false,
                                            "stock_quantity": 0,
                                            "in_stock": true,
                                            "backorders": "no",
                                            "backorders_allowed": false,
                                            "backordered": false,
                                            "weight": "",
                                            "dimensions": {
                                                "length": "",
                                                "width": "",
                                                "height": ""
                                            },
                                            "shipping_class": "",
                                            "shipping_class_id": 0,
                                            "image": [],
                                            "attributes": [
                                                {
                                                    "id": 1,
                                                    "name": "Variations",
                                                    "option": "UNIT"
                                                }
                                            ],
                                            "custom_fields": {
                                                "to_hide": "false",
                                                "cost": "",
                                                "customer_tiers_on_sale": "",
                                                "variation_barcode": "",
                                                "variation_shelf": "",
                                                "minprice": "",
                                                "conversionrategroup": "",
                                                "conversionrate": ""
                                            },
                                            "points_earned": "",
                                            "points_required": "0",
                                            "maximum_points_discount": "",
                                            "insurance_class": "",
                                            "insurance_class_id": null,
                                            "inventory": [
                                                {
                                                    "branch_id": 794751,
                                                    "batch_id": null,
                                                    "stock_quantity": 5,
                                                    "physical_stock_quantity": 5,
                                                    "updated_at": "2022-12-21 01:28:34"
                                                },
                                                {
                                                    "branch_id": 769343,
                                                    "batch_id": null,
                                                    "stock_quantity": 10,
                                                    "physical_stock_quantity": 10,
                                                    "updated_at": "2022-10-20 09:30:43"
                                                },
                                                {
                                                    "branch_id": 619740,
                                                    "batch_id": null,
                                                    "stock_quantity": 10,
                                                    "physical_stock_quantity": 10,
                                                    "updated_at": "2022-10-20 09:40:51"
                                                }
                                            ]
                                        }
                                    ],
                                    "menu_order": 0,
                                    "composite_layout": "",
                                    "composite_components": [],
                                    "composite_scenarios": [],
                                    "bundle_layout": "",
                                    "bundled_by": [],
                                    "bundled_items": [],
                                    "mixed_sku_volume_pricing_group": {
                                        "product_ids": [],
                                        "product_attributes": []
                                    },
                                    "custom_fields": {
                                        "sales_item": "false",
                                        "internal_sales_item": "false",
                                        "inventory_item": "false",
                                        "to_hide_during_picking_and_packing": "false",
                                        "source": "",
                                        "disallow_children_backorders": "false",
                                        "group": "",
                                        "date_valid_from": "",
                                        "date_valid_to": "",
                                        "internal_description": "",
                                        "discontinued": "false",
                                        "customer_tiers": "",
                                        "barcode": "",
                                        "is_rack_barcode": "false",
                                        "customers": "",
                                        "price_tags": ""
                                    },
                                    "pricing_groups": [],
                                    "composite_product_details": null,
                                    "bundle_product_details": null,
                                    "group_of": 1,
                                    "minimum_quantity": null,
                                    "maximum_quantity": null,
                                    "insurance_class": "",
                                    "insurance_class_id": null,
                                    "allowed_variations": [
                                        796648
                                    ],
                                    "allowed_variation_skus": [
                                        "FFM-F-005-U"
                                    ]
                                },
                                {
                                    "id": 796649,
                                    "name": "Fresh Meadow UHT Strawberry 250ml",
                                    "date_modified": "2022-10-20T09:41:07",
                                    "type": "variable",
                                    "status": "publish",
                                    "catalog_visibility": "visible",
                                    "description": "",
                                    "sku": "FFM-F-006",
                                    "regular_price": "",
                                    "sale_price": "",
                                    "date_on_sale_from": "",
                                    "date_on_sale_to": "",
                                    "tax_class": "",
                                    "manage_stock": false,
                                    "stock_quantity": 0,
                                    "in_stock": true,
                                    "backorders": "no",
                                    "backorders_allowed": false,
                                    "backordered": false,
                                    "weight": "",
                                    "dimensions": {
                                        "length": "",
                                        "width": "",
                                        "height": ""
                                    },
                                    "shipping_class": "",
                                    "shipping_class_id": 0,
                                    "cross_sell_ids": [],
                                    "categories": [
                                        {
                                            "id": 14509,
                                            "name": "Consumer Goods - Food",
                                            "slug": "consumer-goods-food"
                                        }
                                    ],
                                    "tags": [],
                                    "images": [
                                        {
                                            "id": 796650,
                                            "src": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/FFM11.png",
                                            "alt": "",
                                            "hash": "",
                                            "src_small": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/FFM11-150x150.png",
                                            "src_medium": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/FFM11-250x250.png",
                                            "src_large": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/FFM11.png"
                                        }
                                    ],
                                    "attributes": [
                                        {
                                            "id": 1,
                                            "name": "Variations",
                                            "position": 0,
                                            "visible": true,
                                            "variation": true,
                                            "options": [
                                                "UNIT"
                                            ]
                                        }
                                    ],
                                    "default_attributes": [],
                                    "variations": [
                                        {
                                            "id": 796659,
                                            "sku": "FFM-F-006",
                                            "description": "",
                                            "regular_price": "3.24",
                                            "sale_price": "",
                                            "date_on_sale_from": "",
                                            "date_on_sale_to": "",
                                            "tax_class": "",
                                            "manage_stock": false,
                                            "stock_quantity": 0,
                                            "in_stock": true,
                                            "backorders": "no",
                                            "backorders_allowed": false,
                                            "backordered": false,
                                            "weight": "",
                                            "dimensions": {
                                                "length": "",
                                                "width": "",
                                                "height": ""
                                            },
                                            "shipping_class": "",
                                            "shipping_class_id": 0,
                                            "image": [],
                                            "attributes": [
                                                {
                                                    "id": 1,
                                                    "name": "Variations",
                                                    "option": "UNIT"
                                                }
                                            ],
                                            "custom_fields": {
                                                "to_hide": "false",
                                                "cost": "",
                                                "customer_tiers_on_sale": "",
                                                "variation_barcode": "",
                                                "variation_shelf": "",
                                                "minprice": "",
                                                "conversionrategroup": "",
                                                "conversionrate": ""
                                            },
                                            "points_earned": "",
                                            "points_required": "0",
                                            "maximum_points_discount": "",
                                            "insurance_class": "",
                                            "insurance_class_id": null,
                                            "inventory": [
                                                {
                                                    "branch_id": 794751,
                                                    "batch_id": null,
                                                    "stock_quantity": 100,
                                                    "physical_stock_quantity": 100,
                                                    "updated_at": "2022-10-20 05:27:41"
                                                },
                                                {
                                                    "branch_id": 769343,
                                                    "batch_id": null,
                                                    "stock_quantity": 10,
                                                    "physical_stock_quantity": 10,
                                                    "updated_at": "2022-10-20 09:31:15"
                                                },
                                                {
                                                    "branch_id": 619740,
                                                    "batch_id": null,
                                                    "stock_quantity": 10,
                                                    "physical_stock_quantity": 10,
                                                    "updated_at": "2022-10-20 09:41:07"
                                                }
                                            ]
                                        }
                                    ],
                                    "menu_order": 0,
                                    "composite_layout": "",
                                    "composite_components": [],
                                    "composite_scenarios": [],
                                    "bundle_layout": "",
                                    "bundled_by": [],
                                    "bundled_items": [],
                                    "mixed_sku_volume_pricing_group": {
                                        "product_ids": [],
                                        "product_attributes": []
                                    },
                                    "custom_fields": {
                                        "sales_item": "false",
                                        "internal_sales_item": "false",
                                        "inventory_item": "false",
                                        "to_hide_during_picking_and_packing": "false",
                                        "source": "",
                                        "disallow_children_backorders": "false",
                                        "group": "",
                                        "date_valid_from": "",
                                        "date_valid_to": "",
                                        "internal_description": "",
                                        "discontinued": "false",
                                        "customer_tiers": "",
                                        "barcode": "",
                                        "is_rack_barcode": "false",
                                        "customers": "",
                                        "price_tags": ""
                                    },
                                    "pricing_groups": [],
                                    "composite_product_details": null,
                                    "bundle_product_details": null,
                                    "group_of": 1,
                                    "minimum_quantity": null,
                                    "maximum_quantity": null,
                                    "insurance_class": "",
                                    "insurance_class_id": null,
                                    "allowed_variations": [
                                        796659
                                    ],
                                    "allowed_variation_skus": [
                                        ""
                                    ]
                                }
                            ],
                            "number_of_different_products_allowed": 0,
                            "minimum_quantity": 1,
                            "maximum_quantity": "",
                            "is_same_sku_free_item": false,
                            "same_sku_free_quantity": 0,
                            "different_sku_free_quantity": 0,
                            "lowest_price_free": false,
                            "discount_percentage": 8,
                            "discount_on_regular_price": false,
                            "discount_amount": 0,
                            "price": null,
                            "composite_minimum_order": 75,
                            "purchase_with_purchase_minimum_order": null
                        }
                    ]
                },
                "bundle_product_details": null,
                "group_of": 1,
                "minimum_quantity": null,
                "maximum_quantity": null,
                "points_earned": "",
                "points_required": "",
                "maximum_points_discount": "",
                "insurance_class": "",
                "insurance_class_id": null,
                "inventory": [],
                "_links": {
                    "self": [
                        {
                            "href": "https://mangomart-autocount.myboostorder.com/wp-json/wc/v1/products/796674"
                        }
                    ],
                    "collection": [
                        {
                            "href": "https://mangomart-autocount.myboostorder.com/wp-json/wc/v1/products"
                        }
                    ]
                }
            },
            {
                "id": 796671,
                "name": "mixed SKU volume price",
                "date_modified": "2022-10-20T05:16:34",
                "type": "bundle",
                "status": "publish",
                "catalog_visibility": "visible",
                "description": "",
                "sku": "",
                "regular_price": "130",
                "sale_price": "100",
                "date_on_sale_from": "",
                "date_on_sale_to": "",
                "tax_class": "",
                "manage_stock": false,
                "stock_quantity": null,
                "in_stock": true,
                "backorders": "no",
                "backorders_allowed": false,
                "backordered": false,
                "weight": "",
                "dimensions": {
                    "length": "",
                    "width": "",
                    "height": ""
                },
                "shipping_class": "",
                "shipping_class_id": 0,
                "cross_sell_ids": [],
                "categories": [
                    {
                        "id": 14329,
                        "name": "Promotions",
                        "slug": "promotions"
                    }
                ],
                "tags": [],
                "images": [
                    {
                        "src": "https://mangomart-autocount.myboostorder.com/wp-content/plugins/woocommerce/assets/images/placeholder.png",
                        "hash": false,
                        "src_small": "",
                        "src_medium": "",
                        "src_large": ""
                    }
                ],
                "attributes": [],
                "default_attributes": [],
                "variations": [],
                "menu_order": 0,
                "composite_layout": "",
                "composite_components": [],
                "composite_scenarios": [],
                "bundle_layout": "default",
                "bundled_by": [],
                "bundled_items": [
                    {
                        "bundled_item_id": 13,
                        "product_id": 769327,
                        "menu_order": 0,
                        "quantity_min": 70,
                        "quantity_max": 70,
                        "priced_individually": false,
                        "shipped_individually": false,
                        "override_title": false,
                        "title": "",
                        "override_description": false,
                        "description": "",
                        "optional": false,
                        "hide_thumbnail": false,
                        "discount": "",
                        "override_variations": false,
                        "allowed_variations": [],
                        "override_default_variation_attributes": false,
                        "default_variation_attributes": [],
                        "single_product_visibility": "visible",
                        "cart_visibility": "hidden",
                        "order_visibility": "hidden",
                        "single_product_price_visibility": "hidden",
                        "cart_price_visibility": "hidden",
                        "order_price_visibility": "hidden",
                        "stock_status": "on_backorder"
                    },
                    {
                        "bundled_item_id": 14,
                        "product_id": 769333,
                        "menu_order": 1,
                        "quantity_min": 80,
                        "quantity_max": 80,
                        "priced_individually": false,
                        "shipped_individually": false,
                        "override_title": false,
                        "title": "",
                        "override_description": false,
                        "description": "",
                        "optional": false,
                        "hide_thumbnail": false,
                        "discount": "",
                        "override_variations": false,
                        "allowed_variations": [],
                        "override_default_variation_attributes": false,
                        "default_variation_attributes": [],
                        "single_product_visibility": "visible",
                        "cart_visibility": "hidden",
                        "order_visibility": "hidden",
                        "single_product_price_visibility": "hidden",
                        "cart_price_visibility": "hidden",
                        "order_price_visibility": "hidden",
                        "stock_status": "in_stock"
                    },
                    {
                        "bundled_item_id": 15,
                        "product_id": 769330,
                        "menu_order": 2,
                        "quantity_min": 10,
                        "quantity_max": 10,
                        "priced_individually": false,
                        "shipped_individually": false,
                        "override_title": false,
                        "title": "",
                        "override_description": false,
                        "description": "",
                        "optional": false,
                        "hide_thumbnail": false,
                        "discount": "",
                        "override_variations": false,
                        "allowed_variations": [],
                        "override_default_variation_attributes": false,
                        "default_variation_attributes": [],
                        "single_product_visibility": "visible",
                        "cart_visibility": "hidden",
                        "order_visibility": "hidden",
                        "single_product_price_visibility": "hidden",
                        "cart_price_visibility": "hidden",
                        "order_price_visibility": "hidden",
                        "stock_status": "in_stock"
                    }
                ],
                "mixed_sku_volume_pricing_group": {
                    "product_ids": [],
                    "product_attributes": []
                },
                "custom_fields": {
                    "sales_item": "",
                    "internal_sales_item": "",
                    "inventory_item": "",
                    "to_hide_during_picking_and_packing": "",
                    "source": "",
                    "disallow_children_backorders": "",
                    "group": "",
                    "date_valid_from": "",
                    "date_valid_to": "",
                    "internal_description": "",
                    "discontinued": "",
                    "customer_tiers": "",
                    "barcode": "",
                    "is_rack_barcode": "",
                    "customers": "",
                    "price_tags": ""
                },
                "pricing_groups": [],
                "composite_product_details": null,
                "bundle_product_details": {
                    "per_item_pricing": false,
                    "products": [
                        {
                            "product": {
                                "id": 769327,
                                "name": "Apple",
                                "date_modified": "2022-11-08T09:15:29",
                                "type": "variable",
                                "status": "publish",
                                "catalog_visibility": "visible",
                                "description": "",
                                "sku": "V0001",
                                "regular_price": "",
                                "sale_price": "",
                                "date_on_sale_from": "",
                                "date_on_sale_to": "",
                                "tax_class": "",
                                "manage_stock": true,
                                "stock_quantity": -4,
                                "in_stock": true,
                                "backorders": "no",
                                "backorders_allowed": false,
                                "backordered": false,
                                "weight": "",
                                "dimensions": {
                                    "length": "",
                                    "width": "",
                                    "height": ""
                                },
                                "shipping_class": "",
                                "shipping_class_id": 0,
                                "cross_sell_ids": [],
                                "categories": [
                                    {
                                        "id": 14337,
                                        "name": "Fresh &amp; Healthy",
                                        "slug": "fresh-healthy"
                                    }
                                ],
                                "tags": [],
                                "images": [
                                    {
                                        "id": 772441,
                                        "src": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2021/05/V0001.jpg",
                                        "alt": "",
                                        "hash": "659C6D70A521CB30057C1A9D5C5A703F",
                                        "src_small": "https://myboostorder.com/wp-content/uploads/sites/446/2021/05/V0001-180x149.jpg",
                                        "src_medium": "https://myboostorder.com/wp-content/uploads/sites/446/2021/05/V0001-250x208.jpg",
                                        "src_large": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2021/05/V0001.jpg"
                                    }
                                ],
                                "attributes": [
                                    {
                                        "id": 1,
                                        "name": "Variations",
                                        "position": 0,
                                        "visible": true,
                                        "variation": true,
                                        "options": [
                                            "CRT",
                                            "KG"
                                        ]
                                    }
                                ],
                                "default_attributes": [],
                                "variations": [
                                    {
                                        "id": 769329,
                                        "sku": "V0001-KG",
                                        "description": "",
                                        "regular_price": "1.2",
                                        "sale_price": "",
                                        "date_on_sale_from": "",
                                        "date_on_sale_to": "",
                                        "tax_class": "",
                                        "manage_stock": true,
                                        "stock_quantity": 79,
                                        "in_stock": true,
                                        "backorders": "yes",
                                        "backorders_allowed": true,
                                        "backordered": false,
                                        "weight": "",
                                        "dimensions": {
                                            "length": "",
                                            "width": "",
                                            "height": ""
                                        },
                                        "shipping_class": "",
                                        "shipping_class_id": 0,
                                        "image": [],
                                        "attributes": [
                                            {
                                                "id": 1,
                                                "name": "Variations",
                                                "option": "KG"
                                            }
                                        ],
                                        "custom_fields": {
                                            "to_hide": null,
                                            "cost": null,
                                            "customer_tiers_on_sale": "",
                                            "variation_barcode": "0000000000000",
                                            "variation_shelf": "",
                                            "minprice": "0",
                                            "conversionrategroup": "group0",
                                            "conversionrate": "1"
                                        },
                                        "points_earned": "",
                                        "points_required": "0",
                                        "maximum_points_discount": "",
                                        "insurance_class": "",
                                        "insurance_class_id": null,
                                        "inventory": [
                                            {
                                                "branch_id": 619740,
                                                "batch_id": null,
                                                "stock_quantity": -9080,
                                                "physical_stock_quantity": -9121,
                                                "updated_at": "2022-11-08 09:15:27"
                                            },
                                            {
                                                "branch_id": 768049,
                                                "batch_id": null,
                                                "stock_quantity": 169642,
                                                "physical_stock_quantity": 169642,
                                                "updated_at": "2022-06-16 06:08:22"
                                            },
                                            {
                                                "branch_id": 794751,
                                                "batch_id": null,
                                                "stock_quantity": 80,
                                                "physical_stock_quantity": 80,
                                                "updated_at": "2022-10-12 01:57:36"
                                            }
                                        ]
                                    },
                                    {
                                        "id": 769328,
                                        "sku": "V0001-CRT",
                                        "description": "",
                                        "regular_price": "4",
                                        "sale_price": "",
                                        "date_on_sale_from": "",
                                        "date_on_sale_to": "",
                                        "tax_class": "",
                                        "manage_stock": true,
                                        "stock_quantity": 4,
                                        "in_stock": true,
                                        "backorders": "yes",
                                        "backorders_allowed": true,
                                        "backordered": false,
                                        "weight": "",
                                        "dimensions": {
                                            "length": "",
                                            "width": "",
                                            "height": ""
                                        },
                                        "shipping_class": "",
                                        "shipping_class_id": 0,
                                        "image": [],
                                        "attributes": [
                                            {
                                                "id": 1,
                                                "name": "Variations",
                                                "option": "CRT"
                                            }
                                        ],
                                        "custom_fields": {
                                            "to_hide": null,
                                            "cost": null,
                                            "customer_tiers_on_sale": "",
                                            "variation_barcode": "0000000000000",
                                            "variation_shelf": "",
                                            "minprice": "0",
                                            "conversionrategroup": "group0",
                                            "conversionrate": "20"
                                        },
                                        "points_earned": "",
                                        "points_required": "0",
                                        "maximum_points_discount": "",
                                        "insurance_class": "",
                                        "insurance_class_id": null,
                                        "inventory": []
                                    }
                                ],
                                "menu_order": 0,
                                "composite_layout": "",
                                "composite_components": [],
                                "composite_scenarios": [],
                                "bundle_layout": "",
                                "bundled_by": [
                                    "796671"
                                ],
                                "bundled_items": [],
                                "mixed_sku_volume_pricing_group": {
                                    "product_ids": [],
                                    "product_attributes": []
                                },
                                "custom_fields": {
                                    "sales_item": "false",
                                    "internal_sales_item": "false",
                                    "inventory_item": "false",
                                    "to_hide_during_picking_and_packing": "false",
                                    "source": "",
                                    "disallow_children_backorders": "false",
                                    "group": "",
                                    "date_valid_from": "",
                                    "date_valid_to": "",
                                    "internal_description": "",
                                    "discontinued": "",
                                    "customer_tiers": "",
                                    "barcode": "0000000000000",
                                    "is_rack_barcode": "false",
                                    "customers": "",
                                    "price_tags": ""
                                },
                                "pricing_groups": [],
                                "compound_product_parents": [
                                    {
                                        "id": 796671,
                                        "customer_tiers": null,
                                        "price_tags": null
                                    }
                                ],
                                "composite_product_details": null,
                                "bundle_product_details": null,
                                "group_of": 1,
                                "minimum_quantity": null,
                                "maximum_quantity": null,
                                "insurance_class": "",
                                "insurance_class_id": null,
                                "allowed_variations": []
                            },
                            "optional": false,
                            "minimum_quantity": 70,
                            "maximum_quantity": 70,
                            "price": null,
                            "discount_percentage": 0
                        },
                        {
                            "product": {
                                "id": 769333,
                                "name": "Orange",
                                "date_modified": "2022-10-20T05:16:45",
                                "type": "variable",
                                "status": "publish",
                                "catalog_visibility": "visible",
                                "description": "",
                                "sku": "V0002",
                                "regular_price": "",
                                "sale_price": "",
                                "date_on_sale_from": "",
                                "date_on_sale_to": "",
                                "tax_class": "",
                                "manage_stock": true,
                                "stock_quantity": 0,
                                "in_stock": false,
                                "backorders": "no",
                                "backorders_allowed": false,
                                "backordered": false,
                                "weight": "",
                                "dimensions": {
                                    "length": "",
                                    "width": "",
                                    "height": ""
                                },
                                "shipping_class": "",
                                "shipping_class_id": 0,
                                "cross_sell_ids": [],
                                "categories": [
                                    {
                                        "id": 14337,
                                        "name": "Fresh &amp; Healthy",
                                        "slug": "fresh-healthy"
                                    }
                                ],
                                "tags": [],
                                "images": [
                                    {
                                        "id": 772399,
                                        "src": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2021/05/V0002.jpg",
                                        "alt": "",
                                        "hash": "7AF158B4F6A2A32811DD1B2708F273AB",
                                        "src_small": "https://myboostorder.com/wp-content/uploads/sites/446/2021/05/V0002-180x120.jpg",
                                        "src_medium": "https://myboostorder.com/wp-content/uploads/sites/446/2021/05/V0002-300x200.jpg",
                                        "src_large": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2021/05/V0002.jpg"
                                    }
                                ],
                                "attributes": [
                                    {
                                        "id": 1,
                                        "name": "Variations",
                                        "position": 0,
                                        "visible": true,
                                        "variation": true,
                                        "options": [
                                            "CRT",
                                            "KG"
                                        ]
                                    }
                                ],
                                "default_attributes": [
                                    {
                                        "id": 1,
                                        "name": "Variations",
                                        "option": "kg"
                                    }
                                ],
                                "variations": [
                                    {
                                        "id": 769335,
                                        "sku": "V0002-KG",
                                        "description": "",
                                        "regular_price": "1.4",
                                        "sale_price": "",
                                        "date_on_sale_from": "",
                                        "date_on_sale_to": "",
                                        "tax_class": "",
                                        "manage_stock": true,
                                        "stock_quantity": -1,
                                        "in_stock": true,
                                        "backorders": "yes",
                                        "backorders_allowed": true,
                                        "backordered": true,
                                        "weight": "",
                                        "dimensions": {
                                            "length": "",
                                            "width": "",
                                            "height": ""
                                        },
                                        "shipping_class": "",
                                        "shipping_class_id": 0,
                                        "image": [],
                                        "attributes": [
                                            {
                                                "id": 1,
                                                "name": "Variations",
                                                "option": "KG"
                                            }
                                        ],
                                        "custom_fields": {
                                            "to_hide": null,
                                            "cost": null,
                                            "customer_tiers_on_sale": "",
                                            "variation_barcode": "0000000000000",
                                            "variation_shelf": "",
                                            "minprice": "0",
                                            "conversionrategroup": "group0",
                                            "conversionrate": "1"
                                        },
                                        "points_earned": "",
                                        "points_required": "",
                                        "maximum_points_discount": "",
                                        "insurance_class": "",
                                        "insurance_class_id": null,
                                        "inventory": [
                                            {
                                                "branch_id": 768049,
                                                "batch_id": null,
                                                "stock_quantity": 231110,
                                                "physical_stock_quantity": 231110,
                                                "updated_at": "2022-06-16 06:07:41"
                                            },
                                            {
                                                "branch_id": 619740,
                                                "batch_id": null,
                                                "stock_quantity": 735,
                                                "physical_stock_quantity": 755,
                                                "updated_at": "2022-10-20 05:16:44"
                                            }
                                        ]
                                    },
                                    {
                                        "id": 769334,
                                        "sku": "V0002-CRT",
                                        "description": "",
                                        "regular_price": "3.8",
                                        "sale_price": "",
                                        "date_on_sale_from": "",
                                        "date_on_sale_to": "",
                                        "tax_class": "",
                                        "manage_stock": true,
                                        "stock_quantity": 0,
                                        "in_stock": true,
                                        "backorders": "yes",
                                        "backorders_allowed": true,
                                        "backordered": false,
                                        "weight": "",
                                        "dimensions": {
                                            "length": "",
                                            "width": "",
                                            "height": ""
                                        },
                                        "shipping_class": "",
                                        "shipping_class_id": 0,
                                        "image": [],
                                        "attributes": [
                                            {
                                                "id": 1,
                                                "name": "Variations",
                                                "option": "CRT"
                                            }
                                        ],
                                        "custom_fields": {
                                            "to_hide": null,
                                            "cost": null,
                                            "customer_tiers_on_sale": "",
                                            "variation_barcode": "0000000000000",
                                            "variation_shelf": "",
                                            "minprice": "0",
                                            "conversionrategroup": "group0",
                                            "conversionrate": "20"
                                        },
                                        "points_earned": "",
                                        "points_required": "",
                                        "maximum_points_discount": "",
                                        "insurance_class": "",
                                        "insurance_class_id": null,
                                        "inventory": []
                                    }
                                ],
                                "menu_order": 0,
                                "composite_layout": "",
                                "composite_components": [],
                                "composite_scenarios": [],
                                "bundle_layout": "",
                                "bundled_by": [
                                    "796671"
                                ],
                                "bundled_items": [],
                                "mixed_sku_volume_pricing_group": {
                                    "product_ids": [],
                                    "product_attributes": []
                                },
                                "custom_fields": {
                                    "sales_item": "false",
                                    "internal_sales_item": "false",
                                    "inventory_item": "false",
                                    "to_hide_during_picking_and_packing": "",
                                    "source": "",
                                    "disallow_children_backorders": "",
                                    "group": "",
                                    "date_valid_from": "",
                                    "date_valid_to": "",
                                    "internal_description": "",
                                    "discontinued": "",
                                    "customer_tiers": "",
                                    "barcode": "0000000000000",
                                    "is_rack_barcode": "",
                                    "customers": "",
                                    "price_tags": ""
                                },
                                "pricing_groups": [],
                                "compound_product_parents": [
                                    {
                                        "id": 796671,
                                        "customer_tiers": null,
                                        "price_tags": null
                                    }
                                ],
                                "composite_product_details": null,
                                "bundle_product_details": null,
                                "group_of": 1,
                                "minimum_quantity": null,
                                "maximum_quantity": null,
                                "insurance_class": "",
                                "insurance_class_id": null,
                                "allowed_variations": []
                            },
                            "optional": false,
                            "minimum_quantity": 80,
                            "maximum_quantity": 80,
                            "price": null,
                            "discount_percentage": 0
                        },
                        {
                            "product": {
                                "id": 769330,
                                "name": "Grape",
                                "date_modified": "2022-10-20T05:16:50",
                                "type": "variable",
                                "status": "publish",
                                "catalog_visibility": "visible",
                                "description": "",
                                "sku": "V0003",
                                "regular_price": "",
                                "sale_price": "",
                                "date_on_sale_from": "",
                                "date_on_sale_to": "",
                                "tax_class": "",
                                "manage_stock": true,
                                "stock_quantity": 0,
                                "in_stock": false,
                                "backorders": "no",
                                "backorders_allowed": false,
                                "backordered": false,
                                "weight": "",
                                "dimensions": {
                                    "length": "",
                                    "width": "",
                                    "height": ""
                                },
                                "shipping_class": "",
                                "shipping_class_id": 0,
                                "cross_sell_ids": [],
                                "categories": [
                                    {
                                        "id": 14337,
                                        "name": "Fresh &amp; Healthy",
                                        "slug": "fresh-healthy"
                                    }
                                ],
                                "tags": [],
                                "images": [
                                    {
                                        "id": 772442,
                                        "src": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2021/05/V0003.jpg",
                                        "alt": "",
                                        "hash": "25AD629856224A0C4AEDFDF3308B0F4E",
                                        "src_small": "https://myboostorder.com/wp-content/uploads/sites/446/2021/05/V0003-150x150.jpg",
                                        "src_medium": "https://myboostorder.com/wp-content/uploads/sites/446/2021/05/V0003-250x250.jpg",
                                        "src_large": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2021/05/V0003.jpg"
                                    }
                                ],
                                "attributes": [
                                    {
                                        "id": 1,
                                        "name": "Variations",
                                        "position": 0,
                                        "visible": true,
                                        "variation": true,
                                        "options": [
                                            "CRT",
                                            "KG"
                                        ]
                                    }
                                ],
                                "default_attributes": [
                                    {
                                        "id": 1,
                                        "name": "Variations",
                                        "option": "kg"
                                    }
                                ],
                                "variations": [
                                    {
                                        "id": 769332,
                                        "sku": "V0003-KG",
                                        "description": "",
                                        "regular_price": "9.9",
                                        "sale_price": "",
                                        "date_on_sale_from": "",
                                        "date_on_sale_to": "",
                                        "tax_class": "",
                                        "manage_stock": true,
                                        "stock_quantity": 0,
                                        "in_stock": true,
                                        "backorders": "yes",
                                        "backorders_allowed": true,
                                        "backordered": false,
                                        "weight": "",
                                        "dimensions": {
                                            "length": "",
                                            "width": "",
                                            "height": ""
                                        },
                                        "shipping_class": "",
                                        "shipping_class_id": 0,
                                        "image": [],
                                        "attributes": [
                                            {
                                                "id": 1,
                                                "name": "Variations",
                                                "option": "KG"
                                            }
                                        ],
                                        "custom_fields": {
                                            "to_hide": null,
                                            "cost": null,
                                            "customer_tiers_on_sale": "",
                                            "variation_barcode": "0000000000000",
                                            "variation_shelf": "",
                                            "minprice": "0",
                                            "conversionrategroup": "group0",
                                            "conversionrate": "1"
                                        },
                                        "points_earned": "",
                                        "points_required": "",
                                        "maximum_points_discount": "",
                                        "insurance_class": "",
                                        "insurance_class_id": null,
                                        "inventory": [
                                            {
                                                "branch_id": 619740,
                                                "batch_id": null,
                                                "stock_quantity": 2376,
                                                "physical_stock_quantity": 2408,
                                                "updated_at": "2022-10-20 05:16:49"
                                            },
                                            {
                                                "branch_id": 768049,
                                                "batch_id": null,
                                                "stock_quantity": 279510,
                                                "physical_stock_quantity": 279510,
                                                "updated_at": "2022-06-16 06:08:27"
                                            }
                                        ]
                                    },
                                    {
                                        "id": 769331,
                                        "sku": "V0003-CRT",
                                        "description": "",
                                        "regular_price": "9.9",
                                        "sale_price": "",
                                        "date_on_sale_from": "",
                                        "date_on_sale_to": "",
                                        "tax_class": "",
                                        "manage_stock": true,
                                        "stock_quantity": 0,
                                        "in_stock": true,
                                        "backorders": "yes",
                                        "backorders_allowed": true,
                                        "backordered": false,
                                        "weight": "",
                                        "dimensions": {
                                            "length": "",
                                            "width": "",
                                            "height": ""
                                        },
                                        "shipping_class": "",
                                        "shipping_class_id": 0,
                                        "image": [],
                                        "attributes": [
                                            {
                                                "id": 1,
                                                "name": "Variations",
                                                "option": "CRT"
                                            }
                                        ],
                                        "custom_fields": {
                                            "to_hide": null,
                                            "cost": null,
                                            "customer_tiers_on_sale": "",
                                            "variation_barcode": "0000000000000",
                                            "variation_shelf": "",
                                            "minprice": "0",
                                            "conversionrategroup": "group0",
                                            "conversionrate": "20"
                                        },
                                        "points_earned": "",
                                        "points_required": "",
                                        "maximum_points_discount": "",
                                        "insurance_class": "",
                                        "insurance_class_id": null,
                                        "inventory": []
                                    }
                                ],
                                "menu_order": 0,
                                "composite_layout": "",
                                "composite_components": [],
                                "composite_scenarios": [],
                                "bundle_layout": "",
                                "bundled_by": [
                                    "796671"
                                ],
                                "bundled_items": [],
                                "mixed_sku_volume_pricing_group": {
                                    "product_ids": [],
                                    "product_attributes": []
                                },
                                "custom_fields": {
                                    "sales_item": "false",
                                    "internal_sales_item": "false",
                                    "inventory_item": "false",
                                    "to_hide_during_picking_and_packing": "",
                                    "source": "",
                                    "disallow_children_backorders": "",
                                    "group": "",
                                    "date_valid_from": "",
                                    "date_valid_to": "",
                                    "internal_description": "",
                                    "discontinued": "",
                                    "customer_tiers": "",
                                    "barcode": "0000000000000",
                                    "is_rack_barcode": "",
                                    "customers": "",
                                    "price_tags": ""
                                },
                                "pricing_groups": [],
                                "compound_product_parents": [
                                    {
                                        "id": 796671,
                                        "customer_tiers": null,
                                        "price_tags": null
                                    }
                                ],
                                "composite_product_details": null,
                                "bundle_product_details": null,
                                "group_of": 1,
                                "minimum_quantity": null,
                                "maximum_quantity": null,
                                "insurance_class": "",
                                "insurance_class_id": null,
                                "allowed_variations": []
                            },
                            "optional": false,
                            "minimum_quantity": 10,
                            "maximum_quantity": 10,
                            "price": null,
                            "discount_percentage": 0
                        }
                    ]
                },
                "group_of": 1,
                "minimum_quantity": null,
                "maximum_quantity": null,
                "points_earned": "",
                "points_required": "",
                "maximum_points_discount": "",
                "insurance_class": "",
                "insurance_class_id": null,
                "inventory": [
                    {
                        "branch_id": 619740,
                        "batch_id": "",
                        "stock_quantity": -1,
                        "physical_stock_quantity": -1,
                        "updated_at": "2022-10-20 05:16:33"
                    }
                ],
                "_links": {
                    "self": [
                        {
                            "href": "https://mangomart-autocount.myboostorder.com/wp-json/wc/v1/products/796671"
                        }
                    ],
                    "collection": [
                        {
                            "href": "https://mangomart-autocount.myboostorder.com/wp-json/wc/v1/products"
                        }
                    ]
                }
            },
            {
                "id": 796667,
                "name": "PS DRESSING COLESLAW 330ML",
                "date_modified": "2022-11-21T02:09:02",
                "type": "variable",
                "status": "publish",
                "catalog_visibility": "visible",
                "description": "",
                "sku": "FFM-F-011",
                "regular_price": "",
                "sale_price": "",
                "date_on_sale_from": "",
                "date_on_sale_to": "",
                "tax_class": "",
                "manage_stock": false,
                "stock_quantity": 0,
                "in_stock": true,
                "backorders": "no",
                "backorders_allowed": false,
                "backordered": false,
                "weight": "",
                "dimensions": {
                    "length": "",
                    "width": "",
                    "height": ""
                },
                "shipping_class": "",
                "shipping_class_id": 0,
                "cross_sell_ids": [],
                "categories": [
                    {
                        "id": 14513,
                        "name": "Consumer Goods - Goodman Fielders Products",
                        "slug": "consumer-goods-goodman-fielders-products"
                    }
                ],
                "tags": [],
                "images": [
                    {
                        "id": 796668,
                        "src": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/Praise2.jpg",
                        "alt": "",
                        "hash": "",
                        "src_small": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/Praise2-150x150.jpg",
                        "src_medium": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/Praise2-250x250.jpg",
                        "src_large": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/Praise2.jpg"
                    }
                ],
                "attributes": [
                    {
                        "id": 1,
                        "name": "Variations",
                        "position": 0,
                        "visible": true,
                        "variation": true,
                        "options": [
                            "UNIT"
                        ]
                    }
                ],
                "default_attributes": [],
                "variations": [
                    {
                        "id": 796669,
                        "sku": "FFM-F-011-U",
                        "description": "",
                        "regular_price": "8.96",
                        "sale_price": "",
                        "date_on_sale_from": "",
                        "date_on_sale_to": "",
                        "tax_class": "",
                        "manage_stock": false,
                        "stock_quantity": 0,
                        "in_stock": true,
                        "backorders": "no",
                        "backorders_allowed": false,
                        "backordered": false,
                        "weight": "",
                        "dimensions": {
                            "length": "",
                            "width": "",
                            "height": ""
                        },
                        "shipping_class": "",
                        "shipping_class_id": 0,
                        "image": [],
                        "attributes": [
                            {
                                "id": 1,
                                "name": "Variations",
                                "option": "UNIT"
                            }
                        ],
                        "custom_fields": {
                            "to_hide": "false",
                            "cost": "",
                            "customer_tiers_on_sale": "",
                            "variation_barcode": "",
                            "variation_shelf": "",
                            "minprice": "",
                            "conversionrategroup": "",
                            "conversionrate": ""
                        },
                        "points_earned": "",
                        "points_required": "0",
                        "maximum_points_discount": "",
                        "insurance_class": "",
                        "insurance_class_id": null,
                        "inventory": [
                            {
                                "branch_id": 794751,
                                "batch_id": null,
                                "stock_quantity": 100,
                                "physical_stock_quantity": 100,
                                "updated_at": "2022-10-20 05:31:35"
                            },
                            {
                                "branch_id": 769343,
                                "batch_id": null,
                                "stock_quantity": 10,
                                "physical_stock_quantity": 10,
                                "updated_at": "2022-10-20 09:34:21"
                            },
                            {
                                "branch_id": 619740,
                                "batch_id": null,
                                "stock_quantity": 6,
                                "physical_stock_quantity": 6,
                                "updated_at": "2022-11-21 02:08:59"
                            }
                        ]
                    }
                ],
                "menu_order": 0,
                "composite_layout": "",
                "composite_components": [],
                "composite_scenarios": [],
                "bundle_layout": "",
                "bundled_by": [],
                "bundled_items": [],
                "mixed_sku_volume_pricing_group": {
                    "product_ids": [],
                    "product_attributes": []
                },
                "custom_fields": {
                    "sales_item": "false",
                    "internal_sales_item": "false",
                    "inventory_item": "false",
                    "to_hide_during_picking_and_packing": "false",
                    "source": "",
                    "disallow_children_backorders": "false",
                    "group": "",
                    "date_valid_from": "",
                    "date_valid_to": "",
                    "internal_description": "",
                    "discontinued": "false",
                    "customer_tiers": "",
                    "barcode": "",
                    "is_rack_barcode": "false",
                    "customers": "",
                    "price_tags": ""
                },
                "pricing_groups": [],
                "composite_product_details": null,
                "bundle_product_details": null,
                "group_of": 1,
                "minimum_quantity": null,
                "maximum_quantity": null,
                "insurance_class": "",
                "insurance_class_id": null,
                "_links": {
                    "self": [
                        {
                            "href": "https://mangomart-autocount.myboostorder.com/wp-json/wc/v1/products/796667"
                        }
                    ],
                    "collection": [
                        {
                            "href": "https://mangomart-autocount.myboostorder.com/wp-json/wc/v1/products"
                        }
                    ]
                }
            },
            {
                "id": 796664,
                "name": "PS DRESSING FRENCH L SGR 330ML",
                "date_modified": "2022-11-21T02:09:08",
                "type": "variable",
                "status": "publish",
                "catalog_visibility": "visible",
                "description": "",
                "sku": "FFM-F-010",
                "regular_price": "",
                "sale_price": "",
                "date_on_sale_from": "",
                "date_on_sale_to": "",
                "tax_class": "",
                "manage_stock": false,
                "stock_quantity": 0,
                "in_stock": true,
                "backorders": "no",
                "backorders_allowed": false,
                "backordered": false,
                "weight": "",
                "dimensions": {
                    "length": "",
                    "width": "",
                    "height": ""
                },
                "shipping_class": "",
                "shipping_class_id": 0,
                "cross_sell_ids": [],
                "categories": [
                    {
                        "id": 14513,
                        "name": "Consumer Goods - Goodman Fielders Products",
                        "slug": "consumer-goods-goodman-fielders-products"
                    }
                ],
                "tags": [],
                "images": [
                    {
                        "id": 796665,
                        "src": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/Praise1.jpg",
                        "alt": "",
                        "hash": "",
                        "src_small": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/Praise1-150x150.jpg",
                        "src_medium": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/Praise1-250x250.jpg",
                        "src_large": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/Praise1.jpg"
                    }
                ],
                "attributes": [
                    {
                        "id": 1,
                        "name": "Variations",
                        "position": 0,
                        "visible": true,
                        "variation": true,
                        "options": [
                            "UNIT"
                        ]
                    }
                ],
                "default_attributes": [],
                "variations": [
                    {
                        "id": 796666,
                        "sku": "FFM-F-010-U",
                        "description": "",
                        "regular_price": "8.96",
                        "sale_price": "",
                        "date_on_sale_from": "",
                        "date_on_sale_to": "",
                        "tax_class": "",
                        "manage_stock": false,
                        "stock_quantity": 0,
                        "in_stock": true,
                        "backorders": "no",
                        "backorders_allowed": false,
                        "backordered": false,
                        "weight": "",
                        "dimensions": {
                            "length": "",
                            "width": "",
                            "height": ""
                        },
                        "shipping_class": "",
                        "shipping_class_id": 0,
                        "image": [],
                        "attributes": [
                            {
                                "id": 1,
                                "name": "Variations",
                                "option": "UNIT"
                            }
                        ],
                        "custom_fields": {
                            "to_hide": "false",
                            "cost": "",
                            "customer_tiers_on_sale": "",
                            "variation_barcode": "",
                            "variation_shelf": "",
                            "minprice": "",
                            "conversionrategroup": "",
                            "conversionrate": ""
                        },
                        "points_earned": "",
                        "points_required": "0",
                        "maximum_points_discount": "",
                        "insurance_class": "",
                        "insurance_class_id": null,
                        "inventory": [
                            {
                                "branch_id": 794751,
                                "batch_id": null,
                                "stock_quantity": 100,
                                "physical_stock_quantity": 100,
                                "updated_at": "2022-10-20 05:31:04"
                            },
                            {
                                "branch_id": 769343,
                                "batch_id": null,
                                "stock_quantity": 10,
                                "physical_stock_quantity": 10,
                                "updated_at": "2022-10-20 09:34:09"
                            },
                            {
                                "branch_id": 619740,
                                "batch_id": null,
                                "stock_quantity": 6,
                                "physical_stock_quantity": 6,
                                "updated_at": "2022-11-21 02:09:06"
                            }
                        ]
                    }
                ],
                "menu_order": 0,
                "composite_layout": "",
                "composite_components": [],
                "composite_scenarios": [],
                "bundle_layout": "",
                "bundled_by": [],
                "bundled_items": [],
                "mixed_sku_volume_pricing_group": {
                    "product_ids": [],
                    "product_attributes": []
                },
                "custom_fields": {
                    "sales_item": "false",
                    "internal_sales_item": "false",
                    "inventory_item": "false",
                    "to_hide_during_picking_and_packing": "false",
                    "source": "",
                    "disallow_children_backorders": "false",
                    "group": "",
                    "date_valid_from": "",
                    "date_valid_to": "",
                    "internal_description": "",
                    "discontinued": "false",
                    "customer_tiers": "",
                    "barcode": "",
                    "is_rack_barcode": "false",
                    "customers": "",
                    "price_tags": ""
                },
                "pricing_groups": [],
                "composite_product_details": null,
                "bundle_product_details": null,
                "group_of": 1,
                "minimum_quantity": null,
                "maximum_quantity": null,
                "insurance_class": "",
                "insurance_class_id": null,
                "_links": {
                    "self": [
                        {
                            "href": "https://mangomart-autocount.myboostorder.com/wp-json/wc/v1/products/796664"
                        }
                    ],
                    "collection": [
                        {
                            "href": "https://mangomart-autocount.myboostorder.com/wp-json/wc/v1/products"
                        }
                    ]
                }
            },
            {
                "id": 796660,
                "name": "Marina Chic Sausage Cheese 300g",
                "date_modified": "2022-10-20T09:43:32",
                "type": "variable",
                "status": "publish",
                "catalog_visibility": "visible",
                "description": "",
                "sku": "FFM-F-009",
                "regular_price": "",
                "sale_price": "",
                "date_on_sale_from": "",
                "date_on_sale_to": "",
                "tax_class": "",
                "manage_stock": false,
                "stock_quantity": 0,
                "in_stock": true,
                "backorders": "no",
                "backorders_allowed": false,
                "backordered": false,
                "weight": "",
                "dimensions": {
                    "length": "",
                    "width": "",
                    "height": ""
                },
                "shipping_class": "",
                "shipping_class_id": 0,
                "cross_sell_ids": [],
                "categories": [
                    {
                        "id": 14512,
                        "name": "Consumer Goods - Marina Frozen &amp; Kart Food",
                        "slug": "consumer-goods-marina-frozen-kart-food"
                    }
                ],
                "tags": [],
                "images": [
                    {
                        "id": 796663,
                        "src": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/Marina3.png",
                        "alt": "",
                        "hash": "",
                        "src_small": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/Marina3-147x180.png",
                        "src_medium": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/Marina3-204x250.png",
                        "src_large": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/Marina3.png"
                    }
                ],
                "attributes": [
                    {
                        "id": 1,
                        "name": "Variations",
                        "position": 0,
                        "visible": true,
                        "variation": true,
                        "options": [
                            "PACK"
                        ]
                    }
                ],
                "default_attributes": [],
                "variations": [
                    {
                        "id": 796662,
                        "sku": "FFM-F-009-P",
                        "description": "",
                        "regular_price": "6.45",
                        "sale_price": "",
                        "date_on_sale_from": "",
                        "date_on_sale_to": "",
                        "tax_class": "",
                        "manage_stock": false,
                        "stock_quantity": 0,
                        "in_stock": true,
                        "backorders": "no",
                        "backorders_allowed": false,
                        "backordered": false,
                        "weight": "",
                        "dimensions": {
                            "length": "",
                            "width": "",
                            "height": ""
                        },
                        "shipping_class": "",
                        "shipping_class_id": 0,
                        "image": [],
                        "attributes": [
                            {
                                "id": 1,
                                "name": "Variations",
                                "option": "PACK"
                            }
                        ],
                        "custom_fields": {
                            "to_hide": "false",
                            "cost": "",
                            "customer_tiers_on_sale": "",
                            "variation_barcode": "",
                            "variation_shelf": "",
                            "minprice": "",
                            "conversionrategroup": "",
                            "conversionrate": ""
                        },
                        "points_earned": "",
                        "points_required": "0",
                        "maximum_points_discount": "",
                        "insurance_class": "",
                        "insurance_class_id": null,
                        "inventory": [
                            {
                                "branch_id": 794751,
                                "batch_id": null,
                                "stock_quantity": 100,
                                "physical_stock_quantity": 100,
                                "updated_at": "2022-10-20 05:29:24"
                            },
                            {
                                "branch_id": 769343,
                                "batch_id": null,
                                "stock_quantity": 10,
                                "physical_stock_quantity": 10,
                                "updated_at": "2022-10-20 09:33:55"
                            },
                            {
                                "branch_id": 619740,
                                "batch_id": null,
                                "stock_quantity": 10,
                                "physical_stock_quantity": 10,
                                "updated_at": "2022-10-20 09:43:31"
                            }
                        ]
                    }
                ],
                "menu_order": 0,
                "composite_layout": "",
                "composite_components": [],
                "composite_scenarios": [],
                "bundle_layout": "",
                "bundled_by": [],
                "bundled_items": [],
                "mixed_sku_volume_pricing_group": {
                    "product_ids": [],
                    "product_attributes": []
                },
                "custom_fields": {
                    "sales_item": "false",
                    "internal_sales_item": "false",
                    "inventory_item": "false",
                    "to_hide_during_picking_and_packing": "false",
                    "source": "",
                    "disallow_children_backorders": "false",
                    "group": "",
                    "date_valid_from": "",
                    "date_valid_to": "",
                    "internal_description": "",
                    "discontinued": "false",
                    "customer_tiers": "",
                    "barcode": "",
                    "is_rack_barcode": "false",
                    "customers": "",
                    "price_tags": ""
                },
                "pricing_groups": [],
                "composite_product_details": null,
                "bundle_product_details": null,
                "group_of": 1,
                "minimum_quantity": null,
                "maximum_quantity": null,
                "insurance_class": "",
                "insurance_class_id": null,
                "_links": {
                    "self": [
                        {
                            "href": "https://mangomart-autocount.myboostorder.com/wp-json/wc/v1/products/796660"
                        }
                    ],
                    "collection": [
                        {
                            "href": "https://mangomart-autocount.myboostorder.com/wp-json/wc/v1/products"
                        }
                    ]
                }
            },
            {
                "id": 796656,
                "name": "Marina Chic Sausage Chili 300g",
                "date_modified": "2022-10-20T09:43:21",
                "type": "variable",
                "status": "publish",
                "catalog_visibility": "visible",
                "description": "",
                "sku": "FFM-F-008",
                "regular_price": "",
                "sale_price": "",
                "date_on_sale_from": "",
                "date_on_sale_to": "",
                "tax_class": "",
                "manage_stock": false,
                "stock_quantity": 0,
                "in_stock": true,
                "backorders": "no",
                "backorders_allowed": false,
                "backordered": false,
                "weight": "",
                "dimensions": {
                    "length": "",
                    "width": "",
                    "height": ""
                },
                "shipping_class": "",
                "shipping_class_id": 0,
                "cross_sell_ids": [],
                "categories": [
                    {
                        "id": 14512,
                        "name": "Consumer Goods - Marina Frozen &amp; Kart Food",
                        "slug": "consumer-goods-marina-frozen-kart-food"
                    }
                ],
                "tags": [],
                "images": [
                    {
                        "id": 796657,
                        "src": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/Marina2.png",
                        "alt": "",
                        "hash": "",
                        "src_small": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/Marina2-147x180.png",
                        "src_medium": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/Marina2-204x250.png",
                        "src_large": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/Marina2.png"
                    }
                ],
                "attributes": [
                    {
                        "id": 1,
                        "name": "Variations",
                        "position": 0,
                        "visible": true,
                        "variation": true,
                        "options": [
                            "PACK"
                        ]
                    }
                ],
                "default_attributes": [],
                "variations": [
                    {
                        "id": 796658,
                        "sku": "FFM-F-008-P",
                        "description": "",
                        "regular_price": "5.17",
                        "sale_price": "",
                        "date_on_sale_from": "",
                        "date_on_sale_to": "",
                        "tax_class": "",
                        "manage_stock": false,
                        "stock_quantity": 0,
                        "in_stock": true,
                        "backorders": "no",
                        "backorders_allowed": false,
                        "backordered": false,
                        "weight": "",
                        "dimensions": {
                            "length": "",
                            "width": "",
                            "height": ""
                        },
                        "shipping_class": "",
                        "shipping_class_id": 0,
                        "image": [],
                        "attributes": [
                            {
                                "id": 1,
                                "name": "Variations",
                                "option": "PACK"
                            }
                        ],
                        "custom_fields": {
                            "to_hide": "false",
                            "cost": "",
                            "customer_tiers_on_sale": "",
                            "variation_barcode": "",
                            "variation_shelf": "",
                            "minprice": "",
                            "conversionrategroup": "",
                            "conversionrate": ""
                        },
                        "points_earned": "",
                        "points_required": "0",
                        "maximum_points_discount": "",
                        "insurance_class": "",
                        "insurance_class_id": null,
                        "inventory": [
                            {
                                "branch_id": 794751,
                                "batch_id": null,
                                "stock_quantity": 100,
                                "physical_stock_quantity": 100,
                                "updated_at": "2022-10-20 05:29:02"
                            },
                            {
                                "branch_id": 769343,
                                "batch_id": null,
                                "stock_quantity": 10,
                                "physical_stock_quantity": 10,
                                "updated_at": "2022-10-20 09:32:06"
                            },
                            {
                                "branch_id": 619740,
                                "batch_id": null,
                                "stock_quantity": 10,
                                "physical_stock_quantity": 10,
                                "updated_at": "2022-10-20 09:43:20"
                            }
                        ]
                    }
                ],
                "menu_order": 0,
                "composite_layout": "",
                "composite_components": [],
                "composite_scenarios": [],
                "bundle_layout": "",
                "bundled_by": [],
                "bundled_items": [],
                "mixed_sku_volume_pricing_group": {
                    "product_ids": [],
                    "product_attributes": []
                },
                "custom_fields": {
                    "sales_item": "false",
                    "internal_sales_item": "false",
                    "inventory_item": "false",
                    "to_hide_during_picking_and_packing": "false",
                    "source": "",
                    "disallow_children_backorders": "false",
                    "group": "",
                    "date_valid_from": "",
                    "date_valid_to": "",
                    "internal_description": "",
                    "discontinued": "false",
                    "customer_tiers": "",
                    "barcode": "",
                    "is_rack_barcode": "false",
                    "customers": "",
                    "price_tags": ""
                },
                "pricing_groups": [],
                "composite_product_details": null,
                "bundle_product_details": null,
                "group_of": 1,
                "minimum_quantity": null,
                "maximum_quantity": null,
                "insurance_class": "",
                "insurance_class_id": null,
                "_links": {
                    "self": [
                        {
                            "href": "https://mangomart-autocount.myboostorder.com/wp-json/wc/v1/products/796656"
                        }
                    ],
                    "collection": [
                        {
                            "href": "https://mangomart-autocount.myboostorder.com/wp-json/wc/v1/products"
                        }
                    ]
                }
            },
            {
                "id": 796651,
                "name": "Marina Chic Sausage Original 300g",
                "date_modified": "2022-10-20T09:41:25",
                "type": "variable",
                "status": "publish",
                "catalog_visibility": "visible",
                "description": "",
                "sku": "FFM-F-007",
                "regular_price": "",
                "sale_price": "",
                "date_on_sale_from": "",
                "date_on_sale_to": "",
                "tax_class": "",
                "manage_stock": false,
                "stock_quantity": 0,
                "in_stock": true,
                "backorders": "no",
                "backorders_allowed": false,
                "backordered": false,
                "weight": "",
                "dimensions": {
                    "length": "",
                    "width": "",
                    "height": ""
                },
                "shipping_class": "",
                "shipping_class_id": 0,
                "cross_sell_ids": [],
                "categories": [
                    {
                        "id": 14512,
                        "name": "Consumer Goods - Marina Frozen &amp; Kart Food",
                        "slug": "consumer-goods-marina-frozen-kart-food"
                    }
                ],
                "tags": [],
                "images": [
                    {
                        "id": 796652,
                        "src": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/Marina1.png",
                        "alt": "",
                        "hash": "",
                        "src_small": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/Marina1-147x180.png",
                        "src_medium": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/Marina1-204x250.png",
                        "src_large": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/Marina1.png"
                    }
                ],
                "attributes": [
                    {
                        "id": 1,
                        "name": "Variations",
                        "position": 0,
                        "visible": true,
                        "variation": true,
                        "options": [
                            "PACK"
                        ]
                    }
                ],
                "default_attributes": [],
                "variations": [
                    {
                        "id": 796653,
                        "sku": "FFM-F-007-P",
                        "description": "",
                        "regular_price": "5.17",
                        "sale_price": "",
                        "date_on_sale_from": "",
                        "date_on_sale_to": "",
                        "tax_class": "",
                        "manage_stock": false,
                        "stock_quantity": 0,
                        "in_stock": true,
                        "backorders": "no",
                        "backorders_allowed": false,
                        "backordered": false,
                        "weight": "",
                        "dimensions": {
                            "length": "",
                            "width": "",
                            "height": ""
                        },
                        "shipping_class": "",
                        "shipping_class_id": 0,
                        "image": [],
                        "attributes": [
                            {
                                "id": 1,
                                "name": "Variations",
                                "option": "PACK"
                            }
                        ],
                        "custom_fields": {
                            "to_hide": "false",
                            "cost": "",
                            "customer_tiers_on_sale": "",
                            "variation_barcode": "",
                            "variation_shelf": "",
                            "minprice": "",
                            "conversionrategroup": "",
                            "conversionrate": ""
                        },
                        "points_earned": "",
                        "points_required": "0",
                        "maximum_points_discount": "",
                        "insurance_class": "",
                        "insurance_class_id": null,
                        "inventory": [
                            {
                                "branch_id": 794751,
                                "batch_id": null,
                                "stock_quantity": 100,
                                "physical_stock_quantity": 100,
                                "updated_at": "2022-10-20 05:28:40"
                            },
                            {
                                "branch_id": 769343,
                                "batch_id": null,
                                "stock_quantity": 10,
                                "physical_stock_quantity": 10,
                                "updated_at": "2022-10-20 09:31:53"
                            },
                            {
                                "branch_id": 619740,
                                "batch_id": null,
                                "stock_quantity": 10,
                                "physical_stock_quantity": 10,
                                "updated_at": "2022-10-20 09:41:25"
                            }
                        ]
                    }
                ],
                "menu_order": 0,
                "composite_layout": "",
                "composite_components": [],
                "composite_scenarios": [],
                "bundle_layout": "",
                "bundled_by": [],
                "bundled_items": [],
                "mixed_sku_volume_pricing_group": {
                    "product_ids": [],
                    "product_attributes": []
                },
                "custom_fields": {
                    "sales_item": "false",
                    "internal_sales_item": "false",
                    "inventory_item": "false",
                    "to_hide_during_picking_and_packing": "false",
                    "source": "",
                    "disallow_children_backorders": "false",
                    "group": "",
                    "date_valid_from": "",
                    "date_valid_to": "",
                    "internal_description": "",
                    "discontinued": "false",
                    "customer_tiers": "",
                    "barcode": "",
                    "is_rack_barcode": "false",
                    "customers": "",
                    "price_tags": ""
                },
                "pricing_groups": [],
                "composite_product_details": null,
                "bundle_product_details": null,
                "group_of": 1,
                "minimum_quantity": null,
                "maximum_quantity": null,
                "insurance_class": "",
                "insurance_class_id": null,
                "_links": {
                    "self": [
                        {
                            "href": "https://mangomart-autocount.myboostorder.com/wp-json/wc/v1/products/796651"
                        }
                    ],
                    "collection": [
                        {
                            "href": "https://mangomart-autocount.myboostorder.com/wp-json/wc/v1/products"
                        }
                    ]
                }
            },
            {
                "id": 796649,
                "name": "Fresh Meadow UHT Strawberry 250ml",
                "date_modified": "2022-10-20T09:41:07",
                "type": "variable",
                "status": "publish",
                "catalog_visibility": "visible",
                "description": "",
                "sku": "FFM-F-006",
                "regular_price": "",
                "sale_price": "",
                "date_on_sale_from": "",
                "date_on_sale_to": "",
                "tax_class": "",
                "manage_stock": false,
                "stock_quantity": 0,
                "in_stock": true,
                "backorders": "no",
                "backorders_allowed": false,
                "backordered": false,
                "weight": "",
                "dimensions": {
                    "length": "",
                    "width": "",
                    "height": ""
                },
                "shipping_class": "",
                "shipping_class_id": 0,
                "cross_sell_ids": [],
                "categories": [
                    {
                        "id": 14509,
                        "name": "Consumer Goods - Food",
                        "slug": "consumer-goods-food"
                    }
                ],
                "tags": [],
                "images": [
                    {
                        "id": 796650,
                        "src": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/FFM11.png",
                        "alt": "",
                        "hash": "",
                        "src_small": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/FFM11-150x150.png",
                        "src_medium": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/FFM11-250x250.png",
                        "src_large": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/FFM11.png"
                    }
                ],
                "attributes": [
                    {
                        "id": 1,
                        "name": "Variations",
                        "position": 0,
                        "visible": true,
                        "variation": true,
                        "options": [
                            "UNIT"
                        ]
                    }
                ],
                "default_attributes": [],
                "variations": [
                    {
                        "id": 796659,
                        "sku": "FFM-F-006",
                        "description": "",
                        "regular_price": "3.24",
                        "sale_price": "",
                        "date_on_sale_from": "",
                        "date_on_sale_to": "",
                        "tax_class": "",
                        "manage_stock": false,
                        "stock_quantity": 0,
                        "in_stock": true,
                        "backorders": "no",
                        "backorders_allowed": false,
                        "backordered": false,
                        "weight": "",
                        "dimensions": {
                            "length": "",
                            "width": "",
                            "height": ""
                        },
                        "shipping_class": "",
                        "shipping_class_id": 0,
                        "image": [],
                        "attributes": [
                            {
                                "id": 1,
                                "name": "Variations",
                                "option": "UNIT"
                            }
                        ],
                        "custom_fields": {
                            "to_hide": "false",
                            "cost": "",
                            "customer_tiers_on_sale": "",
                            "variation_barcode": "",
                            "variation_shelf": "",
                            "minprice": "",
                            "conversionrategroup": "",
                            "conversionrate": ""
                        },
                        "points_earned": "",
                        "points_required": "0",
                        "maximum_points_discount": "",
                        "insurance_class": "",
                        "insurance_class_id": null,
                        "inventory": [
                            {
                                "branch_id": 794751,
                                "batch_id": null,
                                "stock_quantity": 100,
                                "physical_stock_quantity": 100,
                                "updated_at": "2022-10-20 05:27:41"
                            },
                            {
                                "branch_id": 769343,
                                "batch_id": null,
                                "stock_quantity": 10,
                                "physical_stock_quantity": 10,
                                "updated_at": "2022-10-20 09:31:15"
                            },
                            {
                                "branch_id": 619740,
                                "batch_id": null,
                                "stock_quantity": 10,
                                "physical_stock_quantity": 10,
                                "updated_at": "2022-10-20 09:41:07"
                            }
                        ]
                    }
                ],
                "menu_order": 0,
                "composite_layout": "",
                "composite_components": [],
                "composite_scenarios": [],
                "bundle_layout": "",
                "bundled_by": [],
                "bundled_items": [],
                "mixed_sku_volume_pricing_group": {
                    "product_ids": [],
                    "product_attributes": []
                },
                "custom_fields": {
                    "sales_item": "false",
                    "internal_sales_item": "false",
                    "inventory_item": "false",
                    "to_hide_during_picking_and_packing": "false",
                    "source": "",
                    "disallow_children_backorders": "false",
                    "group": "",
                    "date_valid_from": "",
                    "date_valid_to": "",
                    "internal_description": "",
                    "discontinued": "false",
                    "customer_tiers": "",
                    "barcode": "",
                    "is_rack_barcode": "false",
                    "customers": "",
                    "price_tags": ""
                },
                "pricing_groups": [],
                "composite_product_details": null,
                "bundle_product_details": null,
                "group_of": 1,
                "minimum_quantity": null,
                "maximum_quantity": null,
                "insurance_class": "",
                "insurance_class_id": null,
                "_links": {
                    "self": [
                        {
                            "href": "https://mangomart-autocount.myboostorder.com/wp-json/wc/v1/products/796649"
                        }
                    ],
                    "collection": [
                        {
                            "href": "https://mangomart-autocount.myboostorder.com/wp-json/wc/v1/products"
                        }
                    ]
                }
            },
            {
                "id": 796646,
                "name": "V-Soy Multigrain 4 x 200ml",
                "date_modified": "2022-12-21T01:28:36",
                "type": "variable",
                "status": "publish",
                "catalog_visibility": "visible",
                "description": "",
                "sku": "FFM-F-005",
                "regular_price": "",
                "sale_price": "",
                "date_on_sale_from": "",
                "date_on_sale_to": "",
                "tax_class": "",
                "manage_stock": false,
                "stock_quantity": 0,
                "in_stock": true,
                "backorders": "no",
                "backorders_allowed": false,
                "backordered": false,
                "weight": "",
                "dimensions": {
                    "length": "",
                    "width": "",
                    "height": ""
                },
                "shipping_class": "",
                "shipping_class_id": 0,
                "cross_sell_ids": [],
                "categories": [
                    {
                        "id": 14509,
                        "name": "Consumer Goods - Food",
                        "slug": "consumer-goods-food"
                    }
                ],
                "tags": [],
                "images": [
                    {
                        "id": 796647,
                        "src": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/FFM9.jpg",
                        "alt": "",
                        "hash": "",
                        "src_small": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/FFM9-150x150.jpg",
                        "src_medium": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/FFM9-300x290.jpg",
                        "src_large": "https://mangomart-autocount.myboostorder.com/wp-content/uploads/sites/446/2022/10/FFM9.jpg"
                    }
                ],
                "attributes": [
                    {
                        "id": 1,
                        "name": "Variations",
                        "position": 0,
                        "visible": true,
                        "variation": true,
                        "options": [
                            "UNIT"
                        ]
                    }
                ],
                "default_attributes": [],
                "variations": [
                    {
                        "id": 796648,
                        "sku": "FFM-F-005-U",
                        "description": "",
                        "regular_price": "6",
                        "sale_price": "",
                        "date_on_sale_from": "",
                        "date_on_sale_to": "",
                        "tax_class": "",
                        "manage_stock": false,
                        "stock_quantity": 0,
                        "in_stock": true,
                        "backorders": "no",
                        "backorders_allowed": false,
                        "backordered": false,
                        "weight": "",
                        "dimensions": {
                            "length": "",
                            "width": "",
                            "height": ""
                        },
                        "shipping_class": "",
                        "shipping_class_id": 0,
                        "image": [],
                        "attributes": [
                            {
                                "id": 1,
                                "name": "Variations",
                                "option": "UNIT"
                            }
                        ],
                        "custom_fields": {
                            "to_hide": "false",
                            "cost": "",
                            "customer_tiers_on_sale": "",
                            "variation_barcode": "",
                            "variation_shelf": "",
                            "minprice": "",
                            "conversionrategroup": "",
                            "conversionrate": ""
                        },
                        "points_earned": "",
                        "points_required": "0",
                        "maximum_points_discount": "",
                        "insurance_class": "",
                        "insurance_class_id": null,
                        "inventory": [
                            {
                                "branch_id": 794751,
                                "batch_id": null,
                                "stock_quantity": 5,
                                "physical_stock_quantity": 5,
                                "updated_at": "2022-12-21 01:28:34"
                            },
                            {
                                "branch_id": 769343,
                                "batch_id": null,
                                "stock_quantity": 10,
                                "physical_stock_quantity": 10,
                                "updated_at": "2022-10-20 09:30:43"
                            },
                            {
                                "branch_id": 619740,
                                "batch_id": null,
                                "stock_quantity": 10,
                                "physical_stock_quantity": 10,
                                "updated_at": "2022-10-20 09:40:51"
                            }
                        ]
                    }
                ],
                "menu_order": 0,
                "composite_layout": "",
                "composite_components": [],
                "composite_scenarios": [],
                "bundle_layout": "",
                "bundled_by": [],
                "bundled_items": [],
                "mixed_sku_volume_pricing_group": {
                    "product_ids": [],
                    "product_attributes": []
                },
                "custom_fields": {
                    "sales_item": "false",
                    "internal_sales_item": "false",
                    "inventory_item": "false",
                    "to_hide_during_picking_and_packing": "false",
                    "source": "",
                    "disallow_children_backorders": "false",
                    "group": "",
                    "date_valid_from": "",
                    "date_valid_to": "",
                    "internal_description": "",
                    "discontinued": "false",
                    "customer_tiers": "",
                    "barcode": "",
                    "is_rack_barcode": "false",
                    "customers": "",
                    "price_tags": ""
                },
                "pricing_groups": [],
                "composite_product_details": null,
                "bundle_product_details": null,
                "group_of": 1,
                "minimum_quantity": null,
                "maximum_quantity": null,
                "insurance_class": "",
                "insurance_class_id": null,
                "_links": {
                    "self": [
                        {
                            "href": "https://mangomart-autocount.myboostorder.com/wp-json/wc/v1/products/796646"
                        }
                    ],
                    "collection": [
                        {
                            "href": "https://mangomart-autocount.myboostorder.com/wp-json/wc/v1/products"
                        }
                    ]
                }
            }
        ]
           ';


           return $product;
    }
    
}