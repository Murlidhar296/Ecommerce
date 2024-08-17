// scripts.js

document.addEventListener('DOMContentLoaded', () => {
    gsap.from(".container", { duration: 1, opacity: 0, y: -50, ease: "power1.out" });
    gsap.from(".card", { duration: 1, opacity: 0, y: 50, delay: 0.5, ease: "power1.out" });
    gsap.from(".form-label", { duration: 1, opacity: 0, x: -50, delay: 1, ease: "power1.out", stagger: 0.2 });
    gsap.from(".form-control", { duration: 1, opacity: 0, x: 50, delay: 1.2, ease: "power1.out", stagger: 0.2 });
    gsap.from(".btn-primary", { duration: 1, opacity: 0, scale: 0.5, delay: 1.4, ease: "power1.out" });
});
