<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RetsPropertyDatald extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('rets_property_data_ld', function (Blueprint $table) {

            $table->integer('id',11);
            $table->decimal('ACRES',9,2)->nullable();
            $table->string('ACRESTAX',144)->nullable()->default('NULL');
            $table->string('ADDRESSINCLUDED',144)->nullable()->default('NULL');
            $table->string('AGENTCOLIST',20)->nullable()->default('NULL');
            $table->string('AGENTCOSELL',20)->nullable()->default('NULL');
            $table->string('AGENTID',20)->nullable()->default('NULL');
            $table->string('AGENTOFFICEFEED',144)->nullable()->default('NULL');
            $table->string('AGENTSELL',20)->nullable()->default('NULL');
            $table->date('ANTICCLOSEDDATE');
            $table->string('ARIP',144)->nullable()->default('NULL');
            $table->integer('ASSESSAMOUNTBLDG')->nullable();
            $table->string('ASSESSAMOUNTBLDGTAX',144)->nullable()->default('NULL');
            $table->integer('ASSESSAMOUNTLAND')->nullable();
            $table->string('ASSESSAMOUNTLANDTAX',144)->nullable()->default('NULL');
            $table->text('ASSESSFARM')->nullable();
            $table->string('ASSESSTOTALTAX',144)->nullable()->default('NULL');
            $table->string('ASSOCFEEFREQ',50)->nullable()->default('NULL');
            $table->decimal('ASSOCIATIONFEE',6,0)->nullable();
            $table->string('BLOCKID',10)->nullable()->default('NULL');
            $table->string('BLOCKIDTAX',144)->nullable()->default('NULL');
            $table->text('BUILDINGSINCLUDED')->nullable();
            $table->text('BUSRELATION')->nullable();
            $table->string('CITY',26)->nullable()->default('NULL');
            $table->date('CLOSEDATE');
            $table->decimal('CLOSEPRICE',8,0)->nullable();
            $table->string('COLISTAGENTNAME',50)->nullable()->default('NULL');
            $table->string('COMPBUY',13)->nullable()->default('NULL');
            $table->string('COMPSELL',13)->nullable()->default('NULL');
            $table->string('COMPTRANS',13)->nullable()->default('NULL');
            $table->string('CONFIDENTIALINCLUDED',144)->nullable()->default('NULL');
            $table->date('CONTRACTDATE');
            $table->string('COSELLAGENTNAME',50)->nullable()->default('NULL');
            $table->string('COUNTY',50)->nullable()->default('NULL');
            $table->string('COUNTYCODE',20)->nullable()->default('NULL');
            $table->string('COUNTYCODETAX',144)->nullable()->default('NULL');
            $table->string('COUNTYTAX',144)->nullable()->default('NULL');
            $table->integer('DAYSONMARKET')->nullable();
            $table->text('DEVELOPMENTSTATUS')->nullable();
            $table->text('DEVRESTRICT')->nullable();
            $table->string('DIRECTIONS',100)->nullable()->default('NULL');
            $table->text('DISCLOSUREAVAIL')->nullable();
            $table->text('DOCSAVAIL')->nullable();
            $table->integer('DOMACT')->nullable();
            $table->string('EASEDESC',13)->nullable()->default('NULL');
            $table->text('EASEMENT')->nullable();
            $table->string('ELEMENTARYSCHOOL',10)->nullable()->default('NULL');
            $table->date('EXPIRATIONDATE');

            $table->text('FEEINCLUDES')->nullable();
            $table->string('FHAAGERESTR',50)->nullable()->default('NULL');
            $table->date('FIRSTSHOWINGDATE');
            $table->string('FLOORNUM',144)->nullable()->default('NULL');
            $table->string('HIGHSCHOOL',10)->nullable()->default('NULL');
            $table->integer('IMAGECOUNT')->nullable();
            $table->datetime('IMAGEDATE');
            $table->text('IMPROVEMENTS')->nullable();
            $table->string('INTERNETAUTOMATEDVALUATIONDISPLAYYN',144)->nullable()->default('NULL');
            $table->string('INTERNETCONSUMERCOMMENTYN',144)->nullable()->default('NULL');
            $table->datetime('LASTMODIFIED');
            $table->decimal('LATITUDE',12,8)->nullable();
            $table->string('LENDERAPPROVAL',50)->nullable()->default('NULL');
            $table->string('LISTAGENTNAME',50)->nullable()->default('NULL');
            $table->string('LISTAGENTPHONE',16)->nullable()->default('NULL');
            $table->date('LISTDATE');
            $table->string('LISTINGID',38)->nullable()->default('NULL');
            $table->string('LISTINGSTATUS',50)->nullable()->default('NULL');
            $table->text('LISTINGTYPE')->nullable();
            $table->string('LISTOFFICEFAX',16)->nullable()->default('NULL');
            $table->string('LISTOFFICENAME',50)->nullable()->default('NULL');
            $table->string('LISTOFFICEPHONE',16)->nullable()->default('NULL');
            $table->decimal('LISTPRICE',8,0)->nullable();

            $table->string('LISTTYPERESO',50)->nullable()->default('NULL');
            $table->text('LOANTERMS')->nullable();
            $table->text('LOCATION')->nullable();
            $table->decimal('LONGITUDE',12,8)->nullable();
            $table->text('LOTDESC')->nullable();
            $table->string('LOTID',10)->nullable()->default('NULL');
            $table->string('LOTIDTAX',144)->nullable()->default('NULL');
            $table->string('LOTSIZE',25)->nullable()->default('NULL');
            $table->string('LOTSIZETAX',144)->nullable()->default('NULL');
            $table->decimal('LSTNGSYSID',15,0)->nullable();
            $table->datetime('MAJORCHANGETIMESTAMP');
            $table->string('MIDDLESCHOOL',10)->nullable()->default('NULL');
            $table->string('MINSIZE',15)->nullable()->default('NULL');
            $table->text('MISCINFO')->nullable();
            $table->string('MLSTATUS',50)->nullable()->default('NULL');
            $table->decimal('NUMLOTS',4,0)->nullable();
            $table->string('OFFICEID',20)->nullable()->default('NULL');
            $table->string('OFFICESELL',20)->nullable()->default('NULL');
            $table->datetime('ORIGINALENTRYDATETIME');
            $table->decimal('ORIGINALLISTPRICE',8,0)->nullable();
            $table->string('OUTOFCOUNTY',14)->nullable()->default('NULL');
            $table->string('OWNERNAMETAX',144)->nullable()->default('NULL');
            $table->string('OWNERPHONE',12)->nullable()->default('NULL');
            $table->string('OWNERSNAME',39)->nullable()->default('NULL');
            $table->text('PERCTEST')->nullable();
            $table->text('PHOTOINSTR')->nullable();
            $table->string('POSSESSION',15)->nullable()->default('NULL');
            $table->text('POSSESSIONRESO')->nullable();
            $table->string('POSTALCODE',10)->nullable()->default('NULL');
            $table->text('PRESENTUSE')->nullable();
            $table->text('PUBLICREMARKS')->nullable();
            $table->string('RCOMZIP',5)->nullable()->default('NULL');
            $table->string('REMARKS',100)->nullable()->default('NULL');
            $table->text('REMARKSPUBADD')->nullable();
            $table->string('REQUIREOFFICEINFO',144)->nullable()->default('NULL');
            $table->decimal('ROADFRONTAGE',5,0)->nullable();
            $table->text('ROADFRONTDESC')->nullable();
            $table->text('ROADSURFACEDESC')->nullable();
            $table->string('SELLAGENTNAME',50)->nullable()->default('NULL');
            $table->text('SERVICES')->nullable();
            $table->text('SEWERINFO')->nullable();
            $table->text('SHOWINGINSTRUCTIONS')->nullable();
            $table->string('SHOWSPECIAL',68)->nullable()->default('NULL');
            $table->string('SIGN',50)->nullable()->default('NULL');
            $table->text('SITEPARTICULARS')->nullable();
            $table->text('SOILTYPE')->nullable();
            $table->string('STREETNAME',24)->nullable()->default('NULL');
            $table->string('STREETNAMETAX',144)->nullable()->default('NULL');
            $table->decimal('STREETNUMBER',9,0)->nullable();
            $table->string('STREETNUMDISPLAY',9)->nullable()->default('NULL');
            $table->string('STREETNUMTAX',144)->nullable()->default('NULL');
            $table->string('SUBDIVISION',20)->nullable()->default('NULL');
            $table->text('SURVEY')->nullable();
            $table->integer('TAXAMOUNT')->nullable();
            $table->string('TAXAMOUNTTAX',144)->nullable()->default('NULL');
            $table->integer('TAXASSESSEDVALUATION');
            $table->string('TAXID',50)->nullable()->default('NULL');
            $table->string('TAXIDTAX',144)->nullable()->default('NULL');
            $table->decimal('TAXRATE',5,2)->nullable();
            $table->string('TAXRATETAX',144)->nullable()->default('NULL');
            $table->integer('TAXRATEYEAR')->nullable();
            $table->integer('TAXYEAR')->nullable();
            $table->string('TAXYEARTAX',144)->nullable()->default('NULL');
            $table->text('TOPOGRAPHY')->nullable();
            $table->string('TOWNCODE',4)->nullable()->default('NULL');
            $table->string('TOWNCODETAX',144)->nullable()->default('NULL');
            $table->string('TOWNTAX',144)->nullable()->default('NULL');
            $table->text('TREETYPE')->nullable();
            $table->text('UTILINFO')->nullable();
            $table->text('WATERINFO')->nullable();
            $table->date('WITHDRAWNDATE');
            $table->string('ZIPCODETAX',144)->nullable()->default('NULL');
            $table->string('ZONING',13)->nullable()->default('NULL');
            $table->text('ZONINGDESC')->nullable();
            $table->integer('IMAGEDOWNLOADED')->default('0');
            $table->integer('IMAGEDOWNLOADEDTRIED')->nullable();
            $table->string('IMAGEDOWNLOADEDTIME')->nullable()->default('NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
