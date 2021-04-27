import VueRouter from "vue-router";
import ExampleComponent from "./components/ExampleComponent.vue";

const routes = [
    {
        path: "/home",
        component: ExampleComponent,
        name: "home"
    }
];

const router = new VueRouter({
    routes: router
});

export default router;
