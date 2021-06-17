<div @if ($log == 1) x-data="{ login: true } " @else x-data="{ login: false } " @endif>
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

    @if (session()->has('registerd'))
        <script>
            new Toast({
                message: 'Congratulations, You are registered now, please log in and send us your lastword.',
                type: 'success'
            });

        </script>
    @endif
    <form x-show="login == false" class="mb-10" wire:submit.prevent="submit">
        <h6>Registration Form {{ $kiot_full_id }}</h6>
        <div class="mb-0 uk-form-group">
            <label class="uk-form-label"> Full Name</label>
            {{-- {{ $password}} --}}
            <div class="w-full uk-inline">
                <span class="mb-4 uk-form-icon">
                    <i class="uil-user"></i>
                </span>
                <input wire:model.defer="full_name" class="uk-input" type="text" placeholder="Ex: Natnael mulugeta">
                @error('full_name') <span class="error">{{ $message }}</span> @enderror
            </div>

        </div>

        <div class="mb-0 uk-form-group">
            <label class="uk-form-label"> Phone Number</label>
            {{-- {{ $password}} --}}
            <div class="w-full uk-inline">
                <span class="mb-4 uk-form-icon">
                    <i class="uil-phone"></i>
                </span>
                <input wire:model.defer="phone" class="uk-input" type="text" placeholder="Ex: 0911223344">
                @error('phone') <span class="error">{{ $message }}</span> @enderror
            </div>

        </div>
        
        <div class="mb-0 uk-form-group">
            <label class="uk-form-label"> Department</label>

            <div class="w-full uk-inline">
                <span class="mb-4 uk-form-icon">
                    <i class="uil-menu"></i>
                </span>
                <select wire:model.defer="dept" class="uk-input" name="" id="">
                    <option value="">Select Department</option>
                    <option value="Architucture">Architucture</option>
                    <option value="Civil">Civil</option>
                    <option value="COTM">COTM</option>
                    <option value="Electrical">Electrical</option>
                    <option value="Mechanical">Mechanical</option>
                    <option value="Chemical">Chemical</option>
                    <option value="Water">Water</option>
                    <option value="Hydraulics">Hydraulics</option>
                    <option value="Textile">Textile</option>
                    <option value="Leather">Leather</option>
                    <option value="Fashion Design">Fashion Design</option>
                    <option value="Industrial">Industrial</option>
                    <option value="Software">Software</option>
                    <option value="Computer Scince">Computer Scince</option>
                    <option value="Information Systems">Information Systems</option>
                    <option value="Information Technology">Information Technology</option>
                    <option value="Mechtronics">Mechatronics</option>
                </select>
                @error('dept') <span class="error">{{ $message }}</span> @enderror

            </div>

        </div>

        <div class="mb-0 uk-form-group">
            <label class="uk-form-label">Select your Batch</label>

            <div class="w-full uk-inline">

                <select wire:model.defer="batch">
                    <option value="">select batch</option>
                    <option value="/10">2010</option>
                    <option value="/09">2009</option>
                    <option value="/08">2008</option>
                    <option value="/07">2007</option>
                </select>
            </div>
            @error('batch') <span class="error">{{ $message }}</span> @enderror

        </div>

        <div class="mb-0 uk-form-group">
            <label class="uk-form-label">4 digit Kiot-Id Number</label>
            @if ($kiot_id)
            <p style="color: rgb(5, 143, 40)">* Your full_id will be: {{ $kiot_full_id }}</p>
            @endif
            <div class="w-full uk-inline">
                <span class="mb-4 uk-form-icon">
                    <i class="uil-user"></i>
                </span>
                <input wire:model.debounce.1000ms="kiot_id" class="uk-input" type="number" pattern="[0-9]{4}" placeholder="Ex: 2326">
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

        <div class="mb-0 uk-form-group">
            <label class="uk-form-label"> Confirm password</label>

            <div class="w-full uk-inline">
                <span class="mb-4 uk-form-icon">
                    <i class="uil-lock"></i>
                </span>
                <input wire:model.defer="password_confirmation" class="uk-input" type="password" placeholder="********">
            </div>
            @error('password_confirmation') <span class="error">{{ $message }}</span> @enderror

        </div>

        <div class="uk-flex-middle" uk-grid>
            <div class="uk-width-expand@s">
                <p @click="login = true"> <a href="#">Log in here</a></p>
            </div>
            <div style="color:darkolivegreen" class="uk-width-auto@s">

                <input type="submit" value="Register">
            </div>
        </div>

    </form>
    <livewire:login />
</div>
