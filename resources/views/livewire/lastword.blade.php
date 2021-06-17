<div>
   
     @if (session()->has('succussupdte'))
                    <script>
                        new Toast({
                        message:  'Successfully Updated!',
                        type: 'success'
                        });
                    </script>                 
                 @endif
     @if (session()->has('alreadyrecorded'))
                    <script>
                        new Toast({
                        message:  'You are trying to update your lastword with the same phrase, please schange it or leave it as it is!',
                        type: 'danger'
                        });
                    </script>                 
                 @endif
                  @if (session()->has('lastwordsent'))
                    <script>
                        new Toast({
                        message:  'Congratulations, your lastword has now reached our database!',
                        type: 'success'
                        });
                    </script>                 
                 @endif
    @if ($finalword != null)
             <form class="mb-10" wire:submit.prevent="updateLastWord">
        <br><br>
    
    <div class="mb-0 uk-form-group">
                        <label class="uk-form-label" style="color: rgb(136, 196, 39)">You already have a Lastword, but you can update it here</label>

                        <div class="w-full uk-inline">
                           
                            <textarea wire:model.lazy="lastwordtoupdate" class="uk-input" name="" id="" cols="20" rows="10" placeholder="Type your Last word Here..."></textarea>
                        </div>

                         @error('lastword') <span class="error">{{ $message }}</span> @enderror

                    </div>
                            <br>
                    <div class="uk-flex-middle" uk-grid>
                        <div class="uk-width-expand@s">
                             
                            
                        </div>
                        <div style="color:darkolivegreen" class="uk-width-auto@s">
                            <input type="submit" value="Update">
                        </div>
                    </div>

 </form>
    @else
                
    <form class="mb-10" wire:submit.prevent="insertLastWord">
        <br><br>
    
    <div class="mb-0 uk-form-group">
                        <label class="uk-form-label"> Lastword Insertion Form</label>

                        <div class="w-full uk-inline">
                           
                            <textarea wire:model.lazy="lastword" class="uk-input" name="" id="" cols="20" rows="10" placeholder="Type your Last word Here..."></textarea>
                        </div>

                         @error('lastword') <span class="error">{{ $message }}</span> @enderror

                    </div>
                            <br>
                    <div class="uk-flex-middle" uk-grid>
                        <div class="uk-width-expand@s">
                             
                            
                        </div>
                        <div style="color:darkolivegreen" class="uk-width-auto@s">
                            <input type="submit" value="Submit Last Word">
                        </div>
                    </div>

 </form>
 @endif
</div>
