<?php
// This for all the cart except real estate
function index($title, $min_bid_price, $image, $item_id, $buy_price){
    $element = "
    <div class=\"col-sm-10 col-md-6 col-lg-4\">
    <form action=\"home.php\" method=\"post\">
    <div class=\"auction-item-2\">
        <div class=\"auction-thumb\">
            <a href=\"sign_in.php\"><img src=\"$image\" alt=\"car width=\"330\" height=\"247\"></a>
            <input type='hidden' name='product_id' value='$item_id'>
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
//This is for the real estate cart since it is a little bit different 
function estate($title, $min_bid_price, $image, $item_id, $buy_price){
    $element = "
    <form action=\"home.php\" method=\"post\">
    <div class=\"auction-item-4\">
    <div class=\"auction-thumb\">
        <a href=\"sign_in.php\"><img src=\"$image\" alt=\"realstate\" width=\"632\" height=\"462\"></a>
        <input type='hidden' name='product_id' value='$item_id'>
        <a href=\"sign_in.php\" class=\"bid\"><i class=\"flaticon-auction\"></i></a>
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
            <a href=\"sign_in.php\" class=\"custom-button\">Submit a bid</a>
        </div>
        </div>
    </div>
    </form>
    ";
    echo $element;

}

?>






     





    	 