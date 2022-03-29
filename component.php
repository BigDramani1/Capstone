<?php
function component($title, $min_bid_price, $image, $item_id, $buy_price){
    $element = "
    
    <div class=\"col-sm-10 col-md-6 col-lg-4\">
    <form action=\"home.php\" method=\"post\">
    <div class=\"auction-item-2\">
        <div class=\"auction-thumb\">
            <a href=\"vehicle1_bid.php\"><img src=\"data:$image/jpg;base64\" alt=\"car\"></a>
            <button type=\"submit\" name =\"add\" class=\"fav\"><i class=\"fa fa-star\"></i></button>
            <input type='hidden' name='item_id' value='$item_id'>
            <a href=\"#0\" class=\"bid\"><i class=\"flaticon-auction\"></i></a>
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
                    <div id=\"bid_counter27\"></div>
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

function cartElement($title, $min_bid_price, $image, $item_id, $buy_price){
    $element = "
    <div class=\"col-sm-10 col-md-6\">
    <form action=\"my_favorites.php?action=remove&id=$item_id\" method=\"post\">
    <div class=\"auction-item-2\">
        <div class=\"auction-thumb\">
            <a href=\"#\"><img src=\"$image\" alt=\"car\"></a>
            <a href=\"#0\" class=\"bid\"><i class=\"flaticon-auction\"></i></a>
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
                    <div id=\"bid_counter26\"></div>
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

?>





     





    	 