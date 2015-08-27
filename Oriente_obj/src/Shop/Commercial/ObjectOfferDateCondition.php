<?php

namespace Shop\Commercial;


trait ObjectOfferDateCondition
{

    protected $date;


    public function __construct(){

        $this->date=new \DateTime("now");

    }


    public function ObjectOfferDateCondition ($object,$offer,$offerType,$startDate,$endDate,$conditionType,$condition){



        if ($this->date>=$startDate && $this->date>$endDate){

            if($conditionType=="user" && $object->getorderUser()==$condition || $conditionType=="product" && $object->getorderProduct()==$condition )

            if ($offerType == "%"){


              return  $object->setFinalPrice($object->getBasePrice() -  ($object->getBasePrice() * $offer)/100);

            }
            elseif($offerType == "€" ){

                return  $object->setFinalPrice( $object->getBasePrice() - $offer);

            }
            else
            {
                return "Invalid Offer";
            }

            }

    }


}