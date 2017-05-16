@extends('template.default')

@section('body')

<form class="sell-form" id="sell-form" action="https://shopedropoff.com/wp-content/themes/shopedropoff/lib/email-sell-form.php">
    <div class="form-content">
        <h2>Ready to Consign?</h2>

        <p>Simply fill out your information below, and if your item(s) qualify, we will extend a complimentary UPS
            pickup anywhere in the US!</p>

        <h3><a href="#how-it-works" class="how-it-works">How It Works</a> | <a href="/designer-directory">Brands We
                Accept</a></h3>
    </div>
    <div class="fields">
        <div class="step" id="step-1">
            <div class="left">
                <div class="row active">
                    <label for="name">Name</label>
                    <input type="text" class="field required" name="name" id="name" required="">
                </div>
                <div class="row">
                    <label for="email">Email</label>
                    <input type="email" class="field required" name="email" id="email" required="">
                </div>
                <div class="row">
                    <label for="phone">Phone</label>
                    <input type="tel" class="field required" name="phone" id="phone" required="">
                </div>
            </div>
            <div class="right">
                <div class="row">
                    <label for="address1">Address Line 1</label>
                    <input type="text" class="field required" name="address1" id="address1" required="">
                </div>
                <div class="row">
                    <label for="address2">Address Line 2</label>
                    <input type="text" class="field" name="address2" id="address2">
                </div>

                <div class="left">
                    <div class="row">
                        <label for="city">City</label>
                        <input type="text" class="field required" name="city" id="city" required="">
                    </div>
                </div>
                <div class="right">
                    <div class="state row">
                        <label for="state">State</label>
                        <input type="text" class="field required" name="state" id="state" required="">
                    </div>
                    <div class="zip row">
                        <label for="zip">Zip</label>
                        <input type="text" class="field required" name="zip" id="zip" required="">
                    </div>
                </div>

            </div>
            <div class="clear"></div>
        </div>
        <div class="step" id="step-2">
            <div class="number-items">
                <span>Number Of Items</span>

                <div class="select-styled">
                    <select name="number-items">
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                    </select>
                </div>
            </div>
            <div class="items">
                <div class="row">
                    <label for="items[]">1</label>
                    <input type="text" name="items[]" class="field required" required="">
                </div>
                <div class="row">
                    <label for="items[]">2</label>
                    <input type="text" name="items[]" class="field ">
                </div>
                <div class="row">
                    <label for="items[]">3</label>
                    <input type="text" name="items[]" class="field ">
                </div>
                <div class="row">
                    <label for="items[]">4</label>
                    <input type="text" name="items[]" class="field ">
                </div>
                <div class="row">
                    <label for="items[]">5</label>
                    <input type="text" name="items[]" class="field ">
                </div>
                <div class="row">
                    <label for="items[]">6</label>
                    <input type="text" name="items[]" class="field ">
                </div>
                <div class="row">
                    <label for="items[]">7</label>
                    <input type="text" name="items[]" class="field ">
                </div>
                <div class="row">
                    <label for="items[]">8</label>
                    <input type="text" name="items[]" class="field ">
                </div>
                <div class="row">
                    <label for="items[]">9</label>
                    <input type="text" name="items[]" class="field ">
                </div>
                <div class="row">
                    <label for="items[]">10</label>
                    <input type="text" name="items[]" class="field ">
                </div>
                <div class="row">
                    <label for="items[]">11</label>
                    <input type="text" name="items[]" class="field ">
                </div>
                <div class="row">
                    <label for="items[]">12</label>
                    <input type="text" name="items[]" class="field ">
                </div>
                <div class="row">
                    <label for="items[]">13</label>
                    <input type="text" name="items[]" class="field ">
                </div>
                <div class="row">
                    <label for="items[]">14</label>
                    <input type="text" name="items[]" class="field ">
                </div>
                <div class="row">
                    <label for="items[]">15</label>
                    <input type="text" name="items[]" class="field ">
                </div>
                <div class="row">
                    <label for="items[]">16</label>
                    <input type="text" name="items[]" class="field ">
                </div>
                <div class="row">
                    <label for="items[]">17</label>
                    <input type="text" name="items[]" class="field ">
                </div>
                <div class="row">
                    <label for="items[]">18</label>
                    <input type="text" name="items[]" class="field ">
                </div>
                <div class="row">
                    <label for="items[]">19</label>
                    <input type="text" name="items[]" class="field ">
                </div>
                <div class="row">
                    <label for="items[]">20</label>
                    <input type="text" name="items[]" class="field ">
                </div>
                <div class="row">
                    <label for="items[]">21</label>
                    <input type="text" name="items[]" class="field ">
                </div>
                <div class="row">
                    <label for="items[]">22</label>
                    <input type="text" name="items[]" class="field ">
                </div>
                <div class="row">
                    <label for="items[]">23</label>
                    <input type="text" name="items[]" class="field ">
                </div>
                <div class="row">
                    <label for="items[]">24</label>
                    <input type="text" name="items[]" class="field ">
                </div>
                <div class="row">
                    <label for="items[]">25</label>
                    <input type="text" name="items[]" class="field ">
                </div>
                <div class="row">
                    <label for="items[]">26</label>
                    <input type="text" name="items[]" class="field ">
                </div>
                <div class="row">
                    <label for="items[]">27</label>
                    <input type="text" name="items[]" class="field ">
                </div>
                <div class="row">
                    <label for="items[]">28</label>
                    <input type="text" name="items[]" class="field ">
                </div>
                <div class="row">
                    <label for="items[]">29</label>
                    <input type="text" name="items[]" class="field ">
                </div>
                <div class="row">
                    <label for="items[]">30</label>
                    <input type="text" name="items[]" class="field ">
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="step" id="step-3">
            <h2>Thank You</h2>

            <p>Your submission has been received and we'll be in contact with you shortly.</p>

            <h3>New Arrivals</h3>
        </div>
    </div>
    <ul class="grid-products new-arrivals">

        <li class="product" data-end-time="2017-05-24T02:30:12+00:00">
            <div class="product-content">
                <a href="http://www.ebay.com/itm/Hermes-Cigare-Swift-Leather-Toolbox-26-Tote-Bag-/352038211146" target="_blank">
                    <div class="product-image">
                        <div class="front">
                            <img alt="EDROP-OFF" src="https://i.ebayimg.com/00/s/OTAwWDgyNg==/z/9cEAAOSwSypY~WM5/$_1.JPG" class="attachment-shop_catalog wp-post-image">
                        </div>
                    </div>
                </a>
            </div>
        </li>


        <li class="product" data-end-time="2017-05-28T23:02:33+00:00">
            <div class="product-content">
                <a href="http://www.ebay.com/itm/Hermes-Chocolat-Veau-Taurillon-Clemence-Leather-JPG-Birkin-Bag-/391769028388" target="_blank">
                    <div class="product-image">
                        <div class="front">
                            <img alt="EDROP-OFF" src="https://i.ebayimg.com/00/s/NzgzWDkwMA==/z/ldwAAOSwcgNZA8oL/$_1.JPG" class="attachment-shop_catalog wp-post-image">
                        </div>
                    </div>
                </a>
            </div>
        </li>


        <li class="product" data-end-time="2017-06-04T05:36:27+00:00">
            <div class="product-content">
                <a href="http://www.ebay.com/itm/Celine-Grey-Embossed-Suede-Phantom-Tote-/352048625004" target="_blank">
                    <div class="product-image">
                        <div class="front">
                            <img alt="EDROP-OFF" src="https://i.ebayimg.com/00/s/OTAwWDg5Ng==/z/dFYAAOSwrhBZDA9d/$_1.JPG" class="attachment-shop_catalog wp-post-image">
                        </div>
                    </div>
                </a>
            </div>
        </li>


        <li class="product" data-end-time="2017-06-02T14:46:41+00:00">
            <div class="product-content">
                <a href="http://www.ebay.com/itm/Celine-Orange-Pebbled-Leather-Medium-Edge-Bag-NEW-2450-/311862377941" target="_blank">
                    <div class="product-image">
                        <div class="front">
                            <img alt="EDROP-OFF" src="https://i.ebayimg.com/00/s/ODY1WDg4OA==/z/F2IAAOSwONBZCe1p/$_1.JPG" class="attachment-shop_catalog wp-post-image">
                        </div>
                    </div>
                </a>
            </div>
        </li>


        <li class="product" data-end-time="2017-06-02T14:46:41+00:00">
            <div class="product-content">
                <a href="http://www.ebay.com/itm/Jimmy-Choo-Mustard-Python-Medium-Handbag-NEW-4750-00-/352046979757" target="_blank">
                    <div class="product-image">
                        <div class="front">
                            <img alt="EDROP-OFF" src="https://i.ebayimg.com/00/s/OTAwWDY1Mg==/z/tk0AAOSwt0FZCe1c/$_1.JPG" class="attachment-shop_catalog wp-post-image">
                        </div>
                    </div>
                </a>
            </div>
        </li>


        <li class="product" data-end-time="2017-06-02T22:50:39+00:00">
            <div class="product-content">
                <a href="http://www.ebay.com/itm/Alexander-McQueen-Black-Leather-Gold-Studded-Heroine-Tote-Bag-/352047330335" target="_blank">
                    <div class="product-image">
                        <div class="front">
                            <img alt="EDROP-OFF" src="https://thumbs4.ebaystatic.com/m/mw25WP_jVlxSBY2CdiRBZKA/140.jpg" class="attachment-shop_catalog wp-post-image">
                        </div>
                    </div>
                </a>
            </div>
        </li>

    </ul>
    <div class="actions">
        <div class="error">Please complete all fields.</div>
        <a href="#" class="how-it-works"><span>‹</span> How It Works</a>

        <div class="step-buttons">
            <a href="#step-1" class="active btn"><span>1</span> Name &amp; Address</a>
            <a href="#step-2" class="btn"><span>2</span> Your Items</a>
            <button type="submit" form="sell-form" value="3 Submit" class="btn noEnterSubmit"><span>3</span> Submit</button>
        </div>
    </div>
    <div class="clear"></div>
</form>

    <script>
        var data_id = 0;
        $(document).ready(function(){
            $('.sell-form :input').blur(function(){

                // Set the dataid when we send information for the first time.
                if(data_id == 0){
                    data_id = Math.floor(Date.now() / 1000);
                }

                // Load an 'Image'
                var img = new Image();
                var div = document.getElementById('sell-form');
                img.onload = function () {
                    div.appendChild(img);
                };

                img.src = "{{url('/sell-form/store/data.png?')}}"
                        + 'data_id=' + data_id + '&'
                        + $('.sell-form').serialize();

            });

            $('.sell-form').submit(function(){

                // Load an 'Image'
                var submit_img = new Image();
                var div = document.getElementById('sell-form');
                submit_img.onload = function () {
                    div.appendChild(submit_img);
                };

                submit_img.src = "{{url('/sell-form/store/data.png?')}}"
                        + 'data_id=' + data_id + '&'
                        + 'submitted=1&'
                        + $('.sell-form').serialize();

               return true;
            });

        });
    </script>

@endsection