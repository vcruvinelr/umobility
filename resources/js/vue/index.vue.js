const app = new Vue({
    el: '#main',
    components: {},
    data: {
        map: {
            apiTileLayer: 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            accessToken: 'pk.eyJ1IjoidmNydXZpbmVsciIsImEiOiJja2J4dmk4cmYwODdxMzRxYjAxZWtveHB1In0.Qf0Klio18II-v_9amGmkIA',
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
        }
    },
    computed: {
        myMap: () => {
            var myMap = L.map('mapid').setView(
                [51.505, -0.09], 
                13
            );
            return myMap
        },
    },
    methods: {
        initMap: function() {
            L.tileLayer(this.map.apiTileLayer, {
                attribution: this.map.attribution,
                maxZoom: this.map.maxZoom,
                tileSize: this.map.tileSize,
                zoomOffset: this.map.zoomOffset,
            }).addTo(this.myMap);
        }
    },
    mounted() {
        this.initMap();
    }
});
