// import { createApp } from "vue";
// import Portfolio from "./components/Portfolio.vue";

// createApp({
//     components: {
//         Portfolio,
//     },
// }).mount("#app");

// main Vue app (resources/js/app.js)
import App from "@/components/App.vue";
import { library } from "@fortawesome/fontawesome-svg-core";
import {
    faCode,
    faMobileAlt,
    faPalette,
} from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import { createApp } from "vue";
import Clients from "./components/Clients.vue";
import Footer from "./components/Footer.vue";
import Header from "./components/Header.vue";
import Portfolio from "./components/Portfolio.vue";
import Services from "./components/Services.vue";
import Testimonials from "./components/Testimonials.vue";
import "./smoothScroll.js";

library.add(faCode, faMobileAlt, faPalette);

createApp(App).mount("#app");

app.component("HeaderSection", Header);
app.component("font-awesome-icon", FontAwesomeIcon);
app.component("ServicesSection", Services);
app.component("PortfolioSection", Portfolio);
app.component("TestimonialsSection", Testimonials);
app.component("ClientsSection", Clients);
app.component("FooterSection", Footer);

app.mount("#app");
