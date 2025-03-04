import "./bootstrap";
import L from "leaflet";
import "leaflet/dist/leaflet.css";
import Swiper from "swiper";
import { Navigation, Pagination } from "swiper/modules";
import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/navigation";
import $ from "jquery";
import "lightbox2/dist/js/lightbox.js";
import "lightbox2/dist/css/lightbox.css";

if (window.location.pathname === "/") {
    const swiper = new Swiper(".mySwiper", {
        modules: [Pagination],
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        loop: true,
    });

    document.querySelectorAll(".nav-link").forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault();

            const targetId = this.getAttribute("href").substring(1);
            const targetElement = document.getElementById(targetId);

            const offset = 110; // Ganti sesuai tinggi navbar kamu
            const elementPosition = targetElement.getBoundingClientRect().top;
            const offsetPosition =
                elementPosition + window.pageYOffset - offset;

            window.scrollTo({
                top: offsetPosition,
                behavior: "smooth", // untuk animasi scroll yang halus
            });
        });
    });
}

// Sidebar
if (window.location.pathname !== "/hotel-details") {
    const sidebarToggler = document.getElementById("hamburger");
    const sidebar = document.getElementById("sidebar");
    const closeSidebar = document.getElementById("close-sidebar");
    sidebarToggler.addEventListener("click", () =>
        sidebar.classList.toggle("hidden")
    );
    closeSidebar.addEventListener("click", () =>
        sidebar.classList.add("hidden")
    );
}

// Pannellum
if (window.location.pathname === "/location") {
    pannellum.viewer("panorama", {
        type: "equirectangular",
        panorama: "/assets/images/panorama.jpg",
        autoLoad: true,
    });
}

// Map Leaflet
document.addEventListener("DOMContentLoaded", () => {
    const mapElements = document.querySelectorAll("#map");
    mapElements.forEach((mapElement) => {
        const map = L.map(mapElement).setView(
            [-8.079458617240995, 113.69268118251553],
            15
        );
        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png").addTo(
            map
        );
        L.marker([-8.079458617240995, 113.69268118251553]).addTo(map);
    });
});

// Swiper
if (window.location.pathname === "/hotel-details") {
    const swiper = new Swiper(".swiper-container", {
        modules: [Pagination],
        loop: true,
        slidesPerView: 1,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    const swiper2 = new Swiper(".gallery_container", {
        modules: [Navigation],
        loop: true,
        slidesPerView: 2,
        centeredSlides: true,
        spaceBetween: 20,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            1024: {
                slidesPerView: 3,
            },
            768: {
                slidesPerView: 3,
            },
            640: {
                slidesPerView: 2,
            },
        },
    });
}
