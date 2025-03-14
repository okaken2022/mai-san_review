document.addEventListener("DOMContentLoaded", function () {
    const humberger = document.querySelector(".humberger");
    const header = document.querySelector("#header");
    const menuLinks = document.querySelectorAll(".navi-menu a");

    if (humberger && header) {
        humberger.addEventListener("click", function () {
            header.classList.toggle("active");
        });

        menuLinks.forEach(link => {
            link.addEventListener("click", function () {
                header.classList.remove("active");
            });
        });
    }

    // タイトルアニメーション
    const titleText = document.querySelector(".title-text");
    if (titleText) {
        const tl = gsap.timeline();
        tl.from(".title-top", {
            opacity: 0,    
            y: 50,        
            duration: 1.8, 
            ease: "power3.out",
        })
        .from(".title-sub", {
            opacity: 0,   
            y: 50,        
            duration: 1.8,
            ease: "power3.out",
        }, "-=0.6")
        .add(() => {
            titleText.classList.add("line-animate");
        }, "+=0.1");
    }

    // サービスコンテンツのフェードイン
    const serviceItems = document.querySelectorAll(".service-contents-list");
    if (serviceItems.length > 0) {
        function fadeInOnScroll() {
            serviceItems.forEach((item) => {
                const rect = item.getBoundingClientRect();
                const windowHeight = window.innerHeight;
                if (rect.top < windowHeight - 100) {
                    item.classList.add("show");
                }
            });
        }
        window.addEventListener("scroll", fadeInOnScroll);
        fadeInOnScroll();
    }

    // Splideスライダーの初期化
    const splideElement = document.querySelector(".splide");
    if (splideElement) {
        const splide = new Splide(".splide", {
            autoplay: true,
            type: "loop",
            perPage: 3,
            gap: 40,
            focus: 0,
            pauseOnHover: false,
            pauseOnFocus: false,
            interval: 3000,
            speed: 2000,
            breakpoints: {
                768: {
                    perPage: 1,
                },
            },
        }).mount();
    }
});


document.addEventListener("DOMContentLoaded", function () {
    const topButton = document.querySelector(".to-top a");
    if (topButton) {
        topButton.addEventListener("click", function (event) {
            if (topButton.hasAttribute("data-ignore-multistep")) {
                event.stopPropagation(); // 他のJSの影響を防ぐ
                window.location.href = topButton.getAttribute("href"); // 通常の遷移
            }
        });
    }
});

