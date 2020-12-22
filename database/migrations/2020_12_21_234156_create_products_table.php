<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            // sku	string	Unique identifier.
            $table->string('sku')->unique();
            //Product name
            $table->string('name');
            //Product slug
            $table->string('slug');
            //Product URL.READ-ONLY
            $table->string('permalink');
            $table->text('description');
            // string	Product short description.
            $table->string('short_description');
            $table->timestamps();


//date_created	date-time	The date the product was created, in the site's timezone.READ-ONLY
//date_created_gmt	date-time	The date the product was created, as GMT.READ-ONLY
//date_modified	date-time	The date the product was last modified, in the site's timezone.READ-ONLY
//date_modified_gmt	date-time	The date the product was last modified, as GMT.READ-ONLY

//type	string	Product type. Options: simple, grouped, external and variable. Default is simple.
            $table->string('type');
//
  //          status	string	Product status (post status). Options: draft, pending, private and publish. Default is publish.
            $table->string('status');
            //featured	boolean	Featured product. Default is false.
            $table->boolean('featured');
            // catalog_visibility	string	Catalog visibility. Options: visible, catalog, search and hidden. Default is visible.
            $table->string('catalog_visibility');
           // description	string	Product description.

            //            price	string	Current product price.READ-ONLY
            $table->string('price');
            //regular_price	string	Product regular price.
            $table->string('regular_price');
            //            sale_price	string	Product sale price.
            $table->string('sale_price');

            //date_on_sale_from	date-time	Start date of sale price, in the site's timezone.
            $table->timestamp('date_on_sale_from')->nullable();
            //date_on_sale_from_gmt	date-time	Start date of sale price, as GMT.
            $table->timestamp('date_on_sale_from_gmt')->nullable();
            //date_on_sale_to	date-time	End date of sale price, in the site's timezone.
            $table->timestamp('date_on_sale_to')->nullable();
            //date_on_sale_to_gmt	date-time	End date of sale price, as GMT.
            $table->timestamp('date_on_sale_to_gmt')->nullable();

            //price_html	string	Price formatted in HTML.READ-ONLY
            $table->string('price_html');
            //on_sale	boolean	Shows if the product is on sale.READ-ONLY
            $table->boolean('on_sale');
            //purchasable	boolean	Shows if the product can be bought.READ-ONLY
            $table->boolean('purchasable');
            //total_sales	integer	Amount of sales.READ-ONLY
            $table->integer('total_sales');
            //virtual	boolean	If the product is virtual. Default is false.
            $table->boolean('virtual');
            //downloadable	boolean	If the product is downloadable. Default is false.
            $table->boolean('downloadable');
            //downloads	array	List of downloadable files. See Product - Downloads properties
            //$table->string('downloads');
            //download_limit	integer	Number of times downloadable files can be downloaded after purchase. Default is -1.
            $table->integer('download_limit');
            //download_expiry	integer	Number of days until access to downloadable files expires. Default is -1.
            $table->integer('download_expiry');
            //external_url	string	Product external URL. Only for external products.
            $table->string('download_expiry');
            //button_text	string	Product external button text. Only for external products.
            $table->string('button_text');
            //tax_status	string	Tax status. Options: taxable, shipping and none. Default is taxable.
            $table->string('tax_status');
            //tax_class	string	Tax class.
            $table->string('tax_class');
            //manage_stock	boolean	Stock management at product level. Default is false.
            $table->boolean('manage_stock');
            //stock_quantity	integer	Stock quantity.
            $table->integer('stock_quantity');
            // stock_status	string	Controls the stock status of the product. Options: instock, outofstock, onbackorder. Default is instock.
            $table->string('stock_status');
            //backorders	string	If managing stock, this controls if backorders are allowed. Options: no, notify and yes. Default is no.
            $table->string('backorders');
            //backorders_allowed	boolean	Shows if backorders are allowed.READ-ONLY
            $table->boolean('backorders_allowed');
            //backordered	boolean	Shows if the product is on backordered.READ-ONLY
            $table->boolean('backordered');
            //sold_individually	boolean	Allow one item to be bought in a single order. Default is false.
            $table->boolean('sold_individually');
            //weight	string	Product weight.
            $table->string('weight');
//            dimensions	object	Product dimensions. See Product - Dimensions properties
            //$table->string('dimensions');

            //shipping_required	boolean	Shows if the product need to be shipped.READ-ONLY
            //$table->boolean('shipping_required');
            //shipping_taxable	boolean	Shows whether or not the product shipping is taxable.READ-ONLY
            //$table->boolean('shipping_taxable');
            ////shipping_class	string	Shipping class slug.
            //$table->string('shipping_class');
            //shipping_class_id	integer	Shipping class ID.READ-ONLY

            //reviews_allowed	boolean	Allow reviews. Default is true.
            $table->boolean('reviews_allowed');
            //average_rating	string	Reviews average rating.READ-ONLY
            $table->string('average_rating');
            //rating_count	integer	Amount of reviews that the product have.READ-ONLY
            $table->integer('rating_count');
            //related_ids	array	List of related products IDs.READ-ONLY
            $table->string('related_ids');
            //upsell_ids	array	List of up-sell products IDs.
            $table->string('upsell_ids');
            //cross_sell_ids	array	List of cross-sell products IDs.
            $table->string('cross_sell_ids');

            //parent_id	integer	Product parent ID.
            $table->integer('parent_id');
            // purchase_note	string	Optional note to send the customer after purchase.
            $table->string('purchase_note');
            //categories	array	List of categories. See Product - Categories properties
            $table->string('categories');

//tags	array	List of tags. See Product - Tags properties
//images	array	List of images. See Product - Images properties
//attributes	array	List of attributes. See Product - Attributes properties
//default_attributes	array	Defaults variation attributes. See Product - Default attributes properties
//variations	array	List of variations IDs.READ-ONLY
//grouped_products	array	List of grouped products ID.
//            menu_order	integer	Menu order, used to custom sort products.
//            meta_data	array	Meta data. See Product - Meta data properties
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
