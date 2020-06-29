import addArticles from '../components/AddArticle.vue';

new Vue({
    el: '#article',
    data: {
        output: ''
    },
    components: {
        addArticles
    },
    mounted(){
        console.log('Ok, app add article')
    }
});
