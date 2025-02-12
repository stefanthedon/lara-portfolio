<template>
    <div>
        <HeaderSection />
        <ServicesSection />
        <PortfolioSection />
        <TestimonialsSection />
        <Clients />
        <FooterSection />
    </div>
</template>

<script>
import HeaderSection from "./Header.vue";
import ServicesSection from "./Services.vue";
import PortfolioSection from "./Portfolio.vue";
import TestimonialsSection from "./Testimonials.vue";
import Clients from "./Clients.vue";
import FooterSection from "./Footer.vue";

export default {
    name: "App",
    components: {
        HeaderSection,
        ServicesSection,
        PortfolioSection,
        TestimonialsSection,
        Clients,
        FooterSection,
    },
};
</script>
