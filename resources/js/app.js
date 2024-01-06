import "preline";
import "@preline/tabs";
import "@preline/overlay";
import "@preline/remove-element";
import "animate.css";
// Default theme
import "@splidejs/splide/css";

// or only core styles
import "@splidejs/splide/css/core";

import Splide from "@splidejs/splide";
import { Intersection } from "@splidejs/splide-extension-intersection";

const produkCarousel = document.getElementById("produk-carousel");
if (typeof produkCarousel !== "undefined" && produkCarousel !== null) {
    new Splide("#produk-carousel", {
        perPage: 1,
        arrows: false,
        pagination: false,
        gap: "20px",
        autoWidth: true,
    }).mount({ Intersection });
}

const thumbnailCarousel = document.getElementById("thumbnail-carousel");
if (typeof thumbnailCarousel !== "undefined" && thumbnailCarousel !== null) {
    document.addEventListener("DOMContentLoaded", function () {
        var main = new Splide("#main-carousel", {
            type: "fade",
            rewind: true,
            pagination: false,
            arrows: false,
            fixedWidth: "100%",
            heightRatio: 0.71,
        });

        var thumbnails = new Splide("#thumbnail-carousel", {
            fixedWidth: 100,
            fixedHeight: 60,
            focus: "center",
            gap: 10,
            rewind: true,
            pagination: false,
            isNavigation: true,
        });

        main.sync(thumbnails);
        main.mount();
        thumbnails.mount();
    });
}

const chipCarousel = document.getElementById("chip-carousel");
if (typeof chipCarousel !== "undefined" && chipCarousel !== null) {
    new Splide("#chip-carousel", {
        autoWidth: true,
        arrows: false,
        pagination: false,
        gap: "8px",
    }).mount();
}

const productImage = document.getElementById("product-image");
if (typeof productImage !== "undefined" && productImage !== null) {
    new Splide(productImage, {
        type: "fade",
        focus: "center",
    }).mount();
}
