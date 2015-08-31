<?php

namespace Shop\Commercial;





class Promotions
{

    /*****************************************************
     * CodeGenerator will generate a promotional code
     ***************************************************/
    use \Shop\Commercial\CodeGenerator;

    /*****************************************************
     * ObjectOffer will find the price of the object and apply the promotion to it
     * public function ObjectOffer ($object,$offer,$offerType)
     ***************************************************/

    use \Shop\Commercial\ObjectOffer;

    /*****************************************************
     * ObjectOfferDate will find the price of the object and apply the promotion to it if the date conditions applies
     * public function ObjectOfferDate ($object,$offer,$offerType,$startDate,$endDate)
     ***************************************************/
    use \Shop\Commercial\ObjectOfferDate;

    /*****************************************************
     * ObjectOfferUser will find the price of the object and apply the promotion to it if the right user is doing the order
     * public function ObjectOfferUser ($object,$offer,$offerType,$user)
     ***************************************************/

    use \Shop\Commercial\ObjectOfferUser;

    /*****************************************************
     * ObjectCriteria will find the price of the object and apply the promotion to it if the user has the right criteria
     * public function ObjectOfferUserCriteria ($object,$offer,$offerType,$criteriaType,$criteria)
     ***************************************************/
    use \Shop\Commercial\ObjectOfferUserCriteria;

    /*****************************************************
     * ObjectOfferCondition will find the price of the object and apply the promotion to it if the right conditions of product quantity of price are met
     * public function ObjectOfferUserCriteria ($object,$offer,$offerType,$criteriaType,$criteria)
     ***************************************************/
    use \Shop\Commercial\ObjectOfferCondition;

    /*****************************************************
     * ObjectOfferDateCondition will find the price of the order if the product or the user are correct
     *public function ObjectOfferDateCondition ($object,$offer,$offerType,$startDate,$endDate,$conditionType,$condition)
     ***************************************************/
    use \Shop\Commercial\ObjectOfferDateCondition;


    /*****************************************************
     * Set attributes
     ***************************************************/

    /**
     * @var promotionNom
     */
    protected $promotionNom;
    /**
     * @var promotionDescription
     */
    protected $promotionDescription;
    /**
     * @var promotionDateCrea
     */
    protected $promotionDateCrea;
    /**
     * @var promotionEtat
     */
    protected $promotionEtat;




    /*****************************************************
     * Set construction method
     ***************************************************/

    public function __construct(){

        $this->promotionDateCrea=new \DateTime('Now');
        $this->promotionEtat=0;

    }




    /*****************************************************
     * Getters & Setters
     ***************************************************/


    /**
     * @return promotionNom
     */
    public function getPromotionNom()
    {
        return $this->promotionNom;
    }

    /**
     * @param promotionNom $promotionNom
     */
    public function setPromotionNom($promotionNom)
    {
        $this->promotionNom = $promotionNom;
    }

    /**
     * @return promotionDescription
     */
    public function getPromotionDescription()
    {
        return $this->promotionDescription;
    }

    /**
     * @param promotionDescription $promotionDescription
     */
    public function setPromotionDescription($promotionDescription)
    {
        $this->promotionDescription = $promotionDescription;
    }

    /**
     * @return promotionDateCrea
     */
    public function getPromotionDateCrea()
    {
        return $this->promotionDateCrea;
    }

    /**
     * @param promotionDateCrea $promotionDateCrea
     */
    public function setPromotionDateCrea($promotionDateCrea)
    {
        $this->promotionDateCrea = $promotionDateCrea;
    }

    /**
     * @return promotionEtat
     */
    public function getPromotionEtat()
    {
        return $this->promotionEtat;
    }

    /**
     * @param promotionEtat $promotionEtat
     */
    public function setPromotionEtat($promotionEtat)
    {
        $this->promotionEtat = $promotionEtat;
    }







}