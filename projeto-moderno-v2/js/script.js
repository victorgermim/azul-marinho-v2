document.addEventListener('DOMContentLoaded', () => {
    gsap.registerPlugin(ScrollTrigger);

    // Header Scroll Effect
    const header = document.getElementById('main-header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('header-scrolled');
            header.classList.remove('py-4');
            header.classList.add('py-2');
        } else {
            header.classList.remove('header-scrolled');
            header.classList.remove('py-2');
            header.classList.add('py-4');
        }
    });

    // Hero Container Scroll Animation
    // Replicating the logic: rotateX 20 -> 0, scale 1.05 -> 1, translate 0 -> -100 (but adapted)
    
    const container = document.getElementById('scroll-container');
    const card = document.getElementById('scroll-card');
    
    // Initial State
    gsap.set(card, {
        rotateX: 20,
        scale: 1.05,
        y: 0,
        boxShadow: "0 0 #0000004d, 0 9px 20px #0000004a, 0 37px 37px #00000042, 0 84px 50px #00000026, 0 149px 60px #0000000a, 0 233px 65px #00000003"
    });

    gsap.to(card, {
        scrollTrigger: {
            trigger: "#hero",
            start: "top top",
            end: "bottom top",
            scrub: 1, // Smooth scrubbing
            pin: false,
        },
        rotateX: 0,
        scale: 1,
        y: -50, // Slight upward movement
        boxShadow: "0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)", // Standard shadow
        ease: "power1.out"
    });

    // Header Text Parallax
    gsap.to(".header-animate", {
        scrollTrigger: {
            trigger: "#hero",
            start: "top top",
            end: "bottom top",
            scrub: 1
        },
        y: -100,
        opacity: 0
    });


    // General Scroll Reveal Animations
    
    // Fade Up
    gsap.utils.toArray('.scroll-reveal').forEach(element => {
        gsap.from(element, {
            scrollTrigger: {
                trigger: element,
                start: "top 80%",
                toggleActions: "play none none reverse"
            },
            y: 50,
            opacity: 0,
            duration: 1,
            ease: "power3.out"
        });
    });

    // Fade Left
    gsap.utils.toArray('.scroll-reveal-left').forEach(element => {
        gsap.from(element, {
            scrollTrigger: {
                trigger: element,
                start: "top 80%",
                toggleActions: "play none none reverse"
            },
            x: -50,
            opacity: 0,
            duration: 1,
            ease: "power3.out"
        });
    });

    // Fade Right
    gsap.utils.toArray('.scroll-reveal-right').forEach(element => {
        gsap.from(element, {
            scrollTrigger: {
                trigger: element,
                start: "top 80%",
                toggleActions: "play none none reverse"
            },
            x: 50,
            opacity: 0,
            duration: 1,
            ease: "power3.out"
        });
    });

    // Staggered Fade Up (for grids)
    gsap.utils.toArray('.scroll-reveal-up').forEach((element, i) => {
        gsap.from(element, {
            scrollTrigger: {
                trigger: element,
                start: "top 85%",
                toggleActions: "play none none reverse"
            },
            y: 50,
            opacity: 0,
            duration: 0.8,
            delay: i * 0.1, // This might need adjustment if elements are not in same container, but works for individual triggers
            ease: "back.out(1.7)"
        });
    });

    // FAQ Accordion
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        item.addEventListener('click', () => {
            const content = item.querySelector('.faq-content');
            const icon = item.querySelector('span');
            
            // Close others
            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.querySelector('.faq-content').classList.add('hidden');
                    otherItem.querySelector('span').innerText = '+';
                    otherItem.querySelector('span').classList.remove('rotate-45');
                }
            });

            // Toggle current
            content.classList.toggle('hidden');
            if (!content.classList.contains('hidden')) {
                icon.innerText = '+'; // Keep plus but rotate
                icon.classList.add('rotate-45');
                
                // Animate open
                gsap.from(content, {
                    height: 0,
                    opacity: 0,
                    duration: 0.3,
                    ease: "power2.out"
                });
            } else {
                icon.classList.remove('rotate-45');
            }
        });
    });

});
