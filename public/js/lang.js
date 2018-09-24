// Persists
function persistStorage() {
    window.storage = new Persist.Store('Opensea');
}

// Init language
function initLanguage() {
    if (!window.storage) {
        window.lang = 'en';
    } else {
        if (!window.storage.get('lang')) {
            window.lang = 'en';
            window.storage.set('lang', 'en');
        } else {
            window.lang = window.storage.get('lang');
        }
    }
}

// Navbar content
window.navContent = {
    en: {
        home: 'HOME',
        aboutUs: 'ABOUT US',
        bonbon: 'BONBON CITY TOUR',
        rewind: 'VIETNAM REWIND',
        faq: 'FAQs',
        cart: 'CART'
    },
    vi: {
        home: 'TRANG CHỦ',
        aboutUs: 'VỀ CHÚNG TÔI',
        bonbon: 'BONBON CITY TOUR',
        rewind: 'VIETNAM REWIND',
        faq: 'HỎI ĐÁP',
        cart: 'GIỎ HÀNG'
    }
};

// Footer content
window.footerContent = {
    en: {
        contactH1: 'CONTACT US',
        addressH1: 'OPENSEA JOINT STOCK COMPANY',
        addressContent: '12 Ngo Tram Str, Hoan Kiem Dist., Hanoi, Vietnam',
        findUs: 'Find us on',
    },
    vi: {
        contactH1: 'LIÊN HỆ',
        addressH1: 'CÔNG TY CỔ PHẦN OPENSEA',
        addressContent: '12 Ngõ Trạm, Hoàn Kiếm, Hà Nội',
        findUs: 'Tìm kiếm chúng tôi trên',
    }
}

// Home content
window.homeContent = {
    en: {
        bannerH1: 'Premier Travel Operator',
        bannerH2: 'travel with us for hand-crafted itineraries and<br>unparalled access to Vietnam',
        aboutUsH1: 'About us',
        aboutUsContent: `<span class="opensea">OPENSEA</span> is a young, dynamic travel company<br>that provide services catering to inbound tourist's<br>most popular demands: dining, accommodation,<br>transportation, and entertainment experiences.`,
        journeysHeader: 'Our popular journeys',
        journeyBonbonH2: 'travel with us',
        journeyRewindH2: 'explore with us',
        journeyMore: 'MORE',
        joinUsH1: 'Join us',
        joinUsH2: `Subscribe for exclusive info<br>and offers from us`,
        joinUsPlaceholder: 'Your email',
        joinUsSubmit: 'subscribe',
        countBonbonH2: `Bonbon<br>kilometers`,
        countCustomersH2: `happy<br>customers`,
        countToursH2: `joyful<br>tours`,
    },
    vi: {
        bannerH1: 'Cung cấp dịch vụ du lịch hàng đầu cho bạn',
        bannerH2: 'Khám phá Việt Nam theo cách của bạn, với sản phẩm du lịch độc đáo của chúng tôi',
        aboutUsH1: 'Về chúng tôi',
        aboutUsContent: `<span class="opensea">OPENSEA</span> là một công ty trẻ trung, năng động với mục tiêu cung cấp các dịch vụ du lịch thiết yếu hướng tới khách du lịch nước ngoài tới Việt Nam bao gồm ăn uống, lưu trú, di chuyển và du lịch trải nghiệm.`,
        journeysHeader: 'Trải nghiệm được ưa thích',
        journeyBonbonH2: 'du lịch cùng chúng tôi',
        journeyRewindH2: 'khám phá cùng chúng tôi',
        journeyMore: 'Xem thêm',
        joinUsH1: 'Tham gia cùng chúng tôi',
        joinUsH2: 'Đăng ký để được cập nhật những thông tin mới nhất từ OPENSEA',
        joinUsPlaceholder: 'Địa chỉ email của bạn',
        joinUsSubmit: 'Đăng ký',
        countBonbonH2: `cây số<br>Bonbon`,
        countCustomersH2: `khách hàng<br>vui vẻ`,
        countToursH2: `hành trình<br>thú vị`,
    }
};

// Bonbon content
window.bonbonContent = {
    en: {
        introH1: `IT'S TIME TO BONBON`,
        introText: `<span class="quot"><i class="fa fa-quote-left"></i></span>&nbsp;&nbsp;
      Embark on your own adventure with Hanoi's one and only Bon Bon City Tour. Our flexible city sightseeing tours allow you to soak up the city's history and atmosphere with ease. Hop on any of our unique buses from 09 Bon Bon stops, conveniently located close to famous landmarks and attractions. You can hop off the bus to explore as often as you wish, and rejoin the tour once you're ready.&nbsp;&nbsp;
      <span class="quot"><i class="fa fa-quote-right"></i></span>`,
        packages: {
            h1: `PACKAGES`,
            h2: `More than a ticket, your entrance to our very own Hanoi`,
            h3: `SAVE 10% WHEN PRE-BOOK YOUR TICKET ONLINE`,
        },
        highlightH1: `HIGHLIGHTS`,
        highlightH2: `The best hop on hop off sightseeing bus tour that showcases the city's world renowned landmarks.`,
        highlight1: {
            h1: 'HOP ON HOP OFF TICKET',
            h2: 'Explore the city at your own<br>pace with our flexibility',
            content: 'Unlimited travel within 24-48 hours! Whatever time you board the bus, you can use your ticket until the same time next day, or the day after that should you choose our 48 hour ticket! Want some more? Our flexible packages are always ready!'
        },
        highlight2: {
            h1: 'FREE WIFI',
            h2: 'Free Onboard Wifi',
            content: 'Get connected as you tour around the city. Snapping some selfies and uploading them would be highly recommended.'
        },
        highlight3: {
            h1: 'PRE-RECORDER APP COMPLIMENTARY',
            h2: 'Available in 2 languages on all tours',
            content: 'Language included: English, Vietnamese. All BonBon bus offers audio guide in English, Vietnamese and Chinese which will give you information on every stop as well as activities along the way. We will also provide you our very own brochure to the essential sights, sounds and tastes from east to west that define Hanoi.'
        },
        highlight4: {
            h1: 'DEPARTURE POINTS',
            h2: 'Conveniently located so you<br>can see the best of Hanoi',
            content: 'Be organised! Use the printed timetable on our brochures to know what time our buses pass each stop. Take back your freedom within the city with our 9 stops, and a whole lot of recommendations around them!'
        },
        highlight5: {
            h1: 'BOOK ONLINE AND SAVE',
            h2: 'Save more from official purchase',
            content: 'Save at least VND 20.000 when you buy BonBon ticket online. Show your printed e-ticket to a member of our staff and receive your ticket in return to an exciting journey of history of history and culture!'
        },
        highlight6: {
            h1: 'MAXIMUM SERVICE<br>AT BEST PRICE',
            h2: `It's all inclusive with no extra fee`,
            content: 'Be smart and cut down on your holiday expenses with the most reasonably priced tour of the market! BonBon bus features our all-inclusive tickets with no extra fee. Enjoy your ticket as many times as you want for up to two days to explore Hanoi and its sights!'
        },
        howItwork: {
            h1: `HOW IT WORKS`,
            step1: `Find the best ticket for your trip`,
            step2: `Purchase online & get your e-ticket`,
            step3: `Exchange your e-tickets to paper tickets on the bus at the 1st stop and make sure to validate them`,
            step4: `Enjoy your trip!`,
            book: `BOOK NOW`
        },
        route: {
            h1: `BONBON ROUTE`,
            h2: `Bon this way`,
            text: `Buses arrive at each stop every 30 minutes, so you can quickly rejoin the tour whenever you like. Our bus route has been carefully planned to ensure that you'll capture all the best sights of Hanoi including Hanoi Opera House, Long Bien Bridge, Temple of Literature, Imperial Citadel of Thang Long and more`,
            download: `DOWNLOAD MAP`
        },
        attractions: {
            h1: `HANOI ATTRACTIONS`,
            h2: `The no-so-little gems of our route presenting Hanoi's proudest`,
            bonbon: `LET'S BONBON TOGETHER`
        },
        customers: {
            h1: 'OUR HAPPY CUSTOMER',
            h2: `Why only hear from us? Let's check more from our friends`,
            list: [{
                review: `We had a great time visiting Hanoi. The BonBon City Tour did an amazing job. I hope you will get a BonBon ticket as an entrance to an authentic Hanoi. They were really good at telling the city's history and engaging us with less-known stories.`,
            }, {
                review: `I think traveling with BonBon City Tour is the easiest yet greatest way to get to know Hanoi, especially when you come here for the first time. The commentary helped us with learning the city's history of the city and other interesting local fun facts. Their travel brochure and smartphone app BonBon City Tour also assisted so much after we hopped off the bus.`,
            }, {
                review: `I really enjoyed BonBon City Tour. My best picture during the whole trip is of the bus, which looks like an antique. Highly recommend BonBon City Tour to any travelers to Hanoi!`,
            }, {
                review: `We booked the BonBon City Tour and used it as a cost-saving way to easily get around Hanoi. How helpful it was with all the brochure, BonBon City Tour app and bus commentary telling us what to see and where to experience local life. You did a surprising job, BonBon!`,
            }, {
                review: `I have just spent the last two days exploring the sights of Hanoi with BonBon City Tour. It was much cheaper than traveling at taxi fares, while the service was so pleasant. Make sure you've put on the earphones so that you can listen to their informative commentary. Don’t miss it!`,
            }, {
                review: `All the stops were fascinating attractions. Their service was awesome and they kept me well-informed about the city on every single part of the tour. I will definitely be back, and recommend it to my family and my friends as well.`,
            }]
        },
        getInTouch: {
            h1: 'GET IN TOUCH',
            namePlaceholder: 'type your name here',
            emailPlaceholder: 'email',
            messagePlaceholder: 'message',
            submit: 'SEND'
        }
    },
    vi: {
        introH1: `Cùng BonBon thôi!`,
        introText: `<span class="quot"><i class="fa fa-quote-left"></i></span>&nbsp;&nbsp;
      Bắt đầu hành trình của riêng bạn cùng BonBon City Tour duy nhất tại Hà Nội. Với tour tham quan thành phố hết sức linh hoạt của chúng tôi, bạn sẽ dễ dàng hòa mình vào bầu không khí và dòng lịch sử của thành phố. Bạn có thể lên và xuống xe BonBon bất kỳ lúc nào tại 9 điểm dừng nằm gần các địa danh nổi tiếng và khám phá các địa danh này theo cách mình muốn.&nbsp;&nbsp;
      <span class="quot"><i class="fa fa-quote-right"></i></span>`,
        packages: {
            h1: `Gói dịch vụ`,
            h2: `Không chỉ là tem phiếu, đây là cách bạn khám phá Hà Nội`,
            h3: `Tiết kiệm 10% khi đặt trực tuyến`,
        },
        highlightH1: `Tiện ích`,
        highlightH2: `Có gì thú vị nhỉ? Bạn đã sẵn sàng chưa?`,
        highlight1: {
            h1: 'Di chuyển bằng xe BonBon',
            h2: 'Khám phá thành phố theo cách của bạn cùng sự linh hoạt của chúng tôi',
            content: 'Di chuyển không giới hạn trong vòng 24-48 giờ! Kể từ thời điểm bước lên lần đầu tiên, bạn có thể đi xe BonBon cho đến cùng thời điểm của hôm sau, hoặc hôm sau nữa nếu bạn chọn gói 48 giờ! Còn chần chừ gì nữa? BonBon City Tour luôn sẵn sàng!'
        },
        highlight2: {
            h1: 'Wifi miễn phí',
            h2: 'Wifi miễn phí trên xe',
            content: 'Vẫn kết nối với gia đình, bạn bè ngay cả khi bạn đang tham quan quanh thành phố. Chụp một bức ảnh trên xe và post lên mạng xã hội nhé, chắc chắn bạn bè của bạn sẽ thấy rất thú vị đấy.'
        },
        highlight3: {
            h1: 'Audio chỉ dẫn du lịch',
            h2: 'Cung cấp thông tin du lịch đầy đủ bằng 2 thứ tiếng',
            content: '3 ngôn ngữ chúng tôi hỗ trợ bao gồm: tiếng Anh, tiếng Việt. Tất cả xe BonBon đều có hướng dẫn du lịch bằng âm thanh cung cấp cho bạn thông tin về mọi điểm dừng cũng như các địa điểm thú vị trên đường đi. Chúng tôi cũng sẽ cung cấp tờ rơi du lịch về các điểm tham quan, nhà hàng và quán cà phê không thể bỏ qua ở Hà Nội.'
        },
        highlight4: {
            h1: 'Nhiều điểm dừng',
            h2: 'Tất cả đều nằm tại những vị trí thuận tiện nhất cho chuyến khám phá Hà Nội',
            content: 'Nhớ sắp xếp lịch trình hợp lý với lịch xe BonBon chạy trên tờ rơi du lịch của chúng tôi. Hãy tự do du lịch quanh thành phố khi xuống 9 điểm dừng - có rất nhiều địa điểm thú vị xung quanh đó!'
        },
        highlight5: {
            h1: 'Đặt trực tuyến - tiết kiệm tiền',
            h2: 'Tiết kiệm nhiều hơn khi mua sản phẩm từ chúng tôi',
            content: 'Bạn có thể tiết kiệm ít nhất 20.000 VND khi mua các gói sản phẩm BonBon trực tuyến. Sau đó đưa xác nhận điện tử của bạn cho nhân viên BonBon, nhận tem phiếu giấy là bạn có thể bắt đầu hành trình lịch sử - văn hóa thú vị ở Hà Nội!'
        },
        highlight6: {
            h1: 'Dịch vụ tốt nhất - giá hợp lý nhất',
            h2: `Bao gồm các dịch vụ khác không thu phụ phí`,
            content: 'Hãy là người tiêu dùng thông minh và cắt giảm chi phí chuyến đi với các tour du lịch giá hợp lý nhất trên thị trường! BonBon cung cấp dịch vụ trọn gói mà không thu thêm phí. Hãy tận dụng tối đa những tiện ích của chúng tôi trong 24-48 giờ để khám phá Hà Nội!'
        },
        howItwork: {
            h1: `Quy trình mua và sử dụng`,
            step1: `Lựa chọn gói sản phẩm thích hợp nhất cho chuyến đi của bạn`,
            step2: `Mua trực tuyến và nhận xác nhận điện tử`,
            step3: `Đổi xác nhận điện tử thành tem phiếu trên xe tại các điểm dừng để sử dụng`,
            step4: `Tận hưởng chuyến đi của bạn thôi nào`,
            book: `ĐẶT NGAY`
        },
        route: {
            h1: `Lộ trình BonBon`,
            h2: `Bon this way`,
            text: `Xe BonBon đến mỗi điểm dừng sau mỗi 35 phút, nhờ vậy bạn có thể quay lại điểm dừng và lên xe bất cứ khi nào bạn muốn. Tuyến xe BonBon đã được thiết kế kỹ lưỡng để đảm bảo bạn có thể tham quan tất cả các địa điểm du lịch tuyệt nhất ở Hà Nội bao gồm Nhà Hát Lớn, Cầu Long Biên, Văn Miếu, Hoàng thành Thăng Long và hơn thế nữa.`,
            download: `TẢI BẢN ĐỒ`
        },
        attractions: {
            h1: `Các điểm tham quan`,
            h2: `Những điểm đến trên lộ trình BonBon là niềm tự hào của người Hà Nội`,
            bonbon: `CÙNG BONBON THÔI!`
        },
        customers: {
            h1: 'Những khách hàng vui vẻ',
            h2: 'Sao phải nghe chúng tôi? Hãy xem những người bạn này nói gì',
            list: [{
                review: `Chúng tôi đã có khoảng thời gian tuyệt vời khi ghé thăm Hà Nội nhờ BonBon City Tour. Tôi hy vọng bạn sẽ mua tem phiếu đi xe BonBon vì đó là cách để bạn được trải nghiệm một Hà Nội đích thực. Họ rất giỏi trong việc kể lại lịch sử của thành phố và thu hút chúng tôi với những câu chuyện thú vị ít ai biết đến.`,
            }, {
                review: `Tôi nghĩ du lịch cùng BonBon City Tour là cách dễ dàng nhất nhưng cũng tuyệt vời nhất để tìm hiểu về Hà Nội, đặc biệt là khi bạn đến đây lần đầu tiên. Audio cung cấp thông tin giúp chúng tôi tìm hiểu lịch sử thành phố và những câu chuyện thú vị khác tại địa phương. Tờ rơi du lịch và ứng dụng điện thoại BonBon City Tour của họ cũng hỗ trợ rất nhiều sau khi chúng tôi xuống xe.`,
            }, {
                review: `Tôi thực sự thích BonBon City Tour. Bức ảnh đẹp nhất của tôi trong suốt chuyến đi chính là bức chụp chiếc xe BonBon, trông nó như một chiếc xe cổ vậy. Thật lòng tôi nghĩ bất kỳ du khách nào tới Hà Nội cũng nên sử dụng dịch vụ BonBon City Tour!`,
            }, {
                review: `Chúng tôi đã đặt BonBon City Tour và sử dụng dịch vụ này như một phương tiện đi lại tiết kiệm trong chuyến du lịch Hà Nội. Tờ rơi du lịch, ứng dụng BonBon City Tour và audio cung cấp thông tin trên xe đều thật hữu ích khi cho chúng tôi biết những điều thú vị đáng xem và những nơi có thể tới để trải nghiệm cuộc sống địa phương. Các bạn đã khiến chúng tôi ngạc nhiên đấy, BonBon!`,
            }, {
                review: `Tôi vừa dành hai ngày vừa qua để khám phá các điểm tham quan ở Hà Nội cùng BonBon City Tour. Du lịch bằng xe BonBon rẻ hơn nhiều so với đi lại bằng taxi, trong khi dịch vụ cũng rất tốt. Hãy nhớ đeo tai nghe để có thể nghe audio cung cấp thông tin du lịch của họ. Đừng bỏ lỡ nhé!`,
            }, {
                review: `Tất cả các điểm dừng đều là địa chỉ du lịch hấp dẫn. Dịch vụ của họ thật tuyệt vời và họ luôn cung cấp cho tôi đầy đủ thông tin về thành phố trên mọi cung đường của chuyến đi. Tôi chắc chắn sẽ quay lại và giới thiệu BonBon City Tour cho gia đình cùng bạn bè của tôi nữa.`,
            }]
        },
        getInTouch: {
            h1: 'Liên hệ',
            namePlaceholder: 'tên của bạn',
            emailPlaceholder: 'email',
            messagePlaceholder: 'lời nhắn',
            submit: 'GỬI'
        }
    }
};

// Rewind content
window.rewindContent = {
    en: {
        intro: {
            h1: `An unique way of experiencing Vietnam`,
            text: `Our growing collection of exclusive, tailor-made experiences focus on the country heritage with a special feature of craftsmanship ranging from photography, coffee tasting to lacquer and leathery techniques. Starting with Hanoi, schedule your next adventure with ease, and let us take you to its rawest, deepest and also finest secrets, the best way we know how.`
        },
        journeys: {
            h1: `Our journeys`,
            btn: 'BOOK NOW'
        },
        customers: {
            h1: `Happy customers`,
            list: [{
                name: 'Nadid, UK',
                review: `This was such a great experience. We really enjoyed it, got some great pictures and a new sense of the city that we wouldn't have had just from tour books. It's a really cool thing to do, totally recommend it!`,
                image: 'images/rewind_cus_nadia.jpg'
            }, {
                name: 'Stephanie, USA',
                review: `The best city tour I’ve ever joined! Our guide was full of energy, stories, and love for Hanoi and film photography. We both felt like locals for a day, and left with a renewed interest for film cameras and a new love for Hanoi! Thanks for sharing with us the city’s secrets!! Hope to have more adventures again in the future.`,
                image: 'images/rewind_cus_stephanie.jpg',
            }, {
                name: 'Yi Sze',
                review: `It was so much more than just a film camera tour. We had a great time! Our guide was really friendly and knowledgeable. He taught us all there was to know about operating and using film cameras, to the history and stories behind the film camera. The walk through the city was enlivened by his explanations on Vietnamese history and culture, and a visit to a traditional desserts shop. If you’re in Hanoi, this is one tour you shouldn’t miss.`,
                image: 'images/bonbon_cus_yi.jpg'
            }, {
                name: 'David, UK',
                review: `Interesting way to experience a reminder of or first time using 35mm film cameras. My guide was a great young passionate through the process of using the cameras functions, experiencing and photographing the surrounding neighbourhood and learning a bit of Hanoi history. Great day thanks and my best wishes for all your creative ventures. `,
                image: 'images/bonbon_cus_david.jpg'
            }, {
                name: 'Cassandra, UK',
                review: `Our guide was just awesome. We had the best time on this experience, arguably one of the coolest things we did in Vietnam! He went above & beyond to make sure we enjoyed our time on his perfectly curated tour. We were thrilled with the images that came out too. Awesome, awesome experience.`,
                image: 'images/bonbon_cus_cassandra.jpg'
            }, {
                name: 'Duy, Sweden',
                review: `One of my best experiences in Hanoi... It‘s more than a photos course, you learn Hanoi on the other side!! My guide is such a smart guy and he knows a lot about camera and Vietnamese culture... don‘t hesitate to ask him. This experience is highly recommended!!`,
                image: 'images/bonbon_cus_duy.jpg'
            }]
        }
    },
    vi: {
        intro: {
            h1: `Mang đến cho bạn trải nghiệm độc đáo ở Việt Nam với hướng dẫn viên bản xứ`,
            text: `Mỗi ngày chúng tôi đều cố gắng mang đến nhiều hơn những trải nghiệm độc đáo cho chuyến du lịch của bạn, giúp bạn khám phá những nét đẹp của Việt Nam với nhiều hình : từ nhiếp ảnh, cà phê, sơn mài hay làm da. Bắt đầu với Hà Nội, hãy cứ tận hưởng chuyến đi, và để chúng tôi mang đến cho bạn những vẻ đẹp ẩn giấu ít người được biết tới.`
        },
        journeys: {
            h1: `Các tour`,
            btn: 'Đặt ngay'
        },
        customers: {
            h1: `Những khách hàng vui vẻ`,
            list: [{
                name: 'Nadid, UK',
                review: `Đây là một trải nghiệm tuyệt vời. Chúng tôi thực sự thích tour trải nghiệm Vietnam Rewind, nhờ đó mà chúng tôi chụp được nhiều bức ảnh tuyệt đẹp và được cảm nhận thành phố theo một cách mới mẻ không có trong sách vở. Đó thực sự là một hoạt động thú vị mà các bạn không nên bỏ qua!`,
                image: 'images/bonbon_cus_nadia.jpg'
            }, {
                name: 'Stephanie, USA',
                review: `Tour du lịch thú vị nhất mà tôi từng tham gia! Hướng dẫn viên cho chúng tôi mang trong mình đầy năng lượng cùng những câu chuyện, tình yêu dành cho Hà Nội cũng như ảnh phim. Chúng tôi cảm thấy mình được sống như người dân địa phương, thích thú với máy ảnh phim hơn và yêu Hà Nội hơn! Cảm ơn vì đã giúp chúng tôi biết tới những vẻ đẹp ẩn giấu trong thành phố! Hy vọng tôi sẽ được khám phá nhiều điều hơn cùng các bạn trong tương lai.`,
                image: 'images/bonbon_cus_stephanie.jpg',
            }, {
                name: 'Yi Sze',
                review: `Đây không chỉ là tour chụp ảnh phim. Chúng tôi đã có một khoảng thời gian tuyệt vời! Hướng dẫn viên của chúng tôi thực sự thân thiện và giàu hiểu biết. Anh ấy dạy chúng tôi cách sử dụng máy ảnh phim, cơ chế hoạt động, lịch sử và những điều thú vị đằng sau chiếc máy ảnh. Chuyến tham quan thành phố càng thú vị hơn với những câu chuyện về lịch sử và văn hóa Việt Nam, chúng tôi còn được ăn thử món tráng miệng truyền thống. Nếu bạn tới Hà Nội, đây là một trải nghiệm bạn không nên bỏ lỡ.`,
                image: 'images/bonbon_cus_yi.jpg'
            }, {
                name: 'David, UK',
                review: `Một trải nghiệm thú vị gợi lại trong tôi cách sử dụng máy ảnh phim 35mm. Hướng dẫn viên của tôi là một bạn trẻ đầy đam mê, cùng tôi trao đổi về cách sử dụng các chức năng của máy ảnh, trải nghiệm, chụp ảnh khu phố cổ và tìm hiểu về lịch sử Hà Nội. Cảm ơn và xin chúc những trải nghiệm đầy sáng tạo của các bạn sẽ thành công hơn nữa.`,
                image: 'images/bonbon_cus_david.jpg'
            }, {
                name: 'Cassandra, UK',
                review: `Hướng dẫn viên của chúng tôi rất tuyệt vời. Nhờ Vietnam Rewind, chúng tôi đã có khoảng thời gian thật ý nghĩa, có thể nói đây là một trong những hoạt động thú vị nhất chúng tôi được trải nghiệm ở Việt Nam! Hướng dẫn viên rất nhiệt tình, giúp chúng tôi tận hưởng chuyến đi thật trọn vẹn. Chúng tôi cũng rất háo hức với những bức ảnh phim mình chụp. Không còn gì để nói ngoài hai chữ tuyệt với!`,
                image: 'images/bonbon_cus_cassandra.jpg'
            }, {
                name: 'Duy, Sweden',
                review: `Một trong những trải nghiệm tuyệt vời nhất của tôi ở Hà Nội... Đây không chỉ là một khóa học nhiếp ảnh, bạn còn được tìm hiểu những khía cạnh khác của Hà Nội! Hướng dẫn viên của tôi là một chàng trai thông minh, anh ấy biết rất nhiều về máy ảnh và văn hóa Việt Nam... đừng ngần ngại hỏi anh ấy điều gì. Đây là trải nghiệm bạn không thể bỏ qua!`,
                image: 'images/bonbon_cus_duy.jpg'
            }]
        }
    }
}

// Choose language
// Choose language
function chooseLanguage(cb) {
    $('.langs .en').click(function(e) {
        if (window.lang != 'en') {
            window.lang = 'en';

            if (window.storage)
                window.storage.set('lang', window.lang);

            $.get('/set-lang/' + window.lang, function () {
                location.reload();
            });
        }
    });

    $('.langs .vi').click(function(e) {
        if (window.lang != 'vi') {
            window.lang = 'vi';

            if (window.storage)
                window.storage.set('lang', window.lang);

            $.get('/set-lang/' + window.lang, function () {
                location.reload();
            });
        }
    });
}


// Render navbar content
function renderNavbarContent(lang) {
    let data = window.navContent[lang];

    $('.navbar #home').html(data.home);
    $('.navbar #aboutUs').html(data.aboutUs);
    $('.navbar #bonbon').html(data.bonbon);
    $('.navbar #rewind').html(data.rewind);
    $('.navbar #faq').html(data.faq);
    $('.navbar #cart .text').html(data.cart);
}

// Render footer content
function renderFooterContent(lang) {
    let data = window.footerContent[lang];

    $('footer .contact .header_1').html(data.contactH1);
    $('footer .address .header_1').html(data.addressH1);
    $('footer .address .content').html(data.addressContent);
    $('footer .find-us span').html(data.findUs);
}

// Poster font
function posterFont(lang) {
    if (lang == 'vi') {
        $('.poster-font').css('font-family', 'SF Text Regular');
    } else {
        $('.poster-font').css('font-family', 'LeJeune Poster Light');
    }
}

// Render home content
function renderHomeContent() {
    let data;
    let lang = window.lang;

    // Navbar
    renderNavbarContent(lang);

    // Home content
    data = window.homeContent[lang];

    $('.banner .header-1').html(data.bannerH1);
    $('.banner .header-2').html(data.bannerH2);

    $('.about-us .text .header-1').html(data.aboutUsH1);
    $('.about-us .text .content').html(data.aboutUsContent);

    $('.journeys .header').html(data.journeysHeader);
    $('.journeys #bonbon .header-2').html(data.journeyBonbonH2);
    $('.journeys #rewind .header-2').html(data.journeyRewindH2);
    $('.journeys .see-more button').html(data.journeyMore);

    $('.join-us .header-1').html(data.joinUsH1);
    $('.join-us .header-2').html(data.joinUsH2);
    $('.join-us input').attr('placeholder', data.joinUsPlaceholder);
    $('.join-us .submit').html(data.joinUsSubmit);

    $('#count-bonbon .header-2').html(data.countBonbonH2);
    $('#count-customers .header-2').html(data.countCustomersH2);
    $('#count-tours .header-2').html(data.countToursH2);

    // Footer content
    renderFooterContent(lang);

    // Font
    posterFont(lang);
}

// Render bonbon content
function renderBonbonContent() {
    let data;
    let lang = window.lang;

    // Navbar
    renderNavbarContent(lang);

    // Bonbon content
    data = window.bonbonContent[lang];

    $('.intro-video .header-1').html(data.introH1);
    $('.intro-video .text').html(data.introText);

    $('.packages .header-1').html(data.packages.h1);
    $('.packages .header-2').html(data.packages.h2);
    $('.packages .header-3').html(data.packages.h3);

    $('.highlights .header-1').html(data.highlightH1);
    $('.highlights .header-2').html(data.highlightH2);

    $('.how-it-work .header-1').html(data.howItwork.h1);
    for (let i = 1; i < 5; i++) {
        $(`.how-it-work #step${i} span`).html(data.howItwork['step' + i]);
    }
    $('.how-it-work .book-now button').text(data.howItwork.book);

    for (let i = 1; i < 7; i++) {
        $(`.highlight#${i} h1`).html(data['highlight' + i].h1);
        $(`.highlight#${i} h2`).html(data['highlight' + i].h2);
        $(`.highlight#${i} .content`).html(data['highlight' + i].content);
    }

    $('.route .header-1').html(data.route.h1);
    $('.route .header-2').html(data.route.h2);
    $('.route .text').html(data.route.text);
    $('.route .download button').html(data.route.download);

    $('.attractions .header-1').html(data.attractions.h1);
    $('.attractions .header-2').html(data.attractions.h2);
    $('.attractions .bonbon button').html(data.attractions.bonbon);

    $('.customers .header-1').html(data.customers.h1);
    $('.customers .header-2').html(data.customers.h2);
    for (let i = 0; i < data.customers.list.length; i++) {
        $('.customers .list .customer#' + (i + 1) + ' .text').html(data.customers.list[i].review);
    }

    $('.get-in-touch .header-1').html(data.getInTouch.h1);
    $('.get-in-touch #name').attr('placeholder', data.getInTouch.namePlaceholder);
    $('.get-in-touch #email').attr('placeholder', data.getInTouch.emailPlaceholder);
    $('.get-in-touch textarea').attr('placeholder', data.getInTouch.messagePlaceholder);
    $('.get-in-touch .submit button').html(data.getInTouch.submit);

    // Footer content
    renderFooterContent(lang);

    // Font
    posterFont(lang);
}

// Render rewind content
function renderRewindContent() {
    let data;
    let lang = window.lang;

    // Navbar
    renderNavbarContent(lang);

    // Rewind content
    data = window.rewindContent[lang];

    $('.intro-video .header-1').html(data.intro.h1);
    $('.intro-video .text').html(data.intro.text);

    $('.journeys .header-1').html(data.journeys.h1);
    $('.journeys button').text(data.journeys.btn)

    $('.customers .header-1').html(data.customers.h1);
    for (let i = 0; i < data.customers.list.length; i++) {
        $('.customers .list .customer#' + (i + 1) + ' .text span').html(data.customers.list[i].review);
    }

    // Footer content
    renderFooterContent(lang);

    // Font
    posterFont(lang);
}

// FAQs content
window.faqContent = {
    en: {
        banner: 'FREQUENTLY ASKED QUESTIONS',
        bonbonFaq: {
            h2: 'BONBON RELATED QUESTIONS',
            list: [
                {
                    id: 1,
                    question: 'Where can i buy the ticket?',
                    answer: `"There are a couple of places to buy a BonBon City Tour ticket. You can buy it:<br>
              - Online on our website with additional 10% discount<br>
              - From our designated staff on the BonBon Bus<br>
              - At OPENSEA office (12 Ngo Tram Street, Hoan Kiem, Hanoi)<br>
              - From our growing list of partners (link)."`
                },
                {
                    id: 2,
                    question: 'How do I redeem my ticket?',
                    answer: `"If you purchase online, follow these steps to get your paper ticket:<br>
              1. Check our confirmation email at your registered mailbox for an e-ticket which includes a unique QR code.<br>
              2. Show your printed e-ticket, or that e-mail on your mobile device to our official staff on the BonBon Bus to exchange for a physical paper ticket.<br><br>
              If you purchase offline (from our official partners, our designated staff on BonBon bus and at OPENSEA office), you will receive the paper ticket immediately. But keep in mind the 10% discount of our exclusive online purchase deal.<br><br>
              And remember to keep this paper ticket with you for usage of BonBon City Tour services."`
                },
                {
                    id: 3,
                    question: 'Is there a discount for purchasing in advance?',
                    answer: `We currently offer an any-time 10% discount for online purchases, sign up and subscribe to our newsletter to be the first to find out about our exclusive deals, promotions and give aways.`
                },
                {
                    id: 4,
                    question: 'Does the BonBon ticket include entrance to attractions on the route?',
                    answer: `Please be noted that entrance pass to attractions on the route are included only in particular packages. For example: <br>
              - Premium Single Package includes 3 attraction passes AND 200,000 VNĐ discount voucher for Vietnam Rewind Experience Tour<br>
              - Deluxe Package includes all-in-one attraction pass AND 500,000 VNĐ discount voucher for Vietnam Rewind Experience Tour<br>
              - Premium Family Package includes all-in-one attraction pass and 200,000 VNĐ discount voucher`
                },
                {
                    id: 5,
                    question: 'Is it possible to redeem the ticket if my phone crashes?',
                    answer: `We recommend our customers to print out a copy of the confirmation email with the QR code visible to exchange the ticket to make sure ease of our service use.`
                },
                {
                    id: 6,
                    question: 'Do I need to specify a date of travel?',
                    answer: `No. All the tickets you buy are open dated till you hop-on BonBon for the first time, meaning you can start your tour on any day within 6 months of purchase.`
                },
                {
                    id: 7,
                    question: 'On which days does the tours operate? When do the first bus and the last bus start? How often do the buses run?',
                    answer:`BonBon City Tour operates every day (with some exception of national holidays and other extremely occasional events) following this schedule:<br>
              First Bus: 09:00 from Stop 01 (Imperial Citadel of Thang Long)<br>
              Last Full-Circuit Bus: 16:35 from Stop 01 (Imperial Citadel of Thang Long)<br>
              Full Circuit Time: 1 hour (approximately) 
              Bus Frequency: every 35 minutes`
                },
                {
                    id: 8,
                    question: 'How can I know when the next bus is coming?',
                    answer: `We value the quality of our service as well as we respect your time value, we vow for the departure of the bus every 35 minute from 9 am everyday. So if you are in between, the next bus will come your way on the next half hour mark.`
                },
                {
                    id: 9,
                    question: 'How can I find the stop nearest to me?',
                    answer: `Download the BonBon City Tour app and you’ll be able find your nearest stop, with your location service and data mode on of course.`
                },
                {
                    id: 10,
                    question: 'How to use the hop-on hop-off feature at its best?',
                    answer: `"If you are unfamiliar with Hanoi, you should take one complete circuit and listen to the full commentary, then decide which places to visit. Don't forget you can take as many loops with BonBon as you wish within your ticket validation.<br>
              Still wanna save more time? Take a look at BonBon City Tour app and brochure, you can pick up favourite stops just like winking."`
                }
            ]
        },
        rewindFaq: {
            h2: 'VIETNAM REWIND RELATED QUESTIONS',
            list: [
                {
                    id: 1,
                    question: 'Can we change the experience date after booking?',
                    answer: `You can change the tour date 24 hours after booking. If there is any emergency case, we will have further discussion through emails.`
                },
                {
                    id: 2,
                    question: 'Can we propose a new route or we have to follow the tour guide all the time?',
                    answer: `If you book a private experience, please contact us via email and we will discuss right after your booking. If you and your group book a normal experience with other participants/ groups, there should be no change.`
                },
                {
                    id: 3,
                    question: 'Can we buy the camera after the experience?',
                    answer: `We do not sell our cameras. However, we can recommend the most reliable places to purchase them.`
                },
                {
                    id: 4,
                    question: 'Are we supposed to pay for our drinks and snacks?',
                    answer: `You only need to pay when you order extra drink and snack apart from 1 drink and snack included in the experience. `
                }
            ]
        },
        moreFaq: {
            h2: 'MORE FREQUENTLY ASKED QUESTIONS',
            list: [
                {
                    id: 1,
                    question: 'In which language is commentary available?',
                    answer: `BonBon currently offers a pre-recorded commentary in your choice of the following languages: Vietnamese, English, Chinese. We will be adding up to 6 languages to our system in the near future.`
                },
                {
                    id: 2,
                    question: 'What is your lost and found policy?',
                    answer: `All of your private items should be taken with care. In the case our staff finds any lost and found, this item will be reported to our admins and will be taken back to our headquarter at 12 Ngo Tram Street for safe-keeping. Please contact us to check the status of your lost and found, as items will be donated to charity every 30 days.`
                },
                {
                    id: 3,
                    question: 'Is it possible to check the information about any of the attractions after I finish any tour?',
                    answer: `You can always check the information we provide through our exclusive mobile application activated by your unique code within our confirmation email, available on both IOS and Android. Otherwise, our brochure can do you good if you don't have a smartphone. `
                },
                {
                    id: 4,
                    question: 'How about the cancelation policy?',
                    answer: `For ticket cancellation please contact us through email or phone so that an agent can assist you with the procedure. Remember to cancel your ticket 14 days prior to its expiration date.`
                }
            ]
        }
    },
    vi: {
        banner: 'NHỮNG CÂU HỎI THƯỜNG GẶP',
        bonbonFaq: {
            h2: 'NHỮNG CÂU HỎI VỀ TEM PHIẾU ĐI XE',
            list: [
                {
                    id: 1,
                    question: 'Tôi có thể mua tem phiếu đi xe ở đâu?',
                    answer: `Bạn có thể mua tem phiếu của BonBon City Tour ở một số địa điểm như:<br>
              - Trên trang web của BonBon với mức ưu đãi 10%<br>
              - Từ nhân viên trên xe BonBon<br>
              - Tại văn phòng OPENSEA (số 12 Ngõ Trạm, Hoàn Kiếm, Hà Nội)<br>
              - Từ những bên đối tác của chúng tôi (đường link)`
                },
                {
                    id: 2,
                    question: 'Làm cách nào để tôi có thể quy đổi, nhận được tem phiếu đi xe?',
                    answer: `Nếu bạn mua trực tuyến trên trang web, xin vui lòng làm theo hướng dẫn sau đây:<br>
              1. Kiểm tra xác nhận điện tử chứa mã QR tới hòm thư điện tử mà bạn dùng để đăng ký.<br>
              2. In xác nhận điện tử và mang theo bản in hoặc mang theo thiết bị có thể hiển thị xác nhận điện tử, trình cho nhân viên OPENSEA trên xe BonBon để đổi lấy tem phiếu đi xe hợp lệ.<br><br>
              Nếu bạn mua tem phiếu đi xe qua các đối tác, nhân viên của OPENSEA trên xe BonBon hoặc ở văn phòng chúng tôi, bạn sẽ được nhận tem phiếu đi xe ngay tại thời điểm đó. Tuy nhiên, bạn sẽ không được hưởng khuyến mãi 10% khi mua tem phiếu qua những cách thức này như khi mua online trên website opensea.vn<br><br>
              Đừng quên mang theo tem phiếu khi sử dụng bất kì dịch vụ nào của BonBon City Tour nhé!`
                },
                {
                    id: 3,
                    question: 'Có chương trình ưu đãi/khuyến mãi khi mua tem phiếu trước khi đi xe không?',
                    answer: `Chúng tôi có chương trình khuyến mãi 10% khi bạn mua tem phiếu BonBon qua trang web opensea.vn tại bất kì thời điểm nào. Và đừng quên đăng kí nhận thông báo qua e-mail để luôn cập nhật những chương trình khuyến mãi và quà tặng mới nhất từ chúng tôi.`
                },
                {
                    id: 4,
                    question: 'Có chương trình ưu đãi/khuyến mãi khi mua tem phiếu theo nhóm không?',
                    answer: `Chúng tôi có gói sản phẩm ưu đãi cho gia đình 4 người (2 người lớn và 2 trẻ em). Nếu bạn đi du lịch theo nhóm và muốn biết thêm thông tin về những gói khuyến mãi, vui lòng liên hệ để nhận được sự trợ giúp từ nhân viên của chúng tôi.`
                },
                {
                    id: 5,
                    question: 'Có chương trình ưu đãi/khuyến mãi cho trẻ em không?',
                    answer: `Có. Tem phiếu cho trẻ em dành riêng cho trẻ em dưới 15 tuổi và trẻ dưới 3 tuổi được sử dụng dịch vụ miễn phí trong trường hợp trẻ không ngồi chỗ riêng khiến hành khách sở hữu tem phiếu không có chỗ ngồi. Xin lưu ý trẻ em phải có người lớn đi kèm khi sử dụng dịch vụ của chúng tôi.`
                },
                {
                    id: 6,
                    question: 'Tôi có thể hủy tem phiếu đã mua bằng cách nào?',
                    answer: `"Để hủy tem phiếu đã đặt mua, xin bạn vui lòng liên hệ với chúng tôi qua hòm thư điện tử hoặc gọi điện thoại cho chúng tôi để nhận được hướng dẫn.<br>
              Xin lưu ý bạn phải hủy tem phiếu đã mua ít nhất 14 ngày trước khi tem phiếu hết hạn."`
                },
                {
                    id: 7,
                    question: 'Tem phiếu BonBon có bao gồm vé vào cửa cho những điểm tham quan trên tuyến đường của BonBon không? ',
                    answer: `"BonBon City Tour có những gói sản phẩm với ưu đãi khác nhau và vé vào cửa cho những điểm tham quan trên tuyến đường của BonBon chỉ có trong một số gói sản phẩm nhất định. Ví dụ:<br>
              - Gói Premium Single: gồm 03 vé vào cửa VÀ phiếu giảm giá 200,000 VND cho tour trải nghiệm Vietnam Rewind<br>
              - Gói Deluxe: gồm vé vào cửa cho tất cả các điểm tham quan VÀ phiếu giảm giá 500,000 VND cho tour trải nghiệm Vietnam Rewind<br>
              - Gói Premium Family: gồm vé vào cửa cho tất cả điểm tham quan VÀ phiếu giảm giá 200,000 VND cho tour trải nghiệm Vietnam Rewind"`
                },
                {
                    id: 8,
                    question: 'Tôi có thể quy đổi tem phiếu trong trường hợp điện thoại bị hỏng không?',
                    answer: `Quý khách nên in, mang theo xác nhận điện tử chứa mã QR và đổi lấy tem phiếu để đảm bảo có thể sử dụng dịch vụ của chúng tôi thuận tiện nhất.`
                },
                {
                    id: 9,
                    question: 'Tôi có thể dùng tem phiếu, sau đó chuyển nhượng lại cho người khác trước khi tem phiếu hết hạn được không?',
                    answer: `Không, tem phiếu BonBon City Tour được thiết cho một người sử dụng. Một khi đã được quy đổi (có hiệu lực), tem phiếu không thể được chuyển giao cho người khác.`
                },
                {
                    id: 10,
                    question: 'Tôi phải đặt tem phiếu trước bao lâu?',
                    answer: `Vì tem phiếu BonBon có giá trị trong vòng 6 tháng và có thể dễ dàng đặt mua qua trang web opensea.vn, việc đặt trước tem phiếu bao lâu có lẽ không phải là vấn đề. Nhưng nếu bạn thấy tour của chúng tôi thú vị, còn chần chừ gì mà không đặt mua ngay chứ?`
                },
            ]
        },
        rewindFaq: {
            h2: 'NHỮNG CÂU HỎI VỀ TOUR',
            list: [
                {
                    id: 1,
                    question: 'Tôi có thể bắt đầu tour ở đâu?',
                    answer: `Điểm xuất phát của tour là từ Điểm dừng 01 (Hoàng Thành Thăng Long). Nhưng bạn có thể bắt đầu tour CỦA BẠN từ bất kì điểm dừng nào trong 9 điểm dừng của chúng tôi.`
                },
                {
                    id: 2,
                    question: 'Tour vận hành vào những ngày nào? Xe BonBon đầu tiên và cuối cùng xuất phát khi nào? Thời gian chờ xe là bao lâu?',
                    answer: `"BonBon City Tour vận hành hằng ngày (trừ một số ngày lễ toàn quốc và những sự kiện đặc biệt khác) với lịch trình như sau:<br>
              - Xe BonBon đầu tiên: 9h từ Điểm dừng 01 (Hoàng Thành Thăng Long)<br>
              - Xe BonBon cuối cùng: 16h35 từ Điểm dừng 01 (Hoàng Thành Thăng Long)<br>
              - Thời lượng 1 tour (từ Điểm dừng 01 tới Điểm dừng 09): (khoảng) 1 giờ<br>
              - Tần xuất xe: 35 phút/xe"`
                },
                {
                    id: 3,
                    question: 'Có cách nào để biết thời gian xe tiếp theo đến điểm dừng?',
                    answer: `Chúng tôi coi trọng việc đảm bảo chất lượng dịch vụ cũng như tôn trọng thời gian của quý khách, chúng tôi cam kết xe BonBon sẽ luân phiên tới các điểm dừng sau mỗi 35 phút bắt đầu từ 9 giờ sáng hằng ngày. Nếu bạn có lỡ chuyến? Đừng lo, xe BonBon tiếp theo sẽ có mặt tại điểm dừng đó sau 35 phút.`
                },
                {
                    id: 4,
                    question: 'Chính sách quản lý đồ thất lạc của OPENSEA là gì?',
                    answer: `Bạn nên quản lý cẩn thận tất cả đồ đạc cá nhân của mình vì xe BonBon cũng là nơi công cộng. Trong trường hợp các nhân viên của chúng tôi tìm thấy đồ thất lạc, món đồ này sẽ được báo cáo và chuyển về văn phòng OPENSEA tại số 12 Ngõ Trạm để bảo quản. Vui lòng liên lạc với chúng tôi để kiểm tra thông tin về đồ thất lạc của bạn. Những món đồ thất lạc không có người nhận sẽ được quyên góp làm từ thiện sau 30 ngày.`
                },
                {
                    id: 5,
                    question: 'Tôi có thể tra cứu thông tin về những địa điểm tham quan sau khi rời khỏi xe BonBon không?',
                    answer: `Bạn có thể tra cứu những thông tin đó qua ứng dụng trên điện thoại của chúng tôi. Ứng dụng có trên cả 2 hệ điều hành là Android và iOS. Ngoài ra, tờ rơi hướng dẫn du lịch của chúng tôi cũng có thể dùng để tra cứu thông tin khi bạn không có điện thoại di động.`
                },
            ]
        },
        moreFaq: {
            h2: 'NHỮNG CÂU HỎI THƯỜNG GẶP KHÁC',
            list: [
                {
                    id: 1,
                    question: 'Audio cung cấp thông tin du lịch hỗ trợ những ngôn ngữ nào?',
                    answer: `"Hiện tại, audio cung cấp thông tin du lịch của chúng tôi có những ngôn ngữ sau: Tiếng Việt, Tiếng Anh, Tiếng Trung.<br>
              Trong tương lai gần, chúng tôi sẽ thêm 6 ngôn ngữ cho hệ thống audio."`
                },
                {
                    id: 2,
                    question: 'Tôi có cần chọn trước một ngày cụ thể để đi tour không?',
                    answer: `Không. Tất cả tem phiếu bạn đặt mua sẽ chưa ấn định ngày giờ cho đến khi bạn lên xe BonBon lần đầu tiên. Điều này có nghĩa bạn có thể bắt đầu sử dụng tem phiếu để đi tour vào bất kì ngày nào trong vòng 6 tháng từ ngày mua.`
                },
                {
                    id: 3,
                    question: 'Tôi có thể tìm điểm dừng gần nhất bằng cách nào?',
                    answer: `Bạn hãy tải ứng dụng BonBon City Tour để có thể tìm thấy điểm dừng gần nhất với địa điểm hiện tại của bạn. Đừng quên bật GPS và dữ liệu di động trên điện thoại nhé.`
                },
                {
                    id: 4,
                    question: 'Đâu là cách sử dụng dịch vụ xe BonBon một cách hiệu quả nhất?',
                    answer: `"Nếu đây là lần đầu bạn đến Hà Nội, bạn nên đi trọn một vòng tour, nghe audio cung cấp thông tin du lịch về các điểm dừng và quyết định những điểm bạn muốn đi. Đừng quên là bạn có thể đi xe BonBon bao nhiêu tùy thích trong thời gian được ghi trên vé.<br>
              Bạn vẫn muốn tiết kiệm thêm thời gian ư? Hãy thử xem qua ứng dụng BonBon City Tour và tờ rơi hướng dẫn du lịch của chúng tôi để chọn ra những địa điểm ưa thích một cách dễ dàng."`
                },
            ]
        }
    }
}

// Render FAQ content
function renderFAQContent() {
    let data;
    let lang = window.lang;

    // Navbar
    renderNavbarContent(lang);

    // FAQ content
    data = window.faqContent[lang];

    $('.first-banner h1').html(data.banner);

    // FAQs
    for (let x of ['bonbon', 'rewind', 'more']) {
        let key = x + 'Faq';
        let h2 = data[key].h2;

        $(`#faqs-${x} h2`).html(h2);
        $(`#faqs-${x} .list`).empty();

        for (let faq of data[key].list) {
            $(`#faqs-${x} .list`).append(`
        <div class="collapsed row question" data-toggle="collapse" href="#${x}-faq-${faq.id}">
          <div class="col-11 question-text">${faq.id}. ${faq.question}</div>
          <div class="col-1">
            <div class="icon"><i class="fa fa-chevron-down"></i></div>
          </div>
          <div class="collapse answer col-10 offset-1" id="${x}-faq-${faq.id}">
            ${faq.answer}
          </div>
        </div>
      `);
        }
    }

    // Footer content
    renderFooterContent(lang);

    // Font
    posterFont(lang);
}
