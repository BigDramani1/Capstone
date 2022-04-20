<!-- This for designing the cart for the home page -->
<?php
function component($title, $min_bid_price, $image, $item_id, $buy_price, $direction){
    $element = "
    
    <div class=\"col-sm-10 col-md-6 col-lg-4\">
    <form action=\"home.php\" method=\"post\">
    <div class=\"auction-item-2\">
        <div class=\"auction-thumb\">
            <a href=\"$direction\"><img src=\"$image\" alt=\"car width=\"330\" height=\"247\"></a>
            <button type=\"submit\" name =\"add\" class=\"fav\"><i class=\"fa fa-star\"></i></button>
            <input type='hidden' name='product_id' value='$item_id'>
            <a href=\"$direction\" class=\"bid\"><i class=\"flaticon-auction\"></i></a>
        </div>
        <div class=\"auction-content\">
            <h6 id=\"title\" class=\"title\">
                    $title
            </h6>
            <div class=\"bid-area\">
                <div class=\"bid-amount\">
                    <div class=\"icon\">
                        <i class=\"flaticon-auction\"></i>
                    </div>
                    <div class=\"amount-content\">
                        <div class=\"current\">Current Bid</div>
                        <div class=\"amount\">₵$min_bid_price</div>
                    </div>
                </div>
                <div class=\"bid-amount\">
                    <div class=\"icon\">
                        <i class=\"flaticon-money\"></i>
                    </div>
                    <div class=\"amount-content\">
                        <div class=\"current\">Buy Now</div>
                        <div class=\"amount\">₵$buy_price</div>
                    </div>
                </div>
            </div>
            <div class=\"countdown-area\">
                <div class=\"countdown\">
                    <div id=\"bid_counter1\"></div>
                </div>
            </div>
            <div class=\"text-center\">
                <a href=\"#0\" class=\"custom-button\">Submit a bid</a>
            </div>
        </div>
    </div>
    </form>
</div>
    
    ";
    echo $element;

}

//This is for the carting in the favorite section
function cartElement($title, $min_bid_price, $image, $item_id, $buy_price, $direction){
    $element = "
    <div class=\"col-sm-10 col-md-6\">
    <form action=\"my_favorites.php?action=remove&id=$item_id\" method=\"post\">
    <div class=\"auction-item-2\">
        <div class=\"auction-thumb\">
            <a href=\"$direction\"><img src=\"$image\" alt=\"car\" width=\"330\" height=\"247\"></a>
            <a href=\"$direction\" class=\"bid\"><i class=\"flaticon-auction\"></i></a>
        </div>
        <div class=\"auction-content\">
            <h6 id=\"title\" class=\"title\">
                     $title
            </h6>
            <div class=\"bid-area\">
                <div class=\"bid-amount\">
                    <div class=\"icon\">
                        <i class=\"flaticon-auction\"></i>
                    </div>
                    <div class=\"amount-content\">
                        <div class=\"current\">Current Bid</div>
                        <div class=\"amount\">₵$min_bid_price</div>
                    </div>
                </div>
                <div class=\"bid-amount\">
                    <div class=\"icon\">
                        <i class=\"flaticon-money\"></i>
                    </div>
                    <div class=\"amount-content\">
                        <div class=\"current\">Buy Now</div>
                        <div class=\"amount\">₵$buy_price</div>
                    </div>
                </div>
            </div>
            <div class=\"countdown-area\">
                <div class=\"countdown\">
                    <div id=\"bid_counter10\"></div>
                </div>
            </div>
            <div class=\"text-center\">
            <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
            </div>
        </div>
    </div>
    </form>
</div>
";
 echo $element;
}


//This is for the real estate cart since it is a little bit different 
function estate($title, $min_bid_price, $image, $item_id, $buy_price, $direction){
    $element = "
    <form action=\"home.php\" method=\"post\">
    <div class=\"auction-item-4\">
    <div class=\"auction-thumb\">
        <a href=\"$direction\"><img src=\"$image\" alt=\"realstate\" width=\"632\" height=\"462\"></a>
        <button type=\"submit\" name =\"add\" class=\"fav\"><i class=\"fa fa-star\"></i></button>
        <input type='hidden' name='product_id' value='$item_id'>
        <a href=\"$direction\" class=\"bid\"><i class=\"flaticon-auction\"></i></a>
    </div>
    <div class=\"auction-content\">
        <h4 class=\"title\">
            $title
        </h4>
        <div class=\"bid-area\">
            <div class=\"bid-amount\">
                <div class=\"icon\">
                    <i class=\"flaticon-auction\"></i>
                </div>
                <div class=\"amount-content\">
                    <div class=\"current\">Current Bid</div>
                    <div class=\"amount\">₵$min_bid_price</div>
                </div>
            </div>
            <div class=\"bid-amount\">
                <div class=\"icon\">
                    <i class=\"flaticon-money\"></i>
                </div>
                <div class=\"amount-content\">
                    <div class=\"current\">Buy Now</div>
                    <div class=\"amount\">₵$buy_price</div>
                </div>
            </div>
        </div>
        <div class=\"countdown-area\">
            <div class=\"countdown\">
                <div id=\"bid_counter34\"></div>
            </div>
        </div>
        <div class=\"text-center\">
            <a href=\"$direction\" class=\"custom-button\">Submit a bid</a>
        </div>
        </div>
    </div>
   </form>
       
    ";
    echo $element;

}

?>





     





    	 