<div>
    <div wire:loading.delay>
        <div
            style="display: flex; justify-content: center; align-items: center;
        background-color: rgba(0, 0, 0, 0.603); position: fixed; top: 0px; left: 0px; z-index: 9999; width:100%; height:100%;">
            <div class="la-ball-clip-rotate-pulse">
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    @if (session()->has('error'))
        <script>
            new Toast({
                message: 'Wrong credential, register for an account or use the right one!',
                type: 'danger'
            });

        </script>
    @endif
    <form x-show="login" class="mb-10" wire:submit.prevent="check">
        <h6>Login Form</h6>

        <div class="mb-0 uk-form-group">
            <label class="uk-form-label">Your full Kiot-Id number</label>

            <div class="w-full uk-inline">
                <span class="mb-4 uk-form-icon">
                    <i class="uil-user"></i>
                </span>
                <input wire:model.lazy="kiot_id" class="uk-input" type="text" placeholder="Ex: WOUR/2564/09">
            </div>
            @error('kiot_id') <span class="error">{{ $message }}</span> @enderror

        </div>
        <div class="mb-0 uk-form-group">
            <label class="uk-form-label"> Password</label>

            <div class="w-full uk-inline">
                <span class="mb-4 uk-form-icon">
                    <i class="uil-lock"></i>
                </span>
                <input wire:model.defer="password" class="uk-input" type="password" placeholder="********">
            </div>
            @error('password') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="uk-flex-middle" uk-grid>
            <div class="uk-width-expand@s">
                <p @click="login = false"> <a href="#">register here</a></p>
            </div>
            <div style="color:darkolivegreen" class="uk-width-auto@s">
                <input type="submit" value="Login">
            </div>
        </div>

    </form>
</div>
