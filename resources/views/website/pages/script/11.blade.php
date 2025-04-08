<script type="text/javascript">
	
        document.addEventListener('DOMContentLoaded', function() {
            var main = new Splide('#main-slider', {
                type: 'fade',
                heightRatio: 0.5,
                pagination: false,
                arrows: false,
                cover: true,
            });

            var thumbnails = new Splide('#thumbnail-slider', {
                rewind: true,
                // fixedWidth: '25%',
                // fixedHeight: 95,
                arrows: false,
                heightRatio: 0.15,
                fixedWidth: '100%',
                isNavigation: true,
                gap: 7,
                focus: 'center',
                pagination: false,
                cover: true,
                perPage: 3,
                dragMinThreshold: {
                    mouse: 4,
                    touch: 10,
                },
                breakpoints: {
                    640: {
                        fixedWidth: '25%',
                        fixedHeight: 50,
                        perPage: 4,
                    },
                },
            });

            main.sync(thumbnails);
            main.mount();
            thumbnails.mount();
        });
   
        const accordionItemHeadersAvatr11 = document.querySelectorAll(".accordion-item-headerAvatr11");

        accordionItemHeadersAvatr11.forEach(accordionItemHeader => {
            accordionItemHeader.addEventListener("click", event => {

                accordionItemHeader.classList.toggle("active");
                const accordionItemBody = accordionItemHeader.nextElementSibling;
                if (accordionItemHeader.classList.contains("active")) {
                    accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
                } else {
                    accordionItemBody.style.maxHeight = 0;
                }

            });
        });
    
        let colors = {
            'glossy-white': [
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/glossy-white/car1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/glossy-white/car2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/glossy-white/car3.webp') }}"
            ],
            'glossy-grey': [
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/glossy-grey/car1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/glossy-grey/car2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/glossy-grey/car3.webp') }}"
            ],
            'glossy-black': [
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/glossy-black/car1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/glossy-black/car2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/glossy-black/car3.webp') }}"
            ],
            'aqua': [
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/aqua/car1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/aqua/car2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/aqua/car3.webp') }}"
            ],
            'liquid-caramel': [
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/liquid-caramel/car1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/liquid-caramel/car2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/liquid-caramel/car3.webp') }}"
            ],
            'matte-white': [
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/matte-white/car1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/matte-white/car2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/matte-white/car3.webp') }}"
            ],
            'matte-grey': [
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/matte-grey/car1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/matte-grey/car2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/matte-grey/car3.webp') }}"
            ],
        };

        let interiors = {
            'nappa-red': [
                "{{ asset('website/images/home/color-variants/models-details/avatr11/interior/red/interior1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/interior/red/interior2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/interior/red/interior3.webp') }}",
            ],
            'misty-purple': [
                "{{ asset('website/images/home/color-variants/models-details/avatr11/interior/purple/interior1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/interior/purple/interior2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/interior/purple/interior3.webp') }}",
            ],
            'nappa-black': [
                "{{ asset('website/images/home/color-variants/models-details/avatr11/interior/black/interior1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/interior/black/interior2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/interior/black/interior3.webp') }}",
            ],
            'nappa-grey': [
                "{{ asset('website/images/home/color-variants/models-details/avatr11/interior/grey/interior2.jpg') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/interior/grey/interior2.jpg') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/interior/grey/interior2.jpg') }}",
            ],

        };

        let alloys = {
            'set-A': [
                "{{ asset('website/images/home/color-variants/models-details/avatr11/wheels/set-A/wheel1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/wheels/set-A/wheel2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/wheels/set-A/wheel3.webp') }}"
            ],
            'set-B': [
                "{{ asset('website/images/home/color-variants/models-details/avatr11/wheels/set-B/wheel1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/wheels/set-B/wheel2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/wheels/set-B/wheel3.webp') }}"
            ],
            'set-C': [
                "{{ asset('website/images/home/color-variants/models-details/avatr11/wheels/set-C/wheel1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/wheels/set-C/wheel2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/wheels/set-C/wheel3.webp') }}"
            ],
            'set-D': [
                "{{ asset('website/images/home/color-variants/models-details/avatr11/wheels/set-D/wheel1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/wheels/set-D/wheel2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/wheels/set-D/wheel3.webp') }}"
            ],
        };


        document.querySelectorAll("[data-trim]").forEach(button => {
            button.addEventListener("click", function() {
                document.querySelectorAll("[data-trim]").forEach(btn => btn.classList.remove("active"));
                this.classList.add("active");

                const alloyElement = document.querySelector('[data-alloy="set-D"]');
                const alloyElement1 = document.querySelector('[data-alloy="set-A"]');
                const alloyElement2 = document.querySelector('[data-alloy="set-B"]');
                const alloyElement3 = document.querySelector('[data-alloy="set-C"]');
                const matteGrey = document.getElementById("mattegrey");
                const matteWhite = document.getElementById("mattewhite");
                if (this.getAttribute('data-trim') === 'trim1') {
                    alloyElement.style.display = 'none';
                    alloyElement1.style.display = 'none';
                    alloyElement2.style.display = 'none';
                    alloyElement3.style.display = 'block';
                    if (matteGrey) matteGrey.style.display = 'none';
                    if (matteWhite) matteWhite.style.display = 'none';
                    
                } else {
                    alloyElement.style.display = 'none';
                    alloyElement3.style.display = 'none';
                    alloyElement1.style.display = 'block';
                    alloyElement2.style.display = 'block';
                    if (matteGrey) matteGrey.style.display = 'block';
                    if (matteWhite) matteWhite.style.display = 'block';

                }
            });
        });


        document.querySelectorAll("[data-color]").forEach(element => {
            element.addEventListener("click", function() {
                const color = this.getAttribute("data-color");
                exteriorChange(color);
                document.querySelectorAll("[data-color]").forEach(btn => {
                    btn.classList.remove("active");
                });
                this.classList.add("active");
            });
        });

        function exteriorChange(color) {
            $("#thumbnail-slider-list li, #main-slider-list li").removeClass("is-active");
            $('#main-slider-slide01, #thumbnail-slider-slide01').addClass('is-active');
            $('#main-slider-slide02, #thumbnail-slider-slide02').addClass('is-next');
            $('#main-slider-slide04, #thumbnail-slider-slide04').removeClass('is-active');
            $('#thumbnail-slider-list').css('transform', 'translateX(0px)');

            var mainBody = colors[color][0];
            var frontBody = colors[color][1];
            var backBody = colors[color][2];

            // main  image
            $('#main-main-body').attr('src', mainBody);
            $('#main-main-body').css('display', 'block');
            $('#main-thumb-body').attr('src', mainBody);
            $('#main-thumb-body').css('display', 'block');

            // frontside image
            $('#front-body').attr('src', frontBody);
            $('#front-body').css('display', 'block');
            $('#front-thumb-body').attr('src', frontBody);
            $('#front-thumb-body').css('display', 'block');

            // backside image
            $('#back-body').attr('src', backBody);
            $('#back-body').css('display', 'block');
            $('#back-thumb-body').attr('src', backBody);
            $('#back-thumb-body').css('display', 'block');
        }

        document.querySelectorAll("[data-interior]").forEach(element => {
            element.addEventListener("click", function() {
                const color = this.getAttribute("data-interior");
                interiorChange(color);
                document.querySelectorAll("[data-interior]").forEach(btn => {
                    btn.classList.remove("active");
                });
                this.classList.add("active");
            });
        });

        function interiorChange(color) {
            $("#main-slider").find("li").removeClass("is-active");
            $("#main-slider").find("li").removeClass("is-visible");
            $("#main-slider").find("li").removeClass("is-prev");
            $("#main-slider").find("li").removeClass("is-next");

            $("#thumbnail-slider-list").find("li").removeClass("is-active");
            $("#thumbnail-slider-list").find("li").removeClass("is-prev");
            $("#thumbnail-slider-list").find("li").removeClass("is-next");
            $('#thumbnail-slider-list').css('transform', 'translateX(-185.625px)');

            var front = interiors[color][0];
            var side = interiors[color][1];
            var back = interiors[color][2];

            $('#interior-front').attr('src', front);
            $('#interior-front').css('display', 'block');
            // thumb
            $('#interior-thumb-front').attr('src', front);
            $('#interior-thumb-front').css('display', 'block');

            $('#interior-side').attr('src', side);
            $('#interior-side').css('display', 'block');
            // thumb
            $('#interior-thumb-side').attr('src', side);
            $('#interior-thumb-side').css('display', 'block');

            $('#interior-back').attr('src', back);
            $('#interior-back').css('display', 'block');
            // thumb
            $('#interior-thumb-back').attr('src', back);
            $('#interior-thumb-back').css('display', 'block');

            // slider 
            $('#main-slider-slide04').addClass('is-active');
            $('#main-slider-slide04').addClass('is-visible');

            $('#thumbnail-slider-slide03').addClass('is-visible');
            $('#thumbnail-slider-slide04').addClass('is-active');
            $('#thumbnail-slider-slide04').addClass('is-visible');
            $('#thumbnail-slider-slide05').addClass('is-visible');
        }


        document.querySelectorAll("[data-alloy]").forEach(element => {
            element.addEventListener("click", function() {
                const type = this.getAttribute("data-alloy");
                alloyChange(type);
                document.querySelectorAll("[data-alloy]").forEach(btn => {
                    btn.classList.remove("active");
                });
                this.classList.add("active");
            });
        });


        function alloyChange(type) {
            $("#main-slider").find("li").removeClass("is-active");
            $("#thumbnail-slider-list").find("li").removeClass("is-active");
            $('#main-slider-slide01').addClass('is-active');
            $('#thumbnail-slider-slide01').addClass('is-active');
            $('#main-slider-slide04').removeClass('is-active');
            $('#thumbnail-slider-slide04').removeClass('is-active');
            $('#thumbnail-slider-list').css('transform', 'translateX(0)');

            // console.log(alloys[type][0]);
            var mainAlloy = alloys[type][0];
            var frontAlloy = alloys[type][1];
            var backAlloy = alloys[type][2];

            $('#main-alloy').attr('src', mainAlloy);
            // thumb
            $('#main-thumb-alloy').attr('src', mainAlloy);

            $('#front-alloy').attr('src', frontAlloy);
            // thumb
            $('#front-thumb-alloy').attr('src', frontAlloy);

            $('#back-alloy').attr('src', backAlloy);
            // thumb
            $('#back-thumb-alloy').attr('src', backAlloy);

        }

        document.addEventListener('DOMContentLoaded', function() {
            exteriorChange('glossy-white');
            interiorChange('nappa-red');
            alloyChange('set-A');
        });
  
</script>