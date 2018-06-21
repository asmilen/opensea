<template>
    <div class="container feature-content" id="tour" v-if="tours">
        <template v-for="(tour, key) in tours">
            <tour v-bind:tour="tour" v-on:bookNowBtnClicked="bookNowBtnClicked(tour, key)"></tour>
        </template>
        <div class="modal fade product_view" id="product_view">
        	<div class="modal-dialog popstyle">
        		<div class="modal-content">
        			<a href="#" data-dismiss="modal" class="class close-pop"><span class="glyphicon glyphicon-remove"></span></a>
        			<div class="modal-body" v-if="popupTour.description">
        				<div class="row">
        					<div class="col-md-6 product_img">
        						<div class="feature-box-images">
        							<img v-bind:src="popupTour.image">
        						</div>
        						<h3 class="feature-box-title">
        							{{ popupTour.name }}
        						</h3>
                                <p v-for="p in split(popupTour.description)">{{ p }}</p>


        					</div>
        					<div class="col-md-6 product_content">
        						<h4 class="feature-box-title">
        							Price
        						</h4>
        						<div class="price-group" v-if="popupTour.price" v-for="price in JSON.parse(popupTour.price)" style="width: 28%; overflow: hidden;">
        							<span class="price-group-title">
        								{{ price.title }}
        							</span>
        							<span class="price-group-title">
        								${{ price.value }}/<small>PAX</small>
        							</span>
        						</div>

        						<p class="txt-max">Maximum: group of 5</p>
        						<h4 class="feature-box-title">
        							WHAT'S INCLUDE
        						</h4>
        						<div class="feature-box-content">
        							<ul>
        								<li v-for="inc in split(popupTour.include)">{{inc}}</li>
        							</ul>
        						</div>
        						<h4 class="feature-box-title">
        							ADD-ON FEES
        						</h4>
        						<div class="feature-box-content">
        							<ul>
        								<li v-for="inc in split(popupTour.add_on)">{{inc}}</li>
        							</ul>
        						</div>
        						<h4 class="feature-box-title">
        							BOOK INFO
        						</h4>
        						<form>
        							<div class="row">
        								<div class="col-sm-6">
        									<div class="form-group">
        										<label>Full Name (*)</label>
        										<input type="text" class="popup-input" v-model="bookingInfo.name">
        									</div>
        									<div class="form-group">
        										<label><span class="small">Phone/WhatsApp/Kacaotalk (*)</span></label>
        										<input type="text" class="popup-input"  v-model="bookingInfo.contact">
        									</div>
        									<div class="form-group">
        										<label>Choose Date</label>
        										<input id="bookingDate" type="text" class="datepicker popup-input"  v-model="bookingInfo.date">
        									</div>
        								</div>
        								<div class="col-sm-6">
        									<div class="form-group">
        										<label>Email (*)</label>
        										<input type="email" class="popup-input"  v-model="bookingInfo.email">
        									</div>
        									<div class="form-group">
        										<label>Nationality</label>

												<select class="popup-input"  v-model="bookingInfo.nation">
													<option v-for="option in countries" v-bind:value="option">
														{{ option.substr(0,30) }}
													</option>
												</select>
        									</div>
        									<div class="form-group">
        										<label>Number of people</label>
												<select class="popup-input"  v-model="bookingInfo.number_people">
													<option v-for="option in numbers" v-bind:value="option">
														{{ option }}
													</option>
												</select>
        									</div>
        								</div>
        							</div>
        							<div class="form-group">
        								<label>Special Request</label>
        								<textarea type="text" class="popupTextarea" v-model="bookingInfo.special_request"></textarea>
        							</div>
        						</form>

        						<div class="feature-box-price">

        							<a class="btn btn-price" href="javascript:void(0)" v-on:click="bookNow()">
        								BOOK NOW
        							</a>
        							<div class="clr"></div>
                                    <div class="" style="font-size: 14px;float: right;" v-if="message">
                                        {{ message }}
                                    </div>
                                    <div class="" style="color: red; font-size: 12px;float: right; text-transform: none;" v-if="errors">

                                        <p v-for="error in errors">
                                            <span v-for="item in error">* {{item}}</span>

                                        </p>
                                    </div>
        						</div>

        					</div>
        				</div>

        			</div>
					<a href="javascript:void(0);" v-on:click="previousTour()" class="action-btn pre-btn"><span class="sr-only"></span></a>
					<a href="javascript:void(0);" v-on:click="nextTour()" class="action-btn next-btn"><span class="sr-only"></span></a>
        		</div>
        	</div>
        </div>
    </div>
</template>

<script>
    import Tour from './item/Tour.vue';
    export default {
        mounted() {
            this.tours = tours;
            this.bookingInfo = {};
            console.log('this.tours', this.tours);

        },
        data() {
            return {
                tours: false,
                popupTour: {},
                bookingInfo : {},
                message : false,
                errors : false,
				countries : [
					"Afghanistan",
					"Åland Islands",
					"Albania",
					"Algeria",
					"American Samoa",
					"Andorra",
					"Angola",
					"Anguilla",
					"Antarctica",
					"Antigua and Barbuda",
					"Argentina",
					"Armenia",
					"Aruba",
					"Australia",
					"Austria",
					"Azerbaijan",
					"Bahamas",
					"Bahrain",
					"Bangladesh",
					"Barbados",
					"Belarus",
					"Belgium",
					"Belize",
					"Benin",
					"Bermuda",
					"Bhutan",
					"Bolivia",
					"Bosnia and Herzegovina",
					"Botswana",
					"Bouvet Island",
					"Brazil",
					"British Indian Ocean Territory",
					"Brunei Darussalam",
					"Bulgaria",
					"Burkina Faso",
					"Burundi",
					"Cambodia",
					"Cameroon",
					"Canada",
					"Cape Verde",
					"Cayman Islands",
					"Central African Republic",
					"Chad",
					"Chile",
					"China",
					"Christmas Island",
					"Cocos (Keeling) Islands",
					"Colombia",
					"Comoros",
					"Congo",
					"Congo, The Democratic Republic of The",
					"Cook Islands",
					"Costa Rica",
					"Cote D'ivoire",
					"Croatia",
					"Cuba",
					"Cyprus",
					"Czechia",
					"Denmark",
					"Djibouti",
					"Dominica",
					"Dominican Republic",
					"Ecuador",
					"Egypt",
					"El Salvador",
					"Equatorial Guinea",
					"Eritrea",
					"Estonia",
					"Ethiopia",
					"Falkland Islands (Malvinas)",
					"Faroe Islands",
					"Fiji",
					"Finland",
					"France",
					"French Guiana",
					"French Polynesia",
					"French Southern Territories",
					"Gabon",
					"Gambia",
					"Georgia",
					"Germany",
					"Ghana",
					"Gibraltar",
					"Greece",
					"Greenland",
					"Grenada",
					"Guadeloupe",
					"Guam",
					"Guatemala",
					"Guernsey",
					"Guinea",
					"Guinea-bissau",
					"Guyana",
					"Haiti",
					"Heard Island and Mcdonald Islands",
					"Holy See (Vatican City State)",
					"Honduras",
					"Hong Kong",
					"Hungary",
					"Iceland",
					"India",
					"Indonesia",
					"Iran, Islamic Republic of",
					"Iraq",
					"Ireland",
					"Isle of Man",
					"Israel",
					"Italy",
					"Jamaica",
					"Japan",
					"Jersey",
					"Jordan",
					"Kazakhstan",
					"Kenya",
					"Kiribati",
					"Korea, Democratic People's Republic of",
					"Korea, Republic of",
					"Kuwait",
					"Kyrgyzstan",
					"Lao People's Democratic Republic",
					"Latvia",
					"Lebanon",
					"Lesotho",
					"Liberia",
					"Libyan Arab Jamahiriya",
					"Liechtenstein",
					"Lithuania",
					"Luxembourg",
					"Macao",
					"Macedonia, The Former Yugoslav Republic of",
					"Madagascar",
					"Malawi",
					"Malaysia",
					"Maldives",
					"Mali",
					"Malta",
					"Marshall Islands",
					"Martinique",
					"Mauritania",
					"Mauritius",
					"Mayotte",
					"Mexico",
					"Micronesia, Federated States of",
					"Moldova, Republic of",
					"Monaco",
					"Mongolia",
					"Montenegro",
					"Montserrat",
					"Morocco",
					"Mozambique",
					"Myanmar",
					"Namibia",
					"Nauru",
					"Nepal",
					"Netherlands",
					"Netherlands Antilles",
					"New Caledonia",
					"New Zealand",
					"Nicaragua",
					"Niger",
					"Nigeria",
					"Niue",
					"Norfolk Island",
					"Northern Mariana Islands",
					"Norway",
					"Oman",
					"Pakistan",
					"Palau",
					"Palestinian Territory, Occupied",
					"Panama",
					"Papua New Guinea",
					"Paraguay",
					"Peru",
					"Philippines",
					"Pitcairn",
					"Poland",
					"Portugal",
					"Puerto Rico",
					"Qatar",
					"Reunion",
					"Romania",
					"Russian Federation",
					"Rwanda",
					"Saint Helena",
					"Saint Kitts and Nevis",
					"Saint Lucia",
					"Saint Pierre and Miquelon",
					"Saint Vincent and The Grenadines",
					"Samoa",
					"San Marino",
					"Sao Tome and Principe",
					"Saudi Arabia",
					"Senegal",
					"Serbia",
					"Seychelles",
					"Sierra Leone",
					"Singapore",
					"Slovakia",
					"Slovenia",
					"Solomon Islands",
					"Somalia",
					"South Africa",
					"South Georgia and The South Sandwich Islands",
					"Spain",
					"Sri Lanka",
					"Sudan",
					"Suriname",
					"Svalbard and Jan Mayen",
					"Swaziland",
					"Sweden",
					"Switzerland",
					"Syrian Arab Republic",
					"Taiwan, Province of China",
					"Tajikistan",
					"Tanzania, United Republic of",
					"Thailand",
					"Timor-leste",
					"Togo",
					"Tokelau",
					"Tonga",
					"Trinidad and Tobago",
					"Tunisia",
					"Turkey",
					"Turkmenistan",
					"Turks and Caicos Islands",
					"Tuvalu",
					"Uganda",
					"Ukraine",
					"United Arab Emirates",
					"United Kingdom",
					"United States",
					"United States Minor Outlying Islands",
					"Uruguay",
					"Uzbekistan",
					"Vanuatu",
					"Venezuela",
					"Viet Nam",
					"Virgin Islands, British",
					"Virgin Islands, U.S.",
					"Wallis and Futuna",
					"Western Sahara",
					"Yemen",
					"Zambia",
					"Zimbabwe",
				],
				numbers : [1,2,3,4,5],
				currentTourIndex: 0,
            }
        },
        components : {
            'tour': Tour,
        },
        methods : {
			previousTour(){
				this.currentTourIndex--;
				if(typeof(this.tours[this.currentTourIndex]) != 'undefined'){
					this.popupTour = this.tours[this.currentTourIndex];
				} else {
					this.currentTourIndex = this.tours.length - 1;
					// console.log(this.tours.length - 1);
					// return;
					this.popupTour = this.tours[this.currentTourIndex];
				}
			},
			nextTour(){
				this.currentTourIndex++;
				if(typeof(this.tours[this.currentTourIndex]) != 'undefined'){
					this.popupTour = this.tours[this.currentTourIndex];
				} else {
					this.currentTourIndex = 0;
					this.popupTour = this.tours[this.currentTourIndex];
				}

			},
            bookNowBtnClicked(tour, index){
                console.log(tour);
                var self = this;
                this.popupTour = tour;
				this.currentTourIndex = index;
                setTimeout(function(){
					var dateToday = new Date();
                    $("#bookingDate").datepicker(
                        {
                            format: 'yyyy-mm-dd',
                            autoclose: true,
							minDate: +1,
                            startDate: dateToday
                        }
                    ).on(
                 		"changeDate", () => {self.bookingInfo.date = $('#bookingDate').val()}
            		);

                }, 500);

            },
            bookNow(){
                console.log(this.bookingInfo);
                console.log(this.popupTour.id);
                var self = this;
                axios.post('/tour-request', {
                    bookingInfo : this.bookingInfo,
                    tour_id : this.popupTour.id,
                  })
                  .then(function (response) {
                      console.log(response);

                      if(response.data.status == 'success'){
                          self.errors = false;
                          self.message = "Thank you for booking with us!";
                          setTimeout(function(){
                              $('#product_view > div > div > a').click();
							  self.message = false;
                          }, 3000);
                      } else {
                          self.errors = response.data.errors;
                      }

                  })
                  .catch(function (error) {
                    console.log(error);
                  });
            }
        }
    }
</script>
<style media="screen">
    .popupTextarea{
        background: none;
        display: block;
        width: 100%;
        background-image: linear-gradient(to right, white 0, transparent 0),
        linear-gradient(to left, white 0, transparent 0),
        repeating-linear-gradient(transparent, transparent 37px, #313131 36px, #313131 38px, transparent 38px);
        background-attachment: local;
        border: none;
    }
    #bookingDate{
        border-radius: 0px;
        padding: 1px 7px;
    }
</style>
