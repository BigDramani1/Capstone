<!--Vehicle components-->
<?php
function vehicles($buy_price, $bid_price, $descriptions, $image, $image1,$image2, $image3, $min_bid_price, $location, $item_id, $title){
    $element = "
    <div class=\"product-details-slider-top-wrapper\">
    <div class=\"product-details-slider owl-theme owl-carousel\" id=\"sync1\">
    <div class=\"slide-top-item\">
            <div class=\"slide-inner\">
                <img src=\"$image\" alt=\"product\" width=\"1100\" height=\"625\">
            </div>
        </div>
        <div class=\slide-top-item\">
            <div class=\"slide-inner\">
                <img src=\"$image1\" alt=\"product\" width=\"1100\" height=\"625\">
            </div>
        </div>
        <div class=\"slide-top-item\">
            <div class=\"slide-inner\">
                <img src=\"$image2\" alt=\"product\" width=\"1100\" height=\"625\">
            </div>
        </div>
        <div class=\"slide-top-item\">
            <div class=\"slide-inner\">
                <img src=\"$image3\" alt=\"product\" width=\"1100\" height=\"625\">
            </div>
        </div>
    </div>
</div>
<div class=\"product-details-slider-wrapper\">
    <div class=\"product-bottom-slider owl-theme owl-carousel\" id=\"sync2\">
    <div class=\"slide-bottom-item\">
        <div class=\"slide-inner\">
            <img src=\"$image\" alt=\"product\"  width=\"124.8\" height=\"124.8\">
        </div>
    </div>
        <div class=\"slide-bottom-item\">
            <div class=\"slide-inner\">
                <img src=\"$image1\" alt=\"product\" width=\"124.8\" height=\"124.8\">
            </div>
        </div>
        <div class=\"slide-bottom-item\">
            <div class=\"slide-inner\">
                <img src=\"$image2\" alt=\"product\" width=\"124.8\" height=\"124.8\">
            </div>
        </div>
        <div class=\"slide-bottom-item\">
            <div class=\"slide-inner\">
                <img src=\"$image3\" alt=\"product\" width=\"124.8\" height=\"124.8\">
            </div>
        </div>
    </div>
    <span class=\"det-prev det-nav\">
        <i class=\"fas fa-angle-left\"></i>
    </span>
    <span class=\"det-next det-nav active\">
        <i class=\"fas fa-angle-right\"></i>
    </span>
</div>
<div class=\"row mt-40-60-80\">
    <div class=\"col-lg-8\">

        <div class=\"product-details-content\">
            <div class=\"product-details-header\">
                <h2 class=\"title\">$title</h2>
                <ul>
                 <li>Item #: $item_id</li>
                 <li><class=\"current\">$descriptions</></li>
             </ul>
            </div>
            <ul class=\"price-table mb-30\">
                <li class=\"header\">
                    <h5 class=\"current\">Current Price</h5>
                    <h3 class=\"price\">GH ₵$min_bid_price</h3>
                </li>
                <li>
                    <span class=\"details\">Buyer's Discount</span>
                    <h5 class=\"info\">10.00%</h5>
                </li>
            </ul>
            <div class=\"product-bid-area\">
            <form class=\"product-bid-form\">
                <div class=\"search-icon\">
                    <img src=\"assets/images/product/search-icon.png\" alt=\"product\">
                </div>
                <input type=\"number\" placeholder=\"Enter your bid amount in GH₵\">
                </form>
            </div>  
            <div class=\"buy-now-area\">
            <a href=\"#0\" class=\"custom-button\">Buy Now: ₵$buy_price</a> 
            <button onclick=\"document.getElementById('id01').style.display='block'\" class=\"custom-button\">Submit a bid</button>  
                <div id=\"id01\" class=\"modal\">
                    <span onclick=\"document.getElementById('id01').style.display='none'\" class=\"close\" title=\"Close Modal\">×</span>
                    <form class=\"modal-content\" action=\"/action_page.php\">
                    <h1 style=\"text-align:center;\">Confriming your Bid</h1>
                        <div class=\"testing\">
                        <p><br>Before finalizing your bid:</br><br></br>
    
    
                         Submitting this bid means that you have accepted the product and will comply if you are the winning bidder.<br><br></br>If you are not sure on bidding this product, please cancel it. Once you place your bid, you cannot cancel it.</br>
                    <br>By submitting your bid, you have agree to all terms and conditions of Davinta</br>

                    <br><a href=\"user_terms.php\"><p style=\"text-align:center;\">Terms and Condition</a></p></br></p>
                        
                        <div class=\"clearfix\">
                            <button type=\"button\" onclick=\"document.getElementById('id01').style.display='none'\" class=\"cancelbtn\">Cancel</button>
                            <button type=\"button\" onclick=\"document.getElementById('id01').style.display='none'\" class=\"acceptbtn\">Accept</button>
                        </div>
                        </div>
                    </form>
                    </div>
        </div>
    </div>
</div>
                <script>
                var modal = document.getElementById('id01');
                                                
                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                        if (event.target == modal) {
                        modal.style.display = \"none\";
                    }
                        }
                </script>
    <div class=\"col-lg-4\">
        <div class=\"product-sidebar-area\">
            <div class=\"product-single-sidebar mb-3\">
                <h6 class=\"title\">This Auction Ends in:</h6>
                <div class=\"countdown\">
                    <div id=\"bid_counter1\"></div>
                </div>  
                <div class=\"side-counter-area\">
                    <div class=\"side-counter-item\">
                        <div class=\"thumb\">
                            <img src=\"assets/images/product/icon1.png\" alt=\"product\">
                        </div>
                        <div class=\"content\">
                            <h3 class=\"count-title\"><span class=\"counter\">5</span></h3>
                            <p>Active Bidders</p>
                        </div>
                    </div>
                    <div class=\"side-counter-item\">
                        <div class=\"thumb\">
                            <img src=\"assets/images/product/icon3.png\" alt=\"product\">
                        </div>
                        <div class=\"content\">
                            <h3 class=\"count-title\"><span class=\"counter\">1</span></h3>
                            <p>Total Bids</p>
                        </div>
                    </div>
                </div>
            </div>
            <a href=\"user_terms.php\" class=\"cart-link\">View Terms and Conditions for the Auction</a>
        </div>
    </div>
</div>
</div>
<div class=\"product-tab-menu-area mb-40-60 mt-70-100\">
<div class=\"container\">
    <ul class=\"product-tab-menu nav nav-tabs\">
        <li>
            <a href=\"#details\" class=\"active\" data-toggle=\"tab\">
                <div class=\"thumb\">
                    <img src=\"assets/images/product/tab1.png\" alt=\"product\">
                </div>
                <div class=\"content\">Description</div>
            </a>
        </li>
        <li>
            <a href=\"#questions\" data-toggle=\"tab\">
                <div class=\"thumb\">
                    <img src=\"assets/images/product/tab4.png\" alt=\"product\">
                </div>
                <div class=\"content\">Questions </div>
            </a> 
        </li>
    </ul>
</div>
</div>
<div class=\"container\">
<div class=\"tab-content\">
    <div class=\"tab-pane fade show active\" id=\"details\">
        <div class=\"tab-details-content\">
            <div class=\"header-area\">
                <h3 class=\"title\">2019 Hyundai Venue ($location)</h3>
                <p>$descriptions<p>
                <div class=\"item\">
                    <table class=\"product-info-table\">
                        <tbody>
                            <tr>
                                <th>Condition</th>
                                <td>New</td>
                            </tr>
                            <tr>
                                <th>Mileage</th>
                                <td>15,000 miles</td>
                            </tr>
                            <tr>
                                <th>Year</th>
                                <td>05-2019</td>
                            </tr>
                            <tr>
                                <th>Engine</th>
                                <td>I-4 1,5 l</td>
                            </tr>
                            <tr>
                                <th>Fuel</th>
                                <td>Regular</td>
                            </tr>
                            <tr>
                                <th>Transmission</th>
                                <td>Automatic</td>
                            </tr>
                            <tr>
                                <th>Color</th>
                                <td>Blue</td>
                            </tr>
                            <tr>
                                <th>Doors</th>
                                <td>5</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class=\"item\">
                    <h5 class=\"subtitle\">Acceptance of condition - buyer inspection/preview</h5>
                    <p>Vehicles and equipment often display significant wear and tear. Assets are sold with no warranty, we highly recommend previewing them before bidding. The preview period is the only opportunity to inspect an asset to verify condition and suitability. There would be no refund or adjustment after purchasing the product </p>
                    <p>BUYER is responsible for any delivery they requested for. </p>
                </div>
                <div class=\"item\">
                    <h5 class=\"subtitle\">Legal Notice</h5>
                    <p>Vehicles may not be driven off the lot except with a dealer plate affixed. By law, vehicles are not permitted to be parked on or to drive on the streets of Ghana without registration and plates registered to the vehicle. If the buyer cannot obtain the required registration and plates prior to pick up, they should have the vehicle towed at their own expense. The buyer should have the vehicle towed at their own expense.</p>
                    <p>Condition: Untested - Sold As-Is</p>
                    
                </div>
                <div class=\"item\">
                    <h5 class=\"subtitle\">Bidding</h5>
                    <p> Divanta only works in Ghana. The Bid Now button will appear on auctions where you are qualified to place a bid.</p>
                </div>
                <div class=\"item\">
                    <h5 class=\"subtitle\">Buyer Responsibility</h5>
                    <p>The BUYER will receive an email notification from owner following the close of an auction after confirming to purchase the product.</p>
                    <p>The Buyer shouldn't make any advance payment to the seller until they meet with the seller. Meet with the seller at a safe public place and innspect the item and ensure it's exactly what you want</p>
                    <p>The BUYER should only purchase if they are satisfied with the product.</p>
                </div>
                <div class=\"item\">
                    <h5 class=\"title\">Notes</h5>
                    <p>Please carefully review the product before purchasing or bidding. You are doing this in your own accord. 
                        We are not repsonsible for any problems that might come with the product(s).</p>
                </div>
            </div>
        </div>
    </div>
   
    <div class=\"tab-pane fade show\" id=\"questions\">
            <h5 class=\"faq-head-title\">Frequently Asked Questions</h5>
            <div class=\"faq-wrapper\">
                <div class=\"faq-item\">
                    <div class=\"faq-title\">
                        <img src=\"assets/css/img/faq.png\" alt=\"css\"><span class=\"title\">How to start bidding?</span><span class=\"right-icon\"></span>
                    </div>
                    <div class=\"faq-content\">
                        <p>You can start bidding by logging into your account or registering for an account and then logging in.</p>
                    </div>
                </div>
                <div class=\"faq-item\">
                    <div class=\"faq-title\">
                        <img src=\"assets/css/img/faq.png\" alt=\"css\"><span class=\"title\">Should I make some form of payment to the Seller before seeing the product? </span><span class=\"right-icon\"></span>
                    </div>
                    <div class=\"faq-content\">
                        <p>Please do not make any payment until you have seen the product in person. You should only purchase the product if it satisfies you. You are not obliged to make a payment right after seeing the product.</p>
                    </div>
                </div>
                <div class=\"faq-item\">
                    <div class=\"faq-title\">
                        <img src=\"assets/css/img/faq.png\" alt=\"css\"><span class=\"title\">Is Delivery free? </span><span class=\"right-icon\"></span>
                    </div>
                    <div class=\"faq-content\">
                        <p>Whether delivery is free or not can only be discussed with you and the seller. </p>
                    </div>
                </div>
                <div class=\"faq-item\">
                    <div class=\"faq-title\">
                        <img src=\"assets/css/img/faq.png\" alt=\"css\"><span class=\"title\">How to register to bid in an auction?</span><span class=\"right-icon\"></span>
                    </div>
                    <div class=\"faq-content\">
                        <p>On the top right corner of any page, click on the account icon. Once you click it, you can follow the procedure to create a successful account.</p>
                    </div>
                </div>
                <div class=\"faq-item open active\">
                    <div class=\"faq-title\">
                        <img src=\"assets/css/img/faq.png\" alt=\"css\"><span class=\"title\">How will I know if my bid was successful?</span><span class=\"right-icon\"></span>
                    </div>
                    <div class=\"faq-content\">
                        <p>All successful bidders can confirm their winning bid by checking their emails. They will be notified of their winning bid after the auction closes.</p>
                    </div>
                </div>
                <div class=\"faq-item\">
                    <div class=\"faq-title\">
                        <img src=\"assets/css/img/faq.png\" alt=\"css\"><span class=\"title\">What happens if I bid on the wrong lot?</span><span class=\"right-icon\"></span>
                    </div>
                    <div class=\"faq-content\">
                        <p>Unfortunately, right now, you cannot do anything about it. Before you bid for any product, there would be a prompt on whether you are sure to bid for the item. The same thing goes for anyone who plans on buying a bidding product. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    ";
    echo $element;

}

///Do this for each section and decide the size that you want to give to it