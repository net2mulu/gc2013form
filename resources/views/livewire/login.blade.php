<div>
     @if (session()->has('error'))
                    <script>
                        new Toast({
                        message:  'Wrong credential, register for an account or use the right one!',
                        type: 'danger'
                        });
                    </script>                 
                 @endif
  <form x-show="login" class="mb-10" wire:submit.prevent="check">
 <h6>Login Form</h6>
               
                     <div class="uk-form-group  mb-0">
                        <label class="uk-form-label">Kiot-Id Number</label>

                        <div class="uk-inline w-full">
                            <span class="uk-form-icon mb-4">
                                <i class="uil-user"></i>
                            </span>
                            <input wire:model="kiot_id" class="uk-input" type="text" placeholder="Ex: WOUR/2564/09">
                        </div>
                         @error('kiot_id') <span class="error">{{ $message }}</span> @enderror

                    </div>
                    <div class="uk-form-group  mb-0">
                        <label class="uk-form-label"> Password</label>

                        <div class="uk-inline w-full">
                            <span class="uk-form-icon mb-4">
                                <i class="uil-lock"></i>
                            </span>
                            <input wire:model="password" class="uk-input" type="password" placeholder="********">
                        </div>
                         @error('password') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div class="uk-flex-middle" uk-grid>
                        <div class="uk-width-expand@s">
                            <p  @click="login = false"> <a href="#">register here</a></p>
                        </div>
                        <div style="color:darkolivegreen" class="uk-width-auto@s">
                            <input type="submit" value="Login">
                        </div>
                    </div>

                </form>
</div>
