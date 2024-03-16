!(function () {
    "use strict";
    let e = (e, t = !1) => (
            (e = e.trim()),
            t ? [...document.querySelectorAll(e)] : document.querySelector(e)
        ),
        t = (t, o, i, a = !1) => {
            let l = e(o, a);
            l &&
                (a
                    ? l.forEach((e) => e.addEventListener(t, i))
                    : l.addEventListener(t, i));
        },
        o = e("#navbar .scrollto", !0),
        i = () => {
            let t = window.scrollY + 200;
            o.forEach((o) => {
                if (!o.hash) return;
                let i = e(o.hash);
                i &&
                    (t >= i.offsetTop && t <= i.offsetTop + i.offsetHeight
                        ? o.classList.add("active")
                        : o.classList.remove("active"));
            });
        };
    window.addEventListener("load", i),
        ((e, t) => {
            e.addEventListener("scroll", t);
        })(document, i);
    let a = (t) => {
            let o = e("#header").offsetHeight,
                i = e(t).offsetTop;
            window.scrollTo({ top: i - o, behavior: "smooth" });
        },
        l = (e("#header"), e("#hero-carousel-indicators"));
    e("#heroCarousel .carousel-item", !0).forEach((e, t) => {
        l.innerHTML +=
            0 === t
                ? "<li data-bs-target='#heroCarousel' data-bs-slide-to='" +
                  t +
                  "' class='active'></li>"
                : "<li data-bs-target='#heroCarousel' data-bs-slide-to='" +
                  t +
                  "'></li>";
    }),
        t("click", ".mobile-nav-toggle", function (t) {
            e("#navbar").classList.toggle("navbar-mobile"),
                this.classList.toggle("bi-list"),
                this.classList.toggle("bi-x");
        }),
        t(
            "click",
            ".navbar .dropdown > a",
            function (t) {
                e("#navbar").classList.contains("navbar-mobile") &&
                    (t.preventDefault(),
                    this.nextElementSibling.classList.toggle(
                        "dropdown-active"
                    ));
            },
            !0
        ),
        t(
            "click",
            ".scrollto",
            function (t) {
                if (e(this.hash)) {
                    t.preventDefault();
                    let o = e("#navbar");
                    if (o.classList.contains("navbar-mobile")) {
                        o.classList.remove("navbar-mobile");
                        let t = e(".mobile-nav-toggle");
                        t.classList.toggle("bi-list"),
                            t.classList.toggle("bi-x");
                    }
                    a(this.hash);
                }
            },
            !0
        ),
        window.addEventListener("load", () => {
            window.location.hash &&
                e(window.location.hash) &&
                a(window.location.hash);
        }),
        window.addEventListener("load", () => {
            let o = e(".portfolio-container");
            if (o) {
                let i = new Isotope(o, {
                        itemSelector: ".portfolio-item",
                        layoutMode: "fitRows",
                    }),
                    a = e("#portfolio-flters li", !0);
                t(
                    "click",
                    "#portfolio-flters li",
                    function (e) {
                        e.preventDefault(),
                            a.forEach(function (e) {
                                e.classList.remove("filter-active");
                            }),
                            this.classList.add("filter-active"),
                            i.arrange({
                                filter: this.getAttribute("data-filter"),
                            }),
                            i.on("arrangeComplete", function () {
                                AOS.refresh();
                            });
                    },
                    !0
                );
            }
        }),
        GLightbox({ selector: ".portfolio-lightbox" }),
        new Swiper(".portfolio-details-slider", {
            speed: 400,
            autoplay: { delay: 5e3, disableOnInteraction: !1 },
            pagination: {
                el: ".swiper-pagination",
                type: "bullets",
                clickable: !0,
            },
        }),
        window.addEventListener("load", () => {
            AOS.init({
                duration: 1e3,
                easing: "ease-in-out",
                once: !0,
                mirror: !1,
            });
        }),
        new PureCounter();
})();
