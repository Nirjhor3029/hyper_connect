<header class="" style="padding-top: 0;">
        <div class="contact-bar">
            <!-- Social Media Icons -->
            <div class="social-icons">
                <a href="#" class="social-icon">
                    <img src="{{ asset('assets/home/images/social_icons/facebook.png') }}" alt="" srcset="">
                </a>
                <a href="#" class="social-icon">
                    <img src="{{ asset('assets/home/images/social_icons/instagram.png') }}" alt="" srcset="">
                </a>
                <a href="#" class="social-icon">
                    <img src="{{ asset('assets/home/images/social_icons/youtube.png') }}" alt="" srcset="">
                </a>
            </div>

            <div class="contact-details">
                <!-- University Logos -->
                <div class="university-logos-wrapper">
                    <div class="university-logos">
                        @foreach ($university_logos as $logo)
                            <a href="{{ $logo['href'] }}" target="_blank" class="logo">
                                <img src="{{ asset('assets/home/images/university/' . $logo['image_path']) }}"
                                    class="logo" alt="">
                            </a>
                        @endforeach
                        @for ($i = 0; $i < 10; $i++)
                            <img src="{{ asset('assets/home/images/university/university_logo_' . ($i + 1) . '.png') }}"
                                class="logo" alt="">
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </header>