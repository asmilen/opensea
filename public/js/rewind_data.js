// Get tours
function getTours(cb) {
  $.ajax({
    type: 'GET',
    url: '/api/frontend/tour',
    success: resData => cb(resData),
    error: err => console.error(err)
  });
}

// Render tours
function renderTours(tours) {
  let $list = $('.journeys .list');

  // Empty list
  $list.empty();

  // Render tours
  for (let i in tours) {
    let tour = tours[i];
    let html;
    let includes = '';
    let descriptions = '';
    let col1;
    let col2;
    let cols;
    let btn;
    let images = '';

    // Includes
    for (let item of tour.includes) {
      includes += `<li>${item}</li>`;
    }

    // Descriptions
    for (let item of tour.descriptions) {
      descriptions += item + '<br>'
    }

    // Images
    for (let i in tour.images) {
      let image = tour.images[i];
      let active = '';

      if (i == 0) active = 'active';
      console.log(active)

      image = 'http://opensea.vn' + image; // TODO: remove this
      images += `
        <div class="carousel-item ${active}">
          <div class="tour-image">
            <img src="${image}" width="100%">
            <div class="price">FROM<span>$60</span></div>
          </div>
        </div>
      `;
    }

    // Columns
    col1 = `
      <div class="col-md-6">
        <div class="text">
          <div class="header-2 poster-font">${tour.title}</div>
          <div class="underline"></div>
          <div class="description">
            ${descriptions}
            <ul>
              ${includes}
            </ul>
          </div>  
        </div>
      </div>
    `;

    col2 = `
      <div class="col-md-6">
        <div class="images">
          <div class="carousel slide" id="tour-${tour.backend_id}" dataride="carousel" data-interval="false">
            <div class="inner carousel-inner">
              ${images}
            </div>

            <a class="carousel-control-prev" href="#tour-${tour.backend_id}" data-slide="prev">
              <i class="fa fa-chevron-left"></i>
            </a>
            <a class="carousel-control-next" href="#tour-${tour.backend_id}" data-slide="next">
              <i class="fa fa-chevron-right"></i>
            </a>
          </div>
        </div>
      </div>
    `;

    if (i % 2) {
      cols = `${col2}${col1}`;
    } else {
      cols = `${col1}${col2}`;
    }

    btn = window.lang == 'vi' ? 'Đặt ngay' : 'BOOK NOW';
    html = `
      <div class="journey" id="${tour.backend_id}">
        <div class="row">
          ${cols}
          <div class="col-md-6">
            <div class="book-now">
              <button id="${tour.backend_id}" type="button" data-toggle="modal" data-target="#tour-popup-${tour.backend_id}">${btn}</button>
            </div>
          </div>
        </div>
      </div>
    `;

    $list.append(html);
  }
}

// Render tour popups
function renderTourPopups(tours) {
  let $body = $('body');

  for (let tour of tours) {
    let name = tour.title.split(' ');
    let name1 = name.slice(0, name.length / 2).join(' ');
    let name2 = name.slice(name.length / 2).join(' ');
    let images = '';
    let price = {
      currency: 'VND',
      number: '1,400,000'
    };
    console.log(name1);
    let includes = '';
    let notIncludes = '';

    for (let image of tour.images) {
      image = 'http://opensea.vn' + image; // TODO: remove this
      images += `
        <div class="carousel-item active">
          <img src="${image}" style="width: 100%;">
        </div>
      `;
    }

    for (let include of tour.includes) {
      includes += `<li>${include}</li>`;
    }

    // for (let notInclude of tour.notIncludes) {
    //   notIncludes += `<li>${notInclude}</li>`;
    // }

    let html = `
      <div class="modal" tabindex="-1" role="dialog" id="tour-popup-${tour.backend_id}">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <!-- <div class="modal-body"> -->
              <div class="tour-popup">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <div class="inner">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="name">
                        <h1>${name1}</h1>
                        <h2>${name2}</h2>
                      </div>
                      <div class="images">
                        <div class="carousel slide" id="imagesCarousel-${tour.backend_id}" data-ride="carousel" data-interval="false">
                          <div class="carousel-inner">
                            ${images}
                          </div>
                          <a class="carousel-control-prev" href="#imagesCarousel-${tour.backend_id}" role="button" data-slide="prev">
                            <span class="icon">
                              <i class="fa fa-chevron-left"></i>
                            </span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#imagesCarousel-${tour.backend_id}" role="button" data-slide="next">
                            <span class="icon">
                              <i class="fa fa-chevron-right"></i>
                            </span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="price">
                        <div>
                          <span class="currency">${price.currency}</span>
                          <span class="number">${price.number}</span>  
                        </div>
                        <span class="text">per pax - maximum group of 5</span>
                      </div>
                      <div class="row">
                        <div class="col-md-6 include included">
                          <div class="title">Included</div>
                          <ul>
                            ${includes}
                          </ul>
                        </div>
                        <div class="col-md-5 offset-md-1 include not-included">
                          <div class="title">Does not included</div>
                          <ul>
                            ${notIncludes}
                          </ul>
                        </div>
                      </div>
                      <div class="book-info">
                        <div class="title">Booking info</div>
                        <form class="form-tour-request"  method="POST">
                          <input type="hidden" name="tour_id" value="${tour.backend_id}" />
                          <div class="row">
                            <div class="col-md-5">
                              <div class="form-group">
                                <input type="text" class="form-control" id="full-name" name="name" placeholder="* Full name" required>
                              </div>
                            </div>
                            <div class="col-md-5 offset-md-2">
                              <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="* Email address" required>
                              </div>
                            </div>
                            <div class="col-md-5">
                              <div class="form-group">
                                <input type="text" class="form-control" id="phone" name="contact" placeholder="* Phone / WhatsApp" required>
                              </div>
                            </div>
                            <div class="col-md-5 offset-md-2">
                              <div class="form-group">
                                <select id="nationality" name="nation" class="form-control" required>
                                  <option>Afghanistan</option>
                                  <option>Albania</option>
                                  <option>Algeria</option>
                                  <option>Andorra</option>
                                  <option>Angola</option>
                                  <option>Antigua and Barbuda</option>
                                  <option>Argentina</option>
                                  <option>Armenia</option>
                                  <option>Aruba</option>
                                  <option>Australia</option>
                                  <option>Austria</option>
                                  <option>Azerbaijan</option>
                                  <option>Bahamas, The</option>
                                  <option>Bahrain</option>
                                  <option>Bangladesh</option>
                                  <option>Barbados</option>
                                  <option>Belarus</option>
                                  <option>Belgium</option>
                                  <option>Belize</option>
                                  <option>Benin</option>
                                  <option>Bhutan</option>
                                  <option>Bolivia</option>
                                  <option>Bosnia and Herzegovina</option>
                                  <option>Botswana</option>
                                  <option>Brazil</option>
                                  <option>Brunei</option>
                                  <option>Bulgaria</option>
                                  <option>Burkina Faso</option>
                                  <option>Burma</option>
                                  <option>Burundi</option>
                                  <option>Cambodia</option>
                                  <option>Cameroon</option>
                                  <option>Canada</option>
                                  <option>Cabo Verde</option>
                                  <option>Central African Republic</option>
                                  <option>Chad</option>
                                  <option>Chile</option>
                                  <option>China</option>
                                  <option>Colombia</option>
                                  <option>Comoros</option>
                                  <option>Congo, Democratic Republic of the</option>
                                  <option>Congo, Republic of the</option>
                                  <option>Costa Rica</option>
                                  <option>Cote d'Ivoire</option>
                                  <option>Croatia</option>
                                  <option>Cuba</option>
                                  <option>Curacao</option>
                                  <option>Cyprus</option>
                                  <option>Czechia</option>
                                  <option>Denmark</option>
                                  <option>Djibouti</option>
                                  <option>Dominica</option>
                                  <option>Dominican Republic</option>
                                  <option>East Timor</option>
                                  <option>Ecuador</option>
                                  <option>Egypt</option>
                                  <option>El Salvador</option>
                                  <option>Equatorial Guinea</option>
                                  <option>Eritrea</option>
                                  <option>Estonia</option>
                                  <option>Eswatini</option>
                                  <option>Ethiopia</option>
                                  <option>Fiji</option>
                                  <option>Finland</option>
                                  <option>France</option>
                                  <option>Gabon</option>
                                  <option>Gambia, The</option>
                                  <option>Georgia</option>
                                  <option>Germany</option>
                                  <option>Ghana</option>
                                  <option>Greece</option>
                                  <option>Grenada</option>
                                  <option>Guatemala</option>
                                  <option>Guinea</option>
                                  <option>Guinea-Bissau</option>
                                  <option>Guyana</option>
                                  <option>Haiti</option>
                                  <option>Holy See</option>
                                  <option>Honduras</option>
                                  <option>Hong Kong</option>
                                  <option>Hungary</option>
                                  <option>Iceland</option>
                                  <option>India</option>
                                  <option>Indonesia</option>
                                  <option>Iran</option>
                                  <option>Iraq</option>
                                  <option>Ireland</option>
                                  <option>Israel</option>
                                  <option>Italy</option>
                                  <option>Jamaica</option>
                                  <option>Japan</option>
                                  <option>Jordan</option>
                                  <option>Kazakhstan</option>
                                  <option>Kenya</option>
                                  <option>Kiribati</option>
                                  <option>Korea, North</option>
                                  <option>Korea, South</option>
                                  <option>Kosovo</option>
                                  <option>Kuwait</option>
                                  <option>Kyrgyzstan</option>
                                  <option>Laos</option>
                                  <option>Latvia</option>
                                  <option>Lebanon</option>
                                  <option>Lesotho</option>
                                  <option>Liberia</option>
                                  <option>Libya</option>
                                  <option>Liechtenstein</option>
                                  <option>Lithuania</option>
                                  <option>Luxembourg</option>
                                  <option>Macau</option>
                                  <option>Macedonia</option>
                                  <option>Madagascar</option>
                                  <option>Malawi</option>
                                  <option>Malaysia</option>
                                  <option>Maldives</option>
                                  <option>Mali</option>
                                  <option>Malta</option>
                                  <option>Marshall Islands</option>
                                  <option>Mauritania</option>
                                  <option>Mauritius</option>
                                  <option>Mexico</option>
                                  <option>Micronesia</option>
                                  <option>Moldova</option>
                                  <option>Monaco</option>
                                  <option>Mongolia</option>
                                  <option>Montenegro</option>
                                  <option>Morocco</option>
                                  <option>Mozambique</option>
                                  <option>Namibia</option>
                                  <option>Nauru</option>
                                  <option>Nepal</option>
                                  <option>Netherlands</option>
                                  <option>New Zealand</option>
                                  <option>Nicaragua</option>
                                  <option>Niger</option>
                                  <option>Nigeria</option>
                                  <option>North Korea</option>
                                  <option>Norway</option>
                                  <option>Oman</option>
                                  <option>Pakistan</option>
                                  <option>Palau</option>
                                  <option>Palestinian Territories</option>
                                  <option>Panama</option>
                                  <option>Papua New Guinea</option>
                                  <option>Paraguay</option>
                                  <option>Peru</option>
                                  <option>Philippines</option>
                                  <option>Poland</option>
                                  <option>Portugal</option>
                                  <option>Qatar</option>
                                  <option>Romania</option>
                                  <option>Russia</option>
                                  <option>Rwanda</option>
                                  <option>Saint Kitts and Nevis</option>
                                  <option>Saint Lucia</option>
                                  <option>Saint Vincent and the Grenadines</option>
                                  <option>Samoa</option>
                                  <option>San Marino</option>
                                  <option>Sao Tome and Principe</option>
                                  <option>Saudi Arabia</option>
                                  <option>Senegal</option>
                                  <option>Serbia</option>
                                  <option>Seychelles</option>
                                  <option>Sierra Leone</option>
                                  <option>Singapore</option>
                                  <option>Sint Maarten</option>
                                  <option>Slovakia</option>
                                  <option>Slovenia</option>
                                  <option>Solomon Islands</option>
                                  <option>Somalia</option>
                                  <option>South Africa</option>
                                  <option>South Korea</option>
                                  <option>South Sudan</option>
                                  <option>Spain</option>
                                  <option>Sri Lanka</option>
                                  <option>Sudan</option>
                                  <option>Suriname</option>
                                  <option>Swaziland (See Eswatini)</option>
                                  <option>Sweden</option>
                                  <option>Switzerland</option>
                                  <option>Syria</option>
                                  <option>Taiwan</option>
                                  <option>Tajikistan</option>
                                  <option>Tanzania</option>
                                  <option>Thailand</option>
                                  <option>Timor-Leste</option>
                                  <option>Togo</option>
                                  <option>Tonga</option>
                                  <option>Trinidad and Tobago</option>
                                  <option>Tunisia</option>
                                  <option>Turkey</option>
                                  <option>Turkmenistan</option>
                                  <option>Tuvalu</option>
                                  <option>Uganda</option>
                                  <option>Ukraine</option>
                                  <option>United Arab Emirates</option>
                                  <option>United Kingdom</option>
                                  <option>Uruguay</option>
                                  <option>Uzbekistan</option>
                                  <option>Vanuatu</option>
                                  <option>Venezuela</option>
                                  <option>Vietnam</option>
                                  <option>Yemen</option>
                                  <option>Zambia</option>
                                  <option>Zimbabwe</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-5">
                              <div class="form-group">
                                <label for="date"><span style="color: red;">*</span>Choose your date</label>
                                <input class="form-control" type="date" name="date" id="date" required>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <div class="time">
                                  <label><span style="color: red;">*</span>Time</label>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="time" id="time1" value="1" required>
                                    <label class="form-check-label" for="time1">9 a.m - 1 p.m</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="time" id="time2" value="2">
                                    <label class="form-check-label" for="time2">1 p.m - 5 p.m</label>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="amount"><span style="color: red;">*</span>Number of people</label>
                                <input class="form-control" type="number" min="1" max="5" name="number_people" required>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <textarea class="form-control" id="note" rows="4" placeholder="Special requests" name="special_request"></textarea>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="sub-total">
                                <div class="line"></div>
                                <div class="title">Sub-total</div>
                                <div class="price">
                                  <span class="currency">VND</span>
                                  <span class="number">1,400,000</span>
                                </div>  
                              </div>
                            </div>
                          </div>
                          <div class="submit-buttons">
                            <button  class="add-to-cart">ADD TO CART</button>
                            <button type="submit" class="buy-now">BUY NOW</button>
                          </div>
                        </form>
                        <div style="color: red; font-size: 12px; padding-top: 10px;" class="error"></div>
                      </div>
                    </div>
                  </div>  
                </div>
              </div>
            <!-- </div> -->
          </div>
        </div>
      </div>
    `;

    $body.prepend(html);
    submitTourRequestForm();
  }
}

function submitTourRequestForm() {
    $('.form-tour-request').unbind('submit').bind('submit',function(e) {

            e.preventDefault();
            $('.error').empty();
            console.log($(this));
            $.post('/tour-request', $(this).serialize())
                .then(function (response) {
                    if (response.status == 'success') {
                        $(this).closest('.modal').modal('toggle');
                        swal(
                            'Success!',
                            response.message,
                            'success'
                        );
                    } else {
                        $.each(response.errors, function (key, value) {
                            $('.error').append(" <p><span>* " + value + "</span></p>");
                        });
                    }
                })
                .catch(function (error) {
                    console.log(error);
                });

        });
}
