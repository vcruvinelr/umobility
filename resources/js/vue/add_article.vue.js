import addArticles from '../components/AddArticle.vue';

new Vue({
    el: '#article',
    components: {
        addArticles
    },
    mounted(){
        console.log('Ok, app add article')
    }
});
