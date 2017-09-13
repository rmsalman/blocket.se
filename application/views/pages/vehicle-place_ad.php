<h1 class="text-center">Place an ad on Blocket</h1>
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-sm-6">
<pre>
    <?php

    print_r($_POST);

    ?>
</pre>
            <form action="<?= base_url()?>vehicles/place_ad" method="post">

                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="personal_business" id="company_ad" value="0" checked>
                        Private person
                    </label>
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="personal_business" id="company_ad2" value="1" >
                        Business
                    </label>
                </div>

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter your Name">
                </div>

                <div class="form-group">
                    <label for="E-mail">E-mail</label>
                    <input type="email" class="form-control" name="email" id="E-mail" placeholder="Enter your Name">
                </div>

                <div class="form-group">
                    <label for="Phone">Phone</label>
                    <div class="row">
                        <div class="col-sm-8">
                            <input type="number" class="form-control" name="contact" id="Phone" placeholder="Enter your Name">
                        </div>
                        <div class="col-sm-4">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="hide_contact" id="hide_num" value="0" >
                                Hide in the ad
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="buy_num" id="hide_num" value="0" checked>
                        Temporary phone number +10 kr 10
                    </label>
                    <p>
                        Do not want to show your real number in the ad? Buy a temporary order only10kr.
                        <span class="btn-group">
                <a href="javascript:;" class="no_ico dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Read more
                </a>
                <span class="dropdown-menu">
                    some content here
                </span>
            </span>
                    </p>
                </div>


                <div class="form-group">
                    <label for="E-mail">Place</label>
                    <select name="place_id" id="region" class="form-control" >
                        <option value="0">"Select County"</option>
                        <option value="1">Norrbotten</option>
                        <option value="2">Vasterbotten</option>
                        <option value="3">Jamtland</option>
                        <option value="4">Västernorrland</option>
                        <option value="5">Gavleborg</option>
                        <option value="6" selected="selected">Dalarna</option>
                        <option value="7">Varmland</option>
                        <option value="8">Orebro</option>
                        <option value="9">Västmanland</option>
                        <option value="10">Uppsala</option>
                        <option value="11">Stockholm</option>
                        <option value="12">Sodermanland</option>
                        <option value="13">Skaraborg</option>
                        <option value="14">Ostergotland</option>
                        <option value="15">Gothenburg</option>
                        <option value="16">Älvsborgsbron</option>
                        <option value="17">Jonkoping</option>
                        <option value="18">Kalmar</option>
                        <option value="19">Gotland</option>
                        <option value="20">Halland</option>
                        <option value="21">Kronoberg</option>
                        <option value="22">Blekinge</option>
                        <option value="23">Skåne</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="municipality_id">municipality</label>
                    <select id="municipality_id" name="municipality_id" class="form-control">
                        <option value="">«Select municipality»</option>
                        <option value="55" selected="selected">Avesta </option>
                        <option value="56">Borlange  </option>
                        <option value="57">Falun </option>
                        <option value="58">Gagnef </option>
                        <option value="59">Hedemora  </option>
                        <option value="60">Leksand  </option>
                        <option value="61">Ludvika  </option>
                        <option value="62">Malungsfors-Salen</option>
                        <option value="63">Mora  </option>
                        <option value="64">Orsa  </option>
                        <option value="65">Rattvik  </option>
                        <option value="66">Smederevo  </option>
                        <option value="67">Sater  </option>
                        <option value="68">Vansbro </option>
                        <option value="69"><fontfo </option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="ZIP">ZIP code</label>
                    <input type="number" class="form-control" id="ZIP" name="zip" placeholder="ZIP Code">
                </div>

                <div class="form-group">
                    <label for="Category">Category</label>
                    <select id="Category" name="category" class="form-control">
                        <option value="1">cat one</option>
                        <option value="2">cat two</option>
                        <option value="3">cat one</option>
                    </select>
                </div>


                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="ad_for" id="company_ad" value="1" checked>
                        For sale
                    </label>
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="ad_for" id="company_ad2" value="2" >
                        For Rent
                    </label>
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="ad_for" id="company_ad3" value="3" >
                        bytes
                    </label>
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="ad_for" id="company_ad4" value="4" >
                        Wish to rent
                    </label>
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="ad_for" id="company_ad5" value="5" >
                        purchase
                    </label>
                </div>

                <div class="form-group">
                    <label for="Heading"><strong>Heading</strong> (Note "Sold" or "Purchased" should not be written in the title)</label>
                    <input type="text" name="post_title" class="form-control" id="Heading">
                </div>

                <div class="form-group">
                    <label for="post_body">Text</label>
                    <textarea name="post_body" id="post_body" class="form-control" cols="30" rows="10"></textarea>
                </div>

                <div class="form-group">
                    <label for="files">Photos & Videos</label>
                    <br>
                    <input type="file" class="" name="img1" id="files">
                </div>

                <div class="form-group">
                    <label for="Password">Choose a Password</label>
                    <input type="text" name="primary_pass" class="form-control" id="Password">
                </div>

                <div class="form-group">
                    <label for="Password">Choose Payment</label>
                    <br>
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="payment_type" id="company_ad3" value="0" >
                        Card - Visa or Mastercard
                    </label>
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="payment_type" id="company_ad4" value="1" >
                        telephone-call and pay
                    </label>
                </div>

<!--                <div class="form-group">-->
<!--                    <label for="Password">Accept Terms and Conditions</label>-->
<!--                    <div>-->
<!--                        <label class="form-check-label">-->
<!--                            <input class="form-check-input" type="checkbox" name="company_ad" id="company_ad2" value="1" >-->
<!--                            Show in my ad that I do not want to be contacted by phone sales-->
<!--                            <span class="btn-group">-->
<!--                <a href="javascript:;" class="no_ico dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                    support-->
<!--                </a>-->
<!--                <span class="dropdown-menu">-->
<!--                    some content here-->
<!--                </span>-->
<!--            </span>-->
<!--                        </label>-->
<!--                    </div>-->
<!--                    <div>-->
<!--                        <label for="blocket_rules"> <input id="blocket_rules" type="checkbox" name="blocket_rules" value="1">-->
<!--                            <span class="nohistory"><font><font>I agree bloc </font></font><a data-trackable="new_ad_terms_link_clicked" href="javascript:void(0)" onclick="window.open( 'https://www.blocket.se/regler.htm?ca=15&amp;l=0', 'Användarvillkor', 'toolbar=yes, location=yes, status=yes, scrollbars=yes, resizable=yes, width=1050, height=600' )" class="link-secondary" type="button" aria-label="Läs användarvillkor"><u><font><font>Terms of Service</font></font></u></a><font><font> and </font></font>-->
<!--                            <a data-trackable="new_ad_pul_link_clicked" href="javascript:void(0)" onclick="window.open( 'https://www.blocket.se/personuppgiftspolicy.htm', 'Personuppgiftshantering', 'toolbar=yes, location=yes, status=yes, scrollbars=yes, resizable=yes, width=1050, height=600' )" class="link-secondary" type="button" aria-label="Läs personuppgiftshantering"><u><font><font>Privacy Statement</font></font></u>-->
<!--                            </a>-->
<!--                        </span>-->
<!--                        </label>-->
<!--                        </span>-->
<!---->
<!--                    </div>-->
<!--                </div>-->



                <div class="form-group">
                    <button type="button" class="btn btn-secondary">Preview the Ad</button> <button type="submit" class="btn btn-primary" >Post Your Ad!</button>
                </div>

            </form>

        </div>
        <div class="col"></div>
    </div>
</div>



