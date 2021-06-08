<div     @if($log == 1) x-data="{ login: true } " @else x-data="{ login: false } "  @endif >

            @if (session()->has('registerd'))
                    <script>
                        new Toast({
                        message:  'Congratulations, You are registered now, please log in and send us your lastword.',
                        type: 'success'
                        });
                    </script>                 
                 @endif
        <form x-show="login == false" class="mb-10" wire:submit.prevent="submit">
                    <h6>Registration Form</h6>
                    <div class="uk-form-group  mb-0">
                        <label class="uk-form-label"> Full Name</label>
                        {{-- {{ $password}} --}}
                        <div class="uk-inline w-full">
                            <span class="uk-form-icon mb-4">
                                <i class="uil-user"></i>
                            </span>
                            <input wire:model="full_name" class="uk-input" type="text" placeholder="Ex: Natnael mulugeta">
                             @error('full_name') <span class="error">{{ $message }}</span> @enderror
                        </div>

                    </div>
                    <div class="uk-form-group  mb-0">
                        <label class="uk-form-label"> Department</label>
                    
                        <div class="uk-inline w-full">
                            <span class="uk-form-icon mb-4">
                                <i class="uil-menu"></i>
                            </span>
                            <select wire:model="dept" class="uk-input" name="" id="">
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
                                <option value="Mechtronics">Mechtronics</option>
                            </select>
                           @error('dept') <span class="error">{{ $message }}</span> @enderror

                        </div>
                    
                    </div>
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

                    <div class="uk-form-group  mb-0">
                        <label class="uk-form-label"> Confirm password</label>

                        <div class="uk-inline w-full">
                            <span class="uk-form-icon mb-4">
                                <i class="uil-lock"></i>
                            </span>
                            <input wire:model="password_confirmation" class="uk-input" type="password" placeholder="********">
                        </div>
                         @error('password_confirmation') <span class="error">{{ $message }}</span> @enderror

                    </div>

                    <div class="uk-flex-middle" uk-grid>
                        <div class="uk-width-expand@s">
                            <p  @click="login = true"> <a href="#">Log in here</a></p>
                        </div>
                        <div style="color:darkolivegreen" class="uk-width-auto@s">
                            <input type="submit" value="Register">
                        </div>
                    </div>

                </form>
                <livewire:login />
</div>
