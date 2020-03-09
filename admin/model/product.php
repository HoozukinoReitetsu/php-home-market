<?php 
class product{
    private $ProductID,$ProductName,$Description,$ProductImage,$MoreImages,$Price,$PromotionPrice,$Quantity,$CategoryID,$Detail,$CreatedDate,$ModifiedDate,$Status,$ViewCounts;

    /**
     * Get the value of ProductID
     */ 
    public function getProductID()
    {
        return $this->ProductID;
    }

    /**
     * Set the value of ProductID
     *
     * @return  self
     */ 
    public function setProductID($ProductID)
    {
        $this->ProductID = $ProductID;

        return $this;
    }

    /**
     * Get the value of ProductName
     */ 
    public function getProductName()
    {
        return $this->ProductName;
    }

    /**
     * Set the value of ProductName
     *
     * @return  self
     */ 
    public function setProductName($ProductName)
    {
        $this->ProductName = $ProductName;

        return $this;
    }

    /**
     * Get the value of Description
     */ 
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Set the value of Description
     *
     * @return  self
     */ 
    public function setDescription($Description)
    {
        $this->Description = $Description;

        return $this;
    }

    /**
     * Get the value of ViewCounts
     */ 
    public function getViewCounts()
    {
        return $this->ViewCounts;
    }

    /**
     * Set the value of ViewCounts
     *
     * @return  self
     */ 
    public function setViewCounts($ViewCounts)
    {
        $this->ViewCounts = $ViewCounts;

        return $this;
    }

    /**
     * Get the value of ProductImage
     */ 
    public function getProductImage()
    {
        return $this->ProductImage;
    }

    /**
     * Set the value of ProductImage
     *
     * @return  self
     */ 
    public function setProductImage($ProductImage)
    {
        $this->ProductImage = $ProductImage;

        return $this;
    }

    /**
     * Get the value of MoreImages
     */ 
    public function getMoreImages()
    {
        return $this->MoreImages;
    }

    /**
     * Set the value of MoreImages
     *
     * @return  self
     */ 
    public function setMoreImages($MoreImages)
    {
        $this->MoreImages = $MoreImages;

        return $this;
    }

    /**
     * Get the value of Price
     */ 
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * Set the value of Price
     *
     * @return  self
     */ 
    public function setPrice($Price)
    {
        $this->Price = $Price;

        return $this;
    }

    /**
     * Get the value of PromotionPrice
     */ 
    public function getPromotionPrice()
    {
        return $this->PromotionPrice;
    }

    /**
     * Set the value of PromotionPrice
     *
     * @return  self
     */ 
    public function setPromotionPrice($PromotionPrice)
    {
        $this->PromotionPrice = $PromotionPrice;

        return $this;
    }

    /**
     * Get the value of Quantity
     */ 
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * Set the value of Quantity
     *
     * @return  self
     */ 
    public function setQuantity($Quantity)
    {
        $this->Quantity = $Quantity;

        return $this;
    }

    /**
     * Get the value of CategoryID
     */ 
    public function getCategoryID()
    {
        return $this->CategoryID;
    }

    /**
     * Set the value of CategoryID
     *
     * @return  self
     */ 
    public function setCategoryID($CategoryID)
    {
        $this->CategoryID = $CategoryID;

        return $this;
    }

    /**
     * Get the value of Detail
     */ 
    public function getDetail()
    {
        return $this->Detail;
    }

    /**
     * Set the value of Detail
     *
     * @return  self
     */ 
    public function setDetail($Detail)
    {
        $this->Detail = $Detail;

        return $this;
    }

    /**
     * Get the value of CreatedDate
     */ 
    public function getCreatedDate()
    {
        return $this->CreatedDate;
    }

    /**
     * Set the value of CreatedDate
     *
     * @return  self
     */ 
    public function setCreatedDate($CreatedDate)
    {
        $this->CreatedDate = $CreatedDate;

        return $this;
    }

    /**
     * Get the value of ModifiedDate
     */ 
    public function getModifiedDate()
    {
        return $this->ModifiedDate;
    }

    /**
     * Set the value of ModifiedDate
     *
     * @return  self
     */ 
    public function setModifiedDate($ModifiedDate)
    {
        $this->ModifiedDate = $ModifiedDate;

        return $this;
    }

    /**
     * Get the value of Status
     */ 
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Set the value of Status
     *
     * @return  self
     */ 
    public function setStatus($Status)
    {
        $this->Status = $Status;

        return $this;
    }
    public function selectAll(){
		$sql="SELECT * FROM `dbo.products` WHERE 1";
		$result=mysqli_query(DB::connect(),$sql);
		$data=array();
		while($tmp=mysqli_fetch_assoc($result)){
			$data[]=$tmp;
		}
		return $data;
	}
}

?>