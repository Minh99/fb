import serviceHTTP from "../service/serviceHTTP.js";
import Swal from 'sweetalert2'
// import PulseLoader from 'vue-spinner/src/PulseLoader.vue'

Vue.createApp({
    data(){
        return {
            author: 'Phạm Minh Châu',
            formData: {
                course: '1',
                vietnamese: '',
                japanese: '',
                wr_answer1: '',
                wr_answer2: '',
                wr_answer3: '',
                image: '',
                imageUpload: null
            },
            resetFormData: {
                course: '1',
                vietnamese: '',
                japanese: '',
                wr_answer1: '',
                wr_answer2: '',
                wr_answer3: '',
                image: '',
                imageUpload: null
            },
            formError: {},
        }
    },
    methods: {
    },
    mounted(){
    },
    components: {
    }
}).mount('#ctlAuth');
