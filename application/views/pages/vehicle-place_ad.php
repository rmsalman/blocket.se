<h1 class="text-center">Place an ad on Blocket</h1>
<div class="container">
    <form>

        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="company_ad" id="company_ad" value="0" checked>
                Private person
            </label>
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="company_ad" id="company_ad2" value="1" >
                Business
            </label>
        </div>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your Name">
        </div>

        <div class="form-group">
            <label for="E-mail">E-mail</label>
            <input type="email" class="form-control" id="E-mail" placeholder="Enter your Name">
        </div>

        <div class="form-group">
            <label for="Phone">Phone</label>
            <div class="row">
                <div class="col-sm-8">
                    <input type="number" class="form-control" id="Phone" placeholder="Enter your Name">
                </div>
                <div class="col-sm-4">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="hide_num" id="hide_num" value="0" checked>
                        Hide in the ad
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="hide_num" id="hide_num" value="0" checked>
                Temporary phone number +10 kr 10
            </label>
            <p>
                Do not want to show your real number in the ad? Buy a temporary order only10kr.
                <!-- Example single danger button -->
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
            <select name="region" id="region" class="form-control" >
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
            <label for="E-mail">municipality</label>
            <select id="area" name="area" class="maximize">
                <option value="">«Select municipality»</option>
                <option value="55" selected="selected">Avesta </option>
                <option value="56">Borlange  </option>
                <option value="57">Falun </option>
                <option value="58">Gagnef </option>
                <option value="59">Hedemora  </option>
                <option value="60">Leksand  </option>
                <option value="61">Ludvika  </option>
                <option value="62"><fontSalen  </option>
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
            <input type="number" class="form-control" id="ZIP" placeholder="ZIP Code">
        </div>

    </form>
</div>



