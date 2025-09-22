
$(document).ready(function () {
    // Sidebar hover effects
    $('.sidebar-item').hover(
        function () {
            $(this).css('transform', 'scale(1.1)');
        },
        function () {
            $(this).css('transform', 'scale(1)');
        }
    );

    // Auto-start carousel
    $('#heroCarousel').carousel({
        interval: 5000,
        ride: 'carousel'
    });

    // Form validation
    // $('form').on('submit', function (e) {
    //     e.preventDefault();
    //     alert('Thank you for your inquiry! We will get back to you soon.');
    //     this.reset();
    // });

    // Newsletter subscription
    // $('.newsletter button').on('click', function () {
    //     const email = $('.newsletter input').val();
    //     if (email) {
    //         alert('Thank you for subscribing to our newsletter!');
    //         $('.newsletter input').val('');
    //     } else {
    //         alert('Please enter a valid email address.');
    //     }
    // });

    // Smooth scrolling for sidebar items
    $('.sidebar-item').on('click', function () {
        const sections = ['header', 'heroCarousel', 'main-content', 'newsletter', 'footer'];
        const index = $(this).index();
        if (sections[index]) {
            $('html, body').animate({
                scrollTop: $('.' + sections[index]).offset().top
            }, 500);
        }
    });

    // Search functionality
    // $('.btn-search').on('click', function () {
    //     const instituteType = $('select').eq(0).val();
    //     const location = $('select').eq(1).val();

    //     if (instituteType === 'Select Type' || location === 'Select City') {
    //         alert('Please select both institute type and location to search.');
    //     } else {
    //         alert('Searching for ' + instituteType + ' in ' + location + '...');
    //     }
    // });

    // University card hover effects
    $('.university-card').hover(
        function () {
            $(this).css({
                'transform': 'translateY(-10px)',
                'box-shadow': '0 10px 25px rgba(0,0,0,0.2)'
            });
        },
        function () {
            $(this).css({
                'transform': 'translateY(0)',
                'box-shadow': '0 5px 15px rgba(0,0,0,0.1)'
            });
        }
    );

    // Mobile menu toggle (for smaller screens)
    if ($(window).width() <= 768) {
        $('.navbar-nav').addClass('d-none');
        $('.navbar-brand').after('<button class="btn btn-outline-primary ms-3" id="mobileMenuToggle"><i class="fas fa-bars"></i></button>');

        $('#mobileMenuToggle').on('click', function () {
            $('.navbar-nav').toggleClass('d-none');
        });
    }

    // Window resize handler
    $(window).on('resize', function () {
        if ($(window).width() > 768) {
            $('.navbar-nav').removeClass('d-none');
            $('#mobileMenuToggle').remove();
        }
    });

    // Loading animation for view buttons
    $('.btn-view').on('click', function (e) {
        e.preventDefault();
        const btn = $(this);
        const originalText = btn.text();
        btn.text('Loading...').prop('disabled', true);

        setTimeout(function () {
            btn.text(originalText).prop('disabled', false);
            alert('University information would be displayed here.');
        }, 1500);
    });
});
