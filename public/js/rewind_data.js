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

    // Includes
    for (let item of tour.includes) {
      includes += `<li>${item}</li>`;
    }

    // Descriptions
    for (let item of tour.descriptions) {
      descriptions += item + '<br>'
    }

    // Columns
    col1 = `
      <div class="col-md-6">
        <div class="text">
          <div class="header-2">${tour.title}</div>
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
              <div class="carousel-item active">
                <div class="tour-image">
                  <div class="price">FROM<span>$60</span></div>
                  <h1>Hanoi's secrets</h1>
                  <h2>WITH FILM CAMERAS</h2>
                </div>
              </div>
              <div class="carousel-item">
                <div class="tour-image">
                  <div class="price">FROM<span>$60</span></div>
                  <h1>Hanoi's secrets</h1>
                  <h2>WITH FILM CAMERAS</h2>
                </div>
              </div>
              <div class="carousel-item">
                <div class="tour-image">
                  <div class="price">FROM<span>$60</span></div>
                  <h1>Hanoi's secrets</h1>
                  <h2>WITH FILM CAMERAS</h2>
                </div>
              </div>
              <div class="carousel-item">
                <div class="tour-image">
                  <div class="price">FROM<span>$60</span></div>
                  <h1>Hanoi's secrets</h1>
                  <h2>WITH FILM CAMERAS</h2>
                </div>
              </div>
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

    html = `
      <div class="journey" id="${tour.backend_id}">
        <div class="row">
          ${cols}
          <div class="col-md-6">
            <div class="book-now">
              <button id="${tour.backend_id}" type="button" data-toggle="modal" data-target="#tour-popup-test">BOOK NOW</button>
            </div>
          </div>
        </div>
      </div>
    `;

    $list.append(html);
  }
}
