import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";




gsap.from(".reveal-text", {
    duration: 1.5,
    y: 100,             // Start 100px down
    opacity: 0,         // Start invisible
    ease: "power4.inOut",
    scrollTrigger: {
        trigger: ".reveal-text",
        start: "top bottom",
        end: "bottom top",// Animation starts when the top of the text hits 80% of the viewport height
        toggleActions: "play none none reverse" // Plays on scroll down, reverses on scroll up
    },
    markers: false
});


let mm = gsap.matchMedia();

mm.add("(min-width: 1024px)", () => {
    gsap.registerPlugin(ScrollTrigger);
    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: '.pinned-container',
            start: 'top top',
            end: 'bottom top',
            pin: true,
            scrub: true,
            markers: false
        }
    });

    tl.to('.pinned-image', {
        scale: 1.2,
        ease: "power4.inOut",
        duration: 1
    })

    gsap.registerPlugin(ScrollTrigger);

    let sections = gsap.utils.toArray(".panel");

    gsap.to(sections, {
        xPercent: 0, // Keep this 0 for vertical, or -100 * (sections.length - 1) for horizontal
        ease: "none",
        scrollTrigger: {
            trigger: "#scroll-wrapper",
            pin: false,       // Set to true if you want a horizontal "fake" scroll
            scrub: 1,         // Smoothly follows the scrollbar
            snap: 1 / (sections.length - 0.001), // The magic "per container" snap
            start: "top top",
            end: "+=" + (window.innerHeight * sections.length), // Total scroll distance
        }
    });

    sections.forEach((panel, i) => {
        // Create a timeline for each specific container
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: panel,
                start: "top 40%", // Start animating when the container is 40% from the top
                toggleActions: "play none none reverse",
            }
        });

        // Animate the text inside this specific container
        tl.from(panel.querySelector('h1'), {
            y: 50,
            autoAlpha: 0,
            duration: 1,
            ease: "power3.out"
        });
    });
});

mm.add("(max-width: 1023px)", () => {

    gsap.registerPlugin(ScrollTrigger);
    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: '.pinned-container',
            start: 'top top',
            end: '76% top',
            pin: true,
            scrub: true,
            markers: false
        }
    });

    tl.to('.pinned-image', {
        scale: 0.9,
        ease: "power4.inOut",
        duration: 1
    })
});