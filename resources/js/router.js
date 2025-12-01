import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from './components/Home.vue';
import Category from './components/Category.vue';
import NewsDetail from './components/NewsDetail.vue';

Vue.use(VueRouter);

const routes = [
    {
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path: '/category',
        name: 'category',
        component: Category
    },
    {
        path: '/news/:id?',
        name: 'news',
        component: NewsDetail
    }
];

const router = new VueRouter({
    mode: 'history',
    base: '/',
    routes
});

export default router;

